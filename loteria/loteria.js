function carregaCartela(numeroCartela, arrayNumerosEscolhidos) {
    var html = '<div class="col-md-4 p-3 cartelas" style="background-color: khaki; border-left: white 8px solid; border-top: white 8px solid;">';
    html += '<span id="cartela" class="p-0 text-center"><strong><h5>Cartela ' + numeroCartela + '</h5></strong></span>';

    var numero = 0;
    for (var i = 1; i <= 6; i++) {
        html += '<div class="row">';
        for (var n = 1; n <= 10; n++) {
            var numeroNovo = (numero + 1);
            var numeroFormatado = "00";
            if (numeroNovo < 10) {
                numeroFormatado = "0" + numeroNovo;
            } else {
                numeroFormatado = numeroNovo;
            }
            html += '<div id="c-' + numeroCartela + '-n-' + numeroNovo + '" class="bg-light p-1" style="margin-left: 3px; margin-bottom: 3px;">' + numeroFormatado + '</div>';
            numero = (numero + 1);
        }
        html += '</div>';
    }
    html += '</div>';
    $('#apostas').append(html);

    $.each(arrayNumerosEscolhidos, function (index, value) {
        $('#c-' + numeroCartela + '-n-' + value).removeClass('bg-light');
        $('#c-' + numeroCartela + '-n-' + value).addClass('bg-info');
    });
}

function gerarCartelas() {
    for (var i = 1; i <= 6; i++) {
        $('#sort' + (i)).html("");
        $('#sort' + (i)).html("00");
    }

    $('#apostas').html("");
    var totalCartelas = $('#numeroApostas').val();

    var urlAposta = "view/apostar.php?totalNumeros=6&totalApostas=" + totalCartelas;

    $.getJSON(urlAposta).done(function (data) {
        $.each(data, function (i, field) {
            carregaCartela(i + 1, field);
        });
    });
}

function sortearNumero() {
    $('body').find('.bg-sorteio-escolha').removeClass('bg-sorteio-escolha').addClass('bg-info');
    $('body').find('.bg-sorteio').removeClass('bg-sorteio').addClass('bg-light');

    var urlSorteio = "view/sortear.php?totalNumeros=6";
    var cartelas = $('.cartelas').length;

    $.getJSON(urlSorteio).done(function (data) {
        $.each(data, function (i, field) {
            $('#sort' + (i + 1)).html("");
            $('#sort' + (i + 1)).html(field);

            for (var n = 1; n <= cartelas; n++) {
                $('#c-' + n + '-n-' + field).removeClass('bg-light');

                if ($('#c-' + n + '-n-' + field).hasClass("bg-info")) {
                    $('#c-' + n + '-n-' + field).removeClass('bg-info');
                    $('#c-' + n + '-n-' + field).addClass('bg-sorteio-escolha');
                    continue;
                }

                $('#c-' + n + '-n-' + field).addClass('bg-sorteio');
            }
        });
    });
}