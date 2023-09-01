<?php 

    define("HOST_ST", "localhost");
    define("USER_ST", "root");
    define("PASS_ST", "");
    define("DBNAME_ST", "estoque_budega");

    $connetion_stock = new mysqli(HOST_ST, USER_ST, PASS_ST, DBNAME_ST);

    // if ($connetion_stock -> connect_errno) {
    //     echo "Erro de conexão";
    // } else {
    //     echo "conexão feita com sucesso";
    // }
    

?>