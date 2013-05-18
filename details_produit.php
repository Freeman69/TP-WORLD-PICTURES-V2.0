<?php require_once($_SERVER['DOCUMENT_ROOT'].'TP/'.'initialisation.inc');
      require_once("managers/texteManager.php");
      include('data/bdd.inc');
        $id_produit = $_GET['id'];
      session_start();
      $trouve=0;
      //var_dump($_SESSION);
   if (isset($_SESSION["ID"])) {
      $user_logged = $_SESSION["ID"];
      
      // 1.Lecture de tous les users
      $chemin="data/user.inc";
      $users=read_file($chemin);
      
      $trouve=0;
	    foreach($users[$user_logged]['favoris'] as $favoris){
        if ($favoris==$id_produit){
			    $trouve = true;
          // echo($trouve);
		    }
	    }
      
      if (isset($_GET['add']) && $trouve==0){
            $trouve=true;
            //AJOUT
  
  //ecriture dans le tableau
  //$size_favoris = count($users[$user_logged]['favoris'])+1;
  $size_favoris = intval(substr($_GET['add'], 4, 2));
  //echo($size_favoris);
  $users[$user_logged]['favoris'][$size_favoris] = $_GET['add'];
  
  write_file($chemin,$users);
  //var_dump($users);
      }
   }
?>
<!DOCTYPE html>
<html>
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
     <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-39031065-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
	  <?php include("menu.php"); ?>
        <div id="bloc_details_produit">
         <h3><?php echo($produits[$id_produit]['titre']);?></h3>
        <img src="<?php echo($produits[$id_produit]['image']);?>" alt=""/>
        <ul>
          <?php if (isset($_SESSION["ID"])) {
                   if ($trouve==TRUE) { ?>
            <li><a class="btn btn-success btn-mini" data-original-title="" title="" disabled>Déjà dans vos favoris</a></li>
          <?php } else { ?>
            <li><a href="details_produit.php?id=<?php echo($_GET['id']);?>&add=<?php echo($_GET['id']);?>" class="btn btn-success btn-mini" data-original-title="" title="">Ajouter aux favoris</a></li>
          <?php }} ?>
          
          
          
          
          <!--<li><a href="details_produit.php?id=<?php echo($_GET['id']);?>&add=<?php echo($_GET['id']);?>" class="btn btn-success btn-mini" data-original-title="" title=""?>Ajouter aux favoris</a></li>-->
        </ul>
        <div class="clearfix"></div>
        <h4>Caractéristiques</h4>
        <ul>
          <li><strong>Prix</strong> : <?php echo($produits[$id_produit]['prix']);?>$</li>
		  <li><strong>Détails techniques</strong> : <?php echo($produits[$id_produit]['details']);?></li>
        </ul>
        <h4>Description</h4>
        <p><?php echo($produits[$id_produit]['description']);?></p>
		      <a id="back_button" href="produits.php" class="btn btn-primary btn-medium btn btn-info">Retour Liste</a>
		    </div>
		<?php include("footer.php"); ?>
	  <script src="http://code.jquery.com/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script> 
	  <script src="assets/js/main.js"></script>
	</body>
</html>