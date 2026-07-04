<?php
/**
 * Template Name: Data and Analytics New
 * The template used for displaying fullwidth page content in Publications page
 *
 * @package hitmag
 */

get_header(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Airo Agentic AI Trinity Package©</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --navy:  #0b1f44;
    --red:   #e31837;
    --gray:  #e6e6e6;
    --cream: #f7f5f2;
    --white: #ffffff;
    --dur:   0.85s;
    --ease:  cubic-bezier(0.77, 0, 0.18, 1);
  }

  html, body {
    width: 100%; height: 100%;
    overflow: hidden;           /* NO native scroll — we control everything */
    font-family: 'DM Sans', sans-serif;
    background: #000;
    cursor: default;
    user-select: none;
  }

  /* ─── VIEWPORT STACK ────────────────────────────────── */
  #stage {
    position: fixed;
    inset: 0;
    overflow: hidden;
  }

  /* Each slide is position:absolute, full viewport */
  .slide {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: stretch;
    /* start below viewport */
    transform: translateY(100%);
    transition: transform var(--dur) var(--ease);
    will-change: transform;
    z-index: 1;
  }

  /* Active slide: in view */
  .slide.active {
    transform: translateY(0%);
    z-index: 2;
  }

  /* Slide exiting upward (previous) */
  .slide.exiting {
    transform: translateY(-100%);
    z-index: 3;
  }

  /* ─── SLIDE THEMES ──────────────────────────────────── */
  .slide-0 { background: var(--navy); }
  .slide-1 { background: var(--navy); }
  .slide-2 { background: var(--cream); }
  .slide-3 { background: var(--red); }
  .slide-4 { background: var(--white); }
  .slide-5 { background: var(--navy); }

  /* ─── DIAGRAM PANE (left) ──────────────────────────── */
  .diagram-col {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 30px 40px 60px;
    position: relative;
  }

  .diagram-col svg {
    width: min(440px, 100%);
    max-height: 80vh;
    overflow: visible;
  }

  /* ─── CONTENT PANE (right) ─────────────────────────── */
  .content-col {
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 60px 60px 60px 40px;
    position: relative;
    overflow: hidden;
  }

  /* big ghost number */
  .ghost-num {
    position: absolute;
    bottom: -20px; right: -10px;
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(120px, 18vw, 220px);
    line-height: 1;
    opacity: 0.05;
    pointer-events: none;
    color: inherit;
  }
  .slide-0 .ghost-num,
  .slide-1 .ghost-num { color: white; }
  .slide-3 .ghost-num { color: white; }

  /* ─── CONTENT ELEMENTS ──────────────────────────────── */
  .chip {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 5px 14px;
    border-radius: 999px;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    width: fit-content;
    margin-bottom: 18px;
  }
  .chip-r  { background: var(--red); color: white; }
  .chip-n  { background: var(--navy); color: white; }
  .chip-w  { background: white; color: var(--navy); }
  .chip-g  { background: var(--gray); color: var(--navy); }

  .s-line {
    width: 48px; height: 4px; border-radius: 2px; margin-bottom: 20px;
  }
  .sl-r { background: var(--red); }
  .sl-w { background: white; }
  .sl-n { background: var(--navy); }

  .s-heading {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(36px, 4.5vw, 62px);
    line-height: 0.95;
    letter-spacing: 1px;
    margin-bottom: 20px;
  }
  .c-white { color: white; }
  .c-navy  { color: var(--navy); }
  .c-red   { color: var(--red); }

  .s-desc {
    font-size: clamp(13px, 1.2vw, 15px);
    line-height: 1.78;
    opacity: 0.78;
    max-width: 440px;
    margin-bottom: 28px;
  }

  /* feature grid */
  .fgrid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
  }

  .fcard {
    padding: 16px 18px;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.12);
    background: rgba(255,255,255,0.06);
    backdrop-filter: blur(6px);
  }
  .slide-2 .fcard,
  .slide-4 .fcard {
    border: 1px solid rgba(11,31,68,0.1);
    background: rgba(11,31,68,0.04);
  }

  .fcard-icon { font-size: 20px; margin-bottom: 7px; }
  .fcard-title { font-size: 12px; font-weight: 700; margin-bottom: 4px; letter-spacing: 0.3px; }
  .fcard-body  { font-size: 11px; opacity: 0.65; line-height: 1.55; }

  /* tag pills */
  .tags { display: flex; flex-wrap: wrap; gap: 9px; }
  .tag {
    padding: 6px 16px;
    border-radius: 6px;
    font-size: 12px;
    font-weight: 600;
    border: 2px solid currentColor;
    opacity: 0.88;
  }

  /* CTA button */
  .cta-btn {
    display: inline-block;
    margin-top: 32px;
    padding: 15px 36px;
    background: var(--red);
    color: white;
    border-radius: 8px;
    font-weight: 700;
    font-size: 15px;
    letter-spacing: 1px;
    text-decoration: none;
    border: none; cursor: pointer;
    transition: background 0.2s, transform 0.2s;
    width: fit-content;
  }
  .cta-btn:hover { background: #ff2244; transform: translateY(-2px); }

  /* ─── CONTENT REVEAL ANIMATION ──────────────────────── */
  .content-col > * {
    opacity: 0;
    transform: translateY(22px);
    transition: opacity 0.55s ease, transform 0.55s ease;
  }
  .slide.active .content-col > * {
    opacity: 1;
    transform: none;
  }
  .slide.active .content-col > *:nth-child(1) { transition-delay: 0.40s; }
  .slide.active .content-col > *:nth-child(2) { transition-delay: 0.50s; }
  .slide.active .content-col > *:nth-child(3) { transition-delay: 0.58s; }
  .slide.active .content-col > *:nth-child(4) { transition-delay: 0.66s; }
  .slide.active .content-col > *:nth-child(5) { transition-delay: 0.74s; }
  .slide.active .content-col > *:nth-child(6) { transition-delay: 0.82s; }

  /* ─── DIAGRAM REVEAL ANIMATION ──────────────────────── */
  .diagram-col svg {
    opacity: 0;
    transform: scale(0.88) translateY(30px);
    transition: opacity 0.7s ease, transform 0.7s var(--ease);
  }
  .slide.active .diagram-col svg {
    opacity: 1;
    transform: scale(1) translateY(0);
    transition-delay: 0.25s;
  }

  /* floating title box in diagram */
  .dtitle {
    position: absolute;
    bottom: 28px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--navy);
    border: 2.5px solid var(--red);
    border-radius: 9px;
    padding: 12px 24px;
    text-align: center;
    white-space: nowrap;
    animation: floatG 3s ease-in-out infinite;
    opacity: 0;
    transition: opacity 0.5s ease 0.7s;
  }
  .slide.active .dtitle { opacity: 1; }
  .dtitle h3 { font-family:'Bebas Neue',sans-serif; font-size: clamp(14px,1.6vw,19px); color:white; letter-spacing:1px; }
  .dtitle p  { font-size:11px; color:rgba(255,255,255,0.6); margin-top:2px; }

  @keyframes floatG {
    0%,100% { box-shadow:0 8px 20px rgba(0,0,0,0.3); transform:translateX(-50%) translateY(0); }
    50%      { box-shadow:0 16px 36px rgba(227,24,55,0.5); transform:translateX(-50%) translateY(-7px); }
  }

  /* ─── PROGRESS DOTS ─────────────────────────────────── */
  #dots {
    position: fixed;
    right: 28px;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 12px;
    z-index: 100;
  }

  .dot {
    width: 8px; height: 8px;
    border-radius: 50%;
    background: rgba(255,255,255,0.3);
    border: 2px solid rgba(255,255,255,0.5);
    cursor: pointer;
    transition: all 0.3s ease;
  }
  .dot.active {
    background: var(--red);
    border-color: var(--red);
    transform: scale(1.4);
  }

  /* ─── SCROLL CUE ────────────────────────────────────── */
  #scroll-cue {
    position: fixed;
    bottom: 28px;
    left: 50%;
    transform: translateX(-50%);
    display: flex; flex-direction: column; align-items: center; gap: 6px;
    color: rgba(255,255,255,0.4);
    font-size: 10px;
    letter-spacing: 3px;
    text-transform: uppercase;
    z-index: 100;
    transition: opacity 0.4s;
    animation: bounceY 2s ease-in-out infinite;
  }
  #scroll-cue svg { width: 18px; height: 18px; }
  @keyframes bounceY {
    0%,100% { transform: translateX(-50%) translateY(0); }
    50%      { transform: translateX(-50%) translateY(8px); }
  }

  /* slide counter top-left */
  #counter {
    position: fixed;
    top: 28px; left: 40px;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 13px;
    letter-spacing: 3px;
    color: rgba(255,255,255,0.5);
    z-index: 100;
    transition: color 0.4s;
  }

  /* ─── HERO SLIDE SPECIAL LAYOUT ─────────────────────── */
  .slide-0 {
    grid-template-columns: 1fr;
    align-items: center;
    justify-items: center;
  }
  .slide-0 .hero-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 60px 24px 120px;
    gap: 0;
    width: 100%;
  }
  .hero-eyebrow {
    font-family: 'Bebas Neue', sans-serif;
    letter-spacing: 6px;
    font-size: 12px;
    color: var(--red);
    margin-bottom: 14px;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.5s, transform 0.5s;
  }
  .slide-0.active .hero-eyebrow { opacity:1; transform:none; transition-delay:0.2s; }

  .hero-title {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(48px, 8vw, 96px);
    color: white;
    line-height: 0.92;
    margin-bottom: 12px;
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.6s, transform 0.6s;
  }
  .slide-0.active .hero-title { opacity:1; transform:none; transition-delay:0.3s; }
  .hero-title span { color: var(--red); }

  .hero-sub {
    font-family: 'DM Serif Display', serif;
    font-style: italic;
    font-size: clamp(16px, 2vw, 22px);
    color: rgba(255,255,255,0.5);
    margin-bottom: 48px;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.5s, transform 0.5s;
  }
  .slide-0.active .hero-sub { opacity:1; transform:none; transition-delay:0.42s; }

  /* hero diagram */
  .hero-diagram-wrap {
    position: relative;
    width: min(700px, 90vw);
    opacity: 0;
    transform: scale(0.9) translateY(30px);
    transition: opacity 0.7s, transform 0.7s var(--ease);
  }
  .slide-0.active .hero-diagram-wrap { opacity:1; transform:scale(1) translateY(0); transition-delay:0.5s; }

  .hero-diagram-wrap svg { width:100%; overflow:visible; filter: drop-shadow(0 24px 50px rgba(0,0,0,0.6)); }

  .hero-partners {
    margin-top: 44px;
    font-size: 12px;
    color: rgba(255,255,255,0.35);
    letter-spacing: 2px;
    text-transform: uppercase;
    opacity: 0;
    transition: opacity 0.5s 0.85s;
  }
  .slide-0.active .hero-partners { opacity:1; }
  .hero-partners strong { color: rgba(255,255,255,0.7); }

  /* ─── ARC DIM/ACTIVE ────────────────────────────────── */
  .arc-dim    { opacity: 0.1; }
  .arc-active { opacity: 1;   }

  /* ─── RESPONSIVE ────────────────────────────────────── */
  @media (max-width: 800px) {
    .slide:not(.slide-0) {
      grid-template-columns: 1fr;
      grid-template-rows: auto 1fr;
    }
    .diagram-col {
      padding: 32px 24px 0;
      order: 1;
    }
    .diagram-col svg { max-height: 38vh; }
    .content-col {
      padding: 24px 24px 40px;
      order: 2;
    }
    .ghost-num { display:none; }
    .fgrid { grid-template-columns: 1fr; }
    .dtitle { bottom: 4px; }
  }
