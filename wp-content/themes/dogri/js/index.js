$(".dropdown-trigger").dropdown(
    {
      hover: true
    }
  );
  $(".dropdown-trigger1").dropdown();

  $(document).ready(function(){
  $('.sidenav').sidenav();
});

$('.carousel.carousel-slider').carousel({
  fullWidth: true,
  indicators: true
});
autoplay();
function autoplay() {
  $('.carousel.carousel-slider').carousel('next');
  setTimeout(autoplay, 4500);
}

//caraousel js button
$('.next').click(function(){
$('.carousel').carousel('next');
});

$('.prev').click(function(){
$('.carousel').carousel('prev');
});