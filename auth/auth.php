<?php
session_start();

if (!empty($_POST['usuario']) OR !empty($_POST['senha'])) {
    include_once("../connection/adm.php");

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $query = $conn -> query("SELECT * FROM administradores WHERE usuario = '$usuario' AND senha = '$senha'");

    if($query->num_rows > 0){
        acesso();
        echo "Consedido"; 
    } else {
        echo "<script>window.location.href = '../login/login.html'</script>";

        echo "Não existe cadastro"; 


    }

    
} else {
    if (isset($_SESSION['token']) and $_SESSION['token'] == $token) {
        echo "Vai continuar acessando";
    } else {
        echo "Bloqueiado";
    }
    
    echo "<script>window.location.href = '../login/login.html'</script>";
    echo "Dados não passados"; 

}


function acesso()
{
    $token = bin2hex(random_bytes(16));

    $_SESSION['token'] = $token;

    header("Location: ../home/index.php?token=$token");
}


// <?php
// session_start();

// // Gere um token único para o usuário
// $token = bin2hex(random_bytes(16));

// // Armazene o token na sessão
// $_SESSION['token'] = $token;
// 
?>
<!-- 
// <a href="pagina2.php?token=<?php echo $token; ?>">Ir para a Página 2</a> -->