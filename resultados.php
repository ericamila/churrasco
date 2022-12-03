<?php

require 'Consumo.php';

$dados = Consumo::arrayConsumo();

$totalSolido = count($dados['ckSolido']);
$geralSolido = $totalSolido * 0.6 * 30;
$itemSolido = $geralSolido / $totalSolido;
$totalLiquido = count($dados['ckLiquido']);
$geralLiquido = $totalLiquido * 1.5 * 30;
$itemLiquido = $geralLiquido / $totalLiquido;
//Consumo por pessoa 0,600 kg de sólido e 1,5 litros de líquido-->

?>
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

            <br><h4>Total de alimentos sólidos necessários: <?=($geralSolido) ?> Kg</h4>
            <h4>Total de alimentos líquidos necessários: <?=($geralLiquido) ?> L</h4><br>
            <h3>Convidados:</h3>

            <ul style="list-style: none;">

                <?php foreach ($dados['nomes'] as $key => $value) { ?>
                <li">
                    <?= ($key+1)?>º <?= $value ?>
                </li><br>
                <?php } ?>                           

            </ul>

            <br><h3>Itens do churrasco para comprar:</h3><br>

            <ul style="list-style: none;">

                <?php foreach ($dados['ckSolido'] as $key => $value) { ?>
                <div style="width: 335px;">
                    <li>
                        <h3><?= $value[0]?></h3>
                        <p>Quantidade: <?=$itemSolido?> Kg</p>
                        <figure><img src="img/<?=$value[0]?>.jpg"/></figure>
                    </li>
                </div>
                <?php } ?>  

                <?php foreach ($dados['ckLiquido'] as $key => $value) { ?>
                <div style="width: 335px;">
                    <li>
                        <h3><?= $value[0]?></h3>
                        <p>Quantidade: <?=$itemLiquido?> L</p>
                        <figure><img src="img/<?=$value[0]?>.jpg"/></figure>
                    </li>
                </div>
                <?php } ?>  

            </ul>

        </main>

        <footer>
            <p>Desenvolvido por Erica Camila Silva Cunha</p>
        </footer>

    </body>

</html>
