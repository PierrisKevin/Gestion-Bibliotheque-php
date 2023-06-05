<?php
    include "livre-controls.php";

    $code_liv = $_POST["code_liv"];
    deletLivre($code_liv);
?>

<script>
    window.open("http://localhost/gestion_bibliotheque/Home/php/views/livre-views.php","_self")
</script>