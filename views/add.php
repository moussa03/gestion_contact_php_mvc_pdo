<?php
require_once realpath('vendor/autoload.php');

use App\controllers\Contact_Controller;
use App\models\Contact;
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $user_contact=new Contact_Controller();
  $user_contact->add();
}

?>
<div class="container">
<form method="post"  class="add_contact_form">
<a href="<?php echo BASE_URL?>/home"><i class="fa-solid fa-house-user"></i></a>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom complet *</label>
    <input type="text" class="form-control" name="fullname" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label  class="form-label">Email addresse</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Adresse</label>
    <input type="text" name="adresse" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">phone</label>
    <input type="text" name="phone" class="form-control" id="exampleInputPassword1">
  </div>
  <div>
    <select name="contact_status" id="" class="form-control">
      <option value="1">Active</option>
      <option value="0">Résilié</option>
    </select>
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div> -->
  
  <button type="submit" class="btn btn-primary">Ajouter Contact</button>
</form>
</div>
