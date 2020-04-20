<?php

    $EMAIL = $_POST("email_field");
    $MESSAGE = $_POST("message_field");

    $MY_EMAIL = "plaetzaw@gmail.com";
    $EMAIL_SUBJECT = "Contact Form From Portfolio";
    $EMAIL_BODY = "You have received an email from $EMAIL. \n The message is:\n $MESSAGE";

    $HEADERS = "From: $EMAIL";

    mail($MY_EMAIL, $EMAIL_SUBJECT, $EMAIL_BODY, $HEADERS);

?>