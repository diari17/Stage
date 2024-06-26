<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue - Gestion d'équipe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f0f0f0;
        }
        .navbar {
            background-color: #007BFF;
            padding: 10px;
            text-align: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: inline-block;
        }
        .navbar a:hover {
            background-color: #0056b3;
        }
        .container {
            text-align: center;
            padding: 50px;
        }
        .container h1 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="{{ route('connexion') }}">Se connecter</a>
        <a href="{{ route('inscription') }}">S'inscrire</a> <!-- Utilisation de la route nommée -->
    </div>
    <div class="container">
        <h1>Bienvenue sur la plateforme de gestion d'équipe</h1>
        <p>Veuillez choisir une option dans la barre de navigation pour continuer.</p>
    </div>
</body>
</html>
