import { VIEW_HEIGHT } from './constants';
import { skills } from './content';

let elem = document.querySelector('.carousel');
let buttonLeft = document.querySelector('.gauche');
let buttonRight = document.querySelector('.droite');
let options = {
    dist:-100,
    shift:0,
    padding:20
};
let instance = M.Carousel.init(elem, options);

export function skill() {
    buttonLeft.addEventListener('click', (e) => {
        e.preventDefault();
        instance.prev();
    });
    buttonRight.addEventListener('click', (e) => {
        e.preventDefault();
        instance.next();
    });
    window.addEventListener("scroll", () => {
        if (window.scrollY >= VIEW_HEIGHT * 2) {
            for (let i = 0, c = skills.length; i < c; i++) {
                document.getElementById(skills[i].name).style.height = skills[i].score + '%';
            }
        }
    });
}