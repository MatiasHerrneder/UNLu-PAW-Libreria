# CSS
El que esta aca, tiene motivos de prueba. Los colores estan para mostrar los limites de cada elemento.
Cuando este bien hecho, se hara una copia del css de testeo y se lo cambiara a un nombre distinto para produccion.
La idea es no tocar el de producion, solo modificar el testeo hasta que salga y luego reemplazar al de produccion.
## Notacion
El nombre de cada hijo tiene el nombre del padre. Por ejemplo, si una imagen esta en un div de clase 'portrait' el selector de la imagen se llamara (esto si hablamos de clases anidadas)
```
    .portrait {}
    .portrait_image {}
```
## Consideraciones
* El placeholder de promociones es un div, pero solo para mostrar como se veria con las dimensiones correctas.
* Se elimino buttons. No formaban parte de un formulario.
* Para los libros, se usaron divs de caracter ilustrativo, despues de reemplazara con mejores etiquetas.