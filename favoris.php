<?php require_once($_SERVER['DOCUMENT_ROOT'].'TP/'.'initialisation.inc');
      require_once("managers/texteManager.php");
      include('data/bdd.inc');

session_start();
//var_dump($_SESSION);

$chemin="data/user.inc";
$users=read_file($chemin);

$user_logged = $_SESSION["ID"];


if (isset($_GET['remove'])) {
  //echo($_GET['remove']);
  $current_id = $_GET['remove'];
  foreach($users[$user_logged]['favoris'] as $id=>$id_produit) {
    if ($id_produit == $current_id) {
       unset($users[$user_logged]['favoris'][$id]);
       //echo($id);
    }
  }
   write_file($chemin,$users);
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
		<title>World-Pictures- Home</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico" />	
		<!--<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">-->
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
    <div id="bloc_favoris">
      <h3>Mes favoris</h3>
      <?php foreach($users[$user_logged]['favoris'] as $id_produit) {?>
        <ul>
          <li><a href="favoris.php?remove=<?php echo($id_produit);?>" class="btn btn-danger btn-mini remove_favoris" data-original-title="" title="">Retirer des favoris</a></li>
        </ul>
        <a href="details_produit.php?id=<?php echo($id_produit);?>">
          <div class="produit" id="<?php echo($id_produit);?>">
            <img class="image" src="<?php echo($produits[$id_produit]['image']);?>" alt=""/>
            <ul>
              <li class="produit_titre"><?php echo($produits[$id_produit]['titre']);?></li>
              <li><?php echo($produits[$id_produit]['description']);?></li>
            </ul>
            <div class="clearfix"></div>
          </div>
        </a>
      <?php }?>
    </div>
		<?php include("footer.php"); ?>
	  <script src="http://code.jquery.com/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script> 
	  <script src="assets/js/main.js"></script> 
	</body>
</html>