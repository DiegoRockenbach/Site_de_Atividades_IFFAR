<div class="container">
  <div class="row">
    <div class="col-lg-3 col-sm-6 col-6">
      <img src="assets/img/minha_foto.jpg" alt="Eu" width="100%">
    </div>
    <main class="col-lg-9 col-sm-6 col-6">
      <?php
        if(isset($_GET['login'])) {
          echo "<div class='alert alert-success' role='alert'>Login realizado com sucesso! <br> Bem vindo ".$_SESSION['user'].".</div>";
        }
      ?>
      <h3>Sobre Mim</h3>
      <p>Meu nome é Diego Rockenbach, tenho 17 anos e moro em Boa Vista do Buricá. Atualmente estou cursando o ensino médio com técnico de informática integrado no IFFar Santo Augusto.</p>
      <h3>Propósito deste site</h3>
      <p>Esse site é o produto de uma atividade de programação, em que devíamos criar um site para hospedar as atividades da matéria que realizaremos ao longo desse segundo semestre de 2021.</p>
      <div class="redesoc">
        <div class="instaimg">
          <a href="https://www.instagram.com/diegomrockenbach/" target="_blank"><img width=50px height=50px src="assets\img\instagram.png"></a>
        </div>
        <div class="ttimg">
          <a href="https://twitter.com/Clasobo" target="_blank"><img width=50px height=50px src="assets\img\twitter.png"></a>
        </div>
        <div class="gitimg">
          <a href="https://github.com/DiegoRockenbach" target="_blank"><img width=70px height=70px src="assets\img\github.png"></a>
        </div>
      </div>
    </main>
  </div>
</div>