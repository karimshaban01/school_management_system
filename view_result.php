<link rel="stylesheet" href="tstyle.css">
<?php
    include 'processing.php';
  
    $sql = "SELECT * FROM std_result";
    if ($result=$conn->query($sql)){
        //echo "query passed"; 
        echo "<table>
        <th>NAME</th>
        <th>CLASS</th>
        <th>YEAR</th>
        <th>KISWAHILI</th>
        <th>SAYANSI</th>
        <th>HISABATI</th>
        <th>MAARIFA</th>
        <th>URAIA</th>
        <th>ENGLISH</th>
        <th>TOTAL</th>
        <th>GRADE</th>
        <th>POSITION</th>";
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['stdId'];
            $sql1 = "SELECT `name` FROM student WHERE id = '$id'";
            if ($result1=$conn->query($sql1)){

                while($row1 = mysqli_fetch_assoc($result1)){
                    echo "</tr>";
                    echo "<td>" .$row1['name']."</td>";
                    echo "<td>" .$row['classId']."</td>";
                    echo "<td>" .$row['exam_year']."</td>";
                    echo "<td>" .$row['kiswahili']."</td>";
                    echo "<td>" .$row['sayansi']."</td>";
                    echo "<td>" .$row['hisabati']."</td>";
                    echo "<td>" .$row['m/j']."</td>";
                    echo "<td>" .$row['u/m']."</td>";
                    echo "<td>" .$row['english']."</td>";
                    echo "<td>" .$row['total']."</td>";
                    echo "<td>" .$row['grade']."</td>";
                    echo "<td>" .$row['position']."</td><br>";
                    echo "</tr>";
            }       
        }
    }
        
        echo "</table>";
}
?>