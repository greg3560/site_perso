<?php 

/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */ 
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'optionsframework_the_app';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace ''
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	//array of all custom font types.
	$font_types = array( 'Arial' => 'Arial',
		'Comic Sans MS' => 'Comic Sans MS',
		'FreeSans' => 'FreeSans',
		'Georgia' => 'Georgia',
		'Lucida Sans Unicode' => 'Lucida Sans Unicode',
		'Palatino Linotype' => 'Palatino Linotype',
		'Symbol' => 'Symbol',
		'Tahoma' => 'Tahoma',
		'Trebuchet MS' => 'Trebuchet MS',
		'Verdana' => 'Verdana',
		'ABeeZee' => 'ABeeZee',
		'Abel' => 'Abel',
		'Abril Fatface' => 'Abril Fatface',
		'Aclonica' => 'Aclonica',
		'Acme' => 'Acme',
		'Actor' => 'Actor',
		'Adamina' => 'Adamina',
		'Advent Pro' => 'Advent Pro',
		'Aguafina Script' => 'Aguafina Script',
		'Akronim' => 'Akronim',
		'Aladin' => 'Aladin',
		'Aldrich' => 'Aldrich',
		'Alegreya' => 'Alegreya',
		'Alegreya SC' => 'Alegreya SC',
		'Alex Brush' => 'Alex Brush',
		'Alfa Slab One' => 'Alfa Slab One',
		'Alice' => 'Alice',
		'Alike' => 'Alike',
		'Alike Angular' => 'Alike Angular',
		'Allan' => 'Allan',
		'Allerta' => 'Allerta',
		'Allerta Stencil' => 'Allerta Stencil',
		'Allura' => 'Allura',
		'Almendra' => 'Almendra',
		'Almendra Display' => 'Almendra Display',
		'Almendra SC' => 'Almendra SC',
		'Amarante' => 'Amarante',
		'Amaranth' => 'Amaranth',
		'Amatic SC' => 'Amatic SC',
		'Amethysta' => 'Amethysta',
		'Anaheim' => 'Anaheim',
		'Andada' => 'Andada',
		'Andika' => 'Andika',
		'Annie Use Your Telescope' => 'Annie Use Your Telescope',
		'Anonymous Pro' => 'Anonymous Pro',
		'Antic' => 'Antic',
		'Antic Didone' => 'Antic Didone',
		'Antic Slab' => 'Antic Slab',
		'Anton' => 'Anton',
		'Arapey' => 'Arapey',
		'Arbutus' => 'Arbutus',
		'Arbutus Slab' => 'Arbutus Slab',
		'Architects Daughter' => 'Architects Daughter',
		'Archivo Black' => 'Archivo Black',
		'Archivo Narrow' => 'Archivo Narrow',
		'Arimo' => 'Arimo',
		'Arizonia' => 'Arizonia',
		'Armata' => 'Armata',
		'Artifika' => 'Artifika',
		'Arvo' => 'Arvo',
		'Asap' => 'Asap',
		'Asset' => 'Asset',
		'Astloch' => 'Astloch',
		'Asul' => 'Asul',
		'Atomic Age' => 'Atomic Age',
		'Aubrey' => 'Aubrey',
		'Audiowide' => 'Audiowide',
		'Autour One' => 'Autour One',
		'Average' => 'Average',
		'Average Sans' => 'Average Sans',
		'Averia Gruesa Libre' => 'Averia Gruesa Libre',
		'Averia Libre' => 'Averia Libre',
		'Averia Sans Libre' => 'Averia Sans Libre',
		'Averia Serif Libre' => 'Averia Serif Libre',
		'Bad Script' => 'Bad Script',
		'Balthazar' => 'Balthazar',
		'Bangers' => 'Bangers',
		'Basic' => 'Basic',
		'Baumans' => 'Baumans',
		'Belgrano' => 'Belgrano',
		'Belleza' => 'Belleza',
		'BenchNine' => 'BenchNine',
		'Bentham' => 'Bentham',
		'Berkshire Swash' => 'Berkshire Swash',
		'Bevan' => 'Bevan',
		'Bigelow Rules' => 'Bigelow Rules',
		'Bigshot One' => 'Bigshot One',
		'Bilbo' => 'Bilbo',
		'Bilbo Swash Caps' => 'Bilbo Swash Caps',
		'Bitter' => 'Bitter',
		'Black Ops One' => 'Black Ops One',
		'Bonbon' => 'Bonbon',
		'Boogaloo' => 'Boogaloo',
		'Bowlby One' => 'Bowlby One',
		'Bowlby One SC' => 'Bowlby One SC',
		'Brawler' => 'Brawler',
		'Bree Serif' => 'Bree Serif',
		'Bubblegum Sans' => 'Bubblegum Sans',
		'Bubbler One' => 'Bubbler One',
		'Buda' => 'Buda',
		'Buenard' => 'Buenard',
		'Butcherman' => 'Butcherman',
		'Butcherman Caps' => 'Butcherman Caps',
		'Butterfly Kids' => 'Butterfly Kids',
		'Cabin' => 'Cabin',
		'Cabin Condensed' => 'Cabin Condensed',
		'Cabin Sketch' => 'Cabin Sketch',
		'Cabin' => 'Cabin',
		'Caesar Dressing' => 'Caesar Dressing',
		'Cagliostro' => 'Cagliostro',
		'Calligraffitti' => 'Calligraffitti',
		'Cambo' => 'Cambo',
		'Candal' => 'Candal',
		'Cantarell' => 'Cantarell',
		'Cantata One' => 'Cantata One',
		'Cantora One' => 'Cantora One',
		'Capriola' => 'Capriola',
		'Cardo' => 'Cardo',
		'Carme' => 'Carme',
		'Carrois Gothic' => 'Carrois Gothic',
		'Carrois Gothic SC' => 'Carrois Gothic SC',
		'Carter One' => 'Carter One',
		'Caudex' => 'Caudex',
		'Cedarville Cursive' => 'Cedarville Cursive',
		'Ceviche One' => 'Ceviche One',
		'Changa One' => 'Changa One',
		'Chango' => 'Chango',
		'Chau Philomene One' => 'Chau Philomene One',
		'Chela One' => 'Chela One',
		'Chelsea Market' => 'Chelsea Market',
		'Cherry Cream Soda' => 'Cherry Cream Soda',
		'Cherry Swash' => 'Cherry Swash',
		'Chewy' => 'Chewy',
		'Chicle' => 'Chicle',
		'Chivo' => 'Chivo',
		'Cinzel' => 'Cinzel',
		'Cinzel Decorative' => 'Cinzel Decorative',
		'Clicker Script' => 'Clicker Script',
		'Coda' => 'Coda',
		'Codystar' => 'Codystar',
		'Combo' => 'Combo',
		'Comfortaa' => 'Comfortaa',
		'Coming Soon' => 'Coming Soon',
		'Condiment' => 'Condiment',
		'Contrail One' => 'Contrail One',
		'Convergence' => 'Convergence',
		'Cookie' => 'Cookie',
		'Copse' => 'Copse',
		'Corben' => 'Corben',
		'Courgette' => 'Courgette',
		'Cousine' => 'Cousine',
		'Coustard' => 'Coustard',
		'Covered By Your Grace' => 'Covered By Your Grace',
		'Crafty Girls' => 'Crafty Girls',
		'Creepster' => 'Creepster',
		'Creepster Caps' => 'Creepster Caps',
		'Crete Round' => 'Crete Round',
		'Crimson' => 'Crimson',
		'Croissant One' => 'Croissant One',
		'Crushed' => 'Crushed',
		'Cuprum' => 'Cuprum',
		'Cutive' => 'Cutive',
		'Cutive Mono' => 'Cutive Mono',
		'Damion' => 'Damion',
		'Dancing Script' => 'Dancing Script',
		'Dawning of a New Day' => 'Dawning of a New Day',
		'Days One' => 'Days One',
		'Delius' => 'Delius',
		'Delius Swash Caps' => 'Delius Swash Caps',
		'Delius Unicase' => 'Delius Unicase',
		'Della Respira' => 'Della Respira',
		'Denk One' => 'Denk One',
		'Devonshire' => 'Devonshire',
		'Didact Gothic' => 'Didact Gothic',
		'Diplomata' => 'Diplomata',
		'Diplomata SC' => 'Diplomata SC',
		'Domine' => 'Domine',
		'Donegal One' => 'Donegal One',
		'Doppio One' => 'Doppio One',
		'Dorsa' => 'Dorsa',
		'Dosis' => 'Dosis',
		'Dr Sugiyama' => 'Dr Sugiyama',
		'Droid Sans' => 'Droid Sans',
		'Droid Sans Mono' => 'Droid Sans Mono',
		'Droid Serif' => 'Droid Serif',
		'Duru Sans' => 'Duru Sans',
		'Dynalight' => 'Dynalight',
		'EB Garamond' => 'EB Garamond',
		'Eagle Lake' => 'Eagle Lake',
		'Eater' => 'Eater',
		'Eater Caps' => 'Eater Caps',
		'Economica' => 'Economica',
		'Electrolize' => 'Electrolize',
		'Elsie' => 'Elsie',
		'Elsie Swash Caps' => 'Elsie Swash Caps',
		'Emblema One' => 'Emblema One',
		'Emilys Candy' => 'Emilys Candy',
		'Engagement' => 'Engagement',
		'Englebert' => 'Englebert',
		'Enriqueta' => 'Enriqueta',
		'Erica One' => 'Erica One',
		'Esteban' => 'Esteban',
		'Euphoria Script' => 'Euphoria Script',
		'Ewert' => 'Ewert',
		'Exo' => 'Exo',
		'Expletus Sans' => 'Expletus Sans',
		'Fanwood Text' => 'Fanwood Text',
		'Fascinate' => 'Fascinate',
		'Fascinate Inline' => 'Fascinate Inline',
		'Faster One' => 'Faster One',
		'Federant' => 'Federant',
		'Federo' => 'Federo',
		'Felipa' => 'Felipa',
		'Fenix' => 'Fenix',
		'Finger Paint' => 'Finger Paint',
		'Fjalla One' => 'Fjalla One',
		'Fjord One' => 'Fjord One',
		'Flamenco' => 'Flamenco',
		'Flavors' => 'Flavors',
		'Fondamento' => 'Fondamento',
		'Fontdiner Swanky' => 'Fontdiner Swanky',
		'Forum' => 'Forum',
		'Francois One' => 'Francois One',
		'Freckle Face' => 'Freckle Face',
		'Fredericka the Great' => 'Fredericka the Great',
		'Fredoka One' => 'Fredoka One',
		'Fresca' => 'Fresca',
		'Frijole' => 'Frijole',
		'Fruktur' => 'Fruktur',
		'Fugaz One' => 'Fugaz One',
		'Gafata' => 'Gafata',
		'Galdeano' => 'Galdeano',
		'Galindo' => 'Galindo',
		'Gentium Basic' => 'Gentium Basic',
		'Gentium Book Basic' => 'Gentium Book Basic',
		'Geo' => 'Geo',
		'Geostar' => 'Geostar',
		'Geostar Fill' => 'Geostar Fill',
		'Germania One' => 'Germania One',
		'Gilda Display' => 'Gilda Display',
		'Give You Glory' => 'Give You Glory',
		'Glass Antiqua' => 'Glass Antiqua',
		'Glegoo' => 'Glegoo',
		'Gloria Hallelujah' => 'Gloria Hallelujah',
		'Goblin One' => 'Goblin One',
		'Gochi Hand' => 'Gochi Hand',
		'Gorditas' => 'Gorditas',
		'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
		'Graduate' => 'Graduate',
		'Grand Hotel' => 'Grand Hotel',
		'Gravitas One' => 'Gravitas One',
		'Great Vibes' => 'Great Vibes',
		'Griffy' => 'Griffy',
		'Gruppo' => 'Gruppo',
		'Gudea' => 'Gudea',
		'Habibi' => 'Habibi',
		'Hammersmith One' => 'Hammersmith One',
		'Hanalei' => 'Hanalei',
		'Hanalei Fill' => 'Hanalei Fill',
		'Handlee' => 'Handlee',
		'Happy Monkey' => 'Happy Monkey',
		'Headland One' => 'Headland One',
		'Henny Penny' => 'Henny Penny',
		'Herr Von Muellerhoff' => 'Herr Von Muellerhoff',
		'Holtwood One SC' => 'Holtwood One SC',
		'Homemade Apple' => 'Homemade Apple',
		'Homenaje' => 'Homenaje',
		'IM Fell' => 'IM Fell',
		'Iceberg' => 'Iceberg',
		'Iceland' => 'Iceland',
		'Imprima' => 'Imprima',
		'Inconsolata' => 'Inconsolata',
		'Inder' => 'Inder',
		'Indie Flower' => 'Indie Flower',
		'Inika' => 'Inika',
		'Irish Growler' => 'Irish Growler',
		'Istok Web' => 'Istok Web',
		'Italiana' => 'Italiana',
		'Italianno' => 'Italianno',
		'Jacques Francois' => 'Jacques Francois',
		'Jacques Francois Shadow' => 'Jacques Francois Shadow',
		'Jim Nightshade' => 'Jim Nightshade',
		'Jockey One' => 'Jockey One',
		'Jolly Lodger' => 'Jolly Lodger',
		'Josefin Sans' => 'Josefin Sans',
		'Josefin Sans' => 'Josefin Sans',
		'Josefin Slab' => 'Josefin Slab',
		'Joti One' => 'Joti One',
		'Judson' => 'Judson',
		'Julee' => 'Julee',
		'Julius Sans One' => 'Julius Sans One',
		'Junge' => 'Junge',
		'Jura' => 'Jura',
		'Just Another Hand' => 'Just Another Hand',
		'Just Me Again Down Here' => 'Just Me Again Down Here',
		'Kameron' => 'Kameron',
		'Karla' => 'Karla',
		'Kaushan Script' => 'Kaushan Script',
		'Kavoon' => 'Kavoon',
		'Keania One' => 'Keania One',
		'Kelly Slab' => 'Kelly Slab',
		'Kenia' => 'Kenia',
		'Kite One' => 'Kite One',
		'Knewave' => 'Knewave',
		'Kotta One' => 'Kotta One',
		'Kranky' => 'Kranky',
		'Kreon' => 'Kreon',
		'Kristi' => 'Kristi',
		'Krona One' => 'Krona One',
		'La Belle Aurore' => 'La Belle Aurore',
		'Lancelot' => 'Lancelot',
		'Lato' => 'Lato',
		'League Script' => 'League Script',
		'Leckerli One' => 'Leckerli One',
		'Ledger' => 'Ledger',
		'Lekton' => 'Lekton',
		'Lemon' => 'Lemon',
		'Libre Baskerville' => 'Libre Baskerville',
		'Life Savers' => 'Life Savers',
		'Lilita One' => 'Lilita One',
		'Limelight' => 'Limelight',
		'Linden Hill' => 'Linden Hill',
		'Lobster' => 'Lobster',
		'Lobster Two' => 'Lobster Two',
		'Londrina Outline' => 'Londrina Outline',
		'Londrina Shadow' => 'Londrina Shadow',
		'Londrina Sketch' => 'Londrina Sketch',
		'Londrina Solid' => 'Londrina Solid',
		'Lora' => 'Lora',
		'Love Ya Like A Sister' => 'Love Ya Like A Sister',
		'Loved by the King' => 'Loved by the King',
		'Lovers Quarrel' => 'Lovers Quarrel',
		'Luckiest Guy' => 'Luckiest Guy',
		'Lusitana' => 'Lusitana',
		'Lustria' => 'Lustria',
		'Macondo' => 'Macondo',
		'Macondo Swash Caps' => 'Macondo Swash Caps',
		'Magra' => 'Magra',
		'Maiden Orange' => 'Maiden Orange',
		'Mako' => 'Mako',
		'Marcellus' => 'Marcellus',
		'Marcellus SC' => 'Marcellus SC',
		'Marck Script' => 'Marck Script',
		'Margarine' => 'Margarine',
		'Marko One' => 'Marko One',
		'Marmelad' => 'Marmelad',
		'Marvel' => 'Marvel',
		'Mate' => 'Mate',
		'Mate SC' => 'Mate SC',
		'Maven Pro' => 'Maven Pro',
		'McLaren' => 'McLaren',
		'Meddon' => 'Meddon',
		'MedievalSharp' => 'MedievalSharp',
		'Medula One' => 'Medula One',
		'Megrim' => 'Megrim',
		'Meie Script' => 'Meie Script',
		'Merienda' => 'Merienda',
		'Merienda One' => 'Merienda One',
		'Merriweather' => 'Merriweather',
		'Metal Mania' => 'Metal Mania',
		'Metamorphous' => 'Metamorphous',
		'Metrophobic' => 'Metrophobic',
		'Michroma' => 'Michroma',
		'Milonga' => 'Milonga',
		'Miltonian' => 'Miltonian',
		'Miltonian Tattoo' => 'Miltonian Tattoo',
		'Miniver' => 'Miniver',
		'Miss Fajardose' => 'Miss Fajardose',
		'Miss Saint Delafield' => 'Miss Saint Delafield',
		'Modern Antiqua' => 'Modern Antiqua',
		'Molengo' => 'Molengo',
		'Molle' => 'Molle',
		'Monda' => 'Monda',
		'Monofett' => 'Monofett',
		'Monoton' => 'Monoton',
		'Monsieur La Doulaise' => 'Monsieur La Doulaise',
		'Montaga' => 'Montaga',
		'Montez' => 'Montez',
		'Montserrat' => 'Montserrat',
		'Montserrat Alternates' => 'Montserrat Alternates',
		'Montserrat Subrayada' => 'Montserrat Subrayada',
		'Mountains of Christmas' => 'Mountains of Christmas',
		'Mouse Memoirs' => 'Mouse Memoirs',
		'Mr Bedford' => 'Mr Bedford',
		'Mr Bedfort' => 'Mr Bedfort',
		'Mr Dafoe' => 'Mr Dafoe',
		'Mr De Haviland' => 'Mr De Haviland',
		'Mrs Saint Delafield' => 'Mrs Saint Delafield',
		'Mrs Sheppards' => 'Mrs Sheppards',
		'Muli' => 'Muli',
		'Mystery Quest' => 'Mystery Quest',
		'Neucha' => 'Neucha',
		'Neuton' => 'Neuton',
		'New Rocker' => 'New Rocker',
		'News Cycle' => 'News Cycle',
		'Niconne' => 'Niconne',
		'Nixie One' => 'Nixie One',
		'Nobile' => 'Nobile',
		'Norican' => 'Norican',
		'Nosifer' => 'Nosifer',
		'Nosifer Caps' => 'Nosifer Caps',
		'Noticia Text' => 'Noticia Text',
		'Nova Round' => 'Nova Round',
		'Numans' => 'Numans',
		'Nunito' => 'Nunito',
		'Offside' => 'Offside',
		'Oldenburg' => 'Oldenburg',
		'Oleo Script' => 'Oleo Script',
		'Oleo Script Swash Caps' => 'Oleo Script Swash Caps',
		'Open Sans' => 'Open Sans',
		'Open Sans Condensed' => 'Open Sans Condensed',
		'Oranienbaum' => 'Oranienbaum',
		'Orbitron' => 'Orbitron',
		'Oregano' => 'Oregano',
		'Orienta' => 'Orienta',
		'Original Surfer' => 'Original Surfer',
		'Oswald' => 'Oswald',
		'Over the Rainbow' => 'Over the Rainbow',
		'Overlock' => 'Overlock',
		'Overlock SC' => 'Overlock SC',
		'Ovo' => 'Ovo',
		'Oxygen' => 'Oxygen',
		'Oxygen Mono' => 'Oxygen Mono',
		'PT Mono' => 'PT Mono',
		'PT Sans' => 'PT Sans',
		'PT Sans Narrow' => 'PT Sans Narrow',
		'PT Serif' => 'PT Serif',
		'PT Serif Caption' => 'PT Serif Caption',
		'Pacifico' => 'Pacifico',
		'Paprika' => 'Paprika',
		'Parisienne' => 'Parisienne',
		'Passero One' => 'Passero One',
		'Passion One' => 'Passion One',
		'Patrick Hand' => 'Patrick Hand',
		'Patua One' => 'Patua One',
		'Paytone One' => 'Paytone One',
		'Peralta' => 'Peralta',
		'Permanent Marker' => 'Permanent Marker',
		'Petit Formal Script' => 'Petit Formal Script',
		'Petrona' => 'Petrona',
		'Philosopher' => 'Philosopher',
		'Piedra' => 'Piedra',
		'Pinyon Script' => 'Pinyon Script',
		'Pirata One' => 'Pirata One',
		'Plaster' => 'Plaster',
		'Play' => 'Play',
		'Playball' => 'Playball',
		'Playfair Display' => 'Playfair Display',
		'Playfair Display SC' => 'Playfair Display SC',
		'Podkova' => 'Podkova',
		'Poiret One' => 'Poiret One',
		'Poller One' => 'Poller One',
		'Poly' => 'Poly',
		'Pompiere' => 'Pompiere',
		'Pontano Sans' => 'Pontano Sans',
		'Port Lligat Sans' => 'Port Lligat Sans',
		'Port Lligat Slab' => 'Port Lligat Slab',
		'Prata' => 'Prata',
		'Press Start 2P' => 'Press Start 2P',
		'Princess Sofia' => 'Princess Sofia',
		'Prociono' => 'Prociono',
		'Prosto One' => 'Prosto One',
		'Puritan' => 'Puritan',
		'Purple Purse' => 'Purple Purse',
		'Quando' => 'Quando',
		'Quantico' => 'Quantico',
		'Quattrocento' => 'Quattrocento',
		'Quattrocento Sans' => 'Quattrocento Sans',
		'Questrial' => 'Questrial',
		'Quicksand' => 'Quicksand',
		'Quintessential' => 'Quintessential',
		'Qwigley' => 'Qwigley',
		'Racing Sans One' => 'Racing Sans One',
		'Radley' => 'Radley',
		'Raleway Dots' => 'Raleway Dots',
		'Raleway' => 'Raleway',
		'Rambla' => 'Rambla',
		'Rammetto One' => 'Rammetto One',
		'Ranchers' => 'Ranchers',
		'Rancho' => 'Rancho',
		'Rationale' => 'Rationale',
		'Redressed' => 'Redressed',
		'Reenie Beanie' => 'Reenie Beanie',
		'Revalia' => 'Revalia',
		'Ribeye' => 'Ribeye',
		'Ribeye Marrow' => 'Ribeye Marrow',
		'Righteous' => 'Righteous',
		'Risque' => 'Risque',
		'Roboto' => 'Roboto',
		'Roboto Condensed' => 'Roboto Condensed',
		'Rochester' => 'Rochester',
		'Rock Salt' => 'Rock Salt',
		'Rokkitt' => 'Rokkitt',
		'Romanesco' => 'Romanesco',
		'Ropa Sans' => 'Ropa Sans',
		'Rosario' => 'Rosario',
		'Rosarivo' => 'Rosarivo',
		'Rouge Script' => 'Rouge Script',
		'Ruda' => 'Ruda',
		'Rufina' => 'Rufina',
		'Ruge Boogie' => 'Ruge Boogie',
		'Ruluko' => 'Ruluko',
		'Rum Raisin' => 'Rum Raisin',
		'Ruslan Display' => 'Ruslan Display',
		'Russo One' => 'Russo One',
		'Ruthie' => 'Ruthie',
		'Rye' => 'Rye',
		'Sacramento' => 'Sacramento',
		'Sail' => 'Sail',
		'Salsa' => 'Salsa',
		'Sanchez' => 'Sanchez',
		'Sancreek' => 'Sancreek',
		'Sansita One' => 'Sansita One',
		'Sarina' => 'Sarina',
		'Satisfy' => 'Satisfy',
		'Scada' => 'Scada',
		'Schoolbell' => 'Schoolbell',
		'Seaweed Script' => 'Seaweed Script',
		'Sevillana' => 'Sevillana',
		'Seymour One' => 'Seymour One',
		'Shadows Into Light' => 'Shadows Into Light',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shanti' => 'Shanti',
		'Share' => 'Share',
		'Share Tech' => 'Share Tech',
		'Share Tech Mono' => 'Share Tech Mono',
		'Shojumaru' => 'Shojumaru',
		'Short Stack' => 'Short Stack',
		'Sigmar One' => 'Sigmar One',
		'Signika' => 'Signika',
		'Signika Negative' => 'Signika Negative',
		'Simonetta' => 'Simonetta',
		'Sirin Stencil' => 'Sirin Stencil',
		'Six Caps' => 'Six Caps',
		'Skranji' => 'Skranji',
		'Slackey' => 'Slackey',
		'Smokum' => 'Smokum',
		'Smythe' => 'Smythe',
		'Sniglet' => 'Sniglet',
		'Snippet' => 'Snippet',
		'Snowburst One' => 'Snowburst One',
		'Sofadi One' => 'Sofadi One',
		'Sofia' => 'Sofia',
		'Sonsie One' => 'Sonsie One',
		'Sorts Mill Goudy' => 'Sorts Mill Goudy',
		'Sorts Mill Goudy' => 'Sorts Mill Goudy',
		'Source Code Pro' => 'Source Code Pro',
		'Source Sans Pro' => 'Source Sans Pro',
		'Special Elite' => 'Special Elite',
		'Spicy Rice' => 'Spicy Rice',
		'Spinnaker' => 'Spinnaker',
		'Spirax' => 'Spirax',
		'Squada One' => 'Squada One',
		'Stalemate' => 'Stalemate',
		'Stalinist One' => 'Stalinist One',
		'Stardos Stencil' => 'Stardos Stencil',
		'Stint Ultra Condensed' => 'Stint Ultra Condensed',
		'Stint Ultra Expanded' => 'Stint Ultra Expanded',
		'Stoke' => 'Stoke',
		'Stoke' => 'Stoke',
		'Strait' => 'Strait',
		'Sue Ellen Francisco' => 'Sue Ellen Francisco',
		'Sunshiney' => 'Sunshiney',
		'Supermercado One' => 'Supermercado One',
		'Swanky and Moo Moo' => 'Swanky and Moo Moo',
		'Syncopate' => 'Syncopate',
		'Tangerine' => 'Tangerine',
		'Telex' => 'Telex',
		'Tenor Sans' => 'Tenor Sans',
		'Terminal Dosis' => 'Terminal Dosis',
		'Terminal Dosis Light' => 'Terminal Dosis Light',
		'Text Me One' => 'Text Me One',
		'The Girl Next Door' => 'The Girl Next Door',
		'Tienne' => 'Tienne',
		'Tinos' => 'Tinos',
		'Titan One' => 'Titan One',
		'Titillium Web' => 'Titillium Web',
		'Trade Winds' => 'Trade Winds',
		'Trocchi' => 'Trocchi',
		'Trochut' => 'Trochut',
		'Trykker' => 'Trykker',
		'Tulpen One' => 'Tulpen One',
		'Ubuntu' => 'Ubuntu',
		'Ubuntu Condensed' => 'Ubuntu Condensed',
		'Ubuntu Mono' => 'Ubuntu Mono',
		'Ultra' => 'Ultra',
		'Uncial Antiqua' => 'Uncial Antiqua',
		'Underdog' => 'Underdog',
		'Unica One' => 'Unica One',
		'UnifrakturCook' => 'UnifrakturCook',
		'UnifrakturMaguntia' => 'UnifrakturMaguntia',
		'Unkempt' => 'Unkempt',
		'Unlock' => 'Unlock',
		'Unna' => 'Unna',
		'VT323' => 'VT323',
		'Vampiro One' => 'Vampiro One',
		'Varela' => 'Varela',
		'Varela Round' => 'Varela Round',
		'Vast Shadow' => 'Vast Shadow',
		'Vibur' => 'Vibur',
		'Vidaloka' => 'Vidaloka',
		'Viga' => 'Viga',
		'Voces' => 'Voces',
		'Volkhov' => 'Volkhov',
		'Vollkorn' => 'Vollkorn',
		'Voltaire' => 'Voltaire',
		'Waiting for the Sunrise' => 'Waiting for the Sunrise',
		'Wallpoet' => 'Wallpoet',
		'Walter Turncoat' => 'Walter Turncoat',
		'Warnes' => 'Warnes',
		'Wellfleet' => 'Wellfleet',
		'Wendy One' => 'Wendy One',
		'Wire One' => 'Wire One',
		'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
		'Yellowtail' => 'Yellowtail',
		'Yeseva One' => 'Yeseva One',
		'Yesteryear' => 'Yesteryear',
		'Zeyada' => 'Zeyada'
	);


	// array of section content.
	$section_text = array(
		1 => array(
			'section_title'	=> '',
			'bgcolor' 		=> '#eb5055',
			'bgimage'		=> '',
			'class'			=> 'feature_section',
			'content'		=> '<div class="one_half">
<div class="take-look_manage-desktop">
<div class="takmanage_thum"><img src="'.get_template_directory_uri().'/images/camera.png"></div>
<h4>Take a Look</h4>
Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</div>
</div><div class="one_half last_column">
<div class="take-look_manage-desktop">
<div class="takmanage_thum"><img src="'.get_template_directory_uri().'/images/desktop.png"></div>
<h4>Manage from desktop</h4>
Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</div>
</div>
           <div class="clear"></div>
                '
		),
		2 => array(
			'section_title'	=> 'About Us',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=> '',
			'class'			=> 'about_text',
			'content'		=> 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
			
			
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas scelerisque mauris risus, ut dignissim dolor porta et. Quisque placerat odio arcu, sed mollis elit tempus id. Phasellus maximus, nisi et laoreet commodo, mauris ipsum dapibus nisl, sed scelerisque augue sapien at augue. Ut ac odio vehicula, aliquet eros ac, placerat quam. Etiam dictum lectus in eros scelerisque varius. Aliquam luctus, dui non eleifend maximus, odio neque mollis mi, sit amet pulvinar sem leo sed ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc ut tristique ante. Nunc et elit malesuada, fringilla sem nec, semper tellus. Pellentesque imperdiet egestas magna. Donec a magna rhoncus, porta lectus in, tincidunt quam. Phasellus faucibus dolor ut metus posuere, nec dictum tortor consequat. Duis nec nisi eget tortor dignissim pellentesque nec et turpis. Aliquam mollis bibendum lectus at mollis. Etiam eget turpis orci. Duis luctus auctor lectus, ac mollis tellus imperdiet vel

Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam pharetra magna urna, id dictum nibh dapibus a. Quisque vel imperdiet lorem. Duis dictum, ante sit amet pharetra vestibulum, ante lorem rhoncus sapien, sit amet accumsan lacus turpis sit amet lorem. Phasellus efficitur cursus egestas. Curabitur tempus purus in libero porttitor, nec suscipit lacus porta. Curabitur risus ante, porttitor vitae magna sed, euismod maximus turpis. Suspendisse interdum felis diam, at posuere lorem laoreet id. Ut vitae magna at turpis efficitur facilisis at ac risus. '
		),
		3 => array(
			'section_title'	=> '',
			'bgcolor' 		=> '#303441',
			'bgimage'		=> '',
			'class'			=> 'flexible-design',
			'content'		=> '<div class="flex_content">
            <h2><span>Super</span> Flexible Design</h2>
        Curabitur nisl turpis, interdum ut magna eget, porta facilisis quam. Proin aliquet a tellus id mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent erat eros, auctor nec pulvinar ac, volutpat vel neque. Quisque sed mauris quis eros lobortis sodales. Integer ut tellus dictum, tempor risus ac.
    
        <div class="multiple-colors">Available in multiple colors
            <div class="colour-flex"><a href=""><img src="'.get_template_directory_uri().'/images/colour-flex.png" alt="Colour Flex" /></a></div>
        </div><!--multiple-colors -->
        </div><div class="super-flex">
        <div class="super-flex-thumb"><img src="'.get_template_directory_uri().'/images/marc-smith.png" alt="Marc Smith" /></div>
        </div>
        '
		),
		4 => array(
			'section_title'	=> '',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=> '',
			'class'			=> 'responsive-design',
			'content'		=> '<div class="responsive_content">
    	<h2><span>Responsive</span> Design</h2>   
Curabitur nisl turpis, interdum ut magna eget, porta facilisis quam. Proin aliquet a tellus id mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
<div class="responsive-read"><a href="#"> Read More </a></div>
    </div>'
		),
		5 => array(
			'section_title'	=> '',
			'bgcolor' 		=> '#303441',
			'bgimage'		=> '',
			'class'			=> 'home_portfolio',
			'content'		=> '<h2>Support</h2>
Donec sed arcu eget dolor placerat ultrices. In hac habitasse platea dictumst. Vivamus viverra sapien dolor, nec pretium metus scelerisque a. Maecenas leo risus, porttitor eu faucibus at, pharetra ut tellus. Sed ac dolor feugiat, interdum magna eu, bibendum odio. In vitae rutrum velit. Donec pulvinar non felis sit amet dapibus. Aenean ornare quis turpis non aliquam. Nulla facilisi. Aliquam dui elit, accumsan id lectus sed, volutpat feugiat felis. Phasellus venenatis neque accumsan mauris feugiat, non semper nisi rutrum. Nullam malesuada magna a tempus hendrerit. Aenean quam nunc, bibendum et volutpat tincidunt, ultrices eleifend quam

Etiam vel pharetra eros, non semper metus. Nam in hendrerit purus. Praesent posuere rutrum efficitur. Integer ut pulvinar felis. Quisque non ullamcorper nisi. Morbi accumsan velit non nisl pretium tincidunt. Aliquam porta mi fringilla magna scelerisque, a convallis felis accumsan. 
        <div class="space10"></div>'
		),
		6 => array(
			'section_title'	=> '',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=> '',
			'class'			=> 'get-theapp',
			'content'		=> '<div class="container">
            	                <h2>Get <span>The App</span></h2>
<p> Maecenas eu augue dictum, adipiscing nunc quis, porta quam. In hac habitasse platea dictumst.</p>
<p>In hac habitasse platea dictumst. Vivamus viverra sapien dolor, nec pretium metus scelerisque a. Maecenas leo risus, porttitor eu faucibus at, pharetra ut tellus. Sed ac dolor feugiat, interdum magna eu, bibendum odio. In vitae rutrum velit. Donec pulvinar non felis sit amet dapibus. Aenean ornare quis turpis non aliquam. Nulla facilisi. Aliquam dui elit, accumsan id lectus sed, volutpat feugiat felis. Phasellus venenatis neque accumsan mauris feugiat, non semper nisi rutrum. Nullam malesuada magna a tempus hendrerit.</p>
<p><strong>Available on all platforms</strong></p>
<div class="space10"></div>
                <div class="clear"></div>
            </div>'
		),
		7 => array(
			'section_title'	=> 'Get the Quote',
			'bgcolor' 		=> '#eb5055',
			'bgimage'		=> '',
			'class'			=> 'contact',
			'content'		=> 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
			<div class="contact_info">[contact-form-7 id="4" title="Contact form 1"]</div><div class="quick_info">
        	<h5>Contact Information</h5>
            <p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit amet volutpat libero. Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. </p>
            <div class="location">Lorem Street. 14/05 Fusce dapibus</div>
            <div class="tel-phone"><a href="tel:">03528 331 86 35</a> </div>
            <div class="email"><a href="mailto:info@example.com">info@example.com</a></div>
        </div>'
		),
	);

	$options = array();

	//Basic Settings
	$options[] = array(
		'name' => __('Basic Settings', 'the-app'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Logo', 'the-app'),
		'desc' => __('Upload your main logo here', 'the-app'),
		'id' => 'logo',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Favicon', 'the-app'),
		'desc' => __('Upload favicon for website', 'the-app'),
		'id' => 'favicon',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
	

	//Layout Settings
	$options[] = array(
		'name' => __('Sections', 'the-app'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Number of Sections', 'the-app'),
		'desc' => __('Select number of sections', 'the-app'),
		'id' => 'numsection',
		'type' => 'select',
		'std' => '7',
		'options' => array_combine(range(1,20), range(1,20)) );

	$numsecs = of_get_option( 'numsection', 7 );

	for( $n=1; $n<=$numsecs; $n++){
		$options[] = array(
			'desc' => __("<h3>Section</h3>", 'the-app'),
			'class' => 'toggle_title',
			'type' => 'info');	
	
		$options[] = array(
			'name' => __('Section Title', 'the-app'),
			'id' => 'sectiontitle'.$n,
			'std' => ( ( isset($section_text[$n]['section_title']) ) ? $section_text[$n]['section_title'] : '' ),
			'type' => 'text');

		$options[] = array(
			'name' => __('Section Background Color', 'the-app'),
			'desc' => __('Select background color for section', 'the-app'),
			'id' => 'sectionbgcolor'.$n,
			'std' => ( ( isset($section_text[$n]['bgcolor']) ) ? $section_text[$n]['bgcolor'] : '' ),
			'type' => 'color');

		$options[] = array(
			'name' => __('Section CSS Class', 'the-app'),
			'desc' => __('Set class for this section.', 'the-app'),
			'id' => 'sectionclass'.$n,
			'std' => ( ( isset($section_text[$n]['class']) ) ? $section_text[$n]['class'] : '' ),
			'type' => 'text');

		$options[] = array(
			'name' => __('Section Content', 'the-app'),
			'id' => 'sectioncontent'.$n,
			'std' => ( ( isset($section_text[$n]['content']) ) ? $section_text[$n]['content'] : '' ),
			'type' => 'editor');
	}


	//SLIDER SETTINGS
	$options[] = array(
		'name' => __('Slider Images', 'the-app'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Slider Image 1', 'the-app'),
		'desc' => __('Upload / select image for slide 1', 'the-app'),
		'id' => 'slide1',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/1slide1.png",
		'type' => 'upload');

	$options[] = array(
		'desc' => __('Title 1', 'the-app'),
		'id' => 'slidetitle1',
		'std' => 'Free Business WordPress Theme',
		'type' => 'text');

	$options[] = array(
		'desc' => __('Slide Description 1', 'the-app'),
		'id' => 'slidedesc1',
		'std' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut leo augue, posuere id commodo quis, malesuada in justo. Nulla nunc purus, interdum quis imperdiet in, placerat id felis. Duis sodales iaculis mauris.',
		'type' => 'textarea');			
		
	$options[] = array(
		'desc' => __('Link / Url 1', 'the-app'),
		'id' => 'slideurl1',
		'std' => '#link1',
		'type' => 'text',
		'subtype' => 'url');

	$options[] = array(
		'name' => __('Slider Image 2', 'the-app'),
		'desc' => __('Upload / select image for slide 2', 'the-app'),
		'id' => 'slide2',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/2slide2.png",
		'type' => 'upload');

	$options[] = array(
		'desc' => __('Title 2', 'the-app'),
		'id' => 'slidetitle2',
		'std' => 'Fully Responsive WordPress Theme',
		'type' => 'text');

	$options[] = array(
		'desc' => __('Slide Description 2', 'the-app'),
		'id' => 'slidedesc2',
		'std' => 'Ut leo augue, posuere id commodo quis, malesuada in justo. Nulla nunc purus, interdum quis imperdiet in, placerat id felis. Duis sodales iaculis mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		'type' => 'textarea');			
		
	$options[] = array(
		'desc' => __('Link / Url 2', 'the-app'),
		'id' => 'slideurl2',
		'std' => '#link2',
		'type' => 'text',
		'subtype' => 'url');

	$options[] = array(
		'name' => __('Slider Image 3', 'the-app'),
		'desc' => __('Upload / select image for slide 3', 'the-app'),
		'id' => 'slide3',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/1slide1.png",
		'type' => 'upload');

	$options[] = array(
		'desc' => __('Title 3', 'the-app'),
		'id' => 'slidetitle3',
		'std' => 'Easy to Use',
		'type' => 'text');

	$options[] = array(
		'desc' => __('Slide Description 3', 'the-app'),
		'id' => 'slidedesc3',
		'std' => 'Nulla nunc purus, interdum quis imperdiet in, placerat id felis. Duis sodales iaculis mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut leo augue, posuere id commodo quis, malesuada in justo.',
		'type' => 'textarea');			
		
	$options[] = array(
		'desc' => __('Link / Url 3', 'the-app'),
		'id' => 'slideurl3',
		'std' => '#link3',
		'type' => 'text',
		'subtype' => 'url');
		
	$options[] = array(
		'name' => __('Slider Image 4', 'the-app'),
		'desc' => __('Upload / select image for slide 4', 'the-app'),
		'id' => 'slide4',
		'class' => '',
		'std' => '',
		'type' => 'upload');

	$options[] = array(
		'desc' => __('Title 4', 'the-app'),
		'id' => 'slidetitle4',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'desc' => __('Slide Description 4', 'the-app'),
		'id' => 'slidedesc4',
		'std' => '',
		'type' => 'textarea');			
		
	$options[] = array(
		'desc' => __('Link / Url 4', 'the-app'),
		'id' => 'slideurl4',
		'std' => '',
		'type' => 'text',
		'subtype' => 'url');

	$options[] = array(
		'name' => __('Slider Image 5', 'the-app'),
		'desc' => __('Upload / select image for slide 5', 'the-app'),
		'id' => 'slide5',
		'class' => '',
		'std' => '',
		'type' => 'upload');

	$options[] = array(
		'desc' => __('Title 5', 'the-app'),
		'id' => 'slidetitle5',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'desc' => __('Slide Description 5', 'the-app'),
		'id' => 'slidedesc5',
		'std' => '',
		'type' => 'textarea');			
		
	$options[] = array(
		'desc' => __('Link / Url 5', 'the-app'),
		'id' => 'slideurl5',
		'std' => '',
		'type' => 'text',
		'subtype' => 'url');
		
		
	//Social
	$options[] = array(
		'name' => __('Social Settings', 'the-app'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('Social Links', ''),
		'desc' => __('Add your facebook link here with http://', 'the-app'),
		'id'   => 'fbicon',
		'std'  => '#',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add your google plus link here with http://', 'the-app'),
		'id'   => 'gplusicon',
		'std'  => '#',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add your Twitter link here with http://', 'the-app'),
		'id'   => 'twitticon',
		'std'  => '#',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add your Linkedin link here with http://', 'the-app'),
		'id'   => 'linkedicon',
		'std'  => '#',
		'type' => 'text');


	// Support					
	$options[] = array(
		'name' => __('Our Themes', 'the-app'),
		'type' => 'heading');

	$options[] = array(
		'desc' => __('SKT The App WordPress theme has been Designed and Created by SKT Themes.', 'the-app'),
		'type' => 'info');	

	 $options[] = array(
		'desc' => '<a href="'.esc_url(SKT_URL).'" target="_blank"><img src="'.get_template_directory_uri().'/images/sktskill.jpg"></a><p><em><a target="_blank" href="'.esc_url(SKT_THEME_URL_DIRECT).'">'.__('Buy PRO version for only $39 with more features.','the-app').'</a></em></p>',
		'type' => 'info');	
	
	return $options;
}