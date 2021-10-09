<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Exercícios IF-Else - Questão 3</h1>
      <h5 class="titulo_quest">3. Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.</h5>
    </div>
    <div class="col-lg-12">
      <form class="formu" method="POST">
        <label for="mes">Número</label>
        <input class="form-control" placeholder="11" type="number" name="mes" id="mes">
        <button class="botao_env btn btn-dark" type="submit" name="enviar">Enviar</button>
      </form>
    </div>
      <?php
        if (isset($_POST["enviar"])){
          $num = $_POST["mes"];
          if ($num == 1){
            echo "<span>O mês correspondente a $num é Janeiro</span>";
          }
          else if ($num == 2){
            echo "<span>O mês correspondente a $num é Fevereiro</span>";
          }
          else if ($num == 3){
            echo "<span>O mês correspondente a $num é Março</span>";
          }
          else if ($num == 4){
            echo "<span>O mês correspondente a $num é Abril</span>";
          }
          else if ($num == 5){
            echo "<span>O mês correspondente a $num é Maio</span>";
          }
          else if ($num == 6){
            echo "<span>O mês correspondente a $num é Junho</span>";
          }
          else if ($num == 7){
            echo "<span>O mês correspondente a $num é Julho</span>";
          }
          else if ($num == 8){
            echo "<span>O mês correspondente a $num é Agosto</span>";
          }
          else if ($num == 9){
            echo "<span>O mês correspondente a $num é Setembro</span>";
          }
          else if ($num == 10){
            echo "<span>O mês correspondente a $num é Outubro</span>";
          }
          else if ($num == 11){
            echo "<span>O mês correspondente a $num é Novembro</span>";
          }
          else if ($num == 12){
            echo "<span>O mês correspondente a $num é Dezembro</span>";
          }
          else {
            echo "<span>O número $num não corresponde a nenhum mês</span>";
          }
        }
      ?>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <img src="./assets/img/a1q3.png" class= "img-fluid rounded">
    </div>
  </div>
</div>