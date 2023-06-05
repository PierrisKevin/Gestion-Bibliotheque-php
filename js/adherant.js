const add_btn = document.querySelector(".add-btn")
const overlay = document.querySelector(".overlay")
const modal = document.querySelector(".modal-container")

const titre = document.querySelector(".titre h1")
const edits = document.querySelectorAll(".edit i")

const cancel_del = document.querySelector(".option-del")
const del_modal = document.querySelector(".delet-modal")
const all_del_btn = document.querySelectorAll(".delet i")

const nom = document.querySelector('input[name="nom"')
const inputs = document.querySelectorAll(".add-member input")

const modifiaction_ajout = document.querySelector('input[name="mod-or-add"')

add_btn.addEventListener("click", ()=>{
    document.querySelector(".add-member").reset();
    modifiaction_ajout.value = "add"
    titre.innerHTML = "Ajouter un membre"
    overlay.classList.remove("hidden")
    modal.classList.remove("hidden")
})

overlay.addEventListener("click", ()=>{
    document.querySelector(".add-member").reset();
    overlay.classList.add("hidden")
    modal.classList.add("hidden")
    if (del_modal.classList.contains("hidden")){
        return false
    }
    del_modal.classList.add("hidden")
})

nom.addEventListener("input", ()=>{
    nom.value = nom.value.toUpperCase()
})
inputs[2].addEventListener("input", ()=>{
    inputs[2].value = capitalize(inputs[2].value)
})
console.log(inputs)
edits.forEach(edit => {
    edit.addEventListener("click", (e)=>{
        const maticule = e.target.id
        inputs[6].value = maticule
        modifiaction_ajout.value = "edit"
        titre.innerHTML = "Modification du membre"
        overlay.classList.remove("hidden")
        modal.classList.remove("hidden")
        const allData = e.target.parentNode.parentNode.parentNode.childNodes

        for(let i=0;i<allData.length-1;i++){
            inputs[i].value = allData[i].textContent;
        }
    })
})


all_del_btn.forEach(btn_delet=>{
    btn_delet.addEventListener("click", (e)=>{
        overlay.classList.remove("hidden")
        del_modal.classList.remove("hidden")
        document.querySelector(".recDel").value = e.target.id
        console.log(e.target.id)
    })
})

cancel_del.addEventListener("click", ()=>{
    overlay.classList.add("hidden")
    del_modal.classList.add("hidden")
})


function capitalize(str){
    if (str==null || str=="" || str=="undefined"){
        console.log("ici...")
         return str }
    else{
        console.log(str)
        let tabStr = str.split("")
        console.log(tabStr);
        return tabStr.slice(0,1).join().toUpperCase() + tabStr.slice(1,tabStr.length+1).join("").toLowerCase()
    }
}