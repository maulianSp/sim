<?php
session_start();

//menegecek apakah posisi sekarang dalam kondisi login atau tidak
if(!isset($_SESSION['sid']) OR !isset($_COOKIE['cid'])){
    //alihkan ke halaman login
    ?>
    <script>
        document.location="login.php";
    </script>
    <?php
}
?>