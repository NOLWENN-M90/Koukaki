console.log("js fonctionnel")
// Attendez que la page soit entièrement chargée
document.addEventListener('DOMContentLoaded', function () {
  // Récupérez la vidéo et l'image de chargement
  const video = document.getElementById('my-video');
  const loadingImage = document.getElementById('loading');

  // Attendez que la vidéo soit chargée et prête à jouer
  video.addEventListener('loadeddata', function () {
      // Masquez l'image de chargement
      loadingImage.style.display = 'none';

      // Affichez la vidéo
      video.parentElement.style.display = 'block';

      // Démarrez la vidéo (en option)
      video.play();
  });
});
// Créez une fonction pour observer les éléments
function observeElements() {
  const sections = document.querySelectorAll('.fade-in-section');
  const titles = document.querySelectorAll('.fade-in-title');

  const observerOptions = {
      root: null, // La fenêtre par défaut
      threshold: 0.2 // Le pourcentage de l'élément visible pour déclencher l'observation
  };

  const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.style.opacity = 1;
              entry.target.style.transform = 'translateY(25px)';
              observer.unobserve(entry.target);
          }
      });
  }, observerOptions);

  sections.forEach(section => {
      observer.observe(section);
  });

  titles.forEach(title => {
      observer.observe(title);
  });
}

// Appelez la fonction pour commencer l'observation lorsque la page est chargée
window.addEventListener('load', observeElements);


jQuery(document).ready(function($) {
  // Sélectionne le bouton du menu burger
  const $modalButton = $(".modal-open");
  
  // Gère le clic sur le bouton du menu burger
  $modalButton.click(function() {
    console.log("Bouton cliqué");
    
    // Sélectionne la modal
    const $modalContent = $(".modal__content");
    const button = $("button");
    // Toggle de l'ouverture/fermeture de la modal avec animation
    $modalContent.slideToggle(1000);
    
    // Toggle de la classe "open" pour la modal et "close" pour le bouton du menu burger
    $modalContent.toggleClass("open");
    $modalButton.toggleClass("close");
  });
  
  // Gère le clic sur les liens à l'intérieur de la modal
  $("a").click(function() {
    // Sélectionne la modal
    const $modalContent = $(".modal__content");
    
    if ($modalContent.hasClass("open")) {
      // Ferme la modal avec animation
      $modalContent.slideUp(1000);
      $modalButton.transform.click();
      // Retire la classe "open" de la modal et la classe "close" du bouton du menu burger
      $modalContent.removeClass("open");
      $modalButton.removeClass("close");
    }
  });
});



// Simple parallax nuages Section Lieu //
console.log("parallaxe ok")
document.addEventListener('DOMContentLoaded', function() {
  var nuage1 = document.getElementsByClassName('nuage1');
  new simpleParallax(nuage1, {
    orientation: 'left',
    scale: 2.4,
    maxTransition: 300, 
    overflow:'fale',
    delay: 2,
    
  });
});

document.addEventListener('DOMContentLoaded', function() {
  var nuage2 = document.getElementsByClassName('nuage2');
  new simpleParallax(nuage2, {
    orientation: 'left',
    scale: 2.4,
    maxTransition: 300,
    overflow:'false',
    delay: 2,
  });
});

// Swiper //

 // Initialize Swiper
 console.log("swiper ok")
 const swiper = new Swiper(".swiper-container", {
  
  // Paramètres personnalisés
  direction:"horizontal",
  spaceBetween: 120,
  speed: 680,
  autoplay: {
    delay: 1150,
  },
  effect: "coverflow",
  loop: true,
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 3,
  
  coverflowEffect: {
    rotate: 50,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },

});

