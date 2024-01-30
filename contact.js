function validation()
{
    if(document.getElementById("fname").value.trim()=="")
    {
        alert("Please enter your name")
        return false;
    }
    if(document.getElementById("lname").value.trim()=="")
    {
        alert("Please enter your contact")
        return false;
    }
    if(document.getElementById("subject").value.trim()=="")
    {
        alert("Please enter your message")
        return false;
    }
}