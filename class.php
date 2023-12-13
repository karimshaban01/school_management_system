<link rel="stylesheet" href="tstyle.css">
<?php 
    include "./processing.php";

   //$class = $_GET['class'];

    $sql = "SELECT * FROM class";// WHERE `leaving`-`entry_year`='$class'";

    
    echo "<table>
    <th>CLASS ID</th>
    <th>CLASS NAME</th>
    <th>CLASS YEAR</th>";
    if($result = $conn->query($sql)){
        
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['classId']."</td>";
            echo "<td>".$row['class_name']."</td>";
            echo "<td>".$row['class_yr']."</td>";
            echo "<tr>";
        } }
        
    echo "</table>";
?>