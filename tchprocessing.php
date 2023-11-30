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

                //for a teacher
                $empno = $_POST['employee_no'];
                $edn = $_POST['edn_level'];
                $roles = $_POST['roles'];
                $skills = $_POST['skills'];
                $contract = $_POST['contract'];
                $birthplace = $_POST['birthplace'];
                $attachment = $_POST['birth_doc'];

               
                if($status == 'teacher'){
                    echo "its a teacher";
                }
                
                //inserting data into db
                $sql = "INSERT INTO teachers VALUES('$id', '$name', '$empno', '$edn', '$roles', '$image', '$skills', '$contract', '$birthplace',  '$image', '$dob', '$address', '$contact', '$birth_doc', '$nin', '$email','$disability', '$dob', '$address', '$contact', '$email', '$password', '$nin', '$attachment', '$status')";
    
                if(mysqli_query($conn, $sql)){
                    echo "a record inserted";
                } else { 
                    echo "there was a problem in insertion";
                }
            } else {
                echo "there was a problem on reading data";
            }
            
        } else {
           // echo "failed to connect";
        }
        
        
?>