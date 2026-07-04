<?php

/**
 * Template Name: Success stories
 * The template used for displaying fullwidth page content in Publications page
 *
 * @package hitmag
 */

get_header(); ?>

<style>
.listing-cs-banner{
	background-position: center;
}
@media (max-width: 767.98px) {
.listing-cs-banner{
	background-position: bottom;
}		
}	
</style>


<?php
$banner = get_field('banner');
?>

<section id="banner">
    <div class="container-l-auto">
        <div class="listing-cs-banner">
            <div class="cs-row1">
                <div class="cs-detail1">
                    <h1><?php echo $banner['heading']; ?></h1>
                    <p id="listing-mob-detail" class="mobile-ban"><?php echo $banner['sub_heading']; ?></p>
                </div>
                <div class="cs-detail2"></div>
            </div>
            <div class="cs-row2">
                <div class="cs-detail3"></div>
                <div class="cs-detail4">
                    <p><?php echo $banner['sub_heading']; ?></p>
                </div>
                <div class="cs-detail5">
                    <img src="/wp-content/uploads/2024/06/img-banner_success-stories.png" alt="Banner" class="img_width desktop">
					 <img src="/wp-content/uploads/2024/06/img-banner_success-stories_Mob.png" alt="Banner" class="img_width mobile">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="sec-gap"></div>
</div>

<section class="sec2">
    <div class="container">
        <div class="filter-part">
            <span>Filter <img src="/wp-content/uploads/2024/05/div-Icn.png"> </span>

            <div class="filter-cat">
                <div class="">
                    <?php
                    // Define taxonomies
                    $taxonomies = array(
                        'industry' => 'Industry'
                    );

                    foreach ($taxonomies as $taxonomy => $label) :
                    ?>
                        <div class="select-dropdown" id="industry-dropdown">
                            <button href="#" role="button" data-value="" data-name="<?php echo $label; ?>" class="select-dropdown__button">
                                <span><?php echo $label; ?></span>
                            </button>
                            <ul class="select-dropdown__list industry">
                                <?php
                                // Get terms for current taxonomy
                                $terms = get_terms(array(
                                    'taxonomy' => $taxonomy,
                                    'hide_empty' => false,
                                ));

                                // Loop through terms
                                foreach ($terms as $term) :
                                ?>
                                    <li data-taxname="<?php echo esc_attr($taxonomy); ?>" data-value="<?php echo esc_attr($term->slug); ?>" class="select-dropdown__list-item storytiem"><?php echo esc_html($term->name); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="filter-cat">
                <div class="">
                    <?php
                    // Define taxonomies
                    $taxonomies1 = array(
                        'story_services' => 'Services'
                    );

                    foreach ($taxonomies1 as $taxonomy1 => $label1) :
                    ?>
                        <div class="select-dropdown" id="services-dropdown">
                            <button href="#" role="button" data-value="" data-name="<?php echo $label1; ?>" class="select-dropdown__button">
                                <span><?php echo $label1; ?></span>
                            </button>
                            <ul class="select-dropdown__list sservices">
                                <?php
                                // Get terms for current taxonomy
                                $terms1 = get_terms(array(
                                    'taxonomy' => $taxonomy1,
                                    'hide_empty' => false,
                                ));

                                // Loop through terms
                                foreach ($terms1 as $term1) :
                                ?>
                                    <li data-taxname="<?php echo esc_attr($taxonomy1); ?>" data-value="<?php echo esc_attr($term1->slug); ?>" class="select-dropdown__list-item storytiem"><?php echo esc_html($term1->name); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- <div class="filter-cat">
                <div class="">
                    <?php
                    
                    $taxonomies2 = array(
                        'partner' => 'Partners'
                    );

                    foreach ($taxonomies2 as $taxonomy2 => $label2) :
                    ?>
                        <div class="select-dropdown" id="partners-dropdown">
                            <button href="#" role="button" data-value="" data-name="<?php echo $label2; ?>" class="select-dropdown__button">
                                <span><?php echo $label2; ?></span>
                            </button>
                            <ul class="select-dropdown__list spartners">
                                <?php
                                
                                $terms2 = get_terms(array(
                                    'taxonomy' => $taxonomy2,
                                    'hide_empty' => false,
                                ));

                                
                                foreach ($terms2 as $term2) :
                                ?>
                                    <li data-taxname="<?php echo esc_attr($taxonomy2); ?>" data-value="<?php echo esc_attr($term2->slug); ?>" class="select-dropdown__list-item storytiem"><?php echo esc_html($term2->name); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div> -->
             <div class="filter-cat"><div class=""><a href="#" class="clearsearch clearstory">X</a></div></div>
        </div>
    </div>
