<?php
/**
 * Template Name: AI4 Landing Page
 * Description: WordPress PHP page template converted from HTML design, customized for the ultraboostrap-child theme.
 *
 * @package ultrabootstrap
 */

// Enqueue page-specific assets in the document head
add_action( 'wp_enqueue_scripts', function() {
    // Google Fonts: Inter & Roboto Slab
    wp_enqueue_style( 'google-fonts-inter-roboto', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Roboto+Slab:wght@400;500;700;800&display=swap' );
    
    // Font Awesome 6
    wp_enqueue_style( 'font-awesome-6-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' );
    wp_enqueue_script( 'font-awesome-6-js', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js', array(), null, false );

    // Tailwind CSS Play CDN
    wp_enqueue_script( 'tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false );
});

get_header(); ?>

<!-- Tailwind Configurations -->
<script>
    window.FontAwesomeConfig = {
        autoReplaceSvg: 'nest'
    };
    
    // Tailwind Config scoped to our wrapper to prevent global interference
    tailwind.config = {
        important: '.ai4-landing-wrapper',
        corePlugins: {
            preflight: false,
        },
        theme: {
            extend: {
                colors: {
                    'ferrari': '#FF2800',
                    'ferrari-mid': '#CC2000',
                    'ceramic': '#F5F1EB',
                    'ceramic-mid': '#EDE8E1',
                    'ceramic-light': '#FFFFFF',
                },
                fontFamily: {
                    sans: ['Inter', 'sans-serif'],
                    heading: ['Roboto Slab', 'serif'],
                },
            }
        }
    }
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Roboto+Slab:wght@400;500;700;800&display=swap');

/* Hide the default theme's header only on this page template */
body header:not(#site-header) {
    display: none !important;
}

/* Hide breadcrumbs on this page */
.breadcrumb {
    display: none !important;
}

/* Explicit font-family rules to override theme/bootstrap overrides */
.ai4-landing-wrapper,
.ai4-landing-wrapper :not(.font-heading):not(.font-heading *) {
    font-family: 'Inter', sans-serif !important;
}

.ai4-landing-wrapper .font-heading,
.ai4-landing-wrapper .font-heading * {
    font-family: 'Roboto Slab', serif !important;
}

/* Scoped custom styling for the AI4 Landing Page */
.ai4-landing-wrapper {
    overflow-x: hidden;
    background: #F5F1EB;
    padding-top: 72px; /* Prevent header overlap */
}
.ai4-landing-wrapper * { box-sizing: border-box; }

/* Enforce border style solid on Tailwind border utilities when preflight is off */
.ai4-landing-wrapper .border,
.ai4-landing-wrapper .border-2,
.ai4-landing-wrapper .border-t,
.ai4-landing-wrapper .border-b,
.ai4-landing-wrapper .border-l,
.ai4-landing-wrapper .border-l-4 {
    border-style: solid !important;
}

/* Custom Header Logo styling */
.ai4-landing-wrapper .logo-tag img {
    max-height: 50px;
    width: auto;
    display: inline-block;
    vertical-align: middle;
}
.ai4-landing-wrapper .logo-tag a {
    display: inline-block;
}

/* Scoped list style reset to override global theme or Bootstrap defaults */
.ai4-landing-wrapper ul,
.ai4-landing-wrapper ol {
    list-style: none !important;
    padding-left: 0 !important;
    margin-bottom: 0 !important;
}
.ai4-landing-wrapper li {
    margin: 0 !important;
    padding: 0 !important;
}

/* ── NAV ── */
.ai4-landing-wrapper .nav-link {
    position: relative;
    font-family: 'Inter', sans-serif !important;
    font-size: 13px !important;
    font-weight: 500 !important;
    color: #4b5563 !important;
    text-decoration: none !important;
    transition: color 0.2s ease-in-out !important;
}
.ai4-landing-wrapper .nav-link:hover {
    color: #FF2800 !important;
}
.ai4-landing-wrapper .nav-link::after {
    content: '';
    position: absolute;
    bottom: -3px; left: 0;
    width: 0; height: 2px;
    background: #FF2800;
    transition: width 0.3s ease;
}
.ai4-landing-wrapper .nav-link:hover::after { width: 100%; }
.ai4-landing-wrapper .header-scrolled { box-shadow: 0 4px 24px rgba(255,40,0,0.08); }

/* ── HERO ── */
.ai4-landing-wrapper .hero-slide { position: absolute; inset: 0; display: flex; align-items: center; opacity: 0; pointer-events: none; }
.ai4-landing-wrapper .hero-slide.active { opacity: 1; pointer-events: all; }

/* Staggered word reveal for hero heading */
.ai4-landing-wrapper .hero-slide .word-reveal {
    display: inline-block;
    overflow: hidden;
    vertical-align: top;
}
.ai4-landing-wrapper .hero-slide .word-reveal span {
    display: inline-block;
    transform: translateY(110%);
    opacity: 0;
}
.ai4-landing-wrapper .hero-slide.active .word-reveal span {
    animation: wordUp 0.8s cubic-bezier(0.16,1,0.3,1) forwards;
}
@keyframes wordUp {
    0%   { transform: translateY(110%); opacity: 0; }
    60%  { opacity: 1; }
    100% { transform: translateY(0); opacity: 1; }
}
.ai4-landing-wrapper .hero-slide .fx-item {
    opacity: 0;
    filter: blur(6px);
    transform: translateY(14px) scale(0.98);
}
.ai4-landing-wrapper .hero-slide.active .fx-item {
    animation: revealBlur 0.9s cubic-bezier(0.16,1,0.3,1) forwards;
}
@keyframes revealBlur {
    0%   { opacity: 0; filter: blur(6px); transform: translateY(14px) scale(0.98); }
    100% { opacity: 1; filter: blur(0); transform: translateY(0) scale(1); }
}

/* ── LOGO MARQUEE ── */
@keyframes marquee {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
.ai4-landing-wrapper .marquee-track {
    display: flex;
    width: max-content;
    animation: marquee 24s linear infinite;
    will-change: transform;
}
.ai4-landing-wrapper .marquee-track:hover { animation-play-state: paused; }
.ai4-landing-wrapper .marquee-wrap { overflow: hidden; width: 100%; }

/* ── ANIMATIONS ── */
@keyframes fadeUp {
    from { opacity: 0; transform: translateY(32px); }
    to   { opacity: 1; transform: translateY(0); }
}
@keyframes pulse-red {
    0%, 100% { box-shadow: 0 0 0 0 rgba(255,40,0,0.4); }
    50%       { box-shadow: 0 0 0 10px rgba(255,40,0,0); }
}
@keyframes float {
    0%, 100% { transform: translateY(0); }
    50%       { transform: translateY(-12px); }
}
@keyframes spin-slow { to { transform: rotate(360deg); } }
.ai4-landing-wrapper .fade-up { opacity: 0; transform: translateY(32px); transition: opacity 0.7s ease, transform 0.7s ease; }
.ai4-landing-wrapper .fade-up.visible { opacity: 1; transform: translateY(0); }
.ai4-landing-wrapper .delay-100 { transition-delay: 0.1s; }
.ai4-landing-wrapper .delay-200 { transition-delay: 0.2s; }
.ai4-landing-wrapper .delay-300 { transition-delay: 0.3s; }
.ai4-landing-wrapper .delay-400 { transition-delay: 0.4s; }
.ai4-landing-wrapper .card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
.ai4-landing-wrapper .card-hover:hover { transform: translateY(-8px); box-shadow: 0 24px 48px rgba(255,40,0,0.12); }

/* ── DRAWER ── */
.ai4-landing-wrapper #drawer-overlay { display: none; }
.ai4-landing-wrapper #drawer-overlay.open { display: flex; }
.ai4-landing-wrapper #drawer-panel { transform: translateX(100%); transition: transform 0.45s cubic-bezier(0.16, 1, 0.3, 1); }
.ai4-landing-wrapper #drawer-overlay.open #drawer-panel { transform: translateX(0); }

/* Reset paragraph margins inside drawer to prevent theme overrides */
.ai4-landing-wrapper #drawer-panel p {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    padding: 0 !important;
}
.ai4-landing-wrapper #drawer-panel h3 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    padding: 0 !important;
}
/* Drawer header subtitle */
.ai4-landing-wrapper #drawer-panel .px-8.py-6 p {
    margin-top: 4px !important;
}
/* Discount banner text spacing */
.ai4-landing-wrapper #drawer-panel .mx-8 p.font-semibold {
    margin-bottom: 2px !important;
}


