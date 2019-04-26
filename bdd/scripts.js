	   		function showoverlay(url,taille,color,param){
				// déclenche l'affichage d'un popup
				
				// on commence par effacer le contenu de la fenetre
				$('#overlaytext').html('');
				// gestion de la taille de fenetre
				if(taille!=''){
					
					$('#overlayblock').removeClass('sm md lg').addClass(taille);
				}

				// gestion de la couleur de fenetre
				if(color=="info" || color=="primary" ||color=="warning" ||color=="success" ||color=="danger"){
					$('#overlayblock').removeClass('alert-info');
					$('#overlayblock').addClass('alert-'+color);
				} 
				$('#overlaytext').html(url);
				slideoverlay();
				// masque la scrollbar du body
				$('html').css('overflow', 'hidden');
			}
			function slideoverlay(){
				// affiche et anime les popups
				
					
					$('#overlay').show(50,function(){
						$('#overlayblock').show();
						$( "#overlayblock" ).animate({
		    				marginTop: "90px"
		  				}, 300, function() {
		  				  // Animation complete.
		  				});
					});
			}
			function delayedhideoverlay() {
				$( "#overlayblock" ).animate({
		    				marginTop: "-100%"
		  				}, 100, function() {
		  				 $('#overlay').fadeOut(200);
		  				});
				// retire les classes d'alerte et remet celle par défaut
					$('#overlayblock').removeClass('alert-danger alert-warning alert-primary alert-info alert-success').addClass('alert-info');
				$('#overlay').hide();
				$('#overlaytext').html('');
				$('html').css('overflow', 'auto');
			}
	   		function autohideoverlay(duree) {
				setTimeout('delayedhideoverlay()',duree);

			}
	   		function insertfield(champ) {
	   			$('#sql').val($('#sql').val()+' '+champ+' ');
	   			$('#sql').focus();
	   		}

				function runsql(sql) {
					$('#sql').val(sql);
					
					document.form.submit();
				}
				function displaysql(message) {
					$('#aide').html(message);
					var message2=message.replace(/(.*)<span class='hlp'>/g,'');
					message2=message2.replace(/(<br\/>)/g,"\r\n");
					message2=message2.replace(/(<\/span>*.)/g,'');
				
					$('#sql').val(message2);
					$('#exemples').fadeIn('fast');
					$('html').css('overflow', 'hidden');
				}
		
				function ajax() {
					
					var chaineSQL=$( "#sql" ).serialize();

					var longueur=chaineSQL.length;
					var dernierCar=chaineSQL.substring(longueur-1,longueur);
					if(dernierCar !='xyz ' && longueur>1) {
							var URL="ajax_mysql.php";
							if($('#newlines').prop('checked')){
								var nl=1;
							} else {
								var nl=0;
							
							}


							$.post(URL, chaineSQL+'&nl='+nl, function( data ) {
  							$('#sqlcolors').html( data );
							});

							
									
					}
					
					$('#rezquery').load('eval_query.php?'+chaineSQL, function( data ){
							if(data.match(/valide/)){
								$('#RESULTpreview').load('sql_results.php?sql='+chaineSQL);
							} else {
								$('#RESULTpreview').html('Aucun résultat');
							}
					})
				}


				 function masque(id) {
				 	$('#'+id).fadeOut('fast');
				 	$('html').css('overflow', 'auto');
				 }

				 function shortcut(cle) { 
				 	// soumet le formulaire si on appuie sur F9
				 	if (cle.keyCode==120) {
				 		document.forms[0].submit();
				 	};
				 }
				 
				  function showfile() {
				 	$('#txtfile').fadeIn('fast');
				 	$('html').css('overflow', 'hidden');
				 }
				 function active_sauv_btn() {
				 	if($('#refnom').val()!='' && $('#sql').val()!='') {
				 		$('#refsauv').prop('disabled',false);
				 	} else {
				 		$('#refsauv').prop('disabled',true);
				 	}
				 }
				 
				 function delfile(){
				 	$('#delqueries').val('1');
				 	document.forms[0].submit();
				 }
				
				 function backedReqEdit(backedReq){
				 	var backedReq=backedReq.replace(/<br \/>/g,'\r\n');
				 	$('#sql').val(backedReq);
				 	masque('txtfile');
				 		$('#sql').focus();
				 		ajax();
				 }
				 function writeExample(txtReq) {
				 	
				 	selectedtable=$('#listtables').val();
				 	var requete=txtReq.replace(/%table%/g,selectedtable);
				 $('#sql').val(requete);
				 	
				 }

				 $(document).ready(function(){
				 $('#refresh').click(function(){
				 		document.location.reload();
				 });

				 	ajax();
				 
				 	$(document.body).keydown(function(){
				 		shortcut(event);
				 	});

				 	$("#RESULTpreview").on('click', '#fontminus', function(){
				 		var size = parseInt($('#tabresult TD.tabresult').css('font-size'));
				 		if(size > 10) {

					 		size--;
					 		$('#tabresult TD.tabresult').css('font-size', size);
					 		
				 		}
				 	});

				 	$("#RESULTpreview").on('click', '#fontplus', function(){
				 		var size = parseInt($('#tabresult TD.tabresult').css('font-size'));
				 		if(size < 25) {

					 		size++;
							$('#tabresult TD.tabresult').css('font-size', size);
					 		
				 		}

				 	});
				 });