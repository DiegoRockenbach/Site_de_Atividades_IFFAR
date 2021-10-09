<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Exercícios de Repetição - Questão 4</h1>
      <h5 class="titulo_quest">4. Criar um script em PHP para mostrar o fatorial de um número informado pelo usuário. O cálculo do fatorial é feito da seguinte forma: n! = 1 x ... x n-1 x n Exemplo: 5! = 1 x 2 x 3 x 4 x 5 = 120 O fatorial de 0 é 1. Mostrar mensagem de erro (alert-danger) para números lidos que sejam menores que 0. O fatorial deve ser exibido em um alert-info.</h5>
    </div>
    <div class="col-lg-4 col-sm-12">
      <form method="POST">
        <label for="input_num">Número</label>
        <input class="form-control" placeholder="10" type="number" name="numero" id="input_num">
        <button class="botao_env btn btn-dark" type="submit" name="enviar">Enviar</button>
      </form>
      <?php
        if (isset($_POST["enviar"])){
          $num = $_POST["numero"];
          $fato = 1;
          $count = $num;
          if ($num < 0){
            echo "<div class= 'alert alert-danger'>Só aceitamos valores maiores que zero!</div>";
          }
          else {
            while($count > 1){
              $fato = $fato * $count;
              $count--;
            }
            echo "<div class= 'alert alert-info'>";
              echo "$num" . "! = ";
              printf ( "%.0f",$fato);
            echo "</div>";
            }
          }
      ?>
    </div>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <img src="./assets/img/a2q4.png" class= "img-fluid rounded">
    </div>
  </div>
</div>