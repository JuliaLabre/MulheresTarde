<!-- Cabeçalho -->
<?php
require 'includes/header.php'
?>

<!-- Conteudo -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Nossa Academia</h1>
    <p class="lead">Nossa Academia conta com uma área extensa e pensada no seu conforto, além da musculação você pode 
      fazer diversas atividades para manter sua saúde sempre em dia!
</p>
  </div>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagens/academia3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/academia2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/academia1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próxima</span>
  </a>
</div>

<h2 class='text-center'>Nossas atividades</h2>

<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Pilates
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      O pilates é um método de treinamento que pode ser realizado por pessoas de todas as idades e 
      que pode trazer diversos benefícios para a saúde, como melhora da coordenação motora, aumento da 
      flexibilidade e mobilidade, melhora do equilíbrio e da postura e da capacidade cardiorrespiratória.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Spinning
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
Os principais benefícios do spinning para quem pratica são: trabalhar todo o condicionamento físico e 
muscular, principalmente das pernas e glúteos; ajudar a tonificar as veias e melhorar os movimentos, 
o que contribui para a redução da pressão arterial, diminuindo os riscos de doenças cardíacas;
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Hidroginástica
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      A hidroginástica melhora a força muscular, resistência, flexibilidade e equilíbrio. Comparada a 
      exercícios terrestres, reduz o impacto sobre articulações e apresenta menor risco de lesões. 
      Bom, né? Por tudo isso, a prática é recomendada para melhorar a capacidade motora funcional e 
      independência da população idosa.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
         Jump
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
      Muitas pessoas procuram o Jump para fortalecer as pernas e os glúteos, mas, mais do que essas regiões,
       ele trabalha muito bem a região do abdômen, e muitos dos exercícios são localizados para cuidar também
        dos músculos das costas e dos braços.
      </div>
    </div>
  </div>
</div>
 
<!-- Footer -->
<?php
require 'includes/footer.php'
?>