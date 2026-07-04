<?php
   /**
    * Template Name: Full Width Services Templates
    */
   get_header();
   global $post;	  
   $PageID = get_the_ID();

    /* ACF Custom Fields Display */
    $GetPageTitle = get_field('page_banner_title', $PageID);
    $GetShortContent = get_field('page_banner_short_description', $PageID);
    $bgImage = get_field('page_banner_background', $PageID);
    /* ACF Custom Fields Display End */
    if($GetPageTitle=="")
    {
    $PageTitle = get_the_title();
    }
    else
    {
    $PageTitle = $GetPageTitle;
    }
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom/service-style.css"/>
<div class="land-banner-trans-menu-sec" style="background-image:url('<?php echo $bgImage; ?>');">
   <div class="container common-height">
      <div class="row">
         <div class="col-12 col-md-7 col-sm-7 main-top-cont main-top-erp-cont aos-init" data-aos="fade-left" data-aos-delay="600">
             <h1 class="main-head-bus-erp"><?php echo $PageTitle; ?></h1>
             <div class="sm white-text"><?php echo $GetShortContent; ?></div>
             <div class="mt-4 pt-2">
               <a class="btn btn-primary" data-toggle="modal" data-target="#provideDetailModal">Contact Us<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
         </div>
         <div class="col-12 col-md-5 col-sm-5 main-top-cont-right aos-init" data-aos="fade-right" data-aos-delay="700">
            <div class="erp-banner-right-demo-form">
               <h3 class="main-head-bus-erp">Talk to Us to Learn More</h3>
               <?php echo do_shortcode('[contact-form-7 id="3553" title="Header Banner Right Side Form"]'); ?>               
            </div>
         </div>
      </div>
   </div>
 </div>
 <!-- Page Content -->
<div class="home-modal-wrapper">
   <?php the_content();?>
</div>
<?php get_footer(); ?>