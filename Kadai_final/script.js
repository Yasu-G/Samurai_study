
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
    // variableWidth: true,
  });


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
