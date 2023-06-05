<?php
    include "emprunt-controls.php";

    $id_emprumt = $_POST["id_emprunteur"];
    delEmprunt($id_emprumt);
?>

<script>
    window.open("http://localhost/gestion_bibliotheque/Home/php/views/emprunt-views.php","_self")
</script>