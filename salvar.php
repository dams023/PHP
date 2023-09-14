<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Processando Postagem </title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <div class="painel">
        <div class="cabecalho">
            Senac Connect 
        </div>
        <div class="conteudo">
            <h2> Postagem efetuada com Sucesso! </h2>
            
            <?php
                //$usuario = "Gael";
                //Criação de cookie
                //Nome do cookie + Valor + dataExpiração + Onde pode acesssar("/" Qualquer lugar).
                //setcookie("nome", $usuario, time() +86400 * 30, "/");
                $usuario = $_COOKIE["nome"];

                //Verifica se a requisição foi feita usando POST 
                if($_SERVER["REQUEST_METHOD"] == "POST"){

                    //Obtém conteúdo da postagem do campo "postagem"
                    $postagem = $_POST["postagem"];

                    echo "$usuario postou: $postagem";
                    
                    //Região abaixo é para criar uma lista de sessão 
                    session_start(); //Iniciar sessão para usar variável de sessão

                    //Se a lista de postagens não existe(!) existe(isset)
                    if(!isset($_SESSION["postagens"])){

                        //Cria uma lista vazia de sessão, só a 1º vez
                        $_SESSION["postagens"] = array();
                    }

                    //Adiciona postagem a lista de postagens
                    array_push($_SESSION["postagens"], $postagem);

                }
            ?>
        </div>

        <div class="rodape">
            <a href="index.html" class="botao"   > Fazer Nova Postagem  </a>
            <a href="cookie.html" class="botao" > Cadastrar Usuário     </a>
            <a href="busca.html"class="botao"    > Buscar               </a>
            <a href="lista.php" class="botao"    > Lista de Posts       </a>
        </div>
    </div>
    
</body>
</html>