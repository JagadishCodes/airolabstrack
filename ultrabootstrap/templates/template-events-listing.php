<?php
/**
 * Template Name: Events Listing
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
</style>

<?php 
	$banner = get_field('banner');
	$up_events = get_field('upcoming_events');
	$up_eve = get_field('upcoming_events');
	$eve = $up_eve['upcoming_event'];
	$pass_eve = get_field('past_events');
	$p_eve = $pass_eve['past_event'];
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
					<img src="/wp-content/uploads/2024/06/img-banner_Airo-at-the-events.png" alt="Banner" class="img_width">
				</div>
			</div>
		</div>
		
		<div class="listing-banner-wrap mobile" style="background-image: url(<?php echo $banner['mobile_background_image']; ?>);">		
			<div class="row">
				<div class="col-md-5 col-sm-5 col-8 p-0 blurr-bg">
					<div class="banner-bg">
						<h1><?php echo $banner['heading']; ?></h1>
						<p><?php echo $banner['sub_heading']; ?></p>
					</div>
				</div>
				<div class="col-md-7 col-sm-7 col-4 p-0"></div>			
			</div>
			<div class="row">
				<div class="col-md-5 col-sm-5 col-8 p-0"></div>						
				<div class="col-md-2 col-sm-2 col-4 p-0">
					<img src="/wp-content/uploads/2024/06/img-banner_Airo-at-the-events-mob.png" alt="Banner" class="img_width">
				</div>
			</div>
		</div>
		
	</div>
</section>

<div class="container">
	<div class="sec-gap"></div>
</div>

<section id="upcoming-events">
	<div class="container">
		<div class="eve-cnt-wrap">
			<h2><?php echo $up_eve['section_heading']; ?></h2>
		</div>
		<div class="br bl bt">
			<div class="row">
				<?php foreach ($eve as $key => $postinner) { ?>
				<div class="col-md-4 col-sm-4 col-xs-12 p-0">
					<div class="single-eve-wrap">
						<!-- <a href="<?php echo get_the_permalink($postinner->ID); ?>">
							<img src="<?php echo get_the_post_thumbnail_url($postinner->ID); ?>" alt="<?php echo $postinner->post_title; ?>" class="img_width">
						</a> -->
						<img src="<?php echo get_the_post_thumbnail_url($postinner->ID); ?>" alt="<?php echo $postinner->post_title; ?>" class="img_width">
						<div class="eve-list-tags">	
							<?php 
									$terms = get_the_term_list( $postinner->ID, 'events_category', '', ' ', '' );
									if ($terms) {
										$sub_catt = strip_tags($terms);
									}
								?>
							<div class="eve-list-cat <?php if($sub_catt == "Summit" ){ echo "tag-orange-bg"; } else{ echo "tag-blue-bg";} ?>">
								<?php echo $sub_catt; ?>
							</div>					
						</div>		
						<?php $details = get_field('event_details', $postinner->ID); ?>
							<div class="eve-list-date">
								<?php echo $details['event_date']; 
									if($details['timings']){ ?>
										- <?php echo $details['timings'];
									} ?>
							</div>
						<h4>					
					    	<!-- <a href="<?php echo get_the_permalink($postinner->ID); ?>"><?php echo get_the_title($postinner->ID); ?></a> -->
					    	<?php echo get_the_title($postinner->ID); ?>
				    	</h4>
					</div>
				</div>		
				<?php } ?>
			</div>			
		</div>		
	</div>
</section>


<div class="container">
	<div class="sec-gap"></div>
</div>

<section id="upcoming-events">
	<div class="container">
		<div class="eve-cnt-wrap bb">
			<h2><?php echo $pass_eve['section_heading']; ?></h2>
		</div>
			
		<div class="filter-part">
			<span>Filter <img src="/wp-content/uploads/2024/05/div-Icn.png"> </span>
			
		
                        <?php
                        // Define taxonomies
                        $taxonomies = array(                            
                            'events_category' => 'Categories',
							 'event_year' => 'Year'
                        );

                        // Loop through taxonomies
                        foreach ($taxonomies as $taxonomy => $label) :
                            ?>
                            <div class="filter-cat">
                    <div class="">
                            <div class="select-dropdown">
                                <button href="#" role="button" data-value="" data-name="<?php echo $label; ?>" class="select-dropdown__button">
                                    <span><?php echo $label; ?></span>                                    
                                </button>
                                <ul class="select-dropdown__list <?php echo $taxonomy;?>">
                                    <?php
                                    // Get terms for current taxonomy
                                    $terms = get_terms(array(
                                        'taxonomy' => $taxonomy,
                                        'hide_empty' => false,
                                    ));

                                    // Loop through terms
                                    foreach ($terms as $term) :
                                        ?>
                                        <li data-taxname="<?php echo esc_attr($taxonomy); ?>" data-value="<?php echo esc_attr($term->slug); ?>" class="select-dropdown__list-item eventitem"><?php echo esc_html($term->name); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                             </div>
                    
                </div>
                        <?php endforeach; ?>
                          <div class="filter-cat"><div class=""><a href="#" class="clearsearch clearevent">X</a></div></div>
                   
		</div>
		
		<div class="br bl bt">
			<div class="row eventlists">
				<?php $c=0; foreach ($p_eve as $key => $pastinner) { $c++; ?>
				<div class="col-md-4 col-sm-4 col-xs-12 p-0 news-content">
					<div class="single-eve-wrap">
						<!-- <a href="<?php echo get_the_permalink($pastinner->ID); ?>"><img src="<?php echo get_the_post_thumbnail_url($pastinner->ID); ?>" alt="<?php echo $pastinner->post_title; ?>" class="img_width"></a> -->
						<img src="<?php echo get_the_post_thumbnail_url($pastinner->ID); ?>" alt="<?php echo $pastinner->post_title; ?>" class="img_width">
						<div class="eve-list-tags">	
							<?php 
									$terms = get_the_term_list( $pastinner->ID, 'events_category', '', ' ', '' );
									if ($terms) {
										$sub_cat = strip_tags($terms);
									}
								?>
							<div class="eve-list-cat <?php if($sub_cat == "Summit" ){ echo "tag-orange-bg"; } else{ echo "tag-blue-bg";} ?>">
								<?php echo $sub_cat; ?>
							</div>					
						</div>	
						<?php $details = get_field('event_details', $pastinner->ID); ?>
							<div class="eve-list-date">
								<?php echo $details['event_date']; ?>
							</div>
						<h4>					
					    	<!-- <a href="<?php echo get_the_permalink($pastinner->ID); ?>"><?php echo get_the_title($pastinner->ID); ?></a> -->
					    	<?php echo get_the_title($pastinner->ID); ?>
				    	</h4>
					</div>
				</div>		
				<?php if($c==6){ break;} } ?>
			</div>
            <?php if(count($p_eve) > 6){?>
             <div class="view-more">
           	  <a id="loadMore" class="moresevent" style="color:#0D004A;" href="#" data-paged="2">View more</a>
        </div>			
        <?php } ?>
		</div>	
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

<div class="container">
	<div class="sec-gap"></div>
</div>



<?php get_footer(); ?>