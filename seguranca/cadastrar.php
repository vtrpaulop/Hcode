<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['inputEmail'];
    $recaptchaResponse = $_POST['g-recaptcha-response']; // Captura a resposta do reCAPTCHA

    // Sua chave secreta fornecida pelo Google reCAPTCHA
    $secretKey = '6LevbGQqAAAAAOTN3sIR1hfArEcNiL-5INmLECzM';

    // Faz a requisição à API do Google para validar o reCAPTCHA
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $secretKey,
        'response' => $recaptchaResponse
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ],
    ];
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result, true);

    // Verifica a resposta do Google
    if ($response['success']) {
        // reCAPTCHA validado com sucesso
        echo "reCAPTCHA validado com sucesso! Email: " . htmlspecialchars($email);
        // Aqui você pode continuar com o processamento do email
    } else {
        // Falha no reCAPTCHA
       
        header('Location: exemplo-04.php');
       
    }
}
?>
