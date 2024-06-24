<?php
#1. membuat variabel untuk menampung value input form
$kode = $_POST['kode'];
$jurusan = $_POST['nama'];
$kpd = $_POST['kaprodi'];

// echo "Kode : $kode<br>";
// echo "Jurusan : $jurusan<br>";
// echo "Kaprodi : $kpd<br>";

#2. koneksi ke SQL
include("../koneksi.php");

#3. membuat query SQL tambah data

// INSERT = tambah
// SELECT = tampil
// UPDATE = ubah
// DELETE = hapus
// https://www.w3schools.com/sql/

$sql = "INSERT INTO jurusan (kode, nama_jurusan, id_dosen) VALUES ('$kode', '$jurusan', '$kpd')";

#4. memproses query
$tambah_data = mysqli_query($koneksi,$sql)

#5. redirect ke index jurusan
?>
<script>
    document.location="index.php";
</script>