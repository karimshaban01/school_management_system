<link rel="stylesheet" href="tstyle.css">
<?php
    require './processing.php';

    $query = "SELECT * FROM teachers";
    $result = $conn->query($query);
    echo "<table>
    <th>NAME</th>
    <th>EDN</th>
    <th>CONTACT</th>
    <th>ADDRESS</th>
    <th>CONTRACT</th>
    <th>NIN</th>
    <th>EMAIL</th>
    <th>PASSWORD</th>";
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['edn']."</td>";
            echo "<td>".$row['contact']."</td>";
            echo "<td>".$row['birthplace']."</td>";
            echo "<td>".$row['contract']."</td>";
            echo "<td>".$row['nin']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
?>