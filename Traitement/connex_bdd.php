<?php
$dbname="shouraCoucil";
$password="";
$username="root";

$con = mysql_connect('localhost',$username,$password) or die('error connection');
$db = mysql_select_db('shouraCoucil') or die('eroor selection database');

session_start();
?>