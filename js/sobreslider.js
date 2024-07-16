var swiper = new Swiper(".carrocel-container", {
    slidesPerView: 1,
   
    loop: true,
    centeredSlides: true, // Corrigido
    fade: {
      crossFade: true, // Corrigido
    },
    grabCursor: true, // Corrigido
    observeParents: true, // Adicionado para observar alterações no tamanho do contêiner pai
    observeSlideChildren: true,

    breakpoints: {
        // Quando a largura da tela for 768 pixels ou menos
        768: {
          slidesPerView: 1,
        },
        // Quando a largura da tela for 992 pixels ou menos
        992: {
          slidesPerView: 1,
        },
        // Quando a largura da tela for 1200 pixels ou menos
        1200: {
          slidesPerView: 1,
        },
      },

  });