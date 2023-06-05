<?php
    include "Adherent-controls.php";

    $matricule = $_POST["matricule"];
    deleteAdherant($matricule);
?>

<script>
    window.open("http://localhost/gestion_bibliotheque/Home/php/views/adherant-views.php","_self")
</script>