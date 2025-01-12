<?php
        //if "email" variable is filled out, send email
        if (isset($_POST['email']))  {
        //Email information
        $admin_email = "mnphst@gmail.com";
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $comment = $_POST['message'];
        //send email
        $result = mail($admin_email, "$subject", $comment, "From:" . $email);
        //Email response
        $output = "";
        if($result) {
            $output = "Thanks for contacting us !!!";
            //echo $output;
        }
        
        }
        //if "email" variable is not filled out, display the form
        else  {
        }
    ?>