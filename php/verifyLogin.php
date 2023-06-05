<?php
    include "Adherent-controls.php";

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = $_POST["nom"];
        $mdp =$_POST["password"];
        $rep = verifyUser($username,$mdp);
        if ($rep) echo "success";
        else echo "Error...";
        }
    ?>