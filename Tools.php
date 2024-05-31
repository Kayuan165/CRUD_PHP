<?php 

    require_once 'connect.php';
    require_once 'header.php';

    echo "<div class='container'>";
    echo "<div row-cols>";
    echo "<h2 class='col'> Lista de Ferramentas </h2>";
    echo "<a href='insert_Tools.php' class= 'btn btn-success col'>Cadastrar</a><br></div>";

    $sql = "SELECT * FROM tb_ferramentas";
    $result = $con -> query($sql);

    if(isset($_POST['Delete'])){
        $sql = "DELETE FROM tb_ferramentas WHERE cod_FERRAMENTA=" . $_POST['cod_FERRAMENTA'];
        if($con -> query($sql) === TRUE){
            echo "<div class='alert alert-success'>Deletado com sucesso</div>";
        }
    }


    if($result -> num_rows > 0){
        ?>
        <table class= "table table-bordered table-striped">
            <tr>
                <td>Nome Ferramenta</td>
                <td>Marca Ferramenta</td>
                <td width="70px">Delete</td>
                <td width="70px">Editar</td>
            </tr>
    <?php
    	while( $row = $result->fetch_assoc()){ 
            echo "<form action='' method='POST'>";
            echo "<input type='hidden' value='". $row['cod_FERRAMENTA']."' name='cod_FERRAMENTA' />"; //added
            echo "<tr>";
            echo "<td>".$row['nome_ferramenta'] . "</td>";
            echo "<td>".$row['marca_ferramenta'] . "</td>";
            echo "<td><input type='submit' name='Delete' value='Delete' class='btn btn-danger' /></td>";  
            echo "<td><a href='edit_Tools.php?id=".$row['cod_FERRAMENTA']."' class='btn btn-info'>Editar</a></td>";
            echo "</tr>";
            echo "</form>";
        }
        ?>
        </table>
    <?php
    }
    else{
        echo "<br><br>Ferramentas não encontrados";
    }
?>
    </div>
<?php 

 require_once 'footer.php';