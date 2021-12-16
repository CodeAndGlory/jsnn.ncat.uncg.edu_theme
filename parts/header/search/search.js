jQuery(document).ready(function ($) {
  var $main_nav = $(".main-navigation");
  var $primary_menu = $("#primary-menu", $main_nav);
  var $menu_btn = $(".menu-toggle", $main_nav);
  var $search_btn = $(".search-button", $main_nav);
  var $search_box = $(".search-box", $main_nav);
  var $search_input = $('input', $search_box);

  $search_btn.on("click", function () {

    if ($search_btn.hasClass("toggled")) {
      hideSearch();
    } else {
      showSearch();

      if ($main_nav.hasClass("toggled")) {
        hideMobileMenu();
      }
    }
  });

  $menu_btn.on("click", function () {
    if ($search_btn.hasClass("toggled")) {
      hideSearch();
    }
  });

  function hideSearch() {
    $search_btn.removeClass("toggled");
    $search_btn.attr("aria-expanded", false);
    $search_box.attr("aria-expanded", false);
    $search_box.hide();
  }

  function showSearch() {
    $search_btn.addClass("toggled");
    $search_btn.attr("aria-expanded", true);
    $search_box.attr("aria-expanded", true);
    $search_box.show();
    $search_input.focus();
  }

  function hideMobileMenu() {
    $main_nav.removeClass("toggled");
    $primary_menu.attr("aria-expanded", false);
    $menu_btn.attr("aria-expanded", false);
  }
});
