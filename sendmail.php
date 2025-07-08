<?php
$to = "attra@attra.eu";

$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

$body = "İsim: $name\nEmail: $email\n\nMesaj:\n$message";
$headers = "From: $email\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $body, $headers)) {
  echo "<p style='text-align:center;font-family:sans-serif;'>Teşekkürler, mesajınız gönderildi.</p>";
} else {
  echo "<p style='text-align:center;color:red;font-family:sans-serif;'>Gönderim başarısız oldu. Lütfen tekrar deneyin.</p>";
}
?>