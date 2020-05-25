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
          <li><a href="portfolio.php">Portfolio</a></li>
          <li class="menu-active"><a href="pricelist.php">Daftar harga</a></li>
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
      <h2><span>Pricelist</span><br>We offer the best products low price</h2>
      <div> 
      </div>
    </div> 
  </section><!-- #Page Banner -->

  <main id="main">
   
    <section class="wow fadeInUp">
    <?php
      $arrItems = [
        [
          'name'  => 'Baby Roller',
          'day'   => '350,000',
          'week'  => '2,275,000',
          'month' => '9,000,000',
        ],[
          'name'  => 'Moln Aduk',
          'day'   => '350,000',
          'week'  => '1,750,000',
          'month' => '3,500,000',
        ],[
          'name'  => 'Stamper Kuda',
          'day'   => '300,000',
          'week'  => '1,500,000',
          'month' => '3,500,000',
        ],[
          'name'  => 'Stamper Kodok',
          'day'   => '250,000',
          'week'  => '1,500,000',
          'month' => '3,500,000',
        ],[
          'name'  => 'Cutting Beton',
          'day'   => '500,000',
          'week'  => '-',
          'month' => '-',
        ],[
          'name'  => 'Jack Hammer',
          'day'   => '500,000',
          'week'  => '3,150,000',
          'month' => '-',
        ],[
          'name'  => 'Genset',
          'day'   => '300,000',
          'week'  => '1,500,000',
          'month' => '-',
        ],[
          'name'  => 'Vibrator',
          'day'   => '300,000',
          'week'  => '1,500,000',
          'month' => '3,500,000',
        ],[
          'name'  => 'Pompa Air',
          'day'   => '300,000',
          'week'  => '-',
          'month' => '-',
        ],[
          'name'  => 'Airman All-in',
          'day'   => '1,000,000',
          'week'  => '-',
          'month' => '-',
        ],[
          'name'  => 'Tendem Roller',
          'day'   => '1,000,000',
          'week'  => '-',
          'month' => '-',
        ],
        
      ];
    ?>
      <table style="color:black" class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Alat</th>
            <th>Harian</th>
            <th>Mingguan</th>
            <th>Bulanan</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
            foreach ($arrItems as $key => $value) {
              echo "
              <tr>
                <td> ".$i. "</td>
                <td> ".$value['name']. "</td>
                <td> ".$value['day']. "</td>
                <td> ".$value['week']. "</td>
                <td> ".$value['month']. "</td>
              </tr>
              ";
              $i++;
            }
          ?>
        </tbody>
      </table>
    </section>
    

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
