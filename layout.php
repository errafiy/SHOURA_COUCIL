<html>

<title>موقع جلسة العلماء</title>

<head>

<style  >

#تجزئةالرسائل{
position:absolute;
top:85%;
left:59%;

}


#صورةمجلسالشورى{
position : absolute;
top:40%;
left:95%;

}

#تجزءةالبطن{
position: absolute;
left:59%;

}

#العناوين{

animation-name :  العناوين;
animation-duration:  5s;

animation-iteration-count:infinite;
}


@keyframes العناوين{


25%{
color : yellow;
}

50%{

color:Black;

}


100%{

color:skyBlue;

}

}

#رجلالصفحة{

position:absolute;
bottom : 0%;

}

#إستمارةالعلماء{

position:absolute;
top : 10%;
left : 70%;
}

#صورةكرةالأرضية{
position:absolute;
top:3%;
left:2%;
z-index:1;


}

#صورةجلسةالعلماء{
position:absolute;
left:7%;
top:1%;
transform:rotate(0deg);
width:10%;
z-index:2;
}



#صورةجلسةالعلماء{

/* Animation de l'element #صورةجلسةالعلماء  */

animation-name :  صورةجلسةالعلماء;
animation-duration:  5s;


animation-iteration-count:infinite;
}


@keyframes صورةجلسةالعلماء{


25%{

transform: rotateY(180deg); 
}

50%{

transform: rotateY(360deg); 
}


100%{

transform: rotateY(0deg); 
}

}



</style>
</head>
<?php include"Traitement/connex_bdd.php";  //الجلسة  قد بدات من قبل
?>


<body>

<h1 id="تجزئةالرسائل">

</h1>


<?php

if(isset($_GET['cas'])){

$x = $_GET['cas'];

if($x == 1){
$msg =  "!!البريدان الإلكترونيان غير متشابهان";
}

if($x == 2){
$msg = "كلمة السر أو البريد المدخل موجود مسبقا حاول تغييرهما من فضلك";
}

if($x == 3){
$msg = "التسجيل ثم بنجاح";
}
?>
<script language='javascript'>
document.getElementById ("تجزئةالرسائل"). innerHTML = "<?php echo $msg?>";
</script>
<?php
}



?>







<fieldset style="padding: 1em;  font:80%/1 sans-serif; height:31%;background-color:skyBlue;width:100%;">
<img id="صورةجلسةالعلماء" src="جلسةالعلماء.png"/>
<img    id="صورةكرةالأرضية" src="جلسةالعلماء.jpg"/>

<?php if(!isset($_SESSION['nom'])) { ?>	
		
    <form   id="إستمارةالعلماء"  method="POST" action="Traitement/Traitement-auth.php">
<table border="0"  style="position:absolute;">
<tr>
<td><input   type="text"   placeHolder="أدخل بريدك من فضلك" name="email" required/></td>
<td><input   type="password"   placeHolder="أدخل كلمة السر من فضلك" name="password" required/></td>
<td ><input type="submit"  name="خانةزرالتواصل" Value="التواصل"  /></td>
</tr>
<tr><td><a href="inscription.php">نسيت كلمة السر؟</a></td>
<td><input type="checkbox" checked/><a href="صفحةنسيانكلمةالسر.php">هل تريد الحفاظ على جلستك؟</a></td></tr>
</table>
	</form>
	
	<?php 
	}else{
	 if($_SESSION['mode']== "directeur"){ header("location: directeur.php");
	 }else{ header("location: professeur.php");}
} ?></div>
</fieldset>


<!-- إستمارة التسجيل:-->

<div id="تجزءةالبطن"   >
<img id="صورةمجلسالشورى" src="صورةمجلسالشورى.jpg"/>

<form  id="إستمارة التسجيل"  method="POST" action="Traitement/traitement_inscription.php">

<table>
<tr><td><h1 id="العناوين"><u>إستمارة التسجيل:</u></h1></td></tr>
<tr><td><input  type="text"  placeHolder="الإسم"  name="خانةالإسم" required/></td><td><input  type="text"  placeHolder="النسب" name="خانةالنسب"  required/></td></tr>
<tr><td colspan="2"><input  type="text" style="width:100%"  placeHolder="البريد الإلكتروني"  name="email" required/></td></tr>
<tr><td colspan="2"><input  type="text" style="width:100%"  placeHolder="أثبت البريد الإلكتروني"  name="verifEmail" required/></td></tr>
<tr><td colspan="2"><input  type="password" style="width:100%"  placeHolder="كلمة السر"  name="خانةكلمةالسر" required/></td></tr>
<tr><td colspan="2"><input  type="text" style="width:100%"  placeHolder="تاريخ الإزدياد : السنة/الشهر/اليوم"  name="خانةتاريخالإزدياد" required/></td></tr>
<tr><td><input type="radio" name="radio"  value="directeur"  />مدير</td><td><input type="radio" name="radio" value="professeur" />أستاذ</td></tr>
<tr><td><input  colspan="2"  type="submit" style="width:60%" value="التسجيل"/></td></tr>
</table>
</form>
</div>


<div id="رجلالصفحة">
<img id="رجلالصفحة"  style="width:100%;" src="رجلالصفحة.png"  />
</div>


</body>
</html>