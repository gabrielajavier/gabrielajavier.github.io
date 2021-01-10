/*========== MENU ==========*/
$(window).scroll(function(){
	var prueba = $(this).scrollTop();
	if (prueba > 5) {
		$(".navbar").addClass("scroll");
	}
	else if (prueba < 5) {
		$(".navbar").removeClass("scroll");
	 }
});

$('.navbar-toggle').on('click',function(){
  $('body').toggleClass('fixed');
})


/*========== EFECTO SMOTH ==========*/
$(function() {
  $('nav a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : s('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
})

/*========== CERRAR AL CLIKEAR UN LINK DEL MENU EN MOBILE ==========*/
$(".navbar-nav li a").click(function(event) {
    if (!$(this).parent().hasClass('dropdown'))
        $(".navbar-collapse").collapse('hide');
});

/*========== ICON INDICADOR ==========
$(window).scroll(function(){
    var icon-icon = s(this).scrollTop();
    if (icon-icon > 750) {
        $(".icon-indicador i").addClass("scroll");
    }
        else if (icon-icon < 750) {
        $(".icon-indicador i").removeClass("scroll");
     }
});*/