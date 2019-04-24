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
				console.log(r);
				self.busineses = r;
			});
			
			
			/*
			var session = FG.loadSession();
			
			console.log(session);
			console.log(session.status);
			console.log(session.authResponse.userID);
			
			FG.api('GET','/users_clients', {
				filter: [
					'user,eq,' + session.authResponse.userID,
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
				self.busineses = r;
			});*/
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
				params: {
					filter: [
						'client,eq,' + this.$route.params.account_id,
					],
					join: [
						'requests',
					],
				}
			}, function (r) {
				self.posts = r;
			});
		}
	}
});

var PageMeRequetsView = Vue.extend({
	template: '#page-me-requests-view',
	data: function () {
		return {
			urlMapSearchNewIframe: '/preload.html',
			post: {
				id: this.$route.params.request_id,
				client: this.$route.params.account_id,
				"contact": {
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
				"address_invoice": "",
				"address_invoice_department": {
					"id": 0,
					"code": "",
					"name": ""
				},
				"address_invoice_city": {
					"id": 0,
					"name": "",
					"department": 0
				},
				"address_invoice_geo": "",
				"request_notes": "",
				"services_requests": [],
				"quotations": [],
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

			FG.api('GET', '/requests/' + self.post.id, {
				filter: [
					'client,eq,' + this.$route.params.account_id,
				],
				join: [
					'geo_departments',
					'geo_citys',
					'contacts',
					'services_requests,services',
					'services_requests,repeats_services',
					'quotations',
					'quotations,status_quotations',
				],
			}, function (r) {
				self.post = r;

				var searchData = {
					'q': self.post.address_invoice,
					'format': 'jsonv2',
					'accept-language': 'es',
					'country': 'co',
					'polygon': 1,
					'limit': 1,
				};
				aPiMap.get('/search', { params: searchData })
				.then(function (r) {
					console.log(r);
					if(r.data.length > 0 && r.data[0].lon != undefined)
						{
							var temp = r.data[0];
							var coord = { lon: temp.lon, lat: temp.lat };
							var cord1 = coord.lat + ',' + coord.lon;
							var cord2 = coord.lon + ',' + coord.lat;

							var url = 'https://www.openstreetmap.org/export/embed.html?bbox=' + cord2 + ',' + cord2 + '&marker=' + cord1;

							self.geo_search.urlMapSearchNewIframe = url;
							$("#preload").hide();
						}
					else
						{
							alert('La direccion no fue encontrada');
						}
				})
				.catch(function (er) {
					console.log(er);
				});
			});
		},
	}
});

var PageMeRequetsAdd = Vue.extend({
	template: '#page-me-requests-add',
	data: function () {
		return {
			list_departments: [],
			list_citys: [],
			list_contacts: [],
			list_services: [],
			repeats_services: [],
			
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
		addAddress: function(evt){
			var self = this;
			
			if(self.geo_search.result == true && self.form_add_address.address != '')
				{
					var services_address = [];
					
					self.form_add_address.services.forEach(function(elem,key){
						if(elem != 'undefined' && elem != undefined && elem != false && elem.repeat != 'undefined' && elem.repeat != undefined) {
							services_address.push(elem);
						};
					});
					
					if(services_address.length > 0)
						{							
							temp = self.form_add_address;
							temp.services = services_address;
							self.form.addresses.push(temp);
							alert('Se agrego correctamente la direccion, continua agregando más.');
							
							self.form_add_address = {
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
							};
							self.geo_search = {
								search: '',
								result: false,
								iconResult: '',
								textResult: '',
								urlMapSearchNewIframe: 'https://www.openstreetmap.org/export/embed.html?bbox=-4.2316872,16.0571269,-82.1243666,-66.8511907&marker=2.8894434,-73.783892'
							};
						}
					else { alert('No has seleccionado servicios.'); };
				}
			else { alert('La direccion no es valida o esta incompleta.'); };
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

			if(
				self.post.client != 0
				&& self.post.contact != 0
				&& self.post.address_invoice_department != 0
				&& self.post.address_invoice_city != 0
				&& self.post.address_invoice != ''
				&& self.post.address_invoice_geo != ''
				&& self.post.list_services.length > 0
			)
			{
				var tempReq = {
					client: Number(self.post.client),
					contact: self.post.contact,
					address_invoice: self.post.address_invoice,
					address_invoice_department: self.post.address_invoice_department,
					address_invoice_city: self.post.address_invoice_city,
					address_invoice_geo: self.post.address_invoice_geo,
					request_notes: self.post.request_notes
				};


				FG.api('POST', '/requests', tempReq, function (response) {
					var request_id = response;
					var arrayfinal = [];
					var array1 = self.post.list_services;
					array1.forEach(function(element) {
						arrayfinal.push({
							client: tempReq.client,
							request: request_id,
							service: element.id,
							repeat: element.repeat,
						});
					});

					FG.api('POST', '/services_requests', arrayfinal, function (response) {
						var id = response;
						router.push('/busineses/' + tempReq.client + '/Requests/view/' + request_id );
					});
				});
			}
			else
			{
				alert("Campos incompletos");
			}
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

			FG.api('GET', '/geo_departments/', { order: [ 'name,asc', ], }, function (r) { self.list_departments = r; });

			FG.api('GET', '/crew_clients/', { order: [ 'id,asc', ], join: [ 'contacts', ], filter: [ 'client,asc' + self.$route.params.account_id, ], }, function (r) { self.list_contacts = r; });

			FG.api('GET', '/services/', { order: [ 'name,asc', ], }, function (r) { self.list_services = r; });

			FG.api('GET', '/geo_citys/', { order: [ 'name,asc', ], }, function (r) { self.list_citys = r; });

			FG.api('GET', '/repeats_services/', { order: [ 'name,asc', ], }, function (r) { self.repeats_services = r; });
		},
		address_search: function(){
			var self = this;

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
					
					aPiMap.get('/search', { 
						params: {
							'q': self.geo_search.search.normalize('NFD').replace(/[\u0300-\u036f]/g, "") + ', ' + temp.name + ', ' + temp.department.name,
							'city': temp.name,
							'county': temp.department.name,
							'format': 'jsonv2',
							'accept-language': 'es',
							'country': 'co',
							'polygon': 1,
							'limit': 1,
						} 
					})
					.then(function (r) {
						//console.log(r);
						if(r.data[0] != undefined)
							{
								var temp = r.data[0];
								var coord = { lon: temp.lon, lat: temp.lat };
								var cord1 = coord.lat + ',' + coord.lon;
								var cord2 = coord.lon + ',' + coord.lat;
								
								self.form_add_address.lat = coord.lat;
								self.form_add_address.lon = coord.lon;
								self.form_add_address.address_geo = cord1;

								var url = 'https://www.openstreetmap.org/export/embed.html?bbox=' + cord2 + ',' + cord2 + '&marker=' + cord1;
								self.geo_search.urlMapSearchNewIframe = url;
								self.form_add_address.address = temp.display_name;
								self.geo_search.textResult = temp.display_name;
								self.geo_search.iconResult = temp.icon;
								self.geo_search.result = true;
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
			requests: [],
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
					'clients,requests,geo_departments',
					'clients,requests,geo_citys',
				]
			}, function(r){
				
				r.forEach(function(elem){
					if(elem.client.requests.length > 0){ elem.client.requests.forEach(function(request){
						if(self.requests.indexOf(request.id) < 0){
							self.posts.push(request);
							self.requests.push(request.id);
						};
					}); };
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
				]
			}, function(r){
				
				r.forEach(function(elem){
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
		{ path: '/me/account/:account_id', component: PageMeAccountView, name: 'me-account-view-page' },
		{ path: '/me/account/:account_id/edit', component: PageMeAccountUpdate, name: 'me-account-edit-page' },
		{ path: '/me/account/:account_id/contacts', component: PageMeContacts, name: 'me-contacts-page' },
		{ path: '/me/account/:account_id/contacts/add', component: PageMeContactsAdd, name: 'me-contacts-add-page' },
		{ path: '/me/account/:account_id/requests', component: PageMeRequets, name: 'me-requests-page' },
		{ path: '/me/account/:account_id/requests/add', component: PageMeRequetsAdd, name: 'me-requests-add-page' },
		{ path: '/me/account/:account_id/requests/:request_id', component: PageMeRequetsView, name: 'me-requests-view-page' },
		{ path: '/me/account/accounts/list', component: PageMeAccountsList, name: 'me-accounts-list-page' },
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
				console.log(r);
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
	
	 function checkLoginState(response)
		{
			//			
			if (response.status === 'connected') 
				{
					console.log('Usuario Conectado para window.fgAsyncInit');
				} 
			else 
				{
					console.log('Usuario NO Conectado para window.fgAsyncInit');
				}
			
			Vue.use(MyPlugin, FG);
			RunPage();
		};
	 
		
	FG.getLoginStatus(function(response) {
		Vue.FG = FG;
		checkLoginState(response);
	});
	 
};

</script>



