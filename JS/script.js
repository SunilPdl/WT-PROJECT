const signBg = document.getElementsByClassName("signup-bg");

function signup_popup(){
    if(signBg.value == "close"){
        signBg.style.display = "block";
        signBg.value == "open";
    }else{
        signBg.style.display = "none";
        signBg.value == "close";
    }
}
