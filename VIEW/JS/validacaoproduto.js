
function validarNome() {
    const input = document.getElementById('username');
    const erro = document.getElementById('mensagemErro');
    
    if (input.value.length < 3) {
        erro.textContent = 'Nome muito curto!';
        input.style.borderColor = 'red';
    } else {
        erro.textContent = '';
        input.style.borderColor = 'green';
    }
}
