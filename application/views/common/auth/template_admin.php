<!DOCTYPE html>
<html>
<head>
<title><?php echo $title;?></title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css"> 
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/matstepper/mstepper.min.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"> 
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/sweetalert/sweetalert.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.css">
<script type="text/javascript">
	window.onetoten = {};
	window.onetoten.base_url = '<?php echo base_url(); ?>';
	window.onetoten.isLoggedIn =  '<?php echo $isLoggedIn; ?>';
</script>
</head>
<body  ng-app="videoplayer">
	<div ng-controller="HomeController">
		<!-- header starts -->
		<nav class="bg_blue">
			<div class="nav-wrapper">
				<a href="#" class="brand-logo">
					<img src="<?php echo base_url(); ?>/assets/img/logo.png"/>
				</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="javascript:void(0)">Welcome <b>Santhosh</b></a></li>
					<li><a href="<?php echo base_url(); ?>index.php/authentication/logout">Logout</a></li>
				</ul>
			</div>
		</nav>
		<!-- header end -->
		<!-- Content -->
		<div class="ad_content_holder">
			<div class="row mb_0">
				<?php if($isLoggedIn === "true") {?>
				<div class="col l3 m3 s3 bgcolor_eee sidenav_container p0">
					 <ul class="collapsible">
					    <li>
					      <div class="collapsible-header"><i class="material-icons">account_circle</i>Users</div>
					      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
					    </li>
					    <li>
					      <div class="collapsible-header"><i class="material-icons">assignment</i>Kits</div>
					      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
					    </li>
					    <li>
					      <div class="collapsible-header"><i class="material-icons">account_balance</i>Third</div>
					      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
					    </li>
					  </ul>
				</div>
				<?php }  ?>
				<div class="col l9 m9 s9">
					<?php $this->load->view($content);?>
				</div>
			</div>
		</div>
		<!-- Content -->
	</div>

<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/angular/angular.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/angular/angular-animate.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/angular/angular-aria.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/angular/angular-ui-router.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/angular/angular-resource.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/angular/angular-sanitize.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/angular-dragndrop/angular-dragdrop.js"></script>
<script src="<?php echo base_url();?>assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
<script src="<?php echo base_url();?>assets/js/matstepper/mstepper.min.js"></script>
<script src="<?php echo base_url();?>assets/src/videoplayer.js"></script>
<script src="<?php echo base_url();?>assets/src/directives/common_directive.js"></script>
<script src="<?php echo base_url();?>assets/src/services/data_factory.js"></script>
<script src="<?php echo base_url();?>assets/src/controllers/common_controllers.js"></script>
</body>
</html>