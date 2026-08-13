# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

## [Unreleased]

## [2.0.0] - 2026-08-13

### Added
- [composer.json, vendor/] Wired up `yahnis-elsts/plugin-update-checker` (^5.6) so the plugin can self-update from GitHub releases via the wp-admin Plugins screen, matching `bonsai-code-injector`
- [bonsaisupport.php] `BDC_SUPPORT_VERSION` constant defined for future reference

### Changed
- [composer.json] Given a unique package name (`bonsai-digital-collective/bonsai-support`) so its generated Composer autoloader class doesn't collide with other Bonsai plugins bundling the same update-checker dependency on the same site (see `bonsai-code-injector`'s 1.1.1 changelog for the collision this avoids)
- [bonsaisupport.php] `Requires PHP` bumped from 7.4 (unwritten) to 7.4 (explicit) to match the composer dependency's minimum; plugin header reformatted to standard WordPress docblock style

## [1.2] - 2025-10-01

### Changed
- [bonsaisupport.php] Updated to 'The Bonsai Digital Collective Help Centre'
- [bonsaisupport.php] Updated spellings on centre

## [1.1.1] - 2025-10-01

### Fixed
- [bonsaisupport.php] Refactored widget callbacks to use prefixed/anonymous functions to prevent fatal errors caused by duplicate global function names (e.g. `custom_dashboard_help` collision)
- [bonsaisupport.php] Improved escaping and admin-only context

## [1.1] - 2025-07-31

### Changed
- [bonsaisupport.php] Updated dashboard widget text for clearer messaging
- [bonsaisupport.php] Added new support links

## [1.0] - Initial release

### Added
- [bonsaisupport.php] Initial support widget with banner and Help Centre links
