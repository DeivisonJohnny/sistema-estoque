<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/manager.css">
</head>

<body>
        
        <main>
            <div id="box-radius">
                <ul>
                    <li id="red"></li>
                    <li id="yellow"></li>
                    <li id="green"></li>
                </ul>
            </div>
            <form action="../auth/autenticacao" method="post">
                <h1>Adicionar produto ao estoque</h1>
                <input type="hidden" name="acao" value="adicionar-estoque">
                <section>
                    <div>
                        <label class="label-required" for="marca">Marca</label>
                        <input type="text" name="item" id="marca" placeholder="Exemple: Old Parr">
                        <span>* Esse campo é obrigatório</span>
                    </div>
                    <div id="box-select">
                        <label class="label-required" for="categoria">Catégoria</label>
                        <div>
                            <select name="categoria" id="categoria">
                                <option value="Whisky">Whisky</option>
                                <option value="Cerveja">Cerveja</option>
                                <option value="Licor">Licor</option>
                                <option value="Gin">Gin</option>
                                <option value="Vinho">Vinho</option>
                            </select>
                            <button id="addCategoria">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>
                        <span>* Esse campo é obrigatório</span>

                    </div>
                </section>
                <section>
                    <div>
                        <label class="label-required" for="desc">Descrição do produto</label>
                        <textarea name="desc" id="desc" cols="10" rows="1" placeholder="Descrição"></textarea>
                    </div>
                    <div>
                        <label class="label-required" for="unidades">Quantas unidades</label>
                        <input type="number" name="unidades" id="unidades">
                        <span>* Esse campo é obrigatório</span>
                    </div>
                </section>
                <section>
                    <div>
                        <label class="label-required" for="brutoVL">Valor bruto da unidade</label>
                        <input type="number" name="brutoVL" id="brutoVL">
                        <span>* Esse campo é obrigatório</span>
                    </div>
                    <div>
                        <label class="label-required" for="valorUN">Valor final da unidade:</label>
                        <input type="number" name="valorUN" id="valorUN">
                        <span>* Esse campo é obrigatório</span>

                    </div>
                </section>
                <div id="box-submit">
                    <input type="submit" value="Adicionar">
                </div>
            </form>
            <div id="bottom-band">

            </div>
            
        </main>


</body>

</html>