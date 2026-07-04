<?php
/**
 * The template for displaying all single blogs.
 *
 * @package ultrabootstrap
 */

get_header(); ?>

<style>
@media(max-width: 767.98px){
	.level-location-wrapper {
		display: none;
	}
}
</style>

<?php

$employment_type = get_field('employment_type');
$why_airo_content = get_field('why_airo_content');

?>


<section class="job-desc">
	<div class="container-l-auto">
		<!--<div class="level-location-wrapper">
			<div class="level-location">
				<h4 class="job-level-text">Experience Level : <?php echo get_the_term_list( $post->ID, 'job_level', '', ' ' ); ?></h4>
				<h4 class="job-level-text">Location : <?php echo get_the_term_list( $post->ID, 'job_location', '', ' ' ); ?></h4>
			</div>
		</div>-->
		<div class="job-title-wrapper">
			<div class="job-title-inner">
				<h2><?php echo $post->post_title; ?></h2>
			</div>
			<div class="job-title-spacer">
				<img src="/wp-content/uploads/2024/05/shp-triangle-1-1.svg" alt="">
			</div>
		</div>
	</div>
</section>

<section class="share-sec">
	<div class="container">
		<div class="share-main">
			<span>Share on :</span>
			<div class="post-share">		
				<a href="https://www.linkedin.com/cws/share?url=<?php echo get_post_permalink(); ?>&title=<?php echo get_the_title(); ?>" target="_blank"><img src="/wp-content/uploads/2024/09/LinkedIn-Black.png"></a>
				<a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_post_permalink(); ?>&title=<?php echo get_the_title(); ?>" target="_blank">	<img src="/wp-content/uploads/2024/09/Facebook.png" alt="facebook"></a>
				<a href="https://twitter.com/share?text=<?php echo get_the_title(); ?>&url=<?php echo get_post_permalink(); ?>" target="_blank"><img src="/wp-content/uploads/2024/09/Twitter.png" alt="X"></a>
			</div>
		</div>
	</div>
</section>

<section class="job-desc-sec">
	<div class="container-l-auto desktop">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-4 job-desc-left">
				<div class="job-left-content">
					<h5>Key Job Details</h5>
					<p><b>Role :</b> <?php echo get_the_term_list( $post->ID, 'job_role', '', ' ' ); ?></p>
					<p><b>Location :</b> <?php echo get_the_term_list( $post->ID, 'job_location', '', ' ' ); ?></p>
					<p><b>Level :</b> <?php echo get_the_term_list( $post->ID, 'job_level', '', ' ' ); ?></p>
					<p><b>Employment type :</b> <?php echo $employment_type; ?></p>
				</div>
				<div class="job-apply-wrapper">
					<a class="apply-btn" href="#job-apply">Apply</a>
				</div>
			</div>
			<div class="col-lg-9 col-md-8 col-sm-8 job-desc-right">
				<div class="job-content"><?php echo the_content(); ?></div>
				<div class="why-airo">
					<div class="why-airo-content"><?php echo $why_airo_content; ?></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mobile">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-4 job-desc-left">
				<div class="job-left-content">
					<h5>Key Job Details</h5>
					<p><b>Role :</b> <?php echo get_the_term_list( $post->ID, 'job_role', '', ' ' ); ?></p>
					<p><b>Location :</b> <?php echo get_the_term_list( $post->ID, 'job_location', '', ' ' ); ?></p>
					<p><b>Level :</b> <?php echo get_the_term_list( $post->ID, 'job_level', '', ' ' ); ?></p>
					<p><b>Employment type :</b> <?php echo $employment_type; ?></p>
				</div>
				<div class="job-apply-wrapper">
					<a class="apply-btn" href="#job-apply">Apply</a>
				</div>
			</div>
			<div class="col-lg-9 col-md-8 col-sm-8 job-desc-right">
				<div class="job-content"><?php echo the_content(); ?></div>
				<div class="why-airo">
					<div class="why-airo-content"><?php echo $why_airo_content; ?></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="job-form-sec" id="job-apply">
	<div class="container desktop">
		<div class="form-title">
			<h2>Apply for the <?php echo $post->post_title; ?> role</h2>
		</div>
		<div class="form-wrapper">
			<?php echo do_shortcode('[contact-form-7 id="891b4a6" title="Career Details"]'); ?>
		</div>
		<div class="lines bt"></div>
	</div>
	<div class="container mobile">
		<div class="form-title">
			<h2>Apply for the <?php echo $post->post_title; ?> role</h2>
		</div>
		<div class="form-wrapper">
			<?php echo do_shortcode('[contact-form-7 id="891b4a6" title="Career Details"]'); ?>
		</div>
		<div class="lines bt"></div>
	</div>
</section>




<?php get_footer(); ?>