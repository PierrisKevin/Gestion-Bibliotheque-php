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
    function createLivre($code_liv,$titre_liv, $auteur, $edition_liv, $date_edi, $isbn, $Nb_exemp){
        $con = getDataBaseConnexion();
        $req = "INSERT INTO livre (code_liv,titre_liv,auteur,edition_liv,date_edi,isbn,Nb_exemp) VALUES ($code_liv,'$titre_liv','$auteur','$edition_liv','$date_edi','$isbn',$Nb_exemp)";
        $exec = $con->exec($req);
    }
    function getAllLivre(){
        $con = getDataBaseConnexion();
        $req = 'select * from livre';
        $rows = $con->query($req);
        $row = $rows->fetchAll();
        return $row;
    }
    function searchLivre($valeur){
        $con = getDataBaseConnexion();
        $req = "select * from livre WHERE titre_liv like '%$valeur%'  ORDER BY titre_liv";
        $rows = $con->query($req);
        $row = $rows->fetchAll();
        return $row;
    }
    function readLivre($code_liv){
        $con = getDataBaseConnexion();
        $req = "SELECT * FROM livre where code_liv=$code_liv";
        $rows = $con->query($req);
        $row = $rows->fetchAll();
        return $row[0];
    }
    function updateLivre($code_liv,$titre_liv, $auteur, $edition_liv, $date_edi, $isbn, $Nb_exemp){
        $con = getDataBaseConnexion();
        $req = "UPDATE livre SET titre_liv='$titre_liv',auteur='$auteur',edition_liv='$edition_liv',date_edi='$date_edi',isbn='$isbn',Nb_exemp=$Nb_exemp WHERE code_liv=$code_liv";
        $sendREq = $con->exec($req);
    }
    function deletLivre($code_liv){
        $con = getDataBaseConnexion();
        $req = "DELETE FROM livre where code_liv=$code_liv";
        $exec = $con->exec($req);
    }


    //Mandray statistique
    function getStatistque(){
        $resData = [];
        $response = ["0","0","0","0","0","0","0","0","0","0","0","0"];
        $con = getDataBaseConnexion();
        $req = "SELECT COUNT(*) as mois FROM emprunt GROUP BY mounth ORDER BY mounth";
        $rows = $con->query($req);
        $row = $rows->fetchAll();
        
        foreach($row as $data){
            array_push($resData,$data);
        }
        $response[0]="".$resData[4]."";
        $response[1]="".$resData[3]."";
        $response[2]="".$resData[8]."";
        $response[3]="".$resData[1]."";
        $response[4]="".$resData[7]."";
        $response[5]="".$resData[6]."";
        $response[6]="".$resData[5]."";
        $response[7]="".$resData[0]."";
        $response[8]="".$resData[11]."";
        $response[9]="".$resData[10]."";
        $response[10]="".$resData[9]."";
        $response[11]="".$resData[2]."";

        return join("-",$response);
    }
    function getNombreLivre(){
        $con = getDataBaseConnexion();
        $req = "SELECT COUNT(*) as nombreLivre FROM livre";
        $rows = $con->query($req);
        $row = $rows->fetchAll();
        return $row[0][0];
    }
    function getNombreEmprunt(){
        $con = getDataBaseConnexion();
        $req = "SELECT COUNT(*) as nombreEmprunt FROM emprunt";
        $rows = $con->query($req);
        $row = $rows->fetchAll();
        return $row[0][0];
    }
    function getNombreAdherant(){
        $con = getDataBaseConnexion();
        $req = "SELECT COUNT(*) as nombreEmprunt FROM adherant";
        $rows = $con->query($req);
        $row = $rows->fetchAll();
        return $row[0][0];
    }

    

    ?>