
        <?php
        require_once("./vuesCD.class.php");
        require_once("./modeleCD.class.php");
        
        if(!isset($_GET['page']))
	{
		$_GET['page'] = 'accueil';
	}
        
        $oControl = new Controlleur;
        $oControl->gerer();
        
        class Controlleur {
            
            public function gerer(){
			// Fait la sélection de la méthode à appeler pour 
			// traiter la requête correctement
                        /*$pre = "";
                        $nom = "";
                        $pays = "";*/
			switch ( strtolower($_GET['page'])) {
				case 'accueil':
					$this->accueil();
					break;
                                case 'accueiladmin':
					$this->AccueilAdmin();
					break;
				/*case 'listecd':
					$this->ListeCD();
					break;*/
                                case 'listepistes':
					$this->ListePistes();
					break;
				case 'ajoutepiste':
					$this->AjoutePiste();
					break;
				case 'confirmajoutepiste':
					$this->ConfirmAjoutePiste();
					break;
                                /*case 'listeartistes':
					$this->ListeArtistes();
					break;*/
				case 'ajouterartiste':
					$this->AjouterArtistes();
					break;
                                case 'erreurartiste':
					$this->ErreurArtistes();
					break;
                                case 'confirmartiste';
					$this->ConfirmAjoutArt($pre, $nom, $pays);
					break;
                                case 'ajouteralbum':
					$this->AjouterAlbum();
					break;
				default:
					$this->Reload();
					break;
			}
            }
		
                private function accueil(){
                    
                    $oVuesCD = new VuesCD;
                    $oVuesCD->afficheEntete();
                    $oVuesCD->afficheMenuClient();
                    $oVuesCD->afficheFooter();
                }
            
                private function accueilAdmin(){
                    
                    $oVuesCD = new VuesCD;
                    $oVuesCD->afficheEntete();
                    $oVuesCD->afficheMenuAdmin();
                    $oVuesCD->afficheFooter();
                }
                private function AjouterArtistes(){
                    
                    $oVuesCD = new VuesCD;
                    $oVuesCD->afficheEntete();
                    $oVuesCD->afficheMenuAdmin();
                    $oVuesCD->afficheAjoutArtiste();
                    $oVuesCD->afficheFooter();
                }
                
                private function ConfirmAjoutArt($pre, $nom, $pays){
                    
                    if(!isset($_POST["prenom"]) || !isset($_POST["nom"])|| !isset($_POST["pays"])){
                        //rediriger vers le formulaire
                        header("Location: index.php?page=erreurartiste");
                    }else{
                        
                    }
                    //j'arrive du formulaire
                    if(trim($_POST["prenom"]) == "" || trim($_POST["nom"]) == "" || trim($_POST["pays"]) == ""){
                        header("Location: index.php?page=erreurartiste");
                    }else{
                        $oModeleCD = new modeleCD;
                        $oModeleCD->ajoutArtiste($_POST["prenom"], $_POST["nom"], $_POST["pays"]);
                        $oVuesCD = new VuesCD();
                        $oVuesCD->afficheEntete();
                        $oVuesCD->afficheMenuAdmin();
                        $oVuesCD->afficheConfAjoutArtiste();
                        $oVuesCD->afficheFooter(); 
                    }
                   
                }
                private function ErreurArtistes(){
                    $oVuesCD = new VuesCD;
                    $oVuesCD->afficheEntete();
                    $oVuesCD->afficheMenuAdmin();
                    $oVuesCD->afficheErreurArtiste();
                    $oVuesCD->afficheFooter();
                    
                }
				
		private function AjoutePiste(){
                    
                    $oVuesCD = new VuesCD;
                    $oVuesCD->afficheEntete();
                    $oVuesCD->afficheMenuAdmin();
                    $oVuesCD->afficheAjoutePiste();
                    $oVuesCD->afficheFooter();
                }
                
                private function ConfirmAjoutePiste(){
				
					
                    if(!isset($_POST["titre"]) || !isset($_POST["duree"])|| !isset($_POST["prix"])){
	                        
	                header("Location: index.php?page=ajoutepiste");
	            }else{
	                        
	            }
	            //j'arrive du formulaire
	            if(trim($_POST["titre"]) == "" || trim($_POST["duree"]) == "" || trim($_POST["prix"]) == ""){
	                //rediriger vers le formulaire pour le moment et apres ajouter error
	                header("Location: index.php?page=ajoutepiste");
	            }else{
	                    $oModeleCD = new modeleCD;
	                    $oModeleCD->ajoutPiste($_POST["titre"], $_POST["duree"], $_POST["prix"]);//ajoute au BD
							echo"the data has been sent";
							   
                            $oVuesCD = new VuesCD;
                            $oVuesCD->afficheEntete();
                            $oVuesCD->afficheMenuAdmin();
                            $oVuesCD->confirmPiste();//ne redirige pas vers cette vue!!!!! verifier conditions en haut de fonction
                            $oVuesCD->afficheFooter();
                    }
                }
	
			    private function ListePistes(){
						
				$oModeleCD = new modeleCD;
				$aListePistes = $oModeleCD->listePistes();//recevoir un tableau avec les pistes;
				//var_dump ($aListePistes);
						
					$oVuesCD = new VuesCD;
                               $oVuesCD->afficheEntete();
                               $oVuesCD->afficheMenuAdmin();
                               $oVuesCD->afficheListePistes($aListePistes);//transmetre ce tableau a la vue pour afficher la liste
                               $oVuesCD->afficheFooter();	
				}
                            private function AjouterAlbum(){
                    
                                $oVuesCD = new VuesCD;
                                $oVuesCD->afficheEntete();
                                $oVuesCD->afficheMenuAdmin();
                                $oVuesCD->afficheAjoutAlbum();
                                $oVuesCD->afficheFooter();
                }
                private function Reload(){
                    echo '<script>window.location="index.php?page=Accueil";</script>';   
				}
        }
            
      
           
       
        
       
