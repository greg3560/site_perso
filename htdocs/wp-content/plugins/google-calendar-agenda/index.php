<?php
/* Plugin Name: Google Calendar Agenda
Plugin URI: http://impression11.co.uk/
Version: 1.2
Description: A Widget to display Google Calendar Events.
Author: Impression11 Ltd
Author URI: http://impression11.co.uk/
*/
require_once (dirname(__FILE__) . '/options.php');

add_shortcode('minGcal', 'minGcal');

function minGcal($atts)
{	
	$options = get_option('Gcal_plugin_options');
	// If is added through a shortcode use Legacy if there is no ID in the shortcode
	if ($options['gcale']==''){$backup = 'en.uk#holiday@group.v.calendar.google.com';}else{$backup = $options['gcale'];}
	extract(shortcode_atts(array(
		'count' => 5,
		'calid' => $backup,
		'links' => 0,
	) , $atts));
	// Very annoying! Sometimes the browser gives the ID with an @ sometimes with %40, this will check it and if it does contain an @ encode it :)
	if (strpos($calid, '@') !== false) {
	$calid = urlencode($calid);

}
	if (!isset($options['gcale']) && !isset($calid)) {
		echo 'Please ensure this plugin is correctly configured under "Gcal Options" & "Widgets"';
	}
	else {
		$file = plugin_dir_path(__FILE__) . $count . substr($calid, 7) . $links . '_Gcals.txt';
		if ($options['caching'] == 1 && file_exists($file) && time() - filemtime($file) < $options['cache_exp'] * 3600) {
			echo file_get_contents($file);
			echo '<!-- Cached File -->';
		}
		else {
			$cache = '';
			$sxml = simplexml_load_file("http://www.google.com/calendar/feeds/" . $calid . "/public/basic?orderby=starttime&max-results=" . $count . "&singleevents=true&sortorder=ascending&futureevents=true");
?>
<?php
			$newarray = array();
			$olddate = 0;
			$precache = "";
			foreach($sxml->entry as $entry) {
				// Get the time and date from summary.
				if ($entry->title == 'busy'){ $from = trim(substr($entry->summary, strpos($entry->summary, "When: ") + 6));}else{

				$from = trim(substr($entry->summary, strpos($entry->summary, "When: ") + 6));}
				$pos = strpos($from, 'to');
				$time = strtotime(trim(substr($from, 0, $pos)));
				$newtime = date("g.ia", $time);
				$date = date("j F, Y", $time);
				$href = $entry->link['href'];				
			

				// If All Day...

				if ($time == '') {
					$from = trim(substr($entry->summary, strpos($entry->summary, "When: ") + 6));
					$time = strtotime($from);
					$date = date("j F, Y", $time);
					$newtime = "All Day";
					
				// Reoccuring Next Year Fix...
					
					if($time == ''){
					$test = trim(substr($entry->summary, strpos($entry->summary, "When: ") +6));
					$from = substr($test, 0, strpos($test, '<br>'));
					$time = strtotime($from);
					$date = date("j F, Y", $time);
					$newtime = "All Day";

					}
				}

				// if the day is the same as the past event +1 to add it to the next in the array

				if ($date == $olddate) {
					$count = $count + 1;
					$newarray[$date][$count]['date'] = $date;
					$newarray[$date][$count]['time'] = $newtime;
					$newarray[$date][$count]['title'] = $entry->title;
					$newarray[$date][$count]['url'] = $entry->id;
					$newarray[$date][$count]['href'] = $href;
				}

				// if it is not the same as the previous day reset the count and start again

				else {
					$count = 0;
					$newarray[$date][$count]['date'] = $date;
					$newarray[$date][$count]['time'] = $newtime;
					$newarray[$date][$count]['title'] = $entry->title;
					$newarray[$date][$count]['url'] = $entry->id;
					$newarray[$date][$count]['href'] = $href;
				}

				$olddate = $date;

			}

			$cache.= '<ul id="gcalagenda">';
			foreach($newarray as $event) {

				// split apart the array for each day

				foreach($event as $details) {

					// get the details about each event per day

					$precache.= "</br><small>" . $details['title'][0] . " - " . $details['time'] . "</small>";
				} //add the day to the cache and ready to echo
				$cache.= "<li>";
				if ($links > 1) { $cache.= '<a href="'.$details['href'].'" target="_blank">';}
				$cache.= "<strong>" . $details['date'] . "</strong>";
				$cache.= $precache;
				if ($links > 1) { $cache.= "</a>";}
				$cache.= "</li>";
				$precache = "";
			}

			$cache.= '</ul>';
			echo $cache;
			if ($options['caching'] == 1) {
				file_put_contents($file, $cache);
			}
		}
	}
}

