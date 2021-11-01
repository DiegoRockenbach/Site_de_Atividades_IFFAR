<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Exercícios de Arrays - Questão 2</h1>
      <h5 class="titulo_quest">2. Considerando as diversas funções para tratamento de arrays, selecione 4 e elabore uma explicação do seu funcionamento e construa um exemplo prático do uso de cada uma das opções escolhidas.</h5>
    </div>
    <div class="col-lg-4 col-sm-12">
      <form method="POST">
      <label for="input_func">Função</label>
      <select class="form-select" name="funcoes" id="input_func">
          <option value="1">array_values</option>
          <option value="2">rsort</option>
          <option value="3">array_sum</option>
          <option value="4">array_shift</option>
      </select>
      <button class="botao_env btn btn-dark" type="submit" name="enviar">Enviar</button>
      </form>
    </div>
    <div class="col-lg-6 col-sm-12">
      <h5>A array utilizada para os exemplos é a seguinte:</h5>
      <span>1, 3, 6, 4, 7, 9, 6, 4, 2, 8, 1</span>
      <?php
        $sequencia = [1, 3, 6, 4, 7, 9, 6, 4, 2, 8, 1.];
        if (isset($_POST["enviar"])){
          $func = $_POST["funcoes"];
          if ($func == "1"){
            echo "<h5 class='margintop'>array_values (Retorna todos os valores de um array)</h5>";
            print_r (array_values($sequencia));
          }
          else if ($func == "2"){
            echo "<h5 class='margintop'>rsort (Ordena um array em ordem descrescente)</h5>";
            rsort ($sequencia);
            foreach( $sequencia as $key => $value ){
              echo "$value; ";
            }
          }
          else if ($func == "3"){
            echo "<h5 class='margintop'>array_sum (Calcula a soma dos elementos de um array)</h5>";
            echo "A soma dos valores foi ".(array_sum($sequencia)). ".";
          }
          else if ($func == "4"){
            echo "<h5 class='margintop'>array_shift (Retira o primeiro elemento de um array)</h5>";
            $retirado = array_shift($sequencia);
            echo "O array passa a ser a seguinte sequência: ";
            foreach( $sequencia as $key => $value ){
              echo "$value; ";
            }
            echo "<br><br> Enquanto o valor retirado foi o seguinte: ";
            echo "$retirado.";
          }
        }
      ?>
    </div>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <img src="./assets/img/a3q2.png" class= "img-fluid rounded">
    </div>
  </div>
</div>


