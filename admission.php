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
  width: 375px;
  height:375px;
  border: 2px white;
  padding: 40px;
  margin-left: 465px;
  margin-top:-5px;
  text-align:center;
  border-radius:2%;
  transition:transform .2s;
}
.brd:hover
{
  transform: scale(1.05);
}
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
  width: 45%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left:-25px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}input[type=Password], select {
  width: 45%;
  padding: 12px 14px;
  margin-top:-25px;
  margin-left:-45px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=date], select {
  width: 45%;
  padding: 12px 14px;
  margin-top:-25px;
  margin-left:-45px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=file], select {
  width: 45%;
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
<div class="ad"><h1 style="color:#d58d15;margin-left:555px;">Admission Opening</h1></div>
<div class="brd">
<img src="img/gkit.jpg" style="margin-left:134px;" width="105" height="105">
<p style="color:white;font-size:36px;margin-top:145px;">This year PG and UG Admission opening from 2nd March to 2nd April</p>
<a href="personal_info.php" style="color:#d58d15;font-size:36px;">Online Application</a>
</div>
</body>
</html>