class wp_Gcals extends WP_Widget

{
	public

	function __construct()
	{
		parent::__construct('wordpress-Gcals', 'Google Calendar Agenda Widget', array(
			'description' => 'Displays Events from Google Calendar'
		));
	}

	public

	function widget($args, $instance)
	{
		$options = get_option('Gcal_plugin_options');
		
		
		//it's nasty and I don't like it but isset doesn't work here :S
		if (!$instance['calid']==''){$dalendar = $instance['calid'];}
		elseif(!$options['gcale']==''){$dalendar = $options['gcale'];}
		else{$dalendar = 'en.uk#holiday@group.v.calendar.google.com';}
				
		if (!isset($instance['links'])){$instance['links'] = 0;}
		echo $args['before_widget'];
		echo $args['before_title'];
		if ($instance['links'] == 1 || $instance['links'] == 3){
			echo '<a href="https://www.google.com/calendar/embed?src='.urlencode($dalendar).'" target="_blank">';
		
		}
		echo $instance['title'];
		
		if ($instance['links'] == 1 || $instance['links'] == 3){
			echo '</a>';
		}
		echo $args['after_title'];
		echo do_shortcode('[minGcal count="' . $instance['count'] . '" calid="'. $dalendar .'" links="'.$instance['links'].'"]');
		echo $args['after_widget'];
	}

	public

	function form($instance)
	{
?>

<p>
  <label for="<?php
		echo $this->get_field_id('title'); ?>">Widget Title</label>
  <br />
  <input type="text" class="img" name="<?php
		echo $this->get_field_name('title'); ?>" id="<?php
		echo $this->get_field_id('title'); ?>" value="<?php
		echo $instance['title']; ?>" />
</p>

<p>
  <label for="<?php
		echo $this->get_field_id('calid'); ?>">Calendar ID</label>
  <br />
  <input type="text" class="img" name="<?php
		echo $this->get_field_name('calid'); ?>" id="<?php
		echo $this->get_field_id('calid'); ?>" value="<?php
		echo $instance['calid']; ?>" />
</p>


<label for="<?php
		echo $this->get_field_id('count'); ?>"># of Events</label>
<br />
<input type="text" class="img" name="<?php
		echo $this->get_field_name('count'); ?>" id="<?php
		echo $this->get_field_id('count'); ?>" value="<?php
		echo $instance['count']; ?>" />
</p>

<p>
  <label for="<?php
		echo $this->get_field_id('links'); ?>">
    <?php
		_e('Links'); ?>
  </label>
  <select name="<?php
		echo $this->get_field_name('links'); ?>" id="<?php
		echo $this->get_field_id('links'); ?>" class="widefat">
    <option value="0"<?php
		selected($instance['links'], '0'); ?>>
    <?php
		_e('None'); ?>
    </option>
    <option value="1"<?php
		selected($instance['links'], '1'); ?>>
    <?php
		_e('Title'); ?>
    </option>
    <option value="2"<?php
		selected($instance['links'], '2'); ?>>
    <?php
		_e('Events'); ?>
    </option>
    <option value="3"<?php
		selected($instance['links'], '3'); ?>>
    <?php
		_e('Title & Events'); ?>
    </option>
  </select>
</p>
<?php
	}
}

add_action('widgets_init', create_function('', 'return register_widget("wp_Gcals");'));

function wp_Gcals_css()
{
	wp_enqueue_style('minimal-Gcal', plugins_url('wp-gcal.css', __FILE__) , null, null);
}

add_action('init', 'wp_Gcals_css'); ?>