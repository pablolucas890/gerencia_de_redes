<!doctype html>
<html lang="pt-br">

<head>
    <title>Sobre</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer/">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
    <script defer src="js/script3.js"></script>
</head>

<body>
  <nav class="fixed navbar navbar-expand-sm navbar-dark bg-primary">

    <!-- Logo -->
    <a href="index.php" class="navbar-brand">
      <img src="./img/logo.png" class="logo" alt="Logo">
    </a>
    <!-- Menu Hamburguer -->
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navegacao">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- navegacao -->
    <div class="collapse navbar-collapse" id="navegacao">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="sensor1.php" class="nav-link">Processos</a>
        </li>
        <li class="nav-item">
          <a href="sensor2.php" class="nav-link">Datagramas UDP</a>
        </li>
        <li class="nav-item">
          <a href="sensor3.php" class="nav-link">Tempo no computador</a>
        </li>
        <li class="nav-item">
          <a href="sensor4.php" class="nav-link">Seguimentos TCP</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid mb-5">
    <div class="row">
      <div class="col-12 centralizar mt-1 mb-3 p-3 bg-primary text-white">
        <h4>Sensor de Monitoramento do Tempo de Utilização do Dispositivo</h4>
      </div>
    </div>
    <div class="row">
      <div class="centralizar mt-1 p-3 bg-primary text-black bg-white col-12">
        <h4>Gráfico do Monitoramento do Tempo de Utilização do Dispositivo</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <canvas id="myChart" width="380" height="200"></canvas>
      </div>
      <div class="col-2"></div>
    </div>
    <div class="row mt-2">
      <div class="col-2"></div>
      <div class="form-group row col-8">
        <label for="inputPassword" class="col-form-label col-lg-3">
          <h5>Digite o IP:</h5>
        </label>
        <div class="col-lg-9">
          <input type="text" class="form-control" name="ip" id="ip" placeholder="Digite seu IP" value="127.0.0.1">
        </div>
      </div>
      <div class="col-2"></div>
    </div>
    <div id="divBtn">
      <button type="button" class="btn btn-success" id="btnIniciar">Iniciar</button>
      <button type="button" class="btn btn-danger" id="btnParar">Parar</button>
    </div>
  </div>
  <footer class="footer bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 d-none d-lg-block">
          <img src="img/logo.png" class="logo2" width="142">
        </div>
        <div class="col-6 col-sm-3 col-lg-2">
          <h4>Menu</h4>
          <ul class="navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="sensor1.php">Processos</a></li>
            <li><a href="sensor2.php">Datagramas UDP</a></li>
            <li><a href="sensor3.php">Tempo no computador</a></li>
            <li><a href="sensor4.php">Seguimentos TCP</a></li>
          </ul>
        </div>
        <div class="col-6 col-sm-3 col-lg-2">
          <h4>Sobre o Linux</h4>
          <ul class="navbar-nav">
            <li><a href="https://pt.wikipedia.org/wiki/Linux" target="_blank">Wikipedia</a></li>
          </ul>
        </div>
        <div class="col-6 col-sm-3 col-lg-2 mt-5 mt-sm-0">
          <h4>Sobre o Windows</h4>
          <ul class="navbar-nav">
            <li><a href="https://pt.wikipedia.org/wiki/Microsoft_Windows" target="_blank">Wikipedia</a></li>
          </ul>
        </div>
        <div class="col-6 col-sm-3 col-lg-3  mt-5 mt-sm-0 text-center">
          <a href="https://www.facebook.com/" target="_blank"><img src="img/facebook.png"></a>
          <a href="https://twitter.com/" target="_blank"><img src="img/twitter.png"></a>
          <a href="https://instagram.com/" target="_blank"><img src="img/instagram.png"></a>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>