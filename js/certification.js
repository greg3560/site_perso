export function certification() {
    $('.tabs').tabs();
    /* bouton ajout */
    let ajout = document.getElementsByClassName('plus');

    const showCards = (element, countCardsWillShowing, countCardsShowing, cards) => {
        cards.forEach(
            function(elem, index, array) {
                let displayCSS = window.getComputedStyle(elem, null).getPropertyValue("display");
                if (displayCSS === 'none' && countCardsWillShowing < 3) {
                    countCardsWillShowing++;
                    elem.style.display = 'list-item';
                    countCardsShowing++;
                } else if (displayCSS === 'list-item') {
                    countCardsShowing++;
                }
                if (countCardsShowing === array.length) {
                    element.style.display = 'none';
                    element.style.opacity = 0;
                }
            }
        );
    };

    Array.from(ajout).forEach(
        function(element, index, array) {
            element.addEventListener('click', e => {
                let countCardsWillShowing = 0;
                let countCardsShowing = 0;
                e.preventDefault();
                switch(e.currentTarget.id) {
                    case "programmeur":
                        let cardsDev = document.querySelectorAll('#dev > ul > li');
                        showCards(element, countCardsWillShowing, countCardsShowing, cardsDev);
                        break;
                    case "culture-web":
                        let cardsWeb = document.querySelectorAll('#web > ul > li');
                        showCards(element, countCardsWillShowing, countCardsShowing, cardsWeb);
                        break;
                    case "cursus":
                        let cardsParcours = document.querySelectorAll('#parcours > ul > li');
                        showCards(element, countCardsWillShowing, countCardsShowing, cardsParcours);
                        break;
                    default:
                        console.log('default');
                        break;
                }
            });
        }
    );
}