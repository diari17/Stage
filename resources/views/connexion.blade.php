<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Gestion d'équipe</title>
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
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        .form-container form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .form-container label {
            margin-top: 10px;
        }
        .form-container input {
            padding: 10px;
            margin-top: 5px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container button {
            margin-top: 20px;
            padding: 10px 20px;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="{{ route('accueil') }}">Accueil</a>
        <a href="{{ route('inscription') }}">S'inscrire</a>
    </div>
    <div class="container">
        <h1>Connexion</h1>
        <div class="form-container">
            <form action="{{ route('traitement_connexion') }}" method="post">
                @csrf
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Se connecter</button>
            </form>
        </div>
    </div>
</body>
</html>
