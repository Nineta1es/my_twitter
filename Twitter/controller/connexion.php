<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Twitter</title>
</head>

<body>
    <!-- Formulaire d'inscription -->
    <form method="get" action="./php/connexion.php">
        <label for="login">Identifiant :</label>
        <input type="text" name="login" id="login" required>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required>
        <button type="button" onclick="togglePassword()"><i class="fa-solid fa-eye"></i></button>
        <input type="submit" value="Connexion">

    </form>
    <script src="../script/ShowPsw.js"></script>
</body>

</html>