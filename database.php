<?php 

ini_set('display_errors', 'On');


try {
	$db = New PDO('mysql:host=localhost;dbname=sakila', "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo $e->getMessage();
	die();
}

?>