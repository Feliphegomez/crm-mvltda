/**
* Copyright (c) 2017-presente, FelipheGomez. Todos los derechos reservados.
*
* Por la presente, se le otorga una licencia mundial, libre de regalías y no exclusiva para usar,
* copiar, modificar y distribuir este software en código fuente o en forma binaria para su uso
* en relación con los servicios web y API proporcionados por FelipheGomez.
*
* Al igual que con cualquier software que se integra con las plataformas de FelipheGomez, su uso de
* Este software está sujeto a las políticas de la plataformas de FelipheGomez.
* Este aviso de copyright será Incluido en todas las copias o partes sustanciales del software.
*
* EL SOFTWARE SE PROPORCIONA "TAL CUAL", SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O
* IMPLÍCITOS, INCLUIDOS PERO NO LIMITADOS A LAS GARANTÍAS DE COMERCIALIZACIÓN, ADECUACIÓN
* PARA UN PROPÓSITO PARTICULAR Y NO INCUMPLIMIENTO. EN NINGÚN CASO LOS AUTORES O
* LOS TITULARES DEL DERECHO DE AUTOR SERÁN RESPONSABLES POR CUALQUIER RECLAMACIÓN, DAÑOS U OTRAS RESPONSABILIDADES, SI
* EN UNA ACCIÓN DE CONTRATO, CORTA O DE OTRA MANERA, DERIVADO DE, FUERA DE O DE
* CONEXIÓN CON EL SOFTWARE O EL USO O OTRAS REPARACIONES EN EL SOFTWARE.
*
**/
var FG = {
	api: function(method = 'GET', path = '', data = null, callback) {
		var self = this;
		if(!method){ throw new self.exceptionFG('Falta el metodo.'); };
		if(!path){ throw new self.exceptionFG('Falta la url de la api.'); };

		var theUrl = self.config.host + self.config.path_api + path;
		self.callback(method, theUrl, data, callback);
		
		
		/*
			FG.api("GET", "users", 
			{
				csrf: "N6352132999997182128"
			}, 
			function(r){
				console.log(r);
			});
		*/
	},
	sessionRefresh: function(callback) {
		var self = this;
		callback = callback || FG.callback_active;
		
		var params = {
			"csrf": self.AccessToken()
		};
		
		FG.api(
			"POST"
			, "/"
			, params
			, function(r){
				console.log('Respuesta LogIn');
				console.log(r);
				if(r.code == 200 && r.error == false && r.csrf != undefined)
					{
						FG.saveSession(r);
					}
				return callback(r);
			});
		
	},
	saveSession: function($r){
		console.log('Guardando session');
		console.log($r);
		
		localStorage.session = JSON.stringify($r);
		localStorage.accessToken = $r.authResponse.csrf;
		location.reload();
	},
	LogOut: function (){
		FG.api(
			"POST"
			, "/"
			, { 'logout': true }
			, function(r){
				console.log('Respuesta LogOut');
				console.log(r);
				setInterval(function(){ location.reload(); },1000);
				localStorage.clear();
			});
	},
	loadSession: function(){
		if(localStorage.session){
			return JSON.parse(localStorage.session);
		}else{
			return false;
		}
	},
	signedRequest: function (){
		var self = this;
		var x = self.loadSession();
		if(x.authResponse.signedRequest){
			return (x.authResponse.signedRequest);
		}else{
			//$.notify("Sesion no encontrada.","error");
			return false;
		}
	},
	AccessToken: function (){
		if(localStorage.accessToken){
			return (localStorage.accessToken);
		}else{
			return false;
		}
	},
	exceptionFG: function(message) {
		this.message = message;
		this.name = "exceptionFG";
	},
	init: function(options) {
		console.log('Iniciando init');
		var self = this;
		self.Modal.loadStyle();
		if(!options.host || !options.path_api) { throw new self.exceptionFG('Opciones de init() incompletas o invalidas.'); };
		self.config = options;
	},
	getLoginStatus: function(callback) {
		var self = this;
		console.log('Iniciando getLoginStatus');
		$r = 'not_connected';
		if(localStorage.session){
			$r = self.loadSession();
		}
		return callback($r);
	},
	json_to_url: function(data){
		url = Object.keys(data).map(function(k) {
			return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
		}).join('&');
		return url;
	},
	callback: function(method,url,fields,callback){
		var self = this;
		var xhr = new XMLHttpRequest(); 
		if(method == 'GET')
			{
				fields = self.json_to_url(fields);
				xhr.open(method, url + '?' + fields, true);
				xhr.onreadystatechange = function() {
					if(xhr.readyState == 4 && xhr.status == 200) {
						var response = JSON.parse(this.responseText);
						if (xhr.status >= 200 && xhr.status < 400) {
						// if(xhr.readyState == 4 && xhr.status == 200) {
							console.log('response OK.');
						} else {
							console.log('response KO.');
							console.log('error')
							if (xhr.status == 401) {
								console.log('sin session');
							}
						}

						callback(response);
					}
				}
				xhr.send(); 
			}
		else if(method == 'POST')
			{
				// fields = self.json_to_url(fields);
				
				var xhr = new XMLHttpRequest();
				xhr.open("POST", url, true);
				xhr.setRequestHeader("Content-Type", "application/json");
				xhr.onreadystatechange = function () {
					if (xhr.readyState === 4 && xhr.status === 200) {
						var json = JSON.parse(xhr.responseText);
						
						if (xhr.status >= 200 && xhr.status < 400) {
						// if(xhr.readyState == 4 && xhr.status == 200) {
							console.log('json OK.');
						} else {
							console.log('json KO.');
							console.log('error')
							if (xhr.status == 401) {
								console.log('sin session');
							}
						}

						callback(json);
						
					}
				};
				var data = JSON.stringify(fields);
				xhr.send(data);

			}
		else 
			{
				console.log('Methodo no admitido o no reconocido.');
			}
	},
	input_to_code: function(target){
		var self = this;
		var params = {};
		
		for (var k in target){
			if (typeof target[k] !== 'function') {
				if(target[k].name != undefined && target[k].value != undefined)
					{
						temp_name = target[k].name;
						temp_value = target[k].value;
						
						params[temp_name] = temp_value;
					}
				
			}
		}
		return params;
	},
	postLogIn: function(id_form, method, callback){
		console.log("Iniciando post");
		var self = this;
		var path = '/api/v1.0.0/api.php/';
		var oAlert = document.getElementById(id_form + '-alert-error');
		method = method || "post";
		callback = callback || FG.callback_active;
		var oForm = document.getElementById(id_form);
		var params = self.input_to_code(oForm.elements);
		
		FG.api(
			"POST"
			, "/"
			, params
			, function(r){
				if(r.code == 200 && r.error == false && r.csrf != undefined)
					{
						console.log('Guardando Token');
						oAlert.className = 'alert alert-success';
						oAlert.innerHTML = 'Guardando session.';
						FG.saveSession(r);
					}
				else 
					{
						oAlert.className = 'alert alert-danger';
						console.log('No se pudo inicar sesion, intenta nuevamente.');
						oAlert.innerHTML = 'No se pudo inicar sesion, intenta nuevamente.';
					}
				return callback(r);
			});
			
		return false; 
	},
	callback_active: function(){
		console.log('callback_active')
	},
	login: function (callback){
		var self = this;
		var code =  new Date().valueOf();
		var id_form = 'FG-login-modal-form-' + code;
		
		console.log("Iniciando login");
		if(localStorage.session && localStorage.session){
			x = self.loadSession();
			console.log(x);
			return callback(x);
		}else{
			FG.callback_active = callback;
			FG.Modal.create('FG-login-modal', `<div class="login-form ">
					<div class="row justify-content-center">
						<div class="col-md-12">
							<div class="card">
								<div id="` + id_form + `-alert-error" class="" role="alert"></div>
								<form action="javascript:FG.postLogIn('` + id_form + `', 'POST');" id="` + id_form + `" method="POST">
									<div class="card-body">
										<div class="form-group row">
											<label for="username" class="col-md-4 col-form-label text-md-right">Usuario</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="username" required autofocus>
											</div>
										</div>

										<div class="form-group row">
											<label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
											<div class="col-md-6">
												<input type="password" class="form-control" name="password" required />
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
								</form>
							</div>
						</div>
					</div>
				</div>
			`);
			FG.Modal.open('FG-login-modal');
		}
	},
	Modal: {
		removeElement: function(element) {
			var elem = document.getElementById(element);
			elem && elem.parentNode && elem.parentNode.removeChild(elem);
		},
		loadStyle: function(include_bootstrap = false){
			var self = this;
			
			var css = ''
			
			FG.getLoginStatus(function(r){
				if (r.status != 'connected') {
					css += `.FG-userReq {
						display: none;
						visibility: hidden;
					}`;
				}
			});
				
			if(include_bootstrap == true)
				{ css += '@import url("https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");'; }
			
			
			css += `.FG-modal {
				  position: fixed;
				  top: 0;
				  right: 0;
				  bottom: 0;
				  left: 0;
				  z-index: 20;
				  padding: 30px;
				  width: 100%;
				  height: 100%;
				  margin: 0;
				  padding: 0;
				  opacity: 0;
				  visibility: hidden;
				  transition: visibility 0s linear 0.1s,opacity 0.3s ease;
				}
				.FG-modal.open {
				  visibility: visible;
				  opacity: 1;
				  transition-delay: 0s;
				}
				.modal__overlay {
				  position: fixed;
				  top: 0;
				  left: 0;
				  bottom: 0;
				  right: 0;
				  z-index: 21;
				  background-color: rgba(0, 0, 0, 0.7);
				}
				.modal__close {
				  position: absolute;
				  top: 10px;
				  right: 10px;
				  border: none;
				  outline: none;
				  background: none;
				  font-size: 24px;
				  color: #747474;
				  font-weight: bold;
				}
				.modal__close:hover {
				  color: #000;
				}
				.modal__container {
					position: relative;
					z-index: 22;
					min-width: 400px;
					max-width: 550px;
					height: auto;
					min-height: 200px;
					top: 50%;
					-webkit-transform: translateY(-50%);
					transform: translateY(-50%);
					box-shadow: 0 0 10px #fff;
					margin: 0 auto;
					padding: 30px;
					background-color: #fff;
					text-align: center;
				}
				.FG-hidden {
					display: none;
					visibility: hidden;
				}`,
			head = document.head || document.getElementsByTagName('head')[0],
			style = document.createElement('style');
			head.appendChild(style);
			style.type = 'text/css';
			if (style.styleSheet){
				// This is required for IE8 and below.
				style.styleSheet.cssText = css;
			} else {
				style.appendChild(document.createTextNode(css));
			}
			console.log('CSS Modals Agregado');
			
		},
		create_link: function(el){
			// Uso: FG.Modal.create_link('jsModal2');
			var self = this;
			var a_1 = document.createElement("a");
			a_1.id = 'popup-' + el;
			a_1.href = '#' + el;
			a_1.className = 'jsModalTrigger FG-hidden';
			var a_1_text = document.createTextNode('Abrir Modal: ' + el);
			a_1.appendChild(a_1_text);
			document.getElementsByTagName('body')[0].appendChild(a_1);
			
			self.ready(self.openModal);
			self.ready(self.closeModal);
		},
		eventFire: function(el, etype){
			// Uso: FG.Modal.eventFire('jsModal2', 'click');
			var self = this;
			var elem = document.getElementById('popup-' + el);
			if (elem.fireEvent) {
				elem.fireEvent('on' + etype);
			} else {
				var evObj = document.createEvent('Events');
				evObj.initEvent(etype, true, false);
				elem.dispatchEvent(evObj);
			}
		},
		create: function(modal_id, html_out = 'FG Modal window text'){
			// Uso: FG.Modal.create('jsModal2', 'Texto o codigo HTML');
			var self = this;
			if(document.getElementById(modal_id))
				{
					FG.Modal.removeElement(modal_id);
				};
			
			var p_1 = document.createElement("p");
			p_1.innerHTML = html_out;
			
			var btn_1 = document.createElement("button");
			btn_1.className = 'modal__close jsModalClose';
			btn_1.innerHTML = '&#10005;';
			
			var jsModal = document.createElement("div");
			// jsModal.id = 'jsModal';
			jsModal.id = modal_id;
			jsModal.className = 'FG-modal';
			
			var jsOverlay = document.createElement("div");
			jsOverlay.className = 'modal__overlay jsOverlay';
			
			var modal__container = document.createElement("div");
			modal__container.className = 'modal__container';
			
			modal__container.appendChild(p_1);
			modal__container.appendChild(btn_1);
			jsModal.appendChild(jsOverlay);
			jsModal.appendChild(modal__container);
			
			document.getElementsByTagName('body')[0].appendChild(jsModal);
			FG.Modal.create_link(modal_id);
		},
		open: function(modal_id){
			// Uso: FG.Modal.open('jsModal2');
			FG.Modal.eventFire(modal_id, 'click');
		},
		openModal: function() {
			var modalTrigger = document.getElementsByClassName('jsModalTrigger');
			for(var i = 0; i < modalTrigger.length; i++) {
				modalTrigger[i].onclick = function() {
					var target = this.getAttribute('href').substr(1);
					var modalWindow = document.getElementById(target);

					modalWindow.classList ? modalWindow.classList.add('open') : modalWindow.className += ' ' + 'open'; 
				}
			}   
		},
		closeModal: function(){
			var closeButton = document.getElementsByClassName('jsModalClose');
			var closeOverlay = document.getElementsByClassName('jsOverlay');

			for(var i = 0; i < closeButton.length; i++) {
				closeButton[i].onclick = function() {
					var modalWindow = this.parentNode.parentNode;

					modalWindow.classList ? modalWindow.classList.remove('open') : modalWindow.className = modalWindow.className.replace(new RegExp('(^|\\b)' + 'open'.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
					}
			}   
			
			for(var i = 0; i < closeOverlay.length; i++) {
				closeOverlay[i].onclick = function() {
					var modalWindow = this.parentNode;
					modalWindow.classList ? modalWindow.classList.remove('open') : modalWindow.className = modalWindow.className.replace(new RegExp('(^|\\b)' + 'open'.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
				}
			}

		},
		ready: function(fn) {
			if (document.readyState != 'loading'){
			  fn();
			} else {
			  document.addEventListener('DOMContentLoaded', fn);
			}
		}
	}
};

console.log('Cargando SDK FG');
(function(a){
	console.log('Cargando SDK FG');
	console.log(a);
	try 
		{
			if(!FG){ throw new FG.exceptionFG('No existe FG'); };
			if(!window.fgAsyncInit){ throw new FG.exceptionFG('No existe window.fgAsyncInit'); };
			window.fgAsyncInit();
		} 
	catch (e) {
		console.log(e);
	}
})();