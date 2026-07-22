<?php
/**
 * Template Name: Data and Analytics
 * The template used for displaying fullwidth page content in Publications page
 *
 * @package hitmag
 */

get_header(); ?>

<?php
$banner = get_field('banner');
$section_2 = get_field('section_2');
$video = get_field('video');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');
$section_5 = get_field('section_5');
$section_6 = get_field('section_6');
$section_7 = get_field('section_7');
$section_8 = get_field('section_8');
$section_9 = get_field('section_9');
?>

<style>
	.col-md-5.col-sm-12.values-left.p-0.bl {
		padding: 4% 3% !important;
	}

	.arrow-hover {
		display: none !important;
	}

	#data-sec3 .services-inner h3 {
		width: 70%;
		margin-left: 0;
		margin-right: auto;
	}

	#data-sec3 .services-inner {
		background: #fff !important;
		border-right: solid 1px #E5E3CD;
	}

	#data-sec3 .services-inner:hover {
		background: #0D004A !important;
	}

	#data-sec3 .services-inner h3 {
		color: #0d004a;
	}

	.iframe-vid-wrap {
		width: 100%;
		text-align: left;
	}

	.iframe-vid-wrap video {
		width: 100%;
		height: auto;
		display: block;
	}

	.pt-5 {
		margin-top: 5%;
	}

	.full-height,
	.full-height img {
		height: 100%;
	}

	.services-sec .services-inner .dirction-arrow img {
		position: absolute;
		top: auto;
		right: 0;
		width: 8%;
		bottom: 0;
	}

	.services-sec .services-inner:nth-child(2) .dirction-arrow img {
		transform: rotate(90deg);
	}

	.services-sec .services-inner:nth-child(3) .dirction-arrow img {
		transform: rotate(270deg);
	}

	.services-sec .services-inner:nth-child(4) .dirction-arrow img {
		transform: rotate(180deg);
	}

	@media(max-width: 767.98px) {
		.col-md-5.col-sm-12.values-left.p-0.bl {
			padding: 20px !important;
			border-right: solid 1px #E5E3CD;
		}

		.arrow-link {
			display: none;
		}

		.services-sec .services-inner .dirction-arrow img {
			width: 15%;
		}

		.page-id-766 .services-sec .services-inner p {
			width: 100%;
		}

		.services-sec .services-inner p,
		#data-sec3 .services-inner h3 {
			width: 95%;
		}
	}

	@media (hover: hover) {
		/*     #data-sec3 .services-inner:hover, #data-sec3 .services-inner:hover h3, #data-sec3 .services-inner:hover p, .services-sec .services-inner:hover img, .services-sec .services-inner:hover h3 {
		background-color: inherit !important; /* or any default color */
		color: inherit !important;
		display: inherit !important;
	}

	*/
	}
</style>

<?php if ($banner['title']) { ?>
	<section id="banner">
		<div class="data-banner">
			<div class="data-row1">
				<div class="banner-details1">
					<div class="data-banner-bg">
						<h2><?php echo $banner['title']; ?></h2>
						<p class="mobile-sub-heading"><?php echo $banner['sub_heading']; ?></p>
					</div>
				</div>
				<div class="banner-details2"></div>
			</div>
			<div class="data-row2">
				<div class="banner-details3">
					<div class="banner-content">
						<p><?php echo $banner['sub_heading']; ?></p>
					</div>
				</div>
				<div class="banner-details4">
					<img src="<?php echo $banner['image']; ?>" alt="Banner" class="ban-img" loading="lazy">
				</div>
			</div>
		</div>
	</section>
<?php } ?>

<?php if ($section_2['title']) { ?>
	<section class="section-2">
		<div class="container-l-auto">
			<div class="sec-2">
				<div class="row">
					<div class="col-md-3 col-sm-12" id="sec-2-detail1"></div>
					<div class="col-md-9 col-sm-12" id="sec-2-detail2">
						<h3 class="sec-2-content"><?php echo $section_2['title']; ?></h3>
						<div class="section-2-content">
							<p><?php echo $section_2['content']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="sec-gap"></div>
		</div>
	</section>
<?php } ?>

<?php if ($video['title']) { ?>
	<section id="story-sec5">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-12 values-left p-0 bl">
					<h3><?php echo $video['title']; ?></h3>
					<h2 class=""><a href="<?php echo $video['website_link']; ?>"
							target="_blank"><?php echo $video['website_name']; ?></a></h2>
				</div>
				<div class="col-md-7 col-sm-12 p-0">
					<div class="iframe-vid-wrap">
						<video src="<?php echo $video['iframe_code']; ?>" autoplay muted loop controls>
						</video>
					</div>
				</div>
			</div>
			<div class="sec-gap"></div>
		</div>
	</section>
<?php } ?>

