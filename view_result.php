<?php
    include 'processing.php';
   
    $sql = "SELECT * FROM std_result";
    if ($result=$conn->query($sql)){
        //echo "query passed"; 
        while($row = mysqli_fetch_assoc($result)){
            echo $row['exam_year']."<br>";
        }
    }
?>