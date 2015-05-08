

<?php
$hostname="localhost";
$database="gregorypeigne";
$username="root";
$password='*"tom&jerry"*';

$cnx=mysqli_connect($hostname,$username,$password)or trigger_error(mysql_error(),E_USER_ERROR);
mysqli_select_db($cnx,$database);
mysqli_set_charset($cnx,'UTF-8');

?>
