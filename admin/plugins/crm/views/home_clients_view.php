<div class="body-page" id="app">
	<banner-page></banner-page>
	<div class="container">
		<!-- // 
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<br>
				<b-alert show dismissible> Tu estado Actual: {{ status }}! </b-alert>
			</div>
		</div>
		-->
		<div class="row">
			<div class="col-sm-12">
				<router-view></router-view>
			</div>
		</div>
	</div>
</div>
<template id="component-sidebar-meaccount">
	<div>
		<div class="custom-collapse">
			<button class="collapse-toggle visible-xs-no btn btn-sm btn-primary " type="button" data-toggle="collapse" data-parent="custom-collapse" data-target="#side-menu-collapse">
				<span class="fa fa-list"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button> 
			<button class="collapse-toggle visible-xsno- btn btn-sm btn-primary " type="button" data-toggle="collapse" data-parent="custom-collapse" data-target="#side-menu-collapse-2">
				<span class="fa fa-plus"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button> 
			<hr>
			<ul class="list-group collapse" id="side-menu-collapse">
				<router-link v-bind:to="{ name: 'me-home-page' }" tag="li" class="list-group-item dropdown-toggle text-muted cursor-pointer">
					<i class="fa fa-dashboard fa-1x"></i> Inicio
				</router-link>
				<router-link v-bind:to="{ name: 'me-accounts-page' }" tag="li" class="list-group-item dropdown-toggle text-muted cursor-pointer">
					<i class="fa fa-dashboard fa-1x"></i> Mis Cuentas
				</router-link>
			</ul>
			<b-list-group class="list-group collapse" id="side-menu-collapse-2">
				<b-list-group-item>
					<i class="fa fa-dashboard fa-1x"></i> 
					Conteo 
				</b-list-group-item>
				<b-list-group-item v-bind:to="{ name: 'me-accounts-list-page' }" class="cursor-pointer">
					Cuentas 
					<b-badge>{{ busineses.length }}</b-badge>
				</b-list-group-item>
				
				<b-list-group-item v-bind:to="{ name: 'me-auditors-list-page' }">
					Auditores 
					<b-badge>{{ auditors.length }}</b-badge>
				</b-list-group-item>
				
				<b-list-group-item v-bind:to="{ name: 'me-contracts-list-page' }">
					Contratos 
					<b-badge>{{ contracts.length }}</b-badge>
				</b-list-group-item>
				<b-list-group-item v-bind:to="{ name: 'me-contacts-list-page' }">
					Contactos 
					<b-badge>{{ contacts.length }}</b-badge>
				</b-list-group-item>
				<b-list-group-item v-bind:to="{ name: 'me-invoices-list-page' }">
					Facturas 
					<b-badge>{{ invoices.length }}</b-badge>
				</b-list-group-item>
				<b-list-group-item v-bind:to="{ name: 'me-quotations-list-page' }">
					Propuestas 
					<b-badge>{{ quotations.length }}</b-badge>
				</b-list-group-item>
				<b-list-group-item v-bind:to="{ name: 'me-redicateds-list-page' }">
					Radicados 
					<b-badge>{{ redicateds.length }}</b-badge>
				</b-list-group-item>
				<b-list-group-item v-bind:to="{ name: 'me-requests-list-page' }">
					Solicitudes 
					<b-badge>{{ requests.length }}</b-badge>
				</b-list-group-item>
				<b-list-group-item v-bind:to="{ name: 'me-users-list-page' }">
					Usuarios 
					<b-badge>{{ users.length }}</b-badge>
				</b-list-group-item>
				<b-list-group-item v-bind:to="{ name: 'me-users-pending-list-page' }">
					Usuarios Pdte de Aprobacion 
					<b-badge>{{ users_pending.length }}</b-badge>
				</b-list-group-item>
				<!-- //
				<b-list-group-item href="http://apple.com">
					iPhone
					<b-badge>5</b-badge>
				</b-list-group-item>
				<b-list-group-item>OnePlus 3T</b-list-group-item>
				-->
			</b-list-group>
		</div>
		<hr>
		   <!-- //
		   <ul class="list-group">
				<li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
			  <li class="list-group-item text-right"><span class="pull-left"><strong class="">Shares</strong></span> 125</li>
			  <li class="list-group-item text-right"><span class="pull-left"><strong class="">Likes</strong></span> 13</li>
			  <li class="list-group-item text-right"><span class="pull-left"><strong class="">Posts</strong></span> 37</li>
			  <li class="list-group-item text-right"><span class="pull-left"><strong class="">Followers</strong></span> 78</li>
		   </ul>
		   <ul class="list-group">
			  <li class="list-group-item text-muted" contenteditable="false">Profile</li>
			  <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> 2.13.2014</li>
			  <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> Yesterday</li>
			  <li class="list-group-item text-right"><span class="pull-left"><strong class="">Real name</strong></span> Joseph Doe</li>
				<li class="list-group-item text-right"><span class="pull-left"><strong class="">Role: </strong></span> Pet Sitter</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading">Insured / Bonded?</div>
				<div class="panel-body"><i style="color:green" class="fa fa-check-square"></i> Yes, I am insured and bonded.</div>
			</div>
			-->
	</div>
</template>
<style scope="component-sidebar-meaccount">
	@media screen and (min-width: 768px) {

	.custom-collapse .collapse{
				display:block;
		  }  
	}
</style>

<template id="component-menu-meaccount">
   <div>
      <nav class="menu-meaccount">
         <ul>
			<!-- //
            <router-link tag="li" v-bind:to="{ name: 'me-accounts-page' }">
               <i class="fa fa-reply-all fa-lg"></i>
               Mis Cuentas
            </router-link>
			-->
			
            <router-link tag="li" v-bind:to="{ name: 'me-account-view-page', params: { account_id: post.id } }">
               <i class="fa fa-home fa-lg"></i>
               General
            </router-link>
            <router-link tag="li" v-bind:to="{ name: 'me-contacts-page', params: { account_id: post.id } }">
               <i class="fa fa-users fa-lg"></i>
               Mis Contactos
               <ul class="drop-menu menu-1">
                  <router-link tag="li" v-bind:to="{ name: 'me-contacts-add-page', params: { account_id: post.id } }">
                     <i class="fa fa-plus fa-lg"></i>
                     Nuevo
                  </router-link>
               </ul>
            </router-link>
            <router-link tag="li" v-bind:to="{ name: 'me-requests-page', params: { account_id: post.id } }">
               <i class="fa fa-paper-plane fa-lg"></i>
               Mis Solicitudes
               <ul class="drop-menu menu-1">
                  <router-link tag="li" v-bind:to="{ name: 'me-requests-add-page', params: { account_id: post.id } }">
                     <i class="fa fa-plus fa-lg"></i>
                     Nuevo
                  </router-link>
               </ul>
            </router-link>
         </ul>
      </nav>
      <!-- //
         <div class="btn-group">
         	<router-link tag="button" type="button" class="p-2 btn btn-info btn-circle" style="width: 100%;" v-bind:to="{ name: 'Business-Requests-List' }">
         		<i class="fa fa-file-contract fa-lg"></i>
         		Solicitudes
         	</router-link>
         	<button type="button" class="p-2 btn btn-info btn-circle dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         		<span class="sr-only">Toggle Dropdown</span>
         	</button>
         	<div class="dropdown-menu btn-circle">
         		<router-link tag="a" class="dropdown-item" v-bind:to="{ name: 'Business-Requests-Add' }">
         			<i class="fa fa-plus fa-lg"></i>
         			Nueva Solicitud
         		</router-link>
         	</div>
         </div>
         
         <router-link class="p-2 btn btn-info btn-circle" v-bind:to="{ name: 'Business-Contracts-List' }">
         	<i class="fa fa-gavel fa-lg"></i>
         	Contratos
         </router-link>
         
         <router-link class="p-2 btn btn-info btn-circle" v-bind:to="{ name: 'Business-Invoices-List' }">
         	<i class="fa fa-file-invoice fa-lg"></i>
         	Facturas
         </router-link>
         
         -->
      <hr>
   </div>
</template>
<style scope="component-menu-meaccount">
   .menu-meaccount {
   padding:22px;
   text-align:center;
   }
   .menu-meaccount ul {
   list-style:none;
   padding:0;
   margin:0;
   display:inline-block;
   background:#ddd;
   border-radius:5px;
   z-index: 1000;
   }
   .menu-meaccount ul li {
   float:left;
   width:150px;
   height:65px;
   line-height:65px;
   position:relative;
   text-transform:uppercase;
   font-size:14px;
   color:rgba(0,0,0,0.7);
   cursor:pointer;
   }
   .menu-meaccount ul li:hover {
   background:#d5d5d5;
   border-radius:5px;
   }
   .menu-meaccount ul.drop-menu {
   position:absolute;
   top:100%;
   left:0%;
   width:100%;
   padding:0;
   }
   .menu-meaccount ul.drop-menu li {
   background:#666;
   color:rgba(255,255,255,0.7);
   }
   .menu-meaccount ul.drop-menu li:hover {
   background:#606060;
   }
   .menu-meaccount ul.drop-menu li:last-child {
   border-radius:0px 0px 5px 5px;
   }
   .menu-meaccount ul.drop-menu li {
   display:none;
   }
   .menu-meaccount ul li:hover > ul.drop-menu li {
   display:block;
   }
   //menu 1 -----------
   .menu-meaccount li:hover > ul.drop-menu.menu-1 li {
   perspective:1000px;
   opacity:0;
   animation:name:menu1,duration:300ms,timing-function:ease-in-out,fill-mode:forward;
   }
   @keyframes menu1 {
   0% {
   opacity:0;
   transform:rotateY(-90deg) translateY(30px);
   }
   100% {
   opacity:1;
   transform:rotateY(0deg) translateY(30px);
   }
   }