<?php
if ($post->ID != 766) {
	if ($section_3['title']) { ?>
		<section class="services-sec" id="data-sec3">
			<div class="container">
				<div class="sec-3">
					<div class="services-title">
						<h2><?php echo $section_3['title']; ?></h2>
					</div>
					<div class="row services-main">
						<?php foreach ($section_3['data_architecture'] as $key => $dataval) { ?>
							<div class="col-md-6 col-lg-4 col-sm-6 services-inner">
								<img src="<?php echo $dataval['icon']; ?>" alt="<?php echo esc_html($dataval['title']); ?>"
									loading="lazy">
								<h3><?php echo $dataval['title']; ?></h3>
								<div>
									<p><?php echo $dataval['content']; ?></p>
								</div>
								<span class="arrow-link" id="data-arrow">
									<svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314"
										viewBox="0 0 29.657 11.314" class="arrow-red">
										<g id="div-icnArrow" transform="translate(-125.992 -0.208)">
											<line id="Line_19" data-name="Line 19" x2="24" transform="translate(125.992 5.562)"
												fill="none" stroke="red" stroke-width="1" />
											<path id="Path_9418" data-name="Path 9418"
												d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z"
												transform="translate(149.988 0.212) rotate(45)" fill="red" />
										</g>
									</svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="29.657" height="11.314"
										viewBox="0 0 29.657 11.314" class="arrow-hover">
										<g id="div-icnArrow" transform="translate(-125.992 -0.208)">
											<line id="Line_19" data-name="Line 19" x2="24" transform="translate(125.992 5.562)"
												fill="none" stroke="#fff" stroke-width="1" />
											<path id="Path_9418" data-name="Path 9418"
												d="M7.9,7.994,8,2.482A2.424,2.424,0,0,0,5.512-.006L0,.1Z"
												transform="translate(149.988 0.212) rotate(45)" fill="#fff" />
										</g>
									</svg>
								</span>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="sec-gap"></div>
			</div>
		</section>
	<?php }
} ?>

<?php
if ($post->ID == 766) {
	if ($section_3['title']) { ?>
		<section class="services-sec" id="data-sec3">
			<div class="container">
				<div class="sec-3">
					<div class="services-title">
						<h2><?php echo $section_3['title']; ?></h2>
					</div>
					<div class="row services-main">
						<?php foreach ($section_3['data_architecture'] as $key => $datavall) { ?>
							<div class="col-md-6 col-lg-6 col-sm-6 col-6 services-inner">
								<img src="<?php echo $datavall['icon']; ?>" alt="<?php echo esc_html($datavall['title']); ?>"
									loading="lazy">
								<h3><?php echo $datavall['title']; ?></h3>
								<div>
									<p>
										<?php echo $datavall['content']; ?>
									</p>
								</div>
								<div class="dirction-arrow">
									<img src="/wp-content/uploads/2025/03/Square-arrow-right.svg" alt="direction">
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="sec-gap"></div>
			</div>
		</section>
	<?php }
} ?>

<?php if ($section_4['title']) { ?>
	<section id="story-sec5">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-12 values-left p-0 bl">
					<h2><?php echo $section_4['title']; ?></h2>
				</div>
				<div class="col-md-7 col-sm-12 p-0">
					<div class="full-height">
						<img src="<?php echo $section_4['image']; ?>" alt="Value image" class="img_width" loading="lazy">
					</div>
				</div>
			</div>
			<!-- Accordion -->
			<div class="acc-container">
				<?php foreach ($section_4['values'] as $key => $data_slide) { ?>
					<div class="acc">
						<div class="acc-head">
							<h4><?php echo $data_slide['title']; ?></h4>
						</div>
						<div class="acc-content">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 p-0">
									<p><?php echo $data_slide['content']; ?></p>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>

		</div>
	</section>
<?php } ?>

<?php if ($section_4['title']) { ?>
	<div class="container ">
		<div class="sec-gap"></div>
	</div>
<?php } ?>




<?php if ($section_8['title']) { ?>
	<section class="blog-sec">
		<div class="container">
			<div class="blog-sec-title">
				<h2><?php echo $section_8['title']; ?></h2>
			</div>
			<div class="blog-main">
				<?php $blog = $section_8['select_blogs'];
				?>
				<?php foreach ($blog as $key => $blogs) { ?>
					<div class="blog-inner">
						<?php $tg = get_the_term_list($blogs->ID, 'blog_tags', '', ' ') ?>
						<?php if ($tg) { ?>
							<div class="tags">
								<?php echo $tg; ?>
							</div>
						<?php } ?>
						<a href="<?php echo get_permalink($blogs->ID); ?>">
							<h3 class="blog-title"><?php echo $blogs->post_title; ?></h3>
						</a>
						<p><?php echo $blogs->post_excerpt; ?></p>
						<?php if (get_the_post_thumbnail_url($blogs->ID)) { ?>
							<img src="<?php echo get_the_post_thumbnail_url($blogs->ID); ?>" alt="<?php echo $blogs->post_title; ?>"
								loading="lazy">
						<?php } ?>
					</div>
				<?php } ?>
			</div>
			<div class="lines"></div>
		</div>
	</section>
<?php } ?>

<?php if ($section_5['title']) { ?>
	<section id="partner-sec4">
		<div class="container">
			<div class="sec-heading-wrap">
				<h2><?php echo $section_5['title']; ?></h2>
			</div>
			<div class="partner-blog-wrap">
				<div class="partner-slides">
					<?php $blog = $section_5['impact_posts']; ?>
					<?php foreach ($blog as $key => $postinner) { ?>
						<div class="impact-inner">
							<div class="impact-left">
								<?php
								$tg = get_the_term_list($postinner->ID, 'blog_tags', '', ' ');
								if ($tg) { ?>
									<div class="tags">
										<?php echo $tg; ?>
									</div>
								<?php } ?>
								<a href="<?php echo get_permalink($postinner->ID); ?>">
									<h3 class="blog-title"><?php echo $postinner->post_title; ?></h3>
								</a>
								<div class="line-before-text">
									<p><?php echo $postinner->post_excerpt; ?></p>
								</div>
							</div>
							<div class="impact-right">
								<div class="tag-on-img">
									<p><?php echo get_the_term_list($postinner->ID, 'blog_services', '', ', '); ?></p>
								</div>
								<img src="<?php echo get_the_post_thumbnail_url($postinner->ID); ?>"
									alt="<?php echo $postinner->post_title; ?>" loading="lazy">
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="slider-count bordder-line">
				<span class="pagingInfo"></span>
				<!-- 			<div class="my-slick-arrows ">
					<button class="part-prev slick-prev slick-arrow" style="transform: rotate(90deg);">
						<svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
						  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#FF0000"/>
						</svg>
					</button>
					<button class="part-next slick-next slick-arrow" style="transform: rotate(-90deg);">
						<svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
						  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#FF0000"/>
						</svg>
					</button>
				</div> -->
			</div>
			<div class="lines"></div>
		</div>
	</section>
<?php } ?>


<?php if ($section_6['title']) { ?>
	<section class="blog-sec">
		<div class="container">
			<div class="impact-title">
				<h2><?php echo $section_6['title']; ?></h2>
			</div>
			<div class="result-row">
				<?php foreach ($section_6['num_section'] as $key => $nums) { ?>
					<div class="result-num">
						<div class="makecenter">
							<?php
							$numVal = $nums['number'];
							// If it's purely numeric, give it the counter class
					
							if (is_numeric($numVal)) { ?>
								<span class="counter plus"><?php echo $numVal; ?></span>
							<?php } else { ?>
								<!-- Non-numeric values (like "60 to 80") stay static -->
								<span class="counter-static"><?php echo $numVal; ?></span>
							<?php } ?>

							<span class="num-suf"><?php echo $nums['suffix']; ?></span>
						</div>
						<p><?php echo $nums['content']; ?></p>
					</div>
				<?php } ?>
			</div>
			<div class="lines"></div>
		</div>
	</section>
<?php } ?>

<?php if ($section_7['title']) { ?>
	<section class="blog-sec">
		<div class="container">
			<div class="partner-sec">
				<div class="partner-title">
					<h2><?php echo $section_7['title']; ?></h2>
				</div>
				<div class="partner-logos">
					<?php foreach ($section_7['partner_logos'] as $key => $logo) { ?>
						<img src="<?php echo $logo['images']; ?>" alt="Partner-logo" class="partner-logo" loading="lazy">
					<?php } ?>
				</div>
			</div>
			<div class="lines"></div>
		</div>
	</section>
<?php } ?>


<?php if ($section_9['title']) { ?>
	<section class="form-sec">
		<div class="container">
			<div class="form-title">
				<h2><?php echo $section_9['title']; ?></h2>
			</div>
			<div class="form-wrapper">
				<?php echo $section_9['content']; ?>
			</div>
			<div class="lines"></div>
		</div>
	</section>
<?php } ?>

<?php get_footer(); ?>

<script>
	$(document).ready(function () {
		$('.counter').counterUp({
			delay: 10,
			time: 1200
		});
	});
</script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>