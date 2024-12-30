<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        form {
            margin-top: 20px;
        }

        div {
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="email"], input[type="tel"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        ul {
            color: red;
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>Inscription</h1>

    <?php if (session()->getFlashdata('errors')): ?>
        <ul>
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="/registerStore" method="POST">
        <?= csrf_field() ?>
        <div>
            <label for="name">Nom :</label>
            <input type="text" name="name" id="name" value="<?= old('name') ?>">
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" value="<?= old('email') ?>">
        </div>
        <div>
            <label for="city">Ville :</label>
            <input type="text" name="city" id="city" value="<?= old('city') ?>">
        </div>
        <div>
            <label for="tel">Téléphone :</label>
            <input type="tel" name="tel" id="tel" value="<?= old('tel') ?>">
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