</style>
<!-- SIDEBAR // -->
<template id="banner-page">
   <div>
      <div class="banner-top-header">
         <div class="nav-w3lm">
            <p>
               <button id="trigger-overlay" type="button">
               <img src="<?php echo $website->get_assets_folder(); ?>images/menu.png" class="img-responsive" alt="menu">
               </button>
            </p>
         </div>
         <div class="top-nav">
            <ul>
               <li v-for="number in contact.numbers">{{ number }}</li>
               <li v-for="mail in contact.mails"><a v-bind:href="'mailto:' + mail">{{ mail }}</a></li>
               <li @click="$root.LogInModal" v-if="status != 'connected'" style="cursor:pointer;">
                  Ingresar
               </li>
               <!-- <a href="javascript:FG.session_close();" v-if="status == 'connected'">Cerrar session</a> -->
            </ul>
         </div>
         <div class="overlay overlay-boxes">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="101%" viewBox="0 0 1440 806" preserveAspectRatio="none">
               <path d="m0.005959,200.364029l207.551124,0l0,204.342453l-207.551124,0l0,-204.342453z" />
               <path d="m0.005959,400.45401l207.551124,0l0,204.342499l-207.551124,0l0,-204.342499z" />
               <path d="m0.005959,600.544067l207.551124,0l0,204.342468l-207.551124,0l0,-204.342468z" />
               <path d="m205.752151,-0.36l207.551163,0l0,204.342437l-207.551163,0l0,-204.342437z" />
               <path d="m204.744629,200.364029l207.551147,0l0,204.342453l-207.551147,0l0,-204.342453z" />
               <path d="m204.744629,400.45401l207.551147,0l0,204.342499l-207.551147,0l0,-204.342499z" />
               <path d="m204.744629,600.544067l207.551147,0l0,204.342468l-207.551147,0l0,-204.342468z" />
               <path d="m410.416046,-0.36l207.551117,0l0,204.342437l-207.551117,0l0,-204.342437z" />
               <path d="m410.416046,200.364029l207.551117,0l0,204.342453l-207.551117,0l0,-204.342453z" />
               <path d="m410.416046,400.45401l207.551117,0l0,204.342499l-207.551117,0l0,-204.342499z" />
               <path d="m410.416046,600.544067l207.551117,0l0,204.342468l-207.551117,0l0,-204.342468z" />
               <path d="m616.087402,-0.36l207.551086,0l0,204.342437l-207.551086,0l0,-204.342437z" />
               <path d="m616.087402,200.364029l207.551086,0l0,204.342453l-207.551086,0l0,-204.342453z" />
               <path d="m616.087402,400.45401l207.551086,0l0,204.342499l-207.551086,0l0,-204.342499z" />
               <path d="m616.087402,600.544067l207.551086,0l0,204.342468l-207.551086,0l0,-204.342468z" />
               <path d="m821.748718,-0.36l207.550964,0l0,204.342437l-207.550964,0l0,-204.342437z" />
               <path d="m821.748718,200.364029l207.550964,0l0,204.342453l-207.550964,0l0,-204.342453z" />
               <path d="m821.748718,400.45401l207.550964,0l0,204.342499l-207.550964,0l0,-204.342499z" />
               <path d="m821.748718,600.544067l207.550964,0l0,204.342468l-207.550964,0l0,-204.342468z" />
               <path d="m1027.203979,-0.36l207.550903,0l0,204.342437l-207.550903,0l0,-204.342437z" />
               <path d="m1027.203979,200.364029l207.550903,0l0,204.342453l-207.550903,0l0,-204.342453z" />
               <path d="m1027.203979,400.45401l207.550903,0l0,204.342499l-207.550903,0l0,-204.342499z" />
               <path d="m1027.203979,600.544067l207.550903,0l0,204.342468l-207.550903,0l0,-204.342468z" />
               <path d="m1232.659302,-0.36l207.551147,0l0,204.342437l-207.551147,0l0,-204.342437z" />
               <path d="m1232.659302,200.364029l207.551147,0l0,204.342453l-207.551147,0l0,-204.342453z" />
               <path d="m1232.659302,400.45401l207.551147,0l0,204.342499l-207.551147,0l0,-204.342499z" />
               <path d="m1232.659302,600.544067l207.551147,0l0,204.342468l-207.551147,0l0,-204.342468z" />
               <path d="m-0.791443,-0.360001l207.551163,0l0,204.342438l-207.551163,0l0,-204.342438z" />
            </svg>
            <button type="button" class="overlay-close close-menu">Close</button>
            <nav>
               <ul>
                  <li>
                     <router-link :to="{ name: 'home-page' }" class="scroll close-menu " tag="a">Inicio</router-link>
                  </li>
                  <li>
                     <router-link :to="{ name: 'about-page' }" class="scroll close-menu" tag="a">Acerca de Nosotros</router-link>
                  </li>
                  <li>
                     <router-link :to="{ name: 'services-page' }" class="scroll close-menu" tag="a">Servicios</router-link>
                  </li>
                  <li v-if="status == 'connected'">
                     <router-link :to="{ name: 'me-home-page' }" class="scroll close-menu" tag="a" v-if="status == 'connected'">Mi cuenta</router-link>
                  </li>
                  <li>
                     <router-link :to="{ name: 'contact-page' }" class="scroll close-menu" tag="a">Contactar</router-link>
                  </li>
                  <li v-if="status == 'connected'"><a class="scroll close-menu" href="javascript:FG.session_close();">Cerrar session</a></li>
                  <li v-if="status != 'connected'" style="cursor:pointer;"><a class="scroll close-menu" @click="$root.LogInModal">Ingresar</a></li>
                  <!-- //
                     <li><a href="#expert" class="scroll">Experts</a></li>
                     <li><a href="#gallery" class="scroll">Gallery</a></li>
                     -->
                  <li style="display:none;">
                     <div class="login-form-manual"></div>
                  </li>
               </ul>
            </nav>
         </div>
         <div class="banner" v-if="$route.name == 'home-page'">
            <div class="agile1">
            </div>
            <div class="w3layouts_banner_info">
               <section class="wrapper agileits-w3layouts_wrapper_home text-center ">
                  <h1 class="w3l-logo"><a href="index.html"><i class="fa fa-envira" aria-hidden="true"></i> Monteverde LTDA </a></h1>
                  <p>Portal de Clientes</p>
                  <div class="sentence">
                     <div class="popEffect">
                        <span>Diseñamos el jardín de tus sueños</span>
                        <span>Hermosas Decoraciones</span>
                        <span>Diseño de jardineria</span>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>
      <!-- //banner -->
   </div>
</template>
<template id="page-home">
	<div>
		<!-- // 
         <div class="about-w3l" id="about">
         	<div class="container">
         		<h2 class="title-w3l">Servicios <span>Forestales</span></h2>
         		<div class="col-md-4 col-xs-4 col-news-top">
         			<div class="date-in">
         				<img class="img-responsive mix-in" src="<?php echo $website->get_assets_folder(); ?>images/c1.jpg" alt="">
         			</div>
         			<div class="text-about ab-agile1">
         				<h4>Mant. zonas verdes y jardines</h4>
         			</div>
         		</div>
         		<div class="col-md-4 col-xs-4 col-news-top">
         			<div class="date-in">
         				<img class="img-responsive mix-in" src="<?php echo $website->get_assets_folder(); ?>images/c2.jpg" alt="">
         			</div>
         			<div class="text-about ab-agile2">
         				<h4>Corte de Cèsped y Rocerìa</h4>
         			</div>
         		</div>
         		<div class="col-md-4 col-xs-4 col-news-top">
         			<div class="date-in">
         				<img class="img-responsive mix-in" src="<?php echo $website->get_assets_folder(); ?>images/c3.jpg" alt="">
         			</div>
         			<div class="text-about ab-agile3">
         				<h4>Reforestacion</h4>
         			</div>
         		</div>
         		<div class="clearfix"> </div>
         	</div>
         </div>
         -->
      <!-- // 
         <div class="projects">
         		<h2 class="title-w3l">Servicios <span>Ambientales</span></h2>
         	<div class="projects-grids">
         		<div class="sreen-gallery-cursual">
         			<ul id="flexiselDemo1">
         				<li>
         					<div class="item">
         						<div class="projects-agile-grid-info">
         							<img src="<?php echo $website->get_assets_folder(); ?>images/s1.jpg" alt="" />
         							<div class="projects-grid-caption">
         
         								<h4>Garden Care</h4>
         								<p>Our Beautiful Garden Care</p>
         							</div>
         						</div>
         					</div>
         				</li>
         				<li>
         					<div class="item">
         						<div class="projects-agile-grid-info">
         							<img src="<?php echo $website->get_assets_folder(); ?>images/s2.jpg" alt="" />
         							<div class="projects-grid-caption">
         
         								<h4>Garden Care</h4>
         								<p>Our Beautiful Garden Care</p>
         							</div>
         						</div>
         					</div>
         				</li>
         				<li>
         					<div class="item">
         						<div class="projects-agile-grid-info">
         							<img src="<?php echo $website->get_assets_folder(); ?>images/s3.jpg" alt="" />
         							<div class="projects-grid-caption">
         
         								<h4>Garden Care</h4>
         								<p>Our Beautiful Garden Care</p>
         							</div>
         						</div>
         					</div>
         				</li>
         				<li>
         					<div class="item">
         						<div class="projects-agile-grid-info">
         							<img src="<?php echo $website->get_assets_folder(); ?>images/s4.jpg" alt="" />
         							<div class="projects-grid-caption">
         
         								<h4>Garden Care</h4>
         								<p>Our Beautiful Garden Care</p>
         							</div>
         						</div>
         					</div>
         				</li>
         				<li>
         					<div class="item">
         						<div class="projects-agile-grid-info">
         							<img src="<?php echo $website->get_assets_folder(); ?>images/s5.jpg" alt="" />
         							<div class="projects-grid-caption">
         
         								<h4>Garden Care</h4>
         								<p>Our Beautiful Garden Care</p>
         							</div>
         						</div>
         					</div>
         				</li>
         				<li>
         					<div class="item">
         						<div class="projects-agile-grid-info">
         							<img src="<?php echo $website->get_assets_folder(); ?>images/s6.jpg" alt="" />
         							<div class="projects-grid-caption">
         
         								<h4>Garden Care</h4>
         								<p>Our Beautiful Garden Care</p>
         							</div>
         						</div>
         					</div>
         				</li>
         			</ul>
         		</div>
         	</div>
         </div>
         -->
      <!-- //
         <div class="testimonials">
         	<div class="container">
         		<h3 class="title-w3l">Comentarios del <span>cliente</span></h3>
         		<div class="w3_testimonials_grids">
         			<div id="slideshow" class="disabled">
         				<button class="previous"><b>« Previous</b></button>
         				<button class="next"><b>Next »</b></button>
         				<div class="strip">
         					<div class="slide sticky">
         						<div class="agileinfo_team_grid">
         							<div class="agileinfo_team_grid1">
         								<div class="agileinfo_team_grid1_text">
         									<div class="agileinfo_team_grid1_pos">
         										<img src="<?php echo $website->get_assets_folder(); ?>images/te1.jpg" alt=" " class="img-responsive" />
         									</div>
         									<div class="pos-mk-h3">
         										<h4>Pathrika <span>Henry</span></h4>
         									</div>
         									<div class="as-pos-botm">
         										<h5>Great! Gerden care service</h5>
         										<p>Sed eu sollicitudin ex Donec malesuada maur ac lectus molestie tristique, Sed eu sollicitudin ex Donec malesuada
         											maur ac lectus molestie tristique, Sed eu sollicitudin ex Donec malesuada maur ac lectus molestie tristique.</p>
         									</div>
         									<div class="clearfix"></div>
         								</div>
         							</div>
         						</div>
         					</div>
         					<div class="slide">
         						<div class="agileinfo_team_grid">
         							<div class="agileinfo_team_grid1">
         								<div class="agileinfo_team_grid1_text">
         									<div class="agileinfo_team_grid1_pos">
         										<img src="<?php echo $website->get_assets_folder(); ?>images/te2.jpg" alt=" " class="img-responsive" />
         									</div>
         									<div class="pos-mk-h3">
         										<h4>Khatmary <span>Doely</span></h4>
         									</div>
         									<div class="as-pos-botm">
         										<h5>Beautiful Garden</h5>
         										<p>Sed eu sollicitudin ex Donec malesuada maur ac lectus molestie tristique, Sed eu sollicitudin ex Donec malesuada
         											maur ac lectus molestie tristique, Sed eu sollicitudin ex Donec malesuada maur ac lectus molestie tristique.</p>
         									</div>
         									<div class="clearfix"></div>
         								</div>
         							</div>
         						</div>
         					</div>
         				</div>
         			</div>
         		</div>
         	</div>
         </div>
         <div class="footer-agiletop">
         	<div class="container">
         		<div class="w3agile_hire_left">
         			<h4>¿Necesita ayuda? Por favor contáctenos</h4>
         			<div class="w3agile_hire_right">
         				<a href="#mail" class="wthree-more w3more1 nina scroll" data-text="contratar"> 
         					<span>c</span><span>o</span><span>n</span><span>t</span> <span>r</span><span>a</span><span>t</span><span>a</span><span>r</span>
         				</a>
         			</div>
         		</div>
         	</div>
         </div>
          -->
   </div>
</template>
<template id="page-about">
   <div>
      <div class="aboutus-section">
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="aboutus">
                     <h2 class="aboutus-title">Somos MONTEVERDE</h2>
                     <p class="aboutus-text">En Monteverde,  somos expertos en proyectos ambientales, forestales y de paisajismo.  Gracias a nuestra experiencia durante más de 15 años, nos hemos posicionado en el mercado público y privado brindando servicios de calidad, basados en un sistema de gestión eficiente y de mejoramiento continuo, con el fin de garantizar la satisfacción de nuestros clientes, siempre en búsqueda de un medio ambiente sostenible. </p>
                     <p class="aboutus-text">Contamos con un equipo altamente capacitado, certificaciones,  infraestructura y parámetros de seguridad, que nos han permitido realizar gran número de estudios y  proyectos. </p>
                     <a class="aboutus-more" href="http://monteverdeltda.com/empresa-ambiental-y-forestal-medellin-antioquia-colombia/" target="_blank">Leer Màs</a>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="aboutus-banner">
                     <img src="https://www.uniquedesigns1.com/test/MundoChico/images/home1/about1.jpg" alt="">
                  </div>
               </div>
               <div class="col-md-5 col-sm-6 col-xs-12">
                  <div class="feature">
                     <div class="feature-box">
                        <div class="clearfix">
                           <div class="iconset">
                              <span class="glyphicon glyphicon-cog icon"></span>
                           </div>
                           <div class="feature-content">
                              <h4>Nuestra historia</h4>
                              <p>Somos una empresa constituida desde el año 2003, con sede en la ciudad de Medellín; la cual surge con el principal objetivo de prestar servicios profesionales con alta calidad humana y asesorías en áreas ambientales y forestales.</p>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <div class="feature-box">
                        <div class="clearfix">
                           <div class="iconset">
                              <span class="glyphicon glyphicon-cog icon"></span>
                           </div>
                           <div class="feature-content">
                              <h4>Nuestro compromiso</h4>
                              <p>
                                 Prestar siempre servicios de alta calidad humana, aportando nuestras ideas como complemento y apoyo al medio ambiente, cumpliendo con las exigencias técnicas, financieras y legales de nuestros clientes, basados en un sistema de gestión de calidad eficiente y buscando siempre el mejoramiento continuo de todo nuestro equipo de trabajo y servicios.
                              </p>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>
