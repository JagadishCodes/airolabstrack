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
        
        <script src="<?php echo get_template_directory_uri() . '/js/custom.js?v=' . filemtime(get_template_directory() . '/js/custom.js'); ?>"></script>
		
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
    // Wrap text of mega menu links in a span to distinguish clicks on text vs empty space
    $('#mega-menu-primary a.mega-menu-link').each(function() {
        var $link = $(this);
        $link.contents().filter(function() {
            return this.nodeType === 3 && $.trim(this.nodeValue) !== '';
        }).wrap('<span class="mega-menu-title-text" />');
    });

    // Detect if the screen width is mobile
    function isMobile() {
        return window.innerWidth <= 768; // Adjust this value as needed for your breakpoint
    }

    if (isMobile()) {
        $('#mega-menu-item-15, #mega-menu-item-17, #mega-menu-item-18, #mega-menu-item-19, #mega-menu-item-20').each(function() {
            var $subSubs = $(this).find('ul ul');
            $subSubs.parent('li').removeClass('mega-menu-item-has-children menu-item-has-children dropdown');
            $subSubs.remove();
        });
		
		// Dynamically locate capabilities tabs and override their display classes dynamically
        var capabilitiesMenu = $('#mega-menu-wrap-primary #mega-menu-primary > li.mega-menu-tabbed, #mega-menu-wrap-primary #mega-menu-primary > li.mega-menu-megamenu');
        var tabs = capabilitiesMenu.find('> ul.mega-sub-menu > li.mega-menu-item');
        if (tabs.length > 0) {
            var firstTabId = tabs.eq(0).attr('id');
            var secondTabId = tabs.eq(1).attr('id');
            var thirdTabId = tabs.eq(2).attr('id');
            var fourthTabId = tabs.eq(3).attr('id');
            var dynamicStyles = `
                @media (max-width: 768px) {
                    /* Hide nested submenus by default on mobile */
                    #mega-menu-wrap-primary #mega-menu-primary li.mega-menu-item > ul.mega-sub-menu {
                        display: none !important;
                        visibility: hidden !important;
                    }
                    
                    /* Overwrite static stylesheet display: block !important rules */
                    ${firstTabId ? '#' + firstTabId + ' .mega-sub-menu' : ''},
                    ${secondTabId ? '#' + secondTabId + ' .mega-sub-menu' : ''},
                    ${thirdTabId ? '#' + thirdTabId + ' .mega-sub-menu' : ''},
                    ${fourthTabId ? '#' + fourthTabId + ' .mega-sub-menu' : ''} {
                        display: none !important;
                        visibility: hidden !important;
                    }
                    /* Show nested submenus only when their parent tab is toggled on mobile */
                    #mega-menu-wrap-primary #mega-menu-primary li.mega-menu-item.mega-toggle-on > ul.mega-sub-menu {
                        display: block !important;
                        visibility: visible !important;
                    }
                }
            `;
            $('<style>').prop('type', 'text/css').html(dynamicStyles).appendTo('head');
            // Force Agentic AI (first tab) to expand by default on mobile page load
            tabs.eq(0).addClass('mega-toggle-on open show').find('> a.mega-menu-link').attr('aria-expanded', 'true');
            // Ensure other tabs are collapsed on mobile page load
            tabs.slice(1).removeClass('mega-toggle-on open show').find('> a.mega-menu-link').attr('aria-expanded', 'false');
        }

    }

    var lastToggleTime = 0;

    // Helper function to handle menu click/touch on mobile
    function handleMenuClick(e, element) {
        if (isMobile()) {
            var now = Date.now();
            // Prevent double-toggling on touch screens (e.g., touchstart/touchend followed immediately by click)
            if (now - lastToggleTime < 400) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();
                return;
            }

            var parentItem = $(element).parent();
            
            // Check if the item has children/sub-menu (supports Max Mega Menu, standard WordPress, and Bootstrap dropdowns)
            var hasSubMenu = parentItem.hasClass('mega-menu-item-has-children') || 
                             parentItem.hasClass('menu-item-has-children') || 
                             parentItem.hasClass('dropdown') || 
                             parentItem.find('ul').length > 0;

            if (hasSubMenu) {
                // Check if the click target is the text span (meaning they clicked the word)
                var isTextClick = $(e.target).hasClass('mega-menu-title-text') || 
                                  $(e.target).closest('.mega-menu-title-text').length > 0;

                if (isTextClick) {
                    // Clicked the text part of the link: redirect to the page
                    e.preventDefault();
                    e.stopPropagation();
                    e.stopImmediatePropagation();

                    lastToggleTime = now; // Update toggle timestamp
                    
                    var href = $(element).attr('href');
                    if (href && href !== '#') {
                        var url = $('.logo-tag').find('a').attr('href') || '/';
                        if (href.indexOf('http') === 0) {
                            window.location.href = href;
                        } else {
                            var baseUrl = url.replace(/\/$/, '');
                            var path = href.replace(/^\//, '');
                            window.location.href = baseUrl + '/' + path;
                        }
                    }
                } else {
                    // Clicked on empty space or the arrow: toggle collapse/expand
                    e.preventDefault(); // Stop default navigation (following the link)
                    e.stopPropagation(); // Prevent bubbling
                    e.stopImmediatePropagation();

                    lastToggleTime = now; // Update toggle timestamp

                    if (parentItem.hasClass('mega-toggle-on') || parentItem.hasClass('open') || parentItem.hasClass('show')) {
                        // Close the menu
                        parentItem.removeClass('mega-toggle-on open show');
                        $(element).attr('aria-expanded', 'false');
                    } else {
                        // Close open sibling menus
                        parentItem.siblings('.mega-toggle-on, .open, .show').removeClass('mega-toggle-on open show');
                        
                        // Open this menu
                        parentItem.addClass('mega-toggle-on open show');
                        $(element).attr('aria-expanded', 'true');
                    }
                }
            } else {
                // No sub-menu, allow normal redirect
                e.stopPropagation();
                e.stopImmediatePropagation();

                lastToggleTime = now; // Update toggle timestamp
                
                var href = $(element).attr('href');
                if (href && href !== '#') {
                    var url = $('.logo-tag').find('a').attr('href') || '/';
                    if (href.indexOf('http') === 0) {
                        window.location.href = href;
                    } else {
                        var baseUrl = url.replace(/\/$/, '');
                        var path = href.replace(/^\//, '');
                        window.location.href = baseUrl + '/' + path;
                    }
                }
            }
        }
    }

    // Direct click/touchend binding, clearing other listeners first to prevent double-toggling
    $('.mega-menu-link, .navbar-nav a').off('click touchend').on('click touchend', function(e) {
        handleMenuClick(e, this);
    });

    // Delegated click/touchend binding as a backup
    $(document).off('click touchend', '.mega-menu-link, .navbar-nav a').on('click touchend', '.mega-menu-link, .navbar-nav a', function(e) {
        handleMenuClick(e, this);
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