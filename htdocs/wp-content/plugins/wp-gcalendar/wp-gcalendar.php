<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/*
Plugin Name: WP GCalendar
Plugin URI: http://www.eurocizia.com/plugins
Description: Wordpress plugin to manage your google calendar events.
Author: Eurocizia team
Version: 1.1
Author URI: http://www.eurocizia.com/
 */
function wpgc_infos(){
	global $wpdb;
	$table_name = $wpdb->prefix . "api_setting";
	$settings = $wpdb->get_row('select * from ' . $table_name );?>
	<div id="settings" priority = "<?php echo esc_attr($settings->priority); ?>" clientID = "<?php echo esc_attr($settings->clientID); ?>" calendarId = "<?php echo esc_attr($settings->calendarID); ?>" root="<?php echo plugin_dir_url( __FILE__ ); ?>" hidden></div>
<?php 
}
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = admin_url( 'admin.php?page=google-calendar-plg');
$url2 = admin_url( 'admin.php?page=google-calendar-event');
$url3 = admin_url( 'admin.php?page=google-calendar-settings');
add_action( 'wpgc_top', 'wpgc_infos');
if($url == $actual_link){
	do_action( 'wpgc_top');
}
function wpgc_calendar_activate()
{
	global $wpdb;
	
	$table_name = $wpdb->prefix . "events";
	
	if ( $wpdb->get_var('SHOW TABLES LIKE ' . $table_name) != $table_name )
	{
		$sql = 'CREATE TABLE ' . $table_name . '( 
				kind VARCHAR (255),
				etag VARCHAR (255),
				id VARCHAR (255) NOT NULL,
				status VARCHAR (255),
				htmlLink VARCHAR (255),
				created DATETIME,
				updated DATETIME,
				summary VARCHAR (255),
				description TEXT,
				location VARCHAR (255),
				colorId VARCHAR (255),
				start_Date DATE,
				start_Time TIME,
				start_TimeZone VARCHAR (255),
				end_Date DATE,
				end_Time TIME,
				attendees TEXT,
				notification VARCHAR (255),
				time INTEGER(10),
				end_TimeZone VARCHAR (255),
				localID INTEGER(10) UNSIGNED AUTO_INCREMENT,
				CalenderID VARCHAR (255),
				PRIMARY KEY  (localID))';

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
		
		add_option('events_database_version','1.0');
	}

	if($wpdb->query("SHOW TABLES LIKE '$table_name'")){
		if (($tablefields = $wpdb->get_results( 'SHOW COLUMNS FROM '.$table_name, OBJECT )) == TRUE) {
            $columns = count($tablefields);
            $field_array = array();
            for ($i = 0; $i < $columns; $i++) {
                $fieldname = $tablefields[$i]->Field;
                $field_array[] = $fieldname;
            }
        }


		if (!in_array('attendees', $field_array))
		{
		$wpdb->query('ALTER TABLE '. $table_name .' ADD attendees TEXT');
		}
		if (!in_array('notification', $field_array))
		{
		$wpdb->query('ALTER TABLE '. $table_name .' ADD notification VARCHAR(250)');
		}


		$wpdb->query('ALTER TABLE '. $table_name .' MODIFY description TEXT;');
	}

	$table_setting = $wpdb->prefix . "api_setting";
	if ( $wpdb->get_var('SHOW TABLES LIKE ' . $table_setting) != $table_setting )
	{
		$sql = 'CREATE TABLE ' . $table_setting . '( 
				id_setting INTEGER(10) UNSIGNED AUTO_INCREMENT,
				clientID VARCHAR (255),
				calendarID VARCHAR (255),
				defaultDate DATE,
				priority VARCHAR (255),
				PRIMARY KEY  (id_setting) )';
		
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
		add_option('api_setting_database_version','1.0');
	}

}
register_activation_hook(__FILE__,'wpgc_calendar_activate');


	add_action( 'admin_enqueue_scripts', 'wpgc_styles' );
	add_action( 'admin_enqueue_scripts', 'wpgc_scripts' );	


