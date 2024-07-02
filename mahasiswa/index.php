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
                                $sql = "SELECT * FROM mahasiswa INNER JOIN jurusan ON mahasiswa.id_jurusan=jurusan.id_jurusan";

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
                                <td><?php echo $jur['nama_jurusan'] ?></td>
                                <td>
                                    <!-- tombol detail -->
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#detail<?php echo $jur['id_mahasiswa'] ?>">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                    <!-- modal detail -->
                                    <div class="modal fade" id="detail<?php echo $jur['id_mahasiswa'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Data Detail <?php echo $jur['nama'] ?></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <table class="table">
                                                
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">NIM</th>
                                                        <td><?php echo $jur['nim'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Nama Lengkap</th>
                                                        <td><?php echo $jur['nama'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tempat, Tanggal Lahir</th>
                                                        <?php
                                                            #mengubah format tanggal
                                                            $tanggal = date_create($jur['tanggal_lahir']);
                                                            $tanggal_baru = date_format($tanggal,'d M Y')
                                                        ?>
                                                        <td><?php echo $jur['tempat_lahir'] ?>, <?php echo $tanggal_baru ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Alamat</th>
                                                        <td><?php echo $jur['alamat'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Jenis Kelamin</th>
                                                        <td><?php echo $jur['jns_kelamin'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Email</th>
                                                        <td><?php echo $jur['email'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Jurusan</th>
                                                        <td><?php echo $jur['nama_jurusan'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Agama</th>
                                                        <td><?php echo $jur['agama'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Foto</th>
                                                        <td>
                                                            <img src="foto/<?php echo $jur['foto'] ?>" width="200" alt="">
                                                        </td>
                                                    </tr>

                                                    
                                                </tbody>
                                            </table>
                                            </div>
                                            
                                            </div>
                                        </div>
                                    </div>

                                    <a href="" class="btn btn-info btn-sm"><i class="fa-solid fa-pencil"></i></a>
                                    
                                    <!-- tombol hapus -->
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $jur['id_mahasiswa'] ?>">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <!-- modal hapuss -->
                                    <div class="modal fade" id="hapus<?php echo $jur['id_mahasiswa'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Yakin data dari <b><?php echo $jur['nama'] ?></b> ingin dihapus?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <a href="del.php?id=<?php echo $jur['id_mahasiswa'] ?>" class="btn btn-primary">Hapus</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
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