# Actividad2: Carga de módulos 

## Descripción 📋 

Reconvertir archivos a php organizar navegador y footer en módulos y cargarlos con requires. 

## Enunciado 📒 

1. Pasar todos los .html a .php, cambiando los links del navegador. 

2. Del producto de index.php, sustituir por variables el: 

- Título 
- Descripción 
- Precio 

Al inicio del archivo guardamos las variables con la información: 

    $titulo = “Lenovo...” etc. 

Y en el html, sacamos por pantalla la información mediante echo o <?= ?> 

 

3. Coger el código html correspondiente al navegador y footer y guardarlo como dos módulos aparte. Por ejemplo: 

    modules/navigator.php 
    modules/footer.php 

4. Cargar el navegador y el footer en todas las páginas (index.php, contacto.phpy servicios.php ) 


6. OPCIONAL:  Clase Activa en el navegador.  

Si clicamos en el enlace de “Contacto”, y por lo tanto está cargado contacto.php, el link del navegador tiene que indicar que estamos en la página de productos mediante un estilo diferente. 

Lo mismo si clicamos en servicios: 

Esto lo podemos hacer del siguiente modo: 

    1. Una clase css  a.link.active { text-decoration: underline } 

    2. Si estamos en la página contacto --> ponemos clase “active” al link de contacto. Si estamos en la página de servicios –-> ponemos clase “active” al link de servicios. 