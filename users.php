<?php
Class player{

private $db;

function __construct($conn){
    $this->db = $conn;
}

public function createuser($username,$password){
    try {
        $result = $this->getuserbyname($username);
        if($result){
        
            return false;
        } else{
            $new_password = md5($password.$username);
            $sql = "INSERT INTO adminuser (username,password) 
        VALUES (:username,:password)";
            $stmt =$this->db->prepare($sql);
            $stmt->bindparam(':username', $username);
            $stmt->bindparam(':password', $new_password);
            $stmt->execute();
            return true;
        }
 }catch (PDOException $e){
    echo $e->getMessage();
    return false;
            }

}

public function getuser($username,$password){

    $sql="SELECT * FROM  adminuser WHERE username =:username AND password = :password";
    $stmt = $this->db->prepare($sql);
    $stmt->bindparam(':username', $username);
    $stmt->bindparam(':password', $password);
    $stmt->execute();
    $result= $stmt->fetch();
    return $result;
}

public function getuserbyname($username){
    
    $sql="SELECT * FROM adminuser WHERE username=:username";
    $stmt = $this->db->prepare($sql);
    $stmt->bindparam(':username', $username);
    $stmt->execute();
    $result= $stmt->fetch();
    return $result;
}



}




?>