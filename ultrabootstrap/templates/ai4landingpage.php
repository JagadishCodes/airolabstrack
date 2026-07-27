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
	
/* Scoped CF7 Rules for Landing Page Forms */
.ai4-landing-wrapper .wpcf7 p,
#drawer-panel .wpcf7 p {
    margin: 0 !important;
    padding: 0 !important;
}

.ai4-landing-wrapper .wpcf7 br,
#drawer-panel .wpcf7 br {
    display: none !important;
}

.ai4-landing-wrapper .wpcf7-spinner,
#drawer-panel .wpcf7-spinner {
    display: none !important;
}

.ai4-landing-wrapper .wpcf7-form-control-wrap,
#drawer-panel .wpcf7-form-control-wrap {
    display: block !important;
    margin: 0 !important;
    padding: 0 !important;
}

.ai4-landing-wrapper .wpcf7-not-valid-tip,
#drawer-panel .wpcf7-not-valid-tip {
    margin: 2px 0 0 !important;
    padding: 0 !important;
    font-size: 13px !important;
    line-height: 1.2 !important;
    display: none !important;
}

.ai4-landing-wrapper .custom-error,
#drawer-panel .custom-error {
    display: block !important;
    color: #dc2626 !important;
    font-size: 12px !important;
    margin-top: 4px !important;
    line-height: 1.2 !important;
}

.ai4-landing-wrapper .bottom-submit-btn.submitting,
.ai4-landing-wrapper .wpcf7-submit.submitting,
#drawer-panel .wpcf7-submit.submitting {
    opacity: .8 !important;
    cursor: not-allowed !important;
}

/* ── DEDICATED FOOTER NEWSLETTER FORM & SUBMIT BUTTON STYLES (SEPARATE SCOPE) ── */
.custom-footer .newsletter-form-wrap form,
.custom-footer .newsletter-form-wrap .wpcf7-form {
    display: block !important;
    width: 100% !important;
    margin: 0 !important;
    padding: 0 !important;
}

.custom-footer .newsletter-form-wrap .wpcf7-form p {
    display: block !important;
    clear: both !important;
    margin: 0 0 14px 0 !important;
    padding: 0 !important;
}

.custom-footer .newsletter-form-wrap .wpcf7-form p:empty,
.custom-footer .newsletter-form-wrap .wpcf7-response-output:empty {
    display: none !important;
}

.custom-footer .newsletter-form-wrap .wpcf7-list-item,
.custom-footer .newsletter-form-wrap .wpcf7-acceptance {
    display: block !important;
    clear: both !important;
    margin: 12px 0 16px 0 !important;
    padding: 0 !important;
    position: relative !important;
}

.custom-footer .newsletter-form-wrap .wpcf7-recaptcha,
.custom-footer .newsletter-form-wrap .g-recaptcha,
.custom-footer .newsletter-form-wrap .wpcf7-form-control-wrap[data-name="recaptcha"] {
    display: block !important;
    clear: both !important;
    margin: 14px 0 !important;
    padding: 0 !important;
}

.custom-footer .newsletter-form-wrap input[type="submit"],
.custom-footer .newsletter-form-wrap .wpcf7-submit {
    background: #ffffff !important;
    display: block !important;
    clear: both !important;
    width: fit-content !important;
    height: auto !important;
    padding: 14px 32px !important;
    color: #0d004a !important;
    border: none !important;
    border-radius: 0px !important;
    font-family: 'Roboto Slab', serif !important;
    font-size: 16px !important;
    font-weight: 700 !important;
    margin-left: 0 !important;
    margin-top: 16px !important;
    box-shadow: none !important;
    cursor: pointer !important;
    opacity: 1 !important;
    transition: background 0.3s ease, color 0.3s ease !important;
    transform: none !important;
}

.custom-footer .newsletter-form-wrap input[type="submit"]:hover,
.custom-footer .newsletter-form-wrap .wpcf7-submit:hover {
    background: #ff0000 !important;
    color: #ffffff !important;
}
	
	/* Remove extra spacing */
#bottom-reg-form .wpcf7-form-control-wrap{
    display:block;
    width:100%;
}

/* Labels */
#bottom-reg-form .form-label{
    display:block;
    margin-bottom:6px;
}

/* Inputs */
#bottom-reg-form .form-input{
    width:100%;
}

/* Submit wrapper */
#bottom-reg-form .bottom-submit-btn{
    width:100%;
    display:block;
    background:#ff3b0a;
    color:#fff;
    border:none;
    border-radius:9999px;
    padding:14px 24px;
    font-size:15px;
    font-weight:700;
    cursor:pointer;
    transition:.3s;
    box-shadow:0 8px 20px rgba(255,59,10,.2);
}

#bottom-reg-form .bottom-submit-btn:hover{
    background:#e63300;
}
	
	#main-reg-form .wpcf7-form-control-wrap,
#bottom-reg-form .wpcf7-form-control-wrap{
    display:block;
    margin:0 !important;
    padding:0 !important;
}

#main-reg-form .custom-error,
#bottom-reg-form .custom-error{
    display:block;
    margin-top:4px;
    margin-bottom:0;
    line-height:1.2;
    font-size:13px;
    color:#ef4444;
}
	#success-overlay{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.55);

    display:flex;
    justify-content:center;
    align-items:center;

    opacity:0;
    visibility:hidden;

    transition:.3s;

    z-index:999999;
}

#success-overlay.open{
    opacity:1;
    visibility:visible;
}

#success-modal{

    width:450px;
    max-width:90%;

    background:#fff;
    border-radius:24px;

    padding:40px 35px;

    position:relative;

    text-align:center;

    transform:translateY(20px);
    transition:.3s;
}

#success-overlay.open #success-modal{
    transform:translateY(0);
}
.success-icon{

    width:72px;
    height:72px;

    border-radius:50%;

    display:flex;
    justify-content:center;
    align-items:center;

    margin:0 auto 25px;

    font-size:34px;

}

.success-icon.success{

    background:#EAFBF0;
    border:2px solid #95E6B2;
    color:#22c55e;

}

.success-icon.error{

    background:#FEF2F2;
    border:2px solid #FCA5A5;
    color:#EF4444;

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
    max-height: 38px;
    width: auto !important;
    display: inline-block;
    vertical-align: middle;
}
.ai4-landing-wrapper .logo-tag a {
    display: inline-block;
}

