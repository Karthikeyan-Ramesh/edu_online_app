<?php
session_start();
header("Location:http://localhost/register/personal_info.php");
$count=0;
$_SESSION["Name"]=$_POST["username"];
$_SESSION["Email"]=$_POST["email"];
$_SESSION["Password"]=$_POST["pass"];
$_SESSION["Mobile"]=$_POST["mobile"];
$_SESSION["Gender"]=$_POST["gender"];
if(!preg_match("/^[A-Za-z_]+$/",$_POST["username"]))
{
	$_SESSION["name"]="Invalid Name";
}
else
{
	$_SESSION["name"]="";
	$count++;
}
if(!preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})+$/",$_POST["email"]))
	{
		$_SESSION["email"]="Invalid Email";
	}
	else
	{
		$_SESSION["email"]="";
		$count++;
	}
if((!preg_match("/^[0-9]+$/",$_POST["mobile"])) && (strlen($_POST["mobile"])!=10))
{
	$_SESSION["mobile"]="Invalid Phone Number";
}
else
{
	$_SESSION["mobile"]="";
	$count++;
}
if(strlen($_POST["pass"])<8 || strlen($_POST["repass"])<8)
{
	$_SESSION["pass"]="Atleast 8 character";
}
	if((strlen($_POST["pass"])>=8)&&(strlen($_POST["repass"])>=8))
{
	if($_POST["pass"]!=$_POST["repass"])
	{
$_SESSION["pass"]="Password does not match";
}
else
{
	$_SESSION["pass"]="";
	$count++;
}	
}

	if(isset($_POST["gender"]))
{
	$_SESSION["gender"]="";
	$count++;
}
else
{
	$_SESSION["gender"]="Select Gender";
}
if($count==5)
{
	header("Location:http://localhost/register/Education_qualification.php");
}
?>