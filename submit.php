<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['comment'])) {
    $name = ($_POST['name']);
    $mobile = ($_POST['number']);
    $email = ($_POST['email']);
    $message = ($_POST['comment']);

    $html = "<table><tr><td>Name</td><td>$name</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Mobile</td><td>$mobile</td></tr><tr><td>Message</td><td>$message</td></tr></table>";

    include('smtp/PHPMailerAutoload.php');
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = "tsl";
    $mail->SMTPAuth = true;
    $mail->Username = "sanskarpss02@gmail.com";
    $mail->Password = "ffsl ckav qsbv mdca";
    $mail->SetFrom("sanskarpss02@gmail.com");
    $mail->addAddress("sanskarpss02@gmail.com");
    $mail->IsHTML(true);
    $mail->Subject = "New Enquiry";
    $mail->Body = $html;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        )
    );

    if ($mail->send()) {
        echo "Thank You for contacting Us.";
    } else {
        echo "Message Error";
    }

}
?>