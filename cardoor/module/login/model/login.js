function valide_login(){
	//User
	if(document.formlogin.username.value.length === 0){
		document.getElementById('e_user').innerHTML = "Tienes que escribir el usuario";
		document.formlogin.username.focus();
		return 0;
	}
	document.getElementById('e_user').innerHTML = "";

	//Password
	if(document.formlogin.passwd.value.length === 0){
		document.getElementById('e_passwd').innerHTML = "Tienes que escribir la contraseña";
		document.formlogin.passwd.focus();
		return 0;
	}
	document.getElementById('e_passwd').innerHTML = "";

	//document.formlogin.click();//click
	//document.formlogin.action="index.php?page=controller_login&op=list_login";
}

function valide_register(){
	var mailp = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
	//Mail
	if(document.registro.mail.value.length === 0){
		document.getElementById('e_mail').innerHTML = "Tienes que escribir el mail";
		document.registro.mail.focus();
		return 0;
	}
	if(!mailp.test(document.registro.mail.value)){
		document.getElementById('e_mail').innerHTML = "El formato del mail es invalido";
		document.registro.mail.focus();
		return 0;
	}
	document.getElementById('e_mail').innerHTML = "";
	
	//User
	if(document.registro.username.value.length === 0){
		document.getElementById('e_user').innerHTML = "Tienes que escribir el usuario";
		document.registro.username.focus();
		return 0;
	}
	if(document.registro.username.value.length <= 2){
		document.getElementById('e_user').innerHTML = "El usuario tiene que tener más de 2 caracteres";
		document.registro.username.focus();
		return 0;
	}
	document.getElementById('e_user').innerHTML = "";
	
	
	//Password
	if(document.registro.passwd.value.length === 0){
		document.getElementById('e_passwd').innerHTML = "Tienes que escribir la contraseña";
		document.registro.passwd.focus();
		return 0;
	}
	if(document.registro.passwd.value.length < 6){
		document.getElementById('e_passwd').innerHTML = "La contraseña tiene que tener más de 6 caracteres";
		document.registro.passwd.focus();
		return 0;
	}
	document.getElementById('e_passwd').innerHTML = "";
	
	//Password
	// if(document.register.rpassword.value.length === 0){
		// 	document.getElementById('e_rpasswordr').innerHTML = "Tienes que escribir la contraseña";
		// 	document.register.rpassword.focus();
		// 	return 0;
		// }
		// if(document.register.rpassword.value != document.register.password.value){
			// 	document.getElementById('e_rpasswordr').innerHTML = "La contraseña tiene que ser la misma";
			// 	document.register.rpassword.focus();
			// 	return 0;
			// }
			// document.getElementById('e_rpasswordr').innerHTML = "";
			
			//document.formregister.click();
			//document.formregister.action="index.php?page=controller_login&op=list_register";
}
		

			$(document).on('click', '#registro2', function(e){
				// console.log("dentro");
				e.preventDefault();
				if (valide_register() != 0) {
					var data = $("#registro").serialize();
					// console.log(data);
					$.ajax({
						type : 'POST',
						url  : 'module/login/controller/controller_login.php?&op=registrar&' + data,
						data : data,
						beforeSend: function(){	
							// console.log(data);
							$("#error_register").fadeOut();
						},
						success: function(response){
							console.log(data);
							console.log(response);
							if(response==="ok"){
								setTimeout('window.location.href = "index.php?page=controller_login&op=viewlogin"; ',1000);
							}else if (response=="okay") {
								alert("Debes realizar login para completar tu compra");
								setTimeout(' window.location.href = window.location.href; ',1000);
							}else{
								$("#error_register").fadeIn(1000, function(){						
									$("#error_register").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+'</div>');
								});
							}
						}
					});
				}
			});

			
			$(document).on('click', '#login2', function(e){
				// console.log("dentro");
				e.preventDefault();
				if (valide_login() != 0) {
					var data = $("#formlogin").serialize();
					// console.log(data);
					$.ajax({
						type : 'POST',
						url  : 'module/login/controller/controller_login.php?&op=login&' + data,
						data : data,
						beforeSend: function(){	
							console.log(data);
							$("#error_login").fadeOut();
						},
						success: function(response){
							console.log(data);
							console.log(response);
							if(response==="ok"){
								setTimeout('window.location.href = "index.php?page=controller_home&op=home"; ',1000);
							}else if (response=="okay") {
								alert("Debes realizar login para completar tu compra");
								setTimeout(' window.location.href = window.location.href; ',1000);
							}else{
								$("#error_register").fadeIn(1000, function(){						
									$("#error_register").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+'</div>');
								});
							}
						}
					});
				}
			});
