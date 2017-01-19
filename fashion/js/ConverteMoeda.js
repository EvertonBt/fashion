var numero = 9.9;
var formatado = numero.toFixed(2);
formatado = "R$" + formatado;
formatado = formatado.replace(".", ",");
console.log(formatado);
/* Outra forma usando apenas uma linha 
var numero = 9.9;
var formatado = "R$ " + numero.toFixed(2).replace(".", ",");
*/
var nome = "R$ 9,90";
var valor = nome.replace("R$ ","");
valor = valor.replace(",", ".");
valor = parseFloat(valor);
console.log(valor);

var nome = "R$ 9,90";
var valor = nome.parseFloat().replace("R$ ", "").replace(",",".");
console.log(valor);

/* usando na forma de funções */

function numberParaReal(numero) {
  var formatado =  "R$ " + numero.toFixed(2).replace(".", ",");
  return formatado;
}

function realParaNumber(texto) {
  var compativelComParseFloat = texto.replace("R$ ", "");
  compativelComParseFloat = compativelComParseFloat.replace(",", ".");
  var valor = parseFloat(compativelComParseFloat);
  return valor;
}
