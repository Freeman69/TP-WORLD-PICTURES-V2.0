<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<meta name="description" content="Blog Photographe amateur" />
		<meta name="author" content="Brice Riou - Nicolas McClure" />
		<title>World-Pictures- Contact</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico" />	
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
		<script src="assets/js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="assets/js/main.js" type="text/javascript"></script>
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
        <div id="bloc_contact"> 
          <h3>Contact </h3>
          <form id="formulaire" action="confirmation.php" method="POST">
          <div id="form">
            <ul>
              <li class="lbl_contact"><label>Nom</label></li>
              <li><input type="text" name="name" id="name" placeholder="nom..."/></li>
              <li class="lbl_contact"><label>Prénom</label></li>
              <li><input type="text" name="prenom" id="prenom" placeholder="prénom..."/></li>
              <li class="lbl_contact"><label>Courriel</label></li>
              <li><input type="text" name="email" id="email" placeholder="abc@example.com"/></li>
              <li class="lbl_contact"><label>URL (facultatif)</label></li>
              <li><input type="text" name="url" id="url" placeholder="www.example.com"/></li>
              <li class="lbl_contact"><label>Sujet du message</label></li>
              <li>
                <select name="sujet_message" id="select01" >
                  <option value="00">Choisissez dans la liste</option>
                  <option value="01">Photographie</option>
                  <option value="02">Photoshop</option>
                  <option value="03">Appareil photo</option>
                  <option value="04">Autre</option>
                </select>
              </li>
              <li class="lbl_contact autre_sujet"><label>Autre</label></li>
              <li class='autre_sujet'><input type="text" name="sujet_autre" id="sujet_autre" placeholder="Inscrire le sujet"/></li>
              <li class="lbl_contact photo"></li>
              <li class="photo"><input type="checkbox" name="macheckbox" id="checkbox01"/><label id='lbl_add'>Ajouter une photo</label></li>
              <li class="lbl_contact photo input_file"></li>
              <li class="photo input_file"><input type="file" name="mainputfile" id="inputfile01"/></li>
              <li class="lbl_contact photoshop"><label>Version de photoshop</label></li>
              <li class="photoshop">
                <select name="ps_ver" id="select02" >
                  <option value="00">Choisissez dans la liste</option>
                  <option value="01">Adobe photoshop cs3</option>
                  <option value="02">Adobe photoshop cs4</option>
                  <option value="03">Adobe photoshop cs5</option>
                  <option value="04">Adobe photoshop cs6</option>
                  <option value="05">Adobe photoshop element 9</option>
                  <option value="06">Adobe photoshop element 10</option>
                  <option value="07">Adobe photoshop element 11</option>
                  <option value="08">Autre</option>
                </select>
              </li>
              <li class="lbl_contact autre_version"><label>Autre</label></li>
              <li class='autre_version'><input type="text" name="version_autre" id="version_autre" placeholder="Inscrire la version"/></li>
              <li class="lbl_contact photoshop"><label>Version du OS</label></li>
              <li class="photoshop">
                <select name="os" id="select03" >
                  <option value="00">Choisissez dans la liste</option>
                  <option value="01">Windows XP</option>
                  <option value="02">Windows Vista</option>
                  <option value="03">Windows 7</option>
                  <option value="04">OSX</option>
                  <option value="05">Linux</option>
                  <option value="06">Autre</option>
                </select>
              </li>
              <li class="lbl_contact autre_os"><label>Autre</label></li>
              <li class='autre_os'><input type="text" name="os_autre" id="os_autre" placeholder="Inscrire la version du OS"/></li>
              <li class="lbl_contact appareil_photo"></li>
              <li class="form_position appareil_photo"><input id="canon" name="appareil" checked='checked' value="Canon" type="radio"/></li>
              <li class="form_position appareil_photo"><label>Canon</label></li>
              <li class="form_position appareil_photo"><input id="nikon" name="appareil" value="Nikon" type="radio"/></li>
              <li class="form_position appareil_photo"><label>Nikon</label></li>
              <li class="form_position appareil_photo"><input id="radio_autre" name="appareil" value="autre" type="radio"/></li>
              <li class="form_position appareil_photo"><label>Autre</label></li>
              <li class="clearfix appareil_photo"></li>
              <li class="lbl_contact autre_appareil"><label>Autre</label></li>
              <li class='autre_appareil'><input type="text" name="appareil_autre" id="appareil_autre" placeholder="Inscrire le model"/></li>
              <li class="lbl_contact"><label>Commentaires</label></li>
              <li><textarea rows="3" cols="40" name="champ_text" id="commentaires"></textarea></li>
              <li class="lbl_contact"></li>
              <li id="submit"><button class="btn btn-primary btn-medium  btn btn-info" id="btn_submit">Envoyer</button></li>
            </ul>
          </div>
          </form>
          <div id="map">
            <address>
		      <strong>World Pictures, Inc.</strong><br>
		      795 Folsom Ave, Suite 600<br>
			  Montréal, QC H3V 5F6<br>
			  <abbr title="Phone">Tel:</abbr> (514) 456-7890<br>
			  <a href="mailto:#">worldpictures@gmail.com</a>
		    </address> 
            <div id="frame_map"><iframe width="200" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=Montr%C3%A9al,+QC&amp;aq=0&amp;oq=montreal&amp;sll=45.605943,-73.709509&amp;sspn=0.301673,0.727158&amp;ie=UTF8&amp;hq=&amp;hnear=Montr%C3%A9al,+Qu%C3%A9bec&amp;t=m&amp;ll=45.508272,-73.553467&amp;spn=0.288723,0.411987&amp;z=10&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.ca/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=Montr%C3%A9al,+QC&amp;aq=0&amp;oq=montreal&amp;sll=45.605943,-73.709509&amp;sspn=0.301673,0.727158&amp;ie=UTF8&amp;hq=&amp;hnear=Montr%C3%A9al,+Qu%C3%A9bec&amp;t=m&amp;ll=45.508272,-73.553467&amp;spn=0.288723,0.411987&amp;z=10&amp;iwloc=A" style="color:#0000FF;text-align:left">Agrandir le plan</a></small></div>
          <div class="clearfix"></div>
          </div>
	    </div>
		<?php include("footer.php"); ?>
	  <script src="http://code.jquery.com/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script> 
	</body>
</html>