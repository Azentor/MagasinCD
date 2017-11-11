<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modeleCD
 *
 * @author Giotto
 */
class modeleCD {
    
    /*function __construct(){

        //put your code here
    }*/
    function ajoutArtiste($preArt, $nomArt, $paysArt){

        $conn = mysqli_connect("localhost", "root", "", "pierreda_tp_02");
        if(!$conn){
            trigger_error("Erreur de connexion : " . mysqli_connect_error());
        }else if($conn){
            $sql = "INSERT INTO artistes(prenom, nom, pays) VALUES ('" . mysqli_real_escape_string($conn, $preArt) . "','" . mysqli_real_escape_string($conn, $nomArt) . "','" . mysqli_real_escape_string($conn, $paysArt) . "')";
            $resultat = mysqli_query($conn, $sql);

            
                if($resultat){
                    header("Location: index.php?page=ajouterartiste");
                }else{
                    trigger_error("Erreur dans la requête.");
                }
        }
    }
    function ajoutAlbum($titAlb, $prixAlb, $imgAlb, $ventesAlb, $artAlb, $genAlb ){

        $conn = mysqli_connect("localhost", "root", "", "pierreda_tp_02");
        if(!$conn){
            trigger_error("Erreur de connexion : " . mysqli_connect_error());
        }else if($conn){
            $sql = "INSERT INTO albums(titre, prix, image, nbVentes, IDArtiste, IDGenres) VALUES ('" . mysqli_real_escape_string($conn, $titAlb) . "','" . mysqli_real_escape_string($conn, $prixAlb) . "','" . mysqli_real_escape_string($conn, $imgAlb) . "','" . mysqli_real_escape_string($conn, $ventesAlb) . "','" . mysqli_real_escape_string($conn, $artAlb) . "','" . mysqli_real_escape_string($conn, $genAlb) . "')";
            $resultat = mysqli_query($conn, $sql);
                if($resultat){
                    header("Location: index.php?page=ajouteralbum");
                }else{
                    trigger_error("Erreur dans la requête.");
                }
        }
    }
    function ajoutAlbumArtGen(){

        $conn = mysqli_connect("localhost", "root", "", "pierreda_tp_02");
        if(!$conn){
            trigger_error("Erreur de connexion : " . mysqli_connect_error());
        }else if($conn){
            $sqlArt = "SELECT * FROM artistes";
            $sqlGen = "SELECT * FROM genres";
            $resultatArt = mysqli_query($conn, $sqlArt);
            $resultatGen = mysqli_query($conn, $sqlGen);

                if($resultatArt && $resultatGen){
                    $rangeeArt = mysqli_fetch_assoc($resultatArt);
                    $rangeeGen = mysqli_fetch_assoc($resultatGen);
                    {
			echo "<option value='". $rangeeArt["id"] ."'>" . $rangeeArt["prenom"] . " " . $rangeeArt["nom"] ."</option>";
		}
                    $res = [$rangeeArt, $rangeeGen];
                    return $res;
                }else{
                    trigger_error("Erreur dans la requête.");
                }
        }
    }
	
	
	function listePistes(){
		
			//connexion avec sélection de la base de données
		$conn = mysqli_connect("localhost", "root", "", "pierreda_tp_02");
		
		if(!$conn)
		{
			trigger_error("Erreur de connexion : " . mysqli_connect_error());
		}
		else
		{
			$aRangee =[];
			
			$sql = "SELECT * FROM pistes";
			//on exécute la requête avec mysqli_query
			$resultat = mysqli_query($conn, $sql); 
			//dans $resultat, il y a les rangées retournées
			//pour avoir un tableau associatif (!!!), on utilise mysqli_fetch_assoc()
			
			while($rangee = mysqli_fetch_assoc($resultat))
			{
				 array_push($aRangee, $rangee);//dans chaque caise de tableau il y a les donne de chaque piste, donc le resultat c'est le tableau avec les tableau 
			}
	    }
		
		return $aRangee;
	}
    //function ajoute au BD 
    function ajoutPiste($titre, $duree, $prix, $album){
    	echo "the data has been received";
        $evaluation = 0;
		$nbVentes = 0;
		$album = 1; //variable par defaut...penser comment connecter avec album existant ou creer nouveau album???
        $conn = mysqli_connect("localhost", "root", "", "pierreda_tp_02");
        if(!$conn){
            trigger_error("Erreur de connexion : " . mysqli_connect_error());
        }else if($conn){
            $sql = "INSERT INTO pistes(titre, duree, prix, evaluation, nbVentes, IDalbum) VALUES ('" . mysqli_real_escape_string($conn, $titre) . "','" . mysqli_real_escape_string($conn, $duree) . "','" . mysqli_real_escape_string($conn, $prix) . "','" . mysqli_real_escape_string($conn, $evaluation) ."','" . mysqli_real_escape_string($conn, $nbVentes) ."','" . mysqli_real_escape_string($conn, $album) . "')";
            $resultat = mysqli_query($conn, $sql);

            
                if($resultat){
                    header("Location: index.php?page=confirmAjoutePiste");
                }else{
                    trigger_error("Erreur dans la requête.");
                }
        }
    }

}