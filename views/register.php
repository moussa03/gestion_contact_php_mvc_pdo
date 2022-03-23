<?php 
use App\controllers\HomeController;
use App\controllers\UserController;
include( $_SERVER['DOCUMENT_ROOT'] .'/gestion_contact/views/includes/header.php' ); 

if(isset($_POST['register'])){
	$contact=new UserController();
	$data=$contact->registerUser();
	
}
?>



<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Créer un compte</h4>
	<form action="<?php echo BASE_URL ?>/register" method="post">
		<input type="hidden" name="register">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="fullname" class="form-control" placeholder="Nom complét" type="text" >
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Adresse email" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
			

		</div>
		<select class="custom-select" style="max-width: 120px;" name="selected_phone">
		    <option selected="">+971</option>
		    <option value="1">+972</option>
		    <option value="2">+198</option>
		    <option value="3">+701</option>
		</select>
    	<input name="phone" class="form-control" placeholder="Numéro de tél" type="text">
    </div> <!-- form-group// -->
    <!-- <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control">
			<option selected=""> Select job type</option>
			<option>Designer</option>
			<option>Manager</option>
			<option>Accaunting</option>
		</select>
	</div> form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="password" placeholder="Create password" >
    </div> <!-- form-group// -->
  <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Créer un Compte  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Vous avez un compte? <a href="<?php echo BASE_URL ?>/login">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 