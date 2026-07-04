<?php
/**
 * Template Name: News Listing
 * The template used for displaying fullwidth page content in Publications page
 *
 * @package hitmag
 */

get_header(); ?>

<style>

#loadMore {
  display: block;
  transition: .3s;
}

.noContent {
  pointer-events: none;
}
	.featured-impact-right img{
		height: 100%;
	}
</style>

<?php 
	$banner = get_field('banner');
	$sec2 = get_field('section_2');	
	$form = get_field('pre_footer_form');
	$newsletter = get_field('newsletter');
?>

<section id="listing-banner">
	<div class="container-l-auto">
		<div class="listing-banner-wrap desktop" style="background-image: url(<?php echo $banner['desktop_background_image']; ?>);">		
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-12 p-0 blurr-bg">
					<div class="banner-bg">
						<h1><?php echo $banner['heading']; ?></h1>
					</div>
				</div>
				<div class="col-md-7 col-sm-7 col-xs-12 p-0"></div>			
			</div>
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-12 p-0"></div>
				<div class="col-md-5 col-sm-5 col-xs-12 p-0 blurr-bg">
					<div class="listing-banner-subhead-wrap">
						<p><?php echo $banner['sub_heading']; ?></p>
					</div>
				</div>			
				<div class="col-md-2 col-sm-2 col-xs-12 p-0">
					<img src="/wp-content/uploads/2024/06/img-banner_news.png" alt="Banner" class="img_width">
				</div>
			</div>
		</div>
		
		<div class="listing-banner-wrap mobile" style="background-image: url(<?php echo $banner['mobile_background_image']; ?>);">		
			<div class="row">
				<div class="col-md-9 col-sm-9 col-8 p-0 blurr-bg">
					<div class="banner-bg h-500 p-25">
						<h1><?php echo $banner['heading']; ?></h1>
						<p><?php echo $banner['sub_heading']; ?></p>
					</div>
<!-- 					<div class="listing-banner-subhead-wrap">
						
					</div> -->
				</div>
				<div class="col-md-3 col-sm-3 col-4 p-0 pos-rel">
					<img src="/wp-content/uploads/2024/06/img-banner_Mobile_News.png" alt="Banner" class="img_width">
				</div>			
			</div>			
		</div>
	</div>
</section>


<section id="listing-sec2">
	<div class="container-l-auto">
		<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12 p-0 bordder-line"></div>
			<div class="col-md-7 col-sm-7 col-xs-12 p-0 bordder-line">
				<div class="listing-sec2-content">
					<p><?php echo $sec2['content']; ?></p>
					<a href="mailto:<?php echo $sec2['email_id']; ?>"><?php echo $sec2['email_id']; ?></a>
				</div>
			</div>	
		</div>
	</div>
</section>


<section class="sec2">
	<div class="container">
		<div class="filter-part">
			<span>Filter <img src="/wp-content/uploads/2024/05/div-Icn.png"> </span>
		
		<div class="filter-cat">
                    <div class="">
                        <?php
                        // Define taxonomies
                        $taxonomies = array(                            
                            'news_categories' => 'Categories'
                        );

                        // Loop through taxonomies
                        foreach ($taxonomies as $taxonomy => $label) :
                            ?>
                            <div class="select-dropdown">
                                <button href="#" role="button" data-value="" data-name="<?php echo $label; ?>" class="select-dropdown__button">
                                    <span><?php echo $label; ?></span>                                    
                                </button>
                                <ul class="select-dropdown__list">
                                    <?php
                                    // Get terms for current taxonomy
                                    $terms = get_terms(array(
                                        'taxonomy' => $taxonomy,
                                        'hide_empty' => false,
                                    ));

                                    // Loop through terms
                                    foreach ($terms as $term) :
                                        ?>
                                        <li data-taxname="<?php echo esc_attr($taxonomy); ?>" data-value="<?php echo esc_attr($term->slug); ?>" class="select-dropdown__list-item newsitem"><?php echo esc_html($term->name); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                        
                    </div>
                </div>
                 <div class="filter-cat"><div class=""><a href="#" class="clearsearch clearnews">X</a></div></div>
		</div>
	</div>
</section>

