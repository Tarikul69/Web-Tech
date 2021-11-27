var login = document.forms['form'];
login.onsubmit = function(event){
    event.preventDefault();
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(login['name'].value.match(mailformat))
    {
       // console.log("Good");
       
         
    }
    else{
       // console.log("Bad");
        alert("Invalid Email");
    }
 }

 src="../Controller/all.js"