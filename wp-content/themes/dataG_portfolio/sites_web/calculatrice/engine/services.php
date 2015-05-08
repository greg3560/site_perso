<?php
session_start();
	if(preg_match("#\+#", "\"".urlencode($_GET["operation"])."\""))
	{
		$exp = [];
		$exp=explode(" ", $_GET["operation"]);
		addition($exp[0], $exp[1]);
	}
	else if(preg_match("#\-#", "\"".$_GET["operation"]."\""))
	{
		$exp=explode("-", $_GET["operation"]);
		soustraction($exp[0], $exp[1]);
	}
	else if(preg_match("#\*#", "\"".$_GET["operation"]."\""))
	{
		$exp=explode("*", $_GET["operation"]);
		multiplication($exp[0], $exp[1]);
	}
	else if(preg_match("#\/#", "\"".$_GET["operation"]."\""))
	{
		$exp=explode("/", $_GET["operation"]);
		division($exp[0], $exp[1]);
	}
	else if(preg_match("#\%#", "\"".$_GET["operation"]."\""))
	{
		$exp=explode("%", $_GET["operation"]);
		modulo($exp[0], $exp[1]);
	}
	else
	{
		header("Location:../../../calculatrice_index.php");
	}


/*FONCTIONS*/

function addition($t, $d)
{
	$_SESSION["result"]=$t + $d;
	header("Location:\"bloginfo('template_directory')\"./../../../../../../../?page_id=224");
}
function soustraction($t, $d)
{
	$_SESSION["result"]=$t - $d;
	header("Location:\"bloginfo('template_directory')\"./../../../../../../../?page_id=224");
}
function multiplication($t, $d)
{
	$_SESSION["result"]=$t * $d;
	header("Location:\"bloginfo('template_directory')\"./../../../../../../../?page_id=224");
}
function division($t, $d)
{
	$_SESSION["result"]=$t / $d;
	header("Location:\"bloginfo('template_directory')\"./../../../../../../../?page_id=224");
}
function modulo($t, $d)
{
	$_SESSION["result"]=$t % $d;
	header("Location:\"bloginfo('template_directory')\"./../../../../../../../?page_id=224");
}
?>
