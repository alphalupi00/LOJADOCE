$(document).ready(function() {
    $("#formCompra").validate({
        messages: {
            idcliente: {
                required: "Busque e selecione um cliente cadastrado."
            },
            idfuncionario: {
                required: "Busque e selecione o funcionário responsável."
            },
            datavenda: {
                required: "A data da venda é obrigatória."
            }
        }
    });
});