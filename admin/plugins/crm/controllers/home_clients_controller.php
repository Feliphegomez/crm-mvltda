<script>
	$(function () {
		var nua = navigator.userAgent;
		var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1);
		if (isAndroid){
			
		}
	});

	Vue.use(bootstrapVue);

	var PageHome = Vue.extend({
		template: '#page-home',
		data: function() {
			return {
				services: {
					all: [],
					favorites: [],
					featured: [],
				},
			};
		},
		created: function() {
			console.log('created PageHome')
			var self = this;		
		},
		mounted: function () {
			console.log('mounted PageHome')
			var self = this;		
				$("#flexiselDemo1").flexisel({
					visibleItems: 3,
					animationSpeed: 1000,
					autoPlay: false,
					autoPlaySpeed: 3000,
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: {
						portrait: {
							changePoint: 480,
							visibleItems: 1
						},
						landscape: {
							changePoint: 640,
							visibleItems: 2
						},
						tablet: {
							changePoint: 768,
							visibleItems: 3
						}
					}
				});
		},
		computed: {
		}
	});
		
	var PageAbout = Vue.extend({
		template: '#page-about',
		data: function() {
			return {
				services: {
					all: [],
					favorites: [],
					featured: [],
				},
			};
		},
		created: function() {
			console.log('created PageAbout')
			var self = this;
			
		},
		mounted: function () {
			console.log('mounted PageAbout')
		},
		computed: {
		}
	});
		
	var PageServices = Vue.extend({
		template: '#page-services',
		data: function() {
			return {
				services: [],
			};
		},
		created: function() {
			console.log('created PageServices')
			var self = this;
			
		},
		mounted: function () {
			console.log('mounted PageServices')
		},
		computed: {
		}
	});
		
	var PageMeHome = Vue.extend({
		template: '#page-me-home',
		data: function() {
			return {
			};
		},
		created: function() {
			console.log('created PageMeHome')
			var self = this;
			
		},
		mounted: function () {
			console.log('mounted PageMeHome');
			var self = this;
			
			self.find();
		},
		methods: {
			find: function(){
				var self = this;
				
				
				
				
			}
		},
		computed: {
		}
	});
										
	var PageContact = Vue.extend({
		template: '#page-contact',
		data: function() {
			return {
			};
		},
		created: function() {
			console.log('created PageContact')
			var self = this;
			
		},
		mounted: function () {
			console.log('mounted PageContact')
		},
		computed: {
		}
	});

	var PageMeAccounts = Vue.extend({
		template: '#page-me-accounts',
		data: function() {
			return {
				services: [],
				searchKey: '',
				posts: [],
				filteredposts: [],
				busineses: [],
			};
		},
		created: function() {
			console.log('created PageMeAccounts')
			var self = this;
			
			
		},
		mounted: function () {
			console.log('mounted PageMeAccounts');
			var self = this;
			
			self.find();
		},
		computed: {
		},
		methods: {
			find: function(){
				console.log('methods find');
				var self = this;
				
				FG.api('GET','/users_clients', {
					filter: [
						'user,eq,' + self.$root.$data.authResponse.userID,
					],
					join: [
						'clients',
						'clients,types_clients',
						'clients,types_identifications',
						'clients,geo_departments',
						'clients,geo_citys',
						'clients,contacts',
					]
				}, function(r){
					self.busineses = r;
				});
			}
		}
	});

	var PageMeAccountView = Vue.extend({
		template: '#page-me-account-view',
		data: function() {
			return {
				post: {
					id: this.$route.params.busineses_id,
					type: {
						id: 0,
						name: '',
					},
					identification_type: {
						id: 0,
						name: '',
					},
					identification_number: '',
					names: '',
					contact: {
						id: 0,
						identification_type: 0,
						identification_number: '',
						first_name: '',
						second_name: '',
						surname: '',
						second_surname: '',
						phone: '',
						phone_mobile: '',
						mail: '',
						department: 0,
						city: 0,
						address: '',
						geo_address: '',
					},
					represent_legal: {
						id: 0,
						identification_type: 0,
						identification_number: '',
						first_name: '',
						second_name: '',
						surname: '',
						second_surname: '',
						phone: '',
						phone_mobile: '',
						mail: '',
						department: 0,
						city: 0,
						address: '',
						geo_address: '',
					},
					address_principal: "Glorieta pilsen",
					address_principal_department: {
						id: 0,
						code: '',
						name: '',
					},
					address_principal_city: {
						id: 0,
						name: '',
						department: 0
					},
					address_invoices: '',
					address_invoices_department: {
						id: 0,
						code: '',
						name: '',
					},
					address_invoices_city: {
						id: 0,
						name: '',
						department: 0
					},
					audit_enabled: 0
				},
			};
		},
		created: function() {
			console.log('created PageMeAccountView')
			var self = this;
			
			
		},
		mounted: function () {
			console.log('mounted PageMeAccountView');
			var self = this;
			
			self.find();
		},
		computed: {
		},
		methods: {
			find: function(){
				console.log('methods find');
				var self = this;
				
				FG.api('GET', '/users_clients', {
					filter: [
						'user,eq,' + self.$root.$data.authResponse.userID,
						'client,eq,' + self.$route.params.account_id,
					],
					join: [
						'clients',
						'clients,types_clients',
						'clients,types_identifications',
						'clients,geo_departments',
						'clients,geo_citys',
						'clients,contacts',
					],
				}, function(r){
					console.log(r);
					if(r.length > 0 && r[0].client != undefined)
					{
						self.post = r[0].client;
					}
					else
					{
						console.log('Cliente no existe o no tienes permisos');
						alert('Cliente no existe o no tienes permisos');
						
						router.push({
							name: 'me-accounts-page'
						});
					}
				});
			}
		}
	});

	var PageMeAccountUpdate = Vue.extend({
		template: '#page-me-account-update',
		data: function () {
			return {
				post: {
					id: this.$route.params.account_id,
					type: 0,
					identification_type: 0,
					identification_number: '',
					names: '',
					contact: 0,
					represent_legal: 0,
					address_principal: '',
					address_principal_department: 0,
					address_principal_city: 0,
					address_invoices: '',
					address_invoices_department: 0,
					address_invoices_city: 0,
					audit_enabled: 0
				},
				list_departments: [],
				list_citysPrincipal: [],
				list_citysInvoice: [],
				list_crew: [],
			};
		},
		create: function () {
			var self = this;		
		},
		mounted: function(){
			var self = this;
			console.log('Creando PageMeAccountUpdate UpdateData');
			self.loadLists();
			self.$nextTick(function () {
				console.log('next');
				//self.find();
			})
		},
		methods: {
			updateData: function(){
				var self = this;
				console.log(self.post);
				
				FG.api('PUT', '/clients/' + self.post.id, self.post, 
				function (eu){
					console.log(eu);
					
					router.push({
						name: 'me-account-view-page',
						params: {
							account_id: self.post.id,
						}
					});
				});
				
			},
			find: function(){
				var self = this;
				
				FG.api('GET', '/clients/' + self.post.id, {
					filter: [],
					join: [],
				}, function (r){
					console.log(r);
					self.post = r;
					//self.departmentChangeToCityPrincipal({ target: r.address_principal_department });
					// self.departmentChangeToCityInvoice({ target: r.address_invoices_department });
				});
			},
			loadLists: function(){
				var self = this;
				var contactos = [];
				FG.api('GET', '/geo_departments/', { order: [ 'name,asc', ], }, function (r){
					self.list_departments = r;
					FG.api('GET', '/geo_citys/', { order: [ 'name,asc', ], }, function(r){
						self.list_citysPrincipal = r;
						self.list_citysInvoice = r;
						
					});
				});
				FG.api('GET', '/crew_clients/', {
					filter: [
						'client,eq,' + self.post.id
					]
				}, function(r){				
					r.forEach(function(elem){
						if(contactos.indexOf(elem.contact) < 0){
							contactos.push(elem.contact);
						};
					});				
					var data = contactos.join(',');
					FG.api('GET', '/contacts/' + data, {}, function(r){
						console.log('Contactos');
						console.log(r);
						self.list_crew = r;
						self.find();
					});
				});
			},
			departmentChangeToCityPrincipal: function(e){
				var self = this;
				FG.api('GET', '/geo_citys/', { order: [ 'name,asc', ], filter: [ 'department,eq,' + e.target.value, ], }, function (r){
					 self.list_citysPrincipal = r; 
				});
			},
			departmentChangeToCityInvoice: function(e){
				var self = this;
				FG.api('GET', '/geo_citys/', { order: [ 'name,asc', ], filter: [ 'department,eq,' + e.target.value, ], }, function(r){
					self.list_citysInvoice = r;
				});
			},
		}
	});

	var PageMeContacts = Vue.extend({
		template: '#page-me-contacts',
		data: function () {
			return {
				posts: [],
			};
		},
		create: function () {
			var self = this;
			
		},
		mounted: function () {
			var self = this;
			console.log('Creando Business Contacts List');		
			self.find();
		},
		methods: {
			find: function(){
				var self = this;
				
				FG.api('GET', '/crew_clients', {
					filter: [
						'client,eq,' + self.$route.params.account_id,
					],
					join: [
						'contacts',
						'contacts,types_identifications',
						'contacts,geo_departments',
						'contacts,geo_citys',
						'types_contacts',
					],
				}, function (r) {
					self.posts = r;
					console.log(self.posts);
					// $("#preload").hide();
				});
			}
		}
	});

	var PageMeContactsAdd = Vue.extend({
		template: '#page-me-contacts-add',
		data: function () {
			return {
				post: {
				  identification_type: 0,
				  identification_number: '',
				  first_name: '',
				  second_name: '',
				  surname: '',
				  second_surname: '',
				  phone: '',
				  phone_mobile: '',
				  mail: '',
				  department: 0,
				  city: 0,
				  address: '',
				  geo_address: '',
				},
				list_types_identifications: [],
				list_departments: [],
				list_citys: [],
				list_types_contacts: [],
				post_crew: {
					client: this.$route.params.account_id,
					contact: 0,
					type_contact: 0
				}
			};
		},
		create: function () {
			var self = this;

		},
		mounted: function () {
			var self = this;
			console.log('Creando Business Contacts Add');
			self.loadLists();

		},
		methods: {
			createContactBusineses: function(){
				var self = this;
				console.log('Actualizando contacto');

				FG.api('POST', '/contacts', self.post, function (u) {
					self.post_crew.contact = u;

					FG.api('GET', '/crew_clients', self.post_crew, function (u) {
						router.push({
							name: 'me-contacts-page',
							params: { account_id: self.$route.params.account_id, }
						});
					});
				});
			},
			departmentChangeToCity: function(e){
				var self = this;
				FG.api('GET', '/geo_citys/', { order: [ 'name,asc', ], filter: [ 'department,eq,' + e.target.value, ], }, function (r) { self.list_citys = r; });
			},
			loadLists: function(){
				var self = this;

				FG.api('GET', '/geo_citys/', { order: [ 'name,asc', ], }, function (r) { self.list_citys = r; });

				FG.api('GET', '/geo_departments/', { order: [ 'name,asc', ], }, function (r) { self.list_departments = r; });

				FG.api('GET', '/types_identifications/', { order: [ 'name,asc', ], }, function (r) { self.list_types_identifications = r; });

				FG.api('GET', '/types_contacts/', { order: [ 'name,asc', ], }, function (r) { self.list_types_contacts = r; });
				self.find();
			},
			find: function(){
				var self = this;

			},
		}
	});

	var PageMeRequets = Vue.extend({
		template: '#page-me-requests',
		data: function () {
			return {
				posts: [],
			};
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Requests List');
			self.find();
		},
		methods: {
			find: function(){
				var self = this;

				FG.api('GET', '/requests/', {
					filter: [
						'client,eq,' + this.$route.params.account_id,
					],
					join: [
						'status_requests',
						'contacts',
					],
				}, function (r) {
					r.forEach(function(request){
						request.addresses = JSON.parse(request.addresses);
						self.posts.push(request);
					});
				});
			}
		}
	});

	var PageMeRequetsView = Vue.extend({
		template: '#page-me-requests-view',
		data: function () {
			return {
				post: {
					id: this.$route.params.request_id,
					client: this.$route.params.account_id,
					contact: {
						"id": 0,
						"identification_type": 0,
						"identification_number": "",
						"first_name": "",
						"second_name": "",
						"surname": "",
						"second_surname": "",
						"phone": "",
						"phone_mobile": "",
						"mail": "",
						"department": 0,
						"city": 0,
						"address": "",
						"geo_address": ""
					},
					request_notes: '',
					addresses: [],
					status: {
						id: 0,
						name: ''
					},
				},
				geo_search: {
					urlMapSearchNewIframe: ''
				},
				quotations: [],
				activity: [],
			};
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Requests Single');
			self.find();
		},
		methods: {
			find: function(){
				var self = this;
				FG.api('GET', '/requests/' + self.post.id, {
					filter: [
						'client,eq,' + this.$route.params.account_id,
					],
					join: [
						'contacts',
						'status_requests',
					],
				}, function (r) {
					self.post = r;
					self.post.addresses = JSON.parse(r.addresses);

					FG.api('GET','/quotations', {
						filter: [
							'client,eq,' + self.$route.params.account_id,
							'request,eq,' + self.$route.params.request_id,
						],
						join: [
							'contacts',
							'status_quotations',
						]
					}, function(r){
						self.quotations = r;
					});
					
					FG.api('GET','/requests_activity', {
						filter: [
							'request,eq,' + self.$route.params.request_id,
						],
						join: [
						]
					}, function(r){
						r.forEach(function(act){
							act.code = JSON.parse(act.code);
							self.activity.push(act);
						});
					});
				
				});
			},
		}
	});

	var PageMeRequetsQuotationsView = Vue.extend({
		template: '#page-me-requests-quotations-view',
		data: function () {
			return {
				post: {
					id: this.$route.params.quotation_id,
					client: this.$route.params.account_id,
					request: this.$route.params.request_id,
					values: [],
					status: {
						"id": 0,
						"name": "",
					},
					created: '',
					updated: '',
					validity: 0,
					accept	: ''
				},
			};
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Requests Single');
			self.find();
		},
		methods: {
			find: function(){
				var self = this;
				FG.api('GET', '/quotations/' + self.post.id, {
					filter: [
						'client,eq,' + this.$route.params.account_id,
						'request,eq,' + this.$route.params.request_id,
					],
					join: [
						'status_quotations',
					],
				}, function (r) {
					self.post = r;
					self.post.values = JSON.parse(r.values);
				});
			},
		}
	});

	var PageMeRequetsAdd = Vue.extend({
		template: '#page-me-requests-add',
		data: function () {
			return {
				addresses: [],
				selected_addresses: [],
				selected_addresses_ids: [],
				selected_service: 0,
				selected_services: [],
				selected_services_ids: [],
				list_services: [],
				repeats_services: [],
				list_contacts: [],
				
				list_departments: [],
				list_citys: [],
				
				geo_search: {
					search: '',
					result: false,
					iconResult: '',
					textResult: '',
					urlMapSearchNewIframe: 'https://www.openstreetmap.org/export/embed.html?bbox=-4.2316872,16.0571269,-82.1243666,-66.8511907&marker=2.8894434,-73.783892'
				},
				
				form_add_address: {
					"address": '',
					"address_geo": '',
					"department": {
						"id": 0,
						"code": "",
						"name": ""
					},
					"city": {
						"id": 0,
						"name": ""
					},
					"lon": '',
					"lat": '',
					"services": [],
				},
				form: {
				  client: this.$route.params.account_id,
				  contact: 0,
				  request_notes: '',
				  addresses: []
				},
				show: true
			}
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Requests Single');
			self.loadLists();
			self.find();
		},
		methods: {
			addServiceInAddressModal: function(index){
				var self = this;
				if(self.selected_addresses_ids.indexOf(index) < 0){
					console.log('Direccion encontrada.');					
					var inputOptionsTemp = [];
					var services_temp = [];
					FG.api('GET', '/services/', {
						order: [ 'id,asc', ], 
						join: [ 'types_meditions' ], 
						filter: [ ], 
					}, function (r) {
						if(r.length > 0){
							r.forEach(function(a){
								a.repeat = {
									id: 0,
									name: 'Selecciona una opcion...',
									code: null,
								};
								services_temp.push(a);
								
								inputOptionsTemp.push({
									text: a.name,
									value: a.id,
								});
							
							});
							var address_temp = self.selected_addresses[index];
							
							bootbox.prompt({
								title: "Selecciona los servicios que quieres agregar.",
								value: address_temp.services_ids,
								inputType: 'checkbox',
								inputOptions: inputOptionsTemp,
								callback: function (result) {
									if(result === null){
										console.log('No se agrego ningun servicio.');
									} else {
										console.log('Servicios a agregar ' + result.length);
										
										self.selected_addresses[index].services_ids = [];
										self.selected_addresses[index].services = [];
										
										result.forEach(function(a){
											a = Number(a);
											console.log('Servicio ' + a);
											if(address_temp.services_ids.indexOf(a) < 0){
												console.log('Servicio debe ser agregado.');
												
												services_temp.forEach(function(e){
													if(e.id === a){
														self.selected_addresses[index].services_ids.push(e.id);
														self.selected_addresses[index].services.push(e);
													}
												});
											}else{
												console.log('Servicio debe ser eliminado.');
												self.selected_addresses[index].services_ids.splice(address_temp.services_ids.indexOf(a), 1);
												self.selected_addresses[index].services.splice(address_temp.services_ids.indexOf(a), 1);
											}
										});
									}
								}
							});
						}
					});
				} else {
					console.log('Direccion no encontrada.');
				}
			},
			toogleAddress: function(index){
				var self = this;
				var temp_index = index;
				var temp_id = self.addresses[index].id;
				// console.log('Index: ' + index);
				// console.log('ID: ' + temp_id);
				// console.log('Buscando...');
				// console.log(self.selected_addresses_ids);
				if(self.selected_addresses_ids.indexOf(temp_id) < 0){
					// console.log('No se encuentra. ' + temp_id);
					self.selected_addresses_ids.push(self.addresses[index].id);
					self.selected_addresses.push(self.addresses[index]);
				}else{
					// console.log('Se encuentra');
					self.selected_addresses_ids.splice(self.selected_addresses_ids.indexOf(temp_id), 1);
					self.selected_addresses.splice(self.selected_addresses_ids.indexOf(temp_id), 1);
				}
			},
			onReset(evt) {
				evt.preventDefault()
				this.form.contact = 0;
				this.form.request_notes = '';
				this.form.addresses = [];
				// Trick to reset/clear native browser form validation state
				this.show = false
				this.$nextTick(() => {
				  this.show = true
				})
			},
			createRequest: function(evt){
				var self = this;
				evt.preventDefault()
				var formValues = this.form;
				
				var dialog = bootbox.dialog({
					size: 'small',
					title: 'Espere...',
					message: '<p><i class="fa fa-spin fa-spinner"></i> Procesando datos...</p>',
					// buttons: {
					// 	noclose: {
					// 		label: "Cerrar",
					// 		className: 'btn-warning',
					// 		callback: function(){
					// 			dialog.modal('hide');
					// 			return false;
					// 		}
					// 	},
					// }
				});
				function closeThisModal(timer){
					setTimeout(function(){
						dialog.modal('hide');
					}, timer);
				}
				
				
				if(
					self.form.client != 0
					&& self.form.contact != 0
					&& self.selected_addresses.length > 0
				)
				{
					dialog.init(function(){
						dialog.find('.bootbox-body').html('Validando direcciones...');
						
						self.selected_addresses.forEach(function(address){
							dialog.find('.bootbox-body').html('<b>Direccion:</b>' + address.display_name);
							
							if(address.services.length > 0){
								address.services.forEach(function(service){
									dialog.find('.bootbox-body').html('<b>Direccion:</b> ' + address.display_name + '<br>' + 'Validando: ' + service.name);
									
									if(service.repeat.id <= 0){
										dialog.find('.bootbox-body').html('<b>Servicio </b>' + service.name + ' en la <b>direccion</b> ' 
										+ address.display_name + ' <br> <br> <b>no tiene</b> una <b>frecuencia/repeticion</b>, selecciona una de la lista.');
										closeThisModal(8000);
									}else{
										
									}
								});
								
								// Enviar solicitud
								FG.api('POST', '/requests', {
									client: self.form.client,
									contact: self.form.contact,
									request_notes: self.form.request_notes,
									addresses: JSON.stringify(self.selected_addresses)
								}, function (rf) {
									console.log(rf);
									
									if(rf > 0){
										dialog.find('.bootbox-body').html('Solicitud creada con éxito...');
										closeThisModal(2000);
										
										router.push({
											name: 'me-requests-view-page',
											params: {
												account_id: self.form.client,
												request_id: rf
											}
										});
									}else{
										dialog.find('.bootbox-body').html('Ocurrio un error intenta nuevamente, si el problema persiste contacta con el equipo de Monteverde LTDA.');
										closeThisModal(8000);
									}
								});
							
							}else{
								dialog.find('.bootbox-body').html('La <b>direccion</b> ' + address.display_name + ' <br> <br> <b>no tiene servicios</b>, <b>eliminala</b> o <b>agrega servicios</b>.');
								closeThisModal(8000);
							}
						});
					});
				}
				else
				{
					dialog.find('.bootbox-body').html('Campos incompletos');
					closeThisModal(3000);
				}
			},
			departmentChangeToCity: function(){
				var self = this;
			},
			find: function(){
				var self = this;
				
				FG.api('GET','/users_clients', {
					filter: [ 'user,eq,' + self.$root.$data.authResponse.userID, ],
					join: [
						'clients',
						'clients,clients_addresses',
						'clients,clients_addresses,addresses',
						'clients,clients_addresses,addresses,geo_citys',
						'clients,clients_addresses,addresses,geo_departments'
					]
				}, function(r){
					r.forEach(function(elem){
						if(elem.client.clients_addresses.length > 0){
							elem.client.clients_addresses.forEach(function(address){
								if(self.addresses.indexOf(address.address.id) < 0){
									address.address.completo = JSON.parse(address.address.completo);
									address.address.services = [];
									address.address.services_ids = [];
									self.addresses.push(address.address);
									
									console.log(address.address);
								};
							});
						};
					});
				});
			},
			loadLists: function(){
				var self = this;
				FG.api('GET', '/crew_clients/', { order: [ 'id,asc', ], join: [ 'contacts', ], filter: [ 'client,asc' + self.$route.params.account_id, ], }, function (r) { self.list_contacts = r; });
				
				FG.api('GET', '/services/', {
					order: [ 'id,asc', ], 
					join: [ 'types_meditions' ], 
					filter: [ ], 
				}, function (r) {
					if(r.length > 0){
						r.forEach(function(a){
							a.repeat = 0;
							self.list_services.push(a);
						});	
					}
				});
				
				FG.api('GET', '/repeats_services/', { order: [ 'name,asc', ], }, function (r) {
					self.repeats_services = r;
				});
			},
			address_search: function(){
				var self = this;

			},
			addServiceRequest: function(){
				var self = this;

				FG.api('GET', '/services/' + self.post_add_services.id, {}, function (r) { self.post.list_services.push(r); });
			},
			removeServiceRequest: function(e){
				var self = this;
				self.post.list_services.splice(e, 1);
			},
		}
	});

	var PageMeAuditorsList = Vue.extend({
		template: '#page-me-auditors-list',
		data: function () {
			return {
				auditors: [],
				posts: [],
				fields: [
					{
						key: 'account_id',
						label: 'Cuenta',
						sortable: true, 
						sortDirection: 'desc'
					},
					{
						key: 'id',
						label: 'ID',
						sortable: true, 
						sortDirection: 'desc'
					},
					{
						key: 'names',
						label: 'Nombre',
						sortable: true, 
						sortDirection: 'desc'
					},
					{
						key: 'phone',
						label: 'Telefono Fijo',
						sortable: true, 
						sortDirection: 'desc'
					},
					{
						key: 'phone_mobile',
						label: 'Telefono Móvil',
						sortable: true, 
						sortDirection: 'desc'
					},
					{
						key: 'mail',
						label: 'Correo Electronico',
						sortable: true, 
						sortDirection: 'desc'
					},
					{ key: 'actions', label: 'Actions' }
				],			
				totalRows: 1,
				currentPage: 1,
				perPage: 10,
				pageOptions: [5, 10, 15],
				sortBy: null,
				sortDesc: false,
				sortDirection: 'asc',
				filter: null,
			}
		},
		computed: {
			sortOptions() {
				return this.fields.filter(f => f.sortable).map(f => {
					return { text: f.label, value: f.key }
				});
		  }
		},
		create: function () {
			var self = this;

		},
		mounted: function () {
			var self = this;
			self.find();
		},
		methods: {
			onFiltered(filteredItems) {
				this.totalRows = filteredItems.length;
				this.currentPage = 1;
			},
			find: function(){
				var self = this;
				
				FG.api('GET','/users_clients', {
					filter: [
						'user,eq,' + self.$root.$data.authResponse.userID,
					],
					join: [
						'clients,auditors_clients',
					]
				}, function(r){
					console.log(r);
					
					r.forEach(function(elem){
						
						if(elem.client.auditors_clients.length > 0){
							 elem.client.auditors_clients.forEach(function(auditor){
								 if(self.auditors.indexOf(auditor.id) < 0){
									 self.auditors.push(auditor.id);
								 };
							 });
						};
						
					});
					
					FG.api('GET','/auditors_clients/' + self.auditors.join(','), {
						join: [
							'contacts',
							'clients'
						],
						filter: [
							// 'user,eq,' + self.$root.$data.authResponse.userID,
						],
					}, function(r2){
						console.log(r2);
						self.posts = r2;
						self.totalRows = self.posts.length;
					});
				});
			},
		}
	});

	var PageMeAddressesList = Vue.extend({
		template: '#page-me-addresses-list',
		data: function () {
			return {
				map: null,
				addresses: [],
				posts: [],
				fields: [
					// {
					// 	key: 'client.names',
					// 	label: 'Cuenta',
					// 	sortable: true,
					// 	class: 'text-left'
					// },
					{
						key: 'address',
						label: 'Direccion',
						sortable: true,
						class: 'text-left'
					},
					// { key: 'actions', label: 'Actions' },
				],			
				totalRows: 1,
				currentPage: 1,
				perPage: 5,
				pageOptions: [5, 10, 15],
				sortBy: null,
				sortDesc: false,
				sortDirection: 'asc',
				filter: null,
			}
		},
		computed: {
			sortOptions() {
				return this.fields.filter(f => f.sortable).map(f => {
					return { text: f.label, value: f.key }
				});
		  }
		},
		create: function () {
			var self = this;

		},
		mounted: function () {
			var self = this;
			self.find();
		},
		methods: {
			createMap: function(){
				var self = this;
				self.map = new L.Map('map');
				
				var greenIcon = L.icon({
					iconUrl: '/admin/global/images/icons/leaf-green.png',
					shadowUrl: '/admin/global/images/icons/leaf-shadow.png',

					iconSize:     [19, 47.5], // tamaño del icono
					shadowSize:   [25, 32], // tamaño de la sombra
					iconAnchor:   [11, 47], // Punto del icono que corresponderá a la ubicación del marcador.
					shadowAnchor: [2, 31], // lo mismo para la sombra
					popupAnchor:  [-1.5, -38] // Punto desde el que se abrirá la ventana emergente en relación con el icono.
					
					// iconSize:     [38, 95],
					// shadowSize:   [50, 64],
					// iconAnchor:   [22, 94],
					// popupAnchor:  [-3, -76] 
				});
				
				L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
					attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
					maxZoom: 19
				}).addTo(self.map);
				self.map.attributionControl.setPrefix(''); // Don't show the 'Powered by Leaflet' text.

				var colombia = new L.LatLng(2.8894434,-73.783892); 
				self.map.setView(colombia, 6);
				
				self.posts.forEach(function(d){
					d.completo = JSON.parse(d.completo);
					
					self.map.addLayer(new L.Marker(new L.LatLng(d.lat, d.lon), {icon: greenIcon}));
					
					var polygonPoints = [];
					d.completo.polygonpoints.forEach(function(a){
						polygonPoints.push(new L.LatLng(a[1], a[0]))
					});
					self.currentPolygon = new L.Polygon(polygonPoints);
					self.map.addLayer(self.currentPolygon);
					$("#map").focus();
				});
			},
			viewMarker: function(lat,lon,zoom){
				var self = this;
				self.map.setView(new L.LatLng(lat, lon), zoom);
			},
			onFiltered(filteredItems) {
				this.totalRows = filteredItems.length;
				this.currentPage = 1;
			},
			find: function(){
				var self = this;
				FG.api('GET','/users_clients', {
					filter: [ 'user,eq,' + self.$root.$data.authResponse.userID, ],
					join: [
						'clients,clients_addresses',
						'clients,clients_addresses,addresses',
					]
				}, function(r){
					r.forEach(function(elem){
						
						if(elem.client.clients_addresses.length > 0){
							elem.client.clients_addresses.forEach(function(address){								
								if(self.addresses.indexOf(address.address.id) < 0){
									address.address.client = {
										id: elem.client.id,
										names: elem.client.names,
									};
									
									self.addresses.push(address.id);
									self.posts.push(address.address);
								};
							});
						};
					});
					self.totalRows = self.posts.length;
					self.createMap();
				});
			},
			removeAddress: function(id){
				var self = this;
				console.log(id);
				
				bootbox.dialog({
					locale: 'es',
					title: 'A custom dialog with buttons and callbacks',
					message: "<p>This dialog has buttons. Each button has it's own callback function.</p>",
					size: 'large',
					buttons: {
						cancel: {
							label: "Cambie de idea",
							className: 'btn-secondary',
							callback: function(){
								console.log('Custom cancel clicked');
							}
						},
						ok: {
							label: "Eliminar",
							className: 'btn-danger',
							callback: function(){
								console.log('Custom OK clicked');
								
								FG.api('DELETE','/clients_addresses/' + id, {
								}, function(r){
									console.log(r);
									if(r == true)
									{
										var temp = self.posts;
										self.posts = [];
										self.addresses = [];
										temp.forEach(function(address){
											if(address.id === id){
												console.log('Encontrado');
											}else{
												self.addresses.push(address.id);
												self.posts.push(address);
											}
										});
									}
								});
							}
						}
					}
				});
			}
		}
	});

	var PageMeAddressesAdd = Vue.extend({
		template: '#page-me-addresses-add',
		data: function () {
			return {
				list_departments: [],
				list_citys: [],
				list_accounts: [],
				
				geo_search: {
					street: '',
					result: [],
					iconResult: '',
					textResult: '',
				},
				
				form_add_address: {
					"address": '',
					"address_geo": '',
					"department": {
						"id": 0,
						"code": "",
						"name": ""
					},
					"city": {
						"id": 0,
						"name": ""
					},
					"lon": '',
					"lat": '',
					"category": '',
					"type": '',
					"importance": '',
				},
				form: {
				  client: 0,
				  addresses: []
				},
				show: true,
				map: null,
				currentMarker: null,
				currentPolygon: null,
				//vectors: null,
				controls: null,
				markers: null,
				vectorLayer: null,
				typeToggle: 'noneToggle',
			}
		},
		create: function () {
			var self = this;
		},
		mounted: function () {
			var self = this;
			console.log('Creando Requests Single');
			self.loadLists();
			self.find();
			self.createMap();
			//self.markerDemo();
		},
		methods: {
			createMap: function(){
				var self = this;
				self.map = new L.Map('map');
				L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
					attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
					maxZoom: 19
				}).addTo(self.map);
				self.map.attributionControl.setPrefix('');
				
				var colombia = new L.LatLng(2.8894434,-73.783892); 
				self.map.setView(colombia, 5);
			},
			markerDemo: function(){
				var self = this;
				// https://harrywood.co.uk/maps/examples/leaflet/3-polygons.view.html
				 
				// Location of the marker
				var markerLocation = new L.LatLng(51.505, -0.09);
				// New Center
				self.map.setView(markerLocation, 13);
				var marker = new L.Marker(markerLocation);
				self.map.addLayer(marker);

				// Add a circle...
				var circleLocation = new L.LatLng(51.508, -0.11),
				 circleOptions = {
					 color: 'red', 
					 fillColor: '#f03', 
					 fillOpacity: 0.5
				 };
				 
				var circle = new L.Circle(circleLocation, 500, circleOptions);
				self.map.addLayer(circle);

				// ...and a triangle
				var p1 = new L.LatLng(51.509, -0.08),
				 p2 = new L.LatLng(51.503, -0.06),
				 p3 = new L.LatLng(51.51, -0.047),
				 polygonPoints = [p1, p2, p3];

				var polygon = new L.Polygon(polygonPoints);
				self.map.addLayer(polygon);
			},
			toggleControl: function() {
				var self = this;
				for(key in self.controls) {
					if(self.typeToggle == key) {
						self.controls[key].activate();
					} else {
						self.controls[key].deactivate();
					}
				}
			},
			addAddresses: function(evt){
				var self = this;
				if(self.form.client > 0){
					if(self.form.addresses.length > 0){
						self.form.addresses.forEach(function(e){
							FG.api('GET', '/clients_addresses', {
								'filter': [
									'client,eq,' + self.form.client,
									'address,eq,' + e.id
								],
							}, function (u) {
								if(u.length > 0){
									console.log('la Direccion ya existe en la cuenta.');
								}else{
									FG.api('POST', '/clients_addresses', {
										client: self.form.client,
										address: e.id
									}, function (a) {
										console.log('Direccion agregada a la cuenta.');
									});
								}
							});
						});
						router.push({
							name: 'me-addresses-list-page',
							params: {
								
							}
						});
					} else {
						alert('No hay direcciones para agregar, debes agregar almenos una.');
					};
				} else {
					alert('Selecciona la cuenta donde deseas agregar las direcciones.');
				};
			},
			onSubmit(evt) {
				var self = this;
				evt.preventDefault()
				// alert(JSON.stringify(this.form))
				var formValues = this.form;
				if(Number(formValues.client) > 0 && formValues.contact > 0 && formValues.addresses.length > 0)
					{
						var sendTemp = {};
						sendTemp.client = Number(formValues.client);
						sendTemp.contact = Number(formValues.contact);
						sendTemp.addresses = JSON.stringify(formValues.addresses);
						sendTemp.request_notes = formValues.request_notes;
						
						FG.api('POST', '/requests', sendTemp, function (response) {
							console.log(response);
							var request_id = response;
							
							router.push({
								name: 'me-requests-view-page',
								params: {
									account_id: formValues.client,
									request_id: response
								}
							});
						});
					}
				else 
					{
						alert('Completa la solicitud antes de enviarla. :)');
					}
			},
			onReset(evt) {
				evt.preventDefault()
				this.form.contact = 0;
				this.form.request_notes = '';
				this.form.addresses = [];
				// Trick to reset/clear native browser form validation state
				this.show = false
				this.$nextTick(() => {
				  this.show = true
				})
			},
			createRequest: function(){
				var self = this;
				console.log('generando solicitud..');

			},
			departmentChangeToCity: function(){
				var self = this;
				FG.api('GET', '/geo_citys/', { order: [ 'name,asc', ], filter: [ 'department,eq,' + self.form_add_address.department.id, ], }, function (r) { self.list_citys = r; });
			},
			find: function(){
				var self = this;
				//$(function(){ $(".date").datepicker({ autoclose: true, todayHighlight: true }); });
				
			},
			loadLists: function(){
				var self = this;

				FG.api('GET','/users_clients', {
					filter: [ 'user,eq,' + self.$root.$data.authResponse.userID, ],
					join: [ 'clients', 'clients,types_identifications', 'clients,contacts', ]
				}, function(r){
					r.forEach(function(elem){ if(elem.client.id > 0){
						self.list_accounts.push(elem.client);
					}; });
				});
				FG.api('GET', '/geo_departments/', { order: [ 'name,asc', ], }, function (r) { self.list_departments = r; });
				FG.api('GET', '/geo_citys/', { order: [ 'name,asc', ], }, function (r) { self.list_citys = r; });
			},
			addingAddress: function(place_id){
				var self = this;
				self.geo_search.result.forEach(function(elm){
					if(elm.place_id === place_id){						
						FG.api('GET', '/addresses', {
							'filter': [
								'place_id,eq,' + place_id
							],
							'join': [
								'geo_departments',
								'geo_citys',
							],
						}, function (u) {							
							if(u.length > 0){
								// console.log('Direccion existente en DB.');
								self.form.addresses.push(u[0]);
								$("#map").focus();
							} else {
								var tempAdd = {
									place_id: elm.place_id,
									address_input: self.geo_search.street,
									display_name: elm.display_name,
									city: self.form_add_address.city.id,
									department: self.form_add_address.department.id,
									lat: elm.lat,
									lon: elm.lon,
									place_rank: elm.place_rank,
									completo: JSON.stringify(elm)
								};
								
								FG.api('POST', '/addresses', tempAdd, function (a) {
									// console.log('Direccion nueva en DB.');
									tempAdd.id = a;
									self.form.addresses.push(tempAdd);
									$("#map").focus();
								});
							}
						});								
					}
				});
			},
			delAddress: function(place_id){
				var self = this;
				// self.form.addresses.splice(place_id, self.form.addresses.length);
				//delete self.form.addresses[place_id];
				self.form.addresses.splice(place_id, 1);
			},
			address_search: function(){
				var self = this;
				self.geo_search.result = [];

				FG.api('GET', '/geo_citys', {
					'filter': [
						'id,eq,' + self.form_add_address.city.id,
						'department,eq,' + self.form_add_address.department.id,
					],
					'join': [
						'geo_departments',
					],
				}, function (r2) {
					if(r2.length > 0)
					{
						var temp = r2[0];
						temp.name = temp.name.normalize('NFD').replace(/[\u0300-\u036f]/g, "");
						temp.department.name = temp.department.name.normalize('NFD').replace(/[\u0300-\u036f]/g, "");
						
						var parametros = {
							//'q': self.geo_search.search.normalize('NFD').replace(/[\u0300-\u036f]/g, ""),
							'street': self.geo_search.street.normalize('NFD').replace(/[\u0300-\u036f]/g, ""),
							'city': temp.name.normalize('NFD').replace(/[\u0300-\u036f]/g, ""),
							'state': temp.department.name.normalize('NFD').replace(/[\u0300-\u036f]/g, ""),
							'country': 'colombia',
							'format': 'jsonv2',
							'accept-language': 'es',
							'polygon': 1,
							'limit': 25,
							'addressdetails': 1,
						};
						
						aPiMap.get('/search', {
							params: parametros
						})
						.then(function (r) {
							if(r.data[0] != undefined)
								{
									var temp_address_search = r.data;
									temp_address_search.forEach(function(elm){
										self.geo_search.result.push(elm);
									});
								}
							else
								{
									self.geo_search.result = false;
									self.geo_search.textResult = 'La direccion no fue encontrada';
									self.form_add_address.address = '';
									self.geo_search.iconResult = '';
								}
						})
						.catch(function (er) {
							console.log(er);
							//$.notify(error.response.data.code + error.response.data.message, "error");
							
							self.geo_search.result = false;
							self.geo_search.textResult = 'La direccion no fue encontrada, ocurrio un error.';
							self.form_add_address.address = '';
							self.geo_search.iconResult = '';
						});
					}
					else 
					{
						self.geo_search.result = false;
						self.geo_search.textResult = 'La direccion no fue encontrada';
						self.form_add_address.address = '';
						self.geo_search.iconResult = '';
					}
					
				});

			},
			viewPoint: function(place_id){
				var self = this;
				if (self.currentMarker) {
					self.map.removeLayer(self.currentMarker);
				}
				if (self.currentPolygon) {
					self.map.removeLayer(self.currentPolygon);
				}
				
				self.geo_search.result.forEach(function(elm){
					if(elm.place_id === place_id){
						//console.log(place_id);
						console.log('Encontrado: ' + place_id);
						
						var poss = new L.LatLng(elm.lat, elm.lon);
						self.map.setView(poss, elm.place_rank);
						
						self.currentMarker = new L.Marker(poss);
						self.map.addLayer(self.currentMarker)
						
						var polygonPoints = [];
						elm.polygonpoints.forEach(function(a){
							// a[0] => Lon // a[1] => Lat console.log(JSON.stringify(a));
							polygonPoints.push(new L.LatLng(a[1], a[0]))
						});
						self.currentPolygon = new L.Polygon(polygonPoints);
						self.map.addLayer(self.currentPolygon);
						$("#map").focus();
					}
				});
			}
		}
	});

	var PageMeAccountsList = Vue.extend({
		template: '#page-me-accounts-list',
		data: function () {
			return {
				accounts: [],
				posts: [],
				fields: [
					{
						key: 'id',
						label: 'ID',
						sortable: true, 
						sortDirection: 'desc'
					},
					{
						key: 'names',
						label: 'Nombre'
					},
					{
						key: 'identification_type.name',
						label: 'Tipo de Identifiacion',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'identification_number',
						label: '# de Identifiacion',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'represent_legal',
						label: 'Nombre (R. Legal)',
						sortable: false
					},
					{
						key: 'contact',
						label: 'Nombre (Contacto)',
						sortable: false
					},
					{ key: 'actions', label: 'Actions' }
				],			
				totalRows: 1,
				currentPage: 1,
				perPage: 10,
				pageOptions: [5, 10, 15],
				sortBy: null,
				sortDesc: false,
				sortDirection: 'asc',
				filter: null,
			}
		},
		computed: {
			sortOptions() {
				return this.fields.filter(f => f.sortable).map(f => {
					return { text: f.label, value: f.key }
				});
		  }
		},
		create: function () {
			var self = this;

		},
		mounted: function () {
			var self = this;
			self.find();
		},
		methods: {
			onFiltered(filteredItems) {
				this.totalRows = filteredItems.length;
				this.currentPage = 1;
			},
			find: function(){
				var self = this;			
				FG.api('GET','/users_clients', {
					filter: [ 'user,eq,' + self.$root.$data.authResponse.userID, ],
					join: [ 'clients', 'clients,types_identifications', 'clients,contacts', ]
				}, function(r){
					r.forEach(function(elem){ if(elem.client.id > 0){
						self.accounts.push(elem.client.id);
						self.posts.push(elem.client);
					}; });
					self.totalRows = self.posts.length;
				});
			},
		}
	});

	var PageMeContractsList = Vue.extend({
		template: '#page-me-contracts-list',
		data: function () {
			return {
				contracts: [],
				posts: [],
				fields: [
					{
						key: 'id',
						label: 'ID',
						sortable: true, 
						sortDirection: 'desc'
					},
					{
						key: 'request',
						label: '# Solicitud',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'quotation',
						label: '# Cotización',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'created',
						label: 'F. Creacion',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'updated',
						label: 'Última Mod.',
						sortable: false
					},
					{
						key: 'status',
						label: 'Estado',
						sortable: false
					},
					{ key: 'actions', label: 'Actions' }
				],			
				totalRows: 1,
				currentPage: 1,
				perPage: 10,
				pageOptions: [5, 10, 15],
				sortBy: null,
				sortDesc: false,
				sortDirection: 'asc',
				filter: null,
			}
		},
		computed: {
			sortOptions() {
				return this.fields.filter(f => f.sortable).map(f => {
					return { text: f.label, value: f.key }
				});
		  }
		},
		create: function () {
			var self = this;

		},
		mounted: function () {
			var self = this;
			self.find();
		},
		methods: {
			onFiltered(filteredItems) {
				this.totalRows = filteredItems.length;
				this.currentPage = 1;
			},
			find: function(){
				var self = this;
				
				FG.api('GET','/users_clients', {
					filter: [
						'user,eq,' + self.$root.$data.authResponse.userID,
					],
					join: [
						'clients',
						'clients,contracts_clients',
						'clients,contracts_clients,status_contracts_clients',
						// 'clients,contracts_clients,requests',
						// 'clients,contracts_clients,quotations',
					]
				}, function(r){
					r.forEach(function(elem){
						if(elem.client.contracts_clients.length > 0){
							elem.client.contracts_clients.forEach(function(contract){
								if(self.contracts.indexOf(contract.id) < 0){
									self.contracts.push(contract.id);
									self.posts.push(contract);
								};
							});
						};
					});
					self.totalRows = self.posts.length;
				});
			},
		}
	});

	var PageMeContactsList = Vue.extend({
		template: '#page-me-contacts-list',
		data: function () {
			return {
				contacts: [],
				posts: [],
				fields: [
					{
						key: 'id',
						label: 'ID',
						sortable: true, 
						sortDirection: 'desc'
					},
					{
						key: 'first_name',
						label: 'Primer Nombre',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'second_name',
						label: 'Segundo Nombre',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'surname',
						label: 'Primer Apellido',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'second_surname',
						label: 'Segundo Apellido',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'phone',
						label: 'Telefono Fijo',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'phone_mobile',
						label: 'Telefono Móvil',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'mail',
						label: 'Correo Electronico',
						sortable: true,
						class: 'text-center'
					},
					{ key: 'actions', label: 'Actions' }
				],			
				totalRows: 1,
				currentPage: 1,
				perPage: 10,
				pageOptions: [5, 10, 15],
				sortBy: null,
				sortDesc: false,
				sortDirection: 'asc',
				filter: null,
			}
		},
		computed: {
			sortOptions() {
				return this.fields.filter(f => f.sortable).map(f => {
					return { text: f.label, value: f.key }
				});
		  }
		},
		create: function () {
			var self = this;

		},
		mounted: function () {
			var self = this;
			self.find();
		},
		methods: {
			onFiltered(filteredItems) {
				this.totalRows = filteredItems.length;
				this.currentPage = 1;
			},
			find: function(){
				var self = this;
				
				
				
				FG.api('GET','/users_clients', {
					filter: [
						'user,eq,' + self.$root.$data.authResponse.userID,
					],
					join: [
						'clients',
						'clients,crew_clients',
					]
				}, function(r){
					
					r.forEach(function(elem){
						if(elem.client.crew_clients.length > 0){
							elem.client.crew_clients.forEach(function(contact){
								if(self.contacts.indexOf(contact.id) < 0){
									self.contacts.push(contact.contact);
								};
							});
						};
					});
					
					FG.api('GET','/contacts/' + self.contacts.join(','), {
						join: [
							//'types_identifications',
						],
						filter: [
							// 'user,eq,' + self.$root.$data.authResponse.userID,
						],
					}, function(r2){
						console.log(r2);
						self.posts = r2;
					});
				});
			},
		}
	});

	var PageMeInvoicesList = Vue.extend({
		template: '#page-me-invoices-list',
		data: function () {
			return {
				invoices: [],
				posts: [],
				fields: [
					{
						key: 'id',
						label: 'ID',
						sortable: true, 
						sortDirection: 'desc'
					},
					{
						key: 'created',
						label: 'Fecha',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'validity',
						label: 'F. Vencimiento',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'status_name',
						label: 'Estado',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'total',
						label: 'Total',
						sortable: true,
						class: 'text-center'
					},
					{ key: 'actions', label: 'Actions' }
				],			
				totalRows: 1,
				currentPage: 1,
				perPage: 10,
				pageOptions: [5, 10, 15],
				sortBy: null,
				sortDesc: false,
				sortDirection: 'asc',
				filter: null,
			}
		},
		computed: {
			sortOptions() {
				return this.fields.filter(f => f.sortable).map(f => {
					return { text: f.label, value: f.key }
				});
		  }
		},
		create: function () {
			var self = this;

		},
		mounted: function () {
			var self = this;
			self.find();
		},
		methods: {
			onFiltered(filteredItems) {
				this.totalRows = filteredItems.length;
				this.currentPage = 1;
			},
			find: function(){
				var self = this;
				
				
				
				FG.api('GET','/users_clients', {
					filter: [
						'user,eq,' + self.$root.$data.authResponse.userID,
					],
					join: [
						'clients',
						'clients,invoices_clients',
						'clients,invoices_clients,status_invoices',
					]
				}, function(r){
					
					r.forEach(function(elem){
						if(elem.client.invoices_clients.length > 0){ elem.client.invoices_clients.forEach(function(invoice){
							if(self.invoices.indexOf(invoice.id) < 0){
								self.posts.push(invoice);
								self.invoices.push(invoice.id);
							};
						}); };
					});
					
				});
			},
		}
	});
		
	var PageMeQuotationsList = Vue.extend({
		template: '#page-me-quotations-list',
		data: function () {
			return {
				quotations: [],
				posts: [],
				fields: [
					{
						key: 'id',
						label: 'ID',
						sortable: true, 
						sortDirection: 'desc'
					},
					{
						key: 'request',
						label: 'Solicitud',
						sortable: true, 
						sortDirection: 'asc'
					},
					{
						key: 'status.name',
						label: 'Estado',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'created',
						label: 'Fecha',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'updated',
						label: 'Última Mod.',
						sortable: true, 
						sortDirection: 'desc'
					},
					{
						key: 'validity',
						label: 'Vigencia',
						sortable: true, 
						sortDirection: 'desc'
					},
					{ key: 'actions', label: 'Actions' }
				],			
				totalRows: 1,
				currentPage: 1,
				perPage: 10,
				pageOptions: [5, 10, 15],
				sortBy: null,
				sortDesc: false,
				sortDirection: 'asc',
				filter: null,
			}
		},
		computed: {
			sortOptions() {
				return this.fields.filter(f => f.sortable).map(f => {
					return { text: f.label, value: f.key }
				});
		  }
		},
		create: function () {
			var self = this;

		},
		mounted: function () {
			var self = this;
			self.find();
		},
		methods: {
			onFiltered(filteredItems) {
				this.totalRows = filteredItems.length;
				this.currentPage = 1;
			},
			find: function(){
				var self = this;
				
				
				
				FG.api('GET','/users_clients', {
					filter: [
						'user,eq,' + self.$root.$data.authResponse.userID,
					],
					join: [
						'clients',
						'clients,quotations',
						'clients,quotations,status_quotations',
					]
				}, function(r){
					
					r.forEach(function(elem){
						if(elem.client.quotations.length > 0){ elem.client.quotations.forEach(function(quotation){
							if(self.quotations.indexOf(quotation.id) < 0){
								self.posts.push(quotation);
								self.quotations.push(quotation.id);
							};
						}); };
					});
					
				});
			},
		}
	});
		
	var PageMeRedicatedsList = Vue.extend({
		template: '#page-me-redicateds-list',
		data: function () {
			return {
				redicateds: [],
				posts: [],
				fields: [
					{
						key: 'id',
						label: 'ID',
						sortable: true, 
						sortDirection: 'desc'
					},
					{
						key: 'consecutive',
						label: 'Consecutivo',
						sortable: true, 
						sortDirection: 'asc'
					},
					{
						key: 'name',
						label: 'Nombre',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'date_start',
						label: 'F. Inicio',
						sortable: true, 
						sortDirection: 'desc'
					},
					{
						key: 'date_end',
						label: 'F. Fin',
						sortable: true, 
						sortDirection: 'desc'
					},
					{ key: 'actions', label: 'Actions' }
				],			
				totalRows: 1,
				currentPage: 1,
				perPage: 10,
				pageOptions: [5, 10, 15],
				sortBy: null,
				sortDesc: false,
				sortDirection: 'asc',
				filter: null,
			}
		},
		computed: {
			sortOptions() {
				return this.fields.filter(f => f.sortable).map(f => {
					return { text: f.label, value: f.key }
				});
		  }
		},
		create: function () {
			var self = this;

		},
		mounted: function () {
			var self = this;
			self.find();
		},
		methods: {
			onFiltered(filteredItems) {
				this.totalRows = filteredItems.length;
				this.currentPage = 1;
			},
			find: function(){
				var self = this;
				
				
				
				FG.api('GET','/users_clients', {
					filter: [
						'user,eq,' + self.$root.$data.authResponse.userID,
					],
					join: [
						'clients',
						'clients,redicated_clients',
					]
				}, function(r){
					
					r.forEach(function(elem){
						if(elem.client.redicated_clients.length > 0){ elem.client.redicated_clients.forEach(function(redicated){
							if(self.redicateds.indexOf(redicated.id) < 0){
								self.posts.push(redicated);
								self.redicateds.push(redicated.id);
							};
						}); };
					});
					
				});
			},
		}
	});

	var PageMeRequestsList = Vue.extend({
		template: '#page-me-requests-list',
		data: function () {
			return {
				quotations: [],
				posts: [],
				fields: [
					{
						key: 'id',
						label: 'ID',
						sortable: true, 
						sortDirection: 'desc'
					},
					{
						key: 'contact',
						label: 'Contacto'
					},
					{
						key: 'addresses',
						label: 'Direcciónes y Servicios',
						sortable: true,
						class: 'text-center'
					},
					{
						key: 'contact',
						label: 'Nombre (Contacto)',
						sortable: false
					},
					{
						key: 'status.name',
						label: 'Estado',
						sortable: true
					},
					{ key: 'actions', label: 'Actions' }
				],			
				totalRows: 1,
				currentPage: 1,
				perPage: 10,
				pageOptions: [5, 10, 15],
				sortBy: null,
				sortDesc: false,
				sortDirection: 'asc',
				filter: null,
			}
		},
		computed: {
			sortOptions() {
				return this.fields.filter(f => f.sortable).map(f => {
					return { text: f.label, value: f.key }
				});
		  }
		},
		create: function () {
			var self = this;

		},
		mounted: function () {
			var self = this;
			self.find();
		},
		methods: {
			onFiltered(filteredItems) {
				this.totalRows = filteredItems.length;
				this.currentPage = 1;
			},
			find: function(){
				var self = this;
				
				FG.api('GET','/users_clients', {
					filter: [
						'user,eq,' + self.$root.$data.authResponse.userID,
					],
					join: [
						'clients',
						'clients,requests',
						'clients,requests,contacts',
						'clients,requests,status_requests',
					]
				}, function(r){
					r.forEach(function(elem){
						if(elem.client.requests.length > 0){
							elem.client.requests.forEach(function(b){
								if(Number(b.id) > 0){
									b.addresses = JSON.parse(b.addresses);
									self.posts.push(b);
								}
							});
						};
					});
				});
				
				
			},
		}
	});

	var PageMeUsersList = Vue.extend({
		template: '#page-me-users-list',
		data: function () {
			return {
				users: [],
				posts: [],
			}
		},
		create: function () {
			var self = this;

		},
		mounted: function () {
			var self = this;
			self.find();
		},
		methods: {
			find: function(){
				var self = this;
				
				
				
				FG.api('GET','/users_clients', {
					filter: [
						'user,eq,' + self.$root.$data.authResponse.userID,
					],
					join: [
						'clients',
						'clients,users_clients',
						'clients,users_clients,users',
						'clients,users_clients,permissions',
					]
				}, function(r){
					
					r.forEach(function(elem){
						if(elem.client.users_clients.length > 0){ elem.client.users_clients.forEach(function(user){
							if(self.users.indexOf(user.id) < 0){
								self.posts.push(user);
								self.users.push(user.id);
							};
						}); };
					});
					
				});
			},
		}
	});
		
	var PageMeUsersPendingList = Vue.extend({
		template: '#page-me-users-pending-list',
		data: function () {
			return {
				users_pending: [],
				posts: [],
			}
		},
		create: function () {
			var self = this;

		},
		mounted: function () {
			var self = this;
			self.find();
		},
		methods: {
			find: function(){
				var self = this;
				
				
				
				FG.api('GET','/users_clients', {
					filter: [
						'user,eq,' + self.$root.$data.authResponse.userID,
					],
					join: [
						'clients',
						'clients,users_clients_pending',
						'clients,users_clients_pending,permissions',
					]
				}, function(r){
					
					r.forEach(function(elem){
						if(elem.client.users_clients_pending.length > 0){ elem.client.users_clients_pending.forEach(function(user_pending){
							if(self.users_pending.indexOf(user_pending.id) < 0){
								self.posts.push(user_pending);
								self.users_pending.push(user_pending.id);
							};
						}); };
					});
					
				});
			},
		}
	});

	var Sidebar_meAccount_Component = Vue.component('component-sidebar-meaccount', {
		template: '#component-sidebar-meaccount',
		props: [
			''
		],
		data: function () {
			return {
				Me: {
					id: this.$root.$data.authResponse.userID
				},
				busineses: [],
				addresses: [],
				auditors: [],
				contracts: [],
				contacts: [],
				invoices: [],
				quotations: [],
				redicateds: [],
				requests: [],
				users: [],
				users_pending: [],
			};
		},
		mounted: function () {
			var self = this;
			self.find();
		},
		methods: {
			find: function(){
				var self = this;
				FG.api('GET','/users_clients', {
					filter: [
						'user,eq,' + self.$root.$data.authResponse.userID,
					],
					join: [
						'clients,auditors_clients',
						'clients,contracts_clients',
						'clients,crew_clients',
						'clients,invoices_clients',
						'clients,quotations',
						'clients,redicated_clients',
						'clients,requests',
						'clients,services_requests',
						'clients,users_clients',
						'clients,users_clients_pending',
						'clients,clients_addresses',
					]
				}, function(r){
					r.forEach(function(elem){
						if(elem.client.clients_addresses.length > 0){
							elem.client.clients_addresses.forEach(function(address){
								if(self.addresses.indexOf(address.id) < 0){
									self.addresses.push(address.id);
								};
							});
						};
						
						if(self.busineses.indexOf(elem.client.id) < 0){ self.busineses.push(elem.client.id); };
						if(elem.client.auditors_clients.length > 0){ elem.client.auditors_clients.forEach(function(auditor){ if(self.auditors.indexOf(auditor.id) < 0){ self.auditors.push(auditor.id); }; }); };
						if(elem.client.contracts_clients.length > 0){ elem.client.contracts_clients.forEach(function(contract){ if(self.contracts.indexOf(contract.id) < 0){ self.contracts.push(contract.id); }; }); };
						if(elem.client.crew_clients.length > 0){ elem.client.crew_clients.forEach(function(contact){ if(self.contacts.indexOf(contact.id) < 0){ self.contacts.push(contact.id); }; }); };
						if(elem.client.invoices_clients.length > 0){ elem.client.invoices_clients.forEach(function(invoice){ if(self.invoices.indexOf(invoice.id) < 0){ self.invoices.push(invoice.id); }; }); };
						if(elem.client.quotations.length > 0){ elem.client.quotations.forEach(function(quotation){ if(self.quotations.indexOf(quotation.id) < 0){ self.quotations.push(quotation.id); }; }); };
						if(elem.client.redicated_clients.length > 0){ elem.client.redicated_clients.forEach(function(redicated){ if(self.redicateds.indexOf(redicated.id) < 0){ self.redicateds.push(redicated.id); }; }); };
						if(elem.client.requests.length > 0){ elem.client.requests.forEach(function(request){ if(self.requests.indexOf(request.id) < 0){ self.requests.push(request.id); }; }); };
						if(elem.client.users_clients.length > 0){ elem.client.users_clients.forEach(function(user){ if(self.users.indexOf(user.id) < 0){ self.users.push(user.id); }; }); };
						if(elem.client.users_clients_pending.length > 0){ elem.client.users_clients_pending.forEach(function(user_pending){ if(self.users_pending.indexOf(user_pending.id) < 0){ self.users_pending.push(user_pending.id); }; }); };
					});
				});
			}
		}
	});

	var Menu_meAccount_Component = Vue.component('component-menu-meaccount', {
		template: '#component-menu-meaccount',
		props: [
			'account_id'
		],
		data: function () {
			return {
				type: 'quotations',
				post: {
					id: this.$route.params.account_id,
				},
			};
		},
		mounted: function () {
			var self = this;
			
		},
	});

	var banner_page = Vue.component('banner-page', {
		template: '#banner-page',
		data: function () {
			return {
				status: this.$root.getStatus(),
				authResponse: this.$root.getAuthResponse(),
				contact: {
					numbers: [
						'(57) 301 720 6560',
						'(57) (4) 413 9026'
					],
					mails: [
						'atencionalcliente@monteverdeltda.com'
					]
				}
			}
		},
		created: function(){
			console.log('created Vue.component banner_page');
			var self = this;
			// console.log(self.$root.status);
			// console.log(self.status);
		},
		mounted: function(){
			console.log('mounted Vue.component banner_page');
			var self = this;
			self.$root.menuScripts();
			// console.log(self.$root.status);
			// console.log(self.status);
		},
		methods: {
		}
	});	

	var router = new VueRouter({
		routes: [
			{ path: '/', component: PageHome, name: 'home-page' },
			{ path: '/about', component: PageAbout, name: 'about-page' },
			{ path: '/services', component: PageServices, name: 'services-page' },
			{ path: '/contact', component: PageContact, name: 'contact-page' },
			{ path: '/me', component: PageMeHome, name: 'me-home-page' },
			{ path: '/me/accounts', component: PageMeAccounts, name: 'me-accounts-page' },
			{ path: '/me/account/addresses/add', component: PageMeAddressesAdd, name: 'me-addresses-add-page' },
			
			{ path: '/me/account/:account_id', component: PageMeAccountView, name: 'me-account-view-page' },
			{ path: '/me/account/:account_id/edit', component: PageMeAccountUpdate, name: 'me-account-edit-page' },
			{ path: '/me/account/:account_id/contacts', component: PageMeContacts, name: 'me-contacts-page' },
			{ path: '/me/account/:account_id/contacts/add', component: PageMeContactsAdd, name: 'me-contacts-add-page' },
			{ path: '/me/account/:account_id/requests', component: PageMeRequets, name: 'me-requests-page' },
			{ path: '/me/account/:account_id/requests/add', component: PageMeRequetsAdd, name: 'me-requests-add-page' },
			{ path: '/me/account/:account_id/requests/:request_id', component: PageMeRequetsView, name: 'me-requests-view-page' },
			{ path: '/me/account/:account_id/requests/:request_id/quotations/:quotation_id', component: PageMeRequetsQuotationsView, name: 'me-requests-quotations-view-page' },
			{ path: '/me/account/accounts/list', component: PageMeAccountsList, name: 'me-accounts-list-page' },
			{ path: '/me/account/addresses/list', component: PageMeAddressesList, name: 'me-addresses-list-page' },
			{ path: '/me/account/auditors/list', component: PageMeAuditorsList, name: 'me-auditors-list-page' },
			{ path: '/me/account/contracts/list', component: PageMeContractsList, name: 'me-contracts-list-page' },
			{ path: '/me/account/contacts/list', component: PageMeContactsList, name: 'me-contacts-list-page' },
			{ path: '/me/account/invoices/list', component: PageMeInvoicesList, name: 'me-invoices-list-page' },
			{ path: '/me/account/quotations/list', component: PageMeQuotationsList, name: 'me-quotations-list-page' },
			{ path: '/me/account/redicateds/list', component: PageMeRedicatedsList, name: 'me-redicateds-list-page' },
			{ path: '/me/account/requests/list', component: PageMeRequestsList, name: 'me-requests-list-page' },
			{ path: '/me/account/users/list', component: PageMeUsersList, name: 'me-users-list-page' },
			{ path: '/me/account/users-pending/list', component: PageMeUsersPendingList, name: 'me-users-pending-list-page' },
		]
	});	

	var app = new Vue({
		data: {
			ticker: null,
			FG: {},
			status: 'not_authorized',
			authResponse: {
				accessToken: 'none',
				userID:'0',
				userData: {
					id: 0,
					location: '',
					password: '',
					username: '',
				}
			},
			appName: 'CRM Monteverde LTDA'
		},
		router: router,
		components: {
			'component-sidebar-meaccount': Sidebar_meAccount_Component,
			'component-menu-meaccount': Menu_meAccount_Component,
			'banner-page': banner_page
		},
		methods: {
			menuScripts: function(){
				function shuffle(array) 
					{
						var currentIndex = array.length, temporaryValue, randomIndex;
						
						while (0 !== currentIndex) 
							{
								// Pick a remaining element...
								randomIndex = Math.floor(Math.random() * currentIndex);
								currentIndex -= 1;
								// And swap it with the current element.
								temporaryValue = array[currentIndex];
								array[currentIndex] = array[randomIndex];
								array[randomIndex] = temporaryValue;
							}
						return array;
					}

				var triggerBttn = document.getElementById( 'trigger-overlay' ),
					overlay = document.querySelector( '.overlay' ),
					closeBttn = overlay.querySelectorAll( '.close-menu' ),
					paths = [].slice.call( overlay.querySelectorAll( 'svg > path' ) ),
					pathsTotal = paths.length;

				function toggleOverlay() 
					{
						var cnt = 0;

						shuffle( paths );

						if( classie.has( overlay, 'open' ) ) {
							classie.remove( overlay, 'open' );
							classie.add( overlay, 'close' );

							paths.forEach( function( p, i ) {
								setTimeout( function() {
									++cnt;
									p.style.display = 'none';
									if( cnt === pathsTotal ) {
										classie.remove( overlay, 'close' );
									}
								}, i * 30 );
							});
						}
						else if( !classie.has( overlay, 'close' ) ) {
							classie.add( overlay, 'open' );
							paths.forEach( function( p, i ) {
								setTimeout( function() {
									p.style.display = 'block';
								}, i * 30 );
							});
						};
					};

				triggerBttn.addEventListener( 'click', toggleOverlay );
				
				closeBttn.forEach(e => {
					e.addEventListener( 'click', toggleOverlay );
				})
			
				//closeBttn.addEventListener( 'click', toggleOverlay );
				
				//new UISearch($('#sb-search'));
			},
			LogInModal: function(){
				var self = this;
				FG.login(function(r) {
					console.log('Respuesta del Login');
					
					//self.statusChangeCallback(r);
					if (r.status == 'connected') {
						//self.authResponse = r.authResponse;
						console.log('Welcome!  Fetching your information.... ');
					} else {
						console.log('El usuario canceló el inicio de sesión o no estaba totalmente autorizado.');
						console.log(r.message);
					}
				});
			},
			checkSession: function(){
				console.log('checkSession Vue app');
				var self = this;
				
				console.log(self.status);
			},
			getStatus: function(){
				return this.status;
			},
			getAuthResponse: function(){
				return this.authResponse;
			},
			zfill: function(number, width) {
				var numberOutput = Math.abs(number);
				var length = number.toString().length;
				var zero = "0";

				if (width <= length) {
					if (number < 0) {
						 return ("-" + numberOutput.toString()); 
					} else {
						 return numberOutput.toString(); 
					}
				} else {
					if (number < 0) {
						return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
					} else {
						return ((zero.repeat(width - length)) + numberOutput.toString()); 
					}
				}
			},
			formatMoney: function(n, c, d, t){
				var c = isNaN(c = Math.abs(c)) ? 2 : c,
					d = d == undefined ? "." : d,
					t = t == undefined ? "," : t,
					s = n < 0 ? "-" : "",
					i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
					j = (j = i.length) > 3 ? j % 3 : 0;

				return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
			},
			MaysFirst: function(string){
			  // return string.charAt(0).toUpperCase() + string.slice(1);
			  return string.toUpperCase();
			}
		},
		mounted: function() {
			console.log('mounted Vue app');
			var self = this;
			self.checkSession();
		},
		created: function() {
			console.log('created Vue app');
			var self = this;
			self.checkSession();		
		},
	});

	var RunPage = function(){
		app.$mount('#app');
	};

	const MyPlugin = {
		install: function (Vue, options) {
			console.log('Iniciando Plugin API');
			Vue.mixin({
				data: function(){
					return {
						status: 'not_authorized',
						authResponse: {
							accessToken: 'none',
							userID:'0',
							userData: {
								id: 0,
								location: '',
								password: '',
								username: '',
							}
						},
						options: options,
					}
				},
				methods: {
					FG: FG,
				},
				created() {
					// console.log('MyPlugin: created');
					
					this.$nextTick(function () {
						//console.log('MyPlugin: created => nextTick');
					})
				},
				mounted() {
					// console.log('Mounted MyPlugin!');
					var self = this;
				},
				beforeCreate() {
					//console.log('MyPlugin: beforeCreate');
					var self = this;				
					var session = FG.loadSession();
					self.$root.status = session.status;
					self.$root.authResponse = session.authResponse;
					
					this.$nextTick(function () {
						// console.log('MyPlugin: beforeCreate => nextTick');
					});
				},
			});
		}
	};

	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return};
		js = d.createElement(s);
		js.id = id;
		// js.src = "/api/v2.0.0/sdk/ES_CO/sdk.js?token=" + new Date().valueOf();
		js.src = "/api/v2.0.0/sdk/ES_CO/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'feliphegomez-jssdk'));

	window.fgAsyncInit = function() {
	Vue.FG = null;
	FG.init({
		host: '/',
		path_api: 'api/v2.0.0/api.php'
	});
	
	 function checkLoginState(response){
		if (response.status === 'connected'){ console.log('Usuario Conectado para window.fgAsyncInit'); } 
		else { console.log('Usuario NO Conectado para window.fgAsyncInit'); };
		Vue.use(MyPlugin, FG);
		RunPage();
	};
	 
		
	FG.getLoginStatus(function(response) {
		Vue.FG = FG;
		checkLoginState(response);
	});
	 
};
</script>



