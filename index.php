<?php session_start(); ?>
<html>

    <head>

    </head>

    <style>

        body{
            margin:auto;
        }

        h1{
            margin:auto;
        }

        .login{
            margin: auto;
            text-align:center;
            padding:100px;
        }

        .login .botao01{
            background: -webkit-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
            background: -moz-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
            background: -o-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
            background: -ms-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
            background: linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
            border: 1px solid #CCCCCE;
            border-radius: 3px;
            box-shadow: 0 3px 0 rgba(0, 0, 0, .3),
                        0 2px 7px rgba(0, 0, 0, 0.2);
            color: #616165;
            font-family: "Trebuchet MS";
            font-size: 14px;
            font-weight: bold;
            line-height: 25px;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            text-shadow:1px 1px 0 #FFF;
            padding: 5px 15px;
            width: 80px;
        }

        

    </style>

    <body>

        <div class="login">
            
            <?php
                
                include('config.php');
                if(isset($_SESSION["msgcadastrar"])){
                echo 'Usuario cadastrada com sucesso';
                unset($_SESSION["msgcadastrar"]);
                }

                if(isset($_POST['email'])){
                    $email = $_POST['email'];
                    $senha = md5($_POST['senha']);
                    $sql = "select * from usuario where email='$email' and senha='$senha' ";
                    $sql = $pdo->query($sql);
                    
                    if($sql->rowCount() > 0){
                        
                        $sql = $sql->fetch();

                        $_SESSION['user'] = $sql['id'];
                        echo "<script>location.href='dashboard.php';</script>";
                    }
                }


            ?>

            <h1>Projeto Cadastro Empresas</h1>

            <br/><br/>

            <form method="POST">
                Email:<br/>
                <input type="email" name="email" required="required" /><br/>
                Senha:<br/>
                <input type="password" name="senha" required="required" /><br/>
                <br/>



                <input type="submit" value="Logar" />




            </form>

            <a href="cadastrarusuario.php" class="botao01">Cadastrar usuário</a>

        </div>


    </body>




</html>