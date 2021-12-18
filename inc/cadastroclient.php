<div class="container">
  <?php
    if (!isset($_SESSION['user'])) {
      echo "<div class='alert alert-danger' role='alert'>Você não tem permissão para acessar essa página!</div>";
      echo "<meta http-equiv='refresh' content='0;url=?pagina=login'>";
    }
    if(isset($_POST ["enviar"])){
      $nome = $_POST ["nome"];
      $rg = $_POST ["rg"];
      $cpf = $_POST ["cpf"];
      $email = $_POST ["email"];
      include("inc/connect.php");
      if(isset($_GET["editar_cod"]))  {
        $sql = "UPDATE clients SET nome='$nome', rg='$rg', cpf='$cpf', email='$email' WHERE cod = ". $_GET["editar_cod"];
        $mensagem = "Dados editados com sucesso!";
      }
      else {
        $sql = "INSERT INTO clients (nome, rg, cpf, email) VALUES ('$nome', '$rg', '$cpf', '$email');";
        $mensagem = "Dados gravados com sucesso!";
      }
        if (mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success' role='alert'>$mensagem</div>";
        }
        else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      mysqli_close($conn);
    }
    if(isset($_GET["editar_cod"])){
      include("inc/connect.php");
      $sql = "SELECT cod, nome, rg, cpf, email FROM clients WHERE cod = ". $_GET["editar_cod"]. ";";
      $query = mysqli_query($conn, $sql);
      $dados = mysqli_fetch_assoc($query);
      mysqli_close($conn);
    }
    else {
      $dados = [
        "nome" => '',
        "rg" => '',
        "cpf" => '',
        "email" => '',
      ];
    }
  ?>
  <div class="row">
    <div class="col-lg-12">
      <?php
        if(isset($_GET["editar_cod"])){
          echo "<h1 class='marginbot'>Edição de cadastros de clientes</h1>";
        }
        else {
          echo "<h1 class='marginbot'>Cadastro de clientes</h1>";
        }
      ?>
    </div>
    <div class="col-lg-12 col-sm-12">
      <form method="POST">
        <label for="input_name">Nome:</label>
        <input class="form-control" type="text" name="nome" id="input_name" required value="<?php echo $dados['nome'];?>">
        <label for="input_rg">RG:</label>
        <input class="form-control" type="text" name="rg" id="input_rg" maxlength="10" required value="<?php echo $dados['rg'];?>">
        <label for="input_cpf">CPF:</label>
        <input class="form-control" type="text" name="cpf" id="input_cpf" onkeypress="$(this).mask('000.000.000-00');" required value="<?php echo $dados['cpf'];?>">
        <label for="input_email">E-Mail:</label>
        <input class="form-control" type="email" name="email" id="input_email" required value="<?php echo $dados['email'];?>">
        <button class="botao_env btn btn-dark" type="submit" name="enviar">Enviar</button>
      </form>
    </div>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <h5 class= "smolfont">(Alguns trechos de código podem não estar presentes na imagem por não serem o foco principal da página, sendo mais usados para features secundárias)</h5>
      <img src="./assets/img/cadastroclient.png" class= "img-fluid rounded">
    </div>
  </div>
</div>