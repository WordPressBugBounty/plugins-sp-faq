<?php
/**
 * Admin Class
 *
 * Handles the Admin side functionality of plugin
 *
 * @package Popup Anything on click
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} ?>

<div id="wp_faq_welcome_tabs" class="wp-faq-vtab-cnt wp_faq_welcome_tabs wp-faq-clearfix">
	
	<div class="wp-faq-deal-offer-wrap">
		<h3 style="font-weight: bold; font-size: 30px; color:#ffef00; text-align:center; margin: 15px 0 5px 0;">Why Invest Time On Free Version?</h3>

		<h3 style="font-size: 18px; text-align:center; margin:0; color:#fff;">Explore FAQ Pro with Essential Bundle Free for 5 Days.</h3>			

		<div class="wp-faq-deal-free-offer">
			<a href="<?php echo esc_url( WP_FAQ_PLUGIN_BUNDLE_LINK ); ?>" target="_blank" class="wp-faq-sf-free-btn"><span class="dashicons dashicons-cart"></span> Try Pro For 5 Days Free</a>
		</div>
	</div>

	<div style="border: 1px solid #ddd; background: #fff;box-shadow: 0 3px 2px rgb(0 0 0 / 5%);padding: 50px; margin-bottom: 1rem;">
		<div style="text-align:center;">
			<h1 style="font-size: 24px;">Showcase your <span class="sp-faq-sf-blue">FAQ’s,</span> associated with your business with multiple designs in an aesthetically appealing and professional way.</h1>
			<div style="margin-top: 30px; text-transform: uppercase; text-align:center;">
				<a href="<?php echo esc_url( $wp_faq_add_link ); ?>" class="sp-faq-sf-btn" style="padding: 10px 50px;">Launch FAQ</a>
			</div>
		</div>
	</div>
</div>