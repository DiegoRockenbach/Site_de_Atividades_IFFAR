<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Exercícios de Repetição - Questão 1</h1>
      <h5 class="titulo_quest">1. Criar um script em PHP capaz de verificar se um número lido (GET) é primo ou não. Caso seja primo, mostrar a informação em um alert-success do bootstrap e caso contrário, o resultado a ser exibido deverá ser em uma alert-warning.</h5>
    </div>
    <div class="col-lg-4 col-sm-12">
      <form method="POST">
        <label for="input_num">Número</label>
        <input class="form-control" placeholder="11" type="number" name="numero" id="input_num">
        <button class="botao_env btn btn-dark" type="submit" name="enviar">Enviar</button>
      </form>
      <?php
        if (isset($_POST["enviar"])){
          $num = $_POST["numero"];
          $divisores = 0;
          for ($count=2; $count<$num; $count++)
            if ($num % $count == 0) {
              $divisores++;
            }
          if ($divisores > 1) {
            echo "<div class= 'alert alert-warning'>O número $num não é primo!</div>";
          }
          else {
            echo "<div class= 'alert alert-success'>O número $num é primo!</div>";
          }
        }
      ?>
    </div>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <img src="./assets/img/a2q1.png" class= "img-fluid rounded">
    </div>
  </div>
</div>