<?php

require_once 'connect.php';
require_once 'header.php';
?>

<div class="container">
    <?php

        if(isset($_POST['addnew'])){
            if(empty($_POST['login']) || empty($_POST['password']) ){
                echo "<div class='alert alert-danger'>Preencha os campos faltantes!</div>";
            }else{
                $login = $_POST['login'];
                $password = $_POST['password'];

                $sql = "INSERT INTO tb_usuario(login_usuario, senha_usuario)
                VALUES ('$login','$password')";

                if($con -> query($sql) === TRUE){
                    echo "<div class= 'alert alert-success'>Cadastrado com sucesso</div>";
                }else{
                    echo "<div class='alert alert-danger'> Não foi possívrl cadastrar</div>";
                }
            }
        }
    ?>


    <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box">
                    <h3><i class="glyphicon glyphicon-lock"></i>&nbsp;Cadastrar Login</h3>
                    <form action="" method="POST">

                        <label for="login">login</label>
                        <input type="text" id="login" name="login" class="form-control"><br>

                        <label for="password">password</label>
                        <input type="text" name="password" id="password"  class="form-control"><br>
                        <br>
                        <input type="submit" name="addnew" class="btn btn-success" value="Adicionar">

                    </form>
                </div>
            </div>
    </div>
</div>

<?php 

 require_once 'footer.php';