<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * Flowplayer Output Class
 *
 * @package Flowplayer5_Shortcode
 * @author  Ulrich Pogson <ulrich@pogson.ch>
 *
 * @since 1.3.0
 */
class PayMyTable_Renderer {

	public function renderOrderPluginIframe( $atts  = []) {
    $options = [
      "env" => isset($atts["env"]) ? $atts["env"] : "PROD",
      "color" => $atts["color"],
      "apiConsumer" => $atts["apiConsumer"],
      "modes" => $atts["modes"],
    ];

		$js = "
			PMT.initOrderPlugin({
				env: '{$options['env']}',
				id: 'PMTIframeOrder',
				apiConsumer: '{$options['apiConsumer']}',
				modes: [{$options['modes']}],
				color: '{$options['color']}',
			});
		";

		wp_enqueue_script('PayMyTableJsLib');

		wp_add_inline_script('PayMyTableJsLib', $js);

		return '
			<div id="PMTIframeOrder"></div>
		';

	}

	public function renderBookingPluginIframe( $atts  = []) {
    $options = [
      "env" => isset($atts["env"]) ? $atts["env"] : "PROD",
      "color" => $atts["color"],
      "apiConsumer" => $atts["apiConsumer"],
			"restaurantId" => $atts["restaurantId"],
    ];

		$js = "
			PMT.initBookingPlugin({
				env: '{$options['env']}',
				id: 'PMTIframeOrder',
				apiConsumer: '{$options['apiConsumer']}',
				color: '{$options['color']}',
				restaurantId: '{$options['restaurantId']}',
			});
		";

		wp_enqueue_script('PayMyTableJsLib');

		wp_add_inline_script('PayMyTableJsLib', $js);


		return '
			<div id="PMTIframeOrder"></div>
		';

	}

}
