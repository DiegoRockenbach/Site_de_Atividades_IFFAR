<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="marginbot">Fazer login</h1>
    </div>
    <div class="col-lg-12 col-sm-12">
      <form method="POST">
        <label for="input_email">E-mail:</label>
        <input class="form-control" type="text" name="email" id="input_email" required>
        <label for="input_senha">Senha:</label>
        <input class="form-control" type="password" name="senha" id="input_senha" required>
        <button class="botao_env btn btn-dark" type="submit" name="logar">Logar</button>
      </form>
    </div>
    <?php
      include("inc/connect.php");
      if(isset($_POST['logar'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha']; 
        $sql = "SELECT * FROM users;";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          while($dados = mysqli_fetch_assoc($result)) {
            if($dados['email'] == $email && $dados['senha'] == $senha) {
              $_SESSION['user'] = $dados['nome'];
              $logado = true;
              break;
            }
          }
        }
        else {
          echo "<div class='alert alert-danger' role='alert'>Sem dados para exibir!</div>";
        }
        mysqli_close($conn);


        if(@$logado == true) {
          echo "<meta http-equiv='refresh' content='0;url=?pagina=home&login=true'>";
        }
        else {
          echo "<div class='alert alert-danger' role='alert'>Algo deu errado! <br> Login ou senha inválidos. </div>";
        }
      }
    ?>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <h5 class= "smolfont">(Alguns trechos de código podem não estar presentes na imagem por não serem o foco principal da página, sendo mais usados para features secundárias)</h5>
      <img src="./assets/img/login.png" class= "img-fluid rounded">
    </div>
  </div>
</div>