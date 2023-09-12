<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Utilizando o reCaptcha</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
    <form action="cadastrar.php" method="post">

        <input type="email" name="inputEmail">
        <button type="submit">Enviar</button>
        <div class="g-recaptcha" data-sitekey="CODIGO_PUBLIC_DO_RECAPTCHA"></div>

    </form>
</body>
</html>
