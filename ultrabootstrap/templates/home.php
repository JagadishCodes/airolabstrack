<?php
/**
 * Template Name: Home
 * The template used for displaying fullwidth page content in Publications page
 *
 * @package hitmag
 */

get_header(); ?>


<?php 

$ai_landing_section = get_field('ai_landing_section');
$ai_about_section = get_field('ai_about_section');
$ai_video_section = get_field('ai_video_section');
$ai_services_section = get_field('ai_services_section');
$ai_value_section = get_field('ai_value_section');
$ai_imapct_section = get_field('ai_imapct_section');
$ai_race_section = get_field('ai_race_section');
$ai_customer_section = get_field('ai_customer_section');
$ai_blog_section = get_field('ai_blog_section');
$ai_clients_section = get_field('ai_clients_section');
$ai_innovation_section = get_field('ai_innovation_section');
$ai_join_us_section = get_field('ai_join_us_section');
$ai_form_section = get_field('ai_form_section');
$ai_prefooter = get_field('ai_prefooter');
?>

<style>
	.blog-inner:first-child{
		border-left: none;
	}
.ai-value-inner {
	background-color: #FF0000;
    display: block;
    width: 88vw !important;
    border-right: 1px solid #E5E3CD;
    padding: 40px;
}
	.ai-value-inner {
    width: 60vw !important;
    border-right: 1px solid #E5E3CD;
    padding: 40px;
}
	.ai-value-inner {
	.font-medium{
		color: #fff;
	}
	}
.ai-value-inner h3 span {
    font-family: RobotoSlab-Light;
}

.value-slider .slick-slide .ai-value-inner:hover {
    background: red;
    color: #fff;
}
.value-slider .slick-slide .ai-value-inner:hover h3 {
    color: #fff;
}
.ai-value-inner p {
    color: #fff;
}
	.ai-value-inner {
        width: 90vw !important;
        padding: 24px;
    }
	.tags{
	display: none !important;
}
	.row.services-main {
		border-right: 1px solid #E5E3CD;
	    border-left: 1px solid #E5E3CD;
		border-bottom: 1px solid #E5E3CD;
	}
</style>

