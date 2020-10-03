

<h2 class="sub-header">Tambah Berita</h2>

<form name="tambah" method="post" action="?tampil=artikel_tambahproses" enctype="multipart/form-data" class="form-horizontal">

		<div class="form-group">
			<label class="label-control col-md-2">Id Berita</label>
			<div class="col-md-4"> <input type="text" class="form-control"  name="id_news" size="50"></div>
		</div>

    <div class="form-group">
			<label class="label-control col-md-2">Title</label>
			<div class="col-md-4"> <input type="text" class="form-control"  name="title" size="50"></div>
		</div>
    <div class="form-group">
			<label class="label-control col-md-2">Tanggal Buat</label>
			<div class="col-md-4"> <input type="date" class="form-control"  name="create_time" size="50"></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Gambar</label>
			<div class="col-md-4"><input type="file" name="image" class="form-control"></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Deskripsi</label>
			<div class="col-md-8"><textarea name="deskripsi" cols="80" rows="15" class="form-control"></textarea></div>
		</div>

    <div class="form-group">
			<label class="label-control col-md-2">Id User</label>
			<div class="col-md-2"><select name="id_user" class="form-control">
			<?php
				$sql = mysqli_query($koneksi,"select * from user");
				while($data = mysqli_fetch_array($sql)){
					echo"<option value='$data[id_user]'> $data[role] </option>";
				}
			?>
			</select></div>
		</div>
		<div class="form-group">
			<label class="label-control col-md-2"></label>
			<div class="col-md-4"> <input type="submit" name="tambah" value="Tambah" class="btn btn-primary"></div>
		</div>

</form>
