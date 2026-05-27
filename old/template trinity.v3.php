<?php
/**
 * Template Name: Trinity-new-v3
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
        scroll-behavior: smooth;
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
            padding-bottom: 100px !important;
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
        padding: 40px 20px 40px 50px;
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
        top: -20px;
        /*  left:-50px; */
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
        bottom: 160px;
        right: 28px;
        z-index: 200;
        background: var(--red);
        color: #fff;
        border: none;
        border-radius: 50px;
        padding: 12px 22px;
        font-size: 13px;
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
        padding: 4px 24px 80px;
        width: 100%;
    }

    .hero-ey {
        font-family: "Inter", sans-serif;
        letter-spacing: 6px;
        font-size: 14px;
        color: var(--red);
        margin-bottom: 0px;
        margin-top: 30px;
        opacity: 0;
        transform: translateY(18px);
        transition:
            opacity 0.5s,
            transform 0.5s;
    }

    .s0.active .hero-ey {
        opacity: 1;
        transform: none;
        transition-delay: 0.2s;
    }

    .hero-h {
        font-family: "Roboto Slab", serif;
        font-weight: bold;
        font-size: clamp(26px, 6vw, 36px) !important;
        color: var(--navy);
        line-height: 1.2;
        margin-bottom: 2px;
        opacity: 0;
        transform: translateY(22px);
        transition:
            opacity 0.6s,
            transform 0.6s;
    }

    .s0.active .hero-h {
        opacity: 1;
        transform: none;
        transition-delay: 0.3s;
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
        opacity: 0;
        line-height: 1.2;
        transform: translateY(18px);
        transition:
            opacity 0.5s,
            transform 0.5s;
    }

    .s0.active .hero-sub {
        opacity: 1;
        transform: none;
        transition-delay: 0.4s;
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
        margin-top: -50px;
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
            margin-bottom: 56px;
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
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    #phase-modal-list li {
        font-family: "Inter", sans-serif;
        display: flex;
        align-items: flex-start;
        gap: 12px;
        font-size: 14px;
        line-height: 1.55;
        color: var(--text-dark);
    }

    #phase-modal-list li::before {
        content: "";
        width: 8px;
        height: 8px;
        border-radius: 50%;
        margin-top: 5px;
        flex-shrink: 0;
        background: var(--phase-color, var(--navy));
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
        padding: 12px 14px 14px;
    }

    #arc-tooltip-eyebrow {
        font-size: 9px;
        font-weight: 700;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        margin-bottom: 3px;
        /* color set via JS to match accent */
    }

    #arc-tooltip-title {
        font-family: "Roboto Slab", serif;
        font-size: 14px;
        font-weight: 700;
        color: #0b1f44;
        margin-bottom: 10px;
        line-height: 1.2;
    }

    #arc-tooltip-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    #arc-tooltip-list li {
        display: flex;
        align-items: flex-start;
        gap: 7px;
        font-size: 11.5px;
        line-height: 1.45;
        color: #475569;
    }

    #arc-tooltip-list li::before {
        content: "";
        flex-shrink: 0;
        width: 5px;
        height: 5px;
        border-radius: 50%;
        margin-top: 4.5px;
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

    /* ── Slide 5: Packages Slide ── */
    .slide.s5 {
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        padding: clamp(24px, 4vh, 48px) 48px;
        background: var(--cream);
    }

    .slide.s5 .pkg-wrap {
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

    .slide.active .pkg-wrap {
        opacity: 1;
        transform: none;
    }

    .pkg-divider {
        border: none;
        border-top: 1px solid #e2e8f0;
        margin-bottom: 0;
        width: 100%;
    }

    .pkg-label {
        display: flex;
        justify-content: center;
        margin-top: -12px;
        margin-bottom: 24px;
        width: 100%;
    }

    .pkg-label span {
        background: var(--cream);
        padding: 0 16px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: #a0896e;
        font-family: 'Inter', sans-serif;
    }

    .pkg-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 14px;
        margin-bottom: 28px;
        width: 100%;
    }

    .pkg-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        border: 2px solid rgba(140, 140, 140, 0.3);
        box-shadow: 0 0 18px rgba(160, 160, 160, 0.22), 0 0 40px rgba(140, 140, 140, 0.10);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 250px;
    }

    .pkg-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 32px rgba(160, 160, 160, 0.32), 0 0 50px rgba(140, 140, 140, 0.18);
    }

    .pkg-banner-platinum {
        background: linear-gradient(180deg, #707070 0%, #b0b0b0 18%, #e8e8e8 38%, #f5f5f5 50%, #e8e8e8 62%, #b0b0b0 82%, #707070 100%);
        padding: 30px 0;
        text-align: center;
        position: relative;
    }

    .pkg-banner-gold {
        background: linear-gradient(180deg, #fff5a0 0%, #f0c000 25%, #a07800 50%, #f0c000 75%, #fff5a0 100%);
        padding: 30px 0;
        text-align: center;
        position: relative;
    }

    .pkg-banner-silver {
        background: linear-gradient(180deg, #909090 0%, #c0c0c0 20%, #d8d8d8 40%, #e0e0e0 50%, #d8d8d8 60%, #c0c0c0 80%, #909090 100%);
        padding: 30px 0;
        text-align: center;
        position: relative;
    }

    .pkg-banner-shine {
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 40%;
        background: linear-gradient(180deg, rgba(255,255,255,0.38) 0%, transparent 100%);
        pointer-events: none;
    }

    .pkg-banner-text {
        position: relative;
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .pkg-banner-text.platinum { color: #000000; text-shadow: 0 1px 3px rgba(255,255,255,0.8); }
    .pkg-banner-text.gold     { color: #000000; text-shadow: 0 1px 4px rgba(255,220,0,0.7); }
    .pkg-banner-text.silver   { color: #000000; text-shadow: 0 1px 3px rgba(255,255,255,0.8); }

    .pkg-divider-line { height: 3px; }
    .pkg-divider-line.platinum { background: linear-gradient(90deg, transparent, #888, transparent); }
    .pkg-divider-line.gold     { background: linear-gradient(90deg, transparent, #d4a000, transparent); }
    .pkg-divider-line.silver   { background: linear-gradient(90deg, transparent, #909090, transparent); }

    .pkg-body {
        padding: 36px 20px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 24px;
        flex-wrap: wrap;
        flex-grow: 1;
    }

    .pkg-feature {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .pkg-icon-svg {
        width: 20px;
        height: 20px;
        flex-shrink: 0;
        display: inline-block;
        vertical-align: middle;
    }
    .pkg-icon-svg.platinum { color: #555555; }
    .pkg-icon-svg.gold     { color: #c49a0a; }
    .pkg-icon-svg.silver   { color: #666666; }

    .pkg-feature-text {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 600;
        color: #000000;
        white-space: nowrap;
    }

    .pkg-cta-wrap {
        text-align: center;
        margin-top: 4px;
        width: 100%;
    }

    .pkg-cta-btn {
        display: inline-block;
        padding: 13px 44px;
        border-radius: 6px;
        font-family: 'Inter', sans-serif;
        font-size: 15px;
        font-weight: 800;
        text-decoration: none;
        background: var(--red, #e31837);
        color: #ffffff !important;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: background 0.2s, transform 0.2s;
        cursor: pointer;
        border: none;
    }

    .pkg-cta-btn:hover {
        background: #ff2244;
        transform: translateY(-2px);
        color: #ffffff !important;
    }

    @media (max-width: 820px) {
        .slide.s5 {
            padding: 100px 15px 40px !important;
            display: block !important;
            overflow-y: auto !important;
        }
        .pkg-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 8px;
        }
        .pkg-banner-text { font-size: 11px; letter-spacing: 1px; }
        .pkg-feature-text { font-size: 12px; }
        .pkg-body { gap: 8px; padding: 10px 8px 12px; flex-direction: column; align-items: flex-start; }
        .pkg-cta-btn { font-size: 13px; padding: 11px 28px; }
    }

    @media (max-width: 600px) {
        .pkg-grid {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
            max-width: 380px !important;
            margin: 0 auto 28px !important;
        }
        .pkg-card {
            min-height: auto !important;
        }
        .pkg-body {
            flex-direction: row !important;
            justify-content: space-evenly !important;
            align-items: center !important;
            padding: 24px 16px !important;
            gap: 16px !important;
        }
        .pkg-feature-text {
            font-size: 16px !important;
            white-space: nowrap !important;
        }
        .pkg-banner-text {
            font-size: 14px !important;
            letter-spacing: 1.5px !important;
        }
        .pkg-cta-btn {
            width: 100% !important;
            max-width: 280px !important;
            font-size: 14px !important;
            padding: 12px 36px !important;
        }
    }
</style>
</head>

<body>
    <!-- 	     <div id="trinity-wrapper" style="--wp-header-height: 90px"> -->
    <span id="slide-chip"></span>

    <div id="dots">
        <div class="dot active" data-i="0"></div>
        <div class="dot" data-i="1"></div>
        <div class="dot" data-i="2"></div>
    </div>

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
            <svg style="            position: absolute;            inset: 0;            width: 100%;            height: 100%;            opacity: 0.2;            pointer-events: none;          "
                viewBox="0 0 1000 560" preserveAspectRatio="xMidYMax slice">
                <path d="M 50,540 A 450,450 0 0,1 950,540" fill="none" stroke="#cbd5e1" stroke-width="72"></path>
                <path d="M 125,540 A 375,375 0 0,1 875,540" fill="none" stroke="#cbd5e1" stroke-width="72"></path>
                <path d="M 200,540 A 300,300 0 0,1 800,540" fill="none" stroke="#cbd5e1" stroke-width="72"></path>
                <path d="M 262,540 A 238,238 0 0,1 738,540" fill="none" stroke="#cbd5e1" stroke-width="42"></path>
            </svg>
            <div class="hero-inner">
                <p class="hero-ey">AI Use Case Lifecycle Management</p>
                <h1 class="hero-h">
                    Agentic AI <span>Trinity<sup>©</sup> Package</span>
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
                                <path d="M 330,500 A 170,170 0 0,1 415,352.8" fill="none" stroke="#0b1f44"
                                    stroke-width="80"></path>
                                <text fill="white" font-family="'Inter', sans-serif" font-size="16" text-anchor="middle"
                                    transform="translate(352.8, 415) rotate(-60)">
                                    <!--                   <tspan x="0" font-weight="700">Phase 1:</tspan> -->
                                    <tspan x="0" dy="16">Build</tspan>
                                </text>
                                <text dy="6" fill="#0b1f44" font-family="'Inter', sans-serif" font-size="17"
                                    font-weight="700">
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
                                <text dy="6" fill="#8c8c8c" font-family="'Inter', sans-serif" font-size="14"
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
                                    Agentic AI Trinity<tspan baseline-shift="super" font-size="12">©</tspan> Package
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
                      <button class="pkg-cta-btn" onclick="window.open('https://calendly.com/airodigitallabs/30min?guests=sayak.das%40airodigitallabs.com&month=2026-05', '_blank')">
                            Book a Demo
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
        <div class="slide s5">
            <div class="pkg-wrap">
                <hr class="pkg-divider" />
                <div class="pkg-label">
                    <span>Choose your package</span>
                </div>

                <div class="pkg-grid">

                    <!-- Platinum -->
                    <div class="pkg-card">
                        <div class="pkg-banner-platinum">
                            <div class="pkg-banner-shine"></div>
                            <span class="pkg-banner-text platinum">PLATINUM</span>
                        </div>
                        <div class="pkg-divider-line platinum"></div>
                        <div class="pkg-body">
                            <div class="pkg-feature">
                                <svg class="pkg-icon-svg platinum" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="5" y="8" width="14" height="10" rx="3" />
                                    <circle cx="9.5" cy="13" r="1.2" fill="currentColor"/>
                                    <circle cx="14.5" cy="13" r="1.2" fill="currentColor"/>
                                    <path d="M 5 11 A 2 2 0 0 0 3 13 A 2 2 0 0 0 5 15" />
                                    <path d="M 19 11 A 2 2 0 0 1 21 13 A 2 2 0 0 1 19 15" />
                                    <path d="M 9 18 C 9 21 15 21 15 18" />
                                </svg>
                                <span class="pkg-feature-text">100 Agents</span>
                            </div>
                            <div class="pkg-feature">
                                <svg class="pkg-icon-svg platinum" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="2.5" ry="2.5" />
                                    <line x1="16" y1="2" x2="16" y2="6" />
                                    <line x1="8" y1="2" x2="8" y2="6" />
                                    <line x1="3" y1="10" x2="21" y2="10" />
                                    <path d="M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01" />
                                </svg>
                                <span class="pkg-feature-text">6 Months</span>
                            </div>
                        </div>
                    </div>

                    <!-- Gold -->
                    <div class="pkg-card" style="border:2px solid rgba(220,170,0,0.5); box-shadow:0 0 22px rgba(245,200,0,0.45), 0 0 55px rgba(245,180,0,0.2);">
                        <div class="pkg-banner-gold">
                            <div class="pkg-banner-shine"></div>
                            <span class="pkg-banner-text gold">GOLD</span>
                        </div>
                        <div class="pkg-divider-line gold"></div>
                        <div class="pkg-body">
                            <div class="pkg-feature">
                                <svg class="pkg-icon-svg gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="5" y="8" width="14" height="10" rx="3" />
                                    <circle cx="9.5" cy="13" r="1.2" fill="currentColor"/>
                                    <circle cx="14.5" cy="13" r="1.2" fill="currentColor"/>
                                    <path d="M 5 11 A 2 2 0 0 0 3 13 A 2 2 0 0 0 5 15" />
                                    <path d="M 19 11 A 2 2 0 0 1 21 13 A 2 2 0 0 1 19 15" />
                                    <path d="M 9 18 C 9 21 15 21 15 18" />
                                </svg>
                                <span class="pkg-feature-text">50 Agents</span>
                            </div>
                            <div class="pkg-feature">
                                <svg class="pkg-icon-svg gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="2.5" ry="2.5" />
                                    <line x1="16" y1="2" x2="16" y2="6" />
                                    <line x1="8" y1="2" x2="8" y2="6" />
                                    <line x1="3" y1="10" x2="21" y2="10" />
                                    <path d="M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01" />
                                </svg>
                                <span class="pkg-feature-text">4 Months</span>
                            </div>
                        </div>
                    </div>

                    <!-- Silver -->
                    <div class="pkg-card">
                        <div class="pkg-banner-silver">
                            <div class="pkg-banner-shine"></div>
                            <span class="pkg-banner-text silver">SILVER</span>
                        </div>
                        <div class="pkg-divider-line silver"></div>
                        <div class="pkg-body">
                            <div class="pkg-feature">
                                <svg class="pkg-icon-svg silver" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="5" y="8" width="14" height="10" rx="3" />
                                    <circle cx="9.5" cy="13" r="1.2" fill="currentColor"/>
                                    <circle cx="14.5" cy="13" r="1.2" fill="currentColor"/>
                                    <path d="M 5 11 A 2 2 0 0 0 3 13 A 2 2 0 0 0 5 15" />
                                    <path d="M 19 11 A 2 2 0 0 1 21 13 A 2 2 0 0 1 19 15" />
                                    <path d="M 9 18 C 9 21 15 21 15 18" />
                                </svg>
                                <span class="pkg-feature-text">20 Agents</span>
                            </div>
                            <div class="pkg-feature">
                                <svg class="pkg-icon-svg silver" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="2.5" ry="2.5" />
                                    <line x1="16" y1="2" x2="16" y2="6" />
                                    <line x1="8" y1="2" x2="8" y2="6" />
                                    <line x1="3" y1="10" x2="21" y2="10" />
                                    <path d="M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01" />
                                </svg>
                                <span class="pkg-feature-text">2 Months</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="pkg-cta-wrap">
                    <a href="https://calendly.com/airodigitallabs/30min?guests=sayak.das%40airodigitallabs.com&month=2026-05"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="pkg-cta-btn">
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
                padding-left: 20px;
                margin: 0 0 32px 0;
            }

            #shared-modal-list li {
                margin-bottom: 12px;
                color: #334155;
                line-height: 1.5;
                font-size: 15px;
                font-weight: 500;
            }

            #shared-modal-list li::marker {
                color: var(--phase-color);
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
                    eyebrow: "Front Office",
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
                    eyebrow: "Back Office",
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
                    eyebrow: "IT",
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
                    eyebrow: "Verticals",
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
                    eyebrow: "Verticals",
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
                    eyebrow: "Verticals",
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
                    eyebrow: "Verticals",
                    title: "Banking and Financial Services",
                    items: [
                        "Autonomous Fraud & AML Detection",
                        "Agentic Personalization & Wealth Advisory",
                        "Autonomous Loan Underwriting & Credit Risk Triage",
                        "Intelligent Customer Remediation & Claim Orchestration",
                        "Real-Time Cost & Capital Optimization",
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
                document.getElementById("shared-modal-eyebrow").innerText =
                    data.eyebrow;
                document.getElementById("shared-modal-title").innerText = data.title;

                const listEl = document.getElementById("shared-modal-list");
                listEl.innerHTML = ""; // Clear old items

                data.items.forEach((itemText) => {
                    const li = document.createElement("li");
                    li.innerText = itemText;
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
                    eyebrow: "Front Office",
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
                    eyebrow: "Back Office",
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
                    eyebrow: "IT",
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
                    li.innerText = itemText;
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
                padding-left: 20px;
                margin: 0 0 32px 0;
            }

            #shared-modal-list li {
                margin-bottom: 12px;
                color: #334155;
                line-height: 1.5;
                font-size: 15px;
                font-weight: 500;
            }

            #shared-modal-list li::marker {
                color: var(--phase-color);
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
                padding-left: 20px;
                margin: 0 0 32px 0;
            }

            #shared-modal-list li {
                margin-bottom: 12px;
                color: #334155;
                line-height: 1.5;
                font-size: 15px;
                font-weight: 500;
            }

            #shared-modal-list li::marker {
                color: var(--phase-color);
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
                <h2 class="cmp-title">
                    Why Airo Agentic Trinity<sup>©</sup> Package<br />Changes the
                    Equation
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
                                    <th class="cmp-trinity-head">Trinity</th>
                                </tr>
                            </thead>
                            <tbody id="cmp-table-body"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
		  <a href="https://calendly.com/airodigitallabs/30min?guests=sayak.das%40airodigitallabs.com&month=2026-05"
        target="_blank" rel="noopener noreferrer" id="fcta">
        <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7" />
        </svg>
        Book a Demo
    </a>

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
            padding: clamp(24px, 4vh, 48px) 48px;
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
            font-family: "Roboto Slab", serif;
            font-size: clamp(24px, 2.8vw, 36px);
            color: var(--navy);
            line-height: 1.05;
            letter-spacing: 1px;
            text-align: center;
            margin-bottom: clamp(14px, 2.4vh, 28px);
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
            padding: clamp(18px, 2.5vh, 26px) 18px;
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
            padding: clamp(14px, 2vh, 22px) 18px;
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
                padding: 100px 15px 40px !important;
                display: block !important;
                /* Removes strict flex centering constraints */
                overflow-y: auto !important;
            }

            /* 2. Fix the title sizing for mobile */
            .cmp-title {
                font-size: 22px !important;
                margin-bottom: 20px !important;
            }

            /* 3. Enable smooth horizontal scrolling on the wrapper */
            .cmp-table-wrap {
                overflow-x: auto !important;
                -webkit-overflow-scrolling: touch !important;
                /* Smooth swiping on iOS */
                width: 100% !important;
                padding-bottom: 10px;
                /* Space for the scrollbar */
            }

            /* 4. Force the table to be wide enough so it stops squishing and starts scrolling */
            .cmp-table {
                min-width: 600px !important;
                /* Adjust this number if you need it wider/narrower */
            }

            /* 5. Reclaim space inside the cells */
            .cmp-table th {
                padding: 12px 10px !important;
                font-size: 11px !important;
            }

            .cmp-table tbody td {
                padding: 10px !important;
                font-size: 13px !important;
            }

            .cmp-table tbody td.cmp-dim-cell,
            .cmp-dim-head {
                padding-left: 15px !important;
                /* Reduce the massive left indent */
                font-size: 13px !important;
            }
        }

        @media (max-width: 820px) {
            .hero-partners {
                margin-top: -68px;
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
                Agentic AI Trinity<tspan baseline-shift="super" font-size="12">©</tspan> Package· AI Use Case Lifecycle
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
                Agentic AI Trinity<tspan baseline-shift="super" font-size="12">©</tspan> Package· AI Use Case Lifecycle
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
        if (Math.abs(dy) > 40) goTo(dy > 0 ? current + 1 : current - 1);
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
      document.getElementById("phase-modal-eyebrow").textContent = d.eyebrow;
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
            /* ─────────────────────────────────────────
               SLIDE ENGINE
            ───────────────────────────────────────── */
            const slides = document.querySelectorAll(".slide");
            const dots = document.querySelectorAll(".dot");
            const chip = document.getElementById("slide-chip");
            const TOTAL = slides.length;
            let current = 0, animating = false;
            let footerScrollUnlocked = false;
            let wheelStopTimeout = null;
            
            // Strict Transition Cooldown Management to Swallow Trackpad Momentum
            let lastTransitionTime = 0;
            const scrollCooldown = 1500; // 1370ms transition duration + 130ms settle buffer

            const chipData = [
                { text: "", bg: "" },
                { text: "", bg: "" },
                { text: "", bg: "" },
            ];

            function updateChip(idx) {
                const d = chipData[idx];
                if (!d || !d.text) { chip.classList.remove("show"); return; }
                chip.textContent = d.text;
                chip.style.background = d.bg;
                chip.style.color = d.color || "#fff";
                chip.classList.add("show");
            }

            function goTo(next) {
                if (window._tooltipHideOnNav) window._tooltipHideOnNav();
                if (next === current || animating || next < 0 || next >= TOTAL) return;
                
                // Always lock footer scroll on slide transition to absorb momentum
                footerScrollUnlocked = false;
                
                // Track transition start time to block quick sequential inputs
                lastTransitionTime = Date.now();

                // Cancel internal smooth scrolling on slide change
                isScrollingInternal = false;
                if (scrollAnimFrame) {
                    cancelAnimationFrame(scrollAnimFrame);
                    scrollAnimFrame = null;
                }
                
                animating = true;
                const prev = current;
                current = next;
                const fwd = next > prev;
                const pS = slides[prev], nS = slides[next];

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
                        if (litG) { litG.style.animation = "none"; litG.offsetHeight; litG.style.animation = ""; }
                    });
                });

                dots.forEach((d, i) => d.classList.toggle("active", i === next));
                updateChip(next);

                const fcta = document.getElementById("fcta");
                next > 0 ? fcta.classList.add("show") : fcta.classList.remove("show");
                fcta.classList.remove("on-red");

                setTimeout(() => {
                    [pS, nS].forEach(s => { s.style.transition = ""; s.style.transform = ""; s.style.zIndex = ""; });
                    animating = false;
                }, 1370);
            }

            /* Lightweight Smooth Momentum Scroll inside Scrollable Slides */
            let targetScrollTop = 0;
            let currentScrollTop = 0;
            let isScrollingInternal = false;
            let scrollAnimFrame = null;

            function smoothScrollSlide(slide, amt) {
                targetScrollTop = Math.max(0, Math.min(slide.scrollHeight - slide.clientHeight, targetScrollTop + amt));
                
                if (!isScrollingInternal) {
                    isScrollingInternal = true;
                    currentScrollTop = slide.scrollTop;
                    
                    const animate = () => {
                        const diff = targetScrollTop - currentScrollTop;
                        if (Math.abs(diff) < 0.5) {
                            slide.scrollTop = targetScrollTop;
                            isScrollingInternal = false;
                            cancelAnimationFrame(scrollAnimFrame);
                        } else {
                            currentScrollTop += diff * 0.12; // Premium buttery deceleration factor (12% interpolation)
                            slide.scrollTop = currentScrollTop;
                            scrollAnimFrame = requestAnimationFrame(animate);
                        }
                    };
                    scrollAnimFrame = requestAnimationFrame(animate);
                }
            }

            /* Wheel */
            let wD = 0;
            window.addEventListener("wheel", e => {
                // 1. Trackpad horizontal swiping - ignore so table comparison columns scroll natively without slide changes
                if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) {
                    return;
                }

                // Debounce to detect when user has stopped wheel scrolling for 250ms
                clearTimeout(wheelStopTimeout);
                wheelStopTimeout = setTimeout(() => {
                    // Only unlock footer scroll if we are on the last slide, transition is complete, and settles!
                    if (current === TOTAL - 1 && !animating && (Date.now() - lastTransitionTime >= scrollCooldown + 100)) {
                        footerScrollUnlocked = true;
                    }
                }, 250);

                // 2. If scrolled down into the WordPress footer, let native scrolling rule
                if (window.scrollY > 5) {
                    return;
                }

                // 3. If currently animating or within transition cooldown, completely swallow scroll input
                if (animating || (Date.now() - lastTransitionTime < scrollCooldown)) {
                    e.preventDefault();
                    wD = 0;
                    return;
                }

                const activeSlide = slides[current];
                
                // 4. Custom butter momentum scroll if target is scrollable internally
                if (activeSlide) {
                    const isScrollable = activeSlide.scrollHeight > activeSlide.clientHeight;
                    if (isScrollable) {
                        const scrollTop = activeSlide.scrollTop;
                        const maxScrollTop = activeSlide.scrollHeight - activeSlide.clientHeight;
                        
                        // Scroll down: if not at the absolute bottom
                        if (e.deltaY > 0 && scrollTop < maxScrollTop - 5) {
                            e.preventDefault();
                            if (!isScrollingInternal) targetScrollTop = activeSlide.scrollTop;
                            smoothScrollSlide(activeSlide, e.deltaY * 0.85); // 0.85 scale factor for premium control
                            wD = 0; // reset accumulated transition delta since scrolling is internal
                            return;
                        }
                        // Scroll up: if not at the absolute top
                        if (e.deltaY < 0 && scrollTop > 5) {
                            e.preventDefault();
                            if (!isScrollingInternal) targetScrollTop = activeSlide.scrollTop;
                            smoothScrollSlide(activeSlide, e.deltaY * 0.85);
                            wD = 0; // reset accumulated transition delta since scrolling is internal
                            return;
                        }
                    }
                }

                // 5. If we are on the last slide and scrolling down, allow native page scroll to footer
                if (current === TOTAL - 1 && e.deltaY > 0) {
                    if (!footerScrollUnlocked) {
                        e.preventDefault(); // Block momentum from scrolling to footer
                        wD = 0;
                        return;
                    }
                    return; // Do NOT prevent default, let browser scroll natively to footer
                }

                // 6. Otherwise, this is a slide transition. Prevent native scrolling and handle via slide engine
                e.preventDefault();

                // If user reverses scroll direction, immediately reset the accumulated delta to zero
                if (wD !== 0 && Math.sign(e.deltaY) !== Math.sign(wD)) {
                    wD = 0;
                }

                wD += e.deltaY;

                // Instant trigger: if accumulated delta exceeds threshold (80), transition immediately
                if (Math.abs(wD) >= 80) {
                    const targetIndex = wD > 0 ? current + 1 : current - 1;
                    if (targetIndex >= 0 && targetIndex < TOTAL) {
                        goTo(targetIndex);
                    }
                    wD = 0;
                }
            }, { passive: false });

            /* Keyboard */
            window.addEventListener("keydown", e => {
                // 1. If scrolled down into the WordPress footer, let native keyboard scrolling rule
                if (window.scrollY > 5) {
                    return;
                }

                // 2. If currently animating or within transition cooldown, completely swallow keyboard inputs
                if (animating || (Date.now() - lastTransitionTime < scrollCooldown)) {
                    if (["ArrowDown", "ArrowRight", " ", "ArrowUp", "ArrowLeft"].includes(e.key)) {
                        e.preventDefault();
                    }
                    return;
                }

                const activeSlide = slides[current];
                if (activeSlide) {
                    const isScrollable = activeSlide.scrollHeight > activeSlide.clientHeight;
                    if (isScrollable) {
                        const scrollTop = activeSlide.scrollTop;
                        const maxScrollTop = activeSlide.scrollHeight - activeSlide.clientHeight;
                        if (e.key === "ArrowDown" && scrollTop < maxScrollTop - 5) {
                            e.preventDefault();
                            if (!isScrollingInternal) targetScrollTop = activeSlide.scrollTop;
                            smoothScrollSlide(activeSlide, 80);
                            return;
                        }
                        if (e.key === "ArrowUp" && scrollTop > 5) {
                            e.preventDefault();
                            if (!isScrollingInternal) targetScrollTop = activeSlide.scrollTop;
                            smoothScrollSlide(activeSlide, -80);
                            return;
                        }
                    }
                }
                
                // 3. If we are on the last slide and they press down/space, let native scroll down to footer
                if (current === TOTAL - 1 && ["ArrowDown", "ArrowRight", " "].includes(e.key)) {
                    return; // Do NOT prevent default, let browser scroll natively to footer
                }

                // 4. Slide transitions
                if (["ArrowDown", "ArrowRight", " "].includes(e.key)) { 
                    e.preventDefault(); 
                    goTo(current + 1); 
                }
                if (["ArrowUp", "ArrowLeft"].includes(e.key)) { 
                    e.preventDefault(); 
                    goTo(current - 1); 
                }
            });

            /* Touch */
            let tY = 0, tX = 0;
            window.addEventListener("touchstart", e => { 
                tY = e.touches[0].clientY; 
                tX = e.touches[0].clientX; 
            }, { passive: true });
            
            window.addEventListener("touchend", e => {
                const dy = tY - e.changedTouches[0].clientY;
                const dx = tX - e.changedTouches[0].clientX;
                
                // 1. If scrolled down into the WordPress footer, let native touch scrolling rule
                if (window.scrollY > 5) {
                    return;
                }

                // 2. Trackpad horizontal swiping - ignore
                if (Math.abs(dx) > Math.abs(dy)) {
                    return;
                }
                
                // 3. If currently animating or within cooldown period, ignore touch transitions
                if (animating || (Date.now() - lastTransitionTime < scrollCooldown)) {
                    return;
                }

                if (Math.abs(dy) > 100) { // swipe threshold 100 for premium controlled mobile feel
                    const activeSlide = slides[current];
                    if (activeSlide) {
                        // If swiping inside comparison table
                        if (e.target.closest('.cmp-table-wrap')) {
                            const scrollTop = activeSlide.scrollTop;
                            if (dy < 0 && scrollTop <= 5) {
                                // proceed
                            } else {
                                return; // let native touch momentum handle vertical scrolling inside slide
                            }
                        }
                        
                        const isScrollable = activeSlide.scrollHeight > activeSlide.clientHeight;
                        if (isScrollable) {
                            const scrollTop = activeSlide.scrollTop;
                            const maxScrollTop = activeSlide.scrollHeight - activeSlide.clientHeight;
                            if (dy > 0 && scrollTop < maxScrollTop - 5) return;
                            if (dy < 0 && scrollTop > 5) return;
                        }
                    }
                    goTo(dy > 0 ? current + 1 : current - 1);
                }
            }, { passive: true });

            /* Dots */
            dots.forEach(d => d.addEventListener("click", () => goTo(+d.dataset.i)));

            slides[0].classList.add("active");
            updateChip(0);

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
                document.getElementById("phase-modal-eyebrow").textContent = d.eyebrow;
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

            /* Hide tooltip on slide change */
            const origGoTo = goTo;
            /* (goTo is a closure, so we patch the wheel/keyboard/touch handlers via a wrapper flag) */
            window._tooltipHideOnNav = () => hideTooltip();

            setTimeout(wireTooltips, 400);

        })();
		
$(window).on('scroll', function() {
  // Run only on mobile
  if ($(window).width() <= 767) {  // adjust breakpoint if needed (e.g. 828px for iPhone)
    var footerTop = $('.footers').offset().top;
    var windowBottom = $(window).scrollTop() + $(window).height();

    // Check if footer is visible
    var footerVisible = windowBottom >= footerTop;

    // Check if slide s5 or s6 is active
    var fctaSlidesActive = $('.slide.s5').hasClass('active') || 
                           $('.slide.s6').hasClass('active') ||
                           $('.swiper-slide.s5').hasClass('swiper-slide-active') || 
                           $('.swiper-slide.s6').hasClass('swiper-slide-active') || 
                           $('.slick-slide.s5').hasClass('slick-active') ||
                           $('.slick-slide.s6').hasClass('slick-active');

    if (fctaSlidesActive && !footerVisible) {
      $('#fcta').show();   // show when s5 or s6 is active and footer not visible
    } else {
      $('#fcta').hide();  // hide otherwise
    }
  } else {
    // On desktop/laptop → always show
    $('#fcta').show();
  }
});



		
		
    </script>
</body>
<?php get_footer(); ?>