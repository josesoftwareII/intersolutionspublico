	<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body>

<div class="navbar-fixed ">
<nav>
    <div class="nav-wrapper blue lighten-1">
      <a href="http://buenosplanes.comeze.com" class="brand-logo center">BuenosPlanes</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="http://buenosplanes.comeze.com">Inicio</a></li>
        <li><a href="#">Compartenos tu mejor plan</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="http://buenosplanes.comeze.com">Inicio</a></li>
        <li><a href="#">Compartenos tu mejor plan</a></li>
      </ul>
    </div>
  </nav>
</div>

  <div class = "conteiner light-blue lighten-1 col s12 m12 l12">
     <div class="row">
      <div class="col s12">
        <?php
        include 'php/sites/select_sites.php';
?>      
      </div>
    </div>
  </div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script type="text/javascript">
$( document ).ready(function(){
  $(".button-collapse").sideNav();
});
  </script>
</body>
</html>
