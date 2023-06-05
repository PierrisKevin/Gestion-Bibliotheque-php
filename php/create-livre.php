<?php
    include "livre-controls.php";

    $choise = $_POST["mod-or-add"];
    $codeLivre = $_POST["codeLivre"];
    $titre = $_POST["titre"];
    $auteur = $_POST["auteur"];
    $dateEdi = $_POST["dateEdi"];
    $editionLiv = $_POST["editionLiv"];
    $isbn = $_POST["isbn"];
    $NbExemp = $_POST["NbExemp"];
    
    if ($choise=="add"){
        createLivre($codeLivre,$titre,$auteur,$editionLiv,$dateEdi,$isbn,$NbExemp);
    }
    else{
        updateLivre($codeLivre,$titre,$auteur,$editionLiv,$dateEdi,$isbn,$NbExemp);
    }


    
?>
<script>
    window.open("http://localhost/gestion_bibliotheque/Home/php/views/livre-views.php","_self")
</script>