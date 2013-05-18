<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<meta name="description" content="Blog Photographe amateur" />
		<meta name="author" content="Brice Riou - Nicolas McClure" />
		<title>World-Pictures- Galerie</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico" />	
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css" />
		<script src="http://code.jquery.com/jquery.js"></script>
        <script src="assets/js/jquery.fancybox.js"></script>  
        <script src="assets/js/jquery.mousewheel-3.0.6.pack.js"></script> 		
    </head>
    <body data-title='galerie.html'>
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
		<div id="galerie">
		    <div id="galerie-intro" class="hero-unit">
			     <h3>Galerie Photos</h3>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nulla id elit aliquam venenatis id non dui. Praesent rutrum augue non dui.</p>
		    </div>
		    <div id="galerie_photos" class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
				<ul class="nav nav-tabs">
				  <li class="active"><a href="#tab1" data-toggle="tab">Nature</a></li>
				  <li><a href="#tab2" data-toggle="tab">Faune</a></li>
				  <li><a href="#tab3" data-toggle="tab">City View</a></li>
				  <li><a href="#tab4" data-toggle="tab">Divers</a></li>
				</ul>
				<div class="tab-content">
				  <div class="tab-pane active" id="tab1">
				    <div class="page-header">
					  <h4><b>Nature</b> <small>A l'état pure</small></h4>
				    </div>
					<div>
					  <ul class="mediagrid">
						 <li class="span4">
						    <a class="grouped_elements" rel="group1" href="assets/images/portfolio/paysage.jpg"><img class="thumbnail" src="assets/images/portfolio/paysage_small.jpg" alt=""/></a> 
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group1" href="assets/images/portfolio/paysage1.jpg"><img class="thumbnail" src="assets/images/portfolio/paysage1_small.jpg" alt=""/></a>  
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group1" href="assets/images/portfolio/paysage2.jpg"><img class="thumbnail" src="assets/images/portfolio/paysage2_small.jpg" alt=""/></a>  
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group1" href="assets/images/portfolio/paysage3.jpg"><img class="thumbnail" src="assets/images/portfolio/paysage3_small.jpg" alt=""/></a>  
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group1" href="assets/images/portfolio/paysage5.jpg"><img class="thumbnail" src="assets/images/portfolio/paysage5_small.jpg" alt=""/></a>  
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group1" href="assets/images/portfolio/paysage6.jpg"><img class="thumbnail" src="assets/images/portfolio/paysage6_small.jpg" alt=""/></a>  
						 </li>
					  </ul>
                    </div>
				  </div>
				  <div class="tab-pane" id="tab2">
				    <div class="page-header">
					  <h4><b>Faune</b> <small>Sur le vif</small></h4>
				    </div>
					<div>
					  <ul class="mediagrid">
						 <li class="span4">
						    <a class="grouped_elements" rel="group2" href="assets/images/portfolio/faune.jpg"><img class="thumbnail" src="assets/images/portfolio/faune_small.jpg" alt=""/></a> 
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group2" href="assets/images/portfolio/faune1.jpg"><img class="thumbnail" src="assets/images/portfolio/faune1_small.jpg" alt=""/></a>   
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group2" href="assets/images/portfolio/faune2.jpg"><img class="thumbnail" src="assets/images/portfolio/faune2_small.jpg" alt=""/></a> 
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group2" href="assets/images/portfolio/faune3.jpg"><img class="thumbnail" src="assets/images/portfolio/faune3_small.jpg" alt=""/></a> 
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group2" href="assets/images/portfolio/faune4.jpg"><img class="thumbnail" src="assets/images/portfolio/faune4_small.jpg" alt=""/></a> 
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group2" href="assets/images/portfolio/faune6.jpg"><img class="thumbnail" src="assets/images/portfolio/faune6_small.jpg" alt=""/></a>   
						 </li>
					  </ul>
                     </div>
				  </div>			  			  		  
				  <div class="tab-pane" id="tab3">
				    <div class="page-header">
					  <h4><b>City View</b> <small>Au coeur de la ville</small></h4>
				    </div>
					<div>
					  <ul class="mediagrid">
						 <li class="span4">
						    <a class="grouped_elements" rel="group3" href="assets/images/portfolio/ville.jpg"><img class="thumbnail" src="assets/images/portfolio/ville_small.jpg" alt=""/></a> 
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group3" href="assets/images/portfolio/ville1.jpg"><img class="thumbnail" src="assets/images/portfolio/ville1_small.jpg" alt=""/></a>    
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group3" href="assets/images/portfolio/ville2.jpg"><img class="thumbnail" src="assets/images/portfolio/ville2_small.jpg" alt=""/></a>  
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group3" href="assets/images/portfolio/ville3.jpg"><img class="thumbnail" src="assets/images/portfolio/ville3_small.jpg" alt=""/></a>  
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group3" href="assets/images/portfolio/ville4.jpg"><img class="thumbnail" src="assets/images/portfolio/ville4_small.jpg" alt=""/></a> 
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group3" href="assets/images/portfolio/ville5.jpg"><img class="thumbnail" src="assets/images/portfolio/ville5_small.jpg" alt=""/></a>    
						 </li>
					  </ul>  
                    </div>
				  </div>
				  <div class="tab-pane" id="tab4">
				    <div class="page-header">
					  <h4><b>Divers - Voiture</b> <small>Puissance & beauté</small></h4>
				    </div>
					<div>
					  <ul class="mediagrid">
						 <li class="span4">
						    <a class="grouped_elements" rel="group4" href="assets/images/portfolio/voiture.jpg"><img class="thumbnail" src="assets/images/portfolio/voiture_small.jpg" alt=""/></a> 
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group4" href="assets/images/portfolio/voiture1.jpg"><img class="thumbnail" src="assets/images/portfolio/voiture1_small.jpg" alt=""/></a>    
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group4" href="assets/images/portfolio/voiture2.jpg"><img class="thumbnail" src="assets/images/portfolio/voiture2_small.jpg" alt=""/></a>
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group4" href="assets/images/portfolio/voiture3.jpg"><img class="thumbnail" src="assets/images/portfolio/voiture3_small.jpg" alt=""/></a>  
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group4" href="assets/images/portfolio/voiture4.jpg"><img class="thumbnail" src="assets/images/portfolio/voiture4_small.jpg" alt=""/></a>
						 </li>
						 <li class="span4">
						    <a class="grouped_elements" rel="group4" href="assets/images/portfolio/voiture5.jpg"><img class="thumbnail" src="assets/images/portfolio/voiture5_small.jpg" alt=""/></a>    
						 </li>
					  </ul>        
                    </div>
				  </div>
			    </div>
		    </div>
		</div>
		<?php include("footer.php"); ?>
      <script src="assets/js/bootstrap.min.js"></script> 
	  <script src="assets/js/main.js"></script> 
	</body>
</html>