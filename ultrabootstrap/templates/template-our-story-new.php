<?php
/**
 * Template Name: Our Story New
 * The template used for displaying fullwidth page content in Publications page
 *
 * @package hitmag
 */

get_header(); ?>
<style>
	

	.orange-bg h4{
		font-size: 18px;
		font-weight: 400;
		line-height: 27px;
		color: white;
	}
	.banner-bg {
    border-right: 0;
}
.ss-cnt-wrp p{
    font-size: 22px;
    width: 85%;
    padding-top: 5%;
    font-family: 'RobotoSlab-Regular';
}	
.rise-card {
    position: relative;
    width: 100%;
	height: 100%;
    background-color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
/*     border: 1px solid #E5E3CD; */
    cursor: pointer;
    overflow: hidden;
    padding: 8% 0 12%;
    text-align: center;
    font-family: 'RobotoSlab-Regular';
}
	.rise-br{
		 border: 1px solid #E5E3CD;
	}	
.rise-text {
  transition: opacity 0.3s ease-in-out;
}      
.rise-text h2{
    color: #FF0000;
    font-size: 3rem; 
}  
.rise-text-name {
    font-size: 26px;
    color: #0D004A;
    padding-top: 0.5vw;
}
.rise-hover-text {
  position: absolute;
  bottom: -100%;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #FF0000;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  transition: bottom 0.3s ease-in-out;
}
.rise-card:hover .rise-text {
  opacity: 0;
}
.rise-card:hover .rise-hover-text {
  bottom: 0;
}
.aj-desc p span{
  color: #FF0000;
}        
.rise-text-title {
    padding: 3% 10% 0;
    font-size: 18px;
    color: #0D004A;
}
.rize-t-wrap {
    padding: 0 10%;
    font-size: 18px;
}
.client-logo-wrap img {
    width: 100%;
}
.c-logo .col{
  padding: 0;
}
.client-logo-wrap{
  position: relative;
}

.hov-arrow {
  position: absolute;
  bottom: 10%;
  right: 10%;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}
.client-logo-wrap:hover .hov-arrow {
  opacity: 1;
}


.j-slider-container {
            position: relative;
            /*width: 600px;*/
            /*height: 350px;*/
            overflow: hidden;
            /*border-radius: 10px;*/
            /*box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);*/
        }

        .j-slider {
            display: flex;
            transition: transform 1s ease-in-out;
        }

        .j-slide {
            min-width: 100%;
            /*height: 350px;*/
        }

        .j-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Progress Bar */
        .progress-container {
            position: relative;            
            height: 8px;
            background: #0D004A;
            margin-top: 10px;
            /*border-radius: 5px;*/
            overflow: hidden;
        }
        .timeline-container {
            position: relative;            
            height: 30px;
            /*background: #ddd;*/
            margin-top: 10px;
            
            overflow: hidden;
        }


        .progress-bar {
            height: 100%;
            width: 0%;
            background-color: #ff0000 !important;
            transition: width 1s linear;
        }

        /* Year Timeline */
        .year-timeline {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            
        }

        .year {
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            color: #0D004A;
            transition: color 0.3s;
        }

        .year.active {
            color: #ff0000;
        }
.aj-row {
	margin-top: 5%;
}        



/* Lightbox Styles */
.lightboxx {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8);
  justify-content: center;
  align-items: center;
  flex-direction: column;
  animation: fadeInn 0.3s ease-in-out;
  z-index: 999;
}

/* Lightbox Image */
.lightboxx img {
  max-width: 80%;
  max-height: 80%;
  transform: scale(0.8);
  transition: transform 0.3s ease-in-out;
 
}

/* Zoom-in effect when lightbox is active */
.lightboxx.active img {
  transform: scale(1);
}

/* Close Button */
.lightboxx-close {
  position: absolute;
  top: 20px;
  right: 30px;
  font-size: 30px;
  color: white;
  cursor: pointer;
  background: rgba(255, 255, 255, 0.3);
  padding: 5px 15px;
  border-radius: 50%;
  transition: background 0.3s;
}

.lightboxx-close:hover {
  background: rgba(255, 255, 255, 0.6);
}

/* Fade-in effect */
@keyframes fadeInn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
.j-slide img:hover{
	 cursor: pointer;
	transform:scale(1.1);
} 

@media(max-width: 767.98px){
	.ss-cnt-wrp p { font-size: 20px; width: 100%; }
	.story-sec2-content::before { top: 20px; }
	.row.c-logo { display: block; }

}
@media(max-width: 575.98px){
	
}
@media(max-width: 480px){

}
@media(max-width: 420px){

}
@media(max-width: 380px){

}
@media(max-width: 320px){

}
@media(max-width: 1024px) and (min-width: 768px){

}
@media(max-width: 1024px) and (min-width: 992px){

}
@media(max-width: 1200px) and (min-width: 1025px){
	
}
@media(max-width: 1300px) and (min-width: 1201px){

}
@media(max-width: 1400px) and (min-width: 1301px){

}
@media (max-width: 1799px) and (min-width: 1500px){

}
@media(min-width: 1800px){

}
 
	


