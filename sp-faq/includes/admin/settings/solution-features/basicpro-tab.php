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
<div id="wp_faq_basic_tabs" class="wp-faq-vtab-cnt wp_faq_basic_tabs wp-faq-clearfix">
	
	<!-- <div class="wp-faq-deal-offer-wrap">
		<div class="wp-faq-deal-offer"> 
			<div class="wp-faq-inn-deal-offer">
				<h3 class="wp-faq-inn-deal-hedding"><span>Buy FAQ Pro</span> today and unlock all the powerful features.</h3>
				<h4 class="wp-faq-inn-deal-sub-hedding"><span style="color:red;">Extra Bonus: </span>Users will get <span>15% off</span> on the regular price using this coupon code.</h4>
			</div>
			<div class="wp-faq-inn-deal-offer-btn">
				<div class="wp-faq-inn-deal-code"><span>EPS15</span></div>
				<a href="<?php //echo esc_url(WP_FAQ_PLUGIN_BUNDLE_LINK); ?>" target="_blank" class="sp-faq-sf-btn sp-faq-sf-btn-orange"><span class="dashicons dashicons-cart"></span> Get Essential Bundle Now</a>
				<em class="risk-free-guarantee"><span class="heading">Risk-Free Guarantee </span> - We offer a <span>30-day money back guarantee on all purchases</span>. If you are not happy with your purchases, we will refund your purchase. No questions asked!</em>
			</div>
		</div>
	</div> -->

	<div class="wp-faq-deal-offer-wrap">
		<div class="wp-faq-deal-offer"> 
			<div class="wp-faq-inn-deal-offer">
				<h3 class="wp-faq-inn-deal-hedding"><span>Try FAQ Pro</span> in Essential Bundle Free For 5 Days.</h3>
			</div>
			<div class="wp-faq-deal-free-offer">
				<a href="<?php echo esc_url( WP_FAQ_PLUGIN_BUNDLE_LINK ); ?>" target="_blank" class="wp-faq-sf-free-btn"><span class="dashicons dashicons-cart"></span>Try Pro For 5 Days Free</a>
			</div>
		</div>
	</div>

	<table class="wpos-plugin-pricing-table">
		<colgroup></colgroup>
		<colgroup></colgroup>
		<colgroup></colgroup>	
			<thead>
			<tr>
				<th></th>
				<th>
					<h2>Free</h2>
				</th>
				<th>
					<h2 class="wpos-epb">Premium</h2>
				</th>	    		
			</tr>
		</thead>

		<tbody>
			<tr>
				<th>Clock Designs <span>Clock Designs that make your website better</span></th>
				<td>1</td>
				<td>12+ (Clock Style)</td>
			</tr>
			<tr>
				<th>Shortcodes <span>Shortcode provide output to the front-end side</span></th>
				<td>1</td>
				<td>3</td>
			</tr>
			<tr>
				<th>Plugin Settings <span>Various Useful Plugin Settings</span></th>
				<td>Limited</td>
				<td>Extended (Background Color, Label Color and etc.)</td>
			</tr>
			<tr>
				<th>Clock expiry time functionality <span>Allow expiry time functionality</span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Works With Server Timezone <span>WordPress server timezone</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Timer clock option  <span>Extra Timer clock option available</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Timer label text color  <span>You can change timer label text color</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>WP Templating Features <span class="subtext">You can modify plugin html/designs in your current theme.</span></th>
				<td><i class="dashicons dashicons-no-alt"> </i></td>
				<td><i class="dashicons dashicons-yes"> </i></td>
			</tr>
			<tr>
				<th>Schedule Timer <span class="subtext">You can set schedule timer.</span></th>
				<td><i class="dashicons dashicons-no-alt"> </i></td>
				<td><i class="dashicons dashicons-yes"> </i></td>
			</tr>
			<tr>
				<th>Recurring Timer <span class="subtext">You can set recurring timer.</span></th>
				<td><i class="dashicons dashicons-no-alt"> </i></td>
				<td><i class="dashicons dashicons-yes"> </i></td>
			</tr>
			<tr>
				<th>Simple Timer Shortcode <span class="subtext">New simple timer shortcode.</span></th>
				<td><i class="dashicons dashicons-no-alt"> </i></td>
				<td><i class="dashicons dashicons-yes"> </i></td>
			</tr>
			<tr>
				<th>Pre Text Timer Shortcode <span class="subtext">New pre text timer shortcode.</span></th>
				<td><i class="dashicons dashicons-no-alt"> </i></td>
				<td><i class="dashicons dashicons-yes"> </i></td>
			</tr>
			<tr>
				<th>Completion Text <span class="subtext">Manage after timer content.</span></th>
				<td><i class="dashicons dashicons-no-alt"> </i></td>
				<td><i class="dashicons dashicons-yes"> </i></td>
			</tr>
			<tr>
				<th>Custom CSS for plugin <span>Plugin related CSS add in settings menu</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Clock RTL Support <span>Clock supports for RTL website</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Automatic Update <span>Get automatic  plugin updates </span></th>
				<td>Lifetime</td>
				<td>Lifetime</td>
			</tr>
			<tr>
				<th>Support <span>Get support for plugin</span></th>
				<td>Limited</td>
				<td>1 Year</td>
			</tr>
		</tbody>
	</table>

	<!-- <div class="wp-faq-deal-offer-wrap">
		<div class="wp-faq-deal-offer"> 
			<div class="wp-faq-inn-deal-offer">
				<h3 class="wp-faq-inn-deal-hedding"><span>Buy FAQ Pro</span> today and unlock all the powerful features.</h3>
				<h4 class="wp-faq-inn-deal-sub-hedding"><span style="color:red;">Extra Bonus: </span>Users will get <span>15% off</span> on the regular price using this coupon code.</h4>
			</div>
			<div class="wp-faq-inn-deal-offer-btn">
				<div class="wp-faq-inn-deal-code"><span>EPS15</span></div>
				<a href="<?php // echo esc_url(WP_FAQ_PLUGIN_BUNDLE_LINK); ?>" target="_blank" class="sp-faq-sf-btn sp-faq-sf-btn-orange"><span class="dashicons dashicons-cart"></span> Get Essential Bundle Now</a>
				<em class="risk-free-guarantee"><span class="heading">Risk-Free Guarantee </span> - We offer a <span>30-day money back guarantee on all purchases</span>. If you are not happy with your purchases, we will refund your purchase. No questions asked!</em>
			</div>
		</div>
	</div> -->

	<div class="wp-faq-deal-offer-wrap">
		<div class="wp-faq-deal-offer"> 
			<div class="wp-faq-inn-deal-offer">
				<h3 class="wp-faq-inn-deal-hedding"><span>Try FAQ Pro</span> in Essential Bundle Free For 5 Days.</h3>
			</div>
			<div class="wp-faq-deal-free-offer">
				<a href="<?php echo esc_url( WP_FAQ_PLUGIN_BUNDLE_LINK ); ?>" target="_blank" class="wp-faq-sf-free-btn"><span class="dashicons dashicons-cart"></span>Try Pro For 5 Days Free</a>
			</div>
		</div>
	</div>

</div>