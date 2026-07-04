<?php
/**
 * The template for displaying all single news articles.
 *
 * @package ultrabootstrap
 */

get_header(); ?>


<?php
$news = get_field('news_details');
?>

<section class="job-desc">
	<div class="container-l-auto">
		<div class="desktop">
			<div class="pr-banner-bg p-0"></div>
			<div class="job-title-wrapper">
				<div class="job-title-inner">
					<h2><?php echo $post->post_title; ?></h2>
				</div>
				<div class="pr-banner-title-spacer">
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
					<div class="pr-banner-title-spacer">
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
								<?php 
									$terms = get_the_term_list( $news->ID, 'news_categories', '', ' ', '' );
										if ($terms) {
											$sub_cat = strip_tags($terms);
										}
									?>
								<div class="category-tag <?php if($sub_cat == "Press release"){ echo "tag-pr-cat"; } elseif($sub_cat == "In the media"){ echo "tag-media-cat";}elseif($sub_cat == "In the news"){ echo "tag-news-cat";  }elseif($sub_cat == "Awards and accolades"){ echo "tag-award-cat";  }  ?>">
									<?php echo $sub_cat; ?>
								</div>	
								<div class="pr-date">
									<?php echo get_the_date(); ?>
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
						<div class="col-12 col-sm-12 col-md-12 p-0">
							<div class="pr-content-border">
								<?php if($post_content){ ?>
								<div class="pr-cnt-wrap">
									<?= $post_content; ?>
								</div>
								<?php } ?>
								<?php if($news['about_pr_title']){ ?>
								<div class="pr-cnt-wrap">
									<h3><?= $news['about_pr_title'];?></h3>
								</div>
								<?php } ?>
								<?php if($news['pr_detail']){ ?>
								<div class="pr-cnt-wrap">
									<?= $news['pr_detail'];?>
								</div>
								<?php } ?>
								<?php if($news['about_airo_title']){ ?>
								<div class="pr-cnt-wrap">
									<h3><?= $news['about_airo_title'];?></h3>
								</div>
								<?php } ?>
								<?php if($news['airo_details']){ ?>
								<div class="pr-cnt-wrap">
									<?= $news['airo_details'];?>
								</div>
								<?php } ?>
							</div>								
						</div>
						
					</div>
				<?php
				endwhile; // End of the loop.
				?>
			</div>
	
</section>

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
		<div class="pr-related-posts">
			<div class="row">
				<div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 pr-content-border pr-rel">
					<div class="prev-post">
						<div class="prev-arrow">
							<?php previous_post_link( '%link', __( '<span class="meta-nav">&#10229;</span> ', 'twentyeleven' ) ); ?> 
						</div>
					<div class="prev-title">
						<h4><a href="<?php echo get_permalink($prev_post->ID); ?>"><?php echo $prev_post->post_title; ?></a></h4>
					</div>
				</div>
				</div>
				<div class="col-lg-6  col-sm-12 col-md-6 col-xs-12 pr-content-border pr-rel">
					<div class="next-post">
						<div class="next-title">
							<h4 class="next-title"><a href="<?php echo $permalink; ?>"><?php echo $next_post->post_title; ?></a></h4>
						</div>
					<div class="next-arrow">
					   <?php next_post_link( '%link', __( ' <span class="meta-nav">&#10230;</span>', 'twentyeleven' ) ); ?>
					</div>
				</div>
				</div>
			</div>	
			<?php if($news['contact_details']){ ?>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 p-0 br"></div>
				<div class="col-md-6 col-sm-6 col-xs-12 p-0 ">
					<div class="listing-sec2-content">
						<p><?= $news['contact_details'];?></p>
						<a href="mailto:<?= $news['contact_email'];?>"><?= $news['contact_email'];?></a>
					</div>
				</div>	
			</div>
			<?php } ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>