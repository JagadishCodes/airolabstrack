<?php
/**
 * Template Name: Trinity-v4
 * The template used for displaying fullwidth page content in Publications page
 *
 * @package hitmag
 */

get_header(); ?>

<link
    href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&family=Inter:wght@400;500;600;700&display=swap"
    rel="stylesheet" />
<style>
    .slide {
        height: 100vh;
    }
	

    html,
    body {
        overflow-y: auto !important;
        overflow-x: hidden !important;
        scroll-behavior: smooth;
    }

    /* Hide WordPress theme breadcrumbs and page headers for a clean landing page experience */
    .hitmag-breadcrumb,
    .breadcrumbs,
    #breadcrumbs,
    .page-header,
    .entry-header {
        display: none !important;
    }

    .footers {
        min-height: 100vh;
    }
	
	/* Make table container full width and auto height */
.slide.s6 .cmp-table-wrap {
  width: 100% !important;
  height: auto !important;
  overflow-x: auto;   /* allows horizontal scroll if needed */
  overflow-y: visible; /* ensures rows are not clipped */
}

/* Ensure table itself stretches full width */
.slide.s6 .cmp-table {
  width: 100% !important;
  table-layout: auto; /* or fixed if you want equal column widths */
}


    :root {
        --navy: #0b1f44;
        --red: #e31837;
        --silver: #e6e6e6;
        --cream: #f8f9fa;
        /* Lighter cream/gray for subtle depth */
        --white: #ffffff;
        --text-dark: #1e293b;
        --text-muted: #64748b;
        --dur: 1.25s;
        --ease: cubic-bezier(0.16, 1, 0.3, 1);
    }
	


    /* ── STAGE ── */
    #stage {
        position: relative;
        width: 100%;
        height: 100vh;
        inset: 0;
        overflow: hidden;
    }
	

    /* 1. Ensure slides become scrollable internally when content is taller than the screen */
    .slide {
        overflow-y: auto !important;
        overflow-x: hidden !important;
        -webkit-overflow-scrolling: touch;
        /* Smooth scrolling for iOS */
    }

    @media (max-width: 820px) {

        /* 2. Keep absolute positioning for JS animations, but push content down */
        .slide {
            padding-top: 5px !important;
            /* Pushes content safely below the sticky header */
            padding-bottom: 30px !important;
            /* Space for the bottom CTA button */
            display: flex !important;
            flex-direction: column !important;
            justify-content: flex-start !important;
        }

        /* 3. Reset negative margins that were pulling content upwards */
        .diagram-col,
        .diagram-col-end,
        .content-col,
        .hero-inner,
        .cmp-wrap {
            margin-top: 0 !important;
            padding: 10px 20px !important;
        }

        /* 4. Re-order so diagram is on top, content on bottom */
        .diagram-col,
        .diagram-col-end {
            order: 1;
            min-height: auto !important;
        }

        .content-col {
            order: 2;
            align-items: center;
            text-align: center;
        }

        /* 5. Hero Slide Specifics */
        .hero-h {
            font-size: clamp(28px, 6vw, 36px) !important;
            margin-top: 10px;
        }

        .hero-dwrap {
            top: 0 !important;
            transform: scale(1) !important;
            margin-top: 20px;
        }

        /* 6. UI Overlaps Fixes */
        #dots {
            right: 8px !important;
            transform: translateY(-50%) scale(0.85);
            z-index: 300;
        }

        #slide-chip {
            top: 85px !important;
            /* Pinned just below the header */
            left: 50% !important;
            transform: translateX(-50%) !important;
            width: max-content;
            margin-top: 0 !important;
        }

        #slide-chip.show {
            transform: translateX(-50%) translateY(0) !important;
        }

        /* 7. Slide 6 (Comparison Table) */
        .s6 {
            align-items: flex-start !important;
        }

        .s6 .cmp-card {
            border-radius: 12px !important;
            overflow-x: auto !important;
        }

        .cmp-table th,
        .cmp-table td {
            padding: 6px !important;
            font-size: 13px !important;
        }

        .cmp-dim-head,
        .cmp-table tbody td.cmp-dim-cell {
            padding-left: 10px !important;
        }

        /* Center text alignments for mobile readability */
        .sh {
            text-align: center;
            font-size: 28px !important;
        }

        .sd {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        .tags {
            justify-content: center;
        }
    }

    @media (max-width: 480px) {

        /* 8. Strict Mobile (Phones) Tweaks */
        .fgrid {
            grid-template-columns: 1fr !important;
        }

        /* Stack cards */

        /* Center the floating 'Book a Demo' button at the bottom */
        #fcta {
            position: fixed !important;
            /* This forces it to the glass of the viewport */
            left: 50% !important;
            right: auto !important;
            bottom: 150px !important;
            /* Keeps it exactly 20px from the bottom edge */
            top: auto !important;
            /* Clears any accidental top spacing */
            width: 90% !important;
            max-width: 350px !important;
            justify-content: center !important;
            z-index: 99999 !important;
            /* Ensures it sits above all scrolling text/images */
            transform: translateX(-50%) translateY(80px) !important;
        }

      #fcta.show {
            transform: translateX(-50%) translateY(0) !important;
        }
 
        /* Modals */
        #shared-modal-box,
        #phase-modal-box {
            padding: 24px 20px !important;
        }

        #shared-modal-title,
        #phase-modal-title {
            font-size: 22px !important;
        }
    }


    /* only when s6 is active show scroll */
    body.s6-scroll {
        overflow-y: auto;
    }

    .slide.s6 {
        height: 100vh;
        min-height: 100vh;
        overflow: hidden;
		padding: 5px 0px;
    }

    .slide.s6.active {
        overflow-y: auto !important;
    }

    .s6 {
		top: 0 !important;
		height: 100vh !important;
		min-height: 100vh !important;
		overflow: hidden !important;
	}

    .slide {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: stretch;
        transform: translateY(100%);
        will-change: transform;
        z-index: 1;
        background: var(--white);
    }

    .slide.active {
        transform: translateY(0%);
        z-index: 2;
    }

    /* White Theme Slide Backgrounds */
    .s0 {
        background: var(--white);
    }

    .s1 {
        background: var(--cream);
    }

    .s2 {
        background: var(--white);
    }

    .s3 {
        background: var(--cream);
    }

    .s4 {
        background: var(--white);
    }

    .s5 {
        background: var(--cream);
    }

    .s6 {
        background: var(--white);
    }

    /* CTA on slides */
    #fcta.on-red {
        background: var(--navy);
        color: var(--white);
        box-shadow: 0 8px 30px rgba(11, 31, 68, 0.25);
    }

    #fcta.on-red:hover {
        background: #06122a;
    }

    /* ── COLUMNS ── */
    .diagram-col {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 10px 0px;
        position: relative;
        overflow: visible;
        gap: 0;
    }

    .diagram-col-end {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        /*         padding: 40px 20px 40px 50px; */
        position: relative;
        overflow: visible;
        gap: 0;
        width: 100%;
    }

    .diagram-col svg {
        width: min(760px, 90%);
        overflow: visible;
        flex-shrink: 0;
    }

    .content-col {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 15px 10px 10px 0px;
        position: relative;
        top: 0;
    }

    .fgrid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;


    }

    .fcard {
        padding: 8px 10px;
        border-radius: 12px;
        border: 1px solid rgba(0, 0, 0, 0.04);
        background: #fff;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
        transition:
            transform 0.3s ease,
            box-shadow 0.3s ease;
    }

    .fcard:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06);
    }

    /* 		newly added hover effect */
    .fcard[onclick]:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 40px rgba(227, 24, 55, 0.22);
        border-color: rgba(227, 24, 55, 0.55) !important;
    }

    .fcard[onclick]:hover .fcard-t {
        color: var(--red);
    }

    .s1 .fcard,
    .s3 .fcard {
        border: 1px solid rgba(0, 0, 0, 0.03);
        background: #ffffff;
    }

    .fcard-ico {
        font-size: 22px;
        margin-bottom: 8px;
    }

    .fcard-t {
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 6px;
        letter-spacing: 0.2px;
        color: var(--navy);
    }

    .fcard-b {
        font-size: 13px;
        line-height: 1.6;
        color: var(--text-muted);
    }

    #slide-chip {
        position: fixed;
        left: 32px;
        z-index: 300;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 18px;
        border-radius: 999px;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        opacity: 0;
        transform: translateY(-10px);
        transition:
            opacity 0.4s ease,
            transform 0.4s ease,
            background 0.3s;
        pointer-events: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    #slide-chip.show {
        opacity: 1;
        transform: translateY(0);
    }

    @media (max-width: 820px) {

        /* Completely hide the dynamic Layer badge on mobile */
        #slide-chip,
        #slide-chip.show {
            display: none !important;
        }
    }

    .chip {
        display: none;
    }

    .chip-r {
        background: var(--red);
        color: #fff;
    }

    .chip-n {
        background: var(--navy);
        color: #fff;
    }

    .sline {
        width: 48px;
        height: 4px;
        border-radius: 2px;
        margin-bottom: 18px;
    }

    .sl-r {
        background: var(--red);
    }

    .sl-n {
        background: var(--navy);
    }

    .sh {
        font-family: "Roboto Slab", serif;
        font-size: clamp(32px, 4vw, 42px);
        line-height: 0.95;
        letter-spacing: 1px;
        margin-bottom: 16px;
        font-weight: bold;
    }

    .cn {
        color: var(--navy);
    }

    .cr {
        color: var(--red);
    }

    .sd {
        font-size: clamp(14px, 1.1vw, 16px);
        line-height: 1.7;
        color: var(--text-muted);
        max-width: 530px;
        margin-bottom: 24px;
    }

    /* ── FLOATING CTA ── */
    #fcta {
        position: absolute;
        bottom: 70px;
        right: 28px;
        z-index: 200;
        background: var(--red);
        color: #fff;
        border: none;
        border-radius: 50px;
        padding: 12px 22px;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 0.5px;
        cursor: pointer;
        font-family: "Inter", sans-serif;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 8px 30px rgba(227, 24, 55, 0.45);
        transform: translateY(80px);
        opacity: 0;
        transition:
            transform 0.4s var(--ease),
            opacity 0.4s ease,
            box-shadow 0.2s;
        max-width: calc(50vw - 56px);
    }

    #fcta.show {
        transform: translateY(0);
        opacity: 1;
    }

    #fcta:hover {
        box-shadow: 0 14px 42px rgba(227, 24, 55, 0.6);
        transform: translateY(-2px);
    }

    #fcta svg {
        width: 15px;
        height: 15px;
        flex-shrink: 0;
    }

    .tags {
        display: flex;
        flex-wrap: wrap;
        gap: 9px;
        padding-top: 0px !important;
        padding-bottom: 0px !important;
    }

    .tag {
        padding: 6px 15px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
        border: 1px solid currentColor;
        background: rgba(255, 255, 255, 0.5);
        opacity: 0.9;
        transition:
            background 0.2s ease,
            color 0.2s ease,
            transform 0.2s ease,
            box-shadow 0.2s ease,
            opacity 0.2s ease;
    }

    .tag[onclick]:hover {
        color: #fff !important;
        opacity: 1;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
    }

    .tag[onclick][style*="--navy"]:hover {
        background: var(--navy);
        border-color: var(--navy);
    }

    .tag[onclick][style*="--red"]:hover {
        background: var(--red);
        border-color: var(--red);
    }

    .cta-btn {
        display: inline-block;
        padding: 14px 34px;
        background: var(--red);
        color: #fff;
        border-radius: 8px;
        font-weight: 700;
        font-size: 14px;
        letter-spacing: 1px;
        text-decoration: none;
        border: none;
        cursor: pointer;
        transition:
            background 0.2s,
            transform 0.2s;
        width: fit-content;
        font-family: "Inter", sans-serif;
    }

    .cta-btn:hover {
        background: #ff2244;
        transform: translateY(-2px);
    }

    /* ── CONTENT REVEAL ── */
    .content-col>* {
        opacity: 0;
        transform: translateY(20px);
        transition:
            opacity 0.5s ease,
            transform 0.5s ease;
    }

    .slide.active .content-col>* {
        opacity: 1;
        transform: none;
    }

    .slide.active .content-col>*:nth-child(1) {
        transition-delay: 0.38s;
    }

    .slide.active .content-col>*:nth-child(2) {
        transition-delay: 0.47s;
    }

    .slide.active .content-col>*:nth-child(3) {
        transition-delay: 0.55s;
    }

    .slide.active .content-col>*:nth-child(4) {
        transition-delay: 0.63s;
    }

    .slide.active .content-col>*:nth-child(5) {
        transition-delay: 0.71s;
    }

    .slide.active .content-col>*:nth-child(6) {
        transition-delay: 0.79s;
    }

    /* ── DIAGRAM REVEAL ── */
    .diagram-col svg {
        opacity: 0;
        transform: scale(0.88) translateY(28px);
        transition:
            opacity 0.68s ease,
            transform 0.68s var(--ease);

    }

    .slide.active .diagram-col svg {
        opacity: 1;
        transform: scale(1) translateY(0);
        transition-delay: 0.22s;
    }

    /* ── FLOATING TITLE BOX ── */
    .dtitle {
        position: relative;
        left: auto;
        bottom: auto;
        margin-top: -18px;
        background: var(--white);
        border: 2px solid var(--red);
        border-radius: 9px;
        padding: 12px 22px;
        text-align: center;
        white-space: nowrap;
        animation: floatG 3s ease-in-out infinite;
        opacity: 0;
        transition: opacity 0.5s ease 0.7s;
        z-index: 10;
    }

    .slide.active .dtitle {
        opacity: 1;
    }

    .dtitle h3 {
        font-family: "Roboto Slab", serif;
        font-size: clamp(14px, 1.5vw, 19px);
        color: var(--navy);
        letter-spacing: 1px;
    }

    .dtitle p {
        font-size: 11px;
        color: var(--text-muted);
        margin-top: 2px;
        font-weight: 500;
    }

    @keyframes floatG {

        0%,
        100% {
            box-shadow: 0 8px 22px rgba(0, 0, 0, 0.08);
            transform: translateY(0);
        }

        50% {
            box-shadow: 0 16px 32px rgba(227, 24, 55, 0.15);
            transform: translateY(-8px);
        }
    }

    /* ── ARC DIM / ACTIVE ── */
    .dim {
        opacity: 0.2;
    }

    .lit {
        opacity: 1;
    }

    /* ── DOTS ── */
    #dots {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 12px;
        z-index: 100;
    }

    .dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: rgba(11, 31, 68, 0.15);
        border: 2px solid transparent;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .dot.active {
        background: var(--red);
        border-color: var(--red);
        transform: scale(1.45);
        box-shadow: 0 0 10px rgba(227, 24, 55, 0.4);
    }

    /* ── SCROLL CUE ── */
    #scue {
        position: absolute;
        bottom: 26px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 100;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 5px;
        color: rgba(11, 31, 68, 0.4);
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        animation: bounceY 2s ease-in-out infinite;
        transition: opacity 0.4s;
    }

    #scue svg {
        width: 17px;
        height: 17px;
    }

    @keyframes bounceY {

        0%,
        100% {
            transform: translateX(-50%) translateY(0);
        }

        50% {
            transform: translateX(-50%) translateY(8px);
        }
    }

    /* ── HERO SLIDE ── */
    .s0 {
        grid-template-columns: 1fr;
    }

    .hero-inner {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 4px 24px 20px;
        width: 100%;
    }

    .hero-ey {
        font-family: "Inter", sans-serif;
        letter-spacing: 6px;
        font-size: 14px;
        color: var(--red);
        margin-bottom: 0px;
        margin-top: 30px;
    }

    .hero-h {
        font-family: "Roboto Slab", serif;
        font-weight: bold;
        font-size: clamp(26px, 6vw, 36px) !important;
        color: var(--navy);
        line-height: 1.2;
        margin-bottom: 2px;
    }

    .hero-h span {
        color: var(--red);
    }

    .hero-sub {
        font-family: "Inter", sans-serif;
        font-style: italic;
        font-size: clamp(16px, 1.8vw, 14px) !important;
        color: var(--text-muted);
        margin-bottom: 30px;
        line-height: 1.2;
    }

    .hero-dwrap {
        top: 20px;
        position: relative;
        width: min(720px, 88vw);
        opacity: 0;
        transform: scale(0.9) translateY(28px);
        transition:
            opacity 0.7s,
            transform 0.7s var(--ease);
    }

    .s0.active .hero-dwrap {
        opacity: 1;
        transform: scale(1) translateY(0);
        transition-delay: 0.48s;
    }

    .hero-dwrap svg {
        width: 100%;
        overflow: visible;
        filter: drop-shadow(0 24px 50px rgba(11, 31, 68, 0.15));
    }

    .hero-partners {
        margin-top: 12px;
        font-size: 12px;
        font-weight: 600;
        color: rgba(11, 31, 68, 0.4);
        letter-spacing: 2px;
        text-transform: uppercase;
        opacity: 0;
        transition: opacity 0.5s 0.85s;
    }

    .s0.active .hero-partners {
        opacity: 1;
    }

    .hero-partners strong {
        color: var(--navy);
    }

    /* ── HERO SLIDE HOVER EFFECTS FOR PHASES ── */
    .phase-group {
        cursor: pointer;
        transition: filter 0.3s ease;
    }

    .phase-group:hover {
        filter: brightness(1.1) drop-shadow(0px 8px 16px rgba(0, 0, 0, 0.1));
    }

    /* ── CTA SLIDE ── */
    .s5 {
        grid-template-columns: 1fr;
        align-items: center;
        justify-items: center;
    }

    /* ── DIAGRAM COL HOVER HIGHLIGHT ── */
    .diagram-col {
        position: relative;
        cursor: pointer;
    }

    .diagram-col .arch-hover-overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(ellipse at 30% 60%,
                rgba(227, 24, 55, 0.05) 0%,
                rgba(255, 255, 255, 0) 60%,
                transparent 100%);
        opacity: 0;
        transition: opacity 0.45s ease;
        pointer-events: none;
        border-radius: 0;
        z-index: 5;
    }

    .diagram-col:hover .arch-hover-overlay {
        opacity: 1;
    }

    .diagram-col svg .hover-ring {
        transition:
            filter 0.4s ease,
            opacity 0.4s ease;
    }

    .diagram-col:hover svg .hover-ring {
        filter: drop-shadow(0 0 22px rgba(227, 24, 55, 0.3));
    }

    .diagram-hover-cta {
        position: absolute;
        bottom: 60px;
        left: 50%;
        transform: translateX(-50%) translateY(18px);
        background: var(--navy);
        color: #fff;
        border: none;
        border-radius: 50px;
        padding: 12px 28px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.5px;
        cursor: pointer;
        font-family: "Inter", sans-serif;
        display: flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 8px 30px rgba(11, 31, 68, 0.3);
        opacity: 0;
        transition:
            opacity 0.35s ease,
            transform 0.35s ease;
        pointer-events: none;
        white-space: nowrap;
        z-index: 20;
    }

    .diagram-col:hover .diagram-hover-cta {
        opacity: 1;
        transform: translateX(-50%) translateY(0);
        pointer-events: auto;
    }

    .diagram-hover-cta svg {
        width: 14px;
        height: 14px;
        flex-shrink: 0;
    }

    @keyframes archPulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.85;
        }
    }

    .diagram-col:hover svg .phase-wedge {
        animation: archPulse 1.8s ease-in-out infinite;
    }

    .diagram-col:hover svg g.lit {
        filter: drop-shadow(0 0 20px rgba(227, 24, 55, 0.3));
        transition: filter 0.45s ease;
    }

    .diagram-col svg g.lit {
        transition: filter 0.45s ease;
    }

    /* ── STAT CARDS (Slide 2 ERP/CRM/SCM) ── */
    .stat-grid {
        display: flex;
        flex-direction: column;
        gap: 7px;
        margin-top: 8px;
    }

    .stat-card {
        position: relative;
        background: #ffffff;
        border: 1px solid rgba(0, 0, 0, 0.04);
        border-radius: 12px;
        padding: 8px 11px 8px 13px;
        box-shadow: 0 4px 18px rgba(11, 31, 68, 0.06);
        overflow: hidden;
        transition:
            transform 0.3s ease,
            box-shadow 0.3s ease;
    }

    .stat-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 5px;
        background: var(--red);
    }

    .stat-card::after {
        content: "";
        position: absolute;
        top: -30px;
        right: -30px;
        width: 120px;
        height: 120px;
        background: radial-gradient(circle,
                rgba(227, 24, 55, 0.06) 0%,
                rgba(227, 24, 55, 0) 70%);
        pointer-events: none;
    }

    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 32px rgba(227, 24, 55, 0.14);
    }

    .stat-card .stat-label {
        display: inline-block;
        font-family: "Inter", sans-serif;
        font-size: 16px;
        letter-spacing: 3px;
        color: var(--red);
        margin-bottom: 6px;
    }

    .stat-card .stat-body {
        font-family: "Inter", sans-serif;
        font-size: 15px;
        line-height: 1.55;
        color: var(--text-dark);
        margin: 0;
    }

    .stat-card .stat-body strong {
        color: var(--navy);
        font-weight: 700;
    }

    .stat-card .stat-figure {
        font-weight: 700;
        color: var(--navy);
    }

    /* ── SLIDE HIGHLIGHT CALLOUT ── */
    .slide-highlight {
        position: absolute;
        top: 28px;
        right: 28px;
        display: flex;
        align-items: center;
        gap: 9px;
        padding: 10px 18px 10px 14px;
        border-radius: 50px;
        font-family: "Inter", sans-serif;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.4px;
        pointer-events: none;
        z-index: 30;
        opacity: 0;
        transform: translateY(-16px) scale(0.88);
        transition:
            opacity 0s,
            transform 0s;
        white-space: nowrap;
        background: rgba(255, 255, 255, 0.8);
        border: 1px solid rgba(0, 0, 0, 0.08);
        color: var(--navy);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
        backdrop-filter: blur(8px);
    }

    .slide.active .slide-highlight {
        opacity: 1;
        transform: translateY(0) scale(1);
        transition:
            opacity 0.55s cubic-bezier(0.34, 1.56, 0.64, 1) 0.52s,
            transform 0.55s cubic-bezier(0.34, 1.56, 0.64, 1) 0.52s;
    }

    .slide-highlight .hl-icon {
        width: 26px;
        height: 26px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        flex-shrink: 0;
    }

    .slide-highlight .hl-text {
        display: flex;
        flex-direction: column;
        line-height: 1.2;
    }

    .slide-highlight .hl-label {
        font-size: 9px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        opacity: 0.5;
    }

    .slide-highlight .hl-value {
        font-size: 13px;
        font-weight: 800;
    }

    .s1 .slide-highlight .hl-icon {
        background: var(--red);
        color: white;
    }

    .s2 .slide-highlight .hl-icon {
        background: var(--navy);
        color: white;
    }

    .s3 .slide-highlight .hl-icon {
        background: var(--red);
        color: white;
    }

    .s4 .slide-highlight .hl-icon {
        background: var(--navy);
        color: white;
    }

    @keyframes litPulseLight {

        0%,
        100% {
            filter: drop-shadow(0 0 10px rgba(227, 24, 55, 0.2));
        }

        50% {
            filter: drop-shadow(0 0 24px rgba(227, 24, 55, 0.45));
        }
    }

    .slide.active .diagram-col svg g.lit {
        animation: litPulseLight 2.4s ease-in-out infinite;
        animation-delay: 0.6s;
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 820px) {
        .slide:not(.s0):not(.s5) {
            grid-template-columns: 1fr;
            grid-template-rows: auto 1fr;
        }

        .diagram-col {
            padding: 28px 20px 0;
            order: 1;
        }

        .diagram-col svg {
            overflow: visible;
        }

        .hero-sub {
            font-family: "Inter", sans-serif;
            font-style: italic;
            font-size: clamp(16px, 1.8vw, 14px) !important;
            color: var(--text-muted);
            margin-bottom: 20px;
            opacity: 0;
            line-height: 1.2;
            transform: translateY(18px);
            transition: opacity 0.5s, transform 0.5s;
        }

        /*         .content-col {
          padding: 20px 22px 90px;
          order: 2;
        } */
        .ghost {
            display: none;
        }

        .fgrid {
            grid-template-columns: 1fr;
        }

        .dtitle {
            bottom: 2px;
        }

        #fcta {
            bottom: 16px;
            right: 16px;
            max-width: calc(100vw - 32px);
        }

        #dots {
            right: 10px;
        }

        #slide-chip {
            left: 16px;
            top: 12px;
            font-size: 9px;
            padding: 5px 12px;
        }
    }

    /* ── PHASE POPUP MODAL ── */
    #phase-modal {
        position: absolute;
        inset: 0;
        z-index: 500;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 24px;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease;
    }

    #phase-modal.show {
        opacity: 1;
        pointer-events: auto;
    }

    #phase-modal-backdrop {
        position: absolute;
        inset: 0;
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(8px);
        cursor: pointer;
    }

    #phase-modal-box {
        position: relative;
        z-index: 10;
        background: #fff;
        border-radius: 16px;
        padding: 36px 40px;
        max-width: 460px;
        width: 100%;
        box-shadow: 0 32px 80px rgba(0, 0, 0, 0.15);
        border: 1px solid rgba(0, 0, 0, 0.05);
        transform: translateY(24px) scale(0.96);
        transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    #phase-modal.show #phase-modal-box {
        transform: translateY(0) scale(1);
    }

    #phase-modal-accent {
        width: 48px;
        height: 5px;
        border-radius: 3px;
        margin-bottom: 18px;
    }

    #phase-modal-eyebrow {
        font-family: "Inter", sans-serif;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 6px;
        opacity: 0.6;
        color: var(--navy);
    }

    #phase-modal-title {
        font-family: "Roboto Slab", serif;
        font-size: 34px;
        line-height: 1;
        letter-spacing: 1px;
        margin-bottom: 20px;
        color: var(--navy);
    }

    #phase-modal-list {
        list-style: none;
        padding: 0 !important;
        margin: 0 !important;
        display: flex;
        flex-direction: column;
        gap: 6px !important;
    }

    #phase-modal-list li {
        font-family: "Inter", sans-serif;
        display: flex;
        align-items: flex-start;
        gap: 8px !important;
        font-size: 14px !important;
        line-height: 1.3 !important;
        color: var(--text-dark) !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    #phase-modal-list li::before {
        content: "";
        width: 6px;
        height: 6px;
        border-radius: 50%;
        margin-top: 6px;
        flex-shrink: 0;
        background: var(--phase-color, var(--navy));
    }

    @media (max-width: 820px) {
        #phase-modal-list {
            gap: 4px !important;
        }
        #phase-modal-list li {
            font-size: 12.5px !important;
            line-height: 1.25 !important;
            gap: 6px !important;
            margin: 0 !important;
            padding: 0 !important;
        }
        #phase-modal-list li::before {
            width: 4.5px;
            height: 4.5px;
            margin-top: 4.5px;
        }
    }

    #phase-modal-close {
        position: absolute;
        top: 16px;
        right: 18px;
        background: none;
        border: none;
        cursor: pointer;
        font-size: 22px;
        color: #aaa;
        line-height: 1;
        padding: 4px 8px;
        border-radius: 6px;
        transition:
            color 0.2s,
            background 0.2s;
        font-family: "Inter", sans-serif;
    }

    #phase-modal-close:hover {
        color: var(--navy);
        background: rgba(0, 0, 0, 0.06);
    }

    #phase-modal-footer {
        font-family: "Inter", sans-serif;
        margin-top: 24px;
        padding-top: 18px;
        border-top: 1px solid rgba(0, 0, 0, 0.08);
        font-size: 12px;
        font-weight: 600;
        color: rgba(11, 31, 68, 0.4);
        letter-spacing: 0.3px;
    }

    /* ── ARC TOOLTIP ── */
    #arc-tooltip {
        position: fixed;
        z-index: 9999;
        pointer-events: none;
        opacity: 0;
        transform: translateY(6px) scale(0.97);
        transition: opacity 0.18s ease, transform 0.18s ease;
        max-width: 260px;
        min-width: 200px;
        background: #ffffff;
        border-radius: 12px;
        box-shadow:
            0 4px 6px rgba(11, 31, 68, 0.06),
            0 12px 28px rgba(11, 31, 68, 0.13),
            0 0 0 1px rgba(11, 31, 68, 0.06);
        font-family: "Inter", sans-serif;
        overflow: hidden;
    }

    #arc-tooltip.visible {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    /* Colored accent bar at top — color set via JS */
    #arc-tooltip-bar {
        height: 4px;
        width: 100%;
    }

    #arc-tooltip-body {
        padding: 10px 12px 12px;
    }

    #arc-tooltip-eyebrow {
        font-size: 9px;
        font-weight: 700;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        margin-bottom: 2px;
        /* color set via JS to match accent */
    }

    #arc-tooltip-title {
        font-family: "Roboto Slab", serif;
        font-size: 14px;
        font-weight: 700;
        color: #0b1f44;
        margin-bottom: 6px;
        line-height: 1.2;
    }

    #arc-tooltip-list {
        list-style: none;
        padding: 0 !important;
        margin: 0 !important;
        display: flex;
        flex-direction: column;
        gap: 2.5px !important;
    }

    #arc-tooltip-list li {
        display: flex;
        align-items: flex-start;
        gap: 6px !important;
        font-size: 11px !important;
        line-height: 1.25 !important;
        color: #475569 !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    #arc-tooltip-list li::before {
        content: "";
        flex-shrink: 0;
        width: 4px;
        height: 4px;
        border-radius: 50%;
        margin-top: 5px;
        /* background set via JS */
    }

    /* ── Mobile: tooltip becomes a bottom sheet ── */
    @media (max-width: 820px) {
        #arc-tooltip {
            position: fixed !important;
            left: 12px !important;
            right: 12px !important;
            bottom: 90px !important;
            /* clears the Book a Demo button */
            top: auto !important;
            max-width: none;
            min-width: 0;
            width: auto;
            border-radius: 14px;
            transform: translateY(14px) scale(0.98);
            /* override JS-set left/top when visible */
        }

        #arc-tooltip.visible {
            transform: translateY(0) scale(1);
        }

        #arc-tooltip-body {
            padding: 8px 10px 10px;
        }

        #arc-tooltip-title {
            font-size: 13px;
            margin-bottom: 4px;
        }

        #arc-tooltip-list {
            gap: 2px !important;
        }

        #arc-tooltip-list li {
            font-size: 10.5px !important;
            line-height: 1.22 !important;
            gap: 5px !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        #arc-tooltip-list li::before {
            width: 3.5px;
            height: 3.5px;
            margin-top: 4.5px;
        }
    }

    /* ── Cursor feedback on hovered SVG groups ── */
    .interactive-group,
    .hover-stroke-group {
        cursor: pointer;
    }

    /* Subtle scale pulse on the active hovered arc path */
    .interactive-group:hover>path,
    .hover-stroke-group:hover>path {
        filter: brightness(1.08);
    }

    /* ═══════════════════════════════════════════════
   PARALLAX LAYOUT — replaces scroll-jacking engine
═══════════════════════════════════════════════ */

