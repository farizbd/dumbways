<form action="" method="post">
  <label> masukkan array</label>
  <input type="text" name="angka" ><br>
  <input type="submit" name="submit" value="submit">
</form>

<?php
if(isset($_POST['angka'])){
$angka = $_POST['angka'];
$bil = explode (",",$angka);

$hit1= $bil[1]+$bil[2]+$bil[3]+$bil[4];
$hit2= $bil[0]+$bil[2]+$bil[3]+$bil[4];
$hit3= $bil[0]+$bil[1]+$bil[3]+$bil[4];
$hit4= $bil[0]+$bil[1]+$bil[2]+$bil[4];
$hit5= $bil[0]+$bil[1]+$bil[2]+$bil[3];

echo "angka 1 : ".$hit1."<br>";
echo "angka 2 : ".$hit2."<br>";
echo "angka 3 : ".$hit3."<br>";
echo "angka 4 : ".$hit4."<br>";
echo "angka 5 : ".$hit5."<br>";

$max=max($hit1, $hit2, $hit3, $hit4, $hit5);

$min=min($hit1, $hit2, $hit3, $hit4, $hit5);
echo "nilai terkecil : ".$min."<br>";
echo "nilai terbesar : ".$max."<br>";
}
 ?>
