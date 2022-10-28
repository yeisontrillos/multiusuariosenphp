<?php
$db_host="bq0blsp5cjqgnsb6of7v-mysql.services.clever-cloud.com"; //localhost server 
$db_user="uhxjobwzbkzkkimo";	//database username
$db_password="b392blez1n8d9gzyXV4p";	//database password   
$db_name="bq0blsp5cjqgnsb6of7v";	//database name

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>



