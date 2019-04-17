<!-- <script src="http://monteverde.dataservix.com/api/v1.0.0/lib/php_crud_api_transform.js"></script> -->
<script>
	 // This is called with the results from from FG.getLoginStatus().
	function statusChangeCallback(response) {
		console.log('Iniciando statusChangeCallback');
		// console.log(response);
		if (response.status === 'connected') {
			testAPI();
		} else {
			// document.getElementById('status').innerHTML = "<a href=\"javascript:checkLoginState()\">Ingresar</a>";
			document.getElementById('status').innerHTML = "<a href=\"javascript:LogInModal()\">Ingresar</a>";
			
			if(document.getElementsByClassName('login-form-manual')[0])
				document.getElementsByClassName('login-form-manual')[0].innerHTML = `<div id="FG-login-modal-form-alert-error" class="" role="alert"></div>
					<form action="javascript:FG.postLogIn('FG-login-modal-form', 'POST');" id="FG-login-modal-form" method="POST">
						<div class="card-body">
							<div class="form-group row">
								<label for="username" class="col-md-4 col-form-label text-md-right">Usuario</label>
								<div class="col-md-6">
									<input type="text" id="username" class="form-control" name="username" required autofocus>
								</div>
							</div>

							<div class="form-group row">
								<label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
								<div class="col-md-6">
									<input type="password" id="password" class="form-control" name="password" required>
								</div>
							</div>

							<div class="col-md-8 offset-md-2">
								<button type="submit" class="btn btn-primary">
									Ingresar
								</button>
								<a href="#" class="btn btn-link">
									¿Olvidaste tu contraseña?
								</a>
							</div>
						</div>
					</form>`;
		}
	}
	
	function LogInModal(){
		FG.login(function(r) {
			statusChangeCallback(r);
			console.log("Respuesta LogIn Front");
			console.log(r);
			if (r.authResponse) {
				console.log('Welcome!  Fetching your information.... ');

			} else {
				console.log('El usuario canceló el inicio de sesión o no estaba totalmente autorizado.');
				console.log(r.message);

			}
		});
	}

	function checkLoginState() {
		console.log('Iniciando checkLoginState');
		FG.getLoginStatus(function(response) {
			statusChangeCallback(response);
		});
	}

	/*
	window.fgAsyncInit = function() {
		console.log('Iniciando fgAsyncInit');
		FG.init({
			host: '/',
			path_api: 'api/v1.0.0/api.php'
		});

		FG.getLoginStatus(function(response) {
			console.log('Iniciando getLoginStatus');
			statusChangeCallback(response);
		});
	};
	*/
	// Load the SDK asynchronously
	/*
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		// js.src = "https://monteverde.dataservix.com/api/v1.0.0/sdk/ES_CO/sdk.js?token=" + new Date().valueOf();
		js.src = "https://monteverde.dataservix.com/api/v1.0.0/sdk/ES_CO/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'feliphegomez-jssdk'));
	*/

	// Here we run a very simple test of the Graph API after login is successful.  See statusChangeCallback() for when this call is made.
	function testAPI() {
		console.log('Iniciando testAPI()');
		textHtml = "<a href=\"javascript:FG.LogOut();\">Finalizar</a>";

		document.getElementById('status').innerHTML = textHtml;
		/*
		FG.api('GET', '/me', function(response) {
			console.log('Successful login for: ' + response.name);
			document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.name + '!';
		});
		*/
	}
</script>