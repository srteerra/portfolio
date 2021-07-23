<?php
    if (isset($_POST['send']))
    {
        if (!empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message']))
        {
            $eml = "srterradev@gmail.com";
            $sub = $_POST['subject'];
            $mensg = $_POST['message'];
            $correo = $_POST['email'];
            $mensaje = "Correo: " . $correo . "\nMensaje enviado desde tu portafolio" . "\nContenido: " . $mensg;
            mail($eml, $sub, $mensaje);
            header('Location: index.html');
        }
    }

?>
