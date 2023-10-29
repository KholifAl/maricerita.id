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






// KOMENTAR

const container = document.querySelector('.container_kom');

container.addEventListener('scroll', (event) => {
  // Get the current scroll position
  const scrollTop = container.scrollTop;

  // If the scroll position is at the bottom of the container, scroll to the next post
  if (scrollTop === container.scrollHeight - container.clientHeight) {
    const nextPost = container.querySelector('.post:not(.active)');
    nextPost.classList.add('active');
  }
});