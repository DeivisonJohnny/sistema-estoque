<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    
    <main>
        <div id="box-primary-main">
            <section id="count-estoque">
                <nav>
                    
                    <div>
                        <h2>Estoque Total</h2>
                        <p>Resultado do total</p>
                        
                    </div>
                    <span>1023</span>
                </nav>
            </section>
            <section id="count-list">
                <nav>
                    <div>
                        <h2>Lista de tipos de bebidas disponíveis</h2>
                    </div>
                    <ul>
                        <li>Cervejas 10un.</li>
                        <li>Wiskey 20un.</li>
                        <li>Licor 58un.</li>
                        <li>Vodka 200un.</li>
                        <li>Gin 125un.</li>
                        <li>Vinho 76un.</li>
                        <li>Importados 100un.</li>
                    </ul>
                </nav>
            </section>
        </div>

        <div id="box-secundary-main">
            <section>
                <table>
                    <thead>
                        <tr>
                            <th id="radius1">ID</th>
                            <th>Marca</th>
                            <th>Categoria</th>
                            <th>Descrição</th>
                            <th>Unidades</th>
                            <th>Valor BT</th>
                            <th id="radius2">Valor Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php 
                            require_once("../connection/estoque.php");

                            $sql = mysqli_query($connetion_stock, "SELECT * FROM estoque");
                            if (mysqli_num_rows($sql) > 0) {
                                while($linha = mysqli_fetch_assoc($sql)) {
                                    echo "<tr>";

                                        echo "<td>".$linha["id"]."</td>";
                                        echo "<td>".$linha["Marca"]."</td>";
                                        echo "<td>".$linha["Categoria"]."</td>";
                                        echo "<td>".$linha["Descricao"]."</td>";
                                        echo "<td>".$linha["QTD_unidades"]."</td>";
                                        echo "<td> R$ ".$linha["Valor_BT_UN"]."</td>";
                                        echo "<td> R$ ".$linha["Valor_FN_UN"]."</td>";
                                    "</tr>";
                                }
                            } else {
                                echo "<tr>";

                                        echo "<td> nenhum</td>";
                                        echo "<td> nenhum</td>";
                                        echo "<td> nenhum</td>";
                                        echo "<td> nenhum</td>";
                                        echo "<td> nenhum</td>";
                                        echo "<td> R$ </td>";
                                        echo "<td> R$ </td>";
                                    "</tr>";
                            }
                            
                        ?>
                    </tbody>
                </table>
            </section>
        </div>
    </main>
</body>
</html>