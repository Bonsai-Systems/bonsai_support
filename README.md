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

As of v2.0.0, the plugin also self-updates from GitHub releases via the wp-admin Plugins screen, using [Plugin Update Checker](https://github.com/YahnisElsts/plugin-update-checker) (matching the pattern used by `bonsai-code-injector`).

---

## Installation

1. Download the plugin `.zip` or clone the repo.
2. Upload to `/wp-content/plugins/` directory or install via the WordPress admin **Plugins → Add New → Upload**.
3. Activate the plugin from the WordPress **Plugins** screen.
4. The support widget will appear automatically on the Dashboard.

Once active, WordPress will check `https://github.com/gakdesign/bonsai_support` for new releases and offer updates through the normal **Plugins** screen "update available" flow.

---

## Development

This plugin ships its update-checker dependency via Composer, committed into `vendor/` (no build step required on a live site).

If you need to update the dependency:

```bash
composer update
```

Then commit the regenerated `vendor/` and `composer.lock` alongside the code change.

---

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for the full history.

---

## Frequently Asked Questions

**Q: Who can see the support widget?**
A: By default, all WordPress users with Dashboard access. You can restrict it further by editing the plugin and adding a capability check (e.g. `current_user_can('manage_options')`).

**Q: Can I customise the links or banner?**
A: Yes — edit the URLs inside the plugin's main function, or fork this repo with your own settings.

**Q: How do updates work?**
A: The plugin checks the `gakdesign/bonsai_support` GitHub repo's releases and offers updates directly in wp-admin — no separate update plugin required.

---

## Development Notes

- Built to be lightweight and DRY.
- Uses modern WordPress best practices.
- Inline styles are minimal for simplicity. If desired, enqueue custom admin CSS for more control.

---

## Author

Developed by [Ben Ervine / The Bonsai Digital Collective](https://bonsaidigitalcollective.co.uk/)
