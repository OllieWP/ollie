# Ollie Design Library

Design patterns as plain HTML, using a Tailwind vocabulary that contains **only Ollie's design tokens**, then convert them mechanically into `patterns/*.php`. The HTML is the guardrail: if a class is not a token it does not render, and if a tag or class has no block mapping the converter refuses to guess.

```
design-library/
  README.md               this file
  tokens.css              GENERATED from theme.json — do not edit
  preview.js              loads tokens.css + Tailwind in the browser
  designs/<slug>.html     one design per file
  build/gen-tokens.mjs    theme.json → tokens.css
  build/convert.mjs       designs/*.html → patterns/<slug>.php
  build/lib/              parser, class mapper, block mappers, serializer
  build/test/             node:test fixtures
```

## Workflow

```bash
npm run dl:tokens            # regenerate tokens.css after theme.json changes
npm run dl:preview           # serve the theme at http://localhost:8787 (open /design-library/designs/<slug>.html)
npm run dl:convert           # convert every design into patterns/
npm run dl:convert -- design-library/designs/hero-centered.html   # one design
npm run dl:convert -- --markup --base-url=https://site.local/wp-content/themes/ollie design-library/designs/hero-centered.html
                             # plain block markup (no PHP) for pasting into a page
npm run dl:test              # converter tests
```

Designs must be viewed over HTTP (the Tailwind browser build fetches `tokens.css`), so use `dl:preview` or the site's own URL.

## Design file anatomy

```html
<!--
Title: Feature Grid
Slug: ollie/feature-grid-3
Categories: ollie/features
Keywords: features, grid, cards
Viewport Width: 1500
-->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Feature Grid</title>
  <script src="../preview.js"></script>
</head>
<body>
<section class="bg-tertiary gap-x-large">
  ...one root element only...
</section>
</body>
</html>
```

The front-matter comment becomes the pattern's PHP docblock. `Description`, `Block Types`, `Post Types` default to empty; `Inserter` defaults to `true`. The body holds exactly one root element.

## Token classes (the whole vocabulary)

| Purpose | Classes | Maps to |
|---|---|---|
| Background | `bg-primary` … any palette slug | `backgroundColor`, plus a paired `textColor` (main→base, primary→primary-accent, …) unless `text-*` is set |
| Text color | `text-primary`, `text-secondary`, `text-main-accent`, `text-base` … | `textColor` |
| Border | `border`, `border-border-light`, `border-border-dark` | `style.border.width: 1px`, `borderColor` |
| Font size | `text-x-small`, `text-small`, `text-medium`, `text-large`, `text-x-large`, `text-xx-large` | `fontSize` (`base` is the default and has no class) |
| Font family | `font-primary`, `font-expanded`, `font-condensed`, `font-narrow`, `font-monospace` | `fontFamily` |
| Font weight | `font-regular`, `font-medium`, `font-semi-bold`, `font-bold`, … | `style.typography.fontWeight` |
| Line height | `leading-none`, `leading-tight`, `leading-snug`, `leading-body`, `leading-relaxed`, `leading-loose` | `style.typography.lineHeight` |
| Padding / margin | `p-large`, `px-medium`, `py-xx-large`, `pt-0`, `mt-x-large` … (`small` → `xxxx-large`, or `0`) | `style.spacing.padding` / `margin` |
| Gap | `gap-small` … `gap-xxxx-large`, `gap-0` | `style.spacing.blockGap` |
| Radius | `rounded-card` (5px), `rounded-full` (images only) | `style.border.radius` / `is-style-rounded-full` |
| Shadow | `shadow-small-light` … `shadow-extra-large-dark` | `style.shadow` |
| Width | `max-w-wide`, `max-w-full`, `w-full`, `w-1/2` `w-1/3` `w-2/3` `w-1/4` `w-3/4`, `w-[60px]` `h-[60px]` (images) | `align`, button `width`, column `width`, image `width`/`height` |
| Aspect ratio | `aspect-square`, `aspect-video`, `aspect-[4/3]` (images) | `aspectRatio` + `scale: cover` |
| Alignment | `text-center` `text-left` `text-right`, `items-*`, `justify-*` | `align` / `textAlign` / layout alignment |
| Misc | `uppercase`, `italic`, `min-h-full` | typography / `dimensions.minHeight` |

