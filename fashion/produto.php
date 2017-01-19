<?php
$estilo = '<link rel="stylesheet" href="css/produto.css"> <link rel="stylesheet" href="css/estilos.css" type="text/css"> <link rel="stylesheet" href="css/mobile.css"   media="(max-width: 939px)">';
include "cabecalho.php";

?>
<div class="produto-back>
<div class="container">
<div class="produto">
  <h1>Fuzzy Cardigan</h1>
  <p>por apenas R$ 129,00</p>

  <form name="formulario" action="checkout.php" method="POST">
      <fieldset class="cores">
          <legend>Escolha a cor:</legend>
          <input type="radio" name="cor" value="verde" id="verde" checked>
          <label for="verde">
            <img src="img/produtos/foto2-verde.png" alt="verde">
          </label>
          
          <input type="radio" name="cor" value="rosa" id="rosa">
          <label for="rosa">
            <img src="img/produtos/foto2-rosa.png" alt="rosa">
          </label>
          
          <input type="radio" name="cor" value="azul" id="azul">
          <label for="azul">
            <img src="img/produtos/foto2-azul.png" alt="azul">
          </label>
          
      </fieldset>

	   <fieldset class="tamanho">
	   <legend> Escolha o seu Tamanho: </legend>
	  <input type="range" min="36" max="46" value="42" step="2"  name="tamanho" id="tamanho">
	  <output for="tamanho" name="valortamanho">42</output>
	  </fieldset>
	  
	   <input type="hidden" name="id" value="2">
	  <input type="hidden" name="nome" value="Fuzzy Cardigan">
      <input type="hidden" name="preco" value="129.00">
     
   <!-- Adicionando botões do facebook -->
	 <div class="fb-like" data-href="http://www.mirrorfashion.net"
data-send="false" data-layout="box_count"
data-width="58" data-show-faces="false"></div>     
	 <!-- Adicionando botões do twitter -->
	<a href="https://twitter.com/share"
  class="twitter-share-button" data-count="vertical">Tweet</a>
  
    <!-- Adicionando botões do google+ -->
  
  <div class="g-plusone" data-annotation="inline"></div>
  
  
	<input type="submit" class="comprar" value="Comprar">
  </form>
</div>
<div class="detalhes">  

<h2> Detalhes do Produto </h2>
<p>
Esse é o melhor casaco de Cardigã que você já viu. Excelente 
    material italiano com estampa desenhada pelos artesãos da 
    comunidade de Krotor nas ilhas gregas. Compre já e receba hoje 
    mesmo pela nossa entrega a jato.

</p>
<table>
  <thead>
    <tr>
      <th>Característica</th>
      <th>Detalhe</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Modelo</td>
      <td>Cardigã 7845</td>
    </tr>
    <tr>
      <td>Material</td>
      <td>Algodão e poliester</td>
    </tr>
    <tr>
      <td>Cores</td>
      <td>Azul, Rosa e Verde</td>
    </tr>
    <tr>
      <td>Lavagem</td>
      <td>Lavar a mão</td>
    </tr>
  </tbody>
</table>


<p>



</p>



</div>
</div>
<?php
include "rodape.php";

?>

<script src="js/jquery.js"></script>
<script>
$('[name=tamanho]').on('input', function(){
  $('[name=valortamanho]').val(this.value);
  $('[name=valortamanho]').text(this.value); // esse é opcional, para manter a compatibilidade com o IE10
  });
</script>


<script src="js/bootstrap.js"></script>
<script src="js/ConverteMoeda.js"> </script>
<script src="js/TestaConversao.js"> </script>
<script src="js/total.js"> </script>
<div id="fb-root"></div>
<!-- script para acionar o botão do facebook -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- script para acionar o link do twitter -->

<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
js.src="http://platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>


<!-- script para acionar o botão do google + -->

<script type="text/javascript">
  window.___gcfg = {lang: 'pt-BR'};

  (function() {
    var po = document.createElement('script');
    po.type = 'text/javascript';
    po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(po, s);
  })();
</script>

</body>

</html>