<?php
class Travellor
{
    private $db;
 
    function __construct($DB_con)
    {
      $this->db = $DB_con;

    }

     public function addTravellor($fname,$email,$mobile,$date,$code)
    {

      try
      {

        $stmt = $this->db->prepare("INSERT INTO info (name,email,mobile,date,code) VALUES (:name,:email,:mobile,:date,:code)");
        $stmt->bindParam(':name', $fname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':code', $code);
        if($stmt->execute())
          echo "<script>window.location='index.php';</script>";
        else
          echo '<div class="alert alert-danger">Failed to add..!!</div>';
      }catch(PDOException $e){
           echo $e->getMessage();
      }
    }

    }?>