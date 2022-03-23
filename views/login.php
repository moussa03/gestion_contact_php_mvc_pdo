<?php 

// echo "this is login";
require_once realpath('vendor/autoload.php');
use App\controllers\UserController;
include( $_SERVER['DOCUMENT_ROOT'] .'/gestion_contact/views/includes/header.php' ); 
if(isset($_POST['login'])){
    $user=new UserController();
    $userLogin=$user->auth();
}


?>
<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Sign in</h4>
	<form method="post" action="<?php echo BASE_URL?>/login">
    <?php  include('views/includes/alerts.php') ?>
	<!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Adresse email" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Mot de passe" type="password" name="password">
    </div> <!-- form-group// -->
  <!-- form-group// -->                                      
    <!-- form-group// --> 
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="login"> Login  </button>
    </div>      
    <p class="text-center">Vous avez un compte? <a href="<?php echo BASE_URL ?>/register">Créer Un compte</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 