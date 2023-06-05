<?php
    include "../Adherent-controls.php";

    if ($_SERVER["REQUEST_METHOD"]=="POST"){

        $username = $_POST["nom"];
        $mdp =$_POST["password"];
        $rep = verifyUser($username,$mdp);
        if ($rep) {
            echo "<input type=\"hidden\" value=\"succes\"name=\"logOrNo\">";
        }
        else echo "<input type=\"hidden\" value=\"erreur\"name=\"logOrNo\">";
        }
    else{
        echo "<input type=\"hidden\" value=\"rien\"name=\"logOrNo\">";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../../css/login.css">
</head>
<body>
    <div id="container">
        <div class="login-contain">

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="formulaire-contain">
                    <h1>connexion</h1>
                    <div class="form-control">
                        <img src="../../image/user1.png">
                        <input type="text" placeholder="Votre nom" name="nom" required>
                    </div>
                    <div class="form-control">
                        <img src="../../image/secure.png">
                        <input type="password" placeholder="Votre mot de passe" name="password" required>
                        <span class="show-pass"></span>
                    </div>
                    <div class="submission">
                        <input type="submit" value="Connecter">
                    </div>
                </div>

                <div class="image-contain">
                    <img src="../../image/image.jpg" alt="logo">
                </div>
            </form>

        </div>
    </div>

    
    

    <script src="../../js/login.js"></script>
</body>
</html>