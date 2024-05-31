<?php

require_once 'connect.php';
require_once 'header.php';
?>

<div class="container">
    <?php

    if(isset($_POST['addnew'])){
        if(empty($_POST['toolname']) || empty($_POST['brand']) ){
            echo "Preencha os campos faltantes!";
        }else{
            $toolname = $_POST['toolname'];
            $brand = $_POST['brand'];

            $sql = "INSERT INTO tb_ferramentas(nome_ferramenta, marca_ferramenta)
            VALUES ('$toolname','$brand')";
            
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
        <label for="toolname">Nome Ferramenta</label>
        <input type="text" name="toolname" id="toolname">

        <label for="brand">Marca</label>
        <input type="text" name="brand" id="brand">

        <input type="submit" name="addnew" class="btn btn-success" value="Add New">
    </div>
</form>
<?php 

 require_once 'footer.php';