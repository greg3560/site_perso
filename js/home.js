import { VIEW_HEIGHT_HOME } from './constants';

export function home() {
    let homeSection = document.getElementById('home');
    let buttonNext = document.querySelector('.suite');

    homeSection.style.minHeight = VIEW_HEIGHT_HOME;
    buttonNext.style.left = "calc(50% - 27.5px)";
}