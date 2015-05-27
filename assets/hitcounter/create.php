<?php

//############################################################################
//##### run this file to create the tables needed for the counter to work #### 
//############################################################################

 include ('counter_config.php');


$link = mysql_connect("$localhost", "$dbuser", "$dbpass");
if (!$link) 
{
    die('Could not connect: ' . mysql_error());
}

echo "- Connected to database at $localhost successfully <br />";

$db_selected = mysql_select_db($dbname, $link);
if (!$db_selected) 
{
    die ("Can't use database $dbname! : " . mysql_error());
}

echo "- Using database $dbname <br />" ;


$create1 = mysql_query("CREATE TABLE IF NOT EXISTS $dbtableinfo(id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id), ip_address VARCHAR(30), user_agent VARCHAR(50), datetime VARCHAR(25))");
if (!$create1) 
{
    die("Could create table $dbtableinfo :" . mysql_error());
}

echo "- Table $dbtableinfo created.<br />";

$create2 = mysql_query("CREATE TABLE IF NOT EXISTS $dbtablehits(page char(100),PRIMARY KEY(page),count int(15))");
if (!$create2) 
{
    die("Could create table $dbtablehits :" . mysql_error());
} 

echo "- Table $dbtablehits created<br/>";


mysql_close($link);

echo '- You are now ready to start using the statscounter.';

?>

