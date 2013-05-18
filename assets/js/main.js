function error(item, action) {
  if (action==true) {
        $('#'+item).removeClass('error');
        if ($('#'+item).prev().prop('tagName')=='LABEL') {
            $('#'+item).prev().removeClass('error');
        } else {
            $('#'+item).parent().prev().find('label').removeClass('error');
        }
    } else {
        $('#'+item).addClass('error');
        $('#'+item).parent().prev().find('label').addClass('error');
    }
}

function disparaitre() {
  $('.photoshop').hide();
  $('.photo').hide();
  $('.appareil_photo').hide();
  $('.autre_version').hide();
  $('.autre_sujet').hide();
  $('.autre_os').hide();
  $('.autre_appareil').hide();
}

function photo() {
  disparaitre();
  $('#checkbox01').attr('checked', false);
  $('.photo').show();
  $('.input_file').hide();
  $('#checkbox01').click(function() {
    if ($('#checkbox01').prop('checked')) {
      $('.input_file').show();
    } else {
      $('.input_file').hide();
    }
  })
}

function selection(item) {
  disparaitre();
  if (item=='04') {
    $('.autre_sujet').show();
  } else {
    $('.autre_sujet').hide();
  }
}

function photoshop() {
  disparaitre();
  $('#select02').val('00');
  $('#select03').val('00');
  $('.photoshop').show();
}

function appareil_photo() {
  disparaitre();
  $('#canon').prop('checked', true);
  $('.appareil_photo').show();
}

function check_if_present(data) {
    if (data!='') {
        return true;
    } else {
        return false;
    }
}

function check_email(email) {
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,4})$/;
    if (!filter.test(email)) {
        return false;
    } else {
        return true;
    }
}

function check_url(url) {
    var regex = new RegExp("^(http[s]?:\\/\\/(www\\.)?|www\\.){1}([0-9A-Za-z-\\.@:%_\+~#=]+)+((\\.[a-zA-Z]{2,3})+)(/(.)*)?(\\?(.)*)?");
    if ($('#url').val()=='') {
        return true;
    } else if (!regex.test(url)){
        return false;
    } else {
      return true;
    }
}

function valid_sujet_item_01() {
  if ($('#checkbox01').prop('checked')) {
    if ($('#inputfile01').val()==('')) {
      return false;
    } else {
      return true;
    }
  } else {
    return true;
  }
}

function valid_sujet_item_02() {
  var valid_confirm=Array();
  
  if ($('#select02').val()=="00") {
    error('select02',false);
    valid_confirm[0]=false;
  } else {
    error('select02', true);
    valid_confirm[0]=true;
    
  }
  
  if ($('#select02').val()=='08') {
    if (check_if_present($('#version_autre').val())==false) {
      error('version_autre', false);
      valid_confirm[0]=false; 
    } else {
      error('version_autre', true);
      valid_confirm[0]=true;
    }
  }
      
  if ($('#select03').val()=="00") {
    error('select03', false);
    valid_confirm[1]=false;
  } else {
    error('select03', true);
    valid_confirm[1]=true;
  }
  
  if ($('#select03').val()=='06') {
    if (check_if_present($('#os_autre').val())==false) {
      error('os_autre', false);
      valid_confirm[1]=false;  
    } else {
      error('os_autre',true);
      valid_confirm[1]=true;  
    }
  }
  
  if (valid_confirm[0]==true && valid_confirm[1]==true) {
    return true;
  } else {
    return false;
  }
}

function valid_sujet_item(item) {
  if (item=="01") {
    result = valid_sujet_item_01();
  } else if (item=="02") {
    result = valid_sujet_item_02();
  } else if (item=='03') {
    if ($("#radio_autre").prop('checked')) {
      result=check_if_present($('#appareil_autre').val());
    } else {
      result=true;
    }
  } else if (item=='04') {
    result=check_if_present($('#sujet_autre').val());
  }
  if (result==true) {
    if (item=='01') {
      $('#inputfile01').removeClass('error');
    } else if (item=='04') {
      error('sujet_autre', true);
    } else if (item=='03') {
      error('appareil_autre', true);
    }
    return true;
  } else {
    if (item=='01') {
      $('#inputfile01').addClass('error');
    } else if (item=='04') {
      error('sujet_autre', false);
    } else if (item=='03') {
      error('appareil_autre', false);
    }
    return false;
  }
}

function check_option(sujet) {
  if (sujet=="00") {
    return false;
  } else {
      if(valid_sujet_item(sujet)==true) {
        return true;
      } else {
        return 'faux';
      }
  }
}

function check_item(item, type_item) {
  if (type_item=="text") {
    result = check_if_present($('#'+item).val());
  } else if (type_item=="email") {
    result = check_email($('#'+item).val());
  } else if (type_item=="link") {
    result = check_url($('#'+item).val());
  } else if (type_item=="sujet") {
    result = check_option($('#'+item).val());    
  }
  
  if (result==true) {
    error(item, true);
    return true;
  } else if (result=='faux') {
    return false;  
  } else if (result==false) {
    error(item, false);
    return false;
  }
}

