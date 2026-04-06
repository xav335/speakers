(function () {
  var navbar = document.querySelector('.scl-navbar');
  if (!navbar) return;

  var timer;
  var hidden = false;

  navbar.style.transition = 'transform 0.3s ease';

  window.addEventListener('scroll', function () {
    if (window.innerWidth > 991) return; // uniquement sur mobile

    if (!hidden) {
      navbar.style.transform = 'translateY(-100%)';
      hidden = true;
    }

    clearTimeout(timer);
    timer = setTimeout(function () {
      navbar.style.transform = 'translateY(0)';
      hidden = false;
    }, 1200);
  }, { passive: true });
})();
