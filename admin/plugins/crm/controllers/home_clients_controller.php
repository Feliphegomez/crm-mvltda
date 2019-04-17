<script>
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
			busineses: [],
			auditors: [],
			contracts: [],
			contacts: [],
			invoices: [],
			quotations: [],
			redicateds: [],
			requests: [],
			services_requests: [],
			users: [],
			users_pending: [],
			users_pending: [],
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
				console.log(r);
				
				r.forEach(function(elem){
					console.log(elem);
					console.log(elem.client.contracts_clients.length);
					
					
					 if(self.busineses.indexOf(elem.client.id) < 0){ self.busineses.push(elem.client.id); };
					
					if(elem.client.auditors_clients.length > 0){ elem.client.auditors_clients.forEach(function(auditor){ if(self.auditors.indexOf(auditor.id) < 0){ self.auditors.push(auditor.id); }; }); };
					if(elem.client.contracts_clients.length > 0){ elem.client.contracts_clients.forEach(function(contract){ if(self.contracts.indexOf(contract.id) < 0){ self.contracts.push(contract.id); }; }); };
					if(elem.client.crew_clients.length > 0){ elem.client.crew_clients.forEach(function(contact){ if(self.contacts.indexOf(contact.id) < 0){ self.contacts.push(contact.id); }; }); };
					if(elem.client.invoices_clients.length > 0){ elem.client.invoices_clients.forEach(function(invoice){ if(self.invoices.indexOf(invoice.id) < 0){ self.invoices.push(invoice.id); }; }); };
					if(elem.client.quotations.length > 0){ elem.client.quotations.forEach(function(quotation){ if(self.quotations.indexOf(quotation.id) < 0){ self.quotations.push(quotation.id); }; }); };
					if(elem.client.redicated_clients.length > 0){ elem.client.redicated_clients.forEach(function(redicated){ if(self.redicateds.indexOf(redicated.id) < 0){ self.redicateds.push(redicated.id); }; }); };
					if(elem.client.requests.length > 0){ elem.client.requests.forEach(function(request){ if(self.requests.indexOf(request.id) < 0){ self.requests.push(request.id); }; }); };
					if(elem.client.services_requests.length > 0){ elem.client.services_requests.forEach(function(service){ if(self.services_requests.indexOf(service.id) < 0){ self.services_requests.push(service.id); }; }); };
					if(elem.client.users_clients.length > 0){ elem.client.users_clients.forEach(function(user){ if(self.users.indexOf(user.id) < 0){ self.users.push(user.id); }; }); };
					if(elem.client.users_clients_pending.length > 0){ elem.client.users_clients_pending.forEach(function(user_pending){ if(self.users_pending.indexOf(user_pending.id) < 0){ self.users_pending.push(user_pending.id); }; }); };
				});
			});
			
			
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
				name: '',
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
				name: '',
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

							self.urlMapSearchNewIframe = url;
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
			post_add_services: {
				id: 0,
			},
			post: {
				client: this.$route.params.account_id,
				address_invoice: '',
				address_invoice_geo: '',
				request_notes: '',
				contact: 0,
				address_invoice_department: 0,
				address_invoice_city: 0,
				list_services: [],
			},
			list_departments: [],
			list_citys: [],
			list_contacts: [],
			list_services: [],
			repeats_services: [],
			urlMapSearchNewIframe: 'https://www.openstreetmap.org/export/embed.html?bbox=-4.2316872,16.0571269,-82.1243666,-66.8511907&marker=2.8894434,-73.783892',
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
		departmentChangeToCity: function(e){
			var self = this;
			FG.api('GET', '/geo_citys/', { order: [ 'name,asc', ], filter: [ 'department,eq,' + e.target.value, ], }, function (r) { self.list_citys = r; });
		},
		find: function(){
			var self = this;
			//$(function(){ $(".date").datepicker({ autoclose: true, todayHighlight: true }); });
		},
		loadLists: function(){
			var self = this;

			FG.api('GET', '/geo_departments/', { order: [ 'name,asc', ], }, function (r) { self.list_departments = r; });

			FG.api('GET', '/crew_clients/', { order: [ 'id,asc', ], join: [ 'contacts', ], filter: [ 'client,asc' + self.post.id, ], }, function (r) { self.list_contacts = r; });

			FG.api('GET', '/services/', { order: [ 'name,asc', ], }, function (r) { self.list_services = r; });

			FG.api('GET', '/geo_citys/', { order: [ 'name,asc', ], }, function (r) { self.list_citys = r; });

			FG.api('GET', '/repeats_services/', { order: [ 'name,asc', ], }, function (r) { self.repeats_services = r; });
		},
		address_search: function(){
			var self = this;

			FG.api('GET', '/geo_citys', {
				'filter': [
					'id,eq,' + self.post.address_invoice_city,
					'department,eq,' + self.post.address_invoice_department,
				],
				'join': [
					'geo_departments',
				],
			}, function (r2) {
				if(r2.length > 0)
				{
					var temp = r2[0];
					var searchData = {
							'q': self.post.address_invoice,
							'city': temp.name,
							'county': temp.department.name,
							'format': 'jsonv2',
							'accept-language': 'es',
							'country': 'co',
							'polygon': 1,
							'limit': 1,
						};
					aPiMap.get('/search', { params: searchData })
					.then(function (r) {
						console.log(r);
						if(r.data[0] != undefined)
							{
								var temp = r.data[0];
								var coord = { lon: temp.lon, lat: temp.lat };
								var cord1 = coord.lat + ',' + coord.lon;
								var cord2 = coord.lon + ',' + coord.lat;

								self.post.address_invoice_geo = cord1;

								var url = 'https://www.openstreetmap.org/export/embed.html?bbox=' + cord2 + ',' + cord2 + '&marker=' + cord1;
								self.urlMapSearchNewIframe = url;
							}
						else
							{
								alert('La direccion no fue encontrada');
							}
					})
					.catch(function (er) {
						console.log(er);
						//$.notify(error.response.data.code + error.response.data.message, "error");
					});
				}
				else
				{
					alert('La direccion no fue encontrada');
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
			post: {
			},
			posts: []
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
			
			//$(function(){ $(".date").datepicker({ autoclose: true, todayHighlight: true }); });
		},
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
		console.log(self.$root.status);
		console.log(self.status);
	},
	mounted: function(){
		console.log('mounted Vue.component banner_page');
		var self = this;
		self.$root.menuScripts();
		console.log(self.$root.status);
		console.log(self.status);
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
		{ path: '/me/account/list/auditors', component: PageMeAuditorsList, name: 'me-auditors-list-page' },
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
	app.$mount('#app');;
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



