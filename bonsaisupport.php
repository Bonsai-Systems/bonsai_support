<?php
/**
 * Plugin Name: The Bonsai Digital Collective Support Widget
 * Plugin URI:  https://bonsaidigitalcollective.co.uk/
 * Description: Adds the Bonsai Digital support widget to the WordPress Dashboard.
 * Version:     2.0.0
 * Author:      Ben Ervine / The Bonsai Digital Collective
 * Author URI:  https://bonsaidigitalcollective.co.uk/
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * License: GPL2
 * Text Domain: bonsai-support
 */

/*
-------------------------------------------------------------
Update 2026-08-13: Self-Update System
- Wired up YahnisElsts/plugin-update-checker (via Composer) so the plugin
  can self-update from GitHub releases via the wp-admin Plugins screen,
  matching bonsai-code-injector.
Update 2025-09-01: Widget Rename and Spelling Check
- Updated to 'The Bonsai Digital Collective Help Centre'
- Updated spellings on centre
Update 2025-07-31: Updated dashboard widget text and links.
Update 2025-10-01: Refactored callbacks to use prefixed/anonymous functions
to prevent fatal errors caused by duplicate global function names
(e.g. "custom_dashboard_help" collision).
-------------------------------------------------------------
*/

defined( 'ABSPATH' ) || exit;

/*
|--------------------------------------------------------------------------
| Plugin Update Checker (via Composer)
|--------------------------------------------------------------------------
*/
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$bdc_support_update_checker = PucFactory::buildUpdateChecker(
	'https://github.com/gakdesign/bonsai_support',
	__FILE__,
	'bonsai-support',
	6
);

$bdc_support_update_checker->setBranch( 'main' );
$bdc_support_update_checker->getVcsApi()->enableReleaseAssets();

define( 'BDC_SUPPORT_VERSION', '2.0.0' );

add_action(
	'wp_dashboard_setup',
	function () {
		wp_add_dashboard_widget(
			'bdc_support_widget',
			'The Bonsai Digital Collective Help Centre',
			function () {
				$banner = esc_url( 'https://bonsaidigitalcollective.co.uk/support-banner.jpg' );
				$hc     = esc_url( 'https://bonsaidigitalcollective.zendesk.com/hc/en-gb' );
				$req    = esc_url( 'https://bonsaidigitalcollective.zendesk.com/hc/en-gb/requests/new' );

				echo '<div style="margin: -12px -12px 0 -12px;">
					<img src="' . $banner . '" alt="Bonsai Digital Support" style="width:100%;height:auto;">
				</div>
				<p>If you’ve found a problem or have a question, please visit our
					<a href="' . $hc . '" target="_blank" rel="noopener" style="color:#ee4367;text-decoration:underline;">Help Centre</a>
					for quick answers to common issues.</p>
				<p>If you don’t find what you need, just
					<a href="' . $req . '" target="_blank" rel="noopener" style="color:#ee4367;text-decoration:underline;">contact our support team</a>
					and we’ll get back to you as soon as possible.</p>
				<p style="margin-bottom:0;">We’re here to help keep your site running smoothly!</p>';
			}
		);
	}
);
