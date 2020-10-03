<?php


	$artikel = mysqli_query($koneksi,"select * from news inner join user on news.id_news=user.id_user where id_news='$_GET[id]'");
	$data=mysqli_fetch_array($artikel);
	$isi = $data['deskripsi'];
?>
	<ul class="breadcrumb">
		<li>Home</li>
		<li class="active">Artikel detail</li>
	</ul>

	<div class="artikel">
		<h3 class="judul"><?php echo $data['title']; ?></h3>
    <h4 class="judul">by : <?php echo $data['role']; ?></h4>
		<p>
			<?php if($data['image']!="") ?> <img src="<?php echo $data['image']; ?>" class="thumbnail" width="100%">

			<?php echo $isi; ?>
		</p>
	</div>
