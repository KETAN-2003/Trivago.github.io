<?php 
session_start();
require_once("connection.php");
$n=$_REQUEST['name'];
$m=$_REQUEST['password'];
$cap = $_REQUEST['cap'];
if(isset($_REQUEST['Submit']))
{
	if($_SESSION['c'] == $cap)
	{
		$_SESSION['name']=$n;
		$_SESSION['password']=$m;
		mysql_query("insert into login set user name='".$n."',password='".$m."'");
		header("location: login_page.php");
		exit();
	}
	else
	{
		echo "Invalid Text" ;
	}	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/JavaScript">
<!--
	function valid()
	{
			var n = /^[0-9]+$/;
			var c=/^[a-z A-Z]+$/;
			var e=/^\w*\@\w*\.\w*$/;
			if(document.frm1.name.value=="")
			{
				alert("please enter your name");
				document.frm1.name.focus();
				return false;
			}
			else if(document.frm1.name.value.search(c)==-1)
			{
				alert("please enter chars in name");
				document.frm1.name.focus();
				return false;
			}
			if(document.frm1.password.value=="")
			{
			alert("please enter your password ");
			document.frm1.password.focus();
			return false;
			}
			
	}

</script>
</head>
<body>
<form action="" method="post" name="frm1" onsubmit="return valid()">
<table width="605" height="237" border="0">
  <tr>
    <td colspan="2">Restration</td>
    </tr>
  <tr>
    <td width="280">name</td>
    <td width="309"><label>
      <input type="text" name="name" />
    </label></td>
  </tr>
  <tr>
    <td>password</td>
    <td><label>
      <input type="password" name="password" />
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="Submit" value="Submit" />
    </label></td>
  </tr>
</table>

</form>

</body>
</html>

