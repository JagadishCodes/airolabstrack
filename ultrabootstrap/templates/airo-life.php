<?php
/**
 * Template Name: Airo life
 * The template used for displaying fullwidth page content in Publications page
 *
 * @package hitmag
 */

get_header(); ?>

<?php 
$banner = get_field('banner');
$airo_vibe = get_field('airo_vibe');
$airo_for_you = get_field('airo_for_you');
$airo_rockstars = get_field('airo_rockstars');
$join_us = get_field('join_us');
?>

<style>
	.customers-title{
		border: 1px solid #E5E3CD !important;
	}
	.customers-inner{
		background-color: #0D004A;
	}
	.customers-main .my-slick-arrows{
		background-color: #E5E3CD;
	}
	.my-slick-arrows.color-white .slick-arrow{
		border: 1px solid #0D004A;
	}
</style>

<?php if($banner['airo_title']){ ?>
<section id="banner" class="desk-ban">
	<div class="container-l-auto">
		<div class="life-row1">
			<div class="life-ban1">
				<h1><?php echo $banner['airo_title']; ?></h1>
			</div>
			<div class="life-ban2">
				<img src="<?php echo $banner['banner_image']; ?>" alt="banner" class="img_width" loading="lazy">
			</div>
			<div class="life-ban3"></div>
		</div>
		<div class="life-row2">
			<div class="life-ban4"></div>
			<div class="life-ban5">
				<p><?php echo $banner['airo_subtitle']; ?></p>	
			</div>
			<div class="life-ban6">
				<img src="<?php echo $banner['banner_side_img']; ?>" alt="banner" class="img_width" loading="lazy">
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php if($banner['airo_title']){ ?>
<section id="banner" class="mobile-ban">
	<div class="container-l-auto">		
		<div class="mob-life-row1">
			<div class="mob-life-ban1">
				<h1><?php echo $banner['airo_title']; ?></h1>
				<p><?php echo $banner['airo_subtitle']; ?></p>	
			</div>
			<div class="mob-life-ban2"></div>
		</div>
		<div class="mob-life-row2">
			<img src="/wp-content/uploads/2024/05/div-img-30.png" alt="mobile banner image" class="img_width" loading="lazy">
		</div>
	</div>
</section>
<?php } ?>

<?php if($airo_vibe['title']){ ?>
<section class="life-sec2">
	<div class="container-l-auto">
		<div class="sec-gap mobile"></div>
		<div class="airo-vibe">
			<div class="airovibe-heading">
				<h2><?php echo $airo_vibe['title']; ?></h2>
			</div>
			<div class="airovibe-details">
				<div>
					<h3 class="sec-2-content"><?php echo $airo_vibe['subtitle']; ?></h3>
				</div>
				<div class="airovibe-sec2-content">
				<p><?php echo $airo_vibe['description']; ?></p>
				</div>
			</div>
		</div>
		<div class="lines"></div>
	</div>
</section>
<?php } ?>

<?php if($airo_for_you['title']){ ?>
<section id="story-sec5" >
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12 values-left p-0 bl">
				<h2><?php echo $airo_for_you['title']; ?></h2>
			</div>
			<div class="col-md-7 col-sm-12 p-0">
				<img src="<?php echo $airo_for_you['image']; ?>" alt="Value image" class="img_width" loading="lazy">
			</div>
		</div>
		<!-- Accordion -->
		<div class="acc-container">   
			<?php foreach ($airo_for_you['values'] as $key => $data_slide) { ?>
			<div class="acc">
				<div class="acc-head">
					<h4><?php echo $data_slide['heading']; ?></h4>
				</div>
				<div class="acc-content">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 p-0">
							<p><?php echo $data_slide['description']; ?></p>
						</div>
					</div>					
				</div>
			</div>
			<?php } ?>
		</div>	
		<div class="sec-gap"></div>
	</div>
</section>
<?php } ?>

<?php if($airo_rockstars['title']){ ?>
<section class="customers-sec">
	<div class="container-l-auto">
		<div class="customers-title">
			<h2><?php echo $airo_rockstars['title']; ?></h2>
		</div>
		<div class="customers-main row align-items-end">
			<div class="col-lg-2 col-md-3 col-sm-2">
				<div class="my-slick-arrows color-white">
					<button class="customers-prev slick-prev slick-arrow" style="transform: rotate(90deg);">
						<svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
						  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#0D004A"/>
						</svg>
					</button>
                	<button class="customers-next slick-next slick-arrow" style="transform: rotate(-90deg);">
                		<svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558">
						  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#0D004A"/>
						</svg>
                	</button>
				</div>
			</div>
			<div class="col-lg-10 col-md-9 col-sm-10">
				<div class="airo-customers-slider">
					<?php foreach ($airo_rockstars['testimonials'] as $key => $testimonial) { ?>
						<div class="customers-inner">
							<div class="customers-name">
								<h4><?php echo $testimonial['name']; ?></h4>
								<p><?php echo $testimonial['position']; ?></p>
							</div>
							<div class="customers-content">
								<h3><?php echo $testimonial['testimonial_title']; ?></h3>
								<p><?php echo $testimonial['testimonial_content']; ?></p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="sec-gap"></div>
	</div>
</section>
<?php } ?>

<section class="join-us-sec">
	<div class="container desktop">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0">
				<img src="<?php echo $join_us['image']; ?>" alt="join" class="img_width desktop" loading="lazy">
				<?php if($join_us['image_for_mobile']){ ?>
					<img src="<?php echo $join_us['image_for_mobile']; ?>" alt="join" class="img_width mobile" loading="lazy">
				<?php } else { ?>
					<img src="<?php echo $join_us['image']; ?>" alt="join" class="img_width mobile" loading="lazy">
				<?php } ?>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0"></div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0">
				<div class="join-us-text">
					<div class="row">
						<div class="join-us-left">
							<h2><?php echo $join_us['title']; ?></h2>						
						</div>
					</div>	
				</div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0 bl bb">	
				<img src="<?php echo $join_us['image_2']; ?>" alt="<?php echo $join_us['title']; ?>" class="img_width" loading="lazy">
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0 full-btn">
				<a href="<?php echo $join_us['button_link']['url']; ?>" target="<?php echo $join_us['button_link']['target']; ?>" class="mybtn"><?php echo $join_us['button_text']; ?></a>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0 bb"></div>
		</div>
		<div class="lines"></div>
	</div>
	<div class="container-l-auto mobile">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-9 p-0">				
				<?php if($join_us['image_for_mobile']){ ?>
					<img src="<?php echo $join_us['image_for_mobile']; ?>" alt="<?php echo $join_us['title']; ?>" class="img_width mobile" loading="lazy">
				<?php } else { ?>
					<img src="<?php echo $join_us['image']; ?>" alt="<?php echo $join_us['title']; ?>" class="img_width mobile" loading="lazy">
				<?php } ?>
			</div>
			<div class="col-sm-2 col-3 p-0 bt"></div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-9 p-0 bl bb">
				<div class="join-us-text">					
					<h2><?php echo $join_us['title']; ?></h2>							
				</div>
			</div>
			<div class="col-sm-2 col-3 p-0 bl">	
				<img src="<?php echo $join_us['image_2']; ?>" alt="<?php echo $join_us['title']; ?>" class="img_width" loading="lazy">
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0 full-btn">
				<a href="<?php echo $join_us['button_link']['url']; ?>" target="<?php echo $join_us['button_link']['target']; ?>" class="mybtn"><?php echo $join_us['button_text']; ?></a>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0 bb"></div>
		</div>
		<div class="lines"></div>
	</div>
</section>

<?php get_footer(); ?>
