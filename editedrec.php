<?php


$title ='Update';


require_once 'db/conn.php';


if(isset($_POST['submit'])) {

    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $gender= $_POST['gender'];
    

$result =$crud->editAttendee($id,$fname,$lname,$gender);

if($result){
    header("Location: viewRecord.php");
}
else{
   echo 'error';
   //include 'includes/error.php';
}

}
else{
echo 'error';
//include 'includes/error.php';
}

?>