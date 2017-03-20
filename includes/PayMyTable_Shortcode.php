<?php
/**
* PayMyTable shortcode for wordpress.
*
*/
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}
/**
* Flowplayer Shortcode Class
*
* @package Flowplayer5_Shortcode
* @author  Ulrich Pogson <ulrich@pogson.ch>
*
* @since 1.3.0
*/
class PayMyTable_Shortcode {
  public function register() {
    add_shortcode('PayMyTableOrder', 'PayMyTableOrderRender');
    add_shortcode('PayMyTableBooking', 'PayMyTableBookingRender');
  }

}


function PayMyTableOrderRender($atts) {
  $render = new PayMyTable_Renderer();
	return $render->renderOrderPluginIframe( $atts );
}


function PayMyTableBookingRender($atts) {
  $render = new PayMyTable_Renderer();
	return $render->renderBookingPluginIframe( $atts );
}
