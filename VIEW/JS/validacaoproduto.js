$(document).ready(function() {
    $("#formProduto").validate({

        messages: {
            descricao: {
                required: "Por favor, informe o nome do produto.",
                minlength: "O nome do produto deve ter pelo menos 2 letras.",
                maxlength: "O nome do produto deve ter no máximo 50 letras."
            },
            preco: {
                required: "O preço do produto é obrigatório.",
                min: "O preço deve ser maior ou igual a 0,01."
            },
            qtdestoque: {
                required: "Informe a quantidade em estoque.",
                min: "A quantidade em estoque deve ser pelo menos 1."
            },
            qtdminima: {
                required: "A quantidade mínima é obrigatória.",
                min: "A quantidade mínima deve ser pelo menos 1."
            },
            qtdmaxima: {
                required: "A quantidade máxima é obrigatória.",
                min: "A quantidade máxima deve ser pelo menos 1."
            }
        }
    });
});