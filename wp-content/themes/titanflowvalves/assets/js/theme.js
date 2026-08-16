/**
 * Titan Flow Valves - Core Theme JavaScript
 * Version: 2.3.0
 */

document.addEventListener('DOMContentLoaded', function () {
  // 1. Sticky Header scroll shadow
  var header = document.querySelector('.titan-header');
  if (header) {
    var checkScroll = function () {
      if (window.scrollY > 20) {
        header.classList.add('is-scrolled');
      } else {
        header.classList.remove('is-scrolled');
      }
    };
    window.addEventListener('scroll', checkScroll, { passive: true });
    checkScroll();
  }

  // 2. Mobile Drawer Navigation Toggle
  var mobileToggle = document.querySelector('.titan-mobile-toggle');
  var mobileDrawer = document.querySelector('.titan-mobile-drawer');
  var drawerOverlay = document.querySelector('.titan-drawer-overlay');
  var drawerClose = document.querySelector('.titan-drawer-close');

  function openDrawer() {
    if (mobileDrawer && drawerOverlay) {
      mobileDrawer.classList.add('is-open');
      drawerOverlay.classList.add('is-open');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeDrawer() {
    if (mobileDrawer && drawerOverlay) {
      mobileDrawer.classList.remove('is-open');
      drawerOverlay.classList.remove('is-open');
      document.body.style.overflow = '';
    }
  }

  if (mobileToggle) {
    mobileToggle.addEventListener('click', openDrawer);
  }
  if (drawerClose) {
    drawerClose.addEventListener('click', closeDrawer);
  }
  if (drawerOverlay) {
    drawerOverlay.addEventListener('click', closeDrawer);
  }

  // 3. Mobile Accordion Submenus
  var drawerTriggers = document.querySelectorAll('.titan-drawer-has-submenu');
  drawerTriggers.forEach(function (trigger) {
    trigger.addEventListener('click', function (e) {
      e.preventDefault();
      var submenu = this.nextElementSibling;
      if (submenu && submenu.classList.contains('titan-drawer-submenu')) {
        submenu.classList.toggle('is-active');
        var chevron = this.querySelector('.dropdown-chevron');
        if (chevron) {
          chevron.style.transform = submenu.classList.contains('is-active') ? 'rotate(180deg)' : '';
        }
      }
    });
  });

  // 4. Smooth Anchor Scroll
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      var targetId = this.getAttribute('href');
      if (targetId && targetId !== '#') {
        var targetElem = document.querySelector(targetId);
        if (targetElem) {
          e.preventDefault();
          closeDrawer();
          var headerOffset = 90;
          var elementPosition = targetElem.getBoundingClientRect().top;
          var offsetPosition = elementPosition + window.pageYOffset - headerOffset;

          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });
        }
      }
    });
  });
});
