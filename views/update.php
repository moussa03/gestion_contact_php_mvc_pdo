<?php
require_once realpath('vendor/autoload.php');
use App\controllers\Contact_Controller;
if(isset($_POST['id'])){
 
    $existContact=new Contact_Controller();
    $Contact=$existContact->GetEmploye();
}
if(isset($_POST['contact_id'])){
  $ContactUpdate=new Contact_Controller();
  $ContactUpdate->UpdateContact();
}

?>
<div class="container">
<form method="post"  class="add_contact_form">
<a href="<?php echo BASE_URL?>/home"><i class="fa-solid fa-house-user"></i></a>
<input type="hidden" name="contact_id" value="<?php echo $Contact->contact_id ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom complet *</label>
    <input type="text" class="form-control" name="fullname" id="exampleInputEmail1" value="<?php echo $Contact->fullname ?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email addresse</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?php echo $Contact->email ?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Adresse</label>
    <input type="text" name="adresse" value="<?php echo $Contact->adresse ?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">phone</label>
    <input type="text" name="phone" class="form-control" id="exampleInputPassword1" value="<?php echo $Contact->phone ?>">
  </div>
  <div>
    <select name="contact_status" id="" value="" class="form-control">
      <option value="1" <?php echo $Contact->contact_status?"selected":"" ?> >Active</option>
      <option value="0" <?php echo $Contact->contact_status?"":"selected" ?>>Résilié</option>      
    </select>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Mettre à jour</button>
</form>
</div>
