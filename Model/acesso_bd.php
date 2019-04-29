<?php 
	 try {
		$hostname = "localhost";
		$dbname = "juegosps4";
		$username = "root";
		$pw = "";
		$dbh = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$pw");
	  	} catch (PDOException $e) {
			echo "ERROR: " . $e->getMessage() . "\n";
			exit;
		}
 ?>