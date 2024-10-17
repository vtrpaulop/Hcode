<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com reCAPTCHA</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>
    <form action="cadastrar.php" method="post">
        <!-- Chave do site fornecida pelo Google reCAPTCHA -->
        <div class="g-recaptcha" data-sitekey="6LevbGQqAAAAAJq7daXeH44wl9RCXLDD5I5RXqYK"></div>

        <input type="email" name="inputEmail" placeholder="Digite seu email" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
