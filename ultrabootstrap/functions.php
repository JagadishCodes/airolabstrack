<?php

/**
 * ultrabootstrap functions and definitions
 *
 * @package ultrabootstrap
 */

 remove_action('wp_head', 'wp_generator');

if (!function_exists('ultrabootstrap_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ultrabootstrap_setup()
	{
		/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ultrabootstrap, use a find and replace
	 * to change 'ultrabootstrap' to the name of your theme in all the template files
	 */
		load_theme_textdomain('ultrabootstrap', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
		add_theme_support('title-tag');

		/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'primary' => esc_html__('Primary Menu', 'ultrabootstrap'),
			'secondary' => esc_html__('Footer Menu', 'ultrabootstrap'),
		));

		/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
		add_theme_support('custom-logo', array(
			'height'      => 45,
			'width'       => 250,
			'flex-width' => true,
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('ultrabootstrap_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		add_theme_support(
			"custom-header",
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		);

		/*
	 * Enable support for Selective Refresh for Widgets.
	 * See https://make.wordpress.org/core/2016/11/10/visible-edit-shortcuts-in-the-customizer-preview/
	 */
		add_theme_support('customize-selective-refresh-widgets');

		add_editor_style();
	}
endif; // ultrabootstrap_setup
add_action('after_setup_theme', 'ultrabootstrap_setup');




/**
 * Enqueue scripts and styles.
 */
function ultrabootstrap_scripts()
{
	wp_enqueue_style('ultrabootstrap-bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('ultrabootstrap-fontawesome', get_template_directory_uri() . '/css/font-awesome.css');
	wp_enqueue_style('ultrabootstrap-googlefonts', '//fonts.googleapis.com/css?family=Roboto:400,300,700');
	wp_enqueue_style('ultrabootstrap-style', get_stylesheet_uri());


	if (is_rtl()) {
		wp_enqueue_style('ultrabootstrap-rtl', get_template_directory_uri() . '/css/rtl.css');
		wp_enqueue_style('ultrabootstrap-css-rtl', get_template_directory_uri() . '/css/bootstrap-rtl.css');
		wp_enqueue_script('ultrabootstrap-js-rtl', get_template_directory_uri() . '/js/bootstrap.rtl.js', array(), '1.0.0', true);
	}

	wp_enqueue_script('jquery');
	wp_enqueue_script('ultrabootstrap-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0.0', true);
	wp_enqueue_script('ultrabootstrap-scripts', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'ultrabootstrap_scripts');





/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if (!isset($content_width)) $content_width = 900;
function ultrabootstrap_content_width()
{
	$GLOBALS['content_width'] = apply_filters('ultrabootstrap_content_width', 640);
}
add_action('after_setup_theme', 'ultrabootstrap_content_width', 0);


function ultrabootstrap_filter_front_page_template($template)
{
	return is_home() ? '' : $template;
}
add_filter('front_page_template', 'ultrabootstrap_filter_front_page_template');





/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


function ultrabootstrap_widgets_init()
{

	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'ultrabootstrap'),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));

	register_sidebar(array(
		'name'          => __('Footer One', 'ultrabootstrap'),
		'id'            => 'footer-1',
		'description'   => __('Footer First Widget', 'ultrabootstrap'),
		'before_widget' => '<div id="%1$s" class="widget col-md-3 col-sm-6 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar(array(
		'name'          => __('Footer Two', 'ultrabootstrap'),
		'id'            => 'footer-2',
		'description'   => __('Footer Second Widget', 'ultrabootstrap'),
		'before_widget' => '<div id="%1$s" class="widget col-md-3 col-sm-6 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar(array(
		'name'          => __('Footer There', 'ultrabootstrap'),
		'id'            => 'footer-3',
		'description'   => __('Footer Third Widget', 'ultrabootstrap'),
		'before_widget' => '<div id="%1$s" class="widget col-md-3 col-sm-6 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar(array(
		'name'          => __('Footer Four', 'ultrabootstrap'),
		'id'            => 'footer-4',
		'description'   => __('Footer Four Widget', 'ultrabootstrap'),
		'before_widget' => '<div id="%1$s" class="widget col-md-3 col-sm-6 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
}
add_action('widgets_init', 'ultrabootstrap_widgets_init');


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/class.php';

//require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Register Custom Navigation Walker
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/**  
 * Load TGM plugin 
 */
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

/* Recommended plugin using TGM */
add_action('tgmpa_register', 'ultrabootstrap_register_plugins');
if (!function_exists('ultrabootstrap_register_plugins')) {
	function ultrabootstrap_register_plugins()
	{
		/**
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$plugins = array(
			array(
				'name'     => 'One Click Demo Import', // The plugin name.
				'slug'     => 'one-click-demo-import', // The plugin slug (typically the folder name).
				'required' => false, // If false, the plugin is only 'recommended' instead of required.
			),
			array(
				'name'               => 'Contact Form 7', // The plugin name.
				'slug'               => 'contact-form-7', // The plugin slug (typically the folder name).
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			),
		);
		/*
		 * Array of configuration settings. Amend each line as needed.
		 *
		 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
		 * strings available, please help us make TGMPA even better by giving us access to these translations or by
		 * sending in a pull-request with .po file(s) with the translations.
		 *
		 * Only uncomment the strings in the config array if you want to customize the strings.
		 */
		$config = array(
			'id'           => 'tgmpa',
			// Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',
			// Default absolute path to bundled plugins.
			'menu'         => 'tgmpa-install-plugins',
			// Menu slug.
			'parent_slug'  => 'themes.php',
			// Parent menu slug.
			'capability'   => 'edit_theme_options',
			// Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => true,
			// Show admin notices or not.
			'dismissable'  => true,
			// If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',
			// If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,
			// Automatically activate plugins after installation or not.
			'message'      => '',
			// Message to output right before the plugins table.
		);
		tgmpa($plugins, $config);
	}
}

/* Ultrabootstrap Demo importer */
add_filter('pt-ocdi/import_files', 'ultrabootstrap_import_demo_data');
if (!function_exists('ultrabootstrap_import_demo_data')) {
	function ultrabootstrap_import_demo_data()
	{
		return array(
			array(
				'import_file_name'             => __('Default Demo', 'ultrabootstrap'),
				'categories'                   => array('Default', 'Blog'),
				'local_import_file'            => trailingslashit(get_template_directory()) . 'demo/default/demo-content.xml',
				'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'demo/default/widgets.json',
				'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'demo/default/customizer.dat',
				'import_preview_image_url'     => 'https://phantomthemes.com/demo/ultrabootstrap/wp-content/themes/ultrabootstrap/screenshot.png',
				'preview_url'                  => 'https://phantomthemes.com/view?theme=UltraBootstrap',
			),
		);
	}
}
add_action('pt-ocdi/after_import', 'ultrabootstrap_after_import');
if (!function_exists('ultrabootstrap_after_import')) {
	function ultrabootstrap_after_import($selected_import)
	{
		$importer_name  = __('Default Demo', 'ultrabootstrap');

		if ($importer_name === $selected_import['import_file_name']) {
			//Set Menu
			$top_menu = get_term_by('name', 'Primary Menu', 'nav_menu');
			$footer_menu = get_term_by('name', 'Footer Menu', 'nav_menu');
			set_theme_mod(
				'nav_menu_locations',
				array(
					'primary' => $top_menu->term_id,
					'secondary' => $footer_menu->term_id,
				)
			);

			//Set Front page
			if (get_option('page_on_front') === '0' && get_option('page_for_posts') === '0') {
				$page = get_page_by_title('Home');
				//$blog = get_page_by_title( 'Blog');
				if (isset($page->ID)) {
					update_option('show_on_front', 'page');
					update_option('page_on_front', $page->ID);
					//update_option('page_for_posts', $blog->ID);
				}
			}
		}
	}
}
add_filter('pt-ocdi/disable_pt_branding', '__return_true');

function cc_mime_types($mimes)
{
	$mimes['json'] = 'application/json';
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


//Filter


// AJAX handler for fetching filtered posts
// Enqueue custom.js
function enqueue_custom_scripts()
{
	wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom1.js', array('jquery'), null, true);
	wp_localize_script('custom-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php'), 'ajax_nonce' => wp_create_nonce('ajax_nonce')));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function enqueue_slick_slider()
{
	wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
	wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_slick_slider');

// AJAX filter function
function filter_posts()
{
	check_ajax_referer('ajax_nonce', 'security');

	$taxonomy = $_POST['taxonomy'];
	$term = $_POST['term'];
     
	  $paged =  1;
	if($_REQUEST['page']){
		 $paged = $_REQUEST['page'];
	 }
	$first_page_posts = 7;
    $other_pages_posts = 6;
	if ($paged == 1) {
        $offset = 0;
        $posts_per_page = $first_page_posts;
    } else {
        $offset = $first_page_posts + (($paged - 2) * $other_pages_posts);
        $posts_per_page = $other_pages_posts;
    }
	
	$args = array(
		'post_type' => 'news',
		'posts_per_page' => $posts_per_page,
		  'offset' => $offset,
		  'paged' => $paged,
		  'order' => 'DESC', 
		  'orderby' => 'ID',
		'tax_query' => array(
			array(
				'taxonomy' => $taxonomy,
				'field' => 'slug',
				'terms' => $term
			)
		)
	);

	$posts = get_posts($args);
	$total_posts = count($posts); // Get total number of posts
   
	ob_start(); // Start output buffering
?>
	<div class="row">
		<?php $j=1; foreach ($posts as $post) :
			setup_postdata($post);
			$job_roles = wp_get_post_terms($post->ID, 'job_role');
			$job_levels = wp_get_post_terms($post->ID, 'job_level');
			$job_locations = wp_get_post_terms($post->ID, 'job_location');
		?>
			<?php if($j==1){ ?>	
					<div class="featured-impact-right p-0">				
						<a href="<?php echo get_the_permalink($post->ID); ?>"><img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>" class="img_width"></a>
					</div>
					<div class="featured-impact-left">
						<div class="news-tags">	
							<?php 
								$terms = get_the_term_list($post->ID, 'news_categories', '', ' ', '' );
									if ($terms) {
										$sub_cat = strip_tags($terms);
									}
								?>
							<div class="category-tag <?php if($sub_cat == "Press release"){ echo "tag-pr-cat"; } elseif($sub_cat == "In the media"){ echo "tag-media-cat";}elseif($sub_cat == "In the news"){ echo "tag-news-cat";  }elseif($sub_cat == "Awards and accolades"){ echo "tag-award-cat";  }  ?>">
								<?php echo $sub_cat; ?>
							</div>	
							<div class="pr-date">
								<?php echo get_the_date($post->ID); ?>
							</div>
						</div>
						<a href="<?php echo get_the_permalink($post->ID); ?>"><h3 class="blog-title"><?php echo the_title($post->ID); ?></h3></a>
						<p><?php echo get_the_excerpt($post->ID); ?>
						</p>
					</div>
					<?php } ?>	

					<?php if($j>1){ ?>		
					<div class="col-md-4 col-sm-4 col-xs-12 p-0 news-content">
						<div class="news_single_box">
							<div class="news-tags">	
								<?php 
									$terms = get_the_term_list( $post->ID, 'news_categories', '', ' ', '' );
										if ($terms) {
											$sub_cat = strip_tags($terms);
										}
									?>
								<div class="category-tag <?php if($sub_cat == "Press release"){ echo "tag-pr-cat"; } elseif($sub_cat == "In the media"){ echo "tag-media-cat";}elseif($sub_cat == "In the news"){ echo "tag-news-cat";  }elseif($sub_cat == "Awards and accolades"){ echo "tag-award-cat";  }  ?>">
									<?php echo $sub_cat; ?>
								</div>	
								<div class="pr-date">
									<?php echo get_the_date($post->ID); ?>
								</div>
							</div>						
							<a href="<?php echo get_the_permalink($post->ID); ?>"><h3 class="blog-title"><?php echo the_title($post->ID); ?></h3></a>	
							<div class="case_study_desc">
								<?php echo get_the_excerpt($post->ID); ?>
							</div>

						</div>	
					</div>		
					<?php } $j++; 
		 endforeach;
		wp_reset_postdata(); ?>
	
	</div>
<?php
	$output = ob_get_clean(); // Get buffered output
	echo $output; // Output the HTML

	wp_die();
}
add_action('wp_ajax_filter_posts', 'filter_posts');
add_action('wp_ajax_nopriv_filter_posts', 'filter_posts');






// AJAX filter function
function news_posts()
{
	check_ajax_referer('ajax_nonce', 'security');

	$taxonomy = $_POST['taxonomy'];
	$term = $_POST['term'];
    $paged =  1;
	if($_REQUEST['page']){
		 $paged = $_REQUEST['page'];
	 }
	$first_page_posts = 7;
    $other_pages_posts = 6;
	if ($paged == 1) {
        $offset = 0;
        $posts_per_page = $first_page_posts;
    } else {
        $offset = $first_page_posts + (($paged - 2) * $other_pages_posts);
        $posts_per_page = $other_pages_posts;
    }
	// Query posts based on taxonomy and term
	$args = array(
		'post_type' => 'news',
		'posts_per_page' => $posts_per_page,
		  'offset' => $offset,
		  'paged' => $paged,
		  'order' => 'DESC', 
		  'orderby' => 'ID',
		
	);
	
	
	 if ($taxonomy) {
        $tax_query[] = array(
            'taxonomy' => $taxonomy,
            'field'    => 'slug',
            'terms'    => $term,
        );
    }

  
    if ($taxonomy) {
        $args['tax_query'] = $tax_query;
    }

	
	$j=1; 
	$query1 = new WP_Query($args);
   
	$total_posts = $query1->found_posts;
	 // Get total number of posts
    $total_pages = $query1->max_num_pages;
	
?>
	
		<?php 
			$j=1; 
		if ($query1->have_posts()) {
		while ($query1->have_posts()) {
			$query1->the_post(); // Add this line to set up the post data
			
		
		?>
		
		<?php if($j==1 && $paged < 2){ ?>	
					<div class="featured-impact-right p-0 bb bl">				
						<a href="<?php echo get_the_permalink($post->ID); ?>"><img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>" class="img_width"></a>
					</div>
					<div class="featured-impact-left bb">
						<div class="news-tags">	
							
								<?php $sub_cat = get_the_terms($post->ID, 'news_categories');
											// Get the tags associated with the current post
											if ($sub_cat) {
												$class="";
												foreach ($sub_cat as $tag) {$class="";
													 if($tag->name == "Press release"){ $class = "tag-pr-cat"; } elseif($tag->name == "In the media"){ $class = "tag-media-cat";}elseif($tag->name == "In the news" || $tag->name == "Leadership Talk Series"){ $class = "tag-news-cat";  }elseif($tag->name == "Awards and accolades"){ $class = "tag-award-cat";  } 
													echo '<a class="'.$class.'" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
												}
												
											}
										?>
										<div class="pr-date">
								<?php echo get_the_date($post->ID); ?>
							</div>
							</div>	
							
							<a href="<?php echo get_the_permalink($post->ID); ?>"><h3 class="blog-title"><?php echo the_title($post->ID); ?></h3></a>
						<p><?php echo get_the_excerpt($post->ID); ?></p>
						</div>
						
					</div>
		
					<?php } ?>
                     <?php if($paged > 1 && $j==1){?>
                    ~
                    <?php }?>	

					<?php if($j>1 || $paged > 1){ ?>	
					<div class="col-md-4 col-sm-4 col-xs-12 p-0 news-content">
						<div class="news_single_box">
							<div class="news-tags">	
										<?php $sub_cat = get_the_terms($post->ID, 'news_categories');
											// Get the tags associated with the current post
											if ($sub_cat) {
												$class="";
												foreach ($sub_cat as $tag) { $class="";
													 if($tag->name == "Press release"){ $class = "tag-pr-cat"; } elseif($tag->name == "In the media"){ $class = "tag-media-cat";}elseif($tag->name == "In the news" || $tag->name == "Leadership Talk Series"){ $class = "tag-news-cat";  }elseif($tag->name == "Awards and accolades"){ $class = "tag-award-cat";  } 
													echo '<a class="'.$class.'" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
												}
												
											}
										?>
								
								<div class="pr-date">
									<?php echo get_the_date($post->ID); ?>
								</div>
							</div>						
							<a href="<?php echo get_the_permalink($post->ID); ?>"><h3 class="blog-title"><?php echo the_title($post->ID); ?></h3></a>	
							<div class="case_study_desc">
								<?php echo get_the_excerpt($post->ID); ?>
							</div>

						</div>	
					</div>		
			<?php } $j++;?>
		<?php } ?>
          ~
        <?php if($paged < $total_pages){ ?>
       
            <a id="loadMore" class="morenews" style="color:#0D004A;" href="#" data-paged="<?php echo $paged+1;?>">View more</a>
       <?php }else{ if($paged > 1){ echo 'no more content'; } }
       }else{
		   echo "<div class='no-match bl br bb' style='width:100%;text-align:center'> <h3>No matching post found</h3></div>~ ";
	   }
       
		wp_reset_postdata(); ?>
	
<?php
	

	wp_die();
}
add_action('wp_ajax_news_posts', 'news_posts');
add_action('wp_ajax_nopriv_news_posts', 'news_posts');


function filter_events_new()
{
	 check_ajax_referer('ajax_nonce', 'security');
	// echo "comming132456"; exit;
    $events_category = $_POST['events_category'];
	$event_year = $_POST['event_year'];

     $paged =  1;
	if($_REQUEST['page']){
		 $paged = $_REQUEST['page'];
	 }
	
    $posts_per_page = 6;
	$eventid = array();
	$pass_eve = get_field('past_events',910);
	$p_eve = $pass_eve['past_event'];
	if($p_eve){
	foreach($p_eve as $ven){
	  $eventid[] = $ven->ID;	
	 
	}
	}
	
	// Query posts based on taxonomy and term
	$args = array(
		'post_type' => 'events',
		'posts_per_page' => $posts_per_page,
		'order' => 'DESC',  
        'paged' => $paged,  'orderby' => 'ID',    
		'post__in' => $eventid
	);
	
	$tax_query = array('relation' => 'AND');

    if ($events_category) {
        $tax_query[] = array(
            'taxonomy' => 'events_category',
            'field'    => 'slug',
            'terms'    => $events_category,
        );
    }

    if ($event_year) {
        $tax_query[] = array(
            'taxonomy' => 'event_year',
            'field'    => 'slug',
            'terms'    => $event_year,
        );
    }

    if ($events_category || $event_year) {
        $args['tax_query'] = $tax_query;
    }


	$query1 = new WP_Query($args);
$total_posts = $query1->found_posts;
	//$total_posts = count($insights_post); // Get total number of posts
      $total_pages = $query1->max_num_pages;
	if ($query1->have_posts()) {
		while ($query1->have_posts()) {
			$query1->the_post(); // Add this line to set up the post data
			$details = get_field('event_details', get_the_ID());
			$eventid =get_the_ID();
			?>
			<div class="col-md-4 col-sm-4 col-xs-12 p-0 news-content">
					<div class="single-eve-wrap">
						<!-- <a href="<?php echo get_the_permalink($eventid); ?>"><img src="<?php echo get_the_post_thumbnail_url($eventid); ?>" alt="<?php echo get_the_title($eventid); ?>" class="img_width"></a> -->
						<img src="<?php echo get_the_post_thumbnail_url($eventid); ?>" alt="<?php echo get_the_title($eventid); ?>" class="img_width">
						<div class="eve-list-tags">	
							<?php 
									$terms = get_the_term_list( $eventid, 'events_category', '', ' ', '' );
									if ($terms) {
										$sub_cat = strip_tags($terms);
									}
								?>
							<div class="eve-list-cat <?php if($sub_cat == "Summit" ){ echo "tag-orange-bg"; } else{ echo "tag-blue-bg";} ?>">
								<?php echo $sub_cat; ?>
							</div>					
						</div>	
						<?php $details = get_field('event_details', $eventid); ?>
							<div class="eve-list-date">
								<?php echo $details['event_date']; ?>
							</div>
						<h4>					
					    	<!-- <a href="<?php echo get_the_permalink($eventid); ?>"><?php echo get_the_title($eventid); ?></a> -->
					    	<?php echo get_the_title($eventid); ?>
				    	</h4>
					</div>
				</div>
			<?php
		}
	?>
	 ~
        <?php if($paged < $total_pages){ ?>
       
            <a id="loadMore" class="moresevent" style="color:#0D004A;" href="#" data-paged="<?php echo $paged+1;?>">View more</a>
       <?php }else{ if($paged > 1){ ?>
       No More Content
       <?php } } 
	}else{
	 echo "~<div class='no-match bl br bb'> <h3>No matching post found</h3></div>";
	}
	wp_reset_postdata();
	wp_die();
}
add_action('wp_ajax_filter_events_new', 'filter_events_new');
add_action('wp_ajax_nopriv_filter_events_new', 'filter_events_new');




function filter_blog_posts()
{
	
	check_ajax_referer('ajax_nonce', 'security');

	$industry = $_POST['industry'];
	$services = $_POST['services'];
    $blogtype = $_POST['blogtype'];
	// Query posts based on taxonomy and term
	 $paged =  1;
	if($_REQUEST['page']){
		 $paged = $_REQUEST['page'];
	 }
	$first_page_posts = 7;
    $other_pages_posts = 6;

    // Determine the current page
   

    // Calculate the offset
    if ($paged == 1) {
        $offset = 0;
        $posts_per_page = $first_page_posts;
    } else {
        $offset = $first_page_posts + (($paged - 1) * $other_pages_posts);
        $posts_per_page = $other_pages_posts;
    }
	 if($blogtype==""){
	$blogtype = "blog";	 
	 }
if($blogtype == "blog") {
	$args = array(
		'post_type' => $blogtype,
		'posts_per_page' => $posts_per_page,
		'order' => 'DESC',   'offset' => $offset,
        'paged' => $paged,  'orderby' => 'date',
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
} else {
		$args = array(
		'post_type' => $blogtype,
		'posts_per_page' => $posts_per_page,
		'order' => 'DESC',   'offset' => $offset,
        'paged' => $paged,  'orderby' => 'ID',
      
	);
}

	
	$tax_query = array('relation' => 'AND');

    if ($industry) {
        $tax_query[] = array(
            'taxonomy' => 'blog_services',
            'field'    => 'slug',
            'terms'    => $industry,
        );
    }

    if ($services) {
        $tax_query[] = array(
            'taxonomy' => 'blog_tags',
            'field'    => 'slug',
            'terms'    => $services,
        );
    }

    if ($industry || $services) {
        $args['tax_query'] = $tax_query;
    }

	
	$j=1; 
	
	$query = new WP_Query($args);
	$total_posts = $query->found_posts;
	//$total_posts = count($insights_post); // Get total number of posts
      $total_pages = $query->max_num_pages;

?>
	
		<?php 
			$j=1; 
			if ($query->have_posts()) {
    while ($query->have_posts()) {
			  $query->the_post();
			 
			$sub_cat = get_the_terms($post->ID, 'blog_tags');
			
		?>
		
		<?php if($j==1 && $paged < 2){ ?>	
        
        <div class="featured-blog-cs">
			<div class="featured-bcs-right">
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
        
      
					
		 ~
					<?php } ?>	
                    <?php if($paged > 1 && $j==1){?>
                    ~
                    <?php }?>
                      
					<?php if($j>1 || $paged > 1){ ?>		
					<div class="blog-inner">
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
			<?php } 
			
			$j++;?>
		<?php }
		?>
        ~
        <?php if($paged < $total_pages){ ?>
       
            <a id="loadMore" class="moreblogs" style="color:#0D004A;" href="#" data-paged="<?php echo $paged+1;?>">View more</a>
       <?php }else{ if($paged > 1){?>
       No more Content
       <?php } }?>
        
        <?php
			}else{ echo "~<div class='no-match bl br bb' style='width:100%;text-align:center'> <h3>No matching post found</h3></div>~";}
		wp_reset_postdata(); ?>
        
        
	
<?php 
	

	wp_die();
	
  
?>
	
<?php
	
	


}
add_action('wp_ajax_filter_blog_posts', 'filter_blog_posts');
add_action('wp_ajax_nopriv_filter_blog_posts', 'filter_blog_posts');



function filter_jobs()
{
	
	check_ajax_referer('ajax_nonce', 'security');
     $search_query = $_POST['searchQuery']; 
	$job_role = $_POST['job_role'];
	$job_level = $_POST['job_level'];
    $job_location = $_POST['job_location'];
	// Query posts based on taxonomy and term
	$args = array(
		'post_type' => 'job',
		
	);
	if($search_query==""){
	$tax_query = array('relation' => 'AND');
	}
    if ($job_role) {
        $tax_query[] = array(
            'taxonomy' => 'job_role',
            'field'    => 'slug',
            'terms'    => $job_role,
        );
    }

    if ($job_level) {
        $tax_query[] = array(
            'taxonomy' => 'job_level',
            'field'    => 'slug',
            'terms'    => $job_level,
        );
    }
	  if ($job_location) {
        $tax_query[] = array(
            'taxonomy' => 'job_location',
            'field'    => 'slug',
            'terms'    => $job_location,
        );
    }
	
	if ($search_query) {
    $args1['tax_query'][] = array(
        'relation' => 'OR',
        array(
            'taxonomy' => 'job_role',
            'field'    => 'name',
            'terms'    => $search_query,
            'operator' => 'LIKE',
        ),
        array(
            'taxonomy' => 'job_level',
            'field'    => 'name',
            'terms'    => $search_query,
            'operator' => 'LIKE',
        ),
        array(
            'taxonomy' => 'job_location',
            'field'    => 'name',
            'terms'    => $search_query,
            'operator' => 'LIKE',
        ),
    );
}

    if ($job_role || $job_level || $job_location) {
        $args['tax_query'] = $tax_query;
    }

	
	
	if($search_query){
		// Step 1: Query for posts matching the search query (s)
$args1 = array(
    'post_type'      => 'job',
    's'              => $search_query,
    'posts_per_page' => -1, // Get all matching posts
);

$query1 = new WP_Query($args1);
$post_ids_1 = array(); // Initialize an array to store post IDs from the first query

if ($query1->have_posts()) {
    while ($query1->have_posts()) {
        $query1->the_post();
        $post_ids_1[] = get_the_ID(); // Add the post ID to the array
    }
    wp_reset_postdata(); // Reset post data after the loop
}

// Step 2: Get matching term IDs from the taxonomies
$matching_term_ids = array();
$taxonomies = array('job_role', 'job_level', 'job_location');

foreach ($taxonomies as $taxonomy) {
    $terms = get_terms(array(
        'taxonomy'   => $taxonomy,
        'name__like' => $search_query,
        'fields'     => 'ids',
    ));
    if (!is_wp_error($terms) && !empty($terms)) {
        $matching_term_ids = array_merge($matching_term_ids, $terms);
    }
}

// If there are matching terms, proceed with the second query
$post_ids_2 = array();
if (!empty($matching_term_ids)) {
    $args2 = array(
        'post_type' => 'job',
        'posts_per_page' => -1, // Get all matching posts
        'tax_query' => array(
            array(
                'taxonomy' => 'job_role',
                'field'    => 'term_id',
                'terms'    => $matching_term_ids,
                'operator' => 'IN',
            ),
            array(
                'taxonomy' => 'job_level',
                'field'    => 'term_id',
                'terms'    => $matching_term_ids,
                'operator' => 'IN',
            ),
            array(
                'taxonomy' => 'job_location',
                'field'    => 'term_id',
                'terms'    => $matching_term_ids,
                'operator' => 'IN',
            ),
            'relation' => 'OR',
        ),
    );

    $query2 = new WP_Query($args2);

    if ($query2->have_posts()) {
        while ($query2->have_posts()) {
            $query2->the_post();
            $post_ids_2[] = get_the_ID(); // Add the post ID to the array
        }
        wp_reset_postdata(); // Reset post data after the loop
    }
}


// Step 3: Merge the post IDs from both queries
$merged_post_ids = array_unique(array_merge($post_ids_1, $post_ids_2));
if(!empty($post_ids_2)){
// Step 4: Final query using the merged post IDs

$args_final = array(
    'post_type' => 'job',
    'post__in'  => $merged_post_ids,
    'posts_per_page' => -1, // Get all matching posts
);
}else{

$args_final = array(
    'post_type' => 'job',
    's' => $search_query,
    'posts_per_page' => -1, // Get all matching posts
);	
}

$query = new WP_Query($args_final);
		
		}else{
	$query = new WP_Query($args);	
	}
	
	
	
	$total_posts = $query->found_posts;
	//$total_posts = count($insights_post); // Get total number of posts


?>
	<div class="row join-show-default">
		<?php 
			$j=1; 
			if ($query->have_posts()) {
    while ($query->have_posts()) {
			  $query->the_post();
			 
		
			        $job_roles = get_the_terms($post->ID, 'job_role');
                                $job_levels = get_the_terms($post->ID, 'job_level');
                                $job_locations = get_the_terms($post->ID, 'job_location');
			
		?>
		<div class="col-lg-4 col-md-4 col-12 p-0 filter-data-wrapper">
                            <a href="<?php echo get_the_permalink($post->ID);?>" class="filter-data">
                                <div class="job-content-top">
                                    <?php //if(!empty($job_roles)) : ?>
                                        <h4><?php echo get_the_title($post->ID); ?></h4>
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
		
		<?php }
			}else{ echo "<div class='no-match bl br bb'> <h3>No matching post found</h3></div>";}
		wp_reset_postdata(); ?>
        
        </div>
        <div class="pagination-wrapper allfor">
                    <div class="pagination-inner">
<!--                         <div class="page-numbers"><?php if($total_posts > 0){ echo ($index + 1) . '/' . ceil($total_posts/3); }?></div> -->
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
	
<?php 
	

	wp_die();
	
  
?>
	
<?php
	
	


}
add_action('wp_ajax_filter_jobs', 'filter_jobs');
add_action('wp_ajax_nopriv_filter_jobs', 'filter_jobs');



function filter_stories()
{
	check_ajax_referer('ajax_nonce', 'security');

	$industry = $_POST['industry'];
	$services = $_POST['services'];
    $partners = $_POST['partners'];
	 $paged =  1;
	if($_REQUEST['page']){
		 $paged = $_REQUEST['page'];
	 }
	$first_page_posts = 7;
    $other_pages_posts = 6;

	$load_up_to_page = isset($_POST['load_up_to_page']) ? intval($_POST['load_up_to_page']) : 1;

	if ($load_up_to_page > 1) {
		$offset = 0;
		$posts_per_page = $first_page_posts + ($load_up_to_page - 1) * $other_pages_posts;
		$paged = 1; // force page 1 for layout matching
	} else {
		// Calculate the offset normally
		if ($paged == 1) {
			$offset = 0;
			$posts_per_page = $first_page_posts;
		} else {
			$offset = $first_page_posts + (($paged - 2) * $other_pages_posts);
			$posts_per_page = $other_pages_posts;
		}
	}

	// Query posts based on taxonomy and term
	$args = array(
		'post_type' => 'success_stories',
		 'offset' => $offset,
        'paged' => $paged,
		'posts_per_page' => $posts_per_page,
	);
	
	$tax_query = array('relation' => 'AND');

    if ($industry) {
        $tax_query[] = array(
            'taxonomy' => 'industry',
            'field'    => 'slug',
            'terms'    => $industry,
        );
    }

    if ($services) {
        $tax_query[] = array(
            'taxonomy' => 'story_services',
            'field'    => 'slug',
            'terms'    => $services,
        );
    }
	if ($partners) {
        $tax_query[] = array(
            'taxonomy' => 'partner',
            'field'    => 'slug',
            'terms'    => $services,
        );
    }

    if ($industry || $services) {
        $args['tax_query'] = $tax_query;
    }

	$query = new WP_Query($args);
	$total_posts = $query->found_posts;
    $total_pages = $query->max_num_pages;
	
?>
	<?php 
			$j=1; 
			if ($query->have_posts()) {
    while ($query->have_posts()) {
			  $query->the_post();
			 
			$sub_cat = get_the_terms($post->ID, 'story_tag');
			
		?>
		
		<?php if($j==1 && $paged < 2){ ?>	
        
        <div class="featured-blog-cs">
			<div class="featured-bcs-right">
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
        
        ~
					
		
					<?php } ?>	
                     <?php if($paged > 1 && $j==1){?>
                    ~
                    <?php }?>
                       
					<?php if($j>1 || $paged > 1){ ?>		
					<div class="all-cs-impact-inner">
                        <div class="all-impact-right">
<!--                             <div class="tag-on-img">
                                <p>Manufacturing</p>
                            </div> -->
                            <!-- Output post thumbnail if it exists -->
                            <?php if (has_post_thumbnail()) { ?>
                                <a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail('full', array('style' => 'width: 100%; height: auto;')); // You can specify the image size you want to use here 
									?></a>
                            <?php } ?>
                        </div>
                        <div class="tags listing-tags">
                            <?php
                            // Get the tags associated with the current post
                            if ($sub_cat) {
                              
                                foreach ($sub_cat as $tag) {
                                    echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
                                }
                                echo '';
                            }
                            ?>
                        </div>
                        <a href="<?php echo get_permalink(); ?>">
                            <h3 class="blog-title"><?php echo get_the_title(); ?></h3>
                        </a>
                    </div>		
			<?php } $j++;?>
		<?php   } 
			$has_more = false;
			if ($load_up_to_page > 1) {
				$total_loaded = $first_page_posts + ($load_up_to_page - 1) * $other_pages_posts;
				$has_more = ($total_posts > $total_loaded);
				$next_page = $load_up_to_page + 1;
			} else {
				$has_more = ($paged < $total_pages);
				$next_page = $paged + 1;
			}

			if($has_more){ ?>
       ~
            <a id="loadMore" class="morestory" style="color:#0D004A;" href="#" data-paged="<?php echo $next_page;?>">View more</a>
       <?php }else{  if($paged > 1 || $load_up_to_page > 1){ echo "~  No more Content";}}
			}else{ echo "~<div class='no-match bl br bb' style='text-align:center;width:100%'> <h3>No matching post found</h3></div>~ ";}
		wp_reset_postdata(); ?>
	
<?php 
	

	wp_die();
	
  

}
add_action('wp_ajax_filter_stories', 'filter_stories');
add_action('wp_ajax_nopriv_filter_stories', 'filter_stories');




// Enqueue scripts


// Custom search callback
function custom_search_callback()
{
	$search_query = $_POST['searchQuery']; // Corrected to match the name attribute of the input field

	// Perform search query based on $search_query
	$args = array(
		'post_type'      => 'job',
		'orderby'        => 'ID',
		'post_status'    => 'publish',
		'order'          => 'DESC',
		'posts_per_page' => 20, // this will retrieve all the posts that are published 
		's'              => $search_query, // Add search query parameter
	);

	$result = new WP_Query($args);

	$posts = get_posts($args);
	//$totlPost = new WP_Query($args);

	$total_posts = count($posts); // Get total number of posts

?>
	<?php
	if ($result->have_posts()) {
		while ($result->have_posts()) {
			$result->the_post();
			// Get terms for job role, level, and location taxonomies
			$job_roles     = wp_get_post_terms(get_the_ID(), 'job_role');
			$job_levels    = wp_get_post_terms(get_the_ID(), 'job_level');
			$job_locations = wp_get_post_terms(get_the_ID(), 'job_location');
	?>

			<div class="col-lg-4 col-md-4 col-sm-6 p-0 filter-data-wrapper">
				<a href="#" class="filter-data">
					<div class="job-content-top">

						<h4><?php echo get_the_title(); ?></h4>

						<?php if (!empty($job_levels)) : ?>
							<p><?php echo $job_levels[0]->name; ?></p>
						<?php endif; ?>
					</div>
					<div class="job-content-bottom">
						<?php if (!empty($job_locations)) : ?>
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

	<?php
		}
		wp_reset_postdata();
	} else {
		// No matching posts found
		echo '<p>No matching posts found.</p>';
	}
	?>
	

<?php

	wp_die();
}
add_action('wp_ajax_custom_search', 'custom_search_callback');
add_action('wp_ajax_nopriv_custom_search', 'custom_search_callback'); // If you want non-logged-in users to be able to use 


function filter_sc()
{
	try {
		error_log(json_encode($_POST));
		check_ajax_referer('ajax_nonce', 'security');
		$tax_queries = $_POST['tax_queries'];

		$taxonomy = $_POST['taxonomy'];
		$term = $_POST['term'];
		$post_type = isset($_POST['post_type']) ? $_POST['post_type'] : 'success_stories';
		$per_page = isset($_POST['per_page']) ? $_POST['per_page'] : 6;
		$page_number = isset($_POST['page_number']) ? $_POST['page_number'] : 1;

		// Query posts based on taxonomy and term
		$args = array(
			'post_type' => $post_type,
			'tax_query' => array(
				'relation' => 'AND', // Can be 'AND' or 'OR'
				//array(
				//	'taxonomy' => 'story_services',
				//	'field' => 'slug',
				//	'terms' => 'python'
				//),
				//array(
				//	'taxonomy' => 'industry',
				//	'field' => 'slug',
				//	'terms' => 'biopharma'
				//),
				// spread the tax_query array
				...$tax_queries
			),
			// add pagination to the query
			'numberposts' => $per_page,
			'paged' => $page_number,
		);
		error_log(json_encode($args));

		$posts = get_posts($args);
		$data =[];

		// add tags, permalink, & thumbnail
		for ($i = 0; $i < count($posts); $i++) {
			$postTags = [];
			$tags = get_the_tags($posts[$i]->ID);

			if ($tags) {
				foreach ($tags as $tag) {
					$postTags[] = ['name' => $tag->name, 'link' => get_tag_link($tag->term_id)];
				}
			}
			$data[] = [
				'title' => $posts[$i]->post_title,
				'permalink' => get_permalink($posts[$i]->ID),
				'thumbnail' => get_the_post_thumbnail($posts[$i]->ID, 'full', array('style' => 'width: 100%; height: auto;')),
				'tags' => $postTags
			];
		}

		return wp_send_json([
			'data' => $data,
			'total' => count($posts),
			'$args' => $args ,
			'$tax_query' => $tax_query ,
		]);
	} catch (\Throwable $th) {
		error_log($th->getMessage());
		return wp_send_json(['error' => $th->getMessage()]);
	}
}

add_action('wp_ajax_filter_sc', 'filter_sc');
add_action('wp_ajax_nopriv_filter_sc', 'filter_sc');

function enqueue_swiper_assets() {
  wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css' );
  wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_assets' );



// add_filter( 'rest_authentication_errors', function( $result ) {
//     if ( ! is_user_logged_in() ) {
//         return new WP_Error(
//             'rest_not_logged_in',
//             'REST API restricted to authenticated users.',
//             array( 'status' => 401 )
//         );
//     }
//     return $result;
// });


/**
 * Security hardening: Hide WordPress, plugin, and library versions
 */

/* -----------------------------------------------------------
 * 1. Remove WordPress version meta tag
 * ----------------------------------------------------------- */
remove_action('wp_head', 'wp_generator');

/* -----------------------------------------------------------
 * 2. Remove WordPress version from RSS feeds
 * ----------------------------------------------------------- */
add_filter('the_generator', '__return_empty_string');

/* -----------------------------------------------------------
 * 3. Remove version query strings from CSS & JS
 *    (Hides plugin, jQuery, Bootstrap versions)
 * ----------------------------------------------------------- */
function airolabs_remove_version_query_strings($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'airolabs_remove_version_query_strings', 9999);
add_filter('script_loader_src', 'airolabs_remove_version_query_strings', 9999);

/* -----------------------------------------------------------
 * 4. Disable WordPress version in REST API response headers
 * ----------------------------------------------------------- */
add_filter('rest_send_nocache_headers', function ($headers) {
    unset($headers['X-WP-Version']);
    return $headers;
});

/* -----------------------------------------------------------
 * 5. Remove WordPress version from login page
 * ----------------------------------------------------------- */
add_filter('login_headerurl', function () {
    return home_url();
});


// Add no-cache headers for security
add_action('send_headers', function () {
    header('Pragma: no-cache');
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Expires: 0');
});


add_action('init', function () {
    if (!headers_sent()) {
        foreach ($_COOKIE as $name => $value) {
            setcookie(
                $name,
                $value,
                [
                    'expires'  => time() + 3600,
                    'path'     => COOKIEPATH,
                    'domain'   => COOKIE_DOMAIN,
                    'secure'   => true,
                    'httponly' => true,
                    'samesite' => 'Lax'
                ]
            );
        }
    }
});



function custom_menu_page_breadcrumb_shortcode($atts) {
    global $post;
$post_type = get_post_type($post);
		

    $atts = shortcode_atts(
        array(
            'menu' => 'primary', // default location
        ),
        $atts,
        'breadcrumb'
    );

   $locations = get_nav_menu_locations();
$breadcrumb = '<nav class="breadcrumb">';

// Add Home only if not front page
if (!is_front_page()) {
    $breadcrumb .= '<a href="' . home_url() . '">Home</a> &raquo; ';
}

// ✅ Fix for Agentic AI Trinity Model page
if (is_page(5114)) {
    $breadcrumb .= '<a href="#">Capabilities</a> &raquo; ';
    $breadcrumb .= get_the_title($post->ID); 
    $breadcrumb .= '</nav>';
    $breadcrumb = preg_replace('/(Agentic AI Trinity(?: Model)?)(.{0,10}?)(©|&copy;|&#169;|&amp;copy;|&amp;#169;)/iu', '$1$2<sup>SM</sup>', $breadcrumb);
    $breadcrumb = preg_replace('/(Airo(?:’|\\\'|&rsquo;|&#8217;)s\\s+agenTriniti)\\s+(Package)/iu', '$1<sup>SM</sup> $2', $breadcrumb);
    return $breadcrumb;
}

$trail = [];

// Try menu-based breadcrumb first
if (isset($locations[$atts['menu']])) {
        $menu_id = $locations[$atts['menu']];
        $menu = wp_get_nav_menu_object($menu_id);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
		


        if ($menu_items) {
            $current_item = null;
            $current_url = rtrim(get_permalink($post->ID), '/');

            foreach ($menu_items as $item) {				
                $item_url = rtrim($item->url, '/');

                // Case 1: page/post menu item
                if ($item->object_id == $post->ID) {					
                    $current_item = $item;
                    break;
                }

                // Case 2: custom link pointing to this page
                if ($item_url !== '#' && $item_url === $current_url) {				
                    $current_item = $item;
                    break;
                }
            }

            if ($current_item) {
    // Walk up the parent chain in menu
    $parent_id = $current_item->menu_item_parent;
    while ($parent_id != 0) {
        foreach ($menu_items as $item) {
            if ($item->ID == $parent_id) {				
                // Rename "Services" to "Capabilities" in the trail
               
                $item_title = trim($item->title);				
                if ($item_title === 'Services') {
                    $item_title = 'Capabilities';
                    $item_url = home_url('/capabilities/');
                } elseif ($item_title === 'Airo AI Trinity Package') {
                    $item_title = 'Airo\'s agenTriniti Package';
                    $item_url = home_url('/capabilities/');
                } elseif ($item_title === 'Careers' || $item_title === 'Media' || $item_title === 'Insights') {
					$item_title = 'About Us';
					$item_url = home_url('/about-us/');
				}
				else {
                    $item_url = $item->url;
                }
				
                $trail[] = '<a href="' . $item_url . '">' . $item_title . '</a>';
                $parent_id = $item->menu_item_parent;
                break;
            }
        }
    }
    $trail = array_reverse($trail);
    if (!empty($trail)) {
        $breadcrumb .= implode(' &raquo; ', $trail) . ' &raquo; ';
    }
    $breadcrumb .= $current_item->title;
    $breadcrumb .= '</nav>';
    $breadcrumb = preg_replace('/(Agentic AI Trinity(?: Model)?)(.{0,10}?)(©|&copy;|&#169;|&amp;copy;|&amp;#169;)/iu', '$1$2<sup>SM</sup>', $breadcrumb);
    $breadcrumb = preg_replace('/(Airo(?:’|\\\'|&rsquo;|&#8217;)s\\s+agenTriniti)\\s+(Package)/iu', '$1<sup>SM</sup> $2', $breadcrumb);
    return $breadcrumb;
}
        }
    }

    // Fallback: use page parent hierarchy if menu match fails
    if (is_page() && $post) {		
        $ancestors = get_post_ancestors($post->ID);
        $ancestors = array_reverse($ancestors);
		// Fix breadcrumb for Agentic AI Trinity Model
		$skip_to_services = array(5114);

		if (in_array($post->ID, $skip_to_services)) {
			$breadcrumb .= '<a href="' . home_url('/capabilities/') . '">Capabilities</a> &raquo; ';
			$breadcrumb .= get_the_title($post->ID);
			$breadcrumb .= '</nav>';
			$breadcrumb = preg_replace('/(Agentic AI Trinity(?: Model)?)(.{0,10}?)(©|&copy;|&#169;|&amp;copy;|&amp;#169;)/iu', '$1$2<sup>SM</sup>', $breadcrumb);
			$breadcrumb = preg_replace('/(Airo(?:’|\\\'|&rsquo;|&#8217;)s\\s+agenTriniti)\\s+(Package)/iu', '$1<sup>SM</sup> $2', $breadcrumb);
			return $breadcrumb;
}
		
        foreach ($ancestors as $ancestor) {
		
			if(get_the_title($ancestor) == "Advanced AI Services") {
				if(($post->ID === 783) || ($post->ID === 789) ||   ($post->ID === 3395)) {
					$ancestorTitle = "Platforms";
				} 
				else if(($post->ID === 5431) || ($post->ID === 5114) ) {
					$ancestorTitle = "Airo's agenTriniti Package";
				} else if(($post->ID === 1232)) {
					$ancestorTitle = "Capabilities";
				}
				
				else {
				$ancestorTitle = "Airo's agenTriniti Package";
				}
			} elseif(get_the_title($ancestor) == "Foundational AI Services") {
				
				if(($post->ID === 3390) || ($post->ID === 3383) || ($post->ID === 3371) || ($post->ID === 779) || ($post->ID === 3395 ) || ($post->ID === 5243 )  || ($post->ID === 5326 ) || ($post->ID === 5312 ) ) {
					$ancestorTitle = "Premium Enterprise Applications";
				}  elseif(($post->ID === 3395) ) {
					$ancestorTitle = "Platform";
				}				
				else {
				$ancestorTitle = "Cloud and Infrastructure";
				}
			} elseif(get_the_title($ancestor) == "Our data partners") {
				$ancestorTitle = "AI Stack Partners";
			} elseif(get_the_title($ancestor) == "Services") {
    			$ancestorTitle = "Capabilities";
			} elseif(get_the_title($ancestor) == "Careers" || get_the_title($ancestor) == "Media" || get_the_title($ancestor) == "Insights") {
				$ancestorTitle = "About Us";
			} 
			else {				
				$ancestorTitle = get_the_title($ancestor);
			}
		
		
		if (strpos($ancestorTitle, 'Agentic AI Trinity') !== false || strpos($ancestorTitle, 'agenTriniti') !== false) {			
			 $trail[] = '<a href="/capabilities/airos-agentriniti-package/">' . $ancestorTitle . '</a>';
		} else {
					$trail[] = '<a href="#">' . $ancestorTitle . '</a>';
				}
       }
	
	 if (!empty($trail)) {
            $breadcrumb .= implode(' &raquo; ', $trail) . ' &raquo; ';
        }      

        $breadcrumb .= get_the_title($post->ID);
    }    
	if (in_array($post_type, ['blog', 'news', 'success_stories', 'job', 'careers', 'events'])) {
        // Use post type label as parent
        $post_type_obj = get_post_type_object($post_type);
   $archive_link = get_post_type_archive_link($post_type);
        if ($post_type_obj) {
			if($post_type==="success_stories") {
				$post_type = 'insights/success-stories/';
			} else if($post_type==="job") {
				$post_type = 'careers/join-us/';
			} else if($post_type==="careers") {
				$post_type = 'careers/life-at-airo/';
			}  else if($post_type==="news") {
				$post_type = 'media/airo-in-the-news/';
			}   else if($post_type==="events") {
				$post_type = 'media/airo-at-the-events/';
			}  
			
            $breadcrumb .= '<a href="' . esc_url($archive_link).'/'.$post_type.'">' .$post_type_obj->labels->singular_name . ' &raquo; ' . '</a>';
        }
			
		
		$breadcrumb .= get_the_title($post->ID);
      
    }
	

    $breadcrumb .= '</nav>';
    $breadcrumb = preg_replace('/(Agentic AI Trinity(?: Model)?)(.{0,10}?)(©|&copy;|&#169;|&amp;copy;|&amp;#169;)/iu', '$1$2<sup>SM</sup>', $breadcrumb);
    $breadcrumb = preg_replace('/(Airo(?:’|\\\'|&rsquo;|&#8217;)s\\s+agenTriniti)\\s+(Package)/iu', '$1<sup>SM</sup> $2', $breadcrumb);
    return $breadcrumb;
}
add_shortcode('breadcrumb', 'custom_menu_page_breadcrumb_shortcode');


// Remove empty <p> tags automatically
function remove_empty_p_tags($content) {
    // Remove <p> tags that contain only whitespace or &nbsp;
    $content = preg_replace('/<p>(\s|&nbsp;)*<\/p>/i', '', $content);
    return $content;
}
add_filter('the_content', 'remove_empty_p_tags', 20);




wpcf7_add_form_tag('job_title', 'render_custom_slug_mail_tag');

add_filter('wpcf7_special_mail_tags', 'cf7_custom_job_title_mail_tag', 10, 3);

function cf7_custom_job_title_mail_tag($output, $name, $html) {

    if ($name !== '_job_title' && $name !== 'job_title') {
        return $output;
    }

    if (!empty($_POST['_wpcf7_container_post'])) {
        $post_id = (int) $_POST['_wpcf7_container_post'];
        return get_the_title($post_id);
    }

if (!empty($_SERVER['HTTP_REFERER'])) {
    $path = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
    $parts = explode('/', trim($path, '/'));
    $slug = end($parts);

    // Remove trailing -number (e.g., project-manager-2 → project-manager)
    $slug = preg_replace('/-\d+$/', '', $slug);

    return ucwords(str_replace('-', ' ', $slug));
}

    return 'Not Found';
}

add_filter('the_content', 'replace_airo_text');
add_filter('the_title', 'replace_airo_text');
add_filter('widget_text', 'replace_airo_text');
add_filter('widget_text_content', 'replace_airo_text');
add_filter('get_the_excerpt', 'replace_airo_text');
add_filter('nav_menu_item_title', 'replace_airo_text');
add_filter('wp_nav_menu_items', 'replace_airo_text');

// ACF fields
add_filter('acf/format_value/type=text', 'replace_airo_text');
add_filter('acf/format_value/type=textarea', 'replace_airo_text');
add_filter('acf/format_value/type=wysiwyg', 'replace_airo_text');

function replace_airo_text($content) {
    $content = str_replace(
        'Airo Digital Labs',
        'Airolabs.ai',
        $content
    );
    return $content;
}



function sitemap_custom_styles() {
    if (is_page('sitemap')) { // or use page ID: is_page(123)
        echo '<style>
	.wsp-container h2 {
	padding: 0px 0px 20px;
					}
        </style>';
    }
}
add_action('wp_head', 'sitemap_custom_styles');

function allow_kml_uploads($mime_types){
    $mime_types['kml'] = 'application/vnd.google-earth.kml+xml';
    return $mime_types;
}
add_filter('upload_mimes', 'allow_kml_uploads');

// Fix for WordPress filetype check
function fix_kml_filetype($data, $file, $filename, $mimes) {
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    if ($ext === 'kml') {
        $data['ext'] = 'kml';
        $data['type'] = 'application/vnd.google-earth.kml+xml';
    }
    return $data;
}
add_filter('wp_check_filetype_and_ext', 'fix_kml_filetype', 10, 4);


function airo_global_text_replace($content) {
    $replacements = [
        'Airo Digital Labs' => 'Airolabs.ai',
        'Airo Digital labs' => 'Airolabs.ai',
        'AiRo' => 'Airo',
    ];
    foreach ($replacements as $search => $replace) {
        $content = str_replace($search, $replace, $content);
    }
    return $content;
}
add_filter('the_content', 'airo_global_text_replace');

function airo_global_title_replace($title, $id = null) {

    if (is_admin()) return $title;

    // ✅ Only for frontend main queries
    if (!in_the_loop() || !is_main_query()) return $title;

    // ✅ Only for post types you want
    if (!is_singular(['post', 'page', 'your_cpt'])) return $title;

    $replacements = [
         'Airo Digital Labs' => 'Airolabs.ai',
        'Airo Digital labs' => 'Airolabs.ai',
        'AiRo' => 'Airo',
    ];

    foreach ($replacements as $search => $replace) {
        $title = str_replace($search, $replace, $title);
    }

    return $title;
}

add_filter('the_title', 'airo_global_title_replace', 10, 2);



function fix_home_mega_menu_active_tab() {
    if (is_front_page()) {
        echo '<style>
        #mega-menu-wrap-primary #mega-menu-primary > li.mega-menu-tabbed 
          > ul.mega-sub-menu > li.mega-menu-item.mega-current-menu-item > a.mega-menu-link,
        #mega-menu-wrap-primary #mega-menu-primary > li.mega-menu-tabbed 
          > ul.mega-sub-menu > li.mega-menu-item.mega-current-menu-ancestor > a.mega-menu-link,
        #mega-menu-wrap-primary #mega-menu-primary > li.mega-menu-tabbed 
          > ul.mega-sub-menu > li.mega-menu-item.mega-current-page-ancestor > a.mega-menu-link,
        #mega-menu-wrap-primary #mega-menu-primary > li.mega-menu-tabbed 
          > ul.mega-sub-menu > li.mega-menu-item.mega-current_page_item > a.mega-menu-link {
            background: transparent !important;
        }
        </style>
        <script>
        document.addEventListener("DOMContentLoaded", function() {

            var blockList = [
                "mega-menu-item-3780",
                "mega-menu-item-589",
                "mega-menu-item-4594",
                "mega-menu-item-4595",
                "mega-menu-item-586",
                "mega-menu-item-587"
            ];

            function resetTabs() {
                blockList.forEach(function(id) {
                    var tab = document.getElementById(id);
                    if (!tab) return;
                    tab.classList.remove(
                        "mega-current-menu-item",
                        "mega-current_page_item",
                        "mega-current-menu-ancestor",
                        "mega-current-page-ancestor",
                        "mega-toggle-on"
                    );
                    var link = tab.querySelector("a.mega-menu-link");
                    if (link) {
                        link.removeAttribute("aria-current");
                        link.setAttribute("aria-expanded", "false");
                    }
                });

                var agenticTab = document.getElementById("mega-menu-item-5712");
                if (agenticTab) {
                    agenticTab.classList.add("mega-toggle-on");
                    var agenticLink = agenticTab.querySelector("a.mega-menu-link");
                    if (agenticLink) agenticLink.setAttribute("aria-expanded", "true");
                }
            }

            // Run on page load
            resetTabs();

            // Re-run every time Services menu opens
            var servicesMenu = document.querySelector(
                "#mega-menu-primary > li.mega-menu-item-has-children"
            );
            if (!servicesMenu) return;

            new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (
                        mutation.attributeName === "class" &&
                        servicesMenu.classList.contains("mega-toggle-on")
                    ) {
                        resetTabs();
                    }
                });
            }).observe(servicesMenu, { attributes: true });

        });
        </script>';
    }
}
add_action('wp_head', 'fix_home_mega_menu_active_tab');

add_filter('nav_menu_css_class', function($classes, $item, $args) {
    if (is_front_page() && in_array($item->ID, array(3780, 589, 4594, 4595, 586, 587))) {
        $classes = array_diff($classes, array(
            'current-menu-item',
            'current_page_item',
            'current-menu-ancestor',
            'current-page-ancestor',
        ));
    }
    return $classes;
}, 10, 3);

function replace_sm_superscript($title) {
    if (is_admin()) return $title;
    
    // Replace TrinitySM and Trinity℠ with styled superscript to match other pages
    $sup_style = 'font-size: 0.6em; position: relative; top: -0.8em; line-height: 0; vertical-align: baseline;';
    $title = str_replace('TrinitySM', 'Trinity<sup style="' . $sup_style . '">SM</sup>', $title);
    $title = str_replace('Trinity℠', 'Trinity<sup style="' . $sup_style . '">SM</sup>', $title);
    
    return $title;
}

add_filter('the_title', 'replace_sm_superscript', 10, 1);
add_filter('nav_menu_item_title', 'replace_sm_superscript', 10, 1);
add_filter('widget_title', 'replace_sm_superscript', 10, 1);
add_filter('megamenu_nav_menu_item_title', 'replace_sm_superscript', 10, 1);

/**
 * Custom Contact Form 7 Phone Number Validation based on Selected Region.
 */
add_filter('wpcf7_validate_tel*', 'custom_wpcf7_tel_validation_filter', 20, 2);
add_filter('wpcf7_validate_tel', 'custom_wpcf7_tel_validation_filter', 20, 2);

function custom_wpcf7_tel_validation_filter($result, $tag) {
    $name = $tag->name;
    $value = isset($_POST[$name]) ? trim($_POST[$name]) : '';

    if ($value !== '') {
        // Find the region value in POST. We check keys containing 'region' or 'country'
        $region = '';
        foreach ($_POST as $key => $val) {
            if (stripos($key, 'region') !== false || stripos($key, 'country') !== false) {
                $region = trim($val);
                break;
            }
        }

        // Clean the phone number to only contain digits
        $clean_phone = preg_replace('/[^0-9]/', '', $value);
        $phone_len = strlen($clean_phone);
        $is_valid = true;
        $error_message = '';

        if (!empty($region)) {
            $region_upper = strtoupper($region);
            if ($region_upper === 'US') {
                // US: exactly 10 digits (or 11 if starting with 1)
                if (!($phone_len === 10 || ($phone_len === 11 && strpos($clean_phone, '1') === 0))) {
                    $is_valid = false;
                    $error_message = 'Please enter a valid US phone number (10 digits).';
                }
            } elseif ($region_upper === 'UK') {
                // UK: 10 or 11 digits (or 12/13 if starting with 44)
                if ($phone_len < 10 || $phone_len > 13) {
                    $is_valid = false;
                } elseif ($phone_len === 12 && strpos($clean_phone, '44') !== 0) {
                    $is_valid = false;
                } elseif ($phone_len === 13 && strpos($clean_phone, '44') !== 0) {
                    $is_valid = false;
                }
                if (!$is_valid) {
                    $error_message = 'Please enter a valid UK phone number (10 or 11 digits).';
                }
            } elseif ($region_upper === 'INDIA' || $region_upper === 'IN') {
                // India: exactly 10 digits (or 12 if starting with 91)
                if (!($phone_len === 10 || ($phone_len === 12 && strpos($clean_phone, '91') === 0))) {
                    $is_valid = false;
                    $error_message = 'Please enter a valid India phone number (10 digits).';
                }
            } else {
                // Others: between 7 and 15 digits
                if ($phone_len < 7 || $phone_len > 15) {
                    $is_valid = false;
                    $error_message = 'Please enter a valid phone number (7 to 15 digits).';
                }
            }
        } else {
            // Default check if region is not selected/found
            if ($phone_len < 7 || $phone_len > 15) {
                $is_valid = false;
                $error_message = 'Please enter a valid phone number.';
            }
        }

        if (!$is_valid) {
            $result->invalidate($tag, $error_message);
        }
    }

    return $result;
}


