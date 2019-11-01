<?php
//this is our connection file to the database
require_once "db.php";
//checking to ensure a submit action is being called
if (isset($_POST['submit'])){
    //collecting form data
    $name=$_POST['name'];
    $location=$_POST['location'];
    //echo "name : ".$name. "location: ".$location;

    //saving into db

    $sql = "INSERT INTO `data`( `name`, `location`) VALUES ('$name', '$location')";
//executing sql query
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}

