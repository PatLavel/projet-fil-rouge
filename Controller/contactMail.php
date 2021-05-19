<?php
    //if "email" variable is filled out, send email   
    if (isset($_POST['Mail'])) {
        //Email information   
        $admin_email = "p.lavelle@numericable.fr";
        $email = $_POST['Mail'];
        $Sujet = $_POST['Sujet'];
        $message = $_POST['msg'];
        $name = $_POST['Nom'].$_POST['Prenom'];;
        //send email  
        mail($admin_email, "$Sujet", $message, "From:" . $email);
        //Email response   
        echo "envoi";
    }
    //if "email" variable is not filled out, display the form   
    else { 
        header(__DIR__."/../Controller/contact.php");   
    } 
        ?>