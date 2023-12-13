<link rel="stylesheet" href="tstyle.css">
<?php 
    include "./processing.php";

   //$class = $_GET['class'];

    $sql = "SELECT * FROM subject";// WHERE `leaving`-`entry_year`='$class'";

    
 echo "<table>
    <th>SUBJECT ID</th>
    <th>SUBJECT NAME</th>";
    if($result = $conn->query($sql)){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['subjectId']."</td>";
            echo "<td>".$row['subject_name']."</td>";
            echo "</tr>";
        } }
   echo "</table>";
?>