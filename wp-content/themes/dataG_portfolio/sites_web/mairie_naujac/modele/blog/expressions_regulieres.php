<?php
	function expression_reguliere($texte)
	{
		$texte = stripslashes($texte); // On enlève les slashs qui se seraient ajoutés automatiquement
    		$texte = htmlspecialchars($texte);
    		$texte = nl2br($texte); // On crée des <br /> pour conserver les retours à la ligne
    
    		// Quelque regex
    		$texte = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $texte);
    		$texte = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $texte);
    		$texte = preg_replace('#\[color=(red|green|blue|yellow|purple|olive)\](.+)\[/color\]#isU', '<span style="color:$1">$2</span>', $texte);
    		$texte = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $texte);
    		$texte = preg_replace('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', '<a href="mailto:$0">$0</a>', $texte);

		return $texte;
	}

