<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Churrasco Erica</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/principal.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1>Churrasco da Erica</h1>
        </header>

        <main>
            <nav>
                <a href="index.php" title="Home">Home</a>
                <a href="desejos.php" title="Desejos">Lista de Desejos</a>
                <a href="convidados.php" title="Convidados">Lista de Convidados</a>
                <a href="consumo.php" title="Consumo">Consumo</a>
            </nav>
            <br><br><br><br><br>

            <h1>Lista de Desejos</h1>
            <form action="resultados.php" method="POST" role="form">
                <fieldset>
                    <legend>Escolha os itens do churrasco:</legend>
                    <div>
                        <input type="checkbox" value="Carne Bovina" name="ckSolido[]">
                        <label for="carnebovina">Carne Bovina</label>
                    </div>
                    <div>
                        <input type="checkbox" value="Carne Suína" name="ckSolido[]">
                        <label for="carnebovina">Carne Suína</label>
                    </div>
                    <div>
                        <input type="checkbox" value="Frango" name="ckSolido[]">
                        <label for="frango">Frango</label>
                    </div>
                    <div>
                        <input type="checkbox" value="Ovos" name="ckSolido[]">
                        <label for="ovos">Ovos</label>
                    </div>
                    <div>
                        <input type="checkbox" value="Arroz" name="ckSolido[]">
                        <label for="arroz">Arroz</label>
                    </div>
                    <div>
                        <input type="checkbox" value="Farofa" name="ckSolido[]">
                        <label for="farofa">Farofa</label>
                    </div>
                    <div>
                        <input type="checkbox" value="Suco" name="ckLiquido[]">
                        <label for="suco">Suco</label>
                    </div>
                    <div>
                        <input type="checkbox" value="Refrigerante" name="ckLiquido[]">
                        <label for="refrigerante">Refrigerante</label>
                    </div>
                    <div>
                        <input type="checkbox" value="Salada" name="ckSolido[]">
                        <label for="salada">Salada</label>
                    </div>
                    <div>
                        <input type="checkbox" value="Vatapá" name="ckSolido[]">
                        <label for="vatapa">Vatapá</label>
                    </div>
                    <div>
                        <input type="checkbox" value="Linguiça" name="ckSolido[]">
                        <label for="linguica">Linguiça</label>
                    </div>
                    <div>
                        <input type="checkbox" value="Feijoada" name="ckSolido[]">
                        <label for="feijoada">Feijoada</label>
                    </div>
                    <figure><img src="img/churrasco.jpg"/></figure>

                </fieldset>
                <br><br><br>

                <section>
                    <h1>Lista de Convidados (30)</h1><br>
                    <label for="convidados">Nome dos convidados + total de acompanhantes:</label><br>
                    <input type="text" name="nome" size="55" placeholder="Ex: Maria + 3 acompanhates"><br>
                </section>

                <br><br><br>

                <section>
                    <h1>Cálculo do consumo</h1><br>
                    <button type="submit" name="calcular">Calcular</button>
                </section>

            </form>
            <!--Consumo por pessoa 0,600 kg de sólido e 1,5 litros de líquido-->
            <br><br><br>
        </main>

        <footer>
            <p>Desenvolvido por Erica Camila Silva Cunha</p>
        </footer>

    </body>
</html>
