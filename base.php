<?php
header('Content-type: application/xml');
header("Access-Control-Allow-Origin:*");

echo "<buku>";

	$host="localhost";
    $user="root";
    $passwd="";
    $db="base";
    $koneksi = mysqli_connect($host, $user, $passwd)or die (mysqli_error($koneksi));
    if ($koneksi)
    {
        mysqli_select_db($koneksi,$db) or die(mysql_error());
    }
	
$sql="select * from buku";
$query=mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
while ($infobuku=mysqli_fetch_array($query)) {
	echo "<daftar_buku id_buku='".$infobuku['id_buku']."'>";
	echo "<id_buku>".$infobuku['id_buku']."</id_buku>";
	echo "<judul>".$infobuku['judul']."</judul>";
	echo "<ddc>".$infobuku['ddc']."</ddc>";
	echo "<issn>".$infobuku['issn']."</issn>";
	echo "<no_panggil>".$infobuku['no_panggil']."</no_panggil>";
	echo "<penerbit>".$infobuku['penerbit']."</penerbit>";
	echo "<tahun>".$infobuku['tahun']."</tahun>";
	echo "<cetakan_ke>".$infobuku['cetakan_ke']."</cetakan_ke>";
	echo "<bahasa>".$infobuku['bahasa']."</bahasa>";
	echo "<jumlah_buku>".$infobuku['jumlah_buku']."</jumlah_buku>";
	echo "<klasifikasi>".$infobuku['klasifikasi']."</klasifikasi>";
	echo "<keterangan>".$infobuku['keterangan']."</keterangan>";
	echo "<cover>".$infobuku['cover']."</cover>";
	echo "<own>".$infobuku['own']."</own>";
	echo "<jumlah>".$infobuku['jumlah']."</jumlah>";									
	echo "</daftar_buku>";
}
echo "</buku>";