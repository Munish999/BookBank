<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
	color: #FFFFFF;
}
.style2 {color: #000000}
.style4 {
	font-weight: bold;
	color: #000000;
}
.style5 {
	font-size: 18px;
	font-weight: bold;
	color: #FFFFFF;
}
.style6 {color: #FFFFFF}
-->
</style>
</head>

<body>
<table width="1495" height="91">
  <tr>
    <td width="728" height="85" bgcolor="#000000"><div align="center" class="style1">BOOK BANK </div></td>
  </tr>
</table>
  <table width="1495" height="91">
  <tr>
    <td align="center" bgcolor="#FF0000"><strong><a href="wel.php" class="style2">HOME</a></strong></td>
	<td width="382" align="center" bgcolor="#FF0000"><span class="style6 style2"><strong><a href="sell.php?un=<?php print $username?>">SELLER</a></strong></span></td>
	<td width="369" align="center" bgcolor="#FF0000"><span class="style4"><a href="buy.php">BUYER</a></span></td>
  </tr>
</table>
  <table width="1492" height="41">
    <tr>
      <td nowrap="nowrap" bgcolor="#000000"><span class="style5">Manage Books </span></td>
    </tr>
  </table>
  <table width="1226" height="27" border="1">
  <tr>
    <td width="138"><em><strong>Category</strong></em></td>
    <td width="159"><em><strong>Bookname</strong></em></td>
    <td width="154"><em><strong>Author</strong></em></td>
    <td width="181"><em><strong>Edition</strong></em></td>
    <td width="191"><em><strong>Quantity</strong></em></td>
    <td width="173"><em><strong>Price</strong></em></td>
    <td width="184"><em><strong>Username</strong></em></td>
	<td width="184"><em><strong>Delete</strong></em></td>
  </tr>
<?php

$category=$_GET["select"];
$link=mysql_connect("localhost","root","9805187612");
if(!$link)
die("connection is not available");

mysql_select_db("bookbank")
or 
die("data base not found");
$result1=mysql_query("select * from bookdetail");
while($raw=mysql_fetch_row($result1))
{
	print("<tr>");
	{ if ($_SERVER["REQUEST_METHOD"] == "GET")
	  print("<tr>");
	         foreach($raw as $field1)
	           {print("<td>".$field1."</td>");
			   $_SESSION["username"]=$field1;
			   }
	 }
	 ?>
	 <td><a href="delete.php?username=<?php echo $raw["username"]; ?>">Delete</a></td>
	 <?php
}

?>
</table>
<p>&nbsp;</p>
</body>
</html>