</style>
<?php 
	$banner = get_field('banner');
	$sec2 = get_field('section_2');
	$vision = get_field('our_vision');
	$mission = get_field('our_mission');
  $content = $mission['content'];
	$team = get_field('team');
	$details = $team['member_details'];
	$aj = get_field('aj');
	$jor = $aj['journey'];
	$our_advisors = get_field('our_advisors');
	$advise = $our_advisors['advise'];
	$recognize = get_field('recognize');
	$logos = $recognize['logos'];
	$inov = get_field('innovation');
	$form = get_field('pre_footer_form');
?>

<?php if($banner['desktop_banner']){ ?>
<section id="banner">
	<div class="banner-wrap container-l-auto">
		<div class="row desktop">
			<div class="col-md-10 col-sm-10 col-10 p-0">
				<img src="<?php echo $banner['desktop_banner']; ?>" alt="Banner" class="img_width">
			</div>
			<div class="col-md-2 col-sm-2 col-2 p-0"></div>
		</div>
		<div class="row">
			<div class="col-md-10 col-sm-10 col-10 p-0 bl orange-bg">
				<div class="banner-text-wrap ">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 p-0">
							<div class="banner-bg">
								<h1><?php echo $banner['heading']; ?></h1>
							</div>							
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 p-0">
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
			<div class="col-md-10 col-sm-10 col-10 p-0 left-banner">
				<img src="<?php echo $banner['desktop_banner']; ?>" alt="Banner" class="img_width">
			</div>
			<div class="col-md-2 col-sm-2 col-2 p-0 right-image">
				<img src="<?php echo $banner['side_image']; ?>" alt="Banner" class="img_width">
			</div>
		</div>
	</div>
</section>
<?php } ?>

<section id="story-sec4">
	<div class="container">
		<div class="sec-heading-wrap">
			<h2><?php echo $team['heading']; ?></h2>
		</div>
		<div class="row">
			<?php $i=1; foreach($details as $md) { ?>
			<div class="col-md-3 col-sm-3 col-xs-6 van-p-15">
				<a href="#m<?php echo $i; ?>" data-toggle="modal"><div class="van-wrap">
					<img src="<?php echo $md['profile_image']; ?>" alt="" class="img_width">
					<div class="van-title-wrap">
						<div class="van-title">
							<h4><?php echo $md['name']; ?></h4>
							<p><?php echo $md['designation']; ?></p>
						</div>
						<div class="van-arrow">
							<img src="/wp-content/uploads/2024/04/div-icnArrow.svg">
						</div>
					</div>					
				</div>
				</a>
			</div>
			<div class="modal media-mod team-modal" id="m<?php echo $i; ?>" >
				<div class="container-l-auto">
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<div class="team-modal-wrap">
								<div class="row">
									<div class="col-md-2 col-sm-2 col-xs-6 p-0 ">
										<div class="team-mod-img">
											<img src="<?php echo $md['profile_image']; ?>" alt="<?php echo $md['name']; ?>">
										</div>										
									</div>
									<div class="col-md-10 col-sm-10 col-xs-6 p-0 md-border"> 
										<div class="van-title team-mod-title">
											<h2><?php echo $md['name']; ?></h2>
											<p><?php echo $md['designation']; ?></p>
										</div>									
									</div>
								</div>
								<div class="row">
									<div class="col-md-2 col-sm-2 col-xs-6 p-0">
									</div>
									<div class="col-md-10 col-sm-10 col-xs-6 p-0 md-border"> 
										<div class="van-desc">											
											<div><?php echo $md['description']; ?></div>
										</div>
										<?php if($md['link']){?>
										<div class="md-border p-35 bl-0">
											<a href="<?php echo $md['link']; ?>" target="_blank" rel="noopener noreferrer">Linkedin</a>										</div>
										<?php } ?>
									</div>
								</div>
								<div class="media_description_wrap">
									<p class="cat_name mb-0"><?php echo $post_category;?></p>
									<h3 class="mt-2"><?php echo $post_title; ?></h3>
<!-- 									<?php echo $post_short_description; ?> -->
									<p class="med_desc">
										<?php echo $post_content; ?>
									</p>
								</div>
							</div>
													
						</div>
					</div>
				</div>
			</div>
			</div>
			<?php $i++; } ?>
		</div>
	</div>	
</section>

<div class="container">
	<div class="sec-gap"></div>
</div>

