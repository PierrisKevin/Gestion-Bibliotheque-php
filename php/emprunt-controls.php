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
    function createEmprunt($matricule,$code_liv, $date_emprunt, $date_remis, $Nb_exempl){
        $con = getDataBaseConnexion();
        $req = "INSERT INTO emprunt (matricule,code_liv,date_emprunt,date_remis,Nb_exempl) VALUES ($matricule,$code_liv,'$date_emprunt','$date_remis',$Nb_exempl)";
        $exec = $con->exec($req);
    }
    function getAllUmprunt(){
        $con = getDataBaseConnexion();
        $req = 'SELECT emp.id,emp.Nb_exempl,emp.matricule,emp.code_liv,adherant.nom,adherant.prenom,adherant.numTel,livre.titre_liv,emp.date_emprunt,emp.date_remis FROM emprunt as emp INNER JOIN livre ON emp.code_liv=livre.code_liv INNER JOIN adherant ON emp.matricule=adherant.matricule';
        $rows = $con->query($req);
        $row = $rows->fetchAll();
        return $row;
    }
    function searchUmprunt($valeur){
        $con = getDataBaseConnexion();
        $req = "SELECT emp.id,emp.Nb_exempl,emp.matricule,emp.code_liv,adherant.nom,adherant.prenom,adherant.numTel,livre.titre_liv,emp.date_emprunt,emp.date_remis FROM emprunt as emp INNER JOIN livre ON emp.code_liv=livre.code_liv INNER JOIN adherant ON emp.matricule=adherant.matricule WHERE adherant.nom LIKE '%$valeur%' OR adherant.prenom LIKE '%$valeur%' OR livre.titre_liv LIKE '%$valeur%'";
        $rows = $con->query($req);
        $row = $rows->fetchAll();
        return $row;
    }
    function readEmprunt($id){
        $con = getDataBaseConnexion();
        $req = "SELECT * FROM Emprunt where id=$id";
        $rows = $con->query($req);
        $row = $rows->fetchAll();
        return $row[0];
    }
    function updateAdherant($matricule,$code_liv, $date_emprunt, $date_remis, $Nb_exempl){
        $con = getDataBaseConnexion();
        $req = "UPDATE emprunt SET date_emprunt=$date_emprunt,date_remis=$date_remis,Nb_exempl=$Nb_exempl WHERE matricule=$matricule and code_liv=$code_liv";
        $sendREq = $con->exec($req);
    }
    function delEmprunt($id){
        $con = getDataBaseConnexion();
        $req = "DELETE FROM emprunt where id=$id";
        $exec = $con->exec($req);
    }
    function getNombreEmprunt(){
        $con = getDataBaseConnexion();
        $req = "SELECT COUNT(*) as nombreEmprunt FROM emprunt";
        $rows = $con->query($req);
        $row = $rows->fetchAll();
        return $row[0][0];
    }

    ?>