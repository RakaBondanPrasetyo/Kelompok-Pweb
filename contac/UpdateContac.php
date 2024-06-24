<?php


if (isset($_POST['submit'])) {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    if (empty($name)) {
        $error = "Nama harus diisi.";
    } else if (empty($email)) {
        $error = "Email harus diisi.";
    } else if (empty($subject)) {
        $error = "Subjek harus diisi.";
    } else if (empty($message)) {
        $error = "Pesan harus diisi.";
    }

    
    if (!isset($error)) {
        
        $to = "kenanganhandphone@webmail.com"; 
        $subject = "Pesan Kontak - " . $subject;
        $body = "Nama: " . $name . "\n" .
            "Email: " . $email . "\n" .
            "Subjek: " . $subject . "\n" .
            "Pesan: " . $message;
        $headers = "From: " . $email . "\n";

        if (mail($to, $subject, $body, $headers)) {
            $success = "Pesan Anda telah terkirim.";
        } else {
            $error = "Terjadi kesalahan saat mengirim pesan Anda.";
        }
    }
}

?>