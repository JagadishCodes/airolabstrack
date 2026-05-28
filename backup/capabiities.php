jQuery(document).ready(function($) {
  $('.mega-menu-item-has-children > a.mega-menu-link').on('click', function(e) {
    var $parent = $(this).parent();

    if ($parent.hasClass('mega-toggle-on')) {
      // Already expanded → go to link
      window.location = $(this).attr('href');
    } else {
      // First click → expand submenu
      e.preventDefault();
      $parent.addClass('mega-toggle-on');
    }
  });
});
