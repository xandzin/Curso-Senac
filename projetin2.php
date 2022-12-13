<?php include 'cabecalho.php'?>
<?php include 'conexao.php'?>
<?php
    $opcao = $_GET['acao'];
    //Inserir Voto no Banco de Dados
    $sql = "INSERT INTO escolha (escolha) VALUES ('$opcao')";
    if($conn->query($sql) == TRUE)
    {
        header("Refresh: 3; url=projetin.php");
    }
    else
    {
        echo "Erro no Banco de dados";
    }
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Pesquisa de Satisfação</title>
</head>
<body>
    <h1 class="text-center p-5"><b>OBRIGADO POR AVALIAR!<p></p>A sua opinião é muito importante.</b></h1>
<b></b>
    <div class="text-center">
        <div class="spinner-border m-5" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</body>
<?php include 'rodape.php'?>