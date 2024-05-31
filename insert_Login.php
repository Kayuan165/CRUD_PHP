<?php

require_once 'connect.php';
require_once 'header.php';
?>

<div class="container">
    <?php

    if(isset($_POST['addnew'])){
        if(empty($_POST['login']) || empty($_POST['password']) ){
            echo "Preencha os campos faltantes!";
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
<form action="" method="POST">
    <div>
        <label for="login">login</label>
        <input type="text" name="login" id="login">

        <label for="password">password</label>
        <input type="text" name="password" id="password">

        <input type="submit" name="addnew" class="btn btn-success" value="Add New">
    </div>
</form>
<?php 

 require_once 'footer.php';