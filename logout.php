<?php
session_start();
session_destroy();
setcookie('cemail',$email, time()-60*60*24*100, '/');
?>
<script>
    document.location="login.php";
</script>