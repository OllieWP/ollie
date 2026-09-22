# Ollie Design Library — HTML-to-Pattern Pipeline

**Date:** 2026-09-21
**Status:** Approved, implementing
**Location:** `ollie/design-library/` in the Ollie theme repo

## Problem

Pattern designs currently start in Figma or as screenshots, and the source is ambiguous. Every screenshot is translated by hand into block markup, so consistency depends on the translator each time. We want a single design source that is (a) fast to author, (b) visually reviewable in a browser, and (c) mechanically convertible to WordPress block patterns while enforcing Ollie's tokens.

## Decision

Author every design as a plain HTML file using a **token-constrained Tailwind v4 vocabulary**. A Node converter turns each HTML file into a `patterns/<slug>.php` file. The HTML dialect is the guardrail: only Ollie token classes exist, and every tag and class has exactly one block mapping. Where the dialect falls short, a `data-block` escape hatch passes block attributes straight through (the "hybrid" path). This is a first cut; if the dialect constrains design quality, the approach is revisited.

Screenshots and prompts are inputs, not targets. A screenshot is identified by archetype and rebuilt inside the Ollie framework, never copied.

## Folder layout

```
ollie/design-library/
  README.md               dialect reference, aesthetic rules, workflow
  tokens.css              GENERATED — Tailwind @theme block from theme.json
  designs/<slug>.html     one design per file
  build/gen-tokens.mjs    theme.json → tokens.css
  build/convert.mjs       designs/*.html → ../patterns/<slug>.php
  build/lib/              parser, mappers, serializer (unit-tested)
  build/test/             node:test fixtures
```

Node 22, ES modules, no bundler. Dependencies: `parse5` (already an indirect dependency via `parse5-html-rewriting-stream`). Tailwind is loaded in each HTML file from the `@tailwindcss/browser` CDN build; nothing is compiled.

## Token vocabulary (tokens.css)

`gen-tokens.mjs` reads `theme.json` and emits a `@theme` block that resets Tailwind's default scales and defines only Ollie's:

| Tailwind namespace | Source | Example classes |
|---|---|---|
| `--color-*` | `settings.color.palette` (11) | `bg-primary`, `text-main-accent`, `border-border-light` |
| `--text-*` | `settings.typography.fontSizes` minus `base` | `text-small`, `text-x-large` |
| `--font-*` | `settings.typography.fontFamilies` | `font-primary`, `font-expanded` |
| `--font-weight-*` | `settings.custom.fontWeight` | `font-semi-bold` |
| `--leading-*` | `settings.custom.lineHeight` | `leading-tight` |
| `--spacing-*` | `settings.spacing.spacingSizes` | `p-large`, `gap-medium`, `mt-x-large`, `py-xx-large` |
| `--shadow-*` | `settings.shadow.presets` | `shadow-medium-light` |
| `--container-*` | `settings.layout` | `max-w-content`, `max-w-wide` |
| `--radius-*` | fixed: `card` = 5px (matches theme.json button + existing patterns) | `rounded-card`, `rounded-full` |

`text-base` is reserved for the **color** `base`, because the font size `base` is the body default and never needs to be set explicitly. This avoids Tailwind's `text-*` namespace collision.

Fonts: `tokens.css` also declares `@font-face` for Mona Sans from `../assets/fonts/` so previews render in the real typeface.

## Dialect: HTML → blocks

Structure comes from tags; style comes from classes. The converter has one mapper per tag.

| HTML | Block | Notes |
|---|---|---|
| `<section>` | `core/group` `align:full`, `layout:{inherit:true,type:constrained}`, `tagName:section` | Ollie's standard section wrapper. Padding from `py-*`/`px-*`, default `py-xx-large px-medium`. `bg-*` sets `backgroundColor` and a paired `textColor`. |
| `<div>` | `core/group` | Default layout `constrained`. `.flex` → flex layout (`flex-col` → vertical, `items-*`, `justify-*`, `flex-wrap`). `.grid` → grid layout with `minimumColumnWidth` derived from `grid-cols-N` (2→24rem, 3→18rem, 4→14rem); add `.grid-fixed` for `columnCount:N`. `.max-w-wide` → `align:wide`. |
| `<div class="columns">` / `<div class="column">` | `core/columns` / `core/column` | `.items-center` → `verticalAlignment:center`. `w-1/3` etc. → `width`. |
| `<h1>`–`<h6>` | `core/heading` | `level` when not 2. `text-center` → `textAlign`. |
| `<p>` | `core/paragraph` | `text-center` → `align`. Inline `<strong>`, `<em>`, `<a>` pass through. |
| `<img>` | `core/image` | `sizeSlug:full`, `linkDestination:none`. `rounded-full` → `is-style-rounded-full`; `rounded-card` → border radius 5px; `w-[60px] h-[60px]` avatars → `width`/`height` + `is-resized`. `src` relative to `../patterns/images/` is rewritten to the theme URI. |
| `<div class="buttons">` + `<a>` | `core/buttons` + `core/button` | `.justify-center` → buttons layout. `a.btn-brand`, `a.btn-light`, `a.btn-dark`, `a.btn-tint`, `a.btn-brand-alt` → `is-style-*`; `a.btn` → default. `w-full` → `width:100`. |
| `<ul>`/`<ol>` + `<li>` | `core/list` + `core/list-item` | |
| `<blockquote>` + `<p>` + `<cite>` | `core/quote` | |
| `<hr>` | `core/separator` | |
| any element with `data-block='{"name":"core/x","attrs":{...}}'` | that block, attrs merged | hybrid escape hatch; children still converted |

