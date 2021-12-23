

<?php 

$title= 'Thankyou';


require_once 'includes/header.php';

require_once 'db/conn.php';


if(isset($_POST['submit'])){
    $fname= $_POST['firstname'];
    $lname= $_POST['lastname'];
    $gender= $_POST['gender'];
    $email= $_POST['emailaddress'];





  $isThankyou = $crud->insertAttendees($fname,$lname,$gender,$email);

    if ($isThankyou){
//echo '<h1 claass="text-center text-succes">You have been registered</h1>';
    }
    else{

      
echo '<h1 class= "text-center text-danger">there was an error in processing</h1>';
    }

}

?>
<h1 class="text-center text-success">You have Registered</h1>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h4 class= "card-picture"></h4>
    <h5 class="card-title"><?php echo $_POST['firstname'] .''. $_POST['lastname'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['gender'];?></h6>
    <p class="card-text">Email: <?php echo $_POST['emailaddress'];?></p>
    
  </div>
</div>
<?php  



?>
<br>
<br>
<br>
<br>
 



    


</head>
<body>
    
</body>
</html>