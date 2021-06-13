<?php
//if "email" variable is filled out, send email   
if (isset($_POST['Mail'])) {
    //echo "envoi";
    //Email information   
    $admin_email = "p.lavelle@numericable.fr";
    $email = $_POST['Mail'];
    $guilde = $_POST['Guilde'];
    $Sujet = $_POST['Sujet'];
    $message = "De:" . $_POST['Mail'] . " " . $_POST['Nom'] . " " . $_POST['Prenom'] . " de la guilde des " . $guilde . " a envoyer:" . $_POST['msg'];
    $header = "From:" . $email;

    if (
        preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)
        && (preg_match("#^[A-z]{1,20}$#", $_POST["Nom"]))
        && (preg_match("#^[A-z]{1,20}$#", $_POST["Prenom"]))
        && (preg_match("#^[A-z0-9]{1,20}$#", $Sujet))
        //&& (preg_match("#^[\w\+_\-_\._\,_\:_\;_]{1,200}$#",$_POST['msg'])) 
    ) {
        if (mail($admin_email, $Sujet, $message, $header)) {
            header('Location:contact.php?msg=sent');
            echo "Email successfully sent to $admin_email...";
        } else {
            header('Location:contact.php?msg=error');
            echo "Email sending failed...";
        }
    } else {
        header('Location:contact.php?msg=Info');
    }
}
//if "email" variable is not filled out, display the form   
else {
    header(__DIR__ . "/../Controller/contact.php");
}
