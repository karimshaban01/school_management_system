<link rel="stylesheet" href="tstyle.css">
<?php 
    include "./processing.php";

    

    $sql = "SELECT * FROM exams";

    echo "<table>
    <th>EXAM ID</th>
    <th>EXAM NAME</th>";
    if($result = $conn->query($sql)){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['examId']."</td>";
            echo "<td>".$row['exam_name']."</td>";
            echo "</tr>";
        } }
   echo "</table>";
?>