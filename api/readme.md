---------------------------------------------------------
-------------------   Uso de la API   -------------------
---------------------------------------------------------
FG.api(
	'GET', // Metodo a Utilizar (POST, PUT, GET, DELETE)
	'/users', // Tabla de la Base de datos
	{
		// Parametros Adiccionales.
	}, function(r){
	console.log(r);
	
	// aqui va el codigo.
});