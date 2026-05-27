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
  display: inline-block;
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
  margin-top: 4px;
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
  font-family: var(--font-d);
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
	
	

</style>

<section style="display:block; overflow:hidden;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      	<?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
      </div>
    </div>
  </div>
</section>



<!-- ── INTRO ── -->
<div class="s-intro">
  <div class="s-intro-left">
	<div class="eyebrow">Airo’s Agentic AI Trinity<sup style="position: relative; left: -0.9em; margin-right: -1.4em;">©</sup>Package</div>
    <h1 class="intro-headline">
      You manage <br> the use case.<span class="r">We manage the AI.</span>
    </h1>
  </div>
  <div class="s-intro-right">   
	  <h3><b>
		  An AI Use Case Lifecycle Management System for continuous enterprise execution.</b>
	  </h3>
    <p class="intro-body">    
      Airo’s Agentic AI Trinity<sup>©</sup> Package integrates deployment, governance, and continuous AI evolution into one operational system designed for enterprise scale.<br>Built to orchestrate AI across enterprise workflows, legacy systems, and agent ecosystems while eliminating fragmented delivery, vendor lock-in, and operational complexity.
    </p>
	  <div class="trinity-ctas">
  <a href="/capabilities/advanced-ai-services/agentic-ai-trinity-model/"  class="trinity-btn-primary text-wrap text-center" style="white-space: normal; height: auto; line-height: 1.4; padding-top: 10px; padding-bottom: 10px;">
	       <span class="d-none d-md-inline">Learn more about Agentic AI Trinity<sup style="position: relative; left: -0.3em; margin-right: -0.3em;">©</sup>Package</span>
	  <span class="d-md-none">Learn more about Agentic AI<br>Trinity<sup style="position: relative; left: -0.3em; margin-right: -0.3em;">©</sup>Package</span>
  </a>
</div>
	  <div style="display: flex; justify-content: center; margin-top: 20px;">
  <span class="s2-box">
    <span class="s2-white">Experimental AI</span>
    <span class="s2-arrow">→</span>
    <span class="s2-red">Operational Intelligence</span>
  </span>
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
      Airo's Agentic AI Trinity<sup>©</sup> Package
    </h2>
	<h3>Airo's Agentic AI Trinity<sup>©</sup> Package is built for AI Use Case Lifecycle Management designed to operationalize Enterprise Agentic AI solutions.</h3>
  </div> -->
<!--   <div class="s-intro-right">     -->
<!--     <p class="intro-body">    
      Enterprise AI cannot operate through isolated deployments, fragmented governance, or disconnected execution models. It requires systems that continuously build, govern, operate, and evolve intelligence across the enterprise.
    </p>
	<p class="intro-body">    
		Airo's Agentic AI Trinity<sup>©</sup> Package was designed for this operational reality.
    </p>
	  <div class="s2-quote-navy">
	  <p class="s2-quote-headline">
		<span class="s2-quote-white">You manage the use case. </span><span class="s2-quote-red">We manage the AI.	</span>
	  </p>
	</div> -->
<!-- 		<div class="eyebrow"></div>
      <h2 class="trinity-h1">Airo's Agentic AI Trinity<sup>©</sup> Package</h2>
      <p class="trinity-h2">Airo's Agentic AI Trinity<sup>©</sup> Package is built for AI Use Case Lifecycle Management designed to operationalize Enterprise Agentic AI solutions.</p>
      <p class="trinity-copy">Enterprise AI cannot operate through isolated deployments, fragmented governance, or disconnected execution models. It requires systems that continuously build, govern, operate, and evolve intelligence across the enterprise. Airo's Agentic AI Trinity<sup>©</sup> Package was designed for this operational reality.</p>
    </div>
 
	  <div class="trinity-statement">
      <p class="trinity-statement-text">You manage the use case. <strong>We manage the AI.</strong></p>
    </div> -->
 
<!--     <div class="trinity-ctas">
      <a href="/services/advanced-ai-services/agentic-ai-trinity-model/" class="trinity-btn-primary">
        Explore Airo's Agentic AI Trinity<sup>©</sup> Package
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
    <img src="https://airolabs.ai/wp-content/uploads/2026/05/OpenAI_Logo.jpg" alt="OpenAI" loading="lazy">
  </div>

  <div class="eco-logo-item">
    <img src="https://airolabs.ai/wp-content/uploads/2026/05/anthro.jpg" alt="Anthropic" loading="lazy">
  </div>

  <div class="eco-logo-item">
    <img src="https://airolabs.ai/wp-content/uploads/2026/05/googlevertexai-2.jpg" alt="Google" loading="lazy">
  </div>

  <div class="eco-logo-item">
    <img src="https://airolabs.ai/wp-content/uploads/2026/05/copilot.png" alt="Microsoft" loading="lazy">
  </div>

  <div class="eco-logo-item">
    <img src="https://airolabs.ai/wp-content/uploads/2026/05/amazon-bedrock-1-1.png" alt="Amazon" loading="lazy">
  </div>

  <div class="eco-logo-item">
    <img src="https://airolabs.ai/wp-content/uploads/2026/05/cursor-3.png" alt="Cursor" loading="lazy">
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
<!--         <h4 class="card-title">Agentic AI Trinity Model<span class="small-copy">©</span></h4>
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




<?php if($ai_video_section['video_poster']['url']){ ?>
 <section class="video-sec">
	<div class="container">
		<div class="row">
			<div class="video-player">
				<img src="<?php echo $ai_video_section['video_poster']['url']; ?>" alt="<?php echo $ai_video_section['video_poster']['alt']; ?>" id="cover" loading="lazy">
			    <svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558" id="cover">
				  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#fff"></path>
				</svg>
			   <!-- <iframe width="560" height="315" src="<?php echo $ai_video_section['video_link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="player" loading="lazy"></iframe>-->
					<video width="560" height="315"  id="player" loading="lazy" controls poster="<?php echo $ai_video_section['video_poster']['url']; ?>">
  <source src="<?php echo $ai_video_section['video_link']; ?>" type="video/mp4">
 
</video>
			</div>
		</div>
	</div>
</section> 
<?php } ?>


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
							<h2><a href="/capabilities/advanced-ai-services/agentic-ai-trinity-model/"> Agentic AI Trinity<sup>©</sup> Package </a></h2>
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
							<h2>Premium Enterprise Applications</h2>
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
					<img src="<?php echo get_the_post_thumbnail_url($events->ID); ?>" alt="<?php echo $events->post_title; ?>">
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

        // Run on page load
        window.onload = updateContainerClass;

        // Optional: Update on window resize (responsive behavior)
        window.onresize = updateContainerClass;
	});	
</script>