/* Make logo large on desktop devices to match New-home.php */
@media (min-width: 1024px) {
    .ai4-landing-wrapper .logo-tag img {
        max-height: 55px;
    }
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
.ai4-landing-wrapper .hero-slide { position: relative; width: 100%; }
.ai4-landing-wrapper .hero-slide .fx-item {
    opacity: 0;
    filter: blur(6px);
    transform: translateY(14px) scale(0.98);
    animation: revealBlur 0.9s cubic-bezier(0.16,1,0.3,1) forwards;
}
@keyframes revealBlur {
    0%   { opacity: 0; filter: blur(6px); transform: translateY(14px) scale(0.98); }
    100% { opacity: 1; filter: blur(0); transform: translateY(0) scale(1); }
}

/* ── LOGO MARQUEE / SLIDER ── */
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

.ai4-landing-wrapper #drawer-panel p,
.ai4-landing-wrapper #drawer-panel h3 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    padding: 0 !important;
    white-space: nowrap !important;
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
    width: 100% !important; background: #F5F1EB !important; border: 1.5px solid rgba(255,40,0,0.15) !important;
    border-radius: 8px !important; padding: 6px 12px !important; font-size: 13px !important; font-family: 'Inter', sans-serif !important;
    outline: none !important; transition: border-color 0.2s, box-shadow 0.2s !important; color: #1a0000 !important; height: 36px !important;
}
.ai4-landing-wrapper .form-input:focus { border-color: #FF2800 !important; box-shadow: 0 0 0 3px rgba(255,40,0,0.1) !important; }
.ai4-landing-wrapper .form-input::placeholder { color: rgba(26,0,0,0.4) !important; }
.ai4-landing-wrapper .form-label { display: block !important; font-size: 11px !important; font-weight: 700 !important; text-transform: uppercase !important; letter-spacing: 0.05em !important; color: rgba(26,0,0,0.6) !important; margin-bottom: 3px !important; }

/* ── SECONDARY FORM SCALING ── */
.ai4-landing-wrapper #bottom-reg-form .form-input { height: 42px !important; padding: 8px 12px !important; font-size: 13px !important; }
.ai4-landing-wrapper #bottom-reg-form .form-label { margin-bottom: 4px !important; font-size: 11px !important; }

/* ── PACKAGE CARD (PRESERVED EXISTING COLORS & GRADIENTS) ── */
.ai4-landing-wrapper .pkg-badge {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(255,40,0,0.08); border: 1px solid rgba(255,40,0,0.2);
    color: #FF2800; border-radius: 20px; padding: 4px 12px; font-size: 11px; font-weight: 700;
    letter-spacing: 0.04em; text-transform: none !important;
}
.ai4-landing-wrapper .pkg-card { position: relative; border-radius: 20px; display: flex; flex-direction: column; background: transparent; height: 100%; }
.ai4-landing-wrapper .pkg-card-inner {
    background: #fff; border-radius: 20px; padding: 36px;
    display: flex; flex-direction: column; flex: 1 1 auto;
    overflow: hidden; position: relative;
    border: 1.5px solid rgba(15,23,42,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.ai4-landing-wrapper .pkg-card-inner::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px; }
.ai4-landing-wrapper .pkg-card:hover .pkg-card-inner { transform: translateY(-8px); box-shadow: 0 24px 48px rgba(15,23,42,0.10); }

/* List & Button Spacing Fix for Package Cards */
.ai4-landing-wrapper .pkg-card-inner ul {
    margin-bottom: 2.5rem !important;
    display: flex !important;
    flex-direction: column !important;
    gap: 14px !important;
    flex: 1 1 auto !important;
}
.ai4-landing-wrapper .pkg-card-inner ul li {
    margin: 0 !important;
}
.ai4-landing-wrapper .pkg-card-inner button {
    margin-top: auto !important;
}

@media (max-width: 640px) {
    .ai4-landing-wrapper .pkg-card-inner {
        padding: 28px 20px;
    }
    .ai4-landing-wrapper .pkg-card-inner ul {
        margin-bottom: 2rem !important;
    }
}

/* Value Section Layout Alignment */
.ai4-landing-wrapper #value .value-grid {
    display: grid !important;
    align-items: stretch !important;
}
.ai4-landing-wrapper #value .value-card {
    display: flex !important;
    flex-direction: column !important;
    height: 100% !important;
    background: #ffffff !important;
    border-radius: 14px !important;
    padding: 18px 20px !important;
    border: 1px solid rgba(255, 40, 0, 0.1) !important;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04) !important;
    transition: transform 0.2s ease, box-shadow 0.2s ease !important;
}
.ai4-landing-wrapper #value .value-card:hover {
    transform: translateY(-3px) !important;
    box-shadow: 0 6px 16px rgba(255, 40, 0, 0.08) !important;
}

