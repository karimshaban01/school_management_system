function hello (){
       document.getElementById('body').innerHTML="hello, you are welcome \n this page is under maintenance";
       window.alert("hello");
    }

     function classes (){
       const xhttp = new XMLHttpRequest();
       xhttp.onload = function(){
        document.getElementById('body').innerHTML=this.responseText;
       }
       xhttp.open("GET", "class.php", true); 
       xhttp.send();
    }

     function subjects (){
       const xhttp = new XMLHttpRequest();
       xhttp.onload = function(){
        document.getElementById('body').innerHTML=this.responseText;
       }
       xhttp.open("GET", "subjects.php", true); 
       xhttp.send();
    }

     function teachers (){
       const xhttp = new XMLHttpRequest();
       xhttp.onload = function(){
        document.getElementById('body').innerHTML=this.responseText;
       }
       xhttp.open("GET", "tchinfo.php", true); 
       xhttp.send();
    }

     function students (){
       const xhttp = new XMLHttpRequest();
       xhttp.onload = function(){
        document.getElementById('body').innerHTML=this.responseText;
       }
       xhttp.open("GET", "stdinfo.php", true); 
       xhttp.send();
    }

     function results (){
       const xhttp = new XMLHttpRequest();
       xhttp.onload = function(){
        document.getElementById('body').innerHTML=this.responseText;
       }
       xhttp.open("GET", "view_result.php", true); 
       xhttp.send();
    }

     function exams (){
       const xhttp = new XMLHttpRequest();
       xhttp.onload = function(){
        document.getElementById('body').innerHTML=this.responseText;
       }
       xhttp.open("GET", "exams.php", true); 
       xhttp.send();
    }

     function awards (){
       
        document.getElementById('body').innerHTML="This section is not yet added";
       
    }


     function certificates (){
       document.getElementById('body').innerHTML="This section is not yet added";
    }


     function letters (){
      document.getElementById('body').innerHTML="This section is not yet added";
    }
