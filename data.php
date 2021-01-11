<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table border="1">
<tr><td>rollno</td><td>name</td></tr>
<?php
$link=mysql_connect("localhost","root","9805187612");
if(!$link)
die("connectio is not available");

mysql_select_db("hii")
or 
die("data base not found");

$result=mysql_query("select * from hello");
while($raw=mysql_fetch_row($result))
{
	print("<tr>");
	foreach($raw as $field)
	print("<td>".$field."</td>");
}

?>
</table>
</body>
</html>
