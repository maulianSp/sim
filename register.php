<?php
$pesan = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 m-auto">
            <div class="alert alert-danger" role="alert">
                <?php echo $pesan; ?>
            </div>
                <div class="card">
                    <div class="card-header">
                        Form Login
                    </div>
                    <div class="card-body">
                        <form method="post" action="login.php">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input placeholder="Masukkan Alamat Email" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input placeholder="Masukkan Nama" name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input placeholder="Masukkan Password" name="password" type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                                <input placeholder="Masukkan Password" name="password" type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            
                            <button type="submit" name="tombol" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
</body>
</html>