<?php
include_once("config.php");
if(isset($_GET["deleteid"])){
    $id = $_GET["deleteid"];

    $sql = "DELETE FROM crud_table WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Deleted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }


}

?>
