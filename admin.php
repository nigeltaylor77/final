

<?php 


$title= 'Admin login';
require_once 'includes/header.php';
require_once 'db/conn.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') 

$username =strtolower(trim($_POST['username']));
$password= $_POST['password'];
$new_password =md5($password.$username);


 $result = $player->getuser($username,$new_password);

if(!$result){
 // echo 'error';

}else{

  $_SESSION['username']=$username;
  $_SESSION['id'] = $results['id'];
  header("Location:viewRecord.php");
}
?>

<h1 class="text-center">Admin Login</h1>
<br>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" name="username" id="username" class="form-control"
    value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">

  </div>
  <div class="mb-3">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
 
  <button type="submit" value="login" class="btn btn-primary">Submit</button>
</form>


