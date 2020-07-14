# CRM-Testing
CRM Básico realizado en Laravel 7.5 para prueba técnica.

El CRM consiste en gestionar escuelas y alumnos, con los siguientes requisitos:
Proyecto CRM en Laravel para administrar escuelas y sus alumnos.
## Una escuela tendrá como mínimo los siguientes campos:
- Nombre (requerido)
- Dirección (requerido)
- Logotipo (mínimo 200x200 y no más de 2 MB)
- Correo electrónico
- Teléfono
- Página web

## Un alumno tendrá como mínimo los siguientes campos:
- Nombre (requerido)
- Apellidos (requerido)
- Escuela (clave forana a escuela)
- Fecha de nacimiento (requerido)
- Ciudad natal
## Usar las migraciones y Seeds de Laravel para crear los esquemas anteriores.
## Usar Resource Controllers de Laravel para crear la funcionalidad CRUD de los dos modelos, creando un ítem de menú para gestionar cada uno de ellos.
## Usar paginación para mostrar las listas de ambos modelos.
## Guardar los logotipos de las escuelas para que sean públicos.
## Crear un usuario administrador para que pueda entrar al gestor, con usuario admin@admin.com y contraseña “password”.
## Usar el diseño de autentificación por defecto de Bootstrap y deshabilitar la capacidad de registro.
## No es necesario centrarse en el diseño visual del CRM.
