<?php
#1. mengambil varibel
$id = $_GET['id'];

#2. koneksi database
include("../koneksi.php");

#3. membuat qeury SQL
$sql = "SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'";

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
                <h2>Form Edit Data Mahasiswa</h2>
                <div class="card">
                    <div class="card-header">
                    
                    </div>
                    <div class="card-body">
                        <form method="POST" action="add.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NIM</label>
                                <input type="text" readonly value="<?php echo $data['nim'] ?>" class="form-control" name="nim" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" readonly value="<?php echo $data['nama'] ?>" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                                <input type="text" value="<?php echo $data['tempat_lahir'] ?>" class="form-control" name="tempat" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                                <input type="date" value="<?php echo $data['tanggal_lahir'] ?>" class="form-control" name="tanggal" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <input type="text" value="<?php echo $data['alamat'] ?>" class="form-control" name="alamat" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" value="<?php echo $data['email'] ?>" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <!-- ternary operator -->
                                    <input <?php echo ($data['jns_kelamin'] == "Laki-laki") ?'checked' : '' ?> class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-laki">
                                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input <?php echo ($data['jns_kelamin'] == "Perempuan") ?'checked' : '' ?> class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan">
                                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                </div>

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                                <select name="jurusan" id="" class="form-control">
                                    <option value="">-Pilih Jurusan-</option>
                                    <?php
                                    #1. include koneksi
                                    include("../koneksi.php");

                                    #2. query untuk menampilkan data dari tabel jurusan
                                    $sql = "SELECT * FROM jurusan";

                                    #3. menjalankan query tampilkan data
                                    $tampil_data = mysqli_query($koneksi,$sql);

                                    #4. looping seluruh data dari tabel jurusan
                                    foreach($tampil_data as $jur){
                                    ?>
                                    <option <?php echo ($data['id_jurusan'] == $jur['id_jurusan']) ?'selected' : '' ?> value="<?php echo $jur['id_jurusan'] ?>"><?php echo $jur['nama_jurusan'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Agama</label>
                                <select name="agama" id="" class="form-control">
                                    <option value="">-Pilih Agama-</option>
                                    <option <?php echo ($data['agama'] == "Islam") ?'selected' : '' ?> value="Islam">Islam</option>
                                    <option <?php echo ($data['agama'] == "Kristen") ?'selected' : '' ?> value="Kristen">Kristen</option>
                                    <option <?php echo ($data['agama'] == "Katolik") ?'selected' : '' ?> value="Katolik">Katolik</option>
                                    <option <?php echo ($data['agama'] == "Buddha") ?'selected' : '' ?> value="Buddha">Buddha</option>
                                    <option <?php echo ($data['agama'] == "Hindu") ?'selected' : '' ?> value="Hindu">Hindu</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Foto</label>
                                <input type="file" class="form-control" name="foto" accept="image/*" id="exampleInputEmail1" aria-describedby="emailHelp">
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