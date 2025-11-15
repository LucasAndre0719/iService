// O código JavaScript vai aqui
function exibirAlerta() {
    alert("Este alerta veio de um arquivo JS externo!");
}

document.addEventListener('DOMContentLoaded', () => {
    // Adiciona um evento ao botão quando o HTML estiver totalmente carregado
    const botao = document.getElementById('meuBotao');
    if (botao) {
        botao.addEventListener('click', exibirAlerta);
    }
});