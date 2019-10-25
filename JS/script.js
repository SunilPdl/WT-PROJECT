var signBg = document.getElementsByClassName("signup-bg")[0];
var signBox = document.getElementsByClassName("signup-box")[0];
var logBox = document.getElementsByClassName('login-box')[0];

function signup_popup(){
    signBg.style.display = 'block';
    signBox.style.display = 'block';
}

function close_signPopUp(){
    signBg.style.display = 'none';
    signBox.style.display = 'none';
}

function login_popUp(){
    logBox.style.display = 'block';
    signBox.style.display = 'none';
}

function close_loginPopUp(){
    logBox.style.display = 'none';
    close_signPopUp();
}

document.querySelector('button').addEventListener('click', signup_popup);
document.querySelector('.close-signup').addEventListener('click', close_signPopUp);
document.querySelector('.close-login').addEventListener('click', close_loginPopUp);
