<?php 
    include "./processing.php";

    

    $sql = "SELECT * FROM exams";

    

    if($result = $conn->query($sql)){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['exam_name']."<br>";
        } }
    else {
            echo "nothing obtained";
    }
?>