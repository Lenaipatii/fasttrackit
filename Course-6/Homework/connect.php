<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'survey_form');
$db = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
mysql_select_db('survey_form') or die (mysql_error());
?>