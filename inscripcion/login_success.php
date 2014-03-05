<?php
session_start();
if(!isset($_SESSION['login'])){
	header("location:login.php");
}
require_once __DIR__ . '/DB.php';

mostrar();
echo '<form method="post" action="logout.php">';
echo '<input type="submit" value="Logout">';
echo '</form>';
 
?>
