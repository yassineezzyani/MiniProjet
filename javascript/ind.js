function pop() {
    document.querySelector("#btn").style.display = "block";
    document.querySelector("#bgd_popup").style.display = "block";

}

function popclose() {
    document.querySelector("#btn").style.display = "none";
    document.querySelector("#bgd_popup").style.display = "none";
}
function validercne(valeur) {
    if (valeur == "") {
        alert("vous devez entrer un nom");
        //  document.forms[0].elements[0].focus();

    }
}