<template id="page-services">
   <div>
      <!-- gallery -->
      <div class="gallery" id="gallery">
         <div class="container">
            <h3 class="title-w3l">Nuestros <span>Servicios</span></h3>
            <div class="w3layouts_gallery_grids">
               <div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
                  <a href="<?php echo $website->get_assets_folder(); ?>images/g1.jpg" class="lsb-preview" data-lsb-group="header">
                     <div class="w3layouts_news_grid">
                        <img src="<?php echo $website->get_assets_folder(); ?>images/g1.jpg" alt=" " class="img-responsive">
                        <div class="w3layouts_news_grid_pos">
                           <div class="wthree_text">
                              <h3>Garden Care</h3>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
                  <a href="<?php echo $website->get_assets_folder(); ?>images/g2.jpg" class="lsb-preview" data-lsb-group="header">
                     <div class="w3layouts_news_grid">
                        <img src="<?php echo $website->get_assets_folder(); ?>images/g2.jpg" alt=" " class="img-responsive">
                        <div class="w3layouts_news_grid_pos">
                           <div class="wthree_text">
                              <h3>Garden Care</h3>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
                  <a href="<?php echo $website->get_assets_folder(); ?>images/g3.jpg" class="lsb-preview" data-lsb-group="header">
                     <div class="w3layouts_news_grid">
                        <img src="<?php echo $website->get_assets_folder(); ?>images/g3.jpg" alt=" " class="img-responsive">
                        <div class="w3layouts_news_grid_pos">
                           <div class="wthree_text">
                              <h3>Garden Care</h3>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
                  <a href="<?php echo $website->get_assets_folder(); ?>images/g4.jpg" class="lsb-preview" data-lsb-group="header">
                     <div class="w3layouts_news_grid">
                        <img src="<?php echo $website->get_assets_folder(); ?>images/g4.jpg" alt=" " class="img-responsive">
                        <div class="w3layouts_news_grid_pos">
                           <div class="wthree_text">
                              <h3>Garden Care</h3>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
                  <a href="<?php echo $website->get_assets_folder(); ?>images/g5.jpg" class="lsb-preview" data-lsb-group="header">
                     <div class="w3layouts_news_grid">
                        <img src="<?php echo $website->get_assets_folder(); ?>images/g5.jpg" alt=" " class="img-responsive">
                        <div class="w3layouts_news_grid_pos">
                           <div class="wthree_text">
                              <h3>Garden Care</h3>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
                  <a href="<?php echo $website->get_assets_folder(); ?>images/g6.jpg" class="lsb-preview" data-lsb-group="header">
                     <div class="w3layouts_news_grid">
                        <img src="<?php echo $website->get_assets_folder(); ?>images/g6.jpg" alt=" " class="img-responsive">
                        <div class="w3layouts_news_grid_pos">
                           <div class="wthree_text">
                              <h3>Garden Care</h3>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
                  <a href="<?php echo $website->get_assets_folder(); ?>images/g7.jpg" class="lsb-preview" data-lsb-group="header">
                     <div class="w3layouts_news_grid">
                        <img src="<?php echo $website->get_assets_folder(); ?>images/g7.jpg" alt=" " class="img-responsive">
                        <div class="w3layouts_news_grid_pos">
                           <div class="wthree_text">
                              <h3>Garden Care</h3>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
                  <a href="<?php echo $website->get_assets_folder(); ?>images/g8.jpg" class="lsb-preview" data-lsb-group="header">
                     <div class="w3layouts_news_grid">
                        <img src="<?php echo $website->get_assets_folder(); ?>images/g8.jpg" alt=" " class="img-responsive">
                        <div class="w3layouts_news_grid_pos">
                           <div class="wthree_text">
                              <h3>Garden Care</h3>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
                  <a href="<?php echo $website->get_assets_folder(); ?>images/g9.jpg" class="lsb-preview" data-lsb-group="header">
                     <div class="w3layouts_news_grid">
                        <img src="<?php echo $website->get_assets_folder(); ?>images/g9.jpg" alt=" " class="img-responsive">
                        <div class="w3layouts_news_grid_pos">
                           <div class="wthree_text">
                              <h3>Garden Care</h3>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="clearfix"> </div>
            </div>
         </div>
      </div>
      <!-- //gallery -->
   </div>
</template>
<template id="page-contact">
   <div>
      <!-- contact -->
      <div class="contact" id="mail">
         <div class="container">
            <h3 class="title-w3l">Envíenos un <span>Mensaje</span></h3>
            <div class="map-pos">
               <div class="col-md-4 address-row">
                  <div class="col-xs-2 address-left">
                     <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                  </div>
                  <div class="col-xs-10 address-right">
                     <h5>Visitanos</h5>
                     <p>Calle 33 aa # 80 b 34 Int 201, Laureles, Medellín -COL</p>
                     <p>Horario de atención. Lun - Vie: 9am - 5pm</p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
               <div class="col-md-4 address-row w3-agileits">
                  <div class="col-xs-2 address-left">
                     <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                  </div>
                  <div class="col-xs-10 address-right">
                     <h5>Escribenos</h5>
                     <p><a href="mailto:atencionalcliente@monteverdeltda.com"> atencionalcliente@monteverdeltda.com</a></p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
               <div class="col-md-4 address-row">
                  <div class="col-xs-2 address-left">
                     <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                  </div>
                  <div class="col-xs-10 address-right">
                     <h5>Habla con nosotros</h5>
                     <p>(57) 301 720 65 60</p>
                     <p>(574) 413 90 26</p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
               <div class="clearfix"> </div>
            </div>
            <form action="#" method="post">
               <div class="col-sm-6 contact-left">
                  <input type="text" name="Name" placeholder="Your Name" required="">
                  <input type="email" name="Email" placeholder="Email" required="">
                  <input type="text" name="Mobile Number" placeholder="Mobile Number" required="">
               </div>
               <div class="col-sm-6 contact-right">
                  <textarea name="Message" placeholder="Message" required=""></textarea>
                  <input type="submit" value="Submit">
               </div>
               <div class="clearfix"></div>
            </form>
         </div>
      </div>
      <!-- //contact -->
   </div>
</template>
<template id="page-me-home">
	<div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9 target" style="" contenteditable="false">
				<hr>
					<div class="panel panel-default">
						<div class="panel-heading">Panel central</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6 w3ls_banner_bottom_grids">
									<router-link :to="{ name: 'me-accounts-page' }" class="agile_offer_grid" tag="div" style="cursor:pointer;" >
										<div class="agile_offer_grid_pos"><p><i class="fa fa-tachometer" aria-hidden="true"></i></p></div>
										<div class="wthree_offer_grid1">
											<h4>Mis Cuentas</h4>
											<p class="w3_agileits_service_para">Aquì encontraras tus cuentas principales, datos de contacto y preferencias.</p>
										</div>
										<div class="clearfix"> </div>
									</router-link>
									<router-link :to="{ name: 'me-requests-list-page' }" class="agile_offer_grid" tag="div" style="cursor:pointer;" >
										<div class="agile_offer_grid_pos"><p><i class="fa fa-shopping-bag" aria-hidden="true"></i></p></div>
										<div class="wthree_offer_grid1">
											<h4>Mis Solicitudes</h4>
											<p class="w3_agileits_service_para">Todas sus solicitudes y con sus cotizaciones.</p>
										</div>
										<div class="clearfix"> </div>
									</router-link>
								</div>
								<div class="col-md-6 w3ls_banner_bottom_grids">
									<router-link :to="{ name: 'me-invoices-list-page' }" class="agile_offer_grid" tag="div" style="cursor:pointer;" >
										<div class="agile_offer_grid_pos"><p><i class="fa fa-tachometer" aria-hidden="true"></i></p></div>
										<div class="wthree_offer_grid1">
											<h4>Mis Facturas</h4>
											<p class="w3_agileits_service_para">Encuentre todas tus facturas en un solo lugar.</p>
										</div>
										<div class="clearfix"> </div>
									</router-link>
									<router-link :to="{ name: 'me-requests-list-page' }" class="agile_offer_grid" tag="div" style="cursor:pointer;" >
										<div class="agile_offer_grid_pos"><p><i class="fa fa-shopping-bag" aria-hidden="true"></i></p></div>
										<div class="wthree_offer_grid1">
											<h4>Mi Calendario</h4>
											<p class="w3_agileits_service_para">Encuentre toda la informacion de sus programaciones y notifique un cambio de ser necesario.</p>
										</div>
										<div class="clearfix"> </div>
									</router-link>
								</div>
							<div class="clearfix"> </div>
						 </div>
					  </div>
				   </div>
				<div class="panel panel-default">
					<div class="panel-heading">Starfox221's Bio</div>
					<div class="panel-body"> A long description about me.</div>
				</div>
				<div class="panel panel-default target">
					<div class="panel-heading" contenteditable="false">Pets I Own</div>
					<div class="panel-body">
						 <div class="row">
							<div class="col-md-4">
							   <div class="thumbnail">
								  <img alt="300x200" src="http://lorempixel.com/600/200/people">
								  <div class="caption">
									 <h3>Rover</h3>
									 <p>Cocker Spaniel who loves treats.</p>
									 <p></p>
								  </div>
							   </div>
							</div>
							<div class="col-md-4">
							   <div class="thumbnail">
								  <img alt="300x200" src="http://lorempixel.com/600/200/city">
								  <div class="caption">
									 <h3>Marmaduke</h3>
									 <p>Is just another friendly dog.</p>
									 <p></p>
								  </div>
							   </div>
							</div>
							<div class="col-md-4">
							   <div class="thumbnail">
								  <img alt="300x200" src="http://lorempixel.com/600/200/sports">
								  <div class="caption">
									 <h3>Rocky</h3>
									 <p>Loves catnip and naps. Not fond of children.</p>
									 <p></p>
								  </div>
							   </div>
							</div>
						 </div>
					</div>
				</div>
            </div>
			<div id="push"></div>
		</div>
	</div>
