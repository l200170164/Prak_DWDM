<html>
<head><title>Fungsi tanggal dan waktu</title></head>
<body>
<?php
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s A");
$waktu=date("d-m-y");
$hari=date("1");
$tanggal=date("d");
$bulan=date("F");
$tahun=date("Y");
echo "Sekarang jam $jam</br>";
echo "Sekarang tanggal $waktu</br>";
echo "Lebih detailnya hari $hari tanggal $tanggal Bulan $bulan tahun $tahun";
?>
</body>
</html>