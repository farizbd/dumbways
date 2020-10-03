<?php

if( isset($_GET['tampil']) ) $tampil = $_GET['tampil'];
	else $tampil = "user";

	if( $tampil == "user" )		include("user/user_tampil.php");
	elseif( $tampil == "user_tambah" )	include("user/user_tambah.php");
  elseif( $tampil == "user_tambahproses" )	include("user/user_tambahproses.php");
	elseif( $tampil == "user_edit" )			include("user/user_edit.php");
	elseif( $tampil == "user_editproses" )		include("user/user_editproses.php");
	elseif( $tampil == "user_hapus" )			include("user/user_hapus.php");

	elseif( $tampil == "artikel" )				include("artikel/artikel_tampil.php");
	elseif( $tampil == "artikel_tambah" )		include("artikel/artikel_tambah.php");
	elseif( $tampil == "artikel_tambahproses" )	include("artikel/artikel_tambahproses.php");
	elseif( $tampil == "artikel_detail" )	include("artikel/artikel_detail.php");
	elseif( $tampil == "artikel_hapus" )		include("artikel/artikel_hapus.php");

	else echo"Konten tidak ada";

 ?>
