<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="assets/img/favicon.png">
  <link rel="shortcut icon" href="assets/img/favicon.png">
</head>
<body>
  <video autoplay muted loop>
    <source src="assets/img/stars.mp4" type="video/mp4">
  </video>
  <header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="container">
            <h1>SITE DE ATIVIDADES</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 fundo">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarmenu">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarmenu">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="navbarDropdown" role="button" href="#">Exercícios If-Else</a>
                      <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="index.php?pagina=a1_q1">Questão 1</a></li>
                        <li><a class="dropdown-item" href="index.php?pagina=a1_q2">Questão 2</a></li>
                        <li><a class="dropdown-item" href="index.php?pagina=a1_q3">Questão 3</a></li>
                        <li><a class="dropdown-item" href="index.php?pagina=a1_q4">Questão 4</a></li>
                        <li><a class="dropdown-item" href="index.php?pagina=a1_q5">Questão 5</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Exercícios de Repetição</a>
                      <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="index.php?pagina=a2_q1">Questão 1</a></li>
                        <li><a class="dropdown-item" href="index.php?pagina=a2_q2">Questão 2</a></li>
                        <li><a class="dropdown-item" href="index.php?pagina=a2_q3">Questão 3</a></li>
                        <li><a class="dropdown-item" href="index.php?pagina=a2_q4">Questão 4</a></li>
                        <li><a class="dropdown-item" href="index.php?pagina=a2_q5">Questão 5</a></li>
                        <li><a class="dropdown-item" href="index.php?pagina=a2_q6">Questão 6</a></li>
                        <li><a class="dropdown-item" href="index.php?pagina=a2_q7">Questão 7</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section>
    <?php
    if(isset($_GET["pagina"])){
      include("inc/" . $_GET["pagina"] . ".php");
    }
    else{
      include("inc/home.php");
    }
    ?>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12">
            <span>Diego Rockenbach 2021 &copy;</span>
            <span class="d-sm-none d-md-inline"> - Todos os direitos reservados</span>
        </div>
      </div>
    </div>
  </footer>

  <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
  <script src="bootstrap-5.0.2-dist/js/jquery-3.6.0.min.js"></script>
</body>
</html>