


let swiperCards = new Swiper(".card__content", {
    loop: true,
    spaceBetween: 32,
    grabCursor: true,
  
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
  
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  
    breakpoints:{
      600: {
        slidesPerView: 2,
      },
      968: {
        slidesPerView: 3,
      },
    },
  });



// FLOAATING LIST
function toggle(){
  var blur = document.getElementById('blur');
  blur.classList.toggle('active');
  var popup = document.getElementById('popup');
  popup.classList.toggle('active');
}

function logout(){
  var blur = document.getElementById('blur');
  blur.classList.toggle('active');
}

//KOMENTAR SCROLL BUTTON 
const container = document.querySelector(".conkom2");
const scrollUpButton = document.getElementById("scroll-up");
const scrollDownButton = document.getElementById("scroll-down");

scrollUpButton.addEventListener("click", () => {
    container.scrollTop -= 200; // Adjust the scroll distance as needed
});

scrollDownButton.addEventListener("click", () => {
    container.scrollTop += 200; // Adjust the scroll distance as needed
});


const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach(link => {
    link.addEventListener('click', function (e) {
        // Remove the "active" class from all links
        navLinks.forEach(link => {
            link.classList.remove('active');
        });

        // Add the "active" class to the clicked link
        this.classList.add('active');
    });
});