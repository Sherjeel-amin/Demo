<?php
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = htmlspecialchars($_POST["firstname"]);
    $contact = htmlspecialchars($_POST["lastname"]);
    $message = htmlspecialchars($_POST["subject"]);

    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $message;
}

?>