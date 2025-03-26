// Sticky Navbar
document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
});
// Back To Top start


var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
// Back To Top End
 $("#purchase").on('hidden.bs.modal', function (e) {
    $("#purchase iframe").attr("src", $("#purchase iframe").attr("src"));
});

$("#design").on('hidden.bs.modal', function (e) {
    $("#design iframe").attr("src", $("#design iframe").attr("src"));
});

$("#performancemo").on('hidden.bs.modal', function (e) {
    $("#performancemo iframe").attr("src", $("#performancemo iframe").attr("src"));
});

$('#book').owlCarousel({
    loop:true,
    margin:0,
    autoplay:true,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});


