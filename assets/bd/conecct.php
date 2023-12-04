<?php
    // Configuração das informações de conexão com o banco de dados
    $host = "localhost";  // Endereço do servidor MySQL
    $usuario = "root";    // Nome de usuário do banco de dados
    $senha = "";          // Senha do banco de dados (no exemplo, a senha está em branco)
    $database = "entrevista";  // Nome do banco de dados que será usado

    // Estabelece uma nova conexão com o banco de dados usando os parâmetros configurados acima
    $connection = new mysqli($host, $usuario, $senha, $database);

    // Verifica se houve algum erro na conexão
    if ($connection ->connect_error){
        // Se houver erro, encerra o script PHP e exibe a mensagem de erro
        die("Falha de conexão " .$connection ->connect_error);
    }
?>
