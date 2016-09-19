<?php
/* 
Template Name: presentation 
*/
	get_header();
	get_sidebar ();
?>
<?php
wp_enqueue_script('jquery-ui-datepicker');
wp_enqueue_style('jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
?>
<div style="width: 70%;">
	<p>Situé à 35 kms au nord de Paris, PLAILLY est un charmant petit village du Valois, qui s’est installé il y a fort longtemps au pied de la colline de Montmélian.</p>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/eglise_plailly.png" alt="eglise Plailly" />
	<p>Les habitants de cette commune s'appellent les Plelléens, du nom gallo-romain de Plellius, un personnage qui aurait possédé un domaine autrefois à Plailly.</p>
	<p>L'ancienneté du village est appuyée par l'existence d'un atelier monétaire. Un tiers de sou d'or de l'époque mérovingienne a été frappé ici et porte le nom de Platiliaco. Cette pièce est visible à la Bibliothèque Nationale.</p>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/monaie.png" alt="monaie" />
	<p>Plailly s’est appelé Plaitleyacum, Plaally, Plaalli , Plallé , Plaliacum , Plailliacum  et Plaliacus.</p>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/texte_latin.jpg" alt="texte en latin" />
	<p>C’est dans les actes de Charles le Chauve que l’on trouve ce nom. En 842 « Charles le Chauve, à la prière de la reine Ermentrude, affecte à l’entretien des religieuses de Morienval une partie des biens de l’Abattia soit : en Sellentois, Béthancourt, une mense à Rouvres et le tiers des bois dépendant de Plailly ; (item concecit tertiam partem silvarum quae pertinent ad villam Plaitleyacum, in usibus eoum ).</p>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voute.jpg" alt="voutes" />
	<p>L’archaïsme des patronages religieux Gervais, Protais et Martin laisse penser que l’agglomération de Plailly a été choisie dès l’époque romaine pour y édifier une église et donner au village la qualité de Vicus qui semble dès le VIème siècle s’appliquer aux chefs lieux de paroisse.  Il est donc  probable que sous l’église actuelle il y ait eu un autre édifice que seules des fouilles archéologiques permettraient de mieux connaître. Classée monument historique dès 1862, l’église, dont la nef et le clocher sont de la seconde moitié du XII ème siècle et sa belle flèche octogonale ajoutée au XIII ème siècle, est d’une rare élégance.</p>
	<p>A l’intérieur, des chapiteaux riche-ment décorés et sculptés vers 1200 sont d’une qualité exceptionnelle et dénotent une influence très marquée de Notre - Dame de Paris.</p>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/eglise_plailly2.jpg" alt="eglise Plailly" />
</div>
<?php
	get_footer();
?>