</div>
</template>
<template id="page-me-accounts">
	<div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">					
					  <div class="jumbotron">
						 <div class="text-center">
							<h1 class="page-header">MIS CUENTAS</h1>
							<p class="lead">Gestiona tus cuentas de una manera fácil y rápida.</p>
						 </div>
						 <div class="row">
							<div class="col-sm-12 col-md-6 well col-lg-6 well pricing-table" v-for="(item, itemKey) in busineses">
							   <div class="pricing-table-holder">
								  <center>
									 <!-- <img src="http://www.placehold.it/100X100" class="img-responsive img-circle" alt=""> -->
									 <h3>{{ item.client.names }}</h3>
									 <p class="caption">
										{{ item.client.type.name }}
									 </p>
								  </center>
							   </div>
							   <div class="custom-button-group" style="">
								  <div class="col-md-8 col-sm-9" style="padding:0;">
									 <button type="button" class="btn btn-royal-blue btn-block dropdown-toggle" style="border-radius:0;" data-toggle="dropdown" aria-expanded="false">
									 Select Bundle
									 <span class="caret"></span>
									 </button>
									 <ul class="dropdown-menu" role="menu">
										<li><a href="#">Dropdown link</a></li>
										<li><a href="#">Dropdown link</a></li>
									 </ul>
								  </div>
								  <div class="col-md-4 col-sm-3" style="padding:0;">
									 <button class="btn btn-primary  btn-block" style="border-radius:0;" >
									 Get It
									 </button>
								  </div>
							   </div>
							   <div class="pricing-feature-list">
								  <ul class="list-group">
									 <li class="list-group-item"><b>{{ item.client.identification_type.name }}: </b><br> {{ item.client.identification_number }}</li>
									 <li class="list-group-item"><b>Direccion Principal: </b><br> {{ item.client.address_principal }}, {{ item.client.address_invoices_city.name }}, {{ item.client.address_principal_department.name }}</li>
									 <li class="list-group-item"><b>Direccion Facturacion: </b><br> {{ item.client.address_invoices }}, {{ item.client.address_invoices_city.name }}, {{ item.client.address_invoices_department.name }}</li>
									 <li class="list-group-item"><b>Responsable: </b><br> {{ item.client.represent_legal.first_name }} {{ item.client.represent_legal.second_name }} {{ item.client.represent_legal.surname }} {{ item.client.represent_legal.second_surname }}</li>
									 <li class="list-group-item"><b>Contacto: </b><br> {{ item.client.contact.first_name }} {{ item.client.contact.second_name }} {{ item.client.contact.surname }} {{ item.client.contact.second_surname }}</li>
									 <li class="list-group-item" v-if="item.client.audit_enabled == 1"><i class="fa fa-check"></i> Interventoria Habilitada</li>
									 <!-- // <li class="list-group-item"> Solicitar Interventoria</li> -->
									 <!-- <li class="list-group-item" v-for="(v, k) in item.client"><b>{{ k }}: </b><br> {{ v }}</li> -->
								  </ul>
							   </div>
							   <div class="price-table-button-holder">
								  <router-link 
									 tag="button" 
									 class="btn btn-info btn-block" 
									 v-bind:to="{ name: 'me-account-view-page', params: { account_id: item.id } }">
									 <i class="fa fa-user-alt"></i> 
									 VER TODO
								  </router-link>
							   </div>
							</div>
						 </div>
					  </div>
				</div>
			</div>
		</div>
	</div>
</template>
<template id="page-me-account-view">
   <div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
						   <div class="">
							  <component-menu-meaccount></component-menu-meaccount>
						   </div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
						   <div class="panel panel-info">
							  <div class="panel-heading">
								 <h3 class=" text-center">
									<b>{{ post.names }}</b>
									<router-link class="p-2 btn btn-sm btn-info btn-circle" v-bind:to="{ name: 'me-account-edit-page', params: { account_id: $route.params.account_id } }" type="button">
									   <i class="fa fa-edit"></i>
									   <!-- // Modificar Datos -->
									</router-link>
								 </h3>
								 <br>
								 <table class="table table-responsive">
									<tr>
									   <td><b>TIPO DE CLIENTE:</b></td>
									   <td>{{ post.type.name }}</td>
									   <td><b>TIPO DE DOCUMENTO</b></td>
									   <td>{{ post.identification_type.name }}</td>
									</tr>
									<tr>
									   <td><b>NUMERO DE DOCUMENTO</b></td>
									   <td>{{ post.identification_number }}</td>
									   <td><b>INTERVENTORIA HABILITADA</b></td>
									   <td v-if="post.audit_enabled == 1">Habilitada</td>
									   <td v-if="post.audit_enabled == 0">No Habilitada</td>
									</tr>
								 </table>
							  </div>
							  <div class="panel-body">
								 <div class="row">
									<div class="col-sm-12 col-md-6 col-lg-6">
									   <table class="table table-user-information">
										  <tbody>
											 <tr>
												<th colspan="2" class="text-center">Direccion Principal</th>
											 </tr>
											 <tr>
												<td colspan="2" class="text-center">{{ post.address_principal }}</td>
											 </tr>
											 <tr>
												<td>Departamento:</td>
												<td>{{ post.address_principal_department.name }}</td>
											 </tr>
											 <tr>
												<td>Ciudad:</td>
												<td>{{ post.address_principal_city.name }}</td>
											 </tr>
											 <tr>
												<th colspan="2" class="text-center">Representante Legal</th>
											 </tr>
											 <tr>
												<td>Nombre:</td>
												<td>{{ post.represent_legal.first_name }} {{ post.represent_legal.second_name }} {{ post.represent_legal.surname }} {{ post.represent_legal.second_surname }} </td>
											 </tr>
											 <tr>
												<td>Correo Electronico:</td>
												<td>{{ post.represent_legal.mail }}</td>
											 </tr>
											 <tr>
												<td>Numeros de Teléfonos</td>
												<td>{{ post.represent_legal.phone }} (Landline)<br><br>{{ post.represent_legal.phone_mobile }} (Mobile)</td>
											 </tr>
										  </tbody>
									   </table>
									   <a v-if="post.audit_enabled == 1" href="#" class="btn btn-primary">Mis Interventores</a>
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6">
									   <table class="table table-user-information">
										  <tbody>
											 <tr>
												<th colspan="2" class="text-center">Direccion de Facturacion</th>
											 </tr>
											 <tr>
												<td colspan="2" class="text-center">{{ post.address_invoices }}</td>
											 </tr>
											 <tr>
												<td>Departamento:</td>
												<td>{{ post.address_invoices_department.name }}</td>
											 </tr>
											 <tr>
												<td>Ciudad:</td>
												<td>{{ post.address_invoices_city.name }}</td>
											 </tr>
											 <tr>
												<th colspan="2" class="text-center">Contacto Principal</th>
											 </tr>
											 <tr>
												<td>Nombre:</td>
												<td>{{ post.contact.first_name }} {{ post.contact.second_name }} {{ post.contact.surname }} {{ post.contact.second_surname }} </td>
											 </tr>
											 <tr>
												<td>Correo Electronico:</td>
												<td>{{ post.contact.mail }}</td>
											 </tr>
											 <tr>
												<td>Numeros de Teléfonos</td>
												<td>{{ post.contact.phone }} (Landline)<br><br>{{ post.contact.phone_mobile }} (Mobile)</td>
											 </tr>
										  </tbody>
									   </table>
									   <a v-if="post.audit_enabled == 1" href="#" class="btn btn-primary">Mis Interventores</a>
									</div>
								 </div>
							  </div>
						   </div>
						</div>
					 </div>
				</div>
			</div>
		</div>
   </div>
</template>
<template id="page-me-account-update">
   <div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">
					<br>
				   <div class="panel panel-default">
					  <div class="panel-heading">Actualizacion de Datos</div>
					  <div class="panel-body">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12">
							   <div class="form-group">
								  <label for="">Nombre Completo del Cliente / Empresa</label>
								  <input type="text" class="form-control" required v-model="post.names" />
							   </div>
							</div>
						 </div>
						 <div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6">
							   <div class="form-group">
								  <label for="">Representante Legal</label>
								  <select class="form-control" v-model="post.represent_legal">
									 <option value="0">Elije una opcion...</option>
									 <option v-bind:value="item.id" v-for="item in list_crew">
										{{ item.identification_number }} - {{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }}
									 </option>
								  </select>
							   </div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6">
							   <div class="form-group">
								  <label>Contacto Principal</label>
								  <select class="form-control" v-model="post.contact">
									 <option value="0">Elije una opcion...</option>
									 <option v-bind:value="item.id" v-for="item in list_crew">
										{{ item.identification_number }} - {{ item.first_name }} {{ item.second_name }} {{ item.surname }} {{ item.second_surname }}
									 </option>
								  </select>
							   </div>
							</div>
						 </div>
						 <div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6">
							   <h4>Direccion Principal</h4>
							   <hr>
							   <div class="form-row">
								  <div class="col-md-6">
									 <div class="form-group">
										<label class="control-label">Departamento</label>
										<select class="form-control" @change="departmentChangeToCityPrincipal" v-model="post.address_principal_department">
										   <option value="0">Elije una opcion...</option>
										   <option v-bind:value="item.id" v-for="item in list_departments">{{ item.name }}</option>
										</select>
									 </div>
								  </div>
								  <div class="col-md-6">
									 <div class="form-group">
										<label class="control-label">Ciudad</label>
										<select class="form-control" v-model="post.address_principal_city">
										   <option value="0">Elije una opcion...</option>
										   <option v-bind:value="item.id" v-for="item in list_citysPrincipal">{{ item.name }}</option>
										</select>
									 </div>
								  </div>
								  <div class="col-md-12">
									 <div class="form-group">
										<label class="control-label">Direccion</label>
										<input type="text" class="form-control" required v-model="post.address_principal" />
									 </div>
								  </div>
							   </div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6">
							   <h4>Direccion Facturacion</h4>
							   <hr>
							   <div class="form-row">
								  <div class="col-md-6">
									 <div class="form-group">
										<label class="control-label">Departamento</label>
										<select class="form-control" @change="departmentChangeToCityInvoice" v-model="post.address_invoices_department">
										   <option value="0">Elije una opcion...</option>
										   <option v-bind:value="item.id" v-for="item in list_departments">{{ item.name }}</option>
										</select>
									 </div>
								  </div>
								  <div class="col-md-6">
									 <div class="form-group">
										<label class="control-label">Ciudad</label>
										<select class="form-control" v-model="post.address_invoices_city">
										   <option value="0">Elije una opcion...</option>
										   <option v-bind:value="item.id" v-for="item in list_citysInvoice">{{ item.name }}</option>
										</select>
									 </div>
								  </div>
								  <div class="col-md-12">
									 <div class="form-group">
										<label class="control-label">Direccion</label>
										<input type="text" class="form-control" required v-model="post.address_invoices" />
									 </div>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
					  <div class="panel-footer">
						   <div class="btn-group flex-row flex-row-reverse-not">
							  <router-link class="btn btn-secondary btn-circle" v-bind:to="{ name: 'me-account-view-page', params: { account_id: $route.params.account_id } }" type="button" tag="button">
								 <i class="fa fa-times"></i>
								 Cancelar
							  </router-link>
							  <button class="p-2 btn btn-success btn-circle" @click="updateData" type="button">
							  <i class="fa fa-save fa-lg"></i> 
							  Guardar
							  </button>
						   </div>
					  </div>
				   </div>

				</div>
			</div>
		</div>
   </div>
</template>
<template id="page-me-contacts">
   <div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
						   <div class="">
							  <component-menu-meaccount></component-menu-meaccount>
						   </div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
						   <h1 class="text-center">
							  <span class="icons glyphicon glyphicon-user" aria-hidden="true"></span>
							  Mis Contactos 
						   </h1>
						   <hr>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
							<div class="row">
								<div class="col-sm-6" v-for="item in posts" style="padding: 15px;">
									<div class="panel panel-default">
										<div class="panel-heading text-right">
											<b class="title-contact">
												{{ item.contact.first_name }} {{ item.contact.second_name }} {{ item.contact.surname }} {{ item.contact.second_surname }} 
												<span class="icons glyphicon glyphicon-user" aria-hidden="true"></span>
											 </b>
											 <p>Relacion: {{ item.type_contact.name }} - {{ item.contact.identification_type.name }} - {{ item.contact.identification_number }}</p>
										</div>
										<div class="panel-body">
											 <div>
												<div class="col-md-6">
												   <a href="#"><i class="glyphicon glyphicon-phone icons"></i> {{ item.contact.phone }}</a>
												</div>
												<div class="col-md-6 pull-right">
												   <a href="#"><i class="glyphicon glyphicon-phone icons"></i> {{ item.contact.phone_mobile }}</a>
												</div>
											 </div>
											 <div>
												<div class="col-md-6">
												   <a href="#"><i class="glyphicon glyphicon-envelope icons"></i> {{ item.contact.mail }}</a>
												</div>
												<div class="col-md-6 pull-right">
												   <a href="#"><i class="glyphicon glyphicon-home icons"></i> {{ item.contact.department.name }}, {{ item.contact.city.name }}</a>
												</div>
											 </div>
										</div>
									</div>
								</div>
						   
							
							  <div class="col-sm-12" v-for="item in posts" style="padding: 15px;">
								 
								 
								 <!-- //
									<router-link tag="a" class="btn btn-sm btn-info float-right" v-bind:to="{ name: 'Business-Contacts-Single', params: { busineses_id: $route.params.busineses_id, contact_id: item.contact.id } }">
										<i class="fas fa-eye fa-lg"></i>
									</router-link>
									-->
								 <br>
							  </div>
						   </div>
						</div>
					 </div>
				</div>
			</div>
		</div>
   </div>
