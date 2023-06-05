<link rel="stylesheet" href="../../css/adherent.css">

<div class="overlay hidden"></div>
        <div class="delet-modal hidden">
            <div class="icon-trash">
                <i class="fa-solid fa-trash"></i>
            </div>
            <div class="message-del">
                Voulez vous vraiment supprimer cet livre ?
            </div>
            <div class="option-del">
                <form action="../livre-supr.php" method="POST">
                    <input type="hidden" value="" name="code_liv" class="recDel">
                    <button type="submit">confirmer</button>
                </form>
                <button class="cancel">Annuler</button>
            </div>
        </div>
        <div class="modal-container hidden">
            <form method="POST" class="add-member" action="../create-livre.php">

                <div class="titre">
                    <h1>Ajouter un Livre</h1>
                </div>
                <input type="text" placeholder="code livre" name="codeLivre"required>
                <div class="fullname">
                    <input type="text"placeholder="titre" name="titre" required>
                    <input type="text"placeholder="Auteur" name="auteur">
                </div>
                <input type="text" placeholder="YYYY/MM/JJ" name="dateEdi"required>
                <input type="text" placeholder="Edition du livre" name="editionLiv"required>
                <input type="text" placeholder="isbn" name="isbn"required>
                <input type="number" placeholder="Nombre d'exemplaire" name="NbExemp" required>

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
                        + nouveau Livre
                    </a>
                </div>
            </header>

            <div class="adherant-list">
                
                    <!-- <p>00000</p> -->

                    <?php 
                        include "../livre-controls.php";
                        $listeLivre = null;
                        if ($_SERVER["REQUEST_METHOD"]=="POST"){
                            $valeur = $_POST["search"];
                            if ($valeur==""){$listeLivre = getAllLivre();}
                            else{
                                $listeLivre = searchLivre($valeur);
                            }
                        }
                        else{
                            $listeLivre = getAllLivre();
                        }
                        
                        echo "<div class=\"box\">";
                            echo "<p>code livre</p>" ;
                            echo "<p>Titre livre<p>" ;
                            echo "<p>Auteur<p>";
                            echo "<p>Date edition</p>";
                            echo "<p>Edition</p>";
                            echo "<p>isbn<p>";
                            echo "<p>Nombre exemplaire</p>";
                            echo "<div class=\"choise\">";
                            // echo"    <div class=\"delet\">";

                            // echo"    </div>";
                            // echo"    <div class=\"edit\">";

                            // echo"    </div>";
                        echo"</div>";
                        echo "</div>";

                        foreach ($listeLivre as $livre){
                            echo "<div class=\"box\">";
                            echo "<p>".$livre['code_liv']."</p>" ;
                            echo "<p>".$livre['titre_liv']."</p>" ;
                            echo "<p>".$livre['auteur']."</p>";
                            echo "<p>".$livre['date_edi']."</p>";
                            echo "<p>".$livre['edition_liv']."</p>";
                            echo "<p>".$livre['isbn']."</p>";
                            echo "<p>".$livre['Nb_exemp']."</p>";
                            echo "<div class=\"choise\">";
                            echo"    <div class=\"delet\">";
                            echo"        <i class=\"fa-solid fa-trash\" id=".$livre['code_liv']."></i>";
                            echo"    </div>";
                            echo"    <div class=\"edit\">";
                            echo"        <i class=\"fa-solid fa-pen-to-square\" id=".$livre['code_liv']."></i>";
                            echo"    </div>";
                            echo"</div>";
                            echo "</div>";
                        }
                       echo"</div>"; 
                       echo"</div>"; 
                    ?>
                    
                
                
            
        

<script src="../../js/livre.js"></script>