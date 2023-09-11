<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tomorrow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>MEC I4.0</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <div class="container">
        <header>
            <div class="image">
                    <img src="../assets/img/img_logo_2.png" alt="logo">
            </div>
                
        </header>
        
        <main>
        <h1>Connectez</h1>
            <section>
                <form action="#" method="get">
                    <label for="utilisateur">Utilisateur</label>
                    <input type="text" name="utilisateur" id="idutilisateur">
                    <label for="motdepasse">Mot de passe</label>
                    <input type="text" name="motdepasse" id="idmotdepasse">
                    <input type="submit" value="Connecter">
                </form>
            </section>
        </main>
    </div>

    <footer class="rodape">
        Développé par Leandro Dickmann &copy; <?= date('Y'); ?>
    </footer>
    
</body>
</html>