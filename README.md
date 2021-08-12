## swapi_app
Aplicacion de consumo de datos desde la API Swapi para analizar y buscar informacion de Naves y Vehiculos.

<p align="center">
  <a href="#Requerimientos">Requerimientos</a> •
  <a href="#como-funciona">Como funciona</a> •
  <a href="#funcionamiento">Funcionamiento</a> •
  <a href="#estructura">Estructura</a> •

</p>


## Requerimientos

Esta desarrollado en Laravel 8, con lo cual es necesario tener PHP 7.3 o superior y MySQL instalado.

## Como funciona

```bash
# Clonar repositorio
$ git clone https://github.com/b0dhisattva/swapi_app.git

# Ir al repositorio
$ cd swapi_app

# ejecutar migraciones
$ php artisan migrate

# Ejecutar aplicacion
$ php artisan serve
```

NOTA: La base de datos se llama "swapi" que su configuracion de conexion se encuentra en .env en la carpeta raiz del proyecto.

## Funcionamiento

En la pagina principal apenas inicia la aplicacion, se ven los datos consultados de las naves y vehiculos desde la API Swapi y permite realizar la importacion de todas sus caracteristicas en la base de datos para poder asi analizar la informacion detallada.

![Inicio](screenshots/inicio.jpg?raw=true)


Se puede listar estos resultados importados con el boton "Listar" y luego tambien borrarlos de la base de datos si se desea.

## Estructura

Hay 3 controladores en "app/Http/Controllers" llamadas ( Naves, Vehiculos y Swapi) donde se ejecutan los recursos necesarios para las funcionalidades desarrolladas.

Librerias utilizadas

<li>Datatables</li>
<li>Bootstrap</li>
<li>TailWind CSS</li>