function valide_formulaire() {
  var confirm_valid = Array('');
  confirm_valid[0] = check_item("name", "text");
  confirm_valid[1] = check_item("prenom", "text");
  confirm_valid[2] = check_item("email", "email");
  confirm_valid[3] = check_item("url", "link");
  confirm_valid[4] = check_item("select01", "sujet");
  confirm_valid[5] = check_item("commentaires", "text");
  
  if (confirm_valid[0]==true && confirm_valid[1]==true && confirm_valid[2]==true &&
     confirm_valid[3]==true && confirm_valid[4]==true && confirm_valid[5]==true) {
       return true;
  } else {
       return false;
  }
}

$(document).ready(function() {
  $('#select01').val('00');
  $('#select01').change(function() {
    var item = $(this).val();
    switch(item) {
      case '00': selection(item);
                 break;
      case '01': photo();
                 break;
      case '02': photoshop();
                 break;
      case '03': appareil_photo();
                 break;
      case '04': selection(item);
                 break;
    }
  });
  
  $('#select02').change(function() {
    if ($('#select02').val()=='08') {
      $('.autre_version').show();
    } else {
      $('.autre_version').hide();
    }
  });
  
  $('#select03').change(function() {
    if ($('#select03').val()=='06') {
      $('.autre_os').show();
    } else {
      $('.autre_os').hide();
    }
  });
  
  $('#radio_autre').click(function() {
    $('.autre_appareil').show();
  });
  
  $('#nikon').click(function() {
    $('.autre_appareil').hide();
  });
  
  $('#canon').click(function() {
    $('.autre_appareil').hide();
  });
  
  $('#btn_submit').click(function() {
    if (valide_formulaire()==true) {
      return true;
    } else {
      return false;
    }
  });
  
  if ($("body").data("title") === "confirmation.php") {
    var url = "index.php";

    //5000 is the number of milliseconds (or 5 seconds) that you want to wait before redirection.
    var delay = 5000;
    setTimeout(function() {
      window.location.replace(url);
    }, delay);
    
    //alert('confirmation.html!!!!!');
  }
  
  if ($("body").data("title") === "confirmation_inscription.php") {
    var url = "index.php";

    //5000 is the number of milliseconds (or 5 seconds) that you want to wait before redirection.
    var delay = 10000;
    setTimeout(function() {
      window.location.replace(url);
    }, delay);
    
    //alert('confirmation.html!!!!!');
  }
});


 /*Debut tooltip et hover reseau sociaux +popover page index.php + fancybox page galerie.php  */


 $(document).ready(function () {
     $(".social").tooltip({'placement':'left'});
	 $("#more").popover({'placement':'right', 'trigger' : 'hover', "title":"Adresse ,Tarifs & Horaires", "content":"1001 Place Jean-Paul-Riopelle, Montréal, QC H2Z 1H5 / 12$ l'entrée  De 9h a 18h", "delay":"delay: { show: 500, hide: 100 }" });
	 $("#facebook").hover(function() {
		$(this).attr("src","assets/images/facebook-hover.png");
			}, function() {
		$(this).attr("src","assets/images/facebook.png");
	});
	 $("#twitter").hover(function() {
		$(this).attr("src","assets/images/twitter-bird-hover.png");
			}, function() {
		$(this).attr("src","assets/images/twitter-bird.png");
	});
	 $("#instagram").hover(function() {
		$(this).attr("src","assets/images/instagram-hover.png");
			}, function() {
		$(this).attr("src","assets/images/instagram.png");
	});
	 $("#googleplus").hover(function() {
		$(this).attr("src","assets/images/googleplus-hover.png");
			}, function() {
		$(this).attr("src","assets/images/googleplus.png");
	});
	 $("#linkedin").hover(function() {
		$(this).attr("src","assets/images/linkedin-hover.png");
			}, function() {
		$(this).attr("src","assets/images/linkedin.png");
	});
	 $("#followtitle").mouseover(function() {
	   $("#followus").fadeIn(3000)
	 
	 });
	 if ($("body").data("title") === "galerie.html") {
	  /* Apply fancybox to multiple items */
	
	  $("a.grouped_elements").fancybox({
		  'transitionIn'	:	'elastic',
		  'transitionOut'	:	'elastic',
		  'speedIn'		    :	600, 
		  'speedOut'		:	200, 
		  'overlayShow'	    :	false
	  });
	}
	 
	 
 });

/*-----produits.php----*/

$('.produit').mouseover(function() {
    $('#'+this.id).addClass('colorhover');
  });
 $('.produit').mouseout(function() {
     $('#'+this.id).removeClass('colorhover');
  });
  
  
/* login modal */
$(document).ready(function() {
	$('a.login-window').click(function() {
		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);
		
		//Set the center alignment padding + border
    var popMargLeft = ($(loginBox).width() + 24)/2;
    var popMargTop = ($(loginBox).height() + 24)/2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
	
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').on('click', function() { 
	  $('#mask , .login-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});
});