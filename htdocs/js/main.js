/**
 * Presentation
 * @version 2.0.0
 * @author Gregory Peigne
 * @todo
 */
$(function () {

    /*  ================================================================
        ============================== BODY=============================
        ================================================================
    */

    /* taille mini hauteur des sections sauf #home */
    $('#qui_suis_je, #competences, #portfolio, #certifications, #contact').css({minHeight: window.innerHeight-60});
    /* scrollspy */
    $('.scrollspy').scrollSpy({scrollOffset:60});
    /* scrollfire */
    var options = [
        {selector: '.carousel-item', offset: 200, callback: function() {
            $('#html').css({height: '90%'});
            $('#javascript').css({height: '60%'});
            $('#jquery').css({height: '70%'});
            $('#node').css({height: '50%'});
            $('#angular').css({height: '40%'});
            $('#meteor').css({height: '40%'});
            $('#php').css({height: '70%'});
            $('#mysql').css({height: '70%'});
            $('#wordpress').css({height: '80%'});
            $('#prestashop').css({height: '40%'});
            $('#bootstrap').css({height: '60%'});
            $('#materialize').css({height: '70%'});
            $('#bluemix').css({height: '40%'});
            $('#linux').css({height: '70%'});
            $('#seo').css({height: '40%'});
            $('#photoshop').css({height: '40%'});
        }},
        {selector: '#creation', offset: -10, callback: function(el) { $('.owl-item').first().fadeIn(150, function showNextOne() {
            $(this).next($(el)).fadeIn(150, showNextOne); }); } },
        {selector: '.commande', offset: -10, callback: function(el) { $('.commande').animate({left: '+=100%'}, 1000); } },
        {selector: 'form', offset: -10, callback: function(el) { $(el).css({transform: 'rotate(0deg)'}, 1000); } },
        {selector: '.commande-slider', offset: -10, callback: function(el) { $('.commande-slider').animate({left: '+=100%'}, 1000); } }
    ];
    Materialize.scrollFire(options);
    /* effet parallax */
    $('.parallax').parallax();
    /* si il y a le parametre succes dans l'url on affiche le message de confirmation du formulaire */
    $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if(results) {
            return results[1] || 0;
        } else {
            return false;
        }
    };
    if($.urlParam('succes') == 'true') {
        Materialize.toast('Votre message à bien été envoyé.', 5000, 'rounded'); 
    } else if($.urlParam('succes') == 'false') {
        Materialize.toast('Il est survenue un probleme.', 5000, 'rounded'); 
    }

    /*  ================================================================
        ===================== NAVIGATION MOBILE=========================
        ================================================================
    */

    /* bouton navigation mobile */
    $(".button-collapse").sideNav();

    /*  ================================================================
        ============================= HOME==============================
        ================================================================
    */

    /* taille mini hauteur #home */
    $('#home').css({minHeight: window.innerHeight-100});
    /* animation du bouton */
    $('.suite').css("left","calc(50% - 27.5px)");

    /*  ================================================================
        ======================== COMPETENCES============================
        ================================================================
    */

    /* animation des barres de competences */
    $('.skills').slideUp(1000);
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

    /*  ================================================================
        ========================== PORTFOLIO============================
        ================================================================
    */

    /* slider */
    $('.owl-carousel').owlCarousel({
        margin:50,
        //navigation
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    /*  ================================================================
        ====================== CERTIFICATIONS===========================
        ================================================================
    */

    /* bouton ajout */
    var firstClick = true;
    $('.plus').click(function(e) {
        e.preventDefault();
        var show = '.certificats-informatique-cache';
        switch(this.id) {
            case "programmeur":
                if(firstClick) {
                    show = '#dev ' + show + ':first';
                    firstClick = false;
                } else {
                    show = '#dev ' + show + ':nth-child(3)';
                    $('#programmeur').css({display: 'none'});
                }
                break;
            case "culture-web":
                show = '#web ' + show;
                $('#culture-web').css({display: 'none'});
                break;
            case "cursus":
                show = '#parcours ' + show;
                $('#cursus').css({display: 'none'});
                break;
            default:
                break;
        }
        Materialize.showStaggeredList(show);
        show += ' li';
        $(show).css({display: 'block'});
    });

    /*  ================================================================
        =========================== CONTACT ============================
        ================================================================
    */

    /* champs textarea */
    $('#textarea1').trigger('autoresize');
});