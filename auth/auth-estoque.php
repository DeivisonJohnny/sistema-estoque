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

            header("Location: ../home/index.php?token=".$_REQUEST['token']);
            
            break;

        case "new-category":
            $newCate = $_POST["new-cate"];
            $sqlNewcate = mysqli_query($connetion_stock, "INSERT INTO categorias(Categoria) VALUES ('$newCate')");

            if ($sqlNewcate) {
                header("Location: ../home/index.php?page=novo-estoque&token=".$_REQUEST['token']);
                echo "<script>alert('Categoria criada com sucesso')</script>";
            } else {
                echo "<script>window.history.go(-1)</script>";
                
            }

            
        case "update":
            $idUp = $_GET['id'];
            $marca = $_POST['marca'];
            $categoria = $_POST['categoria'];
            $descricao = $_POST['desc'];
            $unidades = $_POST['unidades'];
            $brutoVL = $_POST['brutoVL'];
            $valorUN = $_POST['valorUN'];

            if(!empty($idUp)){
                $sqlUpdate = mysqli_query($connetion_stock, "UPDATE estoque SET Marca = '$marca', Categoria = '$categoria', Descricao = '$descricao', QTD_unidades = $unidades, Valor_BT_UN = $brutoVL, Valor_FN_UN = $valorUN WHERE id = $idUp");
                if($sqlUpdate) {
                    echo "<script>alert('Cadastro atualizado com sucesso')</script>";
                    echo "<script>window.location.href = '../home/index.php?page=lista&token=".$_REQUEST['token']."'</script>";
                } else {
                    echo "<script>alert('Algo deu errado ao atualizar o cadastro')</script>";

                }
            } else {
                echo "<script>alert('Faltam dados para fazer a atualização')</script>";

            }

            break;

        default:
        header("Location: ../home/index.php?token=".$_SESSION['token']);
    }
?>

