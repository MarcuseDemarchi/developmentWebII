<?php
 require '../vendor/autoload.php';
 use Mpdf\Mpdf;
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['name']);
    $endereco = htmlspecialchars($_POST['andress']);
    $telefone = htmlspecialchars($_POST['number_phone']);
    $email = htmlspecialchars($_POST['email']);
    $linkedin = htmlspecialchars($_POST['linkedin']);
    $experiencia = nl2br(htmlspecialchars($_POST['experience']));
    $habilidades = nl2br(htmlspecialchars($_POST['skills']));
    $formacao = nl2br(htmlspecialchars($_POST['formacao']));

    $html = "
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; }
            h1 { color: #333; }
            p { color: #555; }
        </style>
    </head>
    <body>
        <h1>$nome</h1>
        <p><strong>Endereço:</strong> $endereco</p>
        <p><strong>Telefone:</strong> $telefone</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>LinkedIn:</strong> $linkedin</p>
        <h2>Experiência</h2>
        <p>$experiencia</p>
        <h2>Habilidades</h2>
        <p>$habilidades</p>
        <h2>Formação</h2>
        <p>$formacao</p>
    </body>
    </html>
    ";

    $dompdf = new Mpdf();
    $dompdf->WriteHTML($html);
    $dompdf->Output();
} else {
    echo "Formulário não enviado.";
}
?>