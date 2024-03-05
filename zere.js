function exibirLembrete(mensagem) {
    alert("Lembrete: " + mensagem);
}

function agendarLembrete() {
    const dataSelecionada = document.getElementById("dataInput").value;
    const horaSelecionada = document.getElementById("horaInput").value;
    const mensagemLembrete = document.getElementById("mensagemInput").value;
if(dataSelecionada =="", horaSelecionada == "", mensagemLembrete == "" ){
    var botao = document.getElementById("but")
    botao =  event.preventDefault();
}
    if (!mensagemLembrete.trim()) {
        var avisar = document.getElementById("aviso")
        avisar.innerHTML = "Por favor, insira o nome da mensagem do lembrete!";
        return;
    }

    // Concatenar data e hora no formato desejado
    const dataHoraString = dataSelecionada + " " + horaSelecionada;

    // Criar um objeto de data a partir da string
    const dataHora = new Date(dataHoraString);

    // Obter a diferença em milissegundos entre a data atual e a data e hora selecionadas
    const diferencaTempo = dataHora.getTime() - new Date().getTime();

    if (diferencaTempo > 0) {
        setTimeout(function() {
            exibirLembrete(mensagemLembrete);
        }, diferencaTempo);
    } else {
        botao =  event.preventDefault();
        var avisar = document.getElementById("aviso")
        avisar.innerHTML = "Por favor, selecione uma data e hora futuras para o lembrete.";
    }
}