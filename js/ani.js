var btnSignin = document.querySelector("#acessor1");
var btnSignup = document.querySelector("#acessor2");

var body = document.querySelector("body");
btnSignin.addEventListener("click", function () {
    body.className = "sign-in-js"; 
 });
 
 btnSignup.addEventListener("click", function () {
     body.className = "sign-up-js";
 })
 