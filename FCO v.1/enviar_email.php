<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinatario = $_POST["destinatario"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];

    // Envie o e-mail
    if (mail($destinatario, $assunto, $mensagem)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha ao enviar o e-mail.";
    }
}
?>
