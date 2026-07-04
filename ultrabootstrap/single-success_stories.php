<?php
/**
 * The template for displaying all single success stories.
 *
 * @package ultrabootstrap
 */

get_header(); ?>

<?php

$stories_details = get_field('stories_details');
?>

<section id="banner" class="desk-ban">
	<div class="container-l-auto">
		<div class="story-row1">
			<div class="story-row1-content"></div>
		</div>
		<div class="story-row2">
			<div class="story-heading">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="story-ban-img2">
				<img src="/wp-content/uploads/2024/05/shp-triangle-1-1.svg" alt="">
			</div>			
		</div>
	</div>
</section>

<section id="banner" class="mobile-ban">
	<div class="container-l-auto">
		<div class="story-mob-ban">
			<div class="story-mob-1">
				<h2><?php the_title(); ?></h2>
				<div class="story-ban-img1"></div>
			</div>
			<div class="story-mob-2">
				<div class="story-ban-img2"><img src="/wp-content/uploads/2024/05/shp-triangle-2.png" alt=""> </div>
			</div>
		</div>				
	</div>
</section>

<section class="section-2">
	<div class="container">
		<div class="story-sec2-row">
			<div class="story-tags">
				
					<?php 
						$terms = get_the_term_list( $success_stories->ID, 'industry', '', ' ', '' );
						if ($terms) { ?>
							<div class="story-tag-blue"> <?php echo strip_tags($terms); ?> </div>
						<?php }
					?>  				
				
				<div class="story-tag-light">
					<?php 
						$terms = get_the_term_list( $success_stories->ID, 'story_services', '', ' ', '' );
						if ($terms) {
							echo strip_tags($terms);
						}
					?> 
				</div>
<!-- 				<?php 
						$terms = get_the_term_list( $success_stories->ID, 'partner', '', ' ', '' );
						if ($terms) { ?>
							<div class="story-tag-blue"> <?php echo strip_tags($terms); ?> </div>
						<?php }
					?>   -->
			</div>
			<div class="shareicons">
				<span style="padding-right:10px;">Share on:</span>
				<a href="https://www.linkedin.com/cws/share?url=<?php echo get_post_permalink(); ?>&title=<?php echo get_the_title(); ?>" target="_blank"><img src="/wp-content/uploads/2024/09/LinkedIn-Black.png"></a>
				<a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_post_permalink(); ?>&title=<?php echo get_the_title(); ?>" target="_blank">	<img src="/wp-content/uploads/2024/09/Facebook.png" alt="facebook"></a>
				<a href="https://twitter.com/share?text=<?php echo get_the_title(); ?>&url=<?php echo get_post_permalink(); ?>" target="_blank"><img src="/wp-content/uploads/2024/09/Twitter.png" alt="X"></a>
			</div>
		</div>
	</div> 
</section>

<?php if($stories_details['overview']){ ?>
<section class="story-sec">
	<div class="container">
			<div class="story-sub-title">
				<h2><?php echo $stories_details['overview']; ?></h2>
			</div>
			<div class="blog-description">
				<p><?php echo $stories_details['overview_details']; ?></p>
			</div>
	</div> 
</section>
<?php } ?>

<?php if($stories_details['perspective']){ ?>
<section class="story-sec">
	<div class="container">
			<div class="story-sub-title">
				<h2><?php echo $stories_details['perspective']; ?></h2>
			</div>
			<div class="blog-description" style="background-color: #E5E3CD; padding-top:3%;">
				<p><?php echo $stories_details['perspective_details']; ?></p>
			</div>
	</div> 
</section>
<?php } ?>

<?php if($stories_details['problem_statement']){ ?>
<section class="story-sec">
	<div class="container">
			<div class="story-sub-title">
				<h2><?php echo $stories_details['problem_statement']; ?></h2>
			</div>
			<div class="blog-description">
				<p><?php echo $stories_details['problem_statement_details']; ?></p>
			</div>
	</div> 
</section>
<?php } ?>

<?php if($stories_details['solution']){ ?>
<section class="story-sec">
	<div class="container">
			<div class="story-sub-title">
				<h2><?php echo $stories_details['solution']; ?></h2>
			</div>
			<div class="blog-description">
				<p><?php echo $stories_details['solution_details']; ?></p>
			</div>
	</div> 
</section>
<?php } ?>

<?php if($stories_details['impact']){ ?>
<section class="story-sec">
	<div class="container">
			<div class="story-sub-title">
				<h2><?php echo $stories_details['impact']; ?></h2>
			</div>
			<div class="result-row">
				<?php foreach ($stories_details['values'] as $key => $numval) { ?>
				<div class="result-num">
					<span class="counter plus"><?php echo $numval['number']; ?></span><span class="num-suf"><?php echo $numval['suffix']; ?></span>
<!-- 					<div class="counter plus"><?php echo $numval['number']; ?></div> -->
					<p><?php echo $numval['content']; ?></p>
				</div>
				<?php } ?>
			</div>
			<div class="blog-description">
				<p><?php echo $stories_details['impact_details']; ?></p>
			</div>
	</div> 
</section>
<?php } ?>

<?php if($stories_details['conclusion_title']){ ?>
<section class="story-sec">
	<div class="container">
			<div class="story-sub-title">
				<h2><?php echo $stories_details['conclusion_title']; ?></h2>
			</div>
			<div class="blog-description">
				<p><?php echo $stories_details['conclusion_details']; ?></p>
			</div>
	</div> 
</section>
<?php } ?>

<div class="container">
	<div class="sec-gap"></div>
</div>

<section class="form-sec">
	<div class="container">
		<div class="form-title">
			<h2>Talk to us to know how we can help you</h2>
		</div>
		<div class="form-wrapper">
			<?php echo do_shortcode('[contact-form-7 id="0f0d664" title="Contact form 1"]'); ?>
		</div>
		<div class="lines"></div>
	</div>
</section>

<?php get_footer(); ?>

<script>
  $(document).ready(function(){
    $('.counter').counterUp({
      delay: 10,
      time: 1200
    });
  });
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
