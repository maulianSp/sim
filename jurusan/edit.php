<?php
#1. mengambil varibel
$id = $_GET['id'];

#2. koneksi database
include("../koneksi.php");

#3. membuat qeury SQL
$sql = "SELECT * FROM jurusan WHERE id_jurusan='$id'";

#4. memproses query
$edit_data = mysqli_query($koneksi,$sql);

#memisahkan data utuh menjadi beberapa kolom
$data = mysqli_fetch_array($edit_data);
#
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Mahasiswa</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
    <?php
        include("../navbar.php");
    ?>

    <!-- card jurusan -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-8 m-auto">
                <h2>Form Edit Data Jurusan</h2>
                <div class="card">
                    <div class="card-header">
                    
                    </div>
                    <div class="card-body">
                        <form method="POST" action="update.php">
                            <input type="hidden" name="id_jurusan" value="<?php echo $data['id_jurusan'] ?>">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kode Jurusan</label>
                                <input type="text" readonly value="<?php echo $data['kode'] ?>" class="form-control" name="kode" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Jurusan</label>
                                <input type="text" value="<?php echo $data['nama_jurusan'] ?>" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kepala Program Studi</label>
                                <input type="text" value="<?php echo $data['id_dosen'] ?>" class="form-control" name="kaprodi" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="index.php" class="btn btn-warning">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../js/bootstrap.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>