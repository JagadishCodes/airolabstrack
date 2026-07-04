<?php
/**
 * Template Name: Our Story
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

<section id="story-sec2">
	<div class="container-l-auto">
		<div class="story-sec2-wrap">
			<h2><?php echo $sec2['heading']; ?></h2>
			<div class="story-sec2-content">
				<?php echo $sec2['content']; ?>
			</div>
		</div>
	</div>
</section>


<section id="story-sec3">
	<div class="container">
		<div class="row br bb bl">
			<div class="col-md-6 col-sm-6 col-xs-6 p-0 br">
				<div class="story-sec3-wrap">
					<h2><?php echo $vision['heading']; ?></h2>
					  <div class="ss-cnt-wrp">
						  <p><?php echo $vision['content']; ?></p>
					  </div>
				</div>				
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 p-0">
				<div>
					<img src="<?php echo $vision['image']; ?>" alt="Our Vision" class="img_width">
				</div>
			</div>
		</div>
    <div class="sec-heading-wrap">
      <h2><?php echo $mission['heading']; ?></h2>
    </div>  
		<div class="row">
      <?php foreach ($content as $cnt) { ?>
			<div class="col-md-3 col-sm-3 col-12 p-0 rise-br">
				<div class="rise-card">
				  <div class="rise-text">
					<h2><?php echo $cnt['letter']; ?></h2>
					<div class="rise-text-name">
					 <?php echo $cnt['name']; ?>
					</div>
					<div class="rise-text-title"><?php echo $cnt['content']; ?></div>
				  </div>
				  <div class="rise-hover-text">
					<div class="rize-t-wrap"><?php echo $cnt['hover_content']; ?></div>    
				  </div>
				</div>							
			</div>
    <?php } ?>
		</div>	
	</div>
</section>

<section id="story-sec4">
	<div class="container">
		<div class="sec-heading-wrap aj-sec-wrap custom-listing-sec2-content ">
			<h2>Our Journey</h2>						
		</div>
		<div class="aj-desc ">
			<p>Airo was founded in 2018 by Dev Singh, a seasoned Fortune 2000 executive who saw the oncoming wave of AI and emerging technologies and its revolutionary potential in the way the world runs its business. Driven by the vision of making AI adoption seamless and scalable, he along with his co-founders and senior management team have built Airo from the ground up—creating one of the fastest growing trusted partners for businesses navigating the complexities of AI, automation, and cloud integration.</p>
            <p>Today, with our presence across four continents, Airo empowers its Fortune 2000 enterprise clients to unlock efficiency, innovation, and growth through cutting-edge AI solutions. The name “Airo” reflects our DNA, merging <strong>AI (<span class="co">A</span>rtificial <span class="co">I</span>ntelligence) </strong>and<strong> RO (<span class="co">Ro</span>botic Process Automation)</strong> to represent our relentless pursuit of enterprise intelligence. Under Dev’s leadership, Airo has been recognized as a global leader, earning prestigious accolades such as the Forbes Next 1000 Entrepreneurs Award and the Inc. 5000 listing consistently since the year 2020.</p>
		</div>

		<div class="p-40-wrap">
		    <div class="timeline-container">        
		        <div class="year-timeline">
		          		             <span class="year" data-index="0">2025</span>
		          		             <span class="year active" data-index="1">2024</span>
		          		             <span class="year" data-index="2">2023</span>
		          		             <span class="year" data-index="3">2022</span>
		          		             <span class="year" data-index="4">2021</span>
		          		             <span class="year" data-index="5">2020</span>
		          		             <span class="year" data-index="6">2019</span>
		          		             <span class="year" data-index="7">2018</span>
		          		        </div>
		    </div>

		    <div class="progress-container">
		        <div class="progress-bar" style="width: 14.2857%;"></div>
		    </div>
		    <div class="j-slider-container">
		        <div class="j-slider" style="transform: translateX(-100%);">
		            		            <div class="j-slide">
		                <div class="row aj-row">     
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0 mobile">
		                        <img src="/wp-content/uploads/2026/04/WhatsApp-Image-2026-03-24-at-12.47.03-PM-1.jpeg" class="img_width lightboxx-trigger">
		                    </div>      
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0">
		                        <div class="aj-title">2025</div>
		                        <div class="aj-content">
		                           <ul>
									<li>Established AI Center of Excellence (CoE) focusing on Agentic AI and Generative AI</li>
									<li>Made Inc. 5000 list for the 4th consecutive year</li>
									<li>Renewed Great Place to Work and ISO 27001 certifications</li>
									<li>Expanded footprint in UAE, partnership with key local players</li>
									<li>Expanded our footprint in India – Opening our Pune, Chandigarh, Noida and Mumbai Office</li>
									</ul>
		                        </div>  
		                    </div>
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0 desktop">
		                        <img src="/wp-content/uploads/2026/04/WhatsApp-Image-2026-03-24-at-12.47.03-PM-1.jpeg" class="img_width lightboxx-trigger">
		                    </div>  
		                </div>
		            </div>
		            		            <div class="j-slide">
		                <div class="row aj-row">     
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0 mobile">
		                        <img src="/wp-content/uploads/2025/03/img_oujourney_2024.png" class="img_width lightboxx-trigger">
		                    </div>      
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0">
		                        <div class="aj-title">2024</div>
		                        <div class="aj-content">
		                           <ul>
										<li>Recognized by Forbes as one of America’s best startup employers</li>
										<li>Made the Inc. 5000 list for the 3rd time in a row</li>
										<li>Received ‘Great Place to Work’ recognition globally</li>
										<li>Renewed ISO 27001 certifications</li>
										<li>Made our first strategic acquisition</li>
									</ul>
		                        </div>  
		                    </div>
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0 desktop">
		                        <img src="/wp-content/uploads/2025/03/img_oujourney_2024.png" class="img_width lightboxx-trigger">
		                    </div>  
		                </div>
		            </div>
		            		            <div class="j-slide">
		                <div class="row aj-row">     
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0 mobile">
		                        <img src="/wp-content/uploads/2024/07/IMG_6.png" class="img_width lightboxx-trigger">
		                    </div>      
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0">
		                        <div class="aj-title">2023</div>
		                        <div class="aj-content">
		                           <ul>
									<li>Two-time Inc. 5000 honoree among the fastest-growing companies in the U.S.</li>
									<li>Completed building 1,000 AI and Automation projects for our customers</li>
									<li>Received ISO 27001:2022 certification</li>
									<li>Expanded partners portfolio to Data Modernization and AI space</li>
									</ul>
		                        </div>  
		                    </div>
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0 desktop">
		                        <img src="/wp-content/uploads/2024/07/IMG_6.png" class="img_width lightboxx-trigger">
		                    </div>  
		                </div>
		            </div>
		            		            <div class="j-slide">
		                <div class="row aj-row">     
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0 mobile">
		                        <img src="/wp-content/uploads/2024/07/IMG_5.png" class="img_width lightboxx-trigger">
		                    </div>      
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0">
		                        <div class="aj-title">2022</div>
		                        <div class="aj-content">
		                           <ul>
									<li>Made the Inc. 5000 list – One of the fastest growing companies in the US</li>
									<li>Made the HFS Hot Vendor List – impacting enterprises by scaling AI</li>
									<li>Launched OMNI – AI-RPA citizen developer platform</li>
									<li>Expanded partners portfolio to Cloud and Cyber security space</li>
									</ul>
		                        </div>  
		                    </div>
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0 desktop">
		                        <img src="/wp-content/uploads/2024/07/IMG_5.png" class="img_width lightboxx-trigger">
		                    </div>  
		                </div>
		            </div>
		            		            <div class="j-slide">
		                <div class="row aj-row">     
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0 mobile">
		                        <img src="/wp-content/uploads/2024/07/IMG_4.png" class="img_width lightboxx-trigger">
		                    </div>      
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0">
		                        <div class="aj-title">2021</div>
		                        <div class="aj-content">
		                           <ul>
									<li>Listed by Forbes in ‘Next 1000’ Growth Companies in the US</li>
									<li>Completed building 500 AI and Automation Bots for our customers</li>
									<li>Expanded partners portfolio to the niche AI and Automation space</li>
									<li>Geographical expansion – Opened our Bangalore Office</li>
									</ul>
		                        </div>  
		                    </div>
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0 desktop">
		                        <img src="/wp-content/uploads/2024/07/IMG_4.png" class="img_width lightboxx-trigger">
		                    </div>  
		                </div>
		            </div>
		            		            <div class="j-slide">
		                <div class="row aj-row">     
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0 mobile">
		                        <img src="/wp-content/uploads/2024/07/IMG_3.png" class="img_width lightboxx-trigger">
		                    </div>      
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0">
		                        <div class="aj-title">2020</div>
		                        <div class="aj-content">
		                           <ul>
									<li>Launched ViKi – Voice and AI-enabled Telehealth Platform</li>
									<li>Expanded partners portfolio to AI and Data space</li>
									<li>Developed &amp; launched ‘Data for AI’ practice to build AI foundation</li>
									<li>Recognized as one top 5 RPA startups impacting the Pharma Industry</li>
									</ul>
		                        </div>  
		                    </div>
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0 desktop">
		                        <img src="/wp-content/uploads/2024/07/IMG_3.png" class="img_width lightboxx-trigger">
		                    </div>  
		                </div>
		            </div>
		            		            <div class="j-slide">
		                <div class="row aj-row">     
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0 mobile">
		                        <img src="/wp-content/uploads/2024/07/IMG_2.png" class="img_width lightboxx-trigger">
		                    </div>      
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0">
		                        <div class="aj-title">2019</div>
		                        <div class="aj-content">
		                           <ul>
									<li>Doubled the company size</li>
									<li>Set up Airo Hub – a Suite of prebuilt AI assets for various industry use cases</li>
									<li>Expanded partners portfolio to AWS and SAP</li>
									<li>Launched ‘Cloud for AI’ practice to accelerate AI adoption</li>
									<li>Finalist in Chicago Innovation Awards, Crain’s recognition for CEO</li>
									</ul>
		                        </div>  
		                    </div>
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0 desktop">
		                        <img src="/wp-content/uploads/2024/07/IMG_2.png" class="img_width lightboxx-trigger">
		                    </div>  
		                </div>
		            </div>
		            		            <div class="j-slide">
		                <div class="row aj-row">     
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0 mobile">
		                        <img src="/wp-content/uploads/2024/07/IMG_1.png" class="img_width lightboxx-trigger">
		                    </div>      
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0">
		                        <div class="aj-title">2018</div>
		                        <div class="aj-content">
		                           <ul>
									<li>Airolabs.ai founded in Chicago</li>
									<li>Invested in setting up AI Innovation Lab to create AI-led assets</li>
									<li>Landed first client within 2nd month of operations</li>
									<li>Formalized partnerships with Google, Microsoft, Automation Anywhere, UiPath</li>
									<li>Won the Automation Anywhere Genius Bot challenge award</li>
									<li>Started India operations</li>
									</ul>
		                        </div>  
		                    </div>
		                    <div class="col-md-6 col-sm-6 col-xs-6 p-0 desktop">
		                        <img src="/wp-content/uploads/2024/07/IMG_1.png" class="img_width lightboxx-trigger">
		                    </div>  
		                </div>
		            </div>
		             
		        </div>
		    </div>
		    <div class="lightboxx">
			  <span class="lightboxx-close">×</span>
			  <img id="lightboxx-image" src="" alt="Expanded Image">
			</div>
    
	    </div>
</div>

</section>




<section id="story-sec6">
	<div class="container">
		<div class="sec-heading-wrap">
			<h2><?php echo $recognize['heading']; ?></h2>
		</div>
		<!-- <div class="client-logos">
			<?php foreach($logos as $logo) { ?>
			<div class="client-logo-wrap">
				<a href="<?php echo $logo['link']; ?>"><img src="<?php echo $logo['image']; ?>" alt="awards"></a>
			</div>				
			<?php } ?>
		</div> -->
    <div class="row c-logo">
      <?php 
       $i = 1; 
      foreach($logos as $logo) { if($i <= 6){?>
        <div class="col">
          <div class="client-logo-wrap">
           <!--<a href="<?php echo $logo['link']; ?>"><img src="<?php echo $logo['image']; ?>" alt="awards"></a>  -->
			  
			   <?php if (!empty($logo['link'])): ?>
        <a href="<?php echo $logo['link']; ?>">
            <img src="<?php echo $logo['image']; ?>" alt="awards">
    <div class="hov-arrow"><img src="/wp-content/uploads/2024/04/div-icnArrow.svg" alt="arrow"></div> 
        </a>
    <?php else: ?>
        <img src="<?php echo $logo['image']; ?>" alt="awards">   
    <?php endif; ?>         
        
          </div>
        </div>
        <?php }$i++;} ?>
    </div>
    <div class="row c-logo">
      <?php 
       $j = 1; 
      foreach($logos as $logo) { if($j >= 7){?>
        <div class="col">
          <div class="client-logo-wrap">
           <!-- <a href="<?php echo $logo['link']; ?>"><img src="<?php echo $logo['image']; ?>" alt="awards">
            <div class="hov-arrow"><img src="/wp-content/uploads/2024/04/div-icnArrow.svg" alt="arrow"></div></a>-->
			  
			   <?php if (!empty($logo['link'])): ?>
        <a href="<?php echo $logo['link']; ?>">
            <img src="<?php echo $logo['image']; ?>" alt="awards">
    <div class="hov-arrow"><img src="/wp-content/uploads/2024/04/div-icnArrow.svg" alt="arrow"></div> 
        </a>
    <?php else: ?>
        <img src="<?php echo $logo['image']; ?>" alt="awards">
  
    <?php endif; ?>         
			  
			  
          </div>  
        </div>
        <?php }$j++;} ?>
    </div>
	</div>
</section>	

<div class="container">
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