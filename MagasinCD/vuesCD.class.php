<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of vuesCD
 *
 */
class VuesCD {
    public function afficheEntete(){
        ?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <head>

                        <title>CD HOP!</title>
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link href="css/normalise.css" rel="stylesheet" type="text/css" />
                <link href="css/main.css" rel="stylesheet" type="text/css" />


                <link href="https://fonts.googleapis.com/css?family=Arvo|Playfair+Display|Titillium+Web" rel="stylesheet">
                </head>
            <body>
        <?php
    }
    public function afficheFooter(){
    
        ?>
                            <footer>
                            <section>
                                <ul>
                                    <li><a href="#">Notre adresse</a></li>
                                    <li><a href="#">Nous contacter</a></li>
                                    <li><a href="#">Politique d'achat</a></li>

                                </ul>
                                <ul>
                                    <li><a href="#">Nous suivre</a></li>
                                    <li class="fa fa-facebook fa-2x"><a href="#"></a></li>
                                    <li class="fa fa-twitter fa-2x"><a href="#"></a></li>
                                </ul>
                            </section>
                        </footer>
                        </body>
                </html>
        <?php
    }
    public function afficheMenuAdmin(){
        ?>
        <nav class="navigation">
            <ul>
            <li><a href="index.php?page=accueil">Accueil</a></li>
            <li><a href="index.php?page=ajouterartiste">Ajouter artiste</a></li>
            <li><a href="index.php?page=ajouteralbum">Ajouter un CD</a></li>
            <li><a  href="index.php?page=ajoutepiste">Ajouter et modifier une piste</a></li>
            <li><a  href="index.php?page=listepistes">Afficher toutes les pistes</a></li>
            </ul>
         </nav>
          
        <?php
    }
    public function afficheMenuClient(){
        ?>
        <nav class="navigation">
            <ul>
	            <li><a href="index.php?page=accueil">Accueil</a></li>
	            <li><a href="index.php?page=listecd">Liste des CD</a></li>
	            <li><a href="index.php?page=listepistes">Liste par Pistes</a></li>
	            <li><a href="index.php?page=listeartistes">Liste par Artistes</a></li>
	            <li><a href="index.php?page=accueiladmin">Réservé à l'administration</a></li>
	            <li class="fa fa-shopping-cart fa-2x"><a href="#"></a></li>
	            <li class="fa fa-user-circle fa-2x"><a href="#"></a></li>
            </ul>
         </nav>
        
        <?php
     }
     public function afficheAjoutArtiste(){
        ?>
        <div class="form" style="background-color: darkgray; padding-left: 30px;">
        <h2>Ajouter un artiste</h2>
            <form method="post" action="index.php?page=confirmartiste">
				<p><label for="prenom">Prénom : </label><input type="text" value="" name="prenom" /></p>
				<p><label for="nom">Nom : </label><input type="text" value="" name="nom" /></p>
                <p><label for="pays">Pays : </label><input type="text" value="" name="pays" /></p>
                <p><input type="submit" name="bouton" value="Soumettre"></p>
            </form>
        </div>
        <?php
     }
     public function afficheConfAjoutArtiste(){
        ?>
        <div class="form" style="background-color: darkgray; padding-left: 30px;">
        <h2>Ajouter un autre artiste</h2>
            <form method="post" action="index.php?page=confirmartiste">
				<p><label for="prenom">Prénom : </label><input type="text" value="" name="prenom" /></p>
				<p><label for="nom">Nom : </label><input type="text" value="" name="nom" /></p>
                <p><label for="pays">Pays : </label><input type="text" value="" name="pays" /></p>
                <p><input type="submit" name="bouton" value="Soumettre"></p>
            </form>
        </div>
        <?php
     }
     public function afficheErreurArtiste(){
        ?>
        <div class="form" style="background-color: darkgray; padding-left: 30px;">
        <h2>Veuillez recommencer</h2>
            <form method="post" action="index.php?page=confirmartiste">
				<p><label for="prenom">Prénom : </label><input type="text" value="" name="prenom" /></p>
				<p><label for="nom">Nom : </label><input type="text" value="" name="nom" /></p>
                <p><label for="pays">Pays : </label><input type="text" value="" name="pays" /></p>
                <p><input type="submit" name="bouton" value="Soumettre"></p>
            </form>
        </div>
        <?php
     }
        public function afficheAjoutAlbum(){
        ?>
        <div class="form" style="background-color: darkgray; padding-left: 30px;">
        <h2>Ajouter un artiste</h2>
            <form method="post" action="index.php?page=confirmalbum">
		<p><label for="titre">Titre : </label><input type="text" value="" name="titre" /></p>
		<p><label for="prix">Prix : </label><input type="text" value="" name="prix" /></p>
                <p><label for="image">Image : </label><input type="text" value="" name="image" /></p>
                <p><label for="ventes">Pays : </label><input type="text" value="" name="ventes" /></p>
                <p><label for="ventes">Pays : </label><input type="text" value="" name="ventes" /></p>
                <p><input type="submit" name="bouton" value="Soumettre"></p>
            </form>
        </div>
	<?php 
        }
	 public function afficheListePistes($aListePistes){
	    ?>
	    <div class = 'central'>
		 	<table>
			 	<tr>
				    <td>ID</td>
				    <td>Titre</td> 
				    <td>Duree</td>
				    <td>Prix</td>
				    <td>Evaluation</td>
				    <td>nbVentes</td>
				    <td>IDAlbum</td>
			    </tr>
		 	<?php
				for ($i=0; $i< count($aListePistes); $i++) {
					    
		                
		        echo "<tr>";
				    echo "<td>" . $aListePistes[$i]['ID']. "</td>";
				    echo "<td>" . $aListePistes[$i]['titre'] . "</td> ";
				    echo "<td>" . $aListePistes[$i]['duree'] . "</td>";
				    echo "<td>" . $aListePistes[$i]['prix'] . "</td>";
				    echo "<td>" . $aListePistes[$i]['evaluation'] . "</td>";
				    echo "<td>" . $aListePistes[$i]['nbVentes'] . "</td>";
				    echo "<td>" . $aListePistes[$i]['IDAlbum'] . "</td>";
			    echo"</tr>";
			    
		              
				}
			?>	
			
			</table>
		</div>
		
	   <?php
	 }
	 
	 public function afficheAjoutePiste(){
	 	?>
	 	
		<div class="form" style="background-color: darkgray; padding-left: 30px;">
        <h2>Ajouter une piste</h2>
            <form method="post" action="index.php?page=confirmajoutepiste">
				<p><label for="prenom">Titre : </label><input type="text" value="" name="titre" /></p>
				<p><label for="nom">Duree : </label><input type="text" value="" name="duree" /></p>
                <p><label for="pays">Prix : </label><input type="text" value="" name="prix" /></p>
                <!--<p><label for="pays">Album : </label><input type="text" value="" name="?????" /></p> //ici penser comment connecter album qui existe avec album rentre dans bd  -->
                <p><input type="submit" name="bouton" value="Soumettre"></p>
            </form>
        </div>
	  <?php
	  
	 }
	 
	 public function confirmPiste(){
	 	?>
	 	
		
        <h2>La piste a été ajoutée</h2>
            <button type="button"><a href="index.php?page=ajoutePiste">Ajouter une piste de +</a></button>
	  <?php
	 }
	 
} 

