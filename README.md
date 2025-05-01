# Cambios/TODO/Sugerencias
* Se agrego la posibilidad de instalar postgres en docker.
* Falta $libros en Controller o ControllerPage. O directamente hacer un **```SELECT * FROM libros```** desde la BD (llamando al modelo correspondiente).
> [!WARNING]
> Carrito no esta del todo implementado requiere toda una solucion 'carrito de compras' con cookies para seleccionar, agregar, acumular total y llegar a 'compra destino'. Ademas el orden de las etiquetas **```<form>```** y **```<table>```** estan al reves, table debe ayudar a dar forma al formulario, no ser un campo del [mismo](www.geeksforgeeks.org/how-to-use-tables-to-structure-forms/).

> [!WARNING]
> Como no existe, por ahora, una BD con libros, los datos estan en **```src/App/Controllers/PageController::index()```** y se pasara un elemento de esos libros via **HTTP GET**, mostrando todo eso en la URL. Cuando se tenga BD, el **id** es lo unico que se pasara y libro recibira el resultado del **SELECT**.

> [!WARNING]
> Tanto el campo Descripcion como ISBN en **```src/App/Views/libro.view.php```** estan '**HARDCODED**'. Cuando exista BD, el **id** es lo unico que se pasara y libro recibira el resultado del **SELECT**, entre los campos de este estara el ISBN y la Descripcion.

> [!WARNING]
> En **```src/App/Views/compraDestino.view.php```** se renderiza una tabla que tiene **```<th>```** vacios.

## TODO:
- [ ] Hacer que los links **```<a>```**  llamen a **```public/index.php```** ya que automatiza las redirecciones. O **```App/src/Core/Router.php```**, pero no se esta seguro o se toco por las dudas.
- [x] Agregar **```<body>```** a **```src/App/Views/index.view.php```**.
- [x] Faltan de hacer las views (las versiones completas).
- [x] Las imagenes de las redes sociales deben estar en minuscula, ya que es asi como se generan auto. en **```src/App/Views/parts/footer.view.php```**.
- [ ] Dar funcionalidad al **```<form>```** en **```src/App/Views/libro.view.php```**.
- [ ] Implementar, en css, la clase 'campo_obligatorio' usado por **```src/App/Views/compraDestino.view.php```**, **```src/App/Views/contacto.view.php```** y probablemente por otros formularios.
- [ ] Implementar la funcionalidad del carrito de compras.
- [ ] Implementar los filtros de busqueda en tienda.
- [ ] Implementar path '**/realizarPedido**' requerido por **```src/App/Views/medioPago.view.php```**.
- [ ] Sacar los datos '**HARDCODED**' de los libros y migrarlos a una base de datos.

## Sugerencias
### BD Tabla Libro
|  Libro      | Tipo   |  Descripcion                             |
|-------------|--------|------------------------------------------|
| ISBN        | PK     | ISBN del libro (o un ID generico)        |
| Titulo      | TEXT   |                 -                        |
| Autor       | TEXT   | ISBN del libro                           |
| Precio      | FLOAT  | (no necesariamente en esta tabla)        |
| Descripcion | TEXT   |                 -                        |
| src         | TEXT   | Path donde se guarda la imagen del libro |

### HTML
* En **```src/App/Views/index.view.php```** hay etiquetas sobre etiquetas (en especial en la seccion de libros) que dan la misma informacion redundante, se sugiere sacar lo repetido y, en ultima instancia dar mas participacion a css para que lo renderice.

# Iniciar el Servidor:
```
    php -S localhost:8888 -t public
```

# Instalacion de componentes
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
Para instalarlo escribir:
```
    composer require monolog/monolog 
```
# Consigna
Agregue la funcionalidad de listado y búsqueda de los libros del catálogo. Para ello, tenga en cuenta que:
* La base de datos de libros puede estar contenida en un archivo de texto o incluso en el mismo código. Sin embargo, en un próximo trabajo práctico se le pedirá que la traslade a una base de datos.
* Es importante determinar el método HTTP y el formato del envío de los parámetros de la consulta en la petición de búsqueda.
* El catálogo se debe presentar de forma paginada. Adicionalmente se debe permitir recuperar la cantidad de registros por página.
* Determine e implemente el comportamiento del catálogo ante un intento de acceso a un libro inexistente o a una página inexistente.
* La vista actual del catálogo debe poder descargarse en formato CSV.
## Arquitectura General
A continuacion se incluye la vista general del proyecto, se omitio el direcotorio **```logs/```** y las carpetas de contenido estatico por motivos de simplificacion.
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
│   │        │   ├── header.view.php
│   │        │   └── smallHeader.view.php
│   │        ├── about.view.php
│   │        ├── carrito.view.php
│   │        ├── compraDestino.view.php
│   │        ├── contact.view.php
│   │        ├── index.view.php
│   │        ├── internal-error.php
│   │        ├── libro.view.php
│   │        ├── login.view.php
│   │        ├── medioPago.view.php
│   │        ├── not-found.view.php
│   │        ├── register.view.php
│   │        └── tienda.php
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
## Uso
Si ya esta levantado el servidor apache y estan los permisos configurados, ir a "main.php". Se renderizara un formulario de entrada de datos.
# Limitaciones
* No interactua con la pagina web original (hay que hacer toda una tarea de refactorizacion).
* Esta implementado en un Apache con configuracion minima.
* Esta Hardcodeado, requiere declaracion de interfaces y clases completas.


# COSAS NUEVAS DE PDO

Se agregaron las configuraciones para PDO lo cual es importante que hagan varias cosas

1_ Tener postgreSQL con una base de datos y usuario creado en el .env y el pdo de postgre 
(si no saben que es lo de pdo pregunten a gpt)

2_ Tener instalado phinx

Una vez que tienen instalado phinx lanzan el siguiente comando en la carpeta raiz del proyecto 

- phinx migrate -e development


Luego de esto el proyecto deberia funcar, en si le falta mucho tramite porque en si no anda el template de la tienda
pero queda pendiente un discord para charlarlo

# Postgresql
A continuacion se detallan los pasos para instalar/configurar el motor de bases de datos postgres.
## Docker
Para instalarlo en docker se hicieron los siguientes pasos.
> **Nota:** Los archivos de instalacion/config. estan en la carpeta **```Docker```**

### Build Imagen
Desde la carpeta docker hacer:
```
    docker build -t mi-postgres .
```
### Ejecutar contenedor via CLI
```
    $ docker run --name <nombre_contenedor> -e POSTGRES_PASSWORD=<contraseña> -d <nombre_contenedor>
```
**Ejemplo:**
```
    docker run -d --name mi-postgres -p 5432:5432 mi-postgres
```
### Abrir CLI
Una vez que el contenedor se ejecute, usar este comando para interactuar con la CLI.
```
    docker exec -it mi-postgres sh
```
### Ejecutar (contenedor) psql
Dentro del CLI del contenedor ejecutar:
```
    psql -h <hostname_or_ip> -U <username> [-d <database>]
```
**Ejemplo:**
```
    psql -h localhost -U postgres
```