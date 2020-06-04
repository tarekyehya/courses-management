


function myFunction(){
    "use strict";

var nam = document.getElementById("name").value,
    pass = document.getElementById("password").value;
/*
    document.write("hello from js "+nam);
*/
    if(nam === "" || pass  === ""){
        alert("your name or password can not be empty");
       return false;
        }
        else if( nam === " " || pass  === " "){
            alert("your name or password can not be sapce");
            return false; 
               }
        else if( nam.length < 8 || pass.length < 8){
           alert("your name or password must be at least 8 characters");
           return false;
                }
                else{
                    return true;
                }
      
 


}