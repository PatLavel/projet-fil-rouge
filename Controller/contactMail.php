<?php
//if "email" variable is filled out, send email   
if (isset($_POST['Mail'])) {
    echo "envoi";
    //Email information   
    $admin_email = "p.lavelle@numericable.fr";
    $email = $_POST['Mail'];
    $Sujet = $_POST['Sujet'];
    $message = $_POST['msg'];
    $name = $_POST['Nom'] . $_POST['Prenom'];;
    echo ($admin_email . $email . $Sujet . $message . $name);
    //send email  
    mail($admin_email, $Sujet, $message);
    //Email response   , "From:" . $email
}
//if "email" variable is not filled out, display the form   
else {
    header(__DIR__ . "/../Controller/contact.php");
}
