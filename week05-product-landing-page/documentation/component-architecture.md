# Overnight Cafe — Component Architecture

## Overview

This document describes the frontend component architecture of the Overnight Cafe landing page, built with Laravel Blade Components and Tailwind CSS v4.

---

## Component Tree

```
layouts/app.blade.php          ← Root layout (wraps all pages)
│
├── components/navbar.blade.php         ← Sticky navigation bar
├── pages/home.blade.php                ← Main landing page
│   ├── components/hero.blade.php           ← Hero section
│   ├── [Features Section]               ← Inline in home.blade.php
│   │   └── components/feature-card.blade.php  ← Reusable feature card (×6)
│   ├── components/showcase.blade.php       ← Product showcase section
│   ├── [Pricing Section]                ← Inline in home.blade.php
│   │   └── components/pricing-card.blade.php  ← Reusable pricing card (×3)
│   ├── [Testimonials Section]           ← Inline in home.blade.php
│   │   └── components/testimonial-card.blade.php ← Reusable testimonial (×6)
│   └── components/cta-section.blade.php    ← Call-to-action section
└── components/footer.blade.php         ← Site footer
```

---

## Component Reference

### `x-layouts.app`
**File:** `resources/views/layouts/app.blade.php`

The root layout that all pages extend. Includes:
- Google Fonts (Inter, Playfair Display)
- Vite-compiled CSS and JS
- Navbar and Footer components
- Mobile menu JS
- Navbar scroll-blur effect JS

**Props:** `$title` (optional page title)

---

### `x-navbar`
**File:** `resources/views/components/navbar.blade.php`

Fixed top navigation bar with:
- SVG moon/steam logo mark + wordmark
- Desktop nav links (Home, Features, Pricing, Testimonials, Contact)
- Sign In + Get Started CTA buttons
- Responsive hamburger menu for mobile
- Scroll-triggered background blur (via layout JS)

---

### `x-hero`
**File:** `resources/views/components/hero.blade.php`

Full-viewport hero section with:
- Animated gradient background blobs + subtle grid pattern
- Badge, headline (gradient text), description, stat counters
- Two CTA buttons (`x-button` component)
- Animated SVG coffee cup illustration with steam and latte art
- Floating info badges (open hours, specialty brew)
- Scroll indicator

---

### `x-button`
**File:** `resources/views/components/button.blade.php`

Reusable button/link component.

| Prop | Type | Default | Options |
|------|------|---------|---------|
| `variant` | string | `primary` | `primary`, `secondary`, `ghost`, `outline` |
| `size` | string | `md` | `sm`, `md`, `lg` |
| `href` | string | `null` | Any URL |
| `type` | string | `button` | `button`, `submit`, `reset` |

Renders as `<a>` when `href` is provided, otherwise `<button>`.

---

### `x-feature-card`
**File:** `resources/views/components/feature-card.blade.php`

Card for displaying a single product/service feature.

| Prop | Type | Default |
|------|------|---------|
| `icon` | string | `☕` |
| `title` | string | `Feature` |
| `description` | string | `''` |
| `accent` | boolean | `false` |

Includes hover lift animation, top-glow border, and optional "Featured" badge.

---

### `x-pricing-card`
**File:** `resources/views/components/pricing-card.blade.php`

Pricing plan card with full feature list.

| Prop | Type | Default |
|------|------|---------|
| `plan` | string | `Starter` |
| `price` | string | `₱0` |
| `period` | string | `/month` |
| `desc` | string | `''` |
| `features` | array | `[]` |
| `popular` | boolean | `false` |
| `cta` | string | `Get Started` |

When `popular=true`, renders with amber background and `scale-105` prominence.

---

### `x-testimonial-card`
**File:** `resources/views/components/testimonial-card.blade.php`

Customer testimonial card with star rating and author info.

| Prop | Type | Default |
|------|------|---------|
| `name` | string | `Customer` |
| `position` | string | `Regular` |
| `review` | string | `''` |
| `avatar` | string/null | `null` |
| `initials` | string | `C` |
| `rating` | int | `5` |

Falls back to an initials-based avatar when no `avatar` URL is provided.

---

### `x-showcase`
**File:** `resources/views/components/showcase.blade.php`

Product showcase section featuring:
- Browser-style dashboard mockup with live menu preview
- 4 key highlights grid (mobile ordering, notifications, reservations, speed)
- 3 bottom feature cards (night mode UI, brew tracker, playlist voting)

---

### `x-cta-section`
**File:** `resources/views/components/cta-section.blade.php`

Call-to-action section with:
- Ambient glow background + grid overlay
- Floating moon icon animation
- Primary "Start Free Trial" + secondary "Contact Sales" buttons
- Register nudge text
- 4 trust badges

---

### `x-footer`
**File:** `resources/views/components/footer.blade.php`

Full site footer with 4-column grid:
1. Brand logo, tagline, social media icons
2. Quick links (nav anchors)
3. Menu categories
4. Contact info (address, hours, email, phone)

Includes bottom bar with copyright and policy links.

---

## Design System

### Color Palette

| Token | Hex | Usage |
|-------|-----|-------|
| `night-950` | `#050505` | Deepest background |
| `night-900` | `#0a0a0a` | Primary background |
| `night-800` | `#111111` | Card backgrounds |
| `night-700` | `#1a1a1a` | Elevated surfaces |
| `amber-warm` | `#d4a843` | Primary brand accent |
| `amber-light` | `#f0c060` | Hover states |
| `amber-glow` | `#e8b84b` | Glow effects |
| `cream` | `#f5f0e8` | Light text alt |
| `mist` | `#a0a0a0` | Muted text |

### Typography

- **Primary:** Inter (300–900 weight)
- **Accent:** Playfair Display (700–800, used for display headings)

### Animations

| Class | Effect |
|-------|--------|
| `.moon-float` | Gentle vertical float (4s loop) |
| `.steam-1/2/3` | Staggered steam rise animation |
| `.card-lift` | Hover lift + shadow |
| `.amber-glow` | Ambient box-shadow |
| `.gradient-text` | Amber gradient text fill |
| `.fade-in-up` | Scroll reveal (opacity + translate) |

---

## Responsive Breakpoints

| Breakpoint | Width | Layout changes |
|-----------|-------|---------------|
| `sm` | 640px | 2-col feature grid, side-by-side buttons |
| `md` | 768px | 2-col testimonials, footer grid |
| `lg` | 1024px | 2-col hero, 3-col features, full nav visible |
| `xl` | 1280px | Max-width content containers |
