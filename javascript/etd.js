var cne = document.getElementById("inputcne");
var nom = document.getElementById("inputnom");
var prenom = document.getElementById("inputprenom");
var date = document.getElementById("inputdate");
cne.addEventListener('input', () => {
    if (cne.value.length > 0) {
        cne.style.boxShadow = " 0 0 10px orange,0 0 40px orange,0 0 10px #2196f3"
        cne.style.border = "red";
    }
})
nom.addEventListener('input', () => {
    if (nom.value.length > 0) {
        nom.style.boxShadow = " 0 0 10px orange,0 0 40px orange,0 0 10px #2196f3"
        nom.style.border = "red";
    }
})
prenom.addEventListener('input', () => {
    if (prenom.value.length > 0) {
        prenom.style.boxShadow = " 0 0 10px orange,0 0 40px orange,0 0 10px #2196f3"
        prenom.style.border = "red";
    }
})
date.addEventListener('input', () => {
    if (date.value.length > 0) {
        date.style.boxShadow = " 0 0 10px orange,0 0 40px orange,0 0 10px #2196f3"
        date.style.border = "red";
    }
})  
