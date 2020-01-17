<?php 

    session_start();

    unset($_SESSION['user']);
    echo "<script>location.href='dashboard.php';</script>";

?>