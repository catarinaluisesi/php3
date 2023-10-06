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
                $vetorA = array("ADS", "CD", "ADS", "ADS", "CD", "CD", "ADS");
                foreach ($vetorA as $valor) {
                ?>
                    <td><?php echo $valor; ?></td>
                <?php } ?>
            </tr>
        </table>

        <table border="1">
            <tr>
                <?php
                $vetorB = array(
                    "Nome" => "Pedro",
                    "Idade" => 30,
                    "Curso" => "ADS",
                    "Média" => 7.0 
                );
                foreach (array_keys($vetorB) as $chave) {
                ?>
                    <th><?php echo $chave; ?></th>
                <?php } ?>
            </tr>
            <tr>
                <?php foreach ($vetorB as $valor) { ?>
                    <td><?php echo $valor; ?></td>
                <?php } ?>
            </tr>
        </table>

        <a href="index.html" class="back-button">Voltar para a página inicial</a>
    </div>
</body>
</html>

