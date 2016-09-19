<?php
add_action( 'admin_init', 'Gcals_options_init1' );
add_action( 'admin_menu', 'Gcals_options_add_page1' );
function Gcals_options_init1(){
	register_setting( 'Gcal_options', 'Gcal_plugin_options', 'Gcal_options_validate' );
}
function Gcals_options_add_page1() {
add_menu_page( __( 'Google Calendar Agenda Widget', 'gcalwidget' ), __( 'GCal Agenda Options', 'gcalwidget' ), 'edit_theme_options', 'Gcal_options', 'Gcal_options_do_page1', plugins_url('img/logo.png',__FILE__ ) );}
function Gcal_options_do_page1() {
	global $select_options, $radio_options;
	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;
	?>

<div class="wrap">
  <h2>Google Calendar Agenda Options</h2>
  <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
  <div class="updated fade">
    <p><strong>
      <?php _e( 'Options saved', 'gcalwidget' ); ?>
      </strong></p>
  </div>
  <?php endif; ?>
  <form method="post" action="options.php">
    <?php settings_fields( 'Gcal_options' ); ?>
    <?php $options = get_option( 'Gcal_plugin_options' ); ?>
    <h3>Options</h3>
    <p>Please input the ID of the Google Calendar you want to use. This can be found under your Calendar Settings near the XML & RSS feed details. If you only have one Calendar on your account this ID could be your e-mail address. <strong>While this method still works it is considered legacy within this plugin, to avoid future mishaps please insert your ID into the widget itself!</strong>
    <table class="form-table">
     <tr valign="top">
        <th scope="row"><?php _e( 'Calendar ID', 'gcalwidget' ); ?></th>
        <td><input  id="gcale" class="regular-text" type="text" name="Gcal_plugin_options[gcale]" value="<?php esc_attr_e( $options['gcale'] ); ?>" /></td>
      </tr> 
    </table>
    <h3>Caching Options</h3>
    <p>If you are happy with the settings you have input for the widget / shortcode you can set the widget to cache the output, this means it will not have to make subsequent requests from Google to display your Calendar events between your set cacheable timing. This speeds up displaying the widget and if you are displaying a lot of events this is recommended.
    <table class="form-table">
 <tr valign="top">
        <th scope="row"><?php _e( 'Enable Caching', 'gcalwidget' ); ?></th>
        <td><input id="caching" name="Gcal_plugin_options[caching]" type="checkbox" value="1" <?php checked( '1', $options['caching'] ); ?> /></td>
      </tr>
      <tr valign="top">
        <th scope="row"><?php _e( 'Cache Expiry (Hrs)', 'gcalwidget' ); ?></th>
        <td><input  id="cache_exp" class="regular-text" type="text" name="Gcal_plugin_options[cache_exp]" value="<?php esc_attr_e( $options['cache_exp'] ); ?>" /></td>
      </tr> 
    </table>
        <p class="submit">
      <input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'gcalwidget' ); ?>" />
    </p>
  </form>
</div>
<?php
}
function Gcal_options_validate( $input ) {
	$input['gcale'] = wp_filter_nohtml_kses( $input['gcale'] );
	$input['cache_exp'] = wp_filter_nohtml_kses( $input['cache_exp'] );

	if ( ! isset( $input['caching'] ) )
		$input['caching'] = null;
		$input['caching'] = ( $input['caching'] == 1 ? 1 : 0 );
	return $input;
}