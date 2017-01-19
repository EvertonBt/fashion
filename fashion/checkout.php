<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Checkout Mirror Fashion</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <meta name="viewport" content="width=device-width">
<!-- Fazer o meunu se juntar com o título jumbron removendo a margin-->
<!-- e mudar a cor do ícone do sanduíche que abre o menu ao clicar --> 
 <style>

.navbar {
  margin: 0;
}

.navbar .glyphicon {
  color: yellow;
}
</style>
  
  </head>
<body>
 <!-- Personalizando as mensagens de validação usando java script -->
 <script>
 document.querySelector('input[type=email]').oninvalid = function() {

  // remove mensagens de erro antigas
  this.setCustomValidity("");

  // reexecuta validação
  if (!this.validity.valid) {

    // se inválido, coloca mensagem de erro
    this.setCustomValidity("Email inválido");
  }
};
 </script>
 
 <nav class="navbar navbar-default navbar-static-top"> <!-- Em vez de navbar-default pode usar navbar-inverse (deixa o menu preto) e pode usar no lugar 
 do navbar-static-top o navbar-fixed-top que mantém o menu fixo na tela e depois aplica um paddind de 70px no body para o conteúdo não subir-->
  <div class="navbar-header">
    <a class="navbar-brand" href="index.php">Mirror Fashion</a> <!-- em vez de um texto no link você pode usar uma imagem -->
    <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse"> <!-- esse botão ativa o menu ao clicar (é preciso carregar os arquivos de javascript da pasta do bootstrap)-->
  <span class="glyphicon glyphicon-align-justify"></span>
</button>
  
  </div>
  <ul class="nav navbar-nav collapse navbar-collapse"> <!-- o collapse e navbar-collpse ocultam o menu em resoluções pequenas, é precios configurar um button para ativar o meunu ao clicar -->
    <li><a href="sobre.php">Sobre</a></li>
    <li><a href="#">Ajuda</a></li>
    <li><a href="#">Perguntas frequentes</a></li>
    <li><a href="#">Entre em contato</a></li>
  </ul>
</nav>
 
 <div class="jumbotron">
 <div class="container">
  <h1>Ótima escolha!</h1>
  <p>Obrigado por comprar na Mirror Fashion!
  Preencha seus dados para efetivar a compra.</p>
 </div> <!-- fim do container-->
  </div> <!-- fim do jumbotron -->
 
 <div class="container"> <!-- centraliza a página -->
 <div class="row">
 
 <div class="col-sm-4 col-lg-3">
 <div class="panel panel-success"> <!-- cria uma painel, no lugar do panel-sucess, pode usar panel-default, é um efeito diferente -->
  
  <div class="panel-heading">
    <h2 class="panel-title">Sua compra</h2>
  </div><!-- fim .panel-heading -->
  
  <div class="panel-body">
<img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" 
   class="img-thumbnail img-responsive hidden-xs" > <!-- o thumball adiciona uma borda na imagem, o responsive impede que a imagem ultrapasse o tamanho do pai,
   e o hidden-xs esconde a imagem em resoluções pequenas (abaixo de 768) --> 
 
	<dl>
  
  <dt>Produto</dt>
  <dd><?= $_POST['nome'] ?></dd>
  
  <dt>Preço</dt>
  <dd id="preco"><?= $_POST['preco'] ?></dd>
  
  <dt>Cor</dt>
  <dd><?= $_POST['cor'] ?></dd>

  <dt>Tamanho</dt>
  <dd><?= $_POST['tamanho'] ?></dd>

  </dl>

   <div class="form-group">
    <label for="qt">Quantidade</label>
    <input id="qt" class="form-control" type="number" min="0" max="99"
      value="1">
  </div>
  
  <div class="form-group">
    <label for="total">Total</label>
    <output for="qt valor" id="total" class="form-control">
      <?= $_POST["preco"] ?>
    </output>
  </div>
  
  </div><!-- fim .panel-body -->

  </div><!-- fim .panel -->
  </div> <!-- fim do grid de 4 colunas aplicado ao painel -->
  <!-- Formulario para receber os dados de pagamento -->
  
  
  <form class="col-sm-8 col-lg-9"> <!-- para desabilitar as mensagens de validação do html 5 basta colocar novalidate na tag form -->
  
  <div class="row">
  <fieldset class="col-md-6">
    <legend>Dados pessoais</legend>
     <div class="form-group">
    <label for="nome">Nome completo</label>
    <input type="text" class="form-control" id="nome" name="nome" autofocus required>
  </div>

  <div class="form-group">
    <label for="email">Email</label>

	<div class="input-group">
      <span class="input-group-addon"> @</span>
      <input type="email" class="form-control"
             id="email" name="email" placeholder="email@example.com">
  </div>
  </div>

  <div class="form-group">
    <label for="cpf">CPF</label>
    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00"  required>
  </div>

  <div class="checkbox">
    <label>
      <input type="checkbox" value="sim" name="spam" checked>
      Quero receber spam da Mirror Fashion
    </label>
  </div>
  </fieldset>

   <fieldset class="col-md-6">
  <legend>Cartão de crédito</legend>

  <div class="form-group">
    <label for="numero-cartao">Número - CVV</label>
    <input type="text" class="form-control" 
           id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
  </div>

  <div class="form-group">
    <label for="bandeira-cartao">Bandeira</label>
    <select name="bandeira-cartao" id="bandeira-cartao"
        class="form-control">
      <option value="master">MasterCard</option>
      <option value="visa">VISA</option>
      <option value="amex">American Express</option>
    </select>
  </div>

  <div class="form-group">
    <label for="validade-cartao">Validade</label>
    <input type="month" class="form-control" 
           id="validade-cartao" name="validade-cartao">
  </div>
</fieldset>
   
   
   
  <button type="submit" class="btn btn-primary pull-right btn-lg"> <!-- cria um botao personalizado btn-lg aumenta o tamanho e o pull-right alinha à direita -->
  <span class="glyphicon glyphicon-thumbs-up"></span>  
  Confirmar Pedido
  </button>
</form>
  </div> <!-- fim do grid row -->
  </div> <!--fim da outra div container -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
<script>
jQuery(function($){
   $("#cpf").mask("999.999.999-99" ,{placeholder:"xxx.xxx.xxx-xx"});
   $("#phone").mask("(999) 999-9999");
   $("#tin").mask("99-9999999");
   $("#ssn").mask("999-99-9999");
});
</script>
<script src="js/inputmask-plugin.js"></script> <!-- plugin de adciona a funcionalidade de máscaras para campos dos inputs, basta usar em seguida o data-mask="formato" 
Não funcionou, por isso usei o de cima-->
<script src="js/ConverteMoeda.js"> </script>
<script src="js/TestaConversao.js"> </script>
<script src="js/total.js"> </script>
</body>
</html>
