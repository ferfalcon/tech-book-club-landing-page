# Repository Guidelines

## Project Structure & Module Organization

This repository is a DDEV-backed WordPress site for the custom block theme `Tech Book Club Landing Page`. WordPress runs from the repository root; avoid changing `wp-admin/` and `wp-includes/` unless explicitly required.

- `wp-content/themes/tech-book-club-landing-page/` is the project-owned block theme for templates, patterns, styles, and assets.
- `wp-content/themes/` also contains bundled default themes. Treat them as references.
- `wp-content/plugins/` contains installed plugins such as Akismet and Hello Dolly.
- `frontend-mentor/` contains the challenge brief, screenshots, starter HTML, and design assets.
- `.ddev/` contains local environment configuration: PHP 8.4, MariaDB 11.8, and nginx-fpm.

## Build, Test, and Development Commands

- `ddev start` starts the local WordPress environment.
- `ddev describe` shows site URLs and service status.
- `ddev wp <command>` runs WP-CLI inside the container, for example `ddev wp theme list`.
- `ddev wp theme activate tech-book-club-landing-page` activates the custom theme.
- `cd wp-content/themes/tech-book-club-landing-page && npm install` installs theme tooling when `package.json` exists.
- `cd wp-content/themes/tech-book-club-landing-page && npm run build` builds theme assets when available.

There is no root `package.json`, Composer project, or automated test suite at the repository root.

## Coding Style & Naming Conventions

Follow WordPress block theme conventions. Use `style.css` for theme metadata, `theme.json` for global settings/styles, `templates/*.html` for templates, `parts/*.html` for template parts, `patterns/*.php` for patterns, and `styles/*.json` for style variations. Use tabs for PHP indentation where existing files do.

For CSS, use readable custom properties and purpose-based class names. Keep custom code scoped to the custom theme and regenerate built assets when needed.

## Testing Guidelines

No PHPUnit, Jest, Playwright, or `wp-env` configuration is currently present. Verify changes manually through the DDEV site and Site Editor. For visual work, compare against `frontend-mentor/design/` at mobile, tablet, and desktop widths. For WordPress checks, use `ddev wp theme list` and `ddev wp theme status tech-book-club-landing-page`.

## Commit & Pull Request Guidelines

Git history only shows an initial commit, so there is no established convention. Use concise, imperative messages such as `Add landing page styles`.

Pull requests should include a summary, testing notes, screenshots for visual changes, and related issue or Frontend Mentor links. Call out any database, DDEV, or WordPress admin steps.

## Agent-Specific Instructions

Keep edits focused on `wp-content/themes/tech-book-club-landing-page/` unless told otherwise. Do not refactor WordPress core, bundled default themes, or bundled plugins. Preserve user changes and prefer existing WordPress/DDEV workflows.
