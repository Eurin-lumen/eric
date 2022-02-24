
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document forms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="title">Inscription</div>
        <form method="post">
            <div class="user-detail">

                <div class="input-box">
                    <span class="details">Nom</span>
                    <input type="text" value="<?= get_input('name')?>" name="name" id="name" placeholder="Entrez Votre Nom" required>
                </div>
                <div class="input-box">
                    <span class="details">Prenom</span>
                    <input type="text" value="<?= get_input('first_name')?>" name="first_name" id="first_name" placeholder="Entrez Votre Prenom" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email"  value="<?= get_input('email')?>" name="email" id="email" placeholder="Entrez Votre Email" required>
                </div>
                <div class="input-box">
                    <span class="details">Numero Telephone</span>
                    <input type="number"  value="<?= get_input('number')?>" name="number" id="number" placeholder="Entrez Numero Telephone" required>
                </div>
                <div class="input-box">
                    <span class="details">Mots Pass</span>
                    <input type="password" name="password" id="password" placeholder="Entrez Mots de Pass" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirmer Mot de Pass</span>
                    <input type="password" name="password_confirm" id="password_confirm" placeholder="Confirmer Mot de Pass" required>
                </div>

            </div>
            <div class="gender-details">
                <input type="radio"  value="<?= get_input('gender')?>" name="gender" id="dot-1">
                <input type="radio" value="<?= get_input('gender')?>" name="gender" id="dot-2">
                <input type="radio" value="<?= get_input('gender')?>" name="gender" id="dot-3">
                <span class="gender-title">Genre</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span  value="<?= get_input('gender')?>"class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span  value="<?= get_input('gender')?>"class="gender">Femelle</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span  value="<?= get_input('gender')?>" class="gender">Ne Pas Specifier</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="register" value="S'enregistrer">
            </div>
        </form>
    </div>
</body>
</html>