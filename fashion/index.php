<?php
$estilo = '<link rel="stylesheet" href="css/estilos.css" type="text/css">  <link rel="stylesheet" href="css/mobile.css"   media="(max-width: 939px)"> <link href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script" 
  rel="stylesheet">  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Jomhuria" rel="stylesheet">'; 
include "cabecalho.php";
?>
  
 
 <div class="container destaque">

  <section class="busca">
    <h2>Busca</h2>

    <form>
      <input type="search">
      <input type="image" src="img/busca.png">
    </form>
  </section><!-- fim .busca -->

  <section class="menu-departamentos">
    <h2>Departamentos</h2>

    <nav>
      <ul>
        <li>
		    <a href="#">Blusas e Camisas</a>
			<ul>
				<li><a href="#">Manga curta</a></li>
				<li><a href="#">Manga comprida</a></li>
				<li><a href="#">Camisa social</a></li>
				<li><a href="#">Camisa casual</a></li>
	       </ul>
		</li>
		
		<li><a href="#">Calças</a></li>
        <li><a href="#">Saias</a></li>
        <li><a href="#">Vestidos</a></li>
        <li><a href="#">Sapatos</a></li>
        <li><a href="#">Bolsas e Carteiras</a></li>
        <li><a href="#">Acessórios</a></li>
      </ul>
    </nav>
  </section><!-- fim .menu-departamentos -->

  <img src="img/destaque-home.png" alt="Promoção: Big City Night">
   <a href="#" class="pause">   </a> 
  </div><!-- fim .container .destaque -->
 
 
  <div class="container paineis">
  <!-- os paineis de novidades e mais vendidos entrarão aqui dentro -->

  
  <section class="painel novidades">
    <h2>Novidades</h2>
    <ol>

      <!-- primeiro produto -->
      <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura1.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>

	        <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura2.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
	  
	  
	        <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura3.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
	  
	  
	        <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura4.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>

	        <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura5.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
	  
	        <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura6.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
     
    </ol>
	<button type="button">Mostra mais</button>
  </section>
  
  <section class="painel mais-vendidos">
  <h2>Mais Vendidos</h2>
  <ol>

   <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura7.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>

	   <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura8.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
	  
	 <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura9.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>

     <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura10.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
	  
	  
	 <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura11.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
  
     <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/miniatura6.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>
  
  
  </ol>
  
  <button type="button">Mostra mais</button>
</section>
  
  </div> <!-- Fim da div paineis -->
 
     <!-- <h1> <del> Olá, sou o index.html! </del> </h1> -->
  <script src="js/jquery.js"></script>
  <script src="js/home.js"></script>
  <script src="js/TrocaBanner.js"> </script> <!-- Arquivo de script para realizar um banner rotativo -->
  </body>
</html>