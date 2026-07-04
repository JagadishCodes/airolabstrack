<?php
/**
 * Template Name: Blog Listing
 * The template used for displaying fullwidth page content in Publications page
 *
 * @package hitmag
 */

get_header(); ?>

<style>
.blog-inner img{
	display: block;
}
</style>	

<?php 
	$banner = get_field('banner');	
?>

<section id="banner">
	<div class="container-l-auto">
		<div class="listing-blog-banner">
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
					<img src="/wp-content/uploads/2024/06/img-banner-Blogs-and-Articles-2.png" alt="Banner" class="img_width desktop">
					<img src="/wp-content/uploads/2024/06/img-banner_blog-mob.png" alt="Banner" class="img_width mobile">
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
		
			<!-- <div class="filter-cat">
            	<div class="">
                	<div class="select-dropdown">
                    	<button href="#" role="button" id="blogtype" data-value="" data-name="Type" class="select-dropdown__button">
                        	<span>Type</span>                                    
                        </button>
                         <ul class="select-dropdown__list blogtype">
                         	<li data-taxname="<?php echo esc_attr($taxonomy2); ?>" data-value="blog" class="select-dropdown__list-item blogitem">Blogs</li>
							 <li data-taxname="<?php echo esc_attr($taxonomy2); ?>" data-value="white-paper" class="select-dropdown__list-item blogitem">Whitepapers</li>
                         </ul>
                    </div>
                 </div>
             </div>	 -->
		<div class="filter-cat">
                    <div class="">
                        <?php
                        // Define taxonomies
                        $taxonomies = array(                            
                              'blog_services' => 'Industry'
                        );
                        
                        foreach ($taxonomies as $taxonomy => $label) :
                            ?>
                            <div class="select-dropdown ">
                                <button href="#" role="button" id="industry" data-name="<?php echo $label; ?>" data-value="" class="select-dropdown__button">
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
                                        <li data-taxname="<?php echo esc_attr($taxonomy); ?>" data-value="<?php echo esc_attr($term->slug); ?>" class="select-dropdown__list-item blogitem"><?php echo esc_html($term->name); ?></li>
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
                              'blog_tags' => 'Services'
                        );
                        
                        foreach ($taxonomies1 as $taxonomy1 => $label1) :
                            ?>
                            <div class="select-dropdown ">
                                <button href="#" role="button" id="services" data-name="<?php echo $label1; ?>" data-value="" class="select-dropdown__button">
                                    <span><?php echo $label1; ?></span>                                    
                                </button>
                                <ul class="select-dropdown__list services">
                                    <?php
                                    // Get terms for current taxonomy
                                    $terms1 = get_terms(array(
                                        'taxonomy' => $taxonomy1,
                                        'hide_empty' => false,
                                    ));

                                    // Loop through terms
                                    foreach ($terms1 as $term1) :
                                        ?>
                                        <li data-taxname="<?php echo esc_attr($taxonomy); ?>" data-value="<?php echo esc_attr($term1->slug); ?>" class="select-dropdown__list-item blogitem"><?php echo esc_html($term1->name); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
			 <div class="filter-cat"><div class=""><a href="#" class="clearsearch clearblog">X</a></div></div>
	
		</div>
	</div>
</section>

<section class="sec3">
	<div class="container fpost">
		<div class="featured-blog-cs">
			 <?php
			 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				 $args = array(
				'post_type' => 'blog',           // Specifies the post type to query, in this case, 'blog'
				'posts_per_page' => 1, 
				'post_status' => 'publish',
				'order' => 'DESC',  'paged' => $paged,  'orderby' => 'date',         // Sets the number of posts to retrieve per page. '-1' means all posts.
					);

				$query = new WP_Query($args);       // Creates a new instance of the WP_Query class with the specified arguments.
               $total_pages = $query->max_num_pages;
				if ($query->have_posts()) {         // Checks if there are posts in the query results.
					while ($query->have_posts()) {   // Loop through each post in the query results.
						$query->the_post(); 
						$sub_cat = get_the_terms($post->ID, 'blog_tags');         // Set up the current post in the loop.
						?>
            <div class="featured-blog-cs">
			<div class="featured-bcs-right bl">
			<a href="<?php echo get_the_permalink($post->ID); ?>" class="filter-data">	<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" class="img_width"></a>
			</div>
			<div class="featured-bcs-left">
				<div class="tags">
					
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

<section class="blog-sec">
	<div class="container">
		<div class="blog-main listing-blog-main">
			 <?php
			
			$latest_post = get_posts(array(
    'post_type'      => 'blog',
    'posts_per_page' => 1,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'fields'         => 'ids'
));
			
			
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'           => 'blog',
    'posts_per_page'      => 6,
    'orderby'             => 'date',
    'order'               => 'DESC',
	'post_status' => 'publish',
    'paged'               => $paged,
    'ignore_sticky_posts' => 1,
	'post__not_in'        => $latest_post,

    'date_query' => array(
        'relation' => 'OR',
        array(
            'before'    => '2026-02-01',
            'inclusive' => false,
        ),
        array(
            'after'     => '2026-02-28',
            'inclusive' => false,
        ),
    ),
);

$query = new WP_Query($args); 

			

				$query = new WP_Query($args);       // Creates a new instance of the WP_Query class with the specified arguments.
               $total_pages = $query->max_num_pages;
				if ($query->have_posts()) {         // Checks if there are posts in the query results.
					while ($query->have_posts()) {   // Loop through each post in the query results.
						$query->the_post();  
						$sub_cat = get_the_terms($post->ID, 'blog_tags');        // Set up the current post in the loop.
						?>
								<div class="blog-inner">
									<div class="tags">
										<?php
											$tags = get_the_terms($post->ID, 'blog_tags'); // Get the tags associated with the current post
											if ($tags) {
												
												foreach ($tags as $tag) {
													echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
												}
												
											}
										?>
									</div>
									<!-- Output post title with link to detail page -->
							<a href="<?php echo get_permalink(); ?>"><h3 class="blog-title"><?php echo get_the_title(); ?></h3></a>
							<!-- Output post content or excerpt -->
							<p><?php the_content(); // or use get_the_excerpt() for excerpt ?></p>
							<!-- Output post thumbnail if it exists -->
							<?php if (has_post_thumbnail()) { ?>
								<div class="post-thumbnail">
									<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('full'); // You can specify the image size you want to use here ?></a>
								</div>
							<?php } ?>
								</div>
							<?php
    }

    // Restore original post data
    wp_reset_postdata();
}
?>
 
			</div>
             <?php if($total_pages > $paged){?>
           <div class="view-more">
            <a id="loadMore" class="moreblogs" style="color:#0D004A;" href="#" data-paged="2">View more</a>
        </div>
        <?php }?>
<!-- 		<div class="sec-gap"></div> -->
	</div>
</section>

<div class="container">
	<div class="sec-gap"></div>
</div>

<section id="listing-newsletter">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12 p-0 bordder-line">
				<img src="/wp-content/uploads/2024/05/img-SectionBanner.png" alt="Newsletter" class="img_width">
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12 p-0 bordder-line">
				<div class="listing-sec2-content">
					<h2>Want our latest blogs and articles sent to your inbox?</h2>
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
					<?php echo do_shortcode('[contact-form-7 id="5655ca4" title="Newsletter"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>