function wpgc_styles( ) {

    wp_enqueue_style( 'wp-gc-style', plugins_url('css/wp-gc-style.css', __FILE__));
    wp_enqueue_style( 'fullcalendar', plugins_url('css/fullcalendar.css', __FILE__));
}
function wpgcf_styles( ) {
    wp_enqueue_style( 'wp-gc-style-frotend', plugins_url('css/wp-gc-style-frotend.css', __FILE__));
    wp_enqueue_style( 'fullcalendar', plugins_url('css/fullcalendar.css', __FILE__));
}

function wpgc_scripts() {
	wp_enqueue_script('jquery');
    wp_enqueue_script( 'moment.min', plugins_url('js/moment.min.js', __FILE__) );
    wp_enqueue_script( 'fullcalendar.min', plugins_url('js/fullcalendar.min.js', __FILE__) );
}
function wpgcf_scripts() {
	wp_enqueue_script('jquery');
    wp_enqueue_script( 'moment.min', plugins_url('js/moment.min.js', __FILE__) );
    wp_enqueue_script( 'fullcalendar.min', plugins_url('js/fullcalendar.min.js', __FILE__) );
}

add_action('wp_head','wpgcf_styles');
add_action('wp_footer','wpgcf_scripts');
function wpgcf_plugin_menu()
{
	$root = plugin_dir_url( __FILE__ );
	add_menu_page('calendar Settings','WP GCalendar', 'manage_options', 'google-calendar-plg', 'wpgc_calendar_page', $root.'img/calendar.png');
	add_submenu_page( 'google-calendar-plg', 'calendar Settings' . ' All Events', ' All Events', 'manage_options','google-calendar-plg', 'wpgc_calendar_page');
	add_submenu_page('google-calendar-plg','Settings', 'Settings', 'manage_options', 
					'google-calendar-settings', 'wpgc_settings');
	add_submenu_page('google-calendar-plg','Documentation', 'Documentation', 'manage_options', 
					'wpgc-documentation', 'wpgc_documentation');
	
}
add_action('admin_menu', 'wpgcf_plugin_menu');
/* admin interface */
function wpgc_calendar_page()
{
global $wpdb;
$table_name = $wpdb->prefix . "api_setting";
$settings = $wpdb->get_row('select * from ' . $table_name );
if(!$settings){ ?>
<h2>Settings required ! </h2>
<p><a href="<?php echo admin_url('admin.php?page=google-calendar-settings'); ?>">Go to settings</a></p>
<?php exit(); } ?>

	
    <script src="https://apis.google.com/js/client.js">
    </script>
<?php
	global $wpdb;
	$table_name = $wpdb->prefix . 'events';
	$events = $wpdb->get_results('select * from ' . $table_name . ' where start_Date >= "'.date('Y-m-d').'" ORDER BY start_Date ASC' );
	$url = admin_url( 'admin.php?page=google-calendar-event');
	$url2 = admin_url( 'admin.php?page=google-calendar-plg');
	if(isset($_GET['id_e'])){
		$ev = $wpdb->get_row('select * from ' . $table_name . ' where id = '. $_GET['id_e'] );
		
	}
	?>
	<div class="wrap">
	<?php screen_icon(); ?>

	<h2>List of upcoming events</h2>
		<p>
		 	<button onclick="handleAuthClick(event)" class="wpgc-mdl-button" />Synchronize</button>
		</p>
		<div id="res">
			<table class="widefat fixed wpgc-table" cellspacing="0">
				<thead>
					<tr>
						<th id="columnname" class="manage-column column-columnname" scope="col">Title</th>
						<th id="columnname" class="manage-column column-columnname" scope="col">Location</th>
						<th id="columnname" class="manage-column column-columnname" scope="col">Start date</th>
						<th id="columnname" class="manage-column column-columnname" scope="col">End date</th>
						<th id="columnname" class="manage-column column-columnname" scope="col">Description</th>
						<th id="columnname" class="manage-column column-columnname" scope="col">Status</th>
						<th id="columnname" class="manage-column column-columnname" scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $ev = array(); ?>
					<?php foreach ($events as $event) { ?>
					<tr class="alternate">
						<td class="column-columnname" scope="row"><?php echo esc_attr($event->summary) ?></td>
						<td class="column-columnname"><?php echo esc_attr($event->location) ?></td>
						<td class="column-columnname"><?php echo esc_attr($event->start_Date).' '.esc_attr($event->start_Time) ?></td>
						<td class="column-columnname"><?php echo esc_attr($event->end_Date).' '.esc_attr($event->end_Time) ?></td>
						<td class="column-columnname"><?php echo esc_attr($event->description) ?></td>
						<td class="column-columnname"><?php echo esc_attr($event->status) ?></td>
						<td class="column-columnname">
							<a href="<?php echo $url2. '&d='. esc_attr($event->localID) ?>" onclick="return confirm('Are you sure you want to delete this event?');"><span class="dashicons dashicons-trash"></span></a>
						</td>
					</tr>
					<?php 
					if($event->start_Date != '0000-00-00'){
					if(($event->start_Time != NULL) && ($event->end_Time != NULL)){
						$ev[] = array(
							'title' => "$event->summary",
							'start' => $event->start_Date.'T'.$event->start_Time,
							'end' => $event->end_Date.'T'.$event->end_Time,
							'allDay' => false
							); 
					}else{
						$ev[] = array(
							'title' => "$event->summary",
							'start' => $event->start_Date,
							'end' => $event->end_Date
							); 
					}
					
						} ?>
					<?php } ?>	
					<?php
						$e = json_encode($ev);
					 ?>
				</tbody>
			</table>
			<div style="display:none" class="eventJson" defaultDate = "<?php echo date('Y-m-d'); ?>" data='<?php echo $e; ?>'></div>
		
		<script>

			jQuery(document).ready(function() {
				
				var ev = eval(jQuery("div.eventJson").attr("data"));
				var default_Date = jQuery("div.eventJson").attr("defaultDate");
				
				jQuery('#calendar').fullCalendar({
					
					header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
					},
					defaultDate: default_Date,
					selectable: false,
					selectHelper: false,
					select: function(start, end) {
						var title = prompt('Event Title:');
						var eventData;
						if (title) {
							eventData = {
								title: title,
								start: start,
								end: end
							};
							jQuery('#calendar').fullCalendar('renderEvent', eventData, true);
						}
						jQuery('#calendar').fullCalendar('unselect');
					},
					editable: false,
					eventLimit: false,
					events: ev
					});
					
				});

		</script>
		<div id='calendar'></div>
		</div>
	</div>
	<?php
}

