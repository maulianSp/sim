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
                <h2>Data Mahasiswa</h2>
                <div class="card">
                    <div class="card-header">
                        <a href="form.php" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                #1. include koneksi
                                include("../koneksi.php");

                                #2. query untuk menampilkan data dari tabel jurusan
                                $sql = "SELECT * FROM mahasiswa";

                                #3. menjalankan query tampilkan data
                                $tampil_data = mysqli_query($koneksi,$sql);

                                #4. looping seluruh data dari tabel jurusan
                                $nomor = 1;
                                foreach($tampil_data as $jur){
                            ?>

                            <tr>
                                <th scope="row"><?php echo $nomor++ ?></th>
                                <td><?php echo $jur['nim'] ?></td>
                                <td><?php echo $jur['nama'] ?></td>
                                <td><?php echo $jur['id_jurusan'] ?></td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa-solid fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>

                            <?php 
                                }
                            ?>
                            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../js/bootstrap.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>