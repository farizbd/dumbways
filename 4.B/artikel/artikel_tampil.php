<a href="?tampil=artikel_tambah" class="btn btn-info btn-sm">Tambah Berita</a><br><br>
<?php

	$hal 	= isset($_GET['hal']) ? $_GET['hal'] : 1;

	$batas	= 5;
	$posisi = ($hal-1) * $batas ;

	$artikel = mysqli_query($koneksi, "select * from news inner join user on news.id_news=user.id_user  order by id_news desc limit $posisi, $batas");
	while($data=mysqli_fetch_array($artikel)){
		$isi = substr($data['deskripsi'],0,500);
		$isi = substr($data['deskripsi'],0,strrpos($isi," "));
?>

	<div class="artikel">
		<div class="row">


      <div class="col-md-4">
			<?php if($data['image']!="") ?> <img src="gambar/artikel/<?php echo $data['image']; ?>" class="gambar-artikel" width="200">
    </div>
    <div class="col-md-8">
      <h3 class="judul"><?php echo $data['title']; ?></h3>
      <h4 class="judul">by : <?php echo $data['role']; ?></h4>
			<?php echo $isi; ?> ...
      <br>
			<a href="?tampil=artikel_detail&id=<?php echo $data['id_news']; ?>" class="btn btn-primary btn-xs">Baca Berita</a>
        </div>
	</div>
</div>
<?php
	}

	$semua = mysqli_query($koneksi, "select * from news");
	$jmldata = mysqli_num_rows($semua);
	$jmlhal	 = ceil($jmldata/$batas);
	$sebelumnya = $hal - 1;
	$berikutnya = $hal + 1;

	echo "<div class='paging'>";

?>
