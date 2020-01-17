<?php session_start(); ?>
<html>
    <head>
        <title>Cadastro de Usuários</title>
    </head>

    
    <?php

        include('config.php');

        

        if(isset($_POST['email'])){
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $sql = "insert into usuario (email,senha) values ('$email','$senha')";

            $sql = $pdo->query($sql);
            

            echo "<script>location.href='index.php';</script>";
            $_SESSION["msgcadastrar"] = 'Empresa cadastrada com sucesso';

        }


    ?>

    <body>

        <h1>Cadastro de Usuários</h1>

        <form method="POST">
            E-mail:<br/>
            <input type="email" name="email" required="required" /><br/>
            Senha:<br/>
            <input type="password" name="senha" required="required" /><br/>

            <br/>

            <input type="submit" value="Cadastrar" />

        </form>



    </body>





</html>