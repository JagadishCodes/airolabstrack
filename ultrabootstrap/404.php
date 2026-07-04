<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package ultrabootstrap
 */

get_header(); ?>

<style>
section.footers {
    display: none;
}
.thanku-button .mybtn {
	border: 2px solid #FF0000;
}	
.thanku-button .mybtn:hover {
	border: 2px solid #fff;
}	
	
</style>

<section class="error-sec">
	<div class="error-img">
		<img src="/wp-content/uploads/2024/05/Img-404.png" alt="404">
	</div>
	<p class="error-content">Oops! It looks like you’ve reached an unexpected detour.<br>Don’t worry, navigating through the AI and Cloud is always possible with Airo</p>
<!-- 	<div class="error-img" alt="">
		<a href="https://dev-in.devuatnew.com/"><img src="/wp-content/uploads/2024/05/div-btn-Dark.png"></a>
	</div> -->
	<div class="thanku-button">
		<a href="/" class="mybtn">Navigate back to the page</a>
	</div>
</section>

<!-- <div class="spacer">
<section class="page-header">
  <div class="container">

      	<h1 class="text-center">
      		<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ultrabootstrap' ); ?>
      	</h1>

      <div class="<?php echo $class;?> detail-content">


        	<div class="not-found">
          		<p class="text-center"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ultrabootstrap' ); ?></p>
			         <?php get_search_form(); ?>
        	</div>
      </div>

     
  </div>
</section>
</div> -->
<?php get_footer(); ?>