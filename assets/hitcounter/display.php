<?php
	include("assets/hitcounter/counter_config.php");
	
// ###########################
// ### Connect to database ###
// ###########################

$link = mysql_connect($localhost, $dbuser, $dbpass); 
if (!$link) 
	{
	    die('Could not connect to database : ' . mysql_error());
	}
$db_selected = mysql_select_db($dbname, $link);

if (!$db_selected) 
	{
	    die ('Can\'t use database : ' . mysql_error());
	}


// ######################
// ### get total hits ###
// ######################
	
	$query = "SELECT SUM(count)  AS totalhits FROM hits"; 
	 
	$result = mysql_query($query) or die(mysql_error());

	
	while($row = mysql_fetch_array($result))
	{
		$totalhits = $row['totalhits']  ;
	}
  
$result=mysql_query("SELECT MAX(id) FROM info");
while ($row = mysql_fetch_array($result, MYSQL_NUM)) 
{
$totalips = $row[0] ;  
}
  ?>