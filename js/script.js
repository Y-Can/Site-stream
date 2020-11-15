navbar = document.getElementById('navbar');
navElements = document.getElementById('nav-elements');
  
window.addEventListener('scroll', function(){
  const scroll = this.document.documentElement.scrollTop;

  if (scroll > 150) {
    navbar.style.height = "9vh";
    navElements.style.height = "9vh";
    navbar.style.background = "rgba(50, 80, 60, +0.0)";
  } else {
    navbar.style.height = "9vh";
    navElements.style.height = "9vh";
    navbar.style.background = "#ee5a24"
  }
});

$(".image").click(function(){
  $(".image").removeClass("active");
  $(this).addClass("active");
})