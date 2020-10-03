<?php

include 'koneksi.php';


$id_user = $_POST['id_user'];
$name = $_POST['name'];
$email = $_POST['email'];
$role = $_POST['role'];

mysqli_query("UPDATE user SET name='$_POST[name]', email='$_POST[email]', role='$_POST[role]'
      WHERE id_user='$_POST[id_user]'")


header("location:index.php");

?>
