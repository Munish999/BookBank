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
	font-size: 16px;
	font-style: italic;
	font-weight: bold;
}
.style3 {
	font-weight: bold;
	font-style: italic;
	font-size: 24px;
	color: #FF0000;
}
.style4 {
	font-size: 24px;
	color: #FFFFFF;
}
-->
</style>
</head>

<body>
<?php
session_start();

 $un=$_SESSION['uname'];

?>
<table width="1505" height="92">
  <tr>
    <td width="1497" height="86" align="center" bgcolor="#000000">    <span class="style1">BOOK BANK </span></td>
  </tr>
</table>
<table width="172">
  <tr>
    <td width="162" bgcolor="#00FF00"><span class="style3"><a href="wel.php">Home</a>  <a href="sell.php"> Previous</a></span></td>
  </tr>
</table>
<table width="296" height="375">
  <tr>
    <td width="288" height="369" valign="top"><form id="form1" name="form1" method="get" action="check3.php">
      <table width="288" height="493">
        <tr>
          <td height="48"><span class="style2">Username</span></td>
          <td><select name="un"><option><?php print $un?></option></select></td>
        </tr>
        <tr>
          <td height="48"><em><strong>Select Category </strong></em></td>
          <td><select name="select">
            <option>Apptitude</option>
            <option>Engineering</option>
            <option>Management</option>
            <option>Mathematics</option>
            <option>GeneralKnowledge</option>
            <option>Magazine</option>
            <option>Novel</option>
                                                                                          </select></td>
        </tr>
        <tr>
          <td width="117" height="48"><em><strong>Book Name </strong></em></td>
          <td width="159"><label>
            <input type="text" name="textfield" />
          </label></td>
        </tr>
        <tr>
          <td height="69"><em><strong>Author</strong></em></td>
          <td><label>
            <input type="text" name="textfield2" />
          </label></td>
        </tr>
        <tr>
          <td height="59"><strong><em>Edition</em></strong></td>
          <td><label>
            <input type="text" name="textfield3" />
          </label></td>
        </tr>
        <tr>
          <td height="67"><em><strong>Quantity</strong></em></td>
          <td><label>
            <input type="text" name="textfield4" />
          </label></td>
        </tr>
        <tr>
          <td height="67"><em><strong>Price</strong></em></td>
          <td><input type="text" name="textfield5" /></td>
        </tr>
        <tr>
          <td height="67">&nbsp;</td>
          <td><label>
            <input type="submit" name="Submit" value="ADD" />
          </label></td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
<table width="1502" height="40">
  <tr>
    <td align="center" bgcolor="#000000"><span class="style4">www.bookbank.com</span></td>
  </tr>
</table>
</body>
</html>
