<?php


function ajoutArtiste(){
    
    if(!isset($_POST["prenom"]) || !isset($_POST["nom"])|| !isset($_POST["pays"]))
	{
		//rediriger vers l'accueil
		header("Location: index.php?page=accueiladmin");
	}
	else
	{
		//j'arrive du formulaire
		if(trim($_POST["prenom"]) == "" || trim($_POST["nom"]) == "" || trim($_POST["pays"]) == "")
		{
			$message = "Le formulaire n'a pas été rempli correctement.";
			header("Location: index.php?page=accueiladmin");
		}
		else
		{
			//procéder à l'insertion
			//connexion avec sélection de la base de données
			$conn = mysqli_connect("localhost", "root", "", "pierreda_tp_02");
	
			if(!$conn)
			{
				trigger_error("Erreur de connexion : " . mysqli_connect_error());
			}else if($conn){
                            
                                $sql = "INSERT INTO artistes(prenom, nom, pays) VALUES ('" . mysqli_real_escape_string($conn, $_POST["prenom"]) . "','" . mysqli_real_escape_string($conn, $_POST["nom"]) . "','" . mysqli_real_escape_string($conn, $_POST["pays"]) . "')";
                                var_dump($sql);
                                $resultat = mysqli_query($conn, $sql);
                                var_dump($resultat);
                                if($resultat){
                                        header("Location: index.php?page=accueiladmin");

                                }else{
                                    trigger_error("Erreur dans la requête.");
                                }
                        }
                }
        }
}
ajoutArtiste();