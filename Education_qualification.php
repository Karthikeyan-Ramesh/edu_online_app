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
  width: 475px;
  height:845px;
  border: 2px white;
  padding: 40px;
  margin-left: 405px;
  margin-top:-5px;
  text-align:center;
  border-radius:2%;
  transition:transform .2s;
}
.brd:hover
{
  transform: scale(1.05);
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
<h1 style="color:#d58d15;margin-top:-10px;">Educational Qualification</h1>
<form name="myform" method="post" action="education_valid.php" enctype="multipart-form/data">
<input type="text" name="sslc" placeholder="10th Mark in Percentage" style="margin-left:2px;"><font color="red" size="5">*</font>
<p style="color:red;"><?php  if(isset($_SESSION["10th"])){ echo $_SESSION["10th"];}?></p>
<input type="text" name="hsc" placeholder="12th Mark in Percentage" style="margin-top:30px;margin-left:2px;"><font color="red" size="5">*</font>
<p style="color:red;"><?php  if(isset($_SESSION["12th"])){ echo $_SESSION["12th"];}?></p>
<select name="current_edu" type="text" style="margin-top:30px;margin-left:-10px;">
<option>CURRENT EDUCATION</option>
<option value="Graduate & above">Graduate & above</option>
<option value="In Graduate">In Graduate</option>
<option value="10th Standard">10th Standard</option>
<option value="12th Standard">12th Standard</option>
</select>
<select type="text" name="state" style="margin-top:40px;margin-left:-10px;">
      <option value="0">SELECT STATE</option>
      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
      <option value="Andhra Pradesh">Andhra Pradesh</option>
      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
      <option value="Assam">Assam</option>
      <option value="Bihar">Bihar</option>
      <option value="Chandigarh">Chandigarh</option>
      <option value="Chhattisgarh">Chhattisgarh</option>
      <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
      <option value="Daman and Diu">Daman and Diu</option>
      <option value="Delhi">Delhi</option>
      <option value="Goa">Goa</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Haryana">Haryana</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Lakshadweep">Lakshadweep</option>
      <option value="Madhya Pradesh">Madhya Pradesh</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Manipur">Manipur</option>
      <option value="Meghalaya">Meghalaya</option>
      <option value="Mizoram">Mizoram</option>
      <option value="Nagaland">Nagaland</option>
      <option value="Odisha">Odisha</option>
      <option value="Puducherry">Puducherry</option>
      <option value="Punjab">Punjab</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Sikkim">Sikkim</option>
      <option value="Tamil Nadu">Tamil Nadu</option>
      <option value="Telangana">Telangana</option>
      <option value="Tripura">Tripura</option>
      <option value="Uttar Pradesh">Uttar Pradesh</option>
      <option value="Uttarakhand">Uttarakhand</option>
      <option value="West Bengal">West Bengal</option>
</select>
<select type="text" name="course" style="margin-top:40px;margin-left:-10px;">
    <option>COURSES</option>
    <option value="B. Pharma">B. Pharma</option>
    <option  value="B.Com">B.Com</option>
    <option value="B.Des">B.Des</option>
    <option value="B.Sc">B.Sc</option>
    <option value="B.Tech">B.Tech</option>
    <option value="B.Tech LLB">B.Tech LLB</option>
    <option value="BA">BA</option>
    <option value="BA Economics (Specialization in Energy Economics)">BA Economics (Specialization in Energy Economics)</option>
    <option value="BBA">BBA</option>
    <option value="BCA">BCA</option>
    <option value="LLB">LLB</option>
    <option value="D.pharma">D.pharma</option>
    <option value="LLM">LLM</option>
    <option value="M.des">M.des</option>
    <option value="M.sc">M.sc</option>
    <option value="M.tech">M.tech</option>
    <option value="MBA">MBA</option>
    <option value="MA Economics(specaialization in Energy Economics)">MA Economics(specaialization in Energy Economics)</option>
</select>
<input type="text" name="city" placeholder="CITY" style="margin-top:40px;margin-left:1px;"><font color="red" size="5">*</font>
<p style="color:red;"><?php  if(isset($_SESSION["city"])){ echo $_SESSION["city"];}?></p>
<input type="file" name="image" style="margin-top:40px;margin-left:1px;" required><font color="red" size="5">*</font>
<input type="submit" class="button" style="margin-top:40px;" Value="Next">
</form>
</div>
</body>
</html>