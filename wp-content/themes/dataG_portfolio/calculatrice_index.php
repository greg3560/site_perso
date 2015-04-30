<?php 
/* 
Template Name: calculatrice
*/
session_start();

get_header(); ?>
{tooltip}<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/informations.png" alt="Consle Midas." /> {end-texte|w=350|mood=800|tipd=1000|offsety=50}<h2>Objectif:</h2>
						<p>Mettre en place une application PHP et javascript à l'aide des connaissances acquises.La calculatrice était une approche simple et appropriée.</p>
						<h2>Pédagogie:</h2>
						<ul>
							<li>Formateur à l'INFA.</li>
							<li>Documentation PHP pour le choix des fonctions à utiliser.</li>
							<li>De nombreux tests.</li>
						</ul>
						<h2>Acquis:</h2>
						<p>
							<ul>
								<li>Boucles et fonctions javascript pour l'affichage des caractères et la gestion du "lien" =.</li>
								<li>Utilisation des expressions régilieres pour déterminer le type d'opération.</li>
								<li>Mise en pratique de quelques fonctions PHP: explode, header, preg_match et session_start.</li>
								<li>Maitrise des variables superglobales $_POST, $_GET, $_SESSION.</li>
							</ul>
						</p>{end-tooltip}
	<body id="calc_body">
		<header>
		</header>
		<section class="calc_section">
			<form id="calc_form" action="" method="post">
				<?php

					if(!empty($_SESSION["result"]))
					{
						echo "<input type=\"text\" name=\"number\" id=\"number\" value=\"".$_SESSION["result"]."\" />";
						unset($_SESSION["result"]);
					}
					else
					{
						echo "<input type=\"text\" name=\"number\" id=\"number\" />";
					}
				?>
			</form>
			<div id="bloc">
				<div id="premiere">
					<a class="calc_a"id="c1"></a>
					<a class="calc_a"id="c2"></a>
					<a class="calc_a"id="c3"></a>
					<a class="calc_a"id="" href="./?page_id=224">C</a>
					<a class="calc_a"id="" href="./?page_id=224">CE</a>
				</div>
				<div id="deuxieme">
					<a class="calc_a"id="c6"></a>
					<a class="calc_a"id="c7"></a>
					<a class="calc_a"id="c8"></a>
					<a class="calc_a"id="c9"></a>
					<a class="calc_a"id="c10"></a>
				</div>
				<div id="troisieme">
					<a class="calc_a"id="c11"></a>
					<a class="calc_a"id="c12"></a>
					<a class="calc_a"id="c13"></a>
					<a class="calc_a"id="c14"></a>
					<a class="calc_a"id="c15"></a>
				</div>
				<div id="quatrieme">
					<a class="calc_a"id="c16"></a>
					<a class="calc_a"id="c0"></a>
					<a class="calc_a"id="c17"></a>
					<a class="calc_a"id="c18"></a>
					<a class="calc_a"id="egal">=</a>
				</div>
			</div>
		</section>
	</body>
<?php get_footer(); ?>
