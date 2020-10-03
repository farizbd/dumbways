<form action="" method="post">
  <label> masukkan tanggal pertama</label>
  <input type="text" name="tanggal1" ><br>
  <label> masukkan tanggal kedua</label>
  <input type="text" name="tanggal2" ><br>
  <input type="submit" name="submit" value="submit">
</form>



<?php
if(isset($_POST['tanggal1'])){

$tanggal1 = $_POST['tanggal1'];
$tanggal2 = $_POST['tanggal2'];

$tgl1 = date('Y-m-d',strtotime($tanggal1));
$tgl2 = date('Y-m-d',strtotime($tanggal2));

    while ($tgl1 <= $tgl2) {
        echo $tgl1.', ';

        $tgl1 = date('Y-m-d',strtotime('+1 days',strtotime($tgl1)));
    }
}
?>
