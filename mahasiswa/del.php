<?php
#1. mengambil varibel
$id = $_GET['id'];

#2. koneksi database
include("../koneksi.php");

#3. membuat qeury SQL
$sql = "DELETE FROM mahasiswa WHERE id_mahasiswa='$id'";

#4. memproses query
$hapus_data = mysqli_query($koneksi,$sql);

?>

<script>
    document.location="index.php";
</script>