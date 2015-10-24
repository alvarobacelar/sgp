

// ajax de pesquisa
$(document).ready(function() { // iniciando a função jQuery
    $("#NaopesquisaPipeiro").click(function() {
        $.ajax({
            url: "pipeirosCadastrados.php", // pagina que irá aparecer
            type: 'GET', // metodo de recebimento: GET ou POST 
            success: function(data) {
                $("#ajax").html(data);
            },
            error: function() { // se der erro mostrará uma mensagem
                $("#ajax").html("Nada Encontrado");
            },
            beforeSend: function() { // antes de mostrar a requisição mostra uma mensagem
                $("#ajax").html("<p class='lead'> Pesquisando .....</p>");
            }
        });
    });
});

// ajax de pesquisa de carro
$(document).ready(function() { // iniciando a função jQuery
    $("#pesquisaCarro").click(function() {
        $.ajax({
            url: "veiculosCadastrados.php", // pagina que irá aparecer
            type: 'GET', // metodo de recebimento: GET ou POST 
            success: function(data) {
                $("#ajaxCarro").html(data);
            },
            error: function() { // se der erro mostrará uma mensagem
                $("#ajax").html("Nada Encontrado");
            },
            beforeSend: function() { // antes de mostrar a requisição mostra uma mensagem
                $("#ajax").html("<p class='lead'> Pesquisando carro .....</p>");
            }
        });
    });
});

// ajax de pesquisa de carro
$(document).ready(function() { // iniciando a função jQuery
    $("#pesquisaVeiculo").click(function() {
        $.ajax({
            url: "mudarCarro.php", // pagina que irá aparecer
            type: 'GET', // metodo de recebimento: GET ou POST 
            success: function(data) {
                $("#ajaxMudaCarro").html(data);
            },
            error: function() { // se der erro mostrará uma mensagem
                $("#ajaxMudaCarro").html("Nada Encontrado");
            },
            beforeSend: function() { // antes de mostrar a requisição mostra uma mensagem
                $("#ajaxMudaCarro").html("<p class='lead'> Aguarde .....</p>");
            }
        });
    });
});