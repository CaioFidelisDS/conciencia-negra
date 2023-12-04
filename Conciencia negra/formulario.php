<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
  </head>
  <body>
    <form action="" method="post">

    <label>1- Qual seu nome ?</label>
    <input type="text" name="nome">

    <label>2- Qual sua idade ?</label>
    <input type="number" name="idade">

    <label>3- Você ja presenciou algum tipo de racismo? Descreva o que aconteceu</label>
    <input type="text" name="pergunta-1">

    <label>4- Você já sofreu algum tipo de racismo ?</label>
    <input type="text" name="pergunta-2">

    <label>5- O que voce entende por racismo ?</label>
    <input type="text" name="pergunta-3">

    <label>6- Como sua escola/local de trabalho se posiciona diante do racismo ?</label>
    <input type="text" name="pergunta-4">

    <label>7- Tem alguma ideia de como combater o racismo ?</label>
    <input type="text" name="pergunta-5">

    <label>8- Voce acredita que vivemos em um pais racista ?</label>
    <input type="text" name="pergunta-6">

    <button type="submit" name="acao" value="Enviar">Enviar</button>
    </form>

    <?php
    // Inclui o arquivo de conexão com o banco de dados (certifique-se de que a conexão esteja configurada corretamente em conexao.php)
    include './assets/bd/conecct.php';

    // Obtém valores dos parâmetros da URL
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
    $idade = isset($_POST['idade']) ? $_POST['idade'] : null;
    $pergunta1 = isset($_POST['pergunta-1']) ? $_POST['pergunta-1'] : null;
    $pergunta2 = isset($_POST['pergunta-2']) ? $_POST['pergunta-2'] : null;
    $pergunta3 = isset($_POST['pergunta-3']) ? $_POST['pergunta-3'] : null;
    $pergunta4 = isset($_POST['pergunta-4']) ? $_POST['pergunta-4'] : null;
    $pergunta5 = isset($_POST['pergunta-5']) ? $_POST['pergunta-5'] : null;
    $pergunta6 = isset($_POST['pergunta-6']) ? $_POST['pergunta-6'] : null;

    // Obtém ação do parâmetro 'acao' da URL
    $acao = isset($_POST["acao"]) ? $_POST["acao"] : null;

    // Verifica se a ação é 'Enviar'
    if ($acao == 'Enviar') {
        // Monta a consulta SQL para inserir dados na tabela 'login'
        $sql =$sql = "INSERT INTO perguntas (nome, idade, pergunta1, pergunta2, pergunta3, pergunta4, pergunta5, pergunta6) VALUES ('$nome', '$idade', '$pergunta1', '$pergunta2', '$pergunta3', '$pergunta4', '$pergunta5', '$pergunta6');";


        // Executa a consulta SQL
        if ($connection->query($sql) == true) {
            // Redireciona para uma URL após a inserção bem-sucedida
            echo '<div class="alert alert-success mt-4 container-fluid d-flex justify-content-center align-items-center col-10">Dados inseridos com sucesso</div>';
        } 
        else {
            // Exibe uma mensagem de erro se houver um problema na inserção
            echo '<div class="alert alert-danger mt-4 container-fluid d-flex justify-content-center align-items-center col-10">Erro ao inserir dados:</div>' . $connection->error;
        }
    }
    ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./assets/main/main.js"></script>
  </body>
</html>