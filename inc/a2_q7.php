<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Exercícios de Repetição - Questão 7 <span class="badge bg-success">Desafio 2</span></h1>
      <h5 class="titulo_quest">7. Construa um formulário de solicitação de empréstimos.</h5>
    </div>
    <div class="col-lg-4 col-sm-12">
      <form method="POST">
      <label for="input_emp">Valor do empréstimo</label>
      <input class="form-control" placeholder="1000" type="number" name="valor_emprestimo" id="input_emp">
      <label for="input_parc">Parcelas</label>
      <select class="form-select" name="parcelas" id="input_parc">
          <option value="6">6 meses - taxa 1,2%/m</option>
          <option value="12">12 meses - taxa 1,8%/m</option>
          <option value="24">24 meses - taxa 2,0%/m</option>
          <option value="36">36 meses - taxa 2,5%/m</option>
          <option value="48">48 meses - taxa 2,8%/m</option>
      </select>
      <button class="botao_env btn btn-dark" type="submit" name="enviar">Enviar</button>
      </form>
    </div>
    <div class="col-lg-6 col-sm-12">
      <?php
        if (isset($_POST["enviar"])){
          $valor_emp = $_POST["valor_emprestimo"];
          $quant_parc = $_POST["parcelas"];
          if ($quant_parc == 6) {
            $taxa = 1.2;
          }
          else if ($quant_parc == 12) {
            $taxa = 1.8;
          }
          else if ($quant_parc == 24) {
            $taxa = 2;
          }
          else if ($quant_parc == 36) {
            $taxa = 2.5;
          }
          else if ($quant_parc == 48) {
            $taxa = 2.8;
          }
          $taxa = $taxa / 100;
          $cf = ($taxa/(1 - (1/pow(1+$taxa, $quant_parc))));
          $valor_parc = $valor_emp * $cf;
          $date = new DateTime();
          echo "<table class='table table-sm table-dark'><thead>";
          echo "<tr><th>Número da parcela</th><th>Data da parcela</th><th>Valor da parcela</th></tr>";
          echo "</thead><tbody>";
          for ($parc=1; $parc<=$quant_parc; $parc++){
            $date->add(new DateInterval("P1M"));
            echo "<tr><td>$parc</td>";
            echo "<td>". $date->format("d/m/Y"). "</td>";
            printf ("<td>R$ %.2f</td>", $valor_parc);
            echo "</tr>";
          }
          echo "</tbody></table>";
          $montante = $valor_parc * $quant_parc;
          $juros = $montante - $valor_emp;
          printf ("<div class='alert alert-success'> O valor de juros é igual a R$ %.2f, enquanto o montante é igual a R$ %.2f</div>", $juros, $montante);
        }
      ?>
    </div>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <img src="./assets/img/a2q7.png" class= "img-fluid rounded">
    </div>
  </div>
</div>