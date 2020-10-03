<h2>Data User</h2>

<a href="?tampil=user_tambah" class="btn btn-info btn-sm">Tambah User</a><br><br>
<div class="table-responsive">
<table class="table table-striped">
	<tr>
    <th>No</th>
		<th>Id</th>
		<th>Nama</th>
		<th>Email</th>
    <th>Role</th>
	</tr>

  <?php
		$no = 1;
		$data = mysqli_query($koneksi,"select * from user");
		while($d = mysqli_fetch_array($data)){
			?>

	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $d['id_user']; ?> </td>
		<td> <?php echo $d['name']; ?> </td>
		<td> <?php echo $d['email']; ?> </td>
    <td> <?php echo $d['role']; ?> </td>

	</tr>

	<?php
			$no++;
		}
	?>

</table>
