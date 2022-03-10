<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = trim($_POST["name"]);
        $school = trim($_POST["school"]);
        $email = trim($_POST["email"]);
        $asunto = trim($_POST["asunto"]);
        $message = trim($_POST["mensaje"]);

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "contacto@orionsystem.cl";

        // Set the email subject.
        $subject = "Nuevo contacto de $name";

        // Build the email content.
        $email_content = "Nombre: $name\n";
        $email_content = "Establecimiento: $school\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Asunto: $asunto\n\n";
        $email_content .= "Mensaje:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);

        } else {
            http_response_code(500);

        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);

    }

?>