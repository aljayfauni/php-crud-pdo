<?php 

include_once '../class/util.class.php';
include_once '../class/Insert.class.php';

$add_new_user = new Insert();

if(isset($_POST['add'])){

        $username=$_POST['username'];
        $password=$_POST['password'];
        
       if($add_new_user->insertData($username,$password)){

}
           
       
}



?>