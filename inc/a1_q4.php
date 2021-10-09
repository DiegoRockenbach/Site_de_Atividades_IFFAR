<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Exercícios IF-Else - Questão 4</h1>
      <h5 class="titulo_quest">4. Faça um script que leia 3 notas e uma letra (‘A’ ou ‘P’). A partir disso, caso a letra escolhida seja ‘A’, calcule e mostre a média aritmética das notas lidas, caso seja ´P’ calcule a média ponderada. Exibir o resultado dentro de uma div de 150x150, com cantos arredondados – caso a nota seja maior ou igual a 7,0 o fundo da div deve ser verde (Aprovado); Se a média estiver entre 5,0 e 6,9 a div deve ter o fundo amarelo (Exame); caso a nota seja menor que 5,0 div vermelha (Reprovado).</h5>
    </div>
    <div class="col-lg-4">
      <form class="formu" method="POST">
        <label for="nota">Nota 1</label>
        <input class="form-control" placeholder="10" type="number" name="n1" id="nota">
        <label for="nota">Nota 2</label>
        <input class="form-control" placeholder="10" type="number" name="n2" id="nota">
        <label for="nota">Nota 3</label>
        <input class="form-control" placeholder="10" type="number" name="n3" id="nota">
        <label for="nota">Média</label>
        <select class="form-select" name="med" id="nota">
          <option value="A">Aritmética</option>
          <option value="P">Ponderada</option>
        </select>
        <button class="botao_env btn btn-dark" type="submit" name="enviar">Enviar</button>
      </form>
    </div>
    <div class="col-lg-8">
      <?php
        if (isset($_POST["enviar"])){
          $n1 = $_POST["n1"];
          $n2 = $_POST["n2"];
          $n3 = $_POST["n3"];
          $med = $_POST["med"];
          if ($med == "A"){
            $arit = ($n1+$n2+$n3)/3;
            if ($arit >= 7){
              echo "<div class='rounded aprovado' >Sua nota média é $arit, e portanto está aprovado</div>";
            }
            else if (($arit >= 5) && ($arit < 7)){
              echo "<div class='rounded exame'>Sua nota média é $arit, e portante está em exame</div>";
            }
            else if ($arit < 5){
              echo "<div class='rounded reprovado'>Sua nota média é $arit, e portante está reprovado</div>";
            }
          }
          else if ($med == "P"){
            $pond = (($n1*2)+($n2*3)+($n3*5))/10;
            if ($pond >= 7){
              echo "<div class='rounded aprovado'>Sua nota média é $pond, e portanto está aprovado</div>";
            }
            else if (($pond >= 5) && ($pond < 7)){
              echo "<div class='rounded exame'>Sua nota média é $pond, e portanto está em exame</div>";
            }
            else if ($pond < 5){
              echo "<div class='rounded reprovado'>Sua nota média é $pond, e portante está reprovado</div>";
            }
          }
        }
      ?>
    </div>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <img src="./assets/img/a1q4.png" class= "img-fluid rounded">
    </div>
  </div>
</div>