<?php 
require_once realpath('vendor/autoload.php');
use  App\controllers\Contact_Controller;
use App\models\Contact;
// print($const->const());
$contact=new Contact_Controller();
$data=$contact->getcontacts();

if(isset($_POST['search'])){

  $contact=new Contact_Controller();
  $data=$contact->serchContact();
  
}
else {
  $contact=new Contact_Controller();
  $data=$contact->getcontacts();
}

// else {
//   $contact=new Contact_Controller();
//   $contact->allCOntact();
// }

?>

<div class="w-100 p-5">
<?php  include('views/includes/alerts.php') ?>

  <div class="form-header">
    <div>
    <div class="d-flex align-items-center user">
       <p><i class="fa-solid fa-user"></i><h3><?php echo $_SESSION['username'] ?></h3></p>
    </div>
     <a class="add_contact" href="<?php echo BASE_URL?>/add"><i class="fa-solid fa-plus"></i></a>
        <a class="home" href="<?php echo BASE_URL?>/home"><i class="fa-solid fa-house-user"></i></a>
        <a href="<?php echo BASE_URL?>/logout" class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
     </div>
     
  <form action="<?php BASE_URL ?>./home" method="post">
  <div class="input-group">
  <div class="form-outline">
    <input id="search-input" type="search" id="form1" class="form-control" name="find" />
  </div>
  <button id="search-button" type="submit" class="btn btn-primary" name="search">
    <i class="fas fa-search"></i>
  </button>
</div>
</div>
 </form>
<div>
    
  <table class="table">
  <thead>

    <tr>
    <!-- <a class="add_contact" href="<?php echo BASE_URL?>/add"><i class="fa-solid fa-plus"></i></a> -->
      <th scope="col">Nom complét</th>
      <th scope="col">email</th>
      <th scope="col">Numéro de tél</th>
      <th scope="col"> Adresse  </th>
      <th scope="col"> Status  </th>
      <th scope="col"> Mettre à jour  </th>
      <th scope="col"> Supprimer  </th>
    </tr>
  </thead>
  <tbody>
    <?php 
    
    foreach($data as $item){
      ?>
    <tr>
      <!-- <th scope="row">1</th> -->
      <td> <?php echo $item['fullname']?></td>
      <td><?php echo $item['email'] ?> </td>
      <td><?php echo $item['phone'] ?> </td>
      <td><?php echo $item['adresse'] ?> </td>
      <?php echo ($item['contact_status']==1) ? "<td> <span class='badge bg-success'>active</span> </td>" :"<td> <span class='badge bg-warning'>désactivé</span> </td>";?>
      <td class="update-table">  
      <form method="post" action="update">
        <input type="hidden" value="<?php echo $item['contact_id']?>" name="id">
        <!-- <a class="update" onclick=""><i class="fa-solid fa-pen"></i></a> -->
        <button class="update"> <i class="fa-solid fa-pen"></i></button>
        <!-- <input type="submit"> -->
        </form>
      </td>
      <td class="trash-table"> 
        <form method="post" action="delete">
          <input type="hidden" value="<?php echo $item['contact_id']?>" name="id">
         <button class="delete"> <i class="fa-solid fa-trash"></i></button>
         </form>
      </td>  
    </tr>

    <?php 
    }
    ?>
    
    
  </tbody>
</table>
  </div>
  </div>
  