</section>

<section class="sec3">
    <div class="container">
        <div class="featured-blog-cs storyfeature">
         <?php
            $args = array(
                'post_type' => 'success_stories',           // Specifies the post type to query, in this case, 'blog'
                'posts_per_page' => 1, 
				'orderby' => 'ID', 'order' => 'DESC'               // Sets the number of posts to retrieve per page. '-1' means all posts.
            );

            $query = new WP_Query($args);       // Creates a new instance of the WP_Query class with the specified arguments.

            if ($query->have_posts()) {         // Checks if there are posts in the query results.
                while ($query->have_posts()) {   // Loop through each post in the query results.
                    $query->the_post(); 
					$sub_cat = get_the_terms($post->ID, 'story_tag');
					         // Set up the current post in the loop.
            ?>
            
			<div class="featured-bcs-right">
			<a href="<?php echo get_the_permalink($post->ID); ?>" class="filter-data">	<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" class="img_width"></a>
			</div>
			<div class="featured-bcs-left bb">
				<div class="tags listing-tags">
					
										<?php
											// Get the tags associated with the current post
											if ($sub_cat) {
												
												foreach ($sub_cat as $tag) {
													echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
												}
												
											}
										?>
									
				</div>
				<a href="<?php echo get_the_permalink($post->ID); ?>"><h3 class="blog-title"><?php echo get_the_title();?></h3></a>
				<p>
					<?php echo get_the_excerpt($post->ID);?>
				</p>
			</div>
		<?php
                }

                // Restore original post data
                wp_reset_postdata();
            }
            ?>
        </div>
    </div>
</section>

<section class="sec4">
    <div class="container">
        <div class="all-cs-posts" id="success-stories-posts">
            <?php
            $args = array(
                'post_type' => 'success_stories',           // Specifies the post type to query, in this case, 'blog'
                'posts_per_page' => 6, 'offset' =>1,'orderby' => 'ID', 'order' => 'DESC'         // Sets the number of posts to retrieve per page. '-1' means all posts.
            );

            $query = new WP_Query($args);       // Creates a new instance of the WP_Query class with the specified arguments.

            if ($query->have_posts()) {         // Checks if there are posts in the query results.
                while ($query->have_posts()) {   // Loop through each post in the query results.
                    $query->the_post();          // Set up the current post in the loop.
            ?>
                    <div class="all-cs-impact-inner">
                        <div class="all-impact-right">
<!--                             <div class="tag-on-img">
                                <p>Manufacturing</p>
                            </div> -->
                            <!-- Output post thumbnail if it exists -->
                            <?php if (has_post_thumbnail()) { ?>
                               <a href="<?php echo get_permalink(); ?>">  <?php the_post_thumbnail('full', array('style' => 'width: 100%; height: auto;')); // You can specify the image size you want to use here 
								   ?></a>
                            <?php } ?>
                        </div>
                        <div class="tags listing-tags">
                            <?php
                           $tags = get_the_terms($post->ID, 'story_tag');// Get the tags associated with the current post
                            if ($tags) {
                               
                                foreach ($tags as $tag) {
                                    echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
                                }
                               
                            }
                            ?>
                        </div>
                        <a href="<?php echo get_permalink(); ?>">
                            <h3 class="blog-title"><?php echo get_the_title(); ?></h3>
                        </a>
                    </div>
            <?php
                }

                // Restore original post data
                wp_reset_postdata();
            }
            ?>
        </div>
        <div class="view-more">
            <a id="view-more" class="morestory" style="color:#0D004A;" href="#" data-paged="2">View more</a>
        </div>
    </div>
</section>

<div class="container desktop">
    <div class="sec-gap"></div>
</div>


<?php get_footer(); ?>