<?php if($ai_landing_section['title']){ ?>
<section class="possible-sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 possible-col">
				<div class="possible-text">
					<h2><?php echo $ai_landing_section['title']; ?></h2>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php if($ai_landing_section['ai_title_1'] || $ai_landing_section['cloud_title_1']){ ?>
<section class="expand-sec">
	<div class="container">
		<div class="row">
			<div class="AI-col">
				<div class="AI-inner">
					<div class="after-active ai-possible">
						<h2><?php echo $ai_landing_section['ai_title_2']; ?></h2>
						<p><?php echo $ai_landing_section['ai_content_2']; ?></p>
					</div>
					<hr class="after-active" />
					<div class="with-ai">
						<p class="after-active">With</p>
						<h1><a class=""><?php echo $ai_landing_section['ai_title_1']; ?></a></h1>
					</div>
					<hr class="before-active" />
					<p class="before-active"><?php echo $ai_landing_section['ai_content_1']; ?></p>
					<a class="mybtn before-active"><?php echo $ai_landing_section['button_text']; ?></a>
				</div>
			</div>
			<div class="cloud-col">
				<div class="cloud-inner">
					<div class="after-active cloud-possible">
						<h2><?php echo $ai_landing_section['cloud_title_2']; ?></h2>
						<p><?php echo $ai_landing_section['cloud_content_2']; ?></p>
					</div>
					<hr class="after-active" />
					<div class="with-cloud">
						<p class="after-active">With</p>
						<h1><a class=""><?php echo $ai_landing_section['cloud_title_1']; ?></a></h1>
					</div>
					<hr class="before-active" />
					<p class="before-active" style="color:#fff;"><?php echo $ai_landing_section['cloud_content_1']; ?></p>
					<a class="white-btn before-active"><?php echo $ai_landing_section['cloud_button_text']; ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php if($ai_about_section['title']){ ?>
<section class="ai-sec ai-journey ">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-12"></div>
			<div class="col-md-9 col-sm-12 journey-right">
				<h3><?php echo $ai_about_section['title']; ?></h3>
				<div><?php echo $ai_about_section['content']; ?></div>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php if($ai_video_section['video_poster']['url']){ ?>
<section class="ai-sec video-sec">
	<div class="container">
		<div class="row">
			<div class="video-player">
				<img src="<?php echo $ai_video_section['video_poster']['url']; ?>" alt="<?php echo $ai_video_section['video_poster']['alt']; ?>" id="cover" loading="lazy">
			    <svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558" id="cover">
				  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#fff"></path>
				</svg>
			    <iframe width="560" height="315" src="<?php echo $ai_video_section['video_link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="player" loading="lazy"></iframe>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php if($ai_services_section['title']){ ?>
<section class="ai-sec services-sec">
	<div class="container-l-auto">
		<div class="services-title">
			<h2><?php echo $ai_services_section['title']; ?></h2>
		</div>
		<div class="row services-main">
			<?php foreach ($ai_services_section['services'] as $key => $service) { ?>
				<div class="col-md-6 col-lg-4 col-sm-6 services-inner">
					<img src="<?php echo $service['icon']['url']; ?>" alt="<?php echo $service['title']; ?>" loading="lazy">
					<h3><?php echo $service['title']; ?></h3>
					<div><?php echo $service['content']; ?></div>
					<div class="arrow-link">
						<svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314" viewBox="0 0 29.657 11.314" class="arrow-red">
						  <g id="div-icnArrow" transform="translate(-125.992 -0.208)">
						    <line id="Line_19" data-name="Line 19" x2="24" transform="translate(125.992 5.562)" fill="none" stroke="red" stroke-width="1"/>
						    <path id="Path_9418" data-name="Path 9418" d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z" transform="translate(149.988 0.212) rotate(45)" fill="red"/>
						  </g>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314" viewBox="0 0 29.657 11.314" class="arrow-hover">
						  <g id="div-icnArrow" transform="translate(-125.992 -0.208)">
						    <line id="Line_19" data-name="Line 19" x2="24" transform="translate(125.992 5.562)" fill="none" stroke="#fff" stroke-width="1"/>
						    <path id="Path_9418" data-name="Path 9418" d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z" transform="translate(149.988 0.212) rotate(45)" fill="#fff"/>
						  </g>
						</svg>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<?php } ?>

<?php if($ai_value_section['title']){ ?>
<section class="ai-sec value-sec">
	<div class="container">
 		<div class="lines"></div> 
		<div class="row">
			<div class="col-md-5 col-sm-12 values-left">
				<h2><?php echo $ai_value_section['title']; ?></h2>
			</div>
			<div class="col-md-7 col-sm-12">
				<img src="<?php echo $ai_value_section['image']['url']; ?>" alt="<?php echo $ai_value_section['image']['alt']; ?>" class="desktop" loading="lazy">
				<?php if($ai_value_section['image_for_mobile']['url']){ ?>
					<img src="<?php echo $ai_value_section['image_for_mobile']['url']; ?>" alt="<?php echo $ai_value_section['image_for_mobile']['alt']; ?>" class="mobile" loading="lazy">
				<?php } else{ ?>
					<img src="<?php echo $ai_value_section['image']['url']; ?>" alt="<?php echo $ai_value_section['image']['alt']; ?>" class="mobile" loading="lazy">
				<?php } ?>
			</div>
		</div>
<!-- 		<div class="row">
			<div class="value-slider">
				<?php foreach ($ai_value_section['value_slider'] as $value_key => $value_slide) { ?>
					<div class="ai-value-inner">
						<h3 class="font-medium"> <?php echo $value_slide['title']; ?></h3>
						<p><?php echo $value_slide['content']; ?></p>
					</div>
				<?php } ?>
			</div>
		</div> -->
		<div class="acc-container">        
			<?php foreach ($ai_value_section['value_slider'] as $value_key => $value_slide) { ?>
			<div class="acc">
				<div class="acc-head">
					<h4><?php echo $value_slide['title']; ?></h4>
				</div>
				<div class="acc-content">
					<div class="col-md-12 col-sm-12 col-xs-12 p-0">
						<div><?php echo $value_slide['content']; ?></div>
					</div>					
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="sec-gap"></div>
	</div>
</section>
<?php } ?>

<?php if($ai_imapct_section['title']){ ?>
<section class="ai-sec impact-sec">
	<div class="container">
		<div class="impact-title">
			<h2><?php echo $ai_imapct_section['title']; ?></h2>
		</div>
	</div>
	<div class="container-l-auto">
		<div class="impact-tab">
			<nav>
				<div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
					<?php foreach ($ai_imapct_section['tabs'] as $tab_key => $tab) { ?>
						<button class="nav-link <?php if($tab_key == 0){ echo 'active'; } ?>" id="nav-<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $tab['title']); ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $tab['title']); ?>" type="button" role="tab" aria-controls="nav-<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $tab['title']); ?>" aria-selected="true"><?php echo $tab['title']; ?> </button>
					<?php } ?>
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
				<?php foreach ($ai_imapct_section['tabs'] as $tab_key => $tab) { ?>
					<div class="tab-pane fade <?php if($tab_key == 0){ echo 'active show'; } ?>" id="nav-<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $tab['title']); ?>" role="tabpanel" aria-labelledby="nav-<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $tab['title']); ?>-tab">
						<?php $post_type = $tab['tabs_post']; ?>
						<div class="impact-slider">
							<?php if($post_type){ foreach ($post_type as $key => $postinner) { ?>
								<a href="<?php echo get_permalink($postinner->ID); ?>"><div class="impact-inner">
									<div class="impact-left">
										<div class="tags">
											<?php echo get_the_term_list( $postinner->ID, 'blog_tags', '', ' ' ); ?>
										</div>
										<h3 class="blog-title"><?php echo $postinner->post_title; ?></h3>
										<div class="line-before-text">
											<p><?php echo $postinner->post_excerpt; ?></p>
										</div>
									</div>
									<div class="impact-right">
										<div class="tag-on-img"><p><?php echo get_the_term_list( $postinner->ID, 'blog_services', '', ', ' ); ?></p></div>
										<img src="<?php echo get_the_post_thumbnail_url($postinner->ID); ?>" alt="<?php echo $postinner->post_title; ?>" loading="lazy">
									</div>
									</div></a>
							<?php } } ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<?php if($ai_race_section['title']){ ?>
<section class="ai-sec fixed-sec">
	<div class="fixed-sec-inner" style="background-image: url('<?php echo $ai_race_section['background_image']['url'] ; ?>');">
		<div class="container-l-auto">
			<div class="fixed-sec-title">
				<h2><?php echo $ai_race_section['title']; ?></h2>
			</div>
			<div class="race-main" id="second">
				<div class="race-slider">
					<?php foreach ($ai_race_section['block'] as $key => $ai_block) { ?>
						<div class="race-inner">
							<span class="big-text"><?php echo $ai_block['big_letter']; ?></span>
							<hr />
							<div class="race-text">
								<h3><?php echo $ai_block['title']; ?></h3>
								<div><?php echo $ai_block['content']; ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--<section class="ai-sec fixed-secs">
	<div class="fixed-sec-inner" style="background-image: url('<?php echo $ai_race_section['background_image']['url'] ; ?>');">
		<div class="container-l-auto">
			<div class="fixed-sec-title">
				<h2><?php echo $ai_race_section['title']; ?></h2>
			</div>
			<div class="race-main" id="second">
				<div class="race-slider">
					<?php foreach ($ai_race_section['block'] as $key => $ai_block) { ?>
						<div class="race-inner active">
							<span class="big-text"><?php echo $ai_block['big_letter']; ?></span>
							<hr />
							<div class="race-text">
								<h3><?php echo $ai_block['title']; ?></h3>
								<div><?php echo $ai_block['content']; ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>-->
<?php } ?>
<?php if($ai_race_section['title']){ ?>
<section class="ai-sec race-sec">
	<div class="race-sec-inner" style="background-image: url('<?php echo $ai_race_section['background_image']['url'] ; ?>');">
		<div class="container">
			<div class="fixed-sec-title">
				<h2><?php echo $ai_race_section['title']; ?></h2>
			</div>
			<div class="race-main">
				<div class="race-sliders">
					<?php foreach ($ai_race_section['block'] as $key => $value_block) { ?>
						<div class="race-inner">
							<span class="big-text"><?php echo $value_block['big_letter']; ?></span>
							<hr />
							<div class="race-text">
								<h3><?php echo $value_block['title']; ?></h3>
								<div><?php echo $value_block['content']; ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="my-slick-arrows color-white">
					<button class="race-prev slick-prev slick-arrow" style="transform: rotate(90deg);">
						<svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
						  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#fff"/>
						</svg>
					</button>
                	<button class="race-next slick-next slick-arrow" style="transform: rotate(-90deg);">
                		<svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
						  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#fff"/>
						</svg>
                	</button>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>
<?php if($ai_customer_section['title']){ ?>
<section class="ai-sec customers-sec">
	<div class="container-l-auto">
		<div class="customers-title">
			<h2><?php echo $ai_customer_section['title']; ?></h2>
		</div>
		<div class="customers-main row align-items-end">
			<div class="col-lg-2 col-md-3 col-sm-2">
				<div class="my-slick-arrows color-white">
					<button class="customer-prev slick-prev slick-arrow" style="transform: rotate(90deg);">
						<svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
						  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#fff"/>
						</svg>
					</button>
                	<button class="customer-next slick-next slick-arrow" style="transform: rotate(-90deg);">
                		<svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
						  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#fff"/>
						</svg>
                	</button>
				</div>
			</div>
			<div class="col-lg-10 col-md-9 col-sm-12">
				<div class="customers-slider">
					<?php foreach ($ai_customer_section['testimonials'] as $key => $testimonial) { ?>
						<div class="customers-inner">
							<div class="customers-name">
								<h4><?php echo $testimonial['name']; ?></h4>
								<p><?php echo $testimonial['position']; ?></p>
							</div>
							<div class="customers-content">
								<h3><?php echo $testimonial['testimonial_titile']; ?></h3>
								<p><?php echo $testimonial['testimonial_content']; ?></p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<?php if($ai_blog_section['title']){ ?>
<section class="ai-sec blog-sec">
	<div class="container">
		<div class="blog-sec-title">
			<h2><?php echo $ai_blog_section['title']; ?></h2>
		</div>
		<div class="blog-main">
			<?php $blog = $ai_blog_section['select_blogs'];
				  $event = $ai_blog_section['select_event'];
			?>
			<?php foreach ($blog as $key => $blogs) { ?>
				<div class="blog-inner">
					<div class="tags">
						<?php echo get_the_term_list( $blogs->ID, 'blog_tags', '', ' ' ); ?>
					</div>
					<a href="<?php echo get_permalink($blogs->ID); ?>"><h3 class="blog-title"><?php echo $blogs->post_title; ?></h3></a>
					<p><?php echo $blogs->post_excerpt; ?></p>
					<img src="<?php echo get_the_post_thumbnail_url($blogs->ID); ?>" alt="<?php echo $blogs->post_title; ?>">
				</div>
			<?php } ?>
			<?php foreach ($event as $key => $events) { ?>
				<div class="blog-inner event-inner">
					<p class="events-tag">Events</p>
					<div class="tags">
						<?php echo get_the_term_list( $events->ID, 'events_tag', '', ' ' ); ?>
					</div>
					<h4 class="font-medium"><?php echo get_field('events_date',$events->ID); ?></h4>
					<a href="<?php echo get_permalink($events->ID); ?>"><h3 class="blog-title"><?php echo $events->post_title; ?></h3></a>
					<?php
					$event_desc = '';
					$eve = get_field('event_details', $events->ID);
					if ( ! empty( $eve['event_description'] ) ) {
						$event_desc = $eve['event_description'];
					}
					
					if ( empty( $event_desc ) ) {
						$event_desc = get_post_meta( $events->ID, 'event_details_event_description', true );
					}
					
					if ( empty( $event_desc ) ) {
						$event_desc = $events->post_excerpt;
					}
					
					if ( empty( $event_desc ) ) {
						$event_desc = $events->post_content;
					}
					
					$event_desc = wp_strip_all_tags( $event_desc );
					?>
					<?php if ( ! empty( $event_desc ) ) { ?>
						<p class="event-desc"><?php echo esc_html( $event_desc ); ?></p>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<?php } ?>

<?php if($ai_clients_section['title']){ ?>
<section class="ai-sec blog-sec cl-logo">
	<div class="container">
		<div class="impact-title">
			<h2><?php echo $ai_clients_section['title']; ?></h2>
		</div>
		<div class="home-client-logos br"> 
			<div class="row p-0">
				<?php foreach ($ai_clients_section['logos'] as $key => $logo) { ?>
				<div class="col-md-3 col-sm-3 col-6 p-0">
					<div>
						<div class="slide-logos">
							<img src="<?php echo $logo['logo']['url']; ?>" alt="<?php echo $logo['logo']['alt']; ?>">
							<div class="logo-content">
								<?php echo $logo['content']; ?>
							</div>
						</div>
					</div>					
				</div>
				<?php } ?>
			</div>		
 		</div>
		<div class="">
<!-- 		<div class="my-slick-arrows" id="logo-arrows">
					<button class="logo-prev slick-prev slick-arrow" style="transform: rotate(90deg);">
						<svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
						  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#FF0000"/>
						</svg>
					</button>
                	<button class="logo-next slick-next slick-arrow" style="transform: rotate(-90deg);">
                		<svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
						  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#FF0000"/>
						</svg>
                	</button>
		</div>  -->
	</div> 
		<div class="lines"></div>
		</div>
</section>
<?php } ?>

<?php if($ai_innovation_section['title']){ ?>
<section class="ai-sec question-sec">
	<div class="container">
		<div class="question-inner">
			<img src="<?php echo $ai_innovation_section['image']; ?>" alt="<?php echo $ai_innovation_section['title']; ?>" class="desktop" loading="lazy">
			<?php if($ai_innovation_section['image_for_mobile']){ ?>
				<img src="<?php echo $ai_innovation_section['image_for_mobile']; ?>" alt="<?php echo $ai_innovation_section['title']; ?>" class="mobile" loading="lazy">
			<?php } else { ?>
				<img src="<?php echo $ai_innovation_section['image']; ?>" alt="<?php echo $ai_innovation_section['title']; ?>" class="mobile" loading="lazy">
			<?php } ?>
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-12 question-left">
					<h2><?php echo $ai_innovation_section['title']; ?></h2>
				</div>
				<div class="col-lg-7 col-md-6 col-sm-12 question-right">
					<div><?php echo $ai_innovation_section['content']; ?></div>
					<a href="<?php echo $ai_innovation_section['button_link']['url']; ?>" target="<?php echo $ai_innovation_section['button_link']['target']; ?>" class="mybtn"><?php echo $ai_innovation_section['button_text']; ?></a>
				</div>
			</div>
		</div>
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<?php if($ai_join_us_section['title']){ ?>
<section class="ai-sec join-us-sec">
	<div class="container desktop">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0">
				<img src="<?php echo $ai_join_us_section['image']['url']; ?>" alt="<?php echo $ai_join_us_section['image']['alt']; ?>" class="img_width desktop" loading="lazy">
				<?php if($ai_join_us_section['image_for_mobile']){ ?>
					<img src="<?php echo $ai_join_us_section['image_for_mobile']['url']; ?>" alt="<?php echo $ai_join_us_section['image_for_mobile']['alt']; ?>" class="img_width mobile" loading="lazy">
				<?php } else { ?>
					<img src="<?php echo $ai_join_us_section['image']['url']; ?>" alt="<?php echo $ai_join_us_section['image']['alt']; ?>" class="img_width mobile" loading="lazy">
				<?php } ?>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0"></div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0">
				<div class="join-us-text">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 join-us-left">
							<h2><?php echo $ai_join_us_section['title']; ?></h2>						
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 join-us-right bl">
							<div><?php echo $ai_join_us_section['content']; ?></div>							
						</div>
					</div>	
				</div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0 bl bb">	
				<img src="<?php echo $ai_join_us_section['image_2']['url']; ?>" alt="<?php echo $ai_join_us_section['image_2']['alt']; ?>" class="img_width" loading="lazy">
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0 full-btn">
				<a href="<?php echo $ai_join_us_section['button_link']['url']; ?>" target="<?php echo $ai_join_us_section['button_link']['target']; ?>" class="mybtn"><?php echo $ai_join_us_section['button_text']; ?></a>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0 bb"></div>
		</div>
		<div class="lines"></div>
	</div>
	<div class="container-l-auto mobile">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-9 p-0">				
				<?php if($ai_join_us_section['image_for_mobile']){ ?>
					<img src="<?php echo $ai_join_us_section['image_for_mobile']['url']; ?>" alt="<?php echo $ai_join_us_section['image_for_mobile']['alt']; ?>" class="img_width mobile" loading="lazy">
				<?php } else { ?>
					<img src="<?php echo $ai_join_us_section['image']['url']; ?>" alt="<?php echo $ai_join_us_section['image']['alt']; ?>" class="img_width mobile" loading="lazy">
				<?php } ?>
			</div>
			<div class="col-sm-2 col-3 p-0 bt"></div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-9 p-0 bl bb">
				<div class="join-us-text">					
					<h2><?php echo $ai_join_us_section['title']; ?></h2>						
				</div>
			</div>
			<div class="col-sm-2 col-3 p-0 bl">	
				<img src="<?php echo $ai_join_us_section['image_2']['url']; ?>" alt="<?php echo $ai_join_us_section['image_2']['alt']; ?>" class="img_width" loading="lazy">
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-9 p-0">
				<div class="join-us-text">
					<div class="row">						
						<div class="col-md-6 col-sm-6 col-xs-6 join-us-right bl">
							<div><?php echo $ai_join_us_section['content']; ?></div>							
						</div>
					</div>	
				</div>
			</div>
			<div class="col-sm-2 col-3 p-0 bl bb">	</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0 full-btn">
				<a href="<?php echo $ai_join_us_section['button_link']['url']; ?>" target="<?php echo $ai_join_us_section['button_link']['target']; ?>" class="mybtn"><?php echo $ai_join_us_section['button_text']; ?></a>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0 bb"></div>
		</div>
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<?php if($ai_form_section['title']){ ?>
<section class="ai-sec form-sec">
	<div class="container">
		<div class="form-title">
			<h2><?php echo $ai_form_section['title']; ?></h2>
		</div>
		<div class="form-wrapper">
			<?php echo $ai_form_section["form_id"]; ?>
		</div>
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<!-- <section class="ai-sec prefooter">
<div id="pre-footer">
  <div class="container">
    <div class="pre-footer-wrap">
      <img src="/wp-content/uploads/2024/04/div-logo.svg" class="img_width">
    </div>
  </div>
	</div>
</section> -->


<!------------  Cloud Page Content  ------------->

<?php 

$cloud_about_section = get_field('cloud_about_section');
$cloud_video_section = get_field('cloud_video_section');
$cloud_services_section = get_field('cloud_services_section');
$cloud_value_section = get_field('cloud_value_section');
$cloud_imapct_section = get_field('cloud_imapct_section');
$cloud_race_section = get_field('cloud_race_section');
$cloud_customer_section = get_field('cloud_customer_section');
$cloud_blog_section = get_field('cloud_blog_section');
$cloud_clients_section = get_field('cloud_clients_section');
$cloud_innovation_section = get_field('cloud_innovation_section');
$cloud_join_us_section = get_field('cloud_join_us_section');
$cloud_form_section = get_field('cloud_form_section');
$cloud_prefooter = get_field('cloud_prefooter');

?>

<?php if($cloud_about_section['title']){ ?>
<section class="cloud-sec ai-journey ">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-12"></div>
			<div class="col-md-9 col-sm-12 journey-right">
				<h3><?php echo $cloud_about_section['title']; ?></h3>
				<div><?php echo $cloud_about_section['content']; ?></div>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php if($cloud_video_section['video_poster']['url']){ ?>
<section class="cloud-sec video-sec">
	<div class="container">
		<div class="row">
			<div class="video-player">
				<img src="<?php echo $cloud_video_section['video_poster']['url']; ?>" alt="<?php echo $cloud_video_section['video_poster']['alt']; ?>" id="cover1" loading="lazy">
			    <svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558" id="cover1">
				  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#fff"></path>
				</svg>
			    <iframe width="560" height="315" src="<?php echo $cloud_video_section['video_link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="player1"></iframe>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php if($cloud_services_section['title']){ ?>
<section class="cloud-sec services-sec">
	<div class="container-l-auto">
		<div class="services-title">
			<h2><?php echo $cloud_services_section['title']; ?></h2>
		</div>
		<div class="row services-main">
			<?php foreach ($cloud_services_section['services'] as $key => $service) { ?>
				<div class="col-md-6 col-lg-4 col-sm-6 services-inner">
					<img src="<?php echo $service['icon']['url']; ?>" alt="<?php echo $service['title']; ?>" loading="lazy">
					<h3><?php echo $service['title']; ?></h3>
					<div><?php echo $service['content']; ?></div>
					<div class="arrow-link">
						<svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314" viewBox="0 0 29.657 11.314" class="arrow-red">
						  <g id="div-icnArrow" transform="translate(-125.992 -0.208)">
						    <line id="Line_19" data-name="Line 19" x2="24" transform="translate(125.992 5.562)" fill="none" stroke="red" stroke-width="1"/>
						    <path id="Path_9418" data-name="Path 9418" d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z" transform="translate(149.988 0.212) rotate(45)" fill="red"/>
						  </g>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314" viewBox="0 0 29.657 11.314" class="arrow-hover">
						  <g id="div-icnArrow" transform="translate(-125.992 -0.208)">
						    <line id="Line_19" data-name="Line 19" x2="24" transform="translate(125.992 5.562)" fill="none" stroke="#fff" stroke-width="1"/>
						    <path id="Path_9418" data-name="Path 9418" d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z" transform="translate(149.988 0.212) rotate(45)" fill="#fff"/>
						  </g>
						</svg>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<?php } ?>

<?php if($cloud_value_section['title']){ ?>
<section class="cloud-sec value-sec">
	<div class="container">
		<div class="lines"></div>
		<div class="row">
			<div class="col-md-5 col-sm-12 values-left">
				<h2><?php echo $cloud_value_section['title']; ?></h2>
			</div>
			<div class="col-md-7 col-sm-12">
				<img src="<?php echo $cloud_value_section['image']['url']; ?>" alt="<?php echo $cloud_value_section['image']['alt']; ?>" class="desktop" loading="lazy">
				<?php if($cloud_value_section['image_for_mobile']){  if($cloud_value_section['image_for_mobile']['url']){ ?>
					<img src="<?php echo $cloud_value_section['image_for_mobile']['url']; ?>" alt="<?php echo $cloud_value_section['image_for_mobile']['alt']; ?>" class="mobile" loading="lazy">
				<?php } else { ?>
					<img src="<?php echo $cloud_value_section['image']['url']; ?>" alt="<?php echo $cloud_value_section['image']['alt']; ?>" class="mobile" loading="lazy">
				<?php } } ?>
			</div>
		</div>
		<!-- 		<div class="row">
			<div class="value-slider">
				<?php foreach ($cloud_value_section['value_slider'] as $value_key => $value_slide) { ?>
					<div class="value-inner">
						<h3 class="font-medium"> <?php echo $value_slide['title']; ?></h3>
						<p><?php echo $value_slide['content']; ?></p>
					</div>
				<?php } ?>
			</div>
		</div> -->
		<!-- Accordion -->
		<div class="acc-container">        
			<?php foreach ($cloud_value_section['value_slider'] as $key => $data_slide) { ?>
			<div class="acc">
				<div class="acc-head">
					<h4><?php echo $data_slide['title']; ?></h4>
				</div>
				<div class="acc-content">
<!-- 					<div class="row"> -->
						<div class="col-md-12 col-sm-12 col-xs-12 p-0">
							<div><?php echo $data_slide['content']; ?></div>
<!-- 						</div> -->
					</div>					
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="sec-gap"></div>
<!-- 		<div class="lines"></div> -->
	</div>
</section>
<?php } ?>


<?php if($cloud_imapct_section['title']){ ?>
<section class="cloud-sec impact-sec">
	<div class="container">
		<div class="impact-title">
			<h2><?php echo $cloud_imapct_section['title']; ?></h2>
		</div>
	</div>
	<div class="container-l-auto">
		<div class="impact-tab">
			<nav>
				<div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
					<?php foreach ($cloud_imapct_section['tabs'] as $c_tab_key => $c_tab) { ?>
						<button class="nav-link <?php if($c_tab_key == 0){ echo 'active'; } ?>" id="nav1-<?php echo $c_tab['title']; ?>-tab" data-bs-toggle="tab" data-bs-target="#nav1-<?php echo $c_tab['title']; ?>" type="button" role="tab" aria-controls="nav1-<?php echo $c_tab['title']; ?>" aria-selected="true"><?php echo $c_tab['title']; ?></button>
					<?php } ?>
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
				<?php foreach ($cloud_imapct_section['tabs'] as $c_tab_key => $c_tab) { ?>
					<div class="tab-pane fade <?php if($c_tab_key == 0){ echo 'active show'; } ?>" id="nav1-<?php echo $c_tab['title']; ?>" role="tabpanel" aria-labelledby="nav1-<?php echo $c_tab['title']; ?>-tab">
						<?php $post_type = $c_tab['tabs_post']; ?>
						<div class="impact-slider">
							<?php if($post_type){ foreach ($post_type as $key => $postinner) { ?>
								<div class="impact-inner">
									<div class="impact-left">
										<div class="tags">
											<?php echo get_the_term_list( $postinner->ID, 'blog_tags', '', ' ' ); ?>
										</div>
										<a href="<?php echo get_permalink($postinner->ID); ?>"><h3 class="blog-title"><?php echo $postinner->post_title; ?></h3></a>
										<div class="line-before-text">
											<p><?php echo $postinner->post_excerpt; ?></p>
										</div>
									</div>
									<div class="impact-right">
										<div class="tag-on-img"><p><?php echo get_the_term_list( $postinner->ID, 'blog_services', '', ', ' ); ?></p></div>
										<img src="<?php echo get_the_post_thumbnail_url($postinner->ID); ?>" alt="<?php echo $postinner->post_title; ?>" loading="lazy">
									</div>
								</div>
							<?php } } ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<?php if($cloud_race_section['title']){ ?>
<section class="cloud-sec fixed-sec">
	<div class="fixed-sec-inner" style="background-image: url(<?php echo $cloud_race_section['background_image']['url'] ; ?>);">
		<div class="container-l-auto">
			<div class="fixed-sec-title">
				<h2><?php echo $cloud_race_section['title']; ?></h2>
			</div>
			<div class="race-main">
				<div class="race-slider">
					<?php foreach ($cloud_race_section['block'] as $key => $cloud_block) { ?>
						<div class="race-inner">
							<span class="big-text"><?php echo $cloud_block['big_letter']; ?></span>
							<hr />
							<div class="race-text">
								<h3><?php echo $cloud_block['title']; ?></h3>
								<div><?php echo $cloud_block['content']; ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- <section class="cloud-sec fixed-secs">
	<div class="fixed-sec-inner" style="background-image: url(<?php echo $cloud_race_section['background_image']['url'] ; ?>);">
		<div class="container-l-auto">
			<div class="fixed-sec-title">
				<h2><?php echo $cloud_race_section['title']; ?></h2>
			</div>
			<div class="race-main">
				<div class="race-slider">
					<?php foreach ($cloud_race_section['block'] as $key => $cloud_block) { ?>
						<div class="race-inner active">
							<span class="big-text"><?php echo $cloud_block['big_letter']; ?></span>
							<hr />
							<div class="race-text">
								<h3><?php echo $cloud_block['title']; ?></h3>
								<div><?php echo $cloud_block['content']; ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section> -->
<?php } ?>

<?php if($cloud_race_section['title']){ ?>
<section class="cloud-sec race-sec">
	<div class="race-sec-inner" style="background-image: url('<?php echo $cloud_race_section['background_image']['url'] ; ?>');">
		<div class="container">
			<div class="fixed-sec-title">
				<h2><?php echo $cloud_race_section['title']; ?></h2>
			</div>
			<div class="race-main">
				<div class="race-sliders">
					<?php foreach ($cloud_race_section['block'] as $key => $value_block) { ?>
						<div class="race-inner">
							<span class="big-text"><?php echo $value_block['big_letter']; ?></span>
							<hr />
							<div class="race-text">
								<h3><?php echo $value_block['title']; ?></h3>
								<div><?php echo $value_block['content']; ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="my-slick-arrows color-white">
					<button class="cloud-race-prev slick-prev slick-arrow" style="transform: rotate(90deg);">
						<svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
						  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#fff"/>
						</svg>
					</button>
                	<button class="cloud-race-next slick-next slick-arrow" style="transform: rotate(-90deg);">
                		<svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
						  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#fff"/>
						</svg>
                	</button>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php if($cloud_customer_section['title']){ ?>
<section class="cloud-sec customers-sec">
	<div class="container-l-auto">
		<div class="customers-title">
			<h2><?php echo $cloud_customer_section['title']; ?></h2>
		</div>
		<div class="customers-main row align-items-end">
			<div class="col-lg-2 col-md-3 col-sm-2">
				<div class="my-slick-arrows color-white">
					<button class="customers-prev slick-prev slick-arrow" style="transform: rotate(90deg);">
						<svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
						  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#fff"/>
						</svg>
					</button>
                	<button class="customers-next slick-next slick-arrow" style="transform: rotate(-90deg);">
                		<svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
						  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#fff"/>
						</svg>
                	</button>
				</div>
			</div>
			<div class="col-lg-10 col-md-9 col-sm-12">
				<div class="customers-slider">
					<?php foreach ($cloud_customer_section['testimonials'] as $key => $testimonial) { ?>
						<div class="customers-inner">
							<div class="customers-name">
								<h4><?php echo $testimonial['name']; ?></h4>
								<p><?php echo $testimonial['position']; ?></p>
							</div>
							<div class="customers-content">
								<h3><?php echo $testimonial['testimonial_titile']; ?></h3>
								<p><?php echo $testimonial['testimonial_content']; ?></p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<?php if($cloud_blog_section['title']){ ?>
<section class="cloud-sec blog-sec">
	<div class="container">
		<div class="blog-sec-title">
			<h2><?php echo $cloud_blog_section['title']; ?></h2>
		</div>
		<div class="blog-main">
			<?php $blog = $cloud_blog_section['select_blogs'];
				  $event = $cloud_blog_section['select_event'];
			?>
			<?php foreach ($blog as $key => $blogs) { ?>
				<div class="blog-inner">
					<div class="tags">
						<?php echo get_the_term_list( $blogs->ID, 'blog_tags', '', ' ' ); ?>
					</div>
					<a href="<?php echo get_permalink($blogs->ID); ?>"><h3 class="blog-title"><?php echo $blogs->post_title; ?></h3></a>
					<p><?php echo $blogs->post_excerpt; ?></p>
					<img src="<?php echo get_the_post_thumbnail_url($blogs->ID); ?>" alt="<?php echo $blogs->post_title; ?>" loading="lazy">
				</div>
			<?php } ?>
			<?php foreach ($event as $key => $events) { ?>
				<div class="blog-inner event-inner">
					<p class="events-tag">Events</p>
					<div class="tags">
						<?php echo get_the_term_list( $events->ID, 'events_tag', '', ' ' ); ?>
					</div>
					<h4 class="font-medium"><?php echo get_field('events_date',$events->ID); ?></h4>
					<a href="<?php echo get_permalink($events->ID); ?>"><h3 class="blog-title"><?php echo $events->post_title; ?></h3></a>
					<?php
					$event_desc = '';
					$eve = get_field('event_details', $events->ID);
					if ( ! empty( $eve['event_description'] ) ) {
						$event_desc = $eve['event_description'];
					}
					
					if ( empty( $event_desc ) ) {
						$event_desc = get_post_meta( $events->ID, 'event_details_event_description', true );
					}
					
					if ( empty( $event_desc ) ) {
						$event_desc = $events->post_excerpt;
					}
					
					if ( empty( $event_desc ) ) {
						$event_desc = $events->post_content;
					}
					
					$event_desc = wp_strip_all_tags( $event_desc );
					?>
					<?php if ( ! empty( $event_desc ) ) { ?>
						<p class="event-desc"><?php echo esc_html( $event_desc ); ?></p>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<?php } ?>

<?php if($cloud_clients_section['title']){ ?>
<section class="cloud-sec blog-sec">
	<div class="container">
		<div class="impact-title">
			<h2><?php echo $cloud_clients_section['title']; ?></h2>
		</div>
<!-- 		<div class="clientss-logos">
			<?php foreach ($cloud_clients_section['logos'] as $key => $logo) { ?>
				<img src="<?php echo $logo['logo']['url']; ?>" alt="<?php echo $logo['logo']['alt']; ?>"> 
			<?php } ?>
		</div>	 -->
		<div class="home-client-logos br"> 
			<div class="row p-0">
				<?php foreach ($cloud_clients_section['logos'] as $key => $logo) { ?>
				<div class="col-md-3 col-sm-3 col-6 p-0">
					<div>
						<div class="slide-logos">
							<img src="<?php echo $logo['logo']['url']; ?>" alt="<?php echo $logo['logo']['alt']; ?>" loading="lazy">
							<div class="logo-content">
								<?php echo $logo['content']; ?>
							</div>
						</div>
					</div>					
				</div>
				<?php } ?>
			</div>		
 		</div>
		
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<?php if($cloud_innovation_section['title']){ ?>
<section class="cloud-sec question-sec">
	<div class="container">
		<div class="question-inner">
			<img src="<?php echo $cloud_innovation_section['image']; ?>" alt="<?php echo $cloud_innovation_section['title']; ?>" class="desktop" loading="lazy">
			<?php if($cloud_innovation_section['image_for_mobile']){ ?>
				<img src="<?php echo $cloud_innovation_section['image_for_mobile']; ?>" alt="<?php echo $cloud_innovation_section['title']; ?>" class="mobile" loading="lazy">
			<?php } else { ?>
				<img src="<?php echo $cloud_innovation_section['image']; ?>" alt="<?php echo $cloud_innovation_section['title']; ?>" class="mobile" loading="lazy">
			<?php } ?>
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-12 question-left">
					<h2><?php echo $cloud_innovation_section['title']; ?></h2>
				</div>
				<div class="col-lg-7 col-md-6 col-sm-12 question-right">
					<div><?php echo $cloud_innovation_section['content']; ?></div>
					<a href="<?php echo $cloud_innovation_section['button_link']['url']; ?>" target="<?php echo $cloud_innovation_section['button_link']['target']; ?>" class="mybtn"><?php echo $cloud_innovation_section['button_text']; ?></a>
				</div>
			</div>
		</div>
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<?php if($cloud_join_us_section['title']){ ?>
<section class="cloud-sec join-us-sec">
	<div class="container desktop">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0">
				<img src="<?php echo $cloud_join_us_section['image']['url']; ?>" alt="<?php echo $cloud_join_us_section['image']['alt']; ?>" class="img_width desktop" loading="lazy">
				<?php if($cloud_innovation_section['image_for_mobile']){ ?>
					<img src="<?php echo $cloud_join_us_section['image_for_mobile']['url']; ?>" alt="<?php echo $cloud_join_us_section['image_for_mobile']['alt']; ?>" class="img_width mobile" loading="lazy">
				<?php } else { ?>
					<img src="<?php echo $cloud_join_us_section['image']['url']; ?>" alt="<?php echo $cloud_join_us_section['image']['alt']; ?>" class="img_width mobile" loading="lazy">
				<?php } ?>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0"></div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0">
				<div class="join-us-text">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 join-us-left">
							<h2><?php echo $cloud_join_us_section['title']; ?></h2>						
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 join-us-right bl">
							<div><?php echo $cloud_join_us_section['content']; ?></div>							
						</div>
					</div>	
				</div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0 bl bb">	
				<img src="<?php echo $cloud_join_us_section['image_2']['url']; ?>" alt="<?php echo $cloud_join_us_section['image_2']['alt']; ?>" class="img_width" loading="lazy">
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0 full-btn">
				<a href="<?php echo $cloud_join_us_section['button_link']['url']; ?>" target="<?php echo $cloud_join_us_section['button_link']['target']; ?>" class="mybtn"><?php echo $cloud_join_us_section['button_text']; ?></a>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0 bb"></div>
		</div>
		<div class="lines"></div>
	</div>
	<div class="container-l-auto mobile">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-9 p-0">				
				<?php if($ai_join_us_section['image_for_mobile']){ ?>
					<img src="<?php echo $ai_join_us_section['image_for_mobile']['url']; ?>" alt="<?php echo $ai_join_us_section['image_for_mobile']['alt']; ?>" class="img_width mobile" loading="lazy">
				<?php } else { ?>
					<img src="<?php echo $ai_join_us_section['image']['url']; ?>" alt="<?php echo $ai_join_us_section['image']['alt']; ?>" class="img_width mobile" loading="lazy">
				<?php } ?>
			</div>
			<div class="col-sm-2 col-3 p-0 bt"></div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-9 p-0 bl bb">
				<div class="join-us-text">					
					<h2><?php echo $ai_join_us_section['title']; ?></h2>						
				</div>
			</div>
			<div class="col-sm-2 col-3 p-0 bl">	
				<img src="<?php echo $ai_join_us_section['image_2']['url']; ?>" alt="<?php echo $ai_join_us_section['image_2']['alt']; ?>" class="img_width" loading="lazy">
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-9 p-0">
				<div class="join-us-text">
					<div class="row">						
						<div class="col-md-6 col-sm-6 col-xs-6 join-us-right bl">
							<div><?php echo $ai_join_us_section['content']; ?></div>							
						</div>
					</div>	
				</div>
			</div>
			<div class="col-sm-2 col-3 p-0 bl bb">	</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0 full-btn">
				<a href="<?php echo $ai_join_us_section['button_link']['url']; ?>" target="<?php echo $ai_join_us_section['button_link']['target']; ?>" class="mybtn"><?php echo $ai_join_us_section['button_text']; ?></a>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0 bb"></div>
		</div>
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<?php if($cloud_form_section['title']){ ?>
<section class="cloud-sec form-sec">
	<div class="container">
		<div class="form-title">
			<h2><?php echo $cloud_form_section['title']; ?></h2>
		</div>
		<div class="form-wrapper">
			<?php echo $cloud_form_section["form_id"]; ?>
		</div>
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<!-- <section class="cloud-sec prefooter">
<div id="pre-footer">
  <div class="container">
    <div class="pre-footer-wrap">
      <img src="/wp-content/uploads/2024/04/div-logo.svg" class="img_width">
    </div>
  </div>
	</div>
</section> -->


<?php get_footer(); ?>
<script type="text/javascript">

	$('body').addClass('hide-sec');
	$(".AI-col a").click(function() {  
	    $('body').addClass("ai-active");
	    $('body').removeClass('hide-sec');
	    $('body').removeClass('cloud-active');
		
		
	var get_box_length = $('.ai-sec .race-slider .race-inner').length;
	var get_box_width = $('.ai-sec.fixed-sec .race-inner').width();
	var total_width_count = get_box_width * get_box_length;

	var section_top = $(".ai-sec.fixed-sec").offset().top;
	var section_height = $(".ai-sec.fixed-sec").height();
	var total_scroll_count = section_top + section_height;
	var section_scroll_count = (section_height / get_box_length) - 40;
	var total_padding = section_height * 2;
	var i = 1;

	$(window).scroll(function() {

	var windows_top = $(window).scrollTop();
	    if(section_top < windows_top && total_scroll_count > windows_top){
	       $(".ai-sec.fixed-sec .fixed-sec-inner").css({'position' : 'fixed','top' : '0'});
	       $(".ai-sec.fixed-sec").css({'height' :  section_height+'px','min-height' :  section_height+'px','padding-bottom' : total_padding+'px'});
	        
	        
	        var offset_top_all = section_top + (section_scroll_count * i);
	        if(offset_top_all < windows_top){
	            $('.ai-sec.fixed-sec .race-slider .race-inner:nth-child('+i+')').addClass('active');
	            i++;
	        }else{
	            $('.ai-sec.fixed-sec .race-slider .race-inner:nth-child('+i+')').removeClass('active');
	            i--;
	        }
	        
	    }else{
	        $(".ai-sec.fixed-sec").css({'height' :  section_height+'px','min-height' :  section_height+'px','padding-bottom' : '0'});
	        $(".ai-sec.fixed-sec .fixed-sec-inner").css({'position' : 'relative','top' : '0'});
	        
	    }
	});
	});
	$(".cloud-col a").click(function() {  
	    $('body').addClass("cloud-active");
	    $('body').removeClass('hide-sec');
	    $('body').removeClass('ai-active');

    	var get_box_length = $('.cloud-sec .race-slider .race-inner').length;
		var get_box_width = $('.cloud-sec.fixed-sec .race-inner').width();
		var total_width_count = get_box_width * get_box_length;

		var section_top = $(".cloud-sec.fixed-sec").offset().top;
		var section_height = $(".cloud-sec.fixed-sec").height();
		var total_scroll_count = section_top + section_height;
		var section_scroll_count = (section_height / get_box_length) - 40;
		var total_padding = section_height * 2;
		var i = 1;

		$(window).scroll(function() {

		var windows_top = $(window).scrollTop();
		    if(section_top < windows_top && total_scroll_count > windows_top){
		       $(".cloud-sec.fixed-sec .fixed-sec-inner").css({'position' : 'fixed','top' : '0'});
		       $(".cloud-sec.fixed-sec").css({'height' :  section_height+'px','min-height' :  section_height+'px','padding-bottom' : total_padding+'px'});
		        
		        
		        var offset_top_all = section_top + (section_scroll_count * i);
		        if(offset_top_all < windows_top){
		            $('.cloud-sec .race-slider .race-inner:nth-child('+i+')').addClass('active');
		            i++;
		        }else{
		            $('.cloud-sec .race-slider .race-inner:nth-child('+i+')').removeClass('active');
		            i--;
		        }
		        
		    }else{
		        $(".cloud-sec.fixed-sec").css({'min-height' :  section_height+'px','height' : 'auto','padding-bottom' : '0px'});
		        $(".cloud-sec.fixed-sec .fixed-sec-inner").css({'position' : 'relative','top' : '0'});
		        
		    }
		});
	});

</script>

