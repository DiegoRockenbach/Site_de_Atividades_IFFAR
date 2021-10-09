<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Exercícios de Repetição - Questão 5</h1>
      <h5 class="titulo_quest">5. Dado um número digitado pelo usuário(formulário), apresentar os resultados da tabuada desse numero em uma tabela. Conforme exemplo ao lado (Usar Bootstrap).</h5>
    </div>
    <div class="col-lg-4 col-sm-12">
      <form method="POST">
        <label for="input_num">Número</label>
        <input class="form-control" placeholder="8" type="number" name="numero" id="input_num">
        <button class="botao_env btn btn-dark" type="submit" name="enviar">Enviar</button>
      </form>
    </div>
      <div class="col-lg-6 col-sm-12">
        <?php
          if (isset($_POST["enviar"])){
            $num = $_POST["numero"];
            echo "<table class='table table-striped table-dark'><thead><tr><th>TABUADA DO $num</th></tr></thead>";
            echo "<tbody>";
            for ($i=1; $i<11; $i++){
              $tabu = $num * $i;
              echo "<tr><td>$num x $i = $tabu</td></tr>";
            }
            echo "</tbody></table>";
          }
        ?>
      </div>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <img src="./assets/img/a2q5.png" class= "img-fluid rounded">
    </div>
  </div>
</div>