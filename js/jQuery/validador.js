$().ready(function() {

   // Atribuindo a função validate para o formulário form-contato
    $('#formCadastraPipeiro').validate({
        
        // Função que determinada as regras de validação do formulário
         rules:{

            // Pegando o campo CPF para inserir regras de validação
            inputCpf: {
                // o required faz com que o preenchimento do campo sejá obrigatório
                required : true,
                // o cpf faz com que o cpf digitado seja um cpf valido
                cpf      : 'both'
            },
            // Pegando o campo CNPJ para inserir regras de validação
            inputNome: {
                // o required faz com que o preenchimento do campo sejá obrigatório e define um tamanho minimo para o nome
                required : true, minlength: 5
            },
            
        },

        // Atribuindo mensagens personalizadas para as validações
        messages:{
            
            // Seleciona as mensagens do campo CPF
            inputCpf: {
                // Atribui uma mensagem padrão para o required do CPF
                required : "O CPF é obrigatório.",
                // Atribui uma mensagem padrão para a função CPF do campo CPF
                cpf      : "O CPF digitado é invalido"
            },

            // Seleciona as mensagens do campo CNPJ
            inputNome: {
                // Atribui uma mensagem padrão para o required do CNPJ
                required : "O nome é obrigatório.", minlength : "O seu nome deve conter no minimo 5 caracteres"
            },

        } 

    });

});

$().ready(function() {
    $('#formDeclaracao').validate({
         rules:{
            inputCpf: {
                required : true,cpf      : 'both'
            },
            inputNome: {
                required : true, minlength: 5
            },
            inputValidadeCnh: {
                required: true, date: true
            },
        },
        messages:{
            inputCpf: {
                required : "O CPF é obrigatório.", cpf      : "O CPF digitado é invalido"
            },
            inputNome: {
                required : "O nome é obrigatório.", minlength : "O seu nome deve conter no minimo 5 caracteres"
            },
            inputValidadeCnh: {
                required : "Data obrigatoria", date : "Data inválida"
            },
        } 
    });
});

$().ready(function() {
    $('#formCadastrarOM').validate({
         rules:{
            inputNomeOM: {
                required : true, minlength: 5
            },
            inputCnpj: {
                required : true,cnpj      : 'both'
            },
            inputLocal: {
                required: true, minlength: 5
            },
        },
        messages:{
            inputNomeOM: {
                required : "O nome da OM é obrigatorio.", minlength : "O seu nome deve conter no minimo 5 caracteres"
            },
            inputCnpj: {
                required : "O CNPJ é obrigatório.", cpf : "O CPF digitado é invalido"
            },
            inputLocal:{
                required : "Coloque o nome do local da OM", minlength : "O nome do local deve conter mais de 5 caracteres"
            },
        } 
    });
});


$().ready(function() {
    $('#formBuscaPipeiro').validate({
         rules:{
            inputCpf: {
                required : true, cpf      : 'both'
            },
            inputValor: {
                required : true
            },
            selectMes: {
                required: true
            },
        },
        messages:{
            inputCpf: {
                required : "O Cpf é obrigatório", cpf : "O CPF digitado é inválido"
            },
            inputValor: {
                required : "Digite o valor dos serviços prestados"
            },
            selectMes:{
                required : "O mês é obrigatório"
            },
        } 
    });
});