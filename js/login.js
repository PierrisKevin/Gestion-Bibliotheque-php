const show_pass = document.querySelector(".show-pass")
const pass_contain = document.querySelector('input[type="password"]')
const btn_submit = document.querySelector('input[type="submit"]')

show_pass.addEventListener("mousedown",()=>{
    pass_contain.setAttribute("type", "text")
})
show_pass.addEventListener("mouseup",()=>{
    pass_contain.setAttribute("type", "password")
})

btn_submit.addEventListener("click", ()=>{
    btn_submit.disable = true
    btn_submit.value = "Patientez..."
    btn_submit.style.opacity = ".6"
})

window.addEventListener("load",()=>{
    let logOrNo = document.querySelector('input[name="logOrNo"]').value
    if (logOrNo=="succes"){
        window.open("http://localhost/gestion_bibliotheque/Home/php/views/index-views.php","_self")
    }
    else if(logOrNo=="erreur"){
        alert("Connexion refu")
    }
})