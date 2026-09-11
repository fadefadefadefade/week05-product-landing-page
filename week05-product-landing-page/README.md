# 🌙 Overnight. Cafe — Responsive Product Landing Page

> **Week 05 Laboratory Activity** — Laravel + Blade Components + Tailwind CSS

A modern, responsive product landing page for **Overnight Cafe**, a real late-night café business. Built with Laravel, reusable Blade Components, and Tailwind CSS v4, featuring a premium dark theme inspired by the brand's visual identity.

---

## 📸 Preview

> Add screenshots to the `/screenshots` folder after running the project.

| Section | Description |
|---------|-------------|
| Hero | Full-viewport with animated SVG coffee cup |
| Features | 6-card grid of cafe offerings |
| Showcase | Dashboard mockup + key highlights |
| Pricing | 3-tier membership plans |
| Testimonials | 6 customer reviews |
| CTA | Register / Contact Sales section |
| Footer | 4-column with social links + contact info |

---

## 🛠 Tech Stack

| Technology | Version | Purpose |
|-----------|---------|---------|
| Laravel | 12.x | PHP framework |
| Blade Components | Built-in | Reusable UI components |
| Tailwind CSS | v4.x | Utility-first CSS |
| Vite | 8.x | Asset bundler |
| PHP | 8.5+ | Server-side language |

---

## 📁 Project Structure

```
week05-product-landing-page/
│
├── app/
│   └── Http/
│       └── Controllers/
│           └── LandingController.php     ← Serves the landing page
│
├── resources/
│   ├── css/
│   │   └── app.css                       ← Tailwind v4 + custom design tokens
│   ├── js/
│   │   └── app.js
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php             ← Root layout
│       ├── components/
│       │   ├── navbar.blade.php          ← Navigation bar
│       │   ├── hero.blade.php            ← Hero section
│       │   ├── button.blade.php          ← Reusable button
│       │   ├── feature-card.blade.php    ← Feature card
│       │   ├── pricing-card.blade.php    ← Pricing plan card
│       │   ├── testimonial-card.blade.php← Testimonial card
│       │   ├── showcase.blade.php        ← Product showcase
│       │   ├── cta-section.blade.php     ← Call-to-action
│       │   └── footer.blade.php          ← Site footer
│       └── pages/
│           └── home.blade.php            ← Main landing page
│
├── public/
│   └── images/
│       └── logo.jpg                      ← Overnight Cafe brand logo
│
├── routes/
│   └── web.php                           ← Route definitions
│
├── screenshots/                          ← Add your screenshots here
│
├── documentation/
│   └── component-architecture.md        ← Full component documentation
│
└── README.md
```

---

## 🚀 Setup & Installation

### Prerequisites
- PHP 8.2+
- Composer
- Node.js 18+ & npm
- Laravel CLI

### Steps

```bash
# 1. Navigate to the project
cd week05-product-landing-page

# 2. Install PHP dependencies
composer install

# 3. Install Node dependencies
npm install

# 4. Copy environment file
cp .env.example .env

# 5. Generate app key
php artisan key:generate

# 6. Build assets (development)
npm run build

# 7. Start the Laravel server
php artisan serve
```

Then open **http://localhost:8000** in your browser.

### Development (hot reload)
```bash
# Terminal 1 — Vite dev server
npm run dev

# Terminal 2 — Laravel server
php artisan serve
```

---

## 🎨 Design System

### Brand Colors

| Color | Hex | Usage |
|-------|-----|-------|
| Deep Black | `#0a0a0a` | Primary background |
| Card Black | `#111111` | Card surfaces |
| Amber Warm | `#d4a843` | Brand accent / CTA |
| Amber Light | `#f0c060` | Hover states |
| Gray Mist | `#a0a0a0` | Body text |

### Typography
- **Inter** — UI text, body, headings
- **Playfair Display** — Display/decorative headings

---

## 🧩 Blade Components

| Component | Tag | Props |
|-----------|-----|-------|
| Layout | `<x-layouts.app>` | `title` |
| Navbar | `<x-navbar />` | — |
| Hero | `<x-hero />` | — |
| Button | `<x-button>` | `variant`, `size`, `href`, `type` |
| Feature Card | `<x-feature-card>` | `icon`, `title`, `description`, `accent` |
| Pricing Card | `<x-pricing-card>` | `plan`, `price`, `period`, `desc`, `features`, `popular`, `cta` |
| Testimonial Card | `<x-testimonial-card>` | `name`, `position`, `review`, `avatar`, `initials`, `rating` |
| Showcase | `<x-showcase />` | — |
| CTA Section | `<x-cta-section />` | — |
| Footer | `<x-footer />` | — |

---

## 📱 Responsive Design

Tested and optimized for:
- 📱 **Mobile** — 320px to 639px
- 📱 **Large Mobile** — 640px to 767px
- 💻 **Tablet** — 768px to 1023px
- 🖥️ **Laptop** — 1024px to 1279px
- 🖥️ **Desktop** — 1280px+

Use Chrome DevTools (F12 → Toggle device toolbar) to test all breakpoints.

---

## ✅ Requirements Checklist

### Sections
- [x] Navigation Bar (logo, nav links, Sign In, Get Started)
- [x] Hero Section (headline, description, CTAs, illustration, stats)
- [x] Features Section (6 feature cards with icon, title, description)
- [x] Product Showcase (dashboard mockup, highlights, mobile cards)
- [x] Pricing Section (3 plans: Starter, Professional, Enterprise)
- [x] Testimonials (6 reviews with name, position, rating)
- [x] Call-to-Action (Start Free Trial, Contact Sales, Register)
- [x] Footer (company info, links, social icons, contact, copyright)

### Technical
- [x] Laravel Blade Components (10 components)
- [x] Tailwind CSS v4 with custom design tokens
- [x] Responsive Grid & Flexbox layouts
- [x] Responsive breakpoints (sm/md/lg/xl)
- [x] Hover effects, shadows, rounded corners
- [x] `layouts/app.blade.php` main layout
- [x] All pages extend the main layout
- [x] Component-based architecture

---

## 👤 Author

**[Your Name]**
- Course: Web Development
- Activity: Week 05 — Product Landing Page
- Business: Overnight Cafe (Real local business)

---

## 📄 License

This project was created for academic purposes as part of a laboratory activity.
