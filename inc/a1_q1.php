<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Exercícios IF-Else - Questão 1</h1>
      <h5 class="titulo_quest">1. Entrar com um número e informar se ele é divisível por 3, por 5, por 10 ou se não é divisível por nenhum destes.</h5>
    </div>
    <div class="col-lg-4 col-sm-12">
      <form method="POST">
        <label for="input_num">Número</label>
        <input class="form-control" placeholder="30" type="number" name="numero" id="input_num">
        <button class="botao_env btn btn-dark" type="submit" name="enviar">Enviar</button>
      </form>
      <?php
        if (isset($_POST["enviar"])){
          $num = $_POST["numero"];
          $d3 = $num % 3;
          $d5 = $num % 5;
          $d10 = $num % 10;
          if (($d3 == 0) && ($d5 == 0) && ($d10 == 0)){
            echo "<div class='alert alert-success'>O número $num é divísivel por 3, 5, e 10</div>";
          }
          else {
            echo "<div class='alert alert-danger'>O número $num não é divísivel por 3, 5, e 10</div>";
          }
        }
      ?>
    </div>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <img src="./assets/img/a1q1.png" class= "img-fluid rounded">
    </div>
  </div>
</div>