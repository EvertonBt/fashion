// Calculando o preço da quantidade de produtos de acordo com a variação do number
var $input_quantidade = document.querySelector("#qt");
var $output_total = document.querySelector("#total");

$input_quantidade.oninput = calculaEMostraTotal;

function calculaEMostraTotal(){

  var quantidade = $input_quantidade.value;

  var valorUnitarioTexto = document.querySelector("#preco").textContent;
  var valorUnitarioNumero = realParaNumber(valorUnitarioTexto);

  var total = numberParaReal(quantidade * valorUnitarioNumero);
  $output_total.value = total;
}

// Mudando o valor do output de acordo com o deslizar do range
