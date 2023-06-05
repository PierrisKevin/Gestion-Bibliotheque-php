<link rel="stylesheet" href="../../css/adherent.css">

<div class="overlay hidden"></div>
        <div class="delet-modal hidden">
            <div class="icon-trash">
                <i class="fa-solid fa-trash"></i>
            </div>
            <div class="message-del">
                Voulez vous vraiment supprimer emprunt ?
            </div>
            <div class="option-del">
                <form action="../emprunte-supr.php" method="POST">
                    <input type="hidden" value="" name="id_emprunteur" class="recDel">
                    <button type="submit">confirmer</button>
                </form>
                <button class="cancel">Annuler</button>
            </div>
        </div>
        <div class="modal-container hidden">
            <form method="POST" class="add-member" action="../create-emprunt.php">

                <div class="titre">
                    <h1>Nouveau emprunt</h1>
                </div>
                <input type="number" placeholder="numero matricule" name="matricule"required>
                <input type="number" placeholder="code livre" name="codeLivre"required>
                <input type="text" placeholder="Date emprunt (YYYY/MM/DD)" name="dateEmprunt"required>
                <input type="text" placeholder="date de remis (YYYY/MM/DD)" name="dateRemis"required>
                <input type="number" placeholder="Nombre d'exemplaire" name="NbExemp" required>
                <input type="hidden" name="identifiant" required>

                <input type="hidden" name="mod-or-add">

                <div class="submission">
                    <input type="submit" value="Enregistrer">
                </div>
            </form>
        </div>

        <div class="adherent-container">
            <header>
                <form method="POST" class="search-container" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="text" placeholder="Cherche ici..." name="search">
                    <button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
                <div class="add-btn">
                    <a href="#">
                        + nouveau emprunt
                    </a>
                </div>
            </header>

            <div class="adherant-list">
                
                    <!-- <p>00000</p> -->

                    <?php 
                        include "../emprunt-controls.php";

                        echo "<div class=\"box\">";
                        echo "<p>Matricule</p>" ;
                        echo "<p>Nom<p>" ;
                        echo "<p>Prenom</p>";
                        echo "<p>Telephone</p>";
                        echo "<p>Titre</p>";
                        echo "<p>date emprunt</p>";
                        echo "<p>Date remise</p>";
                        echo "<div class=\"choise\">";
                        echo"    <div class=\"delet\">";
                        echo"    </div>";
                        echo"    <div class=\"edit\">";
                        echo"    </div>";
                        echo"</div>";
                        echo "</div>";

                        $listeUmprunt = null;
                        if ($_SERVER["REQUEST_METHOD"]=="POST"){
                            $valeur = $_POST["search"];
                            if ($valeur==""){$listeUmprunt = getAllUmprunt();}
                            else{
                                $listeUmprunt = searchUmprunt($valeur);
                            }
                        }
                        else{
                            $listeUmprunt = getAllUmprunt();
                        }

                        foreach ($listeUmprunt as $umprunter){
                            echo "<div class=\"box\">";
                            echo "<p>".$umprunter['matricule']."</p>" ;
                            echo "<p>".$umprunter['nom']."</p>" ;
                            echo "<p>".$umprunter['prenom']."</p>";
                            echo "<p>".$umprunter['numTel']."</p>";
                            echo "<p>".$umprunter['titre_liv']."</p>";
                            echo "<p>".$umprunter['date_emprunt']."</p>";
                            echo "<p>".$umprunter['date_remis']."</p>";
                            echo "<input type=\"hidden\" value=".$umprunter['code_liv']." class=\"code_livre\">";
                            echo "<input type=\"hidden\" value=".$umprunter['Nb_exempl']." class=\"nombre_exemplaire\">";
                            echo "<div class=\"choise\">";
                            echo"    <div class=\"delet\">";
                            echo"        <i class=\"fa-solid fa-trash\" id=".$umprunter['id']."></i>";
                            echo"    </div>";
                            echo"    <div class=\"edit\">";
                            echo"        <i class=\"fa-solid fa-pen-to-square\" id=".$umprunter['id']."></i>";
                            echo"    </div>";
                            echo"</div>";
                            echo "</div>";
                        }
                       echo"</div>"; 
                       echo"</div>"; 
                    ?>

                              
        

<script src="../../js/emprunt.js"></script>