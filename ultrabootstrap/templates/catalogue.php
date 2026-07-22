<?php
/**
 * Template Name: Catalogue
 *
 * @package hitmag
 */

get_header(); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
<style>
  :root{
    --red:#D8000C;
    --red-dark:#A50009;
    --white:#FFFFFF;
    --ink:#141414;
    --grey:#6b6b6b;
    --line:#ececec;
    --ease:cubic-bezier(.16,.84,.44,1);
    --font-head:'Roboto', sans-serif;
    --font-body:'Inter', sans-serif;
  }
  html{scroll-behavior:smooth;}
  
  /* Clean header margins and hide breadcrumbs on this template to prevent duplicate white spaces */
  .breadcrumb,
  .hitmag-breadcrumb,
  .breadcrumbs,
  #breadcrumbs,
  .page-header,
  .entry-header {
    display: none !important;
  }
  .site-content,
  #content-wrapper {
    padding-top: 0 !important;
    margin-top: 0 !important;
  }

  .catalogue-wrap {
    font-family: var(--font-body);
    color: var(--ink);
    background: var(--white);
    overflow-x: hidden;
  }
  .catalogue-wrap * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .catalogue-wrap a {
    text-decoration: none;
    color: inherit;
  }
  .catalogue-wrap .container {
    width: 100% !important;
    max-width: 1240px !important;
    margin: 0 auto !important;
    padding: 0 32px !important;
  }
  .catalogue-wrap h1, .catalogue-wrap h2, .catalogue-wrap h3 {
    font-family: var(--font-head);
  }
  .catalogue-wrap ::selection {
    background: var(--red);
    color: #fff;
  }

  @media(prefers-reduced-motion: reduce){ .catalogue-wrap *{animation:none !important;transition:none !important;} }

  /* ===================== PROGRESS BAR ===================== */
  .catalogue-wrap .progress-bar{position:fixed;top:0;left:0;height:3px;background:var(--red);width:0%;z-index:1200;transition:width .1s linear;}

  /* ===================== BANNER — LEFT ALIGNED SPLIT + PARTICLES ===================== */
  .catalogue-wrap .banner{position:relative;padding:50px 0 100px;overflow:hidden;background:var(--white);}
  .catalogue-wrap .banner-bg-tint{
    position:absolute;top:0;left:0;width:60%;height:100%;z-index:0;
    background:radial-gradient(circle at 10% 20%, rgba(216,0,12,0.06), transparent 55%);
  }
  .catalogue-wrap .banner-grid-lines{
    position:absolute;inset:0;z-index:0;opacity:.5;
    background-image:radial-gradient(circle, rgba(0,0,0,0.05) 1px, transparent 1px);
    background-size:26px 26px;
    mask-image:radial-gradient(ellipse 55% 60% at 15% 30%, black, transparent);
  }

  /* ── Particle layer ── */
  .catalogue-wrap .banner-particles{position:absolute;inset:0;z-index:1;pointer-events:none;overflow:hidden;}
  .catalogue-wrap .particle{
    position:absolute;width:4px;height:4px;background:var(--red);border-radius:50%;
    box-shadow:0 0 8px rgba(216,0,12,0.55);opacity:.7;animation:floatUp linear infinite;
  }
  @keyframes floatUp{
    0%{transform:translateY(0) translateX(0);opacity:0;}
    10%{opacity:.7;}
    90%{opacity:.45;}
    100%{transform:translateY(-520px) translateX(26px);opacity:0;}
  }

  .catalogue-wrap .banner-grid{position:relative;z-index:2;display:grid;grid-template-columns:1.05fr .95fr;gap:64px;align-items:center;}

  .catalogue-wrap .eyebrow{
    font-size:12px;font-weight:700;color:var(--red);letter-spacing:2px;text-transform:uppercase;
    margin-bottom:20px;opacity:0;transform:translateY(16px);animation:fadeUp .7s var(--ease) forwards .1s;
    display:inline-flex;align-items:center;gap:8px;
  }
  .catalogue-wrap .eyebrow .dot{width:7px;height:7px;background:var(--red);border-radius:50%;animation:pulse 1.6s infinite;}
  .catalogue-wrap .banner .mega{
    font-size:52px;font-weight:900;color:var(--ink);line-height:1.1;letter-spacing:-1.5px;
    margin-bottom:26px;opacity:0;transform:translateY(20px);animation:fadeUp .8s var(--ease) forwards .36s;
  }
  .catalogue-wrap .banner .mega .hl{color:var(--red);}
  .catalogue-wrap .banner p.lead{
    font-size:16.5px;color:var(--grey);max-width:480px;margin-bottom:38px;line-height:1.7;
    opacity:0;transform:translateY(16px);animation:fadeUp .7s var(--ease) forwards .52s;
  }
  .catalogue-wrap .banner-ctas{opacity:0;transform:translateY(16px);animation:fadeUp .7s var(--ease) forwards .68s;}

  .catalogue-wrap .btn-primary{
    display:inline-flex;align-items:center;gap:10px;background:var(--red);color:#fff;font-weight:700;
    padding:17px 34px;border-radius:6px;font-size:14.5px;text-transform:uppercase;letter-spacing:.5px;
    box-shadow:0 10px 26px rgba(216,0,12,0.35);transition:box-shadow .35s var(--ease), background .35s var(--ease);
  }
  .catalogue-wrap .btn-primary:hover{background:var(--red-dark);box-shadow:0 14px 34px rgba(216,0,12,0.5);color:#fff;}
  .catalogue-wrap .btn-primary .arrow{transition:transform .35s var(--ease);}
  .catalogue-wrap .btn-primary:hover .arrow{transform:translateX(3px);}

  .catalogue-wrap .btn-outline{
    display:inline-flex;align-items:center;gap:10px;border:1.5px solid var(--ink);color:var(--ink);
    font-weight:700;padding:16px 30px;border-radius:6px;font-size:14px;text-transform:uppercase;
    letter-spacing:.5px;transition:border-color .3s var(--ease), color .3s var(--ease), box-shadow .3s var(--ease);
  }
  .catalogue-wrap .btn-outline:hover{border-color:var(--red);color:var(--red);box-shadow:0 8px 20px rgba(216,0,12,0.12);}
  .catalogue-wrap .btn-outline .arrow{transition:transform .3s var(--ease);}
  .catalogue-wrap .btn-outline:hover .arrow{transform:translateX(3px);}

  .catalogue-wrap .btn-ghost{
    display:inline-flex;align-items:center;gap:10px;border:1.5px solid rgba(255,255,255,0.35);color:#fff;
    font-weight:700;padding:13px 26px;border-radius:6px;font-size:13.5px;text-transform:uppercase;
    letter-spacing:.5px;transition:border-color .3s var(--ease), background .3s var(--ease);white-space:nowrap;
  }
  .catalogue-wrap .btn-ghost:hover{border-color:#fff;background:rgba(255,255,255,0.1);}

  .catalogue-wrap .approval-note{
    display:block;margin-top:16px;font-size:12.5px;color:var(--grey);
    opacity:0;animation:fadeUp .7s var(--ease) forwards .84s;
  }

  @keyframes fadeUp{to{opacity:1;transform:translateY(0);}}
  @keyframes pulse{0%{box-shadow:0 0 0 0 rgba(216,0,12,0.6);}70%{box-shadow:0 0 0 8px rgba(216,0,12,0);}100%{box-shadow:0 0 0 0 rgba(216,0,12,0);}}

  /* ===== RIGHT SIDE — REFERENCE IMAGE COLLAGE (HERO) ===== */
  .catalogue-wrap .image-collage{position:relative;height:480px;opacity:0;animation:fadeIn 1s forwards .4s;}
  @keyframes fadeIn{to{opacity:1;}}
  .catalogue-wrap .collage-frame{
    position:absolute;border-radius:14px;overflow:hidden;box-shadow:0 30px 60px rgba(0,0,0,0.15);
    border:4px solid #fff;
  }
  .catalogue-wrap .collage-frame img{width:100%;height:100%;object-fit:cover;display:block;}
  .catalogue-wrap .collage-frame.main{top:0;right:0;width:78%;height:340px;z-index:2;animation:floatSlow 7s ease-in-out infinite;}
  .catalogue-wrap .collage-frame.side{bottom:0;left:0;width:56%;height:220px;z-index:3;animation:floatSlow 8s ease-in-out infinite reverse;border-color:var(--red);}
  @keyframes floatSlow{0%,100%{transform:translateY(0);}50%{transform:translateY(-14px);}}
  .catalogue-wrap .collage-accent{
    position:absolute;top:-20px;left:-20px;width:120px;height:120px;border:3px solid var(--red);
    border-radius:14px;z-index:1;opacity:.5;
  }

  /* ===================== CONTENT SECTION — TEXT LEFT / IMAGE RIGHT ===================== */
  .catalogue-wrap .content{padding:120px 0 !important;position:relative !important;background:#fafafa !important;border-top:1px solid var(--line) !important;border-bottom:1px solid var(--line) !important;display:block !important;width:100% !important;}
  .catalogue-wrap .content-grid{display:grid !important;grid-template-columns:1.05fr .95fr !important;gap:60px !important;align-items:center !important;}
  .catalogue-wrap .content-inner{max-width:620px !important;text-align:left !important;}
  .catalogue-wrap .tag{color:var(--red);font-weight:700;font-size:12px;letter-spacing:1.8px;text-transform:uppercase;}
  .catalogue-wrap .content h2{font-size:38px !important;font-weight:900 !important;letter-spacing:-1.1px !important;margin:16px 0 20px !important;line-height:1.18 !important;color:var(--ink) !important;}
  .catalogue-wrap .content p.body-text{font-size:16px !important;color:var(--grey) !important;line-height:1.8 !important;margin-bottom:36px !important;}

  .catalogue-wrap .chip-row{display:flex !important;justify-content:flex-start !important;gap:12px !important;flex-wrap:wrap !important;margin-bottom:42px !important;}
  .catalogue-wrap .chip{
    border:1px solid var(--line) !important;border-radius:30px !important;padding:10px 20px !important;font-size:13.5px !important;font-weight:600 !important;
    color:var(--ink) !important;background:#fff !important;transition:.3s var(--ease) !important;opacity:0;transform:translateY(14px);
    display:inline-flex !important;align-items:center !important;justify-content:center !important;
  }
  .catalogue-wrap .chip.visible{opacity:1 !important;transform:translateY(0) !important;}
  .catalogue-wrap .chip:hover{border-color:var(--red) !important;color:var(--red) !important;background:rgba(216,0,12,0.05) !important;}

  .catalogue-wrap .reveal{opacity:0;transform:translateY(40px);transition:.8s var(--ease);}
  .catalogue-wrap .reveal.visible{opacity:1 !important;transform:translateY(0) !important;}

  /* ===== RIGHT SIDE — CONTENT SECTION IMAGE ===== */
  .catalogue-wrap .content-visual{position:relative !important;height:440px !important;opacity:0;transform:translateX(30px);transition:1s var(--ease);}
  .catalogue-wrap .content-visual.visible{opacity:1 !important;transform:translateX(0) !important;}
  .catalogue-wrap .content-frame{
    position:absolute !important;border-radius:16px !important;overflow:hidden !important;box-shadow:0 30px 60px rgba(0,0,0,0.12) !important;
    border:4px solid #fff !important;
  }
  .catalogue-wrap .content-frame img{width:100% !important;height:100% !important;object-fit:cover !important;display:block !important;position:static !important;}
  .catalogue-wrap .content-frame.main{top:20px !important;right:0 !important;width:85% !important;height:360px !important;z-index:2 !important;animation:floatSlow 7.5s ease-in-out infinite;}
  .catalogue-wrap .content-frame.accent-line{
    top:0 !important;left:0 !important;width:40% !important;height:40% !important;border:3px solid var(--red) !important;border-radius:16px !important;
    z-index:1 !important;opacity:.4 !important;background:none !important;box-shadow:none !important;
  }



  /* ===================== AI4 POPUP MODAL ===================== */
  .catalogue-wrap .ai4-overlay{
    position:fixed;inset:0;z-index:2000;background:rgba(10,10,10,0.6);backdrop-filter:blur(4px);
    display:flex;align-items:center;justify-content:center;padding:24px;
    opacity:0;visibility:hidden;transition:opacity .4s var(--ease), visibility .4s var(--ease);
  }
  .catalogue-wrap .ai4-overlay.open{opacity:1;visibility:visible;}

  .catalogue-wrap .ai4-modal{
    position:relative;max-width:520px;width:100%;background:var(--ink);border-radius:16px;
    padding:48px 44px;overflow:hidden;text-align:center;
    transform:scale(.9) translateY(20px);opacity:0;transition:transform .45s var(--ease), opacity .45s var(--ease);
  }
  .catalogue-wrap .ai4-overlay.open .ai4-modal{transform:scale(1) translateY(0);opacity:1;}

  .catalogue-wrap .ai4-modal::before{
    content:"";position:absolute;inset:0;
    background:radial-gradient(circle at 20% 20%, rgba(216,0,12,0.4), transparent 55%),
               radial-gradient(circle at 85% 85%, rgba(216,0,12,0.25), transparent 55%);
  }

  .catalogue-wrap .ai4-close{
    position:absolute;top:18px;right:18px;width:34px;height:34px;border-radius:50%;
    border:1px solid rgba(255,255,255,0.25);background:rgba(255,255,255,0.05);color:#fff;
    display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:16px;
    z-index:3;transition:.25s var(--ease);
  }
  .catalogue-wrap .ai4-close:hover{background:var(--red);border-color:var(--red);}

  .catalogue-wrap .ai4-modal .event-badge{
    position:relative;z-index:2;display:inline-flex;align-items:center;gap:8px;
    border:1px solid rgba(216,0,12,0.5);color:var(--red);background:rgba(216,0,12,0.12);
    font-size:11px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;
    padding:7px 16px;border-radius:30px;margin-bottom:22px;
  }
  .catalogue-wrap .ai4-modal .event-badge .dot{width:6px;height:6px;background:var(--red);border-radius:50%;animation:pulse 1.6s infinite;}

  .catalogue-wrap .ai4-modal h3{position:relative;z-index:2;color:#fff;font-size:26px;font-weight:900;letter-spacing:-.6px;margin-bottom:14px;line-height:1.25;}
  .catalogue-wrap .ai4-modal p{position:relative;z-index:2;color:#c9c9c9;font-size:14.5px;line-height:1.7;margin-bottom:30px;max-width:400px;margin-left:auto;margin-right:auto;}

  .catalogue-wrap .ai4-modal-actions{position:relative;z-index:2;display:flex;flex-direction:column;gap:12px;align-items:center;}
  .catalogue-wrap .ai4-modal-actions .btn-primary{width:100%;justify-content:center;}
  .catalogue-wrap .ai4-modal-actions .ai4-later{
    color:#999;font-size:13px;font-weight:600;text-decoration:underline;text-underline-offset:3px;
    cursor:pointer;transition:.2s;
  }
  .catalogue-wrap .ai4-modal-actions .ai4-later:hover{color:#fff;}

  .catalogue-wrap .ai4-modal-inline{
    max-width:100%;display:flex;align-items:center;justify-content:space-between;text-align:left;
    padding:22px 32px;margin:0 auto;transform:none;opacity:1;border-radius:10px;
    background:linear-gradient(90deg, #3e0c10 0%, #151515 80%);
  }
  .catalogue-wrap .ai4-modal-inline::before{display:none;}
  .catalogue-wrap .ai4-modal-inline .ai4-modal-actions{flex-direction:row;width:auto;margin-top:0;gap:16px;}
  .catalogue-wrap .ai4-modal-inline .ai4-modal-actions .btn-primary, .catalogue-wrap .ai4-modal-inline .ai4-modal-actions .btn-ghost{
    width:auto;padding:12px 24px;font-size:12px;
  }
  .catalogue-wrap .ai4-modal-inline .ai4-modal-actions .btn-ghost{
    border:1px solid rgba(255,255,255,0.25);
  }
  .catalogue-wrap .ai4-modal-inline h3{margin-bottom:4px;font-size:20px;font-weight:800;letter-spacing:-0.5px;}
  .catalogue-wrap .ai4-modal-inline p{margin-bottom:0;margin-left:0;margin-right:0;max-width:none;font-size:13.5px;color:#a3a3a3;}

  /* ===================== RESPONSIVE STYLES ===================== */
  @media(max-width:1200px) {
    .catalogue-wrap .banner-grid{gap:40px;}
    .catalogue-wrap .content-grid{gap:40px !important;}
    .catalogue-wrap .banner .mega{font-size:44px;}
    .catalogue-wrap .image-collage{height:400px;}
    .catalogue-wrap .content-visual{height:380px !important;}
  }

  @media(max-width:991px) {
    .catalogue-wrap .banner-grid, .catalogue-wrap .content-grid{grid-template-columns:1fr !important;}
    .catalogue-wrap .banner-grid > div:first-child, .catalogue-wrap .content-inner{max-width:100% !important;text-align:center !important;}
    .catalogue-wrap .banner p.lead{margin-left:auto;margin-right:auto;}
    .catalogue-wrap .banner{padding:60px 0 80px;}
    .catalogue-wrap .content{padding:80px 0 !important;}
    .catalogue-wrap .banner .mega{font-size:38px;}
    .catalogue-wrap .content h2{font-size:32px !important;}
    .catalogue-wrap .image-collage{height:360px;margin:40px auto 0;max-width:600px;width:100% !important;}
    .catalogue-wrap .content-visual{height:360px !important;margin:40px auto 0 !important;max-width:600px !important;transform:translateX(0) !important;width:100% !important;}
    .catalogue-wrap .chip-row{justify-content:center !important;}
    .catalogue-wrap .banner-ctas{display:flex;flex-direction:column;align-items:center;text-align:center;}
    
    .catalogue-wrap .ai4-modal-inline{flex-direction:column;text-align:center;padding:28px 24px;}
    .catalogue-wrap .ai4-modal-inline h3{margin-bottom:8px;}
    .catalogue-wrap .ai4-modal-inline p{margin-bottom:20px;}
    .catalogue-wrap .ai4-modal-inline .ai4-modal-actions{flex-direction:column;width:100%;gap:12px;}
    .catalogue-wrap .ai4-modal-inline .ai4-modal-actions .btn-primary, .catalogue-wrap .ai4-modal-inline .ai4-modal-actions .btn-ghost{width:100%;justify-content:center;}
    .catalogue-wrap .ai4-modal{padding:40px 28px;}
  }

  @media(max-width:767px) {
    .catalogue-wrap .banner .mega{font-size:32px;letter-spacing:-1px;}
    .catalogue-wrap .banner p.lead{font-size:15px;margin-bottom:28px;}
    .catalogue-wrap .content h2{font-size:28px !important;margin:12px 0 16px !important;}
    .catalogue-wrap .content p.body-text{font-size:14.5px !important;margin-bottom:28px !important;}
    .catalogue-wrap .image-collage{height:280px;width:100% !important;}
    .catalogue-wrap .content-visual{height:280px !important;width:100% !important;}
    .catalogue-wrap .btn-primary, .catalogue-wrap .btn-outline{width:100%;justify-content:center;}
    .catalogue-wrap .chip{padding:8px 16px !important;font-size:12.5px !important;}
    #inlineCtaContainer{padding:10px 0 40px 0 !important;}
  }

  @media(max-width:480px) {
    .catalogue-wrap .banner{padding:40px 0 60px;}
    .catalogue-wrap .content{padding:60px 0 !important;}
    .catalogue-wrap .banner .mega{font-size:28px;}
    .catalogue-wrap .content h2{font-size:24px !important;}
    .catalogue-wrap .image-collage{height:220px;width:100% !important;}
    .catalogue-wrap .content-visual{height:220px !important;width:100% !important;}
    .catalogue-wrap .btn-primary, .catalogue-wrap .btn-outline{font-size:13px;padding:14px 20px;}
    .catalogue-wrap .ai4-modal{padding:30px 20px;}
    .catalogue-wrap .ai4-modal h3{font-size:22px;}
  }
</style>

<div class="catalogue-wrap">

<div class="progress-bar" id="progressBar"></div>

<!-- ===================== BANNER (SINGLE, LEFT ALIGNED, + PARTICLES) ===================== -->
<section class="banner" id="banner">
  <div class="banner-bg-tint"></div>
  <div class="banner-grid-lines"></div>
  <div class="banner-particles" id="bannerParticles"></div>

  <div class="container banner-grid">
    <div>
      <div class="eyebrow"><span class="dot"></span>Explore the agenTriniti℠ Catalogue</div>

      <div class="mega">2,000 Enterprise AI Use Cases.<br><span class="hl">One Place to Start.</span></div>
      <p class="lead">Use the agenTriniti℠ Catalogue to map relevant AI opportunities across your business and identify where AI can create measurable value.</p>

      <div class="banner-ctas">
        <a href="#footer" class="btn-primary">Request Access to the Catalogue <span class="arrow">→</span></a>
        <span class="approval-note">Catalogue access is subject to approval.</span>
      </div>
    </div>

    <div class="image-collage">
      <div class="collage-accent"></div>
      <div class="collage-frame main">
        <img src="/wp-content/uploads/2026/07/catalogue1.jpg" alt="Enterprise team reviewing AI dashboard">
      </div>
      <div class="collage-frame side">
        <img src="/wp-content/uploads/2026/07/catalogue2.jpg" alt="AI data analytics workspace">
      </div>
    </div>
  </div>

</section>

<!-- ===================== INLINE CTA SECTION ===================== -->
<section id="inlineCtaContainer" style="display: none; position: relative; z-index: 10; background: var(--white); padding: 20px 0 60px 0;">
  <div class="container">
    <div class="ai4-modal ai4-modal-inline">
      <div style="position:relative; z-index:2;">
        <h3>Met Airo leadership team at the Ai4?</h3>
        <p>Explore your exclusive agenTriniti℠ offer.</p>
      </div>
      <div class="ai4-modal-actions">
        <a href="#footer" class="btn-primary">ACCESS THE EARLY-BIRD OFFER <span class="arrow">→</span></a>
        <a href="#content" class="btn-ghost">EXPLORE THE CATALOGUE</a>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CONTENT (TEXT LEFT / IMAGE RIGHT) ===================== -->
<section class="content" id="content">
  <div class="container content-grid">
    <div class="content-inner">

      <h2 class="reveal">Discover and Prioritize<br>AI Opportunities</h2>
      <p class="body-text reveal">Browse 2,000 enterprise AI use cases across customer experience, finance, operations, HR and other business functions. Shortlist the opportunities most relevant to your priorities, assess their potential value and feasibility, and identify the right starting point for your AI roadmap.</p>

      <div class="chip-row">
        <div class="chip">Customer Experience</div>
        <div class="chip">Finance</div>
        <div class="chip">Operations</div>
        <div class="chip">HR</div>
        <div class="chip">+ Other Functions</div>
      </div>

      <a href="#footer" class="btn-outline reveal">Schedule Your agenTriniti℠ Discovery Workshop <span class="arrow">→</span></a>
    </div>

    <div class="content-visual" id="contentVisual">
      <div class="content-frame accent-line"></div>
      <div class="content-frame main">
        <img src="/wp-content/uploads/2026/07/catalogue3.jpg" alt="Enterprise team prioritizing AI opportunities in a workshop">
      </div>
    </div>
  </div>
</section>


<!-- ===================== AI4 POPUP MODAL ===================== -->
<div class="ai4-overlay" id="ai4Overlay">
  <div class="ai4-modal">
    <button class="ai4-close" id="ai4Close">✕</button>
    <div class="event-badge"><span class="dot"></span>Ai4 Conference</div>
    <h3>Met Airo leadership team at the Ai4?</h3>
    <p>Explore your exclusive agenTriniti℠ offer.</p>
    <div class="ai4-modal-actions">
      <a href="#footer" class="btn-primary" id="ai4Claim">Access the Early-Bird Offer <span class="arrow">→</span></a>
      <span class="ai4-later" id="ai4Later">Maybe later</span>
    </div>
  </div>
</div>

<script>
/* PROGRESS BAR */
const progressBar = document.getElementById('progressBar');
window.addEventListener('scroll', ()=>{
  const h = document.documentElement;
  const pct = (h.scrollTop)/(h.scrollHeight - h.clientHeight) * 100;
  if(progressBar) progressBar.style.width = pct + '%';
});

/* GENERIC REVEAL */
const revealEls = document.querySelectorAll('.reveal');
if(revealEls.length > 0) {
  const revealObserver = new IntersectionObserver(entries=>{
    entries.forEach(entry=>{ if(entry.isIntersecting) entry.target.classList.add('visible'); });
  }, {threshold:0.18});
  revealEls.forEach(el=>revealObserver.observe(el));
}

/* CHIP STAGGER */
const chips = document.querySelectorAll('.chip');
if(chips.length > 0) {
  const chipObserver = new IntersectionObserver(entries=>{
    entries.forEach(entry=>{
      if(entry.isIntersecting){
        chips.forEach((chip, i)=> setTimeout(()=>chip.classList.add('visible'), i*90));
        chipObserver.disconnect();
      }
    });
  }, {threshold:0.3});
  chipObserver.observe(chips[0].parentElement);
}

/* CONTENT VISUAL REVEAL */
const contentVisual = document.getElementById('contentVisual');
if(contentVisual) {
  const visualObserver = new IntersectionObserver(entries=>{
    entries.forEach(entry=>{ if(entry.isIntersecting) entry.target.classList.add('visible'); });
  }, {threshold:0.25});
  visualObserver.observe(contentVisual);
}

/* BANNER PARTICLES */
const particleContainer = document.getElementById('bannerParticles');
const reduceMotion = matchMedia('(prefers-reduced-motion: reduce)').matches;
if(!reduceMotion && particleContainer){
  for(let i=0;i<24;i++){
    const p = document.createElement('div');
    p.className = 'particle';
    const left = Math.random()*100;
    const delay = Math.random()*10;
    const duration = 9 + Math.random()*10;
    const bottomStart = Math.random()*80;
    p.style.left = left+'%';
    p.style.bottom = bottomStart+'%';
    p.style.animationDelay = delay+'s';
    p.style.animationDuration = duration+'s';
    particleContainer.appendChild(p);
  }
}

/* ===================== AI4 POPUP MODAL LOGIC ===================== */
const ai4Overlay = document.getElementById('ai4Overlay');
const ai4Close = document.getElementById('ai4Close');
const ai4Later = document.getElementById('ai4Later');
const ai4Claim = document.getElementById('ai4Claim');

function openAi4Modal(){
  if(ai4Overlay) {
    ai4Overlay.classList.add('open');
    document.body.style.overflow = 'hidden';
  }
}
function closeAi4Modal(){
  if(ai4Overlay) {
    ai4Overlay.classList.remove('open');
    document.body.style.overflow = '';
  }
  const inlineCta = document.getElementById('inlineCtaContainer');
  if(inlineCta) {
    inlineCta.style.display = 'block';
  }
}

// Auto-open after a short delay (every page refresh)
setTimeout(openAi4Modal, 1800);

if(ai4Close) {
  ai4Close.addEventListener('click', ()=>{
    closeAi4Modal();
  });
}
if(ai4Later) {
  ai4Later.addEventListener('click', ()=>{
    closeAi4Modal();
  });
}
if(ai4Claim) {
  ai4Claim.addEventListener('click', ()=>{
    closeAi4Modal();
  });
}
if(ai4Overlay) {
  ai4Overlay.addEventListener('click', (e)=>{
    if(e.target === ai4Overlay){
      closeAi4Modal();
    }
  });
}
// Close on ESC key
document.addEventListener('keydown', (e)=>{
  if(e.key === 'Escape' && ai4Overlay && ai4Overlay.classList.contains('open')){
    closeAi4Modal();
  }
});
</script>

</div><!-- end .catalogue-wrap -->

<?php get_footer(); ?>
