<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $school = strip_tags(trim($_POST["school"]));
		$school = str_replace(array("\r","\n"),array(" "," "),$school);
        $rbd = trim($_POST["rbd"]);
        $comuna = strip_tags(trim($_POST["comuna"]));
		$comuna = str_replace(array("\r","\n"),array(" "," "),$comuna);
        $cargo = strip_tags(trim($_POST["cargo"]));
		$cargo = str_replace(array("\r","\n"),array(" "," "),$cargo);
        $fono = trim($_POST["fono"]);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $asunto = trim($_POST["asunto"]);
        $message = trim($_POST["mensaje"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($school) OR empty($comuna) OR empty($cargo) OR empty($fono) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Por favor, complete el formulario y vuelva a intentarlo.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "f.alfaro.sagua@gmail.com";

        // Set the email subject.
        $subject = "Nuevo contacto de $name";

        // Build the email content.
        $email_content = "Nombre: $name\n";
        $email_content = "Establecimiento: $school\n";
        $email_content = "RBD: $rbd\n";
        $email_content = "Comuna: $comuna\n";
        $email_content = "Cargo: $cargo\n";
        $email_content = "Fono: $fono\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Asunto: $asunto\n\n";
        $email_content .= "Mensaje:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Gracias! Tu mensaje ha sido enviado.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Algo salió mal y no pudimos enviar tu mensaje.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Hubo un problema con su envío, inténtelo de nuevo.";
    }

?>