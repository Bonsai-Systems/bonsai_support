=== The Bonsai Digital Collective Support Widget ===
Contributors: bonsaidigitalcollective, benervine
Donate link: https://bonsaidigitalcollective.co.uk/
Tags: support, dashboard, help, client, widget
Requires at least: 6.0
Tested up to: 6.6
Requires PHP: 7.4
Stable tag: 1.1.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds a branded support widget to the WordPress Dashboard with quick access to the Bonsai Digital Collective Help Centre and support form.

== Description ==

This plugin adds a custom dashboard widget to the WordPress admin area with:

* A branded banner header
* Links to the Bonsai Digital Collective Help Centre
* Direct access to submit new support requests
* Friendly support messaging for clients and site managers

The widget helps ensure clients always know where to go for help, while keeping the WordPress dashboard clean and simple.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/` directory, or install via the WordPress admin "Plugins → Add New".
2. Activate the plugin through the "Plugins" screen in WordPress.
3. The support widget will appear automatically on the Dashboard.

== Frequently Asked Questions ==

= Who can see the support widget? =  
By default, all WordPress users with Dashboard access. You can restrict it further by editing the plugin and adding a capability check (e.g. `current_user_can('manage_options')`).

= Can I customise the links or banner? =  
Yes — edit the URLs inside the plugin’s main function, or fork this plugin with your own settings.

== Screenshots ==

1. The support widget as it appears on the WordPress Dashboard.

== Changelog ==

= 1.2 (2025-10-01)
* Updated to 'The Bonsai Digital Collective Help Centre'
* Updated spellings on centre

= 1.1.1 (2025-10-01) =
* Refactored widget callbacks to use prefixed/anonymous functions.
* Fixed fatal errors caused by duplicate global function names (e.g. `custom_dashboard_help`).
* Improved escaping and admin-only context.

= 1.1 (2025-07-31) =
* Updated dashboard widget text for clearer messaging.
* Added new support links.

= 1.0 =
* Initial release.
* Added support widget with banner and Help Centre links.

== Upgrade Notice ==

= 1.1.1 =
Important fix for fatal errors caused by duplicate function names. Upgrade recommended.
