 <?php
    $servername = "mysqldb.cpon2ucgliii.us-west-2.rds.amazonaws.com";
    $username = "admin";
    $password = "admin123";
    $dbname = "customers";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT hallticketno, name, telugu, hindi, english, maths, science, social, totalmarks FROM students WHERE hallticketno='".$_POST['select']."'";
    $result = $conn->query($sql);
    ?>

<!DOCTYPE html>
<html lang="en">

  <head>
               <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      background-color: pink;
    }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>TS Result Website</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-seo-dream.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 563 SEO Dream

https://templatemo.com/tm-563-seo-dream

-->

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h4>TS Result Website <img src="assets/images/logo-icon.png" alt=""></h4>
            </a>
            <!-- ***** Logo End ***** -->

          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">

                   <form method="post">
        <div id="select">
         <p> Enter Hall Ticket Number :  <input type="text" name="select">

            </p><br>
            <p><input type="submit" name="sub" style="background-color:Cyan"></p><br><br>
                   </div>

        </form>
        <?php
        if (isset($_POST['sub'])) {
      echo "<table><tr><th> HallTicketNo </th><th> Name </th> <th> Telugu </th> <th> Hindi </th> <th> English </th> <th> Maths </th> <th> Science </th> <th> Social </th> <th> TotalMarks </th></tr>";
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["hallticketno"]. "</td><td>" . $row["name"]. "</td><td>" . $row["telugu"]. "</td><td>" . $row["hindi"]. "</td><td>" . $row["english"]. "</td><td>" . $row["maths"]. "</td><td>" . $row["science"]. "</td><td>" . $row["social"]. "</td><td>" . $row["totalmarks"]. " </td></tr>";
      }
      echo "</table>";
    } else {
      echo "Enter Correct Hall Ticket Number";
    }

    $conn->close(); 
    ?> 
                    
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/banner-right-image.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>
