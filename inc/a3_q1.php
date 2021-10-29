<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Exercícios de Arrays - Questão 1</h1>
      <h5 class="titulo_quest">1. Faça um script em php que sorteie 15 dezenas para um jogo da Loteria (intervalo de 1 a 25) e armazene em um array. Exiba as dezenas sorteadas em ordem crescente e não permita que se repitam. Cada dezena sorteada deve ser exibida dento de uma div de 100px X 100px, com cantos arredondados com cor a escolher. As divs devem flutuar à esquerda e ter um espaçamento de 5px entre elas.</h5>
    </div>
      <div class="col-lg-12 col-sm-12">
        <?php
          $array25 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25];
          $random_keys=array_rand($array25, 15);
          foreach ($random_keys as $i){
            echo "<div class=dezloto><span>$array25[$i]</span></div>";
          }
        ?>
      </div>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <img src="./assets/img/a3q1.png" class= "img-fluid rounded">
    </div>
  </div>
</div>