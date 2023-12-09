<?php 
    include "./processing.php";

   //$class = $_GET['class'];

    $sql = "SELECT * FROM subject";// WHERE `leaving`-`entry_year`='$class'";

    

    if($result = $conn->query($sql)){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['subject_name']."<br>";
        } }
    else {
            echo "nothing obtained";
    }
?>