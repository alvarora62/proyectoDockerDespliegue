# 🔧 **Instalación de Docker Desktop**

### **Requisitos previos**

- **Windows:** Windows 10 64-bit (versión 1903 o superior) o Windows 11 con WSL 2 habilitado.
- **Mac:** macOS Catalina 10.15 o superior.
- **Linux:** Docker Desktop está en fase experimental en algunas distribuciones.

### **Pasos de instalación**

1️⃣ **Descargar Docker Desktop** desde la página oficial de Docker.

2️⃣ Ejecutar el instalador y seguir los pasos en pantalla.

3️⃣ Reiniciar el sistema si es necesario.

4️⃣ **Comprobar la instalación** abriendo una terminal y ejecutando:

```bash
$docker --version
```

![image.png](Manual_Docker.assets/e0f1a8d659e3025ef75bd0fd47b852e93f68abb0.png)

Si Docker está correctamente instalado, se mostrará la versión instalada.

- Salida de código:
  
    ![image.png](Manual_Docker.assets/75098211dc70dad3f4411bd6c5e4d0c46c9141bf.png)

---

## 🖥 **Interfaz de Docker Desktop**

Al abrir Docker Desktop, encontrarás varias secciones clave:

- **Containers / Apps**: Muestra los contenedores en ejecución y sus detalles.
  
    ![image.png](Manual_Docker.assets/5b1d5f7f6c51d3b23d1c4fb1941c7ff19f964d1f.png)

- **Images**: Permite gestionar las imágenes descargadas o creadas.
  
    ![image.png](Manual_Docker.assets/a12a06d255db0d3565b4f562c89d678c23e92b7b.png)

- **Volumes**: Lista los volúmenes de almacenamiento persistente.
  
    ![image.png](Manual_Docker.assets/7e21ab783b6c264dc8dbc97fa4f28c453798e418.png)

- **Dev Environments**: Herramienta para gestionar entornos de desarrollo en contenedores.
  
    ![image.png](Manual_Docker.assets/28fedb2f63808e57d0d3b4567338e3e7242c6a9d.png)

---

# 🚀 E1 - Uso Básico de Docker Desktop (Interfaz Gráfica)

## 🛠 Introducción

Docker Desktop proporciona una interfaz gráfica amigable para gestionar imágenes, contenedores, volúmenes y redes sin necesidad de usar la línea de comandos. A continuación, se detallan los pasos básicos para operar Docker Desktop de manera eficiente.

---

## 1️⃣ **Descargar una imagen**

Las imágenes en Docker son plantillas que permiten la creación de contenedores.

📌 **Pasos en Docker Desktop:**

1. Abrir **Docker Desktop**.
   
    ![image.png](Manual_Docker.assets/b46912ff9a866b07ade77645582d6badfad0cd02.png)

2. Ir a la sección **"Images"** en el menú lateral.
   
    ![image.png](Manual_Docker.assets/b19e4cf1185a99bf1dcb43fd01aa7c907867cc06.png)

3. Hacer clic en (Search images to run).
   
    ![image.png](Manual_Docker.assets/92c47ee9d725a55f2847867a0ec75ee4613497d5.png)

4. En la ventana emergente, escribir el nombre de la imagen:➜ `nginx`
   
    ![image.png](Manual_Docker.assets/98c1021c47db2f64727246a3bc0a180f4890b44c.png)

5. Hacer clic en **"Pull"** y esperar a que se descargue la imagen.
   
    ![image.png](Manual_Docker.assets/515a654a22170f87568ac6828349a977c88bc261.png)

6. Una vez descargada, la imagen aparecerá en la lista de imágenes disponibles.
   
    ![image.png](Manual_Docker.assets/19687031036a3c44c6609fe7aadb2a0cf8c7442c.png)

---

## 2️⃣ **Ejecutar un contenedor**

Una vez que tenemos una imagen, podemos ejecutar un contenedor basado en ella.

📌 **Pasos en Docker Desktop:**

1. Ir a la sección **"Images"**.
   
    ![image.png](Manual_Docker.assets/af570cf969ebefba56ef44a71f75da3a590ab14a.png)

2. Buscar la imagen `nginx` en la lista.
   
    ![image.png](Manual_Docker.assets/d0f906a4facd07cf299b361077d7866f676b02a2.png)

3. Hacer clic en **"Run"**.

![image.png](Manual_Docker.assets/b0b2ba7834fa8efbde2dd81fcb014951a1eee0cf.png)

