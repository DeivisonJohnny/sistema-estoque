<?php
session_start();
include_once("../connection/adm.php");


// print_r("Ação ->".$_POST["acao"]."<br>");
// print_r("usuario ->".$_POST["usuario"]."<br>");
// print_r("senha ->".$_POST["senha"]);

switch ($_POST["acesso"]) {
    case "logar":
        if (!empty($_POST['usuario']) and !empty($_POST['senha'])) {
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];

            $sql = mysqli_query($conn, "SELECT * FROM administradores WHERE usuario = '$usuario' AND senha = '$senha'");

            if (mysqli_num_rows($sql) > 0) {
                $_SESSION['usuario'] = $usuario;
                echo "<script>window.location.href = '../home/'</script>";

                echo "Olá " . $_SESSION['usuario'];
            } else {
                echo "<script>window.location.href = '../login/login.html'</script>";
            }
        } else {
            echo "<script>window.location.href = '../login/login.html'</script>";
        }
        break;

    case "verificar":

        break;
    default:
        echo "<script>window.location.href = '../login/login.html'</script>";
        break;
}

?>
