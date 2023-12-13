<style>
    input, i {
   display: block;
   margin-left: 25%;
   width: 100%; 
   margin-top: 5px;
}

.button {
    display: inline;
}
.container {
    height: 300%;
}


</style>
<body>
    <div class="container" style="height:200%">
        <form action="processing.php" method=
        "post">
            <i><h4>ENTER DETAILS OF A NEW STAFF</h4></i>
            <input type="text" name="status" id="" value="staff" style="display: none">
            <i>ID: </i>
            <input type="number" name="regno" placeholder="eg. 00001">
            <i>full name:</i>
            <input type="text" name="name" id="" placeholder="eg. karim shaban haruna">
            <i>Date of birth:</i>
            <input type="date" name="dob" id="">
            
            <i> Contact:</i>
            <input type="tel" name="contact" id="" placeholder="eg. 0697605606">
            <i>E-mail:</i>
            <input type="email" name="email" id="" placeholder="eg. officialkareem01@gmail.com">
            <i>NIDA:</i>
            <input type="number" name="nin" size="20" id="" placeholder="eg. 19980222473300000227">
            <i>Refferee:</i>
            <input type="text" name="refferee" id="" placeholder="eg. karim haruna">
            <i>Address:</i>
            <input type="text" name="address" id="" placeholder="eg. P.O. Box 2798 Arusha">
            <i>Proffession: </i>
            <input type="text" name="proffesion" id="" placeholder="eg. Mechanical Engineer">
            <i>Image:</i>
            <input type="file" src="" alt="" name="image">
            <i>Roles:</i>
            <input type="text" name="roles" id="" placeholder="eg. cock">
            <i>Disability:</i>
            <input type="text" name="disability" id="" placeholder="eg. albinism">
            <i>salary:</i>
            <input type="text" name="salary" id="" placeholder= "eg. 100,000">
            <i>Paid?:</i>
            <input type="text" name="paid" id="" placeholder="eg. yes">
            <i>Education Level:</i>
            <input type="text" name="edn_level" id="" placeholder="eg. Bachelor degree">
            
            <i>Attachment: </i>
            <input type="file" name="birth_doc" id="">
            
            
            <i>Password:</i>
            <input type="password" name="password" id="" placeholder="**********">
            
            <input type="submit" value="REGISTER" class="button" name="submit">
            <input type="reset" value="RESET" class="button">
            
        </form>
    </div>
