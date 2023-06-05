<?php
    include "Adherent-controls.php";

    $choise = $_POST["mod-or-add"];
    echo $choise."<br>";
    $matricule = $_POST["matricule"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date_naiss = $_POST["dateNaiss"];
    $lieu_naiss = $_POST["lieuNaissance"];
    $adresse = $_POST["adresse"];
    $numTel = $_POST["numTel"];
    if ($choise=="add"){
        createAdherent($matricule,$nom,$prenom,$lieu_naiss,$date_naiss,$adresse,$numTel);
    }
    else{
        updateAdherant($matricule,$nom,$prenom,$lieu_naiss,$date_naiss,$adresse,$numTel);
    }

    
?>
<script>
    window.open("http://localhost/gestion_bibliotheque/Home/php/views/adherant-views.php","_self")
</script>