Anything else (`p-4`, `text-xl`, `bg-blue-500`, hex values) fails in both the preview and the converter.

## Structure classes (tags carry structure)

| HTML | Block |
|---|---|
| `<section>` | Full-width Group (`align:full`, `layout: constrained + inherit`, `tagName: section`). Default padding `py-xx-large px-medium`. Children are content-width; give a child `max-w-wide` for wide. |
| `<div>` | Group, constrained by default. `flex` → horizontal flex (`flex-wrap` to wrap); `flex-col` → vertical flex; `grid grid-cols-N` → grid with `minimumColumnWidth` (responsive, collapses on mobile); add `grid-fixed` for `columnCount:N`. |
| `<div class="columns">` + `<div class="column">` | Columns / Column. `items-center` on `.columns` → vertical alignment; `w-1/3` on a column → width. |
| `<h1>`–`<h6>` | Heading (level from tag). |
| `<p>` | Paragraph. Inline `<strong> <em> <a> <span> <br> <code>` pass through. |
| `<img src="../../patterns/images/x.webp">` | Image. `rounded-full w-[60px] h-[60px]` for avatars; `rounded-card` for content images; `max-w-wide` for wide. `src` must point into `patterns/images/`. |
| `<div class="buttons">` + `<a class="btn-brand">` | Buttons / Button. Styles: `btn` (default dark), `btn-brand`, `btn-brand-alt`, `btn-dark`, `btn-light`, `btn-tint`. `w-full` → 100% width. `justify-center` on `.buttons`. |
| `<ul>` `<ol>` + `<li>` | List / List item. |
| `<blockquote>` + `<p>` + `<cite>` | Quote. |
| `<hr>` | Separator. |
| `data-name="Titles"` on any element | `metadata.name` (the label shown in List View). |
| `data-block='{"name":"core/x","attrs":{...}}'` | **Escape hatch.** Merges attributes into the mapped block (or retargets it). Use it for anything the dialect lacks, and note the gap. |

Flex axis mapping follows WordPress: on a horizontal flex, `justify-*` is `justifyContent` and `items-*` is `verticalAlignment`; on a vertical flex they swap. Defaults mirror WordPress too: a horizontal `flex` centers items vertically, a `flex-col` stretches them.

## Aesthetic rules (how a screenshot becomes an Ollie pattern)

A screenshot or prompt is an *input*. Identify its archetype (hero, feature grid, testimonial, pricing, CTA, FAQ, logo row, split content, footer) and rebuild it with these defaults. Never copy pixel values.

- **Section rhythm.** `<section>` with default padding (`py-xx-large px-medium`) and `gap-x-large` between the title stack and the body. Alternate `bg-base` and `bg-tertiary` sections; use `bg-main` for one dark section per page at most.
- **Title stack.** `<div data-name="Titles" class="gap-small">` containing: eyebrow `p.text-center.text-primary.text-small.font-medium` (`text-main-accent` on dark), `h2` (or `h1` with `text-xx-large leading-tight` in a hero), lede `p.text-center.text-secondary` (`text-main-accent` on dark). Centered unless the archetype is a split layout.
- **Cards.** On `bg-tertiary` sections: `bg-base border border-border-light rounded-card p-medium min-h-full flex-col justify-between gap-medium`. On `bg-base` sections: `bg-tertiary rounded-card p-large` with no border. Inner text stack `gap-small`; body copy `text-small text-secondary`.
- **Buttons.** Primary action `btn-brand`; secondary `btn-tint` on light, `btn-light` on dark. Inside cards: `btn-tint w-full text-x-small`.
- **Images.** Content images `rounded-card`, wide screenshots `max-w-wide rounded-card`; avatars `rounded-full w-[60px] h-[60px]`. Reuse `patterns/images/*`.
- **Grids.** Three cards → `grid grid-cols-3 gap-large max-w-wide`. Two-up split content → `columns items-center gap-x-large max-w-wide`.
- **Typography.** Headings inherit the theme; only set `text-*` sizes when the archetype needs a display size. Weight `font-medium` for eyebrows and names, `font-semi-bold` for card titles.
- **Gaps in the dialect.** If a design genuinely needs something the vocabulary lacks, use `data-block` and record the need here rather than inventing a class.

## Review

For each converted pattern, create a page on the local site from the `--markup` output (through the `ollie/manage-posts` ability, which runs the design linter) and check the page next to the HTML preview.
