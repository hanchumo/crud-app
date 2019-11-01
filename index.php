<?php

require_once "db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>simple crud app</title>
</head>
<body>
    <h1>simple crud app</h1>
    <table>

            <tr>
                <th> N0</th>
                <th>Name</th>
                <th>Location</th>
                <th>Action</th>
                </tr>
                 <?php
                 //select query 
                 $sql= "SELECT * FROM `data` ";
                //execute query
                $result = mysqli_query ($conn, $sql);
                //check for data
                if(mysqli_num_rows($result) > 0){
                  //fetch data from database
                  $count =0;
                  while($row =mysqli_fetch_assoc($result)){
                      //displaying the fetched data from database
                      //print_r($row);
                      //displaying data to table
                     echo "<tr>
                     <td>".$count++."</td>
                      <td>".$row['name']."</td>
                      <td>".$row['location']."</td>
                      <td><a href='delete.php?id=".$row['id']."'><button>Delete</button><a/></td>

                     </tr>";
                  }
                }else{
                        echo "No records yet";
                    }
                
                 ?>
    </table>

</body>
</html>