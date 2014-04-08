<?php
session_start();
include('connex_bdd.php');
if(isset($_POST['email']) && isset($_POST['password'])){
	$email = $_POST['email'];
	$pass = $_POST['password'];
}else{
	header("location: ../layout.php");
}
$x=0;

 $res   = mysql_query("SELECT * FROM professeur WHERE email = $email AND password= $pass limit 1",$con)or die("error selection donne");
 $ligne = mysql_fetch_row($res);
	if(!empty($ligne)){
		$x=1;
		$_SESSION['id']=$ligne['id'];
		$_SESSION['nom']=$ligne['nom'];
		$_SESSION['prenom']=$ligne['prenom'];
		$_SESSION['email'] = $ligne['email'];
		$_SESSION['mode']="professeur";	
	}
	

if($x==0){header('Location: ../directeur.php');}
if($x==1){header('Location: ../professeur.php');}


?>