</template>
<style scope="page-me-contacts">
   .icons {
	   padding: 8px;
	   border-radius: 50%;
	   background-color: #3c763d;
	   color: white;
	   border: 2px solid;
   }
</style>
<template id="page-me-contacts-add">
   <div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">
					<div class="row">
						<div class="col-md-12">
						   <component-menu-meaccount></component-menu-meaccount>
						</div>
						<div class="col-md-12">
						   <div class="form-row">
							  <div class="col-md-6">
								 <div class="form-group">
									<label class="control-label">Tipo de Documento (*)</label>
									<select class="form-control" v-model="post.identification_type">
									   <option value="0">Elije una opcion...</option>
									   <option v-bind:value="item.id" v-for="item in list_types_identifications">{{ item.name }}</option>
									</select>
								 </div>
							  </div>
							  <div class="col-md-6">
								 <div class="form-group">
									<label class="control-label">Nro. Documento (*)</label>
									<input type="text" class="form-control" required v-model="post.identification_number" />
								 </div>
							  </div>
							  <div class="col-md-6">
								 <div class="form-group">
									<label class="control-label">Primer Nombre (*)</label>
									<input type="text" class="form-control" required v-model="post.first_name" />
								 </div>
							  </div>
							  <div class="col-md-6">
								 <div class="form-group">
									<label class="control-label">Segundo Nombre</label>
									<input type="text" class="form-control" required v-model="post.second_name" />
								 </div>
							  </div>
							  <div class="col-md-6">
								 <div class="form-group">
									<label class="control-label">Primer Apellido (*)</label>
									<input type="text" class="form-control" required v-model="post.surname" />
								 </div>
							  </div>
							  <div class="col-md-6">
								 <div class="form-group">
									<label class="control-label">Segundo Apellido</label>
									<input type="text" class="form-control" required v-model="post.second_surname" />
								 </div>
							  </div>
							  <div class="col-md-6">
								 <div class="form-group">
									<label class="control-label">Teléfono (*)</label>
									<input type="text" class="form-control" required v-model="post.phone" />
								 </div>
							  </div>
							  <div class="col-md-6">
								 <div class="form-group">
									<label class="control-label">Teléfono Móvil</label>
									<input type="text" class="form-control" required v-model="post.phone_mobile" />
								 </div>
							  </div>
							  <div class="col-md-12">
								 <div class="form-group">
									<label class="control-label">Correo Electronico</label>
									<input type="text" class="form-control" required v-model="post.mail" />
								 </div>
							  </div>
							  <div class="col-md-6">
								 <div class="form-group">
									<label class="control-label">Departamento</label>
									<select class="form-control" @change="departmentChangeToCity" v-model="post.department" >
									   <option value="0">Elije una opcion...</option>
									   <option v-bind:value="item.id" v-for="item in list_departments">{{ item.name }}</option>
									</select>
								 </div>
							  </div>
							  <div class="col-md-6">
								 <div class="form-group">
									<label class="control-label">Ciudad</label>
									<select class="form-control" v-model="post.city">
									   <option value="0">Elije una opcion...</option>
									   <option v-bind:value="item.id" v-for="item in list_citys">{{ item.name }}</option>
									</select>
								 </div>
							  </div>
							  <div class="col-md-6">
								 <div class="form-group">
									<label class="control-label">Direccion</label>
									<input type="text" class="form-control" required v-model="post.address" />
								 </div>
							  </div>
							  <div class="col-md-6">
								 <div class="form-group">
									<label class="control-label">Relacion (*)</label>
									<select class="form-control" v-model="post_crew.type_contact">
									   <option value="0">Elije una opcion...</option>
									   <option v-bind:value="item.id" v-for="item in list_types_contacts">{{ item.name }}</option>
									</select>
								 </div>
							  </div>
							  <div class="col-md-12">
								 <div class="form-group">
									<label class="control-label">Direccion Normalizada</label>
									<input type="text" class="form-control" required v-model="post.geo_address" readonly="" />
								 </div>
							  </div>
						   </div>
						   <hr>
						   <div class="d-flex flex-row-reverse">
							  <router-link tag="button" type="button" class="btn btn-secondary btn-circle" v-bind:to="{ name: 'me-contacts-page' }">
								 <i class="fas fa-times fa-lg"></i>
								 Cancelar
							  </router-link>
							  <button @click="createContactBusineses" class="p-2 btn btn-success btn-circle" type="button">
							  <i class="fas fa-save fa-lg"></i>
							  Guardar
							  </button>
						   </div>
						</div>
					 </div>
				</div>
			</div>
		</div>
   </div>
</template>
<template id="page-me-requests">
   <div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">
					<div class="row">
						<div class="col-md-12">
						   <component-menu-meaccount></component-menu-meaccount>
						</div>
						<div class="col-md-12">
						   <table class="table table-hover">
							  <thead>
								 <tr>
									<th scope="col">#</th>
									<th scope="col">Direccion</th>
									<th scope="col"></th>
								 </tr>
							  </thead>
							  <tbody>
								 <tr v-for="item in posts">
									<th scope="row">{{ $parent.zfill(item.id, 11) }}</th>
									<td>{{ item.address_invoice }}</td>
									<td>
									   <router-link class="btn btn-sm btn-info" v-bind:to="{ name: 'me-requests-view-page', params: { account_id: $route.params.account_id, request_id: item.id } }">
										  <i class="fa fa-eye"></i>
									   </router-link>
									</td>
								 </tr>
							  </tbody>
						   </table>
						</div>
					 </div>
				</div>
			</div>
		</div>
   </div>
</template>
<template id="page-me-requests-view">
   <div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">
					<div class="row">
						<div class="col-md-12">
						   <component-menu-meaccount></component-menu-meaccount>
						</div>
						<b-col sm="12">
							<div style="margin-left:auto; margin-right:auto; width:95%;"><br/>
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-title">Solicitud #: {{ post.client }}{{ $parent.zfill(post.id, 11) }}</h3>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-8">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h3 class="panel-title">Contacto</h3>
												</div>
												<table class="table table-bordered">
													<tr>
														<td class="col-xs-3">Nombres</td>
														<td>
															{{ post.contact.first_name }} {{ post.contact.second_name }} 
														</td>
														<td class="col-xs-3">Apellidos</td>
														<td>
															{{ post.contact.surname }} {{ post.contact.second_surname }} 
														</td>
													</tr>
													 <tr>
														<td class="col-xs-3">Telefono Fijo</td>
														<td>{{ post.contact.phone }}</td>
														<td class="col-xs-3">Telefono Movil</td>
														<td>{{ post.contact.phone_mobile }}</td>
													</tr>
													 <tr>
														<td class="col-xs-3">Correo Electronico</td>
														<td>{{ post.contact.mail }}</td>
													</tr>
												</table>
											</div>
										</div>
										<div class="col-md-4">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h3 class="panel-title">Notas / Observaciones</h3>
												</div>
												<div class="panel-body">
													<p>{{ post.request_notes }}</p>
												</div>
											</div>
										</div>
									</div>
								</div> 
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default">
								 			  <div class="panel-heading">
												<h3 class="panel-title">Direcciones y Servicios</h3>
											  </div>
													  
												<ul class="list-unstyled text-left multilevels">
													<li v-for="address in post.addresses">
														<ul>
															<li><b>{{ address.address }}</b>
															</li>
															<li v-for="service in address.services">
																<ul>
																	<li>• {{ service.name }}</li>
																	<li>
																		<ul>
																			<li><span>{{ service.repeat.name }}</span></li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
												</ul>
												
											  <table class="table table-bordered">
												<tr>
													<td class="col-xs-3">Name of Traveller(s)</td>
													<td><input class="form-control"></input></td>
												</tr>
												 <tr>
													<td class="col-xs-3">Department</td>
													<td><input class="form-control"></input></td>
												</tr>
												 <tr>
													<td class="col-xs-3">Job No / Q Number</td>
													<td><input class="form-control"></input></td>
												</tr>
												 <tr>
													<td class="col-xs-3">Description of Trip</td>
													<td><textarea class="form-control"></textarea></td>
												</tr>
											  </table>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default">
								 			  <div class="panel-heading">
												<h3 class="panel-title">Pre-Approval</h3>
											  </div>
											  <table class="table table-bordered">
												<tr>
													<td class="col-xs-3">Name of Traveller(s)</td>
													<td><input class="form-control"></input></td>
												</tr>
												 <tr>
													<td class="col-xs-3">Department</td>
													<td><input class="form-control"></input></td>
												</tr>
												 <tr>
													<td class="col-xs-3">Job No / Q Number</td>
													<td><input class="form-control"></input></td>
												</tr>
												 <tr>
													<td class="col-xs-3">Description of Trip</td>
													<td><textarea class="form-control"></textarea></td>
												</tr>
											  </table>
											</div>
										</div>
									</div>
							<div class="row">
							  <div class="col-md-6">
								<div class="panel panel-default">
							  <div class="panel-heading">
								<h3 class="panel-title">Car Hire</h3>
							  </div>
							  <table class="table table-bordered">
								<tr>
									<td class="col-xs-3">Company (if known)</td>
									<td><input class="form-control"></input></td>
											 <td class="col-xs-3">Car Type (if known)</td>
									<td><input class="form-control"></input></td>
								</tr>
								 <tr>
									<td class="col-xs-3">City/Town</td>
									<td><input class="form-control"></input></td>
											 <td class="col-xs-3">Country</td>
									<td><input class="form-control"></input></td>
								</tr>
								 <tr>
									<td class="col-xs-3">Drop Off Location</td>
									<td><input class="form-control"></input></td>
									<td class="col-xs-3">Date and Time</td>
									<td><input class="form-control"></input></td>
								</tr>
								 <tr>
									<td class="col-xs-3">Collection Location</td>
									<td><input class="form-control"></input></td>
									<td class="col-xs-3">Date and Time</td>
									<td><input class="form-control"></input></td>
								</tr>
								   <tr>
									<td class="col-xs-3">Estimated Costs</td>
									<td colspan="3"><textarea class="form-control"></textarea></td>
									
								</tr>
							  </table>
							</div>
							</div>
							<div class="col-md-6"><button type="submit" class="btn btn-success btn-lg">Submit Travel & Accommodation Request</button></div>
								</div>
							</div>
							</div>
						</b-col>
						<b-col sm="12">
							<div class="col-sm-12">
								<b-card class="mt-3">
								  <pre class="m-0">{{ post }}</pre>
								</b-card>
							</div>
						</b-col>
							<!-- //
								<div class="col-md-8">
								   <div class="panel panel-default">
									  <div class="panel-heading">PROPUESTAS ({{ post.quotations.length }})</div>
									  <div class="panel-body">
										  	<table class="table table-sm table-bordered">
											  <thead>
												 <tr>
													<th scope="col">#</th>
													<th scope="col">Estado</th>
													<th scope="col">Creacion</th>
													<th scope="col">Vigencia</th>
													<th scope="col"></th>
												 </tr>
											  </thead>
											  <tbody>
												 <tr v-for="item in post.quotations">
													<th scope="row">{{ $parent.zfill(item.id, 11) }}</th>
													<td>{{ item.status.name }}</td>
													<td>{{ item.create }}</td>
													<td>{{ item.validity }}</td>
													<td>
													   <router-link class="btn btn-sm btn-info" v-bind:to="{ name: 'me-requests-add-page', params: { account_id: $route.params.account_id, request_id: $route.params.request_id, quotation_id: item.id, } }">
														  <i class="fas fa-eye"></i>
													   </router-link>
													</td>
												 </tr>
											  </tbody>
										   </table>
									  </div>
									  <div class="panel-footer">
									  </div>
								   </div>
								</div>
								<div class="col-md-4">
								   <div class="panel panel-default">
									  <div class="panel-heading">SERVICIOS ({{ post.services_requests.length }})</div>
									  <div class="panel-body">
										  <table class="table table-hover">
											 <thead>
												<tr>
												   <th scope="col">#</th>
												   <th scope="col">Nombre</th>
												   <th scope="col">Repeticion</th>
												</tr>
											 </thead>
											 <tbody>
												<tr v-for="service in post.services_requests">
												   <th scope="row"></th>
												   <td>{{ service.service.name }}</td>
												   <td>{{ service.repeat.name }}</td>
												</tr>
											 </tbody>
										  </table>
									  </div>
									  <div class="panel-footer">
									  </div>
								   </div>
								</div>
								-->
					 </div>
				</div>
			</div>
		</div>
   </div>
