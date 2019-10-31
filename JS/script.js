var signBg = document.getElementsByClassName("signup-bg")[0];
var signBox = document.getElementsByClassName("signup-box")[0];
var logBox = document.getElementsByClassName("login-box")[0];

// function to open the signup popup box
function signup_popup(){
    signBg.style.display = 'block';
    signBox.style.display = 'block';
    logBox.style.display = 'none';
    addEventListener('scroll', window_lock);
}

// function to close the signup popup box
function close_signPopUp(){
    signBg.style.display = 'none';
    signBox.style.display = 'none';
    removeEventListener('scroll', window_lock);
}

// function to open the login popup box
function login_popUp(){
    logBox.style.display = 'block';
    signBox.style.display = 'none';
    addEventListener('scroll', window_lock);
}

// function to close the login popup box
function close_loginPopUp(){
    logBox.style.display = 'none';
    close_signPopUp();
    removeEventListener('scroll', window_lock);
}

// function to lock the scrolling when in the login and signup box
function window_lock(){
    window.scrollTo(0,0);
}

document.querySelector('#signup-button').addEventListener('click', signup_popup);
document.querySelector('#login-button').addEventListener('click', login_popUp);
document.querySelector('.close-signup').addEventListener('click', close_signPopUp);
document.querySelector('.close-login').addEventListener('click', close_loginPopUp);

function check_tag(){
    var Tag = document.getElementById("tag").value;

        if(Tag == 'science'){
            document.getElementById('S');
        }
}
