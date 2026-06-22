$(document).ready(function() {
    $("#formFornecedor").validate({

        messages: {
            descricao: {
                required: "Por favor, informe o nome do fornecedor.",
                minlength: "O nome do fornecedor deve ter pelo menos 2 letras.",
                maxlength: "O nome do fornecedor deve ter no máximo 40 letras."
            },
            cnpj: {
                required: "O CNPJ do fornecedor é obrigatório.",
                minlength: "Este CNPJ é inválido.",
            },
        }
    });
});