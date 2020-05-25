<!-- =================================================
Theme Name: BRANDO Bootstrap Theme 
Author: WebThemez.com
License: https://webthemez.com/license
======================================================= -->
  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BRANDO Bootstrap 4 Website Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta content="Author" name="WebThemez">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet"> 
</head>

<body id="body"> 
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

    <div id="logo" class="pull-left">
        <h1><a href="index.html" id="body" class="scrollto"> Inti Laut Rental</a></h1> 
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Home</a></li>
          <li class="menu-active"><a href="portfolio.php">Portfolio</a></li>
          <li><a href="pricelist.php">Daftar harga</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

<!--==========================
    Page Banner Section
  ============================-->
  <section id="innerBanner"> 
    <div class="inner-content">
      <h2><span>Portfolio</span><br>We create the opportunities!</h2>
      <div> 
      </div>
    </div> 
  </section><!-- #Page Banner -->

  <main id="main">
   

    <!--==========================
      Our Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
         
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
      </div>

      <!-- <div class="container-fluid"> -->
      <div> 
        <div class="row no-gutters">

        <?php
          $arrPhotos = [
            'babyroller.jpg', 'moln.jpg', 'jackhammer.png', 'stpkuda.jpg', 'stpkodok.jpg', 'vibrator.png', 'genset.png'
          ];
          $arrName = [
            'Baby Roller', 'Moln Aduk', 'Jack Hammer', 'Stamper Kuda', 'Stamper Kodok', 'Vibrator', 'Genset'
          ]
        ?>

        <?php 
          for($i = 0 ; $i < count($arrPhotos) ; $i++) {
            echo '<div class="col-lg-3 col-md-4">
              <div class="portfolio-item wow fadeInUp">
                <a href="img/products/'.$arrPhotos[$i].'" class="portfolio-popup">
                  <img src="img/products/'.$arrPhotos[$i].'" alt="">
                  <div class="portfolio-overlay">
                    <div class="portfolio-info"><h2 class="wow fadeInUp">'.$arrName[$i].'</h2></div>
                  </div>
                </a>
              </div>
            </div>';  
          }
        ?>

        </div>

      </div>
    </section><!-- #portfolio -->
    

  </main>

  <?php include('footer.php'); ?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript  -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script> 
 <script src="contact/jqBootstrapValidation.js"></script>
 <script src="contact/contact_me.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
