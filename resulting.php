<?php
    include "./processing.php";

    if(isset($_POST['addresult'])){
        //echo "you are adding new results";
        $stdId = $_POST['stdId'];
        $examId = $_POST['examId'];
        $classId = $_POST['classId'];
        $year = $_POST['exam_year'];
        $kiswahili = $_POST['kiswahili'];
        $sayansi = $_POST['sayansi'];
        $hisabati = $_POST['hisabati'];
        $mj = $_POST['m/j'];
        $um = $_POST['u/m'];
        $english = $_POST['english'];
        $total = $kiswahili+$sayansi+$hisabati+$mj+$um+$english;
        $grade = 'A';
        $position = 1;

        function grade($total){
            if($total>=200){
                return 'A';
            } elseif ($total >=150 && $total <200){
                return 'B';
            } elseif($total >=100 && $total<150 ){
                return 'C';
            } else {
                return 'D';
            }
        }

        $sql = "INSERT INTO std_result VALUES ('$stdId', '$examId', '$year', '$classId', '$year', '$kiswahili', '$sayansi', '$hisabati', '$mj', '$um', '$english', '$total', '$grade', '$position')";

        if($conn->query($sql)){
            echo "result inserted";
       } else {
        echo "404";
       }

    } else {
        echo " someting went wrong";
    }


       
?>