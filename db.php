<?php
try{
	$db = new PDO ('mysql:host=localhost; dbname=elenapmi_pro;', 'elenapmi_pro', '341195');
	$db -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
catch (PDOException $e) {
	print "Couldn't connect to the base: ".$e->getMessage();
}

?>