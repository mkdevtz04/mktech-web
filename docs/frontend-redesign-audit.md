# Frontend Redesign Audit — MK Tech → ArtCraft visual language

Date: 2026-10-12
Scope: Visual/frontend redesign only. No backend, routing, auth, or data changes.

## 1. Existing application

- Laravel **13.4.0**, PHP 8.4, installed via `laravel/laravel` skeleton.
- Auth scaffolding: **Laravel Breeze** (Livewire/Volt variant) + Tailwind v4 via Vite. This powers `/login`, `/register`, `/forgot-password`, `/reset-password`, `/confirm-password`, `/verify-email`, `/dashboard`, `/profile`.
- The **public marketing site** (home + 5 service pages) is plain Blade + **hand-written CSS** served directly from `public/css/style.css` (not compiled by Vite, not Tailwind). This is the only part in scope for this redesign.
- Two completely separate frontend stacks coexist in the repo:
  1. `resources/views/layouts/app.blade.php` / `guest.blade.php` + `resources/css/app.css` (Tailwind v4, Vite) → Breeze auth + dashboard/profile. **Out of scope, not modified.**
  2. `resources/views/layouts/main.blade.php` + `public/css/style.css` (plain CSS, cache-busted with `filemtime()`) → homepage + service pages. **In scope.**

### Routes (`routes/web.php`)
```
GET  /                     welcome.blade.php
GET  /services/it          services.it
GET  /services/graphics    services.graphics
GET  /services/web         services.web
GET  /services/mobile      services.mobile
GET  /services/cctv        services.cctv
GET  /dashboard  (auth)    dashboard.blade.php
GET  /profile    (auth)    profile.blade.php
      + routes/auth.php (Breeze/Volt: login, register, password reset, email verify)
```
No contact-form POST route exists — the "Contact" section is `mailto:` / `tel:` / WhatsApp links only, no CSRF-protected form to preserve.

### In-scope templates
- `resources/views/layouts/main.blade.php` — shared header/nav + footer, used by every public page.
- `resources/views/welcome.blade.php` — homepage: hero, services grid, team, testimonials, contact.
- `resources/views/services/{it,web,mobile,graphics,cctv}.blade.php` — five near-identical detail pages (page-header breadcrumb + 2-column body + sidebar CTA + "explore other services" list). Only copy/icon/links differ between them; all layout is duplicated inline per file.
- `public/css/style.css` (1039 lines) — all public-site styling. Uses hardcoded hex colors (`#1e3a8a` brand blue, `#f8fafc`/`#e2e8f0` slate neutrals), Inter font, 4px/8px border-radius, box-shadow-based cards.
- `public/images/*.png` — logo (`mktech.jpg`), hero image (`main.png`), 5 service icons, 3 team photos, social icons, contact icons.

### Out of scope (not modified)
- `layouts/app.blade.php`, `layouts/guest.blade.php`, all `livewire/**` auth views, `dashboard.blade.php`, `profile.blade.php`, `resources/css/app.css`, `resources/js/app.js`, Tailwind/Vite config, all controllers, `routes/auth.php`, migrations, `app/Models`, `app/Http/Controllers/Auth`.

### Verified: live site matches repo
Fetched `https://www.mktech.co.tz/` (redirects from `mktech.co.tz`) — same section IDs (`services`, `team`, `testimonials`, `contact`), same H1 copy, same `css/style.css` link as the local working tree. The repo is the live source of truth; no drift to reconcile.

## 2. ArtCraft reference (`getartcraft.com`) — observed design tokens

Inspected the live Next.js build's compiled CSS/HTML directly (more precise than eyeballing screenshots: exact hex values, font stacks, spacing scale pulled from the shipped stylesheet).

