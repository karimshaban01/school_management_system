 function add(){
    const xhttp = new XMLHttpRequest();
       xhttp.onload = function(){
        document.getElementById('body').innerHTML=this.responseText;
       }
       xhttp.open("GET", "stdreg.php", true); 
       xhttp.send();
    }

     function addtch(){
    const xhttp = new XMLHttpRequest();
       xhttp.onload = function(){
        document.getElementById('body').innerHTML=this.responseText;
       }
       xhttp.open("GET", "tchreg.php", true); 
       xhttp.send();
    }

     function addstf(){
    const xhttp = new XMLHttpRequest();
       xhttp.onload = function(){
        document.getElementById('body').innerHTML=this.responseText;
       }
       xhttp.open("GET", "staffreg.php", true); 
       xhttp.send();
    }