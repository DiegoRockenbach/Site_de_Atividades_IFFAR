<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Exercícios IF-Else - Questão 5</h1>
      <h5 class="titulo_quest">5. Faça um formulário HTML que receba o preço à vista de um determinado produto e a quantidade de parcelas, calcule o preço total a pagar e o valor da prestação mensal, referentes ao pagamento parcelado. Se o pagamento for em duas vezes, acréscimo de 2%; Se parcelado em 3 ou 4 vezes deve ser dado um acréscimo de 5% no total a ser pago. Se o parcelamento for em 5 vezes ou mais, o acréscimo será de 8%.</h5>
    </div>
    <div class="col-lg-4 col-sm-12">
      <form method="POST">
        <label for="input_num">Valor à vista</label>
        <input class="form-control" placeholder="1800" type="number" name="valor" id="input_num">
        <label for="input_num">Número de parcelas</label>
        <input class="form-control" placeholder="4" type="number" name="parcelas" id="input_num">
        <button class="botao_env btn btn-dark" type="submit" name="enviar">Enviar</button>
      </form>
      <?php
        if (isset($_POST["enviar"])){
          $valor = $_POST["valor"];
          $parcelas = $_POST["parcelas"];
          if($parcelas == 2){
            $prest = $valor * 1.02;
            $vparc = $prest / $parcelas;
            echo "Para o pagamento em $parcelas vezes o valor total será de R$ $prest e o valor de cada parcela será de $vparc.";
          }
          else if (($parcelas == 3) || ($parcelas == 4)){
            $prest = $valor * 1.05;
            $vparc = $prest / $parcelas;
            echo "Para o pagamento em $parcelas vezes o valor total será de R$ $prest e o valor de cada parcela será de $vparc.";
          }
          else if ($parcelas >= 5) {
            $prest = $valor * 1.08;
            $vparc = $prest / $parcelas;
            echo "Para o pagamento em $parcelas vezes o valor total será de R$ $prest e o valor de cada parcela será de $vparc.";
          }
        }
      ?>
    </div>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <img src="./assets/img/a1q5.png" class= "img-fluid rounded">
    </div>
  </div>
</div>