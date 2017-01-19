/* Adicionando classes automaticamente à uma tag para fazer o botão ser carregado e ao ser clicado sumir */
$('.novidades').addClass('painel-compacto');
$('.novidades button').click(function() {
  $('.novidades').removeClass('painel-compacto');
});

$('.mais-vendidos').addClass('painel-compacto');
$('.mais-vendidos button').click(function(){
	$('.mais-vendidos').removeClass('painel-compacto');
	
	
});