<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style3 {
	font-size: 36px;
	color: #FFFFFF;
}
-->
</style>
</head>

<body>
<table width="1498" height="89">
  <tr>
    <td align="center" bgcolor="#000000"><span class="style3">BOOK BANK </span></td>
  </tr>
</table>
<table width="1495" height="46">
  <tr>
    <td height="40" align="left" bgcolor="#FF0000"><strong><a href="editrecord.php" class="style2">Previous</a></strong></td>
  </tr>
</table>
<table width="1099" height="49" bordercolor="#000000" bgcolor="#FFFFFF" border="1">
  <tr>
    <td><em><strong>Username</strong></em></td>
    <td><em><strong>Firstname</strong></em></td>
    <td><em><strong>Lastname</strong></em></td>
    <td><em><strong>EmailId</strong></em></td>
    <td><em><strong>Year</strong></em></td>
    <td><em><strong>Address</strong></em></td>
    <td><em><strong>Contact Number</strong></em></td>
    <td><em><strong>Role</strong></em></td>
    <td><em><strong>Delete</strong></em></td>
  </tr>
  <?php

$category=$_GET["select"];
$link=mysql_connect("localhost","root","9805187612");
if(!$link)
die("connection is not available");

mysql_select_db("bookbank")
or 
die("data base not found");
$result1=mysql_query("select username,firstname,lastname,emailid,year,address,contactno,role from signup");
while($raw1=mysql_fetch_row($result1))
{
	print("<tr>");
	{ if ($_SERVER["REQUEST_METHOD"] == "GET")
	  print("<tr>");
	         foreach($raw1 as $field2)
	           {
			   	print("<td>".$field2."</td>");
			   $_SESSION['un']=$field2;
			   }
	 }
	 ?>
	 <td><a href="deleteuserdetails.php?username=<?php echo $raw1[0]; ?>">Delete</a></td>
	 <?php
}

?>
</table>
<p>&nbsp;</p>
</body>
</html>
