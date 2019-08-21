<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conn_vote = "127.0.0.1";//localhost
$database_conn_vote = "poll";//replace with the database being used
$username_conn_vote = "root";//replace with your username
$password_conn_vote = "1234";//replace with your password
//$conn_vote = mysql_pconnect($hostname_conn_vote, $username_conn_vote, $password_conn_vote) or trigger_error(mysql_error(),E_USER_ERROR);
$conn_vote = mysql_connect($hostname_conn_vote, $username_conn_vote, $password_conn_vote) or die('Can\'t create connection: '.mysql_error());
mysql_select_db($database_conn_vote, $conn_vote) or die('Can\'t access specified db: '.mysql_error());
?>