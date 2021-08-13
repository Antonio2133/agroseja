<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administración Agroseja</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="Vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="Vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Vistas/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="Vistas/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="Vistas/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="Vistas/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="Vistas/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="Vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="Vistas/css/estilos.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="Vistas/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- jQuery 3 -->
<script src="Vistas/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="Vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini login-page">

 <?php

    if(isset($_SESSION["ingreso"]) && $_SESSION["ingreso"] == true){
      echo '<div class="wrapper">';
      include "modulos/cabecera.php";
      include "modulos/menu.php";

      if(isset($_GET["url"])){
        if($_GET["url"] == "inicio" || $_GET["url"] == "ingreso" || $_GET["url"] == "usuarios" || $_GET["url"] == "salir" 
        || $_GET["url"] == "perfil" || $_GET["url"] == "slide" || $_GET["url"] == "nosotros" || $_GET["url"] == "servicios"
        || $_GET["url"] == "galeria" || $_GET["url"] == "tractores" || $_GET["url"] == "mensajes" || $_GET["url"] == "suscriptores"
        || $_GET["url"] == "generales" || $_GET["url"] == "agroquimicos" || $_GET["url"] == "herramientas" || $_GET["url"] == "cotizador"){
          
          include "modulos/".$_GET["url"].".php";
      }
    }else{
      include "modulos/inicio.php";
    }
      echo '</div>';
  }else{
      include "modulos/ingreso.php";
    }
 ?>


<!-- jQuery UI 1.11.4 -->
<script src="Vistas/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Morris.js charts -->
<script src="Vistas/bower_components/raphael/raphael.min.js"></script>
<script src="Vistas/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="Vistas/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="Vistas/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="Vistas/bower_components/moment/min/moment.min.js"></script>
<script src="Vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="Vistas/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Slimscroll -->
<script src="Vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="Vistas/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="Vistas/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="Vistas/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Vistas/dist/js/demo.js"></script>

<script src="Vistas/js/usuarios.js"></script>
<script src="Vistas/js/slide.js"></script>
<script src="Vistas/js/servicios.js"></script>
<script src="Vistas/js/galeria.js"></script>
<script src="Vistas/js/mensajes.js"></script>


</body>
</html>
