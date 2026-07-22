<?php
/**
 * Template Name: New Home 
 * The template used for displaying fullwidth page content in Publications page
 *
 * @package hitmag
 */

get_header(); ?>

<?php

$ai_landing_section = get_field('ai_landing_section');
$ai_about_section = get_field('ai_about_section');
$ai_video_section = get_field('ai_video_section');
$ai_services_section = get_field('ai_services_section');
$cloud_services_section = get_field('cloud_services_section');
$premium_enterprise_application = get_field('ai_premium_enterprise_application');
$platform_and_accelerators = get_field('ai_platform_and_accelerators');
$ai_value_section = get_field('ai_value_section');
$ai_imapct_section = get_field('ai_imapct_section');
$ai_race_section = get_field('ai_race_section');
$ai_customer_section = get_field('ai_customer_section');
$ai_blog_section = get_field('ai_blog_section');
$ai_clients_section = get_field('ai_clients_section');
$ai_innovation_section = get_field('ai_innovation_section');
$ai_join_us_section = get_field('ai_join_us_section');
$ai_form_section = get_field('ai_form_section');
$ai_prefooter = get_field('ai_prefooter');
$ai_partners_section = get_field('ai_partners_section');
?>

<style>

:root {
  --red: #ff0000;
  --red-dark: #cc0000;
  --blue: #0D004A;
  --blue-dark: #0035cc;
  --white: #ffffff;
  --off: #f4f5f7;
  --off2: #eef0f3;
  --text: #111214;
  --text2: #444850;
  --muted: #6e737c;
  --border: #dde0e6;
  --font-d: 'Barlow Condensed', sans-serif;
  --font-b: 'RobotoSlab-Regular', sans-serif;
}

body {
  background: #fff;
  color: var(--text);
  font-family: var(--font-b);
  -webkit-font-smoothing: antialiased;
}

.wrap {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 48px;
}

/* ══════════════════════════════
   SECTION 1 — INTRO
══════════════════════════════ */
.s-intro {
  display: grid;
  grid-template-columns: 1fr 1fr;
  min-height: 440px;
  border-bottom: 3px solid var(--red);
}

.s-intro-left {
  background: var(--off);
  padding: 9px 28px;
  display: flex;
  flex-direction: column;
  justify-content: center;
/*   align-items:center; */
  border-right: 1px solid var(--border);
  position: relative;
  overflow: hidden;
}

.s-intro-left::after {
  content: 'AI';
  position: absolute;
  font-family: var(--font-d);
  font-size: 240px;
  font-weight: 900;
  color: rgba(0,0,0,0.04);
  right: -8px;
  bottom: -24px;
  line-height: 1;
  pointer-events: none;
}
.eyebrow {
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--red);
  margin-bottom: 20px;
  display: flex;
  align-items: center;
  gap: 10px;
}
.eyebrow::before {
  content: '';
  width: 20px;
  height: 2px;
  background: var(--red);
  display: inline-block;
}

.intro-headline {
  font-family: var(--font-d);
  font-size: clamp(52px, 5.5vw, 80px);
  font-weight: 900;
  line-height: 1.1;
  text-transform: uppercase;
  color: var(--text);
  letter-spacing: -0.01em;
  padding-bottom: 60px;
}
.intro-headline .r { color: var(--red); display: block;
  margin-left: 0;
  padding-left: 0;}
.intro-headline .b { color: var(--blue);  display: block;
  text-align: center;
  width: 100%;
 }

.s-intro-right {
  background: #fff;
  padding: 36px 56px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  border-left: 4px solid var(--red);
}

.intro-label {
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--muted);
  margin-bottom: 18px;
}

.intro-body {
  font-size: 24px;
  font-weight: 300;
  color: var(--text2);
  line-height: 1.8;
}
.intro-body strong {
  color: var(--text);
  font-weight: 600;
}

/* ══════════════════════════════
   SECTION 2 — STATS BAND (red only)
══════════════════════════════ */
.s-stats {
  background: var(--red);
  display: grid;
  grid-template-columns: 1fr;
  min-height: 150px;
}

/* .stats-label-col {
  background: rgba(0,0,0,0.18);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0 28px;
}

.stats-label-text {
  font-size: 9px;
  font-weight: 600;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.6);
  writing-mode: vertical-rl;
  transform: rotate(180deg);
} */

.stats-content {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  align-items: stretch;
}

.stat-block {
  padding: 28px 30px;
  border-left: 1px solid rgba(255,255,255,0.15);
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.stat-quote {
  font-family: var(--font-d);
  font-size: 14px;
  font-weight: 600;
  color: rgba(255,255,255,0.9);
  text-transform: uppercase;
  letter-spacing: 0.05em;
  line-height: 1.45;
}

.stat-num {
  font-family: var(--font-d);
  font-size: 52px;
  font-weight: 900;
  color: #fff;
  line-height: 1;
  letter-spacing: -0.02em;
}
.stat-unit { font-size: 28px; font-weight: 700; }
.stat-lbl {
  font-size: 12px;
  font-weight: 500;
  color: var(--white);
  text-transform: uppercase;
  letter-spacing: 0.15em;
  margin-top: 6px;
}

/* ══════════════════════════════
   SECTION 3 — FRAMEWORKS HEADER
══════════════════════════════ */
.s-fw-header {
  background: var(--off);
  border-top: 1px solid var(--border);
  border-bottom: 1px solid var(--border);
  padding: 44px 0;
}

.fw-header-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
}

.fw-left {}

.fw-tag {
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--muted);
  margin-bottom: 10px;
}

.fw-title {
  font-family: var(--font-d);
  font-size: clamp(28px, 3.2vw, 42px);
  font-weight: 800;
  text-transform: uppercase;
  color: var(--text);
  line-height: 1.05;
  letter-spacing: 0.01em;
}
.fw-title span { color: var(--blue); }

.fw-sub {
  font-size: 14px;
  color: var(--muted);
  font-weight: 400;
  max-width: 280px;
  text-align: right;
  line-height: 1.6;
}

/* ══════════════════════════════
   SECTION 4 — PRODUCT CARDS
══════════════════════════════ */
.s-cards {
  background: var(--off2);
  padding: 40px 0 48px;
}

