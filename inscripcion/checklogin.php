<?php
session_start();
$enlace =  mysql_connect('localhost', 'techniumUser', 'infratechnium');
if (!$enlace) {
	die('No pudo conectarse: ' . mysql_error());
	
}
$db = mysql_select_db("technium") or die(mysql_error());
// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$login = stripslashes($myusername);
$pass = stripslashes($mypassword);
$login = mysql_real_escape_string($myusername);
$pass = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM users WHERE login='$login' and pass='$pass'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	//ob_start();
	// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION['login']=$login;
	$_SESSION['pass']=$pass;
	header("location:login_success.php");
	//ob_end_flush();
}
else {
	echo "Wrong Username or Password";
}

?>