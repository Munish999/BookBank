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
	font-size: 36px;
	font-style: italic;
	font-weight: bold;
}
.style3 {
	font-size: 24px;
	font-weight: bold;
	font-style: italic;
}
-->
</style></head>
<body>
<table width="1244" height="73">
  <tr>
    <td width="1229" align="center" bgcolor="#000000"><span class="style1">BOOK BANK </span></td>
  </tr>
  
</table>

<?php	
	session_start();
  $name=$_GET["textfield"];
  $pass=$_GET['textfield2'];
  $_SESSION['uname']=$name;
  $link=mysql_connect("localhost","root","9805187612");
  $check=0;
if(!$link)
die("connectio is not available");

mysql_select_db("bookbank")
or 
die("data base not found");

$result=mysql_query("select password,role from signup where username='$name'");// and password=$pass");
$result1=mysql_query("select adminrole_name from adminrole");
$array1=array();
while($row= mysql_fetch_assoc($result1)){
  $array1[] = $row;
}
$result2=mysql_query("select role_name from role");
$array2=array();
while($row1 = mysql_fetch_assoc($result2)){
 { $array2[] = $row1;
 	foreach($row1 as $field)
 	echo $field;
 }
 echo $array2[0]['role_name'];
}
while($raw=mysql_fetch_row($result))
{
	///print("<tr>");
	//foreach($raw as $field)   if(strcmp($pass,$field)==0)
	{
	 	if(strcmp($pass,$raw[0])==0)
	 	{
			// header("location:choice1.php?un=$name");
				//$check=1;
				print("passwoedmatches");
			foreach($array2 as $a)
			{	echo $a['role_name'];
				echo $raw[1];
				if(strcmp($a['role_name'],$raw[1])==0)
					$check=1;
			}
			echo $check1;
			if($check!=1)
			{
				foreach($array1 as $a)
				{
					if(strcmp($a['adminrole_name'],$raw[1])==0)
						{
						if(strcmp('a1',$raw[1])==0)
						$check=2;
						elseif(strcmp('a2',$raw[1])==0)
						$check=3;
						}
				}
			}
		}
	}
}	
echo $check1;
	if($check==1)
	{
		header("location:choice1.php?un=$name"); //header("location:wel.php?un=wrong password");
	}
	elseif($check==2)
	{
	header("location:editrecord.php");
	}
	elseif($check==3)
	{
	header("location:adminrolea2.php");
	}
	else
	{
		header("location:wel.php?un=wrong username or password");
		
	}
	

?>
<table width="1240" height="284" border="1">
  <tr>
    <td align="center" bgcolor="#FF0000"><span class="style3"><a href="wel.php">HOME</a></span></td>
  </tr>
  <tr>
    <td width="1230" height="183" align="center" bgcolor="#FF0000"><span class="style2">WRONG USERNAME AND PASSWORD </span></td>
  </tr>
</table>
</body>
</html>