<?php if($our_advisors['heading']){ ?>
<section id="story-sec5">
	<div class="container">
		<div class="sec-heading-wrap">
			<h2><?php echo $our_advisors['heading']; ?></h2>
		</div>		
		<!-- Accordion -->
<!-- 		<div class="acc-container">        
			<?php foreach($advise as $ad) { ?>
			<div class="acc">
				<div class="acc-head">
					<h4><?php echo $ad['title']; ?></h4>
				</div>
				<div class="acc-content">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12 p-0">
							<img src="<?php echo $ad['image']; ?>" alt="success" >
						</div>
						<div class="col-md-8 col-sm-8 col-xs-12 ">
							<p><?php echo $ad['content']; ?></p>
						</div>
					</div>					
				</div>
			</div>
			<?php } ?>
		</div>		 -->
		
		<div class="row br">			
			<?php $jj=1; foreach($advise as $ad) { ?>
			<div class="col-md-3 col-sm-3 col-xs-6 van-p-15">
				<?php if( $ad['content']!="") {  ?>
				<a href="#n<?php echo $jj;?>" data-toggle="modal"><div class="van-wrap">
					<img src="<?php echo $ad['image']; ?>" alt="Mentor" class="img_width">
					<div class="van-title-wrap">
						<div class="van-title">
							<h4><?php echo $ad['title']; ?></h4>
							<p><?php echo $ad['designation']; ?></p>
						</div>
					<div class="van-arrow">
												<img src="/wp-content/uploads/2024/04/div-icnArrow.svg">
											</div>
					</div>					
				</div>
				</a>
				<?php } else { ?>
				<div class="van-wrap">
					<img src="<?php echo $ad['image']; ?>" alt="Mentor" class="img_width">
					<div class="van-title-wrap">
						<div class="van-title">
							<h4><?php echo $ad['title']; ?></h4>
							<p><?php echo $ad['designation']; ?></p>
						</div>
					
					</div>					
				</div>
				
				
				<?php } ?>
			</div>
			
			<div class="modal media-mod team-modal" id="n<?php echo $jj; ?>" >
				<div class="container-l-auto">
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<div class="team-modal-wrap">
								<div class="row">
									<div class="col-md-2 col-sm-2 col-xs-6 p-0 ">
										<div class="team-mod-img">
											<img src="<?php echo $ad['image']; ?>" alt="<?php echo $ad['title']; ?>">
										</div>										
									</div>
									<div class="col-md-10 col-sm-10 col-xs-6 p-0 md-border"> 
										<div class="van-title team-mod-title">
											<h2><?php echo $ad['title']; ?></h2>
											<p><?php echo $ad['designation']; ?></p>
										</div>									
									</div>
								</div>
								<div class="row">
									<div class="col-md-2 col-sm-2 col-xs-6 p-0">
									</div>
									<div class="col-md-10 col-sm-10 col-xs-6 p-0 md-border"> 
										<div class="van-desc">											
											<div><?php echo $ad['content']; ?></div>
										</div>
										<?php if($ad['linkedin_link']){?>
										<div class="md-border p-35 bl-0">
<a href="<?php echo $ad['linkedin_link']; ?>" target="_blank" rel="noopener noreferrer">Linkedin</a>
										</div>
										<?php } ?>
									</div>
								</div>
								
							</div>
													
						</div>
					</div>
				</div>
			</div>
			</div>
			<?php $jj++; } ?>
		</div>
	</div>
</section>	

<div class="container">
	<div class="sec-gap"></div>
</div>

<?php } ?>

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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<!--   <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


<script>
jQuery(document).ready(function($){

 let currentIndex = 0;
        const slides = document.querySelectorAll(".j-slide");
        const slider = document.querySelector(".j-slider");
        const progressBar = document.querySelector(".progress-bar");
        const years = document.querySelectorAll(".year");
        const totalSlides = slides.length;
        const slideInterval = 5000; 

        function updateSlider(index) {
            const offset = -index * 100;
            slider.style.transform = `translateX(${offset}%)`;
            progressBar.style.width = `${(index / (totalSlides - 1)) * 100}%`;

            years.forEach(year => year.classList.remove("active"));
            years[index].classList.add("active");
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlider(currentIndex);
        }

        let autoSlide = setInterval(nextSlide, slideInterval);

        // Click on year to jump to that slide
        years.forEach(year => {
            year.addEventListener("click", () => {
                clearInterval(autoSlide);
                currentIndex = parseInt(year.getAttribute("data-index"));
                updateSlider(currentIndex);
                autoSlide = setInterval(nextSlide, slideInterval);
            });
        });

        updateSlider(currentIndex);




const images = document.querySelectorAll(".lightboxx-trigger");
const lightbox = document.querySelector(".lightboxx");
const lightboxImage = document.getElementById("lightboxx-image");
const closeButton = document.querySelector(".lightboxx-close");

closeButton.addEventListener("click", () => {
  lightbox.classList.remove("active");
  setTimeout(() => (lightbox.style.display = "none"), 300);
});

lightbox.addEventListener("mouseleave", () => {
  lightbox.classList.remove("active");
  setTimeout(() => (lightbox.style.display = "none"), 300);
});





	
});
</script>


<?php get_footer(); ?>