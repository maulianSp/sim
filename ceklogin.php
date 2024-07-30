<?php
session_start();

//menegecek apakah posisi sekarang dalam kondisi login atau tidak
if(!isset($_SESSION['semail']) AND !isset($_COOKIE['cemail'])){
    //alihkan ke halaman login
    ?>
    <script>
        document.location="/belajarweb/sim/login.php";
    </script>
    <?php
}
?>