function wpgc_settings()
{ 
	global $wpdb; 
	$table_name = $wpdb->prefix . 'api_setting';
	if($_POST){
		$id_setting = intval($_POST['id_setting']);
		$clientID = sanitize_text_field($_POST['clientID']);
		$calendarID = sanitize_text_field($_POST['calendarID']);
		if(isset($_POST['id_setting'])){
			$data = array(
				'id_setting' => $id_setting,
				'clientID' => $clientID,
				'calendarID' => $calendarID
				);
			$wpdb->update($table_name,$data,array( 'id_setting' => $id_setting ));
		}else{
			$data = array(
				'clientID' => $clientID,
				'calendarID' => $calendarID
				);
			$wpdb->insert($table_name,$data);
		}
		
	}
	$settings = $wpdb->get_row('select * from ' . $table_name );
	?>
	<div class="wrap">
	<form action="" method="post" id="insert-event">
	<?php if($settings){ ?>
	<input type="hidden" id="id_setting" name="id_setting" 
	value="<?php if($settings){ echo esc_attr($settings->id_setting); } ?>" />
	<?php } ?>
	
	<table class="wpgc-setting-table">
		<tr>
			<td colspan="2" class="entry-view-field-name">Settings</td>
		</tr>
		<tr>
			<td>
				<h3><label for="clientID">client ID </label> </h3>
			</td>
			<td>
				<input type="text" id="clientID" class="input" name="clientID" 
				value="<?php if($settings){ echo esc_attr($settings->clientID); } ?>"/>
			</td>
		</tr>
		<tr>
			<td>
				<h3><label for="calendarID">calendar ID </label> </h3>
			</td>
			<td>
				<input type="text" id="calendarID" class="input" name="calendarID" 
				value="<?php if($settings){ echo esc_attr($settings->calendarID); } ?>"/>
			</td>
		</tr>
		<tr>
			
			<td colspan="2">
				<p>
					<input type="submit" name="submit" value="Save" class="wpgc-mdl-button" style="float:right; margin: 0 20px 10px 0" />
					<a href="<?php echo admin_url( 'admin.php?page=google-calendar-plg'); ?>" class="wpgc-mdl-button" style="float:right; margin: 0 20px 10px 0"/>Cancel</a>
				</p>

			</td>
		</tr>
	</table>
	
	<?php wp_nonce_field('calendar_event'); ?>
	</form>
	</div>
<?php
}

