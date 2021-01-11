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
	color: #FFFFFF;
	font-style: italic;
	font-weight: bold;
}
.style4 {color: #FFFFFF; font-style: italic; font-weight: bold; font-size: 24px; }
.style5 {
	color: #FFFFFF;
	font-size: 24px;
}
-->
</style></head>

<body>
<?php session_start();
$unq=$_SESSION['uname'];

?>
<table width="1507" height="77">
  <tr>
    <td width="1499" height="71" align="center" bgcolor="#000000"><span class="style1">BOOK BANK </span></td>
  </tr>
</table>
<table width="117">
  <tr>
    <td width="109" bgcolor="#00FF00"><a href="wel.php">Home</a>  <a href="sell.php?un=<?php print $unq ?>"> Previous</a></td>
  </tr>
</table>

<form id="form2" name="form2" method="GET" action="modify.php">
  <table width="717" height="52">
    <tr>
      <td width="225" bgcolor="#000000"><span class="style2">Get Book Details </span></td>
      <td width="476">Username 
        <label>
        <select name="select2">
          <option><?php print $unq?></option>
		   <option><?php print $_GET['select2'];?></option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td><em><strong>Select Category</strong></em></td>
      <td><select name="select">
        <option>Select</option>
        <option>Engineering</option>
        <option>Apptitude</option>
        <option>GeneralKnowledge</option>
        <option>Management</option>
        <option>Mathematics</option>
        <option>Magazine</option>
        <option>Novel</option>
      </select>
        <label>
        <input type="submit" name="Submit2" value="Submit" />
      </label></td>
    </tr>
  </table>
</form>
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
	<td width="184"><em><strong>Edit</strong></em></td>
  </tr>
<?php
$uname=$_GET['select2'];
$category=$_GET["select"];
$link=mysql_connect("localhost","root","9805187612");
mysql_select_db("bookbank");

if(!$link)
die("connection is not available")
or 
die("data base not found");
$result1=mysql_query("select * from bookdetail where category='$category' and username='$uname'");
while($raw=mysql_fetch_array($result1,MYSQL_ASSOC))
{
	print("<tr>");
	$raw1=$raw[bookname];
	// if ($_SERVER["REQUEST_METHOD"] == "GET")
	  {
	     print("<tr>");
	         foreach($raw as $field1){
	          print("<td>".$field1."</td>");}
			   print "<td><a href='modify.php?bn=$raw[bookname]'>EDIT</a></td>";
			  // print"<td><form method=GET action=modify.php>
			  // <input type=submit name=Submit123 value=$raw[bookname] />
			  // </form></td>";
			   
	  }
	
}

?>
</table>
<table width="812">
  <tr>
    <td height="42" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td width="500" bgcolor="#000000"><span class="style4">Now enter book detail which you want to modify and also enter the  fields value which you want to modify </span></td>
  </tr>
</table>
<table width="354" height="323">
  <tr>
    <td width="346" height="317" valign="top"><form id="form1" name="form1" method="get" action="check5.php?uname">
      <table width="346" height="314">
	  <tr>
          <td><em><strong>User Name </strong></em></td>
          <td><label>
            <input type="button" name="textfield0" value=<?php print $unq?> />
          </label></td>
        </tr>
        
        <tr>
          <td><em><strong>Book Name </strong></em></td>
          <td><label>
            <input type="text" name="textfield" value="<?php print $_GET['bn'];?>"/>
          </label></td>
        </tr>
        <tr>
          <td><em><strong>Author</strong></em></td>
          <td><label>
            <input type="text" name="textfield2" value= />
          </label></td>
        </tr>
        <tr>
          <td><em><strong>Edition</strong></em></td>
          <td><label>
            <input type="text" name="textfield3" />
          </label></td>
        </tr>
        <tr>
          <td><em><strong>Quantity</strong></em></td>
          <td><label>
            <input type="text" name="textfield4" />
          </label></td>
        </tr>
        <tr>
          <td><em><strong>Price</strong></em></td>
          <td><input type="text" name="textfield5" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="Submit" value="EDIT" />
          </label></td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
<table width="1505" height="49">
  <tr>
    <td align="center" bgcolor="#000000"><span class="style5">www.bookbank.com</span></td>
  </tr>
</table>

</body>
</html>
