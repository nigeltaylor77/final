<?php


$title ='View A Record';
require_once 'includes/adminheader.php';


require_once 'db/conn.php';





if(isset($_GET['id'])){
    $id= $_GET['id'];
    $result= $crud->getAttendeesDetails($id);
}else{

    echo "<h1 class='text-danger'> Try again</h1>";
}
?>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $result['firstname'] .''. $result['lastname'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['gender'];?></h6>
    <p class="card-text">Email: <?php echo $result['emailaddress'];?></p>
    
  </div>
</div>

<a href="viewRecord.php"class="btn btn-info">List</a>
<a onclick="return confirm('delete record')" href="deleteRecord.php?id=<?php echo $result['register_id'] ?>
"class="btn btn-danger">Delete</a></td>

<br>
<br>


