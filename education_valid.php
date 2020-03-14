<?php
session_start();
$c=0;
header("Location:http://localhost/register/Education_qualification.php");
if(!preg_match("/^[0-9]+$/",$_POST["sslc"]))
{
	$_SESSION["10th"]="Only in numbers";
}
else
{
	$_SESSION["10th"]="";
	$c++;
}
if(!preg_match("/^[0-9]+$/",$_POST["hsc"]))
{
	$_SESSION["12th"]="Only in numbers";
}
else
{
	$_SESSION["12th"]="";
	$c++;
}
if(!preg_match("/^[A-Za-z_]+$/",$_POST["city"]))
{
	$_SESSION["city"]="Only Alphabets";
}
else
{
	$_SESSION["city"]="";
	$c++;
}
$_SESSION["image"] = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$_SESSION["image_name"] = addslashes($_FILES['image']['name']);
if($c==3)
{
header("Location:http://localhost/register/rs.php");	
}
?>