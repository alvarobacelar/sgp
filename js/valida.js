

// faz verificacao das senhas
function verificaSenha() {
    var senha = document.cadastrar.inputSenha.value;
    var senha2 = document.cadastrar.inputSenha2.value;
    if (senha != senha2) {
        document.getElementById('erro-senha').innerHTML = "As senhas não correspondem";
        return false;
    } else
    if (senha == senha2) {
        document.getElementById('erro-senha').innerHTML = "";
        return true;
    }

}

function excluirUsuario(id) {

    var excluir = confirm("Deseja realmente excluir este Usuário?");

    if (excluir) {
        location.href = "includes/controllers/excluirUsuario.php?idExcluirUsuario=" + id;
    }
}

function excluirCidade(id) {

    var excluir = confirm("Deseja realmente excluir esta CIDADE?");

    if (excluir) {
        location.href = "includes/controllers/excluirCidade.php?idExcluirCidade=" + id;
    }
}

function excluirCarro(id) {

    var excluir = confirm("Deseja realmente excluir esse VEÍCULO??");

    if (excluir) {
        location.href = "includes/controllers/excluirCarro.php?idExcluirCarro=" + id;
    }
}

function excluirPipeiro(id) {

    var excluir = confirm("Deseja realmente excluir esse PIPEIRO??");

    if (excluir) {
        location.href = "includes/controllers/excluirPipeiro.php?id=" + id;
    }
}

function excluirRPS(id) {

    var excluir = confirm("Deseja realmente excluir essa RPS??");

    if (excluir) {
        location.href = "includes/controllers/excluirRPS.php?idExcluirRPS=" + id;
    }
}

function restaurarRPS(id) {

    var excluir = confirm("Deseja realmente RESTAURAR essa RPS??");

    if (excluir) {
        location.href = "includes/controllers/restaurarRPS.php?idExcluirRPS=" + id;
    }
}

function desativarPipeiro(id, idCidade) {

    var excluir = confirm("Deseja realmente desativar PIPEIRO para esta cidade??");

    if (excluir) {
        location.href = "includes/controllers/desativarPipeiro.php?id=" + id + "&idCidade=" + idCidade;
    }
}


function desativarCidade(id) {

    var excluir = confirm("TEM CERTEZA QUE DESEJA DESATIVAR ESTA CIDADE?");

    if (excluir) {
        location.href = "includes/controllers/desativarCidade.php?idDesativarCidade=" + id;
    }
}

function ativarCidade(id) {

    var excluir = confirm("DESEJA REALMENTE ATIVAR ESTA CIDADE?");

    if (excluir) {
        location.href = "includes/controllers/ativarCidade.php?idAtivarCidade=" + id;
    }
}

$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

$('#exemplo').popover(options);

function imprimeRPS() {

    var excluir = confirm("Tem certeza que deseja Imprimir essa RPS? <br>Caso queira excluir, fale com o Oficial da prestação de conta.");

    if (!excluir) {
        
    }
}