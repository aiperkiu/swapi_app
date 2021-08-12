# swapi_app
Aplicacion de consumo de datos desde la API Swapi para analizar y buscar informacion de Naves y Vehiculos.

#Requerimientos

Esta desarrollado en Laravel 8 con lo que el unico requerimiento es tener PHP 7.3 o superior y MySQL.

La base de datos se llama "swapi" que su configuracion de conexion se encuentra en .env en la carpeta raiz del proyecto.

Procedimiento de instalacion seria clonar el repositorio e iniciar las migraciones para crear las tablas con PHP ARTISAN MIGRATE y luego PHP ARTISAN SERVE para poder ejecutar la misma.


#Funcionamiento

En la pagina principal apenas carga la app se ven los datos consultados de las naves y vehiculos desde la API Swapi y permite realizar la importacion de todas sus caracteristicas en la base de datos para poder asi analizar la informacion detallada.

Se puede listar estos resultados importados con el boton "Listar" y luego tambien borrarlos de la base de datos si se desea.

#Estructura

Hay 3 controladores en "app/Http/Controllers" llamadas ( Naves, Vehiculos y Swapi) donde se ejecutan los recursos necesarios para las funcionalidades desarrolladas.

Librerias utilizadas
-Datatables
-Bootstrap
-TailWind CSS
