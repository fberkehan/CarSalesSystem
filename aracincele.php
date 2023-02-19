          
          <?php 
            require "admin/config.php"; 
            $sayac = 0;

            $aracIDgetir = $_GET['id'];
            $sqlproje = "SELECT * FROM araclar WHERE id=$aracIDgetir";
            $resultsproje = $conn->query($sqlproje);
            if ($resultsproje->num_rows > 0) {
                while($row = $resultsproje->fetch_assoc()) {
                
                        $ilanBaslik =               $row['ilanBaslik'];
                        $ilanFiyat =                $row['ilanFiyat'];
                        $ilanTarihi =               $row['ilanTarihi'];
                        $ilanAdres =                $row['ilanAdres'];
                        $aracModelYili =            $row['aracModelYili'];
                        $aracKm =                   $row['aracKm'];
                        $aracVites =                $row['aracVites'];
                        $aracYakit =                $row['aracYakit'];
                        $aracDurumu =               $row['aracDurumu'];
                        $aracMotorHacmi =           $row['aracMotorHacmi'];
                        $aracMotorGucu =            $row['aracMotorGucu'];
                        $aracCekis =                $row['aracCekis'];
                        $aracMarka =                $row['aracMarka'];
                        $aracModel =                $row['aracModel'];
                        $aracPaket =                $row['aracPaket'];
                        $aracBoyaDurumu =           $row['aracBoyaDurumu'];
                        $aracLokalBoyaDurumu =      $row['aracLokalBoyaDurumu'];
                        $aracDegisenParca =         $row['aracDegisenParca'];
                        $aracTramerKaydi =          $row['aracTramerKaydi'];
                        $aracEkstraOzellik =        $row['aracEkstraOzellik'];
                        $aracAciklamaSatici =       $row['aracAciklamaSatici'];



                        $GorselArray = array();

                        if ($row['aracGorseli1'] != NULL) {
                          $GorselArray[] =  $row['aracGorseli1'] ;
                        }
                        if ($row['aracGorseli2'] != NULL) {
                          $GorselArray[] =  $row['aracGorseli2'] ;
                        }
                        if ($row['aracGorseli3'] != NULL) {
                          $GorselArray[] =  $row['aracGorseli3'] ;
                        }
                        if ($row['aracGorseli4'] != NULL) {
                          $GorselArray[] =  $row['aracGorseli4'] ;
                        }
                        if ($row['aracGorseli5'] != NULL) {
                          $GorselArray[] =  $row['aracGorseli5'] ;
                        }
                        if ($row['aracGorseli6'] != NULL) {
                          $GorselArray[] =  $row['aracGorseli6'] ;
                        }
                        if ($row['aracGorseli7'] != NULL) {
                          $GorselArray[] =  $row['aracGorseli7'] ;
                        }
                        if ($row['aracGorseli8'] != NULL) {
                          $GorselArray[] =  $row['aracGorseli8'] ;
                        }
                        if ($row['aracGorseli9'] != NULL) {
                          $GorselArray[] =  $row['aracGorseli9'] ;
                        }
               
                }
            } else {
                echo " ";
            }





            $sqlproje = "SELECT * FROM firma";
              $resultsproje = $conn->query($sqlproje);
              if ($resultsproje->num_rows > 0) {
                  while($row = $resultsproje->fetch_assoc()) {
                  
                          $firmaAdi =               $row['firmaAdi'];
                          $firmaAciklamasi =        $row['firmaAciklamasi'];
                          $firmaTelefon =          str_replace(" ","",$row['firmaTelefon']); 
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
    <title><?php echo $firmaAdi; ?> - <?php echo $firmaAciklamasi; ?></title>
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
        <div class="mainSlider" id="mainSlider">
          <div class="header">
            <a href="index.php" class="navbar-brand ml-10 ml-sm-20">
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
            <div class="col-xl-4">
              <div>
              <h1 style="color:white"><?php echo $ilanBaslik; ?></h1>
                <div class="my-slider">
                 

                <?php 
                


                for ($aracgorselifor=0; $aracgorselifor < count($GorselArray); $aracgorselifor++) { 

                  echo '
                  <div class="slide active">
                  <img src="'.$GorselArray[$aracgorselifor].'" alt="Araç Detay">
                  </div>
                ';



                }


                 



                
                ?>


                    <button class="prev">&#10094;</button>
                    <button class="next">&#10095;</button>
                  </div>
             

              </div>
            </div>





            <div class="col-xl-3" style="margin: 30px; background-color: #003b39;border-radius: 35px;">
                <div class="content">

                    <table class="table" style="text-align-last: left;">
                        <thead class="thead-dark">
                          <tr>
                            <h1 class="sliderBaslik1" style="font-size: 2rem !important;text-align: center;padding: 0px !important;"><?php echo $aracMarka; ?> <?php echo $aracModel; ?></h1>
                          </tr>
                        </thead>
                        <tbody style="color: white;font-size: 1.7rem;">
                          <tr>
                            <td>MARKA :</td>
                            <td><?php echo $aracMarka; ?></td>
                          </tr>
                          <tr>
                            <td>MODEL :</td>
                            <td><?php echo $aracModel; ?></td>
                          </tr>
                          <tr>
                            <td>PAKET :</td>
                            <td><?php echo $aracPaket; ?></td>
                          </tr>
                          <tr>
                            <td>YIL :</td>
                            <td><?php echo $aracModelYili; ?></td>
                          </tr>
                          <tr>
                            <td>YAKIT :</td>
                            <td><?php echo $aracYakit; ?></td>
                          </tr>
                          <tr>
                            <td>VİTES :</td>
                            <td><?php echo $aracVites; ?></td>
                          </tr>
                        </tbody>
                      </table>  


                      <br><br>
                      <div style="width: 100%;" class="btn-group" role="group" aria-label="Another button group">
                     <button onClick="window.location.href = 'tel:<?php echo $firmaTelefon; ?>';" class="btn btn-success">Ara</button>
                     <button onClick="window.location.href = 'https://www.google.com/maps/place/<?php echo $firmaAdres; ?>';" class="btn btn-secondary">Harita</button>
                     <button onClick="window.location.href = '#aracsat';" class="btn btn-primary">Form Doldur</button>
                     
                      </div>

                </div>
            </div>



          </div>

          <div class="container">
            <div class="row">

          




              <div class="col-sm-5">
                <h1 class="sliderBaslik1" style="font-size: 2rem !important;padding-top: 20px !important;">Araç Tramer Kaydı</h1>
            <hr>
            <p class="sliderDesc1"> 
              <span style="font-family: 'Questrial', sans-serif;font-weight: bold;color: cadetblue;">BOYA :</span> <?php echo $aracBoyaDurumu; ?> <br/>
              <span style="font-family: 'Questrial', sans-serif;font-weight: bold;color: cadetblue;">LOKAL BOYA : </span> <?php echo $aracLokalBoyaDurumu; ?> <br/>
              <span style="font-family: 'Questrial', sans-serif;font-weight: bold;color: cadetblue;">DEĞİŞEN :  </span> <?php echo $aracDegisenParca; ?> <br/>
              <span style="font-family: 'Questrial', sans-serif;font-weight: bold;color: cadetblue;">TRAMER : </span> <?php echo $aracTramerKaydi; ?> <br/>
            </p>



            <h1 class="sliderBaslik1" style="font-size: 2rem !important;padding-top: 20px !important;">Araç Açıklaması</h1>
            <hr>
            <p class="sliderDesc1"> 
              
            <?php echo $aracAciklamaSatici; ?> 
                
            </p>



            <h1 class="sliderBaslik1" style="font-size: 2rem !important;padding-top: 20px !important;">Araç Ekstraları</h1>
            <hr>
            <p class="sliderDesc1"> 
              
            <?php echo $aracEkstraOzellik; ?> 
                
            </p>

            
              </div>
              
              <div class="col-sm-5">


              <div style="margin: 30px; background-color: black;border-radius: 35px;padding:20px;border:1px solid #61B5B6;">
                <div class="content" style="margin:0px !important;">
                <img src="https://tigliotomotiv.com/tigli-otomotiv-logo-disi.png" alt="" class="w-100">

                <h1 class="sliderBaslik1" style="font-size: 2rem !important;text-align: center;padding: 0px !important;">Araç Değeri: <?php echo $ilanFiyat; ?> ₺</h1>


                <table class="table table-bordered" style="color:white;font-size:1.5rem !important; font-family: 'Questrial', sans-serif !important;">
      
                            <tbody >
                         
                        mainSlider

                              <tr>
                              <td style="font-family: 'Questrial', sans-serif !important;">Model Yılı<br/><i class="fa-regular fa-calendar"></i> <?php echo $aracModelYili; ?></td>
                               <td style="font-family: 'Questrial', sans-serif !important;">Araç KM<br/><i class="fa-solid fa-gauge-high"></i> <?php echo $aracKm; ?></td>
                          
                                
                              </tr>


                              <tr>
                              <td style="font-family: 'Questrial', sans-serif !important;">Vites Türü<br/><i class="fa-solid fa-gear"></i><?php echo $aracVites; ?></td>
                               <td style="font-family: 'Questrial', sans-serif !important;">Yakıt Türü<br/><i class="fa-solid fa-gas-pump"></i> <?php echo $aracYakit; ?></td>
     
                                
                              </tr>


                              <tr>
                              <td style="font-family: 'Questrial', sans-serif !important;">Araç Durumu<br/><i class="fa-solid fa-wrench"></i> <?php echo $aracDurumu; ?></td>
                                <td style="font-family: 'Questrial', sans-serif !important;">Motor Hacmi<br/><i class="fas fa-plane"></i> <?php echo $aracMotorHacmi; ?>cc</td>
                       
                              </tr>


                              <tr>
                              <td style="font-family: 'Questrial', sans-serif !important;">Motor Gücü<br/><i class="fa-solid fa-horse"></i> <?php echo $aracMotorGucu; ?> hp</td>
                                <td style="font-family: 'Questrial', sans-serif !important;">Çekiş Tipi<br/><i class="fa-solid fa-gear"></i> <?php echo $aracCekis; ?></td>
                         
                                
                               </tr>
 
                              
                              
                            </tbody>
                          </table>



                          


                      <br>
                      <a href="https://wa.me/<?php echo $firmaTelefon; ?>"><div style="
                      width: 100%;
    background-color: #61B5B6;
    display: flex;
    height: 50px;
    align-items: center;
    justify-content: center;
    align-content: center;
    color: white;
    flex-wrap: nowrap;
    font-family: 'Questrial', sans-serif !important;
    font-size: 2rem;
    border-radius:20px;
    "><i class="fab fa-whatsapp"></i>Whatsapp'dan yazın!</div></a>
                      
                      <br>

                </div>
            </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>
 

         <style>
            .my-slider {
              position: relative;
              width: 100%;
              height: auto;
              min-height: 400px;
              margin: 0 auto;
             
            }
            
            .slide {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              opacity: 0;
              transition: opacity 0.5s ease-in-out;
            }
            
            .slide.active {
              opacity: 1;
            }
            
            .slide img {
              width: 100%;
              height: 100%;
              object-fit: cover;
              border-radius: 30px;  
          }
            
            .prev,
            .next {
              position: absolute;
              top: 50%;
              transform: translateY(-50%);
              font-size: 30px;
              font-weight: bold;
              color: #fff;
              background-color: rgba(0, 0, 0, 0.5);
              border: none;
              cursor: pointer;
            }
            
            .prev {
              left: 0;
            }
            
            .next {
              right: 0;
            }
            .table td, .table th {
                text-align: left;
                padding: 6px;
            }

        
            </style>
            
            <script>
            const slides = document.querySelectorAll(".my-slider .slide");
            const prevButton = document.querySelector(".my-slider .prev");
            const nextButton = document.querySelector(".my-slider .next");
            let currentIndex = 0;
            
            function showSlide(index) {
              slides[currentIndex].classList.remove("active");
              slides[index].classList.add("active");
              currentIndex = index;
            }
            
            function showPrevSlide() {
              let index = currentIndex - 1;
              if (index < 0) {
                index = slides.length - 1;
              }
              showSlide(index);
            }
            
            function showNextSlide() {
              let index = currentIndex + 1;
              if (index === slides.length) {
                index = 0;
              }
              showSlide(index);
            }
            
            prevButton.addEventListener("click", showPrevSlide);
            nextButton.addEventListener("click", showNextSlide);
            
            setInterval(showNextSlide, 5000);


            

            </script>
            
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


  <script src="index.js"></script>
  <script>
      
         
      myDiv.addEventListener("scroll", function() {
        let opacity = myDiv.scrollTop / (myDiv.scrollHeight - myDiv.clientHeight) * 2;
        opacity = opacity < 0 ? 0 : opacity; // Minimum opacity
        myDiv.style.backgroundImage = `linear-gradient(to top, rgba(0,0,0,${opacity}), rgba(0,48,49,${opacity}))`;
      });



  </script>
       
  </body>
</html>