**Typography**
| Role | Font | Notes |
|---|---|---|
| Display / headlines | **Archivo** (variable) | `font-weight: 620; font-stretch: 118%` — slightly bold, slightly expanded. Tight tracking (`-0.03em` to `-0.04em`), tight leading (`0.98`–`1.1`). |
| Accent words inside headlines | **Instrument Serif**, italic | Used as a `<span>` inline accent for 1-3 key words per headline, normal weight, muted color — e.g. "Capable tools *for artists.*" |
| Body copy | **Inter** | `text-lg leading-relaxed`, muted ink color, not pure black. |
| Small labels / buttons / eyebrows | **Geist Mono** (monospace) | uppercase, `letter-spacing: .12em`–`.25em`, 11px, bold — used for nav CTAs, section eyebrow tags ("Product"), button labels. |

The task brief suggested Outfit/Source Sans 3; actual production fonts are **Archivo + Inter + Instrument Serif** (+ a mono for labels). All four are free Google Fonts — closest-available match using what's actually observed rather than the brief's guess, per the task's own instruction to defer to observed usage.

**Color tokens** (CSS variables, light mode)
```
--bg:            #f2f1ee   warm off-white page background
--bg-raised:     #faf9f7   card background
--bg-sunken:     #e9e8e4   recessed panels
--ink:           #101014   primary text (not pure black)
--ink-strong:    #000000   headline text
--muted:         #101014 @ 62% alpha   secondary text
--faint:         #101014 @ 42% alpha   tertiary text / labels
--line:          #101014 @ 16% alpha   hairline borders (primary visual separator)
--line-strong:   #101014 @ 40% alpha   stronger borders (buttons)
--accent:        #2d81ff   blue accent / links
--accent-ink:    #1659c4   accent hover/active
--invert-bg:     #101014   solid dark surface (primary buttons, dark bands)
--invert-fg:     #f2f1ee   text on invert-bg
```
Notably ArtCraft's accent blue (`#2d81ff`) sits in the same family as MK Tech's existing brand blue (`#1e3a8a`) — the redesign keeps MK Tech's own blue as the accent/ink-strong color rather than adopting ArtCraft's, satisfying "retain MK Tech identity" while still reading as the same restrained, blue-on-neutral palette.

**Structure / layout**
- `border-radius: 0` everywhere — sharp, architectural corners (buttons, cards, inputs, nav).
- Hairline borders (`--line`) used instead of box-shadow for almost all separation; grids built as `gap-px` over a `--line`-colored background so dividers render as 1px rules between cells.
- Sticky nav, fixed height `48px` (`h-12`), `border-bottom: 1px solid var(--line)`, translucent + blurred background (`bg-bg/95 backdrop-blur-sm`), logo cell separated from nav links by a vertical hairline border, nav items are plain text links (no pill backgrounds).
- Buttons: fixed height `48px`, `rounded-none`, mono uppercase label, letter-spacing `0.12em`. Primary = solid `invert-bg`/`invert-fg` and 80%-opacity hover. Secondary = `1px` border in `line-strong`, transparent background, border disappears on hover as it inverts.
- Headlines: large (`text-4xl`–`text-7xl` responsive), tight tracking/leading, italic serif word treatment for emphasis.
- Section eyebrows: small mono uppercase "hud-label" tag (e.g. "Product") above each heading.
- Generous section padding, content capped at `max-width: 1280px` container, with narrower `max-width` (40–64rem) for paragraph text to keep line length readable.
- Subtle `duration-150` opacity/color transitions on hover; no heavy motion or decorative imagery — photography/showcase media is used large and uncropped-looking (editorial), not as small thumbnails.

## 3. Mapping ArtCraft patterns → MK Tech content (Phase 4/5 plan)

No new sections/pages are invented. Every existing section/page is restyled in place:

