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
.pkg-banner-v2 {
  height: auto !important;
  min-height: 460px !important;
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

/* ── ABOVE-FOLD VIEWPORT LOCK (desktop / laptop only: ≥ 1024px) ──
   Hero + logo strip fill exactly the full viewport on first load.
   Nav = 85px  |  Logo strip = 90px  |  Total offset = 175px.
   Tablets and smaller scroll freely — no fixed height imposed.
*/

/* ── Tablet & mobile (< 1024px): natural flow, no viewport lock ── */
.home-banner-sec {
    display: block;
    height: auto;
    max-height: none;
    overflow: visible;
    background: #000;
}

.hero-client-logos-sec {
    height: auto;
    min-height: 70px;
    padding: 15px 0 !important;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    overflow: hidden;
}
.hero-client-logos-sec .logo-item {
    height: 60px !important;
}

/* ── Desktop / laptop (1024px – 2559px): viewport lock active ── */
@media (min-width: 1024px) {
    .home-banner-sec {
        height: min(calc(100dvh - 175px), 900px);  /* cap at 900px — keeps 4K sane */
        min-height: 400px;
        overflow: hidden;
        display: flex;
        align-items: stretch;
        background: #000;
    }

    /* Propagate height through Bootstrap grid so SmartSlider can fill it.
       DO NOT override max-width or padding — SmartSlider's n2-ow offset
       calculation relies on the container's natural 1160px width to correctly
       position the full-viewport slide. Overriding it shifts content off-screen. */
    .home-banner-sec > .container {
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .home-banner-sec > .container > .row {
        flex: 1;
    }
    .home-banner-sec > .container > .row > [class*="col-"] {
        height: 100%;
    }

    /* SmartSlider fill — CSS !important beats SmartSlider's generated stylesheet.
       The JS below handles inline-style overrides after slider init. */
    .home-banner-sec .n2-ss-slider-1,
    .home-banner-sec [id^="n2-ss-"] {
        height: 100% !important;
        min-height: 100% !important;
        max-height: none !important;
    }
    .home-banner-sec .n2-section-smartslider,
    .home-banner-sec .n2-ss-section {
        height: 100% !important;
        min-height: 100% !important;
        padding-bottom: 0 !important;
    }
    .home-banner-sec .n2-ss-section-main-content,
    .home-banner-sec .n2-ss-slider-wrapper,
    .home-banner-sec .n2-ss-slider-wrapper-inside,
    .home-banner-sec .n2-ss-slide {
        height: 100% !important;
        min-height: 100% !important;
    }

    .hero-client-logos-sec {
        height: 90px;
        min-height: 90px;
        padding: 10px 0 !important;
        overflow: hidden;
    }
    .hero-client-logos-sec .logo-item {
        height: 70px !important;
    }
}

/* Let SmartSlider render its own button naturally — same as home-older-version.php */
div#n2-ss-2 .nextend-bullet-bar {
    margin-bottom: 0 !important;
}

#n2-ss-2 .n2-ss-item-button,
#n2-ss-2 a[href*="calendly"],
#n2-ss-2 .n2-style-button {
    position: absolute !important;
    bottom: 20px !important;
    right: 20px !important;
    top: auto !important;
    left: auto !important;
    z-index: 10;
}

#n2-ss-2 .n2-ss-control-bullet,
#n2-ss-2 .n2-ss-widget[data-type="bullet"] {
    position: absolute !important;
    bottom: 20px !important;
    top: auto !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    z-index: 10;
}

/* Mobile: pin button bottom-right and dots bottom-center on the same line */
@media (max-width: 767px) {
    #n2-ss-2 .n2-ss-item-button,
    #n2-ss-2 a[href*="calendly"],
    #n2-ss-2 .n2-style-button {
        position: absolute !important;
        bottom: 2px !important;
        right: 10px !important;
        top: auto !important;
        left: auto !important;
    }
    #n2-ss-2 .n2-ss-control-bullet,
    #n2-ss-2 .n2-ss-widget[data-type="bullet"] {
        position: absolute !important;
        top: auto !important;
        bottom: 6px !important;
        left: 50% !important;
        transform: translateX(-50%) !important;
        z-index: 10;
    }
}

/* ── 1024px–1600px, tall screens (height > 750px): let SmartSlider breathe ──
   Covers MacBook Air 13" (1280px) and MacBook Pro 14" (1512px).
   Forcing a fixed pixel height at these widths causes SmartSlider's n2-ow
   offset to misalign and clip the left side of the slide content.
   Dropping height lock lets SmartSlider render at its natural aspect ratio. */
@media (min-width: 1024px) and (max-width: 1600px) and (min-height: 751px) {
    .home-banner-sec {
        height: auto !important;
        min-height: unset !important;
        max-height: none !important;
        overflow: visible !important;
        display: block !important;
    }
    .home-banner-sec > .container {
        height: auto !important;
        display: block !important;
    }
    .home-banner-sec > .container > .row {
        flex: none !important;
    }
    .home-banner-sec > .container > .row > [class*="col-"] {
        height: auto !important;
    }
    .home-banner-sec .n2-ss-slider-1,
    .home-banner-sec [id^="n2-ss-"],
    .home-banner-sec .n2-section-smartslider,
    .home-banner-sec .n2-ss-section,
    .home-banner-sec .n2-ss-section-main-content,
    .home-banner-sec .n2-ss-slider-wrapper,
    .home-banner-sec .n2-ss-slider-wrapper-inside,
    .home-banner-sec .n2-ss-slide {
        height: auto !important;
        min-height: unset !important;
        max-height: none !important;
        padding-bottom: unset !important;
    }
    .hero-client-logos-sec {
        height: auto !important;
        min-height: 70px !important;
    }
}

/* ── Short-height desktops (width ≥ 1001px, height < 650px): banner takes full
   viewport so content + CTA aren't cropped; client logos scroll below fold ── */
@media (min-width: 1001px) and (max-height: 649px) {
    .home-banner-sec {
        height: calc(100vh - 85px) !important;
        height: calc(100dvh - 85px) !important;
        min-height: 350px !important;
        max-height: none !important;
        overflow: hidden !important;
        display: flex !important;
        align-items: stretch !important;
    }
    .home-banner-sec > .container {
        height: 100% !important;
        display: flex !important;
        flex-direction: column !important;
    }
    .home-banner-sec > .container > .row {
        flex: 1 !important;
    }
    .home-banner-sec > .container > .row > [class*="col-"] {
        height: 100% !important;
    }
    .home-banner-sec .n2-ss-slider-1,
    .home-banner-sec [id^="n2-ss-"],
    .home-banner-sec .n2-section-smartslider,
    .home-banner-sec .n2-ss-section,
    .home-banner-sec .n2-ss-section-main-content,
    .home-banner-sec .n2-ss-slider-wrapper,
    .home-banner-sec .n2-ss-slider-wrapper-inside,
    .home-banner-sec .n2-ss-slide {
        height: 100% !important;
        min-height: 100% !important;
        max-height: none !important;
        padding-bottom: 0 !important;
    }
    /* Logos section flows naturally below the full-viewport banner */
    .hero-client-logos-sec {
        height: auto !important;
        min-height: 70px !important;
    }
}
</style>

