<?php 
include_once("../connection/adm.php");
session_start();

// print_r("Ação ->".$_POST["acao"]."<br>");
// print_r("usuario ->".$_POST["usuario"]."<br>");
// print_r("senha ->".$_POST["senha"]);

switch($_POST["acesso"]){
    case "logar": 
        if (!empty($_POST['usuario']) and !empty($_POST['senha'])) {
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];

            $sql = mysqli_query($conn, "SELECT * FROM administradores WHERE usuario = '$usuario' AND senha = '$senha'");

            print_r($sql);

            if (mysqli_num_rows($sql) > 0) {
                $_SESSION['usuario'] = $usuario;
                header("Location: ../home/");
                echo "Olá ".$_SESSION['usuario'];
            } else {
                header("Location: ../login/login.html");
            }   
        } else {
            header("Location: ../login/login.html");
        }
        break;

    case "verificar":
        
        break;
    default:
        header("Location: ../login/login.html");
        break;
}

?>
