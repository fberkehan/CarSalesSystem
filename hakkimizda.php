<?php 
            require "admin/config.php"; 
       





            $sqlproje = "SELECT * FROM firma";
              $resultsproje = $conn->query($sqlproje);
              if ($resultsproje->num_rows > 0) {
                  while($row = $resultsproje->fetch_assoc()) {
                  
                          $firmaAdi =               $row['firmaAdi'];
                          $firmaAciklamasi =        $row['firmaAciklamasi'];
                          $firmaTelefon =           str_replace(" ","",$row['firmaTelefon']); ;
                          $firmaAdres =             $row['firmaAdres'];
                          $firmaMail =              $row['firmaMail'];
                          $facebook =               $row['facebook'];
                          $instagram =              $row['instagram'];
                          $twitter =                $row['twitter'];  
                  }
              } else {
                  echo " ";
              }


              ?>
              
              
              <!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8" />
<meta name="title" content="Tığlı Otomotiv">
<meta name="description" content="Tığlı Otomotiv, kaliteli ikinci el araçlar sunan güvenilir bir satış firmasıdır. Çeşitli markalar arasından seçim yapabilirsiniz. Hemen ziyaret edin!">
<meta name="keywords" content="ikinci el araç satışı,uygun fiyatlı araba,kaliteli araçlar,güvenilir otomotiv satışı,en güncel araç modelleri,çeşitli araba markaları,araç satışı İstanbul,otomobil fiyatları,araç incelemesi,araç finansmanı,">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="FUBER">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta name="viewport" content="width=device-width" />

  <link rel="icon" href="path/to/fav.png">
  <title>Tığlı Otomotiv</title>

  <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style.css">
</head>
<body class="with-custom-webkit-scrollbars with-custom-css-scrollbars" data-dm-shortcut-enabled="true" data-sidebar-shortcut-enabled="true" data-set-preferred-mode-onload="true">


<div class="spinnerdiv">
<div class="spinner"></div>
</div>



  <div class="page-wrapper with-sidebar" data-sidebar-type="overlayed-all">

    <div class="sticky-alerts"></div>

    <div class="sidebar">
     
        <div class="content">
          <h2 class="content-title" style="font-size:30px;"> Hakkımızda
          </h2>
          <p style="font-size: 2rem;"><?php echo $firmaAciklamasi; ?></p>
        </div>
        
        <div class="sidebarf">
          
          <div class="menuButton" onclick="halfmoon.toggleSidebar()">
            <i class="fa-solid fa-bars"></i>
          </div>
          <div class="socialButton">

          <div id="evbutonslid" style="color: #00898b !important;    display: flex;
    color: #00898b !important;
    align-items: center;
    justify-content: center;
    align-content: center;
    flex-wrap: nowrap;
    flex-direction: column">
          <i style="margin-bottom: 0px !important;" class="fa-solid fa-house"></i>
          <p style="font-size:10px;font-family: 'Questrial', sans-serif;">Ana sayfa</p>
            </div>

            <div id="hakkimizdabutonslid" style="color: #00898b !important;    display: flex;
    color: #00898b !important;
    align-items: center;
    justify-content: center;
    align-content: center;
    flex-wrap: nowrap;
    flex-direction: column;">
          <i style="margin-bottom: 0px !important;" class="fa-solid fa-signature"></i>
          <p style="font-size:10px;font-family: 'Questrial', sans-serif;">Hakkımızda</p>
            </div>


            <div  id="iletisimbutonslid" style="color: #00898b !important;    display: flex;
    color: #00898b !important;
    align-items: center;
    justify-content: center;
    align-content: center;
    flex-wrap: nowrap;
    flex-direction: column;">
          <i style="margin-bottom: 0px !important;" class="fa-solid fa-phone"></i>
          <p style="font-size:10px;font-family: 'Questrial', sans-serif;">İletişim</p>
            </div>

          
          <a href="<?php echo $facebook; ?>">
              <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="<?php echo $twitter; ?>">
              <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="<?php echo $instagram; ?>">
              <i class="fa-brands fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
    <div class="content-wrapper">
      

   

      <div class="mainSlider" id="mainSlider" style="background-image: url('background.png');">
        <div class="header">


          <a href="#" class="navbar-brand ml-10 ml-sm-20">
            <img src="tigli-otomotiv-logo-disi.png" style="width: 238px;height: auto;">
        </a>
  
          
     
           <ul class="header-menu">
              <li>
                <a href="index.php">Anasayfa</a>
              </li>
              <li>
                <a href="hakkimizda.php">Hakkımızda</a>
              </li>
              <li>
                <a href="index.php#araclarimiz">Araçlarımız</a>
              </li>
              <li>
                <a href="#aracsat">Aracını sat</a>
              </li>
              <li>
                <a href="iletisim.php">İletişim</a> 
              </li>
            </ul>
     
     
        </div>
       
        <div class="row">
             
             <h1 class="sliderBaslik1" style="font-size: 5rem !important;padding-top: 20px !important;">Hakkımızda</h1>
             <hr>
             <p class="sliderDesc1"> 
                <?php echo $firmaAciklamasi; ?>  </p>
          
             </div>
            </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>
  <script src="index.js"></script>


  <div class="modal" id="aracsat" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <a href="#" class="btn close" role="button" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </a>
        <h5 class="modal-title">İletişim için formu doldurun</h5>
         <form action="mailGonder.php" method="post">
          <div class="form-group">
            <label for="username" class="required">İsim & Soyisim</label>
            <input type="text" id="username" class="form-control" placeholder="İsim & Soyisim" required="required">
          </div>
          <div class="form-group">
            <label for="Telefon" class="required">Telefon Numaranız</label>
            <input type="text" id="Telefon" class="form-control" placeholder="Telefon Numaranız" required="required">
          </div>
          <div class="form-group">
            <label for="Email" class="required">Email Adresiniz</label>
            <input type="text" id="Email" class="form-control" placeholder="Email Adresiniz" required="required">
          </div>
          <input class="btn btn-primary btn-block" type="submit" value="Talep Gönder">
        </form>
      
        <div class="text-right mt-10"> <!-- text-right = text-align: right, margin-top: 1rem (10px) -->
          <a href="tel:<?php echo $firmaTelefon; ?>" class="hyperlink">Bizi arayın?</a> <!-- hyperlink = used on regular links to remove anti-aliasing in dark mode --> 
        </div>
      </div>
      
    </div>

    
  </div>
  <script>
      
         
      myDiv.style.backgroundImage = `linear-gradient(to top, rgba(0,0,0), rgba(0,48,49))`;



  </script>


</body>
</html>