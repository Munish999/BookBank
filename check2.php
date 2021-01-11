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
.style2 {font-size: 36px}
.style3 {
	color: #FFFFFF;
	font-size: 24px;
}
-->
</style></head>
<body>
<?php
  $username=$_GET["textfield7"];
  $firstname=$_GET["textfield3" ];
  $lastname=$_GET['textfield4'];
  $emailid=$_GET['textfield5'];
  $year=$_GET["select"];
  $address=$_GET["textarea"];
  $contactno=$_GET["textfield6"];
  $password=$_GET["textfield8"];
  if($username==NULL ||$firstname==NULL||$lastname==NULL||$emailid==NULL||$year==NULL||$contactno==NULL||$password==Null)
  { 
    header("location:unfilled.php");
  }
 else
 { $link=mysql_connect("localhost","root","9805187612");
if(!$link)
die("connectio is not available");

mysql_select_db("bookbank")
or 
die("data base not found");

mysql_query("insert into signup(username,firstname,lastname,emailid,year,address,contactno,password,role)values('$username','$firstname','$lastname','$emailid','$year','$address','$contactno','$password','u1')");


}

 ?>
<table width="1494" height="84">
  <tr>
    <td width="1486" align="center" bgcolor="#000000"><span class="style1">BOOK BANK </span></td>
  </tr>
</table>
 

<table width="1491" height="195" border="1">
  <tr>
    <td width="1481" align="center" bgcolor="#00FF00"><p><span class="style2">Your Record Has Been Saved.Now press Home for login </span></p>
      <p><span class="style2"><a href="wel.php">Home</a></span></p></td>
  </tr>
</table>
<table width="1487" height="427">
  <tr>
    <td height="421"><img src="img/update.jpg" width="1477" height="385" longdesc="img/update.jpg" />
      <table width="1478" height="46" bgcolor="#000000">
        <tr>
          <td align="center"><span class="style3">www.bookbank.com</span></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
