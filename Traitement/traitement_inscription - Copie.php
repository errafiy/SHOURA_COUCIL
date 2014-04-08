<?php
include('connex_bdd.php');
if(!empty($_POST)){

$prenom=$_POST['خانةالإسم'];
$nom=$_POST['خانةالنسب'];
$password=$_POST['خانةكلمةالسر'];

$table=$_POST['radio'];
$email=$_POST['email'];
$verifEmail=$_POST['verifEmail'];
$dateNaissance=$_POST['خانةتاريخالإزدياد'];

/** vérifier si les données sont justes **/ 
echo $table;

$x=1;
if($x){
//خطأ في البريد:
if($email == $verifEmail){

//ok

//البريد أو كلمة السر موجودة مسبقا:

$res = mysql_query("select * from $table",$con) or die('error selection des donnes');


while($ligne = mysql_fetch_array($res)){

if($ligne['email']==$email or $ligne['password'] == $password){

$x=2;
break;

}

}

if($x == 2){
header("Location: ../layout.php?cas=$x");
}elseif($x == 1){

////إذاكان شخصا جديدا فأدخله في القاعدة:
/*
if($table == 'directeur'){
 $x=3;
$res =mysql_query("INSERT INTO  directeur(nom,prenom,password,email,dateNaissance) VALUES('$nom','$prenom','$password','$email','$dateNaissance')",$con) or die("error envoie donne");
header("Location: ../layout.php?cas=$x");

}

if($table == 'professeur'){
$x=3;
$res =mysql_query("INSERT INTO  professeur(nom,prenom,password,email,dateNaissance) VALUES('$nom','$prenom','$password','$email','$dateNaissance')",$con) or die("error envoie donne");
header("Location: ../layout.php?cas=$x");

}*/
echo "hellow";
}


else{
header("Location: ../layout.php?cas=$x");
}


}else{
header("Location: ../layout.php?cas=$x");

}






}else{



}



}




?>
	
	