.cards-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.pcard {
  background: #fff;
  border: 1px solid var(--border);
  border-radius: 6px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.pcard:hover {
  transform: translateY(-3px);
  box-shadow: 0 12px 40px rgba(0,0,0,0.1);
}

.pcard-top {
  padding: 36px 40px 24px;
  flex: 1;
}

.pcard-meta {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 14px;
}

.pcard-num {
  font-family: var(--font-d);
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.18em;
  color: var(--muted);
}

.pcard-badge {
  display: inline-block;
  font-size: 9px;
  font-weight: 700;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  padding: 4px 10px;
  border-radius: 2px;
}
.badge-r { background: #fff0f0; color: var(--red); border: 1px solid #ffc8c8; }
.badge-b { background: #eef2ff; color: var(--blue); border: 1px solid #c2d2ff; }

.pcard-title {
  font-family: var(--font-d);
  font-size: 30px;
  font-weight: 800;
  text-transform: uppercase;
  color: var(--text);
  line-height: 1.1;
  margin-bottom: 4px;
  letter-spacing: 0.02em;
}

.pcard-sub {
  font-size: 11px;
  font-weight: 500;
  color: var(--muted);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  margin-bottom: 18px;
}

.pcard-line {
  height: 3px;
  width: 36px;
  border-radius: 2px;
  margin-bottom: 18px;
}
.line-r { background: var(--red); }
.line-b { background: var(--blue); }

.pcard-desc {
  font-size: 14px;
  font-weight: 400;
  color: var(--text2);
  line-height: 1.7;
  margin-bottom: 16px;
}

.pcard-highlight {
  font-size: 13px;
  font-weight: 500;
  padding: 12px 16px;
  border-radius: 3px;
  border-left: 3px solid;
  line-height: 1.5;
}
.hl-r { background: #fff5f5; border-color: var(--red); color: #aa0000; }
.hl-b { background: #f0f4ff; border-color: var(--blue); color: #0030bb; }

.pcard-footer {
  border-top: 1px solid var(--border);
}

.pcard-cta {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 17px 40px;
  text-decoration: none;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  transition: padding-left 0.2s ease, background 0.2s ease;
  background: #fff;
}
.pcard-cta:hover { padding-left: 50px; }
.cta-r { color: var(--red); }
.cta-r:hover { background: #fff5f5; }
.cta-b { color: var(--blue); }
.cta-b:hover { background: #f0f4ff; }
.cta-arrow { font-size: 17px; }

/* ══════════════════════════════
   SECTION 5 — CLOSING CTA
══════════════════════════════ */
.s-closing {
  display: grid;
  grid-template-columns: 1fr 360px;
  border-top: 1px solid var(--border);
}

.closing-left {
  background: #fff;
  padding: 22px 60px;
  border-right: 1px solid var(--border);
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.closing-eyebrow {
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--red);
  margin-bottom: 12px;
  display: flex;
  align-items: center;
  gap: 10px;
}
.closing-eyebrow::before {
  content: '';
  width: 18px;
  height: 2px;
  background: var(--red);
  display: inline-block;
}

.closing-title {
  font-family: var(--font-d);
  font-size: clamp(22px, 2.6vw, 32px);
  font-weight: 800;
  text-transform: uppercase;
  color: var(--text);
  line-height: 1.1;
  margin-bottom: 22px;
  letter-spacing: 0.01em;
}
.closing-title span { color: var(--red); }

.deliverables { list-style: none; display: flex; flex-direction: column; gap: 10px; }
.deliverables li {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  font-size: 14px;
  color: var(--text2);
  line-height: 1.5;
}
.deliverables li::before {
  content: '';
  width: 6px;
  height: 6px;
  min-width: 6px;
  border-radius: 50%;
  background: var(--red);
  margin-top: 7px;
}

.closing-right {
  background: var(--off);
  padding: 22px 44px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 18px;
  text-align: center;
  border-left: 3px solid var(--red);
}

.closing-right-tag {
  font-size: 9px;
  font-weight: 600;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: var(--muted);
}

.briefing-cta {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 5px;
  text-decoration: none;
  background: var(--red);
  color: #fff;
  padding: 20px 32px;
  border-radius: 4px;
  transition: all 0.2s ease;
  width: 100%;
}
.briefing-cta:hover {
  background: var(--red-dark);
  transform: translateY(-2px);
  box-shadow: 0 10px 30px rgba(255,0,0,0.25);
}
.briefing-cta-pre {
  font-size: 9px;
  font-weight: 600;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.65);
}
.briefing-cta-main {
  font-family: var(--font-d);
  font-size: 17px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}
.briefing-cta-sub {
  font-size: 10px;
  color: rgba(255,255,255,0.55);
}
.closing-note {
  font-size: 11px;
  color: var(--muted);
}

/* ══ RESPONSIVE ══ */
@media (max-width: 900px) {
  .s-intro { grid-template-columns: 1fr; }
  .s-intro-right { border-left: none; border-top: 4px solid var(--red); }
  .s-stats { grid-template-columns: 1fr; }
  .stats-label-col { display: none; }
  .stats-content { grid-template-columns: 1fr 1fr; }
  .fw-header-inner { flex-direction: column; align-items: flex-start; gap: 12px; }
  .fw-sub { text-align: left; max-width: 100%; }
  .cards-row { grid-template-columns: 1fr; }
  .s-closing { grid-template-columns: 1fr; }
  .closing-right { border-left: none; border-top: 3px solid var(--red); padding: 44px 40px; }
  .wrap { padding: 0 24px; }
  .closing-eyebrow { font-size: 9px; letter-spacing: 0.14em; gap: 8px; }
.closing-eyebrow::before { width: 14px; }
.intro-label { font-size: 9px; letter-spacing: 0.14em; }
.fw-tag { font-size: 9px; letter-spacing: 0.14em; }
.pcard-num { font-size: 10px; letter-spacing: 0.14em; }
.section-tag { font-size: 9px; letter-spacing: 0.14em; }
}

@media (max-width: 600px) {
  .s-intro-left, .s-intro-right { padding: 44px 24px; }
  .stats-content { grid-template-columns: 1fr; }
  .pcard-top { padding: 28px 24px 20px; }
  .pcard-cta { padding: 15px 24px; }
  .closing-left { padding: 40px 24px; }
	.closing-eyebrow { font-size: 8px; letter-spacing: 0.12em; gap: 6px; }
.closing-eyebrow::before { width: 12px; }
.intro-label { font-size: 8px; letter-spacing: 0.12em; }
.fw-tag { font-size: 8px; letter-spacing: 0.12em; }
.pcard-num { font-size: 9px; letter-spacing: 0.12em; }
.section-tag { font-size: 8px; letter-spacing: 0.12em; }
}


  /* ─── HERO INTRO ─── */
  .ai-section {
    padding: 100px 0 0;
    overflow: hidden;
  }

  .container {
    max-width: 1160px;
    margin: 0 auto;
    padding: 0 40px;
  }

  /* Intro block */
  .intro-block {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: end;
    padding-bottom: 80px;
    border-bottom: 1px solid var(--border);
  }

  .intro-block .intro-headline {
    color: var(--text);
  }

  .intro-left {}

  .eyebrow {
    font-family: var(--font-body);
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: var(--red);
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .eyebrow::before {
    content: '';
    display: inline-block;
    width: 24px;
    height: 2px;
    background: var(--red);
  }

  .intro-headline {
    font-family: var(--font-display);
    font-size: clamp(36px, 5vw, 58px);
    font-weight: 800;
    line-height: 1.0;
    text-transform: uppercase;
    letter-spacing: -0.01em;
    color: var(--text);
	text-align: left;
	padding-left: 60px;
  }

  .intro-headline .accent-red {
    color: var(--red);
  }

  .intro-headline .accent-blue {
    color: var(--blue);
  }

  .intro-right {
    padding-bottom: 8px;
  }

  .intro-body {
    font-size: 18px;
    font-weight: 300;
    color: var(--text2);
    line-height: 1.75;
    margin-bottom: 32px;
  }

  .intro-body strong {
    color: var(--text);
    font-weight: 600;
  }

  /* ─── PULL QUOTE BAND ─── */
  .pull-quote-band {
    background: var(--red);
    padding: 0;
    overflow: hidden;
  }

  .pull-quote-inner {
    display: flex;
    align-items: stretch;
    min-height: 140px;
  }

  .pq-label {
    background: rgba(0,0,0,0.25);
    padding: 32px 40px;
    display: flex;
    align-items: center;
    font-family: var(--font-body);
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.7);
    white-space: nowrap;
    writing-mode: vertical-rl;
    text-orientation: mixed;
    transform: rotate(180deg);
  }

  .pq-content {
    flex: 1;
    padding: 40px 60px;
    display: flex;
    align-items: center;
  }

  .pq-quote {
    font-family: var(--font-display);
    font-size: 17px;
    font-weight: 400;
    color: rgba(255,255,255,0.85);
    letter-spacing: 0.03em;
    text-transform: uppercase;
    margin-bottom: 20px;
    line-height: 1.5;
  }

  .pq-stats {
    display: flex;
    gap: 60px;
    align-items: baseline;
  }

  .stat-item {}

  .stat-num {
    font-family: var(--font-display);
    font-size: 52px;
    font-weight: 800;
    color: #fff;
    line-height: 1;
    letter-spacing: -0.02em;
  }

  .stat-unit {
    font-size: 28px;
    font-weight: 600;
  }

  .stat-label {
    font-size: 12px;
    font-weight: 500;
    color: rgba(255,255,255,0.75);
    text-transform: uppercase;
    letter-spacing: 0.12em;
    margin-top: 6px;
  }

  .pq-divider {
    width: 1px;
    background: rgba(255,255,255,0.2);
    align-self: stretch;
    margin: 20px 0;
  }

  /* ─── TWO PATHS HEADER ─── */
  .paths-header {
    padding: 80px 0 48px;
  }

  .section-tag {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: var(--muted);
    margin-bottom: 16px;
  }

  .section-title {
    font-family: var(--font-display);
    font-size: clamp(28px, 3.5vw, 42px);
    font-weight: 700;
    text-transform: uppercase;
    color: var(--text);
    letter-spacing: 0.01em;
  }

  .section-title .dot-blue {
    color: var(--blue);
  }

  /* ─── PRODUCT CARDS ─── */
  .cards-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
    background: transparent;
    border: none;
    border-radius: 4px;
    overflow: hidden;
    margin-bottom: 24px;
  }

  .product-card {
    background: var(--bg2);
    border: 1px solid var(--border);
    padding: 52px 48px;
    position: relative;
    display: flex;
    flex-direction: column;
    border-radius: 8px;
    transition: background 0.3s ease, box-shadow 0.3s ease;
  }

  .product-card:hover {
    background: var(--white);
    box-shadow: 0 8px 40px rgba(0,0,0,0.08);
  }

  .card-number {
    font-family: var(--font-display);
    font-size: 120px;
    font-weight: 800;
    color: rgba(0,0,0,0.04);
    position: absolute;
    top: -10px;
    right: 32px;
    line-height: 1;
    pointer-events: none;
    user-select: none;
  }

  .card-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    padding: 5px 12px;
    border-radius: 2px;
    margin-bottom: 28px;
    width: fit-content;
  }

  .badge-red {
    background: rgba(255,0,0,0.12);
    color: var(--red);
    border: 1px solid rgba(255,0,0,0.25);
  }

  .badge-blue {
    background: rgba(0,71,255,0.12);
    color: #5b8fff;
    border: 1px solid rgba(0,71,255,0.25);
  }

  .card-title {
    font-family: var(--font-display);
    font-size: 30px;
    font-weight: 800;
    text-transform: uppercase;
    color: var(--text);
    letter-spacing: 0.02em;
    line-height: 1.1;
    margin-bottom: 6px;
  }

  .card-subtitle {
    font-size: 13px;
    font-weight: 500;
    color: var(--muted);
    text-transform: uppercase;
    letter-spacing: 0.1em;
    margin-bottom: 28px;
  }

  .card-divider {
    width: 40px;
    height: 2px;
    margin-bottom: 28px;
  }

  .div-red { background: var(--red); }
  .div-blue { background: var(--blue); }

  .card-desc {
    font-size: 17px;
    font-weight: 400;
    color: var(--text2);
    line-height: 1.7;
    margin-bottom: 20px;
    flex: 1;
  }

  .card-highlight {
    font-size: 16px;
    font-weight: 500;
    padding: 14px 18px;
    border-radius: 3px;
    margin-bottom: 36px;
    border-left: 3px solid;
  }

  .highlight-red {
    background: var(--red-light);
    border-color: var(--red);
    color: #c00000;
	  font-size: 14px;
    text-transform: uppercase;
    font-weight: bold;
  }

  .highlight-blue {
    background: var(--blue-light);
    border-color: var(--blue);
    color: #0035cc;
	  font-size: 14px;
    text-transform: uppercase;
    font-weight: bold;
  }

  .card-cta {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    text-decoration: none;
    padding: 14px 28px;
    border-radius: 3px;
    transition: all 0.25s ease;
    width: fit-content;
  }

  .cta-red {
    background: var(--red);
    color: #fff !important;
  }

  .cta-red:hover {
    background: var(--red-dark);
    transform: translateY(-1px);
  }

  .cta-blue {
    background: var(--blue);
    color: #fff !important;
  }

  .cta-blue:hover {
    background: var(--blue-dark);
    transform: translateY(-1px);
  }

  .cta-arrow {
    font-size: 16px;
    transition: transform 0.2s ease;
  }

  .card-cta:hover .cta-arrow {
    transform: translateX(4px);
  }

  /* ─── CLOSING CTA ─── */
  .closing-section {
    background: var(--bg2);
    border: 1px solid var(--border);
    border-radius: 8px;
/*     padding: 72px 80px; */
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 60px;
    align-items: center;
  }

  .closing-left {}

  .closing-eyebrow {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--red);
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .closing-eyebrow::before {
    content: '';
    width: 20px;
    height: 2px;
    background: var(--red);
    display: inline-block;
  }

  .closing-title {
    font-family: var(--font-display);
    font-size: clamp(22px, 3vw, 34px);
    font-weight: 800;
    text-transform: uppercase;
    color: var(--text);
    line-height: 1.1;
    margin-bottom: 10px;
    letter-spacing: 0.01em;
  }

  .closing-title span {
    color: var(--red);
  }

  .deliverables {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 0px;
  }

  .deliverables li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    font-size: 17px;
    font-weight: 400;
    color: var(--text2);
    line-height: 1.5;
  }

  .deliverables li::before {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 60%;
    background: var(--red);
    margin-top: 9px;
    flex-shrink: 0;
  }

  .closing-right {
    text-align: center;
  }

  .briefing-cta {
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
    text-decoration: none;
    background: var(--red);
    color: #fff;
    padding: 24px 40px;
    border-radius: 4px;
    transition: all 0.25s ease;
    min-width: 240px;
  }

  .briefing-cta:hover {
    background: var(--red-dark);
    transform: translateY(-2px);
    box-shadow: 0 12px 40px rgba(255,0,0,0.25);
  }

  .briefing-cta-label {
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.7);
  }

  .briefing-cta-text {
    font-family: var(--font-display);
    font-size: 21px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
	  color:#fff;
  }
  .briefing-cta-text-red {
    font-family: var(--font-display);
    font-size: 21px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
	  color:#ff0000;
	margin-bottom: 12px;
  }

  .briefing-cta-sub {
    font-size: 14px;
    color: rgba(255,255,255,0.6);
  }

  /* ─── RESPONSIVE ─── */
  @media (max-width: 900px) {
    .intro-block { grid-template-columns: 1fr; gap: 32px; }
    .cards-grid { grid-template-columns: 1fr; gap: 16px; }
    .closing-section { grid-template-columns: 1fr; text-align: left; padding: 48px 40px; }
    .closing-right { text-align: left; }
    .pq-stats { gap: 32px; flex-wrap: wrap; }
    .pq-label { display: none; }
    .pq-content { padding: 40px; flex-direction: column; align-items: flex-start; }
    .container { padding: 0 24px; }
    .product-card { padding: 40px 32px; }
    .card-number { font-size: 80px; }
  }

  @media (max-width: 600px) {
    .ai-section { padding: 60px 0 0; }
    .paths-header { padding: 60px 0 36px; }
    .pq-stats { gap: 24px; }
    .stat-num { font-size: 40px; }
    .briefing-cta { width: 100%; }
  }

	.race-sec, .impact-sec, .fixed-sec{display:none;}
	.blog-inner:first-child{
		border-left: none;
	}
.ai-value-inner {
	background-color: #FF0000;
    display: block;
    width: 88vw !important;
    border-right: 1px solid #E5E3CD;
    padding: 40px;
}
	.ai-value-inner {
    width: 60vw !important;
    border-right: 1px solid #E5E3CD;
    padding: 40px;
}
	.ai-value-inner
	.font-medium{
		color: #fff;

	}
.ai-value-inner h3 span {
    font-family: RobotoSlab-Light;
}

.value-slider .slick-slide .ai-value-inner:hover {
    background: red;
    color: #fff;
}
.value-slider .slick-slide .ai-value-inner:hover h3 {
    color: #fff;
}
.ai-value-inner p {
    color: #fff;
}
	.ai-value-inner {
        width: 90vw !important;
        padding: 24px;
    }
	.tags{
	display: none !important;
}
	.row.services-main {
		border-right: 1px solid #E5E3CD;
	    border-left: 1px solid #E5E3CD;
		border-bottom: 1px solid #E5E3CD;
	}

	.services-tabs {
		display: flex;
		gap: 30px;
		list-style: none;
		padding: 0;
	}

	.ai-tab-title {
		cursor: pointer;
		font-weight: bold;
		color: #000;
	}

	.ai-tab-title.ai-active {
		background: red;
	}

	.ai-tab-title.ai-active h2 {
		color: #fff;
	}

	.ai-tab-content {
		display: none;
	}

	.ai-tab-content.ai-active {
		display: block;
	}

	.ai-tab-content .services-title {
		color: #0D004A;
	}

	.services-tabs .services-title {
		border: none;
		padding: 20px 40px;
	}

	ul.services-tabs {
		margin-bottom: 0;
	}

	li.ai-tab-title {
		margin-bottom: 0;
	}

	.services-sec .lines {
		padding: 0 30px 0 0;
	}
.row.services-main .col-md-6.col-lg-4.col-sm-6 {
    padding: 0;
}
	@media(max-width: 767.98px){
	.services-sec .lines {padding:0;}
	.services-tabs .services-title{padding:10px;}
	.services-tabs{ gap: 0px; }
	.services-tabs .services-title h2{ font-size: 10px !important; }
	.services-sec .services-inner:hover { height: 200px; }
	}
	/* ══ SECTION 03 — TRINITY ══ */
.s-trinity {
  padding: 60px 0 48px;
  background: var(--off);
  border-top: 1px solid var(--border);
}

.s-trinity .container {
  max-width: 860px;
  text-align: center;
}

..s-trinity .eyebrow {
  justify-content: flex-start;
}

.s-trinity .eyebrow::before {
  display: inline-block;I
}

.s-trinity .intro-headline {
  font-family: var(--font-d);
  font-size: clamp(32px, 4vw, 48px);
  font-weight: 900;
  line-height: 1.05;
  margin-bottom: 12px;
  text-align: center;
}

.s-trinity h3 {
  max-width: 860px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 28px;
}

..trinity-subhead {
  font-family: var(--font-d);
  font-size: clamp(18px, 2.2vw, 24px);
  font-weight: 600;
  color: var(--blue);
  text-transform: uppercase;
  letter-spacing: 0.04em;
  line-height: 1.4;
  max-width: 700px;
  margin: 0 auto 28px;
  text-align: center;
}

.trinity-subhead sup {
  font-size: 0.5em;
  vertical-align: super;
}

.s-trinity .intro-body {
  font-size: 18px;
  font-weight: 400;
  color: var(--text2);
  line-height: 1.75;
  margin-bottom: 12px;
  text-align: left;
  max-width: 860px;
  margin-left: auto;
  margin-right: auto;
}

.s2-quote-navy {
  background: var(--blue);
  border-left: 4px solid var(--red);
  padding: 16px 28px;
  margin: 20px auto 28px;
  display: inline-block;
  width: auto;
  max-width: 100%;
}

.s2-quote-navy .s2-quote-eyebrow {
  font-family: var(--font-d);
  font-size: 9px;
  font-weight: 600;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.5);
  margin: 0 0 6px 0;
  white-space: nowrap;
}

.s2-quote-navy .s2-quote-headline {
  font-family: var(--font-d);
  font-size: 16px;
  font-weight: 700;
  text-transform: uppercase;
  line-height: 1.2;
  letter-spacing: 0.03em;
  margin: 0;
  white-space: nowrap;
}

.s2-quote-navy .s2-quote-white {
  color: #ffffff;
  display: inline;
}

.s2-quote-navy .s2-quote-red {
  color: var(--red);
  display: inline;
}

.trinity-ctas {
  display: flex;
  align-items: flex-start;
  justify-content: center;
  gap: 16px;
  flex-wrap: wrap;
  margin-top: 25px;
  margin-bottom: 5px !important;
}

.trinity-btn-primary {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  background: var(--red);
  color: #fff !important;
  text-decoration: none;
  font-size: 14px;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: 14px 24px;
  border-radius: 4px;
  transition: all 0.2s ease;
  white-space: nowrap;
}
.trinity-btn-primary span {
  white-space: nowrap;
}
.trinity-btn-primary:hover {
  background: var(--red-dark);
  color: #fff !important;
  transform: translateY(-2px);
  box-shadow: 0 10px 28px rgba(255,0,0,0.22);
}

.trinity-btn-primary sup {
  font-size: 0.6em;
  vertical-align: super;
}

.trinity-btn-outline {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: transparent;
  color: var(--text) !important;
  text-decoration: none;
  font-size: 14px;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: 14px 24px;
  border-radius: 4px;
  border: 1px solid var(--border);
  transition: all 0.2s ease;
}

.trinity-btn-outline:hover {
  border-color: var(--red);
  color: var(--red) !important;
  background: #fff5f5;
}

@media (max-width: 900px) {
  .s-trinity { padding: 48px 0 40px; }
  .s2-quote-navy .s2-quote-headline { font-size: 16px; white-space: normal; }
  .trinity-ctas { flex-direction: column; align-items: center; }
  .trinity-btn-primary, .trinity-btn-outline { width: 100%; justify-content: center; }
}

/* ══ SECTION 04 — ECOSYSTEM ══ */
.s-ecosystem {
  padding: 30px 0 36px;
  background: #fff;
  border-top: 3px solid var(--red);
}

.ecosystem-header {
  max-width: 860px;
  margin: 0 auto 25px;
  text-align: center;
}

.ecosystem-header .eyebrow {
  justify-content: flex-start;
}

.ecosystem-header .eyebrow::before {
  display: inline-block;
}

.ecosystem-h1 {
  font-family: 'RobotoSlab-Bold', sans-serif;
  font-size: clamp(32px, 4vw, 48px);
  font-weight: 900;
  text-transform: uppercase;
  color: var(--text);
  line-height: 1.05;
  letter-spacing: -0.01em;
  margin-bottom: 20px;
}

.ecosystem-copy {
  font-size: 18px;
  color: var(--text2);
  line-height: 1.75;
  text-align: left;
}

.eco-logo-strip {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  gap: 0;
/*   border: 1px solid var(--border); */
  border-radius: 6px;
  overflow: hidden;
  place-items: center;
}

.eco-logo-item {
  width: fit-content;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 16px 8px;
  background: #fff;
  transition: background 0.2s ease;
}

/* .eco-logo-item:hover {
  background: var(--off);
} */

/* Logo image sizing */
.eco-logo-item img {
  height: 60px;
  width: 120px;
  max-width: 200px;
  object-fit: contain;
  opacity: 1;
  filter: grayscale(0%);
/*   transition: opacity 0.2s ease, filter 0.2s ease; */
}

/* Brighten on hover */
/* .eco-logo-item:hover img {
  opacity: 1;
  filter: grayscale(0%);
} */

/* .s2-quote { border-left: 4px solid var(--red); padding: 14px 16px; background: var(--blue); width: fit-content; }
.s2-quote-text { font-family: var(--font-d); font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.04em; color: #ffffff; line-height: 1.4; }
.s2-quote-text .r { color: var(--red); } */
.s2-quote {
  width: fit-content;
/*   border-top: 2px solid #ff0000; */
/*   border-bottom: 2px solid #ff0000; */
  padding: 5px 0;
  background: transparent;
}

.s2-quote {
  width: fit-content;
  padding: 5px 0;
  background: transparent;
  display: flex;
  align-items: center;
  gap: 12px;
}

.s2-quote-text {
  margin: 0;
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 20px;
  font-style: italic;
  white-space: nowrap;
}

.s2-box {
  display: inline-flex;
  align-items: center;
  gap: 14px;
  background: #0D004A;
  padding: 12px 24px;
  border-radius: 4px;
  border-left: 4px solid #ff0000;
}

.s2-white {
  color: #ffffff;
  font-style: italic;
  font-size: 20px;
}

.s2-red {
  color: #ff0000;
  font-weight: 600;
  font-style: italic;
  font-size: 20px;
}

.s2-arrow {
  display: inline-block;
  width: 30px;
  height: 2px;
  background: #ff0000;
  position: relative;
  vertical-align: middle;
}

.s2-arrow::after {
  content: '';
  position: absolute;
  right: 0;
  top: -4px;
  width: 0;
  height: 0;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 8px solid #ff0000;
}

.services-title h2 a {
    color: inherit;        /* keeps the h2's existing color */
    text-decoration: none; /* removes underline */
    display: block;        /* makes the full area clickable */
}

.services-title h2 a:hover {
    text-decoration: underline; /* optional: show underline on hover */
    cursor: pointer;
}
/* ══ RESPONSIVE ══ */
@media (max-width: 900px) {
  .s-trinity, .s-ecosystem { padding: 60px 0; }
  .eco-logo-strip { grid-template-columns: repeat(3, 1fr); border-radius: 6px; }
  .trinity-ctas { flex-direction: column; align-items: stretch; }
  .trinity-btn-primary, .trinity-btn-outline { justify-content: center; text-align: center; }
  .eco-logo-item img { height: 44px; max-width: 110px; }
  .eco-logo-item { padding: 20px 18px; }
}


@media (max-width: 600px) {
  .eco-logo-strip { grid-template-columns: repeat(2, 1fr); }
  .eco-logo-item img { height: 36px; max-width: 90px; }
  .eco-logo-item { padding: 16px 8px; }
}
@media (max-width: 1280px) {
  .eco-logo-item img {
    height: 50px;
    max-width: 130px;
  }
  .eco-logo-item {
    padding: 20px 6px;
  }
}

/* --- Global Mobile Overflow & Alignment Fixes --- */
html, body {
  overflow-x: hidden !important;
  width: 100%;
  max-width: 100%;
}

.row.services-main, .join-us-sec .row {
  margin-left: 0 !important;
  margin-right: 0 !important;
}

@media (max-width: 767.98px) {
  .intro-headline {
    font-size: clamp(32px, 8vw, 42px) !important;
    padding-left: 0 !important;
    text-align: left !important;
  }
  .s-intro-left, .s-intro-right {
    padding: 30px 15px !important;
  }
  .s2-box {
    flex-direction: column !important;
    gap: 8px !important;
    padding: 12px 15px !important;
    text-align: center !important;
  }
  .s2-white, .s2-red {
    font-size: 15px !important;
    white-space: normal !important;
  }
  .s2-arrow {
    transform: rotate(90deg) !important;
    margin: 4px 0 !important;
  }
  .trinity-btn-primary, .trinity-btn-primary span {
    white-space: normal !important;
    word-break: break-word !important;
  }
  .ai-value-inner {
    width: 100% !important;
    padding: 20px !important;
    box-sizing: border-box !important;
  }
  .img_width {
    max-width: 100% !important;
    height: auto !important;
  }
  .services-tabs {
    flex-wrap: wrap;
    justify-content: center;
  }

}
  .br-mobile { display: none; }
   @media (max-width: 425px) {
    .br-mobile { display: inline; }
}

/* ── Client logos section styling ── */
.hero-client-logos-sec {
    height: auto;
    min-height: 60px;
    padding: 10px 0 !important;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    overflow: hidden;
}
.hero-client-logos-sec .logo-item {
    height: 45px !important;
}

@media (min-width: 1024px) {
    .hero-client-logos-sec {
        height: 75px;
        min-height: 75px;
        padding: 8px 0 !important;
        overflow: hidden;
    }
    .hero-client-logos-sec .logo-item {
        height: 55px !important;
    }
}
.hero-client-logos {
    margin-bottom: 0 !important;
}
.hero-main-carousel {
    margin-bottom: 0 !important;
}
</style>

<div class="hero-main-carousel">
<section class="airo-hero" aria-label="Airo agenTriniti hero">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap');

    /* Clean header margins and hide breadcrumbs on this template to prevent duplicate white spaces */
    .logo-menu {
      margin-bottom: 0 !important;
    }
    .breadcrumb,
    .hitmag-breadcrumb,
    .breadcrumbs,
    #breadcrumbs,
    .page-header,
    .entry-header {
      display: none !important;
    }

    .airo-hero {
      --red: #FF0000;
      --blue: #01004A;
      --white: #FFFFFF;
      --mist: #E5E1C7;
      --black: #040404;
      --vivid: #003FE1;
      --grey-line: #E4E6EE;

      margin-top: 85px; /* Offset for sticky nav */
      position: relative;
      overflow: hidden;
      background: var(--white);
      height: calc(100vh - 195px);
      min-height: 440px;
      max-height: 680px;
      display: flex;
      align-items: center;
      padding: 30px clamp(20px, 5vw, 64px) 30px;
      font-family: 'Inter', Arial, sans-serif;
      color: var(--blue);
      isolation: isolate;
    }
    .airo-hero:not(.airo-hero--package):not(.airo-hero--proud),
    .airo-hero--proud {
      cursor: pointer;
    }

    /* WordPress admin bar adjustment */
    body.admin-bar .airo-hero {
      height: calc(100vh - 227px); /* 195px + 32px admin bar */
    }

    /* Keep existing layout styles for small-height laptops (> 1024px and max-height 820px) completely unchanged */
    @media (min-width: 1024px) and (max-height: 820px) {
      .airo-hero {
        height: calc(100vh - 160px) !important;
        min-height: 380px;
        padding-top: 15px;
        padding-bottom: 15px;
      }
      body.admin-bar .airo-hero {
        height: calc(100vh - 192px) !important;
        min-height: 350px;
        padding-top: 15px;
        padding-bottom: 15px;
      }
      .hero-main-carousel .slick-dots {
        bottom: 8px !important;
      }
      .airo-headline {
        font-size: clamp(1.8rem, 3.5vw, 2.8rem);
        margin: 6px 0 0;
      }
      .airo-subhead {
        font-size: clamp(0.95rem, 1.3vw, 1.1rem);
        margin-top: 6px;
      }
      .airo-badge {
        margin-top: 6px;
        padding: 6px 14px;
        font-size: 1rem;
      }
      .airo-stats {
        margin-top: 6px;
      }
      .airo-stats li {
        font-size: 13px;
        padding: 6px 12px;
      }
      .airo-cta-row {
        margin-top: 12px;
        padding-left: 25px;
      }
      .airo-cta {
        padding: 12px 22px !important;
        font-size: 1rem !important;
        gap: 4px !important;
      }
      .exp-airo-cta-row {
        margin-left: -20px !important;
      }
      .airo-visual-card {
        max-height: calc(100vh - 230px) !important;
      }
      body.admin-bar .airo-visual-card {
        max-height: calc(100vh - 262px) !important;
      }
    }

    /* Dedicated tablet layout for all iPad devices (768px-1024px) */
    @media (max-width: 1024px) and (min-width: 768px) {
      .logo-menu {
        margin-bottom: 0 !important;
      }
      .airo-hero {
        height: 520px !important;
        min-height: 480px !important;
        max-height: 560px !important;
        padding: 24px clamp(20px, 4vw, 40px) !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        margin-top: 85px !important;
      }
      body.admin-bar .airo-hero {
        height: 520px !important;
        min-height: 480px !important;
        max-height: 560px !important;
      }
      .hero-main-carousel {
        margin-bottom: 0 !important;
      }
      .hero-main-carousel .slick-dots {
        bottom: 16px !important;
      }
      .airo-hero__grid {
        display: grid !important;
        grid-template-columns: 1.15fr 1fr !important; /* Balanced layout (approx. 53/47) */
        gap: 24px !important;
        align-items: center !important;
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 auto !important;
      }
      .airo-eyebrow {
        font-size: 11px !important;
        padding: 5px 12px !important;
      }
      .airo-headline {
        font-size: clamp(2rem, 3.8vw, 2.6rem) !important;
        line-height: 1.1 !important;
        margin: 8px 0 0 !important;
      }
      .airo-divider {
        margin-top: 8px !important;
        height: 3px !important;
      }
      .airo-subhead {
        font-size: clamp(0.95rem, 1.4vw, 1.05rem) !important;
        margin-top: 8px !important;
        line-height: 1.4 !important;
        max-width: 100% !important;
      }
      .airo-badge {
        margin-top: 8px !important;
        margin-bottom: 10px !important;
        padding: 6px 14px !important;
        font-size: 0.95rem !important;
      }
      .airo-stats {
        margin-top: 8px !important;
        gap: 6px !important;
      }
      .airo-stats li {
        font-size: 12px !important;
        padding: 5px 10px !important;
        border-radius: 5px !important;
      }
      .airo-cta-row {
        margin-top: 12px !important;
        padding-left: 0 !important;
        margin-left: 0 !important;
      }
      .airo-cta {
        padding: 10px 20px !important;
        font-size: 0.9rem !important;
        border-radius: 6px !important;
      }
      .airo-visual-card {
        height: 380px !important;
        max-height: 380px !important;
        width: 100% !important;
        max-width: 100% !important;
        border-radius: 20px !important;
        padding: 12px !important;
        box-shadow: 0 15px 35px -15px rgba(1,0,74,0.15) !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
      }
      .airo-hero--package .airo-hero__content {
        padding-top: 0 !important;
      }
      .airo-hero.airo-hero--proud {
        background-size: cover !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        padding: 0 !important;
      }
      .hero-client-logos-sec {
        margin-top: 0 !important;
      }
    }

    /* ---------- ambient background: faint brand glows + dot grid ---------- */
    .airo-hero__bg { position: absolute; inset: 0; z-index: 0; pointer-events: none; }
    .airo-hero__bg span {
      position: absolute; border-radius: 50%; filter: blur(70px);
      animation: airoDrift 22s ease-in-out infinite alternate;
    }
    .airo-hero__bg .glow-red   { width: 420px; height: 420px; left: -120px; top: -80px; background: radial-gradient(circle, rgba(255,0,0,0.10), rgba(255,0,0,0) 70%); }
    .airo-hero__bg .glow-blue  { width: 480px; height: 480px; right: -140px; bottom: -120px; background: radial-gradient(circle, rgba(0,63,225,0.09), rgba(0,63,225,0) 70%); animation-delay: -6s; }
    .airo-hero__bg .dotgrid {
      position: absolute; inset: 0;
      background-image: radial-gradient(var(--grey-line) 1.4px, transparent 1.4px);
      background-size: 26px 26px;
      -webkit-mask-image: radial-gradient(ellipse 70% 60% at 50% 40%, #000 40%, transparent 85%);
              mask-image: radial-gradient(ellipse 70% 60% at 50% 40%, #000 40%, transparent 85%);
      opacity: 0.55;
    }
    @keyframes airoDrift { 0% { transform: translate(0,0); } 100% { transform: translate(24px,18px); } }

    html {
      scroll-behavior: smooth;
    }

    /* ---------- layout ---------- */
    .airo-hero__grid {
      position: relative; z-index: 1;
      width: 100%;
      max-width: 1320px; margin: 0 auto;
      display: grid; grid-template-columns: 1fr 1.35fr; /* Wider right column to increase image size */
      gap: clamp(24px, 4vw, 48px);
      align-items: center;
    }

    /* ---------- eyebrow ---------- */
    .airo-eyebrow {
      display: inline-flex; align-items: center; gap: 8px;
      font-size: 12.5px; font-weight: 700; letter-spacing: 1.6px; text-transform: uppercase;
      color: var(--blue); background: var(--mist);
      padding: 7px 14px; border-radius: 100px;
      opacity: 0;
    }
    .slick-active .airo-eyebrow {
      animation: airoUp .7s ease forwards; animation-delay: .05s;
    }
    .airo-eyebrow::before {
      content: ""; width: 6px; height: 6px; border-radius: 50%; background: var(--red);
      box-shadow: 0 0 0 0 rgba(255,0,0,.5); animation: airoPulseDot 2.2s ease-out infinite;
    }

    /* ---------- headline ---------- */
    .airo-headline {
      position: relative;
      font-family: 'Roboto Slab', Georgia, serif;
      font-weight: 700;
      font-size: clamp(2.4rem, 4.4vw, 3.8rem); /* Increased font size */
      line-height: 1.08;
      letter-spacing: -0.5px;
      margin: 12px 0 0;
    }
    .airo-headline .line { display: block; overflow: hidden; padding-bottom: 0.25em; margin-bottom: -0.25em; }
    .airo-headline .line span {
      display: inline-block; opacity: 0; transform: translateY(110%);
    }
    .slick-active .airo-headline .line span {
      animation: airoLineUp .7s cubic-bezier(.22,1,.36,1) forwards;
    }
    .airo-headline .line:nth-child(1) span { animation-delay: .18s; }
    .airo-headline .line:nth-child(2) span { animation-delay: .32s; }
    .airo-headline .accent {
      background: linear-gradient(100deg, var(--red) 0%, #ff5b3d 35%, var(--red) 60%, #b40000 100%);
      background-size: 220% auto;
      -webkit-background-clip: text; background-clip: text; color: transparent;
      animation: airoShimmer 5s linear infinite 1.2s;
    }
    .slick-active .airo-headline .accent {
      animation: airoLineUp .7s cubic-bezier(.22,1,.36,1) forwards, airoShimmer 5s linear infinite 1.2s;
    }
    /* soft passing light-sweep across the whole headline, forever, like a screen waking up */
    .airo-headline::after {
      display: none !important;
    }

    .airo-divider {
      position: relative; overflow: hidden;
      display: block; width: 0; height: 4px; margin-top: 10px; border-radius: 4px;
      background: linear-gradient(90deg, var(--red), #ff8a70);
    }
    .slick-active .airo-divider {
      animation: airoDraw .8s ease forwards .55s, airoBarBreathe 3.4s ease-in-out infinite 1.4s;
    }
    .airo-divider::after {
      content: ""; position: absolute; top: 0; left: -60%; width: 60%; height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,.9), transparent);
      animation: airoBarStreak 3.4s ease-in-out infinite 1.4s;
    }

    .airo-subhead {
      font-size: clamp(1.1rem, 1.6vw, 1.25rem); /* Increased font size */
      color: #3a3d63; font-weight: 500;
      margin: 10px 0 0; max-width: 46ch;
      opacity: 0;
    }
    .slick-active .airo-subhead {
      animation: airoUp .7s ease forwards; animation-delay: .62s;
    }
    .airo-subhead .spot {
      font-weight: 700;
      background: linear-gradient(90deg, var(--red), var(--blue), var(--red));
      background-size: 200% auto; -webkit-background-clip: text; background-clip: text; color: transparent;
      animation: airoShimmer 6s linear infinite 2s;
    }

    /* ---------- product badge (agenTriniti — the signature moment) ---------- */
    .airo-badge {
      position: relative; isolation: isolate;
      display: inline-flex; align-items: baseline; gap: 6px;
      margin-top: 10px; margin-bottom: 12px; padding: 10px 22px; /* Increased padding */
      background: var(--white); border: 1.5px solid rgba(255,0,0,.35);
      border-radius: 100px;
      font-size: 1.15rem; font-weight: 600; color: var(--blue); /* Increased font size */
      box-shadow: 0 6px 20px -8px rgba(255,0,0,0.25);
      opacity: 0;
    }
    .slick-active .airo-badge {
      animation: airoUp .7s ease forwards .72s, airoBadgeGlow 3.2s ease-in-out infinite 1.6s;
    }
    .airo-badge b { font-weight: 800; }
    .airo-badge .r {
      font-weight: 800; font-size: 1.06em; letter-spacing: .2px;
      background: linear-gradient(100deg, var(--red) 0%, #ff9466 30%, var(--red) 55%, #b40000 80%, var(--red) 100%);
      background-size: 260% auto; -webkit-background-clip: text; background-clip: text; color: transparent;
      animation: airoTrinitiShine 3.2s ease-in-out infinite;
    }
    .airo-badge sup {
      font-size: 0.55em;
      color: var(--red);
      vertical-align: super;
      line-height: 0;
      position: relative;
      top: -0.35em;
    }

    /* ---------- stat chips ---------- */
    .airo-stats {
      list-style: none; margin: 10px 0 0; padding: 0;
      display: flex; flex-wrap: wrap; gap: 8px;
      opacity: 0;
    }
    .slick-active .airo-stats {
      animation: airoUp .7s ease forwards; animation-delay: .82s;
    }
    .airo-stats li {
      font-size: 13px; font-weight: 700; letter-spacing: .3px;
      color: var(--blue); background: #F6F5EF;
      border: 1px solid var(--grey-line);
      padding: 6px 12px; border-radius: 6px;
      animation: airoStatActivate 6s ease-in-out infinite;
    }
    .airo-stats li:nth-child(1) { animation-delay: 1.6s; }
    .airo-stats li:nth-child(2) { animation-delay: 3.1s; }
    .airo-stats li:nth-child(3) { animation-delay: 4.6s; }
    .airo-stats li:nth-child(4) { animation-delay: 6.1s; }

    /* ---------- CTA ---------- */
    .airo-cta-row {
      margin-top: 16px; display: flex; align-items: center; gap: 20px; flex-wrap: wrap;
      opacity: 0;
    }
    .slick-active .airo-cta-row {
      animation: airoUp .7s ease forwards; animation-delay: .95s;
    }
    .airo-cta {
      position: relative; overflow: hidden; display: inline-flex; align-items: center; gap: 8px;
      background: var(--red) !important; color: #FFFFFF !important;
      font-family: 'Inter', sans-serif; font-weight: 700; font-size: 14px;
      text-decoration: none !important; padding: 12px 24px; border-radius: 6px;
      box-shadow: 0 8px 20px -8px rgba(255,0,0,0.5);
      transition: transform .25s ease, box-shadow .25s ease;
    }
    .airo-cta::after {
      display: none !important;
    }
    .airo-cta:hover {
      transform: translateY(-2px);
      box-shadow: 0 14px 30px -8px rgba(255,0,0,0.6);
      color: #FFFFFF !important;
      text-decoration: none !important;
    }
    .airo-cta svg { transition: transform .25s ease; }
    .airo-cta:hover svg { transform: translateX(4px); }

    .airo-partners {
      font-size: 12.5px; font-weight: 600; letter-spacing: .5px; text-transform: uppercase;
      color: #7a7e97;
    }
    .airo-partners b { color: var(--blue); font-weight: 800; letter-spacing: .3px; }
    .airo-partners span.sep { margin: 0 6px; color: var(--grey-line); }

    /* ---------- visual / SVG card ---------- */
    .airo-hero__visual {
      position: relative;
      opacity: 0;
      max-height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .slick-active .airo-hero__visual {
      animation: airoUp .9s ease forwards;
      animation-delay: .35s;
    }
    .airo-visual-card {
      position: relative;
      background: var(--white);
      border: 1px solid var(--grey-line);
      border-radius: 26px;
      padding: clamp(10px, 1.5vw, 16px);
      box-shadow: 0 30px 60px -30px rgba(1,0,74,0.22);
      max-height: calc(100vh - 170px); /* Allowed it to grow taller */
      width: 100%; /* Force card to fill the wider 1.35fr column */
      max-width: 680px; /* Allowed it to be wider */
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .airo-visual-card svg,
    .airo-visual-card img {
      max-width: 100%;
      max-height: 100%;
      width: auto;
      height: auto;
      display: block;
      object-fit: contain;
    }

    .airo-live-tag {
      position: absolute; left: 50%; bottom: -18px; transform: translateX(-50%);
      display: inline-flex; align-items: center; gap: 8px;
      background: var(--blue); color: var(--white);
      font-size: 12.5px; font-weight: 700; letter-spacing: .3px;
      padding: 9px 16px; border-radius: 100px;
      box-shadow: 0 12px 24px -10px rgba(1,0,74,0.45);
      white-space: nowrap;
    }
    .airo-live-tag .dot {
      width: 7px; height: 7px; border-radius: 50%; background: var(--red);
      box-shadow: 0 0 0 0 rgba(255,0,0,.6); animation: airoPulseDot 2.2s ease-out infinite;
    }

    /* ---------- keyframes ---------- */
    @keyframes airoUp { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes airoLineUp { to { opacity: 1; transform: translateY(0); } }
    @keyframes airoDraw { to { width: 68px; } }
    @keyframes airoShimmer { to { background-position: -220% 0; } }
    @keyframes airoPulseDot {
      0%   { box-shadow: 0 0 0 0 rgba(255,0,0,.55); }
      70%  { box-shadow: 0 0 0 9px rgba(255,0,0,0); }
      100% { box-shadow: 0 0 0 0 rgba(255,0,0,0); }
    }

    /* headline: soft light passing over the whole line, endlessly */
    @keyframes airoHeadlineSheen {
      0%   { left: -35%; }
      45%  { left: 130%; }
      100% { left: 130%; }
    }
    /* divider bar: slow breathing glow + a streak that runs the length of the bar */
    @keyframes airoBarBreathe {
      0%, 100% { box-shadow: 0 0 0 rgba(255,0,0,0); }
      50%      { box-shadow: 0 0 12px rgba(255,0,0,.55); }
    }
    @keyframes airoBarStreak {
      0%   { left: -60%; }
      55%  { left: 100%; }
      100% { left: 100%; }
    }
    /* badge: gentle breathing red glow around the whole pill */
    @keyframes airoBadgeGlow {
      0%, 100% { box-shadow: 0 6px 20px -8px rgba(255,0,0,0.25); }
      50%      { box-shadow: 0 10px 28px -6px rgba(255,0,0,0.45); }
    }
    /* "Triniti": the gradient itself keeps traveling through the letters */
    @keyframes airoTrinitiShine {
      0%, 100% { background-position: 0% 50%; }
      50%      { background-position: 100% 50%; }
    }
    /* stat chips: one at a time "wakes up," looping — a quiet echo of the arc's own reveal cycle */
    @keyframes airoStatActivate {
      0%, 74%, 100% { background: #F6F5EF; border-color: var(--grey-line); color: var(--blue); box-shadow: none; transform: translateY(0); }
      8%             { background: #FFF0EE; border-color: var(--red); color: var(--red); box-shadow: 0 6px 16px -8px rgba(255,0,0,.4); transform: translateY(-2px); }
      20%            { background: #F6F5EF; border-color: var(--grey-line); color: var(--blue); box-shadow: none; transform: translateY(0); }
    }
    /* CTA button: a light sweeps through it every few seconds, then rests */
    @keyframes airoCtaSheen {
      0%   { left: -60%; }
      35%  { left: 120%; }
      100% { left: 120%; }
    }

    /* ---------- Slick dots customization ---------- */
    .hero-main-carousel {
      position: relative;
    }
    .hero-main-carousel .slick-dots {
      position: absolute;
      bottom: 24px;
      left: 0 !important;
      right: 0 !important;
      width: 100% !important;
      display: flex !important;
      justify-content: center !important;
      align-items: center !important;
      gap: 12px;
      list-style: none;
      padding: 0;
      margin: 0;
      z-index: 10;
      transform: none !important;
    }
    .hero-main-carousel .slick-dots li {
      margin: 0;
      padding: 0;
    }
    .hero-main-carousel .slick-dots li button {
      font-size: 0;
      line-height: 0;
      display: block;
      width: 10px;
      height: 10px;
      padding: 0;
      cursor: pointer;
      color: transparent;
      border: 0;
      outline: none;
      background: rgba(1, 0, 74, 0.25);
      border-radius: 50%;
      transition: background-color 0.3s, transform 0.3s;
    }
    .hero-main-carousel .slick-dots li button::before {
      display: none !important;
    }
    .hero-main-carousel .slick-dots li.slick-active button {
      background: #FF0000;
      transform: scale(1.2);
    }

    /* ---------- Slide 2 Specific Styling ---------- */
    .airo-hero--package {
      background-image: url('/wp-content/uploads/2026/07/banner2.jpeg');
      background-size: cover;
      background-position: center right;
      background-repeat: no-repeat;
      color: #FFFFFF;
    }
    @media (min-width: 768px) {
      .airo-hero--package .airo-hero__content {
        padding-top: 75px;
      }
    }
    .airo-hero--package .airo-headline {
      color: #FFFFFF;
      font-family: 'Inter', sans-serif !important;
      font-weight: 800 !important;
    }
    .airo-hero--package .accent-package {
      color: #FF0000 !important;
      background: none;
      -webkit-background-clip: unset;
      background-clip: unset;
      -webkit-text-fill-color: initial;
    }
    .airo-hero--package .airo-subhead {
      color: rgba(255, 255, 255, 0.85);
    }
    .airo-hero--package .airo-divider {
      background: #FF0000;
    }

    @media (max-width: 767px) {
      .airo-hero--package {
        background-image: url('/wp-content/uploads/2026/07/banner2.jpeg');
        background-size: cover;
        background-position: center right;
      }
      .airo-hero--package .airo-hero__visual {
        display: none !important;
      }
    }

    /* ---------- Slide 3 Specific Styling (Proud to Be) ---------- */
    .airo-hero--proud {
      background-image: url('/wp-content/uploads/2026/04/Proud_to_be_a__14___1__no_logo.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    @media (max-width: 1024px) {
      .airo-hero.airo-hero--proud {
        height: 420px !important;
        min-height: 420px !important;
        max-height: 420px !important;
        background-image: url('/wp-content/uploads/2026/04/Proud_to_be_a__14___1__no_logo.png') !important;
        background-size: cover !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        background-color: #ffffff !important;
        padding: 0 !important;
      }
    }
    @media (max-width: 767px) {
      .hero-main-carousel {
        margin-top: 70px !important; /* Push carousel below sticky nav */
      }
      .hero-main-carousel .slick-dots {
        bottom: 2px !important;
      }
    }

    /* ---------- responsive ---------- */
    @media (max-width: 767px) {

      /* === Slide 1 Mobile: Sequential — Diagram first, then Text === */

      /* Phase 1 (default): show diagram only, hide text */
		.airo-visual-card {
			margin-top:-4px !important;
		}
		. airo-cta {
			margin-top:-12px !important;
		}
/* 		.exp-airo-cta-row {
			margin-top:-12px !important;

		} */
      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud) .airo-hero__grid {
        grid-template-columns: 1fr;
        display: flex !important;
        flex-direction: column;
        gap: 0;
      }
      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud) .airo-hero__visual {
        display: block !important;
        opacity: 1;
        transition: opacity 0.5s ease;
        flex-shrink: 0;
        margin-bottom: 0;
      }
      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud) .airo-visual-card {
        max-height: 240px !important;
        width: 100%;
        max-width: 100%;
        padding: 10px;
        border-radius: 18px;
      }
      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud) .airo-hero__content {
        opacity: 0;
        max-height: 0;
        overflow: hidden;
        transition: opacity 0.5s ease, max-height 0.5s ease;
        pointer-events: none;
      }

      /* Phase 2 (.show-content): hide diagram, reveal text */
      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud).show-content .airo-hero__visual {
        display: none !important;
      }
      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud).show-content .airo-hero__content {
        opacity: 1;
        max-height: 1200px;
        pointer-events: auto;
        transition: opacity 0.5s ease, max-height 0.6s ease;
      }
      /* Slide 1 mobile: set height to 220px to match other slides */
      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud) {
        height: 220px !important;
        min-height: 220px !important;
        max-height: 220px !important;
        overflow: hidden !important;
        padding: 12px clamp(15px, 4vw, 20px) 10px !important;
      }

      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud) .airo-visual-card {
        max-height: 185px !important;
        padding: 0 !important;
        border: none !important;
        box-shadow: none !important;
        background: transparent !important;
      }

      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud) .airo-hero__content {
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        align-items: flex-start !important;
        text-align: left !important;
        height: 100% !important;
        width: 100% !important;
      }

      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud) .airo-headline {
        font-size: clamp(1.15rem, 5.5vw, 1.4rem) !important;
        line-height: 1.1 !important;
        margin-top: 0 !important;
        text-align: left !important;
        width: 100% !important;
      }

      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud) .airo-divider {
        margin-top: 6px !important;
        height: 2px !important;
      }

      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud) .airo-subhead {
        font-size: clamp(0.72rem, 2.8vw, 0.82rem) !important;
        margin-top: 6px !important;
        line-height: 1.3 !important;
        text-align: left !important;
        width: 100% !important;
      }

      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud) .airo-badge {
        font-size: 0.65rem !important;
        padding: 4px 8px !important;
        margin-top: 6px !important;
        margin-bottom: 0 !important;
        text-align: left !important;
        justify-content: flex-start !important;
        width: auto !important;
        max-width: 100% !important;
      }

      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud) .airo-stats {
        display: flex !important;
        flex-wrap: wrap !important;
        gap: 4px !important;
        margin-top: 10px !important;
        margin-bottom: 0 !important;
        padding: 0 !important;
        margin-left: 0 !important;
        width: 100% !important;
        justify-content: flex-start !important;
      }

      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud) .airo-stats li {
        font-size: 9.5px !important;
        padding: 3px 6px !important;
        width: fit-content !important;
        flex: 0 0 auto !important;
        text-align: center !important;
      }

      /* Sequential animation starting from "100 Agents" only after content is shown */
      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud):not(.show-content) .airo-stats li {
        animation: none !important;
      }
      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud).show-content .airo-stats li {
        animation: airoStatActivate 6s ease-in-out infinite !important;
      }
      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud).show-content .airo-stats li:nth-child(1) { animation-delay: 0.6s !important; }
      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud).show-content .airo-stats li:nth-child(2) { animation-delay: 2.1s !important; }
      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud).show-content .airo-stats li:nth-child(3) { animation-delay: 3.6s !important; }
      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud).show-content .airo-stats li:nth-child(4) { animation-delay: 5.1s !important; }

      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud) .airo-cta-row {
        margin-top: 10px !important;
        margin-bottom: 0 !important;
        padding: 0 !important;
        margin-left: 0 !important;
        justify-content: flex-start !important;
        width: 100% !important;
      }

      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud) .airo-cta {
        font-size: 0.66rem !important;
        padding: 6px 12px !important;
        border-radius: 5px !important;
        white-space: nowrap !important;
        width: auto !important;
        max-width: none !important;
        display: inline-flex !important;
        justify-content: flex-start !important;
        gap: 3px;
      }

      .airo-hero:not(.airo-hero--package):not(.airo-hero--proud) .airo-cta svg {
        width: 12px !important;
        height: 12px !important;
        flex-shrink: 0;
      }

      /* General mobile styles — override all desktop height/margin */
      .airo-hero {
        margin-top: 0 !important;       /* Override desktop 85px margin */
        height: auto !important;        /* Override calc(100vh - 195px) */
        min-height: unset !important;
        max-height: unset !important;
        padding: 65px clamp(15px, 4vw, 24px) 55px !important;
      }
      .airo-hero__grid {
        grid-template-columns: 1fr;
        gap: 12px;
      }
      .airo-headline {
        font-size: clamp(1.6rem, 7vw, 2.1rem) !important;
        line-height: 1.1;
        margin-top: 4px;
      }
      .airo-subhead {
        font-size: clamp(0.9rem, 4vw, 1rem) !important;
        margin-top: 6px;
      }
      .airo-badge {
        font-size: 0.9rem !important;
        padding: 7px 14px;
        margin-top: 8px;
        max-width: 100%;
        box-sizing: border-box;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        text-align: center;
      }
      .airo-stats {
        display: grid !important;
        grid-template-columns: 1fr 1fr !important;
        gap: 8px !important;
        width: 100%;
        margin-top: 8px;
        opacity: 1 !important;
        padding: 0 !important;
        margin-left: 0 !important;
      }
      .airo-stats li {
        font-size: 12px !important;
        padding: 6px 8px;
        text-align: center;
        margin: 0 !important;
      }
      .airo-cta-row {
        margin-top: 14px;
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
        padding: 0 !important;
        margin-left: 0 !important;
      }
      .airo-cta {
        font-size: 1rem !important;
        padding: 12px 24px;
        width: 100%;
        max-width: 290px;
        display: inline-flex;
        justify-content: center;
        box-sizing: border-box;
      }
      .airo-live-tag {
        position: static;
        transform: none;
        margin: 8px auto 4px;
        width: fit-content;
        font-size: 11px;
        padding: 6px 12px;
      }

      /* Slide 2 mobile: same fixed height as Slide 3 (220px) */
      .airo-hero--package {
        height: 220px !important;
        min-height: 220px !important;
        max-height: 220px !important;
        overflow: hidden !important;
        display: flex !important;
        align-items: center !important;
        padding: 22px clamp(15px, 4vw, 22px) 22px !important;
      }
      .airo-hero--package .airo-hero__grid {
        grid-template-columns: 1fr;
        gap: 8px;
        width: 100%;
        max-width: 100%;
        align-items: start;
      }
      .airo-hero--package .airo-hero__visual {
        display: none !important;
      }
      .airo-hero--package .airo-headline {
        font-size: clamp(1.15rem, 5.5vw, 1.45rem) !important;
        line-height: 1.1;
        margin-top: 0;
        letter-spacing: -0.3px;
      }
      .airo-hero--package .airo-divider {
        width: 38px !important;
        height: 2px !important;
        margin-top: 6px;
      }
      .airo-hero--package .airo-subhead {
        font-size: clamp(0.74rem, 3vw, 0.88rem) !important;
        max-width: 100%;
        margin-top: 6px;
        line-height: 1.4;
      }
      .slick-active.airo-hero--package .airo-subhead {
        animation-delay: 0.4s !important;
      }
      .slick-active.airo-hero--package .airo-cta-row {
        animation-delay: 0.7s !important;
      }
      .airo-hero--package .airo-cta-row {
        margin-top: 8px;
        flex-direction: row !important; /* Keep button inline — auto width */
        align-items: center;
        gap: 0;
      }
      .airo-hero--package .airo-cta {
        width: auto !important;      /* Auto width so text shows fully */
        max-width: unset !important; /* Remove inherited full-width constraint */
        padding: 6px 12px !important;
        font-size: 0.66rem !important;
        letter-spacing: 0.2px;
        border-radius: 5px !important;
        display: inline-flex !important;
        align-items: center;
        gap: 6px;
      }

      /* Slide 3 mobile: proud background image, matching Slide 1 and 2 (220px) */
      .airo-hero.airo-hero--proud {
        height: 220px !important;
        min-height: 220px !important;
        max-height: 220px !important;
        padding: 0 !important;
        background-image: url('/wp-content/uploads/2026/04/Proud_to_be_a__14___1__no_logo.png') !important;
        background-size: cover !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        background-color: #ffffff !important;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .airo-hero *, .airo-hero *::before, .airo-hero *::after { animation: none !important; opacity: 1 !important; transform: none !important; }
    }
  </style>

  <div class="airo-hero__bg">
    <span class="glow-red"></span>
    <span class="glow-blue"></span>
    <span class="dotgrid"></span>
  </div>

  <div class="airo-hero__grid">
    <div class="airo-hero__content">

      <h1 class="airo-headline">
        <span class="line"><span>Delivering <span class="accent">AI</span></span></span>
        <span class="line"><span>Through <span class="accent">AI</span></span></span>
      </h1>
      <span class="airo-divider"></span>

      <p class="airo-subhead">World&rsquo;s <span class="spot">fastest builder</span> of AI agents in bulk, unveils:</p>

      <div class="airo-badge">
        Airo&rsquo;s <b><span class="r">agenTriniti</span><sup>SM</sup></b> Package
      </div>

      <ul class="airo-stats">
        <li>100 Agents</li>
        <li>6 Months</li>
        <li>One Fixed Fee</li>
        <li>No Surprises</li>
      </ul>

      <div class="airo-cta-row exp-airo-cta-row">
        <a class="airo-cta" href="https://calendly.com/airodigitallabs/30min?guests=sayak.das%40airodigitallabs.com&month=2026-06" target="_blank">
          Schedule Your agenTriniti Demo Today
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="#FFFFFF" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>
    </div>

    <div class="airo-hero__visual">
      <div class="airo-visual-card">
        <img src="/wp-content/uploads/2026/07/trinity_arc_static_hires.png" alt="Airo agenTriniti Arc" />
      </div>
    </div>
  </div>
