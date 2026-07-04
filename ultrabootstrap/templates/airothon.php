<?php
/**
 * Template Name: Airothon 
 * The template used for displaying fullwidth page content
 *
 * @package hitmag
 */

get_header();
?>

<?php

$airothon_banner = get_field('airothon_banner');
$airothon_about_section = get_field('airothon_about_section');
$airothon_culture = get_field('airothon_culture');
$airothon_section_4 = get_field('airothon_section_4');
$airothon__section_5 = get_field('airothon__section_5');
$airothon_rules = get_field('airothon_rules');
$airothon_team_essentials = get_field('airothon_team_essentials');
$airothon_innovate = get_field('airothon_innovate');
$airothon_submission_guidelines = get_field('airothon_submission_guidelines');
$airothon_rules_originality = get_field('airothon_rules_originality');
$banner = get_field('banner');
$upload_projects = get_field('upload_projects');
$rewards_recognition = get_field('rewards_recognition');
?>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&display=swap');

.airothon-page * {
  font-family: 'RobotoSlab-Regular', sans-serif !important;
}
.btn-light {
    background: #FF0000;
    border: none;
    padding: 11px 27px;
    font-size: 16px;
    line-height: 32px;
    border-radius: 4px;
    width: fit-content;
   color: white !important;
}
	.btn-light:hover {
    color: black !important;
  }
	.show-name img{
		max-width: 100%;
		object-fit: contain;
		aspect-ratio: auto;
	}	
	.reward-slide{
		width: 100%;
	}	
	.Rewards-Recognition-slider{
		padding: 0px 0;
	}
	.ptb{
		padding: 5% 0;
	}	
	.ptb h2{
		padding-bottom: 2%;
	}
.awards-img-wrap {
    padding-bottom: 5%;
}	
	.pad-bot{
		padding-bottom: 5%;
	}	
	
	.empty-spacer{
		height: 0px;
	}
	/* Default hide mobile image */
.mobile-img {
  display: none;
}

/* Show desktop only on larger screens */
.desktop-img {
  display: block;
}

/* For mobile */
@media (max-width: 767px) {
  .desktop-img {
    display: none;
  }
  .mobile-img {
    display: block;
  }
}

</style>


<section class="airothon-page">
<!-- 	/* ...............................................Airothon 1st  Banner section............................... 	 */ -->
  <?php if (!empty($airothon_banner) && !empty($airothon_banner['title'])): ?>
    <section class="airothon-banner">
      <div class="container">
        <div class="airothon-banner-wrapper">
          <div class="row w-100">
            <div class="col-md-6">
              <div class="airothon-banner-content">
                <img class="airologo24"
                  src="/wp-content/uploads/2025/12/Png_airothon_logo.png"
                  alt="airothon-logo">

                <?php if (!empty($airothon_banner['subtitle'])): ?>
                  <p class="subtitle"><?php echo esc_html($airothon_banner['subtitle']); ?></p>
                <?php endif; ?>

                <?php if (!empty($airothon_banner['description'])): ?>
                  <div class="discription"><?php echo wp_kses_post($airothon_banner['description']); ?></div>
                <?php endif; ?>

                <?php if (!empty($airothon_banner['button_text'])): ?>
                 <a href="https://docs.google.com/forms/d/e/1FAIpQLSfrhSasPs6h2bfCj_83AxOR3b4gCndMy63S6Akfb4euVr6wbg/viewform" 
   target="_blank" 
   rel="noopener noreferrer" 
   class="btn-light mt-3">
   <?php echo esc_html($airothon_banner['button_text']); ?>
</a>
              <?php endif; ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="event-countdown-wrapper">
                <div class="event-countdown-box">
                  <div class="time-segment">
                    <div class="time-number" id="days">09</div>
                    <div class="time-label">Days</div>
                  </div>
                  <div class="time-segment">
                    <div class="time-number" id="hours">12</div>
                    <div class="time-label">Hours</div>
                  </div>
                  <div class="time-segment">
                    <div class="time-number" id="minutes">36</div>
                    <div class="time-label">Minutes</div>
                  </div>
                  <div class="time-segment">
                    <div class="time-number" id="seconds">20</div>
                    <div class="time-label">Seconds</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
	
<!--.........................................................................................
-->
	
