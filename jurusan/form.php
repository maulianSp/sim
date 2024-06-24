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
                <h2>Form Tambah Data Jurusan</h2>
                <div class="card">
                    <div class="card-header">
                    
                    </div>
                    <div class="card-body">
                        <form method="POST" action="add.php">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kode Jurusan</label>
                                <input type="text" class="form-control" name="kode" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Jurusan</label>
                                <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kepala Program Studi</label>
                                <input type="text" class="form-control" name="kaprodi" id="exampleInputEmail1" aria-describedby="emailHelp">
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