</section>


  <!-- Slide 2: Choose Your Package -->
  <section class="airo-hero airo-hero--package" aria-label="Choose Your Package hero">
    <div class="airo-hero__grid">
      <div class="airo-hero__content">
        <h1 class="airo-headline">
          <span class="line"><span>CHOOSE YOUR</span></span>
          <span class="line"><span><span class="accent-package">PACKAGE</span></span></span>
        </h1>
        <span class="airo-divider"></span>
        <p class="airo-subhead">Explore our transparent, flat-rate tiers designed to scale with your enterprise.</p>
        <div class="airo-cta-row exp-airo-cta-row">
          <a class="airo-cta exp-airo-cta" href="/capabilities/airos-agentriniti-package/#choose-package">
            Explore Packages
          </a>
        </div>
      </div>
      <div class="airo-hero__visual">
        <!-- Empty to allow background podiums/glow columns to show clearly on the right -->
      </div>
    </div>
  </section>

  <!-- Slide 3: Proud to Be -->
  <section class="airo-hero airo-hero--proud" aria-label="Proud to be hero">
    <!-- Empty banner to showcase the background image -->
  </section>
</div>


<!-- ── CLIENT LOGO CAROUSEL ── -->
<section class="hero-client-logos-sec" style="background: #fff; border-bottom: 1px solid var(--border); overflow: hidden;">
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
                "/wp-content/uploads/2026/06/Microsoft.svg",
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

