<?
$db_server = mysql_connect(desk, root)
    or die("Unable to connect to MySQL: " . mysql_error());
	mysql_select_db($db_database)
    or die("Unable to select database: " . mysql_error());
?>
<?
// Get values from form
$Fname        = $_POST['first_name'];
$Lname        = $_POST['last_name'];    
$sex             = $_POST['sex'];
$email          = $_POST['email'];
$password   = $_POST['password'];  
- See more at: http://www.jonwelshdesigns.co/php/formdata-database#sthash.AwgVIH0H.dpuf
$sql="INSERT INTO users (first_name, last_name, sex, email, password, registration_date)
VALUES ('$Fname', '$Lname', '$sex', '$email', SHA1('$password'), NOW())";
$result = mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if($result){
header('Location: ../thankyou.php');
}
else {
echo "ERROR";
}
2
3
// close mysql
mysql_close();
?>
INSERT.PHP
<html>
<body>
 
 
<?php
$con = mysql_connect("mysql.cis.ksu.edu","cis_id","password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("cis_id", $con);
 
$sql="INSERT INTO nametable (fname, lname)
VALUES
('$_POST[fname]','$_POST[lname]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>
</body>
</html>