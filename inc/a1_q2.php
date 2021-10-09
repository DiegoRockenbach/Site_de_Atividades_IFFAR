<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Exercícios IF-Else - Questão 2</h1>
      <h5 class="titulo_quest">2. Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados: equilátero, escaleno ou isósceles.</h5>
    </div>
    <div class="col-lg-4">
      <form class="formu" method="POST">
        <label for="lado_triang">Lado A</label>
        <input class="form-control" placeholder="8" type="number" name="la" id="lado_triang">
        <label for="lado_triang">Lado B</label>
        <input class="form-control" placeholder="8" type="number" name="lb" id="lado_triang">
        <label for="lado_triang">Lado C</label>
        <input class="form-control" placeholder="8" type="number" name="lc" id="lado_triang">
        <button class="botao_env btn btn-dark" type="submit" name="enviar">Enviar</button>
      </form>
    </div>
    <div class="col-lg-8">
      <?php
        if (isset($_POST["enviar"])){
          $la = $_POST["la"];
          $lb = $_POST["lb"];
          $lc = $_POST["lc"];
          if (($la == $lb) && ($la == $lc) && ($lb == $lc)){
            echo "<img src='./assets/img/triang_equi.png'>";
          }
          else if (($la == $lb) || ($la == $lc) || ($lb == $lc)){
            echo "<img src='./assets/img/triang_isos.png'>";
          }
          else {
            echo "<img src='./assets/img/triang_esca.png'>";
          }
        }
      ?>
    </div>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <img src="./assets/img/a1q2.png" class= "img-fluid rounded">
    </div>
  </div>
</div>