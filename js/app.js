import { header } from './header';
import { home } from './home';
import { skill } from './competences';
import { portfolio } from './portfolio';
import { certification } from './certification';


document.addEventListener('DOMContentLoaded', function (e) {
    header();
    home();
    skill();
    portfolio();
    certification();
});