| MK Tech section (existing) | ArtCraft-style treatment |
|---|---|
| Navbar (`layouts/main.blade.php`) | Flatten to 48–56px hairline-bordered bar, cream/white bg with blur, logo cell separated by a vertical rule, mono-uppercase nav links, solid dark "Contact" CTA on the right. |
| Hero (`welcome.blade.php`) | Large Archivo headline with an Instrument-Serif italic accent on key words (e.g. "Technology *& Security* Solutions"), mono uppercase eyebrow label, two buttons (solid primary / outlined secondary) in the fixed-height ArtCraft button style, real hero image (`main.png`) with a hairline frame instead of a grey placeholder box. |
| Services grid | Converted to a hairline-divided grid (`gap: 1px` over a line-colored background) instead of individual bordered/shadowed cards; mono label + icon + Archivo heading + muted body text; "Need a custom service" tile becomes an inverted (dark) cell for contrast, matching ArtCraft's occasional inverted block pattern. |
| Team ("Meet Our Experts") | Same 3 existing people/photos, restyled as flat hairline-bordered cells, name in Archivo, role as a mono uppercase label (replacing the pill/uppercase-blue styling). |
| Testimonials | Existing 3 quotes kept verbatim; card treatment flattened to hairline border, serif italic quotation mark, mono uppercase company label. |
| Contact | Existing mailto/tel/WhatsApp links and business hours kept; restyled into the same hairline two-column panel treatment, buttons unified with the new button system. |
| Footer | Same 4 columns (About, Services, Quick Links, Social) and copy kept; flattened to hairline dividers instead of the current gradient-underline heading accents, mono uppercase column headings. |
| Service detail pages (`services/*.blade.php`) | Identical breadcrumb → body → sidebar structure kept per page; inline styles replaced by the new shared classes; sidebar CTA box and "Explore other services" list extracted into one reusable Blade component (`<x-service-sidebar>`) since the markup was byte-for-byte duplicated five times — pure de-duplication, no behavior change. |

No testimonials/stats/certifications are invented — the three existing testimonials, three existing team members, and existing service copy are reused as-is.

## 4. Proposed file changes

