<?php
//if "email" variable is filled out, send email   
if (isset($_POST['Mail'])) {
    //echo "envoi";
    //Email information   
    $admin_email = "p.lavelle@numericable.fr";
    $email = $_POST['Mail'];
    $guilde =$_POST['Guilde'];
    $Sujet = $_POST['Sujet'];
    $message = "De:".$_POST['Mail']." ".$_POST['Nom'] ." ". $_POST['Prenom']." de la guilde des ".$guilde." a envoyer:".$_POST['msg'];
    $header = "From:".$_POST['Mail'];
   
    
    
    // if (mail('p.lavelle@numericable.fr',' hello', 'testostest','From: webmaster@example.com')) {
    //     echo "yes";
    // } else {
    //     echo "no";
    // } 
    if (mail($admin_email, $Sujet, $message,$header )) {
        echo "Email successfully sent to $admin_email...";
    } else {
        echo "Email sending failed...";
    }
    //Email response   , "From:" . $email
}
//if "email" variable is not filled out, display the form   
else {
    header(__DIR__ . "/../Controller/contact.php");
}

?>
