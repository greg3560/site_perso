import { VIEW_HEIGHT } from './constants';

export function home() {
    /* taille mini hauteur #home */
    $('#home').css({minHeight: VIEW_HEIGHT});
    /* animation du bouton */
    $('.suite').css("left","calc(50% - 27.5px)");
}