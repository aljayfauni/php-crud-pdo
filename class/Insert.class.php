<?php 
include 'dbh.class.php';

class Insert extends Database{


   
    public function insertData($username,$password){

    $sql = "INSERT INTO tbl_users SET username=:username,password=:password";
  
    $q = $this->conn->prepare($sql);
 
    $q->execute(array(':username'=>$username,':password'=>$password));

    return true;

    }
   
        

}

?>