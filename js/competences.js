import { VIEW_HEIGHT } from './constants';
import { skills } from './content';


export function skill() {
    /* animation des barres de competences */
    // $('.skills').slideUp(1000);
    /* carousel */
    $('.carousel').carousel({
        dist:-100,
        shift:0,
        padding:20,
    });
    /* boutons left/right */
    $('.gauche').click(function(e) {
        e.preventDefault();
        $('.carousel').carousel('prev');
    });
    $('.droite').click(function(e) {
        e.preventDefault();
        $('.carousel').carousel('next');
    });
    window.addEventListener("scroll", function(e) {
        if (window.scrollY >= VIEW_HEIGHT * 2) {
            for (let i = 0, c = skills.length; i < c; i++) {
                $('#' + skills[i].name).css({height: skills[i].score + '%'});
            }
        }
    });
}