<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title><style type="text/css">
<!--
.style1 {font-size: 24px}
-->
</style></head>

<body>
<table width="1294" height="109">
  <tr>
    <td align="center" bgcolor="#00CC00"><strong><span class="style1">RECORD UPLOADED </span></strong></td>
  </tr>
</table>
<table width="172">
  <tr>
    <td width="162" bgcolor="#00FF00"><span class="style3"><a href="wel.php">Home</a>  <a href="add.php"> Previous</a></span></td>
  </tr>
</table>
<?php
  $category=$_GET["select"];
  $bookname=$_GET["textfield" ];
  $author=$_GET['textfield2'];
  $edition=$_GET['textfield3'];
  $quantity=$_GET["textfield4"];
  $price=$_GET["textfield5"];
  $uname=$_GET['un'];
  $link=mysql_connect("localhost","root","9805187612");
if(!$link)
die("connectio is not available");

mysql_select_db("bookbank")
or 
die("data base not found");

$result=mysql_query("insert into bookdetail(category,bookname,author,edition,quantity,price,username)values('$category','$bookname','$author','$edition','$quantity','$price','$uname')");
 ?>
</body>
</html>
