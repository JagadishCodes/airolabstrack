<?php
/**
 * The template for displaying all single events.
 *
 * @package ultrabootstrap
 */

get_header(); ?>

<?php
	$eve = get_field('event_details');
?>

<section class="job-desc">
	<div class="container-l-auto">
		<div class="desktop">
			<div class="eve-details-banner-bg p-0">
				<img src="/wp-content/uploads/2024/06/t-angle.png">
			</div>
			<div class="job-title-wrapper">
				<div class="job-title-inner">
					<h2><?php echo $post->post_title; ?></h2>
				</div>
				<div class="job-title-spacer">
					<img src="/wp-content/uploads/2024/05/shp-triangle-1.png" alt="">
				</div>
			</div>
		</div>		
		<div class="mobile">
			<div class="row">
				<div class="col-9 p-0">
					<div class="news-detail-title-wrapper">
						<div class="news-title-inner">
							<h2><?php echo $post->post_title; ?></h2>
						</div>						
					</div>
				</div>
				<div class="col-3 p-0">
					<div class="eve-details-banner-bg">
						<img src="/wp-content/uploads/2024/05/shp-triangle-1.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section-2">
	<div class="container">
		<div class="pr-sec2-row">
			<div class="story-tags">
				<div class="news-tags">	
					<div class="eve-cat">
						<?php 
							$terms = get_the_term_list( $events->ID, 'events_category', '', ' ', '' );
							if ($terms) {
								echo strip_tags($terms);
							}
						?>
					</div>						
				</div>	
			</div>
			<div class="share-icons">
				<span style="padding-right:10px;">Share on:</span>
				<a href="https://www.linkedin.com/cws/share?url=<?php echo get_post_permalink(); ?>&title=<?php echo get_the_title(); ?>" target="_blank"><img src="/wp-content/uploads/2024/09/LinkedIn-Black.png"></a>
				<a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_post_permalink(); ?>&title=<?php echo get_the_title(); ?>" target="_blank">	<img src="/wp-content/uploads/2024/09/Facebook.png" alt="facebook"></a>
				<a href="https://twitter.com/share?text=<?php echo get_the_title(); ?>&url=<?php echo get_post_permalink(); ?>" target="_blank"><img src="/wp-content/uploads/2024/09/Twitter.png" alt="X"></a>
			</div>
			
		</div>
	</div> 
</section>

<section id="single_post_content">
	<div class="container">
		<?php
				while (have_posts()) :
					the_post();

					$post_id = get_the_ID();
					$post_title = get_the_title();
					$post_content = get_the_content();
					$thumbnail_url = get_the_post_thumbnail_url($post_id);
					if ($thumbnail_url) {
						$image_url = $thumbnail_url;
					} else {
						$image_url = get_stylesheet_directory_uri() . "/images/image_placeholder.webp";
					}
				?>
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 p-0 bl bt">
				<img src="<?= $image_url; ?>" class="pt-40">
				<div class="pr-cnt-wrap">
					<?= $eve['event_date']; ?>
					<p><?= $eve['timings']; ?></p>
					<div>
						<?= $eve['address']; ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 p-0">
				<div class="prr-content-border">
					<div class="pr-cnt-wrap">
						<?= $eve['event_description']; ?>
					</div>
					<div class="pr-cnt-wrap">
						<?= $eve['register_info']; ?>
					</div>
					<a class="reg-event-button" href="#reg-event">
						<?= $eve['register_title']; ?>
					</a>
				</div>
			</div>
		</div>
		<?php
			endwhile; // End of the loop.
		?>
	</div>
</section>	
<div class="container">
	<div class="sec-gap"></div>
</div>

<section class="form-sec" id="reg-event">
	<div class="container">
		<div class="form-title">
			<h2><?= $eve['form_title']; ?></h2>
		</div>
		<div class="form-wrapper">
			<?php echo do_shortcode('[contact-form-7 id="0f0d664" title="Contact form 1"]'); ?>
		</div>
		<div class="lines"></div>
	</div>
</section>


<?php get_footer(); ?>