<!-- ── NEW VIDEO SECTION ── -->
<section class="new-video-sec" style="padding: 20px 0; background-color: var(--off);">
	<div class="container" style="padding-left: 15px !important; padding-right: 15px !important;">
		<div class="ecosystem-header" style="margin-bottom: 20px; text-align: center;">
			<h2 class="intro-headline" style="font-size: clamp(32px, 4vw, 48px); padding-bottom: 0; margin-bottom: 15px; text-align: center !important; text-transform: none; letter-spacing: normal !important; word-spacing: normal !important; line-height: 1.3 !important;">Airo's <span class="highlight" style="position: relative; display: inline-block; color: var(--red, #ff0000);"><span style="visibility: hidden;">agenTriniti<sup style="font-size: 0.28em; font-weight: 500; position: relative; top: -1.5em; line-height: 0; vertical-align: baseline;">SM</sup></span><span id="typewriter-agenTriniti-video" style="position: absolute; left: 0; top: 0; white-space: nowrap;"></span></span> Package</h2>
			<p class="eyebrow" style="justify-content: center; color: var(--red); margin-bottom: 15px;">AI Use Case Lifecycle Management</p>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<!-- USING NATIVE VIDEO TAG TO AVOID GOOGLE DRIVE IFRAME OVERLAY ISSUES ON MOBILE -->
				<video style="width: 100%; max-width: 100%; aspect-ratio: 16/9; border-radius: 8px; box-shadow: 0 12px 40px rgba(0,0,0,0.15); display: inline-block; background-color: #000;" id="new-player-2" controls playsinline preload="metadata" muted>
					<source src="/wp-content/uploads/2026/06/Agentic-AI-Trinity-Package.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
		</div>
	</div>
