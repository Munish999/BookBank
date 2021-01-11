<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	color: #FFFFFF;
}
.style2 {
	font-size: 36px;
	font-weight: bold;
	font-style: italic;
}
.style3 {
	font-size: 24px;
	color: #FFFFFF;
}
-->
</style></head>

<body>
<table width="1504" height="76">
  <tr>
    <td width="1496" height="70" align="center" bgcolor="#000000"><span class="style1">BOOK BANK </span></td>
  </tr>
</table>
<?php
 // $category=$_GET["select"];
 session_start();
 echo "HELLO";
 $username=$_GET["textfield0"];
 echo $username;
  $firstname=$_GET["textfield1" ];
  $lastname=$_GET['textfield2'];
  $emailid=$_GET['textfield3'];
  $year=$_GET["textfield4"];
  $address=$_GET["textfield5"];
  $contactno=$_GET["textfield6"];
  $role=$_GET["textfield7"];
  $link=mysql_connect("localhost","root","9805187612");
if(!$link)
die("connectio is not available");

mysql_select_db("bookbank")
or 
die("data base not found");

$result=mysql_query("UPDATE signup SET username='$username',firstname='$firstname',lastname='$lastname',emailid='$emailid',year='$year',address='$address',contactno='$contactno',role='$role' where (username='$username')");
$hello="your record is updated"; 
?>
<table width="1499" height="234">
  <tr>
    <td width="1491" align="center" bgcolor="#00CC00"><p class="style2">YOUR RECORD IS UPDATED</p>
    <p class="style2"><a href="edituserrecord.php">Previous</a> <a href="wel.php">Home </a></p></td>
  </tr>
</table>
<table width="1496" height="50">
  <tr>
    <td align="center" bgcolor="#000000"><span class="style3">www.bookbank.com</span></td>
  </tr>
</table>
</body>
</html>
