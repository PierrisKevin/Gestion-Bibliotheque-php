<?php
    function navBar($str){
        if ($str=="dash"){
            echo "<a href=\"./index-views.php\" class=\"selected\"><i class=\"fa-solid fa-line-chart\"></i> Dashboard</a>";
            echo "<a href=\"./adherant-views.php\" class=\"\"><i class=\"fa-solid fa-user\"></i> Adherant</a>";
            echo "<a href=\"./livre-views.php\" class=\"\"><i class=\"fa-solid fa-book\"></i> Livre</a>";
            echo "<a href=\"./emprunt-views.php\" class=\"\"><i class=\"fa-solid fa-landmark\"></i> Emprunt</a>";
        }
        if ($str=="adh"){
            echo "<a href=\"./index-views.php\" class=\"\"><i class=\"fa-solid fa-line-chart\"></i> Dashboard</a>";
            echo "<a href=\"./adherant-views.php\" class=\"selected\"><i class=\"fa-solid fa-user\"></i> Adherant</a>";
            echo "<a href=\"./livre-views.php\" class=\"\"><i class=\"fa-solid fa-book\"></i> Livre</a>";
            echo "<a href=\"./emprunt-views.php\" class=\"\"><i class=\"fa-solid fa-landmark\"></i> Emprunt</a>";
        }
        if ($str=="livre"){
            echo "<a href=\"./index-views.php\" class=\"\"><i class=\"fa-solid fa-line-chart\"></i> Dashboard</a>";
            echo "<a href=\"./adherant-views.php\" class=\"\"><i class=\"fa-solid fa-user\"></i> Adherant</a>";
            echo "<a href=\"./livre-views.php\" class=\"selected\"><i class=\"fa-solid fa-book\"></i> Livre</a>";
            echo "<a href=\"./emprunt-views.php\" class=\"\"><i class=\"fa-solid fa-landmark\"></i> Emprunt</a>";
        }
        if ($str=="emp"){
            echo "<a href=\"./index-views.php\" class=\"\"><i class=\"fa-solid fa-line-chart\"></i> Dashboard</a>";
            echo "<a href=\"./adherant-views.php\" class=\"\"><i class=\"fa-solid fa-user\"></i> Adherant</a>";
            echo "<a href=\"./livre-views.php\" class=\"\"><i class=\"fa-solid fa-book\"></i> Livre</a>";
            echo "<a href=\"./emprunt-views.php\" class=\"selected\"><i class=\"fa-solid fa-landmark\"></i> Emprunt</a>";
        }
    }
?>