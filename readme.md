# Actividad 7. Formulario de Login

## Descripción rápida 📋
Formulario de Login de usuario que haga validaciones de email y contraseña.
Si hay error mostrar por pantalla un mensaje. Si se pasan las validaciones, mostramos información del usuario.

## Descripción
1. Completar el form html con los atributos necesario para enviar la información al mismo arhivo index.php. Petición POST.
2. Recoger la información y proteger las validaciones.
3. Validar los campos:
    3.1 Campos obligatorios: email y contraseña (no pueden ser vacíos)
    3.2 El correo tenga formato de correo (texto@texto.texto)
    3.3 La contraseña tiene que tener al menos 6 caracteres, y no puede contener las palabras "password" ni "123456"
4. Si la validación completa es OK:
    4.1 NO mostramos el formulario
    4.2 Mostramos un div con información de login del estilo: "Bienvenido: correo@usuario.com"
    4.3 En el navegador ocultar botón de Login y mostrar uno de Logout
5. Si la validación completa NO ES OK:
    5.1 Mostramos el formulario
    5.2 Mostramos el error que ha ocasionado el no login.

## Recomendaciones
  1 Utiliza funciones que tengan un único propósito
  - Validar si los campos obligatorios están o no
  - Validar si el correo tiene el formato adecuado
  - Validar si la contraseña ... 

  2 Utiliza una única función que resuelva si se ha validado el login o no.

  3 Haz módulos diferentes y cárgalos con requires o includes. Por ejemplo funciones.php, formlogin.php, data.php...


