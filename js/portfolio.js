import Glide, { Controls, Autoplay, Breakpoints } from '@glidejs/glide/dist/glide.modular.esm'

export function portfolio() {
    let glide = new Glide('#glide', {
        type: 'carousel',
        autoplay: 4000,
        hoverpause: true,
        startAt: 0,
        breakpoints: {
            992: { perView: 2 },
            1200: { perView: 3 },
            3000: { perView: 3 }
        },
        gap: 20
    });

    glide.mount({Controls, Autoplay, Breakpoints});
}