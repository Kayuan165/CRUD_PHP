<?php 
    require_once 'header.php';
    require_once 'connect.php';
    ?>
<div class="container">
    <?php 
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



    <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box">
                    <h3><i class="glyphicon glyphicon-lock"></i>&nbsp;Login</h3>
                    <form action="" method="POST">

                        <label for="login">login</label>
                        <input type="text" id="login" name="login" class="form-control"><br>    

                        <label for="password">password</label>
                        <input type="text" name="password" id="password"  class="form-control"><br>
                        <br>
                        <input type="submit" name="Login" class="btn btn-success" value="Login">
                        <a href="insert_Login.php" class="btn btn-success">Cadastrar</a>
                    </form>
                </div>
            </div>
    </div>
</div>
<?php 

 require_once 'footer.php';