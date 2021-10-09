<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Exercícios de Repetição - Questão 6 <span class="badge bg-success">Desafio 1</span></h1>
      <h5 class="titulo_quest">6. Construa um script que receba uma data de um formulário e exiba em uma tabela zebrada os próximos 24 meses incrementados mês a mês à partir da data recebida.</h5>
    </div>
    <div class="col-lg-4 col-sm-12">
      <form method="POST">
        <label for="input_date">Data</label>
        <input class="form-control" placeholder="5" type="date" name="data" id="input_date">
        <button class="botao_env btn btn-dark" type="submit" name="enviar">Enviar</button>
      </form>
    </div>
    <div class="col-lg-6 col-sm-12">
      <?php
        if (isset($_POST["enviar"])){
          $datetxt = $_POST["data"];
          $date = new DateTime($datetxt);
          echo "<table class='table table-striped table-dark'><thead><tr><th>TABELA MÊS A MÊS</th></tr></thead>";
          echo "<tbody>";
          for ($count=0; $count<24; $count++){
            $date ->add(new DateInterval("P1M"));
            echo "<tr><td>". $date->format("d/m/Y"). "</td></tr>";
          }
          echo "</tbody></table>";
        }
      ?>
    </div>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <img src="./assets/img/a2q6.png" class= "img-fluid rounded">
    </div>
  </div>
</div>