<?php if (!empty($rewards_recognition['title'])): ?>
<section class="airothon-rewards-global">
  <div class="container">

    <div class="Rewards-Recognition-slider-container">
      <div class="Rewards-Recognition-slider">
        <?php if (!empty($rewards_recognition['slider'])): ?>
          <?php $slideIndex = 0; ?>
          <?php foreach ($rewards_recognition['slider'] as $slide): ?>
            <div class="reward-slide" data-index="<?php echo $slideIndex; ?>" style="display:none;">

              <?php if (!empty($slide['show_image']['url'])): ?>
                <!-- Desktop Image -->
                <img 
                  src="<?php echo esc_url($slide['show_image']['url']); ?>" 
                  alt="<?php echo esc_attr($slide['show_image']['alt']); ?>" 
                  class="desktop-img"
                >
              <?php endif; ?>

              <?php if (!empty($slide['mobile_image']['url'])): ?>
                <!-- Mobile Image -->
                <img 
                  src="<?php echo esc_url($slide['mobile_image']['url']); ?>" 
                  alt="<?php echo esc_attr($slide['mobile_image']['alt']); ?>" 
                  class="mobile-img"
                >
              <?php endif; ?>

            </div>
            <?php $slideIndex++; ?>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>

  </div>
</section>
<?php endif; ?>


<!-- ..............................................................................................	 -->
	
	<section id="airo-awards" class="pad-bot">
	<div class="container">
		<div class="ptb">
			<div class="row">
				<div class="col-md-7 col-sm-7 col-12">
					<h2>
						Meet the Winners of Airothon 25
					</h2>
					<p>
						Here are the teams that impressed our jury with bold thinking, technical sharpness, and real-world impact.
					</p>
				</div>
				<div class="col-md-5 col-sm-5 col-12">

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-12">
				<div class="awards-img-wrap">
					<img src="/wp-content/uploads/2025/09/Group-1826.png" alt="awards" width="100%">
				</div>				
			</div>
			<div class="col-md-6 col-sm-6 col-12">
				<div class="awards-img-wrap">
					<img src="/wp-content/uploads/2025/09/Group-1827.png" alt="awards" width="100%">
				</div>				
			</div>
			<div class="col-md-6 col-sm-6 col-12">
				<div class="awards-img-wrap">
					<img src="/wp-content/uploads/2025/09/Group-1829.png" alt="awards" width="100%">
				</div>				
			</div>
			<div class="col-md-6 col-sm-6 col-12">
				<div class="awards-img-wrap">
					<img src="/wp-content/uploads/2025/09/Group-1828.png" alt="awards" width="100%">
				</div>				
			</div>
		</div>
	</div>
</section>

<section id="ceo-talk" class="pad-bot">
  <div class="container">
    <div class="ceo-talk-wrap">

      <!-- Desktop Image -->
      <img 
        src="/wp-content/uploads/2025/09/Guests-of-Honoe-1.png" 
        alt="CEO" 
        class="desktop-img"
        width="100%"
      >

      <!-- Mobile Image -->
      <img 
        src="/wp-content/uploads/2025/09/Group-1854@2x.png" 
        alt="CEO" 
        class="mobile-img"
        width="100%"
      >

    </div>
  </div>
</section>

<!--.............................................................section 2nd ......................................................  -->

  <?php if ($airothon_about_section['title']) { ?>
    <section class="ai-sec ai-journey">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-12"></div>
          <div class="col-md-9 col-sm-12 journey-right">
            <h3><?php echo $airothon_about_section['title']; ?></h3>
            <div><?php echo $airothon_about_section['content']; ?></div>
          </div>
        </div>
      </div>
    </section>
  <?php } ?>
	
<!--.........................................................section 3rd .............................................................  -->

  <?php if ($airothon_culture['title']) { ?>
    <section class="airothon-culture">
      <div class="culture-container">
        <div class="culture-content">
          <div class="culture-content-title">
            <p class="Culture-title"><?php echo esc_html($airothon_culture['title']); ?></p>
          </div>
          <div class="culture-content-subtitle">
            <p class="Culture-subtitle"><?php echo esc_html($airothon_culture['subtitle']); ?></p>
          </div>
        </div>
        <div class="culture-image-container">
          <?php if (!empty($airothon_culture['image']['url'])): ?>
            <img class="culture-image" src="<?php echo esc_url($airothon_culture['image']['url']); ?>"
              alt="<?php echo esc_attr($airothon_culture['image']['alt']); ?>" />
          <?php endif; ?>
        </div>

      </div>
    </section>
  <?php } ?>
