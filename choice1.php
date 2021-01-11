<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style3 {color: #FFFFFF; font-size: 36px;}
.style4 {font-size: 36px}
.style6 {font-size: 36px; color: #000000; }
.style7 {color: #CCCCCC}
.style8 {
	font-size: 24px;
	color: #FFFFFF;
}
-->
</style>
</head>

<body>

<?php
$username=$_GET['un'];
?>
<table width="1505" height="90">
  <tr>
    <td width="1497" height="77" align="center" bordercolor="#F0F0F0" bgcolor="#000000" class="style3">BOOKBANK</td>
  </tr>
</table>
<table width="1385" height="128">
  <tr>
    <td height="34" align="left"><a href="wel.php">HOME<span class="style7"> </span></a></td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="696" align="center"><span class="style6"><a href="sell.php?un=<?php print $username?>">SELLER</a></span></td>
    <td width="673" align="center"><span class="style4"><a href="buy.php">BUYER</a></span></td>
  </tr>
</table>
<table width="1504" height="235" border="1">
  <tr>
    <td width="1489"><img src="img/img2.jpg" width="1493" height="318" longdesc="file:///C|/wamp/www/bookbank/img2.jpg" /></td>
  </tr>
</table>
<table width="1503" height="50">
  <tr>
    <td height="44" align="center" bgcolor="#000000"><span class="style8">www.bookbank.com</span></td>
  </tr>
</table>
</body>
</html>
