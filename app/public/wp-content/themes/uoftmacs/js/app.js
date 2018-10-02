// mobile nav

(function initMobileNav() {
  document.querySelector(".mobile-menu").addEventListener("click", function() {
    var mobileMenu = this;
    if (mobileMenu.classList.contains("close")) {
      mobileMenu.classList.remove("close");
      setTimeout(function() {
        mobileMenu.classList.remove("active");
      }, 200);
    } else {
      mobileMenu.classList.add("active");
      setTimeout(function() {
        mobileMenu.classList.add("close");
      }, 200);
    }
    document.querySelector(".mobile-menu__popout").classList.toggle("active");
  });
})();
