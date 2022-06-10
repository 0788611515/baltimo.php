<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>CSS DropDown Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Keep the http-equiv meta tag for IE8 -->

  <meta http-equiv="X-UA-Compatible" content="IE=8" />

<!-- Link the CSS file here -->

<link rel="stylesheet" type="text/css" media="screen,projection" href="style.css" />

</head>

<body>

<!-- PULL DOWN MENU - BEGIN -->

<div class="mainmenu">

<ul>
      <li class="li_nc"><a href="adminhome.php" target="_self" >Home</a></li>
      <li class="li_hc"><a href="#"  >System Users</a><ul class="ul_ch">
         <li class="li_nc"><a href="adminhome.php?page=adduser.php"  >Enrol Users</a></li>
         <li class="li_nc"><a href="adminhome.php?page=v_users.php"  >Manage Users</a></li>
      </ul></li>
	  <li class="li_hc"><a href="backup.php"  >BackUp DataBase</a><ul class="ul_ch">
      </ul></li>
       <li class="li_hc"><a href="#"  >Profile</a><ul class="ul_ch">
         <li class="li_nc"><a href="adminhome.php?page=changepass.php"  >Change Password</a></li>
         <li class="li_nc"><a href="logout.php"  >Logout</a></li>
      </ul></li>
      
          
      
</ul>


</div>


</body>
</html>
