# 1. [DEV] Aplicación ONLINE (en AWS a través de Platform.sh)

<p align="center">
<a href="https://main-bvxea6i-pzxxuekmihirk.eu-5.platformsh.site/" target="_blanck"><img src="https://github.com/antoniojturel/motocampeonas/blob/main/anteproyecto/imagenes/Imagen2.png" alt="[DEV] Aplicación ONLINE en Platform.sh" width="580px" /></a>
</p>

# 2. Introducción

El proyecto de desarrollo de esta aplicación (motocampeonas) se está desarrollando con el framework de **[Symfony](https://symfony.com/)** de tipo Modelo-Vista-Controlador (**[MVC](https://es.wikipedia.org/wiki/Modelo%E2%80%93vista%E2%80%93controlador)**) y en este repositorio se encuentran los ficheros editables para que funcione su ejecución en **local** y en la **nube**.
El proyecto forma parte del curso **[SYMFONY (FRAMEWORK PARA PHP)](https://cftic.centrosdeformacion.empleo.madrid.org/cursos-2020-21/symfony-framework-para-php-)** impartido en el Centro de Referencia Nacional de Desarrollo Informático y Comunicaciones (**[CFTIC](https://cftic.centrosdeformacion.empleo.madrid.org/)**) a través de la empresa **[CAS Training](https://cas-training.com/)**.

# 3. Objetivo

- Desarrollar aplicaciones web utilizando el framework de PHP Symfony.
- Explotar las funcionalidades del framwork de desarrollo rápido **(despliegue en local y en la nube)**.
- Crear un proyecto web de principio a fin utilizando Symfony.

# 4. Alcance

La aplicación MotoCampeones estará especializada en rankings, registros y en predicciones de las marcas de motos en las principales competiciones de motociclismo en velocidad y motocross.

Las herramientas y tecnologías que se han usado son las siguientes:
- Para ejecutar código PHP en local tenemos **[XAMPP (servidor Apache + MariaDB + PHP + Perl)](https://www.apachefriends.org)**.
- El IDE de desarrollo es **[Visual Studio Code](https://code.visualstudio.com/)** y como mínimo se instalan los siguientes plugins:
    - **[PHP Extension Pack](https://marketplace.visualstudio.com/items?itemName=xdebug.php-pack)**.
    - **[PHP Server](https://marketplace.visualstudio.com/items?itemName=brapifra.phpserver)**.
- La instalación y configuración de Symfony a través de **[Composer](https://getcomposer.org)**.
- La instalación y configuración de la base de datos a través de **[Doctrine](https://www.doctrine-project.org/)**.
- Los estilos **[CSS](https://es.wikipedia.org/wiki/CSS)** y el refuerzo del frontend con **[JavaScript](https://es.wikipedia.org/wiki/JavaScript)**, **[Bootstrap](https://getbootstrap.com/)** y **[jQuery](https://jquery.com/)**. A través de la tecnología de Red de Distribución de Contenidos (**[CDN](https://es.wikipedia.org/wiki/Red_de_distribuci%C3%B3n_de_contenidos)**).
- Control de cambios en local con **[Git](https://git-scm.com/)** y gestión del proyecto con sus backups online en los repositorios de **[Github](https://github.com/)** y **[Gitlab](https://gitlab.com/)**.
- Despliegue en la **[nube de tipo PaaS](https://en.wikipedia.org/wiki/Platform_as_a_service)** a través de **[Platform.sh](https://platform.sh/)**.

# 5. [4] Pasos de instalación/configuración en local

1. Instalaciones:
    - **[PHP 8.1](https://windows.php.net/download#php-8.1)**
    - **[Composer](https://getcomposer.org/download/)**
    - **[XAMPP](https://www.apachefriends.org/download.html)**
    - **[Visual Studio Code](https://code.visualstudio.com/download)**
    - **[Git](https://git-scm.com/downloads)**

2. Crear un proyecto de Symfony y añadir las siguientes librerías como mínimo (repositorio controlado en local junto con Github y Gitlab):
~~~
$ composer create-project symfony/skeleton:"6.1.*" nombre_del_proyecto
$ cd nombre_del_proyecto
$ composer require webapp
$ composer require twig
$ composer require doctrine/annotations
$ composer require symfony/orm-pack
$ composer require --dev symfony/maker-bundle
~~~ 

En este caso no hay configuración de un **[Docker](https://www.docker.com/)**:

<p>
<img src="https://github.com/antoniojturel/motocampeonas/blob/main/anteproyecto/imagenes/Captura.PNG" alt="Configuración de un Docker" width="" /></a>
</p>

3. Comprobación del proyecto creado
~~~
$ php bin/console about
~~~ 

4. Ejecución del proyecto en local (por ejemplo en el puerto 8000)
~~~
$ php -S localhost:8000 -t public/
~~~ 

En el navegador: 
~~~
http://localhost:8000/
~~~

# 6. [5] Pasos de instalación/configuración (despliegue en la nube)

1. Abrir una cuenta en Platform.sh y crear un proyecto nuevo en la región deseada (por ejemplo en la **[nube de Amazon](https://aws.amazon.com/es/free/?trk=2d5aad89-991b-4184-98b5-1f562e3102c8&sc_channel=ps&sc_campaign=acquisition&sc_medium=ACQ-P|PS-GO|Brand|Desktop|SU|Core-Main|Core|ES|ES|Text&ef_id=CjwKCAjw5s6WBhA4EiwACGncZfDpAMhHdboXzqD3gXOs215IILOGx0x_imdbdyFSIGLwngdve3OvYhoCzPoQAvD_BwE:G:s&s_kwcid=AL!4422!3!561218200770!e!!g!!aws&ef_id=CjwKCAjw5s6WBhA4EiwACGncZfDpAMhHdboXzqD3gXOs215IILOGx0x_imdbdyFSIGLwngdve3OvYhoCzPoQAvD_BwE:G:s&s_kwcid=AL!4422!3!561218200770!e!!g!!aws&all-free-tier.sort-by=item.additionalFields.SortRank&all-free-tier.sort-order=asc&awsf.Free%20Tier%20Types=*all&awsf.Free%20Tier%20Categories=*all)** -> Europe - Sweden eu-5 - AWS) 

2. Clonarlo en local
~~~
$ git clone ...@....git nombre_del_proyecto_creado
~~~

3. Trasladar los ficheros creados en el paso 2. del punto anterior (5.) a la carpeta del repositorio clonado en el paso anterior

También hay que añadir 3 ficheros de configuración para el despliegue:

- **[.platform.app.yaml](https://github.com/antoniojturel/motocampeonas/blob/main/.platform.app.yaml)**
    - Documentación: **[https://docs.platform.sh/create-apps.html](https://docs.platform.sh/create-apps.html)**
- **[~/.platform/routes.yaml](https://github.com/antoniojturel/motocampeonas/blob/main/.platform/routes.yaml)**
    - Documentación: **[https://docs.platform.sh/define-routes.html](https://docs.platform.sh/define-routes.html)**
- **[~/.platform/services.yaml](https://github.com/antoniojturel/motocampeonas/blob/main/.platform/services.yaml)**
    - Documentación: **[https://docs.platform.sh/add-services.html](https://docs.platform.sh/add-services.html)**

4. **[Añadir la primera página con su vista y controlador](https://symfony.com/doc/current/page_creation.html#creating-a-page-route-and-controller)**

- **Ruta de la vista:** ~/templates/nombre_de_la_vista.html.twig
- **Ruta del controlador:** ~/src/Controller/nombre_del_controladorController.php

5. Despliegue a la nube
~~~
$ git add .
$ git commit -m "descripción del commit"
$ git push nombre_repositorio (lo más probable que se haya creado con la denominación de 'origin')
~~~

# 6 .Principales ficheros editables

- ~/.platform/*
- ~/public/*
- ~/src/Controller
- ~/src/Entity
- ~/src/Repository
- ~/templates/*
- ~/.env
- ~/.platform.app.yaml

# 7. Documentación

## Symfony

- Documentación:
    - **[https://symfony.com/doc/current/index.html](https://symfony.com/doc/current/index.html)**.
- Demo en Github
    - **[https://github.com/symfony/demo](https://github.com/symfony/demo)**.

## PHP

- Documentación:
    - **[https://www.php.net/manual/es/](https://www.php.net/manual/es/)**.
- GitHub:
    - **[https://github.com/php/?q=doc](https://github.com/php/?q=doc)**.

## XAMPP (Apache Friends)

- GitHub:
    - **[https://github.com/ApacheFriends](https://github.com/ApacheFriends)**.

## Visual Studio Code

- Documentación:
    - **[https://code.visualstudio.com/docs](https://code.visualstudio.com/docs)**.

## Composer

- Documentación:
    - **[https://getcomposer.org/doc/](https://getcomposer.org/doc/)**.
- GitHub:
    - **[https://github.com/composer/composer](https://github.com/composer/composer)**.

## Bootstrap

- Documentación:
    - **[https://getbootstrap.com/docs/5.1/getting-started/introduction/](https://getbootstrap.com/docs/5.1/getting-started/introduction/)**.

## jQuery

- Documentación:
    - **[https://api.jquery.com/](https://api.jquery.com/)**.
- GitHub:
    - **[https://github.com/jquery/jquery](https://github.com/jquery/jquery)**.


## Doctrine

- Documentación:
    - **[https://www.doctrine-project.org/projects/doctrine-orm/en/2.11/index.html](https://www.doctrine-project.org/projects/doctrine-orm/en/2.11/index.html)**.
- GitHub:
    - **[https://github.com/doctrine](https://github.com/doctrine)**.

# 8. Referencias

## Datos
- **[MXGP](https://www.mxgp.com)**
- **[MotoGP](https://www.motogp.com)**
- **[SBK](https://www.worldsbk.com/es)**
- **[FIM](https://www.fim-moto.com)**
    - **[https://www.fim-moto.com/en/sports/view/fim-mx3-motocross-world-championship-22](https://www.fim-moto.com/en/sports/view/fim-mx3-motocross-world-championship-22)**

## Diseño

- **[Bootstrap](https://getbootstrap.com/docs/5.1/getting-started/introduction/)**
- **[w3school](https://www.w3schools.com/)**
- **[MDB](https://mdbootstrap.com/)** 
