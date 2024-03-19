function validation(){
    if(document.Formfill.Username.value==""){
        document.getElementById("result").innerHTML="Enter Username*";
        return false;
    }
    else if(document.Formfill.Username.value.length){
        document.getElementById("result").innerHTML="Atleast six letter*";
        return false;
    }
    else if(document.Formfill.Password.value==""){
        document.getElementById("result").innerHTML="Enter your Password*";
        return false;
    }
    else if(document.Formfill.Password.value !== document.Formfill.CPassword.value){
        document.getElementById("result").innerHTML="Password does'nt matched*";
        return false;
    }
    else if(document.Formfill.Password.value.length){
        document.getElementById("result").innerHTML="Password must be 6-digits*";
        return false;
    }
}