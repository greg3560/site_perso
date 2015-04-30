<?php 
/* 
Template Name: cv 
*/

get_header(); ?>
		<div id="cv_bloc_page">
			<header id="cv_header">
				<address id="cv_address">
					GRÉGORY PEIGNÉ <br />
					<a href="mailto:gregorypeigne1@gmail.com">gregorypeigne1@gmail.com</a> <br />
					33 ans <br />
					Permis B Véhicule personnel
				</address>
			</header>
			<h1 id="cv_h1">Concepteur Développeur Mobile/Web.</h1>
			<h2 class="cv_h2" onClick="openCvUl('cv_ul0')">COMPÉTENCES</h2>
			<section class="cv_ul" id="cv_ul0">
				<div id="cv_competence_bloc">
					<ul class="cv_ul_comp">
							<li><img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/cv/html5.png" alt="html5" class="cv_competences" /><figure class="level5"></figure></li>
							<li><img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/cv/css3.png" alt="css3" id="css3" /><figure class="level4"></figure></li>
							<li><img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/cv/javascript.png" alt="javascript" id="javascript" /><figure class="level2"></figure></li>
					</ul>
					<ul class="cv_ul_comp">
							<li><img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/cv/wordpress.png" alt="wordpress" id="wp" /><figure class="level4"></figure></li>
							<li><img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/cv/php.png" alt="php" id="php" /><figure class="level4"></figure></li>
							<li><img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/cv/mysql.png" alt="mysql" id="mysql" /><figure class="level3"></figure></li>
					</ul>
					<ul class="cv_ul_comp">
							<li><img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/cv/linux.png" alt="linux" id="linux" /><figure class="level3"></figure></li>
							<li><img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/cv/git.png" alt="git" id="git" /><figure class="level3"></figure></li>
							<li><img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/cv/photoshop.png" alt="photoshop" class="cv_competences" /><figure class="level2"></figure></li>
					</ul>
				</div>
			</section>
			<h2 class="cv_h2" onClick="openCvUl('cv_ul1')" id="ancre">CERTIFICATIONS</h2>
			<ul class="cv_ul" id="cv_ul1">
				<li id="0">
					<a href="../../certificats/HTML5 CSS3.pdf" title="HTML5 CSS3" target="_blank">
						<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/cv/HTML5 CSS3.png" alt="HTML5 CSS3" title="HTML5 CSS3"/>
						<p class="gallery_p">
							Apprenez à créer votre site web avec HTML5 et CSS3.<br />
							Délivré le 17/02/2014.
						</p>
					</a>
					
				</li>
				<li id="1">
					<a href="../../certificats/PHP MySql.pdf" title="PHP MySQL" target="_blank">
						<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/cv/PHP MySql.png" alt="PHP MySql" title="PHP MySQL"/>
						<p class="gallery_p">
							Concevez votre site web avec PHP et MySQL.<br />
							Délivré le 22/04/2014.
						</p>
					</a>
					
				</li>
				<li id="2">
					<a href="../../certificats/Reprenez le controle a l'aide de linux.pdf" title="Linux" target="_blank">
						<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/cv/Reprenez le controle a l'aide de linux.png" alt="Linux" title="Linux"/>
						<p class="gallery_p">
							Reprenez le contrôle à l'aide de Linux !<br />
							Délivré le 12/10/2014.
						</p>
					</a>
				</li>
				<li id="3">
					<a href="../../certificats/certificat gerer son code avec git et github.pdf" title="GIT et GITHUB" target="_blank">
						<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/cv/certificat gerer son code avec git et github.png" alt="GIT et GITHUB" title="GIT et GITHUB"/>
						<p class="gallery_p">
							Gérer son code avec Git et GitHub.<br />
							Délivré le 22/10/2014.
						</p>
					</a>
					
				</li>
				<li id="4">
					<a href="../../certificats/apprenez à programmer en C.pdf" title="apprenez à programmer en C" target="_blank">
						<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/cv/apprenez à programmer en C.png" alt="apprenez à programmer en C" title="apprenez à programmer en C"/>
						<p class="gallery_p">
							Apprenez à programmer en C !<br />
							Délivré le 12/11/2014.
						</p>
					</a>
					
				</li>	
				<li id="4">
					<a href="../../certificats/Comprendre le web.pdf" title="Comprendre le web" target="_blank">
						<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/cv/Comprendre le web.png" alt="Comprendre le web" title="Comprendre le web"/>
						<p class="gallery_p">
							Comprendre le Web.<br />
							Délivré le 11/03/2014.
						</p>
					</a>
					
				</li>
				<li id="4">
					<a href="../../certificats/certificat le monde des start-ups.pdf" title="le monde des start-ups" target="_blank">
						<img src="<?php bloginfo('template_directory'); ?>/../dataG_portfolio/img/cv/certificat le monde des start-ups.png" alt="le monde des start-ups" title="le monde des start-ups"/>
						<p class="gallery_p">
							Découvrez le monde des start-ups.<br />
							Délivré le 07/10/2014.
						</p>
					</a>
					
				</li>			
			</ul>
			<h2 class="cv_h2" onClick="openCvUl('cv_ul2')">EXPÉRIENCES</h2>
			<table class="cv_ul" id="cv_ul2">
				<tr>
					<td>2013</td>
					<td class="tab"><strong>2ème prix Dailymotion</strong> au Hackathon <strong>open e-Education</strong>.Organisé par <strong>Acadomia</strong> et <strong>Openclassrooms</strong> autour de l'e-Éducation. Développement <strong>Front-end</strong> du site <a href="http://www.laboiteacomptines.fr/" title="La boite à comptines" target=_blank">la boite à comptines</a> en accord avec les spécifications fonctionnelles et techniques.</td>
				</tr>
				<tr>
					<td>2002-2015</td>
					<td class="tab">CDD <strong>Intermittent du spectacle:</strong>
						<ul>
							<li><strong>Régie son</strong> à M.U.D (60), Novelty (91), parc Astérix (60) => Fashion week, congrès Total, AXA ...</li>
							<li><strong>Assistant son lumière</strong> à Arpège (93), West-Evenement (35), S.B.E.S (56) => RFM Party, Pascal Obispo, Capleton, The Gladiators, Soldat Louis...</li>
							<li><strong>Régie Plateau</strong> au Palais des Congrès de Paris, Trans-Musicale (35),Route du Rock (35) => Travis...</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>2003</td>
					<td class="tab"><strong>Animateur radio</strong> à Radio Laser (35).</td>
				</tr>
				<tr>
					<td>2002-2003</td>
					<td class="tab"><strong>Maintenance électronique</strong> en CDD à A.D.E (35).</td>
				</tr>
				<tr>
					<td>1998-2002</td>
					<td class="tab"><strong>Maintenance électronique</strong> en alternance à Thomson (35).<strong>Responsable HIFI.</strong></td>
				</tr>
			</table>
			<h2 class="cv_h2" onClick="openCvUl('cv_ul3')">FORMATIONS</h2>
			<table class="cv_ul" id="cv_ul3">
				<tr>
					<td>2014-2015</td>
					<td class="tab">Formation <strong>infographiste multimédia</strong> en parcours professionnalisant suivi à l’<a href="https://www.infa-formation.com/" title="INFA" target="_blank">INFA</a> à Nogent sur Marne:
						<ul>
							<li><strong>HTML, CSS, PHP OO, Mysql</strong>.</li>
							<li><strong>Wordpress, Prestashop</strong>.</li>
							<li><strong>Adobe Photoshop, Adobe Edge</strong>.</li>
							<li><strong>Référencement naturel, ergonomie, responsive</strong></li>
							<li>Veille technologique</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>2011-2015</td>
					<td class="tab">Certifications délivrées par <a href="http://openclassrooms.com/" title="Openclassrooms" target="_blank">Openclassrooms</a>:
						<ul>
							<li><strong>HTML 5 et CSS 3</strong>.</li>
							<li><strong>PHP et MySQL</strong>.</li>
							<li><strong>Apprendre à programmer en C</strong></li>
							<li><strong>Linux</strong>.</li>
							<li><strong>GIT et GITHUB</strong></li>
							<li><strong>Comprendre le web</strong></li>
							<li><strong>les start-ups</strong></li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>2008</td>
					<td class="tab">Formation aux outils <strong>MAO</strong>: Cubase, Live, Reason.</td>
				</tr>
				<tr>
					<td>2003-2004</td>
					<td class="tab">Formation qualifiante technicien du spectacle STAFF option son et SST.</td>
				</tr>
				<tr>
					<td>2003</td>
					<td class="tab">Formation «Les techniques du son appliquées à la scène».</td>
				</tr>
				<tr>
					<td>2002</td>
					<td class="tab">Initiation au Plateau et à la Régie son.</td>
				</tr>
			</table>
			<h2 class="cv_h2" onClick="openCvUl('cv_ul4')">ÉTUDES-DIPLÔMES</h2>
			<table class="cv_ul" id="cv_ul4">
				<tr>
					<td>2000-2002</td>
					<td class="tab"><strong>BAC PRO MAVELEC</strong> (maintenance audiovisuel en électronique) au Campus de Ker-Lann (35).</td>
				</tr>
				<tr>
					<td>1998-2000</td>
					<td class="tab"><strong>B.E.P ICEF</strong> (Installation et Conseil en Équipement du Foyer) au Campus de Ker-Lann (35).</td>
				</tr>
				<tr>
					<td>1997-1998</td>
					<td class="tab">Seconde Professionnelle option <strong>électronique</strong> au Lycée Bréquigny (35).</td>
				</tr>
			</table>
			<h2 class="cv_h2" onClick="openCvUl('cv_ul5')">CENTRES D'INTERÊTS</h2>
			<table class="cv_ul" id="cv_ul5">
				<tr>
					<td></td>
					<td class="tab">Jujitsu.</td>
				</tr>
				<tr>
					<td></td>
					<td class="tab">Musique assistée par ordinateur.</td>
				</tr>
			</table>
		</div>
	<?php get_footer(); ?>
