<link rel="stylesheet" href="../../css/adherent.css">

<div class="overlay hidden"></div>
        <div class="delet-modal hidden">
            <div class="icon-trash">
                <i class="fa-solid fa-trash"></i>
            </div>
            <div class="message-del">
                Voulez vous vraiment supprimer l'adherant ?
            </div>
            <div class="option-del">
                <form action="../adherent-supr.php" method="POST">
                    <input type="hidden" value="" name="matricule" class="recDel">
                    <button type="submit">confirmer</button>
                </form>
                <button class="cancel">Annuler</button>
            </div>
        </div>
        <div class="modal-container hidden">
            <form method="POST" class="add-member" action="../create-adherant.php">

                <div class="titre">
                    <h1>Ajouter un membre</h1>
                </div>
                <input type="text" placeholder="Matricule" name="matricule"required>
                <div class="fullname">
                    <input type="text"placeholder="Nom" name="nom" required>
                    <input type="text"placeholder="Prenom" name="prenom">
                </div>
                <input type="text" placeholder="YYYY/MM/JJ" name="dateNaiss"required>
                <input type="text" placeholder="Lieu de naissance" name="lieuNaissance"required>
                <input type="text" placeholder="Adresse" name="adresse"required>
                <input type="number" placeholder="Numero telephone" name="numTel" required>

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
                        + nouveau membre 
                    </a>
                </div>
            </header>

            <div class="adherant-list">
                
                    <!-- <p>00000</p> -->

                    <?php 
                        include "../Adherent-controls.php";
                        $listeAdherant = null;
                        if ($_SERVER["REQUEST_METHOD"]=="POST"){
                            $valeur = $_POST["search"];
                            if ($valeur==""){$listeAdherant = getAllAdherant();}
                            else{
                                $listeAdherant = searchAdherant($valeur);
                            }
                        }
                        else{
                            $listeAdherant = getAllAdherant();
                        }
                        
                        echo "<div class=\"box\">";
                            echo "<p>MAtricule</p>" ;
                            echo "<p>Nom</p>" ;
                            echo "<p>Prenom</p>";
                            echo "<p>Date naissance</p>";
                            echo "<p>lieu naissance</p>";
                            echo "<p>adresse</p>";
                            echo "<p>Numero telephone</p>";
                            echo "<div class=\"choise\">";
                            echo"    <div class=\"delet\">";

                            echo"    </div>";
                            echo"    <div class=\"edit\">";

                            echo"    </div>";
                            echo"</div>";
                            echo "</div>";

                        foreach ($listeAdherant as $adherant){
                            echo "<div class=\"box\">";
                            echo "<p>".$adherant['matricule']."</p>" ;
                            echo "<p>".$adherant['nom']."</p>" ;
                            echo "<p>".$adherant['prenom']."</p>";
                            echo "<p>".$adherant['date_naiss']."</p>";
                            echo "<p>".$adherant['lieu_naiss']."</p>";
                            echo "<p>".$adherant['adresse']."</p>";
                            echo "<p>".$adherant['numTel']."</p>";
                            echo "<div class=\"choise\">";
                            echo"    <div class=\"delet\">";
                            echo"        <i class=\"fa-solid fa-trash\" id=".$adherant['matricule']."></i>";
                            echo"    </div>";
                            echo"    <div class=\"edit\">";
                            echo"        <i class=\"fa-solid fa-pen-to-square\" id=".$adherant['matricule']."></i>";
                            echo"    </div>";
                            echo"</div>";
                            echo "</div>";
                        }
                       echo"</div>"; 
                       echo"</div>"; 
                    ?>
                    
                
                
            
        

<script src="../../js/adherant.js"></script>