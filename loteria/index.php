<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sorteio MEGASENA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="loteria.js"></script>
    <style>
        .bg-sorteio{
            background-color: #ff00ff;
        }
        .bg-sorteio-escolha {
            height: 100%;
            background: linear-gradient(90deg, #ff00ff 50%, #17a2b8 50%); 
        }
    </style>
</head>
<body>
<div class="col-md-12 pl-0 pr-0">
    <img src="view/img/logo.png" class="img-fluid" alt="Responsive image">
</div>

<div class="col-md-12" style="max-width: 900px; margin: auto; margin-top: 10px;">
    <div class="row">
        <div class="col-md-2">
            <h2>APOSTAS</h2>
        </div>
        <div class="col-md-6 pl-2">
            <input type="text" class="form-group w-50" id="numeroApostas" style="margin-top: 5px;" placeholder="Número de apostas">
            <button type="button" class="btn btn-info btn-sm" onclick="gerarCartelas()">Gerar Cartela(s)</button>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-success btn-lg" onclick="sortearNumero();">Sortear números</button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3"><strong>Números sorteados</strong></div>
        <div class="col-md-1 p-0 ">
            <div class="border border-success bg-success rounded-circle text-center" style="color: white; font-weight: bold; width: 60px; height: 60px;">
                <span style="font-size: 38px;" id="sort1">00</span>
            </div>
        </div>

        <div class="col-md-1 p-0">
            <div class="border border-success bg-success rounded-circle text-center" style="color: white; font-weight: bold; width: 60px; height: 60px;">
                <span style="font-size: 38px;" id="sort2">00</span>
            </div>
        </div>

        <div class="col-md-1 p-0">
            <div class="border border-success bg-success rounded-circle text-center" style="color: white; font-weight: bold; width: 60px; height: 60px;">
                <span style="font-size: 38px;" id="sort3">00</span>
            </div>
        </div>

        <div class="col-md-1 p-0">
            <div class="border border-success bg-success rounded-circle text-center" style="color: white; font-weight: bold; width: 60px; height: 60px;">
                <span style="font-size: 38px;" id="sort4">00</span>
            </div>
        </div>

        <div class="col-md-1 p-0">
            <div class="border border-success bg-success rounded-circle text-center" style="color: white; font-weight: bold; width: 60px; height: 60px;">
                <span style="font-size: 38px;" id="sort5">00</span>
            </div>
        </div>

        <div class="col-md-1 p-0">
            <div class="border border-success bg-success rounded-circle text-center" style="color: white; font-weight: bold; width: 60px; height: 60px;">
                <span style="font-size: 38px;" id="sort6">00</span>
            </div>
        </div>
    </div>
    <hr>
    <h4>Cartelas apostadas</h4>
    <div class="alert alert-info">Informe a quantidade de apostas e clique em Gerar cartela(s).</div>
    <div class="row">
        <div class="col-md-12">
            <div class="row" id="apostas">
            </div>
        </div>
    </div>
</div>
</body>
</html>