<?php
#1. membuat variabel untuk menampung value input form
$id = $_POST['id_jurusan'];
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

$sql = "UPDATE jurusan SET nama_jurusan='$jurusan', id_dosen='$kpd' WHERE id_jurusan='$id'";

#4. memproses query
$proses_edit_data = mysqli_query($koneksi,$sql);

#5. redirect ke index jurusan
?>
<script>
    document.location="index.php";
</script>