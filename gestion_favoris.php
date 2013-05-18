<?php require_once($_SERVER['DOCUMENT_ROOT'].'TP/'.'initialisation.inc');
      require_once("managers/texteManager.php");
      include('data/bdd.inc');
      
      // 1.Lecture de tous les users
      $chemin="data/user.inc";
      $users=read_file($chemin);
      
      foreach($users as $id=>$user){
        
        $i=0;
        foreach($users[$id]['favoris'] as $num=>$favoris) {
          $array_favoris[$id][$i] = $favoris;
          $i++;
        }
      }
   // var_dump($array_favoris);

  // var_dump($users);







?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<meta name="description" content="Blog Photographe amateur" />
		<meta name="author" content="Brice Riou - Nicolas McClure" />
		<title>World-Pictures - Gestion Favoris</title>
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
    <div id="bloc_gestion_favoris">
      <h3>Gestion des données</h3>
      <h4>Favoris</h4>
      <table class="table table-bordered">
<thead>
<tr>
<th>Identifiant</th>
<th>prodID</th>
<th>Nom du produit</th>
</tr>
</thead>
<tbody>

<?php foreach($array_favoris as $id=>$user) {
if (isset($array_favoris[$id])){ ?>
<tr>
<td rowspan="<?php echo(count($array_favoris[$id])); ?>"><?php echo($id);?></td>
<td><?php echo($array_favoris[$id][0]);?></td>
<td><?php echo($produits[$array_favoris[$id][0]]['titre']);?></td>
</tr>
<?php foreach($array_favoris[$id] as $num=>$favoris) {
  if (isset($array_favoris[$id][$num+1])){
  ?>
<tr>
<td><?php echo($array_favoris[$id][$num+1]);?></td>
<td><?php echo($produits[$array_favoris[$id][$num+1]]['titre']);?></td>
</tr>

<?php }}}} ?>

</tbody>
</table>
<h4>Utilisateurs enregistrés</h4>
<table class="table table-bordered">
<thead>
<tr>
<th>Identifiant</th>
<th>Nom</th>
<th>Prénom</th>
<th>Courriel</th>
</tr>
</thead>
<tbody>

<?php foreach($users as $id=>$user){?>
<tr>
<td><?php echo($id);?></td>
<td><?php echo($users[$id]['nom']);?></td>
<td><?php echo($users[$id]['prenom']);?></td>
<td><?php echo($users[$id]['email']);?></td>
</tr>
<?php } ?>
</tbody>
</table>
    </div>
		<?php include("footer.php"); ?>
	  <script src="http://code.jquery.com/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script> 
	  <script src="assets/js/main.js"></script> 
	</body>
</html>