# Changelog

All notable changes to this fork of [intervention/image](https://github.com/Intervention/image) 2.7 are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [2.7.4] - 2026-10-28

### Fixed
- `imagedestroy()` is no longer called on PHP 8.0+, where it has no effect. PHP 8.5 deprecates the function, so every GD decode, fill, reset and destroy emitted `E_DEPRECATED`.

## [2.7.3] - 2025-05-29

### Changed
- The package is published as `tg666/image`, a maintained fork of `intervention/image` 2.7.2. It replaces `intervention/image` (`replace` section in `composer.json`).
- PHP 8.4 support.

[Unreleased]: https://github.com/tg666/image/compare/2.7.4...HEAD
[2.7.4]: https://github.com/tg666/image/compare/2.7.3...2.7.4
[2.7.3]: https://github.com/tg666/image/releases/tag/2.7.3
