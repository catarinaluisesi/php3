<?php
$dados = array(
    array("Nome" => "Maria", "Curso" => "ADS", "Média" => 7.0, "Situação" => ""),
    array("Nome" => "João", "Curso" => "CD", "Média" => 5.0, "Situação" => ""),
    array("Nome" => "José", "Curso" => "CD", "Média" => 8.0, "Situação" => ""),
    array("Nome" => "Pedro", "Curso" => "ADS", "Média" => 1.5, "Situação" => ""),
    array("Nome" => "Paulo", "Curso" => "ADS", "Média" => 6.0, "Situação" => ""),
);

$situacaoPorCurso = array(
    "ADS" => array("Aprovado" => 0, "Exame Final" => 0, "Reprovado" => 0),
    "CD" => array("Aprovado" => 0, "Exame Final" => 0, "Reprovado" => 0),
);

foreach ($dados as $indice => $linha) {
    $media = $linha["Média"];

    if ($media < 2) {
        $dados[$indice]["Situação"] = "Reprovado";
        $situacaoPorCurso[$linha["Curso"]]["Reprovado"]++;
    } elseif ($media >= 2 && $media < 6) {
        $dados[$indice]["Situação"] = "Exame Final";
        $situacaoPorCurso[$linha["Curso"]]["Exame Final"]++;
    } elseif ($media >= 6) {
        $dados[$indice]["Situação"] = "Aprovado";
        $situacaoPorCurso[$linha["Curso"]]["Aprovado"]++;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabela de Dados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #C1FFC1; 
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 28px;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #FFB6C1;
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 20px;
            text-align: center;
        }

        .back-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tabela de Dados</h1>
        
        <table border="1">
            <tr>
                <?php
                foreach (array_keys($dados[0]) as $chave) {
                ?>
                    <th><?php echo $chave; ?></th>
                <?php } ?>
            </tr>
            <?php foreach ($dados as $linha) { ?>
                <tr>
                    <?php foreach ($linha as $valor) { ?>
                        <td><?php echo $valor; ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </div>
    

    <div class="container">
        <h1>Situação dos Alunos por Curso:</h1>
        <?php
        foreach ($situacaoPorCurso as $curso => $situacao) {
            echo "<h2>$curso:</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Situação</th><th>Quantidade</th></tr>";
            foreach ($situacao as $situacaoNome => $quantidade) {
                echo "<tr><td>$situacaoNome</td><td>$quantidade</td></tr>";
            }
            echo "</table>";
        }
        ?>
        <a href="index.html" class="back-button">Voltar para a página inicial</a>
    </div>
</body>
</html>


