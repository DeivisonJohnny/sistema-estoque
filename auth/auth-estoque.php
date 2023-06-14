<?php 
include_once('../connection/estoque.php');
    switch($_POST['acao']) {
        case "add-stock":
            $marca = $_POST['marca'];
            $categoria = $_POST['categoria'];
            $descricao = $_POST['desc'];
            $unidades = $_POST['unidades'];
            $brutoVL = $_POST['brutoVL'];
            $valorUN = $_POST['valorUN'];

            $sqlAdd = mysqli_query($connetion_stock, "INSERT INTO estoque(Marca, Categoria, Descricao, QTD_unidades, Valor_BT_UN, Valor_FN_UN) VALUES ('$marca','$categoria','$descricao', $unidades, $brutoVL, $valorUN)");

            header("Location: ../home/");
            
            break;

        case "new-category":
            $newCate = $_POST["new-cate"];
            $sqlNewcate = mysqli_query($connetion_stock, "INSERT INTO categorias(Categoria) VALUES ('$newCate')");

            if ($sqlNewcate) {
                header("Location: ../home/");
                echo "<script>alert('Categoria criada com sucesso')</script>";
            } else {
                echo "<script>window.history.go(-1)</script>";
                
            }
            

            break;

        default:
        header("Location: ../home/");
    }
?>

