import Glide, { Controls, Autoplay, Anchors } from '@glidejs/glide/dist/glide.modular.esm'

export function portfolio() {
    let glide = new Glide('#glide', {
        type: 'carousel',
        autoplay: 4000,
        hoverpause: true,
        startAt: 0,
        perView: 3,
        gap: 20
    });
    glide.mount({Controls, Autoplay, Anchors});
}