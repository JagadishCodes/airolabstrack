<?php
/**
 * Template Name: Airo Way
 * The template used for displaying fullwidth page content in Publications page
 *
 * @package hitmag
 */

get_header(); ?>
<style>
	.banner-bg {
    border-right: 0;
}
	.sec2-poss-wrap1 {
    border-top: 0;
    border-bottom: 0;
}
.success-content{
	color: #fff;
	padding-top: 0px;
}	
@media(max-width: 767.98px){
	.page-template-template-airo-way .banner-text-wrap{width:100%;}
	.airo_stroy_banner .left-banner{width:80%;}
	.airo_stroy_banner .right-image{width:20%;}
	.row.airo_stroy_banner{display:flex!important;}
	.success-wrap{width:100%!important;}
}
@media(max-width: 575.98px){
		
	.page-template-template-airo-way .banner-text-wrap{width:80%;height:280px;padding:60px 20px;}
	.banner-text-wrap .col-sm-6{padding:0;}
	.banner-text-wrap .banner-bg{padding:0;}
	.banner-text-wrap .br{border:0;}
	.banner-text-wrap h1{font-size:32px;margin-bottom:25px;}
	.sec-heading-wrap, .way-sec2-title, .sec2-poss-wrap1, .sec2-poss-wrap2, .rise-head, .rise-content, .airo-sec5-title-wrap, #airo-sec5 .success-wrap{padding:20px!important;}
	.rise-content{padding-top:0;}
	.sec2-poss-wrap2 p::before{width:5%;}
	.sec2-poss-wrap2 p{padding-left:40px;}
	ul.poss-list li:last-child{margin-bottom:0;padding-bottom:0;}
	.sec2-poss-wrap2 p::before{top:20px;}
	.sec2-poss-wrap2 p{padding-top:15px;}
}
	@media(max-width: 1024px) and (min-width: 768px){
		
		.success-wrap{padding:20px!important;font-size:13px;}
		.success-wrap h4{font-size:16px;}
	}
</style>
<?php 
	$banner = get_field('banner');
	$sec2 = get_field('section_2');	
	$questions = $sec2['questions'];
	$rise = get_field('rise');
	$rise_points = $rise['rise_points'];
	$section5 = get_field('section_5');
	$partners = $section5['partners'];
	$recognize = get_field('recognize');
	$logos = $recognize['logos'];
	$inov = get_field('innovation');
	$form = get_field('pre_footer_form');
?>

<section id="banner">
	<div class="banner-wrap container-l-auto">
		<div class="row desktop">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0">
				<img src="<?php echo $banner['desktop_banner']; ?>" alt="Banner" class="img_width">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0"></div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0 bl">
				<div class="banner-text-wrap blue-bg">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 p-0">
							<div class="banner-bg">
								<h1><?php echo $banner['heading']; ?></h1>
							</div>							
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="banner-bg">
								<p><?php echo $banner['sub_heading']; ?></p>
							</div>								
						</div>
					</div>	
				</div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0 bt bl desktop">	
				<img src="<?php echo $banner['side_image']; ?>" alt="Banner" class="img_width">
			</div>
		</div>
		<div class="row mobile airo_stroy_banner">
			<div class="col-md-10 col-sm-10 col-xs-10 p-0 left-banner">
				<img src="<?php echo $banner['desktop_banner']; ?>" alt="Banner" class="img_width">
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 p-0 right-image">
				<img src="<?php echo $banner['side_image']; ?>" alt="Banner" class="img_width">
			</div>
		</div>
	</div>
</section>

<section id="airo-way-sec2">
	<div class="container-l-auto">
		<div class="sec-heading-wrap grey-bg">
			<h2><?php echo $sec2['heading']; ?></h2>
		</div>	
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 p-0">	
				<div class="way-sec2-title">
					<h4><?php echo $sec2['sub_heading']; ?>	</h4>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">	

			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 p-0">	
				<div class="sec2-poss-wrap1">
					<h4><?php echo $sec2['question_title']; ?></h4>
					<ul class="poss-list">
						<?php foreach($questions as $que) { ?>
							<li><?php echo $que['question']; ?></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 p-0 orange-bg">	
				<div class="sec2-poss-wrap2 orange-bg">
					<h4><?php echo $sec2['solution_title']; ?></h4>
					<?php echo $sec2['solution']; ?>
				</div>
			</div>
		</div>
	</div>	
</section>	

<section class="airo-video-sec" id="airo-vid">
	<div class="container">
		<div class="row">
			<div class="video-player">
				<img src="/wp-content/uploads/2024/10/airo-video-thumbnail.jpg" alt="" id="cover">
			    <svg xmlns="http://www.w3.org/2000/svg" width="12.558" height="12.558" viewBox="0 0 12.558 12.558" id="cover">
				  <path id="icn-dropdown" d="M125.882,8.882V2.8a2.8,2.8,0,0,0-2.8-2.8H117Z" transform="translate(95.292 -76.452) rotate(135)" fill="#fff"></path>
				</svg>
			    <iframe width="560" height="315" src="https://player.vimeo.com/video/1014339623?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="player"></iframe>
				
			</div>
		</div>
	</div>
</section> 


<section id="airo-way-sec4">
	<div class="container">
		<div class="sec-gap"></div>
		<div class="sec-heading-wrap">
			<h2><?php echo $rise['heading']; ?></h2>
		</div>
		<div class="rise-container">        
			<?php foreach($rise_points as $rp) { ?>
			<div class="rise">
				<div class="rise-head">
					<h4><?php echo $rp['title']; ?></h4>
				</div>
				<div class="rise-content ">
					<div class="rise-wrap">					
						<p><?php echo $rp['content']; ?></p>						
					</div>					
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>

<div class="container ">
	<div class="sec-gap"></div>
</div>

<section id="airo-sec5">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12 p-0 bl br bb">	
				<div class="airo-sec5-title-wrap">
					<h2><?php echo $section5['heading']; ?></h2>
				</div>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12 p-0 bb">	
				<img class="desktop img_width img_height" src="<?php echo $section5['image']; ?>" alt="success">
				<img class="mobile img_width img_height" src="/wp-content/uploads/2024/05/airoway-mob.png" alt="success">
			</div>
		</div>	
<!-- 		<div class="row">
			<?php foreach($partners as $part){ ?>
			<div class="success-wrap">
				<h4><?php echo $part['title']; ?></h4>
				<div class="success-content">
					<?php echo $part['content']; ?>
				</div>
			</div>
			<?php } ?>	
		</div> -->
		<!-- Accordion -->
		<div class="acc-container">        
			<?php foreach($partners as $part) { ?>
			<div class="acc">
				<div class="acc-head">
					<h4><?php echo $part['title']; ?></h4>
				</div>
				<div class="acc-content">
					<div class="row">						
						<div class="col-md-12 col-sm-12 col-xs-12 p-0">
							<div class="success-content"><?php echo $part['content']; ?></div>
						</div>
					</div>					
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>

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


<script>
//javascript

</script>
<?php get_footer(); ?>