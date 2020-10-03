<?php

			$id_news 	= $_POST['id_news'];
			$title = $_POST['title'];
			$deskripsi	= $_POST['deskripsi'];
      $create_time	= $_POST['create_time'];
      $id_user	= $_POST['id_user'];



      mysqli_query($koneksi,"INSERT INTO news SET id_news='$_POST[id_news]', title='$_POST[title]',deskripsi='$_POST[deskripsi]',
      create_time='$_POST[create_time]', id_user='$_POST[id_user]'");

echo"<meta http-equiv='refresh' content='1; url=?tampil=artikel>";
?>
