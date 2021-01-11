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
.style3 {
	color: #FFFFFF;
	font-size: 24px;
}
.style4 {
	font-size: 18px;
	color: #000000;
}
-->
</style>
</head>

<body>
<table width="1507" height="97">
  <tr>
    <td width="1499" height="91" align="center" bgcolor="#000000"><span class="style1">BOOK BANK </span></td>
  </tr>
</table>
 </table>
<table width="1495" height="34">
  <tr>
    <td height="28" align="left" bgcolor="#FF0000"><strong><a href="buy.php" class="style2 style3 style4">Previous</a></strong></td>
  </tr>
</table>
 <table width="1226" height="39" border="1">
   <tr>
     <td width="151"><em><strong>Username</strong></em></td>
     <td width="161"><em><strong>FirstName</strong></em></td>
     <td width="149"><em><strong>LastName</strong></em></td>
     <td width="289"><em><strong>Email Id</strong></em></td>
     <td width="97"><em><strong>Year</strong></em></td>
     <td width="185"><em><strong>Address</strong></em></td>
     <td width="148"><em><strong>ContactNo.</strong></em></td>
   </tr>
  <?php
$username1=$_GET["textfield"];
$link=mysql_connect("localhost","root","9805187612");
if(!$link)
die("connection is not available");

mysql_select_db("bookbank")
or 
die("data base not found");
$result=mysql_query("select username,firstname,lastname,emailid,year,address,contactno from signup where username='$username1'");

while($raw=mysql_fetch_row($result))
{
	print("<tr>");
	{ 
	  //if(strcmp($username1,$field1)==0)
	   {
	     //$result=mysql_query("select * from bookdetail");
	     {
	       print("<tr>");
	         foreach($raw as $field)
	           print("<td>".$field."</td>");
	     }
	    }
	  
	}
}

?> 
 </table>
 <table width="1504" height="47">
   <tr>
     <td align="center" bgcolor="#000000"><span class="style3">www.bookbank.com</span></td>
   </tr>
 </table>
</body>
</html>
