<?php 

    define("HOST", "localhost");
    define("USER", "id21198842_budega");
    define("PASS", "93186145De@");
    define("DBNAME", "id21198842_budega_estoque");

    $connetion_stock = new mysqli(HOST, USER, PASS, DBNAME);

    // if ($connetion_stock -> connect_errno) {
    //     echo "Erro de conexão";
    // } else {
    //     echo "conexão feita com sucesso";
    // }
    

?>