1. En la ventana emergente, configurar:
   
   - **Container Name:** `mi-servidor`
     
       ![image.png](Manual_Docker.assets/7b1ffc056d0f29702a826fe85379528fbfa59db7.png)
   
   - **Ports:** `8080:80`
     
       ![image.png](Manual_Docker.assets/b9c66dad708451cdba5f923b38f408809e2f40a0.png)

2. Hacer clic en **"Run"**.
   
    ![image.png](Manual_Docker.assets/0a66c8c75921fc963d258a7a704f32a9a2dac849.png)

3. Ir a la sección **"Containers"**.
   
    ![image.png](Manual_Docker.assets/c49708821d912717d43a93da74b39823e3ffea5a.png)

4. El contenedor se iniciará y aparecerá en la sección **"Containers / Apps"**.
   
    ![image.png](Manual_Docker.assets/cc314f8a4a8476c6755e28f3b32f99b02842b774.png)

---

## 3️⃣ **Listar contenedores en ejecución**

Para ver qué contenedores están en ejecución en Docker Desktop:

📌 **Pasos en Docker Desktop:**

1. Ir a la sección **"Containers"** en el menú lateral.
   
    ![image.png](Manual_Docker.assets/261895c2225f776bb1dbfcdbecb7640e4741d4fa.png)

2. Aquí se listan todos los contenedores en ejecución.

3. Se puede ver el estado del contenedor y sus logs en tiempo real.
   
    ![image.png](Manual_Docker.assets/acbf1c5c608d8491032535a705cf4c43f14ea6f3.png)

---

## 4️⃣ **Detener y eliminar contenedores**

Para detener y eliminar un contenedor en Docker Desktop:

📌 **Pasos en Docker Desktop:**

1. Ir a la sección **"Containers"**.
   
    ![image.png](Manual_Docker.assets/501a05219fb041444bc5e0034372a961d744ba45.png)s

2. Buscar el contenedor **`mi-servidor`**.
   
   ![image 24.png](Manual_Docker.assets/9e27159e858e6c317d1d9cdd57c88cd9d168f610.png)

3. Hacer clic en el botón de **"Stop"** para detenerlo.
   
   ![image 25.png](Manual_Docker.assets/963baf721e2bc3d89efb04d889b6fd7996c6e8be.png)

4. Una vez detenido, hacer clic en **"Delete"** para eliminarlo.
   
   ![image 26.png](Manual_Docker.assets/cea827f915e75e90b7e40fc103f5122e2e4bf04e.png)

---

## 5️⃣ **Ver logs de un contenedor**

Docker Desktop permite visualizar los logs de un contenedor en ejecución para monitorear su actividad.

📌 **Pasos en Docker Desktop:**

1. Ir a la sección **"Containers"**.
   
   ![image 21.png](Manual_Docker.assets/261895c2225f776bb1dbfcdbecb7640e4741d4fa.png)

2. Hacer clic en el contenedor **`mi-servidor`**.
   
   ![image 27.png](Manual_Docker.assets/4e1bf439acef670fcbaae4dc3ff52e7ad94a7c54.png)

3. En la pestaña superior, hacer clic en **"View Details"**.
   
   ![image 28.png](Manual_Docker.assets/2613a1c27ab8e704a561feb633cbdf63d026c46a.png)

4. Aquí se mostrarán los registros de actividad del contenedor.
   
   ![image 29.png](Manual_Docker.assets/440045a6449d1f85a0d5947e1eeff8dbd45d33dc.png)

---

# 🛠  Configuración Avanzada

## 📌 **Habilitar WSL 2 en Windows**

Para mejorar el rendimiento en Windows, Docker recomienda usar **WSL 2** (Windows Subsystem for Linux).

📌 **Pasos en Windows:**

1. Abrir **Docker Desktop**.
   
   ![image 30.png](Manual_Docker.assets/3ae002c9d4374d7f81a4bf491771432823a5c5df.png)

2. Ir a **Settings (Configuraciones)**.
   
   ![image 31.png](Manual_Docker.assets/f6027f9ceb9fc7ffd31a5558dbc8e72223072d24.png)

3. En la sección **General**, activar la opción **"Use the WSL 2 based engine"**.
   
   ![image 32.png](Manual_Docker.assets/7532060e033265417998a348208725c49deb7d32.png)

4. Hacer clic en **"Apply & Restart"** para aplicar los cambios.
   
   ![](Manual_Docker.assets/2025-02-21-13-25-59-image.png)

---