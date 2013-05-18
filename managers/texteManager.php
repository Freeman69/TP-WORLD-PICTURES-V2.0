<?php

function open_file($chemin){
	$fichier = fopen( $chemin, "r");
	$contenu_du_fichier =  fread($fichier, filesize($chemin));
    $users= unserialize($contenu_du_fichier);  
	fclose($fichier);
	return($users);
}


function read_file($chemin){
  $fichier= fopen($chemin , "r");
  $contenu_du_fichier=fread($fichier,filesize($chemin));
  $users= unserialize($contenu_du_fichier);  
  fclose($fichier);
  
  return $users;
   
}


function write_file($chemin,$users){
    $contenu_du_tableau= serialize($users);
    save_file($chemin, $contenu_du_tableau);
}



function save_file($chemin, $contenu_du_fichier) {
  $fichier = fopen($chemin, "w");
  fwrite($fichier, $contenu_du_fichier);
  fclose($fichier);
}

function find_User_ByIdPw($username, $pw){
	
	$trouve = 0;
	foreach($GLOBALS['users'] as $id => $user){
		if (($user['password']==$pw)&&($id==$username)){
			$trouve = $id;
     // echo($trouve);
		}
	}
	
	return $trouve;
	
}

?>