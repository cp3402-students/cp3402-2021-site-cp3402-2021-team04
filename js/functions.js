function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

(function($){
  $('figure.wp-caption.aligncenter').removeAttr('style');
  $('img.aligncenter').wrap('<figure class="centered-image" />');
})(jQuery);