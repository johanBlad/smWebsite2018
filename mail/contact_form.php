<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];

    $from = 'SMWeb Kontaktformulär';
    $to = 'sts-sm2@utn.se';
    $subject = 'Kontaktformulär';

    $body = 'From: $name\n E-mail: $email\n Phone: $tel\n Message:\n $message';

    //Check if the name has been entered
    if (!$_POST['name']) {
        $errName = 'Var god ange ditt namn';
    }

    //Check if the email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Var god använd en gilitg e-post';
    }

    if(!$errName && !$errEmail) {
        if (mail ($to, $subject, $body, $from)) {
            $result= '<div class="alert alert-success">Tack! Vi hör av oss</div>';
        } else {
            $result='<div class="alert alert-danger">Hmm.. Någonting gick fel. Prova igen senare eller hör av dig till någon av oss generaler individuellt</div>'
        }
    }
}
?>