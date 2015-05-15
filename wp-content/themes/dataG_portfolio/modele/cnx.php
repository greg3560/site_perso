<?php
	/*Connexion en procedural

	$hostname="localhost";
	$dbname="blog_datag";
	$user="root";
	$pass="";
	
	$cnx=mysqli_connect($hostname, $user, $pass)or trigger_error(mysql_error(),E_USER_ERROR);
	mysqli_select_db($cnx, $dbname);
	
	mysqli_set_charset($cnx, "UTF8");*/



	/*Connexion en orientée objet*/

	try
	{
		$bdd=new PDO("mysql:host=localhost;dbname=gregorypeigne;charset=utf8", "root", '*"tom&jerry"*', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(exception $e)
	{
		die("Erreur : ".$e->getMessage());
	}
?>