/* Stage: normal document flow */
#stage {
    position: static !important;
    height: auto !important;
    overflow: visible !important;
}

/* Slides: natural vertical stacking — min-height lets slides grow at any zoom level */
.slide {
    position: relative !important;
    height: auto !important;
    min-height: 100vh !important;
    overflow: hidden !important;
    transform: none !important;
    z-index: auto !important;
    will-change: auto !important;
    box-sizing: border-box !important;
}

/* Active: no transform (IntersectionObserver adds .active for reveals) */
.slide.active {
    transform: none !important;
    z-index: auto !important;
}

/* Comparison table slide: auto height so table never clips */
.slide.s6 {
    height: auto !important;
    min-height: auto !important;
    overflow: visible !important;
    margin-top: 0 !important;
    padding: 40px 48px 40px !important;
    align-items: center !important;
    justify-content: center !important;
}
.slide.s6 .cmp-wrap {
    max-height: none !important;
}

/* Parallax background layer — oversized so it never shows a gap */
.plx-bg {
    position: absolute !important;
    top: -15% !important;
    left: 0 !important;
    right: 0 !important;
    bottom: -15% !important;
    width: 100% !important;
    height: 130% !important;
    pointer-events: none !important;
    z-index: 0 !important;
    will-change: transform !important;
}

/* Elevate content above parallax bg */
.hero-inner,
.pkg-wrap,
.cmp-wrap {
    position: relative !important;
    z-index: 2 !important;
}

/* Hide dot navigation — using scroll now */
#dots        { display: none !important; }
#slide-chip  { display: none !important; }

/* CTA button: anchored below the comparison table, never floating */
#fcta {
    position: static !important;
    display: flex !important;
    opacity: 1 !important;
    transform: none !important;
    margin: 28px auto 0 !important;
    width: fit-content !important;
    max-width: 100% !important;
    box-shadow: 0 8px 30px rgba(227, 24, 55, 0.45) !important;
}

/* Theme back-to-top button */
.scroll-top-wrapper {
    z-index: 9999 !important;
    pointer-events: auto !important;
}

/* ── ZOOM & RESPONSIVE SAFETY ──────────────────────────────
   Prevents elements overlapping when browser is zoomed in
   or on small/unusual screen sizes.
─────────────────────────────────────────────────────────── */

/* Slides grow to fit content — never clip at any zoom level */
.slide,
.slide.s0,
.slide.s1,
.slide.s2,
.slide.s3,
.slide.s4 {
    height: auto !important;
/*     min-height: 100vh !important; */
    overflow: hidden !important;
}

/* s5 and s6 already use auto height — keep them scrollable */
.slide.s5 {
    height: auto !important;
    min-height: auto !important;
    overflow-y: auto !important;
}

/* Columns must never overflow their slide */
.diagram-col,
.diagram-col-end,
.content-col {
    max-width: 100% !important;
    box-sizing: border-box !important;
    flex-shrink: 1 !important;
    min-width: 0 !important;
}

/* SVGs scale down at narrow viewports */
.diagram-col svg,
.diagram-col-end svg {
    width: min(90vw, 700px) !important;
    height: auto !important;
}

/* Remove all hard-coded negative positions that cause bleed */
.content-col    { top: 0 !important; }
#c5b            { top: 0 !important; margin-top: 25px !important; }
.slide.s0 .diagram-col { top: 0 !important; }

/* Parallax bg: disable on zoom-heavy environments (< 900px effective width) */
@media (max-width: 900px) {
    .plx-bg { display: none !important; }
}

/* Mobile ── */
@media (max-width: 820px) {
    .slide        { min-height: auto !important; padding: 80px 16px 30px !important; }
    .slide.s0     { padding: 10px 16px 20px !important; }
    .slide.s5 { padding: 30px 16px 30px !important; }
    .slide.s6     { padding: 30px 16px 10px !important; }
    #fcta         { margin: 20px auto 0 !important; }
    .hero-ey      { margin-top: 15px !important; }

    /* Two-column grids collapse to single column */
    .slide:not(.s0):not(.s5):not(.s6) {
        grid-template-columns: 1fr !important;
    }

    /* Diagram above content on mobile */
    .diagram-col  { order: 1 !important; padding: 24px 16px 0 !important; }
    .content-col  { order: 2 !important; padding: 16px !important; }
}

