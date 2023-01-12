<!-- Cabeçalho -->
<?php
require '../includes/header.php'
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

 <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center">
        <img src="../imagens/academia3.jpg" class="img-fluid">
      </div>
    </div>
  </div>
<h2 class='text-center'>Nossas atividades</h2>
<div class="card-columns">
  <div class="card">
    <img class="card-img-top" src="" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Pilates</h5>
      <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior.</p>
    </div>
  </div>
  <div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Alguém famoso em <cite title="Título da fonte">Título da fonte</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <img class="card-img-top" src=".../100px160/" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Título do card</h5>
      <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
      <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
    </div>
  </div>
  <div class="card bg-primary text-white text-center p-3">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
      <footer class="blockquote-footer">
        <small>
          Alguém famoso em <cite title="Título da fonte">Título da fonte</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Título do card</h5>
      <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
      <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img" src=".../100px260/" alt="Imagem do card">
  </div>
  <div class="card p-3 text-right">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Alguém famoso em <cite title="Título da fonte">Título da fonte</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Título do card</h5>
      <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
      <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
    </div>
  </div>
</div>






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
require '../includes/footer.php'
?>