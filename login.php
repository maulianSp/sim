<?php
session_start();
$pesan = "";
if(isset($_POST['tombol'])){
    //proses login

    //mengambil setiap nilai dari input form
    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    //koneksi ke database
    include("koneksi.php");

    //cek apakah email dan password sama dengan yang di database?
    $sql = "SELECT * FROM admin WHERE email='$email' AND password='$pass'";

    //menjalankan query
    $qry = mysqli_query($koneksi,$sql);

    //menghitung baris data yang dihasilkan dari query diatas
    //cek berisi nilai 0 atau 1 (0 artinya login gagal, 1 artinya login berhasil)
    $cek = mysqli_num_rows($qry);

    if($cek == 0){
        //login gagal
        $pesan = "Login Gagal, Silakan Coba Lagi!";
    }else{
        //login berhasil
        //apakah ingat saya dicontreng atau tidak?
        if($_POST['ingat'] == "yes"){
            //simpan cookie
            setcookie('cemail',$email, time()+60*60*24*100, '/');
        }else{
            //simpan session
            $_SESSION['semail'] = $email;
        }
        ?>
        <script>
            document.location="index.php";
        </script>
        <?php
    }
}
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
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input placeholder="Masukkan Password" name="password" type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" name="ingat" value="yes" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                            </div>
                            <button type="submit" name="tombol" class="btn btn-primary">Login</button>
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