PHP

	<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP </title>
</head>
<body>

    <h1> Meu primeiro programa com PHP! <h1>

    <!-- Começando PHP -->
    <?php 

        // Imprimindo na tela
        echo "Hello World!";

        // Variáveis
        $nome = "Jubileu";
        $idade = 50;


        // Se idade for maior que 18 anos
        // Estrutura de condição if(se) else(se não)
        if($idade > 18) {
            echo " $nome é maior que 18 anos, com $idade anos ";
        }else {
            echo " $nome é menor que 18 anos, com $idade anos ";
        }

        // Estruturas de repetição - looping.
        for($num = 1; $num <= 5; $num++) {
            echo(" <br> Contagem: $num ");
        }
        
        // Estrutura de repetição while
        $contador = 1;
        while($contador <=5) {
            echo " <br> Contagem2: $contador ";
            $contador++; // contador = contador + 1   
        }

        //criando função

        function saudacao($nome) {
            echo "<br> Olá, $nome";
        }
        saudacao("julio");

        //lista
        $cores = array("vermelho ","amarelo ", "azul");
        echo "<br> sem for: $cores[0]";
        echo "<br> sem for: $cores[1]";
        echo "<br> sem for: $cores[2]";

        for($n = 0; $n < count($cores); $n++) {
            echo "<br> com for: $cores[$n]";
        }
        
    ?>
    <!-- Terminando PHP -->

</body>
</html>