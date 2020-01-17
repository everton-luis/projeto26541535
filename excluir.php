<?php
    session_start();
    include('config.php');

    if(isset($_SESSION['user'])){
        $id = $_SESSION['user'];
    }else{
        echo "<script>location.href='index.php';</script>";
    }

    $id = $_GET['id'];
    if(isset($_GET['id'])){
        $sql = "delete from cadastro where id=$id";
        $sql = $pdo->query($sql);
        echo "<script>location.href='dashboard.php';</script>";
        $_SESSION["msgexcluir"] = 'Empresa excluida com sucesso';

    }
    

?>