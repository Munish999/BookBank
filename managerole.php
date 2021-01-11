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
    <td><em><strong>Role ID</strong></em></td>
    <td><em><strong>Role Name</strong></em></td>
    <td><em><strong>Role User Cardinality</strong></em></td>
    <td><em><strong>Role Permission cardinality</strong></em></td>
	<td><em><strong>EDIT</strong></em></td>
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
$result1=mysql_query("select * from role");
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
			  // print "<td><a href='managerole.php?roleid=$raw[0]&rolename=$raw[1]'>EDIT</a></td>";
	 }
	 ?>
	 <td><a href="managerole.php?roleid=<?php echo $raw1[0];?>&rolename=<?php echo $raw1[1];?>&roleusercardinality=<?php echo $raw1[2];?>&rolepermission=<?php echo $raw1[3];?>">EDIT</a></td>
	 <td><a href="deleteroledetails.php?rolename=<?php echo $raw1[1]; ?>">Delete</a></td>
	 
	 <?php
}

?>
</table>
</table>
<table width="354" height="323">
  <tr>
    <td width="346" height="317" valign="top"><form id="form1" name="form1" method="get" action="updateroledetails.php?rolename">
      <table width="346" height="314">
	  <tr>
          <td><em><strong>Role ID</strong></em></td>
          <td><label>
            <input type="text" name="textfield0" value="<?php print $_GET['roleid'];?>"/>
          </label></td>
        </tr>
        <tr>
          <td><em><strong>Role name</strong></em></td>
          <td><label>
            <input type="text" name="textfield1" value="<?php print $_GET['rolename'];?>"/>
          </label></td>
        </tr>
        <tr>
          <td><em><strong>Role user cardinality</strong></em></td>
          <td><label>
          <input type="text" name="textfield2" value="<?php print $_GET['roleusercardinality'];?>" />
          </label></td>
        </tr>
        <tr>
          <td><em><strong>RolePermission Cardinality</strong></em></td>
          <td><label>
            <input type="text" name="textfield3" value="<?php print $_GET['rolepermission'];?>"/>
          </label></td>
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
<p>&nbsp;</p>
</body>
</html>
