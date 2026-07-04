<?php
/**
 * Template Name: Join Us
 * The template used for displaying fullwidth page content in Publications page
 *
 * @package hitmag
 */

get_header(); 

$banner = get_field('banner');

?>

<section class="join-us-bnr">
	<div class="container-l-auto desktop">
		<div class="row">
			<div class="join-us-title-wrapper bl">
				<h1><?php echo $banner['heading']; ?></h1>
			</div>
			<div class="join-us-img-wrapper">
				<img src="<?php echo $banner['desktop_image'];?>" alt="banner">
			</div>
			<div class="join-us-spacer"></div>
		</div>
		<div class="row">
			<div class="join-us-color-wrapper"></div>
			<div class="join-us-content-wrapper bl br">
				<div><p><?php echo $banner['sub_heading']; ?></p></div>
			</div>
			<div class="join-img2-wrapper">
				<img src="/wp-content/uploads/2024/04/img-banner-mask-8.png" alt="">
			</div>	
		</div>
		<div class="lines bt"></div>
	</div>
	<div class="container-l-auto mobile">
		<div class="sec-heading-wrap">
			<h1><?php echo $banner['heading']; ?></h1>
		</div>	
		<img src="<?php echo $banner['mobile_image'];?>" alt="banner" class="img_width">
		<div class="lines bt"></div>
	</div>
</section>

