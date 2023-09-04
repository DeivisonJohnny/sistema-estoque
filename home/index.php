<?php 
session_start();
    function validUser() {

        if (isset($_REQUEST['token'])) {
            $token = $_REQUEST['token'];

            if (!isset($_SESSION['token']) OR $_SESSION['token'] !== $token) {
                
                echo "<script>alert('Você não tem permissão para acessar esta pagina')</script>";
                echo "<script>window.location.href = '../login/login.html'</script>";

            }

            $_SESSION['token'] = $_GET['token'];
            
        } else {
                echo "<script>alert('Você não tem permissão para acessar esta pagina')</script>";
                echo "<script>window.location.href = '../login/login.html'</script>";
        }
    }

    validUser();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="../js/home.js" defer></script>
    <link rel="stylesheet" href="../css/home.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h2 title="Desenvolvedor">Dev Johnny</h2>
        <div id="icon-user">
            <img src="https://avatars.githubusercontent.com/u/107324024?v=4" alt="Aqui vai a foto do usuario">
            <p>Deivison Johnny</p>
        </div>
        <i class="bi bi-list"></i>

    </header>

    <div class="menu">
        <ul>
            <li><a href="./index.php?page=home&token=<?php echo $_SESSION['token']?>">Home</a></li>
            <li><a href="./index.php?page=lista&token=<?php echo $_SESSION['token']?>">Lista</a></li>
            <li><a href="./index.php?page=novo-estoque&token=<?php echo $_SESSION['token']?>">Painel</a></li>
            <li><a href="">Configuração</a></li>
        </ul>
    </div>

    <menu>
        <div>
            <h1>DJ</h1>
        </div>
        <div>
            <ul>
                <li><a href="./index.php?page=home&token=<?php echo $_SESSION['token']?>"><i class="bi bi-house-door" title="Inicio"></i></a></li>
                <li><a href="./index.php?page=lista&token=<?php echo $_SESSION['token']?>"><i class="bi bi-card-list" title="Listar, atualizar, deletar estoque"></i></a></li>
                <li><a href="./index.php?page=novo-estoque&token=<?php echo $_SESSION['token']?>"><i class="bi bi-plus-circle" title="Adicionar estoque"></i></a></li>
            </ul>
        </div>
        <div>
            <ul>
                <li><a href=""><i class="bi bi-gear" title="Configuração"></i></a></li>
                <a href="">
                    <li><a href=""><i class="bi bi-question-circle" title="Ajuda"></i></a></li>
                </a>
                <a href="">
                    <li><a href="../index.html"><i class="bi bi-box-arrow-left" title="Sair"></i></a></li>
                </a>
            </ul>
        </div>
    </menu>

    <div id="main">

        <?php
        switch (@$_GET['page']) {
            case 'home':
                require_once('../home/dashboard.php');
                break;
            case 'novo-estoque';
                require_once('../manager/index.php');
                break;
            case 'lista':
                require_once('../list/index.php');
                break;

            case 'deletar':
                if (!empty($_GET['id'])) {
                    require_once('../connection/estoque.php');
                    $idProd = $_GET['id'];
                    $sqlDelet = "DELETE FROM estoque WHERE id = $idProd";
                    if(mysqli_query($connetion_stock, $sqlDelet)) {
                        echo "<script>alert('Cadastro deletado com sucesso') </script>";
                        echo "<script>window.location.href = '../home/index.php?page=lista&token=".$_SESSION['token']."'</script>";
                    } else {
                        echo "<script>alert('Erro ao deletar cadastro de ID $idProd')</script>";
                    }
                    
                    
                } else {
                    echo "Algo deu errado";
                }
                
                break;

                case 'editar':
                    require_once('../list/update.php');
                    

                    break;
            default:
                require_once('../home/dashboard.php');
        }
        ?>
    </div>

</body>

</html>