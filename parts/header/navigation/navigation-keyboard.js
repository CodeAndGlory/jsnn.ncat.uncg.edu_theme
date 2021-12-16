jQuery(function ($) {
  var $mainNavigation = $('.main-navigation');
  var $primaryMenu = $('#primary-menu');
  var $menuToggleButton = $('.menu-toggle');
  var $searchToggleButton = $('.search-button');
  var $searchBox = $('.search-box');

  if (!$primaryMenu.length) {
    $menuToggleButton.css('display', 'none');
  } else {

    // Add toggle behavior for the mobile menu button
    $menuToggleButton.on('click', function () {
      $this = $(this);
      $mainNavigation.toggleClass('toggled');
      if ($mainNavigation.hasClass('toggled')) {
        $this.attr('aria-expanded', true);
        $primaryMenu.attr('aria-expanded', true);
      } else {
        $this.attr('aria-expanded', false);
        $primaryMenu.attr('aria-expanded', false);
      }
    });


    // focus behavior for menu toggle button
    $menuToggleButton.on('focus.wparia  mouseenter.wparia', function () {
      $(this).addClass('focus');
    });
    $menuToggleButton.on('blur.wparia  mouseleave.wparia', function () {
      $(this).removeClass('focus');
    });

    // when focus is on a menu item that has a submenu, set aria-expanded to true,
    // on focus out set to false
    var $menu_with_children = $primaryMenu.find('.menu-item-has-children');
    $menu_with_children.attr('aria-expanded', false);

    $menu_with_children.focusin(function () {
      $(this).attr('aria-expanded', true);
    });

    $menu_with_children.focusout(function () {
      $(this).attr('aria-expanded', false);
    });
  }

  // Add toggle behavior for the search button
  $searchToggleButton.on('click', function () {
    $this = $(this);
    $searchBox.toggleClass('toggled');
    if ($searchBox.hasClass('toggled')) {
      $this.attr('aria-expanded', true);
    } else {
      $this.attr('aria-expanded', false);
    }
  });

  // focus behavior for search button
  $searchToggleButton.on('focus.wparia  mouseenter.wparia', function () {
    $(this).addClass('focus');
  });
  $searchToggleButton.on('blur.wparia  mouseleave.wparia', function () {
    $(this).removeClass('focus');
  });

});
