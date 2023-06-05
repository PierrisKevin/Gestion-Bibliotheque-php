<?php

    function getDataBaseConnexion(){
        try{
            $user = "root";
            $pass = "";
            $database_name = "bibliotheque";
            $pdo = new PDO("mysql:host=localhost;dbname=$database_name",$user,$pass);
            return $pdo;
        }
        catch(PDOException $e){
            print "Erreur !: " .$e->getMessage() . "<br>";
            die();
        }
    }
    function createAdherent($matricule,$nom, $prenom, $lieu_naiss, $date_naisse, $adresse, $numTel){
        $con = getDataBaseConnexion();
        $req = "INSERT INTO adherant (matricule,nom,prenom,lieu_naiss,date_naiss,adresse,numTel) VALUES ($matricule,'$nom','$prenom','$lieu_naiss','$date_naisse','$adresse',$numTel)";
        $exec = $con->exec($req);
        // $redirection = dirname($_SERVER["./views/adherant-views.php"]);
        // header("Location : ./views/adherant-views.php");
    }
    function getAllAdherant(){
        $con = getDataBaseConnexion();
        $req = 'select * from adherant ORDER BY nom';
        $rows = $con->query($req);
        $row = $rows->fetchAll();
        return $row;
    }
    function searchAdherant($valeur){
        $con = getDataBaseConnexion();
        $req = "select * from adherant WHERE nom like '%$valeur%' or prenom like '%$valeur%'  ORDER BY nom";
        $rows = $con->query($req);
        $row = $rows->fetchAll();
        return $row;
    }
    function readAdherant($id){
        $con = getDataBaseConnexion();
        $req = "SELECT * FROM adherant where id=$id";
        $rows = $con->query($req);
        $row = $rows->fetchAll();
        return $row[0];
    }
    function updateAdherant($matricule,$nom, $prenom, $lieu_naiss, $date_naiss, $adresse, $numero){
        $con = getDataBaseConnexion();
        $req = "UPDATE adherant SET nom='$nom',prenom='$prenom',adresse='$adresse',date_naiss='$date_naiss',lieu_naiss='$lieu_naiss',numTel='$numero' WHERE matricule=$matricule";
        echo $req;
        $sendREq = $con->exec($req);
    }
    function deleteAdherant($matricule){
        $con = getDataBaseConnexion();
        $req = "DELETE FROM adherant where matricule=$matricule";
        $exec = $con->exec($req);
    }

    // control des utilisateur
    function verifyUser($username, $mdp){
        $con = getDataBaseConnexion();
        $req = "SELECT username as nom FROM user WHERE username='$username' and mdp='$mdp'";
        $rows = $con->query($req);
        $row = $rows->fetchAll();
        $resp = "";
        foreach($row as $rep){
            $resp = $rep["nom"];
        }
        if ($resp==""){return false;}
        return true;
    }

    ?>