</section>

<!-- ── INTRO ── -->
<div class="s-intro">
  <div class="s-intro-left">
<!-- 	<div class="eyebrow">Airo’s Agentic AI Trinity<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup>Package</div> -->
    <h1 class="intro-headline">
      You manage <br> the use case.<span class="r">We manage the AI.</span>
    </h1>
  </div>
  <div class="s-intro-right">
<!-- 	  <h3><b>
		  An AI Use Case Lifecycle Management System for continuous enterprise execution.</b>
	  </h3> -->
    <p class="intro-body">
      Airo’s agenTriniti<sup style="font-size: 0.45em; position: relative; top: -1.5em; line-height: 0; vertical-align: baseline; font-weight: 500;">SM</sup> Package integrates deployment, governance, and continuous AI evolution into one operational system designed for enterprise scale.<br>Built to orchestrate AI across enterprise workflows, legacy systems, and agent ecosystems while eliminating fragmented delivery, vendor lock-in, and operational complexity.
    </p>

	  <div style="display: flex; justify-content: center; margin-top: 20px;">
  <span class="s2-box">
    <span class="s2-white">Experimental AI</span>
    <span class="s2-arrow">→</span>
    <span class="s2-red">Operational Intelligence</span>
  </span>
</div>
	  <div class="trinity-ctas">
  <a href="/capabilities/airos-agentriniti-package/"  class="trinity-btn-primary text-wrap text-center" style="white-space: normal; height: auto; line-height: 1.4; padding-top: 10px; padding-bottom: 10px; text-transform: none;">
	       <span class="d-none d-md-inline">Learn More About agenTriniti<sup style="font-size: 0.50em; position: relative; top: -1.5em; line-height: 0; vertical-align: baseline;">SM</sup> Package</span>
	  <span class="d-md-none">Learn More About agenTriniti<sup style="font-size: 0.35em; position: relative; top: -1.5em; line-height: 0; vertical-align: baseline;">SM</sup> Package</span>
  </a>
