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
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#Women">Women clothing
             <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Men">Men clothing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Jewelery">Jewelery</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <style> img {width: 50%; display: block; margin-left: auto; margin-right: auto; margin-top:auto; margin-bottom:auto;padding: 20px 0;}</style>

  <!-- Page Content -->
  <div class="container" id="Women">
       <h3>Women clothing</h3> 

    
      <!-- /.col-lg-3 -->

    <div  class="row">
        
        
      <?php
  
      $endpoint = "https://fakestoreapi.com/products";
      $json = file_get_contents($endpoint);
      $array = json_decode($json, true);
      
        echo "<br>";
        foreach ($array as $key => $value) {
            if("$value[category]" == 'women clothing'){
              echo "<div class='col-lg-4 col-md-6 mb-4'>";
                echo "<div class='card h-100'>";
                  echo "<a href=$value[image] target='_blank' padding: 40px;><img src='$value[image]' alt=''></a>";
                   echo "<div class='card-body'>";
                      echo "<h4 class='card-title'>";
                        echo "<a href=$value[image] target='_blank'>$value[title]</a>";
                      echo "</h4>";
                      echo "<h5>Price: $value[price]</h5>";
                      echo "<p class='card-text'><b>Description:</b> $value[description]</p>";
                    echo "</div>";
                  echo "</div>";
                echo "</div>";
            }
        }

       ?>
       
    </div>
        <!-- /.row -->
  </div>
  <!-- /.container -->

    <!-- /.container -->
    <!-- Page Content -->
  <div class="container" id="Men">
       <h3>Men clothing</h3>

    <div  class="row">
        
       <?php
       foreach ($array as $key => $value) {
          if("$value[category]" == 'men clothing'){
            echo "<div class='col-lg-4 col-md-6 mb-4'>";
              echo "<div class='card h-100'>";
                echo "<a href=$value[image] target='_blank'><img src='$value[image]' alt=''></a>";
                echo "<div class='card-body'>";
                    echo "<h4 class='card-title'>";
                      echo "<a href=$value[image] target='_blank'>$value[title]</a>";
                    echo "</h4>";
                    echo "<h5>Price:  $value[price]</h5>";
                    echo "<p class='card-text'>Description: $value[description]</p>";
                  echo "</div>";
                echo "</div>";
              echo "</div>";
          }
       }
       ?>
    </div>
        <!-- /.row -->
  </div>
  <!-- /.container -->
    <!-- /.container -->
    <!-- Page Content -->
  <div class="container" id="Jewelery">
       <h3>Jewelery</h3> 

      <!-- /.col-lg-3 -->

      <div  class="row">
      
       <?php
        foreach ($array as $key => $value) {
          if("$value[category]" == 'jewelery'){
            echo "<br><div class='col-lg-4 col-md-6 mb-4'>";
              echo "<div class='card h-100'>";
                echo "<a href=$value[image] target='_blank'><img src='$value[image]' alt=''></a>";
                echo "<div class='card-body'>";
                    echo "<h4 class='card-title'>";
                      echo "<a href=$value[image] target='_blank'>$value[title]</a>";
                    echo "</h4>";
                    echo "<h5>Price: $value[price]</h5>";
                    echo "<p class='card-text'>Description: $value[description]</p>";
                  echo "</div>";
                echo "</div>";
              echo "</div>";
          }
        }
       ?>

      </div>
        <!-- /.row -->

  </div>
  <!-- /.container -->

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
