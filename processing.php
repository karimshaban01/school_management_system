<?php $conn = new mysqli("localhost", "root", "", "sms");
        if($conn){
           //echo "connected successfully";
            if(isset($_POST['submit'])){
                //echo "submit button clicked";
                //reading data
                $status = $_POST['status'];
                $id = $_POST['regno'];
                $name =$_POST['name'];
                $dob = $_POST['dob'];
                $address = $_POST['address'];
                $contact = $_POST['contact'];
                $email = $_POST['email'];
                $image = $_POST['image'];
                $birth_doc = $_POST['birth_doc'];
                $nin = $_POST['nin'];
                $disability = $_POST['disability'];
                $password = $_POST['password'];
                

                
                

        if($status == 'student'){
                    echo "its a student-";
                //inserting data into db
                $sql = "INSERT INTO student VALUES('$id', '$name', '$image', '$dob', '$address', '$contact', '$birth_doc', '$nin', '$email','$disability', '$password', '$status')";
    
                if(mysqli_query($conn, $sql)){
                    echo "a record inserted";
                } else { 
                    echo "there was a problem in insertion";
                }
            } 
        elseif($status == 'teacher'){
                echo "is a teacher signing up";
                //for a teacher
                $empno = $_POST['employee_no'];
                $edn = $_POST['edn_level'];
                $roles = $_POST['roles'];
                $skills = $_POST['skills'];
                $contract = $_POST['contract'];
                $birthplace = $_POST['birthplace'];
                $attachment = $_POST['birth_doc'];

                $sql = "INSERT INTO teachers VALUES('$id', '$name', '$empno', '$edn', '$roles', '$image', '$skills', '$contract', '$birthplace', '$disability', '$dob', '$address', '$contact', '$email', '$password', '$nin', '$attachment', '$status')";
    
                if(mysqli_query($conn, $sql)){
                    echo "a record inserted";
                } else { 
                    echo "there was a problem in insertion";
                }
            }
        elseif ($status == 'staff') {
                echo "this is a staff signing up";
                //for staff
                $roles = $_POST['roles'];
                $refferee = $_POST['refferee'];
                $proffesion = $_POST['proffesion'];
                $salary = $_POST['salary'];
                $paid = $_POST['paid'];
                

                $sql = "INSERT INTO staff VALUES('$id', '$name', '$dob', '$contact', '$email', '$nin', '$refferee', '$address', '$proffesion', '$image', '$roles', '$disability', '$salary', '$paid', '$password', '$status')";
    
                if(mysqli_query($conn, $sql)){
                    echo "a record inserted";
                } else { 
                    echo "there was a problem in insertion";
                }
            } 
         else {
            echo "failed to connect";
        }}
        elseif(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT email, password, status FROM student WHERE email ='$email' AND password ='$password'
                    UNION SELECT email, password, status FROM staff WHERE email ='$email' AND password ='$password'
                    UNION SELECT email, password, status FROM teachers WHERE email ='$email' AND password ='$password'";
            $result = $conn->query($sql);
            $row = mysqli_fetch_assoc($result);

            $temail = $row['email'];
            $tpassword = $row['password'];
            $status = $row['status'];
                
                if($email === $temail && $password === $tpassword){
                    
                       if($status==="student"){
                        echo $row['email']." ===> access granted<br>";
                        echo "redirecting to student dashboard.......<br>";
                        header("Location: student.php");
                       } 
                       
                       elseif($status==="staff"){
                        echo $row['email']." ===> access granted<br>";
                        echo "redirecting to staff panel........<br>";
                       header("Location: staff.php");
                       } 
                       
                       elseif($status === "teachers"){
                        echo $row['email']." ===> access granted<br>";
                        echo "redirecting to teacher panel........<br>";
                        header("Location : teacher.php");
                       } 
                       
                       else {
                        echo "access denied XXXXXX<br>";
                        echo "echo something went wrong try again......<br>";
                        header("Location: staff.php");
                       }
                     } else {
                        echo "not registered........";
                        header("Location: login.php");
                     }

            }


        }
    
        
        ?>

