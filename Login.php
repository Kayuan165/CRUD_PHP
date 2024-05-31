<?php 
    require_once 'header.php';
    require_once 'connect.php';

    if(isset($_POST['Login'])){

        $login =  $_POST['login'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM tb_usuario WHERE login_usuario='$login' AND senha_usuario='$password'";

        $result = $con->query($sql);
        if ($result->num_rows > 0) {
           
            echo "<div class='alert alert-success' role='alert'>Login bem-sucedido</div>";
        } else {
           
            echo "<div class= 'alert alert-danger' role='alert'>Login ou senha incorretos</div>";
        }
    }
?>

<form action="" method="POST">
    <div>
        <label for="login">login</label>
        <input type="text" name="login" id="login">

        <label for="password">password</label>
        <input type="text" name="password" id="password">

        <input type="submit" name="Login" class="btn btn-success" value="Login">
        <a href="insert_Login.php" class="btn btn-success">Cadastrar</a>
        
    </div>
</form>
<?php 

 require_once 'footer.php';