| File | Change |
|---|---|
| `public/css/style.css` | Rewrite as the new design system: CSS variables (color/type/spacing tokens), base styles, nav, buttons, hero, services grid, team, testimonials, contact, footer, service-detail page classes, responsive breakpoints. Same file/path, same enqueue mechanism (`filemtime()` cache-bust), no build step changes. |
| `resources/views/layouts/main.blade.php` | New nav markup (logo cell, hairline, mono nav links, CTA button) + new footer markup (same columns/links/copy, flattened styling); add Google Fonts `<link>` for Archivo/Inter/Instrument Serif alongside the existing Inter import; keep hamburger JS behavior as-is (selectors unchanged). |
| `resources/views/welcome.blade.php` | Re-markup hero/services/team/testimonials/contact sections with new classes and an eyebrow label + serif accent span in the hero headline; same copy, same routes/anchors (`#services`, `#team`, `#testimonials`, `#contact`), same images. |
| `resources/views/services/it.blade.php`, `web.blade.php`, `mobile.blade.php`, `graphics.blade.php`, `cctv.blade.php` | Replace inline `style="..."` attributes with the new shared classes; replace the duplicated sidebar markup with `<x-service-sidebar :current="'it'">` (etc.), passing only the varying bits (title, CTA heading/copy/button label, other-services list) — copy and routes unchanged. |
| `resources/views/components/service-sidebar.blade.php` (new) | New, small Blade component purely for de-duplicating the identical sidebar markup across the 5 service pages. Not a new page/route — a presentational partial. |
| `public/images/*` | Reused as-is. No new images invented; existing hero/service/team photos are kept (ArtCraft's large-image treatment is achieved via CSS framing, not new assets). |

Not touched: `routes/*.php`, any controller, `database/*`, `.env`, `composer.json`, `package.json`, `vite.config.js`, `tailwind.config.js`, Breeze/Livewire views, `resources/css/app.css`, `resources/js/app.js`.

## 5. Baseline toolchain check (for later regression testing)
- `php -v` → PHP 8.4.0, `php artisan --version` → Laravel 13.4.0 — OK.
- `node -v` → v22.14.0, `npm -v` → 10.9.2 — OK.
- `git status` at task start: clean working tree on `main` (only an untracked `storage/framework/lsp-*.php` scratch file, unrelated to this task).

## 6. Risks / notes
- Auth pages (Breeze, via `layouts.guest`/`layouts.app` + Tailwind) intentionally keep their current styling — restyling them was not requested and touching `resources/css/app.css`/Tailwind config would cross into the "don't modify architecture" boundary. **One exception, discovered during the audit:** `livewire/pages/auth/login.blade.php` was already customized (before this task) to use `#[Layout('layouts.main')]` and the plain-CSS classes (`.auth-wrapper`, `.form-control`, `.btn`, etc.) instead of Tailwind. It is therefore restyled automatically by the `style.css` rewrite — no Blade changes were needed there, and no other auth page (register/forgot-password/reset-password/confirm-password/verify-email/dashboard/profile) was touched.
- ArtCraft ships both a light and a dark theme (`prefers-color-scheme`-driven, same CSS variables swap value). The redesign deliberately adopts the **light** variant — it's the explicit `:root` default in their stylesheet, and it stays far closer to Mktech's existing white/navy identity than the dark variant would. No dark mode was added to Mktech (none existed before, none was requested).
- **Pre-existing, unrelated issue found during regression testing:** `npm run build` fails (`Can't resolve 'tailwindcss'`). This predates this task entirely — `breeze_error.txt` in the repo root documents the original `php artisan breeze:install` run failing mid-way (a `copy()` of a stub `resources/css/app.css` failed, which aborted that installer before it finished setting up the Tailwind/Vite Node toolchain), and `node_modules/tailwindcss` is confirmed incomplete (missing `package.json`/core files). This only affects the Tailwind pipeline used by the Breeze auth views load through `layouts.guest`/`layouts.app`; the public site redesigned here never calls Vite and is unaffected. Not fixed here (out of scope — would mean touching Node dependencies and the Breeze install state), but flagged since Phase 9 asks to confirm the build succeeds.

## 7. Responsive & regression verification (Phases 7–9)
- Headless-Chrome's plain `--screenshot` CLI flag was found to have a genuine viewport bug (confirmed with a trivial isolated test page, unrelated to this project, reproducible in both Chrome and Edge) where narrow `--window-size` values don't actually constrain text reflow, producing misleading "clipped" captures. Switched to driving the already-installed Chrome via `puppeteer-core` (installed only in the session scratch directory, not added to the project) with `page.setViewport()`, which sets the real layout viewport correctly.
- Verified `document.documentElement.scrollWidth === clientWidth` (i.e. **zero horizontal overflow**) at 1440×1000, 1366×768, 768×1024, and 390×844 on `/`, `/services/web`, and `/login`.
- Found and fixed one real responsive bug along the way: `.hero .container` kept `align-items: center` (a desktop rule) after switching to `flex-direction: column` on mobile, which let `.hero-content` shrink-wrap to its text's unwrapped width instead of stretching to the viewport. Fixed with an explicit `align-items: stretch` override in the mobile breakpoint (same latent issue pre-emptively fixed on `.footer-bottom .container`).
- Found and fixed a layout polish issue: `.team-grid`/`.testimonial-grid` (3 static items each) used `auto-fit, minmax(300px,1fr)`, which left an orphaned empty cell at tablet widths where exactly 2 of the 3 tracks fit. Changed to a fixed 3-column grid that drops straight to 1 column at ≤900px, skipping the uneven 2-up state.
- `php artisan test` — **26/26 passed** (all Breeze auth + profile feature tests, including the login screen render test, which exercises the restyled `layouts.main` + new `style.css`).
- Manually verified via HTTP: all 5 service routes, `/`, `/login`, `/register` return 200; `css/style.css` returns 200; rendered HTML has balanced `<div>` tags and no PHP/Blade error strings on `/` and `/services/web`.
- `npm run build`: fails for the pre-existing, unrelated reason documented above; not a regression from this change.

## 8. Before / after
Screenshots were captured locally (desktop 1440×1000, tablet 768×1024, mobile 390×844) comparing the stashed original against the redesign, plus the service-detail and login pages. The redesign is a deliberate, large visual departure (navy-block navbar/footer → light hairline-bordered editorial layout) while every route, link, form, section anchor, and piece of copy is unchanged. No pixel-perfect claim is made against ArtCraft — the comparison was done against ArtCraft's actual shipped CSS tokens (Section 2), not a side-by-side pixel diff, since ArtCraft is a separate, unrelated product.

## 9a. Light/dark theme toggle (added post-launch, per request)
The design system was already token-based (CSS custom properties for every color), so dark mode is a second value set rather than a parallel stylesheet:
- `:root[data-theme="dark"]` in `style.css` overrides every color token (surfaces, ink, lines, brand, and the `--invert-*` pair) with a dark palette. `--invert-bg`/`--invert-fg` deliberately flip meaning with the theme (always "the other surface"), so primary buttons and the inverted service tile stay high-contrast in both themes automatically.
- A small inline script in `layouts/main.blade.php`'s `<head>` (before the stylesheet) applies the saved choice from `localStorage` before first paint, so there's no flash of the wrong theme.
- A `.theme-toggle` button (sun/moon inline SVGs, no icon library) sits in the nav, between the auth link and the Contact CTA; a second script wires its click handler and persists the choice to `localStorage` under `mktech-theme`. Default is light; dark is opt-in and remembered across visits.
- Two hardcoded colors that would have broken dark mode were fixed to use tokens: the navbar's translucent background (`rgba(243,241,236,.92)` → `rgba(var(--bg-rgb), .92)`, with a new `--bg-rgb` token per theme) and the inverted service tile's paragraph color (hardcoded light rgba → new `--invert-muted` token).
- Fixed one polish issue found while reviewing dark mode: the small 48px service-grid icons carry baked-in white backgrounds (can't be re-exported — existing assets are preserved as-is), which read as odd white blobs on dark cards. Gave `.service-icon` a permanent white chip + hairline border so it reads as an intentional icon badge in both themes.
- Verified via `puppeteer-core`: toggling persists across reload with the correct theme applied pre-paint, and zero horizontal overflow in dark mode at 1440×1000 and 390×844 on `/`, `/services/web`, and `/login`. `php artisan test` still 26/26 after the change.
- **Follow-up fix (user-reported):** several image containers (`.hero-image-box`, `.team-img-placeholder`, `.contact-info-icon`, `.social-icon`, `.service-media`) still used theme-variable backgrounds. Where an image doesn't fully cover its box (icons with transparent padding, non-square photos under `object-fit`), the container's background showed through and shifted with the theme — e.g. a white-background social badge sitting in a chip that flipped dark, making the image look like it was fading/changing. Pinned all five to a fixed `#ffffff` background (same fix already applied to `.service-icon` in the original pass) so every image reads identically — "as is" — in both themes; only the surrounding card/border chrome still adapts. Re-verified: 26/26 tests, zero overflow, confirmed visually in both themes via screenshots.
- Scope: only the public site + `login.blade.php` (which already shares this stylesheet) gained a toggle. The Breeze/Tailwind auth pages (register, dashboard, profile, etc.) are untouched and have no toggle — adding one there would mean editing the separate Tailwind pipeline, which is out of scope and, per the earlier audit, currently has a pre-existing broken build.

## 9. Modified files
- `public/css/style.css` — full design-system rewrite (same file/path, same cache-busting) plus the dark-theme token set and toggle/icon styles added afterward.
- `resources/views/layouts/main.blade.php` — new nav/footer markup, font preconnects, fixed a pre-existing empty login-link label and a pre-existing stray unmatched `</div>` in the footer; plus the theme-toggle button, FOUC-prevention script, and toggle click handler added afterward.
- `resources/views/welcome.blade.php` — re-marked-up with the new classes; copy unchanged except adding small eyebrow labels above existing section headings (no headings' own text changed) and one new, non-factual services-section lead line.
- `resources/views/services/{it,web,mobile,graphics,cctv}.blade.php` — inline styles replaced with shared classes; sidebar markup replaced by the new `<x-service-sidebar>` component; copy/routes unchanged.
- `resources/views/components/service-sidebar.blade.php` — new, presentational-only Blade component (de-duplicates the 5 identical sidebars).
- `docs/frontend-redesign-audit.md` — this document.
- Not touched: routes, controllers, migrations, `.env`, `composer.json`/`package.json`/`vite.config.js`/`tailwind.config.js`, any Breeze/Livewire view other than the CSS classes `login.blade.php` already depended on, `public/images/*` (reused as-is).
