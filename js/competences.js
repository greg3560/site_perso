import { VIEW_HEIGHT } from './constants';
import { skills } from './content';


export function skill() {
    window.addEventListener("scroll", function(e) {
        if (window.scrollY >= VIEW_HEIGHT * 2) {
            for (let i = 0, c = skills.length; i < c; i++) {
                $('#' + skills[i].name).css({height: skills[i].score + '%'});
            }
        }
    });
}