jQuery(document).ready(function ($) {


  /*menu-open*/
  $(document).on('click', '.open-menu-mob', function (e){
    e.preventDefault();

    $.fancybox.open( $('#menu-responsive'), {
      touch:false,
      autoFocus:false,
      beforeClose: function(e){
        $('body').removeClass('is-active');
        $('header').removeClass('is-active');
        $('html').removeClass('is-menu');
      }
    });
    setTimeout(function() {
      $('body').addClass('is-active');
      $('html').addClass('is-menu');
      $('header').addClass('is-active');
    }, 100);

  });

  /*close-menu*/
  $(document).on('click', '.close-menu a', function (e){
    e.preventDefault();
    $('body').removeClass('is-active');
    $.fancybox.close();
    $('header').removeClass('is-active');
    $('html').removeClass('is-menu');
  });

  /* form label*/
  $('.input-wrap input, .input-wrap-text textarea').change(function(){
    myInput = $(this);
    tmpval = $(this).val();
    if(tmpval == '') {
      $(myInput).siblings('label').removeClass('is-active');
    } else {
      $(myInput).siblings('label').addClass('is-active');
    }
  });
  $('.input-wrap input, .input-wrap-text textarea').focus(function (e) {
    $(this).siblings('label').addClass('is-focus')
  });
  $('.input-wrap input, .input-wrap-text textarea').blur(function (e) {
    $(this).siblings('label').removeClass('is-focus')
  });


  $(".cases .bg").sticky({
    topSpacing:0,
  });


  /*parallax*/


  if(window.innerWidth > 991){
    if($('.soc-section').length>0){
      console.log(1)
      $(window).scroll(function () {
        let itemTop = $('.soc-section').offset().top,
          h = window.innerHeight,
          st = $(this).scrollTop(),
          scrollTop1 = -(itemTop - st)/10000,


          totalTop = itemTop - 100 ,
          item = $(this).scrollTop(),
          translate1 = 'translate3d(' + 0 + ', ' + scrollTop1 + 'px, ' + 0 + ')';
        if(item > totalTop) {
          $('.home-banner + .sticky-wrapper').css({'transform': translate1});

        } else {
          $('.home-banner + .sticky-wrapper').css({'transform': 0})
        }

      });
    }




    $(".soc-section").sticky({
      topSpacing:0,
      className:'is-soc'
    });


    var rellax = new Rellax('.rellax');
  }

  if(window.innerWidth > 991){
    if($('.cases').length>0){
      console.log(1)
      $(window).scroll(function () {
        let itemTop = $('.cases').offset().top,
          h = window.innerHeight,
          st = $(this).scrollTop(),
          scrollTop1 = h - st/10,
          totalTop = itemTop - 100 ,
          item = $(this).scrollTop();

        console.log(st)

        if(item > totalTop) {
          $('.cases .bg').css({'height': scrollTop1});
        } else {
          $('.cases .bg').css({'height': '100vh'})
        }
      });
    }
  }

  //28.02.24
  $(document).on('click', '.video-block', function (e){
    $('.video-file').get(0).play();
    $('.video-block .bg').hide();
    $('.video-block .icon-wrap').hide();
  });

  $(".fancybox-img").fancybox({
    touch:false,
    autoFocus:false,
    beforeShow : function(e){
      $('header').addClass("is-team");
    },

    afterClose: function () {
      $('header').removeClass("is-team");
    }
  });

  //fix header
  $(".top-line").sticky({
    topSpacing:0
  });

  //animation
  var animation1 = bodymovin.loadAnimation({
    container: document.getElementById('anim-01'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: '/wp-content/themes/clark/img/anim-1.json',
  });

//animation
  var animation2 = bodymovin.loadAnimation({
    container: document.getElementById('anim-02'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: '/wp-content/themes/clark/img/anim-2.json',
  });

});