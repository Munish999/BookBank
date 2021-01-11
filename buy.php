<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-size: 36px;
}
.style2 {
	color: #FFFFFF;
	font-style: italic;
	font-weight: bold;
}
-->
</style>
</head>

<body>

<table width="1506" height="78">
  <tr>
    <td width="1498" height="72" align="center" bgcolor="#000000"><span class="style1">BOOK BANK </span></td>
  </tr>
</table>

 <p><a href="choice1.php">Previous</a>       <a href="wel.php">Home</a></p>
 <table width="581" height="48">
   <tr>
     <td bgcolor="#000000"><span class="style2">Select Book Category And Press Submit For Search Book </span></td>
   </tr>
 </table>
 <form id="form1" name="form1" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   <table width="403">
     <tr>
       <td width="126"><em><strong>Select Category </strong></em></td>
       <td width="336"><label>
         <select name="select">
           <option>Select</option>
           <option>Engineering</option>
           <option>Management</option>
           <option>Mathematics</option>
           <option>GeneralKnowledge</option>
           <option>Magazine</option>
           <option>Novel</option>
           <option>Apptitude</option>
         </select>
         <input type="submit" name="Submit" value="Submit" />
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
  </tr>
<?php
$category=$_GET["select"];
$link=mysql_connect("localhost","root","9805187612");
if(!$link)
die("connectio is not available");

mysql_select_db("bookbank")
or 
die("data base not found");
$result1=mysql_query("select * from bookdetail where category='$category'");
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
 <table width="477" height="52" border="1">
   <tr>
     <td width="488"><form id="form2" name="form2" method="GET" action="check4.php">
       <em><strong>Enter Username for user Detail</strong></em>  
       <label>
       <input type="text" name="textfield" />
       </label>
          <label>
          <input type="submit" name="Submit2" value="Submit" />
        </label>
     </form>     </td>
   </tr>

 <p>&nbsp; </p>
</body>
</html>