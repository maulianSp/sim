<?php
#1. membuat variabel untuk menampung value input form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$jurusan = $_POST['jurusan'];
$agama = $_POST['agama'];

$nama_foto = $_FILES['foto']['name'];
$tmp_file = $_FILES['foto']['tmp_name'];

#tipe file
//1. nama file
// $nama_foto = $_FILES['foto']['name'];

// //2. ukuran file
// $ukuran_foto = $_FILES['foto']['size'];

// //3. tipe file
// $tipe_file = $_FILES['foto']['type'];

// //4. temporary file
// $tmp_file = $_FILES['foto']['tmp_name'];

// //5. pesan error
// $error_file = $_FILES['foto']['error'];


// echo "Nama File: $nama_foto <br>";
// echo "Ukuran File: $ukuran_foto <br>";
// echo "Tipe File: $tipe_file <br>";
// echo "Temporary File: $tmp_file <br>";
// echo "Error File: $error_file <br>";


// echo "Kode : $kode<br>";
// echo "Jurusan : $jurusan<br>";
// echo "Kaprodi : $kpd<br>";

#2. koneksi ke SQL
include("../koneksi.php");

// #3. membuat query SQL tambah data

// // INSERT = tambah
// // SELECT = tampil
// // UPDATE = ubah
// // DELETE = hapus
// // https://www.w3schools.com/sql/

$sql = "INSERT INTO mahasiswa (nim,nama,tempat_lahir,tanggal_lahir,alamat,jns_kelamin,id_jurusan,agama,foto,email) VALUES 
('$nim', '$nama', '$tempat','$tanggal','$alamat','$jk','$jurusan','$agama','$nama_foto','$email')";

// #4. memproses query
$tambah_data = mysqli_query($koneksi,$sql);

#5. upload foto
move_uploaded_file($tmp_file,"foto/$nama_foto")

// #6. redirect ke index jurusan
// ?>
<script>
    document.location="index.php";
</script>