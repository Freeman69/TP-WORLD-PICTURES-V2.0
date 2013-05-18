<?php require_once($_SERVER['DOCUMENT_ROOT'].'TP/'.'initialisation.inc');
      require_once("managers/texteManager.php");
       //AJOUT
  // 1.Lecture de tous les users
  $chemin="data/user.inc";

  $users=read_file($chemin);
  var_dump($users);
  
  
  print '<script type="text/javascript">';
  print 'alert("Identifiant ou mot de passe invalide !")';
  print '</script>';  
  
  
  
  
  
  
  $ou = true;
  $ou2 = true;
  
  if($ou!=true) {
    echo("je suis dedans");
  } else if ($ou2!=true) {
    echo("je suis dedans2!!!!!!!!!!!!!!!!!!!!!!!!!!");
  } else {
    echo("Je suis pas la !!!!!!!!");
  }
  
  
  
  
  $affiche = false;
  /*
  $favoris=array(
							'prod01',
              'prod03',
              'prod04'					
												);


//ecriture dans le tableau
  $users['jv6dmc']['favoris']=$favoris;
  write_file($chemin,$users);
  
  echo("modifications réussis!");*/
?>



<?php if ($affiche==true) {?>
  <ul>
    <li><a href="details_produit.php?id=<?php echo($_GET['id']);?>&add=<?php echo($_GET['id']);?>" class="btn btn-success btn-mini" data-original-title="" title="">Ajouter aux favoris</a></li>
  </ul>
<?php } else {?>
  <h2>Ca marche pas :(</h2>
<?php } ?>

<head>
        <meta charset="utf-8" />
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<meta name="description" content="Blog Photographe amateur" />
		<meta name="author" content="Brice Riou - Nicolas McClure" />
		<title>World-Pictures - Home</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico" />	
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css" />  
    </head>
    <body>
<?php include("menu.php");
session_start();
echo($_SESSION["ID"]);


?>
<script src="http://code.jquery.com/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script> 
	  <script src="assets/js/main.js"></script>
</body>