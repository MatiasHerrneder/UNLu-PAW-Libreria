# Cambios/TODO
* Se agrego el resto de las rutas (register/login/medio pago, etc.) al PageController.
* Se elimino ```src/App/views/parts/nav.view.php``` en cambio se uso los fragmentos de codigo para los headers y footers.
* Se agrego ```src/App/views/parts/header.view.php``` para renderizar el header completo de cada pagina.
* Se agrego ```src/App/views/parts/footer.view.php``` para renderizar el footer completo de cada pagina.
* Se agrego ```src/App/views/index.view.php``` para renderizar el index (no incluye todavia el resto del body).
* Se agregaron rutas a ```App/src/core/Router.php``` todas aquellas que aparecian en la branch anterior ```ultra_mega_merge```.
* Se agrego el path ```src/App/views/Resources/img/``` para incluir las imagenes en las vistas, esta vacio.
* Se actualizo el bootstrap para que ```App/src/core/Router.php``` refleje los cambios antes mencionados.

## TODO:
- [ ] Hacer que los links **```<a>```**  llamen a ```public/index.php``` ya que automatiza las redirecciones. O ```App/src/core/Router.php```, pero no se esta seguro o se toco por las dudas.
- [ ] Agregar ```<body>``` a ```src/App/views/index.view.php```
- [ ] Faltan de hacer las views (las versiones completas).
- [ ] Las imagenes de las redes sociales deben estar en minuscula, ya que es asi como se generan auto. en ```src/App/views/parts/footer.view.php```

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
## Arquitectura
Se coloco los prototipos php para la realizacion del punto 4 del trabajo practico 3, en la carpeta src:
```
/src
├── main.php               ← Punto de entrada
├── data/
│   └── books.json
├── controllers/
│   └── Controlador.php
├── model/
│   └── LibroModel.php
├── view/
│   ├── Formulario.php
│   └── TablaLibro.php
```
Aca se detalla una simple implementacion de php para mostrar la categoria seleccionada en un formulario.
* La base de datos, de momento, esta en un archivo json llamado "books.json"
* La pagina "main.php" es el punto de ingreso, carga el modelo, el formulario.
* La pagina "Controlador.php" toma los datos enviados por GET, toma la "libros.json", filtra los resultados y lo envia a "TablaLibro.php"
* "TablaLibro" recibe datos de "Controlador.php" y renderiza una tabla con los datos suministrados.
## Uso
Si ya esta levantado el servidor apache y estan los permisos configurados, ir a "main.php". Se renderizara un formulario de entrada de datos.
# Limitaciones
* No interactua con la pagina web original (hay que hacer toda una tarea de refactorizacion).
* Esta implementado en un Apache con configuracion minima.
* Esta Hardcodeado, requiere declaracion de interfaces y clases completas.
