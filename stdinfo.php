<link rel="stylesheet" href="tstyle.css">
<script src="script.js"></script>
<?php
    require './processing.php';

    $query = "SELECT * FROM student";
    $result = $conn->query($query);
echo "<table>
     <th>ID</th>
    <th>NAME</th>
    <th>DOB</th>
    <th>ADDRESS</th>
    <th>CONTACT</th>
    <th>DISABILITY</th>
    <th>ENTRY</th>
    <th>PASSWORD</th>";
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['dob']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['contact']."</td>";
            echo "<td>".$row['disability']."</td>";
            echo "<td>".$row['entry_year']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td><a href='edit.php?id=".$row['id']."'>VIEW INFORMATION</a></td>";
            echo "<tr>";
        }
        
   }
   echo "</table>";
   include './new.php';
   echo "<br>";
   echo "<br>";

?>
