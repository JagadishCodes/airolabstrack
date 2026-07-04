<?php
/**
 * Template Name: Thank you
 * The template used for displaying fullwidth page content in Publications page
 *
 * @package hitmag
 */

get_header(); ?>

<style>
section.footers {
    display: none;
}
.thanku-button .mybtn {
	border: 2px solid;
    margin: 0 15px;
}	
.thanku-button .mybtn:hover {
	border: 2px solid #0D004A;
}	
</style>

<section class="thank-you">
	<div class="thanku-title">
		<h2>
			Thank you <br>for reaching out!
		</h2>
	</div>
	<div class="line-spacer"></div>
	<p class="thanku-content">
		We have received your message and appreciate your interest in our solutions. Our experts will be in touch shortly. In the meantime, explore our success stories for helpful information.
	</p>
	<div class="thanku-button">
		<a href="/success-stories/" class="mybtn">See our success stories</a>
		<a href="javascript:history.go(-1)" class="mybtn">Navigate back to the page</a>
	</div>
	
</section>

<?php get_footer(); ?>