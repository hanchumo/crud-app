<?php
require_once "db.php";
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql="DELETE FROM `data` WHERE `id`='$id'";
    if(mysqli_query($conn,$sql)){
        header("location: index.php");


    }else{
        echo "error occured";
    }
}