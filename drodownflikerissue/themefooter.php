<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ultrabootstrap
 */

?>

		<!-- Tab to top scrolling -->
		<section id="scroll-top">
			<div class="scroll-top-wrapper"> <span class="scroll-top-inner">
				<i class="fa fa-2x fa-angle-up"></i>
				</span>
			</div> 
		</section>
		<section class="footers">
		<div class="footers">
			<div class="row">
				<?php dynamic_sidebar( 'footer-1' ); ?>
				<?php dynamic_sidebar( 'footer-2' ); ?>
				<?php dynamic_sidebar( 'footer-3' ); ?>
				<?php dynamic_sidebar( 'footer-4' ); ?>
			</div>
			<?php  get_template_part('components/custom-footer', 'theme-footer'); ?>		
    	</div>
		</section>
		<footer>
		<div class="container">

				<?php 
                    $show_social_in_footer = get_theme_mod('socialicon_display' );
                   {?>   
<!--  			        <div class="pull-left">
				            <ul class="list-inline social">
	                            <?php 
	                            $facebook =  esc_url(get_theme_mod ('facebook_textbox', 'https://facebook.com/PhantomThemes'));
	                            $twitter = esc_url(get_theme_mod('twitter_textbox','https://twitter.com/PhantomThemes'));
	                            $googleplus = esc_url(get_theme_mod('googleplus_textbox','#'));
	                            $youtube = esc_url(get_theme_mod('youtube_textbox','#'));
	                            $linkedin = esc_url(get_theme_mod('linkedin_textbox','#'));
															$pinterest = esc_url(get_theme_mod('pinterest_textbox','#'));
															$instagram = esc_url(get_theme_mod('instagram_textbox','#'));
	                            if($facebook){?>
	                              <li><a href="<?php echo $facebook;?>"><i class="fa fa-facebook"></i></a></li>
	                            <?php }
	                            if($twitter){?>
	                              <li><a href="<?php echo $twitter;?>"><i class="fa fa-twitter"></i></a></li>
	                            <?php }
	                            if($googleplus) {?>
	                              <li><a href="<?php echo $googleplus;?>"><i class="fa fa-google-plus"></i></a></li>
	                            <?php }
	                            if($youtube){?>
	                              <li><a href="<?php echo $youtube;?>"><i class="fa fa-youtube-play"></i></a></li>
	                            <?php }
	                            if($linkedin){?>
	                              <li><a href="<?php echo $linkedin;?>"><i class="fa fa-linkedin"></i></a></li>
	                            <?php }
	                            if($pinterest){?>
	                              <li><a href="<?php echo $pinterest;?>"><i class="fa fa-pinterest"></i></a></li>
															<?php }
														  if($instagram){?>
	                              <li><a href="<?php echo $instagram;?>"><i class="fa fa-instagram"></i></a></li>
	                            <?php }?>
                        	</ul>
					</div> -->
				<?php }?> 
				
<!-- 			    <div class="pull-right">
			        <?php echo __('Theme Ultrabootstrap by','ultrabootstrap'); ?> <a href="https://phantomthemes.com"><?php echo __('Phantom Themes','ultrabootstrap'); ?></a>
			      </div> -->
			    </div>

		</footer>

	
	<div id="cf7-success-modal" class="cf7-modal">
  <div class="cf7-modal-content">
    <span class="cf7-close">&times;</span>
    
    <h2>Thank You!</h2>
    <p>Your application has been submitted</p>

    <button class="cf7-btn">Close</button>
  </div>
</div>
		
		<?php wp_footer(); ?>
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <script src="<?php echo get_template_directory_uri() . '/js/custom.js';?>"></script>
		
		<script>
			var btn = $('#scroll-top');

			$(window).scroll(function() {
			  if ($(window).scrollTop() > 300) {
				btn.addClass('show');
			  } else {
				btn.removeClass('show');
			  }
			});

			btn.on('click', function(e) {
			  e.preventDefault();
			  $('html, body').animate({scrollTop:0}, '300');
			});
			
			
