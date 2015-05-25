
<?php
/* 
Template Name: mud_nous_contacter
*/

get_header(); ?>
{tooltip}<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/informations.png" alt="Informations" /> {end-texte|w=350|mood=800|tipd=1000|offsety=50}<h2>Objectif:</h2>
						<p>Refonte du site www.m-u-d-60.fr.Redonner un nouvel aspect au site et intégrer de nouveaux outil comme google maps ou un formulaire de contact.Toutes les pages du sites sont développées.</p>
						<h2>Pédagogie:</h2>
						<p>
							<ul>
								<li>Différents cours suivi sur le web(openclassrooms, alsacreation et club développez.com)</li>
								<li>Formation infographiste multimedia à l'INFA.</li>
							</ul>
						</p>
						<h2>Acquis:</h2>
						<p>
							<ul>
								<li>Premieres manipulations de bases de données en constituant un menu dynamique.</li>
								<li>intégration d'un slider entièrement développé en CSS3.</li>
								<li>Création de ma propre fonction mail.</li>
							</ul>
						</p>
						<p>
						Optimisation de la hiéarchie des fichier avec un fichier de traitement pour l'envoi du formulaire et utilisation de la fonction include de php pour ce qui concerne l'en-tete, le pied de page et le menu.Création de fichier de connexion a la base de données.</p>{end-tooltip}
			<?php
				include("inc/mud_header.php");
			?>
		<div id="bloc_page_site">
			<h1 id="mud_h1">NOUS CONTACTER</h1>
			<div id="page">
			<section id="formulaire">
			<?php
				if(!empty($_GET["succes"]))
				{
					if($_GET["succes"])
					{
						echo "<h4><span>Votre demande est bien envoyée et est en cours de traitement.</span></h4>";
					}
					else
					{
						echo "<span>Veuillez renseigner tous les champs.</span>";
					}
				}
			?>
		 <form id="form_contact" method="POST" action="functions.php?action=formulaire">
			<?php wp_nonce_field('mud_contact', 'mud_home'); ?>
			<fieldset>
                                <label class="label" for="raison_sociale">Raison sociale</label><input type="text" name="raison_sociale" class="input_text"/><br/>
                                <label class="label">Civilité</label>
				<div id="bloc_civilite"><label for="monsieur" class="label_item">M</label><input type="radio" name="civilite" class="input_radio" value="M" title="M" />
                                <label for="madame" class="label_item">Mme</label><input type="radio" name="civilite" class="input_radio" value="Mme" />
                                <label for="mademoiselle" class="label_item">Mlle</label><input type="radio" name="civilite" class="input_radio" value="Mlle" /></div><br/>
                                <label class="label" for="nom">Nom<span>*</span></label><input type="text" name="nom" class="input_text" required /><br/>
                                <label class="label" for="prenom">Prénom<span>*</span></label><input type="text" name="prenom" class="input_text" required /><br/>
                                <label class="label" for="adresse_postale">Adresse</label><input type="text" name="adresse_postale" class="input_text"/><br/>
                                <label class="label" for="code_postal">Code postal</label><input type="text" name="code_postal" class="input_text"/><br/>
                                <label class="label" for="ville">Ville</label><input type="text" name="ville" class="input_text"/><br/>
                                <label class="label" for="pays">Pays</label><input type="text" name="pays" class="input_text"/><br/>
                                <label class="label" for="telephone">Tel</label><input type="tel" name="telephone" class="input_text"/><br/>
                                <label class="label" for="fax">Fax</label><input type="tel" name="fax" class="input_text"/><br/>
                                <label class="label" for="mail">E-mail<span>*</span></label><input type="email" name="mail" class="input_text" required /><br/>
                <label class="label" for="message">Votre message:<span>*</span></label><textarea name="message" id="message" required row="8" cols="35"></textarea><br/>
                        <input type="submit" name="mud_form" value="Envoyer"id="valider"/><div class="fleche"></div>
				</fieldset>
			<em class="mud_em"><span class="mud_span">*</span>Informations obligatoires.</em>
                </form>
			</section>
			</div>
		</div>
		<?php
			include("inc/mud_footer.php");
		?>
<?php get_footer(); ?>