/* Tier: Silver (PRESERVED) */
.ai4-landing-wrapper .tier-silver .pkg-card-inner { background: linear-gradient(145deg, #ffffff 0%, #f4f7fd 40%, #eaf0f8 70%, #f8faff 100%) padding-box, linear-gradient(135deg, #ffffff 0%, #dfe7f5 50%, #9ea9c9 100%) border-box; border: 2px solid transparent; box-shadow: inset 0 1px 0 rgba(255,255,255,0.98), 0 4px 20px rgba(158,169,201,0.2); }
.ai4-landing-wrapper .tier-silver .pkg-card-inner::before { background: linear-gradient(90deg, #ffffff, #dfe7f5, #9ea9c9, #dfe7f5, #ffffff); }
.ai4-landing-wrapper .tier-pill.tier-silver-pill { background: linear-gradient(#ffffff, #f0f4fc) padding-box, linear-gradient(135deg, #dfe7f5, #9ea9c9) border-box !important; border: 1px solid transparent !important; color: #3d4f6b !important; font-weight: 700; }
.ai4-landing-wrapper .tier-icon.tier-silver-icon { background: rgba(57,74,92,0.08); border: 2px solid rgba(184,199,217,0.5); color: #394A5C; }
.ai4-landing-wrapper .tier-price.tier-silver-price { color: #3d4f6b; background: rgba(223,231,245,0.4); border: 1px solid rgba(158,169,201,0.3); }

/* Tier: Gold (PRESERVED) */
.ai4-landing-wrapper .tier-gold .pkg-card-inner { background: linear-gradient(145deg, #fffff8 0%, #fffce8 38%, #fff8d0 65%, #fffef0 100%) padding-box, linear-gradient(135deg, #fff3a3 0%, #ffb800 50%, #ff7b00 100%) border-box; border: 2px solid transparent; box-shadow: inset 0 1px 0 rgba(255,255,255,0.95), 0 4px 20px rgba(255,184,0,0.22); }
.ai4-landing-wrapper .tier-gold .pkg-card-inner::before { display: none; }
.ai4-landing-wrapper .tier-pill.tier-gold-pill { background: linear-gradient(135deg, #fff3a3, #ffb800, #ff7b00) !important; color: #3d1a00 !important; border: none !important; font-weight: 800; }
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

/* Tier: Platinum (PRESERVED) */
.ai4-landing-wrapper .tier-platinum .pkg-card-inner { background: linear-gradient(145deg, #ffffff 0%, #edf6fa 28%, #d6ebf4 55%, #e8f4f8 80%, #ffffff 100%) padding-box, linear-gradient(135deg, #7dc4d0 0%, #1e80b0 22%, #0d5580 48%, #1e80b0 72%, #58949c 100%) border-box; border: 2.5px solid transparent; box-shadow: inset 0 1px 0 rgba(255,255,255,0.98), 0 6px 28px rgba(18,92,132,0.22); }
.ai4-landing-wrapper .tier-platinum .pkg-card-inner::before { background: linear-gradient(90deg, #7dc4d0, #125c84, #58949c, #125c84, #7dc4d0); }
.ai4-landing-wrapper .tier-pill.tier-platinum-pill { background: linear-gradient(135deg, #58949c, #125c84) !important; color: #ffffff !important; border: none !important; font-weight: 800; }
.ai4-landing-wrapper .tier-icon.tier-platinum-icon { background: rgba(18,92,132,0.08); border: 2px solid rgba(18,92,132,0.3); color: #125c84; }
.ai4-landing-wrapper .tier-price.tier-platinum-price { color: #125c84; background: rgba(18,92,132,0.08); border: 1px solid rgba(18,92,132,0.22); }

.ai4-landing-wrapper .tier-pill {
    display: inline-flex; align-items: center; gap: 6px;
    border-radius: 999px; padding: 6px 18px; font-size: 12px; font-weight: 800;
    letter-spacing: 0.05em; text-transform: none !important; margin: 0 auto 24px;
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

/* Package Card Buttons (PRESERVED) */
.ai4-landing-wrapper .pkg-card button {
    text-transform: none !important;
    transition: all 0.3s ease !important;
    font-size: 16px !important;
    font-weight: 800 !important;
    padding-top: 14px !important;
    padding-bottom: 14px !important;
}
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

/* ── OVERRIDES & UTILITIES ── */
.ai4-landing-wrapper button,
.ai4-landing-wrapper .btn {
    border: none;
    outline: none;
}
.ai4-landing-wrapper section[id] {
    scroll-margin-top: 100px !important;
}
.ai4-landing-wrapper svg.svg-inline--fa {
    display: inline-block !important;
    vertical-align: -0.125em !important;
    flex-shrink: 0 !important;
}

/* ── DECORATIVE ── */
.ai4-landing-wrapper .geo-ring { border: 1.5px solid rgba(255,40,0,0.15); border-radius: 50%; }
.ai4-landing-wrapper .red-grid { background-image: linear-gradient(rgba(255,40,0,0.04) 1px, transparent 1px), linear-gradient(90deg, rgba(255,40,0,0.04) 1px, transparent 1px); background-size: 40px 40px; }

/* ── FOOTER ── */
.ai4-landing-wrapper #footer { background: #FF2800; }

/* ── CLIENT LOGO SLIDER STYLING ── */
.ai4-landing-wrapper .hero-client-logos-sec {
    background: #ffffff;
    padding: 12px 0 !important;
    min-height: 70px;
    height: auto !important;
    box-sizing: border-box;
    position: relative;
}
.ai4-landing-wrapper .hero-client-logos {
    margin-bottom: 0 !important;
}
.ai4-landing-wrapper .hero-client-logos .slick-list {
    overflow: hidden !important;
    padding: 4px 0 !important;
}
.ai4-landing-wrapper .hero-client-logos .slick-track {
    display: flex !important;
    align-items: center !important;
}
.ai4-landing-wrapper .hero-client-logos-sec .logo-item {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    height: 54px !important;
    padding: 0 20px !important;
    outline: none !important;
    box-sizing: border-box !important;
}
.ai4-landing-wrapper .hero-client-logos-sec .logo-item img {
    max-height: 44px !important;
    width: auto !important;
    max-width: 165px !important;
    height: auto !important;
    object-fit: contain !important;
    margin: 0 auto !important;
    filter: grayscale(100%) opacity(0.55);
    transition: filter 0.3s ease, opacity 0.3s ease;
    display: block !important;
}
.ai4-landing-wrapper .hero-client-logos-sec .logo-item:hover img {
    filter: grayscale(0%) opacity(1) !important;
}
/* ── TABLET RESPONSIVE TWEAKS FOR PACKAGE CARDS & HERO VIEWPORT ── */
@media (min-width: 768px) and (max-width: 1025px) {
    .ai4-landing-wrapper .hero-viewport-wrapper {
        min-height: auto !important;
        max-height: none !important;
        height: auto !important;
    }
    .ai4-landing-wrapper #hero {
        padding-top: 95px !important;
        padding-bottom: 35px !important;
        flex: 0 0 auto !important;
    }
    .ai4-landing-wrapper .pkg-card-inner {
        padding: 20px 14px !important;
    }
    .ai4-landing-wrapper .tier-pill {
        padding: 4px 8px !important;
        font-size: 10px !important;
        margin: 0 auto 16px !important;
    }
    .ai4-landing-wrapper .tier-price {
        padding: 12px 6px !important;
        margin-bottom: 16px !important;
    }
    .ai4-landing-wrapper .tier-price .font-heading {
        font-size: 24px !important;
    }
    .ai4-landing-wrapper .tier-price .font-heading span {
        font-size: 14px !important;
    }
    .ai4-landing-wrapper .tier-price .text-xs {
        font-size: 10px !important;
    }
    .ai4-landing-wrapper .pkg-card-inner ul {
        margin-bottom: 16px !important;
        gap: 8px !important;
    }
    .ai4-landing-wrapper .pkg-card-inner ul li {
        font-size: 11px !important;
        gap: 6px !important;
        line-height: 1.3 !important;
    }
    .ai4-landing-wrapper .pkg-card button {
        font-size: 12px !important;
        padding-top: 10px !important;
        padding-bottom: 10px !important;
    }
}

</style>

<div class="ai4-landing-wrapper">

    <!-- ═══════════════════════════════════════════════
         HEADER
    ════════════════════════════════════════════════ -->
    <header id="site-header" class="fixed top-0 left-0 w-full z-[100] transition-all duration-300 bg-white/95 backdrop-blur-md border-b-2 border-ferrari">
        <nav class="max-w-[1440px] mx-auto px-6 lg:px-12 flex items-center justify-between py-2.5">
            <!-- Dynamic Logo from Theme / HTML fallback -->
            <div class="logo-tag w-auto lg:w-[25%]">
                <?php if ( has_custom_logo()): the_custom_logo(); else: ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1 class="site-title" ><?php echo bloginfo( 'name' ); ?></h1>
                <h2 class="site-description" ><?php bloginfo('description'); ?></h2><?php endif; ?></a>                     
            </div>

            <!-- Right Container: Desktop Nav Links & Mobile Toggle -->
            <div class="flex items-center gap-8">
                <!-- Desktop Nav Links -->
                <ul class="hidden lg:flex items-center gap-8 text-[13px] font-medium text-gray-600 mb-0 list-none pl-0">
                    <li><a href="#value" class="nav-link hover:text-ferrari transition-colors">Why agenTriniti</a></li>
                    <li><a href="#pricing" class="nav-link hover:text-ferrari transition-colors">Early-Bird Offer</a></li>
                </ul>
                <button type="button" class="lg:hidden bg-transparent border-none w-[44px] h-[34px] flex flex-col justify-center items-center gap-[5px]" id="mobile-menu-toggle">
                    <span class="block w-[26px] h-[3px] bg-[#F66062] rounded-full"></span>
                    <span class="block w-[26px] h-[3px] bg-[#F66062] rounded-full"></span>
                    <span class="block w-[26px] h-[3px] bg-[#F66062] rounded-full"></span>
                </button>
            </div>
        </nav>
        
        <!-- Mobile Nav Dropdown -->
        <div id="mobile-nav-dropdown" class="hidden absolute top-[100%] left-0 w-full bg-white border-t border-gray-100 shadow-lg px-6 py-4 flex-col gap-4 z-[90]">
            <a href="#value" class="nav-link text-sm font-medium mobile-nav-item inline-block">Why agenTriniti</a>
            <a href="#pricing" class="nav-link text-sm font-medium mobile-nav-item inline-block">Early-Bird Offer</a>
        </div>
    </header>


    <!-- ═══════════════════════════════════════════════
         HERO — CONTENT + FORM
    ════════════════════════════════════════════════ -->
    <div class="hero-viewport-wrapper lg:min-h-screen lg:max-h-screen flex flex-col justify-between overflow-hidden">
        <section id="hero" class="relative overflow-hidden pt-[85px] md:pt-[95px] lg:pt-[70px] xl:pt-[70px] pb-0 flex-1 flex flex-col justify-center">
            <!-- Background -->
            <div class="absolute inset-0 z-0">
                <img class="w-full h-full object-cover object-center" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/gen_be93046104_2bed1a6e7a82913f.png" alt="cinematic aerial view of a modern enterprise boardroom with professionals gathered around a glowing " />
                <div class="absolute inset-0" style="background: linear-gradient(100deg, rgba(245,241,235,0.96) 0%, rgba(245,241,235,0.90) 45%, rgba(245,241,235,0.55) 72%, rgba(245,241,235,0.15) 100%);"></div>
            </div>

            <!-- Decorative grid overlay -->
            <div class="absolute inset-0 z-0 red-grid opacity-60 pointer-events-none"></div>

            <!-- Decorative rings -->
            <div class="absolute right-[8%] top-[12%] z-0 geo-ring pointer-events-none" style="width:420px;height:420px;"></div>
            <div class="absolute right-[14%] top-[22%] z-0 geo-ring pointer-events-none" style="width:260px;height:260px;animation:spin-slow 40s linear infinite;"></div>
            <div class="absolute right-[20%] top-[32%] z-0 geo-ring pointer-events-none" style="width:120px;height:120px;"></div>

            <!-- Slide Content -->
            <div class="relative z-10 max-w-[1440px] mx-auto px-6 lg:px-12 hero-slide my-auto w-full">
                <div class="grid lg:grid-cols-12 gap-6 lg:gap-8 xl:gap-10 items-center">

                    <!-- Left column: message + recognition -->
                    <div class="lg:col-span-7 xl:col-span-7 max-w-2xl">
                        <div class="flex flex-wrap gap-2.5 items-center mb-2.5 lg:mb-3">
                            <div class="pkg-badge fx-item" style="animation-delay:.05s"><i class="fas fa-bolt"></i> Limited-Period Offer</div>
                            <div class="inline-flex items-center bg-ferrari text-white rounded-full px-3.5 py-1 text-xs font-bold shadow-md shadow-ferrari/20 fx-item" style="animation-delay:.15s">
                                <i class="fas fa-calendar mr-1.5 text-[11px]"></i> Valid through August 31, 2026
                            </div>
                        </div>
                        <h1 class="font-heading max-[320px]:text-[20px] max-[320px]:tracking-tight text-[26px] min-[375px]:text-[28px] sm:text-4xl md:text-4xl lg:text-[42px] xl:text-5xl font-bold leading-tight text-gray-900 mb-2.5 fx-item" style="animation-delay:.25s">
                            Scale Enterprise AI <br>
                            from Vision to<br>
                            <span class="text-ferrari">Production</span>
                        </h1>
                        <p class="text-base sm:text-lg lg:text-xl font-bold text-gray-900 mb-1.5 max-w-xl leading-snug fx-item" style="animation-delay:.32s">
                            Save 15% on Gold and Platinum packages | 10% on Silver.
                        </p>
                        <p class="text-sm lg:text-base text-gray-600 mb-3 lg:mb-3 max-w-xl leading-relaxed fx-item" style="animation-delay:.4s">
                          Schedule your complimentary agenTriniti<sup class="text-[10px]">SM</sup> workshop to identify high-impact use cases and select the right package for your enterprise.
                        </p>

                        <!-- Industry Recognition -->
                        <div class="fx-item" style="animation-delay:.55s">
                            <p class="text-[11px] font-bold uppercase tracking-widest text-ferrari mb-1.5">INDUSTRY RECOGNITION</p>
                            <div class="flex flex-wrap sm:flex-nowrap items-center gap-4 sm:gap-6 lg:gap-7">
                                <!-- Item 1: Inc. 5000 -->
                                <div class="w-16 sm:w-20 lg:w-24 h-14 sm:h-16 flex items-center justify-center shrink-0 group">
                                    <img src="/wp-content/uploads/2026/07/inc-1.svg" alt="Inc. 5000" class="max-h-13 sm:max-h-14 lg:max-h-16 max-w-full w-auto object-contain transition-transform group-hover:scale-105" onError="this.onerror=null;this.src='<?php echo esc_url( get_template_directory_uri() . '/images/inc-1.svg' ); ?>';">
                                </div>

                                <!-- Item 2: Forbes -->
                                <div class="w-16 sm:w-20 lg:w-24 h-14 sm:h-16 flex items-center justify-center shrink-0 group">
                                    <img src="/wp-content/uploads/2026/07/forbes.svg" alt="Forbes" class="max-h-13 sm:max-h-14 lg:max-h-16 max-w-full w-auto object-contain transition-transform group-hover:scale-105" onError="this.onerror=null;this.src='<?php echo esc_url( get_template_directory_uri() . '/images/forbes.svg' ); ?>';">
                                </div>

                                <!-- Item 3: World Economic Forum -->
                                <div class="w-16 sm:w-20 lg:w-24 h-14 sm:h-16 flex items-center justify-center shrink-0 group overflow-visible">
                                    <img src="/wp-content/uploads/2026/07/wef_trans.png" alt="World Economic Forum" class="max-h-16 sm:max-h-18 lg:max-h-20 max-w-full w-auto object-contain scale-[1.35] transition-transform group-hover:scale-[1.42]" onError="this.onerror=null;this.src='<?php echo esc_url( get_template_directory_uri() . '/images/wef_trans.png' ); ?>';">
                                </div>

                                <!-- Item 4: Crain's -->
                                <div class="w-16 sm:w-20 lg:w-24 h-14 sm:h-16 flex items-center justify-center shrink-0 group overflow-visible">
                                    <img src="/wp-content/uploads/2026/07/crains_clean.svg" alt="Crain's" class="max-h-16 sm:max-h-18 lg:max-h-20 max-w-full w-auto object-contain scale-[1.35] transition-transform group-hover:scale-[1.42]" onError="this.onerror=null;this.src='<?php echo esc_url( get_template_directory_uri() . '/images/crains_clean.svg' ); ?>';">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right column: floating form card -->
                    <div class="lg:col-span-5 xl:col-span-5 fx-item flex flex-col justify-center mb-6 lg:mb-0" style="animation-delay:.3s">
                        <div id="demo-form" class="bg-white rounded-2xl lg:rounded-[20px] shadow-2xl p-4 lg:p-5 border border-gray-100/80 my-auto">
                            <h3 class="font-heading text-lg lg:text-xl font-bold text-ferrari mb-1 text-center">
                                Schedule your agenTriniti workshop
                            </h3>
                            <p class="text-xs text-gray-500 mb-2.5 leading-relaxed text-center">
                                Share your details, and our team will contact you within one business day to arrange a convenient time.
                            </p>
						<?php echo do_shortcode('[contact-form-7 id="84cb26c" title="AI4Landingpage_widget_form"]'); ?>
<!--                              <form id="main-reg-form">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                                    <div class="sm:col-span-2">
                                        <label class="form-label text-xs mb-0.5 font-medium">Full Name *</label>
                                        <input type="text" class="form-input py-1.5 text-xs sm:text-sm" required>
                                    </div>
                                    <div>
                                        <label class="form-label text-xs mb-0.5 font-medium">Company *</label>
                                        <input type="text" class="form-input py-1.5 text-xs sm:text-sm" required>
                                    </div>
                                    <div>
                                        <label class="form-label text-xs mb-0.5 font-medium">Job Title *</label>
                                        <input type="text" class="form-input py-1.5 text-xs sm:text-sm" required>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label class="form-label text-xs mb-0.5 font-medium">Work Email *</label>
                                        <input type="email" class="form-input py-1.5 text-xs sm:text-sm" required>
                                    </div>

                                    <div class="sm:col-span-2 mt-0.5">
                                        <button type="submit" class="w-full bg-ferrari text-white py-2 lg:py-2.5 rounded-full font-bold text-xs sm:text-sm hover:bg-ferrari-mid transition-all shadow-lg shadow-ferrari/20 flex items-center justify-center gap-2">
                                            Submit <i class="fas fa-arrow-right text-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>  -->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ═══════════════════════════════════════════════
             CLIENT LOGO STRIP (DYNAMIC WP SLIDER)
        ════════════════════════════════════════════════ -->
        <section id="clients" class="py-3 lg:py-3.5 bg-white border-y border-red-100 hero-client-logos-sec shrink-0">
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
                ?>
                    <div class="logo-item">
                        <img src="<?php echo esc_url($new_logo_url); ?>" alt="<?php echo esc_attr($alt_text); ?>">
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</div>


    <!-- ═══════════════════════════════════════════════
         PACKAGE OPTIONS (COLORS PRESERVED AS EXISTING)
    ════════════════════════════════════════════════ -->
    <section id="pricing" class="py-10 px-6 lg:px-12 bg-white">
        <div class="max-w-[1440px] mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-12 fade-up">
                <div class="pkg-badge mb-6 inline-flex"><span class="mr-1">🎁</span>Early-Bird Offer</div>
                <h2 class="font-heading text-3xl lg:text-4xl font-bold text-gray-900 mb-4 leading-tight">
                    agenTriniti Package Options
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8 md:gap-3 lg:gap-8 items-stretch">
                <!-- SILVER -->
                <div class="pkg-card tier-silver fade-up delay-100">
                    <div class="pkg-card-inner">
                        <div class="tier-pill tier-silver-pill"><i class="fas fa-medal"></i> agenTriniti Silver</div>
                        <div class="tier-price tier-silver-price rounded-xl p-4 mb-6 text-center">
                            <div class="font-heading text-4xl font-bold">10% <span class="text-xl">Off</span></div>
                            <div class="text-xs opacity-70 mt-1">Your first engagement term</div>
                        </div>
                        <ul class="space-y-3 mb-8 flex-1">
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#3d4f6b"></i> 20 Secure AI Agents</li>
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#3d4f6b"></i> 3 Months of Build Phase</li>
                        </ul>
                        <button class="open-drawer w-full py-3 rounded-full font-semibold transition-all" style="background:linear-gradient(#f8fbff,#f0f5ff) padding-box, linear-gradient(135deg,#dfe7f5,#9ea9c9) border-box; border:1.5px solid transparent; color:#3d4f6b; box-shadow:0 4px 14px rgba(158,169,201,0.3)">
                            Schedule your workshop →
                        </button>
                    </div>
                </div>

                <!-- GOLD -->
                <div class="pkg-card tier-gold fade-up delay-200">
                    <div class="featured-badge">
                        <i class="fas fa-star"></i> Most Popular
                    </div>
                    <div class="pkg-card-inner">
                        <div class="tier-pill tier-gold-pill"><i class="fas fa-star"></i> agenTriniti Gold</div>
                        <div class="tier-price tier-gold-price rounded-xl p-4 mb-6 text-center">
                            <div class="font-heading text-4xl font-bold">15% <span class="text-xl">Off</span></div>
                            <div class="text-xs opacity-70 mt-1">Your first engagement term</div>
                        </div>
                        <ul class="space-y-3 mb-8 flex-1">
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#ff7b00"></i> 50 Secure AI Agents</li>
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#ff7b00"></i> 4 Months of Build Phase</li>
                        </ul>
                        <button class="open-drawer w-full py-3 rounded-full font-semibold transition-all" style="background:linear-gradient(#fffef8,#fff8e6) padding-box, linear-gradient(135deg,#ffb800,#ff7b00) border-box; border:1.5px solid transparent; color:#7a3d00; box-shadow:0 4px 14px rgba(255,184,0,0.3)">
                            Schedule your workshop →
                        </button>
                    </div>
                </div>

                <!-- PLATINUM -->
                <div class="pkg-card tier-platinum fade-up delay-300">
                    <div class="pkg-card-inner">
                        <div class="tier-pill tier-platinum-pill"><i class="fas fa-gem"></i> agenTriniti Platinum</div>
                        <div class="tier-price tier-platinum-price rounded-xl p-4 mb-6 text-center">
                            <div class="font-heading text-4xl font-bold">15% <span class="text-xl">Off</span></div>
                            <div class="text-xs opacity-70 mt-1">Your first engagement term</div>
                        </div>
                        <ul class="space-y-3 mb-8 flex-1">
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#125c84"></i> 100 Secure AI Agents</li>
                            <li class="flex items-start gap-3 text-sm text-gray-600"><i class="fas fa-check-circle mt-0.5 flex-shrink-0" style="color:#125c84"></i> 6 Months of Build Phase</li>
                        </ul>
                        <button class="open-drawer w-full py-3 rounded-full font-semibold transition-all" style="background:linear-gradient(#eef5f8,#daeaf0) padding-box, linear-gradient(135deg,#58949c,#125c84) border-box; border:1.5px solid transparent; color:#125c84; box-shadow:0 4px 14px rgba(18,92,132,0.3)">
                            Schedule your workshop →
                        </button>
                    </div>
                </div>

            </div>
            <div class="mt-10 text-center">
                <p class="text-sm text-gray-400 text-center fade-up delay-200">
                    <i class="fas fa-info-circle text-ferrari mr-1"></i>
                    The applicable discount will be reflected in the approved commercial proposal once the scope and package are confirmed.
                </p>
            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════════
         WHY AGENTRINITI + HOW THE WORKSHOP WORKS
    ════════════════════════════════════════════════ -->
    <section id="value" class="py-10 lg:py-12 px-6 lg:px-12 bg-ceramic">
        <div class="max-w-[1440px] mx-auto">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 value-grid">

                <!-- Why agenTriniti -->
                <div class="fade-up flex flex-col h-full">
                    <div class="pkg-badge mb-3 inline-flex self-start"><i class="fas fa-shield-halved"></i> Why agenTriniti</div>
                    <h2 class="font-heading text-2xl lg:text-3xl font-bold text-gray-900 mb-5 leading-tight">
                        Built for production, not pilots
                    </h2>
                    <div class="grid sm:grid-cols-2 gap-3.5 flex-1">
                        <div class="value-card">
                            <i class="fas fa-rocket text-ferrari text-lg mb-2"></i>
                            <div class="text-base font-bold text-gray-900 mb-1">Built for Hybrid Environments</div>
                            <div class="text-sm text-gray-500 leading-relaxed">Designed to work across your cloud, on-premise and enterprise systems.</div>
                        </div>
                        <div class="value-card">
                            <i class="fas fa-arrows-rotate text-ferrari text-lg mb-2"></i>
                            <div class="text-base font-bold text-gray-900 mb-1">Your IP. Always.</div>
                            <div class="text-sm text-gray-500 leading-relaxed">You retain ownership of every agent, workflow and solution asset created through the engagement.</div>
                        </div>
                        <div class="value-card">
                            <i class="fas fa-lock text-ferrari text-lg mb-2"></i>
                            <div class="text-base font-bold text-gray-900 mb-1">Built to Scale with Your Enterprise</div>
                            <div class="text-sm text-gray-500 leading-relaxed">Choose the engagement scope that matches your priorities - from 20 to 100 agents.</div>
                        </div>
                        <div class="value-card">
                            <i class="fas fa-tag text-ferrari text-lg mb-2"></i>
                            <div class="text-base font-bold text-gray-900 mb-1">One Fixed Fee. No Surprises.</div>
                            <div class="text-sm text-gray-500 leading-relaxed">A clear commercial model for the agreed package and engagement term.</div>
                        </div>
                    </div>
                </div>

                <!-- How the Workshop Works -->
                <div class="fade-up delay-200 flex flex-col h-full">
                    <div class="pkg-badge mb-3 inline-flex self-start"><i class="fas fa-diagram-project"></i> How the Workshop Works</div>
                    <h2 class="font-heading text-2xl lg:text-3xl font-bold text-gray-900 mb-5 leading-tight">
                        What you'll walk away with
                    </h2>
                    <div class="flex-1 flex flex-col justify-between space-y-4 lg:space-y-0 py-1">
                        <div class="flex gap-4 items-start">
                            <div class="flex-shrink-0 w-9 h-9 rounded-full bg-ferrari text-white flex items-center justify-center font-heading font-bold text-sm">1</div>
                            <div>
                                <div class="text-base font-bold text-gray-900 mb-1">Share Two Operational Pain Points</div>
                                <div class="text-sm text-gray-500 leading-relaxed">Tell us where your teams are losing time, efficiency or visibility. Together, we identify the highest-impact AI opportunities across your enterprise systems.</div>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start">
                            <div class="flex-shrink-0 w-9 h-9 rounded-full bg-ferrari text-white flex items-center justify-center font-heading font-bold text-sm">2</div>
                            <div>
                                <div class="text-base font-bold text-gray-900 mb-1">See Live Agents Address Them</div>
                                <div class="text-sm text-gray-500 leading-relaxed">We demonstrate how AI agents can respond to those challenges and assess the expected value, feasibility and implementation readiness of each use case.</div>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start">
                            <div class="flex-shrink-0 w-9 h-9 rounded-full bg-ferrari text-white flex items-center justify-center font-heading font-bold text-sm">3</div>
                            <div>
                                <div class="text-base font-bold text-gray-900 mb-1">Receive Your Initial Scoping Sketch</div>
                                <div class="text-sm text-gray-500 leading-relaxed">You leave with an initial solution scope, recommended next steps and the agenTriniti package best suited to your enterprise priorities.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════════
         SECONDARY CONVERSION FORM
    ════════════════════════════════════════════════ -->
    <section id="workshop-form" class="py-12 lg:py-16 px-6 lg:px-12 bg-white">
        <div class="max-w-xl mx-auto text-center fade-up">
            <h2 class="font-heading text-2xl lg:text-3xl font-bold text-gray-900 mb-2">
                Schedule your agenTriniti workshop
            </h2>
            <p class="text-gray-600 mb-5 text-xs lg:text-sm leading-relaxed">
                Share your details, and our team will contact you within one business day to arrange a convenient time.
            </p>
        </div>
        <div class="max-w-xl mx-auto fade-up delay-200">
            <div class="bg-white rounded-2xl shadow-lg px-6 py-10 lg:px-8 lg:py-12 border border-gray-100">
<!--               <form id="bottom-reg-form">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="md:col-span-2">
                            <label class="form-label">Full Name *</label>
                            <input type="text" class="form-input" required>
                        </div>
                        <div>
                            <label class="form-label">Company *</label>
                            <input type="text" class="form-input" required>
                        </div>
                        <div>
                            <label class="form-label">Job Title *</label>
                            <input type="text" class="form-input" required>
                        </div>
                        <div class="md:col-span-2">
                            <label class="form-label">Work Email *</label>
                            <input type="email" class="form-input" required>
                        </div>

                        <div class="md:col-span-2 mt-1">
                            <button type="submit" class="w-full bg-ferrari text-white py-3 rounded-full font-bold text-sm hover:bg-ferrari-mid transition-all shadow-md shadow-ferrari/20 flex items-center justify-center gap-2">
                                Submit <i class="fas fa-arrow-right text-xs"></i>
                            </button>
                        </div>
                    </div>
                </form>  -->
				<div id="bottom-reg-form">
					<?php echo do_shortcode('[contact-form-7 id="bc19d9b" title="AI4Landingpage_widget_form_bottom"]'); ?>
				</div>				
            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════════
         OFFER TERMS
    ════════════════════════════════════════════════ -->
    <section id="offer-terms" class="py-14 px-6 lg:px-12" style="background: rgba(255,40,0,0.04); border-top: 1px solid rgba(255,40,0,0.1);">
        <div class="max-w-[1440px] mx-auto">
            <div class="flex flex-col md:flex-row md:items-start gap-6">
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



    <!-- ═══════════════════════════════════════════════
         SLIDE-IN REGISTRATION DRAWER
    ════════════════════════════════════════════════ -->
    <div id="drawer-overlay" class="fixed inset-0 z-[200] items-end justify-end" style="background: rgba(255,40,0,0.08); backdrop-filter: blur(4px);">
        <div id="drawer-panel" class="relative h-full w-full max-w-lg bg-white shadow-2xl overflow-y-auto flex flex-col">
            <!-- Header -->
            <div class="flex items-center justify-between px-5 sm:px-6 py-5 border-b border-red-100 flex-shrink-0 gap-3">
                <div class="min-w-0 flex-1">
                    <h3 class="font-heading text-base sm:text-lg lg:text-xl font-bold text-gray-900 whitespace-nowrap">Schedule Your agenTriniti Workshop</h3>
                </div>
                <button id="close-drawer-btn" class="w-9 h-9 shrink-0 rounded-full border border-red-200 text-ferrari hover:bg-ferrari hover:text-white transition-all flex items-center justify-center">
                    <i class="fas fa-times text-sm"></i>
                </button>
            </div>

            <!-- Form -->
            <div class="px-8 py-6 flex-1">
<!--                 <form id="drawer-reg-form" class="space-y-5">
                    <div>
                        <label class="form-label">Full Name *</label>
                        <input type="text" class="form-input" required>
                    </div>
                    <div>
                        <label class="form-label">Company *</label>
                        <input type="text" class="form-input" required>
                    </div>
                    <div>
                        <label class="form-label">Job Title *</label>
                        <input type="text" class="form-input" required>
                    </div>
                    <div>
                        <label class="form-label">Work Email *</label>
                        <input type="email" class="form-input" required>
                    </div>
                    
                    <button type="submit" class="w-full bg-ferrari text-white py-4 rounded-full font-bold text-base hover:bg-ferrari-mid transition-all shadow-xl shadow-ferrari/30 flex items-center justify-center gap-2">
                        Submit 
                    </button>
                </form> -->
				<div id="bottom-reg-form">
					<?php echo do_shortcode('[contact-form-7 id="129c16e" title="AI4Landingpage_widget_form_bottom_slider"]'); ?>
				</div>
            </div>
        </div>
    </div>


    <!-- ═══════════════════════════════════════════════
         SUCCESS / THANK YOU POPUP (SHARED)
    ════════════════════════════════════════════════ -->
    <div id="success-overlay">
        <div id="success-modal">
            <button id="success-close" type="button"><i class="fas fa-times"></i></button>
            <div class="success-icon"><i class="fas fa-check"></i></div>
            <h3 class="font-heading text-2xl font-bold text-gray-900 mb-3">Thank you for your interest</h3>
            <p class="text-gray-500 leading-relaxed">We’ve received your details. Our team will contact you within one business day to confirm your workshop and arrange a convenient time.</p>
        </div>
    </div>

</div>

<!-- Page Javascript -->
<script>
(function() {

    // ── DRAWER ──
    const overlay   = document.getElementById('drawer-overlay');
    const openBtns  = document.querySelectorAll('#open-drawer-btn, .open-drawer');
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

    // ── WPCF7 FORM SUBMISSION LISTENER ──
    document.addEventListener('wpcf7submit', function (event) {

        const formId = event.detail.contactFormId;
        const allowed = [6620, 6666, 6813, '6620', '6666', '6813'];

        if (!allowed.includes(formId) && !allowed.includes(String(formId)) && !allowed.includes(Number(formId))) {
            return;
        }

        switch (event.detail.status) {

            case 'mail_sent':

                const iconEl = document.querySelector('#success-modal .success-icon i');
                if (iconEl) {
                    iconEl.className = 'fas fa-check';
                    iconEl.style.color = '#22c55e';
                }
                const h3El = document.querySelector('#success-modal h3');
                if (h3El) h3El.innerText = 'Thank you for your interest';
                const pEl = document.querySelector('#success-modal p');
                if (pEl) pEl.innerText = "We've received your details. Our team will contact you within one business day to confirm your workshop and arrange a convenient time.";

                closeDrawer();
                openSuccessPopup();

                break;

            case 'mail_failed':

                const failIconEl = document.querySelector('#success-modal .success-icon i');
                if (failIconEl) {
                    failIconEl.className = 'fas fa-circle-exclamation';
                    failIconEl.style.color = '#ef4444';
                }

                const failH3El = document.querySelector('#success-modal h3');
                if (failH3El) failH3El.innerText = 'Submission Failed';

                const failPEl = document.querySelector('#success-modal p');
                if (failPEl) failPEl.innerText = "Sorry, we couldn't send your request right now. Please try again later.";

                closeDrawer();
                openSuccessPopup();

                break;

            case 'validation_failed':
                break;
        }

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

    const bottomForm = document.getElementById('bottom-reg-form');
    if (bottomForm) {
        bottomForm.addEventListener('submit', e => {
            e.preventDefault();
            bottomForm.reset();
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
	
	
	document.addEventListener("DOMContentLoaded", function () {

    document.querySelectorAll(".ai4-landing-wrapper .wpcf7-form, #drawer-panel .wpcf7-form").forEach(function (form) {

        form.addEventListener("submit", function (e) {

            form.querySelectorAll(".custom-error").forEach(el => el.remove());

            const fields = {
                // Top Form
                "text-345": "Please enter your Full Name.",
                "text-986": "Please enter your Company.",
                "text-685": "Please enter your Job Title.",
                "email-356": "Please enter your Work Email.",

                // Bottom Form
                "bottom_name": "Please enter your Full Name.",
                "bottom_company": "Please enter your Company.",
                "bottom_title": "Please enter your Job Title.",
                "bottom_email": "Please enter your Work Email."
            };

            let hasError = false;

            Object.keys(fields).forEach(function(name){

                const input = form.querySelector('[name="'+name+'"]');

                if(!input) return;

                if(input.value.trim() === ""){

                    hasError = true;

                    if (input.classList) {
                        input.classList.add("wpcf7-not-valid");
                    }
                    input.setAttribute("aria-invalid","true");

                    const error = document.createElement("span");
                    error.className = "custom-error";
                    error.innerHTML = fields[name];

                    input.parentNode.appendChild(error);
                }

            });

            // reCAPTCHA validation
            const recaptchaWrap = form.querySelector('.wpcf7-recaptcha, .g-recaptcha, .wpcf7-form-control-wrap[data-name="recaptcha"]');
            const recaptchaResponse = form.querySelector('[name="g-recaptcha-response"], [name="_wpcf7_recaptcha_response"]');

            if (recaptchaWrap || recaptchaResponse) {
                let responseVal = recaptchaResponse ? recaptchaResponse.value.trim() : '';

                if (!responseVal && typeof grecaptcha !== 'undefined' && typeof grecaptcha.getResponse === 'function') {
                    try {
                        const widgetEl = form.querySelector('.g-recaptcha, .wpcf7-recaptcha');
                        const widgetId = widgetEl ? widgetEl.getAttribute('data-widget-id') : null;
                        responseVal = (widgetId !== null && widgetId !== undefined && widgetId !== '')
                            ? grecaptcha.getResponse(widgetId).trim()
                            : grecaptcha.getResponse().trim();
                    } catch(err) {
                        // ignore API error
                    }
                }

                if (!responseVal) {
                    hasError = true;

                    const error = document.createElement("span");
                    error.className = "custom-error recaptcha-error";
                    error.innerHTML = "Please verify that you are not a robot.";

                    const container = recaptchaWrap
                        ? (recaptchaWrap.closest('.wpcf7-form-control-wrap') || recaptchaWrap)
                        : (recaptchaResponse ? (recaptchaResponse.closest('.wpcf7-form-control-wrap') || recaptchaResponse.parentNode) : form);

                    container.appendChild(error);
                }
            }

            if(hasError){
                e.preventDefault();
                e.stopImmediatePropagation();
            }

        });

    });

});

jQuery(function ($) {

    $(document).on('input keyup change', '.ai4-landing-wrapper .wpcf7-form input, #drawer-panel .wpcf7-form input', function () {

        if ($.trim($(this).val()) !== '') {

            $(this)
                .removeClass('wpcf7-not-valid')
                .attr('aria-invalid', 'false');

            $(this)
                .closest('.wpcf7-form-control-wrap')
                .find('.custom-error, .wpcf7-not-valid-tip')
                .remove();
        }

    });

});
	
jQuery(function ($) {

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

    $(document).on('input keyup blur', '.ai4-landing-wrapper [name="email-356"], #drawer-panel [name="email-356"], .ai4-landing-wrapper [name="bottom_email"], #drawer-panel [name="bottom_email"]', function () {

        const $input = $(this);
        const value = $.trim($input.val());

        // Remove previous email error
        $input.closest('.wpcf7-form-control-wrap')
              .find('.email-error')
              .remove();

        $input.removeClass('wpcf7-not-valid');

        if (value === '') {
            return;
        }

        if (!emailRegex.test(value)) {

            $input.addClass('wpcf7-not-valid');

            $input.closest('.wpcf7-form-control-wrap')
                  .append('<span class="custom-error email-error">Please enter a valid Work Email.</span>');

        }

    });

});
jQuery(function ($) {
    $('.wpcf7-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            $('#cf7-spinner').show();
        }
    });

});
	
	jQuery(function ($) {

    $(document).on('submit', '.wpcf7-form', function (e) {
        if (e.isDefaultPrevented()) return;

        const $btn = $(this).find('input[type="submit"]');

        $btn
            .val('Submitting...')
            .prop('disabled', true)
            .addClass('submitting');

    });

    function resetButton(event) {

        const $form = $(event.target);
        const $btn = $form.find('input[type="submit"]');

        $btn
            .val('Submit')
            .prop('disabled', false)
            .removeClass('submitting');
    }

    document.addEventListener('wpcf7mailsent', resetButton);
    document.addEventListener('wpcf7mailfailed', resetButton);
    document.addEventListener('wpcf7invalid', resetButton);
    document.addEventListener('wpcf7spam', resetButton);

});
	
	jQuery(function ($) {

    let interval;

    $(document).on('submit', '.wpcf7-form', function (e) {
        if (e.isDefaultPrevented()) return;

        const $btn = $(this).find('input[type="submit"]');

        $btn.prop('disabled', true);

        let dots = 0;

        interval = setInterval(function () {

            dots = (dots + 1) % 4;

            $btn.val('Submitting' + '.'.repeat(dots));

        }, 400);

    });

    function resetButton(event){

        clearInterval(interval);

        const $btn = $(event.target).find('input[type="submit"]');

        $btn
            .val('Submit')
            .prop('disabled', false);

    }

    document.addEventListener('wpcf7mailsent', resetButton);
    document.addEventListener('wpcf7mailfailed', resetButton);
    document.addEventListener('wpcf7invalid', resetButton);
    document.addEventListener('wpcf7spam', resetButton);

});
</script>

<?php get_footer(); ?>
