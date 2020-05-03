<?php

$servername = "########################3333";
$username = "##########";
$password = "##########";
$dbname = "############";

try {
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    	die("OOPs algo deu errado");
    }
 
?>
