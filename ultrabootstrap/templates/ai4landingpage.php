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

    /* ── SUCCESS POPUP MODAL ── */
    .ai4-landing-wrapper #success-overlay {
        position: fixed; inset: 0; z-index: 300; display: none; align-items: center; justify-content: center;
        background: rgba(20,0,0,0.55); backdrop-filter: blur(6px); padding: 24px;
        opacity: 0; transition: opacity 0.35s ease;
    }
    .ai4-landing-wrapper #success-overlay.open { display: flex; opacity: 1; }
    .ai4-landing-wrapper #success-modal {
        background: #fff; border-radius: 20px; max-width: 440px; width: 100%; padding: 48px 40px;
        text-align: center; position: relative; transform: scale(0.92) translateY(16px); opacity: 0;
        transition: transform 0.4s cubic-bezier(0.16,1,0.3,1), opacity 0.4s ease;
        box-shadow: 0 30px 60px rgba(0,0,0,0.25);
    }
    .ai4-landing-wrapper #success-overlay.open #success-modal { transform: scale(1) translateY(0); opacity: 1; }
    .ai4-landing-wrapper #success-modal h3 {
        margin-top: 0 !important;
        margin-bottom: 12px !important;
        padding: 0 !important;
        font-size: 24px !important;
        font-weight: 700 !important;
        color: #111827 !important;
        font-family: 'Roboto Slab', serif !important;
    }
    .ai4-landing-wrapper #success-modal p {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
        padding: 0 !important;
        color: #6b7280 !important;
        line-height: 1.625 !important;
        font-size: 15px !important;
        font-family: 'Inter', sans-serif !important;
    }
    .ai4-landing-wrapper .success-icon {
        width: 72px; height: 72px; border-radius: 50%; background: rgba(34,197,94,0.1);
        border: 2px solid rgba(34,197,94,0.35); display: flex; align-items: center; justify-content: center;
        margin: 0 auto 22px; animation: pulse-red 2s infinite;
    }
    .ai4-landing-wrapper .success-icon i,
    .ai4-landing-wrapper .success-icon svg { color: #22c55e !important; font-size: 26px !important; width: 26px !important; height: 26px !important; }
    .ai4-landing-wrapper #success-close {
        position: absolute; top: 16px; right: 16px; width: 32px; height: 32px; border-radius: 50%;
        border: 1px solid rgba(255,40,0,0.2) !important; color: #FF2800 !important; display: flex !important; align-items: center !important; justify-content: center !important;
        cursor: pointer; transition: all 0.2s; font-size: 13px !important; background: transparent !important;
        padding: 0 !important; line-height: 1 !important;
    }
    .ai4-landing-wrapper #success-close:hover { background: #FF2800 !important; color: #fff !important; border-color: #FF2800 !important; }

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
    .ai4-landing-wrapper .tier-silver .pkg-card-inner { background: linear-gradient(145deg, #ffffff 0%, #f4f7fd 40%, #eaf0f8 70%, #f8faff 100%) padding-box, linear-gradient(135deg, #ffffff 0%, #dfe7f5 50%, #9ea9c9 100%) border-box; border: 2px solid transparent; box-shadow: inset 0 1px 0 rgba(255,255,255,0.98), 0 4px 20px rgba(158,169,201,0.2); }
    .ai4-landing-wrapper .tier-silver .pkg-card-inner::before { background: linear-gradient(90deg, #ffffff, #dfe7f5, #9ea9c9, #dfe7f5, #ffffff); }
    .ai4-landing-wrapper .tier-pill.tier-silver-pill { background: linear-gradient(#ffffff, #f0f4fc) padding-box, linear-gradient(135deg, #dfe7f5, #9ea9c9) border-box; border: 1px solid transparent; color: #3d4f6b; font-weight: 700; }
    .ai4-landing-wrapper .tier-icon.tier-silver-icon { background: rgba(57,74,92,0.08); border: 2px solid rgba(184,199,217,0.5); color: #394A5C; }
    .ai4-landing-wrapper .tier-price.tier-silver-price { color: #3d4f6b; background: rgba(223,231,245,0.4); border: 1px solid rgba(158,169,201,0.3); }

    /* Tier: Gold */
    .ai4-landing-wrapper .tier-gold .pkg-card-inner { background: linear-gradient(145deg, #fffff8 0%, #fffce8 38%, #fff8d0 65%, #fffef0 100%) padding-box, linear-gradient(135deg, #fff3a3 0%, #ffb800 50%, #ff7b00 100%) border-box; border: 2px solid transparent; box-shadow: inset 0 1px 0 rgba(255,255,255,0.95), 0 4px 20px rgba(255,184,0,0.22); }
    .ai4-landing-wrapper .tier-gold .pkg-card-inner::before { display: none; }
    .ai4-landing-wrapper .tier-pill.tier-gold-pill { background: linear-gradient(135deg, #fff3a3, #ffb800, #ff7b00); color: #3d1a00; border: none; font-weight: 800; }
    .ai4-landing-wrapper .tier-icon.tier-gold-icon { background: rgba(217,119,6,0.1); border: 2px solid rgba(217,119,6,0.35); color: #D97706; }
    .ai4-landing-wrapper .tier-price.tier-gold-price { color: #5c2c00; background: rgba(255,184,0,0.12); border: 1px solid rgba(255,184,0,0.3); }
    .ai4-landing-wrapper .pkg-card.tier-gold {
        transform: scale(1.05);
        z-index: 10;
    }
    .ai4-landing-wrapper .pkg-card.tier-gold:hover .pkg-card-inner { transform: translateY(-8px); }
    @media (max-width: 767px) {
        .ai4-landing-wrapper .pkg-card.tier-gold { transform: none; }
    }

    /* Tier: Platinum */
    .ai4-landing-wrapper .tier-platinum .pkg-card-inner { background: linear-gradient(145deg, #ffffff 0%, #edf6fa 28%, #d6ebf4 55%, #e8f4f8 80%, #ffffff 100%) padding-box, linear-gradient(135deg, #7dc4d0 0%, #1e80b0 22%, #0d5580 48%, #1e80b0 72%, #58949c 100%) border-box; border: 2.5px solid transparent; box-shadow: inset 0 1px 0 rgba(255,255,255,0.98), 0 6px 28px rgba(18,92,132,0.22); }
    .ai4-landing-wrapper .tier-platinum .pkg-card-inner::before { background: linear-gradient(90deg, #7dc4d0, #125c84, #58949c, #125c84, #7dc4d0); }
    .ai4-landing-wrapper .tier-pill.tier-platinum-pill { background: linear-gradient(135deg, #58949c, #125c84); color: #ffffff; border: none; font-weight: 800; }
    .ai4-landing-wrapper .tier-icon.tier-platinum-icon { background: rgba(18,92,132,0.08); border: 2px solid rgba(18,92,132,0.3); color: #125c84; }
    .ai4-landing-wrapper .tier-price.tier-platinum-price { color: #125c84; background: rgba(18,92,132,0.08); border: 1px solid rgba(18,92,132,0.22); }

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
        font-size: 16px !important;
        font-weight: 800 !important;
        padding-top: 14px !important;
        padding-bottom: 14px !important;
    }

    /* Silver Button */
    .ai4-landing-wrapper .tier-silver button.open-drawer {
        background: linear-gradient(#f8fbff, #f0f5ff) padding-box, linear-gradient(135deg, #dfe7f5, #9ea9c9) border-box !important;
        border: 1.5px solid transparent !important;
        color: #3d4f6b !important;
        box-shadow: 0 4px 14px rgba(158,169,201,0.3) !important;
    }
    .ai4-landing-wrapper .tier-silver button.open-drawer:hover {
        background: linear-gradient(135deg, #dfe7f5, #9ea9c9) !important;
        color: #1e2d45 !important;
    }

    /* Gold Button */
    .ai4-landing-wrapper .tier-gold button.open-drawer {
        background: linear-gradient(#fffef8, #fff8e6) padding-box, linear-gradient(135deg, #ffb800, #ff7b00) border-box !important;
        border: 1.5px solid transparent !important;
        color: #7a3d00 !important;
        box-shadow: 0 4px 14px rgba(255,184,0,0.3) !important;
    }
    .ai4-landing-wrapper .tier-gold button.open-drawer:hover {
        background: linear-gradient(135deg, #fff3a3, #ffb800, #ff7b00) !important;
        color: #3d1a00 !important;
    }

    /* Platinum Button */
    .ai4-landing-wrapper .tier-platinum button.open-drawer {
        background: linear-gradient(#eef5f8, #daeaf0) padding-box, linear-gradient(135deg, #58949c, #125c84) border-box !important;
        border: 1.5px solid transparent !important;
        color: #125c84 !important;
        box-shadow: 0 4px 14px rgba(18,92,132,0.3) !important;
    }
    .ai4-landing-wrapper .tier-platinum button.open-drawer:hover {
        background: linear-gradient(135deg, #58949c, #125c84) !important;
        color: #ffffff !important;
    }

    /* Package Card Pills explicitly styled with !important */
    .ai4-landing-wrapper .tier-pill.tier-silver-pill {
        background: linear-gradient(#ffffff, #f0f4fc) padding-box, linear-gradient(135deg, #dfe7f5, #9ea9c9) border-box !important;
        border: 1px solid transparent !important;
        color: #3d4f6b !important;
    }
    .ai4-landing-wrapper .tier-pill.tier-gold-pill {
        background: linear-gradient(135deg, #fff3a3, #ffb800, #ff7b00) !important;
        color: #3d1a00 !important;
        border: none !important;
    }
    .ai4-landing-wrapper .tier-pill.tier-platinum-pill {
        background: linear-gradient(135deg, #58949c, #125c84) !important;
        color: #ffffff !important;
        border: none !important;
    }
    .ai4-landing-wrapper .tier-pill.tier-platinum-pill {
        background: linear-gradient(135deg,#58949c,#125c84) !important;
        color: #fff !important;
        border: none !important;
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
    .ai4-landing-wrapper #packages h2 {
        margin-bottom: 76px !important;
    }
    @media (max-width: 767px) {
        .ai4-landing-wrapper #packages h2 {
            margin-bottom: 56px !important;
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

    /* ── Client logos section styling ── */
    .ai4-landing-wrapper .hero-client-logos-sec {
        height: auto;
        min-height: 60px;
        padding: 10px 0 !important;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        overflow: hidden;
    }
    .ai4-landing-wrapper .hero-client-logos-sec .logo-item {
        height: 45px !important;
    }

    @media (min-width: 1024px) {
        .ai4-landing-wrapper .hero-client-logos-sec {
            height: 75px;
            min-height: 75px;
            padding: 8px 0 !important;
            overflow: hidden;
        }
        .ai4-landing-wrapper .hero-client-logos-sec .logo-item {
            height: 55px !important;
        }
    }
    .ai4-landing-wrapper .hero-client-logos {
        margin-bottom: 0 !important;
    }

    .ai4-landing-wrapper .hero-client-logos {
        margin-bottom: 0 !important;
    }



    /* ── TIGHT SINGLE VIEWPORT FIT FOR ALL MOBILE & TABLET DEVICES (<1024px) ── */

    /* ── HERO ── */
    .ai4-landing-wrapper #hero h1 {
        font-size: clamp(2.35rem, 3.8vw, 3.65rem) !important;
        line-height: 1.12 !important;
        letter-spacing: -0.02em !important;
        font-weight: 800 !important;
    }

    @media (max-width: 1023px) {
        .ai4-landing-wrapper #hero {
            height: auto !important;
            min-height: auto !important;
            max-height: none !important;
            display: block !important;
        }
        .ai4-landing-wrapper #hero-slides-container {
            height: auto !important;
            display: block !important;
            padding-top: 76px !important;
            padding-bottom: 16px !important;
        }
        .ai4-landing-wrapper .hero-slide {
            position: relative !important;
            height: auto !important;
            opacity: 1 !important;
            padding: 0 !important;
            display: block !important;
        }
        .ai4-landing-wrapper #hero h1 {
            font-size: clamp(1.9rem, 4.8vw, 2.75rem) !important;
            line-height: 1.14 !important;
            margin-bottom: 0.65rem !important;
            letter-spacing: -0.015em !important;
        }
        .ai4-landing-wrapper #hero .pkg-badge,
        .ai4-landing-wrapper #hero .inline-flex {
            font-size: 11px !important;
            padding: 4px 10px !important;
            margin-bottom: 6px !important;
        }
        .ai4-landing-wrapper #hero p.text-lg {
            font-size: clamp(0.9rem, 2.2vw, 1rem) !important;
            line-height: 1.4 !important;
            margin-bottom: 0.65rem !important;
            color: #1f2937 !important;
            font-weight: 600 !important;
        }
        .ai4-landing-wrapper #hero .space-y-4 {
            margin-bottom: 0.75rem !important;
        }
        .ai4-landing-wrapper #hero button#hero-cta,
        .ai4-landing-wrapper #hero a[href="#packages"] {
            padding: 10px 20px !important;
            font-size: 14px !important;
        }
        .ai4-landing-wrapper #open-drawer-btn {
            display: none !important;
        }
    }

    /* ── MOBILE SCREENS TOP SPACING (351px to 767px: 360, 375, 390, 412, 414, 428, etc.) ── */
    @media (max-width: 767px) {
        .ai4-landing-wrapper #hero-slides-container {
            padding-top: 50px !important;
        }
    }

    /* ── SMALL MOBILE SCREEN READABILITY (<480px) ── */
    @media (max-width: 480px) {
        .ai4-landing-wrapper #hero h1 {
            font-size: clamp(1.7rem, 5.8vw, 2.1rem) !important;
            line-height: 1.15 !important;
            margin-bottom: 0.45rem !important;
        }
    }

    /* ── 320px EXTRA SMALL MOBILE DEVICES ONLY (320px width) ── */
    @media (max-width: 350px) {
        .ai4-landing-wrapper #hero-slides-container {
            padding-top: 40px !important;
            padding-bottom: 8px !important;
        }
        .ai4-landing-wrapper #hero h1 {
            font-size: clamp(1.35rem, 5.8vw, 1.55rem) !important;
            line-height: 1.14 !important;
            margin-bottom: 0.3rem !important;
        }
        .ai4-landing-wrapper #hero .pkg-badge,
        .ai4-landing-wrapper #hero .inline-flex {
            font-size: 9px !important;
            padding: 2.5px 8px !important;
            margin-bottom: 3px !important;
        }
        .ai4-landing-wrapper #hero p.text-lg {
            font-size: 10.5px !important;
            line-height: 1.32 !important;
            margin-bottom: 0.3rem !important;
        }
        .ai4-landing-wrapper #hero .space-y-4 {
            margin-bottom: 0.4rem !important;
        }
        .ai4-landing-wrapper #hero button#hero-cta,
        .ai4-landing-wrapper #main-reg-form button[type="submit"],
        .ai4-landing-wrapper #drawer-reg-form button[type="submit"] {
            padding: 7px 11px !important;
            font-size: 11px !important;
            line-height: 1.25 !important;
            max-width: 100% !important;
        }
        .ai4-landing-wrapper #hero button#hero-cta i,
        .ai4-landing-wrapper #main-reg-form button[type="submit"] i,
        .ai4-landing-wrapper #drawer-reg-form button[type="submit"] i {
            font-size: 9.5px !important;
        }
    }

    /* ── SHORT HEIGHT DESKTOP DISPLAYS (e.g. 1440px x 654px & 1024px x 654px) ── */
    @media (min-width: 1024px) and (max-height: 720px) {
        .ai4-landing-wrapper #hero {
            height: calc(100vh - 155px) !important;
            min-height: 440px !important;
        }
        .ai4-landing-wrapper #hero-slides-container {
            padding-top: 75px !important;
            padding-bottom: 10px !important;
            display: flex !important;
            align-items: center !important;
        }
        .ai4-landing-wrapper #hero h1 {
            font-size: clamp(2rem, 3vw, 2.75rem) !important;
            line-height: 1.12 !important;
            margin-bottom: 0.5rem !important;
        }
        .ai4-landing-wrapper #hero .pkg-badge,
        .ai4-landing-wrapper #hero .inline-flex {
            font-size: 11px !important;
            padding: 4px 12px !important;
            margin-bottom: 0.4rem !important;
        }
        .ai4-landing-wrapper #hero p.text-lg {
            font-size: 0.95rem !important;
            line-height: 1.35 !important;
            margin-bottom: 0.4rem !important;
        }
        .ai4-landing-wrapper #hero .space-y-4 {
            margin-bottom: 0.75rem !important;
        }
        .ai4-landing-wrapper #hero button#hero-cta {
            padding: 9px 20px !important;
            font-size: 13.5px !important;
        }
    }

    /* ── LARGE DESKTOP DISPLAYS (1440px+ & 1536px x 730px range) ── */
    @media (min-width: 1400px) {
        .ai4-landing-wrapper #hero-slides-container {
            padding-top: 110px !important;
            padding-bottom: 1.5rem !important;
        }
        .ai4-landing-wrapper #hero h1 {
            font-size: clamp(2.6rem, 4vw, 3.85rem) !important;
            line-height: 1.1 !important;
            margin-bottom: 1rem !important;
            letter-spacing: -0.02em !important;
        }
        .ai4-landing-wrapper #hero .pkg-badge,
        .ai4-landing-wrapper #hero .inline-flex {
            margin-bottom: 0.75rem !important;
        }
        .ai4-landing-wrapper #hero p.text-lg {
            font-size: 1.15rem !important;
            margin-bottom: 1.25rem !important;
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
                <ul class="hidden lg:flex items-center gap-8 text-[13px] font-medium text-gray-600 mb-0 list-none pl-0">
                    <li><a href="#register" class="nav-link hover:text-ferrari transition-colors">Workshop</a></li>
                    <li><a href="#packages" class="nav-link hover:text-ferrari transition-colors">Early bird offer</a></li>
                </ul>

                <!-- CTA Details & Mobile Toggle -->
                <div class="flex items-center gap-4">
                    <button id="open-drawer-btn" class="flex items-center gap-2 bg-ferrari text-white px-5 py-2.5 rounded-full text-sm font-semibold hover:bg-ferrari-mid transition-all duration-200 shadow-lg shadow-ferrari/20 hover:shadow-ferrari/40">
                        Schedule Your agenTriniti Workshop <i class="fas fa-arrow-right text-[11px]"></i>
                    </button>
                    <button class="lg:hidden text-ferrari text-xl" id="mobile-menu-toggle"><i class="fas fa-bars"></i></button>
                </div>
            </nav>
            
            <!-- Mobile Nav Dropdown -->
            <div id="mobile-nav-dropdown" class="hidden absolute top-[100%] left-0 w-full bg-white border-t border-gray-100 shadow-lg px-6 py-4 flex-col gap-4 z-[90]">
                <a href="#register" class="nav-link text-sm font-medium mobile-nav-item inline-block">Workshop</a>
                <a href="#packages" class="nav-link text-sm font-medium mobile-nav-item inline-block">Early bird offer</a>
            </div>
        </header>

        <!-- ── HERO ── -->
        <section id="hero" class="relative overflow-hidden" style="height: calc(100vh - 150px); min-height: 500px; max-height: 780px;">
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
                    <div class="max-w-2xl lg:max-w-3xl lg:ml-12 xl:ml-20">
                        <div class="pkg-badge fx-item mb-6" style="animation-delay:.05s"><i class="fas fa-bolt"></i> Limited Period Offer</div>
                        <div class="inline-flex items-center bg-ferrari text-white rounded-full px-4 py-1.5 text-sm font-bold mb-6 shadow-lg shadow-ferrari/30 fx-item" style="animation-delay:.15s">
                            <i class="fas fa-calendar-days mr-2 text-xs"></i> Register by August 31, 2026
                        </div>
                        <h1 class="font-heading font-extrabold leading-tight text-gray-900 mb-6">
                            <span class="word-reveal"><span style="animation-delay:.05s">Scale</span></span>
                            <span class="word-reveal"><span style="animation-delay:.12s">Enterprise</span></span>
                            <span class="word-reveal"><span style="animation-delay:.19s">AI</span></span><br>
                            <span class="word-reveal"><span style="animation-delay:.26s">from</span></span>
                            <span class="word-reveal"><span style="animation-delay:.33s">Vision</span></span>
                            <span class="word-reveal"><span style="animation-delay:.4s">to</span></span><br>
                            <span class="word-reveal text-ferrari"><span style="animation-delay:.47s">Production</span></span>
                        </h1>
                        <div class="space-y-4 mb-8 max-w-xl fx-item" style="animation-delay:.5s">
                            <p class="text-lg text-gray-600 leading-relaxed mb-0">
                                Start with a free agenTriniti workshop to identify the right use cases, define the scope and establish the path to production.
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-4 fx-item" style="animation-delay:.6s">
                            <button id="hero-cta" class="flex items-center gap-2 bg-ferrari text-white px-7 py-3.5 rounded-full font-semibold text-base hover:bg-ferrari-mid transition-all shadow-xl shadow-ferrari/30">
                                Schedule Your agenTriniti Workshop <i class="fas fa-arrow-right"></i>
                            </button>
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
        <section class="hero-client-logos-sec" style="background: #fff; border-bottom: 1px solid #E4E6EE; overflow: hidden;">
            <div class="container-fluid" style="padding: 0;">
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

        <!-- ── REGISTRATION FORM ── -->
        <section id="register" class="pt-12 md:pt-16 pb-8 md:pb-12 px-6 lg:px-12 bg-white">
            <div class="max-w-4xl mx-auto">
                <!-- Centered Header -->
                <div class="text-center mb-6 md:mb-8 fade-up">
                    <h2 class="font-heading text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900">
                        Start Your <span class="text-ferrari">agenTriniti Workshop</span>
                    </h2>
                </div>  

                <!-- Form -->
                <div class="fade-up delay-200">
                    <form id="main-reg-form" class="bg-ceramic rounded-2xl p-8 lg:p-10 border-l-4 border-ferrari shadow-sm">
                        <div class="grid md:grid-cols-2 gap-5">
                            <div class="md:col-span-2">
                                <label class="form-label">Full Name *</label>
                                <input type="text" class="form-input" placeholder="" required>
                            </div>
                            <div>
                                <label class="form-label">Company *</label>
                                <input type="text" class="form-input" placeholder="" required>
                            </div>
                            <div>
                                <label class="form-label">Job Title *</label>
                                <input type="text" class="form-input" placeholder="" required>
                            </div>
                            <div class="md:col-span-2">
                                <label class="form-label">Work Email *</label>
                                <input type="email" class="form-input" placeholder="" required>
                            </div>
                            <!-- <div>
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-input" placeholder="">
                            </div> -->
                            <div class="md:col-span-2">
                                <button type="submit" class="w-full bg-ferrari text-white py-4 rounded-full font-bold text-base hover:bg-ferrari-mid transition-all shadow-xl shadow-ferrari/30 flex items-center justify-center gap-2">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- ── PACKAGES / EARLY-BIRD PRICING ── -->
        <section id="packages" class="pt-8 md:pt-12 pb-16 md:pb-24 px-6 lg:px-12 bg-white">
            <div class="max-w-[1440px] mx-auto">
                <h2 class="font-heading text-4xl lg:text-5xl font-bold text-center mb-16 md:mb-20 fade-up delay-100"> <span style="color:#01004A">Limited-Period</span> <span class="text-ferrari">agenTriniti Early-Bird Offer</span></h2>

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
                                <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#3d4f6b"></i> 20 Secure AI Agents</li>
                                <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#3d4f6b"></i> 3 Months of Build Phase</li>

                            </ul>
                            <button class="open-drawer w-full py-3 rounded-full font-semibold transition-all" style="background:linear-gradient(#f8fbff,#f0f5ff) padding-box, linear-gradient(135deg,#dfe7f5,#9ea9c9) border-box; border:1.5px solid transparent; color:#3d4f6b; box-shadow:0 4px 14px rgba(158,169,201,0.3)">
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
                                <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#ff7b00"></i> 50 Secure AI Agents</li>
                                <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#ff7b00"></i> 4 Months of Build Phase</li>

                            </ul>
                            <button class="open-drawer w-full py-3 rounded-full font-semibold transition-all" style="background:linear-gradient(#fffef8,#fff8e6) padding-box, linear-gradient(135deg,#ffb800,#ff7b00) border-box; border:1.5px solid transparent; color:#7a3d00; box-shadow:0 4px 14px rgba(255,184,0,0.3)">
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
                                <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#125c84"></i> 100 Secure AI Agents</li>
                                <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#125c84"></i> 6 Months of Build Phase</li>

                            </ul>
                            <button class="open-drawer w-full py-3 rounded-full font-semibold transition-all" style="background:linear-gradient(#eef5f8,#daeaf0) padding-box, linear-gradient(135deg,#58949c,#125c84) border-box; border:1.5px solid transparent; color:#125c84; box-shadow:0 4px 14px rgba(18,92,132,0.3)">
                                Register for Platinum →
                            </button>
                        </div>
                    </div>

                </div>

                <!-- Offer note -->
                <div class="mt-6 md:mt-8 text-center">
                    <p class="text-sm text-gray-500 max-w-3xl mx-auto">
                        <i class="fas fa-info-circle text-ferrari mr-1"></i>
                        The applicable discount will be reflected in the approved commercial proposal once the scope and package are confirmed.
                    </p>
                </div>
            </div>
        </section>

        <!-- ── OFFER TERMS ── -->
        <section id="offer-terms" class="py-14 px-6 lg:px-12" style="background: rgba(255,40,0,0.04); border-top: 1px solid rgba(255,40,0,0.1);">
            <div class="max-w-[1440px] mx-auto">
                <div class="flex flex-row items-start gap-3">
                    <div class="flex-shrink-0">
                        <i class="fas fa-circle-info text-ferrari text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-heading font-bold text-gray-900 text-lg mb-3">Terms & Conditions</h3>
                        <p class="text-sm text-gray-500 leading-relaxed max-w-4xl">
                            The early-bird offer is available to qualified prospects who complete their agenTriniti workshop by August 31, 2026. The discount applies to the first engagement term, cannot be combined with other offers and is subject to Airo’s standard qualification and commercial approval process.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── SLIDE-IN REGISTRATION DRAWER ── -->
        <div id="drawer-overlay" class="fixed inset-0 z-[200] items-end justify-end" style="background: rgba(255,40,0,0.08); backdrop-filter: blur(4px);">
            <div id="drawer-panel" class="relative h-full w-full max-w-lg bg-white shadow-2xl overflow-y-auto flex flex-col">
                <!-- Header -->
                <div class="flex items-center justify-between px-6 sm:px-8 py-5 border-b border-red-100 flex-shrink-0 gap-3">
                    <div class="min-w-0 flex-1">
                        <h3 class="font-heading text-base sm:text-lg lg:text-xl font-bold text-gray-900 whitespace-nowrap">Schedule Your agenTriniti Workshop</h3>
                        <!-- <p class="text-sm text-gray-500 mt-1">Our team will be in touch within 2 business days.</p> -->
                    </div>
                    <button id="close-drawer-btn" class="w-9 h-9 flex-shrink-0 rounded-full border border-red-200 text-ferrari hover:bg-ferrari hover:text-white transition-all flex items-center justify-center">
                        <i class="fas fa-times text-sm"></i>
                    </button>
                </div>

                <!-- Discount banner -->
                <!-- <div class="mx-8 mt-6 bg-ferrari/5 border border-ferrari/20 rounded-xl p-4 flex items-center gap-3 flex-shrink-0">
                    <i class="fas fa-tag text-ferrari text-lg"></i>
                    <div>
                        <p class="font-semibold text-gray-800 text-sm">Ai4 Early-Bird Discount Active</p>
                        <p class="text-xs text-gray-500">Silver: 10% off · Gold & Platinum: 15% off your first term</p>
                    </div>
                </div> -->

                <!-- Form -->
                <form id="drawer-reg-form" class="px-8 py-6 flex-1 space-y-5">
                    <div>
                        <label class="form-label">Full Name *</label>
                        <input type="text" class="form-input" placeholder="" required>
                    </div>
                    <div>
                        <label class="form-label">Company *</label>
                        <input type="text" class="form-input" placeholder="" required>
                    </div>
                    <div>
                        <label class="form-label">Job Title *</label>
                        <input type="text" class="form-input" placeholder="" required>
                    </div>
                    <div>
                        <label class="form-label">Work Email *</label>
                        <input type="email" class="form-input" placeholder="" required>
                    </div>
                    <!-- <div>
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-input" placeholder="">
                    </div> -->
                    <button type="submit" class="w-full bg-ferrari text-white py-4 rounded-full font-bold text-base hover:bg-ferrari-mid transition-all shadow-xl shadow-ferrari/30 flex items-center justify-center gap-2">
                        Submit
                    </button>
                </form>
            </div>
        </div>

        <!-- ── SUCCESS / THANK YOU POPUP (SHARED) ── -->
        <div id="success-overlay">
            <div id="success-modal">
                <button id="success-close" type="button"><i class="fas fa-times"></i></button>
                <div class="success-icon"><i class="fas fa-check"></i></div>
                <h3 class="font-heading text-2xl font-bold text-gray-900 mb-3">Thank you for your interest</h3>
                <p class="text-gray-500 leading-relaxed">We’ve received your details. Our team will contact you within 24 hours to confirm your workshop and arrange a convenient time.</p>
            </div>
        </div>

    </div>

    <!-- Page Javascript -->
    <script>
    (function() {

        // ── DRAWER ──
        const overlay   = document.getElementById('drawer-overlay');
        const openBtns  = document.querySelectorAll('.open-drawer, #hero-cta, #open-drawer-btn');
        const closeBtn  = document.getElementById('close-drawer-btn');

        // ── MOBILE MENU ──
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileNavDropdown = document.getElementById('mobile-nav-dropdown');
        
        if (mobileMenuToggle && mobileNavDropdown) {
            mobileMenuToggle.addEventListener('click', () => {
                mobileNavDropdown.classList.toggle('hidden');
                mobileNavDropdown.classList.toggle('flex');
            });
            document.querySelectorAll('.mobile-nav-item').forEach(item => {
                item.addEventListener('click', () => {
                    mobileNavDropdown.classList.add('hidden');
                    mobileNavDropdown.classList.remove('flex');
                });
            });
        }

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

        // ── SUCCESS POPUP ──
        const successOverlay = document.getElementById('success-overlay');
        const successClose   = document.getElementById('success-close');

        function openSuccessPopup() {
            if (successOverlay) {
                successOverlay.classList.add('open');
                document.body.style.overflow = 'hidden';
            }
        }
        function closeSuccessPopup() {
            if (successOverlay) {
                successOverlay.classList.remove('open');
                document.body.style.overflow = '';
            }
        }
        if (successClose) successClose.addEventListener('click', closeSuccessPopup);
        if (successOverlay) {
            successOverlay.addEventListener('click', (e) => {
                if (e.target === successOverlay) closeSuccessPopup();
            });
        }
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && successOverlay && successOverlay.classList.contains('open')) closeSuccessPopup();
        });

        // ── FORM SUBMIT → CLOSE DRAWER (IF OPEN), RESET, SHOW POPUP ──
        const mainForm = document.getElementById('main-reg-form');
        if (mainForm) {
            mainForm.addEventListener('submit', e => {
                e.preventDefault();
                mainForm.reset();
                openSuccessPopup();
            });
        }

        const drawerForm = document.getElementById('drawer-reg-form');
        if (drawerForm) {
            drawerForm.addEventListener('submit', e => {
                e.preventDefault();
                drawerForm.reset();
                closeDrawer();
                setTimeout(openSuccessPopup, 300); // wait for drawer close animation
            });
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
