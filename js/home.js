import { VIEW_HEIGHT_HOME } from './constants';

export function home() {
    /* taille mini hauteur #home */
    $('#home').css({minHeight: VIEW_HEIGHT_HOME});
    /* animation du bouton */
    $('.suite').css("left","calc(50% - 27.5px)");
}