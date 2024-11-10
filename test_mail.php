<?php
if (mail('alexjanetan@gmail.com', 'Mail Test', 'This is a test email from PHP mail() function.')) {
    echo 'Mail sent successfully.';
} else {
    echo 'Mail failed to send.';
}
?>
