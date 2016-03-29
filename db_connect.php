<?php 

// To protect MySQL injection for Security purpose

$dbhost='127.0.0.1';
$dbuser='root';
$dbpass='';
$dbname='admission';
$db_connct=mysql_connect("$dbhost","$dbuser","$dbpass","$dbname")or die('sorry ,dont conncet');
mysql_select_db($dbname,$db_connct);