</template>

<template id="page-me-requests-add">
   <div>
		<div class="container">
			<div class="row">
				<b-col sm="3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</b-col>
				<b-col sm="9">
					<b-row>
						<b-col sm="12">
						   <component-menu-meaccount></component-menu-meaccount>
						</b-col>
						<b-col sm="7">
							<b-form @submit="onSubmit" @reset="onReset" v-if="show">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="card-title">
											<i class="glyphicon glyphicon-search text-gold"></i>
											<b>INFORMACION BASICA</b>
										</h4>
									</div>
									<div class="panel-body">
										<b-row>
											<b-col sm="12">
												<b-form-group id="input-group-3" label="Contacto de la Solicitud" label-for="input-3">
													<select class="form-control custom-select" v-model="form.contact" name="contact">
													<option value="0">Elije una opcion...</option>
													<option v-bind:value="item.contact.id" v-for="item in list_contacts">
														{{ item.contact.first_name }} 
														{{ item.contact.second_name }} 
														{{ item.contact.surname }} 
														{{ item.contact.second_surname }} 
													</option>
													</select>
												</b-form-group>
												
												<b-form-group 
												id="input-group-3" 
												label="Notas de la Solicitud" 
												label-for="input-3" 
												description=".">
													<b-form-textarea
													  id="textarea"
													  v-model="form.request_notes"
													  placeholder="Ingrese aquí las notas adicionales, observaciones, etc.."
													  rows="3"
													  max-rows="6" 
													></b-form-textarea>
												</b-form-group>
												
											</b-col>
										</b-row>
									</div>
									<div class="panel-footer ">
										<div class="row">
											<div class="col-sm-12">
												<div class="pull-right">
													<b-button type="submit" variant="primary"><i class="fa fa-paper-plane"></i>  Enviar Solicitud </b-button>
													<b-button type="reset" variant="danger">Reset</b-button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</b-form>
						</b-col>
						<b-col sm="5">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="card-title">
										<i class="glyphicon glyphicon-search text-gold"></i>
										<b>SERVICIOS A SOLICITAR</b>
									</h4>
								</div>
								<div class="panel-body">
									<ul class="list-unstyled multilevels">
										<li v-for="address in form.addresses">
											<ul>
												<li><b>{{ address.address }}</b>
												</li>
												<li v-for="service in address.services">
													<ul>
														<li>• {{ service.name }}</li>
														<li>
															<ul>
																<li><span>{{ service.repeat.name }}</span></li>
															</ul>
														</li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="panel-footer">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<p>Toda la información, incluyendo precios, servicios, características, opciones, planos y disponibilidad están sujetos a cambio sin previo aviso. </p>
								</div>
							</div>
						</b-col>
						<b-col sm="12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="card-title">
										<i class="glyphicon glyphicon-lock text-gold"></i>
										<b>AGREGAR DIRECCIONES DETALLES</b>
									</h4>
								</div>
								<div class="panel-body">
									<b-row>
										<b-col sm="6">
											<div class="row">
												<div class="col-md-12">
													<p>¿Que servicios deseas para la direccion que estan ingresando?</p>											
													<table class="table table-bordered">
														<tr>
														   <th></th>
														   <th>Servicio</th>
														   <th>Frecuencia</th>
														   <th></th>
														</tr>
														<tr v-if="list_services.length > 0" v-for="(item, i) in list_services" >
															<td>
																<b-form-checkbox v-bind:value="item" v-model="form_add_address.services[item.id]" name="check-button" switch>
																</b-form-checkbox>
															</td>
															<td>{{ item.name }} </td>
															<td>
																<div class="form-group" v-if="form_add_address.services[item.id]">
																	<select class="form-control custom-select" v-model="form_add_address.services[item.id].repeat">
																		<option v-bind:value="false">Elije una opcion...</option>
																		<option v-bind:value="item2" v-for="item2 in repeats_services">{{ item2.name }}</option>
																	</select>
																</div>
															</td>
															<td>
																<div class="form-group" v-if="form_add_address.services[item.id] && form_add_address.services[item.id].repeat != false && form_add_address.services[item.id].repeat != undefined && form_add_address.services[item.id].repeat.id != undefined">
																	<i class="fa fa-check"></i>
																</div>
																<div class="form-group" v-else=""><i class="fa fa-ban"></i></div>
															</td>
														</tr>
													</table>
												</div>
											</div>
										</b-col>
										<b-col sm="6">
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="control-label">Departamento</label>
														<select class="form-control" @change="departmentChangeToCity" v-model="form_add_address.department">
															<option v-bind:value="{ id: 0, code: '', name: '' }">Elije una opcion...</option>
															<option v-bind:value="item" v-for="item in list_departments">{{ item.name }}</option>
														</select>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="control-label">Ciudad</label>
														<select class="form-control" v-model="form_add_address.city" @change="address_search">
														<option v-bind:value="{ id: 0, name: '' }">Elije una opcion...</option>
														<option v-for="item in list_citys" v-bind:value="item">{{ item.name }}</option>
														</select>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="form-group">
														<label class="control-label">Direccion del Servicio</label>
														<input class="form-control" type="text" v-model="geo_search.search" @change="address_search" />
														<p>{{ geo_search.textResult }}</p>
													</div>
												</div>
											</div>
											<div class="col-md-12" style="border-radius: 15% !important;overflow: overlay;">
												<iframe frameborder="0" style="height: 350px;width:100%;margin:0;padding:0;" v-bind:src="geo_search.urlMapSearchNewIframe"></iframe>
											</div>
											<div class="col-md-12">
												<br>
												 <div class="pull-right">
													<button type="button" class="btn btn-warning btn-lg" @click="addAddress" id="btnToTop"><i class="fa fa-plus"></i> Agregar esta Direccion</button>
												 </div>
											</div>
										</b-col>
									</b-row>
								</div>
								<div class="panel-footer">
								</div>
							</div>
						</b-col>
					 </b-row>
				</b-col>
			</div>
		</div>
   </div>
</template>
<style scope="page-me-requests-add">
	.list-unstyled.multilevels li {
		font-weight:bold;
	}
	.list-unstyled.multilevels ul {
		padding-left:1.4rem;
		list-style:none;
	}
	.list-unstyled.multilevels ul li {
		font-weight:normal;
	}
/*
@media print
         {   
            body {-webkit-print-color-adjust: exact;}
            
            .no-print, .no-print *
            {
               display: none !important;
            }

            .no-print-required, .no-print-required *
            {
               display: none !important;
            }
         }


         body {font-size:12px; }

         table td {max-height: 15px;}

         select, input {background-color:#D6E6F4;border:0;}
         .element-white {background-color:#fff;border:0;}
         #foto {cursor: pointer;}
         .titulo {background-color:#1F4A7D;font-family:'Open Sans Condensed';font-weight:700;}
         textarea
         {
             border: 1px solid #c3c3c3;             
             resize: none;             
             overflow-x: hiden;
             height: 25px;
         }
         
         
         select{
              border: 0 !important;  /*Removes border*/
              -webkit-appearance: none;
              -moz-appearance: none;
              appearance: none;
              text-overflow:'';
              text-indent: 0.01px; /* Removes default arrow from firefox*/
              font-style: italic;
          }
          select::-ms-expand {
              display: none;
          }
          .select-wrapper
          {
              padding-left:0px;
              overflow:hidden;              
          }
          
          h6::first-letter {margin-top: 0; }
          h4::first-letter {margin-top: 0; }

          h6{ font-size: 14px; }
		  */
</style>

<template id="page-me-accounts-list">
	<div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">
					<br>
					<div class="panel panel-default">
						<div class="panel-heading"></div>
						<div class="panel-body">
							<b-row>
								<b-col sm="3">
									<b-form-group >
										<b-input-group>
											<b-form-input class="form-control" v-model="filter" placeholder="Busqueda rápida."></b-form-input>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="1">
									<b-button class="btn btn-secondary" :disabled="!filter" @click="filter = ''">
										<i class="fa fa-trash"></i>
									</b-button>
								</b-col>
								<b-col sm="3">
									<b-form-group>
										<b-input-group>
											<b-form-select v-model="sortBy" :options="sortOptions" class="form-control">
												<option slot="first" :value="null">-- none --</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="2">
									<b-form-group >
										<b-input-group>
											<b-form-select v-model="sortDesc" :disabled="!sortBy" slot="append" class="form-control">
												<option :value="false">Asc</option> <option :value="true">Desc</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="2">
									<b-form-group >
										<b-input-group>
											<b-form-select v-model="sortDirection" slot="append" class="form-control">
											  <option value="asc">Asc</option> <option value="desc">Desc</option>
											  <option value="last">Last</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
							</b-row>
							
							<b-container fluid class="table table-responsive">
								<b-table show-empty 
								stacked="sm" 
								:items="posts" 
								:fields="fields" 
								:current-page="currentPage" 
								:per-page="perPage" 
								:filter="filter" 
								:sort-by.sync="sortBy" 
								:sort-desc.sync="sortDesc" 
								:sort-direction="sortDirection" 
								@filtered="onFiltered">
									<template slot="represent_legal" slot-scope="row">
										{{ row.value.first_name }} {{ row.value.second_name }} {{ row.value.surname }} {{ row.value.second_surname }} 
									</template>
									<template slot="contact" slot-scope="row">
										{{ row.value.first_name }} {{ row.value.second_name }} {{ row.value.surname }} {{ row.value.second_surname }} 
									</template>
									<template slot="actions" slot-scope="row">
									   <router-link class="btn btn-sm btn-info" v-bind:to="{ name: 'me-account-view-page', params: { account_id: row.item.id } }">
										  <i class="fa fa-eye"></i>
									   </router-link>
									</template>
								</b-table>
							</b-container>
						</div>
						<div class="panel-footer">
							<b-row>
								<b-col sm="10">
									<b-pagination 
									v-model="currentPage" 
									:total-rows="totalRows" 
									:per-page="perPage" ></b-pagination>
								</b-col>
								<b-col sm="2">
									<br><b-form-select v-model="perPage" :options="pageOptions" class="form-control"></b-form-select>
								</b-col>
							</b-row>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<template id="page-me-auditors-list">
	<div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">
					<br>
					<div class="panel panel-default">
						<div class="panel-heading"></div>
						<div class="panel-body">
							<b-row>
								<b-col sm="3">
									<b-form-group >
										<b-input-group>
											<b-form-input class="form-control" v-model="filter" placeholder="Busqueda rápida."></b-form-input>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="1">
									<b-button class="btn btn-secondary" :disabled="!filter" @click="filter = ''">
										<i class="fa fa-trash"></i>
									</b-button>
								</b-col>
								<b-col sm="3">
									<b-form-group>
										<b-input-group>
											<b-form-select v-model="sortBy" :options="sortOptions" class="form-control">
												<option slot="first" :value="null">-- none --</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="2">
									<b-form-group >
										<b-input-group>
											<b-form-select v-model="sortDesc" :disabled="!sortBy" slot="append" class="form-control">
												<option :value="false">Asc</option> <option :value="true">Desc</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="2">
									<b-form-group >
										<b-input-group>
											<b-form-select v-model="sortDirection" slot="append" class="form-control">
											  <option value="asc">Asc</option> <option value="desc">Desc</option>
											  <option value="last">Last</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
							</b-row>
							
							<b-container fluid class="table table-responsive">
								<b-table show-empty 
								stacked="sm" 
								:items="posts" 
								:fields="fields" 
								:current-page="currentPage" 
								:per-page="perPage" 
								:filter="filter" 
								:sort-by.sync="sortBy" 
								:sort-desc.sync="sortDesc" 
								:sort-direction="sortDirection" 
								@filtered="onFiltered">
								
									<template slot="account_id" slot-scope="row">
										<!-- // {{ $parent.zfill(row.item.client.id, 11) }} -->
										{{ row.item.client.names }}
									</template>
									<template slot="names" slot-scope="row">
										{{ row.item.contact.first_name }} 
										{{ row.item.contact.second_name }} 
										{{ row.item.contact.surname }} 
										{{ row.item.contact.second_surname }} 
									</template>
									<template slot="phone" slot-scope="row">
										{{ row.item.contact.phone }} 
									</template>
									<template slot="phone_mobile" slot-scope="row">
										{{ row.item.contact.phone_mobile }} 
									</template>
									<template slot="mail" slot-scope="row">
										{{ row.item.contact.mail }} 
									</template>
								</b-table>
							</b-container>
						</div>
						<div class="panel-footer">
							<b-row>
								<b-col sm="10">
									<b-pagination 
									v-model="currentPage" 
									:total-rows="totalRows" 
									:per-page="perPage" ></b-pagination>
								</b-col>
								<b-col sm="2">
									<br><b-form-select v-model="perPage" :options="pageOptions" class="form-control"></b-form-select>
								</b-col>
							</b-row>
						</div>
					</div>
				</div>
			 </div>
		</div>
	</div>
