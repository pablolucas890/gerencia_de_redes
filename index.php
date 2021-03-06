<!DOCTYPE html>
<html lang="en">

<head>
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
  <script defer src="js/script.js"></script>

  <title>Monitoramento</title>
</head>

<body>

  <nav class="fixed-top navbar navbar-expand-sm navbar-dark bg-primary">

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

  <section id="home" class="mt-5 pt-4 bg-primary  ">
    <!-- In??cio se????o home -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex">
          <!-- Textos da se????o -->
          <div class="align-self-center">
            <h5 class="h5 d-block d-sm-none">Sistema de monitoramento de dados</h5>
            <h2 class="display-4 d-none d-sm-block">Sistema de monitoramento de dados</h2>
            <p>
              Este sistema apresenta quatro sensores de monitoramento de dados dos sistemas operacionais
              que estejam na mesma rede que o usu??rio. Para utiliz??-lo, basta digitar o IP da m??quina e
              seguir os passos de cada sensor.
            </p>
          </div>
        </div>
        <!--/fim textos da se????o -->
        <div class="col-md-6 d-none d-md-block">
          <img src="img/carro.png">
        </div>
      </div>
    </div>
  </section>
  <!--/fim se????o home -->
  <section id="servicos" class="caixa">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row albuns">
            <div class="col-md-6">
              <img src="img/img1.png" class="img-fluid">
            </div>
            <div class="col-md-6">
              <img src="img/img2.png" class="img-fluid">
            </div>
          </div>
          <div class="row albuns">
            <div class="col-md-6">
              <img src="img/img3.png" class="img-fluid">
            </div>
            <div class="col-md-6 center">
              <img src="img/img4.jpg" class="center img-fluid">
            </div>
          </div>
        </div>
        <div class="col-md-6">

          <h2>Descri????o dos sensores</h2>
          <br>
          <br>
          <h3>Processos</h3>
          <p>A execu????o de diversos programas em uma m??quina faz com que o n??mero de processos em execu????o seja elevado. Com isso,
            esse sensor permite a an??lise dos processos em execu????o no sistema no momento atual do monitoramento.
          </p>
          <br>
          <h3>Datagramas UDP</h3>
          <p>Este sensor permite o acompanhamento da porcentagem de datagramas enviados e recebidos via UDP no momento do monitoramento, onde 
            o download e upload de dados pode ser notado nitidamente aqui.
          </p>
          <br>
          <h3>Tempo no computador</h3>
          <p>Que tal monitorar o tempo que voc?? passa em seu dispositivo? Este sensor permite este monitoramento de forma 
            detalhada.
          </p>
          <br>
          <h3>Seguimentos TCP</h3>
          <p>Este sensor permite o acompanhamento dos segmentos dos dados enviados e recebidos via TCP no momento do monitoramento, onde 
            o download e upload de dados pode ser notado nitidamente aqui.
          </p>
        </div>

      </div>
    </div>
  </section>
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