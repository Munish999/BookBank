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
-->
</style></head>

<body>
<?php
$un=$_GET['un'];
?>
<table width="1503" height="78">
  <tr>
    <td width="1495" height="72" align="center" bgcolor="#000000"><span class="style1">BOOK BANK </span></td>
  </tr>
</table>
<table width="1499" height="85">
  <tr>
    <td width="668" align="center" bgcolor="#CCCCCC"><span class="style2"><a href="add.php?un=<?php print $un?>">ADD NEW BOOKS </a></span></td>
    <td width="819" align="center" bgcolor="#CCCCCC"><span class="style2"><a href="modify.php?un=<?php print $un?>">MODIFY BOOKS RECORD </a> </span></td>
  </tr>
</table>
</body>
</html>
