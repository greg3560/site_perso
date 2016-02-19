<?php
	function Juna_Easy_Calendar_GET_Shortcode_ID($atts, $content = null)
	{
		$atts=shortcode_atts(
			array(
				"id"=>"1"
			),$atts
		);

		return Juna_Easy_Calendar_Draw_Shortcode($atts['id']);
	}
	add_shortcode('Juna_Easy_Calendar', 'Juna_Easy_Calendar_GET_Shortcode_ID');
	function Juna_Easy_Calendar_Draw_Shortcode($Qid)
	{
		ob_start();	
			$args = shortcode_atts(array('name' => 'Widget Area','id'=>'hopar_1','description'=>'','class'=>'','before_widget'=>'','after_widget'=>'','before_title'=>'','AFTER_TITLE'=>'','widget_id'=>'1','widget_name'=>'Juna_IT_Easy_Calendar'), $atts, 'Juna_IT_Easy_Calendar' );
			$Juna_Easy_Calendar=new Juna_IT_Easy_Calendar;
			global $wpdb;
			$table_name  =  $wpdb->prefix . "easy_calendar_manager";
			$Juna_Easy_Calendar_Title=$wpdb->get_var($wpdb->prepare("SELECT Juna_IT_Easy_CalThemeTitle FROM $table_name WHERE id=%d",$Qid));
			$instance=array('Juna_IT_Easy_CalThemeTitle'=>$Juna_Easy_Calendar_Title);
			$Juna_Easy_Calendar->widget($args,$instance);	
			$cont[]= ob_get_contents();
		ob_end_clean();	
		return $cont[0];		
	}
?>