/* ── FORM INPUTS ── */
.ai4-landing-wrapper .form-input {
    width: 100%; background: #F5F1EB; border: 1.5px solid rgba(255,40,0,0.15);
    border-radius: 8px; padding: 12px 16px; font-size: 14px; font-family: 'Inter', sans-serif;
    outline: none; transition: border-color 0.2s, box-shadow 0.2s; color: #1a0000;
}
.ai4-landing-wrapper .form-input:focus { border-color: #FF2800; box-shadow: 0 0 0 3px rgba(255,40,0,0.1); }
.ai4-landing-wrapper .form-input::placeholder { color: rgba(26,0,0,0.4); }
.ai4-landing-wrapper .form-label { display: block; font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.06em; color: rgba(26,0,0,0.5); margin-bottom: 6px; }

/* ── PACKAGE CARD ── */
.ai4-landing-wrapper .pkg-badge {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(255,40,0,0.08); border: 1px solid rgba(255,40,0,0.2);
    color: #FF2800; border-radius: 20px; padding: 4px 12px; font-size: 11px; font-weight: 700;
    letter-spacing: 0.04em; text-transform: uppercase;
}
.ai4-landing-wrapper .pkg-card { position: relative; border-radius: 20px; display: flex; flex-direction: column; background: transparent; }
.ai4-landing-wrapper .pkg-card-inner {
    background: #fff; border-radius: 20px; padding: 36px;
    display: flex; flex-direction: column; flex: 1;
    overflow: hidden; position: relative;
    border: 1.5px solid rgba(15,23,42,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.ai4-landing-wrapper .pkg-card-inner::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px; }
.ai4-landing-wrapper .pkg-card:hover .pkg-card-inner { transform: translateY(-8px); box-shadow: 0 24px 48px rgba(15,23,42,0.10); }

/* Tier: Silver */
.ai4-landing-wrapper .tier-silver .pkg-card-inner { border-color: rgba(100,116,139,0.25); }
.ai4-landing-wrapper .tier-silver .pkg-card-inner::before { background: linear-gradient(90deg,#CBD5E1,#94A3B8); }
.ai4-landing-wrapper .tier-pill.tier-silver-pill { background: linear-gradient(135deg,#F1F5F9,#E2E8F0); color: #475569; border: 1px solid rgba(100,116,139,0.3); }
.ai4-landing-wrapper .tier-icon.tier-silver-icon { background: rgba(100,116,139,0.08); border: 2px solid rgba(100,116,139,0.25); color: #64748B; }
.ai4-landing-wrapper .tier-price.tier-silver-price { color: #475569; background: #F8FAFC; }

/* Tier: Gold */
.ai4-landing-wrapper .tier-gold .pkg-card-inner { border: 2px solid rgba(217,119,6,0.55); box-shadow: 0 20px 50px -10px rgba(217,119,6,0.22); }
.ai4-landing-wrapper .tier-gold .pkg-card-inner::before { display: none; }
.ai4-landing-wrapper .tier-pill.tier-gold-pill { background: linear-gradient(135deg,#FBBF24,#D97706); color: #fff; border: 1px solid rgba(217,119,6,0.4); }
.ai4-landing-wrapper .tier-icon.tier-gold-icon { background: rgba(217,119,6,0.1); border: 2px solid rgba(217,119,6,0.35); color: #D97706; }
.ai4-landing-wrapper .tier-price.tier-gold-price { color: #B45309; background: linear-gradient(135deg,#FFFBEB,#FEF3C7); }
.ai4-landing-wrapper .pkg-card.tier-gold {
    transform: scale(1.05);
    z-index: 10;
}
.ai4-landing-wrapper .pkg-card.tier-gold:hover .pkg-card-inner { transform: translateY(-8px); }
@media (max-width: 767px) {
    .ai4-landing-wrapper .pkg-card.tier-gold { transform: none; }
}

/* Tier: Platinum */
.ai4-landing-wrapper .tier-platinum .pkg-card-inner { border-color: rgba(0,63,225,0.25); }
.ai4-landing-wrapper .tier-platinum .pkg-card-inner::before { background: linear-gradient(90deg,#003FE1,#01004A); }
.ai4-landing-wrapper .tier-pill.tier-platinum-pill { background: linear-gradient(135deg,#003FE1,#01004A); color: #fff; border: 1px solid rgba(0,63,225,0.4); }
.ai4-landing-wrapper .tier-icon.tier-platinum-icon { background: rgba(0,63,225,0.08); border: 2px solid rgba(0,63,225,0.3); color: #003FE1; }
.ai4-landing-wrapper .tier-price.tier-platinum-price { color: #01004A; background: #EEF2FF; }

.ai4-landing-wrapper .tier-pill {
    display: inline-flex; align-items: center; gap: 6px;
    border-radius: 999px; padding: 6px 18px; font-size: 12px; font-weight: 800;
    letter-spacing: 0.05em; text-transform: uppercase; margin: 0 auto 24px;
}
.ai4-landing-wrapper .tier-icon {
    width: 48px; height: 48px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center; font-size: 18px;
}

/* Most Popular badge */
.ai4-landing-wrapper .featured-badge {
    position: absolute;
    top: -16px;
    left: 50%;
    transform: translateX(-50%);
    background: #FF2800;
    color: #fff;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    padding: 7px 18px;
    border-radius: 999px;
    box-shadow: 0 8px 20px rgba(255,40,0,0.4);
    white-space: nowrap;
    z-index: 20;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

/* ── OVERRIDES TO PREVENT WP THEME INTERFERENCE ── */
/* Remove borders and outlines from all buttons to prevent theme borders */
.ai4-landing-wrapper button,
.ai4-landing-wrapper .btn {
    border: none !important;
    border-width: 0 !important;
    outline: none !important;
}

/* Reset button styling inside package cards */
.ai4-landing-wrapper .pkg-card button {
    text-transform: none !important;
    transition: all 0.3s ease !important;
}

/* Silver Button */
.ai4-landing-wrapper .tier-silver button.open-drawer {
    background-color: transparent !important;
    background: transparent !important;
    border: 2px solid #CBD5E1 !important; /* border-slate-300 */
    color: #64748B !important; /* text-slate-500 */
    box-shadow: none !important;
}
.ai4-landing-wrapper .tier-silver button.open-drawer:hover {
    background-color: #64748B !important; /* bg-slate-500 */
    color: #ffffff !important;
    border-color: #64748B !important;
}

/* Gold Button */
.ai4-landing-wrapper .tier-gold button.open-drawer {
    background: linear-gradient(135deg,#FBBF24,#D97706) !important;
    box-shadow: 0 10px 25px rgba(217,119,6,0.35) !important;
    border: none !important;
    border-width: 0 !important;
    color: #ffffff !important;
}
.ai4-landing-wrapper .tier-gold button.open-drawer:hover {
    opacity: 0.9 !important;
}

/* Platinum Button */
.ai4-landing-wrapper .tier-platinum button.open-drawer {
    background: linear-gradient(135deg,#003FE1,#01004A) !important;
    box-shadow: 0 10px 25px rgba(0,63,225,0.3) !important;
    border: none !important;
    border-width: 0 !important;
    color: #ffffff !important;
}
.ai4-landing-wrapper .tier-platinum button.open-drawer:hover {
    opacity: 0.9 !important;
}

/* Package Card Pills explicitly styled with !important */
.ai4-landing-wrapper .tier-pill.tier-silver-pill {
    background: linear-gradient(135deg,#F1F5F9,#E2E8F0) !important;
    color: #475569 !important;
    border: 1px solid rgba(100,116,139,0.3) !important;
}
.ai4-landing-wrapper .tier-pill.tier-gold-pill {
    background: linear-gradient(135deg,#FBBF24,#D97706) !important;
    color: #fff !important;
    border: 1px solid rgba(217,119,6,0.4) !important;
}
.ai4-landing-wrapper .tier-pill.tier-platinum-pill {
    background: linear-gradient(135deg,#003FE1,#01004A) !important;
    color: #fff !important;
    border: 1px solid rgba(0,63,225,0.4) !important;
}

/* Font Weight Utility Enforcements */
.ai4-landing-wrapper .font-bold {
    font-weight: 700 !important;
}
.ai4-landing-wrapper .font-semibold {
    font-weight: 600 !important;
}
.ai4-landing-wrapper .font-medium {
    font-weight: 500 !important;
}

/* Enforce Tailwind Spacing utilities against theme style overrides */
.ai4-landing-wrapper .mb-24 { margin-bottom: 96px !important; }
.ai4-landing-wrapper .mb-16 { margin-bottom: 64px !important; }
.ai4-landing-wrapper .mb-14 { margin-bottom: 56px !important; }
.ai4-landing-wrapper .mb-12 { margin-bottom: 48px !important; }
.ai4-landing-wrapper .mb-8  { margin-bottom: 32px !important; }
.ai4-landing-wrapper .mb-6  { margin-bottom: 24px !important; }
.ai4-landing-wrapper .mb-4  { margin-bottom: 16px !important; }
.ai4-landing-wrapper .mb-3  { margin-bottom: 12px !important; }

.ai4-landing-wrapper .mt-24 { margin-top: 96px !important; }
.ai4-landing-wrapper .mt-16 { margin-top: 64px !important; }
.ai4-landing-wrapper .mt-12 { margin-top: 48px !important; }
.ai4-landing-wrapper .mt-10 { margin-top: 40px !important; }
.ai4-landing-wrapper .mt-8  { margin-top: 32px !important; }
.ai4-landing-wrapper .mt-6  { margin-top: 24px !important; }
.ai4-landing-wrapper .mt-4  { margin-top: 16px !important; }

.ai4-landing-wrapper .py-24 { padding-top: 96px !important; padding-bottom: 96px !important; }
.ai4-landing-wrapper .py-10 { padding-top: 40px !important; padding-bottom: 40px !important; }
.ai4-landing-wrapper .py-2  { padding-top: 8px !important; padding-bottom: 8px !important; }

/* Prevent sticky header from overlapping anchor sections when scrolled to */
.ai4-landing-wrapper section[id] {
    scroll-margin-top: 100px !important;
}

/* General grid layout enforcement to override theme layout conflicts */
.ai4-landing-wrapper .grid {
    display: grid !important;
}

/* Enforce Grid Spacing and padding on Registration Section */
.ai4-landing-wrapper #register .grid {
    display: grid !important;
    grid-template-columns: 1fr !important;
    gap: 32px !important;
}
@media (min-width: 992px) {
    .ai4-landing-wrapper #register .grid {
        grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
        gap: 64px !important; /* gap-16 */
    }
    .ai4-landing-wrapper #register .lg\:col-span-2 {
        grid-column: span 2 / span 2 !important;
        width: 100% !important;
        max-width: 100% !important;
        flex: none !important;
    }
    .ai4-landing-wrapper #register .lg\:col-span-3 {
        grid-column: span 3 / span 3 !important;
        width: 100% !important;
        max-width: 100% !important;
        flex: none !important;
    }
}

/* Enforce spacing on left column info cards inside Registration section */
.ai4-landing-wrapper #register .space-y-4 > div + div {
    margin-top: 16px !important;
}
.ai4-landing-wrapper #register .space-y-4 p.font-semibold {
    margin-top: 0 !important;
    margin-bottom: 4px !important;
    padding: 0 !important;
}
.ai4-landing-wrapper #register .space-y-4 p:not(.font-semibold) {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    padding: 0 !important;
}

/* Enforce Form Inputs Grid Spacing and Layout */
.ai4-landing-wrapper #main-reg-form .grid {
    display: grid !important;
    grid-template-columns: 1fr !important;
    gap: 20px !important;
}
@media (min-width: 768px) {
    .ai4-landing-wrapper #main-reg-form .grid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    }
    .ai4-landing-wrapper #main-reg-form .md\:col-span-2 {
        grid-column: span 2 / span 2 !important;
        width: 100% !important;
        max-width: 100% !important;
        flex: none !important;
    }
    .ai4-landing-wrapper #main-reg-form .grid > div:not(.md\:col-span-2) {
        grid-column: span 1 / span 1 !important;
        width: 100% !important;
        max-width: 100% !important;
        flex: none !important;
    }
}

/* Enforce Grid Spacing on Packages Section */
.ai4-landing-wrapper #packages .grid {
    display: grid !important;
    grid-template-columns: 1fr !important;
    gap: 32px !important;
    margin-bottom: 48px !important;
}
@media (min-width: 768px) {
    .ai4-landing-wrapper #packages .grid {
        grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
    }
}

/* Enforce padding and borders on registration form container to prevent clipping and theme overrides */
.ai4-landing-wrapper #main-reg-form {
    padding: 32px !important;
    border-top: none !important;
    border-right: none !important;
    border-bottom: none !important;
    border-top-width: 0px !important;
    border-right-width: 0px !important;
    border-bottom-width: 0px !important;
    border-left: 4px solid #FF2800 !important; /* border-ferrari */
}
@media (min-width: 992px) {
    .ai4-landing-wrapper #main-reg-form {
        padding: 40px !important;
    }
}

/* Enforce height, padding, and font size on the registration form button */
.ai4-landing-wrapper #main-reg-form button[type="submit"] {
    padding-top: 16px !important;
    padding-bottom: 16px !important;
    font-size: 16px !important;
    font-weight: 700 !important;
    border-radius: 9999px !important;
    line-height: 1.5 !important;
    height: auto !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 8px !important;
}

/* Enforce custom styling on form inputs and selects to prevent theme overriding */
.ai4-landing-wrapper .form-input {
    width: 100% !important;
    background: #F5F1EB !important;
    border: 1.5px solid rgba(255,40,0,0.15) !important;
    border-radius: 8px !important;
    padding: 12px 16px !important;
    font-size: 14px !important;
    outline: none !important;
    color: #1a0000 !important;
    height: auto !important;
}

.ai4-landing-wrapper .form-label {
    display: block !important;
    font-size: 12px !important;
    font-weight: 600 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.06em !important;
    color: rgba(26,0,0,0.5) !important;
    margin-bottom: 6px !important;
}

/* Align FontAwesome Icons */
.ai4-landing-wrapper svg.svg-inline--fa {
    display: inline-block !important;
    vertical-align: -0.125em !important;
    flex-shrink: 0 !important;
}

/* ── TESTIMONIAL ── */
.ai4-landing-wrapper .testimonial-card {
    background: #fff; border-radius: 16px; padding: 32px;
    border-left: 4px solid #FF2800; position: relative;
}
.ai4-landing-wrapper .testimonial-card::before {
    content: '\201C';
    position: absolute; top: 16px; right: 24px;
    font-size: 80px; line-height: 1; color: rgba(255,40,0,0.08);
    font-family: 'Roboto Slab', serif; font-weight: 800;
}

/* ── DECORATIVE ── */
.ai4-landing-wrapper .geo-ring { border: 1.5px solid rgba(255,40,0,0.15); border-radius: 50%; }
.ai4-landing-wrapper .red-grid { background-image: linear-gradient(rgba(255,40,0,0.04) 1px, transparent 1px), linear-gradient(90deg, rgba(255,40,0,0.04) 1px, transparent 1px); background-size: 40px 40px; }

/* ── FOOTER ── */
.ai4-landing-wrapper .testimonial-box{
    background:#E5E1C7;
    border-radius:20px;
    padding:48px 48px 40px;
    position:relative;
    border:1px solid rgba(4,4,4,.06);
    box-shadow: 0 20px 50px -10px rgba(15,23,42,0.10);
}

/* ── Client logos section styling – fixed 140px so hero + carousel fit in one viewport ── */
.ai4-landing-wrapper .hero-client-logos-sec {
    height: 140px !important;
    min-height: 140px !important;
    max-height: 140px !important;
    padding: 0 !important;
    box-sizing: border-box;
    display: flex !important;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}
/* Strip theme default p margins inside the carousel label */
.ai4-landing-wrapper .hero-client-logos-sec p {
    margin: 0 !important;
    padding: 0 !important;
    line-height: 1.2 !important;
}
.ai4-landing-wrapper .hero-client-logos-sec .logo-item {
    height: 50px !important;
}

@media (min-width: 768px) {
    .ai4-landing-wrapper .hero-client-logos-sec .logo-item {
        height: 56px !important;
    }
}

@media (min-width: 1024px) {
    .ai4-landing-wrapper .hero-client-logos-sec .logo-item {
        height: 64px !important;
    }
}

.ai4-landing-wrapper .hero-client-logos {
    margin-bottom: 0 !important;
}

/* ── MOBILE RESPONSIVE – Hero & Carousel ── */

/* Extra-small phones (<480px) */
@media (max-width: 479px) {
    /* Hero */
    .ai4-landing-wrapper #hero {
        height: calc(100vh - 155px) !important;   /* no WP admin bar on mobile */
        min-height: 320px !important;
    }
    /* Heading tighter */
    .ai4-landing-wrapper #hero h1 {
        font-size: 2rem !important;    /* 32px */
        line-height: 1.2 !important;
        margin-bottom: 12px !important;
    }
    /* Badges row */
    .ai4-landing-wrapper #hero .pkg-badge,
    .ai4-landing-wrapper #hero .inline-flex {
        font-size: 11px !important;
        padding: 6px 12px !important;
        margin-bottom: 10px !important;
    }
    /* Body paragraph */
    .ai4-landing-wrapper #hero p.text-lg {
        font-size: 13px !important;
        line-height: 1.5 !important;
        margin-bottom: 16px !important;
    }
    /* CTA buttons */
    .ai4-landing-wrapper #hero .flex.flex-wrap.gap-4 {
        gap: 10px !important;
    }
    .ai4-landing-wrapper #hero button,
    .ai4-landing-wrapper #hero a.rounded-full {
        padding: 10px 18px !important;
        font-size: 13px !important;
    }
    /* Carousel logos smaller on tiny screens */
    .ai4-landing-wrapper .hero-client-logos-sec .logo-item {
        height: 36px !important;
    }
    /* Carousel section tighter on mobile */
    .ai4-landing-wrapper .hero-client-logos-sec {
        height: 120px !important;
        min-height: 120px !important;
        max-height: 120px !important;
        gap: 8px !important;
    }
    /* Hide navbar CTA button – button lives in hero banner on mobile */
    .ai4-landing-wrapper #open-drawer-btn {
        display: none !important;
    }
    /* Add proper padding to hero content so text doesn't bleed to edge */
    .ai4-landing-wrapper #hero-slides-container {
        padding-left: 20px !important;
        padding-right: 20px !important;
    }
    /* Stack CTA buttons vertically on tiny screens */
    .ai4-landing-wrapper #hero .flex.flex-wrap.gap-4 {
        flex-direction: column !important;
        align-items: flex-start !important;
        gap: 10px !important;
    }
    .ai4-landing-wrapper #hero button#hero-cta,
    .ai4-landing-wrapper #hero a[href="#packages"] {
        width: 100% !important;
        justify-content: center !important;
        text-align: center !important;
        padding: 12px 20px !important;
        font-size: 14px !important;
    }
}

