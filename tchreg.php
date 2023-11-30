<link rel="stylesheet" href="style.css">
<body>
    <div class="container" style="height: 160%">
        <form action="processing.php" method=
        "post">
            <br><br>
            <input type="text" name="status" id="" value="teacher" style="display : none">
            <i>ID: </i>
            <input type="number" name="regno" placeholder="eg. 00001">
            <i>full name:</i>
            <input type="text" name="name" id="" placeholder="eg. karim shaban haruna">
            <i>Employee Number:</i>
            <input type="text" name="employee_no" id="">
            <i>Education Level:</i>
            <input type="text" name="edn_level" id="" placeholder="eg. Bachelor degree">
            <i>Roles:</i>
            <input type="text" name="roles" id="" placeholder="eg. Headmaster">
            <i>Image:</i>
            <input type="file" src="" alt="" name="image">
            <i>Other Skills:</i>
            <input type="text" name="skills" id="" placeholder="eg. Mechanical Engineer">
            <i>Contract</i>
            <input type="text" name="contract" id="" placeholder="eg. FULL">
            <i>Place of Birth</i>
            <input type="text" name="birthplace" id="" placeholder="eg. Mwanza">
            <i>Disability:</i>
            <input type="text" name="disability" id="" placeholder="eg. albinism">
            <i> Date of Birth:</i>
            <input type="date" name="dob" id="" placeholder="22-02-1998">
            <i>Address:</i>
            <input type="text" name="address" id="" placeholder="eg. P.O. Box 2798 Arusha">
           <i> Contact:</i>
            <input type="tel" name="contact" id="" placeholder="eg. 0697605606">
            <i>E-mail:</i>
            <input type="email" name="email" id="" placeholder="eg. officialkareem01@gmail.com">
            
            <i>Attachment: </i>
            <input type="file" name="birth_doc" id="">
            <i>NIDA:</i>
            <input type="number" name="nin" size="20" id="" placeholder="eg. 19980222473300000227">
           
            <i>Password:</i>
            <input type="password" name="password" id="" placeholder="**********">
            
            <input type="submit" value="REGISTER" class="button" name="submit">
            <input type="reset" value="RESET" class="button">
            
        </form>
    </div>
