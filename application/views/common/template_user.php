<!DOCTYPE html>
<html>
<head>
<title>Ten</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="./assets/css/materialize.min.css"> 
<link rel="stylesheet" href="./assets/js/matstepper/mstepper.min.css"/>
<link rel="stylesheet" href="./assets/css/style.css"> 
<link rel="stylesheet" href="./assets/plugins/sweetalert/sweetalert.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.css">
  <!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="./assets/plugins/slick/slick.css"/>
</head>
<body  ng-app="videoplayer">

	<div ng-controller="HomeController">
		<!-- Content -->
<?php $this->load->view($content);?>
<!-- Content -->
	</div>

<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/plugins/angular/angular.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.js"></script>
<script src="./assets/plugins/angular/angular-animate.min.js"></script>
<script src="./assets/plugins/angular/angular-aria.min.js"></script>
<script src="./assets/plugins/angular/angular-ui-router.min.js"></script>
<script src="./assets/plugins/angular/angular-resource.min.js"></script>
<script src="./assets/plugins/angular/angular-sanitize.min.js"></script>
<script src="./assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="./assets/js/materialize.min.js"></script>
<script src="./assets/js/matstepper/mstepper.min.js"></script>
<script type="text/javascript" src="./assets/plugins/slick/slick.js"></script>
<script src="./assets/src/videoplayer.js"></script>
<script src="./assets/src/directives/common_directive.js"></script>
<script src="./assets/src/services/data_factory.js"></script>
<script src="./assets/src/controllers/common_controllers.js"></script>

</body>

</html>