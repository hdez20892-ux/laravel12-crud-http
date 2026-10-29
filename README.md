# Práctica Académica: Desarrollo de Aplicación CRUD con Peticiones HTTP en Laravel 12

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cervical-red.png" width="400" alt="Laravel Logo">
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>

</p>

---

**** Información General de la Práctica
* Materia:Aplicaciones Web
* Framework:Laravel 12
* Tecnologías de Soporte:Bootstrap 5, Vite, Blade Templates, PHP 8.2
* Almacenamiento:Manejo de sesiones de Laravel (Simulación de base de datos en memoria de sesión)

---

***** Descripción del Proyecto
Este proyecto consiste en el desarrollo integral de una aplicación web basada en arquitectura MVC (Modelo-Vista-Controlador), implementando operaciones **CRUD** (Crear, Leer, Actualizar y Eliminar) mediante el uso estricto de **peticiones HTTP** estándar en Laravel 12. El diseño de la interfaz de usuario se encuentra optimizado con componentes modernos de **Bootstrap 5** y herramientas de compilación de assets mediante Vite.

---

***** Arquitectura y Métodos HTTP Implementados

El controlador `ProductoController` gestiona las solicitudes del cliente a través de los siguientes métodos y verbos HTTP:

1. **`GET /productos` (Listado y Filtrado)**:
   * Recupera el listado completo de los registros almacenados en la sesión.
   * Incorpora parámetros de consulta (`query strings`) para filtrar dinámicamente los registros por **nombre** y **categoría**.

2. **`POST /productos` (Creación de Registros)**:
   * Procesa el envío del formulario de alta mediante el método POST.
   * Implementa validaciones estrictas del lado del servidor (`$request->validate()`) con manejo visual de errores mediante clases `is-invalid` y alertas flash.

3. **`PUT /productos/{id}` (Actualización de Registros)**:
   * Modifica los datos de un recurso existente utilizando el método HTTP PUT mediante el directivo de spoofing de formularios de Blade (`@method('PUT')`).

4. **`DELETE /productos/{id}` (Eliminación Segura)**:
   * Elimina un recurso específico de la sesión al recibir la petición DELETE, integrado de manera interactiva con un **modal de confirmación de Bootstrap 5**.

---

## Evidencias del Funcionamiento (Captura de Pantalla)

A continuación se muestra la evidencia gráfica de la ejecución correcta de cada uno de los módulos de la aplicación:

****1. Vista General del Listado y Filtros (GET)
Descripción: Interfaz principal que muestra la tabla de productos y el formulario de búsqueda por filtros.
<img width="1012" height="488" alt="image" src="https://github.com/user-attachments/assets/f8668592-6686-4669-9ea4-10bf4cd4a50a" />
Descripción: Interfaz que muestra el filtrado por nombre del producto
<img width="1003" height="312" alt="image" src="https://github.com/user-attachments/assets/221229ae-e4b1-446c-99df-4144bc7b4053" />
Descripción: Interfaz que muestra la inserccion de un nuevo producto
<img width="855" height="527" alt="image" src="https://github.com/user-attachments/assets/80ed08ba-355c-4674-91e4-82255c97b319" />




