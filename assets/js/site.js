var main = function () {
  
//Menu ein- und ausblenden
  $('.toggle-menu').click(function() {
    if($('.toggle-menu').hasClass("show")){
      $('.areas').hide(200);
      $('header[role=banner]').removeClass("show");
      $('.toggle-menu').removeClass("show");
    } else {
      $('.areas').show(100);
      $('nav').show(200);
      $('address').hide(200);
      $('.mail').hide(200);
      $('header[role=banner]').addClass("show");
      $('.toggle-menu').addClass("show");
    }

    }
  );
  $('.toggle-address').click(function() {
      $('nav').hide(100);
      $('.mail').hide(100);
      $('address').show(100);
      $('.areas').show(200);
      $('header[role=banner]').addClass("show");
    }
  );
  $('.toggle-mail').click(function() {
      $('.areas').show(100);
      $('nav').hide(200);
      $('address').hide(200);
      $('.mail').show(200);
      $('header[role=banner]').addClass("show");
    }
  );
  
  $('.areas').click(function(){
      $('.areas').hide(200);
      $('header[role=banner]').removeClass("show");
    }
  );
  
// Dynamic to-top link,erscheint erst beim Scrollen
  $('.to-top').hide();
  $(window).scroll(function(){
    if($(this).scrollTop() > 200) {
      $('.to-top').show();
    } else {
      $('.to-top').hide();
    }
  });
  
}

$(document).ready(main);