/* Small phones ── */
@media (max-width: 480px) {
    .slide        { padding: 70px 12px 30px !important; }
    .slide.s0     { padding: 10px 12px 20px !important; }
    .slide.s6     { padding: 20px 12px 10px !important; }
    .hero-ey      { margin-top: 10px !important; }
    .diagram-col svg,
    .diagram-col-end svg { width: min(95vw, 420px) !important; }
    .sh           { font-size: clamp(24px, 7vw, 32px) !important; }
}

    /* ═══════════════════════════════════════
       SLIDE 5: NEW PACKAGE DESIGN
    ═══════════════════════════════════════ */
    .slide.s5 {
        display: flex;
        align-items: center;
        justify-content: center;
        overflow-y: auto;
        overflow-x: hidden;
        padding: 40px 48px !important;
        background: var(--cream);
    }
 
    .slide.s5 .pkg-wrap {
        width: 100%;
        max-width: 900px;
        display: flex;
        flex-direction: column;
        align-items: center;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.55s ease, transform 0.55s ease;
        transition-delay: 0.18s;
    }
 
    .slide.active .pkg-wrap { opacity: 1; transform: none; }
 
    /* Page title */
    .pkg-page-title {
        text-align: center;
        font-size: 12px;
        letter-spacing: 0.15em;
        font-weight: 600;
        color: #888;
        text-transform: uppercase;
        margin-bottom: 2rem;
        font-family: 'Inter', sans-serif;
    }
 
    /* Grid */
    .pkg-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        width: 100%;
        margin-bottom: 2rem;
    }
 
    /* Individual card */
    .pkg-card {
        background: #fff;
        border-radius: 14px;
        padding: 1.5rem 1.25rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        min-height: 320px;
    }
 
    .pkg-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 14px 40px rgba(0,0,0,0.14);
    }

    .pkg-card:active {
        transform: translateY(-2px) scale(0.98);
        box-shadow: 0 6px 18px rgba(0,0,0,0.10);
    }

    .pkg-card-hint {
        font-size: 11px;
        letter-spacing: 0.08em;
        color: #b0b0b0;
        margin-top: auto;
        padding-top: 8px;
        transition: color 0.2s ease;
        user-select: none;
    }

    .pkg-card:hover .pkg-card-hint {
        color: #666;
    }

    .pkg-card.gold .pkg-card-hint {
        color: #C9A227;
        opacity: 0.7;
    }

    .pkg-card.gold:hover .pkg-card-hint {
        opacity: 1;
    }
 
    .pkg-card.silver { border: 2px solid #a0a0a0; }
    .pkg-card.gold   { border: 3px solid #C9A227; }
    .pkg-card.plat   { border: 2px solid #7888a8; }
 
    /* Tier pill labels */
    .pkg-tier-label {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.09em;
        padding: 7px 18px;
        border-radius: 20px;
        text-align: center;
        white-space: nowrap;
    }
 
    .pkg-tier-label.silver {
        background: linear-gradient(135deg, #e8e8e8 0%, #b0b0b0 30%, #f5f5f5 50%, #9a9a9a 70%, #d8d8d8 100%);
        color: #3a3a3a;
        border: 1px solid #aaa;
    }
 
    .pkg-tier-label.gold {
        background: linear-gradient(135deg, #f5d060 0%, #c8900a 25%, #f9e27a 50%, #b07800 70%, #e8c040 100%);
        color: #3a2000;
        border: 1px solid #a07010;
    }
 
    .pkg-tier-label.plat {
        background: linear-gradient(135deg, #e0e8f0 0%, #8898b0 25%, #d0dce8 50%, #6a7e98 70%, #b8cad8 100%);
        color: #1a2030;
        border: 1px solid #7888a8;
    }
 
    /* Robot icon wrapper */
    .pkg-robot-wrap {
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #fff;
    }
 
    .pkg-robot-wrap.silver { width: 90px; height: 90px; border: 3px solid #a0a0a0; }
    .pkg-robot-wrap.gold   { width: 100px; height: 100px; border: 3px solid #C9A227; }
    .pkg-robot-wrap.plat   { width: 90px; height: 90px; border: 3px solid #7888a8; }
 
    /* Divider inside card */
    .pkg-card-divider {
        width: 100%;
        border: none;
        border-top: 1px solid #e0e0e0;
        margin: 4px 0;
    }
 
    /* Agents label / count / duration */
    .pkg-agents-label {
        font-size: 15px;
        letter-spacing: 0.12em;
        color: #3a3a3a;
        font-weight: 700;
        font-family: 'Inter', sans-serif;
        text-transform: uppercase;
        margin-bottom: 0;
    }

    .pkg-agents-num {
        font-size: 40px;
        font-weight: 500;
        color: #222;
        line-height: 1;
        font-family: 'Inter', sans-serif;
        margin-bottom: 0;
    }

    .pkg-agents-duration {
        font-size: 17px;
        color: #444;
        font-family: 'Inter', sans-serif;
        font-weight: 500;
        margin-bottom: 0;
    }
 
    /* CTA button */
    .pkg-cta-wrap {
        text-align: center;
        width: 100%;
    }
 
    .pkg-cta-btn {
        display: inline-block;
        padding: 15px 52px;
        background: #e31837;
        color: #fff !important;
        border: none;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        text-decoration: none;
        cursor: pointer;
        font-family: 'Inter', sans-serif;
        transition: background 0.2s, transform 0.2s;
    }
 
    .pkg-cta-btn:hover {
        background: #f53b2a;
        transform: translateY(-2px);
        color: #fff !important;
    }
 
    /* ── Responsive: tablet (2 columns) ── */
    @media (max-width: 820px) {
        .slide.s5 {
            padding: 30px 20px 30px !important;
            display: block !important;
            overflow-y: auto !important;
        }
 
        .pkg-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }
 
        /* Gold card spans full width on tablet for emphasis */
        .pkg-card.gold {
            grid-column: 1 / -1;
            flex-direction: row;
            justify-content: center;
            gap: 24px;
            padding: 1.25rem 1.5rem;
        }
 
        .pkg-card.gold .pkg-card-divider {
            display: none;
        }
 
        .pkg-card.gold .pkg-robot-wrap.gold {
            flex-shrink: 0;
        }
 
        .pkg-card.gold .pkg-agents-label,
        .pkg-card.gold .pkg-agents-num,
        .pkg-card.gold .pkg-agents-duration {
            text-align: center;
        }
 
        .pkg-cta-btn {
            width: 100%;
            max-width: 360px;
        }
    }
 
    /* ── Responsive: mobile (1 column) ── */
    @media (max-width: 560px) {
        .pkg-grid {
            grid-template-columns: 1fr;
            gap: 16px;
            max-width: 340px;
            margin-left: auto;
            margin-right: auto;
        }
        .slide.s5 .pkg-wrap {
        padding-bottom: 30px;
    }
        .pkg-card.gold {
            grid-column: auto;
            flex-direction: column;
            justify-content: center;
            gap: 12px;
        }
 
        .pkg-card.gold .pkg-card-divider {
            display: block;
        }
 
        .pkg-agents-num { font-size: 36px; }
        .pkg-agents-label { font-size: 13px; }
        .pkg-agents-duration { font-size: 15px; }
 
        .pkg-cta-btn {
            width: 100%;
            max-width: 100%;
            padding: 14px 20px;
            font-size: 12px;
        }
    }
        @media (max-width: 820px) {
            .pkg-grid {
                max-width: 720px;
                margin-left: auto;
                margin-right: auto;
            }
        }

        /* ── Responsive: tablet (2 columns) ── */
@media (max-width: 991px) {

    .slide.s5 {
        padding: 30px 24px 30px !important;
        align-items: flex-start;
    }

    .slide.s5 .pkg-wrap {
        max-width: 100%;
    }

    .pkg-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 22px;
        max-width: 760px;
        margin-left: auto;
        margin-right: auto;
    }

    .pkg-card {
        min-height: 300px;
        padding: 1.5rem 1.2rem;
    }

    .pkg-card.gold {
        grid-column: 1 / -1;
        max-width: 420px;
        margin: 0 auto;
        flex-direction: column;
    }

    .pkg-agents-num {
        font-size: 36px;
    }

    .pkg-cta-btn {
        width: 100%;
        max-width: 340px;
    }
}

/* ── Responsive: mobile (1 column) ── */
@media (max-width: 767px) {

    .slide.s5 {
        padding: 24px 18px 24px !important;
        display: block !important;
        overflow-y: auto !important;
    }

    .slide.s5 .pkg-wrap {
        width: 100%;
        padding-bottom: 30px;
    }

    .pkg-grid {
        grid-template-columns: 1fr !important;
        gap: 18px;
        max-width: 340px;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
    }

    .pkg-card,
    .pkg-card.gold,
    .pkg-card.silver,
    .pkg-card.plat {
        width: 100%;
        max-width: 100%;
        min-height: auto;
        grid-column: auto !important;
        flex-direction: column !important;
        justify-content: center;
        padding: 1.4rem 1rem;
    }

    .pkg-card.gold .pkg-card-divider {
        display: block;
    }

    .pkg-tier-label {
        font-size: 10px;
        padding: 6px 14px;
        white-space: normal;
        line-height: 1.4;
        text-align: center;
    }

    .pkg-agents-num {
        font-size: 32px;
    }

    .pkg-agents-label {
        font-size: 10px;
        text-align: center;
    }

    .pkg-agents-duration {
        font-size: 13px;
        text-align: center;
    }

    .pkg-robot-wrap.silver,
    .pkg-robot-wrap.plat {
        width: 82px;
        height: 82px;
    }

    .pkg-robot-wrap.gold {
        width: 90px;
        height: 90px;
    }

    .pkg-robot-wrap svg {
        transform: scale(0.88);
    }

    .pkg-cta-wrap {
        width: 100%;
        text-align: center;
        margin-top: 10px;
    }

    .pkg-cta-btn {
        width: 100%;
        max-width: 320px;
        padding: 12px 18px;
        font-size: 12px;
        letter-spacing: 0.08em;
    }
}

/* ── Small mobile ── */
@media (max-width: 480px) {

    .slide.s5 {
        padding: 20px 14px 20px !important;
    }

    .pkg-agents-num {
        font-size: 28px;
    }

    .pkg-cta-btn {
        font-size: 11px;
        padding: 10px 16px;
        max-width: 280px;
    }
}

/* ── S5 RESPONSIVE: overrides inline-style gap/columns/font-size + spacing ── */

/* Tablet (≤991px): 1 column stacked, shrink-to-content height */
@media (max-width: 991px) {
    .slide.s5 {
        height: auto !important;
        min-height: auto !important;
        align-items: flex-start !important;
        padding: 30px 24px 30px !important;
    }
    .slide.s5 .pkg-card hr {
        width: 100% !important;
        border: none !important;
        border-top: 2px solid #d8d8d8 !important;
        margin: 10px 0 !important;
    }
    /* .slide.s5 .page-title is now handled by the shared .tt-faq-title class */
    .slide.s5 .pkg-grid {
        grid-template-columns: 1fr !important;
        gap: 24px !important;
        max-width: 420px !important;
        margin-left: auto !important;
        margin-right: auto !important;
    }
    .slide.s5 .pkg-card,
    .slide.s5 .pkg-card.gold {
        grid-column: auto !important;
        max-width: 100% !important;
        flex-direction: column !important;
    }
}

/* Mobile (≤767px): tighter padding */
@media (max-width: 767px) {
    .slide.s5 {
        padding: 24px 18px 24px !important;
    }
    /* .slide.s5 .page-title is now handled by the shared .tt-faq-title class */
    .slide.s5 .pkg-grid {
        gap: 16px !important;
        max-width: 340px !important;
    }
}

/* Small mobile (≤480px) */
@media (max-width: 480px) {
    .slide.s5 {
        padding: 20px 14px 20px !important;
    }
    /* .slide.s5 .page-title is now handled by the shared .tt-faq-title class */
    .slide.s5 .pkg-grid {
        gap: 14px !important;
    }
}
</style>
</head>

<body>
    <!-- 	     <div id="trinity-wrapper" style="--wp-header-height: 90px"> -->
    <span id="slide-chip"></span>


    <!--<div id="scue">
      <span>Scroll</span>
      <svg
        fill="none"
        stroke="currentColor"
        stroke-width="2.5"
        viewBox="0 0 24 24"
      >
        <path d="M12 5v14M5 12l7 7 7-7" />
      </svg>
    </div>-->

  
    <div id="stage">
        <div class="slide s0 active">
            <svg class="plx-bg" data-plx="0.35" style="position: absolute; inset: 0; width: 100%; height: 100%; opacity: 0.2; pointer-events: none;"
                viewBox="0 0 1000 560" preserveAspectRatio="xMidYMax slice">
                <path d="M 50,540 A 450,450 0 0,1 950,540" fill="none" stroke="#cbd5e1" stroke-width="72"></path>
                <path d="M 125,540 A 375,375 0 0,1 875,540" fill="none" stroke="#cbd5e1" stroke-width="72"></path>
                <path d="M 200,540 A 300,300 0 0,1 800,540" fill="none" stroke="#cbd5e1" stroke-width="72"></path>
                <path d="M 262,540 A 238,238 0 0,1 738,540" fill="none" stroke="#cbd5e1" stroke-width="42"></path>
            </svg>
            <div class="hero-inner">
                <p class="hero-ey">AI Use Case Lifecycle Management</p>
                <h1 class="hero-h">
                    Airo's <span class="highlight" style="position: relative; display: inline-block;"><span style="visibility: hidden;">agenTriniti<sup style="font-size: 0.35em; position: relative; top: -1.5em; line-height: 0; vertical-align: baseline;">SM</sup></span><span id="typewriter-agenTriniti" style="position: absolute; left: 0; top: 0; white-space: nowrap;"></span></span> Package
                </h1>
                <p class="hero-sub">
                    100 agents. 6 Months. Built, managed, and continuously upgraded by Airo. <br /> Supporting the most
                    popular enterprise AI use cases across modern enterprise operations.
                </p>
                <div class="hero-dwrap">
                    <!-- viewBox expanded from 800 to 900 width and x-offset moved to 50 to create side gutters -->

                    <!-- Faint Background Rings (Moved outside SVG to act as true background) -->
                    <svg style="
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            opacity: 0.2;
            pointer-events: none;
          " viewBox="0 0 1000 560" preserveAspectRatio="xMidYMax slice">
                        <path d="M 50,540 A 450,450 0 0,1 950,540" fill="none" stroke="#cbd5e1" stroke-width="72" />
                        <path d="M 125,540 A 375,375 0 0,1 875,540" fill="none" stroke="#cbd5e1" stroke-width="72" />
                        <path d="M 200,540 A 300,300 0 0,1 800,540" fill="none" stroke="#cbd5e1" stroke-width="72" />
                        <path d="M 262,540 A 238,238 0 0,1 738,540" fill="none" stroke="#cbd5e1" stroke-width="42" />
                    </svg>

                    <!-- Top Text Area -->
                    <div style="
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;          
            width: 100%;
            position: relative;
            z-index: 2;
          ">
                        <!-- Fixed Opacity so text is visible immediately -->


                    </div>

                    <!-- DIAGRAM AREA (Made much larger) -->
                    <!-- Flex: 1 makes it fill the remaining space below the text -->
                    <div class="diagram-col" style="
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            position: relative;
            z-index: 2; 
                  top:-60px;
          ">
                        <!-- Reduced the max width constraint and adjusted viewBox to make it appear larger -->
                        <svg viewBox="0 20 1000 520" xmlns="http://www.w3.org/2000/svg" style="
              width: 100%;
              max-width: 660px;				
              height: auto;
              filter: drop-shadow(0 28px 60px rgba(11, 31, 68, 0.12));
              overflow: visible;
                  
            ">
                            <defs>
                                <filter id="s5-g2">
                                    <feGaussianBlur stdDeviation="14" result="b"></feGaussianBlur>
                                    <feMerge>
                                        <feMergeNode in="b"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>

                                <path id="s5-p1-curve" d="M 280,500 A 220,220 0 0,1 390,309.5" fill="none"></path>
                                <path id="s5-p2-curve" d="M 390,309.5 A 220,220 0 0,1 610,309.5" fill="none"></path>
                                <path id="s5-p3-curve" d="M 610,309.5 A 220,220 0 0,1 720,500" fill="none"></path>

                                <path id="s5-s1p" d="M 330,500 A 170,170 0 0,1 670,500" fill="none"></path>
                                <path id="s5-s2p" d="M 230,500 A 270,270 0 0,1 770,500" fill="none"></path>
                                <path id="s5-s3p" d="M 130,500 A 370,370 0 0,1 870,500" fill="none"></path>
                                <path id="s5-s4p" d="M 35,500 A 465,465 0 0,1 965,500" fill="none"></path>
                                <path id="s5-p3-curve-inner" d="M 585,352.8 A 170,170 0 0,1 670,500" fill="none"></path>
                            </defs>

                            <g class="dim">
                                <path d="M 280,500 A 220,220 0 0,1 720,500" fill="none" stroke="#e2e8f0"
                                    stroke-width="2"></path>
                                <path d="M 180,500 A 320,320 0 0,1 820,500" fill="none" stroke="#e2e8f0"
                                    stroke-width="2"></path>
                                <path d="M 80,500 A 420,420 0 0,1 920,500" fill="none" stroke="#e2e8f0"
                                    stroke-width="2"></path>
                            </g>

                           <g class="interactive-group" style="cursor: pointer" onclick="openSharedModal('phase1')">
    <path d="M 330,500 A 170,170 0 0,1 415,352.8" fill="none" stroke="#0b1f44" stroke-width="80"></path>
    
    <text fill="white" font-family="'Inter', sans-serif" font-size="18" text-anchor="middle" transform="translate(352.8, 415) rotate(-60)">
        <tspan x="0" dy="16">Build</tspan>
    </text>
    
    <text dy="6" fill="#0b1f44" font-family="'Inter', sans-serif" font-size="15" font-weight="700">
        <textPath href="#s5-p1-curve" startOffset="50%" text-anchor="middle">
            Production. First Delivery
        </textPath>
    </text>
</g>
                            <g class="interactive-group" style="cursor: pointer" onclick="openSharedModal('phase2')">
                                <path d="M 415,352.8 A 170,170 0 0,1 585,352.8" fill="none" stroke="#8c8c8c"
                                    stroke-width="80"></path>
                                <text fill="white" font-family="'Inter', sans-serif" font-size="16" text-anchor="middle"
                                    transform="translate(500, 330)">
                                    <!--                   <tspan x="0" font-weight="700">Phase 2:</tspan> -->
                                    <tspan x="0" dy="16">Manage</tspan>
                                </text>
                                <text dy="6" fill="#8c8c8c" font-family="'Inter', sans-serif" font-size="15"
                                    font-weight="700">
                                    <textPath href="#s5-p2-curve" startOffset="50%" text-anchor="middle">
                                        Your Agents. Your IP. Always
                                    </textPath>
                                </text>
                            </g>

                            <g class="interactive-group" style="cursor: pointer" onclick="openSharedModal('phase3')">
                                <path d="M 585,352.8 A 170,170 0 0,1 670,500" fill="none" stroke="#e31837"
                                    stroke-width="80"></path>
                                <!--                 <text fill="white" font-family="'Inter', sans-serif" font-size="15" text-anchor="middle"
                  transform="translate(647.2, 415) rotate(60)">
                  <tspan x="0" font-weight="700">Phase 3:</tspan>
                  <tspan x="0" dy="16">Upgrade</tspan>
                </text> -->
                                <text fill="white" font-family="'Inter', sans-serif" font-size="16"
                                    text-anchor="middle">
                                    <textPath href="#s5-p3-curve-inner" startOffset="50%">
                                        Continuous Upgrade
                                    </textPath>
                                </text>
                                <text dy="6" fill="#e31837" font-family="'Inter', sans-serif" font-size="14"
                                    font-weight="700">
                                    <textPath href="#s5-p3-curve" startOffset="50%" text-anchor="middle">
                                        Ever Evolving. Portable Agents
                                    </textPath>
                                </text>
                            </g>

                            <line x1="395" y1="318.1" x2="435" y2="387.4" stroke="#ffffff" stroke-width="3"
                                pointer-events="none">
                            </line>
                            <line x1="605" y1="318.1" x2="565" y2="387.4" stroke="#ffffff" stroke-width="3"
                                pointer-events="none">
                            </line>

                            <path d="M 370,500 A 130,130 0 0,1 630,500 Z" fill="#ffffff"
                                filter="drop-shadow(0px 2px 6px rgba(0,0,0,0.1))"></path>
                            <text fill="#0b1f44" font-family="'Inter', sans-serif" font-size="13" font-weight="600"
                                text-anchor="middle" x="500" y="442">
                                One fixed price per month,
                            </text>
                            <text fill="#0b1f44" font-family="'Inter', sans-serif" font-size="13" font-weight="600"
                                text-anchor="middle" x="500" y="460">
                                no hidden fee
                            </text>

                            <g class="lit" filter="url(#s5-g2)">
                                <g class="interactive-group" style="cursor: pointer" onclick="openSharedModal('erp')">
                                    <path d="M 230,500 A 270,270 0 0,1 365,266.2" fill="none" stroke="#e31837"
                                        stroke-width="80"></path>
                                    <text dy="8" fill="#0b1f44" font-family="'Inter', sans-serif" font-size="18"
                                        font-weight="800" text-anchor="middle" letter-spacing="3" pointer-events="none">
                                        <textPath href="#s5-s2p" startOffset="16.66%">ERP Platform </textPath>
                                    </text>
                                </g>
                                <g class="interactive-group" style="cursor: pointer" onclick="openSharedModal('crm')">
                                    <path d="M 365,266.2 A 270,270 0 0,1 635,266.2" fill="none" stroke="#e31837"
                                        stroke-width="80"></path>
                                    <text dy="8" fill="#0b1f44" font-family="'Inter', sans-serif" font-size="18"
                                        font-weight="800" text-anchor="middle" letter-spacing="3" pointer-events="none">
                                        <textPath href="#s5-s2p" startOffset="50%">CRM Platform </textPath>
                                    </text>
                                </g>
                                <g class="interactive-group" style="cursor: pointer" onclick="openSharedModal('scm')">
                                    <path d="M 635,266.2 A 270,270 0 0,1 770,500" fill="none" stroke="#e31837"
                                        stroke-width="80"></path>
                                    <text dy="8" fill="#0b1f44" font-family="'Inter', sans-serif" font-size="18"
                                        font-weight="800" text-anchor="middle" letter-spacing="3" pointer-events="none">
                                        <textPath href="#s5-s2p" startOffset="83.33%">SCM Platform </textPath>
                                    </text>
                                </g>
                                <line x1="345" y1="231.5" x2="385" y2="300.8" stroke="#ffffff" stroke-width="3"
                                    pointer-events="none">
                                </line>
                                <line x1="655" y1="231.5" x2="615" y2="300.8" stroke="#ffffff" stroke-width="3"
                                    pointer-events="none">
                                </line>
                            </g>

                            <g class="lit" filter="url(#s5-g2)">
                                <g class="hover-stroke-group" style="cursor: pointer"
                                    onclick="openSharedModal('domain1')">
                                    <path d="M 130,500 A 370,370 0 0,1 315,179.6" fill="none" stroke="#cbd5e1"
                                        stroke-width="80" class="hs-bg"></path>
                                    <text dy="6" fill="#0b1f44" font-family="'Inter', sans-serif" font-size="18"
                                        font-weight="800" text-anchor="middle" letter-spacing="1.5"
                                        pointer-events="none" class="hs-text">
                                        <textPath href="#s5-s3p" startOffset="16.66%">
                                            Front Office Use Cases
                                        </textPath>
                                    </text>
                                </g>
                                <g class="hover-stroke-group" style="cursor: pointer"
                                    onclick="openSharedModal('domain2')">
                                    <path d="M 315,179.6 A 370,370 0 0,1 685,179.6" fill="none" stroke="#cbd5e1"
                                        stroke-width="80" class="hs-bg"></path>

                                    <text dy="6" fill="#0b1f44" font-family="'Inter', sans-serif" font-size="18"
                                        font-weight="800" text-anchor="middle" letter-spacing="1.5"
                                        pointer-events="none" class="hs-text">
                                        <textPath href="#s5-s3p" startOffset="50%">
                                            Back Office Use Cases
                                        </textPath>
                                    </text>
                                </g>
                                <g class="hover-stroke-group" style="cursor: pointer"
                                    onclick="openSharedModal('domain3')">
                                    <path d="M 685,179.6 A 370,370 0 0,1 870,500" fill="none" stroke="#cbd5e1"
                                        stroke-width="80" class="hs-bg"></path>
                                    <text dy="6" fill="#0b1f44" font-family="'Inter', sans-serif" font-size="18"
                                        font-weight="800" text-anchor="middle" letter-spacing="1.5"
                                        pointer-events="none" class="hs-text">
                                        <textPath href="#s5-s3p" startOffset="83.33%">
                                            IT Use cases
                                        </textPath>
                                    </text>
                                </g>
                                <line x1="295" y1="144.9" x2="335" y2="214.2" stroke="#ffffff" stroke-width="3"
                                    pointer-events="none">
                                </line>
                                <line x1="705" y1="144.9" x2="665" y2="214.2" stroke="#ffffff" stroke-width="3"
                                    pointer-events="none">
                                </line>
                            </g>

                            <g class="lit" filter="url(#s5-g2)">
                                <g class="hover-stroke-group" style="cursor: pointer" onclick="openSharedModal('ind1')">
                                    <path d="M 35,500 A 465,465 0 0,1 171.2,171.2" fill="none" stroke="#f1f5f9"
                                        stroke-width="70" class="hs-bg"></path>
                                    <text dy="5" fill="#0b1f44" font-family="'Inter', sans-serif" font-size="18"
                                        font-weight="800" text-anchor="middle" letter-spacing="1" pointer-events="none"
                                        class="hs-text">
                                        <textPath href="#s5-s4p" startOffset="12.5%">
                                            Pharma &amp; Life Sciences
                                        </textPath>
                                    </text>
                                </g>
                                <g class="hover-stroke-group" style="cursor: pointer" onclick="openSharedModal('ind2')">
                                    <path d="M 171.2,171.2 A 465,465 0 0,1 500,35" fill="none" stroke="#f1f5f9"
                                        stroke-width="70" class="hs-bg"></path>
                                    <text dy="5" fill="#0b1f44" font-family="'Inter', sans-serif" font-size="18"
                                        font-weight="800" text-anchor="middle" letter-spacing="1" pointer-events="none"
                                        class="hs-text">
                                        <textPath href="#s5-s4p" startOffset="37.5%">
                                            Manufacturing
                                        </textPath>
                                    </text>
                                </g>
                                <g class="hover-stroke-group" style="cursor: pointer" onclick="openSharedModal('ind3')">
                                    <path d="M 500,35 A 465,465 0 0,1 828.8,171.2" fill="none" stroke="#f1f5f9"
                                        stroke-width="70" class="hs-bg"></path>
                                    <text dy="5" fill="#0b1f44" font-family="'Inter', sans-serif" font-size="18"
                                        font-weight="800" text-anchor="middle" letter-spacing="1" pointer-events="none"
                                        class="hs-text">
                                        <textPath href="#s5-s4p" startOffset="62.5%">
                                            Retail &amp; CPG
                                        </textPath>
                                    </text>
                                </g>
                                <g class="hover-stroke-group" style="cursor: pointer" onclick="openSharedModal('ind4')">
                                    <path d="M 828.8,171.2 A 465,465 0 0,1 965,500" fill="none" stroke="#f1f5f9"
                                        stroke-width="70" class="hs-bg"></path>
                                    <text dy="5" fill="#0b1f44" font-family="'Inter', sans-serif" font-size="18"
                                        font-weight="800" text-anchor="middle" letter-spacing="1" pointer-events="none"
                                        class="hs-text">
                                        <textPath href="#s5-s4p" startOffset="87.5%">Banking and Financial Services</textPath>
                                    </text>
                                </g>
                                <line x1="146.4" y1="146.4" x2="195.9" y2="195.9" stroke="#ffffff" stroke-width="3"
                                    pointer-events="none"></line>
                                <line x1="500" y1="0" x2="500" y2="70" stroke="#ffffff" stroke-width="3"
                                    pointer-events="none"></line>
                                <line x1="853.6" y1="146.4" x2="804.1" y2="195.9" stroke="#ffffff" stroke-width="3"
                                    pointer-events="none"></line>
                            </g>

                            <g transform="translate(0, 10)" pointer-events="none">
                                <rect x="290" y="490" width="420" height="70" rx="8" fill="#ffffff" stroke="#e31837"
                                    stroke-width="2.5" filter="drop-shadow(0px 8px 16px rgba(0,0,0,0.08))"></rect>
                                <text x="500" y="525" font-family="'Roboto Slab', serif" font-size="22"
                                    font-weight="700" fill="#0b1f44" text-anchor="middle">
                                    Airo's <tspan fill="#e31837">agenTriniti</tspan><tspan fill="#e31837" font-size="13" dy="-8">SM</tspan><tspan dy="8"> Package</tspan> 
                                </text>
                                <text x="500" y="545" font-family="'Inter', sans-serif" font-size="13" font-weight="500"
                                    fill="#64748b" text-anchor="middle">
                                    AI Use Case Lifecycle Management
                                </text>
                            </g>
                        </svg>
                    </div>



                    <!-- Bottom Interactive Buttons -->
                    <div style="
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
            justify-content: center;
            padding-bottom: 14px;
            position: relative;
            z-index: 2;
            opacity: 1;
            top:-70px;
            transition: opacity 0.5s 0.76s;
          " id="c5b">
                        <!--             <button class="cta-btn" style="
              margin-top: 0;
              background: var(--navy);
              color: white;
              padding: 12px 24px;
              border: none;
              border-radius: 6px;
              font-family: &quot;Inter&quot;, sans-serif;
              font-weight: bold;
                 
              cursor: pointer;
            " onclick="goTo(0)">
              ← Explore Again
            </button> -->
                      <button class="pkg-cta-btn" onclick="window.open('https://calendly.com/airodigitallabs/30min?guests=sayak.das%40airodigitallabs.com&month=2026-05', '_blank')" style="text-transform: none;">
                            Schedule Your agenTriniti<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> Demo Today
                      </button> 
                    </div>

                </div>

                <p class="hero-partners">
                    In partnership with <strong>ANTHROPIC</strong> &amp;
                    <strong>OpenAI</strong>
                </p>
            </div>
        </div>

        <!-- ── Slide 5: Package Tiers ── -->
        <div class="slide s5" id="choose-package">
            <div class="pkg-wrap">
            <h2 class="tt-faq-title" style="text-align:center; margin-bottom: 40px; position: relative; z-index: 2;">Choose Your <span>Package</span></h2>
            <style>
                .pkg-wrap { max-width: 1200px !important; }

                /* ── Grid ── */
                .pkg-grid {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 20px;
                    width: 100%;
                    margin-bottom: 1.25rem;
                    box-sizing: border-box;
                    padding-bottom: 1rem;
                }

                /* ── Animated gradient keyframe ── */
                @keyframes gradientMove {
                    0%   { background-position: 0% 50%; }
                    50%  { background-position: 100% 50%; }
                    100% { background-position: 0% 50%; }
                }

                /* ── Base card ── */
                .pkg-card {
                    cursor: pointer;
                    border-radius: 16px;
                    padding: 1rem 1rem;
                    display: flex;
                    flex-direction: column;
                    align-items: stretch;
                    gap: 7px;
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                    width: 100%;
                    box-sizing: border-box;
                    min-height: auto;
                    position: relative;
                    overflow: hidden;
                }

                /* ── Horizontal body: icon + stats ── */
                .pkg-card-body {
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    gap: 12px;
                    width: 100%;
                    position: relative;
                    z-index: 2;
                }

                /* ── Stats column inside body ── */
                .pkg-stats {
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    justify-content: space-between;
                    flex: 1;
                    text-align: left;
                }

                /* ── Footer row: benefit + button ── */
                .pkg-card-footer {
                    display: flex;
                    flex-direction: column;
                    align-items: stretch;
                    gap: 8px;
                    width: 100%;
                    position: relative;
                    z-index: 2;
                }

                /* ── Animated accent line at top ── */
                .pkg-card::before {
                    content: '';
                    position: absolute;
                    top: 0; left: 0; right: 0;
                    height: 3px;
                    background-size: 200% 200%;
                    animation: gradientMove 6s ease infinite;
                    z-index: 3;
                    pointer-events: none;
                }

                /* ── Glass sheen overlay ── */
                .pkg-card::after {
                    content: '';
                    position: absolute;
                    top: 0; left: 0; right: 0;
                    height: 48%;
                    background: linear-gradient(180deg, rgba(255,255,255,0.28) 0%, rgba(255,255,255,0.06) 70%, transparent 100%);
                    border-radius: 14px 14px 0 0;
                    z-index: 1;
                    pointer-events: none;
                }

                /* ────────────── SILVER ────────────── */
                .pkg-card.silver {
                    background:
                        linear-gradient(145deg, #ffffff 0%, #f4f7fd 40%, #eaf0f8 70%, #f8faff 100%) padding-box,
                        linear-gradient(135deg, #ffffff 0%, #dfe7f5 50%, #9ea9c9 100%) border-box;
                    border: 2px solid transparent;
                    box-shadow:
                        inset 0 1px 0 rgba(255,255,255,0.98),
                        inset 0 -1px 0 rgba(158,169,201,0.08),
                        0 4px 20px rgba(158,169,201,0.2),
                        0 1px 4px rgba(158,169,201,0.1);
                    backdrop-filter: blur(12px);
                    -webkit-backdrop-filter: blur(12px);
                }
                .pkg-card.silver::before {
                    background: linear-gradient(90deg, #ffffff, #dfe7f5, #9ea9c9, #dfe7f5, #ffffff);
                    background-size: 200% 200%;
                }
                .pkg-card.silver::after {
                    background: linear-gradient(135deg, rgba(255,255,255,0.6) 0%, rgba(255,255,255,0.18) 45%, rgba(158,169,201,0.04) 75%, transparent 100%);
                    height: 100%;
                    border-radius: 14px;
                }
                .pkg-card.silver:hover {
                    transform: translateY(-5px);
                    box-shadow:
                        inset 0 1px 0 rgba(255,255,255,0.98),
                        0 16px 48px rgba(158,169,201,0.45),
                        0 0 32px rgba(158,169,201,0.25);
                }

                /* ────────────── GOLD ────────────── */
                .pkg-card.gold {
                    background:
                        linear-gradient(145deg, #fffff8 0%, #fffce8 38%, #fff8d0 65%, #fffef0 100%) padding-box,
                        linear-gradient(135deg, #fff3a3 0%, #ffb800 50%, #ff7b00 100%) border-box;
                    border: 2px solid transparent;
                    box-shadow:
                        inset 0 1px 0 rgba(255,255,255,0.95),
                        inset 0 -1px 0 rgba(255,123,0,0.06),
                        0 4px 20px rgba(255,184,0,0.22),
                        0 1px 4px rgba(255,123,0,0.12);
                    backdrop-filter: blur(10px);
                    -webkit-backdrop-filter: blur(10px);
                }
                .pkg-card.gold::before {
                    background: linear-gradient(90deg, #fff3a3, #ffb800, #ff7b00, #ffb800, #fff3a3);
                    background-size: 200% 200%;
                }
                .pkg-card.gold::after {
                    background: linear-gradient(135deg, rgba(255,255,255,0.55) 0%, rgba(255,248,200,0.18) 45%, rgba(255,184,0,0.04) 75%, transparent 100%);
                    height: 100%;
                    border-radius: 14px;
                }
                .pkg-card.gold:hover {
                    transform: translateY(-5px);
                    box-shadow:
                        inset 0 1px 0 rgba(255,255,255,0.95),
                        0 16px 48px rgba(255,184,0,0.5),
                        0 0 40px rgba(255,123,0,0.28);
                }

                /* ────────────── PLATINUM ────────────── */
                .pkg-card.platinum {
                    background:
                        linear-gradient(145deg, #ffffff 0%, #edf6fa 28%, #d6ebf4 55%, #e8f4f8 80%, #ffffff 100%) padding-box,
                        linear-gradient(135deg, #7dc4d0 0%, #1e80b0 22%, #0d5580 48%, #1e80b0 72%, #58949c 100%) border-box;
                    border: 2.5px solid transparent;
                    box-shadow:
                        inset 0 1px 0 rgba(255,255,255,0.98),
                        inset 0 -1px 0 rgba(18,92,132,0.08),
                        0 6px 28px rgba(18,92,132,0.22),
                        0 1px 4px rgba(18,92,132,0.1),
                        0 0 0 1px rgba(88,148,156,0.1);
                    backdrop-filter: blur(20px);
                    -webkit-backdrop-filter: blur(20px);
                }
                .pkg-card.platinum::before {
                    background: linear-gradient(90deg, #7dc4d0, #125c84, #58949c, #125c84, #7dc4d0);
                    background-size: 200% 200%;
                }
                .pkg-card.platinum::after {
                    background: linear-gradient(145deg, rgba(255,255,255,0.7) 0%, rgba(255,255,255,0.28) 35%, rgba(88,148,156,0.08) 65%, transparent 100%);
                    height: 100%;
                    border-radius: 14px;
                }
                .pkg-card.platinum:hover {
                    transform: translateY(-7px);
                    box-shadow:
                        inset 0 1px 0 rgba(255,255,255,0.98),
                        0 22px 60px rgba(18,92,132,0.38),
                        0 0 44px rgba(88,148,156,0.22),
                        0 0 0 1px rgba(88,148,156,0.2);
                }

                /* ── Tier label pills ── */
                .pkg-tier-lbl {
                    font-size: 11px;
                    font-weight: 700;
                    letter-spacing: 0.1em;
                    padding: 5px 14px;
                    border-radius: 24px;
                    margin: 0 auto;
                    text-transform: uppercase;
                    white-space: nowrap;
                    position: relative;
                    z-index: 2;
                    width: fit-content;
                    align-self: center;
                }
                .pkg-tier-lbl.silver {
                    background: linear-gradient(#ffffff, #f0f4fc) padding-box,
                                linear-gradient(135deg, #dfe7f5, #9ea9c9) border-box;
                    border: 1px solid transparent;
                    color: #3d4f6b;
                }
                .pkg-tier-lbl.gold {
                    background: linear-gradient(135deg, #fff3a3, #ffb800, #ff7b00);
                    background-size: 200% 200%;
                    animation: gradientMove 4s ease infinite;
                    border: none;
                    color: #3d1a00;
                }
                .pkg-tier-lbl.platinum {
                    background: linear-gradient(135deg, #58949c, #125c84);
                    background-size: 200% 200%;
                    animation: gradientMove 4s ease infinite;
                    border: none;
                    color: #ffffff;
                }

                /* ── Icon box with gradient ring ── */
                .pkg-icon-box {
                    width: 64px;
                    height: 64px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-shrink: 0;
                    position: relative;
                    z-index: 2;
                }
                .pkg-icon-box.silver {
                    background: linear-gradient(#ffffff, #f4f8ff) padding-box,
                                linear-gradient(135deg, #dfe7f5, #9ea9c9, #dfe7f5) border-box;
                    border: 2px solid transparent;
                    box-shadow: 0 2px 12px rgba(158,169,201,0.25);
                }
                .pkg-icon-box.gold {
                    background: linear-gradient(#fffef8, #fff8e6) padding-box,
                                linear-gradient(135deg, #fff3a3, #ffb800, #ff7b00) border-box;
                    border: 2px solid transparent;
                    box-shadow: 0 2px 16px rgba(255,184,0,0.3);
                }
                .pkg-icon-box.platinum {
                    background: linear-gradient(#ffffff, #eef5f8) padding-box,
                                linear-gradient(135deg, #58949c, #125c84) border-box;
                    border: 2px solid transparent;
                    box-shadow: 0 2px 12px rgba(18,92,132,0.2);
                }
                .pkg-icon-box.platinum svg {
                    filter: drop-shadow(0 0 4px rgba(18,92,132,0.3));
                }
                /* Subtle glow on gold icon */
                .pkg-icon-box.gold svg {
                    filter: drop-shadow(0 0 4px rgba(255,184,0,0.5));
                }

                /* ── Divider with gradient fade ── */
                .pkg-divider-line {
                    width: 100%;
                    height: 1px;
                    border: none;
                    margin: 0;
                    position: relative;
                    z-index: 2;
                }
                .pkg-card.silver .pkg-divider-line {
                    background: linear-gradient(90deg, transparent, #9ea9c9 40%, #dfe7f5 60%, transparent);
                }
                .pkg-card.gold .pkg-divider-line {
                    background: linear-gradient(90deg, transparent, #ffb800 40%, #ff7b00 60%, transparent);
                }
                .pkg-card.platinum .pkg-divider-line {
                    background: linear-gradient(90deg, transparent, #125c84 30%, #58949c 50%, #125c84 70%, transparent);
                }

                .pkg-stat-group {
                    display: flex !important;
                    flex-direction: row !important;
                    align-items: center !important;
                    gap: 6px !important;
                }

                /* ── Stats ── */
                .pkg-agents-num {
                    font-family: 'Roboto Slab', serif;
                    font-size: 42px;
                    font-weight: 800;
                    color: #0f172a;
                    line-height: 1;
                    margin: 0;
                    position: relative;
                    z-index: 2;
                    text-align: left !important;
                }
                .pkg-agents-label {
                    font-family: 'Inter', sans-serif;
                    font-size: 12px;
                    font-weight: 700;
                    letter-spacing: 0.1em;
                    color: #64748b;
                    margin: 0;
                    line-height: 1.2;
                    position: relative;
                    z-index: 2;
                }

                /* ── Symmetrical Divider ── */
                .pkg-stats-divider {
                    width: 1px !important;
                    height: 36px !important;
                    align-self: center !important;
                    opacity: 0.8 !important;
                }
                .pkg-card.silver .pkg-stats-divider {
                    background: #9ea9c9 !important;
                }
                .pkg-card.gold .pkg-stats-divider {
                    background: #ff7b00 !important;
                }
                .pkg-card.platinum .pkg-stats-divider {
                    background: #125c84 !important;
                }

                /* ── Benefit badge ── */
                .pkg-benefit {
                    font-family: 'Inter', sans-serif;
                    font-size: 12px;
                    text-align: center;
                    margin: 0;
                    padding: 5px 8px;
                    border-radius: 6px;
                    white-space: normal;
                    position: relative;
                    z-index: 2;
                }
                .pkg-card.silver .pkg-benefit {
                    background: rgba(223,231,245,0.4);
                    border: 1px solid rgba(158,169,201,0.3);
                    color: #3d4f6b;
                }
                .pkg-card.gold .pkg-benefit {
                    background: rgba(255,184,0,0.08);
                    border: 1px solid rgba(255,184,0,0.25);
                    color: #5c2c00;
                }
                .pkg-card.platinum .pkg-benefit {
                    background: rgba(18,92,132,0.06);
                    border: 1px solid rgba(18,92,132,0.2);
                    color: #125c84;
                }

                /* ── Per-tier text overrides ── */
                .pkg-card.gold .pkg-agents-num { color: #3d1a00; }
                .pkg-card.gold .pkg-agents-label { color: #7a3a00; }
                .pkg-card.platinum .pkg-agents-num { color: #0f172a; }
                .pkg-card.platinum .pkg-agents-label { color: #125c84; }

                /* ── CTA Button with gradient borders + hover gradient fill ── */
                .pkg-btn-cta {
                    width: 100%;
                    text-align: center;
                    white-space: nowrap;
                    border-radius: 8px;
                    padding: 7px 16px;
                    font-family: 'Inter', sans-serif;
                    font-size: 12px;
                    font-weight: 600;
                    cursor: pointer;
                    transition: all 0.25s ease;
                    margin-top: 0;
                    position: relative;
                    z-index: 2;
                    background-size: 200% 200%;
                }
                .pkg-card.silver .pkg-btn-cta {
                    background: linear-gradient(#f8fbff, #f0f5ff) padding-box,
                                linear-gradient(135deg, #dfe7f5, #9ea9c9) border-box;
                    border: 1.5px solid transparent;
                    color: #3d4f6b;
                }
                .pkg-card.silver .pkg-btn-cta:hover,
                .pkg-card.silver:hover .pkg-btn-cta {
                    background: linear-gradient(135deg, #dfe7f5, #9ea9c9);
                    color: #1e2d45;
                    box-shadow: 0 4px 14px rgba(158,169,201,0.4);
                }
                .pkg-card.gold .pkg-btn-cta {
                    background: linear-gradient(#fffef8, #fff8e6) padding-box,
                                linear-gradient(135deg, #ffb800, #ff7b00) border-box;
                    border: 1.5px solid transparent;
                    color: #7a3d00;
                }
                .pkg-card.gold .pkg-btn-cta:hover,
                .pkg-card.gold:hover .pkg-btn-cta {
                    background: linear-gradient(135deg, #fff3a3, #ffb800, #ff7b00);
                    background-size: 200% 200%;
                    animation: gradientMove 3s ease infinite;
                    color: #3d1a00;
                    box-shadow: 0 4px 20px rgba(255,184,0,0.5);
                }
                .pkg-card.platinum .pkg-btn-cta {
                    background: linear-gradient(#eef5f8, #daeaf0) padding-box,
                                linear-gradient(135deg, #58949c, #125c84) border-box;
                    border: 1.5px solid transparent;
                    color: #125c84;
                }
                .pkg-card.platinum .pkg-btn-cta:hover,
                .pkg-card.platinum:hover .pkg-btn-cta {
                    background: linear-gradient(135deg, #58949c, #125c84);
                    background-size: 200% 200%;
                    animation: gradientMove 3s ease infinite;
                    color: #ffffff;
                    box-shadow: 0 4px 20px rgba(18,92,132,0.4);
                }

                /* ── Package grid responsive ── */
                @media (max-width: 991px) {
                    .slide.s5 .pkg-grid {
                        grid-template-columns: repeat(2, 1fr) !important;
                        max-width: 700px !important;
                        margin-left: auto !important;
                        margin-right: auto !important;
                    }
                    .slide.s5 .pkg-card.gold {
                        grid-column: auto !important;
                    }
                }
                @media (max-width: 600px) {
                    .slide.s5 .pkg-grid {
                        grid-template-columns: 1fr !important;
                        max-width: 420px !important;
                        margin-left: auto !important;
                        margin-right: auto !important;
                    }
                    .slide.s5 .pkg-card.gold {
                        grid-column: auto !important;
                    }
                    .pkg-agents-num { font-size: 36px !important; }
                }
                @media (max-width: 380px) {
                    .pkg-agents-num { font-size: 30px !important; }
                    .pkg-icon-box { width: 52px !important; height: 52px !important; }
                    .pkg-benefit { font-size: 11px !important; padding: 5px 8px !important; }
                }
            </style>
            <div class="pkg-grid">

                <!-- SILVER -->
                <div class="pkg-card silver" onclick="openSharedModal('silver')">
                    <h3 class="pkg-tier-lbl silver">Silver Package</h3>
                    <div class="pkg-card-body">
                    <div class="pkg-icon-box silver">
                        <svg width="56" height="56" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Background circle -->
                            <circle cx="40" cy="40" r="28" fill="#64748b" opacity="0.1"/>
                            
                            <!-- Outer ring arcs (clockwise flow) -->
                            <path d="M 12 40 A 28 28 0 0 1 26 15.75" stroke="#64748b" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 32 9 L 36 12 L 32 15" stroke="#64748b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            
                            <path d="M 40 12 A 28 28 0 0 1 64.25 26" stroke="#64748b" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 65 32 L 68 36 L 71 32" stroke="#64748b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            
                            <path d="M 68 40 A 28 28 0 0 1 54 64.25" stroke="#64748b" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 48 71 L 44 68 L 48 65" stroke="#64748b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            
                            <path d="M 40 68 A 28 28 0 0 1 15.75 54" stroke="#64748b" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 15 48 L 12 44 L 9 48" stroke="#64748b" stroke-width="2" stroke-linecap="round" fill="none"/>

                            <!-- Up arrow on bottom-left -->
                            <path d="M 27 57 L 27 49" stroke="#64748b" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 24 52 L 27 49 L 30 52" stroke="#64748b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            <path d="M 25 57 L 29 57" stroke="#64748b" stroke-width="2" stroke-linecap="round" fill="none"/>

                            <!-- Down arrow on top-right -->
                            <path d="M 53 23 L 53 31" stroke="#64748b" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 50 28 L 53 31 L 56 28" stroke="#64748b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            <path d="M 51 23 L 55 23" stroke="#64748b" stroke-width="2" stroke-linecap="round" fill="none"/>

                            <!-- Central Chip -->
                            <rect x="32" y="32" width="16" height="16" rx="3" ry="3" stroke="#64748b" stroke-width="2" fill="#ffffff"/>
                            <text x="40" y="40.5" font-family="system-ui, -apple-system, sans-serif" font-weight="900" font-size="7.5" fill="#1e293b" text-anchor="middle" dominant-baseline="central">AI</text>

                            <!-- Pins with circles -->
                            <!-- Top middle pin -->
                            <line x1="40" y1="32" x2="40" y2="25" stroke="#64748b" stroke-width="1.5"/>
                            <circle cx="40" cy="24" r="1.5" stroke="#64748b" stroke-width="1.5" fill="#475569"/>
                            
                            <!-- Top left pin -->
                            <path d="M 36 32 L 36 30 L 34 28 L 34 25" stroke="#64748b" stroke-width="1.5" fill="none"/>
                            <circle cx="34" cy="24" r="1.5" stroke="#64748b" stroke-width="1.5" fill="#ffffff"/>
                            
                            <!-- Top right pin -->
                            <path d="M 44 32 L 44 30 L 46 28 L 46 25" stroke="#64748b" stroke-width="1.5" fill="none"/>
                            <circle cx="46" cy="24" r="1.5" stroke="#64748b" stroke-width="1.5" fill="#ffffff"/>

                            <!-- Bottom middle pin -->
                            <line x1="40" y1="48" x2="40" y2="55" stroke="#64748b" stroke-width="1.5"/>
                            <circle cx="40" cy="56" r="1.5" stroke="#64748b" stroke-width="1.5" fill="#475569"/>
                            
                            <!-- Bottom left pin -->
                            <path d="M 36 48 L 36 50 L 34 52 L 34 55" stroke="#64748b" stroke-width="1.5" fill="none"/>
                            <circle cx="34" cy="56" r="1.5" stroke="#64748b" stroke-width="1.5" fill="#ffffff"/>
                            
                            <!-- Bottom right pin -->
                            <path d="M 44 48 L 44 50 L 46 52 L 46 55" stroke="#64748b" stroke-width="1.5" fill="none"/>
                            <circle cx="46" cy="56" r="1.5" stroke="#64748b" stroke-width="1.5" fill="#ffffff"/>

                            <!-- Left middle pin -->
                            <line x1="32" y1="40" x2="25" y2="40" stroke="#64748b" stroke-width="1.5"/>
                            <circle cx="24" cy="40" r="1.5" stroke="#64748b" stroke-width="1.5" fill="#475569"/>
                            
                            <!-- Left top pin -->
                            <path d="M 32 36 L 30 36 L 28 34 L 25 34" stroke="#64748b" stroke-width="1.5" fill="none"/>
                            <circle cx="24" cy="34" r="1.5" stroke="#64748b" stroke-width="1.5" fill="#ffffff"/>
                            
                            <!-- Left bottom pin -->
                            <path d="M 32 44 L 30 44 L 28 46 L 25 46" stroke="#64748b" stroke-width="1.5" fill="none"/>
                            <circle cx="24" cy="46" r="1.5" stroke="#64748b" stroke-width="1.5" fill="#ffffff"/>

                            <!-- Right middle pin -->
                            <line x1="48" y1="40" x2="55" y2="40" stroke="#64748b" stroke-width="1.5"/>
                            <circle cx="56" cy="40" r="1.5" stroke="#64748b" stroke-width="1.5" fill="#475569"/>
                            
                            <!-- Right top pin -->
                            <path d="M 48 36 L 50 36 L 52 34 L 55 34" stroke="#64748b" stroke-width="1.5" fill="none"/>
                            <circle cx="56" cy="34" r="1.5" stroke="#64748b" stroke-width="1.5" fill="#ffffff"/>
                            
                            <!-- Right bottom pin -->
                            <path d="M 48 44 L 50 44 L 52 46 L 55 46" stroke="#64748b" stroke-width="1.5" fill="none"/>
                            <circle cx="56" cy="46" r="1.5" stroke="#64748b" stroke-width="1.5" fill="#ffffff"/>
                        </svg>
                    </div>
                    <div class="pkg-stats">
                        <div class="pkg-stat-group">
                            <p class="pkg-agents-num">20</p>
                            <p class="pkg-agents-label">AGENTS</p>
                        </div>
                        <div class="pkg-stats-divider"></div>
                        <div class="pkg-stat-group">
                            <p class="pkg-agents-num">3</p>
                            <p class="pkg-agents-label">MONTHS</p>
                        </div>
                    </div>
                    </div>
                    <hr class="pkg-divider-line"/>
                    <div class="pkg-card-footer">
                        <p class="pkg-benefit">Governance &amp; Monitoring Included</p>
                        <button class="pkg-btn-cta">See Inclusions</button>
                    </div>
                </div>

                <!-- GOLD -->
                <div class="pkg-card gold" onclick="openSharedModal('gold')">
                    <h3 class="pkg-tier-lbl gold">Gold Package</h3>
                    <div class="pkg-card-body">
                    <div class="pkg-icon-box gold">
                        <svg width="56" height="56" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Background circle -->
                            <circle cx="40" cy="40" r="28" fill="#C9A227" opacity="0.1"/>
                            
                            <!-- Outer ring arcs (clockwise flow) -->
                            <path d="M 12 40 A 28 28 0 0 1 26 15.75" stroke="#C9A227" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 32 9 L 36 12 L 32 15" stroke="#C9A227" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            
                            <path d="M 40 12 A 28 28 0 0 1 64.25 26" stroke="#C9A227" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 65 32 L 68 36 L 71 32" stroke="#C9A227" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            
                            <path d="M 68 40 A 28 28 0 0 1 54 64.25" stroke="#C9A227" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 48 71 L 44 68 L 48 65" stroke="#C9A227" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            
                            <path d="M 40 68 A 28 28 0 0 1 15.75 54" stroke="#C9A227" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 15 48 L 12 44 L 9 48" stroke="#C9A227" stroke-width="2" stroke-linecap="round" fill="none"/>

                            <!-- Up arrow on bottom-left -->
                            <path d="M 27 57 L 27 49" stroke="#C9A227" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 24 52 L 27 49 L 30 52" stroke="#C9A227" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 25 57 L 29 57" stroke="#C9A227" stroke-width="2" stroke-linecap="round" fill="none"/>

                            <!-- Down arrow on top-right -->
                            <path d="M 53 23 L 53 31" stroke="#C9A227" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 50 28 L 53 31 L 56 28" stroke="#C9A227" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 51 23 L 55 23" stroke="#C9A227" stroke-width="2" stroke-linecap="round" fill="none"/>

                            <!-- Central Chip -->
                            <rect x="32" y="32" width="16" height="16" rx="3" ry="3" stroke="#C9A227" stroke-width="2" fill="#ffffff"/>
                            <text x="40" y="40.5" font-family="system-ui, -apple-system, sans-serif" font-weight="900" font-size="7.5" fill="#a16207" text-anchor="middle" dominant-baseline="central">AI</text>

                            <!-- Pins with circles -->
                            <!-- Top middle pin -->
                            <line x1="40" y1="32" x2="40" y2="25" stroke="#C9A227" stroke-width="1.5"/>
                            <circle cx="40" cy="24" r="1.5" stroke="#C9A227" stroke-width="1.5" fill="#a16207"/>
                            
                            <!-- Top left pin -->
                            <path d="M 36 32 L 36 30 L 34 28 L 34 25" stroke="#C9A227" stroke-width="1.5" fill="none"/>
                            <circle cx="34" cy="24" r="1.5" stroke="#C9A227" stroke-width="1.5" fill="#ffffff"/>
                            
                            <!-- Top right pin -->
                            <path d="M 44 32 L 44 30 L 46 28 L 46 25" stroke="#C9A227" stroke-width="1.5" fill="none"/>
                            <circle cx="46" cy="24" r="1.5" stroke="#C9A227" stroke-width="1.5" fill="#ffffff"/>

                            <!-- Bottom middle pin -->
                            <line x1="40" y1="48" x2="40" y2="55" stroke="#C9A227" stroke-width="1.5"/>
                            <circle cx="40" cy="56" r="1.5" stroke="#C9A227" stroke-width="1.5" fill="#a16207"/>
                            
                            <!-- Bottom left pin -->
                            <path d="M 36 48 L 36 50 L 34 52 L 34 55" stroke="#C9A227" stroke-width="1.5" fill="none"/>
                            <circle cx="34" cy="56" r="1.5" stroke="#C9A227" stroke-width="1.5" fill="#ffffff"/>
                            
                            <!-- Bottom right pin -->
                            <path d="M 44 48 L 44 50 L 46 52 L 46 55" stroke="#C9A227" stroke-width="1.5" fill="none"/>
                            <circle cx="46" cy="56" r="1.5" stroke="#C9A227" stroke-width="1.5" fill="#ffffff"/>

                            <!-- Left middle pin -->
                            <line x1="32" y1="40" x2="25" y2="40" stroke="#C9A227" stroke-width="1.5"/>
                            <circle cx="24" cy="40" r="1.5" stroke="#C9A227" stroke-width="1.5" fill="#a16207"/>
                            
                            <!-- Left top pin -->
                            <path d="M 32 36 L 30 36 L 28 34 L 25 34" stroke="#C9A227" stroke-width="1.5" fill="none"/>
                            <circle cx="24" cy="34" r="1.5" stroke="#C9A227" stroke-width="1.5" fill="#ffffff"/>
                            
                            <!-- Left bottom pin -->
                            <path d="M 32 44 L 30 44 L 28 46 L 25 46" stroke="#C9A227" stroke-width="1.5" fill="none"/>
                            <circle cx="24" cy="46" r="1.5" stroke="#C9A227" stroke-width="1.5" fill="#ffffff"/>

                            <!-- Right middle pin -->
                            <line x1="48" y1="40" x2="55" y2="40" stroke="#C9A227" stroke-width="1.5"/>
                            <circle cx="56" cy="40" r="1.5" stroke="#C9A227" stroke-width="1.5" fill="#a16207"/>
                            
                            <!-- Right top pin -->
                            <path d="M 48 36 L 50 36 L 52 34 L 55 34" stroke="#C9A227" stroke-width="1.5" fill="none"/>
                            <circle cx="56" cy="34" r="1.5" stroke="#C9A227" stroke-width="1.5" fill="#ffffff"/>
                            
                            <!-- Right bottom pin -->
                            <path d="M 48 44 L 50 44 L 52 46 L 55 46" stroke="#C9A227" stroke-width="1.5" fill="none"/>
                            <circle cx="56" cy="46" r="1.5" stroke="#C9A227" stroke-width="1.5" fill="#ffffff"/>
                        </svg>
                    </div>
                    <div class="pkg-stats">
                        <div class="pkg-stat-group">
                            <p class="pkg-agents-num">50</p>
                            <p class="pkg-agents-label">AGENTS</p>
                        </div>
                        <div class="pkg-stats-divider"></div>
                        <div class="pkg-stat-group">
                            <p class="pkg-agents-num">4</p>
                            <p class="pkg-agents-label">MONTHS</p>
                        </div>
                    </div>
                    </div>
                    <hr class="pkg-divider-line"/>
                    <div class="pkg-card-footer">
                        <p class="pkg-benefit">Governance &amp; Monitoring Included</p>
                        <button class="pkg-btn-cta">See Inclusions</button>
                    </div>
                </div>

                <!-- PLATINUM -->
                <div class="pkg-card platinum plat" onclick="openSharedModal('platinum')">
                    <h3 class="pkg-tier-lbl platinum">Platinum Package</h3>
                    <div class="pkg-card-body">
                    <div class="pkg-icon-box platinum">
                        <svg width="56" height="56" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Background circle -->
                            <circle cx="40" cy="40" r="28" fill="#0b1f44" opacity="0.1"/>
                            
                            <!-- Outer ring arcs (clockwise flow) -->
                            <path d="M 12 40 A 28 28 0 0 1 26 15.75" stroke="#0b1f44" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 32 9 L 36 12 L 32 15" stroke="#0b1f44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            
                            <path d="M 40 12 A 28 28 0 0 1 64.25 26" stroke="#0b1f44" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 65 32 L 68 36 L 71 32" stroke="#0b1f44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            
                            <path d="M 68 40 A 28 28 0 0 1 54 64.25" stroke="#0b1f44" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 48 71 L 44 68 L 48 65" stroke="#0b1f44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            
                            <path d="M 40 68 A 28 28 0 0 1 15.75 54" stroke="#0b1f44" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 15 48 L 12 44 L 9 48" stroke="#0b1f44" stroke-width="2" stroke-linecap="round" fill="none"/>

                            <!-- Up arrow on bottom-left -->
                            <path d="M 27 57 L 27 49" stroke="#0b1f44" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 24 52 L 27 49 L 30 52" stroke="#0b1f44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            <path d="M 25 57 L 29 57" stroke="#0b1f44" stroke-width="2" stroke-linecap="round" fill="none"/>

                            <!-- Down arrow on top-right -->
                            <path d="M 53 23 L 53 31" stroke="#0b1f44" stroke-width="2" stroke-linecap="round" fill="none"/>
                            <path d="M 50 28 L 53 31 L 56 28" stroke="#0b1f44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            <path d="M 51 23 L 55 23" stroke="#0b1f44" stroke-width="2" stroke-linecap="round" fill="none"/>

                            <!-- Central Chip -->
                            <rect x="32" y="32" width="16" height="16" rx="3" ry="3" stroke="#0b1f44" stroke-width="2" fill="#ffffff"/>
                            <text x="40" y="40.5" font-family="system-ui, -apple-system, sans-serif" font-weight="900" font-size="7.5" fill="#0b1f44" text-anchor="middle" dominant-baseline="central">AI</text>

                            <!-- Pins with circles -->
                            <!-- Top middle pin -->
                            <line x1="40" y1="32" x2="40" y2="25" stroke="#0b1f44" stroke-width="1.5"/>
                            <circle cx="40" cy="24" r="1.5" stroke="#0b1f44" stroke-width="1.5" fill="#e31837"/>
                            
                            <!-- Top left pin -->
                            <path d="M 36 32 L 36 30 L 34 28 L 34 25" stroke="#0b1f44" stroke-width="1.5" fill="none"/>
                            <circle cx="34" cy="24" r="1.5" stroke="#0b1f44" stroke-width="1.5" fill="#ffffff"/>
                            
                            <!-- Top right pin -->
                            <path d="M 44 32 L 44 30 L 46 28 L 46 25" stroke="#0b1f44" stroke-width="1.5" fill="none"/>
                            <circle cx="46" cy="24" r="1.5" stroke="#0b1f44" stroke-width="1.5" fill="#ffffff"/>

                            <!-- Bottom middle pin -->
                            <line x1="40" y1="48" x2="40" y2="55" stroke="#0b1f44" stroke-width="1.5"/>
                            <circle cx="40" cy="56" r="1.5" stroke="#0b1f44" stroke-width="1.5" fill="#e31837"/>
                            
                            <!-- Bottom left pin -->
                            <path d="M 36 48 L 36 50 L 34 52 L 34 55" stroke="#0b1f44" stroke-width="1.5" fill="none"/>
                            <circle cx="34" cy="56" r="1.5" stroke="#0b1f44" stroke-width="1.5" fill="#ffffff"/>
                            
                            <!-- Bottom right pin -->
                            <path d="M 44 48 L 44 50 L 46 52 L 46 55" stroke="#0b1f44" stroke-width="1.5" fill="none"/>
                            <circle cx="46" cy="56" r="1.5" stroke="#0b1f44" stroke-width="1.5" fill="#ffffff"/>

                            <!-- Left middle pin -->
                            <line x1="32" y1="40" x2="25" y2="40" stroke="#0b1f44" stroke-width="1.5"/>
                            <circle cx="24" cy="40" r="1.5" stroke="#0b1f44" stroke-width="1.5" fill="#e31837"/>
                            
                            <!-- Left top pin -->
                            <path d="M 32 36 L 30 36 L 28 34 L 25 34" stroke="#0b1f44" stroke-width="1.5" fill="none"/>
                            <circle cx="24" cy="34" r="1.5" stroke="#0b1f44" stroke-width="1.5" fill="#ffffff"/>
                            
                            <!-- Left bottom pin -->
                            <path d="M 32 44 L 30 44 L 28 46 L 25 46" stroke="#0b1f44" stroke-width="1.5" fill="none"/>
                            <circle cx="24" cy="46" r="1.5" stroke="#0b1f44" stroke-width="1.5" fill="#ffffff"/>

                            <!-- Right middle pin -->
                            <line x1="48" y1="40" x2="55" y2="40" stroke="#0b1f44" stroke-width="1.5"/>
                            <circle cx="56" cy="40" r="1.5" stroke="#0b1f44" stroke-width="1.5" fill="#e31837"/>
                            
                            <!-- Right top pin -->
                            <path d="M 48 36 L 50 36 L 52 34 L 55 34" stroke="#0b1f44" stroke-width="1.5" fill="none"/>
                            <circle cx="56" cy="34" r="1.5" stroke="#0b1f44" stroke-width="1.5" fill="#ffffff"/>
                            
                            <!-- Right bottom pin -->
                            <path d="M 48 44 L 50 44 L 52 46 L 55 46" stroke="#0b1f44" stroke-width="1.5" fill="none"/>
                            <circle cx="56" cy="46" r="1.5" stroke="#0b1f44" stroke-width="1.5" fill="#ffffff"/>
                        </svg>
                    </div>
                    <div class="pkg-stats">
                        <div class="pkg-stat-group">
                            <p class="pkg-agents-num">100</p>
                            <p class="pkg-agents-label">AGENTS</p>
                        </div>
                        <div class="pkg-stats-divider"></div>
                        <div class="pkg-stat-group">
                            <p class="pkg-agents-num">6</p>
                            <p class="pkg-agents-label">MONTHS</p>
                        </div>
                    </div>
                    </div>
                    <hr class="pkg-divider-line"/>
                    <div class="pkg-card-footer">
                        <p class="pkg-benefit">Governance &amp; Monitoring Included</p>
                        <button class="pkg-btn-cta">See Inclusions</button>
                    </div>
                </div>

            </div>
            <div class="pkg-cta-wrap">
                <a href="https://calendly.com/airodigitallabs/30min?guests=sayak.das%40airodigitallabs.com&month=2026-05"
                target="_blank" rel="noopener noreferrer" class="pkg-cta-btn">
                    Get started now
                </a>
            </div>



            </div>
        </div>

        <!-- Styles for animations and interactions -->
        <style>
            :root {
                --navy: #0b1f44;
                --red: #e31837;
                --white: #ffffff;
                --gray-bg: #cbd5e1;
                --gray-dark: #8c8c8c;
            }

            /* Domain Hover Effects (Outer Gray Ring) */
            .domain-segment .domain-bg {
                transition:
                    stroke 0.3s ease,
                    filter 0.3s ease;
            }

            .domain-segment text {
                transition: fill 0.3s ease;
            }

            .domain-segment:hover .domain-bg {
                stroke: var(--navy);
                filter: drop-shadow(0px 8px 16px rgba(0, 0, 0, 0.15));
            }

            .domain-segment:hover text {
                fill: var(--white);
            }

            /* Interactive Group Hover Effects (Phases & ERP/CRM/SCM) */
            .interactive-group {
                transition: filter 0.2s ease;
            }

            .interactive-group:hover {
                filter: brightness(1.15) drop-shadow(0px 4px 8px rgba(0, 0, 0, 0.2));
            }

            /* Modal Styles */
            .modal-overlay {
                position: fixed;
                inset: 0;
                background: rgba(11, 31, 68, 0.4);
                backdrop-filter: blur(4px);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 1000;
                opacity: 1;
                transition: opacity 0.3s ease;
            }

            .modal-overlay.hidden {
                opacity: 0;
                pointer-events: none;
            }

            #shared-modal-box {
                background: #ffffff;
                border-radius: 12px;
                padding: 32px 40px;
                width: 540px;
                max-width: 90%;
                position: relative;
                box-shadow: 0 24px 48px rgba(0, 0, 0, 0.2);
                transform: translateY(0);
                transition: transform 0.3s ease;
                font-family: "Inter", sans-serif;
            }

            .modal-overlay.hidden #shared-modal-box {
                transform: translateY(20px);
            }

            #shared-modal-close {
                position: absolute;
                top: 16px;
                right: 20px;
                background: none;
                border: none;
                font-size: 20px;
                font-weight: bold;
                cursor: pointer;
                color: #64748b;
                transition: color 0.2s;
            }

            #shared-modal-close:hover {
                color: var(--red);
            }

            #shared-modal-accent {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 6px;
                border-top-left-radius: 12px;
                border-top-right-radius: 12px;
            }

            #shared-modal-eyebrow {
                color: var(--phase-color);
                font-weight: 700;
                font-size: 13px;
                text-transform: uppercase;
                letter-spacing: 1px;
                margin: 0 0 8px 0;
            }

            #shared-modal-title {
                font-family: "Roboto Slab", serif;
                font-size: 26px;
                color: #0f172a;
                margin: 0 0 24px 0;
                font-weight: 800;
            }

            #shared-modal-list {
                padding-left: 20px !important;
                margin: 0 0 20px 0 !important;
                padding-top: 0 !important;
                padding-bottom: 0 !important;
                padding-right: 0 !important;
            }

            #shared-modal-list li {
                margin: 0 0 6px 0 !important;
                padding: 0 !important;
                color: #334155 !important;
                line-height: 1.3 !important;
                font-size: 14.5px !important;
                font-weight: 500 !important;
            }

            #shared-modal-list li::marker {
                color: var(--phase-color);
            }

            @media (max-width: 768px) {
                #shared-modal-list {
                    margin: 0 0 12px 0 !important;
                    padding-left: 16px !important;
                }
                #shared-modal-list li {
                    margin: 0 0 5px 0 !important;
                    padding: 0 !important;
                    line-height: 1.22 !important;
                    font-size: 13px !important;
                }
            }

            #shared-modal-footer {
                font-size: 12px;
                color: #94a3b8;
                border-top: 1px solid #e2e8f0;
                padding-top: 16px;
                margin: 0;
                font-weight: 500;
            }
        </style>

        <!-- Modal JavaScript Logic -->
        <script>
            // Comprehensive content configuration for all 9 clickable areas
            const modalContent = {
                // --- Inner Phase Layer ---
                phase1: {
                    color: "#0b1f44", // Navy
                    eyebrow: "Core Layer",
                    title: "Build",
                    items: [
                        "Rapid Agent Prototyping & Sandbox Environment",
                        "Custom LLM Fine-Tuning & Prompt Engineering",
                        "Initial Data Source & API Hook Integration",
                        "First Delivery & User Acceptance Testing",
                        "Security & Compliance Boundary Setup",
                    ],
                },
                phase2: {
                    color: "#8c8c8c", // Gray
                    eyebrow: "Core Layer",
                    title: "Manage",
                    items: [
                        "Dedicated 24/7 Agent Monitoring & Observability",
                        "Continuous Performance Optimization & Fine-tuning",
                        "Your Agents. Your IP. Always Retained.",
                        "Secure Private Cloud or On-Premise Hosting",
                        "Automated Drift Detection & Resolution",
                    ],
                },
                phase3: {
                    color: "#e31837", // Red
                    eyebrow: "Core Layer",
                    title: "Continuously Upgrade",
                    items: [
                        "Ever Evolving & Portable Agent Architectures",
                        "Seamless Foundation Model Swapping (LLM Agnostic)",
                        "Advanced Cognitive & Reasoning Upgrades",
                        "Cross-Platform Migration Capabilities",
                        "Integration of Next-Gen AI Capabilities",
                    ],
                },
                phase4: {
                    color: "#e31837", // Red
                    eyebrow: "Core Layer",
                    title: "Benefits",
                    items: [
                        "AI That Evolves With Your Business.",
                        "Governed AI. Continuous Execution",
                        "One Lifecycle. Full Enterprise Control.",
                        "Enterprise AI Without Operational Chaos.",
                        "Operationalize AI Across The Enterprise.",
                    ],
                },

                // --- Middle Enterprise Layer (ERP, CRM, SCM) ---
                erp: {
                    color: "#e31837", // Red
                    eyebrow: "Enterprise Layer",
                    title: "ERP Platform",
                    items: [
                        "Autonomous Financial Close & Reconciliation Orchestration",
                        "Agentic Supply Chain Demand Triage",
                        "Predictive Procurement & Vendor Risk Intelligence",
                        "Agentic Quality Control & Returns Management",
                        "Autonomous Order-to-Cash (O2C) Orchestration",
                    ],
                },
                crm: {
                    color: "#e31837", // Red
                    eyebrow: "Enterprise Layer",
                    title: "CRM Platform",
                    items: [
                        "Autonomous Lead Triage and Qualification Orchestration",
                        "Agentic Opportunity 'Health' Monitoring",
                        "Autonomous Customer Remediation and Retention",
                        "Self-Healing CRM Data and Record Rejuvenation",
                        "Autonomous Meeting Intelligence & Action Orchestration",
                    ],
                },
                scm: {
                    color: "#e31837", // Red
                    eyebrow: "Enterprise Layer",
                    title: "SCM Platform",
                    items: [
                        "Autonomous Demand-Supply Rebalancing",
                        "Agentic Logistics & Last-Mile Triage",
                        "Self-Healing Inventory & Warehouse Orchestration",
                        "Autonomous Vendor Risk & Compliance Monitoring",
                        "Intelligent Sourcing & Contract Rejuvenation",
                    ],
                },

                // --- Outer Functional Domains Layer ---
                domain1: {
                    color: "#0b1f44", // Navy (Matches hover state)
                    eyebrow: "Most Popular Use Cases",
                    title: "Front Office Use Cases",
                    items: [
                        "Autonomous Resolution Agents",
                        "Hyper-Personalized Upsell/Cross-Sell Triage",
                        "Multi-Classifier Sentiment & Intent Intelligence",
                        "Self-Healing Knowledge Management",
                        "Agentic Customer Remediation & Dispute Handling",
                    ],
                },
                domain2: {
                    color: "#0b1f44",
                    eyebrow: "Most Popular Use Cases",
                    title: "Back Office Use Cases",
                    items: [
                        "Autonomous Accounts Payable & Receivable Orchestration",
                        "Agentic HR Talent Acquisition & Onboarding",
                        "Intelligent Procurement & Vendor Contract Intelligence",
                        "Agentic Document Intelligence & Legal Triage",
                        "Agentic Customer Remediation & Dispute Handling",
						"Autonomous Travel & Expense (T&E) Compliance Orchestration",
                    ],
                },
                domain3: {
                    color: "#0b1f44",
                    eyebrow: "Most Popular Use Cases",
                    title: "IT Use Cases",
                    items: [
                        "Autonomous Incident Remediation & Self-Healing",
                        "Agentic SDLC Acceleration (AI-DLC)",
                        "Autonomous Cybersecurity Triage & Threat Hunting",
                        "Real-Time Cost Optimization & Multi-Cloud Right-Sizing",
                        "Agentic Customer Remediation & Dispute Handling",
                        "Self-Service Agentic Desk with MCP Context",
                    ],
                },

                // --- Industry Layer ---
                ind1: {
                    color: "#0b1f44",
                    eyebrow: "Industries",
                    title: "Pharma & Life Sciences",
                    items: [
                        "Autonomous Clinical Trial Protocol Design & Optimization",
                        "Agentic Pharmacovigilance & Adverse Event Triage",
                        "Precision Patient Recruitment & Enrollment Orchestration",
                        "Autonomous Regulatory Submission & Documentation (eCTD)",
                    ],
                },
                ind2: {
                    color: "#0b1f44",
                    eyebrow: "Industries",
                    title: "Manufacturing",
                    items: [
                        "Autonomous Predictive Maintenance & Self-Healing Assets",
                        "Agentic Supply Chain Orchestration & Triage",
                        "Autonomous Quality Inspection & Defect Remediation",
                        "Intelligent Production Scheduling & Demand Alignment",
                        "Agent-Led Sustainability & Real-time Cost Optimization",
                    ],
                },
                ind3: {
                    color: "#0b1f44",
                    eyebrow: "Industries",
                    title: "Retail & CPG",
                    items: [
                        "Autonomous Demand Sensing & Inventory Rejuvenation",
                        "Hyper-Personalized Agentic Marketing & Promotion Triage",
                        "Self-Healing Supply Chain & Last-Mile Orchestration",
                        "Autonomous Fraud & Shrinkage Intelligence",
                        "Agent-Led Intelligent Shelf & Assortment Optimization",
                    ],
                },
                ind4: {
                    color: "#0b1f44",
                    eyebrow: "Industries",
                    title: "Banking and Financial Services",
                    items: [
                        "Autonomous Fraud & AML Detection",
                        "Agentic Personalization & Wealth Advisory",
                        "Autonomous Loan Underwriting & Credit Risk Triage",
                        "Intelligent Customer Remediation & Claim Orchestration",
                        "Real-Time Cost & Capital Optimization",
                    ],
                },

                // --- Package Tier Details ---
                silver: {
                    color: "#8a8a8a",
                    // eyebrow: "Silver Package · 20 Agents · 3 Months",
                    title: "Silver Package",
                    items: [
                        "20 Secure AI Agents",
                        "3 Months of Build Phase",
                        "Airo Pod Deployment",
                        "Proprietary AiroCoreAI<sup>©</sup> Engine",
                        "Total IP Ownership & Portability",
                    ],
                },
                gold: {
                    color: "#C9A227",
                    // eyebrow: "Gold Package · 50 Agents · 4 Months",
                    title: "Gold Package",
                    items: [
                        "50 Secure AI Agents",
                        "4 Months of Build Phase",
                        "Airo Pod Deployment",
                        "Proprietary AiroCoreAI<sup>©</sup> Engine",
                        "Total IP Ownership & Portability",
                    ],
                },
                platinum: {
                    color: "#5a6e8c",
                    // eyebrow: "Platinum Package · 100 Agents · 6 Months",
                    title: "Platinum Package",
                    items: [
                        "100 Secure AI Agents",
                        "6 Months of Build Phase",
                        "Airo Pod Deployment",
                        "Proprietary AiroCoreAI<sup>©</sup> Engine",
                        "Total IP Ownership & Portability",
                    ],
                },
            };

            function openSharedModal(key) {
                const data = modalContent[key];
                if (!data) return;

                // Update modal contents dynamically based on the clicked element
                document
                    .getElementById("shared-modal-box")
                    .style.setProperty("--phase-color", data.color);
                
                const eyebrowEl = document.getElementById("shared-modal-eyebrow");
                if (data.eyebrow) {
                    eyebrowEl.innerText = data.eyebrow;
                    eyebrowEl.style.display = "block";
                } else {
                    eyebrowEl.style.display = "none";
                }
                
                document.getElementById("shared-modal-title").innerText = data.title;

                const listEl = document.getElementById("shared-modal-list");
                listEl.innerHTML = ""; // Clear old items

                data.items.forEach((itemText) => {
                    const li = document.createElement("li");
                    li.innerHTML = itemText;
                    listEl.appendChild(li);
                });

                // Show the overlay
                document
                    .getElementById("shared-modal-overlay")
                    .classList.remove("hidden");
            }

            function closeSharedModal() {
                document
                    .getElementById("shared-modal-overlay")
                    .classList.add("hidden");
            }

            // Allow closing the modal by clicking outside the white box (on the blurred overlay)
            document
                .getElementById("shared-modal-overlay")
                .addEventListener("click", function (e) {
                    if (e.target === this) {
                        closeSharedModal();
                    }
                });
        </script>

        <!-- Styles for animations and interactions -->
        <style>
            :root {
                --navy: #0b1f44;
                --red: #e31837;
                --white: #ffffff;
                --gray-bg: #cbd5e1;
            }

            /* Domain Hover Effects */
            .domain-segment .domain-bg {
                transition:
                    stroke 0.3s ease,
                    filter 0.3s ease;
            }

            .domain-segment text {
                transition: fill 0.3s ease;
            }

            .domain-segment:hover .domain-bg {
                stroke: var(--navy);
                filter: drop-shadow(0px 8px 16px rgba(0, 0, 0, 0.15));
            }

            .domain-segment:hover text {
                fill: var(--white);
            }

            /* Modal Styles */
            .modal-overlay {
                position: fixed;
                inset: 0;
                background: rgba(11, 31, 68, 0.4);
                backdrop-filter: blur(4px);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 1000;
                opacity: 1;
                transition: opacity 0.3s ease;
            }

            .modal-overlay.hidden {
                opacity: 0;
                pointer-events: none;
            }

            #domain-modal-box {
                background: #ffffff;
                border-radius: 12px;
                padding: 32px 40px;
                width: 540px;
                max-width: 90%;
                position: relative;
                box-shadow: 0 24px 48px rgba(0, 0, 0, 0.2);
                transform: translateY(0);
                transition: transform 0.3s ease;
                font-family: "Inter", sans-serif;
            }

            .modal-overlay.hidden #domain-modal-box {
                transform: translateY(20px);
            }

            #domain-modal-close {
                position: absolute;
                top: 16px;
                right: 20px;
                background: none;
                border: none;
                font-size: 20px;
                font-weight: bold;
                cursor: pointer;
                color: #64748b;
                transition: color 0.2s;
            }

            #domain-modal-close:hover {
                color: var(--red);
            }

            #domain-modal-accent {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 6px;
                border-top-left-radius: 12px;
                border-top-right-radius: 12px;
            }

            #domain-modal-eyebrow {
                color: var(--phase-color);
                font-weight: 700;
                font-size: 13px;
                text-transform: uppercase;
                letter-spacing: 1px;
                margin: 0 0 8px 0;
            }

            #domain-modal-title {
                font-family: "Roboto Slab", serif;
                font-size: 26px;
                color: #0f172a;
                margin: 0 0 24px 0;
                font-weight: 800;
            }

            #domain-modal-list {
                padding-left: 20px;
                margin: 0 0 32px 0;
            }

            #domain-modal-list li {
                margin-bottom: 12px;
                color: #334155;
                line-height: 1.5;
                font-size: 15px;
                font-weight: 500;
            }

            #domain-modal-list li::marker {
                color: var(--phase-color);
            }

            #domain-modal-footer {
                font-size: 12px;
                color: #94a3b8;
                border-top: 1px solid #e2e8f0;
                padding-top: 16px;
                margin: 0;
                font-weight: 500;
            }
        </style>

        <!-- Modal JavaScript Logic -->
        <script>
            // Content configuration for the three domains
            const domainContent = {
                1: {
                    color: "#0b1f44", // Navy to match the hover state
                    eyebrow: "Most Popular Use Cases",
                    title: "Front Office Use Case",
                    items: [
                        "Autonomous Resolution Agents",
                        "Hyper-Personalized Upsell/Cross-Sell Triage",
                        "Multi-Classifier Sentiment & Intent Intelligence",
                        "Self-Healing Knowledge Management",
                        "Agentic Customer Remediation & Dispute Handling",
                    ],
                },
                2: {
                    color: "#0b1f44",
                    eyebrow: "Most Popular Use Cases",
                    title: "Back Office Use Case",
                    items: [
                        "Autonomous Resolution Agents",
                        "Hyper-Personalized Upsell/Cross-Sell Triage",
                        "Multi-Classifier Sentiment & Intent Intelligence",
                        "Self-Healing Knowledge Management",
                        "Agentic Customer Remediation & Dispute Handling",
                    ],
                },
                3: {
                    color: "#0b1f44",
                    eyebrow: "Most Popular Use Cases",
                    title: "IT Use Case",
                    items: [
                        "Autonomous Incident Remediation & Self-Healing",
                        "Agentic SDLC Acceleration (AI-DLC)",
                        "Autonomous Cybersecurity Triage & Threat Hunting",
                        "Real-Time Cost Optimization & Multi-Cloud Right-Sizing",
                        "Agentic Customer Remediation & Dispute Handling",
                        "Self-Service Agentic Desk with MCP Context",
                    ],
                },
            };

            function openDomainModal(domainId) {
                const data = domainContent[domainId];
                if (!data) return;

                // Update modal contents dynamically
                document
                    .getElementById("domain-modal-box")
                    .style.setProperty("--phase-color", data.color);
                document.getElementById("domain-modal-eyebrow").innerText =
                    data.eyebrow;
                document.getElementById("domain-modal-title").innerText = data.title;

                const listEl = document.getElementById("domain-modal-list");
                listEl.innerHTML = ""; // Clear old items

                data.items.forEach((itemText) => {
                    const li = document.createElement("li");
                    li.innerHTML = itemText;
                    listEl.appendChild(li);
                });

                // Show the overlay
                document
                    .getElementById("domain-modal-overlay")
                    .classList.remove("hidden");
            }

            function closeDomainModal() {
                document
                    .getElementById("domain-modal-overlay")
                    .classList.add("hidden");
            }

            // Allow closing the modal by clicking outside the white box (on the overlay)
            document
                .getElementById("domain-modal-overlay")
                .addEventListener("click", function (e) {
                    if (e.target === this) {
                        closeDomainModal();
                    }
                });
        </script>

        <!-- Styles for animations and interactions -->
        <style>
            :root {
                --navy: #0b1f44;
                --red: #e31837;
                --white: #ffffff;
                --gray-bg: #cbd5e1;
            }

            .domain-segment .domain-bg {
                transition:
                    stroke 0.3s ease,
                    filter 0.3s ease;
            }

            .domain-segment text {
                transition: fill 0.3s ease;
            }

            /* Interaction: Mouseover changes colors */
            .domain-segment:hover .domain-bg {
                stroke: var(--navy);
                /* Band turns Navy on hover */
                filter: drop-shadow(0px 8px 16px rgba(0, 0, 0, 0.15));
            }

            .domain-segment:hover text {
                fill: var(--white);
                /* Text turns White on hover */
            }
        </style>

        <!-- Styles for animations and interactions -->
        <style>
            :root {
                --navy: #0b1f44;
                --red: #e31837;
                --white: #ffffff;
                --gray-bg: #cbd5e1;
                /* New gray band color */
            }

            .domain-segment .domain-bg {
                transition:
                    stroke 0.3s ease,
                    filter 0.3s ease;
            }

            .domain-segment text {
                transition: fill 0.3s ease;
            }

            /* Interaction: Mouseover changes colors */
            .domain-segment:hover .domain-bg {
                stroke: var(--navy);
                /* Band turns Navy on hover */
                filter: drop-shadow(0px 8px 16px rgba(0, 0, 0, 0.15));
            }

            .domain-segment:hover text {
                fill: var(--white);
                /* Text turns White on hover */
            }
        </style>


        <!-- Styles for animations and interactions -->
        <style>
			
			@media (max-width: 767px) {
    .slide:not(.s0):not(.s5) { 
		top:-45px !important;
				}
				#fcta:not(.s0):not(.s5) {bottom:85px !important; }
			}
			
			
			
            :root {
                --navy: #0b1f44;
                --red: #e31837;
                --white: #ffffff;
                --gray-bg: #cbd5e1;
                --light-blue: #f1f5f9;
            }

            /* Interactive Hover Effects for L3 and L4 (Color Swap) */
            .hover-stroke-group .hs-bg {
                transition:
                    stroke 0.3s ease,
                    filter 0.3s ease;
            }

            .hover-stroke-group .hs-text {
                transition: fill 0.3s ease;
            }

            .hover-stroke-group:hover .hs-bg {
                stroke: var(--navy);
                filter: drop-shadow(0px 8px 16px rgba(0, 0, 0, 0.15));
            }

            .hover-stroke-group:hover .hs-text {
                fill: var(--white);
            }

            /* Standard Brightness Hover for Core & ERP Layers */
            .interactive-group {
                transition: filter 0.2s ease;
            }

            .interactive-group:hover {
                filter: brightness(1.15) drop-shadow(0px 4px 8px rgba(0, 0, 0, 0.2));
            }

            /* Modal Styles */
            .modal-overlay {
                position: fixed;
                inset: 0;
                background: rgba(11, 31, 68, 0.4);
                backdrop-filter: blur(4px);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 1000;
                opacity: 1;
                transition: opacity 0.3s ease;
            }

            .modal-overlay.hidden {
                opacity: 0;
                pointer-events: none;
            }

            #shared-modal-box {
                background: #ffffff;
                border-radius: 12px;
                padding: 32px 40px;
                width: 540px;
                max-width: 90%;
                position: relative;
                box-shadow: 0 24px 48px rgba(0, 0, 0, 0.2);
                transform: translateY(0);
                transition: transform 0.3s ease;
                font-family: "Inter", sans-serif;
            }

            .modal-overlay.hidden #shared-modal-box {
                transform: translateY(20px);
            }

            #shared-modal-close {
                position: absolute;
                top: 16px;
                right: 20px;
                background: none;
                border: none;
                font-size: 20px;
                font-weight: bold;
                cursor: pointer;
                color: #64748b;
                transition: color 0.2s;
            }

            #shared-modal-close:hover {
                color: var(--red);
            }

            #shared-modal-accent {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 6px;
                border-top-left-radius: 12px;
                border-top-right-radius: 12px;
            }

            #shared-modal-eyebrow {
                color: var(--phase-color);
                font-weight: 700;
                font-size: 13px;
                text-transform: uppercase;
                letter-spacing: 1px;
                margin: 0 0 8px 0;
            }

            #shared-modal-title {
                font-family: "Roboto Slab", serif;
                font-size: 26px;
                color: #0f172a;
                margin: 0 0 24px 0;
                font-weight: 800;
            }

            #shared-modal-list {
                padding-left: 20px !important;
                margin: 0 0 20px 0 !important;
                padding-top: 0 !important;
                padding-bottom: 0 !important;
                padding-right: 0 !important;
            }

            #shared-modal-list li {
                margin: 0 0 6px 0 !important;
                padding: 0 !important;
                color: #334155 !important;
                line-height: 1.3 !important;
                font-size: 14.5px !important;
                font-weight: 500 !important;
            }

            #shared-modal-list li::marker {
                color: var(--phase-color);
            }

            @media (max-width: 768px) {
                #shared-modal-list {
                    margin: 0 0 12px 0 !important;
                    padding-left: 16px !important;
                }
                #shared-modal-list li {
                    margin: 0 0 5px 0 !important;
                    padding: 0 !important;
                    line-height: 1.22 !important;
                    font-size: 13px !important;
                }
            }

            #shared-modal-footer {
                font-size: 12px;
                color: #94a3b8;
                border-top: 1px solid #e2e8f0;
                padding-top: 16px;
                margin: 0;
                font-weight: 500;
            }
        </style>



        <!-- Styles for animations and interactions -->
        <style>
            :root {
                --navy: #0b1f44;
                --red: #e31837;
                --white: #ffffff;
                --gray-bg: #cbd5e1;
                --light-blue: #f1f5f9;
            }

            /* Interactive Hover Effects for L3 and L4 (Color Swap) */
            .hover-stroke-group .hs-bg {
                transition:
                    stroke 0.3s ease,
                    filter 0.3s ease;
            }

            .hover-stroke-group .hs-text {
                transition: fill 0.3s ease;
            }

            .hover-stroke-group:hover .hs-bg {
                stroke: var(--navy);
                filter: drop-shadow(0px 8px 16px rgba(0, 0, 0, 0.15));
            }

            .hover-stroke-group:hover .hs-text {
                fill: var(--white);
            }

            /* Standard Brightness Hover for Core & ERP Layers */
            .interactive-group {
                transition: filter 0.2s ease;
            }

            .interactive-group:hover {
                filter: brightness(1.15) drop-shadow(0px 4px 8px rgba(0, 0, 0, 0.2));
            }

            /* CTA Buttons */
            .cta-btn {
                transition:
                    transform 0.2s,
                    opacity 0.2s;
            }

            .cta-btn:hover {
                transform: translateY(-2px);
                opacity: 0.9;
            }

            /* Modal Styles */
            .modal-overlay {
                position: fixed;
                inset: 0;
                background: rgba(11, 31, 68, 0.4);
                backdrop-filter: blur(4px);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 1000;
                opacity: 1;
                transition: opacity 0.3s ease;
            }

            .modal-overlay.hidden {
                opacity: 0;
                pointer-events: none;
            }

            #shared-modal-box {
                background: #ffffff;
                border-radius: 12px;
                padding: 32px 40px;
                width: 540px;
                max-width: 90%;
                position: relative;
                box-shadow: 0 24px 48px rgba(0, 0, 0, 0.2);
                transform: translateY(0);
                transition: transform 0.3s ease;
                font-family: "Inter", sans-serif;
            }

            .modal-overlay.hidden #shared-modal-box {
                transform: translateY(20px);
            }

            #shared-modal-close {
                position: absolute;
                top: 16px;
                right: 20px;
                background: none;
                border: none;
                font-size: 20px;
                font-weight: bold;
                cursor: pointer;
                color: #64748b;
                transition: color 0.2s;
            }

            #shared-modal-close:hover {
                color: var(--red);
            }

            #shared-modal-accent {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 6px;
                border-top-left-radius: 12px;
                border-top-right-radius: 12px;
            }

            #shared-modal-eyebrow {
                color: var(--phase-color);
                font-weight: 700;
                font-size: 13px;
                text-transform: uppercase;
                letter-spacing: 1px;
                margin: 0 0 8px 0;
            }

            #shared-modal-title {
                font-family: "Roboto Slab", serif;
                font-size: 26px;
                color: #0f172a;
                margin: 0 0 24px 0;
                font-weight: 800;
            }

            #shared-modal-list {
                padding-left: 20px !important;
                margin: 0 0 20px 0 !important;
                padding-top: 0 !important;
                padding-bottom: 0 !important;
                padding-right: 0 !important;
            }

            #shared-modal-list li {
                margin: 0 0 6px 0 !important;
                padding: 0 !important;
                color: #334155 !important;
                line-height: 1.3 !important;
                font-size: 14.5px !important;
                font-weight: 500 !important;
            }

            #shared-modal-list li::marker {
                color: var(--phase-color);
            }

            @media (max-width: 768px) {
                #shared-modal-list {
                    margin: 0 0 12px 0 !important;
                    padding-left: 16px !important;
                }
                #shared-modal-list li {
                    margin: 0 0 5px 0 !important;
                    padding: 0 !important;
                    line-height: 1.22 !important;
                    font-size: 13px !important;
                }
            }

            #shared-modal-footer {
                font-size: 12px;
                color: #94a3b8;
                border-top: 1px solid #e2e8f0;
                padding-top: 16px;
                margin: 0;
                font-weight: 500;
            }
        </style>


        <!-- ── Slide 6: Comparison Table ── -->
        <div class="slide s6">
            <div class="cmp-wrap">
                <h2 class="tt-faq-title cmp-title" style="text-align: center; margin-bottom: 40px; position: relative; z-index: 2;">
                    Why Airo’s <span>agenTriniti<sup style="font-size: 0.35em; position: relative; top: -1.5em; line-height: 0; vertical-align: baseline;">SM</sup></span> Package<br />Changes the Equation
                </h2>
                <div class="cmp-card">
                    <div class="cmp-table-wrap">
                        <table class="cmp-table">
                            <colgroup>
                                <col class="cmp-c-dim" />
                                <col class="cmp-c-inhouse" />
                                <col class="cmp-c-ppa" />
                                <col class="cmp-c-trinity" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th class="cmp-dim-head">Dimensions</th>
                                    <th class="cmp-inhouse-head">In-House Teams</th>
                                    <th class="cmp-ppa-head">Pay-Per-Agent</th>
                                    <th class="cmp-trinity-head" style="text-transform: none;">agenTriniti<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup></th>
                                </tr>
                            </thead>
                            <tbody id="cmp-table-body"></tbody>
                        </table>
                    </div>
                </div>
                <a href="https://calendly.com/airodigitallabs/30min?guests=sayak.das%40airodigitallabs.com&month=2026-05"
                    target="_blank" rel="noopener noreferrer" id="fcta">
                    <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                    Schedule Your agenTriniti<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline; margin-left: -6px; letter-spacing: normal;">SM</sup> Demo Today
                </a>
            </div>
        </div>
		

    </div>
    <!-- 	  </div> -->
    <style>
        /* ── Slide 6 (Comparison Table) — scoped via .s6 / .cmp-* ── */


        #trinity-wrapper {
            position: relative;
            width: 100%;
            height: calc(100vh - var(--wp-header-height, 80px));
            overflow: hidden;
            user-select: none;
            background: var(--white);
        }

        .s6 {
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
/*             padding: clamp(24px, 4vh) 48px; */
			margin-top:-50px;
        }

        .s6 .cmp-wrap {
            width: 100%;
            max-width: 1240px;
            max-height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            opacity: 0;
            transform: translateY(20px);
            transition:
                opacity 0.55s ease,
                transform 0.55s ease;
            transition-delay: 0.18s;
        }

        .slide.active .cmp-wrap {
            opacity: 1;
            transform: none;
        }

        .cmp-title {
            text-align: center;
        }

        .cmp-title sup {
            font-size: 0.5em;
            vertical-align: super;
            letter-spacing: 0;
        }

        .cmp-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 18px 50px rgba(11, 31, 68, 0.12);
            overflow: hidden;
            width: 100%;
            border: 1px solid rgba(11, 31, 68, 0.05);
        }

        .cmp-table-wrap {
            overflow-x: auto;
        }

        .cmp-table {
            width: 100%;
            border-collapse: collapse;
            font-family: "Inter", sans-serif;
        }

        .cmp-c-dim {
            width: 40%;
        }

        .cmp-c-inhouse,
        .cmp-c-ppa,
        .cmp-c-trinity {
            width: 20%;
        }

        .cmp-table thead th {
            padding: clamp(10px, 2.5vh, 16px) 18px;
            font-size: 0.9rem;
            font-weight: 700;
            text-align: center;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        .cmp-dim-head {
            background: var(--navy);
            color: #ffffff;
            text-align: left;
            padding-left: 32px;
        }

        .cmp-inhouse-head {
            color: #ffffff;
            background: var(--navy);
        }

        .cmp-ppa-head {
            background: var(--navy);
            color: #ffffff;
        }

        .cmp-trinity-head {
            background: var(--red);
            color: #ffffff;
            position: relative;
        }

        .cmp-trinity-head::after {
            content: "";
            position: absolute;
            bottom: 0px;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--red);
        }

        .cmp-table tbody tr {
            border-bottom: 1px solid #dde3ef;
            transition: background 0.15s;
        }

        .cmp-table tbody tr:last-child {
            border-bottom: none;
        }

        .cmp-table tbody tr:nth-child(even) {
            background: #f8faff;
        }

        .cmp-table tbody tr:hover,
        .cmp-table tbody tr:nth-child(even):hover {
            background: #f0f4ff;
        }

        .cmp-table tbody td {
            padding: 10px;
            font-size: 1.05rem;
            text-align: center;
            vertical-align: middle;
            color: #000000;
        }

        .cmp-table tbody td.cmp-dim-cell {
            text-align: left;
            padding-left: 24px;
            font-weight: 600;
            color: var(--navy);
            line-height: 1.25;
            font-size: 0.95rem;
        }

        .cmp-table tbody td.cmp-trinity-col {
            background: rgba(227, 24, 55, 0.05);
        }

        .cmp-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: clamp(26px, 3vh, 32px);
            height: clamp(26px, 3vh, 32px);
            border-radius: 50%;
            font-size: 0.95rem;
            font-weight: 900;
        }

        .cmp-icon-yes {
            color: #1ab76a;
            background: rgba(26, 183, 106, 0.12);
        }

        .cmp-icon-no {
            color: var(--red);
            background: rgba(227, 24, 55, 0.1);
        }

        @media (max-width: 820px) {
            /* ==========================================================================
            SLIDE 6 (TABLE) RESPONSIVE FIX
            ========================================================================== */
            /* 1. Give the table room to breathe at the top/bottom */
            .s6 {
                padding: 100px 15px 10px !important;
                display: block !important;
                overflow-x: hidden !important;
                overflow-y: auto !important;
            }

            /* 2. Fix the title sizing for mobile is now handled by the shared .tt-faq-title class */

            /* 3. Table wrapper: no horizontal scroll — table fits the width */
            .cmp-table-wrap {
                overflow-x: hidden !important;
                width: 100% !important;
            }

            /* 4. Table fills container, fixed layout so columns respect set widths */
            .cmp-table {
                min-width: 0 !important;
                width: 100% !important;
                table-layout: fixed !important;
            }

            /* 5. Dimension column takes more space; data columns split the rest equally */
            .cmp-c-dim      { width: 44% !important; }
            .cmp-c-inhouse,
            .cmp-c-ppa,
            .cmp-c-trinity  { width: 18.67% !important; }

            /* 6. Allow text to wrap inside cells so nothing overflows */
            .cmp-table th,
            .cmp-table td {
                word-wrap: break-word !important;
                overflow-wrap: break-word !important;
                white-space: normal !important;
            }

            /* 7. Reclaim space inside the cells */
            .cmp-table th {
                padding: 12px 8px !important;
                font-size: 11px !important;
            }

            .cmp-table tbody td {
                padding: 10px 8px !important;
                font-size: 12px !important;
            }

            .cmp-table tbody td.cmp-dim-cell,
            .cmp-dim-head {
                padding-left: 12px !important;
                font-size: 12px !important;
            }
        }

        @media (max-width: 820px) {
            .hero-partners {
                margin-top: 8px;
                font-size: 12px;
                font-weight: 600;
                color: rgba(11, 31, 68, 0.4);
                letter-spacing: 2px;
                text-transform: uppercase;
                opacity: 0;
                transition: opacity 0.5s 0.85s;
            }
        }
    </style>

    <script>
        (function () {
            const YES = '<span class="cmp-icon cmp-icon-yes">&#10003;</span>';
            const NO = '<span class="cmp-icon cmp-icon-no">&#10007;</span>';
            const rows = [
                ["One Fixed Price per month, No hidden Fees", NO, NO, YES],
                [
                    "Speed of Agent Deployment – 100 agents built in less than 6 months",
                    NO,
                    NO,
                    YES,
                ],
                ["Agent IP Ownership", YES, NO, YES],
                ["Built-In Governance & Compliance", YES, NO, YES],
                ["Constant Agent Managed Services post Go-Live", NO, NO, YES],
                ["Knowledge Stays When People Leave", NO, NO, YES],
                ["Worries about hiring AI Talent", NO, YES, YES],
                [
                    "Works Across All Your Systems (ERP, CRM, SCM, others)",
                    YES,
                    NO,
                    YES,
                ],
                ["Prove real ROI to the Board — Not Just a Demo", YES, NO, YES],
                ["Free Agent portability to future Models", NO, NO, YES],
            ];
            const tbody = document.getElementById("cmp-table-body");
            rows.forEach(([label, inhouse, ppa, trinity]) => {
                const tr = document.createElement("tr");
                tr.innerHTML =
                    '<td class="cmp-dim-cell">' +
                    label +
                    "</td><td>" +
                    inhouse +
                    "</td><td>" +
                    ppa +
                    '</td><td class="cmp-trinity-col">' +
                    trinity +
                    "</td>";
                tbody.appendChild(tr);
            });
        })();
    </script>

    <!-- UNIVERSAL MODAL OVERLAY (shared across slides; hidden by default) -->
    <div id="shared-modal-overlay" class="modal-overlay hidden">
        <div id="shared-modal-box" style="--phase-color: #0b1f44">
            <button id="shared-modal-close" onclick="closeSharedModal()">✕</button>
            <div id="shared-modal-accent" style="background: var(--phase-color)"></div>
            <p id="shared-modal-eyebrow">Category</p>
            <h3 id="shared-modal-title">Title Goes Here</h3>
            <ul id="shared-modal-list">
                <!-- JS fills this -->
            </ul>
            <p id="shared-modal-footer">
                Airo's agenTriniti<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> Package· AI Use Case Lifecycle
                Management
            </p>
        </div>
    </div>

    <div id="phase-modal">
        <div id="phase-modal-backdrop"></div>
        <div id="phase-modal-box">
            <button id="phase-modal-close">✕</button>
            <div id="phase-modal-accent"></div>
            <p id="phase-modal-eyebrow"></p>
            <h3 id="phase-modal-title"></h3>
            <ul id="phase-modal-list"></ul>
            <p id="phase-modal-footer">
                Airo's agenTriniti<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> Package· AI Use Case Lifecycle
                Management
            </p>
        </div>
    </div>
    <div id="arc-tooltip" role="tooltip" aria-hidden="true">
        <div id="arc-tooltip-bar"></div>
        <div id="arc-tooltip-body">
            <div id="arc-tooltip-eyebrow"></div>
            <div id="arc-tooltip-title"></div>
            <ul id="arc-tooltip-list"></ul>
        </div>
    </div>
	  <!-- ══════════════════════════════════════════════════════
         TRINITY FAQ SECTION
    ══════════════════════════════════════════════════════ -->
    <style>
    /* ── Trinity FAQ Section Styles ── */
    .tt-faq-section {
        background: var(--cream, #f8f9fa);
        padding: 40px 48px 40px;
        width: 100%;
        position: relative;
        box-sizing: border-box;
    }

    .tt-faq-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(227,24,55,0.25), transparent);
    }

    .tt-faq-header {
        text-align: center;
        margin-bottom: 40px;
        position: relative;
        z-index: 2;
    }

    .tt-faq-eyebrow {
        font-family: "Inter", sans-serif;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 4px;
        text-transform: uppercase;
        color: var(--red, #e31837);
        margin-bottom: 14px;
    }

    .tt-faq-title {
        font-family: "Roboto Slab", serif;
        font-size: clamp(30px, 3.8vw, 44px);
        font-weight: 700;
        color: var(--navy, #0b1f44);
        line-height: 1.15;
        letter-spacing: 0.5px;
        margin-bottom: 16px;
    }

    .tt-faq-title span {
        color: var(--red, #e31837);
    }

    .tt-faq-subtitle {
        font-family: "Inter", sans-serif;
        font-size: 15.5px;
        color: var(--text-muted, #64748b);
        line-height: 1.75;
        max-width: 580px;
        margin: 0 auto;
    }

    .tt-faq-grid {
        max-width: 1140px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
        position: relative;
        z-index: 2;
    }

    .tt-faq-col {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .tt-faq-item {
        background: #ffffff;
        border-radius: 14px;
        border: 1px solid rgba(11, 31, 68, 0.08);
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(11, 31, 68, 0.04);
        transition: box-shadow 0.3s cubic-bezier(0.25, 0.8, 0.25, 1), 
                    transform 0.3s cubic-bezier(0.25, 0.8, 0.25, 1), 
                    border-color 0.3s ease;
    }

    .tt-faq-item:hover {
        box-shadow: 0 12px 38px rgba(227, 24, 55, 0.12);
        transform: translateY(-3px);
        border-color: rgba(227, 24, 55, 0.15);
    }

    .tt-faq-item.tt-faq-open {
        border-color: rgba(227, 24, 55, 0.3);
        box-shadow: 0 12px 38px rgba(227, 24, 55, 0.12);
    }

    .tt-faq-question {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 22px;
        cursor: pointer;
        gap: 16px;
        user-select: none;
        -webkit-user-select: none;
        min-height: 60px;
    }

    .tt-faq-question-text {
        font-family: "Inter", sans-serif;
        font-size: 14.5px;
        font-weight: 700;
        color: var(--navy, #0b1f44);
        line-height: 1.45;
        transition: color 0.25s ease;
        flex: 1;
    }

    .tt-faq-item:hover .tt-faq-question-text {
        color: var(--red, #e31837);
    }

    .tt-faq-item.tt-faq-open .tt-faq-question-text {
        color: var(--red, #e31837);
    }

    .tt-faq-icon {
        width: 26px;
        height: 26px;
        border-radius: 50%;
        background: rgba(227, 24, 55, 0.06);
        border: 1.5px solid rgba(227, 24, 55, 0.18);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: background 0.25s ease, transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1), border-color 0.25s ease;
    }

    .tt-faq-icon svg {
        width: 11px;
        height: 11px;
        stroke: var(--red, #e31837);
        stroke-width: 2.5;
        fill: none;
        transition: stroke 0.25s;
    }

    .tt-faq-item.tt-faq-open .tt-faq-icon {
        background: var(--red, #e31837);
        border-color: var(--red, #e31837);
        transform: rotate(45deg);
    }

    .tt-faq-item.tt-faq-open .tt-faq-icon svg {
        stroke: #ffffff;
    }

    .tt-faq-answer {
        display: grid;
        grid-template-rows: 0fr;
        overflow: hidden; /* Critical for collapsing */
        transition: grid-template-rows 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .tt-faq-item.tt-faq-open .tt-faq-answer {
        grid-template-rows: 1fr;
    }

    .tt-faq-answer-inner {
        min-height: 0;
        overflow: hidden;
        padding: 0 22px 18px;
        border-top: 1px solid rgba(11, 31, 68, 0.05);
        padding-top: 12px;
    }

    .tt-faq-answer-accent {
        width: 40px;
        height: 3px;
        border-radius: 2px;
        background: var(--red, #e31837);
        margin-bottom: 12px;
    }

    .tt-faq-answer-text {
        font-family: "Inter", sans-serif;
        font-size: 14px;
        line-height: 1.75;
        color: var(--text-muted, #64748b);
        margin: 0;
    }

    .tt-faq-cta-wrap {
        text-align: center;
        margin-top: 40px;
        position: relative;
        z-index: 2;
    }

    .tt-faq-cta-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 15px 38px;
        background: var(--red, #e31837);
        color: #ffffff !important;
        border-radius: 50px;
        font-family: "Inter", sans-serif;
        font-size: 14.5px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-decoration: none;
        box-shadow: 0 8px 28px rgba(227, 24, 55, 0.35);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        white-space: nowrap;
    }

    .tt-faq-cta-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 14px 40px rgba(227, 24, 55, 0.5);
        color: #ffffff !important;
    }

    .tt-faq-cta-link svg {
        width: 16px;
        height: 16px;
        stroke: #ffffff;
        stroke-width: 2.5;
        fill: none;
        flex-shrink: 0;
    }

    /* ── Hide / Reveal Classes & Animations ── */
    .tt-faq-item.tt-faq-hidden {
        display: none !important;
    }

    @keyframes faqFadeIn {
        from {
            opacity: 0;
            transform: translateY(12px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .tt-faq-item.tt-faq-revealed {
        animation: faqFadeIn 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .tt-faq-more-btn-wrap {
        text-align: center;
        margin-top: 24px;
        margin-bottom: 12px;
        position: relative;
        z-index: 2;
    }

    .tt-faq-more-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 10px 24px;
        background: transparent;
        border: 2px solid var(--navy, #0b1f44);
        color: var(--navy, #0b1f44) !important;
        border-radius: 50px;
        font-family: "Inter", sans-serif;
        font-size: 13.5px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        user-select: none;
        -webkit-user-select: none;
    }

    .tt-faq-more-btn:hover {
        background: var(--navy, #0b1f44);
        color: #ffffff !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(11, 31, 68, 0.15);
    }

    .tt-faq-more-btn svg {
        width: 14px;
        height: 14px;
        transition: transform 0.3s ease;
        fill: none;
        stroke: currentColor;
        stroke-width: 2.5;
    }

    .tt-faq-more-btn.tt-faq-btn-expanded svg {
        transform: rotate(180deg);
    }

    .tt-faq-item-last-centered {
        grid-column: span 2;
        justify-self: center;
        width: 100%;
        max-width: calc(50% - 7px);
    }

    /* ── FAQ Responsive ── */
    @media (max-width: 820px) {
        .tt-faq-item-last-centered {
            grid-column: auto;
            max-width: 100%;
        }

        .tt-faq-section {
            padding: 15px 24px 30px;
        }

        .tt-faq-grid {
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .tt-faq-col {
            gap: 12px;
        }

        .tt-faq-title {
            font-size: 30px;
        }

        .tt-faq-header {
            margin-bottom: 30px;
        }

        .tt-faq-cta-link {
            padding: 12px 30px;
            font-size: 13.5px;
        }
    }

    @media (max-width: 480px) {
        .tt-faq-section {
            padding: 10px 16px 20px;
        }

        .tt-faq-question {
            padding: 12px 16px;
        }

        .tt-faq-question-text {
            font-size: 14px;
        }

        .tt-faq-answer-inner {
            padding: 0 16px 14px;
            padding-top: 10px;
        }

        .tt-faq-answer-text {
            font-size: 13px;
        }

        .tt-faq-cta-link {
            padding: 10px clamp(12px, 4vw, 24px);
            font-size: clamp(10.5px, 3.2vw, 12.5px);
            gap: clamp(6px, 2vw, 10px);
            width: fit-content;
            max-width: calc(100% - 24px);
            box-sizing: border-box;
            justify-content: center;
            white-space: nowrap;
        }

        .tt-faq-cta-link svg {
            width: clamp(12px, 3.5vw, 14px);
            height: clamp(12px, 3.5vw, 14px);
        }
    }

    @media (max-width: 480px){
        .tt-faq-question{
            min-height: auto;
        }
    }
    </style>

    <!-- FAQ HTML -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is Airo's agenTriniti Package?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Airo's agenTriniti Package is an end-to-end AI Use Case Lifecycle Management system designed to operationalize enterprise-grade agentic AI. It combines deployment, governance, and continuous upgradation into a single managed lifecycle system, moving organizations efficiently into production-ready operations with measurable business impact."
          }
        },
        {
          "@type": "Question",
          "name": "What is AI Use Case Lifecycle Management?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AI Use Case Lifecycle Management is the end-to-end discipline of selecting, building, deploying, governing, and evolving AI agents and workflows across the enterprise. It ensures AI systems are continuously aligned to business outcomes, securely integrated, and optimized for production operations."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take to deploy the first AI Agent?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most enterprises deploy their first governed AI agent in approximately 3 to 4 weeks, covering discovery, design, deployment, and go-live. The exact timeline depends on use-case complexity, data readiness, and integration scope."
          }
        },
        {
          "@type": "Question",
          "name": "What are the different packages available?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Airo's agenTriniti Package scales dynamically across three distinct operational tiers to match your enterprise roadmap: the Platinum Package delivers up to 100 agents with a 6-month build phase, the Gold Package scales up to 50 agents with a 4-month build phase, and the Silver Package launches up to 20 agents with a rapid 3-month build phase.All three frameworks operate under a strict 36-month total lifecycle commitment, embedding a dedicated expert pod to handle continuous, SLA-driven runtime management and future technological upgrades. Every tier kicks off with a completely zero-cost, one-day Discovery Workshop to seamlessly map your strategic infrastructure workflows from day one."
          }
        },
        {
          "@type": "Question",
          "name": "What does “Delivering AI through AI” mean?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It refers to our proprietary AI-led Development Lifecycle (AI-DLC) engine, AiroCoreAI©. Instead of relying on traditional, manual \"body-count\" project labor, AiroCoreAI© utilizes autonomous agents to build, monitor, test, and manage your AI solutions. This programmatic approach shifts project economics, driving a 45–50% reduction in development effort and a 50–60% reduction in managed services effort."
          }
        },
        {
          "@type": "Question",
          "name": "What is included in agenTriniti Package lifecycle?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The package operates across three distinct continuous phases:\n•\tBuild: Identifying highest-value use cases, designing architecture, and deploying production-ready agentic solutions.\n•\tManage: SLA-driven run-time monitoring, drift protection, and proactive model retraining to ensure peak agent performance.\n•\tContinuous Upgrade: Tech-refresh assessments and seamless model evolution to align with changing business conditions and future model baselines."
          }
        },
        {
          "@type": "Question",
          "name": "How is Airo's agenTriniti Package  different from building an in-house AI team or using a pay-per-agent model?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Airo's agenTriniti Package replaces unpredictable pay-per-agent costs and massive internal team overhead with a single, predictable monthly fixed fee. Unlike traditional vendors, we guarantee absolute corporate ownership of all intellectual property alongside free agent portability to future foundational models. Finally, the framework immunizes your organization against internal turnover by embedding all agent behaviors into unalterable Agent Passports for continuous, SLA-driven optimization."
          }
        },
        {
          "@type": "Question",
          "name": "Who retains ownership of the AI agents and Intellectual Property (IP)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Customers retain full, unconditional ownership of the AI agents built under the engagement. Airo provides the operational lifecycle management system, while you maintain absolute control over your proprietary data, models, and outputs. Always."
          }
        },
        {
          "@type": "Question",
          "name": "How does the fixed-price model function, and what is included?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The package offers a single, transparent fixed fee per month with zero hidden costs. It provides comprehensive coverage for the entire defined scope: use-case discovery, solution architecture, engineering deployment, core governance setup, and continuous operational lifecycle management."
          }
        },
        {
          "@type": "Question",
          "name": "What is not included in the Airo's agenTriniti Package?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It does not cover Data for AI readiness activities, infrastructure provisioning, cloud hosting, compute costs, or third-party software licensing fees. Foundational LLM and API provider consumption costs are also excluded and are passed directly through to the customer at actual cost."
          }
        },
        {
          "@type": "Question",
          "name": "What is a Discovery Workshop and what does it deliver?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Discovery Workshop identifies high-impact, feasible AI use cases and produces a scoped blueprint: target workflows, data requirements, integration points, governance guardrails, and a deployment plan. This is a half-day/ full-day exercise. It is the first step toward a production-ready AI solutions and it is available at no cost as the first step of every agenTriniti engagement."
          }
        },
        {
          "@type": "Question",
          "name": "How does the Airo's agenTriniti Package integrate across our existing infrastructure?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The package is designed to operate seamlessly across all core enterprise ecosystems, including ERP, CRM, and SCM platforms. It functions fluidly across cloud, private, or hybrid infrastructures matching your established IT security stack."
          }
        },
        {
          "@type": "Question",
          "name": "What is an Agent Passport?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Agent Passport is a living lifecycle record initialized for every single agent during the Build phase. It tracks total project memory, integration compliance, runtime drift, and retraining logs through the Manage and Upgrade phases, providing a single, verifiable source of truth from deployment to evolution."
          }
        },
        {
          "@type": "Question",
          "name": "How does the package handle technology obsolescence as models change?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Continuous Upgrade framework guarantees free agent portability to future models. Through regular refresh assessments, our dedicated pods re-skill and update your existing agents to work natively on advanced model generations (such as Anthropic and OpenAI iterations) without disrupting live production workflows."
          }
        },
        {
          "@type": "Question",
          "name": "How does Airo ensure corporate governance and regulatory compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Compliance and data security are built into every phase of the engine. Every single action taken by an agent is strictly logged and entirely traceable, maintaining complete audit trails and regulatory alignment from day one."
          }
        },
        {
          "@type": "Question",
          "name": "What is the delivery model and how does it support my team?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Airo Pod is a high-touch, dedicated team of specialists assigned entirely to your enterprise. Instead of leaving you to manage standalone contractors, the Pod provides a completely self-contained execution unit—including Forward Deployed AI Architects, Project Managers, AI Engineers, and Domain Specialists—to handle all aspects of the agenTriniti lifecycle."
          }
        },
        {
          "@type": "Question",
          "name": "How does the Pod collaborate with our internal teams day-to-day?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Pod operates on a structured, highly predictable communication rhythm tailored to your needs. This includes daily standups and weekly demos during the Build phase, shifting to steady weekly asynchronous reports and quarterly business reviews during the Manage and Continuous Upgrade phases to ensure your leadership is always updated without meeting fatigue."
          }
        },
        {
          "@type": "Question",
          "name": "Can the Pod scale its intensity if our business priorities or use-case volumes change?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. While the Pod maintains a reliable, steady pulse for continuous management and upgrades, its operational cadence scales dynamically with the intensity of your roadmap. As new high-impact use cases are prioritized by your team, the Pod accelerates its deployment rhythms to align perfectly with your evolving strategic objectives."
          }
        },
        {
          "@type": "Question",
          "name": "What internal resource commitment is required from our organization?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "To minimize overhead, we require only a 3-person core team from your side: an Executive Sponsor, a Product Owner/Business Lead, and a Data/Systems SME. Airo brings the rest, supplying a high-touch, dedicated operational Pod consisting of Forward Deployed AI Architects, Project Managers, AI Engineers, and Domain Specialists."
          }
        }
      ]
    }
    </script>
    <section class="tt-faq-section" id="trinity-faq">
        <div class="tt-faq-header">
            <p class="tt-faq-eyebrow">Got Questions?</p>
            <h2 class="tt-faq-title">Frequently Asked <span>Questions</span></h2>
            <p class="tt-faq-subtitle">Everything you need to know about the Airo's agenTriniti<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> Package  &mdash; from deployment to pricing.</p>
        </div>

        <div class="tt-faq-grid" id="faqAccordionGrid">
            <div class="tt-faq-col" id="faqColLeft">
                <!-- Item 0 -->
                <div class="tt-faq-item">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">What is Airo's agenTriniti<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> Package?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">The Airo's agenTriniti<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> Package is an end-to-end AI Use Case Lifecycle Management system designed to operationalize enterprise-grade agentic AI. It combines deployment, governance, and continuous upgradation into a single managed lifecycle system, moving organizations efficiently into production-ready operations with measurable business impact.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 1 -->
                <div class="tt-faq-item">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">How long does it take to deploy the first AI Agent?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">Most enterprises deploy their first governed AI agent in approximately 3 to 4 weeks, covering discovery, design, deployment, and go-live. The exact timeline depends on use-case complexity, data readiness, and integration scope.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="tt-faq-item">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">What does “Delivering AI through AI” mean?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">It refers to our proprietary AI-led Development Lifecycle (AI-DLC) engine, AiroCoreAI<sup>©</sup>. Instead of relying on traditional, manual "body-count" project labor, AiroCoreAI<sup>©</sup> utilizes autonomous agents to build, monitor, test, and manage your AI solutions. This programmatic approach shifts project economics, driving a 45–50% reduction in development effort and a 50–60% reduction in managed services effort.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="tt-faq-item">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">How is Airo's agenTriniti<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> Package different from building an in-house AI team or using a pay-per-agent model?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">Airo's agenTriniti<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> Package replaces unpredictable pay-per-agent costs and massive internal team overhead with a single, predictable monthly fixed fee. Unlike traditional vendors, we guarantee absolute corporate ownership of all intellectual property alongside free agent portability to future foundational models. Finally, the framework immunizes your organization against internal turnover by embedding all agent behaviors into unalterable Agent Passports for continuous, SLA-driven optimization.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 4 (Extra) -->
                <div class="tt-faq-item tt-faq-item-extra tt-faq-hidden">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">How does the fixed-price model function, and what is included?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">The package offers a single, transparent fixed fee per month with zero hidden costs. It provides comprehensive coverage for the entire defined scope: use-case discovery, solution architecture, engineering deployment, core governance setup, and continuous operational lifecycle management.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 5 (Extra) -->
                <div class="tt-faq-item tt-faq-item-extra tt-faq-hidden">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">What is a Discovery Workshop and what does it deliver?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">The Discovery Workshop identifies high-impact, feasible AI use cases and produces a scoped blueprint: target workflows, data requirements, integration points, governance guardrails, and a deployment plan. This is a half-day/ full-day exercise. It is the first step toward a production-ready AI solutions and it is available at no cost as the first step of every agenTriniti<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> engagement.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 6 (Extra) -->
                <div class="tt-faq-item tt-faq-item-extra tt-faq-hidden">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">What is an Agent Passport?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">The Agent Passport is a living lifecycle record initialized for every single agent during the Build phase. It tracks total project memory, integration compliance, runtime drift, and retraining logs through the Manage and Upgrade phases, providing a single, verifiable source of truth from deployment to evolution.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 7 (Extra) -->
                <div class="tt-faq-item tt-faq-item-extra tt-faq-hidden">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">How does Airo ensure corporate governance and regulatory compliance?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">Compliance and data security are built into every phase of the engine. Every single action taken by an agent is strictly logged and entirely traceable, maintaining complete audit trails and regulatory alignment from day one.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 8 (Extra) -->
                <div class="tt-faq-item tt-faq-item-extra tt-faq-hidden">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">How does the Pod collaborate with our internal teams day-to-day?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">The Pod operates on a structured, highly predictable communication rhythm tailored to your needs. This includes daily standups and weekly demos during the Build phase, shifting to steady weekly asynchronous reports and quarterly business reviews during the Manage and Continuous Upgrade phases to ensure your leadership is always updated without meeting fatigue.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tt-faq-col" id="faqColRight">
                <!-- Item 10 -->
                <div class="tt-faq-item">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">What is AI Use Case Lifecycle Management?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">AI Use Case Lifecycle Management is the end-to-end discipline of selecting, building, deploying, governing, and evolving AI agents and workflows across the enterprise. It ensures AI systems are continuously aligned to business outcomes, securely integrated, and optimized for production operations.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 11 -->
                <div class="tt-faq-item">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">What are the different packages available?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">Airo's agenTriniti<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> Package scales dynamically across three distinct operational tiers to match your enterprise roadmap: the Platinum Package delivers up to 100 agents with a 6-month build phase, the Gold Package scales up to 50 agents with a 4-month build phase, and the Silver Package launches up to 20 agents with a rapid 3-month build phase.All three frameworks operate under a strict 36-month total lifecycle commitment, embedding a dedicated expert pod to handle continuous, SLA-driven runtime management and future technological upgrades. Every tier kicks off with a completely zero-cost, one-day Discovery Workshop to seamlessly map your strategic infrastructure workflows from day one.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 12 -->
                <div class="tt-faq-item">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">What is included in Airo's agenTriniti<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> Package lifecycle?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">The package operates across three distinct continuous phases:<br>• Build: Identifying highest-value use cases, designing architecture, and deploying production-ready agentic solutions.<br>• Manage: SLA-driven run-time monitoring, drift protection, and proactive model retraining to ensure peak agent performance.<br>• Continuous Upgrade: Tech-refresh assessments and seamless model evolution to align with changing business conditions and future model baselines.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 13 -->
                <div class="tt-faq-item">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">Who retains ownership of the AI agents and Intellectual Property (IP)?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">Customers retain full, unconditional ownership of the AI agents built under the engagement. Airo provides the operational lifecycle management system, while you maintain absolute control over your proprietary data, models, and outputs. Always.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 14 (Extra) -->
                <div class="tt-faq-item tt-faq-item-extra tt-faq-hidden">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">What is not included in the Airo's agenTriniti<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> Package?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">It does not cover Data for AI readiness activities, infrastructure provisioning, cloud hosting, compute costs, or third-party software licensing fees. Foundational LLM and API provider consumption costs are also excluded and are passed directly through to the customer at actual cost.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 15 (Extra) -->
                <div class="tt-faq-item tt-faq-item-extra tt-faq-hidden">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">How does the Airo's agenTriniti<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> Package integrate across our existing infrastructure?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">The package is designed to operate seamlessly across all core enterprise ecosystems, including ERP, CRM, and SCM platforms. It functions fluidly across cloud, private, or hybrid infrastructures matching your established IT security stack.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 16 (Extra) -->
                <div class="tt-faq-item tt-faq-item-extra tt-faq-hidden">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">How does the package handle technology obsolescence as models change?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">The Continuous Upgrade framework guarantees free agent portability to future models. Through regular refresh assessments, our dedicated pods re-skill and update your existing agents to work natively on advanced model generations (such as Anthropic and OpenAI iterations) without disrupting live production workflows.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 17 (Extra) -->
                <div class="tt-faq-item tt-faq-item-extra tt-faq-hidden">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">What is the delivery model and how does it support my team?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">The Airo Pod is a high-touch, dedicated team of specialists assigned entirely to your enterprise. Instead of leaving you to manage standalone contractors, the Pod provides a completely self-contained execution unit—including Forward Deployed AI Architects, Project Managers, AI Engineers, and Domain Specialists—to handle all aspects of the agenTriniti<sup style="font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;">SM</sup> lifecycle.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 18 (Extra) -->
                <div class="tt-faq-item tt-faq-item-extra tt-faq-hidden">
                    <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                        <span class="tt-faq-question-text">Can the Pod scale its intensity if our business priorities or use-case volumes change?</span>
                        <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                    </div>
                    <div class="tt-faq-answer" role="region">
                        <div style="min-height: 0;">
                            <div class="tt-faq-answer-inner">
                                <div class="tt-faq-answer-accent"></div>
                                <p class="tt-faq-answer-text">Yes. While the Pod maintains a reliable, steady pulse for continuous management and upgrades, its operational cadence scales dynamically with the intensity of your roadmap. As new high-impact use cases are prioritized by your team, the Pod accelerates its deployment rhythms to align perfectly with your evolving strategic objectives.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 9 (Extra) -->
            <div class="tt-faq-item tt-faq-item-extra tt-faq-hidden tt-faq-item-last-centered">
                <div class="tt-faq-question" role="button" tabindex="0" aria-expanded="false">
                    <span class="tt-faq-question-text">What internal resource commitment is required from our organization?</span>
                    <span class="tt-faq-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg></span>
                </div>
                <div class="tt-faq-answer" role="region">
                    <div style="min-height: 0;">
                        <div class="tt-faq-answer-inner">
                            <div class="tt-faq-answer-accent"></div>
                            <p class="tt-faq-answer-text">To minimize overhead, we require only a 3-person core team from your side: an Executive Sponsor, a Product Owner/Business Lead, and a Data/Systems SME. Airo brings the rest, supplying a high-touch, dedicated operational Pod consisting of Forward Deployed AI Architects, Project Managers, AI Engineers, and Domain Specialists.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tt-faq-more-btn-wrap">
            <button id="ttFaqMoreBtn" class="tt-faq-more-btn" onclick="toggleExtraFaqs()">
                View More
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 9l-7 7-7-7"/></svg>
            </button>
        </div>

        <div class="tt-faq-cta-wrap">
            <a href="https://calendly.com/airodigitallabs/30min?guests=sayak.das%40airodigitallabs.com&month=2026-05"
               target="_blank"
               rel="noopener noreferrer"
               class="tt-faq-cta-link">
                <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                Still have questions? Book a Demo
            </a>
        </div>
    </section>

    <script>
    (function () {
        var items = document.querySelectorAll(".tt-faq-item");
        items.forEach(function (card) {
            var btn = card.querySelector(".tt-faq-question");
            function toggle() {
                var isOpen = card.classList.contains("tt-faq-open");
                /* Close all others */
                document.querySelectorAll(".tt-faq-item.tt-faq-open").forEach(function (el) {
                    el.classList.remove("tt-faq-open");
                    el.querySelector(".tt-faq-question").setAttribute("aria-expanded", "false");
                });
                /* Open this one if it was closed */
                if (!isOpen) {
                    card.classList.add("tt-faq-open");
                    btn.setAttribute("aria-expanded", "true");
                }
            }

            btn.addEventListener("click", toggle);
            btn.addEventListener("keydown", function (e) {
                if (e.key === "Enter" || e.key === " ") {
                    e.preventDefault();
                    toggle();
                }
            });
        });
    })();

    function toggleExtraFaqs() {
        var btn = document.getElementById("ttFaqMoreBtn");
        var isExpanded = btn.classList.contains("tt-faq-btn-expanded");
        var hiddenItems = document.querySelectorAll(".tt-faq-item-extra");

        if (isExpanded) {
            // Collapse
            hiddenItems.forEach(function (item) {
                item.classList.add("tt-faq-hidden");
                item.classList.remove("tt-faq-revealed");
                // Close the card if it was expanded
                item.classList.remove("tt-faq-open");
                item.querySelector(".tt-faq-question").setAttribute("aria-expanded", "false");
            });
            btn.classList.remove("tt-faq-btn-expanded");
            btn.innerHTML = 'View More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 9l-7 7-7-7"/></svg>';
            
            // Scroll back to the FAQ section top smoothly
            document.getElementById("trinity-faq").scrollIntoView({ behavior: 'smooth' });
        } else {
            // Expand
            hiddenItems.forEach(function (item) {
                item.classList.remove("tt-faq-hidden");
                // Force redraw for CSS animation
                item.offsetHeight; 
                item.classList.add("tt-faq-revealed");
            });
            btn.classList.add("tt-faq-btn-expanded");
            btn.innerHTML = 'View Less <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 9l-7 7-7-7"/></svg>';
        }
    }
    </script>
	
    <!--   <script>
    const slides = document.querySelectorAll(".slide");
    const dots = document.querySelectorAll(".dot");
    const chip = document.getElementById("slide-chip");
    const TOTAL = slides.length;
    let current = 0,
      animating = false;

    const chipData = [
      { text: "", bg: "" },
//       {
//         text: "Layer 1 · The Trinity Lifecycle",
//         bg: "#e31837",
//         color: "#fff",
//       },
//       { text: "Layer 2 · Technology", bg: "#e31837", color: "#fff" },
//       {
//         text: "Layer 3 · Most popular enterprise use cases",
//         bg: "#0b1f44",
//         color: "#fff",
//       },
//       {
//         text: "Layer 4 · Enterprise AI in Action",
//         bg: "#0b1f44",
//         color: "#fff",
//       },
      { text: "", bg: "" },
      { text: "", bg: "" },
    ];

    function updateChip(idx) {
      const d = chipData[idx];
      if (!d || !d.text) {
        chip.classList.remove("show");
        return;
      }
      chip.textContent = d.text;
      chip.style.background = d.bg;
      chip.style.color = d.color || "#fff";
      chip.classList.add("show");
    }

    function goTo(next) {
      if (next === current || animating || next < 0 || next >= TOTAL) return;
      animating = true;
      const prev = current;
      current = next;
      const fwd = next > prev;
      const pS = slides[prev],
        nS = slides[next];

      nS.style.transition = "none";
      nS.style.transform = fwd ? "translateY(100%)" : "translateY(-100%)";
      nS.style.zIndex = "3";
      pS.style.transition = "none";
      pS.style.transform = "translateY(0%)";
      pS.style.zIndex = "2";

      nS.offsetHeight;

      requestAnimationFrame(() => {
        requestAnimationFrame(() => {
          nS.style.transition = "transform var(--dur) var(--ease)";
          pS.style.transition = "transform var(--dur) var(--ease)";
          nS.style.transform = "translateY(0%)";
          pS.style.transform = fwd ? "translateY(-100%)" : "translateY(100%)";
          pS.classList.remove("active");
          nS.classList.add("active");
          const litG = nS.querySelector("svg g.lit");
          if (litG) {
            litG.style.animation = "none";
            litG.offsetHeight;
            litG.style.animation = "";
          }
        });
      });

      dots.forEach((d, i) => d.classList.toggle("active", i === next));
      //document.getElementById("scue").style.opacity =
      //   next === TOTAL - 1 ? "0" : "1";
      updateChip(next);
      if (next === 5) triggerCTA();

      const fcta = document.getElementById("fcta");
      next > 0 ? fcta.classList.add("show") : fcta.classList.remove("show");
      next === 3
        ? fcta.classList.add("on-red")
        : fcta.classList.remove("on-red");

      setTimeout(() => {
        [pS, nS].forEach((s) => {
          s.style.transition = "";
          s.style.transform = "";
          s.style.zIndex = "";
        });
        animating = false;
      }, 970);
    }

    function triggerCTA() {
      ["c5ey", "c5h", "c5s", "c5d", "c5b", "c5p"].forEach((id, i) => {
        const el = document.getElementById(id);
        if (!el) return;
        setTimeout(() => {
          el.style.opacity = "1";
          el.style.transform = "none";
        }, i * 115);
      });
    }

    // Wheel
    let wD = 0,
      wT = null;
    window.addEventListener(
      "wheel",
      (e) => {
        const activeSlide = slides[current];
        if (activeSlide) {
          const scrollTop = activeSlide.scrollTop;
          const scrollHeight = activeSlide.scrollHeight;
          const clientHeight = activeSlide.clientHeight;
          const maxScroll = scrollHeight - clientHeight;

          if (maxScroll > 1) {
            // Scrolling down and not at the bottom
            if (e.deltaY > 0 && scrollTop < maxScroll - 5) {
              return;
            }
            // Scrolling up and not at the top
            if (e.deltaY < 0 && scrollTop > 5) {
              return;
            }
          }
        }

        e.preventDefault();
        wD += e.deltaY;
        clearTimeout(wT);
        wT = setTimeout(() => {
          if (Math.abs(wD) > 30) goTo(wD > 0 ? current + 1 : current - 1);
          wD = 0;
        }, 60);
      },
      { passive: false },
    );

    // Keyboard
    window.addEventListener("keydown", (e) => {
      if (["ArrowDown", "ArrowRight", " "].includes(e.key)) {
        e.preventDefault();
        goTo(current + 1);
      }
      if (["ArrowUp", "ArrowLeft"].includes(e.key)) {
        e.preventDefault();
        goTo(current - 1);
      }
    });

    // Touch
    let tY = 0;
    window.addEventListener(
      "touchstart",
      (e) => {
        tY = e.touches[0].clientY;
      },
      { passive: true },
    );
    window.addEventListener(
      "touchend",
      (e) => {
        const dy = tY - e.changedTouches[0].clientY;
        if (Math.abs(dy) > 40) {
          const activeSlide = slides[current];
          if (activeSlide) {
            const scrollTop = activeSlide.scrollTop;
            const scrollHeight = activeSlide.scrollHeight;
            const clientHeight = activeSlide.clientHeight;
            const maxScroll = scrollHeight - clientHeight;

            if (maxScroll > 1) {
              // Swiping up to scroll down
              if (dy > 0 && scrollTop < maxScroll - 5) {
                return;
              }
              // Swiping down to scroll up
              if (dy < 0 && scrollTop > 5) {
                return;
              }
            }
          }
          goTo(dy > 0 ? current + 1 : current - 1);
        }
      },
      { passive: true },
    );

    // Dots
    dots.forEach((d) =>
      d.addEventListener("click", () => goTo(+d.dataset.i)),
    );

    slides[0].classList.add("active");
    updateChip(0);

    // ── PHASE POPUP DATA ──
    const phaseData = {
      s0: {
        1: {
          eyebrow: "Phase 1",
          title: "Ideation & Build",
          color: "#0b1f44",
          items: [
            "Agentic roadmap with ROI projections",
            "Up to 100 deployed agents",
            "Integration architecture and UAT sign-off",
            "Agent Passport initialized per agent",
          ],
        },
        2: {
          eyebrow: "Phase 2",
          title: "Adoption & Managed",
          color: "#8c8c8c",
          items: [
            "SLA-driven monitoring",
            "Continuous agent updates",
            "Drift and performance reporting",
            "Managed AI operations",
          ],
        },
        3: {
          eyebrow: "Phase 3",
          title: "Next Gen Evolution",
          color: "#e31837",
          items: [
            "Technology refresh assessments",
            "Agent upgrade and retirement recommendations",
            "Next-cycle roadmap planning",
            "Lifecycle continuity through Agent Passports",
          ],
        },
      },
      s1: {
        1: {
          eyebrow: "Phase 1",
          title: "Ideation & Build",
          color: "#0b1f44",
          items: [
            "Agentic roadmap with ROI projections",
            "Up to 100 deployed agents",
            "Integration architecture and UAT sign-off",
            "Agent Passport initialized per agent",
          ],
        },
        2: {
          eyebrow: "Phase 2",
          title: "Adoption & Managed",
          color: "#8c8c8c",
          items: [
            "SLA-driven monitoring",
            "Continuous agent updates",
            "Drift and performance reporting",
            "Managed AI operations",
          ],
        },
        3: {
          eyebrow: "Phase 3",
          title: "Next Gen Evolution",
          color: "#e31837",
          items: [
            "Technology refresh assessments",
            "Agent upgrade and retirement recommendations",
            "Next-cycle roadmap planning",
            "Lifecycle continuity through Agent Passports",
          ],
        },
        4: {
          eyebrow: "Core Layer",
          title: "Benefits",
          color: "#e31837",
          items: [
            "AI That Evolves With Your Business.",
            "Governed AI. Continuous Execution",
            "One Lifecycle. Full Enterprise Control.",
            "Enterprise AI Without Operational Chaos.",
            "Operationalize AI Across The Enterprise.",
          ],
        },
      },
      s2: {
        1: {
          eyebrow: "Phase 1",
          title: "Ideation & Build",
          color: "#0b1f44",
          items: [
            "Agentic roadmap with ROI projections",
            "Up to 100 deployed agents",
            "Integration architecture and UAT sign-off",
            "Agent Passport initialized per agent",
          ],
        },
        2: {
          eyebrow: "Phase 2",
          title: "Adoption & Managed",
          color: "#8c8c8c",
          items: [
            "SLA-driven monitoring",
            "Continuous agent updates",
            "Drift and performance reporting",
            "Managed AI operations",
          ],
        },
        3: {
          eyebrow: "Phase 3",
          title: "Next Gen Evolution",
          color: "#e31837",
          items: [
            "Technology refresh assessments",
            "Agent upgrade and retirement recommendations",
            "Next-cycle roadmap planning",
            "Lifecycle continuity through Agent Passports",
          ],
        },
        4: {
          eyebrow: "ERP",
          title: "Enterprise Resource Planning",
          color: "#e31837",
          items: [
            "Autonomous Financial Close & Reconciliation Orchestration",
            "Agentic Supply Chain Demand Triage",
            "Predictive Procurement & Vendor Risk Intelligence",
            "Agentic Quality Control & Returns Management",
            "Autonomous Order-to-Cash (O2C) Orchestration",
          ],
        },
        5: {
          eyebrow: "CRM",
          title: "Customer Relationship Mgmt",
          color: "#e31837",
          items: [
            "Autonomous Lead Triage and Qualification Orchestration",
            'Agentic Opportunity "Health" Monitoring',
            "Autonomous Customer Remediation and Retention",
            "Self-Healing CRM Data and Record Rejuvenation",
            "Autonomous Meeting Intelligence & Action Orchestration",
          ],
        },
        6: {
          eyebrow: "SCM",
          title: "Supply Chain Management",
          color: "#e31837",
          items: [
            "Autonomous Demand-Supply Rebalancing",
            "Agentic Logistics & Last-Mile Triage",
            "Self-Healing Inventory & Warehouse Orchestration",
            "Autonomous Vendor Risk & Compliance Monitoring",
            "Intelligent Sourcing & Contract Rejuvenation",
          ],
        },
      },
      s3: {
        1: {
          eyebrow: "Front Office",
          title: "Most Used Use Case",
          color: "#8c8c8c",
          items: [
            "Autonomous Resolution Agents",
            "Hyper-Personalized Upsell/Cross-Sell Triage",
            "Multi-Classifier Sentiment & Intent Intelligence",
            "Self-Healing Knowledge Management",
            "Agentic Customer Remediation & Dispute Handling",
          ],
        },
        2: {
          eyebrow: "Back Office",
          title: "Back Office Use Case",
          color: "#8c8c8c",
          items: [
            "Autonomous Resolution Agents",
            "Hyper-Personalized Upsell/Cross-Sell Triage",
            "Multi-Classifier Sentiment & Intent Intelligence",
            "Self-Healing Knowledge Management",
            "Agentic Customer Remediation & Dispute Handling",
          ],
        },
        3: {
          eyebrow: "IT",
          title: "IT Use Case",
          color: "#8c8c8c",
          items: [
            "Autonomous Incident Remediation & Self-Healing",
            "Agentic SDLC Acceleration (AI-DLC)",
            "Autonomous Cybersecurity Triage & Threat Hunting",
            "Real-Time Cost Optimization & Multi-Cloud Right-Sizing",
            "Agentic Customer Remediation & Dispute Handling",
            "Self-Service Agentic Desk with MCP Context",
          ],
        },
      },
      s4: {
        1: {
          eyebrow: "Pharma & Life Sciences",
          title: "Pharma & Life Sciences",
          color: "#0b1f44",
          items: [
            "Autonomous Clinical Trial Protocol Design & Optimization",
            "Agentic Pharmacovigilance & Adverse Event Triage",
            "Precision Patient Recruitment & Enrollment Orchestration",
            "Autonomous Regulatory Submission & Documentation (eCTD)",
          ],
        },
        2: {
          eyebrow: "Manufacturing",
          title: "Manufacturing",
          color: "#0b1f44",
          items: [
            "Autonomous Predictive Maintenance & Self-Healing Assets",
            "Agentic Supply Chain Orchestration & Triage",
            "Autonomous Quality Inspection & Defect Remediation",
            "Intelligent Production Scheduling & Demand Alignment",
            "Agent-Led Sustainability & Real-time Cost Optimization",
          ],
        },
        3: {
          eyebrow: "Retail & CPG",
          title: "Retail & CPG",
          color: "#0b1f44",
          items: [
            "Autonomous Demand Sensing & Inventory Rejuvenation",
            "Hyper-Personalized Agentic Marketing & Promotion Triage",
            "Self-Healing Supply Chain & Last-Mile Orchestration",
            "Autonomous Fraud & Shrinkage Intelligence",
            "Agent-Led Intelligent Shelf & Assortment Optimization",
          ],
        },
        4: {
          eyebrow: "BFSI",
          title: "Banking, Financial Services & Insurance",
          color: "#0b1f44",
          items: [
            "Autonomous Fraud & AML Detection",
            "Agentic Personalization & Wealth Advisory",
            "Autonomous Loan Underwriting & Credit Risk Triage",
            "Intelligent Customer Remediation & Claim Orchestration",
            "Real-Time Cost & Capital Optimization",
          ],
        },
      },
    };

    function openPhaseModal(d) {
      if (!d) return;
      
      const eyebrowEl = document.getElementById("phase-modal-eyebrow");
      if (d.eyebrow) {
        eyebrowEl.textContent = d.eyebrow;
        eyebrowEl.style.display = "block";
      } else {
        eyebrowEl.style.display = "none";
      }
      
      document.getElementById("phase-modal-title").textContent = d.title;
      document.getElementById("phase-modal-accent").style.background =
        d.color;
      document
        .getElementById("phase-modal-box")
        .style.setProperty("--phase-color", d.color);
      const list = document.getElementById("phase-modal-list");
      list.innerHTML = d.items.map((item) => `<li>${item}</li>`).join("");
      document.getElementById("phase-modal").classList.add("show");
      document.body.style.overflow = "hidden";
    }

    function closePhaseModal() {
      document.getElementById("phase-modal").classList.remove("show");
      document.body.style.overflow = "";
    }

    document
      .getElementById("phase-modal-backdrop")
      .addEventListener("click", closePhaseModal);
    document
      .getElementById("phase-modal-close")
      .addEventListener("click", closePhaseModal);
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") closePhaseModal();
    });

    document.querySelectorAll(".slide").forEach((slide, slideIdx) => {
      const slideKey = "s" + slideIdx;
      slide.querySelectorAll(".phase-group").forEach((g, idx) => {
        const phaseNum = idx + 1;
        g.style.cursor = "pointer";
        g.addEventListener("click", (e) => {
          e.stopPropagation();
          const slideContent = phaseData[slideKey];
          if (!slideContent) return;
          openPhaseModal(slideContent[phaseNum]);
        });
      });
    });
  </script> -->
    <script>
        (function () {
            /* ═══════════════════════════════════════════════
               1. PARALLAX ENGINE
            ═══════════════════════════════════════════════ */
            const plxEls = document.querySelectorAll('[data-plx]');
            let rafPending = false;

            function updateParallax() {
                plxEls.forEach(function (el) {
                    const parent = el.closest('.slide');
                    if (!parent) return;
                    const top = parent.getBoundingClientRect().top;
                    const spd = parseFloat(el.dataset.plx) || 0.35;
                    el.style.transform = 'translateY(' + (-top * spd) + 'px)';
                });
            }

            window.addEventListener('scroll', function () {
                if (!rafPending) {
                    rafPending = true;
                    requestAnimationFrame(function () { updateParallax(); rafPending = false; });
                }
            }, { passive: true });

            updateParallax();

            /* ═══════════════════════════════════════════════
               2. SLIDE REVEAL — IntersectionObserver
            ═══════════════════════════════════════════════ */
            const slideObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) entry.target.classList.add('active');
                });
            }, { threshold: 0.15 });

            document.querySelectorAll('.slide').forEach(function (slide) {
                if (!slide.classList.contains('active')) slideObserver.observe(slide);
            });




            /* ─────────────────────────────────────────
               PHASE POPUP DATA  (unchanged from original)
            ───────────────────────────────────────── */
            const phaseData = {
                s0: {
                    1: { eyebrow: "Phase 1", title: "Ideation & Build", color: "#0b1f44", items: ["Agentic roadmap with ROI projections", "Up to 100 deployed agents", "Integration architecture and UAT sign-off", "Agent Passport initialized per agent"] },
                    2: { eyebrow: "Phase 2", title: "Adoption & Managed", color: "#8c8c8c", items: ["SLA-driven monitoring", "Continuous agent updates", "Drift and performance reporting", "Managed AI operations"] },
                    3: { eyebrow: "Phase 3", title: "Next Gen Evolution", color: "#e31837", items: ["Technology refresh assessments", "Agent upgrade and retirement recommendations", "Next-cycle roadmap planning", "Lifecycle continuity through Agent Passports"] },
                },
                s1: {
                    1: { eyebrow: "Phase 1", title: "Ideation & Build", color: "#0b1f44", items: ["Agentic roadmap with ROI projections", "Up to 100 deployed agents", "Integration architecture and UAT sign-off", "Agent Passport initialized per agent"] },
                    2: { eyebrow: "Phase 2", title: "Adoption & Managed", color: "#8c8c8c", items: ["SLA-driven monitoring", "Continuous agent updates", "Drift and performance reporting", "Managed AI operations"] },
                    3: { eyebrow: "Phase 3", title: "Next Gen Evolution", color: "#e31837", items: ["Technology refresh assessments", "Agent upgrade and retirement recommendations", "Next-cycle roadmap planning", "Lifecycle continuity through Agent Passports"] },
                    4: { eyebrow: "Core Layer", title: "Benefits", color: "#e31837", items: ["AI That Evolves With Your Business.", "Governed AI. Continuous Execution", "One Lifecycle. Full Enterprise Control.", "Enterprise AI Without Operational Chaos.", "Operationalize AI Across The Enterprise."] },
                },
                s2: {
                    1: { eyebrow: "Phase 1", title: "Ideation & Build", color: "#0b1f44", items: ["Agentic roadmap with ROI projections", "Up to 100 deployed agents", "Integration architecture and UAT sign-off", "Agent Passport initialized per agent"] },
                    2: { eyebrow: "Phase 2", title: "Adoption & Managed", color: "#8c8c8c", items: ["SLA-driven monitoring", "Continuous agent updates", "Drift and performance reporting", "Managed AI operations"] },
                    3: { eyebrow: "Phase 3", title: "Next Gen Evolution", color: "#e31837", items: ["Technology refresh assessments", "Agent upgrade and retirement recommendations", "Next-cycle roadmap planning", "Lifecycle continuity through Agent Passports"] },
                    4: { eyebrow: "ERP", title: "Enterprise Resource Planning", color: "#e31837", items: ["Autonomous Financial Close & Reconciliation", "Agentic Supply Chain Demand Triage", "Predictive Procurement & Vendor Risk Intelligence", "Agentic Quality Control & Returns Management", "Autonomous Order-to-Cash (O2C) Orchestration"] },
                    5: { eyebrow: "CRM", title: "Customer Relationship Mgmt", color: "#e31837", items: ["Autonomous Lead Triage and Qualification", "Agentic Opportunity Health Monitoring", "Autonomous Customer Remediation and Retention", "Self-Healing CRM Data and Record Rejuvenation", "Autonomous Meeting Intelligence & Action"] },
                    6: { eyebrow: "SCM", title: "Supply Chain Management", color: "#e31837", items: ["Autonomous Demand-Supply Rebalancing", "Agentic Logistics & Last-Mile Triage", "Self-Healing Inventory & Warehouse Orchestration", "Autonomous Vendor Risk & Compliance Monitoring", "Intelligent Sourcing & Contract Rejuvenation"] },
                },
                s3: {
                    1: { eyebrow: "Front Office", title: "Front Office Use Case", color: "#8c8c8c", items: ["Autonomous Resolution Agents", "Hyper-Personalized Upsell/Cross-Sell Triage", "Multi-Classifier Sentiment & Intent Intelligence", "Self-Healing Knowledge Management", "Agentic Customer Remediation & Dispute Handling"] },
                    2: { eyebrow: "Back Office", title: "Back Office Use Case", color: "#8c8c8c", items: ["Autonomous Document Processing & Data Entry", "Intelligent HR Onboarding & Query Handling", "Automated Compliance & Audit Reporting", "Agentic Procurement & Vendor Management", "Accounts Payable/Receivable Automation"] },
                    3: { eyebrow: "IT", title: "IT Use Case", color: "#8c8c8c", items: ["Autonomous Incident Remediation & Self-Healing", "Agentic SDLC Acceleration (AI-DLC)", "Autonomous Cybersecurity Triage & Threat Hunting", "Real-Time Cost Optimization & Multi-Cloud Right-Sizing", "Self-Service Agentic Desk with MCP Context"] },
                },
                s4: {
                    1: { eyebrow: "Pharma & Life Sciences", title: "Pharma & Life Sciences", color: "#0b1f44", items: ["Autonomous Clinical Trial Protocol Design", "Agentic Pharmacovigilance & Adverse Event Triage", "Precision Patient Recruitment & Enrollment", "Autonomous Regulatory Submission & Documentation"] },
                    2: { eyebrow: "Manufacturing", title: "Manufacturing", color: "#0b1f44", items: ["Autonomous Predictive Maintenance & Self-Healing Assets", "Agentic Supply Chain Orchestration & Triage", "Autonomous Quality Inspection & Defect Remediation", "Intelligent Production Scheduling & Demand Alignment", "Agent-Led Sustainability & Cost Optimization"] },
                    3: { eyebrow: "Retail & CPG", title: "Retail & CPG", color: "#0b1f44", items: ["Autonomous Demand Sensing & Inventory Rejuvenation", "Hyper-Personalized Agentic Marketing & Promotion", "Self-Healing Supply Chain & Last-Mile Orchestration", "Autonomous Fraud & Shrinkage Intelligence", "Agent-Led Intelligent Shelf & Assortment Optimization"] },
                    4: { eyebrow: "BFSI", title: "Banking, Financial Services & Insurance", color: "#0b1f44", items: ["Autonomous Fraud & AML Detection", "Agentic Personalization & Wealth Advisory", "Autonomous Loan Underwriting & Credit Risk Triage", "Intelligent Customer Remediation & Claim Orchestration", "Real-Time Cost & Capital Optimization"] },
                },
            };

            function openPhaseModal(d) {
                if (!d) return;
                
                const eyebrowEl = document.getElementById("phase-modal-eyebrow");
                if (d.eyebrow) {
                    eyebrowEl.textContent = d.eyebrow;
                    eyebrowEl.style.display = "block";
                } else {
                    eyebrowEl.style.display = "none";
                }
                
                document.getElementById("phase-modal-title").textContent = d.title;
                document.getElementById("phase-modal-accent").style.background = d.color;
                document.getElementById("phase-modal-box").style.setProperty("--phase-color", d.color);
                const list = document.getElementById("phase-modal-list");
                list.innerHTML = d.items.map(item => `<li>${item}</li>`).join("");
                document.getElementById("phase-modal").classList.add("show");
                document.body.style.overflow = "hidden";
            }

            function closePhaseModal() {
                document.getElementById("phase-modal").classList.remove("show");
                document.body.style.overflow = "";
            }

            document.getElementById("phase-modal-backdrop").addEventListener("click", closePhaseModal);
            document.getElementById("phase-modal-close").addEventListener("click", closePhaseModal);
            document.addEventListener("keydown", e => { if (e.key === "Escape") { closePhaseModal(); hideTooltip(); } });

            document.querySelectorAll(".slide").forEach((slide, slideIdx) => {
                const slideKey = "s" + slideIdx;
                slide.querySelectorAll(".phase-group").forEach((g, idx) => {
                    const phaseNum = idx + 1;
                    g.style.cursor = "pointer";
                    g.addEventListener("click", e => {
                        e.stopPropagation();
                        const slideContent = phaseData[slideKey];
                        if (!slideContent) return;
                        openPhaseModal(slideContent[phaseNum]);
                    });
                });
            });

            /* ═══════════════════════════════════════════════
               HOVER TOOLTIP SYSTEM — NEW FEATURE
            ═══════════════════════════════════════════════ */

            const tooltip = document.getElementById("arc-tooltip");
            const ttBar = document.getElementById("arc-tooltip-bar");
            const ttEyebrow = document.getElementById("arc-tooltip-eyebrow");
            const ttTitle = document.getElementById("arc-tooltip-title");
            const ttList = document.getElementById("arc-tooltip-list");

            const PREVIEW_COUNT = Infinity; /* how many bullet items to show in tooltip */
            const isMobile = () => window.innerWidth <= 820;

            let hideTimer = null;

            function showTooltip(data, event) {
                if (!data) return;
                clearTimeout(hideTimer);

                /* ── Populate content ── */
                ttBar.style.background = data.color;
                ttEyebrow.textContent = data.eyebrow;
                ttEyebrow.style.color = data.color;
                ttTitle.textContent = data.title;

                /* Show first PREVIEW_COUNT items */
                const preview = data.items.slice(0, PREVIEW_COUNT);
                ttList.innerHTML = preview.map(item =>
                    `<li style="--dot-color:${data.color}">${item}</li>`
                ).join("");

                /* Bullet dot color via CSS variable */
                ttList.querySelectorAll("li").forEach(li => {
                    li.style.setProperty("--dot-color", data.color);
                });
                /* Apply to ::before via a dynamic style tag (only once) */
                ensureDotStyle();

                tooltip.setAttribute("aria-hidden", "false");
                tooltip.classList.add("visible");

                positionTooltip(event);
            }

            function hideTooltip() {
                hideTimer = setTimeout(() => {
                    tooltip.classList.remove("visible");
                    tooltip.setAttribute("aria-hidden", "true");
                }, 120);
            }

            function positionTooltip(e) {
                if (isMobile()) {
                    /* On mobile the tooltip is a bottom sheet — CSS handles it, no JS needed */
                    tooltip.style.left = "";
                    tooltip.style.top = "";
                    tooltip.style.right = "";
                    tooltip.style.bottom = "";
                    return;
                }

                const TW = tooltip.offsetWidth || 260;
                const TH = tooltip.offsetHeight || 200;
                const VW = window.innerWidth;
                const VH = window.innerHeight;
                const GAP = 16; /* gap from cursor */

                let x = e.clientX + GAP;
                let y = e.clientY + GAP;

                /* Flip left if overflows right */
                if (x + TW + GAP > VW) x = e.clientX - TW - GAP;
                /* Flip up if overflows bottom */
                if (y + TH + GAP > VH) y = e.clientY - TH - GAP;

                /* Clamp to viewport edges */
                x = Math.max(8, Math.min(x, VW - TW - 8));
                y = Math.max(8, Math.min(y, VH - TH - 8));

                tooltip.style.left = x + "px";
                tooltip.style.top = y + "px";
            }

            /* Create a single <style> that reads the CSS variable set per-li */
            function ensureDotStyle() {
                if (document.getElementById("tt-dot-style")) return;
                const s = document.createElement("style");
                s.id = "tt-dot-style";
                s.textContent = "#arc-tooltip-list li::before { background: var(--dot-color, #0b1f44); }";
                document.head.appendChild(s);
            }

            /* ── Attach hover events to every clickable SVG group ── */
            /*
              We map onclick attribute values → modalContent keys so we can
              read the same data source without duplication.
              Pattern: onclick="openSharedModal('KEY')"
            */
            function attachTooltipToGroup(group) {
                const onclickAttr = group.getAttribute("onclick") || "";
                const match = onclickAttr.match(/openSharedModal\(['"]([^'"]+)['"]\)/);
                if (!match) return;
                const key = match[1];
                const data = modalContent[key]; /* modalContent is defined in your existing script */
                if (!data) return;

                group.addEventListener("mouseenter", e => showTooltip(data, e));
                group.addEventListener("mousemove", e => positionTooltip(e));
                group.addEventListener("mouseleave", () => hideTooltip());

                /* Touch: tap once shows tooltip, tap again fires click (modal) */
                let touchShown = false;
                group.addEventListener("touchstart", e => {
                    if (!touchShown) {
                        e.preventDefault(); /* prevent immediate click */
                        showTooltip(data, { clientX: e.touches[0].clientX, clientY: e.touches[0].clientY });
                        touchShown = true;
                        /* auto-hide after 3s on mobile */
                        setTimeout(() => { touchShown = false; hideTooltip(); }, 3000);
                    } else {
                        hideTooltip();
                        touchShown = false;
                        /* Let the click through to open the modal */
                    }
                }, { passive: false });
            }

            /*
              Wait for DOM paint then wire up all groups.
              We use a small timeout so the SVG is guaranteed rendered.
            */
            function wireTooltips() {
                document.querySelectorAll(".interactive-group, .hover-stroke-group").forEach(g => {
                    attachTooltipToGroup(g);
                });
            }

            /* Also keep tooltip hidden when modal opens */
            const origOpenSharedModal = window.openSharedModal;
            window.openSharedModal = function (key) {
                hideTooltip();
                if (origOpenSharedModal) origOpenSharedModal(key);
            };

            /* Keep tooltip from disappearing when cursor briefly crosses into it */
            tooltip.addEventListener("mouseenter", () => clearTimeout(hideTimer));
            tooltip.addEventListener("mouseleave", () => hideTooltip());

            window._tooltipHideOnNav = function () { hideTooltip(); };

            setTimeout(wireTooltips, 400);

            // ── Hash deep-linking scroll — choose-package ──────────────────────
            // FIX: Two issues addressed:
            //  1. Scroll offset: use window.scrollTo() with header height offset
            //     so heading + all package cards are fully visible.
            //  2. Refresh fix: browser scroll-restoration saves the scroll position
            //     and restores it on refresh even after replaceState removes the hash.
            //     We disable scrollRestoration, detect reload vs fresh-navigate via
            //     the Performance Navigation API, and force scrollTo(0,0) on reload.

            // Disable browser's automatic scroll-position restore for this page.
            if ('scrollRestoration' in history) {
                history.scrollRestoration = 'manual';
            }

            function scrollToChoosePackage(behavior) {
                var el = document.getElementById('choose-package');
                if (!el) return;

                // Measure header(s) stacked at the top.
                var adminBar = document.getElementById('wpadminbar');
                var siteHeader = document.querySelector('#masthead, .site-header, header.site-header, nav.navbar, .header-main');
                var adminH  = adminBar  ? adminBar.offsetHeight  : 0;
                var headerH = siteHeader ? siteHeader.offsetHeight : 0;
                var EXTRA   = 24; // breathing room above heading

                var rect    = el.getBoundingClientRect();
                var scrollY = window.pageYOffset || document.documentElement.scrollTop;
                var targetY = rect.top + scrollY - adminH - headerH - EXTRA;

                window.scrollTo({ top: Math.max(0, targetY), behavior: behavior || 'smooth' });

                // Strip hash from URL so a future refresh has no hash to act on.
                try {
                    history.replaceState(null, '', window.location.pathname + window.location.search);
                } catch (e) { /* no-op */ }
            }

            (function () {
                var hash = window.location.hash;
                if (hash !== '#choose-package' && hash !== '#packages') return;

                // ── Detect reload vs. fresh link-navigation ──────────────────
                var isReload = false;
                try {
                    var navEntry = performance.getEntriesByType('navigation')[0];
                    if (navEntry) isReload = (navEntry.type === 'reload');
                } catch (e) { /* PerformanceNavigationTiming not available */ }

                if (isReload) {
                    // PAGE REFRESH — clear hash and go to the very top.
                    // Do NOT scroll to the package section.
                    try {
                        history.replaceState(null, '', window.location.pathname + window.location.search);
                    } catch (e) { /* no-op */ }
                    window.addEventListener('load', function () {
                        window.scrollTo({ top: 0, behavior: 'instant' });
                    });
                } else {
                    // FRESH NAVIGATION (user clicked "Explore Packages") —
                    // clear hash first so any refresh after this goes to top,
                    // then scroll to the section with proper header offset.
                    try {
                        history.replaceState(null, '', window.location.pathname + window.location.search);
                    } catch (e) { /* no-op */ }

                    if (document.readyState === 'complete') {
                        setTimeout(function () { scrollToChoosePackage('smooth'); }, 100);
                    } else {
                        window.addEventListener('load', function onFirstLoad() {
                            window.removeEventListener('load', onFirstLoad);
                            setTimeout(function () { scrollToChoosePackage('smooth'); }, 120);
                        });
                    }
                }
            }());

        })();
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        if(!document.getElementById('kinetic-css')) {
            const kStyle = document.createElement('style');
            kStyle.id = 'kinetic-css';
            kStyle.innerHTML = `
                .kinetic-block {
                    opacity: 0;
                    transform: translateY(20px) scale(0.98);
                    filter: blur(5px);
                }
                @keyframes kineticFadeUp {
                    to { opacity: 1; transform: translateY(0) scale(1); filter: blur(0); }
                }
            `;
            document.head.appendChild(kStyle);
        }

        const leftElements = document.querySelectorAll('.hero-ey, .hero-h, .hero-sub');
        leftElements.forEach(el => el.classList.add('kinetic-block'));

        const text = "agenTriniti";
        const el = document.getElementById("typewriter-agenTriniti");
        
        if(el) {
            if(!document.getElementById('cinematic-css')) {
                const style = document.createElement('style');
                style.id = 'cinematic-css';
                style.innerHTML = `
                    .cinematic-letter {
                        display: inline-block;
                        opacity: 0;
                        transform: translateY(10px) scale(0.95);
                        filter: blur(8px);
                        animation: cinematicReveal 0.7s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
                    }
                    @keyframes cinematicReveal {
                        to { opacity: 1; transform: translateY(0) scale(1); filter: blur(0); }
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

            const animateLeftSideOnce = () => {
                leftElements.forEach((blockEl, index) => {
                    blockEl.style.animation = 'none';
                    blockEl.offsetHeight; // trigger reflow
                    blockEl.style.opacity = '0';
                    blockEl.style.transform = 'translateY(20px) scale(0.98)';
                    blockEl.style.filter = 'blur(5px)';
                    
                    blockEl.style.animation = 'kineticFadeUp 0.8s cubic-bezier(0.2, 0.8, 0.2, 1) forwards';
                    blockEl.style.animationDelay = `${index * 0.15}s`;
                });
            };

            const resetAndAnimateWord = (initialDelay = 0) => {
                el.classList.remove('cinematic-shimmer');
                
                letters.forEach((span, index) => {
                    span.style.animation = 'none';
                    span.offsetHeight; // trigger reflow
                    span.style.opacity = '0';
                    span.style.transform = 'translateY(10px) scale(0.95)';
                    span.style.filter = 'blur(8px)';
                    
                    span.style.animation = 'cinematicReveal 0.7s cubic-bezier(0.2, 0.8, 0.2, 1) forwards';
                    span.style.animationDelay = `${initialDelay + (index * 0.08)}s`;
                    span.style.animationPlayState = 'running';
                });
                
                const totalDuration = (initialDelay + (letters.length * 0.08) + 0.7) * 1000;
                setTimeout(() => {
                    el.classList.add('cinematic-shimmer');
                    letters.forEach(span => {
                        span.style.animation = 'none';
                        span.style.opacity = '1';
                        span.style.transform = 'none';
                        span.style.filter = 'none';
                    });
                }, totalDuration + 200);
            };

            let animationStarted = false;
            const observer = new IntersectionObserver((entries) => {
                if(entries[0].isIntersecting && !animationStarted) {
                    animationStarted = true;
                    setTimeout(() => {
                        animateLeftSideOnce();
                        resetAndAnimateWord(0.3);
                    }, 100);
                    observer.disconnect();
                }
            }, { threshold: 0.1 });
            
            const heroInner = document.querySelector('.hero-inner');
            if (heroInner) {
                observer.observe(heroInner);
            }
        }
    });
    </script>
</body>



		

<?php get_footer(); ?>
