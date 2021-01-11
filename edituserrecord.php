<?php 
session_start();
?>
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
	font-size: 24px;
}
.style3 {
	font-size: 16px;
	color: #000000;
}
-->
</style>
</head>

<body>
<table width="1503" height="81">
  <tr>
    <td align="center" bgcolor="#000000"><span class="style1">BOOK BANK </span></td>
  </tr>
</table>
<table width="1495" height="34">
  <tr>
    <td height="28" align="left" bgcolor="#FF0000"><strong><a href="editrecord.php" class="style2 style3">Previous</a></strong></td>
  </tr>
</table>
<table width="1226" height="27" border="1">
  <tr>
    <td><em><strong>Username</strong></em></td>
    <td><em><strong>Firstname</strong></em></td>
    <td><em><strong>Lastname</strong></em></td>
    <td><em><strong>EmailId</strong></em></td>
    <td><em><strong>Year</strong></em></td>
    <td><em><strong>Address</strong></em></td>
    <td><em><strong>Contact Number</strong></em></td>
    <td><em><strong>Role</strong></em></td>
    <td><em><strong>Edit</strong></em></td>
  </tr>
<?php
$link=mysql_connect("localhost","root","9805187612");
mysql_select_db("bookbank");

if(!$link)
die("connection is not available")
or 
die("data base not found");
$result1=mysql_query("select username,firstname,lastname,emailid,year,address,contactno,role from signup");
while($raw=mysql_fetch_array($result1,MYSQL_ASSOC))
{
	print("<tr>");
	$raw1=$raw[username];
	// if ($_SERVER["REQUEST_METHOD"] == "GET")
	  {
	     print("<tr>");
	         foreach($raw as $field1){
	          print("<td>".$field1."</td>");}
			   print "<td><a href='edituserrecord.php?bn=$raw[username]&firstname=$raw[firstname]&lastname=$raw[lastname]&emailid=$raw[emailid]&year=$raw[year]&address=$raw[address]&contactno=$raw[contactno]&role=$raw[role]'>EDIT</a></td>";
			  // print"<td><form method=GET action=modify.php>
			  // <input type=submit name=Submit123 value=$raw[bookname] />
			  // </form></td>";
			   
	  }
	
}

?>
</table>
<table width="354" height="323">
  <tr>
    <td width="346" height="317" valign="top"><form id="form1" name="form1" method="get" action="updateuserrecord.php?uname">
      <table width="346" height="314">
	  <tr>
          <td><em><strong>User Name </strong></em></td>
          <td><label>
            <input type="text" name="textfield0" value="<?php print $_GET['bn'];?>"/>
          </label></td>
        </tr>
        
        <tr>
          <td><em><strong>Firstname</strong></em></td>
          <td><label>
            <input type="text" name="textfield1" value="<?php print $_GET['firstname'];?>"/>
          </label></td>
        </tr>
        <tr>
          <td><em><strong>Lastname</strong></em></td>
          <td><label>
            <input type="text" name="textfield2" value="<?php print $_GET['lastname'];?>"/>
          </label></td>
        </tr>
        <tr>
          <td><em><strong>EmailId</strong></em></td>
          <td><label>
            <input type="text" name="textfield3" value="<?php print $_GET['emailid'];?>"/>
          </label></td>
        </tr>
        <tr>
          <td><em><strong>Year</strong></em></td>
          <td><label>
            <input type="text" name="textfield4" value="<?php print $_GET['year'];?>"/>
          </label></td>
        </tr>
        <tr>
          <td><em><strong>Address</strong></em></td>
          <td><input type="text" name="textfield5" value="<?php print $_GET['address'];?>"/></td>
        </tr>
		<tr>
          <td><em><strong>Contact No</strong></em></td>
          <td><input type="text" name="textfield6" value="<?php print $_GET['contactno'];?>"/></td>
        </tr>
		<tr>
          <td><em><strong>Role</strong></em></td>
          <td><input type="text" name="textfield7" value="<?php print $_GET['role'];?>"/></td>
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
    <td align="center" bgcolor="#111111"><span class="style5 style2">www.bookbank.com</span></td>
  </tr>
</table>
</body>
</html>
