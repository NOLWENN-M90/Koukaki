// Fade-in au scroll //
function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 50;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);


// Affichage Menu Burger //

    let menuBtn = document.querySelector('.burger');
    let burger = document.querySelector('.nav');
    let menuItem = document.querySelectorAll('.nav__link');
    
    menuBtn.addEventListener('click', function(){
      menuBtn.classList.toggle('active');
      menu.classList.toggle('active');
    })
    
    
    menuItem.forEach (function(menuItem) {
      menuItem.addEventListener('click',function(){
              menuBtn.classList.toggle('active');
              menu.classList.toggle('active');
      })
    })

// Simple parallax nuages Section Lieu //

var image = document.getElementsByClassName('grand');
new simpleParallax(image, {
	orientation: 'right'
});