<!--.........................................................section 4th .............................................................  -->

  <?php
  if (!empty($airothon_section_4['data_architecture'])) { ?>
    <section class="services-sec" id="data-sec4">
      <div class="container">
        <div class="sec-3">

          <div class="row services-main">
            <?php foreach ($airothon_section_4['data_architecture'] as $dataval) { ?>
              <div class="col-md-6 col-lg-4 col-sm-6 services-inner">

                <?php if (!empty($dataval['icon']['url'])): ?>
                  <img src="<?php echo esc_url($dataval['icon']['url']); ?>"
                    alt="<?php echo esc_attr($dataval['icon']['alt']); ?>" loading="lazy" />
                <?php endif; ?>

                <?php if (!empty($dataval['title'])): ?>
                  <h3><?php echo esc_html($dataval['title']); ?></h3>
                <?php endif; ?>

                <?php if (!empty($dataval['content'])): ?>
                  <div>
                    <p><?php echo esc_html($dataval['content']); ?></p>
                  </div>
                <?php endif; ?>
              </div>
            <?php } ?>
          </div>
        </div>
        <div class="sec-gap">
          <?php if (!empty($airothon_section_4['title'])) { ?>
            <div class="sec-gap-title"><?php echo wp_kses_post($airothon_section_4['title']); ?></div>
          <?php } ?>
        </div>

      </div>
    </section>
	
	<!--.........................................................section 5th .............................................................  -->



    <section class="problem-container">
      <div class="container">
        <h2 class="section-heading">Problem Statements – Tackle Real-World<br>Agentic AI Challenges</br></h2>

        <?php if (have_rows('problem_statements_-_tackle_real-world_agentic_ai_challenges')): ?>
          <?php while (have_rows('problem_statements_-_tackle_real-world_agentic_ai_challenges')):
            the_row(); ?>

            <?php if (have_rows('problem_statement')): ?>

              <?php
              $count = 0;
              while (have_rows('problem_statement')):
                the_row();
                $count++;
              endwhile;
              ?>

              <div class="finbot-headings-wrapper">

                <!-- Headings nav -->
                <div class="finbot-headings-nav">
                  <?php
                  $index = 0;
                  while (have_rows('problem_statement')):
                    the_row();
                    $heading = get_sub_field('heading');
                    ?>
                    <div class="finbot-heading-tab <?php if ($index == 0)
                      echo 'active'; ?>" data-slide="<?php echo $index; ?>">
                      <?php echo esc_html($heading); ?>
                    </div>
                    <?php $index++; endwhile; ?>
                </div>

                <!-- Counter + Arrows BELOW nav -->
                <div class="finbot-nav-bottom">
                  <div class="finbot-counter">
                    <span class="current-slide" style="display:none">1</span> 
                  </div>
                  <div class="finbot-nav-arrows">
                    <div class="swiper-button-prev">
                      <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                  <circle cx="24" cy="24" r="23" stroke="#FF0000" stroke-width="2" />
                  <path d="M28 16L20 24L28 32" stroke="#FF0000" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>

                    </div>
                    <div class="swiper-button-next">
                       <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                  <circle cx="24" cy="24" r="23" stroke="#FF0000" stroke-width="2" />
                  <path d="M20 16L28 24L20 32" stroke="#FF0000" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
                    </div>
                  </div>

                </div>

              </div>

              <!-- Carousel -->
              <div class="finbot-carousel swiper">
                <div class="swiper-wrapper">
                  <?php while (have_rows('problem_statement')):
                    the_row(); ?>
                    <div class="swiper-slide">
                      <div class="finbot-slide-wrapper">
                        <div class="finbot-slide-text">
                          <h2><?php the_sub_field('heading'); ?></h2>
                          <div class="industry-wrapper">
                            <p class="industry-line"><strong>Industry</strong> <?php the_sub_field('industry_type'); ?></p>
                          </div>
                          <p> <?php the_sub_field('problem'); ?></p>
                          <p> <?php the_sub_field('challenge'); ?></p>
                        </div>
                        <?php $image = get_sub_field('image'); ?>
                        <?php if ($image): ?>
                          <div class="finbot-slide-image">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                          </div>
                        <?php endif; ?>
                      </div>
                    </div>
                  <?php endwhile; ?>
                </div>
              </div>

            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>





      <?php } ?>

    </div>
  </section>


  <?php if (!empty($airothon_rules['title'])): ?>
    <section class="airothon-rules">
      <div class="container">
        <h2 class="airothon-rules-title"><?php echo esc_html($airothon_rules['title']); ?></h2>

        <?php if (!empty($airothon_rules['image']['url'])): ?>
          <img src="<?php echo esc_url($airothon_rules['image']['url']); ?>"
            alt="<?php echo esc_attr($airothon_rules['image']['alt'] ?? ''); ?>"
            style="max-width: 100%; height: auto; margin: 0px; object-fit:cover" />
        <?php endif; ?>

        <?php if (!empty($airothon_rules['who_can_participate']) || !empty($airothon_rules['content'])): ?>
          <div class="who-can-participate">
            <?php if (!empty($airothon_rules['who_can_participate'])): ?>
              <p class="who-can-participate-title"><?php echo esc_html($airothon_rules['who_can_participate']); ?></p>
            <?php endif; ?>

            <?php if (!empty($airothon_rules['content'])): ?>
              <p class="who-can-participate-content"><?php echo esc_html($airothon_rules['content']); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </section>
  <?php endif; ?>

  <?php if (!empty($airothon_team_essentials['title'])): ?>
    <section class="airothon-team-essentials">
      <div class="container">
        <p class="airothon-team-essentials-title"><?php echo esc_html($airothon_team_essentials['title']); ?></p>
        <div class="row">
          <?php foreach ($airothon_team_essentials['team_essentials'] as $teamdataval) { ?>
            <div class="col-md-6 col-lg-4 col-sm-6 service-team-essentials">
              <?php if (!empty($teamdataval['logo']['url'])): ?>
                <img src="<?php echo esc_url($teamdataval['logo']['url']); ?>"
                  alt="<?php echo esc_attr($teamdataval['logo']['alt']); ?>" loading="lazy" />
              <?php endif; ?>

              <?php if (!empty($teamdataval['title'])): ?>
                <h3><?php echo esc_html($teamdataval['title']); ?></h3>
              <?php endif; ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

<!-- ..............................................innovative........................................................................ -->

  <?php if (!empty($airothon_innovate['background_image']['url'])): ?>
    <style>
      .innovate-background {
        background-image: url('<?php echo esc_url($airothon_innovate['background_image']['url']); ?>');
      }
    </style>
  <?php endif; ?>


  <?php if (!empty($airothon_innovate['title'])): ?>
    <section class="airothon-innovate-section">
      <div class="container">
        <div class="innovate-bordered-box">
          <?php if (!empty($airothon_innovate['background_image']['url'])): ?>
            <img src="<?php echo esc_url($airothon_innovate['background_image']['url']); ?>"
              alt="<?php echo esc_attr($airothon_innovate['background_image']['alt'] ?? 'Innovate Background'); ?>"
              class="innovate-bg-image" />
          <?php endif; ?>

          <div class="innovate-content-wrapper text-left ">
            <h2 class="innovate-title"><?php echo esc_html($airothon_innovate['title']); ?></h2>

            <?php if (!empty($airothon_innovate['subtitle'])): ?>
              <p class="innovate-subtitle"><?php echo esc_html($airothon_innovate['subtitle']); ?></p>
            <?php endif; ?>



            <?php if (!empty($airothon_innovate['button_text']) && !empty($airothon_innovate['button_url']['url'])): ?>
              <a href="<?php echo esc_url($airothon_innovate['button_url']['url']); ?>" class="btn-light mt-3"
                target="<?php echo esc_attr($airothon_innovate['button_url']['target'] ?: '_self'); ?>">
                <?php echo esc_html($airothon_innovate['button_text']); ?>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <div class="container">
    <div class="empty-spacer"></div>
  </div>
<!--..................................................Timeline ................................................................  -->
  <?php
  $key_dates = get_field('key_dates_timeline');
  if (!empty($key_dates)): ?>
    <div class="container">
      <div class="timeline-section">

        <?php if (!empty($key_dates['timeline_title'])): ?>
          <p class="timeline-title">
            <?php echo esc_html($key_dates['timeline_title']); ?>
          </p>
        <?php endif; ?>

        <div class="timeline">

          <?php if (!empty($key_dates['timeline_items'])): ?>
            <?php foreach ($key_dates['timeline_items'] as $item): ?>

              <div class="timeline-item">

                <?php if (!empty($item['date'])): ?>
                  <div class="timeline-date">
                    <?php echo esc_html($item['date']); ?>
                  </div>
                <?php endif; ?>

                <div class="timeline-dot"></div>

                <?php if (!empty($item['description'])): ?>
                  <div class="timeline-text">
                    <?php echo esc_html($item['description']); ?>
                  </div>
                <?php endif; ?>

              </div>

            <?php endforeach; ?>
          <?php endif; ?>
          <div class="timeline-line"></div>
        </div>
      </div>
    </div>
  <?php endif; ?> 

<!-- ...................................................................................................................... -->




<!-- ...................................................................................................................... -->
  <?php if (!empty($airothon_submission_guidelines['title'])): ?>
<!--     <section>
      <div class="container">
        <div class="Guidelines">
          <?php if (!empty($airothon_submission_guidelines['background_image']['url'])): ?>
            <img src="<?php echo esc_url($airothon_submission_guidelines['background_image']['url']); ?>"
              alt="<?php echo esc_attr($airothon_submission_guidelines['background_image']['alt']); ?>" />
          <?php endif; ?>

          <p><?php echo esc_html($airothon_submission_guidelines['title']); ?></p>
        </div>
      </div>

      <div class="container">
        <div class="row">

         
          <div class="col-md-6 guidelines-left">
            <?php $pre = $airothon_submission_guidelines['pre-screening_submission']; ?>

            <?php if (!empty($pre['icon']['url'])): ?>
              <img src="<?php echo esc_url($pre['icon']['url']); ?>" alt="<?php echo esc_attr($pre['icon']['alt']); ?>"
                class="mb-2" style="max-height: 40px;" />
            <?php endif; ?>

            <div>
              <?php if (!empty($pre['title'])): ?>
                <h4 style="color: #0D004A; font-size: 20px; padding-bottom: 20px;"><?php echo esc_html($pre['title']); ?>
                </h4>
              <?php endif; ?>

              <?php if (!empty($pre['point'])): ?>
                <div>
                  <?php echo apply_filters('the_content', $pre['point']); ?>
                </div>
              <?php endif; ?>
            </div>
          </div>




          
          <div class="col-md-6 guidelines-right">
            <?php $judge = $airothon_submission_guidelines['judging_rounds_&_evaluation']; ?>

            <?php if (!empty($judge['icon']['url'])): ?>
              <img src="<?php echo esc_url($judge['icon']['url']); ?>" alt="<?php echo esc_attr($judge['icon']['alt']); ?>"
                class="mb-2" style="max-height: 40px;" />
            <?php endif; ?>

            <div>
              <?php if (!empty($judge['title'])): ?>
                <h4 style="color: #0D004A; font-size: 20px;"><?php echo esc_html($judge['title']); ?></h4>
              <?php endif; ?>

              <?php if (!empty($judge['rounds'])): ?>
                <?php foreach ($judge['rounds'] as $round): ?>
                  <?php if (!empty($round['round_title'])): ?>
                    <p style="font-weight: bold; margin-top: 15px;"><?php echo esc_html($round['round_title']); ?></p>
                  <?php endif; ?>

                  <?php if (!empty($round['round_description'])): ?>
                    <div style="padding-left: 18px; margin-bottom: 15px;">
                      <?php echo apply_filters('the_content', $round['round_description']); ?>
                    </div>
                  <?php endif; ?>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>


          </div>

        </div>
      </div>
    </section> -->
  <?php endif; ?>


  <?php if (!empty($airothon_innovate['background_image']['url'])): ?>
    <style>
      .innovate-background {
        background-image: url('<?php echo esc_url($airothon_innovate['background_image']['url']); ?>');
      }
    </style>
  <?php endif; ?>


  <?php if (!empty($airothon_rules_originality['title'])): ?>
<section class="airothon-rules-originality">
  <div class="container">
    <div class="airothon-rules-box-originality">
      
      <?php if (!empty($airothon_rules_originality['background_image']['url'])): ?>
        <img class="airothon-bg"
          src="<?php echo esc_url($airothon_rules_originality['background_image']['url']); ?>"
          alt="<?php echo esc_attr($airothon_rules_originality['background_image']['alt'] ?? 'Airothon Rules Background'); ?>" />
      <?php endif; ?>

      <div class="airothon-rules-wrapper-originality">
        
        <?php if (!empty($airothon_rules_originality['icon']['url'])): ?>
          <img class="airothon-icon"
            src="<?php echo esc_url($airothon_rules_originality['icon']['url']); ?>"
            alt="<?php echo esc_attr($airothon_rules_originality['icon']['alt']); ?>" />
        <?php endif; ?>

        <div class="airothon-text-content">
          <h2 class="airothon-rules-title-originality">
            <?php echo esc_html($airothon_rules_originality['title']); ?>
          </h2>

          <?php if (!empty($airothon_rules_originality['content'])): ?>
            <div class="airothon-rules-content-originality">
              <?php echo apply_filters('the_content', $airothon_rules_originality['content']); ?>
            </div>
          <?php endif; ?>
        </div>

      </div>
    </div>
  </div>
</section>
<?php endif; ?>


  <div class="container">
    <div class="empty-spacer"></div>
  </div>

  <?php
  $faqs = get_field('airothon_faqs');
  if (!empty($faqs) && is_array($faqs)): ?>
    <section class="airothon-faqs">
      <div class="container">
        <h2 class="faq-title">FAQs</h2>
        <div class="faq-list">
          <?php foreach ($faqs as $index => $faq): ?>
            <?php if (!empty($faq['question']) && !empty($faq['answer'])): ?>
              <div class="faq-item">
                <div class="faq-header" data-index="<?php echo $index; ?>">
                  <h4 class="faq-question"><?php echo esc_html($faq['question']); ?></h4>
                  <span class="faq-toggle-icon">+</span>
                </div>
                <div class="faq-answer" id="faq-answer-<?php echo $index; ?>">
                  <?php echo apply_filters('the_content', $faq['answer']); ?>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

<!--   <div class="container">
    <div class="empty-spacer"></div>
  </div> -->

<!--   <div class="container">
    <div class="row tools">
      <div class='col-6 tools-left'>Tools & Resources</div>
      <div class='col-6 tools-right'>Microsoft AI tools</div>
    </div>
  </div> -->

<!--   <section id="banner">
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
    <div class="container">
      <div class="submission-container">
  <?php 
    echo wp_kses_post($banner['submission_data']); 
  ?>
</div>

    </div>
    <div class="container">
      <div class="submission-button"
        style="width: 100%; height: 100px; background-color: red; display: flex; align-items: center; justify-content: center;">
        <a href="<?php echo esc_url($banner['button_url']['url']); ?>"
          target="<?php echo esc_attr($banner['button_url']['target'] ?: '_self'); ?>"
          style="color: white; font-size: 24px; text-decoration: none;">
          <?php echo esc_html($banner['button_text']); ?>
        </a>
      </div>
    </div>
  </section> -->

<!--   <div class="container">
    <div class="empty-spacer"></div>
  </div>
 -->

  <?php if (!empty($upload_projects['heading'])): ?>
    <section class="upload-project-section">
      <div class="container">
        <div class="row  upload-project-container">
          <div class="col-md-5 upload-left">
            <?php if (!empty($upload_projects['image'])): ?>
              <img src="<?php echo esc_url($upload_projects['image']); ?>" alt="Upload Project Image" class="img-fluid">
            <?php endif; ?>
          </div>

          <!-- Right Column: Heading and Button -->
          <div class="col-md-7 upload-right">
            <p><?php echo esc_html($upload_projects['heading']); ?></p>

            <?php if (!empty($upload_projects['button_text'])): ?>
              <a href="<?php echo esc_url($upload_projects['button_url'] ?? '#'); ?>" class="upload-project-button">
                <?php echo esc_html($upload_projects['button_text']); ?>
              </a>
            <?php endif; ?>



          </div>
        </div>
		</div>
    </section>
  <?php endif; ?>



  <div class="container">
    <div class="empty-spacer"></div>
  </div>


<?php get_footer(); ?>

<script>
const countDownDate = new Date("July 21, 2025 00:00:00").getTime();

const timer = setInterval(function () {
  const now = new Date().getTime();
  const distance = countDownDate - now;

  if (distance <= 0) {
    // Stop the countdown
    clearInterval(timer);

    // Set everything to 00
    document.getElementById("days").innerHTML = "00";
    document.getElementById("hours").innerHTML = "00";
    document.getElementById("minutes").innerHTML = "00";
    document.getElementById("seconds").innerHTML = "00";

    // (Optional) You can also show a message like "Time's up!"
    // document.getElementById("message").innerHTML = "Countdown Ended!";
    return; // Exit so it won't calculate negative values
  }

  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("days").innerHTML = String(days).padStart(2, '0');
  document.getElementById("hours").innerHTML = String(hours).padStart(2, '0');
  document.getElementById("minutes").innerHTML = String(minutes).padStart(2, '0');
  document.getElementById("seconds").innerHTML = String(seconds).padStart(2, '0');

}, 1000);


  document.addEventListener("DOMContentLoaded", function () {
    const headers = document.querySelectorAll(".faq-header");

    headers.forEach((header) => {
      header.addEventListener("click", function () {
        const index = header.dataset.index;
        const answer = document.getElementById("faq-answer-" + index);
        const icon = header.querySelector(".faq-toggle-icon");

        // Close all other answers
        document.querySelectorAll(".faq-answer").forEach((a) => {
          if (a !== answer) {
            a.classList.remove("active");
            a.style.display = "none";
          }
        });

        // Reset all icons
        document.querySelectorAll(".faq-toggle-icon").forEach((i) => {
          if (i !== icon) i.textContent = "+";
        });

        // Toggle current
        const isActive = answer.classList.toggle("active");
        answer.style.display = isActive ? "flex" : "none";
        icon.textContent = isActive ? "−" : "+";
      });
    });
  });


const swiper = new Swiper('.finbot-carousel', {
    loop: false,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    on: {
        slideChange: function () {
            updateActiveTab();
            centerActiveTab();
        }
    }
});

// Track if user is manually scrolling
let isManualScrolling = false;
let scrollTimeout;
const tabsContainer = document.querySelector('.finbot-headings-nav');

tabsContainer.addEventListener('scroll', () => {
    isManualScrolling = true;
    clearTimeout(scrollTimeout);
    scrollTimeout = setTimeout(() => {
        isManualScrolling = false;
    }, 100);
});

// Click handler for tabs
document.querySelectorAll('.finbot-heading-tab').forEach(tab => {
    tab.addEventListener('click', function () {
        if (isManualScrolling) return;
        
        const slideIndex = parseInt(this.dataset.slide);
        swiper.slideTo(slideIndex);
    });
});

function updateActiveTab() {
    const current = swiper.realIndex + 1;
    document.querySelector('.current-slide').innerText = current;
    
    document.querySelectorAll('.finbot-heading-tab').forEach((tab, index) => {
        tab.classList.toggle('active', index === swiper.realIndex);
    });
}

function centerActiveTab() {
    if (isManualScrolling) return;
    
    const activeTab = document.querySelector('.finbot-heading-tab.active');
    
    if (activeTab) {
        const containerWidth = tabsContainer.offsetWidth;
        const tabOffset = activeTab.offsetLeft;
        const tabWidth = activeTab.offsetWidth;
        const scrollTo = tabOffset - (containerWidth / 2) + (tabWidth / 2);
        
        tabsContainer.scrollTo({
            left: scrollTo,
            behavior: 'smooth'
        });
    }
}

// Initialize
swiper.on('init', function() {
    updateActiveTab();
    centerActiveTab();
});
	// Drag scroll for tabs container
let isDown = false;
let startX;
let scrollLeft;

tabsContainer.addEventListener('mousedown', (e) => {
    isDown = true;
    tabsContainer.classList.add('grabbing');
    startX = e.pageX - tabsContainer.offsetLeft;
    scrollLeft = tabsContainer.scrollLeft;
});

tabsContainer.addEventListener('mouseleave', () => {
    isDown = false;
    tabsContainer.classList.remove('grabbing');
});

tabsContainer.addEventListener('mouseup', () => {
    isDown = false;
    tabsContainer.classList.remove('grabbing');
});

tabsContainer.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - tabsContainer.offsetLeft;
    const walk = (x - startX) * 1; // drag speed multiplier
    tabsContainer.scrollLeft = scrollLeft - walk;
});




document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll(".reward-slide");
  let currentIndex = 0;
  const totalSlides = slides.length;

  function showSlides(index) {
    slides.forEach(slide => (slide.style.display = "none"));
    slides[index].style.display = "flex"; // or block, depending on your CSS
  }

  function goNext() {
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlides(currentIndex);
  }

  // Init
  showSlides(currentIndex);

  // Auto-slide every 5 seconds
  setInterval(goNext, 5000);
});




</script>








<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>