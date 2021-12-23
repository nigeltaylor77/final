<?php 

$title ='Edit';


require_once 'includes/adminheader.php';
require_once 'db/conn.php';

$reulsts = $crud->getSpecialties();




if(!isset($_GET['id'])){
 echo 'error';
//include 'includes/error.php';
//header("Location:viewRecord.php");

}
else{
    $id =$_GET['id'];
    $register = $crud->getAttendeesDetails($id);

    ?>

    <form method="post" class="row g-3 needs-validation" novalidate action="editedrec.php">
    <input type="hidden" name= "id" value="<?php echo $register['register_id'] ?>"/>
<div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" name="firstname"id="firstname" value=<?php echo $register['firstname']?>>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="lastname" name="lastname"value=<?php echo $register['lastname']?>>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Gender</Address></label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" name="gender" id="gender" value=<?php echo $register['gender']?> aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Type your gender.
      </div>
    </div>
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
  </div>

</form>

<?php }

?>