<?php 

use App\controllers\UserController;
use App\app\Redirect;
UserController::logout();
Redirect::to('login');



?>