<?php

$db_host = "localhost"; //host
$db_name = "j12test"; //databasnamn
$db_user = "root"; //username
$db_pass = "root"; //password

$con = mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("kunde inte ansluta till databasen");

?>