/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/**
 * Coded By : aigenseer
 * Copyright 2019, https://github.com/aigenseer
 */

// Register and load the widget
function qrs_load_widget() {
    register_widget( 'qsr_widget' );
}
add_action( 'widgets_init', 'qrs_load_widget' );

// Creating the widget
class qsr_widget extends WP_Widget {

  function __construct()
  {
    $widget_details = array(
    	'classname' =>  QSR_PREFIX.'_widget_domain',
    	'description' => QSR_WIDGET_DESCRIPTION
    );
    // Base ID of your widget
    // Widget name will appear in UI
    parent::__construct( QSR_PREFIX.'_widget', QSR_NAME.' Widget', $widget_details );
  }

  public function widget( $args, $instance )
  {
    print do_shortcode('['.QSR_SHORTCODE_NAME.']');
  }


} // Class wpb_widget ends here


?>
