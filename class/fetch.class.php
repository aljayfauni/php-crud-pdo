<?php 
include 'dbh.class.php';
class Getdata extends Database{

    // public function __construct(){

    //     $this->db_connection();//call dbconnection from dbh connection file

    // }
    public function read() {
        $sql = 'SELECT * FROM tbl_users ORDER BY id DESC';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
      }

}


?>