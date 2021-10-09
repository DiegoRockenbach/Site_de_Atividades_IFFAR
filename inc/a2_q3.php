<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Exercícios de Repetição - Questão 3</h1>
      <h5 class="titulo_quest">3. Elabore um programa em PHP que permita mostrar os valores ímpares entre o cubo de um número digitado pelo usuário até o próprio número (ordem decrescente).</h5>
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
          $imp = "";
          for ($count=$num+1; $count<$num3; $count++){
            if ($count % 2 == 1) {
              $imp = $count . "; " . $imp;
            }
          }
          echo "Os números ímpares presentes no intervalo entre $num e seu cubo ($num3) são os seguintes: <br> $imp";
        }
      ?>
    </div>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <img src="./assets/img/a2q3.png" class= "img-fluid rounded">
    </div>
  </div>
</div>