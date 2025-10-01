# The Bonsai Digital Collective Support Widget

A lightweight WordPress plugin that adds a branded support widget to the WordPress Dashboard.  
Provides quick access to the Bonsai Digital Collective Help Centre and support request form.

![WordPress](https://img.shields.io/badge/WordPress-%5E6.0-blue)

---

## Description

This plugin adds a custom dashboard widget to the WordPress admin area with:

- A branded header/banner  
- Links to the [Bonsai Digital Collective Help Centre](https://bonsaidigitalcollective.zendesk.com/hc/en-gb)  
- Direct access to submit new support requests  
- Friendly support messaging for clients and site managers  

The widget helps ensure clients always know where to go for help, while keeping the WordPress dashboard clean and simple.

---

## Installation

1. Download the plugin `.zip` or clone the repo.  
2. Upload to `/wp-content/plugins/` directory or install via the WordPress admin **Plugins → Add New → Upload**.  
3. Activate the plugin from the WordPress **Plugins** screen.  
4. The support widget will appear automatically on the Dashboard.

---

## Changelog

### 1.1.1 (2025-10-01)
- Refactored widget callbacks to use prefixed/anonymous functions.  
- Fixed fatal errors caused by duplicate global function names (e.g. `custom_dashboard_help`).  
- Improved escaping and admin-only context.  

### 1.1 (2025-07-31)
- Updated dashboard widget text for clearer messaging.  
- Added new support links.  

### 1.0 (Initial release)
- Added initial support widget with banner and Help Centre links.  

---

## Frequently Asked Questions

**Q: Who can see the support widget?**  
A: By default, all WordPress users with Dashboard access. You can restrict it further by editing the plugin and adding a capability check (e.g. `current_user_can('manage_options')`).

**Q: Can I customise the links or banner?**  
A: Yes — edit the URLs inside the plugin’s main function, or fork this repo with your own settings.

---

## Development Notes

- Built to be lightweight and DRY.  
- Uses modern WordPress best practices.  
- Inline styles are minimal for simplicity. If desired, enqueue custom admin CSS for more control.  

---

## Author

Developed by [Ben Ervine / The Bonsai Digital Collective](https://bonsaidigitalcollective.co.uk/)  
