

<?php require_once 'includes/header.php';


require_once 'db/conn.php';







?>




<form method="post" class="row g-3 needs-validation" validate action="thankyou.php">



<div class="input-group mb-3"  >
<div> <label>Profile Picture</label> </div>
  <input  type="file" accept="image/*" class="form-control" id="avatar" name="avatar">
  <label class="input-group-text" for="avatar">Upload</label>
</div>

  <div class="col-md-4">
    <label for="firstname" >First name</label>
    <input required type="text" class="form-control" id="firstname" name="firstname">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="lastname" >Last name</label>
    <input required type="text" class="form-control" id="lastname"name="lastname">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="emailaddress">Email Address</Address></label>
    <div class="input-group has-validation">
      <input required type="text" class="form-control" id="emailaddress"name="emailaddress"
       aria-describedby="inputGroupPrepend">
      <div class="invalid-feedback">
        enter email address.
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <label for="gender" >Gender</Address></label>
    <div class="input-group has-validation">
      <input required type="text" class="form-control" id="gender" name="gender">
      <div class="invalid-feedback">
        Type your gender.
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" required type="checkbox" value="" id="invalidCheck" >
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
  </div>




</form>

