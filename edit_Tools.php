<?php

require_once 'header.php';
require_once 'connect.php';
?>

<div class="container">

    <?php
    if (isset($_POST['update'])) {


        if (empty($_POST['toolname']) || empty($_POST['brand'])) {
            echo "<div class= 'alert alert-danger' role='alert'>Preencha os campos necessários</div>";
        } else {

            $toolname =  $_POST['toolname'];
            $brand = $_POST['brand'];
            $sql = "UPDATE tb_ferramentas SET nome_ferramenta='{$toolname}', marca_ferramenta='{$brand}'
            WHERE cod_FERRAMENTA=" . $_POST['cod_FERRAMENTA'];

            if ($con->query($sql) === TRUE) {
                echo "<div class='alert alert-success' role='alert'>Editado com sucesso</div>";
            } else {

                echo "<div class= 'alert alert-danger' role='alert'>Erro ao editar</div>";
            }
        }
    }
    $id = isset($_GET['cod_FERRAMENTA']) ? (int) $_GET['cod_FERRAMENTA'] : 0;
    $sql = "SELECT * FROM tb_ferramentas";
    $result = $con->query($sql);

    if ($result->num_rows < 1) {
        header('Location: Tools.php');
        exit;
    }
    $row = $result->fetch_assoc();

    ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box">
                <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Alterar Ferramenta</h3>
                <form action="" method="POST">
                    <input type="hidden" value="<?php echo $row['cod_FERRAMENTA']; ?>" name="cod_FERRAMENTA">
                    <label for="toolname">Nome Ferramenta</label>
                    <input type="text" id="toolname" name="toolname" value="<?php echo $row['nome_ferramenta']; ?>" class="form-control"><br>
                    <label for="brand">Marca</label>
                    <input type="text" name="brand" id="brand" value="<?php echo $row['marca_ferramenta']; ?>" class="form-control"><br>
                    <br>
                    <input type="submit" name="update" class="btn btn-success" value="Update">
                </form>
            </div>
        </div>
    </div>
</div>