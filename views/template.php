<!DOCTYPE html>
<html lang="es" >

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.20">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Floreria Celina</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
   <link rel="shortcut icon" href="img/flor.png" />
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link href="css/estilos.css"  rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    
  </style>

</head>
<body>





  
<?php 
$mvc = new mvcControlador();
$mvc -> enlaces_controlador();
 ?>





<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.24/angular.min.js"> </script>


<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
        new WOW().init();

  </script>
<script type="text/javascript" src="js/accione.js"></script>
</body>

</html>