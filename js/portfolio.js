import Glide, { Controls, Autoplay, Breakpoints } from '@glidejs/glide/dist/glide.modular.esm'

export function portfolio() {
    let glide = new Glide('#glide', {
        type: 'carousel',
        autoplay: 4000,
        hoverpause: true,
        startAt: 0,
        perView: 3,
        gap: 15
    });
    Breakpoints.match({
        0: { perView: 1 },
        600: { perView: 3 }
    });
    glide.mount({Controls, Autoplay, Breakpoints});
}