</template>
<template id="page-me-contracts-list">
	<div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">
					<br>
					<div class="panel panel-default">
						<div class="panel-heading"></div>
						<div class="panel-body">
							<b-row>
								<b-col sm="3">
									<b-form-group >
										<b-input-group>
											<b-form-input class="form-control" v-model="filter" placeholder="Busqueda rápida."></b-form-input>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="1">
									<b-button class="btn btn-secondary" :disabled="!filter" @click="filter = ''">
										<i class="fa fa-trash"></i>
									</b-button>
								</b-col>
								<b-col sm="3">
									<b-form-group>
										<b-input-group>
											<b-form-select v-model="sortBy" :options="sortOptions" class="form-control">
												<option slot="first" :value="null">-- none --</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="2">
									<b-form-group >
										<b-input-group>
											<b-form-select v-model="sortDesc" :disabled="!sortBy" slot="append" class="form-control">
												<option :value="false">Asc</option> <option :value="true">Desc</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="2">
									<b-form-group >
										<b-input-group>
											<b-form-select v-model="sortDirection" slot="append" class="form-control">
											  <option value="asc">Asc</option> <option value="desc">Desc</option>
											  <option value="last">Last</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
							</b-row>
							
							<b-container fluid class="table table-responsive">
								<b-table show-empty 
								stacked="sm" 
								:items="posts" 
								:fields="fields" 
								:current-page="currentPage" 
								:per-page="perPage" 
								:filter="filter" 
								:sort-by.sync="sortBy" 
								:sort-desc.sync="sortDesc" 
								:sort-direction="sortDirection" 
								@filtered="onFiltered">
								
									<template slot="id" slot-scope="row">
										{{ $parent.zfill(row.item.id, 11) }}
									</template>
									<template slot="request" slot-scope="row">
										{{ $parent.zfill(row.item.request, 11) }}
									</template>
									<template slot="quotation" slot-scope="row">
										{{ $parent.zfill(row.item.quotation, 11) }}
									</template>
									<template slot="status" slot-scope="row">
										{{ row.item.status.name }}
									</template>
									<template slot="actions" slot-scope="row">
										
									</template>
									<!--
									<template slot="mail" slot-scope="row">
										{{ row.item.contact.mail }} 
									</template>
									-->
								</b-table>
							</b-container>
						</div>
						<div class="panel-footer">
							<b-row>
								<b-col sm="10">
									<b-pagination 
									v-model="currentPage" 
									:total-rows="totalRows" 
									:per-page="perPage" ></b-pagination>
								</b-col>
								<b-col sm="2">
									<br><b-form-select v-model="perPage" :options="pageOptions" class="form-control"></b-form-select>
								</b-col>
							</b-row>
						</div>
					</div>
					
					
				</div>
			 </div>
		</div>
	</div>
</template>
<template id="page-me-contacts-list">
	<div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">
					<br>
					<div class="panel panel-default">
						<div class="panel-heading"></div>
						<div class="panel-body">
							<b-row>
								<b-col sm="3">
									<b-form-group >
										<b-input-group>
											<b-form-input class="form-control" v-model="filter" placeholder="Busqueda rápida."></b-form-input>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="1">
									<b-button class="btn btn-secondary" :disabled="!filter" @click="filter = ''">
										<i class="fa fa-trash"></i>
									</b-button>
								</b-col>
								<b-col sm="3">
									<b-form-group>
										<b-input-group>
											<b-form-select v-model="sortBy" :options="sortOptions" class="form-control">
												<option slot="first" :value="null">-- none --</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="2">
									<b-form-group >
										<b-input-group>
											<b-form-select v-model="sortDesc" :disabled="!sortBy" slot="append" class="form-control">
												<option :value="false">Asc</option> <option :value="true">Desc</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="2">
									<b-form-group >
										<b-input-group>
											<b-form-select v-model="sortDirection" slot="append" class="form-control">
											  <option value="asc">Asc</option> <option value="desc">Desc</option>
											  <option value="last">Last</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
							</b-row>
							
							<b-container fluid class="table table-responsive">
								<b-table show-empty 
								stacked="sm" 
								:items="posts" 
								:fields="fields" 
								:current-page="currentPage" 
								:per-page="perPage" 
								:filter="filter" 
								:sort-by.sync="sortBy" 
								:sort-desc.sync="sortDesc" 
								:sort-direction="sortDirection" 
								@filtered="onFiltered">
								
									<!--
									<template slot="id" slot-scope="row">
										{{ $parent.zfill(row.item.id, 11) }}
									</template>
									<template slot="request" slot-scope="row">
										{{ $parent.zfill(row.item.request, 11) }}
									</template>
									<template slot="quotation" slot-scope="row">
										{{ $parent.zfill(row.item.quotation, 11) }}
									</template>
									<template slot="status" slot-scope="row">
										{{ row.item.status.name }}
									</template>
									<template slot="actions" slot-scope="row">
										
									</template>
									-->
								</b-table>
							</b-container>
						</div>
						<div class="panel-footer">
							<b-row>
								<b-col sm="10">
									<b-pagination 
									v-model="currentPage" 
									:total-rows="totalRows" 
									:per-page="perPage" ></b-pagination>
								</b-col>
								<b-col sm="2">
									<br><b-form-select v-model="perPage" :options="pageOptions" class="form-control"></b-form-select>
								</b-col>
							</b-row>
						</div>
					</div>
				</div>
			 </div>
		</div>
	</div>
</template>
<template id="page-me-invoices-list">
	<div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">
					<br>
					<div class="panel panel-default">
						<div class="panel-heading"></div>
						<div class="panel-body">
							<b-row>
								<b-col sm="3">
									<b-form-group >
										<b-input-group>
											<b-form-input class="form-control" v-model="filter" placeholder="Busqueda rápida."></b-form-input>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="1">
									<b-button class="btn btn-secondary" :disabled="!filter" @click="filter = ''">
										<i class="fa fa-trash"></i>
									</b-button>
								</b-col>
								<b-col sm="3">
									<b-form-group>
										<b-input-group>
											<b-form-select v-model="sortBy" :options="sortOptions" class="form-control">
												<option slot="first" :value="null">-- none --</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="2">
									<b-form-group >
										<b-input-group>
											<b-form-select v-model="sortDesc" :disabled="!sortBy" slot="append" class="form-control">
												<option :value="false">Asc</option> <option :value="true">Desc</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="2">
									<b-form-group >
										<b-input-group>
											<b-form-select v-model="sortDirection" slot="append" class="form-control">
											  <option value="asc">Asc</option> <option value="desc">Desc</option>
											  <option value="last">Last</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
							</b-row>
							
							<b-container fluid class="table table-responsive">
								<b-table show-empty 
								stacked="sm" 
								:items="posts" 
								:fields="fields" 
								:current-page="currentPage" 
								:per-page="perPage" 
								:filter="filter" 
								:sort-by.sync="sortBy" 
								:sort-desc.sync="sortDesc" 
								:sort-direction="sortDirection" 
								@filtered="onFiltered">
								
									<template slot="status_name" slot-scope="row">
										{{ row.item.status.name }}
									</template>
								
									<template slot="total" slot-scope="row">
										$ {{ $parent.formatMoney(row.item.total) }} COP
									</template>
									<!--
									<template slot="id" slot-scope="row">
										{{ $parent.zfill(row.item.id, 11) }}
									</template>
									<template slot="request" slot-scope="row">
										{{ $parent.zfill(row.item.request, 11) }}
									</template>
									<template slot="quotation" slot-scope="row">
										{{ $parent.zfill(row.item.quotation, 11) }}
									</template>
									<template slot="actions" slot-scope="row">
										
									</template>
									-->
								</b-table>
							</b-container>
						</div>
						<div class="panel-footer">
							<b-row>
								<b-col sm="10">
									<b-pagination 
									v-model="currentPage" 
									:total-rows="totalRows" 
									:per-page="perPage" ></b-pagination>
								</b-col>
								<b-col sm="2">
									<br><b-form-select v-model="perPage" :options="pageOptions" class="form-control"></b-form-select>
								</b-col>
							</b-row>
						</div>
					</div>
				</div>
			 </div>
		</div>
	</div>
</template>
<template id="page-me-quotations-list">
	<div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">
					<br>
					<div class="panel panel-default">
						<div class="panel-heading"></div>
						<div class="panel-body">
							<b-row>
								<b-col sm="3">
									<b-form-group >
										<b-input-group>
											<b-form-input class="form-control" v-model="filter" placeholder="Busqueda rápida."></b-form-input>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="1">
									<b-button class="btn btn-secondary" :disabled="!filter" @click="filter = ''">
										<i class="fa fa-trash"></i>
									</b-button>
								</b-col>
								<b-col sm="3">
									<b-form-group>
										<b-input-group>
											<b-form-select v-model="sortBy" :options="sortOptions" class="form-control">
												<option slot="first" :value="null">-- none --</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="2">
									<b-form-group >
										<b-input-group>
											<b-form-select v-model="sortDesc" :disabled="!sortBy" slot="append" class="form-control">
												<option :value="false">Asc</option> <option :value="true">Desc</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="2">
									<b-form-group >
										<b-input-group>
											<b-form-select v-model="sortDirection" slot="append" class="form-control">
											  <option value="asc">Asc</option> <option value="desc">Desc</option>
											  <option value="last">Last</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
							</b-row>
							
							<b-container fluid class="table table-responsive">
								<b-table show-empty 
								stacked="sm" 
								:items="posts" 
								:fields="fields" 
								:current-page="currentPage" 
								:per-page="perPage" 
								:filter="filter" 
								:sort-by.sync="sortBy" 
								:sort-desc.sync="sortDesc" 
								:sort-direction="sortDirection" 
								@filtered="onFiltered">
									<template slot="id" slot-scope="row">
										{{ $parent.zfill(row.item.id, 11) }}
									</template>
									<template slot="request" slot-scope="row">
										{{ $parent.zfill(row.item.request, 11) }}
									</template>
								
									<template slot="validity" slot-scope="row">
										{{ row.item.validity }} Días
									</template>
								
									<template slot="total" slot-scope="row">
										$ {{ $parent.formatMoney(row.item.total) }} COP
									</template>
									<template slot="actions" slot-scope="row">
										
									</template>
								</b-table>
							</b-container>
						</div>
						<div class="panel-footer">
							<b-row>
								<b-col sm="10">
									<b-pagination 
									v-model="currentPage" 
									:total-rows="totalRows" 
									:per-page="perPage" ></b-pagination>
								</b-col>
								<b-col sm="2">
									<br><b-form-select v-model="perPage" :options="pageOptions" class="form-control"></b-form-select>
								</b-col>
							</b-row>
						</div>
					</div>
				</div>
			 </div>
		</div>
	</div>
