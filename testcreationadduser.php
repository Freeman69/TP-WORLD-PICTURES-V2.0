<?php

$users = array(
				'jv6dmc' =>array(
								'nom' => "Mc Clure",
								'prenom' => "Nicolas",
								'email' => 'nicolas.mcclure@hotmail.ca',
								'password'=> '1234',
								'favoris' => array(
												'prod01',
                        'prod03',
                        'prod04'
												)
						    ),
          
					); 
     
     
     //AJOUT
// 1.Lecture de tous les etudiants
$chemin="../data/user.inc";

$fichier= fopen($chemin , "r");
$contenu_du_fichier=fread($fichier,filesize($chemin));
$etudiants= unserialize($contenu_du_fichier);  
fclose($fichier);

//2. ajout ds mon array d etudiants      
  $etudiants[$nas]=$etudiant;    
  
//3 serialiser le tableau
 $contenu_du_tableau= serialize($etudiants);

  $fichier= fopen($chemin , "w");
  fwrite($fichier,$contenu_du_tableau);
  fclose($fichier);      




?>