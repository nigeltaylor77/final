

<?php

$title ='View Records';

require_once 'includes/adminheader.php';
require_once 'db/conn.php';
$results = $crud->getAttendees();


?>


<table class= "table">
    <tr>
        <th>#</th>
        <th>Firt Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Email Address</th>
        <th>Actions</th>
    </tr>
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){?>
<tr>

<td><?php echo $r['register_id'] ?> </td>
<td><?php echo $r['firstname'] ?></td>
<td><?php echo $r['lastname'] ?> </td>
<td><?php echo $r['gender'] ?></td>
<td> <?php echo$r['emailaddress'] ?></td>
    

<td><a href="vaR.php?id=<?php echo $r['register_id'] ?>"class="btn btn-primary">View</a>
<a href="editRecord.php?id=<?php echo $r['register_id'] ?>"class="btn btn-warning">Edit</a>
<a onclick="return confirm('delete record?')" href="deleteRecord.php?id=<?php echo $r['register_id'] ?>"class="btn btn-danger">Delete</a></td>
</tr>

        <?php }?>
</table>



<br>
<br>