if(isset($_GET['d'])){
	function wpgc_calendar_delete_event()
	{
		global $wpdb;
		$table_name = $wpdb->prefix . 'events';
		$d = intval($_GET['d']);
		$wpdb->delete( $table_name, array( 'localID' => $d ), array( '%d' ) );
		$url = admin_url( 'admin.php?page=google-calendar-plg');
		?>
		<meta http-equiv="refresh" content="0;URL='<?php echo $url; ?>'" />
		<?php
	}
	add_action('admin_init','wpgc_calendar_delete_event');
	add_action( 'wpgc_delete_gc', 'wpgc_calendar_delete_event');
	do_action( 'wpgc_delete_gc');
}

function wpgc_my_calendar()
{	
	global $wpdb;
	$table_name = $wpdb->prefix . 'events';
	$events = $wpdb->get_results('select * from ' . $table_name . ' where start_Date >= "'.date('Y-m-d').'" ORDER BY start_Date ASC' );
	$table_namee = $wpdb->prefix . "api_setting";
	$settings = $wpdb->get_row('select * from ' . $table_namee );
	$ev = array();
	foreach ($events as $event) {

	if($event->start_Date != '0000-00-00'){
		if(($event->start_Time != NULL) && ($event->end_Time != NULL)){
			$ev[] = array(
				'title' => "$event->summary",
				'start' => $event->start_Date.'T'.$event->start_Time,
				'end' => $event->end_Date.'T'.$event->end_Time,
				'allDay' => false
				); 
		}else{
			$ev[] = array(
				'title' => "$event->summary",
				'start' => $event->start_Date,
				'end' => $event->end_Date
				); 
		}
		
			} 
	} 	
	$e = json_encode($ev);
	?>
	<div style="display:none" class="eventJson" defaultDate="<?php echo date('Y-m-d'); ?>" data='<?php echo $e; ?>'></div>
	<script>
	jQuery(document).ready(function() {
		
		var ev = eval(jQuery("div.eventJson").attr("data"));
		var defaultDate = jQuery("div.eventJson").attr("defaultDate");
		jQuery('#calendar').fullCalendar({
			header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                    },
                    defaultDate: defaultDate,
                    selectable: false,
                    selectHelper: false,
                    select: function(start, end) {
                        var title = prompt('Event Title:');
                        var eventData;
                        if (title) {
                            eventData = {
                                title: title,
                                start: start,
                                end: end
                            };
                            jQuery('#calendar').fullCalendar('renderEvent', eventData, true); 
                        }
                        jQuery('#calendar').fullCalendar('unselect');
                    },
                    editable: false,
                    eventLimit: false,
                    events: ev
		});
	});
	</script>
<?php
	return "<div id='calendar'></div>";	
}	
add_shortcode('wpgc-calendar','wpgc_my_calendar');



add_action( 'admin_footer', 'my_action_javascript' );

function my_action_javascript() { ?>
	<script type="text/javascript" >
    var CLIENT_ID=jQuery("div#settings").attr("clientID");var calendarId=jQuery("div#settings").attr("calendarId");var rooturl=jQuery("div#settings").attr("root");var priority=jQuery("div#settings").attr("priority");var SCOPES=["https://www.googleapis.com/auth/calendar"];var checkAuth=function(){gapi.auth.authorize({'client_id':CLIENT_ID,'scope':SCOPES.join(' '),'immediate':true},handleAuthResult);}
	function handleAuthResult(authResult){var authorizeDiv=document.getElementById('authorize-div');if(authResult&&!authResult.error){loadCalendarApi();}else{}}
	function handleAuthClick(event){gapi.auth.authorize({client_id:CLIENT_ID,scope:SCOPES,immediate:false},handleAuthResult);return false;}
	function loadCalendarApi(){gapi.client.load('calendar','v3',listUpcomingEvents);}
	function listUpcomingEvents(){jQuery('#res').html('<img src="'+rooturl+'img/loading.gif" />');window.setTimeout(evlist,3000);}
	var evlist=function(){var request=gapi.client.calendar.events.list({'calendarId':calendarId,'timeMin':(new Date()).toISOString(),'showDeleted':false,'singleEvents':true,'maxResults':10,'orderBy':'startTime'});request.execute(function(resp){var events=resp.items;console.log(events);var ajaxURL=rooturl+'includes/result.php';var data={events};var data={'action':'wpgc_events_action','result':events};jQuery.post(ajaxurl,data,function(response){jQuery('#res').html(response);});});}
	</script> 
<?php
}

