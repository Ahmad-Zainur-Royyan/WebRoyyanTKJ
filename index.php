<?php
$nama_kelompok = "Kelompok 2";
$kelas = "XI RPL";

$anggota = [
    ["nama"=>"Ahmad Fikri Fauzan","absen"=>1,"foto"=>"images/anggota1.png"],
    ["nama"=>"Ahmad Zainur Royyan","absen"=>2,"foto"=>"images/anggota2.jpg"],
    ["nama"=>"Natanz Meshaal Saptoaji","absen"=>3,"foto"=>"images/anggota3.jpg"]
];
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Kelompok</title>
</head>
<body>

<h1><?php echo $nama_kelompok; ?></h1>
<h3>Kelas : <?php echo $kelas; ?></h3>

<?php
foreach($anggota as $a){
    echo "<p>".$a['nama']." - Absen ".$a['absen']."</p>";
    echo "<img src='".$a['foto']."' width='120'><br>";
}
?>

</body>
</html>
