
<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://hammerjs.github.io/dist/hammer.js"></script>




    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="\tour11\style.css">
    <div class="container">
        <nav style="z-index: 1;" class="navbar navbar-expand-lg navbar-light bg-light">
        <a href=""><img style="width: 53px;" src="\tour11\/img/contatct-1.svg" alt=""></a>
        <a href=""><img style="width: 114px;" src="\tour11\img\tour-1.svg" alt=""></a>
        
        <button style="border: none; color: white;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""><img style="width: 38px;" src="\tour11\/img/bars-1.svg" alt=""></span>
        </button>
        
        <div style="background: linear-gradient(90deg, rgba(1,95,169,1) 0%, rgba(5,135,235,1) 100%)!important;
        height: 171px;
        border-radius: 2px 2px 32px 32px !important;
        /* justify-content: center; */
        text-align: center;
        color: white;" class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a style="color: rgb(255 255 255 / 90%);" class="nav-link" name="" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a style="color: rgb(255 255 255 / 90%);" class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a style="color: rgb(255 255 255 / 90%);" class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </div>
      </nav></div>
</head>
 
<br>
<body>
    
<?php
 include 'coletarlocal.php';
 include 'pedirautorizacao.php';
?>

<div class="container flex-column">
    <div class="column">
      <div class="col-12">
        <div class="container text-center" style="color: #037cd9;">
          <h1 id="cityName">Escolha Seu Destino</h1>
          <h5 style="color: #1598e0;" id="subTitle" class="font-weight-light">Temos os melhores destinos, confira o mais próximo de você</h5>
          <div id="locationMessage" style="display: none; margin-bottom: 15px;">
          <p style="font-size: 16px; color: #6c757d;">Para fornecer informações personalizadas, precisamos acessar sua localização. Por favor, conceda permissão quando solicitado.</p>
        </div>
        <button onclick="requestLocation()" class="btn btn-primary">Obter Localização</button>
      </div> </div>
          <br>
          <form class="" action="" method="get">
             <div class="row" style="justify-content: center;">  
            
              <input  class="form-control col-md-8" style="background: bottom;
              border: 1px solid #1074ab; height: auto;
              border-radius: 17px; 
              " type="text" name="nome_livro" placeholder="Digite aqui o seu destino">
             <br><br>
             
          </div>
        </form>
        </div>
      
        
      
      </div>
     
    </div>
</div>






<br>


    
<div id="cardCarousel" class="carousel slide" data-interval="30000" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
        <div  style="background-color: #0374cc!important; border-radius: 29px;"; class="card bg-dark text-white">
          <a href="\tour11\/cadastropag.php"><img style="height: 443px;" class="card-img" src="\tour11\/img/sss.png" alt="Card image"></a>
          <div style="top: 245px;" class="card-img-overlay">
            <h1 style="line-height: 37px;" class="card-title">Lençóis Maranhenses</h1>
            <h5 style="margin-top: -2px; color: #91cfff;" class="card-text">Barreirinhas - MA</h5>
            <p class="card-text">Last updated 3 mins ago</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Adicione mais itens do carrossel conforme necessário -->
    <div class="carousel-item">
      <div class="container">
        <div style="background-color: #0374cc!important; border-radius: 29px;" ; class="card bg-dark text-white">
          <img style="height: 443px;" class="card-img" src="\tour11\/img/carolina.png" alt="Card image">
          <div style="top: 268px;" class="card-img-overlay">
            <h1 class="card-title">Poço Azul</h1>
            <h5 style="margin-top: -13px; color: #91cfff;" class="card-text">Carolina - MA</h5>
            <p class="card-text">Last updated 5 mins ago</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#cardCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#cardCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




   


<script>
  // Adiciona suporte a gestos de toque (swipe) usando Hammer.js
  var myCarousel = document.getElementById('cardCarousel');
  var hammer = new Hammer(myCarousel);
  hammer.on('swipeleft', function () {
    $('#cardCarousel').carousel('next');
  });
  hammer.on('swiperight', function () {
    $('#cardCarousel').carousel('prev');
  });
</script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://www.gstatic.com/firebasejs/9.6.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.6.2/firebase-database.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>