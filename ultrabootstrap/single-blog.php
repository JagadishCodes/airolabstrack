<?php
/**
 * The template for displaying all single blogs.
 *
 * @package ultrabootstrap
 */

get_header(); ?>

<?php

$blog_details = get_field('blog_details');
?>

<section id="banner" class="desk-ban">
	<div class="container-l-auto">
		<div class="blog-row1">
			<div class="blog-row1-content"></div>
		</div>
		<div class="blog-row2">
			<div class="blog-heading">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="blog-ban-img2">
				<img src="/wp-content/uploads/2024/05/shp-triangle-1.svg" alt="">
			</div>
		</div>
	</div>
</section>

<section id="banner" class="mobile-ban">
	<div class="container-l-auto">
		<div class="blog-mob-ban">
			<div class="blog-mob-1">
				<h2><?php the_title(); ?></h2>
				<div class="blog-ban-img1"></div>
			</div>
			<div class="blog-mob-2">
				<div class="blog-ban-img2"> <img src="/wp-content/uploads/2024/05/shp-triangle-2.svg" alt=""> </div>
			</div>
		</div>
	</div>
</section>

<section class="section-2">
	<div class="container">
		<div class="blog-sec2-row">
			<div class="blog-tags">
				
					<?php 
						$terms = get_the_term_list( $blogs->ID, 'blog_tags', '', ' ', '' );
						if ($terms) { ?>
						<div class="blog-tag-blue">
							<?php echo strip_tags($terms);?> 
						</div>	| &nbsp;
						<?php }
					?> 
				
				<div>
					<p style="color: black;"> 10 minute read</p>
				</div>
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

<section class="detail-section">
	<div class="container">
		<div class="blog-detail-row">
			<div class="author-details">
				<?php if($blog_details['author_name']){ ?>
				<div class="author-title">
					<h3>Author:</h3>
				</div>
				<?php } ?>
				<img src="<?php echo $blog_details['author_image']; ?>" alt="">				
				<?php
				$author_name = trim($blog_details['author_name']);

				$modal_map = [
					'Dev Singh' => 'm1',
					'Sayak Das' => 'm3',
				];

				if (!empty($author_name)) {

					if (isset($modal_map[$author_name])) {
						echo '<p class="author-name"><a href="/about-us/our-leadership-team/#' . $modal_map[$author_name] . '">' . esc_html($author_name) . '</a></p>';
					} else {
						echo '<p class="author-name">' . esc_html($author_name) . '</p>';
					}

				}
				?>
				<p class="author-designation"><?php echo $blog_details['author_designation']; ?></p>
			</div>
			<div class="blog-details bordder-line">
					<?php if($blog_details['overview']){ ?>
					<div>
						<div class="blog-sub-title">
							<h2><?php echo $blog_details['overview']; ?></h2>
						</div>
						<div class="blog-description">
							<p><?php echo $blog_details['overview_description']; ?></p>
						</div>
					</div>
					<?php } ?>
					<?php if($blog_details['challenges_title']){ ?>
					<div>
						<div class="blog-sub-title">
							<h2><?php echo $blog_details['challenges_title']; ?></h2>
						</div>
						<div class="blog-description">
							<p><?php echo $blog_details['challenges_description']; ?></p>
						</div>
					</div>
					<?php } ?>
					<?php if($blog_details['strategy_title']){ ?>
					<div>
						<div class="blog-sub-title">
							<h2><?php echo $blog_details['strategy_title']; ?></h2>
						</div>
						<div class="blog-description">
							<p><?php echo $blog_details['strategy_description']; ?></p>
						</div>
					</div>
					<?php } ?>
					<?php if($blog_details['final_thought']){ ?>
					<div>
						<div class="final-thought">
							<h2><?php echo $blog_details['final_thought']; ?></h2>
						</div>
						<div class="blog-description">
							<p><?php echo $blog_details['final_description']; ?></p>
						</div>
					</div>
					<?php } ?>
					<?php if($blog_details['future_title']){ ?>
				 	<div>
						<div class="blog-sub-title">
							<h2><?php echo $blog_details['future_title']; ?></h2>
						</div>
						<div class="blog-description">
							<p><?php echo $blog_details['future_description']; ?></p>
						</div>
					</div>
					<?php } ?>
					<?php if($blog_details['last_title']){ ?>
					<div>
					<div class="last-title">
						<div class="last-sub-title">
							<h2><?php echo $blog_details['last_title']; ?></h2>
						</div>
						<div class="last-description">
							<p><?php echo $blog_details['last_description']; ?></p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
$post_id = $post->ID;
	
		if($post_id != 5176) { ?>
<div class="container">
	<div class="lines"></div>
</div>

<section>
	<div class="container">
		<?php
			$prev_post = get_previous_post(); 
			$id = $prev_post->ID ;
			$permalink = get_permalink( $id );
		?>
		<?php 
			$next_post = get_next_post();
			$nid = $next_post->ID ;
			$permalink = get_permalink($nid);
		

		?>
	
		<div class="related-posts">
			<div class="prev-blog">
				<div class="blog-prev-arrow">
					<?php previous_post_link( '%link', __( '<span class="meta-nav">&#10229;</span> ', 'twentyeleven' ) ); ?> 
				</div>
				<div class="blog-prev-title">
					<h3><a href="<?php echo get_permalink($prev_post->ID); ?>"><?php echo $prev_post->post_title; ?></a></h3>
				</div>
			</div>
			<div class="next-blog">
				<div class="blog-next-title">
					<h3 class="next-title"><a href="<?php echo $permalink; ?>"><?php echo $next_post->post_title; ?></a></h3>
				</div>
				<div class="blog-next-arrow">
				   <?php next_post_link( '%link', __( ' <span class="meta-nav">&#10230;</span>', 'twentyeleven' ) ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="lines"></div>
</div>
<?php } ?>
<?php get_footer(); ?>
