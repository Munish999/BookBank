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
	font-size: 24px;
	color: #FFFFFF;
}
-->
</style></head>

<body>
<table width="1500" height="89">
  <tr>
    <td align="center" bgcolor="#000000"><span class="style1">BOOK BANK </span></td>
  </tr>
</table>
<table width="63">
  <tr>
    <td width="75" bgcolor="#00FF00"><a href="wel.php">Home</a></td>
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
   
  </tr>
<?php
$view=$_GET['view'];
$link=mysql_connect("localhost","root","9805187612");
if(!$link)
die("connectio is not available");

mysql_select_db("bookbank")
or 
die("data base not found");
$result1=mysql_query("select category,bookname,author,edition,quantity,price from bookdetail where category='$view'");
while($raw=mysql_fetch_row($result1))
{
	print("<tr>");
	{ if ($_SERVER["REQUEST_METHOD"] == "GET")
	  print("<tr>");
	         foreach($raw as $field1)
	           print("<td>".$field1."</td>");
	 }
}

?>
</table>
<table width="1495" height="48" bordercolor="#000000">
  <tr>
    <td align="center" bgcolor="#000000"><span class="style2">www.bookbank.com</span></td>
  </tr>
</table>
</body>
</html>
