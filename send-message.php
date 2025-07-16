<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "oa106536@gmail.com";
    $subject = "رسالة جديدة من نموذج الاتصال";
    
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $body = "الاسم: $name\n";
    $body .= "البريد الإلكتروني: $email\n";
    $body .= "الرسالة:\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "تم إرسال الرسالة بنجاح!";
    } else {
        echo "حدث خطأ أثناء الإرسال. حاول مرة أخرى.";
    }

