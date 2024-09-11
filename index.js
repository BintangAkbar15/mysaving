setTimeout(() => {
    location.reload()
}, 1000);

const check = document.querySelector("input[type*='checkbox']")
const pass = document.querySelector("#pass")
check.addEventListener("click", () => {
    if(check.checked){
        pass.setAttribute("type", "text")
    }else{
        pass.setAttribute("type", "password")
    }
})