add_action( 'wp_ajax_wpgc_events_action', 'wpgc_events_action_callback' );

function wpgc_events_action_callback() {
	global $wpdb;
	$data   =   $_POST["result"];
    $table_name = $wpdb->prefix . 'events';
    $wpdb->delete( $table_name, array( 'id' => "" ) );
    $tablee_name = $wpdb->prefix . "api_setting";
    $settings = $wpdb->get_row('select * from ' . $tablee_name );
    foreach ($data as $key => $value) {
        
    	$s = $wpdb->get_row('select * from ' . $table_name . ' where id = "' . $value['id'] . '"');
    	if(empty($s)){
            if($value['start']['dateTime']){
                $date1 = explode('T', $value['start']['dateTime']);
                $time1 = explode('Z', $date1[1]); 
                $date2 = explode('T', $value['end']['dateTime']);
                $time2 = explode('Z', $date2[1]);                
                
                $event = array(
                'kind' => sanitize_text_field($value['kind']),
                'etag' => sanitize_text_field($value['etag']),
                'id' => sanitize_text_field($value['id']),
                'status' => sanitize_text_field($value['status']),
                'htmlLink' => sanitize_text_field($value['htmlLink']),
                'created' => sanitize_text_field($value['created']),
                'updated' => sanitize_text_field($value['updated']),
                'summary' => sanitize_text_field($value['summary']),
                'description' => sanitize_text_field($value['description']),
                'location' => sanitize_text_field($value['location']),
                'start_Date' => sanitize_text_field($date1[0]),
                'start_Time' => sanitize_text_field($time1[0]),
                'end_Date' => sanitize_text_field($date2[0]),
                'end_Time' => sanitize_text_field($time2[0]),
                'CalenderID' => sanitize_text_field($settings->calendarID)
                );
            }else{
                $event = array(
                'kind' => sanitize_text_field($value['kind']),
                'etag' => sanitize_text_field($value['etag']),
                'id' => sanitize_text_field($value['id']),
                'status' => sanitize_text_field($value['status']),
                'htmlLink' => sanitize_text_field($value['htmlLink']),
                'created' => sanitize_text_field($value['created']),
                'updated' => sanitize_text_field($value['updated']),
                'summary' => sanitize_text_field($value['summary']),
                'description' => sanitize_text_field($value['description']),
                'location' => sanitize_text_field($value['location']),
                'start_Date' => sanitize_text_field($value['start']['date']),
                'end_Date' => sanitize_text_field($value['end']['date']),
                'CalenderID' => sanitize_text_field($settings->calendarID)
                );
            }
    		
			$add = $wpdb->insert($table_name,$event);
    	}else{

    		if($value['start']['dateTime']){
                $date1 = explode('T', $value['start']['dateTime']);
                $time1 = explode('Z', $date1[1]); 
                $date2 = explode('T', $value['end']['dateTime']);
                $time2 = explode('Z', $date2[1]);                
                
                $event = array(
                'kind' => sanitize_text_field($value['kind']),
                'etag' => sanitize_text_field($value['etag']),
                'status' => sanitize_text_field($value['status']),
                'htmlLink' => sanitize_text_field($value['htmlLink']),
                'created' => sanitize_text_field($value['created']),
                'updated' => sanitize_text_field($value['updated']),
                'summary' => sanitize_text_field($value['summary']),
                'description' => sanitize_text_field($value['description']),
                'location' => sanitize_text_field($value['location']),
                'start_Date' => sanitize_text_field($date1[0]),
                'start_Time' => sanitize_text_field($time1[0]),
                'end_Date' => sanitize_text_field($date2[0]),
                'end_Time' => sanitize_text_field($time2[0]),
                'CalenderID' => sanitize_text_field($settings->calendarID)
                );
            }else{
                $event = array(
                'kind' => sanitize_text_field($value['kind']),
                'etag' => sanitize_text_field($value['etag']),
                'status' => sanitize_text_field($value['status']),
                'htmlLink' => sanitize_text_field($value['htmlLink']),
                'created' => sanitize_text_field($value['created']),
                'updated' => sanitize_text_field($value['updated']),
                'summary' => sanitize_text_field($value['summary']),
                'description' => sanitize_text_field($value['description']),
                'location' => sanitize_text_field($value['location']),
                'start_Date' => sanitize_text_field($value['start']['date']),
                'end_Date' => sanitize_text_field($value['end']['date']),
                'CalenderID' => sanitize_text_field($settings->calendarID)
                );
            }

    		$edit = $wpdb->update($table_name,$event,array( 'id' => $value['id'] ));
    	}
    	$events = $wpdb->get_results('select * from ' . $table_name . ' where start_Date >= "'.date('Y-m-d').'" ORDER BY start_Date ASC' );
    }?>
        <div id="loading"></div>
        <p class="wpgc-done">Your events has been synchronized with your google calendar !</p>
        <table class="widefat fixed wpgc-table" cellspacing="0">
            <thead>
                <tr>
                    <th id="columnname" class="manage-column column-columnname" scope="col">Title</th>
                    <th id="columnname" class="manage-column column-columnname" scope="col">Location</th>
                    <th id="columnname" class="manage-column column-columnname" scope="col">Start date</th>
                    <th id="columnname" class="manage-column column-columnname" scope="col">End date</th>
                    <th id="columnname" class="manage-column column-columnname" scope="col">Description</th>
                    <th id="columnname" class="manage-column column-columnname" scope="col">Status</th>
                    <th id="columnname" class="manage-column column-columnname" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $ev = array(); 
                $url = admin_url( 'admin.php?page=google-calendar-event');
                $url2 = admin_url( 'admin.php?page=google-calendar-plg');
                ?>
                <?php foreach ($events as $event) { ?>
                <tr class="alternate">
                    <td class="column-columnname" scope="row"><?php echo esc_attr($event->summary) ?></td>
                    <td class="column-columnname"><?php echo esc_attr($event->location) ?></td>
                    <td class="column-columnname"><?php echo esc_attr($event->start_Date).' '.esc_attr($event->start_Time) ?></td>
                    <td class="column-columnname"><?php echo esc_attr($event->end_Date).' '.esc_attr($event->end_Time) ?></td>
                    <td class="column-columnname"><?php echo esc_attr($event->description) ?></td>
                    <td class="column-columnname"><?php echo esc_attr($event->status) ?></td>
                    <td class="column-columnname">
                        <a href="<?php echo $url2. '&d='. esc_attr($event->localID) ?>" onclick="return confirm('Are you sure you want to delete this event?');"><span class="dashicons dashicons-trash"></span></a>
                    </td>
                </tr>
                <?php 
                    if($event->start_Date != '0000-00-00'){        
                    if(($event->start_Time != NULL) && ($event->end_Time != NULL)){
                        $ev[] = array(
                            'title' => "$event->summary",
                            'start' => $event->start_Date.'T'.$event->start_Time,
                            'end' => $event->end_Date.'T'.$event->end_Time,
                            'allDay' => false
                            ); 
                    }else{
                        $ev[] = array(
                            'title' => "$event->summary",
                            'start' => $event->start_Date,
                            'end' => $event->end_Date
                            ); 
                    }
                        } ?>
                    <?php } ?>  
                    <?php
                        $e = json_encode($ev);
                     ?>
            </tbody>
        </table>
        <div style="display:none" defaultDate="<?php echo date('Y-m-d'); ?>" class="eventJson" data='<?php echo $e; ?>'></div>
        <script>
            jQuery(document).ready(function() {
                var ev = eval(jQuery("div.eventJson").attr("data"));
                var default_Date = jQuery("div.eventJson").attr("defaultDate"); 
                jQuery('#calendar').fullCalendar({
                    header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                    },
                    defaultDate: default_Date,
                    selectable: false,
                    selectHelper: false,
                    select: function(start, end) {
                        var title = prompt('Event Title:');
                        var eventData;
                        if (title) {
                            eventData = {
                                title: title,
                                start: start,
                                end: end
                            };
                            jQuery('#calendar').fullCalendar('renderEvent', eventData, true);
                        }
                        jQuery('#calendar').fullCalendar('unselect');
                    },
                    editable: false,
                    eventLimit: false,
                    events: ev
                });
            });
        </script>
        <div id='calendar'></div>
