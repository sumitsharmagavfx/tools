new Splide( '.splide-footer-seo', {
    type    : 'loop',
    width: '80%',
    arrows: false,
    perPage : 6,
    perMove: 1,
    autoplay: true,
    pagination: false,
    breakpoints: {
        1200: { perPage: 5 },
        576: { 
            width: '100%',
            perPage: 5 
        },
        520: { 
            width: '100%',
            perPage: 4 
        }
    }
} ).mount();