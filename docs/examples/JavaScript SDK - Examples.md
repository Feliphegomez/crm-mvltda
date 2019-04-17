# JavaScript SDK - Examples
Lea nuestra guía de inicio rápido para aprender cómo cargar e inicializar el SDK para JavaScript y nuestra guía de configuración avanzada para personalizar su implementación. A continuación, pruebe nuestros ejemplos para usar el SDK:

**Navegadores compatibles:**
  : El SDK para JavaScript admite las dos últimas versiones de los navegadores más populares: Chrome, Firefox, Edge, Safari (incluido iOS) e Internet Explorer (solo versión 11).

Tenemos una guía completa sobre cómo usar el SDK de JS para implementar el inicio de sesión. Pero por ahora, solo usemos un código de muestra básico, para que pueda ver cómo funciona. Inserte lo siguiente después de su FB.init llamada original :

### Diálogo de inicio de sesión
~~~js
    FG.login(function(r) {
		console.log(r);
        if (r.authResponse) {
            console.log('Welcome!  Fetching your information.... ');
			
			/*
            FG.api('/me', function(r) {
                console.log('Good to see you, ' + r.name + '.');
            });*/
        } else {
            console.log('User cancelled login or did not fully authorize.');
        }
    });
~~~
    
Lea la guía de inicio de sesión para saber exactamente qué está sucediendo aquí, pero cuando vuelva a cargar su página, se le pedirá el cuadro de diálogo Iniciar sesión para su aplicación, si aún no le ha otorgado permiso.

## Inicio de sesión para web con el SDK para JavaScript
El inicio de sesión con el SDK para JavaScript permite a las personas iniciar sesión en tu página web con sus credenciales de la API.

**Nota:**
  : Si por cualquier motivo no puedes utilizar el SDK para JavaScript, es posible implementar el inicio de sesión sin él. Para implementar el inicio de sesión sin el SDK para JavaScript, consulta Crear un proceso de inicio de sesión de forma manual.

Implementa el inicio de sesión mediante los siguientes pasos:

1. **Comprueba el estado del inicio de sesión** para ver si alguien ya tiene sesión iniciada en la aplicación. Durante este paso, también debes comprobar si alguien inició sesión previamente en la aplicación, aunque no tenga una sesión iniciada en este momento.
2. **Permite que las personas inicien sesión.**
3. **Cierra la sesión de las personas** para que puedan salir de tu aplicación.


### 2. Comprobar el estado del inicio de sesión
El primer paso al cargar tu página web es determinar si una persona ya inició sesión en tu aplicación con el inicio de sesión. Este proceso comienza con una llamada a FG.getLoginStatus. Esta función activa una llamada para obtener el estado de inicio de sesión y llamar a tu función de devolución de llamada con el resultado.

Esto es parte del código que se ejecuta durante la carga de la página para comprobar el estado de inicio de sesión de una persona, tomado del código de ejemplo a continuación:

~~~js
    FG.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
~~~

El objeto response que se proporciona a la devolución de llamada puede contener varios campos:

~~~json
    {
        status: 'connected',
        authResponse: {
            accessToken: '...',
            expiresIn:'...',
            reauthorize_required_in:'...'
            signedRequest:'...',
            userID:'...'
        }
    }
~~~

En status se especifica el estado de inicio de sesión de la persona que usa la aplicación. El valor de status puede ser uno de los siguientes:

`connected`: la persona inició sesión el sitio y en tu aplicación.
`not_authorized`: la persona inició sesión en el sitio, pero no en tu aplicación.
`unknown`: la persona no inició sesión en el sitio, de modo que no sabes si la inició en tu aplicación. O bien, se llamó a FG.logout() con anterioridad y no se pudo conectar con el sitio.
`authResponse`: se incluye si el estado es connected, y consta de los siguientes elementos:
    --- `accessToken`: contiene un token de acceso para la persona que usa la aplicación.
    ---`expiresIn`: indica la hora en formato UNIX en que el token caduca y se debe renovar.
    --- `reauthorize_required_in`: El plazo, en segundos, que transcurre hasta que el inicio de sesión caduca y se necesita una nueva autorización.
    --- `signedRequest`: un parámetro firmado que contiene información sobre la persona que usa la aplicación.
    --- `userID`: es el identificador de la persona que usa la aplicación.
Una vez que la aplicación conoce el estado de inicio de sesión de la persona que la usa, puedes realizar una de estas acciones:

Si la persona inició sesión en el sitio y en la aplicación, redirígela a la experiencia de sesión iniciada de la aplicación.
Si la persona no inició sesión en tu aplicación o en el sitio, solicita que lo haga con el cuadro de diálogo de inicio de sesión con `FG.login()`.