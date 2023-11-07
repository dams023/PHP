<?php
    // Fazer conexão do backend com o banco de dados.
    $nomeServidor =  "sql301.infinityfree.com"; //"localhost"
    $username = "if0_35249666";//"root"
    $senha ="TFYrK96Y1KGZ0e4"; //""
    $nomeBanco = "if0_35249666_rede_banco"; //"rede_banco"

    // mysql - driver responsável por conectar com o banco.
    $conexao = new mysqli($nomeServidor, $username, $senha, $nomeBanco);

    // Se a conexão falhar - die encerra execução e apresenta uma mensagem.
    if($conexao -> connect_error) {
        die("Conexão com o banco de dados falhou!". $conexao -> connect_error);
    }
    
?>