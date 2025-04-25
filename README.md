# Cambios/TODO
* Se agrego ```src/App/views/login.view.php``` para renderizar 'login'.
* Se agrego ```src/App/views/register.view.php``` para renderizar 'register'.
* Se modifico ```src/bootstrap.php``` para diferenciar entre los metodos GET y POST en 'login' y 'register'.
* Se modifico ```src/App/views/parts/header.view.php``` para renderizar llamar correctamente a 'carrito' y 'login'.
* Se comento las lineas que normalizan los path en ```src/Core/Router::direct()``` ya que los path de error (ej. 'internal_error'), no tienen '/' en su path, las paginas comunes, sí.

> [!ALERT]
> El codigo en ```src/App/Controllers/PageController::loginProccess()``` y ```src/App/Controllers/PageController::registerProccess()``` debe ser correjido una vez probada este commit, ya que imprime los datos de los formularios en la pagina web.

> [!WARNING]
> Tanto 'login' como 'register' referencian ```<link rel="stylesheet" href="css/elements.css">``` y ```<link rel="stylesheet" href="css/auth.css">``` a tener en cuenta en el futuros refactors.

## TODO:
- [ ] Hacer que los links **```<a>```**  llamen a ```public/index.php``` ya que automatiza las redirecciones. O ```App/src/core/Router.php```, pero no se esta seguro o se toco por las dudas.
- [x] Agregar ```<body>``` a ```src/App/views/index.view.php```
- [ ] Faltan de hacer las views (las versiones completas).
- [x] Las imagenes de las redes sociales deben estar en minuscula, ya que es asi como se generan auto. en ```src/App/views/parts/footer.view.php```

# Instalacion
**ATENCION**: con "composer install" deberia solo generar las dependencias, 
¿una vez que se instalo una libreria, los demas deben correr composer install en sus maquinas?

## Composer
Para actualizar las dependencias se usa:
```
    composer update
```
### Dependencias/Monolog
Libreria PHP de logueo, cuyas caracteristicas son:
* __**Handlers**__: Permiten enviar los logs a diferentes destinos.
* __**Niveles Log**__: Definen los diferentes niveles de logueo (e.g., DEBUG, INFO, WARNING, ERROR, CRITICAL) para controlar el grado de 'verbosidad' en los logs.
* __**Procesadores**__: Permite modificar los registros log antes de ser manejados para, por ejemplo, agregar mas info. de contexto u omitir informacion sensible del proyecto.
* __**Context**__: Los mensajes log pueden ser mas informativos, incluyendo datos adicionales.
Instalacion:
```
    composer require monolog/monolog 
```
## COMO LEVANTAR EL SERVER:
```
    php -S localhost:8888 -t public
```

# Arquitectura General
A continuacion se incluye la vista general del proyecto, se omitio el direcotorio ```logs/``` y las carpetas de contenido estatico por motivos de simplificacion.
```
root/
├── public/
│   ├── assets/
│   │    ├── css/
│   │    ├── img/
│   |    └── js/
│   └── index.php
├── src/
│   ├── App/
|   │   ├── Controllers/
│   │   |    ├── ErrorController.php
│   │   |    └── PageController.php
│   │   └── Views/
│   │        ├── parts/
│   │        │   ├── footer.view.php
│   │        │   ├── head.view.php
│   │        │   └── header.view.php
│   │        ├── about.view.php
│   │        ├── contact.view.php
│   │        ├── index.view.php
│   │        ├── internal-error.php
│   │        └── not-found.php
│   ├── Core/
│   │    ├── Exceptions/
│   │    │    └── RouteNotFoundException.php
│   │    └── Router.php
|   └── bootstrap.php
├── composer.json
└── README.md
```
## Modelo
Responsable de administrar los datos de la aplicación, procesar la logica y las reglas de negocio, y responder los pedidos de informacion de otros componentes.

## Vista
Representacion de la informacion. Recibe datos del controlador y envia datos de usuario al controlador.

## Controlador
Intermediario entre los componentes. Se encarga de procesar inputs del usuario, actualiza el modelo y la vista para reflejar los cambios en el modelo. Contiene la logica de la aplicacion como la validacion de inputs y transformacion de datos.

## Problematicas:
Considerando lo anterior se propone las siguientes soluciones para cada problematica:
* **Analisis de la peticiones HTTP**: Trabajo conjunto entre el modulo de controlador y la resolucion de rutas.
* **Mapeo de URLs en funcionalidades de la aplicación**: Un controlador de encargara de capturar y procesar las rutas para enviarlo a un controlador que la soluciona.
* **Generación de las respuestas HTTP**: Un controlador se encargara de generar dichas respuestas.
* **Generación de registros**: Los registros seran manejados por un controlador.
* **Persistencia**: Trabajo conjunto entre la capa de modelos y una base de datos.
* **Configuración**: Ningun modulo se encargara de la configuracion, es transversal a la arquitectura.
* **Generación de diferentes representaciones de la información**: Trabajo conjunto entre los modulos del controlador y las vistas.

# Apache
Se configuro un servidor apache para servir en:
```
    /home/<usuario>/srv/http/
```
El problema es que es una implementacion muy casera.
Se requiere que cada participante configure su propio servidor o usar un contenedor.
# Consigna
Agregue la funcionalidad de listado y búsqueda de los libros del catálogo. Para ello, tenga en cuenta que:
* La base de datos de libros puede estar contenida en un archivo de texto o incluso en el mismo código. Sin embargo, en un próximo trabajo práctico se le pedirá que la traslade a una base de datos.
* Es importante determinar el método HTTP y el formato del envío de los parámetros de la consulta en la petición de búsqueda.
* El catálogo se debe presentar de forma paginada. Adicionalmente se debe permitir recuperar la cantidad de registros por página.
* Determine e implemente el comportamiento del catálogo ante un intento de acceso a un libro inexistente o a una página inexistente.
* La vista actual del catálogo debe poder descargarse en formato CSV.