</div>

  </div>
</div>

<!-- ── STATS BAND ── -->
<!-- <div class="s-stats"> -->
<!--   <div class="stats-label-col">
    <span class="stats-label-text">Live Deployment Outcomes</span>
  </div> -->
<!--   <div class="stats-content">
    <div class="stat-block">
      <p class="stat-quote">Outcomes measured across live enterprise deployments.</p>
    </div>
    <div class="stat-block">
      <div class="stat-num">75<span class="stat-unit">%</span></div>
      <div class="stat-lbl">Faster to Live</div>
    </div>
    <div class="stat-block">
      <div class="stat-num">20<span class="stat-unit">×</span></div>
      <div class="stat-lbl">Productivity</div>
    </div>
    <div class="stat-block">
      <div class="stat-num" style="font-size:30px;line-height:1.2;">Built<br>to Scale</div>
    </div>
  </div>
</div> -->
<!-- <section class="s-trinity">
  <div class="container">
    <div class="trinity-header">
	<div class="eyebrow">The System</div>
    <h2 class="intro-headline">
      Airo's Agentic AI Trinity<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> Package
    </h2>
	<h3>Airo's Agentic AI Trinity<sup style="font-size: 0.35em; position: relative; top: -1.5em; line-height: 0; vertical-align: baseline;">SM</sup> Package is built for AI Use Case Lifecycle Management designed to operationalize Enterprise Agentic AI solutions.</h3>
  </div> -->
<!--   <div class="s-intro-right">     -->
<!--     <p class="intro-body">
      Enterprise AI cannot operate through isolated deployments, fragmented governance, or disconnected execution models. It requires systems that continuously build, govern, operate, and evolve intelligence across the enterprise.
    </p>
	<p class="intro-body">
		Airo's Agentic AI Trinity<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> Package was designed for this operational reality.
    </p>
	  <div class="s2-quote-navy">
	  <p class="s2-quote-headline">
		<span class="s2-quote-white">You manage the use case. </span><span class="s2-quote-red">We manage the AI.	</span>
	  </p>
	</div> -->
<!-- 		<div class="eyebrow"></div>
      <h2 class="trinity-h1">Airo's Agentic AI Trinity<sup style="font-size: 0.35em; position: relative; top: -1.5em; line-height: 0; vertical-align: baseline;">SM</sup> Package</h2>
      <p class="trinity-h2">Airo's Agentic AI Trinity<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> Package is built for AI Use Case Lifecycle Management designed to operationalize Enterprise Agentic AI solutions.</p>
      <p class="trinity-copy">Enterprise AI cannot operate through isolated deployments, fragmented governance, or disconnected execution models. It requires systems that continuously build, govern, operate, and evolve intelligence across the enterprise. Airo's Agentic AI Trinity<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> Package was designed for this operational reality.</p>
    </div>

	  <div class="trinity-statement">
      <p class="trinity-statement-text">You manage the use case. <strong>We manage the AI.</strong></p>
    </div> -->

<!--     <div class="trinity-ctas">
      <a href="/services/advanced-ai-services/agentic-ai-trinity-model/" class="trinity-btn-primary">
        Explore Airo's Agentic AI Trinity<sup style="font-size: 0.6em; position: relative; top: -1.2em; line-height: 0; vertical-align: baseline;">SM</sup> Package
        <span>→</span>
      </a>
      <a href="https://calendly.com/airodigitallabs/30min?guests=sayak.das%40airodigitallabs.com&month=2026-05" target="_blank" class="trinity-btn-outline">
        Request a Private Briefing
        <span>→</span>
      </a>
    </div> -->

<!--   </div>
</section> -->

<!-- ══════════════════════════════
   SECTION 04 — ECOSYSTEM
══════════════════════════════ -->
<section class="s-ecosystem">
  <div class="container">
 	<p class="eyebrow">The Ecosystem</p>
    <div class="ecosystem-header">
      <h2 class="ecosystem-h1">Orchestrated across your existing technology stack.</h2>
      <p class="ecosystem-copy">From ERP and CRM to cloud, data, and AI infrastructure, Airo connects where your enterprise already operates.</p>
    </div>

    <div class="eco-logo-strip">

  <div class="eco-logo-item">
    <img src="/wp-content/uploads/2026/05/openai.png" alt="OpenAI" loading="lazy">
  </div>

  <div class="eco-logo-item">
    <img src="/wp-content/uploads/2026/05/anthropic-2.png" alt="Anthropic" loading="lazy">
  </div>

  <div class="eco-logo-item">
    <img src="/wp-content/uploads/2026/05/vertexai-color.png" alt="Google" loading="lazy">
  </div>

  <div class="eco-logo-item">
    <img src="/wp-content/uploads/2026/05/copilot-color.png" alt="Microsoft" loading="lazy">
  </div>

  <div class="eco-logo-item">
    <img src="/wp-content/uploads/2026/05/bedrock-color.png" alt="Amazon" loading="lazy">
  </div>

  <div class="eco-logo-item">
    <img src="/wp-content/uploads/2026/05/cursor-3-1.png" alt="Cursor" loading="lazy">
  </div>

</div>

  </div>
</section>
  <!-- ── TWO PATHS HEADER ── -->
<!--   <div class="container">
    <div class="paths-header">
      <p class="section-tag">Our Frameworks</p>
      <h3 class="section-title">Two Paths Forward<span class="dot-blue">.</span> Both Built by Airo<span class="dot-blue">.</span></h3>
    </div>
  </div> -->

  <!-- ── PRODUCT CARDS ── -->
<!--   <div class="container">
    <div class="cards-grid">
	 -->
      <!-- Card 1 -->
<!--       <div class="product-card">
        <div class="card-number">01</div>
<!--         <div class="card-badge badge-red">Framework</div> -->
<!--         <h4 class="card-title">Agentic AI Trinity Model<span class="small-copy">SM</span></h4>
        <p class="card-subtitle">AI Use Case Lifecycle Management</p>
        <div class="card-divider div-red"></div>
        <p class="card-desc">The industry's first unified framework to move enterprise AI from scattered, ungoverned pilots to structured, scalable execution.</p>
        <div class="card-highlight highlight-red">Governed, compliant, and auditable — from day one.</div>
        <a href="/services/advanced-ai-services/agentic-ai-trinity-model/" class="card-cta cta-red">
          Explore the Agentic AI Trinity Model
          <span class="cta-arrow">→</span>
        </a>
      </div> -->


      <!-- Card 2 -->
<!--       <div class="product-card">
        <div class="card-number">02</div> -->
<!--         <div class="card-badge badge-blue">Delivery Engine</div> -->
<!--         <h4 class="card-title">AiroCore AI<span class="small-copy">©</span></h4>
        <p class="card-subtitle">The AI-DLC Delivery Engine</p>
        <div class="card-divider div-blue"></div>
        <p class="card-desc">A proprietary AI-led Development Lifecycle (AI-DLC) engine that automates and accelerates project delivery across any technology stack or solution type.</p>
        <div class="card-highlight highlight-blue">From context to production in weeks, not months.</div>
        <a href="/services/advanced-ai-services/airocore-ai-the-delivery-engine/" class="card-cta cta-blue">
          Explore AiroCore AI
          <span class="cta-arrow">→</span>
        </a>
      </div>

    </div> -->

    <!-- ── CLOSING CTA ── -->
<!--     <div class="closing-section">
      <div class="closing-left">
        <div class="closing-eyebrow">Private Briefing</div>
        <h3 class="closing-title">See what your first governed AI system looks like in <span>8 weeks.</span></h3>
		  <span  class="briefing-cta-text-red">What you’ll get:</span>
        <ul class="deliverables">
          <li>A direct assessment of where your delivery model is failing</li>
          <li>A mapped path from pilots to production systems</li>
        </ul>
      </div>
      <div class="closing-right">
        <a href="https://calendly.com/airodigitallabs/30min?guests=sayak.das%40airodigitallabs.com&month=2026-05" target="_blank"  class="briefing-cta">
          <span class="briefing-cta-label">Get Started</span>
          <span class="briefing-cta-text">Request a Private Briefing</span>
        </a>
      </div>
    </div>
  </div> -->







