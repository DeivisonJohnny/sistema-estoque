<?php 

    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "");
    define("DBNAME", "estoque_budega");

    $connetion_stock = new mysqli(HOST, USER, PASS, DBNAME);

    // if ($connetion_stock -> connect_errno) {
    //     echo "Erro de conexão";
    // } else {
    //     echo "conexão feita com sucesso";
    // }
    

?>