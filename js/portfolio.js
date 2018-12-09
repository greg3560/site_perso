export function portfolio() {
    /* slider */
    $('.owl-carousel').owlCarousel({
        margin:50,
        //navigation
        nav:true,
        autoplay: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
}