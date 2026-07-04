<?php
/**
 * Template Name: Partners
 * The template used for displaying fullwidth page content in Publications page
 *
 * @package hitmag
 */

get_header(); ?>
<style>
@media(max-width: 767.98px){
	.page-template-template-partners .banner-text-wrap-2{width:100%;}
	.airo_stroy_banner .left-banner{width:80%;}
	.airo_stroy_banner .right-image{width:20%;}
	.row.airo_stroy_banner{display:flex!important;}
	.success-wrap{width:100%!important;}
}
@media(max-width: 575.98px){
	.page-template-template-partners .banner-text-wrap-2{width:80%; padding: 12% 0;}
	.banner-text-wrap-2 .pos-relative{background:#0D004A;}
	.banner-subhead-wrap {padding-left:15px;color:#fff;}
	.partner-sec2 .partner-sec2-right{padding:40px 20px 40px 80px;}
	.partner-sec2-right::before{left:20px;top:50px;width:30px;}
	.partner-sec3-subhead-wrap, .single-partner-wrap{padding:20px;}
	.p-0.bordder-line:nth-child(3) {background:#E5E3CD;}
	.p-0.bordder-line:nth-child(4), .bordder-line:nth-child(4) .single-partner-wrap.grey-bg {background:#fff;}
	.p-0.bordder-line:nth-child(5) {background:#E5E3CD;}
	.p-0.bordder-line:nth-child(7){background:#E5E3CD;}
	.partner-blog-wrap{padding:40px 0 0;}
	.impact-left{padding:0 20px;}
	.slider-count{padding:20px;}
	.impact-left .blog-title{margin-top:0;}
	
}
@media(max-width: 1024px) and (min-width: 768px){
		
}
</style>

<?php 
	$banner = get_field('banner');
	$sec2 = get_field('section_2');	
	$sec3 = get_field('section_3');
	$partners = $sec3['partners'];
	$sec4 = get_field('section_4');
	$post_type = $sec4['section_posts'];
	$form = get_field('pre_footer_form');
?>


<section id="banner-2">
	<div class="banner-wrap container-l-auto">
				<div class="banner-text-wrap-2 desktop">
					<div class="row">
						<div class="col-md-5 col-sm-5 col-xs-6 p-0">
							<div class="banner-bg blue-bg">
								<h1><?php echo $banner['heading']; ?></h1>
							</div>							
						</div>
						<div class="col-md-7 col-sm-7 col-xs-6 pos-relative">
							<div class="banner-subhead-wrap">
								<p><?php echo $banner['sub_heading']; ?></p>
							</div>								
						</div>
					</div>	
				</div>
			<div class="banner-text-wrap-2 mobile blue-bg">
					<div class="row">
						<div class="col-md-5 col-sm-5 col-xs-6 p-0">
							<div class="banner-bg ">
								<h1><?php echo $banner['heading']; ?></h1>
							</div>							
						</div>
						<div class="col-md-7 col-sm-7 col-xs-6 pos-relative">
							<div class="banner-subhead-wrap">
								<p><?php echo $banner['sub_heading']; ?></p>
							</div>								
						</div>
					</div>	
				</div>
			
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 p-0">
				<img src="<?php echo $banner['desktop_image']; ?>" alt="Banner" class="img_width" loading="lazy">
			</div>			
		</div>
	</div>
</section>


<section class="partner-sec2">
	<div class="container-l-auto">
		<div class="row">
			<div class="col-md-3 col-sm-12 bl bb"></div>
			<div class="col-md-9 col-sm-12 partner-sec2-right bordder-line">				
				<div><?php echo $sec2['content']; ?></div>
			</div>
		</div>
	</div>
</section>


<section id="partner-sec3" class="">
	<div class="container ">
		<div class="sec-heading-wrap">
			<h2><?php echo $sec3['heading']; ?></h2>
		</div>	
		<div class="partner-sec3-subhead-wrap">
			<p><?php echo $sec3['sub_heading']; ?></p>
		</div>
		<div class="row bordder-line">
			<?php 
			$i=1;
			foreach($partners as $part){ ?>
			<div class="col-md-6 col-sm-6 col-xs-12 p-0 bordder-line <?php if($i==1 || $i==4 || $i==5 || $i==8 || $i==9 || $i==12){ echo "grey-bg"; } ?>">
				<div class="single-partner-wrap">
					<a href="<?php echo $part['link']; ?>"><img src="<?php echo $part['logo']; ?>" alt="partner-logo" loading="lazy"></a>
<!-- 					<h4><?php echo $part['title']; ?></h4> -->
					<div><?php echo $part['description']; ?></div>
				</div>
			</div>
			<?php 
			$i++;	
			} ?>
		</div>
	</div>
</section>	

<?php if($sec4['heading']){ ?>
<section id="partner-sec4">
	<div class="container">
		<div class="sec-heading-wrap">
			<h2><?php echo $sec4['heading']; ?></h2>
		</div>	
		<div class="partner-blog-wrap">		
			<div class="partner-slides">
				<?php foreach ($post_type as $key => $postinner) { ?>
					<div class="impact-inner">
						<div class="impact-left">
							<?php 
							$tg = get_the_term_list( $postinner->ID, 'blog_tags', '', ' ' );							 
							if($tg){ ?>
							<div class="tags">
								<?php echo $tg; ?>
							</div>
							<?php } ?>
							<a href="<?php echo get_permalink($postinner->ID); ?>"><h3 class="blog-title"><?php echo $postinner->post_title; ?></h3></a>
								<div class="line-before-text">
									<p><?php echo $postinner->post_excerpt; ?></p>
								</div>
						</div>
						<div class="impact-right">
							<div class="tag-on-img"><p><?php echo get_the_term_list( $postinner->ID, 'blog_services', '', ', ' ); ?></p></div>
								<img src="<?php echo get_the_post_thumbnail_url($postinner->ID); ?>" alt="<?php echo $postinner->post_title; ?>">
							</div>
						</div>
				<?php } ?>
			</div>
		</div>
		<div class="slider-count bordder-line">
			<span class="pagingInfo"></span>
			<div class="my-slick-arrows ">
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
				</div>
		</div>
	</div>	
</section>	
<?php } ?>

<div class="container ">
	<div class="sec-gap"></div>
</div>

<section class="form-sec">
	<div class="container">
		<div class="form-title">
			<h2><?php echo $form['heading']; ?></h2>
		</div>
		<div class="form-wrapper">
			<?php 
				$sc = $form['form_shortcode'];
				echo do_shortcode($sc); 
			?>
		</div>
	</div>
</section>

<div class="container">
	<div class="sec-gap"></div>
</div>

<!-- <section id="pre-footer">
	<div class="container">
		<div class="pre-footer-wrap">
			<img src="<?php echo get_field('image'); ?>" class="img_width">
		</div>
	</div>
</section> -->

<?php get_footer(); ?>