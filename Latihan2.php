<html>
<head>
	<title>TUGAS 2</title>
<body>
<?php
$minimal_belanja = 100000;
$total_belanja = 100000;

if ($total_belanja >= $minimal_belanja) {
  $diskon = $total_belanja * 0.1;
  $total_bayar = $total_belanja - $diskon;
  echo "Total belanja Anda adalah Rp. " . $total_belanja . ", mendapatkan diskon 10% sebesar Rp. " . $diskon . ", sehingga total yang harus dibayar adalah Rp. " . $total_bayar . ".";
} else {
  echo "Total belanja Anda adalah Rp. " . $total_belanja . ", belum mencapai minimal diskon belanja";
}

?>

</body>
</html>