jQuery(document).ready(function($) {
    // Detect if the screen width is mobile
    function isMobile() {
        return window.innerWidth <= 768; // Adjust this value as needed for your breakpoint
    }

    // Function to close all sub-menus
   

    // On document ready, close all sub-menus if on mobile
   
 if (isMobile()) {
    // Add click event for parent menu items
    $('.mega-menu-item-has-children > a').click(function(e) {
        if (isMobile()) {
            e.preventDefault(); // Prevent default action

            var parentItem = $(this).parent();

            if (parentItem.hasClass('mega-toggle-on')) {
                //parentItem.removeClass('mega-toggle-on');
              // parentItem.find('.mega-sub-menu').first().slideUp();
            } else {
                //closeAllSubMenus(); // Close all other sub-menus
                //parentItem.addClass('mega-toggle-on');
              //  parentItem.find('.mega-sub-menu').first().slideDown();
            }
        }
    });
	$('#mega-menu-item-15').find('ul ul').remove();
	
	//$('#mega-menu-item-15').find('.mega-menu-item-has-children').removeClass('mega-menu-item-has-children');
	$('#mega-menu-item-17').find('ul ul').remove();
	//$('#mega-menu-item-17').find('.mega-menu-item-has-children').removeClass('mega-menu-item-has-children');
	$('#mega-menu-item-18').find('ul ul').remove();
	//$('#mega-menu-item-18').find('.mega-menu-item-has-children').removeClass('mega-menu-item-has-children');
	$('#mega-menu-item-19').find('ul ul').remove();
	//$('#mega-menu-item-19').find('.mega-menu-item-has-children').removeClass('mega-menu-item-has-children');
	$('#mega-menu-item-20').find('ul ul').remove();
	//$('#mega-menu-item-20').find('.mega-menu-item-has-children').removeClass('mega-menu-item-has-children');
	
	
	
	
	$(document).on('click', '.mega-menu-link', function(e) {
        if (isMobile()) {
            var parentItem = $(this).parent();
            // Check if the parent item has a sub-menu
            if (!parentItem.find('ul.mega-sub-menu').length) {
                // No sub-menu, allow normal redirect
				console.log('yes redirect me please');
				var url = $('.logo-tag').find('a').attr('href');
				window.location.href=url+$(this).attr('href')
                return true;
				
            }
        }
    });
 }
});

jQuery(document).ready(function($) {
        $('.mega-indicator').click(function(e) {
            e.preventDefault();
                 
            var $subMenu = $(this).parent().parent().find('.mega-sub-menu');
            var $parentItem = $(this).parent().parent();

            // Close all other open sub-menus
            //$('.mega-sub-menu').not($subMenu).slideUp().parent().removeClass('mega-toggle-on');

            // Toggle the clicked sub-menu
            if ($parentItem.hasClass('mega-toggle-on')) {
				console.log('clickeon1')
               // $subMenu.slideUp();
               // $parentItem.removeClass('mega-toggle-on');
            } else {
				console.log('off')
               // $subMenu.slideDown();
                //$parentItem.addClass('mega-toggle-on');
            }
        });
    });
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('.partner-logo').forEach(img => {
    const src = img.src;
    if (src.includes('ezgif-7ef72535c02d2d.gif')) {
      img.classList.add('logo-partner-curver');
      console.log('Class added:', img);
    } 
  });
});
	
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('.single-partner-wrap img').forEach(img => {
    const src = img.getAttribute('src'); // safer than img.src
    if (src.includes('Epicor_Logo_Teal_White')) {
      img.classList.add('custom_image_curve');
      console.log('Class added to:', src);
    }  else if (src.includes('dynamics-365-logo-new-white')) {
      img.classList.add('custom_image_curve');
      console.log('Class added to:', src);
    } 	  
  });
});
  const observerOptions = { threshold: 0.1 };
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('aos-animate');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.eair-animate').forEach(el => observer.observe(el));
	

</script>
	</body>
</html>