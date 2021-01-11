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
.style6 {font-size: 36px}
.style7 {font-size: 24px}
.style11 {font-size: 24px; color: #FF0000; }
.style13 {
	color: #FFFFFF;
	font-style: italic;
	font-weight: bold;
	font-size: 24px;
}
-->
</style>
</head>

<body   onload="setTimeout('nextPic()',2000)">
<table width="1505" height="83">
  <tr>
    <td width="1386" align="center" bgcolor="#000000"><span class="style1">BOOK BANK </span></td>
  </tr>
</table>
<table width="1510" height="552">
  <tr>
    <td width="212" height="546" valign="top" class="style6"><table width="200">
      <tr>
        <td height="34"><a href="view.php?view=<?php print "Engineering"?>">Engineering</a></td>
      </tr>
      <tr>
        <td height="34"><a href="view.php?view=<?php print "Novel"?>">Novel</a></td>
      </tr>
      <tr>
        <td height="38"><a href="view.php?view=<?php print "Magazine"?>">Magazine</a></td>
      </tr>
      <tr>
        <td height="34"><a href="view.php?view=<?php print "Management"?>">Management</a></td>
      </tr>
      <tr>
        <td height="40"><a href="view.php?view=<?php print "Mathematics"?>">Mathematics</a></td>
      </tr>
      <tr>
        <td height="45"><a href="view.php?view=<?php print "GeneralKnowledge"?>">General Knowledge</a> </td>
      </tr>
      <tr>
        <td height="37"><a href="view.php?view=<?php print "Apptitude"?>">Apptitude</a></td>
      </tr>
      <tr>
        <td height="29">&nbsp;</td>
      </tr>
      <tr>
        <td height="38">&nbsp;</td>
      </tr>
    </table></td>
    <td width="814" class="style6"><img src="image.jpeg" width="786" height="660" longdesc="file:///C|/wamp/www/bookbank/img/image.jpeg" /></td>
    <td width="468" valign="top" class="style6"><table width="468" height="545">
      <tr>
        <?php $un=$_GET['un'];
       ?>
        <td width="460" height="151" valign="top"><form id="form1" name="form1" action="check1.php" method="GET">
          <table width="460">
            <tr>
              <td width="149"><span class="style7">Username</span></td>
              <td width="350" height="30"><label>
                <input type="text" name="textfield" />
              </label></td>
            </tr>
            <tr>
              <td><span class="style7">Password</span></td>
              <td><label>
                <input type="password" name="textfield2" />
              </label></td>
            </tr>
            <tr>
              <td height="10" ></td>
              <td><label>
                <input type="submit" name="Submit" value="Login" />
              </label></td>
            </tr>
          </table>
          <table width="459">
            <tr>
              <td><span class="style11"><?php print($un)?></span></td>
            </tr>
          </table>
        </form></td>
      </tr>
      <tr>
        <td valign="top">SignUp</td>
      </tr>
      <tr>
        <td valign="top"><form id="form2" name="form2" method="GET" action="check2.php" >
          <table width="459" height="341">
            <tr>
              <td><span class="style7">Username</span></td>
              <td><label>
                <input type="text" name="textfield7" />
              </label></td>
            </tr>
            <tr>
              <td class="style7">Password</td>
              <td><label>
                <input type="password" name="textfield8" />
              </label></td>
            </tr>
            <tr>
              <td width="176"><span class="style7">FirstName</span> </td>
              <td width="267"><label>
                <input type="text" name="textfield3" />
              </label></td>
            </tr>
            <tr>
              <td><span class="style7">LastName</span></td>
              <td><label>
                <input type="text" name="textfield4" />
              </label></td>
            </tr>
            <tr>
              <td><span class="style7">email.id</span></td>
              <td><label>
                <input type="text" name="textfield5" />
              </label></td>
            </tr>
            <tr>
              <td><span class="style7">year</span></td>
              <td><label>
                <select name="select">
                  <option>Select</option>
                  <option>1st</option>
                  <option>2nd</option>
                  <option>3rd</option>
                  <option>Final</option>
				  <option>MTech1st</option>
				  <option>MTech2nd</option>
				  <option>Phd</option>
                </select>
              </label></td>
            </tr>
            <tr>
              <td><span class="style7">Address</span></td>
              <td><label>
                <textarea name="textarea"></textarea>
              </label></td>
            </tr>
            <tr>
              <td><span class="style7">ContactNo.</span></td>
              <td><label>
                <input type="text" name="textfield6" />
              </label></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><label>
                <input type="submit" name="Submit2" value="SignUp" />
              </label></td>
            </tr>
          </table>
        </form></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="1506" height="51" bgcolor="#000000">
  <tr>
    <td width="452" align="center"><span class="style13"> www.bookbank.com</span></td>
  </tr>
</table>
</body>
</html>
