<?php
/* Template Name: Data and Analytics-Sample1 */
get_header();

$banner     = get_field('banner');
$section_2  = get_field('section_2');
$section_3  = get_field('section_3');
$section_4  = get_field('section_4');
$section_5  = get_field('section_5');
$section_6  = get_field('section_6');
$section_7  = get_field('section_7');
$section_8  = get_field('section_8');
$section_9  = get_field('section_9');
?>

<!-- Hero Banner -->
<?php if($banner): ?>
<section id="hero" class="parallax" style="background-image:url('<?php echo $banner['image']; ?>')">
  <div class="overlay">
    <h1><?php echo $banner['title']; ?></h1>
    <p><?php echo $banner['sub_heading']; ?></p>
  </div>
</section>
<?php endif; ?>

<!-- Intro -->
<?php if($section_2): ?>
<section class="intro">
  <h2><?php echo $section_2['title']; ?></h2>
  <p><?php echo $section_2['content']; ?></p>
</section>
<?php endif; ?>

<!-- Services Slider -->
<?php if($section_3): ?>
<section class="services">
  <h2><?php echo $section_3['title']; ?></h2>
  <div class="services-slider">
    <?php foreach($section_3['data_architecture'] as $item): ?>
      <div class="slide">
        <img src="<?php echo $item['icon']; ?>" alt="">
        <h3><?php echo $item['title']; ?></h3>
        <p><?php echo $item['content']; ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>

<!-- Accordion -->
<?php if($section_4): ?>
<section class="accordion-sec">
  <h2><?php echo $section_4['title']; ?></h2>
  <img src="<?php echo $section_4['image']; ?>" alt="">
  <div class="accordion">
    <?php foreach($section_4['values'] as $val): ?>
      <div class="acc-item">
        <button class="acc-btn"><?php echo $val['title']; ?></button>
        <div class="acc-content"><p><?php echo $val['content']; ?></p></div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>

<!-- Impact Posts Slider -->
<?php if($section_5): ?>
<section class="impact">
  <h2><?php echo $section_5['title']; ?></h2>
  <div class="impact-slider">
    <?php foreach($section_5['impact_posts'] as $post): setup_postdata($post); ?>
      <div class="impact-card">
        <h3><?php echo $post->post_title; ?></h3>
        <p><?php echo $post->post_excerpt; ?></p>
        <a href="<?php echo get_permalink($post->ID); ?>">Read More</a>
      </div>
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
</section>
<?php endif; ?>

<!-- Results Counters -->
<?php if($section_6): ?>
<section class="results">
  <h2><?php echo $section_6['title']; ?></h2>
  <div class="counters">
    <?php foreach($section_6['num_section'] as $num): ?>
      <div class="counter-box">
        <span class="counter"><?php echo $num['number']; ?></span><span><?php echo $num['suffix']; ?></span>
        <p><?php echo $num['content']; ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>

<!-- Partner Logos Slider -->
<?php if($section_7): ?>
<section class="partners">
  <h2><?php echo $section_7['title']; ?></h2>
  <div class="partner-slider">
    <?php foreach($section_7['partner_logos'] as $logo): ?>
      <div class="partner-slide">
        <img src="<?php echo $logo['images']; ?>" class="partner-logo" alt="Partner">
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>

<!-- Blogs -->
<?php if($section_8): ?>
<section class="blogs">
  <h2><?php echo $section_8['title']; ?></h2>
  <div class="blog-grid">
    <?php foreach($section_8['select_blogs'] as $blog): ?>
      <div class="blog-card">
        <h3><?php echo $blog->post_title; ?></h3>
        <p><?php echo $blog->post_excerpt; ?></p>
        <a href="<?php echo get_permalink($blog->ID); ?>">Read More</a>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>

<!-- Contact Form -->
<?php if($section_9): ?>
<section class="contact parallax" style="background-image:url('form-bg.jpg')">
  <div class="overlay">
    <h2><?php echo $section_9['title']; ?></h2>
    <div class="form-wrapper">
      <?php echo $section_9['content']; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>

