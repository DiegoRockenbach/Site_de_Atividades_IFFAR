<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="marginbot">Criar conta de usuário</h1>
    </div>
    <div class="col-lg-12 col-sm-12">
    <form method="POST">
        <label for="input_nome">Nome:</label>
        <input class="form-control" type="text" name="nome" id="input_nome" required>
        <label for="input_email">E-mail:</label>
        <input class="form-control" type="text" name="email" id="input_email">
        <label for="input_senha">Senha:</label>
        <input class="form-control" type="password" name="senha" id="input_senha" required>
        <button class="botao_env btn btn-dark" type="submit" name="enviar">Criar conta</button>
      </form>
    </div>
    <?php
      if (isset($_POST ["enviar"])){
        $nome = $_POST ["nome"];
        $email = $_POST ["email"];
        $senha = $_POST ["senha"];
        include("inc/connect.php");
        $sql = "INSERT INTO users (nome, email, senha) VALUES ('$nome', '$email', '$senha');";
          if (mysqli_query($conn, $sql)) {
            echo "<div class='alert alert-success' role='alert'>Conta de usuário criada com sucesso!</div>";
          }
          else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        mysqli_close($conn);
      }
    ?>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <h5 class= "smolfont">(Alguns trechos de código podem não estar presentes na imagem por não serem o foco principal da página, sendo mais usados para features secundárias)</h5>
      <img src="./assets/img/cadastrouser.png" class= "img-fluid rounded">
    </div>
  </div>
</div>