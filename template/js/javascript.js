let form = document.querySelector("form");

let message = document.querySelector(".message");

let name = document.querySelector(".name");
let email = document.querySelector(".email");
let mobile = document.querySelector(".mobile");

let pass = document.querySelector(".pass");
let eye = document.querySelector("#eyeicon");

let deleteid = document.querySelector(".btn-danger");
eye.onclick = function()
{
    if (pass.type == "password")
    {
        pass.type = "text";
        eye.src = "template/img/eye-open-4-32.png";
    } else {
        pass.type = "password";
        eye.src = "template/img/eye-close-4-32.png";
    }
}


form.addEventListener('submit', (e)=>{
    let messages = [];
    if (name.value === '' || name.value == null)
    {
        messages.push("Name is required");   
    }
    if (email.value === '' || email.value == null)
    {
        messages.push("Email is required");   
    }
    if (mobile.value === '' || mobile.value == null)
    {
        messages.push("Mobile is required");   
    }
    if (mobile.value.length <= 8) 
    {
        messages.push("Mobile minimum 8 simvol");    
    }
    if (mobile.value.length >= 10) 
    {
        messages.push("Mobile maximus 10 simvol");    
    }
    if (pass.value.length <= 6) 
    {
        messages.push("Password minimum 6 simvol");    
    }
    if (pass.value.length >= 20) 
    {
        messages.push("Password maximus 20 simvol");    
    }
    if (messages.length > 0)
    {
        e.preventDefault();
        message.classList.add("error");
        message.innerHTML = messages.join(', '); 
    }
});

