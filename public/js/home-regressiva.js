// Definino a data para o countdown
var dataDaRegressiva = new Date("Oct 2, 2020 23:59:59").getTime();

function executaRegressiva() {
  // Pega a data e a hora do dia de hoje
  var agora = new Date().getTime();
    
  // Encontra a diferença entre a data de hoje e a data do countdown
  var diferenca = dataDaRegressiva - agora;
    
  // Transformando a diferença em dias, horas, minutos e segundos 
  var dias = Math.floor(diferenca / (1000 * 60 * 60 * 24));
  var horas = Math.floor((diferenca % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutos = Math.floor((diferenca % (1000 * 60 * 60)) / (1000 * 60));
  var segundos = Math.floor((diferenca % (1000 * 60)) / 1000);
    
  // Inserindo o resultado (dias, horas, minutos e segundos) no elemento (id="contador")
  document.getElementById("contador").innerHTML = dias + "d " + horas + "h "
  + minutos + "m " + segundos + "s ";
    
  // Quando o tempo de inscrições acaba, aparece "Inscrições encerradas" no elemento
  if (diferenca < 0) {
    clearInterval(x);
    document.getElementById("contador").innerHTML = "Inscrições Encerradas!";
  }
}
executaRegressiva();
// Atualiza a contagem regressiva a cada 1 segundo
var x = setInterval(executaRegressiva, 1000);