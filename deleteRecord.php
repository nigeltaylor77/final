<?php
 


require_once 'db/conn.php';



if(!$_GET['id']){
    echo 'error';
   //include 'includes/error.php';
}
else{
    $id = $_GET['id'];

    $result = $crud->deleteAttendee($id);


    if($result)
    {

        header("Location:viewRecord.php");
    }

else{
    echo 'error';

   //include 'includes/error.php';
}

}

?>