<section class="sec3">
	<div class="container">
		<div class="featured-impact-inner">	
			<div class="filter-data-main row" style="width:100%">
							
					<?php
					$i=1;
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$insights_post = new WP_Query( array( 'post_type' => 'news', 'order' => 'DESC',  'paged' => $paged,  'orderby' => 'publish_date','posts_per_page' => '7')); ?>					
					<?php $j=1; 
					 $total_posts = $insights_post->found_posts;
					 $total_pages = $insights_post->max_num_pages;
					
					 while ( $insights_post->have_posts() ) : $insights_post->the_post(); 					
					 $nw_cat = get_the_term_list($insights_post->ID, 'news_categories');
					
					?>

					<?php if($j==1){ ?>	
					<div class="featured-impact-right p-0 bl">				
						<a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" class="img_width"></a>
					</div>
					<div class="featured-impact-left">
						<div class="news-tags">	
							<?php 
								$terms = get_the_term_list($insights_post->ID, 'news_categories', '', ' ', '' );
									if ($terms) {
										$sub_cat = strip_tags($terms);
									}
								?>
							<div class="category-tag <?php if($sub_cat == "Press release"){ echo "tag-pr-cat"; } elseif($sub_cat == "In the media"){ echo "tag-media-cat";}elseif($sub_cat == "In the news" || $sub_cat == "Leadership Talk Series"){ echo "tag-news-cat";  }elseif($sub_cat == "Awards and accolades"){ echo "tag-award-cat";  }  ?>">
								<?php echo $sub_cat; ?>
							</div>	
							<div class="pr-date">
								<?php echo get_the_date(); ?>
							</div>
						</div>
						<a href="<?php echo get_the_permalink(); ?>"><h3 class="blog-title"><?php echo the_title(); ?></h3></a>
						<p><?php echo get_the_excerpt(); ?>
						</p>
					</div>
					<?php } ?>	

					<?php if($j>1){ ?>		
					<div class="col-md-4 col-sm-4 col-xs-12 p-0 news-content">
						<div class="news_single_box">
							<div class="news-tags">	
								<?php 
									$terms = get_the_term_list( $insights_post->ID, 'news_categories', '', ' ', '' );
										if ($terms) {
											$sub_cat = strip_tags($terms);
										}
									?>
								<div class="category-tag <?php if($sub_cat == "Press release"){ echo "tag-pr-cat"; } elseif($sub_cat == "In the media"){ echo "tag-media-cat";}elseif($sub_cat == "In the news" || $sub_cat == "Leadership Talk Series"){ echo "tag-news-cat";  }elseif($sub_cat == "Awards and accolades"){ echo "tag-award-cat";  }  ?>">
									<?php echo $sub_cat; ?>
								</div>	
								<div class="pr-date">
									<?php echo get_the_date(); ?>
								</div>
							</div>						
							<a href="<?php echo get_the_permalink(); ?>"><h3 class="blog-title"><?php echo the_title(); ?></h3></a>	
							<div class="case_study_desc">
								<?php echo get_the_excerpt(); ?>
							</div>

						</div>	
					</div>		
					<?php } $j++; 
						endwhile; wp_reset_postdata();	
					?>		
				</div>			
			
		</div>
        <?php if($total_pages > 1){?>
		<div class="view-more">
            <a id="loadMore" class="morenews" style="color:#0D004A;" href="#" data-paged="2">View more</a>
        </div>
        <?php }?>

	</div>
</section>

<div class="container">
	<div class="sec-gap"></div>
</div>


<section id="listing-newsletter">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12 p-0 bordder-line">
				<img src="<?php echo $newsletter['image']; ?>" alt="Newsletter" class="img_width">
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12 p-0 bordder-line">
				<div class="listing-sec2-content">
					<h2><?php echo $newsletter['title']; ?></h2>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="container">
	<div class="sec-gap"></div>
</div>


<section id="news-newsletter">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 p-0 bordder-line">
				<div class="news-letter-wrap">
					<?php 
					$cod = $newsletter['form_shortcode'];
					echo do_shortcode($cod); ?>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- <section id="pre-footer">
	<div class="container">
		<div class="pre-footer-wrap">
			<img src="<?php echo get_field('image'); ?>" class="img_width">
		</div>
	</div>
</section> -->






<?php get_footer(); ?>