$(document).ready(function() {
    $("#formFuncionario").validate({

        messages: {
            nome: {
                required: "Informe o nome do funcionário.",
                minlength: "O nome deve ter pelo menos 2 letras.",
                maxlength: "O nome não pode passar de 40 letras."
            },
            numero: {
                required: "O telefone do funcionário é obrigatório.",
                minlength: "O telefone deve ter pelo menos 10 dígitos (com DDD).",
                maxlength: "O telefone não deve passar de 11 dígitos."
            },
            email: {
                required: "O e-mail do funcionário é obrigatório.",
                email: "Insira um endereço de e-mail válido (ex: nome@email.com)."
            },
            senha: {
                required: "A senha de acesso é obrigatória.",
                minlength: "A senha de segurança deve conter pelo menos 6 caracteres."
            }
        }
    });
});