</style>
</head>
<body>

<!-- ─── PROGRESS DOTS ──────────────────────────────── -->
<div id="dots">
  <div class="dot active" data-idx="0"></div>
  <div class="dot" data-idx="1"></div>
  <div class="dot" data-idx="2"></div>
  <div class="dot" data-idx="3"></div>
  <div class="dot" data-idx="4"></div>
  <div class="dot" data-idx="5"></div>
</div>

<div id="counter">01 / 06</div>

<div id="scroll-cue">
  <span>Scroll</span>
  <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 5v14M5 12l7 7 7-7"/></svg>
</div>

<!-- ─── STAGE ──────────────────────────────────────── -->
<div id="stage">

  <!-- ══ SLIDE 0 · HERO ════════════════════════════════ -->
  <div class="slide slide-0 active">
    <div class="hero-inner">
      <p class="hero-eyebrow">AI Use Case Lifecycle Management</p>
      <h1 class="hero-title">Airo Agentic AI<br><span>Trinity Package©</span></h1>
      <p class="hero-sub">From Ideation to Next-Gen Evolution</p>

      <div class="hero-diagram-wrap">
        <svg viewBox="0 0 1000 520" xmlns="http://www.w3.org/2000/svg">
          <path d="M 50,500 A 450,450 0 0,1 950,500" fill="none" stroke="#0b1f44" stroke-width="70"/>
          <line x1="500" y1="15" x2="500" y2="85" stroke="#e31837" stroke-width="4" transform="rotate(-45 500 500)"/>
          <line x1="500" y1="15" x2="500" y2="85" stroke="#e31837" stroke-width="4"/>
          <line x1="500" y1="15" x2="500" y2="85" stroke="#e31837" stroke-width="4" transform="rotate(45 500 500)"/>
          <path id="h4" d="M 50,500 A 450,450 0 0,1 950,500" fill="none"/>
          <text fill="white" font-family="'DM Sans',sans-serif" font-size="18" font-weight="700" text-anchor="middle">
            <textPath href="#h4" startOffset="14%">Pharma &amp; Life Sciences</textPath>
            <textPath href="#h4" startOffset="38%">Manufacturing</textPath>
            <textPath href="#h4" startOffset="62%">Retail &amp; CPG</textPath>
            <textPath href="#h4" startOffset="86%">BFSI</textPath>
          </text>
          <path d="M 125,500 A 375,375 0 0,1 875,500" fill="none" stroke="#e6e6e6" stroke-width="70"/>
          <line x1="500" y1="90" x2="500" y2="160" stroke="#0b1f44" stroke-width="3" transform="rotate(-30 500 500)"/>
          <line x1="500" y1="90" x2="500" y2="160" stroke="#0b1f44" stroke-width="3" transform="rotate(30 500 500)"/>
          <path id="h3" d="M 125,500 A 375,375 0 0,1 875,500" fill="none"/>
          <text fill="#0b1f44" font-family="'DM Sans',sans-serif" font-size="16" font-weight="700" text-anchor="middle">
            <textPath href="#h3" startOffset="20%">Front Office Use Case</textPath>
            <textPath href="#h3" startOffset="50%">Back Office Use Case</textPath>
            <textPath href="#h3" startOffset="80%">IT Use Case</textPath>
          </text>
          <path d="M 200,500 A 300,300 0 0,1 800,500" fill="none" stroke="#e31837" stroke-width="70"/>
          <line x1="500" y1="165" x2="500" y2="235" stroke="white" stroke-width="2" transform="rotate(-30 500 500)"/>
          <line x1="500" y1="165" x2="500" y2="235" stroke="white" stroke-width="2" transform="rotate(30 500 500)"/>
          <path id="h2" d="M 200,500 A 300,300 0 0,1 800,500" fill="none"/>
          <text fill="white" font-family="'DM Sans',sans-serif" font-size="22" font-weight="700" text-anchor="middle" letter-spacing="2">
            <textPath href="#h2" startOffset="25%">ERP</textPath>
            <textPath href="#h2" startOffset="50%">CRM</textPath>
            <textPath href="#h2" startOffset="75%">SCM</textPath>
          </text>
          <path d="M 260,500 A 240,240 0 0,1 740,500" fill="none" stroke="#f4f4f4" stroke-width="40"/>
          <path d="M 280,500 A 220,220 0 0,1 374,320 L 425,393 A 130,130 0 0,0 370,500 Z" fill="#0b1f44"/>
          <path d="M 374,320 A 220,220 0 0,1 626,320 L 575,393 A 130,130 0 0,0 425,393 Z" fill="#8c8c8c"/>
          <path d="M 626,320 A 220,220 0 0,1 720,500 L 630,500 A 130,130 0 0,0 575,393 Z" fill="#e31837"/>
          <text fill="white" font-family="'DM Sans',sans-serif" font-size="12" text-anchor="middle" transform="translate(325,415) rotate(-45)"><tspan x="0" font-weight="700">Phase 1:</tspan><tspan x="0" dy="1.3em">Ideation &amp; Build</tspan></text>
          <text fill="white" font-family="'DM Sans',sans-serif" font-size="12" text-anchor="middle" transform="translate(500,348)"><tspan x="0" font-weight="700">Phase 2: Adoption &amp;</tspan><tspan x="0" dy="1.3em">Managed Services</tspan></text>
          <text fill="white" font-family="'DM Sans',sans-serif" font-size="12" text-anchor="middle" transform="translate(675,418) rotate(45)"><tspan x="0" font-weight="700">Phase 3:</tspan><tspan x="0" dy="1.3em">Next Gen AI</tspan><tspan x="0" dy="1.3em">Evolution</tspan></text>
        </svg>

        <div class="dtitle" style="position:absolute;bottom:-18px;left:50%;transform:translateX(-50%) !important;animation:floatG 3s ease-in-out infinite;">
          <h3>Airo Agentic AI Trinity Package©</h3>
          <p>AI Use Case Lifecycle Management</p>
        </div>
      </div>

      <p class="hero-partners">In partnership with <strong>ANTHROPIC</strong> &amp; <strong>OpenAI</strong></p>
    </div>
  </div>


  <!-- ══ SLIDE 1 · PHASES ══════════════════════════════ -->
  <div class="slide slide-1">
    <div class="diagram-col">
      <svg viewBox="0 0 1000 520" xmlns="http://www.w3.org/2000/svg">
        <!-- outer layers dimmed -->
        <g class="arc-dim">
          <path d="M 50,500 A 450,450 0 0,1 950,500" fill="none" stroke="#0b1f44" stroke-width="70"/>
          <path d="M 125,500 A 375,375 0 0,1 875,500" fill="none" stroke="#e6e6e6" stroke-width="70"/>
          <path d="M 200,500 A 300,300 0 0,1 800,500" fill="none" stroke="#e31837" stroke-width="70"/>
          <path d="M 260,500 A 240,240 0 0,1 740,500" fill="none" stroke="#f4f4f4" stroke-width="40"/>
        </g>
        <!-- ACTIVE: phase wedges -->
        <g class="arc-active">
          <path d="M 260,500 A 240,240 0 0,1 740,500" fill="none" stroke="#f4f4f4" stroke-width="40"/>
          <path id="s1t" d="M 260,500 A 240,240 0 0,1 740,500" fill="none"/>
          <text fill="#0b1f44" font-family="'DM Sans',sans-serif" font-size="10" font-weight="600" text-anchor="middle">
            <textPath href="#s1t" startOffset="18%">Zero Lock-In · Your IP. Always.</textPath>
            <textPath href="#s1t" startOffset="50%">Production-First Delivery</textPath>
            <textPath href="#s1t" startOffset="82%">Agents That Don't Rot</textPath>
          </text>
          <path d="M 280,500 A 220,220 0 0,1 374,320 L 425,393 A 130,130 0 0,0 370,500 Z" fill="#0b1f44" filter="url(#glow1)"/>
          <path d="M 374,320 A 220,220 0 0,1 626,320 L 575,393 A 130,130 0 0,0 425,393 Z" fill="#8c8c8c" filter="url(#glow1)"/>
          <path d="M 626,320 A 220,220 0 0,1 720,500 L 630,500 A 130,130 0 0,0 575,393 Z" fill="#e31837" filter="url(#glow1)"/>
          <text fill="white" font-family="'DM Sans',sans-serif" font-size="13" text-anchor="middle" transform="translate(325,415) rotate(-45)"><tspan x="0" font-weight="700">Phase 1:</tspan><tspan x="0" dy="1.3em">Ideation &amp; Build</tspan></text>
          <text fill="white" font-family="'DM Sans',sans-serif" font-size="13" text-anchor="middle" transform="translate(500,350)"><tspan x="0" font-weight="700">Phase 2: Adoption &amp;</tspan><tspan x="0" dy="1.3em">Managed Services</tspan></text>
          <text fill="white" font-family="'DM Sans',sans-serif" font-size="13" text-anchor="middle" transform="translate(675,418) rotate(45)"><tspan x="0" font-weight="700">Phase 3:</tspan><tspan x="0" dy="1.3em">Next Gen AI</tspan><tspan x="0" dy="1.3em">Evolution</tspan></text>
        </g>
        <defs><filter id="glow1"><feGaussianBlur stdDeviation="6" result="b"/><feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge></filter></defs>
      </svg>
    </div>

    <div class="content-col c-white">
      <div class="ghost-num">01</div>
      <span class="chip chip-r">Layer 1 · Core Framework</span>
      <div class="s-line sl-r"></div>
      <h2 class="s-heading c-white">Three Phases<br>of the AI<br>Lifecycle</h2>
      <p class="s-desc">Every enterprise AI transformation follows a proven arc. Airo structures your journey across three disciplined phases — each building on the last to ensure lasting business value, not just pilots that fade.</p>
      <div class="fgrid">
        <div class="fcard">
          <div class="fcard-icon">🔵</div>
          <div class="fcard-title">Phase 1 · Ideation & Build</div>
          <div class="fcard-body">Rapid co-design of use cases, agent architecture, and proof-of-concept delivery.</div>
        </div>
        <div class="fcard">
          <div class="fcard-icon">⚙️</div>
          <div class="fcard-title">Phase 2 · Adoption & Managed</div>
          <div class="fcard-body">Change management, production hardening, and continuous monitoring at scale.</div>
        </div>
        <div class="fcard">
          <div class="fcard-icon">🔴</div>
          <div class="fcard-title">Phase 3 · Next Gen Evolution</div>
          <div class="fcard-body">Multi-model orchestration, autonomous upgrades, and future-proofing your stack.</div>
        </div>
        <div class="fcard">
          <div class="fcard-icon">🔒</div>
          <div class="fcard-title">Zero Lock-In</div>
          <div class="fcard-body">Your agents, your IP — portable and vendor-agnostic by design. Always.</div>
        </div>
      </div>
    </div>
  </div>


  <!-- ══ SLIDE 2 · INTEGRATIONS ════════════════════════ -->
  <div class="slide slide-2">
    <div class="diagram-col">
      <svg viewBox="0 0 1000 520" xmlns="http://www.w3.org/2000/svg">
        <g class="arc-dim">
          <path d="M 50,500 A 450,450 0 0,1 950,500" fill="none" stroke="#0b1f44" stroke-width="70"/>
          <path d="M 125,500 A 375,375 0 0,1 875,500" fill="none" stroke="#e6e6e6" stroke-width="70"/>
          <path d="M 280,500 A 220,220 0 0,1 374,320 L 425,393 A 130,130 0 0,0 370,500 Z" fill="#0b1f44"/>
          <path d="M 374,320 A 220,220 0 0,1 626,320 L 575,393 A 130,130 0 0,0 425,393 Z" fill="#8c8c8c"/>
          <path d="M 626,320 A 220,220 0 0,1 720,500 L 630,500 A 130,130 0 0,0 575,393 Z" fill="#e31837"/>
          <path d="M 260,500 A 240,240 0 0,1 740,500" fill="none" stroke="#f4f4f4" stroke-width="40"/>
        </g>
        <g class="arc-active">
          <path d="M 200,500 A 300,300 0 0,1 800,500" fill="none" stroke="#e31837" stroke-width="72" filter="url(#glow2)"/>
          <line x1="500" y1="165" x2="500" y2="235" stroke="white" stroke-width="2.5" transform="rotate(-30 500 500)"/>
          <line x1="500" y1="165" x2="500" y2="235" stroke="white" stroke-width="2.5" transform="rotate(30 500 500)"/>
          <path id="s2p" d="M 200,500 A 300,300 0 0,1 800,500" fill="none"/>
          <text fill="white" font-family="'DM Sans',sans-serif" font-size="26" font-weight="700" text-anchor="middle" letter-spacing="2">
            <textPath href="#s2p" startOffset="25%">ERP</textPath>
            <textPath href="#s2p" startOffset="50%">CRM</textPath>
            <textPath href="#s2p" startOffset="75%">SCM</textPath>
          </text>
        </g>
        <defs><filter id="glow2"><feGaussianBlur stdDeviation="8" result="b"/><feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge></filter></defs>
      </svg>
    </div>

    <div class="content-col c-navy">
      <div class="ghost-num" style="color:var(--navy)">02</div>
      <span class="chip chip-r">Layer 2 · Enterprise Integration</span>
      <div class="s-line sl-r"></div>
      <h2 class="s-heading c-navy">Deep System<br>Integrations</h2>
      <p class="s-desc">Airo agents don't work in isolation. They connect natively to your core enterprise platforms — unlocking intelligence across your entire business technology stack, without rip-and-replace disruption.</p>
      <div class="tags">
        <span class="tag" style="color:var(--navy)">ERP Connectors</span>
        <span class="tag" style="color:var(--red)">CRM Automation</span>
        <span class="tag" style="color:var(--navy)">SCM Intelligence</span>
        <span class="tag" style="color:var(--red)">Real-Time Sync</span>
        <span class="tag" style="color:var(--navy)">API-First Design</span>
        <span class="tag" style="color:var(--red)">Event-Driven Agents</span>
      </div>
      <p class="s-desc" style="font-size:13px; margin-top:16px; margin-bottom:0;">Whether SAP, Salesforce, Oracle, or bespoke systems — Airo's middleware-agnostic agent layer speaks the language of your existing stack fluently from day one.</p>
    </div>
  </div>


  <!-- ══ SLIDE 3 · USE CASES ═══════════════════════════ -->
  <div class="slide slide-3">
    <div class="diagram-col">
      <svg viewBox="0 0 1000 520" xmlns="http://www.w3.org/2000/svg">
        <g class="arc-dim">
          <path d="M 50,500 A 450,450 0 0,1 950,500" fill="none" stroke="#0b1f44" stroke-width="70"/>
          <path d="M 200,500 A 300,300 0 0,1 800,500" fill="none" stroke="#e31837" stroke-width="70"/>
          <path d="M 280,500 A 220,220 0 0,1 374,320 L 425,393 A 130,130 0 0,0 370,500 Z" fill="#0b1f44"/>
          <path d="M 374,320 A 220,220 0 0,1 626,320 L 575,393 A 130,130 0 0,0 425,393 Z" fill="#8c8c8c"/>
          <path d="M 626,320 A 220,220 0 0,1 720,500 L 630,500 A 130,130 0 0,0 575,393 Z" fill="#e31837"/>
          <path d="M 260,500 A 240,240 0 0,1 740,500" fill="none" stroke="#f4f4f4" stroke-width="40"/>
        </g>
        <g class="arc-active">
          <path d="M 125,500 A 375,375 0 0,1 875,500" fill="none" stroke="#e6e6e6" stroke-width="72" filter="url(#glow3)"/>
          <line x1="500" y1="90" x2="500" y2="160" stroke="#0b1f44" stroke-width="3" transform="rotate(-30 500 500)"/>
          <line x1="500" y1="90" x2="500" y2="160" stroke="#0b1f44" stroke-width="3" transform="rotate(30 500 500)"/>
          <path id="s3p" d="M 125,500 A 375,375 0 0,1 875,500" fill="none"/>
          <text fill="#0b1f44" font-family="'DM Sans',sans-serif" font-size="20" font-weight="700" text-anchor="middle">
            <textPath href="#s3p" startOffset="20%">Front Office Use Case</textPath>
            <textPath href="#s3p" startOffset="50%">Back Office Use Case</textPath>
            <textPath href="#s3p" startOffset="80%">IT Use Case</textPath>
          </text>
        </g>
        <defs><filter id="glow3"><feGaussianBlur stdDeviation="8" result="b"/><feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge></filter></defs>
      </svg>
    </div>

    <div class="content-col c-white">
      <div class="ghost-num">03</div>
      <span class="chip chip-w">Layer 3 · Functional Coverage</span>
      <div class="s-line sl-w"></div>
      <h2 class="s-heading c-white">Across Every<br>Function of<br>the Business</h2>
      <p class="s-desc">Airo agents are purpose-built for three major operational domains — ensuring every department benefits, not just IT or a single business unit.</p>
      <div class="fgrid">
        <div class="fcard">
          <div class="fcard-icon">🤝</div>
          <div class="fcard-title">Front Office</div>
          <div class="fcard-body">Sales automation, customer engagement, marketing intelligence, and revenue growth agents.</div>
        </div>
        <div class="fcard">
          <div class="fcard-icon">📋</div>
          <div class="fcard-title">Back Office</div>
          <div class="fcard-body">Finance, HR, legal, compliance, and procurement process automation at enterprise scale.</div>
        </div>
        <div class="fcard">
          <div class="fcard-icon">💻</div>
          <div class="fcard-title">IT Operations</div>
          <div class="fcard-body">DevOps co-pilots, incident response agents, and infrastructure monitoring &amp; remediation.</div>
        </div>
        <div class="fcard">
          <div class="fcard-icon">🔗</div>
          <div class="fcard-title">Cross-Functional</div>
          <div class="fcard-body">Agents that orchestrate workflows spanning multiple departments simultaneously.</div>
        </div>
      </div>
    </div>
  </div>


  <!-- ══ SLIDE 4 · INDUSTRIES ══════════════════════════ -->
  <div class="slide slide-4">
    <div class="diagram-col">
      <svg viewBox="0 0 1000 520" xmlns="http://www.w3.org/2000/svg">
        <g class="arc-dim">
          <path d="M 125,500 A 375,375 0 0,1 875,500" fill="none" stroke="#e6e6e6" stroke-width="70"/>
          <path d="M 200,500 A 300,300 0 0,1 800,500" fill="none" stroke="#e31837" stroke-width="70"/>
          <path d="M 280,500 A 220,220 0 0,1 374,320 L 425,393 A 130,130 0 0,0 370,500 Z" fill="#0b1f44"/>
          <path d="M 374,320 A 220,220 0 0,1 626,320 L 575,393 A 130,130 0 0,0 425,393 Z" fill="#8c8c8c"/>
          <path d="M 626,320 A 220,220 0 0,1 720,500 L 630,500 A 130,130 0 0,0 575,393 Z" fill="#e31837"/>
          <path d="M 260,500 A 240,240 0 0,1 740,500" fill="none" stroke="#f4f4f4" stroke-width="40"/>
        </g>
        <g class="arc-active">
          <path d="M 50,500 A 450,450 0 0,1 950,500" fill="none" stroke="#0b1f44" stroke-width="72" filter="url(#glow4)"/>
          <line x1="500" y1="15" x2="500" y2="85" stroke="#e31837" stroke-width="5" transform="rotate(-45 500 500)"/>
          <line x1="500" y1="15" x2="500" y2="85" stroke="#e31837" stroke-width="5"/>
          <line x1="500" y1="15" x2="500" y2="85" stroke="#e31837" stroke-width="5" transform="rotate(45 500 500)"/>
          <path id="s4p" d="M 50,500 A 450,450 0 0,1 950,500" fill="none"/>
          <text fill="white" font-family="'DM Sans',sans-serif" font-size="19" font-weight="700" text-anchor="middle" letter-spacing="1">
            <textPath href="#s4p" startOffset="14%">Pharma &amp; Life Sciences</textPath>
            <textPath href="#s4p" startOffset="38%">Manufacturing</textPath>
            <textPath href="#s4p" startOffset="62%">Retail &amp; CPG</textPath>
            <textPath href="#s4p" startOffset="86%">BFSI</textPath>
          </text>
        </g>
        <defs><filter id="glow4"><feGaussianBlur stdDeviation="8" result="b"/><feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge></filter></defs>
      </svg>
    </div>

    <div class="content-col c-navy">
      <div class="ghost-num" style="color:var(--navy)">04</div>
      <span class="chip chip-n">Layer 4 · Industry Verticals</span>
      <div class="s-line sl-n"></div>
      <h2 class="s-heading c-navy">Built for Your<br>Industry, Not<br>Generic AI</h2>
      <p class="s-desc">The outermost ring represents Airo's deep vertical expertise. Every agent is pre-trained on domain-specific workflows, compliance requirements, and industry KPIs — not retrofitted from generic models.</p>
      <div class="tags">
        <span class="tag" style="color:var(--navy)">🧬 Pharma &amp; Life Sciences</span>
        <span class="tag" style="color:var(--red)">🏭 Manufacturing</span>
        <span class="tag" style="color:var(--navy)">🛍️ Retail &amp; CPG</span>
        <span class="tag" style="color:var(--red)">🏦 BFSI</span>
      </div>
      <p class="s-desc" style="font-size:13px; margin-top:16px; margin-bottom:0;">From drug discovery pipelines to real-time fraud detection — Airo's industry layer ensures agents understand context, regulations, and domain language from day one.</p>
    </div>
  </div>


  <!-- ══ SLIDE 5 · CTA / FULL CIRCLE ═══════════════════ -->
  <div class="slide slide-5" style="grid-template-columns:1fr; align-items:center; justify-items:center;">
    <!-- bg ghost rings -->
    <svg style="position:absolute;inset:0;width:100%;height:100%;opacity:0.04;pointer-events:none" viewBox="0 0 800 500" preserveAspectRatio="xMidYMax slice">
      <ellipse cx="400" cy="500" rx="500" ry="450" fill="none" stroke="white" stroke-width="80"/>
      <ellipse cx="400" cy="500" rx="380" ry="340" fill="none" stroke="white" stroke-width="60"/>
      <ellipse cx="400" cy="500" rx="260" ry="230" fill="none" stroke="white" stroke-width="50"/>
      <ellipse cx="400" cy="500" rx="150" ry="130" fill="none" stroke="white" stroke-width="40"/>
    </svg>

    <div style="display:flex;flex-direction:column;align-items:center;text-align:center;padding:60px 24px 80px;gap:0;width:100%;position:relative;">
      <p class="hero-eyebrow" style="opacity:0;transform:translateY(20px);transition:opacity 0.5s 0.3s,transform 0.5s 0.3s;font-family:'Bebas Neue';letter-spacing:6px;font-size:12px;color:var(--red);margin-bottom:14px;" id="cta-ey">The Complete Circle</p>
      <h2 style="font-family:'Bebas Neue',sans-serif;font-size:clamp(40px,7vw,80px);color:white;line-height:0.92;margin-bottom:14px;opacity:0;transform:translateY(24px);transition:opacity 0.6s 0.4s,transform 0.6s 0.4s;" id="cta-h">All Four Layers.<br><span style="color:var(--red)">One Unified Package.</span></h2>
      <p style="font-family:'DM Serif Display',serif;font-style:italic;font-size:clamp(14px,1.8vw,20px);color:rgba(255,255,255,0.45);margin-bottom:40px;opacity:0;transition:opacity 0.5s 0.52s;" id="cta-s">In partnership with ANTHROPIC &amp; OpenAI</p>

      <div style="position:relative;width:min(560px,86vw);aspect-ratio:2/1;opacity:0;transform:scale(0.9);transition:opacity 0.7s 0.5s,transform 0.7s 0.5s;" id="cta-d">
        <svg viewBox="0 0 1000 520" xmlns="http://www.w3.org/2000/svg" style="width:100%;overflow:visible;filter:drop-shadow(0 28px 56px rgba(227,24,55,0.35))">
          <path d="M 50,500 A 450,450 0 0,1 950,500" fill="none" stroke="#0b1f44" stroke-width="70"/>
          <path id="f4" d="M 50,500 A 450,450 0 0,1 950,500" fill="none"/>
          <text fill="white" font-family="'DM Sans',sans-serif" font-size="18" font-weight="700" text-anchor="middle"><textPath href="#f4" startOffset="14%">Pharma &amp; Life Sciences</textPath><textPath href="#f4" startOffset="38%">Manufacturing</textPath><textPath href="#f4" startOffset="62%">Retail &amp; CPG</textPath><textPath href="#f4" startOffset="86%">BFSI</textPath></text>
          <path d="M 125,500 A 375,375 0 0,1 875,500" fill="none" stroke="#e6e6e6" stroke-width="70"/>
          <path id="f3" d="M 125,500 A 375,375 0 0,1 875,500" fill="none"/>
          <text fill="#0b1f44" font-family="'DM Sans',sans-serif" font-size="16" font-weight="700" text-anchor="middle"><textPath href="#f3" startOffset="20%">Front Office</textPath><textPath href="#f3" startOffset="50%">Back Office</textPath><textPath href="#f3" startOffset="80%">IT</textPath></text>
          <path d="M 200,500 A 300,300 0 0,1 800,500" fill="none" stroke="#e31837" stroke-width="70"/>
          <path id="f2" d="M 200,500 A 300,300 0 0,1 800,500" fill="none"/>
          <text fill="white" font-family="'DM Sans',sans-serif" font-size="22" font-weight="700" text-anchor="middle" letter-spacing="2"><textPath href="#f2" startOffset="25%">ERP</textPath><textPath href="#f2" startOffset="50%">CRM</textPath><textPath href="#f2" startOffset="75%">SCM</textPath></text>
          <path d="M 260,500 A 240,240 0 0,1 740,500" fill="none" stroke="#f4f4f4" stroke-width="40"/>
          <path d="M 280,500 A 220,220 0 0,1 374,320 L 425,393 A 130,130 0 0,0 370,500 Z" fill="#0b1f44"/>
          <path d="M 374,320 A 220,220 0 0,1 626,320 L 575,393 A 130,130 0 0,0 425,393 Z" fill="#8c8c8c"/>
          <path d="M 626,320 A 220,220 0 0,1 720,500 L 630,500 A 130,130 0 0,0 575,393 Z" fill="#e31837"/>
          <text fill="white" font-family="'DM Sans',sans-serif" font-size="12" text-anchor="middle" transform="translate(325,415) rotate(-45)"><tspan x="0" font-weight="700">Phase 1</tspan></text>
          <text fill="white" font-family="'DM Sans',sans-serif" font-size="12" text-anchor="middle" transform="translate(500,352)"><tspan x="0" font-weight="700">Phase 2</tspan></text>
          <text fill="white" font-family="'DM Sans',sans-serif" font-size="12" text-anchor="middle" transform="translate(675,420) rotate(45)"><tspan x="0" font-weight="700">Phase 3</tspan></text>
        </svg>
        <div style="position:absolute;bottom:-16px;left:50%;transform:translateX(-50%);background:var(--navy);border:2.5px solid var(--red);border-radius:9px;padding:12px 24px;text-align:center;white-space:nowrap;animation:floatG 3s ease-in-out infinite;">
          <h3 style="font-family:'Bebas Neue',sans-serif;font-size:clamp(13px,1.5vw,18px);color:white;letter-spacing:1px;">Airo Agentic AI Trinity Package©</h3>
          <p style="font-size:11px;color:rgba(255,255,255,0.6);margin-top:2px;">AI Use Case Lifecycle Management</p>
        </div>
      </div>

      <button class="cta-btn" style="margin-top:54px;opacity:0;transition:opacity 0.5s 0.75s;" id="cta-btn" onclick="goTo(0)">← Explore Again</button>
    </div>
  </div>

