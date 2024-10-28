<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Arrays Associativos - Múltiplas Pessoas</title>
    <style>
        /* Estilos CSS para a página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Exibir Carros</h2>
        <?php
        // Array multidimensional com informações de múltiplos carros["Chevrolet", "Cruze", 2021, "Vermelho"
        $carros = array(
            
            array(
                "Carro" => "segundo carro", 
                "Marca" => "Honda", 
                "Modelo" => "Civic",
                "Ano" =>  2019,
                "Cor" => "Preto"
            ),
            array(
                "Carro" => "Terceiro carro", 
                "Marca" => "Ford", 
                "Modelo" => "Focus",
                "Ano" =>  2018,
                "Cor" => "Azul"
            ),
            array(
                "Carro" => "Quarto carro", 
                "Marca" => "Chevrolet", 
                "Modelo" => "Cruze",
                "Ano" =>  2021,
                "Cor" => "Vermelho"
            ),
        );

        // Função para exibir carros
        function exibirCarros($carros) { 
            foreach ($carros as $index => $carro) { 
                echo "Carro " . ($index + 1) . ":<br>"; 
                echo "Marca: " . $carro["Marca"] . "<br>"; 
                echo "Modelo: " . $carro["Modelo"] . "<br>"; 
                echo "Ano: " . $carro["Ano"] . "<br>"; 
                echo "Cor: " . $carro["Cor"] . "<br><br>"; 
            } 
        }

        // Chama a função para exibir os carros
        exibirCarros($carros);
        ?>

        <ul>
            <li>
                <?php 
                    $carros[1]["Cor"] = "branco";
                    echo "A nova cor do Carro 1 agora é :" . $carros [0]["Cor"] ;
                ?>
            </li>
            
        </ul>

    </div>
</body>
</html>
