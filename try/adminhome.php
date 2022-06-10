<?php session_start();
include"functions.php";
if(!$_SESSION['username'] && $_SESSION['logged']!="admin")
{
redirectto('index.php');
}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ZETDC Eastern</title>
<style type="text/css">
<!--
#footer {
	color: #0000DD;
	background:#EE0000;
}
-->
</style>
<style type="text/css">
body {
margin: 0;  padding:0;
text-align: center;
background-color:#CCCC66
}
#container {
width: 900px;
margin-left: auto;
margin-right: auto;
text-align: left;  
border: 1px solid #ccc; 
   margin-top: auto;
margin-bottom: auto;
background: #DDDDDD;  
-webkit-box-shadow: 10px 15px 10px #000;  
-moz-box-shadow: 10px 15px 10px #000;  
-ms-box-shadow: 10px 15px 10px #000;  
box-shadow: 10px 15px 10px #000; 
 padding:0;
}
.style1 {color: #FF0000}
.style2 {color: #0000FF}
</style>
</head>

<body background="images/background.jpg">
<div id="container">
<tr>
      <td><?php include"banner.php"; ?></td>
  </tr>
    <tr>
      <td><?php  include"admin.php"; ?></td>
    </tr>
    <tr>
	<strong><span class="style1"><span class="style2 style1">Welcome</span>:</span></strong> <span class="style3 style2"><?php echo $_SESSION['fname']; ?></span>
      <td><?php 
	  $pg = @$_REQUEST['page'];
if($pg != "" && file_exists(dirname(__FILE__)."/".$pg)){
require(dirname(__FILE__)."/".$pg);
}elseif(!file_exists(dirname(__FILE__)."/".$pg))
include_once(dirname(__FILE__)."/pages/404.php");
else{
include_once("infor.php");
	}
	?></td>
  </tr>
    <tr>
      <td bgcolor="#EE0000"><div id="footer" align="center" class="style1"><small>Copyright © 2014 ZETDC Eastern. All Rights Reserved.</small></div></td>
</tr>
  </table>
</form>
</div>
</body>
</html>