/* Small phones (480px – 767px) */
@media (min-width: 480px) and (max-width: 767px) {
    .ai4-landing-wrapper #hero {
        height: calc(100vh - 155px) !important;
        min-height: 340px !important;
    }
    .ai4-landing-wrapper #hero h1 {
        font-size: 2.25rem !important;   /* 36px */
        margin-bottom: 14px !important;
    }
    .ai4-landing-wrapper #hero p.text-lg {
        font-size: 14px !important;
        margin-bottom: 18px !important;
    }
    .ai4-landing-wrapper .hero-client-logos-sec .logo-item {
        height: 42px !important;
    }
    .ai4-landing-wrapper .hero-client-logos-sec {
        height: 130px !important;
        min-height: 130px !important;
        max-height: 130px !important;
    }
    /* Hide navbar CTA button on larger phones too */
    .ai4-landing-wrapper #open-drawer-btn {
        display: none !important;
    }
}
</style>

<div class="ai4-landing-wrapper">

    <!-- ── CUSTOM HEADER ── -->
    <header id="site-header" class="fixed top-0 left-0 w-full z-[100] transition-all duration-300 bg-white/95 backdrop-blur-md border-b-2 border-ferrari">
        <nav class="max-w-[1440px] mx-auto px-6 lg:px-12 h-18 flex items-center justify-between py-4">
            <!-- Dynamic Logo from Theme -->
            <div class="logo-tag">
                <?php if ( has_custom_logo()): the_custom_logo(); else: ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1 class="site-title" ><?php echo bloginfo( 'name' ); ?></h1>
                <h2 class="site-description" ><?php bloginfo('description'); ?></h2><?php endif; ?></a>                     
            </div>

            <!-- Desktop Nav Links -->
            <ul class="hidden md:flex items-center gap-8 text-[13px] font-medium text-gray-600 mb-0 list-none pl-0">
                <li><a href="#packages" class="nav-link hover:text-ferrari transition-colors">Early-Bird Pricing</a></li>
                <li><a href="#testimonials" class="nav-link hover:text-ferrari transition-colors">Testimonials</a></li>
                <li><a href="#register" class="nav-link hover:text-ferrari transition-colors">Register</a></li>
                <li><a href="#offer-terms" class="nav-link hover:text-ferrari transition-colors">Offer Terms</a></li>
            </ul>

            <!-- CTA Details & Mobile Toggle -->
            <div class="flex items-center gap-4">
                <div class="hidden lg:flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-ferrari" style="animation: pulse-red 2s infinite;"></span>
                    <span class="text-[11px] font-semibold text-ferrari tracking-widest uppercase">Ai4 Early-Bird</span>
                </div>
                <button id="open-drawer-btn" class="flex items-center gap-2 bg-ferrari text-white px-5 py-2.5 rounded-full text-sm font-semibold hover:bg-ferrari-mid transition-all duration-200 shadow-lg shadow-ferrari/20 hover:shadow-ferrari/40">
                    Register My Interest <i class="fas fa-arrow-right text-[11px]"></i>
                </button>
                <button class="md:hidden text-ferrari text-xl" id="mobile-menu-toggle"><i class="fas fa-bars"></i></button>
            </div>
        </nav>
    </header>

    <!-- ── HERO ── -->
    <section id="hero" class="relative overflow-hidden" style="height: calc(100vh - 185px); min-height: 360px; max-height: 820px;">
        <!-- Background -->
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/gen_be93046104_2bed1a6e7a82913f.png" alt="cinematic aerial view of a modern enterprise boardroom with professionals gathered around a glowing " />
            <div class="absolute inset-0" style="background: linear-gradient(100deg, rgba(245,241,235,0.96) 0%, rgba(245,241,235,0.88) 40%, rgba(245,241,235,0.5) 70%, rgba(245,241,235,0.1) 100%);"></div>
        </div>

        <!-- Decorative grid overlay -->
        <div class="absolute inset-0 z-0 red-grid opacity-60"></div>

        <!-- Decorative rings -->
        <div class="absolute right-[8%] top-[12%] z-0 geo-ring" style="width:420px;height:420px;"></div>
        <div class="absolute right-[14%] top-[22%] z-0 geo-ring" style="width:260px;height:260px;animation:spin-slow 40s linear infinite;"></div>
        <div class="absolute right-[20%] top-[32%] z-0 geo-ring" style="width:120px;height:120px;"></div>

        <!-- Message Container -->
        <div class="relative z-10 h-full max-w-[1440px] mx-auto px-6 lg:px-12" id="hero-slides-container" style="position:relative;">
            <div class="hero-slide active" id="slide-0">
                <div class="max-w-2xl lg:ml-12 xl:ml-20">
                    <div class="pkg-badge fx-item mb-6" style="animation-delay:.05s"><i class="fas fa-bolt"></i> Ai4 Early-Bird Offer</div>
                    <div class="inline-flex items-center bg-ferrari text-white rounded-full px-4 py-1.5 text-sm font-bold mb-6 shadow-lg shadow-ferrari/30 fx-item" style="animation-delay:.15s">
                        <i class="fas fa-calendar-days mr-2 text-xs"></i> Register by August 15, 2026
                    </div>
                    <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold leading-tight text-gray-900 mb-6">
                        <span class="word-reveal"><span style="animation-delay:.05s">Continue</span></span>
                        <span class="word-reveal"><span style="animation-delay:.12s">the</span></span>
                        <span class="word-reveal"><span style="animation-delay:.19s">Conversation</span></span><br>
                        <span class="word-reveal"><span style="animation-delay:.26s">You</span></span>
                        <span class="word-reveal"><span style="animation-delay:.33s">Started</span></span>
                        <span class="word-reveal"><span style="animation-delay:.4s">at</span></span>
                        <span class="text-ferrari word-reveal"><span style="animation-delay:.47s">Ai4</span></span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 max-w-xl leading-relaxed fx-item" style="animation-delay:.5s">
                        Connected with the Airo leadership team at Ai4? Take the next step with an enterprise AI discovery workshop and access limited-period early-bird pricing on <strong class="text-ferrari">agenTriniti℠</strong> packages.
                    </p>
                    <div class="flex flex-wrap gap-4 fx-item" style="animation-delay:.6s">
                        <button id="hero-cta" class="flex items-center gap-2 bg-ferrari text-white px-7 py-3.5 rounded-full font-semibold text-base hover:bg-ferrari-mid transition-all shadow-xl shadow-ferrari/30">
                            Register My Interest <i class="fas fa-arrow-right"></i>
                        </button>
                        <a href="#packages" class="flex items-center gap-2 border-2 border-ferrari text-ferrari px-7 py-3.5 rounded-full font-semibold text-base hover:bg-ferrari hover:text-white transition-all">
                            View Early-Bird Pricing <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-10 right-12 z-20 hidden lg:flex flex-col items-center gap-2">
            <span class="text-[10px] font-semibold uppercase tracking-widest text-gray-400">Scroll</span>
            <div class="w-px h-12 bg-gradient-to-b from-gray-400 to-transparent"></div>
        </div>
    </section>

    <!-- ── CLIENT LOGO CAROUSEL ── -->
    <section class="hero-client-logos-sec" style="height: 140px; min-height: 140px; max-height: 140px; background: #fff; border-bottom: 1px solid #E4E6EE; overflow: hidden; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px;">
        <p style="margin: 0; padding: 0; line-height: 1; text-align: center; width: 100%; font-size: 10px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; color: #9ca3af; font-family: 'Inter', sans-serif;">Trusted by Industry Leaders</p>
        <div class="container-fluid" style="padding: 0; width: 100%;">
            <div class="hero-client-logos">
                <?php
                $new_logos = [
                    "/wp-content/uploads/2026/06/School-District-of-Philadelphia.svg",
                    "/wp-content/uploads/2026/06/Salesforce.svg",
                    "/wp-content/uploads/2026/06/NSE.svg",
                    "/wp-content/uploads/2026/06/Social-IP-Law-Group.svg",
                    "/wp-content/uploads/2026/06/Navitus.jpg.svg",
                    "/wp-content/uploads/2026/06/Iffco-Tokyo.jpg.svg",
                    "/wp-content/uploads/2026/07/Microsoft-logo.png",
                    "/wp-content/uploads/2026/06/BMC.svg",
                    "/wp-content/uploads/2026/06/TIDI.svg",
                    "/wp-content/uploads/2026/06/Cleveland-Metropolotian-School-District.jpg.svg",
                    "/wp-content/uploads/2026/06/IGS-Energy.jpg.svg",
                    "/wp-content/uploads/2026/06/follett.jpeg",
                    "/wp-content/uploads/2026/06/American-Cancer-Society.svg",
                    "/wp-content/uploads/2026/06/Ravago.jpg.svg",
                    "/wp-content/uploads/2026/06/Suntory_Global_Spirits.svg",
                    "/wp-content/uploads/2026/06/Novolex.svg",
                    "/wp-content/uploads/2026/06/Just-Energy.svg",
                    "/wp-content/uploads/2026/06/darktronics-converted-from-jpeg.svg",
                    "/wp-content/uploads/2026/06/Hibu_logo.svg",
                    "/wp-content/uploads/2026/06/Cracker_Barrel-converted-from-png.svg",
                    "/wp-content/uploads/2026/06/EPB-converted-from-png.svg",
                    "/wp-content/uploads/2026/06/Cherokee-converted-from-jpeg.svg",
                    "/wp-content/uploads/2026/06/ATCC_-converted-from-png.svg",
                    "/wp-content/uploads/2026/06/Compass-Group-converted-from-webp.svg",
                     ];
                foreach ($new_logos as $new_logo_url) {
                    $alt_text = basename($new_logo_url);
                    $alt_text = str_replace(['.svg', '.jpg', '_', '-'], ['', '', ' ', ' '], $alt_text);
                    $img_width = '140px';
                    $img_height = '50px';
                    $extra_style = '';
                    if (strpos($new_logo_url, 'School-District-of-Philadelphia') !== false) {
                        $img_width = '180px';
                    } elseif (strpos($new_logo_url, 'Cleveland-Metropolotian-School-District') !== false) {
                        $img_width = '140px';
                        $extra_style = ' transform: scale(1.5);';
                    } elseif (strpos($new_logo_url, 'Social-IP-Law-Group') !== false) {
                        $img_width = '110px';
                        $img_height = '40px';
                    } elseif (strpos($new_logo_url, 'ATCC') !== false || strpos($new_logo_url, 'Ravago') !== false) {
                        $img_height = '45px';
                    }
                ?>
                    <div class="logo-item" style="padding: 0 15px; text-align: center; outline: none; display: flex; align-items: center; justify-content: center; height: 70px;">
                        <img src="<?php echo esc_url($new_logo_url); ?>" alt="<?php echo esc_attr($alt_text); ?>" style="width: <?php echo $img_width; ?>; height: <?php echo $img_height; ?>; object-fit: contain; margin: 0 auto; filter: grayscale(100%) opacity(0.5); transition: all 0.3s ease;<?php echo $extra_style; ?>">
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- ── PACKAGES / EARLY-BIRD PRICING ── -->
    <section id="packages" class="py-24 px-6 lg:px-12 bg-white">
        <div class="max-w-[1440px] mx-auto">
            <div class="text-center mb-4 fade-up">
                <div class="pkg-badge inline-flex"><i class="fas fa-bolt"></i> Ai4 Early-Bird Offer</div>
            </div>
            <h2 class="font-heading text-4xl lg:text-5xl font-bold text-center mb-3 fade-up delay-100"><span style="color:#01004A">Your Ai4</span> <span class="text-ferrari">Early-Bird Pricing</span></h2>
            <p class="text-center text-sm text-ferrari font-semibold mb-16 fade-up delay-300">
                <i class="fas fa-clock mr-1"></i> Register by August 15, 2026
            </p>

            <div class="grid md:grid-cols-3 gap-8 items-start">
                <!-- SILVER -->
                <div class="pkg-card tier-silver fade-up delay-100">
                    <div class="pkg-card-inner">
                        <div class="tier-pill tier-silver-pill"><i class="fas fa-medal"></i> agenTriniti℠ Silver</div>
                        <div class="tier-price tier-silver-price rounded-xl p-4 mb-6 text-center">
                            <div class="font-heading text-4xl font-bold">10% <span class="text-xl">Off</span></div>
                            <div class="text-xs opacity-70 mt-1">Your first engagement term</div>
                        </div>
                        <ul class="space-y-3 mb-8 flex-1">
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle text-slate-400 mt-0.5 flex-shrink-0"></i> 20 Secure AI Agents</li>
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle text-slate-400 mt-0.5 flex-shrink-0"></i> 3 Months of Build Phase</li>
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle text-slate-400 mt-0.5 flex-shrink-0"></i> Airo Pod Deployment</li>
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle text-slate-400 mt-0.5 flex-shrink-0"></i> Proprietary AiroCoreAI℠ Engine</li>
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle text-slate-400 mt-0.5 flex-shrink-0"></i> Total IP Ownership & Portability</li>
                        </ul>
                        <button class="open-drawer w-full border-2 border-slate-300 text-slate-500 py-3 rounded-full font-semibold hover:bg-slate-500 hover:text-white hover:border-slate-500 transition-all">
                            Register for Silver →
                        </button>
                    </div>
                </div>

                <!-- GOLD -->
                <div class="pkg-card tier-gold fade-up delay-200">
                    <div class="featured-badge">
                        <i class="fas fa-star"></i> Most Popular
                    </div>
                    <div class="pkg-card-inner">
                        <div class="tier-pill tier-gold-pill"><i class="fas fa-star"></i> agenTriniti℠ Gold</div>
                        <div class="tier-price tier-gold-price rounded-xl p-4 mb-6 text-center">
                            <div class="font-heading text-4xl font-bold">15% <span class="text-xl">Off</span></div>
                            <div class="text-xs opacity-70 mt-1">Your first engagement term</div>
                        </div>
                        <ul class="space-y-3 mb-8 flex-1">
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#D97706"></i> 50 Secure AI Agents</li>
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#D97706"></i> 4 Months of Build Phase</li>
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#D97706"></i> Airo Pod Deployment</li>
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#D97706"></i> Proprietary AiroCoreAI℠ Engine</li>
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#D97706"></i> Total IP Ownership & Portability</li>
                        </ul>
                        <button class="open-drawer w-full text-white py-3 rounded-full font-semibold transition-all shadow-lg" style="background:linear-gradient(135deg,#FBBF24,#D97706); box-shadow:0 10px 25px rgba(217,119,6,0.35)">
                            Register for Gold →
                        </button>
                    </div>
                </div>

                <!-- PLATINUM -->
                <div class="pkg-card tier-platinum fade-up delay-300">
                    <div class="pkg-card-inner">
                        <div class="tier-pill tier-platinum-pill"><i class="fas fa-gem"></i> agenTriniti℠ Platinum</div>
                        <div class="tier-price tier-platinum-price rounded-xl p-4 mb-6 text-center">
                            <div class="font-heading text-4xl font-bold">15% <span class="text-xl">Off</span></div>
                            <div class="text-xs opacity-70 mt-1">Your first engagement term</div>
                        </div>
                        <ul class="space-y-3 mb-8 flex-1">
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#003FE1"></i> 100 Secure AI Agents</li>
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#003FE1"></i> 6 Months of Build Phase</li>
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#003FE1"></i> Airo Pod Deployment</li>
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#003FE1"></i> Proprietary AiroCoreAI℠ Engine</li>
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#003FE1"></i> Total IP Ownership & Portability</li>
                        </ul>
                        <button class="open-drawer w-full text-white py-3 rounded-full font-semibold transition-all shadow-lg" style="background:linear-gradient(135deg,#003FE1,#01004A); box-shadow:0 10px 25px rgba(0,63,225,0.3)">
                            Register for Platinum →
                        </button>
                    </div>
                </div>
            </div>

            <!-- Offer note -->
            <div class="mt-10 text-center">
                <p class="text-sm text-gray-500 max-w-2xl mx-auto">
                    <i class="fas fa-info-circle text-ferrari mr-1"></i>
                    Discounts are applied against Airo's standard rate card at the time of contracting.
                </p>
            </div>
        </div>
    </section>

    <!-- ── TESTIMONIALS ── -->
    <section id="testimonials" class="py-2 px-6 lg:px-12 bg-white">
        <div class="max-w-[900px] mx-auto">
            <!-- Heading -->
            <div class="text-center mb-14 fade-up">
                <h2 class="font-heading text-4xl lg:text-5xl font-bold text-gray-900 mb-3">What Our Clients Say</h2>
                <p class="text-gray-500 text-base max-w-xl mx-auto">Discover how enterprises are achieving remarkable results with agenTriniti℠.</p>
            </div>

            <!-- Carousel Wrapper -->
            <div class="relative" id="testi-carousel">
                <!-- Slide Track -->
                <div id="testi-track-wrap" style="overflow-x:hidden; overflow-y:visible;">
                    <div id="testi-track" style="display:flex; transition: transform 0.6s cubic-bezier(0.25,0.46,0.45,0.94);">
                        <!-- Slide 1 -->
                        <div class="testi-slide" style="min-width:100%; padding: 24px 4px 48px;">
                            <div class="testimonial-box">
                                <div style="font-family:'Roboto Slab',serif; font-size:120px; line-height:1; color:rgba(255,40,0,0.08); position:absolute; top:12px; left:36px; font-weight:800; user-select:none;">"</div>
                                <div style="position:relative; z-index:1;">
                                    <p style="font-family:'Inter',sans-serif; font-size:1.2rem; line-height:1.8; color:#374151; font-style:italic; margin-bottom:36px;">
                                        "agenTriniti has become much more than an AI implementation for us. It has evolved into a strategic capability that continues to improve how we serve customers, support our teams, and operate at scale."
                                    </p>
                                    <div style="display:flex; align-items:center; gap:16px;">
                                        <div style="width:52px;height:52px;border-radius:50%;background:rgba(255,40,0,0.08);border:2px solid rgba(255,40,0,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                            <i class="fas fa-user" style="color:#FF2800; font-size:18px;"></i>
                                        </div>
                                        <div>
                                            <p style="font-family:'Roboto Slab',serif; font-weight:700; font-size:15px; color:#111827; margin:0 0 2px;">Chief Digital &amp; Customer Experience Officer</p>
                                            <p style="font-family:'Inter',sans-serif; font-size:13px; color:#FF2800; font-weight:600; margin:0;">Follett — Leading North American Education Commerce Company</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="testi-slide" style="min-width:100%; padding: 24px 4px 48px;">
                            <div class="testimonial-box">
                                <div style="font-family:'Roboto Slab',serif; font-size:120px; line-height:1; color:rgba(255,40,0,0.08); position:absolute; top:12px; left:36px; font-weight:800; user-select:none;">"</div>
                                <div style="position:relative; z-index:1;">
                                    <p style="font-family:'Inter',sans-serif; font-size:1.2rem; line-height:1.8; color:#374151; font-style:italic; margin-bottom:36px;">
                                        "Our goal was to improve the employee support experience without increasing service desk capacity. agenTriniti helped us achieve exactly that. Routine requests are resolved faster, our analysts spend more time on complex issues, and the AI platform continues to improve."
                                    </p>
                                    <div style="display:flex; align-items:center; gap:16px;">
                                        <div style="width:52px;height:52px;border-radius:50%;background:rgba(255,40,0,0.08);border:2px solid rgba(255,40,0,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                            <i class="fas fa-user" style="color:#FF2800; font-size:18px;"></i>
                                        </div>
                                        <div>
                                            <p style="font-family:'Roboto Slab',serif; font-weight:700; font-size:15px; color:#111827; margin:0 0 2px;">Global Head of Enterprise IT Services</p>
                                            <p style="font-family:'Inter',sans-serif; font-size:13px; color:#FF2800; font-weight:600; margin:0;">ATCC — Leading Life Sciences Organization</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="testi-slide" style="min-width:100%; padding: 24px 4px 48px;">
                            <div class="testimonial-box">
                                <div style="font-family:'Roboto Slab',serif; font-size:120px; line-height:1; color:rgba(255,40,0,0.08); position:absolute; top:12px; left:36px; font-weight:800; user-select:none;">"</div>
                                <div style="position:relative; z-index:1;">
                                    <p style="font-family:'Inter',sans-serif; font-size:1.2rem; line-height:1.8; color:#374151; font-style:italic; margin-bottom:36px;">
                                        "We were looking for more than a conversational interface to our data. We wanted an enterprise AI foundation that could grow across business functions. agenTriniti delivered governed insights from day one."
                                    </p>
                                    <div style="display:flex; align-items:center; gap:16px;">
                                        <div style="width:52px;height:52px;border-radius:50%;background:rgba(255,40,0,0.08);border:2px solid rgba(255,40,0,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                            <i class="fas fa-user" style="color:#FF2800; font-size:18px;"></i>
                                        </div>
                                        <div>
                                            <p style="font-family:'Roboto Slab',serif; font-weight:700; font-size:15px; color:#111827; margin:0 0 2px;">Chief Procurement &amp; Transformation Officer</p>
                                            <p style="font-family:'Inter',sans-serif; font-size:13px; color:#FF2800; font-weight:600; margin:0;">Novolex — Leading North American Manufacturer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="testi-slide" style="min-width:100%; padding: 24px 4px 48px;">
                            <div style="background:#E5E1C7; border-radius:20px; padding:48px 48px 40px; position:relative; box-shadow: 0 24px 48px rgba(15,23,42,0.12); border: 1px solid rgba(4,4,4,0.06);">
                                <div style="font-family:'Roboto Slab',serif; font-size:120px; line-height:1; color:rgba(255,40,0,0.08); position:absolute; top:12px; left:36px; font-weight:800; user-select:none;">"</div>
                                <div style="position:relative; z-index:1;">
                                    <p style="font-family:'Inter',sans-serif; font-size:1.2rem; line-height:1.8; color:#374151; font-style:italic; margin-bottom:36px;">
                                        "agenTriniti helped us migrate a mission-critical ITSM platform without disrupting the business. We went live on time, accelerated delivery, and established a foundation for continuous innovation."
                                    </p>
                                    <div style="display:flex; align-items:center; gap:16px;">
                                        <div style="width:52px;height:52px;border-radius:50%;background:rgba(255,40,0,0.08);border:2px solid rgba(255,40,0,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                            <i class="fas fa-user" style="color:#FF2800; font-size:18px;"></i>
                                        </div>
                                        <div>
                                            <p style="font-family:'Roboto Slab',serif; font-weight:700; font-size:15px; color:#111827; margin:0 0 2px;">VP, Enterprise Service Management</p>
                                            <p style="font-family:'Inter',sans-serif; font-size:13px; color:#FF2800; font-weight:600; margin:0;">Leading U.S. Utility &amp; Broadband Provider</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls Row -->
                <div style="display:flex; align-items:center; justify-content:center; gap:20px; margin-top:36px;">
                    <!-- Prev -->
                    <button id="testi-prev" style="width:44px;height:44px;border-radius:50%;border:2px solid rgba(255,40,0,0.25);background:#fff;color:#FF2800;display:flex;align-items:center;justify-content:center;cursor:pointer;transition:all 0.2s;font-size:14px;" onmouseover="this.style.background='#FF2800';this.style.color='#fff';this.style.borderColor='#FF2800'" onmouseout="this.style.background='#fff';this.style.color='#FF2800';this.style.borderColor='rgba(255,40,0,0.25)'">
                        <i class="fas fa-chevron-left"></i>
                    </button>

                    <!-- Dots -->
                    <div id="testi-dots" style="display:flex;gap:10px;align-items:center;">
                        <button class="testi-dot" data-idx="0" style="width:10px;height:10px;border-radius:50%;border:none;background:#FF2800;cursor:pointer;transition:all 0.3s;padding:0;"></button>
                        <button class="testi-dot" data-idx="1" style="width:10px;height:10px;border-radius:50%;border:none;background:rgba(255,40,0,0.2);cursor:pointer;transition:all 0.3s;padding:0;"></button>
                        <button class="testi-dot" data-idx="2" style="width:10px;height:10px;border-radius:50%;border:none;background:rgba(255,40,0,0.2);cursor:pointer;transition:all 0.3s;padding:0;"></button>
                        <button class="testi-dot" data-idx="3" style="width:10px;height:10px;border-radius:50%;border:none;background:rgba(255,40,0,0.2);cursor:pointer;transition:all 0.3s;padding:0;"></button>
                    </div>

                    <!-- Next -->
                    <button id="testi-next" style="width:44px;height:44px;border-radius:50%;border:2px solid rgba(255,40,0,0.25);background:#fff;color:#FF2800;display:flex;align-items:center;justify-content:center;cursor:pointer;transition:all 0.2s;font-size:14px;" onmouseover="this.style.background='#FF2800';this.style.color='#fff';this.style.borderColor='#FF2800'" onmouseout="this.style.background='#fff';this.style.color='#FF2800';this.style.borderColor='rgba(255,40,0,0.25)'">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ── REGISTRATION FORM ── -->
    <section id="register" class="py-24 px-6 lg:px-12 bg-white">
        <div class="max-w-[1440px] mx-auto">
            <div class="grid lg:grid-cols-5 gap-16 items-start">
                <!-- Left column -->
                <div class="lg:col-span-2 fade-up">
                    <div class="pkg-badge mb-6"><i class="fas fa-pen-to-square"></i> Registration</div>
                    <h2 class="font-heading text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                        Register for the Ai4 Early-Bird Offer
                    </h2>
                    <p class="text-gray-500 leading-relaxed mb-8">
                        Share a few details and our team will contact you within two business days to schedule the next step.
                    </p>
                    <!-- Info cards -->
                    <div class="space-y-4">
                        <div class="flex items-start gap-3 bg-ceramic rounded-xl p-4">
                            <i class="fas fa-calendar-check text-ferrari mt-1 flex-shrink-0"></i>
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">2-Business Day Response</p>
                                <p class="text-xs text-gray-500">Our team will reach out promptly to schedule your next step.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 bg-ceramic rounded-xl p-4">
                            <i class="fas fa-lock text-ferrari mt-1 flex-shrink-0"></i>
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">Lock In Before Aug 15</p>
                                <p class="text-xs text-gray-500">Discount secured for engagements contracted by August 15, 2026.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 bg-ceramic rounded-xl p-4">
                            <i class="fas fa-handshake text-ferrari mt-1 flex-shrink-0"></i>
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">No Commitment Required</p>
                                <p class="text-xs text-gray-500">Registering your interest kicks off a conversation, nothing more.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="lg:col-span-3 fade-up delay-200">
                    <form id="main-reg-form" class="bg-ceramic rounded-2xl p-8 lg:p-10 border-l-4 border-ferrari shadow-sm">
                        <div class="grid md:grid-cols-2 gap-5">
                            <div class="md:col-span-2">
                                <label class="form-label">Full Name *</label>
                                <input type="text" class="form-input" placeholder="Jane Smith" required>
                            </div>
                            <div>
                                <label class="form-label">Company *</label>
                                <input type="text" class="form-input" placeholder="Acme Corp" required>
                            </div>
                            <div>
                                <label class="form-label">Job Title *</label>
                                <input type="text" class="form-input" placeholder="Chief Digital Officer" required>
                            </div>
                            <div>
                                <label class="form-label">Work Email *</label>
                                <input type="email" class="form-input" placeholder="jane@acmecorp.com" required>
                            </div>
                            <div>
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-input" placeholder="+1 (555) 000-0000">
                            </div>
                            <div class="md:col-span-2">
                                <label class="form-label">Package of Interest *</label>
                                <select class="form-input" required>
                                    <option value="" disabled selected>Select a package…</option>
                                    <option>agenTriniti℠ Silver — 10% off your first engagement term</option>
                                    <option>agenTriniti℠ Gold — 15% off your first engagement term</option>
                                    <option>agenTriniti℠ Platinum — 15% off your first engagement term</option>
                                </select>
                            </div>
                            <div class="md:col-span-2">
                                <label class="form-label">Priority AI Use Case or Business Challenge</label>
                                <textarea class="form-input" rows="3" placeholder="Describe your primary AI challenge or the use case you'd like to address…"></textarea>
                            </div>
                            <div class="md:col-span-2">
                                <label class="form-label">Preferred Next Step *</label>
                                <select class="form-input" required>
                                    <option value="" disabled selected>Select preferred next step…</option>
                                    <option>Schedule a discovery workshop</option>
                                    <option>Receive package information</option>
                                    <option>Speak with the Airo team</option>
                                </select>
                            </div>
                            <div class="md:col-span-2">
                                <button type="submit" class="w-full bg-ferrari text-white py-4 rounded-full font-bold text-base hover:bg-ferrari-mid transition-all shadow-xl shadow-ferrari/30 flex items-center justify-center gap-2">
                                    Register My Interest <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ── OFFER TERMS ── -->
    <section id="offer-terms" class="py-14 px-6 lg:px-12" style="background: rgba(255,40,0,0.04); border-top: 1px solid rgba(255,40,0,0.1);">
        <div class="max-w-[1440px] mx-auto">
            <div class="flex flex-col md:flex-row md:items-start gap-6">
                <div class="flex-shrink-0">
                    <i class="fas fa-circle-info text-ferrari text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-gray-900 text-lg mb-3">Offer Terms</h3>
                    <p class="text-sm text-gray-500 leading-relaxed max-w-4xl">
                        This offer is available for new agenTriniti℠ engagements initiated by Ai4 2026 attendees who connected with an Airo representative during the event. Registration must be completed by August 15, 2026. The applicable discount applies to the first engagement term, cannot be combined with other offers and is subject to Airo's standard contracting and commercial approval process.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── SLIDE-IN REGISTRATION DRAWER ── -->
    <div id="drawer-overlay" class="fixed inset-0 z-[200] items-end justify-end" style="background: rgba(255,40,0,0.08); backdrop-filter: blur(4px);">
        <div id="drawer-panel" class="relative h-full w-full max-w-lg bg-white shadow-2xl overflow-y-auto flex flex-col">
            <!-- Header -->
            <div class="flex items-center justify-between px-8 py-6 border-b border-red-100 flex-shrink-0">
                <div>
                    <h3 class="font-heading text-2xl font-bold text-gray-900">Register My Interest</h3>
                    <p class="text-sm text-gray-500 mt-1">Our team will be in touch within 2 business days.</p>
                </div>
                <button id="close-drawer-btn" class="w-9 h-9 rounded-full border border-red-200 text-ferrari hover:bg-ferrari hover:text-white transition-all flex items-center justify-center">
                    <i class="fas fa-times text-sm"></i>
                </button>
            </div>

            <!-- Discount banner -->
            <div class="mx-8 mt-6 bg-ferrari/5 border border-ferrari/20 rounded-xl p-4 flex items-center gap-3 flex-shrink-0">
                <i class="fas fa-tag text-ferrari text-lg"></i>
                <div>
                    <p class="font-semibold text-gray-800 text-sm">Ai4 Early-Bird Discount Active</p>
                    <p class="text-xs text-gray-500">Silver: 10% off · Gold & Platinum: 15% off your first term</p>
                </div>
            </div>

            <!-- Form -->
            <form id="drawer-reg-form" class="px-8 py-6 flex-1 space-y-5">
                <div>
                    <label class="form-label">Full Name *</label>
                    <input type="text" class="form-input" placeholder="Jane Smith" required>
                </div>
                <div>
                    <label class="form-label">Company *</label>
                    <input type="text" class="form-input" placeholder="Acme Corp" required>
                </div>
                <div>
                    <label class="form-label">Job Title *</label>
                    <input type="text" class="form-input" placeholder="Chief Digital Officer" required>
                </div>
                <div>
                    <label class="form-label">Work Email *</label>
                    <input type="email" class="form-input" placeholder="jane@acmecorp.com" required>
                </div>
                <div>
                    <label class="form-label">Phone Number</label>
                    <input type="tel" class="form-input" placeholder="+1 (555) 000-0000">
                </div>
                <div>
                    <label class="form-label">Package of Interest *</label>
                    <select class="form-input" required>
                        <option value="" disabled selected>Select a package…</option>
                        <option>agenTriniti℠ Silver — 10% off your first engagement term</option>
                        <option>agenTriniti℠ Gold — 15% off your first engagement term</option>
                        <option>agenTriniti℠ Platinum — 15% off your first engagement term</option>
                    </select>
                </div>
                <div>
                    <label class="form-label">Priority AI Use Case or Business Challenge</label>
                    <textarea class="form-input" rows="3" placeholder="Describe your primary AI challenge…"></textarea>
                </div>
                <div>
                    <label class="form-label">Preferred Next Step *</label>
                    <select class="form-input" required>
                        <option value="" disabled selected>Select preferred next step…</option>
                        <option>Schedule a discovery workshop</option>
                        <option>Receive package information</option>
                        <option>Speak with the Airo team</option>
                    </select>
                </div>
                <button type="submit" class="w-full bg-ferrari text-white py-4 rounded-full font-bold text-base hover:bg-ferrari-mid transition-all shadow-xl shadow-ferrari/30 flex items-center justify-center gap-2">
                    Register My Interest <i class="fas fa-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>

</div>

<!-- Page Javascript -->
<script>
(function() {

    // ── DRAWER ──
    const overlay   = document.getElementById('drawer-overlay');
    const openBtns  = document.querySelectorAll('.open-drawer, #hero-cta, #open-drawer-btn, #mobile-menu-toggle');
    const closeBtn  = document.getElementById('close-drawer-btn');

    function openDrawer() {
        if (overlay) {
            overlay.classList.add('open');
            document.body.style.overflow = 'hidden';
        }
    }
    function closeDrawer() {
        if (overlay) {
            overlay.classList.remove('open');
            document.body.style.overflow = '';
        }
    }

    openBtns.forEach(btn => btn.addEventListener('click', openDrawer));
    if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
    if (overlay) {
        overlay.addEventListener('click', function(e) {
            if (e.target === overlay) closeDrawer();
        });
    }

    // ── SCROLL ANIMATIONS ──
    const fadeEls = document.querySelectorAll('.fade-up');
    if (fadeEls.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    observer.unobserve(e.target);
                }
            });
        }, { threshold: 0.15 });
        fadeEls.forEach(el => observer.observe(el));
    }

    // ── STICKY HEADER SHADOW ──
    window.addEventListener('scroll', () => {
        const hdr = document.getElementById('site-header') || document.querySelector('.navbar-fixed-top');
        if (hdr) {
            if (window.scrollY > 20) {
                hdr.classList.add('header-scrolled');
            } else {
                hdr.classList.remove('header-scrolled');
            }
        }
    });

    // ── FORM SUBMIT (prevent default & show feedback) ──
    document.querySelectorAll('.ai4-landing-wrapper form').forEach(f => {
        f.addEventListener('submit', e => {
            e.preventDefault();
            const btn = f.querySelector('button[type="submit"]');
            if (btn) {
                btn.innerHTML = '<i class="fas fa-check mr-2"></i> Submitted! We\'ll be in touch.';
                btn.disabled = true;
                btn.style.background = '#22c55e';
            }
        });
    });

    // ── TESTIMONIALS CAROUSEL ──
    const track   = document.getElementById('testi-track');
    const dots    = document.querySelectorAll('.testi-dot');
    const prevBtn = document.getElementById('testi-prev');
    const nextBtn = document.getElementById('testi-next');
    const carousel = document.getElementById('testi-carousel');
    const wrap = document.getElementById('testi-track-wrap');
    
    if (track && dots.length > 0 && prevBtn && nextBtn && carousel && wrap) {
        const total   = 4;
        let current   = 0;
        let autoTimer;

        function goTo(n) {
            current = (n + total) % total;
            track.style.transform = 'translateX(-' + (current * 100) + '%)';
            dots.forEach((d, i) => {
                if (i === current) {
                    d.style.background = '#FF2800';
                    d.style.width      = '28px';
                    d.style.borderRadius = '5px';
                } else {
                    d.style.background   = 'rgba(255,40,0,0.2)';
                    d.style.width        = '10px';
                    d.style.borderRadius = '50%';
                }
            });
        }

        function startAuto() {
            clearInterval(autoTimer);
            autoTimer = setInterval(() => goTo(current + 1), 5000);
        }

        prevBtn.addEventListener('click', () => { goTo(current - 1); startAuto(); });
        nextBtn.addEventListener('click', () => { goTo(current + 1); startAuto(); });
        dots.forEach(d => d.addEventListener('click', () => { goTo(parseInt(d.dataset.idx)); startAuto(); }));

        // Pause on hover
        carousel.addEventListener('mouseenter', () => clearInterval(autoTimer));
        carousel.addEventListener('mouseleave', startAuto);

        // Swipe support
        let touchStartX = 0;
        wrap.addEventListener('touchstart', e => { touchStartX = e.changedTouches[0].screenX; }, { passive: true });
        wrap.addEventListener('touchend', e => {
            const dx = e.changedTouches[0].screenX - touchStartX;
            if (Math.abs(dx) > 40) { goTo(current + (dx < 0 ? 1 : -1)); startAuto(); }
        }, { passive: true });

        goTo(0);
        startAuto();
    }

})();
</script>

<script>
    jQuery(document).ready(function($){
        if ($.fn.slick) {
            $('.hero-client-logos').slick({
                variableWidth: true,
                slidesToShow: 7,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 0,
                speed: 4000,
                cssEase: 'linear',
                infinite: true,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 5
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });

            // Add hover effect
            $('.hero-client-logos .logo-item').hover(
                function() {
                    $(this).find('img').css({'filter': 'grayscale(0%) opacity(1)'});
                }, function() {
                    $(this).find('img').css({'filter': 'grayscale(100%) opacity(0.5)'});
                }
            );
        }
    });
</script>

<?php get_footer(); ?>
