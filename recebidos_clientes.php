<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="css.css">
        <title>Recebidos</title>
    </head>
    <body>
        <div class="container">
            <h1>Cadatros - Recebidos</h1>
            <p><b>Nome: <?php echo $_GET["bt_nome"]; ?></b></p>
            <p><b>Endereço: <?php echo $_GET["bt_endereco"]; ?></b></p>
            <p><b>Estado: <?php echo $_GET["bt_estado"]; ?></b></p>
            <p><b>Cidade: <?php echo $_GET["bt_cidade"]; ?></b></p>
            <p><b>País: <?php echo $_GET["bt_pais"]; ?></b></p>

            <a href="cadastrar_cliente.php" class="btn btn-warning"><b>Voltar</b></a>
        </div>    
    </body>
</html>