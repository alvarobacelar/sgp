
$(function() {
    $("#inputPlaca").mask("***-9999");
    $("#dataDeclaracao").mask("99/99/9999");
    $("#inputAnoFabricacao").mask("9999");
    $("#inputAnoLicenciamento").mask("9999");
    $("#inputCpf").mask("999.999.999-99");
    $("#buscaContrato").mask("999.999.999-99");
    $("#cpfMilitar").mask("999.999.999-99");
    $("#inputCpfCmt").mask("999.999.999-99");
    $("#inputValidadeCnh").mask("99/99/9999");
    $("#dataInicio").mask("99/99/9999");
    $("#inputDataInicio").mask("99/99/9999");
    $("#inputDataFim").mask("99/99/9999");
    $("#dataFim").mask("99/99/9999");
    $("#inputCep").mask("99.999-999");
    $("#inputTelefone").mask("(99) 9999-9999");
    $("#inputNit").mask("9.999.999.999-9");
    $("#inputCnpj").mask("99.999.999/9999-99");
    $("#inputValor").maskMoney({showSymbol:false,symbol:"R$", decimal:".", thousands:"", allowZero:true});
});
