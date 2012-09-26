<?php

    $to      = $_POST[to];

    $subject = $_POST[subject];
    
    $message = $_POST[message];
    
    $headers = 'From: ' . $_POST[from] . "\r\n" .

    'Reply-To: ' . $_POST[from] . "\r\n" .

    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

?>