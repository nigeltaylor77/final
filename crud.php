
<?php

Class crud{

    private $db;

    function __construct($conn){
        $this->db=$conn;
    }
    
    public function insertAttendees($fname,$lname,$gender,$email){
        try{
    $sql = "INSERT INTO register(firstname,lastname,emailaddress,gender) 
    VALUES (:fname,:lname,:email,:gender)";
    $stmt =$this->db->prepare($sql);
    $stmt->bindparam(':fname',$fname);
    $stmt->bindparam(':lname',$lname);
    $stmt->bindparam(':gender',$gender);
    $stmt->bindparam(':email',$email);

    $stmt->execute();
    return true;

        }catch (PDOException $e){
echo $e->getMessage();
return false;
        }
    }
    
    public function editAttendee($id,$fname,$lname,$gender){

        try{
        
        $sql = "UPDATE  register SET firstname=:fname, lastname= :lname, 
        gender= :gender WHERE register_id=:id";
    
       
        $stmt =$this-> db->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->bindparam(':fname',$fname);
        $stmt->bindparam(':lname',$lname);
        $stmt->bindparam(':gender',$gender);
        $stmt->execute();
        return true;
        
        }catch (PDOException $e){
            echo $e->getMessage();
            return false;
             
        }
        }



    public function getAttendees(){
        try{
            $sql= "SELECT * FROM register";
            $result= $this->db->query($sql);
            return $result;
        }
        catch (PDOException $e){
            echo $e->getMessage();
            return false;

        }
       
    }

    public function getAttendeesDetails($id){
    
        $sql="SELECT * FROM  register WHERE register_id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result= $stmt->fetch();
        return $result;
    }


    public function getSpecialties(){
        try {
            $sql= "SELECT * FROM register";
            $result= $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public  function deleteAttendee($id){
        try {
            $sql ="delete from register where register_id= :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;

        }catch (PDOException $e){
            echo $e->getMessage();
            return false;
             
        }
    }
    }

   




?>