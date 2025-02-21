# 🛠 E2 - Servidor de Base de Datos con Docker Desktop (Interfaz Gráfica)

📌 **Introducción**

Este ejercicio consiste en desplegar un servidor de base de datos utilizando **Docker Desktop**, trabajando con la imagen oficial de **MariaDB**. Se crearán contenedores, se gestionarán volúmenes persistentes y se realizará la conexión con una herramienta gráfica.

---

**Paso 1: Descargar la imagen de MariaDB**

1. Abre **Docker Desktop**.
   
    ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-04-22-image.png)

2. Ve a la pestaña **"Images"**.
   
    ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-04-40-image.png)

3. En la parte superior derecha, haz clic en **"Buscar imágenes"**.
   
    ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-04-48-image.png)

4. Escribe `mariadb` y selecciona la opción oficial.
   
    ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-04-59-image.png)

5. Haz clic en **"Pull"** para descargar la imagen.
   
    ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-05-12-image.png)

---

**Paso 2: Crear y ejecutar el contenedor**

1. En **Docker Desktop**, ve a la pestaña **"Images"** y haz clic en **"Run"**.
   
    ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-06-01-image.png)

2. Configura los siguientes parámetros:
   
   - **Image**: `mariadb`
   
   - **Container Name**: `bbdd`
   
   - **Ports**:
     
     - Public Port: `3306`
     - Container Port: `3306`
   
   - **Volumes**:
     
     - Añadir un volumen **"datos-mariadb"** y asignarlo a `/var/lib/mysql`.
   
   - **Environment Variables**:
     
     - `MYSQL_ROOT_PASSWORD` - `root`
     
     - `MYSQL_DATABASE` - `base`
     
     - `MYSQL_USER`  - `daw`
     
     - `MYSQL_PASSWORD`  - `daw`
       
       ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-06-13-image.png)

3. Haz clic en **"Run"** para iniciar el contenedor.
   
    ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-06-33-image.png)

---

**Paso 3: Conexión a la base de datos**

Para verificar que el servidor de base de datos está funcionando correctamente:

1. Abre **DBeaver** u otra herramienta de conexión.
   
    ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-06-45-image.png)

2. Configura la conexión con los siguientes datos:
   
   - **Host**: `localhost`
   
   - **Puerto**: `3306`
   
   - **Usuario**: `daw`
   
   - **Contraseña**: `daw`
   
   - **Base de datos**: `base`
     
     ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-06-54-image.png)

3. Guarda la configuración y prueba la conexión.

![](E2ServidorBaseDeDatos.assets/2025-02-21-14-07-01-image.png)

![](E2ServidorBaseDeDatos.assets/2025-02-21-14-07-07-image.png)

**Crear una base de datos y una tabla**

Ejecuta en la interfaz de DBeaver:

```sql
CREATE TABLE alumnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    edad INT
);
```

- Salida de código:
  
    ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-07-36-image.png)

---

**Paso 4: Detener y eliminar el contenedor**

1. Ve a **Docker Desktop** → **Containers**.
   
    ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-07-43-image.png)

2. Busca el contenedor `bbdd`.
   
   ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-07-53-image.png)

3. Haz clic en **"Stop"** para detenerlo.
   
   ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-07-58-image.png)

4. Luego, haz clic en **"Delete"** para eliminarlo.
   
   ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-08-05-image.png)

---

1. Verifica que el volumen **"datos-mariadb"** sigue existiendo en la pestaña **Volumes**.

![](E2ServidorBaseDeDatos.assets/2025-02-21-14-08-19-image.png)

---

**Paso 5: Crear un nuevo contenedor reutilizando los datos**

Ahora, creamos un nuevo contenedor `bbdd-2`, reutilizando el volumen **"datos-mariadb"**:

1. Repite los pasos del **Paso 2**, pero cambia el nombre del contenedor a **`bbdd-2`**.
   
    ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-08-34-image.png)

2. Asigna el volumen **"datos-mariadb"** nuevamente a `/var/lib/mysql`.
   
   ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-09-02-image.png)

3. Inicia el contenedor y verifica en **DBeaver** si la base de datos y la tabla siguen existiendo.

![](E2ServidorBaseDeDatos.assets/2025-02-21-14-09-37-image.png)

---

**Paso 6: Intentar borrar la imagen de MariaDB**

1. En **Docker Desktop**, ve a la pestaña **Images**.
   
    ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-09-44-image.png)

2. Intenta eliminar la imagen `mariadb`.
   
   ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-09-52-image.png)

3. Se generará un error indicando que hay contenedores en uso.
   
   ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-10-03-image.png)

---

**Paso 7: Eliminar todo**

1. **Detener y eliminar el contenedor `bbdd-2`**:
   
   - Ve a **Containers** → Selecciona `bbdd-2`.
     
       ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-10-15-image.png)
   
   - Haz clic en **"Stop"** y luego en **"Delete"**.
     
     ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-10-22-image.png)

2. **Eliminar el volumen**:
   
   - Ve a la pestaña **Volumes**.
     
       ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-10-31-image.png)
   
   - Busca **"datos-mariadb"** y elimínalo.
     
     ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-10-40-image.png)

3. **Eliminar la imagen de MariaDB**:
   
   - Ve a la pestaña **Images**.
     
       ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-10-48-image.png)
   
   - Selecciona `mariadb` y haz clic en **"Delete"**.
     
     ![](E2ServidorBaseDeDatos.assets/2025-02-21-14-10-58-image.png)

---