Style class mapping (applies to any element where the block supports it):

- `bg-{color}` → `backgroundColor`; adds paired `textColor` (primary↔primary-accent, primary-alt↔primary-alt-accent, main→base, tertiary/base→none) unless `text-{color}` is set explicitly.
- `text-{color}` → `textColor`. `text-{size}` → `fontSize`. `font-{family}` → `fontFamily`. `font-{weight}` → `style.typography.fontWeight` (numeric). `leading-{x}` → `style.typography.lineHeight`. `uppercase` → `textTransform`.
- `p-*`, `px-*`, `py-*`, `pt-*` … → `style.spacing.padding`. `m*` → `margin`. `gap-*` → `style.spacing.blockGap`.
- `border` + `border-{color}` → `style.border.width:1px` + `borderColor`. `rounded-card` → `style.border.radius:5px`.
- `shadow-{x}` → `style.shadow: var:preset|shadow|x`.
- `min-h-full` → `style.dimensions.minHeight:100%`.
- `text-center` / `items-center` / `justify-*` → alignment attributes per block.
- Class values are token slugs only; a class not in the vocabulary is an error.

Everything else is an **error, not a guess**: the converter reports `file:line — unmapped <tag> / unknown class "x"` and exits non-zero for that file. Unresolved cases get either a dialect extension or a `data-block` override.

## Pattern header

Each HTML file starts with a front-matter comment the converter turns into the PHP docblock:

```html
<!--
Title: Feature Grid
Slug: ollie/feature-grid
Categories: ollie/features
Keywords: features, grid, cards
Viewport Width: 1500
-->
```

`Description`, `Block Types`, `Post Types` default to empty; `Inserter` defaults to true. The `<body>` may contain exactly one top-level element (the pattern root). Everything in `<head>` is ignored.

## Output format

`patterns/<slug>.php` matches the existing 117 patterns:

- Docblock header, then block markup indented one tab per nesting level.
- Root block gets `metadata.name` = Title, plus `metadata.categories` and `metadata.patternName` like existing patterns.
- Attribute JSON key order follows WordPress's serializer as seen in existing files (metadata, align, className, style, backgroundColor, textColor, fontSize, layout).
- Inner HTML classes and inline styles are generated the way WordPress's block supports emit them (`has-x-background-color has-background`, `has-text-align-center`, `padding-top:var(--wp--preset--spacing--large)`).
- Text is written plain. After conversion the converter shells out to `node theme-utils.mjs escape-patterns` on that file, which wraps strings in `esc_html_e()` / `esc_attr_e()` and rewrites image paths. We reuse it rather than duplicating it.

## Review flow

For each converted pattern, the operator (Claude) creates a page titled `DL: <Title>` on the local site through the `ollie/manage-posts` ability with the generated markup, which runs the Ollie design linter. It returns two links: the WordPress page and the HTML source path. No gallery UI.

## Aesthetic rules

`README.md` holds the rules that make screenshots generalize. They point at the ollie skill's `design/ARCHETYPES.md` and `design/PRESETS.md` rather than restating them, and add the dialect-specific defaults:

- Section rhythm: `py-xx-large px-medium` outer; `gap-x-large` between title stack and body; `gap-small` inside a title stack.
- Title stack: eyebrow (`p.text-small.font-medium.text-primary`, `text-main-accent` on dark), `h2`, lede `p` (`text-secondary` on light, `text-main-accent` on dark). Centered unless the archetype is split-layout.
- Cards: `bg-base border border-border-light rounded-card p-medium min-h-full`, flex column, `gap-small` content. On tint sections cards are `bg-base`; on base sections cards are `bg-tertiary` with no border.
- Buttons: primary action `btn-brand`, secondary `btn-light` on dark or `btn-tint` on light; `text-x-small w-full` inside cards.
- Images: `rounded-card` for content images, `rounded-full` + 60px for avatars; reuse `patterns/images/*` assets.
- Dark sections: `bg-main`; headings inherit `base`, body copy `text-main-accent`.
- Never introduce a class outside `tokens.css`; if a screenshot needs one, note the gap instead.

## First test set

Three designs prove the pipeline end to end: `hero-centered` (section, title stack, buttons, wide image), `feature-grid-3` (grid of cards, buttons in cards), `testimonial-row` (columns of quote cards with avatars). Screenshot-driven designs follow only after these round-trip cleanly.

## Testing

- `node --test design-library/build/test/` — fixture per mapping rule: minimal HTML in, expected block markup out (string equality on normalized whitespace). One test asserts that an unknown tag and an unknown class are reported with file and line and that the converter returns non-zero for that file.
- `gen-tokens` test: output contains every palette slug and spacing slug from `theme.json`.
- Integration: inserting the generated markup via the manage-posts ability passes the linter with no errors.

## Out of scope

Cloud pattern upload, a gallery UI, Figma import, arbitrary Tailwind classes, screenshots as pixel targets, and pattern variants per style variation.
