<script src="script.js"></script>
<script src="script1.js"></script>
<style>
      #body {
        margin-left: 40px;
    }
    .body-element {
        display: inline-flex;
        margin-left: 5px;
        margin-top: 100px;
    }

    #page-body {
        box-shadow : 0px 2px 2px 0px;
        width: 75%;
        height: fit-content;
        margin-top: 3px;
        border-radius: 3px;
        margin-left: 30px;
        position: absolute;
        margin-top: 100px;
        margin-left: 20%;
    }
   
    ul {
        margin-left : 0px;
    }
    .main-bar {
        width : 100%;
        background-color : black;
        height : 80px;
        margin-top: 0px;
        color : white;
        position : fixed;
        

    }
    .side-bar {
        width : 13.18%;
        margin-left:-5px;
        position: absolute;
        
    }

    li {
        display : flex;
        margin-top: 10px;
        border-bottom: 1px solid black;
        height : 30px;
        
    }

    li:hover {
        color : white;
        background-color: black;
        height : 30px;
    }
/* 
    @media  screen and (max-width : 1200px) {
        .side-bar {
            display : none;
        }

        #page-body {
            width: 95%;
            margin-left: 0px;
        }

        
    }

 */
 </style>
<div class = "main-bar">
    <h3 onclick="hider()"  style="margin-left: 40px; position : absolute; margin-top : 30px">HOME</h3>
</div>

<div class="body-element">
    <div class="side-bar" id="side-nav">
        <ul>
            <li onclick="hello()">DASHBOARD</li>
            <li onclick="classes()">CLASSES</li>
            <li onclick="subjects()">SUBJECTS</li>
            <li onclick="teachers()">TEACHERS</li>
            <li onclick="students()">STUDENTS</li>
            <li onclick="results()">RESULTS</li>
            <li onclick="exams()">EXAMS</li>
            <li onclick="add()">ADD STUDENT</li>
            <li onclick="addtch()">ADD TEACHER</li>
            <li onclick="addstf()">ADD STAFF</li>
            <li onclick="letters()">LETTERS</li>
            <br>
            <br>
            <p align="center" id="footer">&copy; Karim 2023</p>
        </ul>
    
    </div>
</div>
<div class="body-element" id="page-body">
    <div id="body">
    
            <h3 style="color: red;">WARNING: you are warmly welcome, but this website is still under development.</h3>
            
    
    </div>
    
</div>


