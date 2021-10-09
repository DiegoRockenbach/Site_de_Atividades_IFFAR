<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Exercícios de Repetição - Questão 2</h1>
      <h5 class="titulo_quest">2. Elabore um programa em PHP que permita mostrar os números entre o intervalo do número digitado pelo usuário até o cubo desse número.</h5>
    </div>
    <div class="col-lg-4 col-sm-12">
      <form method="POST">
        <label for="input_num">Número</label>
        <input class="form-control" placeholder="5" type="number" name="numero" id="input_num">
        <button class="botao_env btn btn-dark" type="submit" name="enviar">Enviar</button>
      </form>
      <?php
        if (isset($_POST["enviar"])){
          $num = $_POST["numero"];
          $expo = 3;
          $num3 = pow($num, $expo);
          $inter = "";
          for ($count=$num+1; $count<$num3; $count++){
            if ($num < $num3) {
              $inter = $inter . $count . "; ";
            }
          }
          echo "Os números presentes no intervalo entre $num e seu cubo ($num3) são os seguintes: <br> $inter";
        }
      ?>
    </div>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <img src="./assets/img/a2q2.png" class= "img-fluid rounded">
    </div>
  </div>
</div>