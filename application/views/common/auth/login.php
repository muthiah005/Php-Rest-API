  	

	<div style="width:50%;margin:auto">

	<div class="row no_margin mb_0">
  		<div class="col s12 m12 l12 p0">
  			<div class="info_holder">
  				<h4>Login</h4> 
  			</div>
  		</div>
  	</div>

   	<div class="row">
	<form class="col s12 m12 l12 " name="userForm"  role="form" action="<?php echo base_url();?>index.php/authentication/authlogin" method="post">
		<div class="row mb_0">
			<div class="input-field col s12 m12 l12 ">
				<input  id="name" type="text" class="validate" 
				maxlength="50" ng-model='userForm.name' name="username" required>
				<label for="name">Name</label>
			</div>
		</div>
		<div class="row mb_0">
			<div class="input-field col s12 m12 l12 ">
				<input id="password" type="password" class="validate" name="password" maxlength="50" ng-model='userForm.company' required>
				<label for="password">Password</label>
			</div>
		</div>
		<div class="row">
			<div style="text-align:right;margin-right:20px;"><a href="#" >Forget password</a></div>
		</div>
		<div class="row button_holder">
			<div class="col s12 m12 l12 ">
				<a class="waves-effect waves-light btn" ng-disabled="userForm.$invalid" >
					Login
				</a>
				<a class="waves-effect waves-light btn red darken-1" ng-click="cancel()">
					Cancel
				</a>
			</div>
		</div>
	</form>
		
	</div>
  