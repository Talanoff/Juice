window.$ = require('jquery');

(function () {
  const windowHeight = window.innerHeight;
  const $toggle = $('#toggle');

  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();

    const section = $($(this).attr('href'));

    if (section.length) {
      $('body, html').animate({
        scrollTop: section.offset().top - $('#app-header').innerHeight()
      }, 900);

      if ($toggle.hasClass('is-open')) {
        $toggle.removeClass('is-open');
        $('#nav').removeClass('is-open');
      }
    }
  });

  $('[data-modal]').on('click', function (e) {
    e.preventDefault();
    $('.modal').addClass('is-open');
  });

  $('#close, .modal-outer').on('click', function () {
    $('.modal').removeClass('is-open');
  });

  $toggle.on('click', function() {
    $(this).toggleClass('is-open');
    $('#nav').toggleClass('is-open');
  });

  const isVisible = (el, offset) => {
    let $elems = Array.from($(`[data-anchor="${el}"]`));

    if ($elems.length) {
      return $elems.some(function ($el) {
        $el = $($el);
        return offset >= $el.offset().top - windowHeight * 0.2 && offset < $el.offset().top + $el.innerHeight() * 0.9;
      });
    }
  };

  $(window).on('scroll', (e) => {
    let windowOffset = $(document).scrollTop();

    $('#app-header')[windowOffset > windowHeight * 0.75 ? 'addClass' : 'removeClass']('is-fixed');

    $('#nav a').each(function (i, link) {
      let el = $(link).attr('href');

      if (isVisible(el, windowOffset)) {
        $(this).addClass('is-active');
      } else {
        $(this).removeClass('is-active');
      }
    })
  });

  $(document).on('wpcf7mailsent', function () {
    setTimeout(() => {
      $('.modal').removeClass('is-open');
    }, 4000);
  })
})();