<section class="join-us-filter">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-4 filter-left bl">
				<div class="filter-wrapper">
					<h5>
						Filter
						<svg xmlns="http://www.w3.org/2000/svg" width="17.832" height="16" viewBox="0 0 17.832 16">
						  <g id="div-Icn" transform="translate(-23.249)">
						    <path id="Path_9494" data-name="Path 9494" d="M28.5,35.067a2.723,2.723,0,0,0-1.837-1.53v-6.87a.667.667,0,1,0-1.333,0v6.867a3.09,3.09,0,0,0-.467.16,2.747,2.747,0,0,0,.467,5.167v2.473a.667.667,0,0,0,1.333,0v-2.47a2.741,2.741,0,0,0,1.837-3.8ZM27.323,36.7a1.417,1.417,0,1,1-1.91-1.79,1.38,1.38,0,0,1,.58-.127,1.42,1.42,0,0,1,1.293.834,1.4,1.4,0,0,1,.043,1.083Z" transform="translate(0 -26)" fill="#fff"/>
						    <path id="Path_9495" data-name="Path 9495" d="M65.5,35.067a2.723,2.723,0,0,0-1.837-1.53v-6.87a.667.667,0,1,0-1.333,0v6.867a3.089,3.089,0,0,0-.467.16,2.747,2.747,0,0,0,.467,5.167v2.473a.667.667,0,0,0,1.333,0v-2.47a2.741,2.741,0,0,0,1.837-3.8ZM64.323,36.7a1.417,1.417,0,1,1-1.91-1.79,1.39,1.39,0,0,1,.58-.127,1.42,1.42,0,0,1,1.293.834A1.4,1.4,0,0,1,64.323,36.7Z" transform="translate(-24.667 -26)" fill="#fff"/>
						    <path id="Path_9496" data-name="Path 9496" d="M45.468,29.333c-.1-.037-.2-.067-.3-.093V26.667a.667.667,0,0,0-1.333,0V29.25a2.75,2.75,0,0,0-.3,5.24c.1.037.2.067.3.093v6.75a.667.667,0,0,0,1.333,0V34.58a2.57,2.57,0,0,0,.467-.16,2.747,2.747,0,0,0-.163-5.087Zm.367,3.083A1.417,1.417,0,1,1,44.508,30.5a1.44,1.44,0,0,1,.5.09,1.407,1.407,0,0,1,.78.743h0A1.4,1.4,0,0,1,45.834,32.417Z" transform="translate(-12.335 -26)" fill="#fff"/>
						  </g>
						</svg>
					</h5>
				</div>
                <div class="filter-cat">
                    <div class="">
                        <?php
                        // Define taxonomies
                        $taxonomies = array(
                            'job_role' => 'Role',
                            'job_level' => 'Level',
                            'job_location' => 'Location'
                        );

                        // Loop through taxonomies
                        foreach ($taxonomies as $taxonomy => $label) :
                            ?>
                            <div class="select-dropdown">
                                <button href="#" role="button" data-value="" data-name="<?php echo $label; ?>" class="select-dropdown__button jobfilter">
                                    <span><?php echo $label; ?></span>
                                    <img src="/wp-content/uploads/2024/04/div-icnArrow.svg" alt="">
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
                                        <li data-taxname="<?php echo esc_attr($taxonomy); ?>" data-value="<?php echo esc_attr($term->slug); ?>" class="select-dropdown__list-item jobitem" data-term="<?php echo $term->slug;?>" data-tax="<?php echo $taxonomy;?>"><?php echo esc_html($term->name); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="filter-cat clear-job">
                <a href="#" class="clearsearchjob clearjob">Clear Filter</a>
                </div>
 
				<div class="filter-search-wrapper mobile">
					<form role="search" method="get" >
				        <fieldset>
                        <input type="text" id="search_query" name="search_query" placeholder="Search for roles">
                        <!-- <input type="text" id="search_query" name="search_query" placeholder="Search for roles"> -->

				           
				        </fieldset>
				    </form>
				</div>
			</div>
			<div class="col-lg-9 col-md-8 col-sm-8 filter-right bl br">
				<div class="filter-search-wrapper desktop">
					<form role="search" method="get"  id="searchform">
				        <fieldset>
				            <!-- <input type="text" name="role" value="<?php //the_search_query(); ?>" placeholder="Search for roles"> -->
                            <input type="text" id="search_query" name="search_query" placeholder="Search for roles">
				           
				        </fieldset>
				    </form>
				</div>
                
                <div class="filter-data-main">
                    <div class="row join-show-default">
                        <?php 
                            $args = array(
                                'post_type'=> 'job',
                                'orderby'      => 'ID',
                                'post_status'  => 'publish',
                                'order'        => 'DESC',
                                'posts_per_page' => 1000, // this will retrieve all the posts that are published 
                                // 'paged' => $paged
                            );
                            $result = get_posts( $args );
                            $query = new WP_Query($args);


                            // $total_posts = count($result); // Get total number of posts
                            $total_posts = $query->found_posts; // Get total number of published posts for the 'job' post type


                            foreach($result as $index => $job):
                                // Get terms for job role, level, and location taxonomies
                                $job_roles = wp_get_post_terms($job->ID, 'job_role');
                                $job_levels = wp_get_post_terms($job->ID, 'job_level');
                                $job_locations = wp_get_post_terms($job->ID, 'job_location');
                        ?>
                        <div class="col-lg-4 col-md-4 col-12 p-0 filter-data-wrapper">
                            <a href="<?php echo get_the_permalink($job->ID);?>" class="filter-data">
                                <div class="job-content-top">
                                    <?php //if(!empty($job_roles)) : ?>
                                        <h4><?php echo $job->post_title; ?></h4>
                                    <?php //endif; ?>
                                    <?php if(!empty($job_levels)) : ?>
                                        <p><?php echo $job_levels[0]->name; ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="job-content-bottom">
                                    <?php if(!empty($job_locations)) : ?>
                                        <p><?php echo $job_locations[0]->name; ?></p>
                                    <?php endif; ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314" viewBox="0 0 29.657 11.314" class="arrow-red">
                                        <g id="div-icnArrow" transform="translate(-125.992 -0.208)">
                                            <line id="Line_19" data-name="Line 19" x2="24" transform="translate(125.992 5.562)" fill="none" stroke="red" stroke-width="1"></line>
                                            <path id="Path_9418" data-name="Path 9418" d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z" transform="translate(149.988 0.212) rotate(45)" fill="red"></path>
                                        </g>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314" viewBox="0 0 29.657 11.314" class="arrow-hover">
                                        <g id="div-icnArrow" transform="translate(-125.992 -0.208)">
                                            <line id="Line_19" data-name="Line 19" x2="24" transform="translate(125.992 5.562)" fill="none" stroke="#fff" stroke-width="1"></line>
                                            <path id="Path_9418" data-name="Path 9418" d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z" transform="translate(149.988 0.212) rotate(45)" fill="#fff"></path>
                                        </g>
                                    </svg>
                                </div>
                            </a>
                        </div>     
                            <?php endforeach; wp_reset_postdata();?>
                </div>
                <div class="pagination-wrapper allfor">
                    <div class="pagination-inner">
<!--                         <div class="page-numbers"><?php echo  '1/' . ceil($total_posts/3); ?></div> -->
                        <div class="pagination">
                            <button class="pagination-prev pagination-arrow" style="transform: rotate(90deg);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
                                    <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#FF0000"></path>
                                </svg>
                            </button>
                            <button class="pagination-next pagination-arrow" style="transform: rotate(-90deg);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
                                    <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#FF0000"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
        
                </div>
		</div>
	</div>
    </div>
    </div>
</section>



<?php get_footer(); ?>