<?php
}
function wpgc_documentation()
{ 
	$root = plugin_dir_url( __FILE__ );
	?>
	<div class="wrap wpgc-doc">
			<h1 class="wpgc-head">WP GCalndar Plugin</h1>
			<h3>Creating a Google Client ID</h3>
			<p>To read and add events from your Google Calendars you’ll need create a Google Client ID
			 and save within your plugin settings. Step-by-step instructions to create and save a Google
			  Client ID: Navigate to the <a href="https://console.developers.google.com/">Google Developers Console</a>. 
			  In the drop-down menu at the top right,
			   select Create a project…</p>
		    <img src="<?php echo $root ?>/img/1.png">
			<p>Give your project a name, agree to the terms, then click <b>Create</b>.</p>
			<img src="<?php echo $root ?>/img/2.png">
			<p>From the Google Developers Console Dashboard select <b>Enable and manage APIs</b>. 
				If you don’t see this, select <b>API Manager</b> from the top-left “hamburger” menu.</p>
			<img src="<?php echo $root ?>/img/3.png">
			<p>You should now be in the API Manager section of the Google Developers Console. 
				Under <b>Google Apps APIs</b>, select <b>Calendar API</b>.</p>
			<img src="<?php echo $root ?>/img/4.png">
			<p>Click <b>Enable API</b>.</p>
			<img src="<?php echo $root ?>/img/5.png">
			<p>A message should pop up recommending to proceed with creating credentials. Do this now. 
				Alternatively select Credentials under API Manager in the left-hand menu.</p>
			<img src="<?php echo $root ?>/img/6.png">
			<p>Go to "OAuth consent screen" section, enter "Product name shown users" and Save.</p>
			<img src="<?php echo $root ?>/img/7.png">
			<p>Select <b>Add credentials</b> and click on <b>API key</b>.</p>
			<img src="<?php echo $root ?>/img/8.png">
			<p>Click <b>Web application</b></p>
			<img src="<?php echo $root ?>/img/9.png">
			<p>Give your Web application any name, Authorized JavaScript origins as you web site address, 
				and Authorized redirect URIs as the image shows then click <p>Create</p>.</p>
			<img src="<?php echo $root ?>/img/10.png">
			<p>On the API key popup, select and copy (Cmd-C or Ctrl-C) your Client ID.</p>
			<img src="<?php echo $root ?>/img/11.png">
			<p>Now back on your <b>WordPress dashboard</b>, go to <b>Calendar</b>, then <b>Settings</b> from the menu. 
				Enter your Google Client ID here, and your Calendar ID making sure you have pasted 
				the exact key without extra spaces. Then click <b>Save</b>.</p>
			<img src="<?php echo $root ?>/img/12.png">

			<h1>Google Calendar ID</h1>
			<p>For Your Calendar ID if you want to use your default calendar use primary as an ID, 
				for others go to your Calendar settings and copy your Calendar ID.</p>
			<img src="<?php echo $root ?>/img/13.png">
			<img src="<?php echo $root ?>/img/14.png">
			<p><i>In case of any error or problem, you may try obtaining a new Google Client ID by repeating the steps 
				above before contacting support. You can generate more than one Client ID under the same project on 
				Google Developers Console.</i></p>
			<h1>How to use the Admin Interface</h1>
			<p>Add an event your <b>Google Calendar</b></p>
			<img src="<?php echo $root ?>/img/15.png">
			<p>Go to <b>Calendar > All Events</b> from the menu, then click <b>Synchronize</b></p>
			<img src="<?php echo $root ?>/img/16.png">
			<p>The Google Calendar event will get imported to your Admin Calendar</p>
			<img src="<?php echo $root ?>/img/17.png">
			<h3>Short code</h3>
			<p>Use the Short code <b>[wpgc-calendar]</b> to display your calendar in your posts or pages.</p>
			
	</div>
<?php
}