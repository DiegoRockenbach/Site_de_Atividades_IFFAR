<div class="container">
  <?php
    if (!isset($_SESSION['user'])) {
      echo "<div class='alert alert-danger' role='alert'>Você não tem permissão para acessar essa página!</div>";
      echo "<meta http-equiv='refresh' content='0;url=?pagina=login'>";
    }
  ?>
  <div class="row">
    <div class="col-lg-12">
      <h1 class="marginbot">Listar todos os cadastros de clientes</h1>
    </div>
    <div class= "table-responsive">
      <table class="tablelist table table-dark">
        <tr>
          <th>Nome</th>
          <th>RG</th>
          <th>CPF</th>
          <th>E-mail</th>
          <th class='tableimg'>DELETE</th>
          <th class='tableimg'>EDIT</th>
        </tr>
      <?php
        include("inc/connect.php");
        if(isset($_GET["excluir_cod"])){
          $sql = "DELETE FROM clients WHERE cod = ". $_GET["excluir_cod"]. ";";
            if (mysqli_query($conn, $sql)) {
              echo "<div class='alert alert-success' role='alert'>Registro excluído com sucesso!</div>";
            }
            else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
          $sql = "SELECT cod, nome, rg, cpf, email FROM clients";
          $query = mysqli_query($conn, $sql);
          while ($dados = mysqli_fetch_assoc($query)) {
            echo "<tr><td>" . $dados["nome"] . "</td><td>" . $dados["rg"] . "</td><td>" . $dados["cpf"] . "</td><td>" . $dados["email"] . "</td>";
            echo "<td class='tableimg'><a href = 'index.php?pagina=listar&excluir_cod=" . $dados["cod"] . "'><img width=30px src='assets/img/delete.png'></a></td>";
            echo "<td class='tableimg'><a href = 'index.php?pagina=cadastroclient&editar_cod=" . $dados["cod"] . "'><img width=25px src='assets/img/edit.png'></a></td>";
            echo "</tr>";
          }
        mysqli_close($conn);
      ?>
      </table>
    </div>
    <div class="col-lg-12 col-sm-12">
    </div>
    <div class="col-lg-12 img_code">
      <h3>Código PHP</h3>
      <h5 class= "smolfont">(Alguns trechos de código podem não estar presentes na imagem por não serem o foco principal da página, sendo mais usados para features secundárias)</h5>
      <img src="./assets/img/listar.png" class= "img-fluid rounded">
    </div>
  </div>
</div>