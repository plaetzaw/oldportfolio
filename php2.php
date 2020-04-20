<!-- <?php

$email = $_POST("email");
$contact_name = $POST("contact_name");
$message = $_POST("message");

function filter_header($form_field) {
    return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}



$email = filter_header($email);

# send email
$headers = "From: $email";
$sent = mail('plaetzaw@gmail.com', 'Contact Form', $headers, $name, $message);

if ($sent) {
  ?>
  <html>
    <head>
      <title>Thank you</title>
    </head>
    <body>
        <h1>Thank you</h1>
        <p>Thank you for contacting me</p>
    </body>
  </html>
  <?php  
} else {
  ?>
  <html>
      <head>
          <title>Something went wrong</title>
</head>
    <body>
        <h1>Something went wrong</h1>
        <p>Something went wrong, please try again</p>
</body>
</html>
<?php
}

echo "Thank You!";
//   }
?> -->