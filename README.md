# Rinrin

A clean, accessible, and modern Drupal 11 front-end theme, based on [Olivero 11.3.3](https://www.drupal.org/docs/core-modules-and-themes/core-themes/olivero-theme) — Drupal's official front-end theme.

---

## Requirements

- Drupal `^11`
- PHP `^8.1`

---

## Installation

1. Place the `rinrin` folder in your Drupal installation:
   ```
   web/themes/custom/rinrin/
   ```

2. Set correct permissions:
   ```bash
   chown -R www:www web/themes/custom/rinrin
   chmod -R 755 web/themes/custom/rinrin
   find web/themes/custom/rinrin -type f -exec chmod 644 {} \;
   ```

3. Enable the theme via Drush:
   ```bash
   drush theme:enable rinrin
   drush config:set system.theme default rinrin
   drush cache:rebuild
   ```
   Or via the Drupal UI: **Appearance → Rinrin → Install and set as default**

---

## Features

- Based on Olivero 11.3.3 — Drupal's modern, accessible core theme
- Fully responsive layout with mobile navigation
- Accessible markup (WCAG 2.1 AA compliant base)
- Customizable primary brand color via theme settings
- Supports Layout Builder (two, three, and four column sections)
- Metropolis + Lora font stack
- CSS custom properties (variables) for easy theming
- Regions: Header, Primary Menu, Secondary Menu, Hero, Highlighted, Breadcrumb, Social Bar, Content Above, Content, Sidebar, Content Below, Footer Top, Footer Bottom

---

## Customization

You can override styles by adding your own CSS to the theme or creating a sub-theme:

```bash
# Sub-theme approach
drush generate theme
```

Theme settings (color picker, mobile menu behavior) are available under:
**Appearance → Rinrin → Settings**

---

## Origin

Rinrin is a direct clone of Drupal core's **Olivero** theme (version 11.3.3), renamed for use as a custom theme. All `olivero` references — including PHP namespaces, hook names, library definitions, config keys, block IDs, and CSS classes — have been replaced with `rinrin`.

This approach is the [officially recommended way](https://www.drupal.org/docs/core-modules-and-themes/core-themes/olivero-theme) to use Olivero as a starting point for a custom theme, as Olivero itself is marked `@internal` and may change between minor releases.

---

## License

GPL-2.0-or-later — same as Drupal core.
