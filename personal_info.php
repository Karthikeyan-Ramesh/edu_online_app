<?php
session_start();
?>
<html>
<head>
<style>
img {
  float: left;
}
ul{
float: right;
margin-right:20px;
}
li{
float:left;
padding: 20;
}
a{
text-decoration:none
}
.tit{
padding-top:3px;
color: #ffffff;
width: 100%;
}
.brd{background-color:black;
  width: 405px;
  height:745px;
  border: 2px white;
  padding: 40px;
  margin-left: 445px;
  margin-top:5px;
  text-align:center;
  border-radius:2%;
  transition:transform .2s;
}
.brd:hover
{
  transform: scale(1.05);
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius:6px;
}
input[type=text], select {
  width: 85%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left:-25px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}input[type=Password], select {
  width: 85%;
  padding: 12px 14px;
  margin-top:-25px;
  margin-left:-45px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=date], select {
  width: 85%;
  padding: 12px 14px;
  margin-top:-25px;
  margin-left:-45px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=file], select {
  width: 85%;
  background-color:white;
  padding: 12px 14px;
  margin-top:-25px;
  margin-left:-45px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.des
{
 padding: 12px 14px;
  margin-top: 25px;
  margin-left:-45px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  }
</style>
</head>
<body bgcolor="#404040">
<div class="logo">
<img src="img/gkit.jpg" width="145" height="145">
</div>
<div class="home">
<ul style="list-style-type:none">
<font color="white" size="4">
<li><a href="" style="color: #ffffff">HOME</a></li>
<li><a href="" style="color: #ffffff">ABOUT</a></li>
<li><a href="personal_info.php" style="color: #ffffff">ADMISSION</a></li>
<li><a href="" style="color: #ffffff">LOGIN</a></li>
<li><a href="" style="color: #ffffff">CONTACT</a></li></font>
</ul>
</div>
<div class="tit">
<h1 style="color:#d58d15;font-size:50px;padding-left:-10px;">GLOBAL KINGS</h1>
<p style="color:white;font-size:24px;margin-top:-40px;">Institution of science and Technologies</p>
</div>
<div class="brd">
<h1 style="color:#d58d15;margin-top:-10px;">Personal Details</h1>
<form name="myform" method="post" action="person_valid.php" enctype="multipart-form/data">
<input type="text" name="username" placeholder="Name of Applicant" style="margin-top:-10px;margin-left:2px;"><font color="red" size="5">*</font>
<p style="color:red;"><?php  if(isset($_SESSION["name"])){ echo $_SESSION["name"];}?></p>
<input type="text" name="email" placeholder="Email-id" style="margin-top:15px;margin-left:3px;" ><font color="red" size="5">*</font>
<p style="color:red;"><?php  if(isset($_SESSION["email"])){ echo $_SESSION["email"];}?></p>
<input type="password" name="pass" placeholder="Password" style="margin-top:20px;margin-left:3px;"><font color="red" size="5">*</font>
<input type="password" name="repass" placeholder="Re-Type Password" style="margin-top:40px;margin-left:3px;"><font color="red" size="5">*</font>
<p style="color:red;"><?php  if(isset($_SESSION["pass"])){ echo $_SESSION["pass"];}?></p>
<input type="text" name="mobile" placeholder="Mobile-Number" style="margin-top:20px;margin-left:3px;"><font color="red" size="5">*</font>
<p style="color:red;"><?php  if(isset($_SESSION["mobile"])){ echo $_SESSION["mobile"];}?></p>
<font color="White" size="6">Gender: <input type="radio"  name="gender" style="width:22px;height:22px;margin-top:25px;" value="Male">Male <input type="radio" name="gender" style="width:22px;margin-top:25px;height:22px;" value="Female">Female <font color="red" size="5">*</font></font>
<p style="color:red;"><?php  if(isset($_SESSION["gender"])){ echo $_SESSION["gender"];}?></p>
<input type="submit" class="button" style="margin-top:30px;" Value="Next">
</form>
</div>
</body>
</html>