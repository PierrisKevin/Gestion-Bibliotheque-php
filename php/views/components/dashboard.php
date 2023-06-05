<link rel="stylesheet" href="../../css/dashboard.css">

<div class="dashboard-container">
    <div class="result-contain">
        <div class="card">
            <div class="resp">
                <p>Nombre de livre</p>
                <?php
                    include "../livre-controls.php";
                    $nbrLivre = getNombreLivre();
                    $nbrEmprunt = getNombreEmprunt();
                    $nbrAdh = getNombreAdherant();
                    echo "<p>$nbrLivre</p>";
                
            echo"</div>";
            echo"<div class=\"icon\">";

            echo"</div>";
        echo"</div>";
        echo"<div class=\"card\">";
        echo"    <div class=\"resp\">";
        echo"        <p>Livre emprunter</p>";
        echo"        <p>$nbrEmprunt</p>";
                
        echo"    </div>";
        echo"    <div class=\"icon\">";
                
        echo"    </div>";
        echo"</div>";
        echo"<div class=\"card\">";
        echo"    <div class=\"resp\">";
        echo"        <p>Nombre adherant</p>";
        echo"        <p>$nbrAdh</p>";
        ?>
                
            </div>
            <div class="icon">
                
            </div>
        </div>
    </div>
    <div class="chart-container">
        <canvas id="chart"></canvas>
    </div>
</div>

<script src="../../js/chart.js"></script>
<script src="../../js/chart-add.js"></script>
