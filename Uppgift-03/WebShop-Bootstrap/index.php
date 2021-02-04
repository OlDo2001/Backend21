<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>
 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">WebShop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <style> img {width: 50%; display: block; margin-left: auto; margin-right: auto; margin-top:auto; margin-bottom:auto;padding: 20px 0;}</style>

  <!-- Page Content -->
  <div class="container">
       <h3>BÄSTSÄLJARE</h3> 
      <!-- /.col-lg-3 -->

    <div  class="row">
        
      <?php
      $count = $_GET['show'] ?? '10';
      $endpoint = "http://localhost/Uppgift-03/WebshopApi/";
      $endpoint = $endpoint . "?show=$count";

      $json = @file_get_contents($endpoint);
     
      if (strlen($json)<4) {
        echo "
            <div class='alert alert-danger' role='alert'>
                Problem med att hämta data just nu!
            </div>
        ";
      }
      else 
      {
        $products = json_decode($json, true);
      
        if (isset($products['msg'])) echo $products['msg'];
        else{
         echo "<br>";
         foreach ($products as $key => $value) {
                echo "<div class='col-lg-4 col-md-6 mb-4'>";
                  echo "<div class='card h-100'>";
                    echo "<a href=$value[bild] target='_blank' padding: 40px;><img src='$value[bild]' alt=''></a>";
                     echo "<div class='card-body'>";
                        echo "<h4 class='card-title'>";
                          echo "<a href=$value[bild] style='width:300px; height:200px'target='_blank'>$value[produkt]</a>";
                        echo "</h4>";
                        echo "<h5>Pris: $value[pris]</h5>";
                        echo "<p class='card-text'><b>Beskrivning:</b> $value[beskrivning]</p>";
                         echo "<h6>Antal i lager: $value[antal] st.</h6>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";
          }
        }
      } 

       ?>
       
    </div>
        <!-- /.row -->
  </div>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Olga Domorod 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