</div><!-- /stage -->

<script>
  const slides   = document.querySelectorAll('.slide');
  const dots     = document.querySelectorAll('.dot');
  const counter  = document.getElementById('counter');
  const scrollCue= document.getElementById('scroll-cue');
  const TOTAL    = slides.length;
  let current    = 0;
  let animating  = false;

  function goTo(next) {
    if (next === current || animating) return;
    if (next < 0 || next >= TOTAL) return;
    animating = true;

    const prev = current;
    current = next;

    // the incoming slide starts below (translateY 100%) by default CSS
    // if going backward, it starts above
    const goingForward = next > prev;

    const prevSlide = slides[prev];
    const nextSlide = slides[next];

    // Position next slide at the entry point
    if (!goingForward) {
      nextSlide.style.transition = 'none';
      nextSlide.style.transform = 'translateY(-100%)';
      nextSlide.offsetHeight; // force reflow
    }

    // re-enable transition
    nextSlide.style.transition = '';

    // Animate both
    prevSlide.classList.add('exiting');
    prevSlide.classList.remove('active');
    nextSlide.classList.add('active');

    // if going backward: exiting slide goes down
    if (!goingForward) {
      prevSlide.style.transform = 'translateY(100%)';
    }

    // update dots & counter
    dots.forEach((d,i) => d.classList.toggle('active', i === next));
    counter.textContent = String(next + 1).padStart(2,'0') + ' / ' + String(TOTAL).padStart(2,'0');

    // CTA slide: trigger inner animations
    if (next === 5) triggerCTA();

    scrollCue.style.opacity = next === TOTAL - 1 ? '0' : '1';

    setTimeout(() => {
      prevSlide.classList.remove('exiting');
      prevSlide.style.transform = '';
      prevSlide.style.transition = '';
      animating = false;
    }, 900);
  }

  function triggerCTA() {
    ['cta-ey','cta-h','cta-s','cta-d','cta-btn'].forEach((id,i) => {
      const el = document.getElementById(id);
      if (!el) return;
      setTimeout(() => {
        el.style.opacity = '1';
        el.style.transform = 'none';
      }, i * 120);
    });
  }

  // ─── WHEEL ────────────────────────────────────────────
  let wheelTimer = null;
  let wheelDelta = 0;
  window.addEventListener('wheel', (e) => {
    e.preventDefault();
    wheelDelta += e.deltaY;
    clearTimeout(wheelTimer);
    wheelTimer = setTimeout(() => {
      if (Math.abs(wheelDelta) > 30) {
        goTo(wheelDelta > 0 ? current + 1 : current - 1);
      }
      wheelDelta = 0;
    }, 60);
  }, { passive: false });

  // ─── KEYBOARD ─────────────────────────────────────────
  window.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowDown' || e.key === 'ArrowRight' || e.key === ' ') { e.preventDefault(); goTo(current + 1); }
    if (e.key === 'ArrowUp'   || e.key === 'ArrowLeft')                   { e.preventDefault(); goTo(current - 1); }
  });

  // ─── TOUCH ────────────────────────────────────────────
  let touchStartY = 0;
  window.addEventListener('touchstart', e => { touchStartY = e.touches[0].clientY; }, { passive: true });
  window.addEventListener('touchend',   e => {
    const dy = touchStartY - e.changedTouches[0].clientY;
    if (Math.abs(dy) > 40) goTo(dy > 0 ? current + 1 : current - 1);
  }, { passive: true });

  // ─── DOTS ─────────────────────────────────────────────
  dots.forEach(d => d.addEventListener('click', () => goTo(+d.dataset.idx)));

  // init first slide
  slides[0].classList.add('active');
</script>
</body>
</html>
						   
