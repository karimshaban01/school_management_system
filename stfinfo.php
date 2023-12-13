<link rel="stylesheet" href="tstyle.css">
<?php
    require './processing.php';

    $query = "SELECT * FROM staff";
    $result = $conn->query($query);

     echo "<table>
     <th>ID</th>
    <th>NAME</th>
    <th>DOB</th>
    <th>ADDRESS</th>
    <th>CONTACT</th>
    <th>DISABILITY</th>
    <th>ENTRY YEAR</th>
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
            echo "<tr>";
        }
   }
   echo "</table>";
?>