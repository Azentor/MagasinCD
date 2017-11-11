<?php
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
    ajoutAlbum(hello,3.99,faef,34,5,4);
    $select = ajoutAlbumArtGen();
    var_dump($select);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

