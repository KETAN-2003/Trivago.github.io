<?php
session_start();
include("connection.php");
extract($_REQUEST);
//$user="admin";
//$pass=1234;
$q=mysql_query("select * from login");
$a=mysql_fetch_array($q);
if(isset($_COOKIE['user']) && isset($_COOKIE['password']))
{
	$cu=$_COOKIE['user'];
	$cp=$_COOKIE['password'];

}
if(isset($Submit))
{
	if($name==$a["user name"] && $password==$a["password"])
	{
		if(isset($checkbox))
		{
			setcookie("user",$name,time()+1*24*60*60);
			setcookie("password",$password,time()+1*24*60*60);
			
		}
		$_SESSION['n']=$name;
		header("location: ../../my project1.html");
		exit;
		
	}else
	{
		echo"invalid username/password";
	}
}
if(!empty($_GET['a']))
{
	session_unset();
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-size: 24px;
}
.style2 {
	color: #FFFF00;
	font-size: 24px;
}
.style3 {
	color: #FF0000;
	font-size: 24px;
}
.style4 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<form action="" method="get">
<table width="417" height="290" border="0" align="center">
  <tr>
    <td colspan="2"><span class="style1">TRI</span><span class="style2">VA</span><span class="style3">GO</span></td>
	
    </tr>
	<tr><td colspan="2"><span class="style4">Log in account</span></td>
	</tr>
  <tr>
    <td width="182">user name </td>
    <td width="219"><label>
      <input type="text" name="name" value="<?php echo $cu ?>" />
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>password</td>
    <td><label>
      <input type="password" name="password" value="<?php echo $cp?>" />
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="Submit" value="Submit" />
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><label>
      <input type="checkbox" name="checkbox" value="checkbox" />
    remember Me&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="register.php">Register now</a> </label></td>
    </tr>
</table>

</form>
</body>
</html>