</template>
<template id="page-me-redicateds-list">
	<div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">
					<br>
					<div class="panel panel-default">
						<div class="panel-heading"></div>
						<div class="panel-body">
							<b-row>
								<b-col sm="3">
									<b-form-group >
										<b-input-group>
											<b-form-input class="form-control" v-model="filter" placeholder="Busqueda rápida."></b-form-input>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="1">
									<b-button class="btn btn-secondary" :disabled="!filter" @click="filter = ''">
										<i class="fa fa-trash"></i>
									</b-button>
								</b-col>
								<b-col sm="3">
									<b-form-group>
										<b-input-group>
											<b-form-select v-model="sortBy" :options="sortOptions" class="form-control">
												<option slot="first" :value="null">-- none --</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="2">
									<b-form-group >
										<b-input-group>
											<b-form-select v-model="sortDesc" :disabled="!sortBy" slot="append" class="form-control">
												<option :value="false">Asc</option> <option :value="true">Desc</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="2">
									<b-form-group >
										<b-input-group>
											<b-form-select v-model="sortDirection" slot="append" class="form-control">
											  <option value="asc">Asc</option> <option value="desc">Desc</option>
											  <option value="last">Last</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
							</b-row>
							
							<b-container fluid class="table table-responsive">
								<b-table show-empty 
								stacked="sm" 
								:items="posts" 
								:fields="fields" 
								:current-page="currentPage" 
								:per-page="perPage" 
								:filter="filter" 
								:sort-by.sync="sortBy" 
								:sort-desc.sync="sortDesc" 
								:sort-direction="sortDirection" 
								@filtered="onFiltered">
									<template slot="id" slot-scope="row">
										{{ $parent.zfill(row.item.id, 11) }}
									</template>
									
									<template slot="row-details" slot-scope="row">
										<table class="table table-responsive">
											<tr>
												<th>Objecto</th>
												<td>{{ row.item.object }}</td>
											</tr>
											<tr>
												<th>Descripcion Detallada</th>
												<td>{{ row.item.description_service }}</td>
											</tr>
											<tr>
												<th>Notas Adiccionales / Observaciones</th>
												<td>{{ row.item.additional_notes }}</td>
											</tr>
										</table>
										
									</template>
									
									<template slot="actions" slot-scope="row">
										<b-button size="sm" @click="row.toggleDetails">
										  {{ row.detailsShowing ? 'Ocultar' : 'Ver' }} Detalles
										</b-button>
									</template>
								</b-table>
							</b-container>
						</div>
						<div class="panel-footer">
							<b-row>
								<b-col sm="10">
									<b-pagination 
									v-model="currentPage" 
									:total-rows="totalRows" 
									:per-page="perPage" ></b-pagination>
								</b-col>
								<b-col sm="2">
									<br><b-form-select v-model="perPage" :options="pageOptions" class="form-control"></b-form-select>
								</b-col>
							</b-row>
						</div>
					</div>
					
					
				</div>
			 </div>
		</div>
	</div>
</template>
<template id="page-me-requests-list">
	<div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">
					<br>
					<div class="panel panel-default">
						<div class="panel-heading"></div>
						<div class="panel-body">
							<b-row>
								<b-col sm="3">
									<b-form-group >
										<b-input-group>
											<b-form-input class="form-control" v-model="filter" placeholder="Busqueda rápida."></b-form-input>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="1">
									<b-button class="btn btn-secondary" :disabled="!filter" @click="filter = ''">
										<i class="fa fa-trash"></i>
									</b-button>
								</b-col>
								<b-col sm="3">
									<b-form-group>
										<b-input-group>
											<b-form-select v-model="sortBy" :options="sortOptions" class="form-control">
												<option slot="first" :value="null">-- none --</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="2">
									<b-form-group >
										<b-input-group>
											<b-form-select v-model="sortDesc" :disabled="!sortBy" slot="append" class="form-control">
												<option :value="false">Asc</option> <option :value="true">Desc</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
								<b-col sm="2">
									<b-form-group >
										<b-input-group>
											<b-form-select v-model="sortDirection" slot="append" class="form-control">
											  <option value="asc">Asc</option> <option value="desc">Desc</option>
											  <option value="last">Last</option>
											</b-form-select>
										</b-input-group>
									</b-form-group>
								</b-col>
							</b-row>
							
							<b-container fluid class="table table-responsive">
								<b-table show-empty 
								stacked="sm" 
								:items="posts" 
								:fields="fields" 
								:current-page="currentPage" 
								:per-page="perPage" 
								:filter="filter" 
								:sort-by.sync="sortBy" 
								:sort-desc.sync="sortDesc" 
								:sort-direction="sortDirection" 
								@filtered="onFiltered">
									<template slot="id" slot-scope="row">
										{{ $parent.zfill(row.item.id, 11) }}
									</template>
									<template slot="contact" slot-scope="row">
										{{ row.item.contact.first_name }} 
										{{ row.item.contact.second_name }} 
										{{ row.item.contact.surname }} 
										{{ row.item.contact.second_surname }} 
									</template>
									<template slot="addresses" slot-scope="row">
										<ul class="list-unstyled text-left multilevels">
											<li v-for="address in row.item.addresses">
												<ul>
													<li><b>{{ address.address }}</b>
													</li>
													<li v-for="service in address.services">
														<ul>
															<li>• {{ service.name }}</li>
															<li>
																<ul>
																	<li><span>{{ service.repeat.name }}</span></li>
																</ul>
															</li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</template>
									
									<template slot="actions" slot-scope="row">										
									   <router-link class="btn btn-sm btn-info" v-bind:to="{ name: 'me-requests-view-page', params: { account_id: row.item.client, request_id: row.item.id } }">
										  <i class="fa fa-eye"></i>
									   </router-link>
									</template>
								</b-table>
							</b-container>
						</div>
						<div class="panel-footer">
							<b-row>
								<b-col sm="10">
									<b-pagination 
									v-model="currentPage" 
									:total-rows="totalRows" 
									:per-page="perPage" ></b-pagination>
								</b-col>
								<b-col sm="2">
									<br><b-form-select v-model="perPage" :options="pageOptions" class="form-control"></b-form-select>
								</b-col>
							</b-row>
						</div>
					</div>
					
					
				</div>
			 </div>
		</div>
	</div>
</template>
<template id="page-me-users-list">
	<div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">
					<br>
				   <div class="panel panel-default">
					  <div class="panel-heading">Listado rápido - Usuarios</div>
					  <div class="panel-body">
						<table class="table table-responsive">
							<tr>
								<th>ID</th>
								<th>Usuario</th>
								<th>Perfil</th>
							</tr>
							<tr v-for="post in posts">
								<td>{{ $parent.zfill(post.id, 11) }}</td>
								<td>
									{{ post.user.username }}
								</td>
								<td>
									{{ post.permissions.name }}
								</td>
							</tr>
						</table>
					  </div>
					  <div class="panel-footer">
					  {{ users }}
					  </div>
				   </div>
				</div>
			 </div>
		</div>
	</div>
</template>
<template id="page-me-users-pending-list">
	<div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<component-sidebar-meaccount></component-sidebar-meaccount>
				</div>
				<div class="col-sm-9">
					<br>
				   <div class="panel panel-default">
					  <div class="panel-heading">Listado rápido - Usuarios por aprobacion</div>
					  <div class="panel-body">
						<table class="table table-responsive">
							<tr>
								<th>ID</th>
								<th>Nombre completo</th>
								<th>Telefono</th>
								<th>Movil</th>
								<th>Correo Electronico</th>
								<th>Perfil</th>
							</tr>
							<tr v-for="post in posts">
								<td>{{ $parent.zfill(post.id, 11) }}</td>
								<td>{{ post.name }} {{ post.surname }} {{ post.second_surname }}</td>
								<td>{{ post.phone }}</td>
								<td>{{ post.mobile }}</td>
								<td>{{ post.mail }}</td>
								<td>{{ post.permissions.name }}</td>
							</tr>
						</table>
					  </div>
					  <div class="panel-footer">
					  {{ users_pending }}
					  </div>
				   </div>
				</div>
			 </div>
		</div>
	</div>
</template>




<!-- // Estilos CSS -->
<style scope="page-me-accounts">
   center>img{
   position: relative;
   margin-top: -24%;
   }
   .well{
   background: #fff;
   box-shadow: 0 0 0 0;
   border: 0px;
   }
   .jumbotron{
   background: #fff;
   }
   .base-padding{
   padding: 3% 0;
   }
   .well.pricing-table {
   /* padding: 3%; */
   background: #fff;
   transition:all 0.6s ease-out;
   }
   .well.pricing-table:hover{
   box-shadow:0 5px 6px #444;
   cursor:pointer;
   }
   .pricing-feature-list{
   padding: 10%;
   background: #444;
   color: #eee;
   }
   .pricing-feature-list .list-group-item {
   position: relative;
   display: block;
   padding: 13px 15px;
   margin-bottom: -1px;
   background-color: #444;
   /* border: 1px solid #6B6B6B; */
   font-size: 15px;
   border: 1px solid #444;
   /* font-weight: 700; */
   border-bottom: 1px solid #595353;
   top: 10px;
   }
   .pricing-table>.pricing-table-holder{
   background: #f9f9f9;
   padding: 6%;
   }
   .custom-button-group{
   background: #f9f9f9;
   padding: 0%;
   }
   .btn-royal-blue{
   color: #FFF;
   background-color: #23A4F2;
   border-color: #23A4F2;
   transition: all 0.4s ease-in;
   }
   .btn-royal-blue:hover{
   color: #eee;
   transition: all 0.5s ease-in;
   }
</style>
<!-- DEPURAR - INICIO -->
<template id="post-delete">
   <div>
      <h2>Delete post {{ post.id }}</h2>
      <form v-on:submit="deletepost">
         <p>The action cannot be undone.</p>
         <button type="submit" class="btn btn-danger">Delete</button>
         <router-link class="btn btn-default" v-bind:to="'/'">Cancel</router-link>
      </form>
   </div>
</template>
<!-- DEPURAR - FINAL -->
<style scope="page-about">
   .aboutus-section {
   padding: 90px 0;
   }
   .aboutus-title {
   font-size: 30px;
   letter-spacing: 0;
   line-height: 32px;
   margin: 0 0 39px;
   padding: 0 0 11px;
   position: relative;
   text-transform: uppercase;
   color: #000;
   }
   .aboutus-title::after {
   background: #fdb801 none repeat scroll 0 0;
   bottom: 0;
   content: "";
   height: 2px;
   left: 0;
   position: absolute;
   width: 54px;
   }
   .aboutus-text {
   color: #606060;
   font-size: 13px;
   line-height: 22px;
   margin: 0 0 35px;
   }
   a:hover, a:active {
   color: #ffb901;
   text-decoration: none;
   outline: 0;
   }
   .aboutus-more {
   border: 1px solid #fdb801;
   border-radius: 25px;
   color: #fdb801;
   display: inline-block;
   font-size: 14px;
   font-weight: 700;
   letter-spacing: 0;
   padding: 7px 20px;
   text-transform: uppercase;
   }
   .feature .feature-box .iconset {
   background: #fff none repeat scroll 0 0;
   float: left;
   position: relative;
   width: 18%;
   }
   .feature .feature-box .iconset::after {
   background: #fdb801 none repeat scroll 0 0;
   content: "";
   height: 150%;
   left: 43%;
   position: absolute;
   top: 100%;
   width: 1px;
   }
   .feature .feature-box .feature-content h4 {
   color: #0f0f0f;
   font-size: 18px;
   letter-spacing: 0;
   line-height: 22px;
   margin: 0 0 5px;
   }
   .feature .feature-box .feature-content {
   float: left;
   padding-left: 28px;
   width: 78%;
   }
   .feature .feature-box .feature-content h4 {
   color: #0f0f0f;
   font-size: 18px;
   letter-spacing: 0;
   line-height: 22px;
   margin: 0 0 5px;
   }
   .feature .feature-box .feature-content p {
   color: #606060;
   font-size: 13px;
   line-height: 22px;
   }
   .icon {
   color : #f4b841;
   padding:0px;
   font-size:40px;
   border: 1px solid #fdb801;
   border-radius: 100px;
   color: #fdb801;
   font-size: 28px;
   height: 70px;
   line-height: 70px;
   text-align: center;
   width: 70px;
   }
   }
</style>