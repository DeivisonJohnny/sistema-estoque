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

        <div>
            <img src="https://avatars.githubusercontent.com/u/107324024?v=4" alt="Aqui vai a foto do usuario">
            <p>Deivison Johnny</p>
        </div>
        
    </header>

    <menu>
        <div>
            <h1>DJ</h1>
        </div>
        <div>
            <ul>
                
                <li><a href="./index.php?page=home"><i class="bi bi-house-door" title="Inicio"></i></a></li>
                <li><a href=""><i class="bi bi-card-list" title="Listar, atualizar, deletar estoque"></i></a></li>
                <li><a href="./index.php?page=novo-estoque"><i class="bi bi-plus-circle" title="Adicionar estoque"></i></a></li>
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
        <?php 
            switch(@$_GET['page']) {
                case 'home':
                    require_once('../home/dashboard.php');
                        break;
                case 'novo-estoque';
                    require_once('../manager/index.php');
                        break;
                
                default:
                    require_once('../home/dashboard.php');
            }
        ?>
</body>

</html>



