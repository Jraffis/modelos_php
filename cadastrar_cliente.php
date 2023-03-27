<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="css.css">
        <title>Modelo - Cadatro</title>
    </head>
    <body>

        <div class="container">
            <h1>Cadastro de Clientes</h1>
        </div>
        <div class="container">
            <form action="recebidos_clientes.php" method="get">
                <div class="mb-3">
                    <label for="bt_nome"><b>Nome: </b></label>
                    <input type="text" name="bt_nome">
                </div>
                <div class="mb-3">
                    <label for="bt_endereco"><b>Endereço: </b></label>
                    <input type="text" name="bt_endereco">
                </div>
                <div class="mb-3">
                    <label for="bt_estado"><b>Estado: </b></label>
                    <input type="text" name="bt_estado">
                </div>
                <div class="mb-3">
                    <label for="bt_cidade"><b>Cidade: </b></label>
                    <input type="text" name="bt_cidade">
                </div>
                <div class="mb-3">
                    <label for="bt_pais"><b>País: </b></label>
                    <input type="text"name="bt_pais">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </div>
            </form>
        </div>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>