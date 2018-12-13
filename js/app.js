import { global } from './global';
import { header } from './header';
import { home } from './home';
import { skill } from './competences';
import { portfolio } from './portfolio';
import { certification } from './certification';


document.addEventListener('DOMContentLoaded', function () {
    global();
    header();
    home();
    skill();
    portfolio();
    certification();
});