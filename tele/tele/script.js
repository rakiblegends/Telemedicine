// function changeToUser()
// {
//     document.getElementById('user-reg-id').style.cssText='visibility:visible;transition:0.1s;position:relative;z-index:10;';
//     document.getElementById('userbtn').style.cssText='background-color:#ddd;';
//     document.getElementById('pharmacy-reg-id').style.cssText='visibility:hidden;transition:0.1s;position:fixed;z-index:-10;';
//     document.getElementById('pharmacybtn').style.cssText='background-color:white;';
// }
// document.getElementById("userbtn").addEventListener("click", changeToUser);

// function changeToPharmacy(){
//     document.getElementById('user-reg-id').style.cssText='visibility:hidden;transition:0.1s;position:fixed;z-index:-10;';
//     document.getElementById('userbtn').style.cssText='background-color:white;';
//     document.getElementById('pharmacy-reg-id').style.cssText='visibility:visible;transition:0.1s;position:relative;z-index:10;';
//     document.getElementById('pharmacybtn').style.cssText='background-color:#ddd;';

// }
// document.getElementById("pharmacybtn").addEventListener("click", changeToPharmacy);

function changeToLogin()
{
    document.getElementById('user-login-id').style.cssText='visibility:visible;transition:0.1s;position:relative;z-index:10;';
    document.getElementById('loginbtn').style.cssText='background-color:#ddd;';
    document.getElementById('user-reg-id').style.cssText='visibility:hidden;transition:0.1s;position:fixed;z-index:-10;';
    document.getElementById('registerbtn').style.cssText='background-color:white;';
}
document.getElementById("loginbtn").addEventListener("click", changeToLogin);

function changeToRegister()
{
    document.getElementById('user-reg-id').style.cssText='visibility:visible;transition:0.1s;position:relative;z-index:10;';
    document.getElementById('registerbtn').style.cssText='background-color:#ddd;';
    document.getElementById('user-login-id').style.cssText='visibility:hidden;transition:0.1s;position:fixed;z-index:-10;';
    document.getElementById('loginbtn').style.cssText='background-color:white;';
}
document.getElementById("registerbtn").addEventListener("click", changeToRegister);
