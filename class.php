<?php 
    include "./processing.php";

   //$class = $_GET['class'];

    $sql = "SELECT * FROM class";// WHERE `leaving`-`entry_year`='$class'";

    

    if($result = $conn->query($sql)){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['class_name']."<br>";
        } }
    else {
            echo "nothing obtained";
    }
?>