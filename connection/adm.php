<?php 
    define("HOST", 'localhost');
    define("USER", 'root');
    define("PASS", '');
    define("DBNAME", 'budega_adm');

    $conn = new mysqli(HOST,USER,PASS,DBNAME);

    // if ($conn -> connect_error) {
    //     echo 'Error de conexão';
    // } else {
    //     echo 'Conexão feita com sucesso';
    // }
    

?>