<?php if ($ai_services_section['services'] || (!empty($ai_partners_section) && !empty($ai_partners_section['services'])) || $premium_enterprise_application['services']) { ?>
<section class="services-sec" id="choose-pkg-sec">
	<div id="container" class="container">
		<div class="lines">
			<!-- Tab Titles -->
			<ul class="services-tabs">
				<?php if (!empty($ai_services_section)) { ?>
					<li class="ai-tab-title ai-active" data-tab="advanced-ai">
						<div class="services-title">
							<h2>Capabilities</h2>
						</div>
					</li>
				<?php } ?>
				<?php if (!empty($ai_partners_section) && !empty($ai_partners_section['services'])) { ?>
					<li class="ai-tab-title <?php if (empty($ai_services_section)) echo 'ai-active'; ?>" data-tab="partners">
						<div class="services-title">
							<h2>Partners</h2>
						</div>
					</li>
				<?php } ?>
				<?php if (!empty($premium_enterprise_application)) { ?>
					<li class="ai-tab-title <?php if (empty($ai_services_section) && empty($ai_partners_section['services'])) echo 'ai-active'; ?>" data-tab="premium_enterprise">
						<div class="services-title">
							<h2>Partners</h2>
						</div>
					</li>
				<?php } ?>

				<?php if (false) { // Disabled sections kept intact below ?>
					<?php if (!empty($cloud_services_section)) { ?>
						<li class="ai-tab-title" data-tab="foundational-ai">
							<div class="services-title">
								<h2>Cloud and Infrastructure</h2>
							</div>
						</li>
					<?php } ?>
					<?php if (!empty($platform_and_accelerators)) { ?>
						<li class="ai-tab-title" data-tab="platform_and_accelerators">
							<div class="services-title">
								<h2>Platforms</h2>
							</div>
						</li>
					<?php } ?>
				<?php } ?>
			</ul>
		</div>

		<!-- Tab Contents -->
		<div class="ai-tab-contents">
			<?php if (!empty($ai_services_section)) { ?>
				<div class="ai-tab-content ai-active" id="advanced-ai">
					<div class="row services-main">
						<?php foreach ($ai_services_section['services'] as $service) { ?>
							<div class="col-md-6 col-lg-4 col-sm-6 ">
								<div class="services-inner">
									<img src="<?php echo $service['icon']['url']; ?>" alt="<?php echo $service['title']; ?>" loading="lazy">
									<h3><?php echo $service['title']; ?></h3>
									<div><?php echo $service['content']; ?></div>
									<a href="<?php echo $service['link']; ?>">
										<div class="arrow-link">
											<svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314" viewBox="0 0 29.657 11.314" class="arrow-hover">
												<g transform="translate(-125.992 -0.208)">
													<line x2="24" transform="translate(125.992 5.562)" fill="none" stroke="#fff" stroke-width="1"/>
													<path d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z" transform="translate(149.988 0.212) rotate(45)" fill="#fff"/>
												</g>
											</svg>
											<svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314" viewBox="0 0 29.657 11.314" class="arrow-red">
												<g transform="translate(-125.992 -0.208)">
													<line x2="24" transform="translate(125.992 5.562)" fill="none" stroke="red" stroke-width="1"/>
													<path d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z" transform="translate(149.988 0.212) rotate(45)" fill="red"/>
												</g>
											</svg>
										</div>
									</a>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php } ?>

			<?php if (!empty($ai_partners_section) && !empty($ai_partners_section['services'])) { ?>
				<div class="ai-tab-content <?php if (empty($ai_services_section)) echo 'ai-active'; ?>" id="partners">
					<div class="row services-main">
						<?php foreach ($ai_partners_section['services'] as $service) { ?>
							<div class="col-md-6 col-lg-4 col-sm-6 ">
								<div class="services-inner">
									<img src="<?php echo $service['icon']['url']; ?>" alt="<?php echo $service['title']; ?>" loading="lazy">
									<h3><?php echo $service['title']; ?></h3>
									<div><?php echo $service['content']; ?></div>
									<?php if (!empty($service['link'])) { ?>
										<a href="<?php echo $service['link']; ?>">
											<div class="arrow-link">
												<svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314" viewBox="0 0 29.657 11.314" class="arrow-hover">
													<g transform="translate(-125.992 -0.208)">
														<line x2="24" transform="translate(125.992 5.562)" fill="none" stroke="#fff" stroke-width="1"/>
														<path d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z" transform="translate(149.988 0.212) rotate(45)" fill="#fff"/>
													</g>
												</svg>
												<svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314" viewBox="0 0 29.657 11.314" class="arrow-red">
													<g transform="translate(-125.992 -0.208)">
														<line x2="24" transform="translate(125.992 5.562)" fill="none" stroke="red" stroke-width="1"/>
														<path d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z" transform="translate(149.988 0.212) rotate(45)" fill="red"/>
													</g>
												</svg>
											</div>
										</a>
									<?php } ?>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php } ?>

			<?php if (!empty($premium_enterprise_application)) { ?>
				<div class="ai-tab-content <?php if (empty($ai_services_section) && empty($ai_partners_section['services'])) echo 'ai-active'; ?>" id="premium_enterprise">
					<div class="row services-main">
						<?php foreach ($premium_enterprise_application['services'] as $service) { ?>
							<div class="col-md-6 col-lg-4 col-sm-6 ">
								<div class="services-inner">
									<img src="<?php echo $service['icon']['url']; ?>" alt="<?php echo $service['title']; ?>" loading="lazy">
									<h3><?php echo $service['title']; ?></h3>
									<div><?php echo $service['content']; ?></div>
									<a href="<?php echo $service['link']; ?>">
										<div class="arrow-link">
											<svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314" viewBox="0 0 29.657 11.314" class="arrow-red">
												<g transform="translate(-125.992 -0.208)">
													<line x2="24" transform="translate(125.992 5.562)" fill="none" stroke="red" stroke-width="1"/>
													<path d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z" transform="translate(149.988 0.212) rotate(45)" fill="red"/>
												</g>
											</svg>
											<svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314" viewBox="0 0 29.657 11.314" class="arrow-hover">
												<g transform="translate(-125.992 -0.208)">
													<line x2="24" transform="translate(125.992 5.562)" fill="none" stroke="#fff" stroke-width="1"/>
													<path d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z" transform="translate(149.988 0.212) rotate(45)" fill="#fff"/>
												</g>
											</svg>
										</div>
									</a>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php } ?>

			<?php if (false) { // Disabled sections kept intact below ?>
				<?php if (!empty($cloud_services_section)) { ?>
					<div class="ai-tab-content" id="foundational-ai">
						<div class="row services-main">
							<?php foreach ($cloud_services_section['services'] as $service) { ?>
								<div class="col-md-6 col-lg-4 col-sm-6 ">
									<div class="services-inner">
										<img src="<?php echo $service['icon']['url']; ?>" alt="<?php echo $service['title']; ?>" loading="lazy">
										<h3><?php echo $service['title']; ?></h3>
										<div><?php echo $service['content']; ?></div>
										<a href="<?php echo $service['link']; ?>">
											<div class="arrow-link">
												<svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314" viewBox="0 0 29.657 11.314" class="arrow-red">
													<g transform="translate(-125.992 -0.208)">
														<line x2="24" transform="translate(125.992 5.562)" fill="none" stroke="red" stroke-width="1"/>
														<path d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z" transform="translate(149.988 0.212) rotate(45)" fill="red"/>
													</g>
												</svg>
												<svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314" viewBox="0 0 29.657 11.314" class="arrow-hover">
													<g transform="translate(-125.992 -0.208)">
														<line x2="24" transform="translate(125.992 5.562)" fill="none" stroke="#fff" stroke-width="1"/>
														<path d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z" transform="translate(149.988 0.212) rotate(45)" fill="#fff"/>
													</g>
												</svg>
											</div>
										</a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>

				<?php if (!empty($platform_and_accelerators)) { ?>
					<div class="ai-tab-content" id="platform_and_accelerators">
						<div class="row services-main">
							<?php foreach ($platform_and_accelerators['services'] as $service) { ?>
								<div class="col-md-6 col-lg-4 col-sm-6 ">
									<div class="services-inner">
										<img src="<?php echo $service['icon']['url']; ?>" alt="<?php echo $service['title']; ?>" loading="lazy">
										<h3><?php echo $service['title']; ?></h3>
										<div><?php echo $service['content']; ?></div>
										<a href="<?php echo $service['link']; ?>">
											<div class="arrow-link">
												<svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314" viewBox="0 0 29.657 11.314" class="arrow-red">
													<g transform="translate(-125.992 -0.208)">
														<line x2="24" transform="translate(125.992 5.562)" fill="none" stroke="red" stroke-width="1"/>
														<path d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z" transform="translate(149.988 0.212) rotate(45)" fill="red"/>
													</g>
												</svg>
												<svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314" viewBox="0 0 29.657 11.314" class="arrow-hover">
													<g transform="translate(-125.992 -0.208)">
														<line x2="24" transform="translate(125.992 5.562)" fill="none" stroke="#fff" stroke-width="1"/>
														<path d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z" transform="translate(149.988 0.212) rotate(45)" fill="#fff"/>
													</g>
												</svg>
											</div>
										</a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
		</div>

		<div class="sec-gap"></div>
	</div>
</section>
<?php } ?>

<?php if($ai_imapct_section['title']){ ?>
<section class="impact-sec">
	<div class="container">
		<div class="impact-title">
			<h2><?php echo $ai_imapct_section['title']; ?></h2>
		</div>
	</div>
	<div class="container-l-auto">
		<div class="impact-tab">
			<nav>
				<div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
					<?php foreach ($ai_imapct_section['tabs'] as $tab_key => $tab) { ?>
						<button class="nav-link <?php if($tab_key == 0){ echo 'active'; } ?>" id="nav-<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $tab['title']); ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $tab['title']); ?>" type="button" role="tab" aria-controls="nav-<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $tab['title']); ?>" aria-selected="true"><?php echo $tab['title']; ?> </button>
					<?php } ?>
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
				<?php foreach ($ai_imapct_section['tabs'] as $tab_key => $tab) { ?>
					<div class="tab-pane fade <?php if($tab_key == 0){ echo 'active show'; } ?>" id="nav-<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $tab['title']); ?>" role="tabpanel" aria-labelledby="nav-<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $tab['title']); ?>-tab">
						<?php $post_type = $tab['tabs_post']; ?>
						<div class="impact-slider">
							<?php if($post_type){ foreach ($post_type as $key => $postinner) { ?>
								<a href="<?php echo get_permalink($postinner->ID); ?>"><div class="impact-inner">
									<div class="impact-left">
										<div class="tags">
											<?php echo get_the_term_list( $postinner->ID, 'blog_tags', '', ' ' ); ?>
										</div>
										<h3 class="blog-title"><?php echo $postinner->post_title; ?></h3>
										<div class="line-before-text">
											<p><?php echo $postinner->post_excerpt; ?></p>
										</div>
									</div>
									<div class="impact-right">
										<div class="tag-on-img"><p><?php echo get_the_term_list( $postinner->ID, 'blog_services', '', ', ' ); ?></p></div>
										<img src="<?php echo get_the_post_thumbnail_url($postinner->ID); ?>" alt="<?php echo $postinner->post_title; ?>" loading="lazy">
									</div>
									</div></a>
							<?php } } ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<?php if($ai_race_section['title']){ ?>
<section class="fixed-sec">
	<div class="fixed-sec-inner" style="background-image: url('<?php echo $ai_race_section['background_image']['url'] ; ?>');">
		<div class="container-l-auto">
			<div class="fixed-sec-title">
				<h2><?php echo $ai_race_section['title']; ?></h2>
			</div>
			<div class="race-main" id="second">
				<div class="race-slider">
					<?php foreach ($ai_race_section['block'] as $key => $ai_block) { ?>
						<div class="race-inner">
							<span class="big-text"><?php echo $ai_block['big_letter']; ?></span>
							<hr />
							<div class="race-text">
								<h3><?php echo $ai_block['title']; ?></h3>
								<div><?php echo $ai_block['content']; ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>

		</div>
	</div>
</section>
<section class="fixed-secs">
	<div class="fixed-sec-inner" style="background-image: url('<?php echo $ai_race_section['background_image']['url'] ; ?>');">
		<div class="container-l-auto">
			<div class="fixed-sec-title">
				<h2><?php echo $ai_race_section['title']; ?></h2>
			</div>
			<div class="race-main" id="second">
				<div class="race-slider">
					<?php foreach ($ai_race_section['block'] as $key => $ai_block) { ?>
						<div class="race-inner active">
							<span class="big-text"><?php echo $ai_block['big_letter']; ?></span>
							<hr />
							<div class="race-text">
								<h3><?php echo $ai_block['title']; ?></h3>
								<div><?php echo $ai_block['content']; ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>
<?php if($ai_race_section['title']){ ?>
<section class="race-sec">
	<div class="race-sec-inner" style="background-image: url('<?php echo $ai_race_section['background_image']['url'] ; ?>');">
		<div class="container">
			<div class="fixed-sec-title">
				<h2><?php echo $ai_race_section['title']; ?></h2>
			</div>
			<div class="race-main">
				<div class="race-sliders">
					<?php foreach ($ai_race_section['block'] as $key => $value_block) { ?>
						<div class="race-inner">
							<span class="big-text"><?php echo $value_block['big_letter']; ?></span>
							<hr />
							<div class="race-text">
								<h3><?php echo $value_block['title']; ?></h3>
								<div><?php echo $value_block['content']; ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="my-slick-arrows color-white">
					<button class="race-prev slick-prev slick-arrow" style="transform: rotate(90deg);">
						<svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
						  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#fff"/>
						</svg>
					</button>
                	<button class="race-next slick-next slick-arrow" style="transform: rotate(-90deg);">
                		<svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
						  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#fff"/>
						</svg>
                	</button>
				</div>
			</div>
			<div class="lines"></div>
		</div>
	</div>
</section>
<?php } ?>

<?php if($ai_blog_section['title']){ ?>
<section class="blog-sec">
	<div class="container">
		<div class="lines"></div>
		<div class="blog-sec-title">
			<h2><?php echo $ai_blog_section['title']; ?></h2>
		</div>
		<div class="blog-main">
			<?php $blog = $ai_blog_section['select_blogs'];
				  $event = $ai_blog_section['select_event'];
			?>
			<?php foreach ($blog as $key => $blogs) { ?>
				<div class="blog-inner">
					<div class="tags">
						<?php echo get_the_term_list( $blogs->ID, 'blog_tags', '', ' ' ); ?>
					</div>
					<a href="<?php echo get_permalink($blogs->ID); ?>"><h3 class="blog-title"><?php echo $blogs->post_title; ?></h3></a>
					<p><?php echo $blogs->post_excerpt; ?></p>
					<img src="<?php echo get_the_post_thumbnail_url($blogs->ID); ?>" alt="<?php echo $blogs->post_title; ?>">
				</div>
			<?php } ?>
			<?php foreach ($event as $key => $events) { ?>
				<div class="blog-inner event-inner">
					<p class="events-tag">Events</p>
					<div class="tags">
						<?php echo get_the_term_list( $events->ID, 'events_tag', '', ' ' ); ?>
					</div>
					<h4 class="font-medium"><?php echo get_field('events_date',$events->ID); ?></h4>
					<a href="<?php echo get_permalink($events->ID); ?>"><h3 class="blog-title"><?php echo $events->post_title; ?></h3></a>
					<?php
					$event_desc = '';
					$eve = get_field('event_details', $events->ID);
					if ( ! empty( $eve['event_description'] ) ) {
						$event_desc = $eve['event_description'];
					}

					if ( empty( $event_desc ) ) {
						$event_desc = get_post_meta( $events->ID, 'event_details_event_description', true );
					}

					if ( empty( $event_desc ) ) {
						$event_desc = $events->post_excerpt;
					}

					if ( empty( $event_desc ) ) {
						$event_desc = $events->post_content;
					}

					$event_desc = wp_strip_all_tags( $event_desc );
					?>
					<?php if ( ! empty( $event_desc ) ) { ?>
						<p class="event-desc"><?php echo esc_html( $event_desc ); ?></p>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<?php if($ai_innovation_section['title']){ ?>
<section class="question-sec">
	<div class="container">
		<div class="question-inner">
			<img src="<?php echo $ai_innovation_section['image']; ?>" alt="<?php echo $ai_innovation_section['title']; ?>" class="desktop" loading="lazy">
			<?php if($ai_innovation_section['image_for_mobile']){ ?>
				<img src="<?php echo $ai_innovation_section['image_for_mobile']; ?>" alt="<?php echo $ai_innovation_section['title']; ?>" class="mobile" loading="lazy">
			<?php } else { ?>
				<img src="<?php echo $ai_innovation_section['image']; ?>" alt="<?php echo $ai_innovation_section['title']; ?>" class="mobile" loading="lazy">
			<?php } ?>
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-12 question-left">
					<h2><?php echo $ai_innovation_section['title']; ?></h2>
				</div>
				<div class="col-lg-7 col-md-6 col-sm-12 question-right">
					<div><?php echo $ai_innovation_section['content']; ?></div>
					<a href="<?php echo $ai_innovation_section['button_link']['url']; ?>" target="<?php echo $ai_innovation_section['button_link']['target']; ?>" class="mybtn"><?php echo $ai_innovation_section['button_text']; ?></a>
				</div>
			</div>
		</div>
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<?php if($ai_join_us_section['title']){ ?>
<section class="join-us-sec">
	<div class="container desktop">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0">
				<img src="<?php echo $ai_join_us_section['image']['url']; ?>" alt="<?php echo $ai_join_us_section['image']['alt']; ?>" class="img_width desktop" loading="lazy">
				<?php if($ai_join_us_section['image_for_mobile']){ ?>
					<img src="<?php echo $ai_join_us_section['image_for_mobile']['url']; ?>" alt="<?php echo $ai_join_us_section['image_for_mobile']['alt']; ?>" class="img_width mobile" loading="lazy">
				<?php } else { ?>
					<img src="<?php echo $ai_join_us_section['image']['url']; ?>" alt="<?php echo $ai_join_us_section['image']['alt']; ?>" class="img_width mobile" loading="lazy">
				<?php } ?>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0"></div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0">
				<div class="join-us-text">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 join-us-left">
							<h2><?php echo $ai_join_us_section['title']; ?></h2>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 join-us-right bl">
							<div><?php echo $ai_join_us_section['content']; ?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0 bl bb">
				<img src="<?php echo $ai_join_us_section['image_2']['url']; ?>" alt="<?php echo $ai_join_us_section['image_2']['alt']; ?>" class="img_width" loading="lazy">
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0 full-btn">
				<a href="<?php echo $ai_join_us_section['button_link']['url']; ?>" target="<?php echo $ai_join_us_section['button_link']['target']; ?>" class="mybtn"><?php echo $ai_join_us_section['button_text']; ?></a>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0 bb"></div>
		</div>
		<div class="lines"></div>
	</div>
	<div class="container mobile">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-9 p-0">
				<?php if($ai_join_us_section['image_for_mobile']){ ?>
					<img src="<?php echo $ai_join_us_section['image_for_mobile']['url']; ?>" alt="<?php echo $ai_join_us_section['image_for_mobile']['alt']; ?>" class="img_width mobile" loading="lazy">
				<?php } else { ?>
					<img src="<?php echo $ai_join_us_section['image']['url']; ?>" alt="<?php echo $ai_join_us_section['image']['alt']; ?>" class="img_width mobile" loading="lazy">
				<?php } ?>
			</div>
			<div class="col-sm-2 col-3 p-0 bt"></div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-9 p-0 bl bb">
				<div class="join-us-text">
					<h2><?php echo $ai_join_us_section['title']; ?></h2>
				</div>
			</div>
			<div class="col-sm-2 col-3 p-0 bl">
				<img src="<?php echo $ai_join_us_section['image_2']['url']; ?>" alt="<?php echo $ai_join_us_section['image_2']['alt']; ?>" class="img_width" loading="lazy">
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-9 p-0">
				<div class="join-us-text">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 join-us-right bl">
							<div><?php echo $ai_join_us_section['content']; ?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-2 col-3 p-0 bl bb">	</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0 full-btn">
				<a href="<?php echo $ai_join_us_section['button_link']['url']; ?>" target="<?php echo $ai_join_us_section['button_link']['target']; ?>" class="mybtn"><?php echo $ai_join_us_section['button_text']; ?></a>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0 bb"></div>
		</div>
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<?php if($ai_form_section['title']){ ?>
<section class="form-sec" id="contactForm">
	<div class="container">
		<div class="form-title">
			<h2><?php echo $ai_form_section['title']; ?></h2>
		</div>
		<div class="form-wrapper">
			<?php echo $ai_form_section["form_id"]; ?>
		</div>
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<?php get_footer(); ?>

<script>
	document.addEventListener("DOMContentLoaded", function () {
		const tabTitles = document.querySelectorAll(".ai-tab-title");
		const tabContents = document.querySelectorAll(".ai-tab-content");

		tabTitles.forEach(title => {
			title.addEventListener("click", function () {
				const tabId = this.dataset.tab;
				const contentToShow = document.getElementById(tabId);

				if (contentToShow) {
					tabTitles.forEach(t => t.classList.remove("ai-active"));
					tabContents.forEach(c => c.classList.remove("ai-active"));

					this.classList.add("ai-active");
					contentToShow.classList.add("ai-active");
				}
			});
		});
	});

	document.addEventListener("DOMContentLoaded", function () {
	function updateContainerClass() {
            var screenWidth = window.innerWidth;
            var container = document.getElementById('container');

            if (screenWidth <= 767.98) {
                container.classList.remove('container-l-auto');
                container.classList.add('container');
            } else {
                container.classList.remove('container');
                container.classList.add('container-l-auto');
            }
        }

        // Run on page load and on every resize (covers DevTools device switching)
        window.addEventListener('load', updateContainerClass);
        window.addEventListener('resize', updateContainerClass);
	});

	// Autoplay video on scroll
	document.addEventListener("DOMContentLoaded", function () {
		const videoPlayer = document.getElementById("new-player-2");
		if (videoPlayer) {
			const observer = new IntersectionObserver((entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						videoPlayer.play().catch(error => {
							console.log("Autoplay was prevented by browser:", error);
						});
					} else {
						videoPlayer.pause();
					}
				});
			}, {
				threshold: 0.5
			});
			observer.observe(videoPlayer);
		}
	});

	// Force SmartSlider to fill the hero banner height.
	// Only runs on wide desktop (> 1600px). Laptops and smaller flow naturally.
	// Max height capped at 900px to keep 4K screens from looking too stretched.
	(function() {
		var LOGO_H  = 90;    // .hero-client-logos-sec height in px
		var NAV_H   = 85;    // sticky nav margin-top on .home-banner-sec
		var MAX_H   = 900;   // matches the CSS min() cap for large screens
		var MIN_W   = 1024;  // viewport lock only applies at this width and above

		var RESET_SELECTORS = [
			'.n2-ss-slider-1',
			'.n2-section-smartslider',
			'.n2-ss-section',
			'.n2-ss-section-main-content',
			'.n2-ss-slider-wrapper',
			'.n2-ss-slider-wrapper-inside',
			'.n2-ss-slide'
		];

		function clearBannerSlider(banner) {
			banner.style.removeProperty('height');
			RESET_SELECTORS.forEach(function(sel) {
				banner.querySelectorAll(sel).forEach(function(el) {
					el.style.removeProperty('height');
					el.style.removeProperty('min-height');
					el.style.removeProperty('padding-bottom');
				});
			});
			banner.querySelectorAll('[id^="n2-ss-"]').forEach(function(el) {
				el.style.removeProperty('height');
				el.style.removeProperty('min-height');
				el.style.removeProperty('max-height');
			});
		}

		function fitBannerSlider() {
			var banner = document.querySelector('.home-banner-sec');
			if (!banner) return;

			if (window.innerWidth < MIN_W) {
				// Mobile/tablet: clear any desktop-stamped inline heights so CSS takes over
				clearBannerSlider(banner);
				return;
			}

			// Laptop range (1024–1600px) + tall screen (> 750px):
			// remove any previously forced heights and let SmartSlider render naturally.
			if (window.innerWidth >= 1024 && window.innerWidth <= 1600) {
				clearBannerSlider(banner);
				return;
			}

			// Short-height screens (< 650px): banner takes full viewport minus
			// nav only — logos scroll below the fold, so don't subtract LOGO_H.
			var isShortScreen = window.innerHeight < 650;
			var subtract = isShortScreen ? NAV_H : (NAV_H + LOGO_H);
			var floor    = isShortScreen ? 350 : 400;
			var targetH  = Math.min(
				Math.max(window.innerHeight - subtract, floor),
				MAX_H
			);

			// Apply to the banner section itself first
			banner.style.setProperty('height', targetH + 'px', 'important');

			// Then propagate into every SmartSlider layer
			RESET_SELECTORS.forEach(function(sel) {
				banner.querySelectorAll(sel).forEach(function(el) {
					el.style.setProperty('height',     targetH + 'px', 'important');
					el.style.setProperty('min-height', targetH + 'px', 'important');
					el.style.setProperty('padding-bottom', '0',        'important');
				});
			});

			// Also remove any inline max-height that SmartSlider may have set
			banner.querySelectorAll('[id^="n2-ss-"]').forEach(function(el) {
				el.style.setProperty('height',     targetH + 'px', 'important');
				el.style.setProperty('min-height', targetH + 'px', 'important');
				el.style.setProperty('max-height', 'none',          'important');
			});
		}

		// Run immediately, then again after SmartSlider's own init fires
		document.addEventListener('DOMContentLoaded', function() {
			fitBannerSlider();
			setTimeout(fitBannerSlider, 200);
			setTimeout(fitBannerSlider, 800);
		});

		window.addEventListener('resize', fitBannerSlider);
	})();

	document.addEventListener('DOMContentLoaded', function() {
		if(!document.getElementById('cinematic-css')) {
			const style = document.createElement('style');
			style.id = 'cinematic-css';
			style.innerHTML = `
				.typewriter-container::after {
					content: '|';
					display: inline-block;
					font-weight: 300;
					animation: blinkCursor 0.8s step-end infinite;
				}
				.typewriter-container.typing-done::after {
					display: none;
				}
				@keyframes blinkCursor {
					0%, 100% { opacity: 1; }
					50% { opacity: 0; }
				}
				.cinematic-shimmer {
					background: linear-gradient(120deg, var(--red, #ff0000) 0%, var(--red, #ff0000) 40%, #ffffff 50%, var(--red, #ff0000) 60%, var(--red, #ff0000) 100%);
					background-size: 200% auto;
					-webkit-background-clip: text;
					-webkit-text-fill-color: transparent;
					background-clip: text;
					color: transparent;
					animation: shimmerEffect 3s linear infinite;
					filter: drop-shadow(0 0 10px rgba(255, 0, 0, 0.3));
				}
				@keyframes shimmerEffect {
					to { background-position: 200% center; }
				}
			`;
			document.head.appendChild(style);
		}
	});

	const text = "agenTriniti";

	document.addEventListener('DOMContentLoaded', function() {
		// Animation for the video section title
		const elVideo = document.getElementById("typewriter-agenTriniti-video");
		if(elVideo) {
			const videoHeadline = elVideo.closest('.intro-headline');
			if (videoHeadline) {
				videoHeadline.style.opacity = '0';
				videoHeadline.style.transform = 'translateY(15px)';
			}

			elVideo.innerHTML = '';
			const lettersVideo = text.split('').map((char, index) => {
				const span = document.createElement('span');
				span.textContent = char;
				span.className = 'cinematic-letter';
				span.style.animationPlayState = 'paused';
				elVideo.appendChild(span);
				return span;
			});
			
			const supSpanVideo = document.createElement('span');
			supSpanVideo.className = 'cinematic-letter';
			supSpanVideo.style.animationPlayState = 'paused';
			supSpanVideo.innerHTML = '<sup style="font-size: 0.28em; font-weight: 500; position: relative; top: -1.6em; line-height: 0; vertical-align: baseline; color: var(--red, #ff0000) !important; -webkit-text-fill-color: var(--red, #ff0000) !important;">SM</sup>';
			elVideo.appendChild(supSpanVideo);
			lettersVideo.push(supSpanVideo);

			const resetAndAnimateWordVideo = (initialDelay = 0) => {
				elVideo.classList.add('typewriter-container');
				elVideo.classList.remove('cinematic-shimmer', 'typing-done');
				
				lettersVideo.forEach((span, index) => {
					span.style.display = 'none';
					span.style.opacity = '1';
					
					setTimeout(() => {
						span.style.display = 'inline-block';
					}, initialDelay * 1000 + (index * 100));
				});
				
				const totalDuration = initialDelay * 1000 + (lettersVideo.length * 100);
				
				setTimeout(() => {
					elVideo.classList.add('cinematic-shimmer');
				}, totalDuration);
				
				setTimeout(() => {
					elVideo.classList.add('typing-done');
				}, totalDuration + 1000); // Blink for 1s then remove cursor
			};

			if ('IntersectionObserver' in window && videoHeadline) {
				let hasAnimated = false;
				const observer = new IntersectionObserver((entries) => {
					entries.forEach(entry => {
						if (entry.isIntersecting && !hasAnimated) {
							hasAnimated = true;
							videoHeadline.style.animation = 'airoUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards';
							resetAndAnimateWordVideo(0.7); 
						}
					});
				}, { threshold: 0.2 });
				observer.observe(videoHeadline);
			} else {
				if (videoHeadline) {
					videoHeadline.style.opacity = '1';
					videoHeadline.style.transform = 'none';
				}
				resetAndAnimateWordVideo(0.7);
			}
		}
	});

	// Initialize Slick Carousel for homepage hero slider
	document.addEventListener('DOMContentLoaded', function() {
	if (window.jQuery && jQuery().slick) {
		const $carousels = jQuery('.hero-main-carousel');

		$carousels.each(function(index) {
			const $this = jQuery(this);
			const isFirst = index === 0;

			$this.slick({
				autoplay: true,
				autoplaySpeed: isFirst ? 8000 : 5000,
				speed: isFirst ? 500 : 800,
				dots: true,
				arrows: false,
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				pauseOnHover: false,
				fade: true,
				adaptiveHeight: true,
				cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)'
			});
		});

		// keep using the first carousel for the mobile sequential animation
		const $carousel = $carousels.eq(0);

		if (window.innerWidth < 768) {
			const slide1 = document.querySelector('.airo-hero:not(.airo-hero--package):not(.airo-hero--proud)');
			let slide1Timer = null;
			function startSlide1Sequence() {
				if (!slide1) return;
				slide1.classList.remove('show-content');
				clearTimeout(slide1Timer);
				slide1Timer = setTimeout(function() {
					slide1.classList.add('show-content');
				}, 2500);
			}
			startSlide1Sequence();
			$carousel.on('afterChange', function(event, slick, currentSlide) {
				if (currentSlide === 0) {
					startSlide1Sequence();
				} else {
					clearTimeout(slide1Timer);
					if (slide1) slide1.classList.remove('show-content');
				}
				if (currentSlide === 2) {
					$carousel.addClass('slide3-active');
				} else {
					$carousel.removeClass('slide3-active');
				}
			});
		}
	}
});

	// Make Slide 1 banner fully clickable to /capabilities/airos-agentriniti-package/
	document.addEventListener('DOMContentLoaded', function() {
		const firstBanner = document.querySelector('.airo-hero:not(.airo-hero--package):not(.airo-hero--proud)');
		if (firstBanner) {
			firstBanner.addEventListener('click', function(e) {
				// Don't trigger if clicked on an actual link, button, or slick dots wrapper
				if (e.target.closest('a') || e.target.closest('button') || e.target.closest('.slick-dots')) {
					return;
				}
				window.location.href = '/capabilities/airos-agentriniti-package/';
			});
		}
	});

	// Make Slide 3 banner fully clickable to /news/airos-great-place-to-work-story-three-years-running/
	document.addEventListener('DOMContentLoaded', function() {
		const thirdBanner = document.querySelector('.airo-hero--proud');
		if (thirdBanner) {
			thirdBanner.addEventListener('click', function(e) {
				// Don't trigger if clicked on an actual link, button, or slick dots wrapper
				if (e.target.closest('a') || e.target.closest('button') || e.target.closest('.slick-dots')) {
					return;
				}
				window.location.href = '/news/airos-great-place-to-work-story-three-years-running/';
			});
		}
	});

</script>