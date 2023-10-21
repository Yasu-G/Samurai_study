
$(function(){
  
  // カーセル*****************************
  $('.carousel').slick({
    autoplay: true,
    dots: true,
    infinite: true,
    autoplaySpeed: 1000,
    arrows: false,
    fade: true,
    speed:1500,
    // dotsClass:"slide-dots"
    // variableWidth: true,
  });
    // カーセル2*****************************
    $('.carousel2').slick({
      // asNavFor:'#dots-bar',
      // slidesToShow:1,
      autoplay: true,
      dots: false,
      infinite: true,
      autoplaySpeed: 1000,
      arrows: false,
      fade: true,
      speed:1500,
    });
    // カーセル2 dots*****************************
    // $('.dots-bar').slick({
    //   // asNavFor:'.carousel2',
    //   // slidesToShow:1,
    //   autoplay: true,
    //   dots: false,
    //   infinite: true,
    //   autoplaySpeed: 1000,
    //   arrows: false,
    //   fade: true,
    //   speed:1500,
    // });

  // ScrollでTOPを表示*****************************
  $(window).scroll(function(){ 

    const scrollValue = $(window).scrollTop()

    if (scrollValue >= 100) {
      $('#top-btn').fadeIn(500);
    } else {
      $('#top-btn').fadeOut(500);
    }    

  });

  //ページ内リンク移動をスムーズにさせる*****************************
  
  $('a[href^="#"]').click(function () {
    const speed = 500;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    let position = target.offset().top;
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

});
