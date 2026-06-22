$(document).ready(function() {
    $("#formCliente").validate({

        messages: {
            nome: {
                required: "Por favor, informe o nome do cliente.",
                minlength: "O nome do cliente deve ter pelo menos 2 letras.",
                maxlength: "O nome do cliente deve ter no máximo 40 letras."
            },
            cpf: {
                required: "o CPF do cliente é obrigatório.",
                minlength: "O CPF deve conter pelo menos 11 dígitos.",
                maxlength:"O CPF deve conter pelo menos 14 dígitos."
            },
            numero: {
                required: "O numero de telefone é obrigatório.",
                minlength: "Digite um telefone válido com DDD (mínimo 10 dígitos).",
                maxlength: "Digite um telefone válido com DDD (máximo 15 dígitos)."
            },
        }
    });
});