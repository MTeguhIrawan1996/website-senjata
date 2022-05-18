<?php

ob_start();
session_start();

require 'function.php';


if (isset($_POST['login'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level_user'];
	$sql_login=mysqli_query($conn,"SELECT * FROM tb_user WHERE username='$username' AND password='$password' AND level=$level");


if (mysqli_num_rows($sql_login)>0){
  $row_akun= mysqli_fetch_assoc($sql_login);



  $_SESSION['akun_id'] = $row_akun['id'];
  $_SESSION['akun_username'] = $row_akun['username'];
  $_SESSION['akun_password'] = $row_akun['password'];
  $_SESSION['akun_level'] = $row_akun['level'];

  $_SESSION['login'] = true;

  if($_SESSION['akun_level']==1){
	header('location: index.php');
  }elseif($_SESSION['akun_level']==2){
	header('location: index.php');
	}

}else{
	header("location: login.php?login-gagal")or die(mysql_error());
	}
}
?>