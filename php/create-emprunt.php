<?php
    include "emprunt-controls.php";

    $choise = $_POST["mod-or-add"];

    $matricule = $_POST["matricule"];
    $codeLivre = $_POST["codeLivre"];
    $dateEmprunt = $_POST["dateEmprunt"];
    $dateRemis = $_POST["dateRemis"];
    $NbExemp = $_POST["NbExemp"];

    if ($choise=="add"){
        createEmprunt($matricule,$codeLivre,$dateEmprunt,$dateRemis,$NbExemp);
    }
    else{
        updateAdherant($matricule,$codeLivre,$dateEmprunt,$dateRemis,$NbExemp);
    }

    
?>
<script>
    window.open("http://localhost/gestion_bibliotheque/Home/php/views/emprunt-views.php","_self")
</script>