<?php
    require './processing.php';

    $query = "SELECT * FROM staff";
    $result = $conn->query($query);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['name']."</br>";
        }
   }
?>