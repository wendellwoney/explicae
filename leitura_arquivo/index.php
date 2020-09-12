<?php
require_once 'server/ArquivoModel.php';

$erro = false;
$arquivoNome = "";
$leitura = "";
//Chamada da classe e processamento
if (@$_FILES['arquivo']) {
    if ($_FILES['arquivo']['type'] != "text/plain") {
        $erro = true;
    } else {
        $arquivoNome = $_FILES['arquivo']['name'];
        $leitura = (new ArquivoModel($_FILES['arquivo']['tmp_name']))->ler();
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carregar arquivo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Leitura de Arquivo</a>
</nav>

<div class="col-md-12" style="max-width: 900px; margin: auto; margin-top: 20px;">
    <?php
        if ($erro) {
    ?>
            <div class="alert alert-danger">O arquivo informado não é do tipo TXT!</div>
    <?php } ?>
    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <h4><label for="exampleFormControlFile1">Selecione um arquivo .txt para a leitura.</label></h4>
            <input required type="file" name="arquivo" class="form-control" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-primary">Ler arquivo</button>
    </form>
    <?php if (!empty($leitura)) {?>
        <div class="card" style="margin-top: 20px;">
            <div class="card-header">
                Leitura do arquivo
            </div>
            <div class="card-body">
                <h5 class="card-title">Leitura do arquivo <em><?= $arquivoNome;?></em> </h5>
                <p class="card-text"><?= $leitura;?></p>
            </div>
        </div>
    <?php } ?>
</div>
</body>
</html>