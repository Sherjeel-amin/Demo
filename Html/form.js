let inputFname = document.getElementById("input-box-fname")
let inputLname = document.getElementById("input-box-lname")
let inputContact = document.getElementById("input-box-contact")


// inputLname.addEventListener("click", e=>(alert("You have clicked an input field")))
// inputContact.addEventListener("click", e=>(alert("You have clicked an input field")))

function validation(){
    if (inputFname.value.trim() ==""){
        alert("Empty field")
        return false
    }
    if (inputLname.value.trim() ==""){
        alert("Empty field")
        return false
    }
    if (inputContact.value.trim() ==""){
        alert("Empty field")
        return false
    }
}