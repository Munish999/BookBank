<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$rolename = $_GET['rolename'];
$link=mysql_connect("localhost","root","9805187612");
if(!$link)
die("connection is not available");

mysql_select_db("bookbank")
or 
die("data base not found");
$del=mysql_query("delete from role where role_name='$rolename'");
if($del)
{
   // mysqli_close($link); // Close connection
   header("location:managerole.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

?>

</body>
</html>