<style>
/* Custom Banners Styles */
.custom-banners-wrapper {
    margin-top: 85px;
    background: #f4f6fa;
    padding: 0;
    margin-bottom: 0 !important;
    position: relative;
    width: 100%;
    overflow: hidden; /* prevent slick track from causing horizontal scroll/clip */
    box-sizing: border-box;
}

.hero-main-carousel {
    opacity: 0;
    transition: opacity 0.5s ease;
    margin: 0 !important;
    width: 100% !important;
    max-width: 100%;
    /* NOTE: do NOT add overflow:hidden here — Slick needs to measure internally */
}
.hero-main-carousel.slick-initialized {
    opacity: 1;
}
.hero-main-carousel .slick-track {
    display: flex !important;
    align-items: stretch;
}
.hero-main-carousel .slick-slide {
    height: 100%;
    padding: 0;
    display: flex;
}
.hero-main-carousel .slick-slide > div {
    display: flex;
    flex: 1;
    height: 100%;
    width: 100%;
}

.custom-banner-card {
    background: linear-gradient(135deg, rgba(1,0,74,0.04) 0%, #ffffff 35%, #f4f6fa 75%, rgba(255,0,0,0.03) 100%);
    width: 100%;
    height: calc(100vh - 175px);
    max-height: 650px;
    min-height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    border: none;
    overflow: hidden;
}

.custom-banner-card img {
    width: 100%;
    height: 100%;
    object-fit: contain;   /* shows full image, no cropping */
    object-position: center;
    display: block;
}




/* Triniti Card Dark Theme (matches Slide 2 color combo) */
.triniti-card {
  background:
    radial-gradient(circle at 10% 20%, rgba(0, 102, 255, 0.2) 0%, transparent 50%),
    radial-gradient(circle at 90% 80%, rgba(180, 0, 40, 0.10) 0%, transparent 45%),
    linear-gradient(135deg, #030214 0%, #07061d 50%, #020212 100%) !important;
  border: none;
}

/* Dark Theme Typography for Triniti Card */
.triniti-card .triniti-headline {
    color: #ffffff !important;
}
.triniti-card .triniti-sub {
    color: rgba(255, 255, 255, 0.7) !important;
}
.triniti-card .triniti-product {
    color: #ffffff !important;
}
.triniti-card .t-feat-text {
    color: rgba(255, 255, 255, 0.8) !important;
}
.triniti-card .t-feat-text strong.blue {
    color: #5687ff !important;
}
.triniti-card .t-feat-text strong.red {
    color: #ff4d4d !important;
}
.triniti-card .t-partners {
    color: rgba(255, 255, 255, 0.5) !important;
}
.triniti-card .t-partners strong {
    color: #ffffff !important;
}
.triniti-card .t-feature:not(:last-child)::after {
    background: rgba(255, 255, 255, 0.1) !important;
}

/* Triniti Card Specific Typography & Spacing Overrides to keep layout clean */
.triniti-card .triniti-headline {
    margin-bottom: 12px;
}
.triniti-card .triniti-headline::after {
    margin-top: 12px;
}
.triniti-card .triniti-sub {
    font-size: 16px !important;
    margin-bottom: 4px !important;
}
.triniti-card .triniti-product {
    font-size: 30px !important;
    margin-bottom: 20px !important;
}
.triniti-card .triniti-features {
    margin-bottom: 20px;
    gap: 15px;
}
.triniti-card .t-feature {
    gap: 10px;
}
.triniti-card .t-feat-icon {
    font-size: 28px;
    height: 36px;
}
.triniti-card .t-feat-text {
    font-size: 13px !important;
    line-height: 1.45 !important;
}
.triniti-card .t-feat-text strong {
    font-size: 14px !important;
}
.triniti-card .triniti-footer {
    margin-top: 16px;
}
@media (max-width: 991px) {
    .custom-banner-card { 
        height: auto; 
        min-height: 450px;
        max-height: none;
        padding: 40px 0;
    }
}

.custom-banner-card > img {
    height: 100% !important;
    width: 100% !important;
    object-fit: cover !important;
}

/* Slick Arrows & Dots */
.hero-main-carousel .slick-dots {
    bottom: 25px;
    z-index: 10;
}
.hero-main-carousel .slick-dots li button:before {
    font-size: 14px;
    color: var(--blue-dark, #0035cc);
    opacity: 0.4;
    text-shadow: 0 0 5px rgba(255,255,255,0.8);
}
.hero-main-carousel .slick-dots li.slick-active button:before {
    color: var(--red, #ff0000);
    opacity: 1;
    text-shadow: 0 0 5px rgba(255,255,255,0.8);
}

/* Mobile: push dots to the very bottom edge */
@media (max-width: 767px) {
    .hero-main-carousel .slick-dots {
        bottom: 6px !important;
        z-index: 20;
    }
    .hero-main-carousel .slick-dots li {
        margin: 0 3px !important;
        width: 16px !important;
        height: 16px !important;
    }
    .hero-main-carousel .slick-dots li button {
        width: 16px !important;
        height: 16px !important;
        padding: 0 !important;
    }
    .hero-main-carousel .slick-dots li button:before {
        font-size: 8px !important;
        line-height: 16px !important;
        width: 16px !important;
        height: 16px !important;
    }
}

/* Triniti Main Banner */
.triniti-banner-inner {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    height: 100%;
    align-items: stretch;
}
.triniti-left {
    padding: 0 5%;
    flex: 1 1 45%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.triniti-right {
    flex: 1 1 55%;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    background: transparent;
    position: relative;
    height: 100%;
    box-sizing: border-box;
}
.triniti-right::before {
    content: '';
    position: absolute;
    width: 120%;
    height: 120%;
    background: radial-gradient(circle at center, rgba(0, 53, 204, 0.05) 0%, transparent 70%);
}

@keyframes pulseGlow {
    0% { transform: scale(1); opacity: 0.5; }
    100% { transform: scale(1.1); opacity: 1; }
}

.triniti-headline {
    font-size: clamp(42px, 5vw, 64px);
    font-weight: 800;
    line-height: 1.15;
    color: #01004A;
    text-transform: none;
    margin-bottom: 20px;
    letter-spacing: -0.5px;
    position: relative;
}
.triniti-headline .text-red {
    color: var(--red, #ff0000);
}
.triniti-headline::after {
    content: '';
    display: block;
    width: 75px;
    height: 3px;
    background: linear-gradient(90deg, #ffffff 0%, #ff0000 100%);
    margin-top: 20px;
    border-radius: 2px;
}
.triniti-sub {
    font-size: 20px;
    color: #444;
    margin-bottom: 5px;
}
.triniti-product {
    font-size: 36px;
    font-weight: 800;
    color: #01004A;
    margin-bottom: 40px;
    display: inline-block;
}
.triniti-product .highlight {
    color: var(--red, #ff0000);
}

.triniti-features {
    display: flex;
    gap: 20px;
    margin-bottom: 25px;
    align-items: stretch;
}
.t-feature {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
    gap: 15px;
    flex: 1;
    min-width: 120px;
    position: relative;
    padding-right: 20px;
}
.t-feature:not(:last-child)::after {
    content: '';
    position: absolute;
    right: 0;
    top: 10%;
    bottom: 10%;
    width: 1px;
    background: rgba(0,0,0,0.08);
}
.t-feat-icon {
    width: 45px;
    height: 45px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    background: transparent;
    border-radius: 0;
    font-size: 36px;
}
.t-feat-icon i {
    color: #ffffff;
    -webkit-text-fill-color: initial;
    background: none;
    filter: drop-shadow(0 2px 4px rgba(255,255,255,0.2));
}
.t-feat-icon.blue i {
    background: linear-gradient(135deg, #4d79ff 0%, #0035cc 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    filter: drop-shadow(0 2px 4px rgba(0,53,204,0.2));
}
.t-feat-text {
    font-size: 16px;
    line-height: 1.5;
    color: #555;
}
.t-feat-text strong {
    font-weight: 800;
    font-size: 17px;
}
.t-feat-text strong.red { color: var(--red, #ff0000); }
.t-feat-text strong.blue { color: var(--blue-dark, #0035cc); }

.triniti-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-top: none;
    padding-top: 0;
    margin-top: 0;
}
.t-partners {
    display: flex;
    align-items: center;
    gap: 15px;
    font-size: 14px;
    font-weight: 600;
    color: var(--muted, #777);
}
.btn-explore-wrapper {
    position: relative;
    display: inline-block;
    margin-top: 15px;
}
.btn-explore-wrapper .sparkles {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 25px;
    height: 25px;
    pointer-events: none;
    opacity: 0.8;
    transition: all 0.3s ease;
}
.btn-explore-wrapper .sparkles.left {
    left: -35px;
}
.btn-explore-wrapper .sparkles.right {
    right: -35px;
}
.btn-explore-wrapper .sparkle-line {
    position: absolute;
    background: #d1a3f0;
    border-radius: 2px;
}
/* Center line */
.btn-explore-wrapper .sparkle-line.c {
    width: 14px;
    height: 2.5px;
    top: 11px;
    left: 5px;
}
/* Top line */
.btn-explore-wrapper .sparkle-line.t {
    width: 12px;
    height: 2.5px;
    top: 3px;
    left: 8px;
    transform: rotate(30deg);
}
/* Bottom line */
.btn-explore-wrapper .sparkle-line.b {
    width: 12px;
    height: 2.5px;
    bottom: 3px;
    left: 8px;
    transform: rotate(-30deg);
}

/* Right side flip */
.btn-explore-wrapper .sparkles.right .sparkle-line.c {
    left: unset;
    right: 5px;
}
.btn-explore-wrapper .sparkles.right .sparkle-line.t {
    left: unset;
    right: 8px;
    transform: rotate(-30deg);
}
.btn-explore-wrapper .sparkles.right .sparkle-line.b {
    left: unset;
    right: 8px;
    transform: rotate(30deg);
}

.btn-explore-wrapper:hover .sparkles.left {
    transform: translateY(-50%) scale(1.1) translateX(-3px);
    opacity: 1;
}
.btn-explore-wrapper:hover .sparkles.right {
    transform: translateY(-50%) scale(1.1) translateX(3px);
    opacity: 1;
}

.btn-explore {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: #ff0000 !important;
    color: #ffffff !important;
    font-family: Roboto, Arial, sans-serif;
    font-size: 15px;
    font-weight: 700;
    padding: 12px 28px !important;
    border-radius: 4px !important;
    text-transform: none !important;
    text-decoration: none;
    white-space: nowrap;
    transition: background 0.3s ease;
    border: none;
    letter-spacing: 0.5px;
    box-shadow: none !important;
}
.btn-explore i {
    font-size: 15px;
}
.btn-explore:hover {
    background: #cc0000 !important;
    transform: none;
    box-shadow: none !important;
}
.btn-explore:hover i {
    transform: translate(2px, -2px) scale(1.1);
}

/* Secondary Banner */
/* Banner base */
.choose-pkg-banner {
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding: 0 8%;
  color: #fff;
  text-align: left;
  text-decoration: none !important;
  overflow: hidden;
  width: 100%;
  min-height: 320px; /* desktop baseline */
}

/* Background layer */
.choose-pkg-banner::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url('https://dev.airolabs.ai/wp-content/uploads/2026/07/banner2-1.jpeg');
  background-size: cover;              /* desktop full bleed */
  background-position: right center;   /* anchor to right */
  background-repeat: no-repeat;
  z-index: 1;
}

/* Text always above background */
.choose-pkg-banner h3,
.choose-pkg-banner p,
.choose-pkg-banner .btn-explore-wrapper {
  position: relative;
  z-index: 2;
}

/* Heading */
.choose-pkg-banner h3 {
  font-family: 'RobotoSlab-Bold', var(--font-b), serif;
  font-size: clamp(36px, 4vw, 56px);
  font-weight: 800;
  color: #fff;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: -0.5px;
  max-width: 600px;
}

/* Paragraph */
.choose-pkg-banner p {
  font-family: 'RobotoSlab-Regular', var(--font-b), serif;
  font-size: 18px;
  color: rgba(255,255,255,0.85);
  margin-bottom: 40px;
  line-height: 1.6;
  max-width: 600px;
}

	
	
/* Mobile view */
@media (max-width: 767px) {
  .choose-pkg-banner::before {
    background-size: contain !important; /* show whole image */
    background-position: center center !important;
    background-repeat: no-repeat !important;
    background-color: #000;              /* fill gaps */
	height:auto;
  }

  .choose-pkg-banner {
    min-height: auto !important;         /* let height follow content */
    padding: 28px 24px 52px 24px !important;
  }
}

	
	.slide-inner {
  width: 100%;
  min-height: 70vh; /* ensures Slick sees height */
}
.banner-img {
  width: 100%;
  height: auto;
  display: block;
}


/* Kinetic Typography for Banner Animations */
@keyframes choosePkgFadeUp {
    from {
        opacity: 0;
        transform: translateY(15px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Hide elements when slider is initialized, so they can animate in */
.hero-main-carousel.slick-initialized .choose-pkg-banner h3,
.hero-main-carousel.slick-initialized .choose-pkg-banner p,
.hero-main-carousel.slick-initialized .choose-pkg-banner .btn-explore-wrapper,
.hero-main-carousel.slick-initialized .triniti-left .triniti-headline,
.hero-main-carousel.slick-initialized .triniti-left .triniti-sub,
.hero-main-carousel.slick-initialized .triniti-left .triniti-product,
.hero-main-carousel.slick-initialized .triniti-left .triniti-features,
.hero-main-carousel.slick-initialized .triniti-cta-wrapper,
.hero-main-carousel.slick-initialized .triniti-left .triniti-footer {
    opacity: 0;
    transform: translateY(15px);
    will-change: transform, opacity;
}

/* Trigger animation when the second slide is active */
.hero-main-carousel.slick-initialized .play-anim .choose-pkg-banner h3 {
    animation: choosePkgFadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    animation-delay: 0.1s;
}

.hero-main-carousel.slick-initialized .play-anim .choose-pkg-banner p {
    animation: choosePkgFadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    animation-delay: 0.5s;
}

.hero-main-carousel.slick-initialized .play-anim .choose-pkg-banner .btn-explore-wrapper {
    animation: choosePkgFadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    animation-delay: 0.7s;
}

/* Trigger animation when the first slide is active */
.hero-main-carousel.slick-initialized .play-anim .triniti-left .triniti-headline {
    animation: choosePkgFadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    animation-delay: 0.2s;
}
.hero-main-carousel.slick-initialized .play-anim .triniti-left .triniti-sub {
    animation: choosePkgFadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    animation-delay: 0.5s;
}
.hero-main-carousel.slick-initialized .play-anim .triniti-left .triniti-product {
    animation: choosePkgFadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    animation-delay: 0.7s;
}
.hero-main-carousel.slick-initialized .play-anim .triniti-left .triniti-features {
    animation: choosePkgFadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    animation-delay: 0.9s;
}
.hero-main-carousel.slick-initialized .play-anim .triniti-cta-wrapper {
    animation: choosePkgFadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    animation-delay: 1.1s;
}
.hero-main-carousel.slick-initialized .play-anim .triniti-left .triniti-footer {
    animation: choosePkgFadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    animation-delay: 1.3s;
}

/* SVG/Image Animation adjustments */
.triniti-right svg,
.triniti-right img.triniti-svg {
    width: 100%;
    height: 100%;
    max-height: 100%;
    max-width: 100%;
    object-fit: contain;
    object-position: bottom center;
    position: relative;
    z-index: 2;
    filter: drop-shadow(0 10px 20px rgba(0,0,0,0.08));
}

/* Triniti Left CTA Button */
.triniti-cta-wrapper {
    margin-top: 25px;
    display: flex;
    justify-content: flex-start;
}

.triniti-left-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: #ff0000;
    color: #ffffff !important;
    font-family: Roboto, Arial, sans-serif;
    font-size: 15px;
    font-weight: 700;
    padding: 12px 28px;
    border-radius: 4px;
    text-decoration: none;
    white-space: nowrap;
    transition: background 0.3s ease;
    border: none;
    letter-spacing: 0.5px;
}

.triniti-left-btn:hover {
    background: #cc0000;
}

@media (max-width: 768px) {
    .triniti-cta-wrapper {
        justify-content: center;
        margin-top: 10px;
        margin-bottom: 2px;
    }
    .triniti-left-btn {
        padding: 10px 20px;
        font-size: 12px;
        width: auto;
        border-radius: 4px;
        white-space: normal;
        text-align: center;
    }
}

@keyframes floatSVG {
    0% { transform: translateY(0px) scale(1); }
    50% { transform: translateY(-10px) scale(1.02); }
    100% { transform: translateY(0px) scale(1); }
}

@media (max-width: 1200px) {
    .custom-banners-wrapper {
        margin-top: 75px;
    }
    
    /* Lock carousel heights to prevent tall slide height inheritance */
    .hero-main-carousel,
    .hero-main-carousel .slick-track,
    .hero-main-carousel .slick-slide,
    .hero-main-carousel .slick-slide > div {
/*         height: 480px !important; */
    }
    .hero-main-carousel .slick-list {
/*         height: 480px !important; */
        overflow: hidden !important;
    }

    .custom-banner-card {
        height: 480px !important;
        min-height: 480px !important;
        max-height: 480px !important;
        padding: 30px 20px !important;
        box-sizing: border-box !important;
    }

    /* Keep side-by-side (Horizontal) layout */
/*      .triniti-banner-inner {
        flex-direction: row !important;
        flex-wrap: nowrap !important;
        height: 100% !important;
        align-items: center !important;
    }
    .triniti-left {
        padding: 0 15px 0 0 !important;
        flex: 0 0 50% !important;
        max-width: 50% !important;
    }
    .triniti-right {
        flex: 0 0 50% !important;
        max-width: 50% !important;
        padding: 0 !important;
        height: 100% !important;
        min-height: unset !important;
    }
    .triniti-right svg,
    .triniti-right img.triniti-svg {
        max-height: 100% !important;
        max-width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        object-position: center right !important;
    } */
 
    /* Tablet Typography */
    .triniti-headline {
        font-size: clamp(24px, 3.5vw, 36px) !important;
        line-height: 1.2 !important;
        margin-bottom: 12px !important;
    }
    .triniti-sub {
        font-size: 14px !important;
        margin-bottom: 6px !important;
    }
    .triniti-product {
        font-size: 20px !important;
        margin-bottom: 20px !important;
    }

    /* Features Layout */
    .triniti-features {
        gap: 15px !important;
        margin-bottom: 20px !important;
    }
    .t-feature {
        gap: 10px !important;
        padding-right: 10px !important;
    }
    .t-feat-icon {
        width: 30px !important;
        height: 30px !important;
        font-size: 20px !important;
    }
    .t-feat-text {
        font-size: 12px !important;
        line-height: 1.3 !important;
    }
    .t-feat-text strong {
        font-size: 13px !important;
    }

    .triniti-footer {
        margin-top: 0 !important;
    }
    .t-partners {
        font-size: 12px !important;
        gap: 10px !important;
    }
    
    /* Choose Your Package Slide */
    .choose-pkg-banner {
        padding: 0 8% !important;
        justify-content: center !important;
        height: 100% !important;
    } 
    .choose-pkg-banner h3 {
        font-size: 36px !important;
        margin-bottom: 15px !important;
    }
    .choose-pkg-banner p {
        font-size: 15px !important;
        margin-bottom: 25px !important;
    }
    .btn-explore {
        padding: 12px 28px !important;
        font-size: 15px !important;
    }

    .custom-banner-card > img {
        object-fit: cover !important;
    }
}
	
	/* Desktop / base - full contain, no cropping */
.gptw-banner-card {
    display: flex;
    align-items: center;
    justify-content: center;
}

.gptw-banner-img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
    display: block;
}

@media (max-width: 767px) {
    /* inherits the shared 280px height lock from .custom-banner-card - untouched */

    .gptw-banner-card {
        padding: 0 !important;   /* remove padding so image fills edge to edge */
        overflow: hidden !important;
        width: 100% !important;
        max-width: 100vw !important;
        box-sizing: border-box !important;
    }

    .gptw-banner-img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;   /* cover fills the full width, no left cut-off */
        object-position: center center !important;
        display: block !important;
        max-width: 100% !important;
    }
}

@media (max-width: 767px) {
    .custom-banners-wrapper {
        margin-top: 60px;
        width: 100% !important;
        max-width: 100vw !important;
        overflow: hidden !important;
        box-sizing: border-box !important;
    }
    
    /* Lock mobile carousel height — 400px gives room for content + button + partner logos */
    .hero-main-carousel {
/*         height: 400px !important; */
        width: 100% !important;
        max-width: 100% !important;
        box-sizing: border-box !important;
    }
    .hero-main-carousel .slick-list {
/*         height: 400px !important; */
        width: 100% !important;
        max-width: 100% !important;
        overflow: hidden !important;
        box-sizing: border-box !important;
    }
    .hero-main-carousel .slick-track {
/*         height: 400px !important; */
    }
    .hero-main-carousel .slick-slide,
    .hero-main-carousel .slick-slide > div {
      
        width: 100% !important;
        box-sizing: border-box !important;
    }

    .custom-banner-card {
        height: 400px !important;
        min-height: 400px !important;
        max-height: 400px !important;
        width: 100% !important;
        max-width: 100% !important;
        padding: 0 !important;
        box-sizing: border-box !important;
        overflow: hidden !important;
    }
    
    .custom-banner-card:not(.choose-pkg-banner):not(.triniti-card) {
        background: #ffffff !important; /* solid white background on mobile to hide the SVG's white box border */
    }
    
    .triniti-card .t-feature::after {
        background: rgba(255, 255, 255, 0.1) !important;
    }
    
     .triniti-banner-inner {
        flex-direction: row !important;
        flex-wrap: nowrap !important;
        height: 100% !important;
        align-items: center !important;
    }

/*     .triniti-left {
        flex: 0 0 54% !important;
        max-width: 54% !important;
        padding: 8px 5px 0 0 !important;
    }
    .triniti-right {
        flex: 0 0 46% !important;
        max-width: 46% !important;
        padding: 0 !important;
        height: 100% !important;
    }
    .triniti-right svg,
    .triniti-right img.triniti-svg {
        max-height: 100% !important;
        max-width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        object-position: center right !important;
        filter: none !important;
    }   */
    /* Proportional Typography for Mobile */
    .triniti-headline {
        font-size: 24px !important;
        line-height: 1.2 !important;
        margin-bottom: 8px !important;
    }
    .triniti-headline::after {
        width: 40px !important;
        height: 2px !important;
        margin-top: 8px !important;
    }
    .triniti-sub {
        font-size: 13px !important;
        margin-bottom: 6px !important;
        line-height: 1.3 !important;
    }
    .triniti-product {
        font-size: 17px !important;
        margin-bottom: 15px !important;
    }

    /* Horizontal side-by-side Features for Mobile (Preserving proportions) */
    .triniti-features {
        flex-direction: column !important;
        gap: 8px !important;
        margin-bottom: 12px !important;
    }
    .t-feature {
        flex-direction: row !important;
        align-items: center !important;
        gap: 6px !important;
        padding-right: 0 !important;
        flex: 1 !important;
        min-width: unset !important;
    }
    .t-feature::after {
        display: none !important;
    }
    .t-feat-icon {
        width: 20px !important;
        height: 20px !important;
        font-size: 16px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: flex-start !important;
    }
    .t-feat-text {
        font-size: 12px !important;
        line-height: 1.4 !important;
    }
    .t-feat-text strong {
        font-size: 13px !important;
    }

    .t-partners {
        font-size: 11px !important;
        gap: 8px !important;
        flex-wrap: wrap;
    }
    .t-partners span {
        display: inline-block !important;
    }
    .t-partners strong {
        font-size: 12px !important;
    }

    /* Choose Your Package Slide Mobile */
/*     .choose-pkg-banner {
        padding: 0 20px !important;
        align-items: flex-start !important;
        text-align: left !important;
    } */
    .choose-pkg-banner h3 {
        font-size: 24px !important;
        margin-bottom: 10px !important;
    }
    .choose-pkg-banner p {
        font-size: 13px !important;
        margin-bottom: 18px !important;
        line-height: 1.3 !important;
    }
    .btn-explore {
        padding: 10px 20px !important;
        font-size: 12px !important;
        letter-spacing: 0.5px !important;
    }
    .btn-explore-wrapper .sparkles {
        display: none !important;
    }
}
.slide-inner {
  width: 100%;
  min-height: 70vh; /* ensures Slick sees height */
}
/* ── Triniti overlay layout for mobile (must be top-level, not nested) ── */
@media (max-width: 768px) {
  .trinity-banner-v2 .triniti-right {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100%;
    padding: 0;
    margin: 0;
    z-index: 1;
    opacity: 0;
    transition: opacity 1.2s ease;
    pointer-events: none;
  }
  .trinity-banner-v2 .triniti-right.svg-visible {
    opacity: 1;
  }
  .trinity-banner-v2 .triniti-right.svg-fadeout {
    opacity: 0;
    transition: opacity 1s ease;
  }
  .trinity-banner-v2 .triniti-right.svg-hidden {
    display: none;
  }
  .trinity-banner-v2 .triniti-left {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100%;
    padding: 20px 6% 30px 6%;  
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    justify-content: center;  /* Center the content vertically so it aligns nicely */
    overflow-y: hidden;
    z-index: 2;
    opacity: 0;
    transition: opacity 1s ease;
  }
  .trinity-banner-v2 .triniti-left.overlay-visible {
    opacity: 1;
  }
  .trinity-banner-v2 .triniti-svg {
    display: block;
    width: 100% !important;
    height: calc(100% + 20px) !important;
    max-width: none;
    object-fit: cover;
    object-position: center;
    transform: translateY(-40px) !important;
  }
  /* Button: premium block on mobile */
  .triniti-left-btn {
    display: inline-flex !important;
    width: auto !important;
    max-width: 100% !important;
    text-align: center !important;
    padding: 10px 18px !important;
    font-size: 13px !important;
    border-radius: 4px !important;
    white-space: normal !important;
    box-sizing: border-box !important;
    font-family: Roboto, Arial, sans-serif !important;
    font-weight: 700 !important;
  }
  .triniti-cta-wrapper {
    margin-top: 10px !important;
    margin-bottom: 10px !important;
    width: 100% !important;
  }
  /* Partner logos: keep them small but visible */
  .t-partners {
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
    font-size: 11px !important;  
    margin-top: 10px !important;
    opacity: 0.9 !important;
  }
  .t-partners img {
    height: 12px !important;
    width: auto !important;
    display: inline-block !important;
    filter: brightness(0) invert(1) !important;
    opacity: 1 !important;
  }
  .t-partners span {
    display: inline-block !important;
  }
}

/* ── GPTW banner image fix for mobile ── */
@media (max-width: 767px) {
  .gptw-banner-card {
    padding: 0 !important;
    overflow: hidden !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    background: #fff !important;
  }
  /* Target the actual img tag (it has no .gptw-banner-img class) */
  .gptw-banner-card img {
    width: 100% !important;
    height: auto !important;
    max-height: 100% !important;
    object-fit: contain !important;
    object-position: center center !important;
    display: block !important;
  }
}

/* ── Choose Your Package banner: mobile fixes ── */
@media (max-width: 767px) {
  /* Background image was right-anchored — centers it so the left side isn't cut off */
 
.carousel-slide-item {
    height: auto !important;
  }
  .choose-pkg-banner h3 {
    font-size: 26px !important;
    margin-bottom: 10px !important;
    line-height: 1.15 !important;
    max-width: 100% !important;
  }

  .choose-pkg-banner p {
    font-size: 13px !important;
    margin-bottom: 20px !important;
    line-height: 1.45 !important;
    max-width: 100% !important;
  }

  .choose-pkg-banner .btn-explore {
    padding: 10px 22px !important;
    font-size: 13px !important;
  }
}

	.choose-pkg-banner-2 {
    color: #fff;
    padding: 0 8%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    text-align: left;
    text-decoration: none !important;
    position: relative;
    overflow: hidden;
}
.choose-pkg-banner-2::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: -50px; /* Extended to crop/hide the watermark at the bottom of the image */
    background-image: url('wp-content/uploads/2026/07/greatplacebannertest.png');
    background-size: cover;
    background-position: right center; /* aligns graphic to the right */
    z-index: 1;
}
	
@media (max-width: 767px) {
				.choose-pkg-banner-2 {
			 height: 320px !important;   /* increased from 280px so it extends past the dots */
        min-height: 320px !important;
        max-height: 320px !important;
		}

		.choose-pkg-banner-2::before {
				background-size: contain !important;
				background-position: center center !important;
			background-repeat:no-repeat;
			bottom:-90px;
			
    
			}
	}
/* Image wrapper ensures aspect ratio */
.banner-img-wrapper {
  width: 100%;
  aspect-ratio: 16/9; /* adjust to your image ratio */
  overflow: hidden;
  position: relative;
}

.banner-img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* desktop: fill */
  display: block;
}

/* Fourth Banner content overlay */
.banner-4 {
  position: relative;
}

.banner-4 .banner-content {
  position: absolute;
  top: 50%;
  left: 8%;
  transform: translateY(-50%);
  color: #fff;
  max-width: 600px;
  z-index: 2;
}

/* Mobile adjustments */
@media (max-width: 767px) {
  .banner-img-wrapper {
    aspect-ratio: auto; /* let it scale naturally */
    min-height: 100vh;  /* force full screen height */
  }

  .banner-img {
    object-fit: contain; /* show full image */
    background-color: #000; /* fill gaps */
  }

  .banner-4 .banner-content {
    top: auto;
    bottom: 20px;
    left: 24px;
    transform: none;
    padding-right: 24px;
  }
}


	/* ===== Package Banner V2 — full-bleed overlay style ===== */
	
	.carousel-slide-item {
  height: 100%  !important;
}
.pkg-banner-v2 {
  position: relative;
  display: block;
  width: 100%;
  overflow: hidden;
  text-decoration: none !important;
  background-color: #000;
}

.pkg-banner-v2--package {
  aspect-ratio: 2.5641 / 1;
}

.pkg-banner-v2--gptw {
  aspect-ratio: 2.1912 / 1;
  background-color: #fff;
}

.pkg-banner-v2__img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  z-index: 1;
}

.pkg-banner-v2__text {
  position: absolute;
  inset: 0;
  z-index: 2;
  max-width: 600px;
  padding: 60px 8%;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.pkg-banner-v2__heading {
  font-family: 'RobotoSlab-Bold', var(--font-b), serif;
  font-size: clamp(32px, 4vw, 56px);
  font-weight: 800;
  color: #fff;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: -0.5px;
  line-height: 1.1;
}

.pkg-banner-v2__highlight {
  color: #ff0000;
}

.pkg-banner-v2__desc {
  font-family: 'RobotoSlab-Regular', var(--font-b), serif;
  font-size: 18px;
  color: rgba(255,255,255,0.85);
  margin-bottom: 32px;
  line-height: 1.6;
}

.pkg-banner-v2__btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #ff0000;
  color: #fff;
  padding: 12px 24px;
  border-radius: 4px;
  font-weight: 600;
  font-size: 15px;
}

/* ===== Mobile: stack text above, full image below, no cropping ===== */
@media (max-width: 767px) {
	  .carousel-slide-item {
    height: auto !important;
  }

  .hero-main-carousel .slick-slide,
  .hero-main-carousel .slick-slide > div {
    width: 100% !important;
    box-sizing: border-box !important;
  }
	
	

  .pkg-banner-v2__text {
    padding: 20px;
  }

  .pkg-banner-v2__heading {
    font-size: clamp(20px, 6vw, 28px);
  }

  .pkg-banner-v2__desc {
    font-size: 13px;
    margin-bottom: 12px;
  }

  .pkg-banner-v2__btn {
    padding: 8px 16px;
    font-size: 13px;
  }

  .pkg-banner-v2 {
    height: 320px !important;
  }

  .pkg-banner-v2__img {
    object-fit: cover !important;
    object-position: center !important;
  }

  .pkg-banner-v2__text {
    position: absolute !important;
    inset: 0 !important;
    z-index: 2;
    padding: 20px;
  }

  .pkg-banner-v2__heading {
    font-size: clamp(20px, 6vw, 28px);
  }

  .pkg-banner-v2__desc {
    font-size: 13px;
    margin-bottom: 12px;
  }

  .pkg-banner-v2__btn {
    padding: 8px 16px;
    font-size: 13px;
  }
	
	
	
  .pkg-banner-v2 {
    position: relative !important;
    display: block !important;
    height: auto !important;
    min-height: unset !important;
    aspect-ratio: 2.5641 / 1;   /* container matches image ratio exactly */
  }

  .pkg-banner-v2__img {
    position: absolute !important;
    inset: 0 !important;
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;   /* safe now — container ratio = image ratio, so no cropping */
    object-position: center !important;
    order: unset;
    z-index: 1;
  }

  .pkg-banner-v2__text {
    position: absolute !important;
    inset: 0 !important;
    z-index: 2;
    max-width: 100%;
    padding: 20px 20px;
    order: unset;
  }

  .pkg-banner-v2__heading {
    font-size: clamp(22px, 6vw, 32px);
  }

  .pkg-banner-v2__desc {
    font-size: 14px;
    margin-bottom: 16px;
  }

  .pkg-banner-v2__btn {
    padding: 8px 16px;
    font-size: 13px;
  }
}
</style>

<section class="custom-banners-wrapper">
  <div class="container-fluid" style="padding: 0;">
    
    <div class="hero-main-carousel">
      
      <!-- Slide 1: Triniti Banner -->
      <div class="carousel-slide-item">
        <div class="custom-banner-card triniti-card trinity-banner-v2">
           <div class="triniti-banner-inner">
               <div class="triniti-left">
                   <h1 class="triniti-headline">
                       Delivering <span class="text-red">AI</span><br class="d-none d-md-block"> Through <span class="text-red">AI</span>
                   </h1>
                   <div class="triniti-sub">World's fastest builder of AI agents in bulk, unveils:</div>
                   <div class="triniti-product">Airo's <span class="highlight" style="position: relative; display: inline-block;"><span style="visibility: hidden;">agenTriniti<sup style="font-size: 0.35em; position: relative; top: -1.5em; line-height: 0; vertical-align: baseline;">SM</sup></span><span id="typewriter-agenTriniti" style="position: absolute; left: 0; top: 0; white-space: nowrap;"></span></span> Package</div>
                   
                   <div class="triniti-features">
                       <div class="t-feature" style="flex: none; padding-right: 0; min-width: auto;">
                           <div class="t-feat-text" style="color: #ffffff;">
                               <strong style="color: #ffffff;">100 agents.</strong> 6 months. <br class="d-block d-md-none"> <strong style="color: #ffffff;">One fixed fee.</strong> No surprises.
                           </div>
                       </div>
                   </div>

                   <div class="triniti-cta-wrapper mobile-cta d-block d-md-none" style="margin-top: 5px; margin-bottom: 10px;">
                       <a href="https://calendly.com/airodigitallabs/30min?guests=sayak.das%40airodigitallabs.com&month=2026-05" target="_blank" class="triniti-left-btn" style="font-size: 13px; padding: 10px 16px;">
                           Schedule Your agenTriniti<sup style="font-size: 0.55em; position: relative; top: -0.9em; line-height: 0; vertical-align: baseline; margin-right: 4px;">SM</sup> Demo Today
                       </a>
                   </div>

                   <div class="triniti-footer" style="margin-top: 10px;">
                       <div class="t-partners" style="font-size: 13px; font-family: 'Inter', sans-serif; opacity: 0.85; display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
                           <span>In partnership with</span>
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2026/07/anthropic-text-1.png" class="banner-img" alt="Anthropic" style="height: 14px; width: auto; display: block; filter: brightness(0) invert(1);">
                            <span class="pipe-sep" style="opacity: 0.4;">|</span>
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2026/07/openai-text-1.png" alt="OpenAI" style="height: 15px; width: auto; display: block; filter: brightness(0) invert(1);">
                       </div>
                   </div>
               </div>
                <div class="triniti-right">
    <img src="<?php echo site_url(); ?>/wp-content/uploads/2026/07/trinity_arc_static.svg" 
         alt="Triniti Arc Static" 
         class="triniti-svg">
    <div class="triniti-scrim"></div>
    <div class="triniti-cta-wrapper desktop-cta d-none d-md-flex" style="position: absolute; bottom: 5%; left: 0; width: 100%; display: flex; justify-content: center; z-index: 10; margin-top: 0;">
        <a href="https://calendly.com/airodigitallabs/30min?guests=sayak.das%40airodigitallabs.com&month=2026-05" 
           target="_blank" 
           class="triniti-left-btn">
            Schedule Your agenTriniti<sup style="font-size: 0.55em; position: relative; top: -0.9em; line-height: 0; vertical-align: baseline; margin-right: 6px;">SM</sup> Demo Today
        </a>
    </div>
</div>
			   
			  
           </div>
        </div>
      </div>

      <!-- Slide 2: Choose Your Package Banner -->
      <div class="carousel-slide-item">
        <a href="/capabilities/airos-agentriniti-package/#choose-package" class="custom-banner-card choose-pkg-banner">
            <h3>Choose Your <span style="color: #ff0000;">Package</span></h3>
            <p>Explore our transparent, flat-rate tiers designed to scale with your enterprise.</p>
            <div class="btn-explore-wrapper">
                <span class="btn-explore"><i class="fa fa-rocket" aria-hidden="true"></i> Explore Packages</span>
            </div>
        </a>
      </div>
 
		
		
      <!-- Slide 3: Image Banner -->

		
		    <div class="carousel-slide-item">
    <div class="choose-pkg-banner-2 custom-banner-card" style="border:none; box-shadow:none;">
        
    </div>
</div>
		
		
		
<div class="carousel-slide-item">
  <a href="/capabilities/airos-agentriniti-package/#choose-package" class="pkg-banner-v2 custom-banner-card pkg-banner-v2--package">
    <img
      src="https://dev.airolabs.ai/wp-content/uploads/2026/07/banner2-1.jpeg"
      class="pkg-banner-v2__img"
      alt="Choose your package"
    >
    <div class="pkg-banner-v2__text">
      <h3 class="pkg-banner-v2__heading">Choose Your <span class="pkg-banner-v2__highlight">Package</span></h3>
      <p class="pkg-banner-v2__desc">Explore our transparent, flat-rate tiers designed to scale with your enterprise.</p>
      <div class="pkg-banner-v2__btn-wrap">
        <span class="pkg-banner-v2__btn"><i class="fa fa-rocket" aria-hidden="true"></i> Explore Packages</span>
      </div>
    </div>
  </a>
</div>
		
		<div class="carousel-slide-item">
  <a href="#" class="pkg-banner-v2 custom-banner-card pkg-banner-v2--gptw">
    <img
      src="https://dev.airolabs.ai/wp-content/uploads/2026/07/greatplacebannertest.png"
      class="pkg-banner-v2__img"
      alt="Choose your package"
    >
   
  </a>
</div>
		


    </div>
  </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    if(jQuery().slick) {
        var $carousel = jQuery('.hero-main-carousel');
        
        $carousel.on('init', function(){
            // Trigger resize so inner elements (like Smart Slider) calculate sizes correctly
            setTimeout(function(){
                jQuery(window).trigger('resize');
            }, 500);
        });
   $carousel.slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 5000,
  pauseOnHover: true,
  arrows: false,
  swipe: true,
  touchMove: true,
  adaptiveHeight: true // <-- let each slide size itself
});

// ===== Recalculate height once banner images load (fixes empty gap below short slides) =====
$carousel.find('.pkg-banner-v2__img, .banner-img-mobile').on('load', function() {
    setTimeout(function() {
        $carousel.slick('setPosition');
    }, 100);
});

// Extra safety net for cached images that never fire 'load'
setTimeout(function() {
    $carousel.slick('setPosition');
}, 800);

// Recalc on resize/orientation change (mobile rotate, etc.)
$(window).on('resize orientationchange', function() {
    $carousel.slick('setPosition');
});
		
// Make sure the first slide gets the animation class initially
$carousel.find('.slick-slide.slick-active').addClass('play-anim');
	
// index of your Trinity banner slide (0 if it's the first slide)
const TRINITY_SLIDE_INDEX = 0;
$carousel.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
    if (nextSlide === TRINITY_SLIDE_INDEX) {	
        // about to enter Trinity slide - slow transition, longer hold
        $carousel.slick('slickSetOption', 'speed', 300, false);
        $carousel.slick('slickSetOption', 'autoplaySpeed', 8000, false);
    } else {
        // entering any other slide - default speed/autoplay
        $carousel.slick('slickSetOption', 'speed', 300, false);
        $carousel.slick('slickSetOption', 'autoplaySpeed', 5000, false);
    }
    // Ensure autoplay continues
    $carousel.slick('slickPlay');
    
    // Remove animation class from all slides so it fully resets
    $(slick.$slider).find('.slick-slide').removeClass('play-anim');
});
$carousel.on('afterChange', function(event, slick, currentSlide) {
    // Add the animation class back to the active slide to cleanly restart the animations
    $(slick.$slider).find('.slick-slide[data-slick-index="'+currentSlide+'"]').addClass('play-anim');
});
document.addEventListener("visibilitychange", function() {
    if (document.hidden) {
        $carousel.slick('slickPause');
    } else {
        $carousel.slick('slickPlay');
    }
});
		$(window).on('load', function(){
  $carousel.slick('setPosition'); // recalc after all images load
  setTimeout(function(){
      $carousel.slick('setPosition'); // extra pass in case CSS/aspect-ratio settled late
  }, 300);
});
    }
	
	
	
	
});
	
</script>

<!-- ── CLIENT LOGO CAROUSEL ── -->
<section class="hero-client-logos-sec" style="padding: 20px 0; background: #fff; border-bottom: 1px solid var(--border); overflow: hidden;">
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







<?php if ($ai_services_section['services'] || $cloud_services_section['services'] || $premium_enterprise_application['services'] || $platform_and_accelerators['services']) { ?>
<section class="services-sec">
	<?php

	?>
<!-- 	<div class="<?php
	$screen_width = 767;
	if ($screen_width <= 767.90) {
				echo 'container';
			} else {
				echo'container-l-auto';
			}
			?>"> -->
	<div id="container" class="container">
		<div class="lines">
			<!-- Tab Titles -->
			<ul class="services-tabs">
				<?php if (!empty($ai_services_section)) { ?>
					<li class="ai-tab-title ai-active" data-tab="advanced-ai">
						<div class="services-title">
							<h2><a href="/capabilities/airos-agentriniti-package/"> Airo's agenTriniti<sup style="font-size: 0.35em; position: relative; top: -1.5em; line-height: 0; vertical-align: baseline;">SM</sup> Package</a></h2>
						</div>
					</li>
				<?php } ?>
				<?php if (!empty($cloud_services_section)) { ?>
					<li class="ai-tab-title <?php if (empty($ai_services_section)) echo 'ai-active'; ?>" data-tab="foundational-ai">
						<div class="services-title">
							<h2>Cloud and Infrastructure</h2>
						</div>
					</li>
				<?php } ?>
				<?php if (!empty($premium_enterprise_application)) { ?>
					<li class="ai-tab-title <?php if (empty($ai_services_section)) echo 'ai-active'; ?>" data-tab="premium_enterprise">
						<div class="services-title">
<!-- 							<h2>Premium Enterprise Applications</h2> -->
							<h2>Premium Enterprise <span class="br-mobile"><br/></span> Applications</h2>
						</div>
					</li>
				<?php } ?>
				<?php if (!empty($platform_and_accelerators)) { ?>
					<li class="ai-tab-title <?php if (empty($ai_services_section)) echo 'ai-active'; ?>" data-tab="platform_and_accelerators">
						<div class="services-title">
							<h2>Platforms</h2>
						</div>
					</li>
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

			<?php if (!empty($cloud_services_section)) { ?>
		<div class="ai-tab-content <?php if (empty($ai_services_section)) echo 'ai-active'; ?>" id="foundational-ai">

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




		<?php if (!empty($cloud_services_section)) { ?>
		<div class="ai-tab-content <?php if (empty($ai_services_section)) echo 'ai-active'; ?>" id="foundational-ai">

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


	<?php if (!empty($premium_enterprise_application)) { ?>
		<div class="ai-tab-content <?php if (empty($ai_services_section)) echo 'ai-active'; ?>" id="premium_enterprise">

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




		<?php if (!empty($platform_and_accelerators)) { ?>
		<div class="ai-tab-content <?php if (empty($ai_services_section)) echo 'ai-active'; ?>" id="platform_and_accelerators">

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
		const text = "agenTriniti";
		const el = document.getElementById("typewriter-agenTriniti");
		
		if(el) {
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

			el.innerHTML = '';
			const letters = text.split('').map((char, index) => {
				const span = document.createElement('span');
				span.textContent = char;
				span.className = 'cinematic-letter';
				span.style.animationPlayState = 'paused';
				el.appendChild(span);
				return span;
			});
			
			const supSpan = document.createElement('span');
			supSpan.className = 'cinematic-letter';
			supSpan.style.animationPlayState = 'paused';
			supSpan.innerHTML = '<sup style="font-size: 0.35em; position: relative; top: -1.5em; line-height: 0; vertical-align: baseline; color: var(--red, #ff0000) !important; -webkit-text-fill-color: var(--red, #ff0000) !important;">SM</sup>';
			el.appendChild(supSpan);
			letters.push(supSpan);

			const resetAndAnimateWord = (initialDelay = 0) => {
				el.classList.add('typewriter-container');
				el.classList.remove('cinematic-shimmer', 'typing-done');
				
				letters.forEach((span, index) => {
					span.style.display = 'none';
					span.style.opacity = '1';
					
					setTimeout(() => {
						span.style.display = 'inline-block';
					}, initialDelay * 1000 + (index * 100));
				});
				
				const totalDuration = initialDelay * 1000 + (letters.length * 100);
				
				setTimeout(() => {
					el.classList.add('cinematic-shimmer');
				}, totalDuration);
				
				setTimeout(() => {
					el.classList.add('typing-done');
				}, totalDuration + 1000); // Blink for 1s then remove cursor
			};

			resetAndAnimateWord(0.7); // 0.7s delay to match the product line animation
			
			if (window.jQuery) {
				jQuery('.hero-main-carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
					if (nextSlide === 0) {
						letters.forEach(span => span.style.display = 'none');
						el.classList.remove('cinematic-shimmer', 'typing-done');
					}
				});
				jQuery('.hero-main-carousel').on('afterChange', function(event, slick, currentSlide) {
					if (currentSlide === 0) {
						resetAndAnimateWord(0.7);
					}
				});
			}
		}

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
							videoHeadline.style.animation = 'choosePkgFadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards';
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
(function() {
  const svgWrap = document.querySelector('.triniti-right');
  const svgImg = document.querySelector('.triniti-svg');
  const leftContent = document.querySelector('.triniti-left');
  const isMobile = () => window.innerWidth <= 768;

  function runSequence() {
    // 1. SVG fades in smoothly
    svgWrap.classList.add('svg-visible');

    // 2. hold SVG on screen long enough for its own animation to finish
    setTimeout(function() {
      svgWrap.classList.add('svg-fadeout');       // fade out
      leftContent.classList.add('overlay-visible'); // text fades in

      // 3. after fade transition completes, remove from layout entirely
      setTimeout(function() {
        svgWrap.classList.add('svg-hidden');
      }, 1000); // matches the 1s fade-out transition below
    }, 4000); // <-- SVG stays visible for 4s, adjust to match its animation length
  }

  function init() {
    if (!isMobile()) {
      leftContent.classList.add('overlay-visible');
      return;
    }
    if (svgImg.complete && svgImg.naturalWidth !== 0) {
      runSequence();
    } else {
      svgImg.addEventListener('load', runSequence);
      svgImg.addEventListener('error', runSequence);
    }
  }

  init();
})();
$(window).on('load', function(){
  $('.hero-main-carousel').slick('setPosition'); // recalc heights once images are ready
});
$('.hero-main-carousel').on('afterChange', function(event, slick, currentSlide){
  slick.$slider.slick('setPosition');
});
	
	// Force slick to recalc height once all banner images load
$carousel.find('.pkg-banner-v2__img, .banner-img-mobile').on('load', function() {
    $carousel.slick('setPosition');
});

// Extra safety: recalc again shortly after init in case images are cached
setTimeout(function() {
    $carousel.slick('setPosition');
}, 800);
	
	

</script>