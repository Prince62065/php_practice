<?php
        $to="workharsh99@gmail.com";
        $from="pk6206572093@gmail.com";
        $subject="Trail Email";
        // $message="This is mail from my server";
        $message="This is mail from my server to another server";
        if(mail($to,$subject,$message,"From: ".$from)){
            echo "Email sent successfully";
        }
        else{
            echo "Email not sent";
        }
?>