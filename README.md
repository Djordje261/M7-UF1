# Usuarios empresa(PHP & MySQL)
## ÍNDEX CONTENIDO
**IDE**: Visual Studio Code
**Lenguajes**: HTML, PHP

**Base de Datos**: MySQL

**Resumen**: Hemos desarrollado una pagina web donde podremos gestionar los trabajadores de una empresa

**Creadores**: Daniel Requena Lavado y Djordje  Minakovic

**DIAGRAMA ENTIDAD RELACIÓN**
![Diagrama de clases](PHOTO-2023-05-05-22-17-02.jpg)

**MODELO RELACIONAL**

![Model](model.jpg)

- **Empleados** ( id,primernombre,segundonombre,primerapellido,segundoapellido,foto,cv,idpuesto,fechadeingreso ).
Donde ,id_usuario,és llave forana de Campeón.
- **Usuarios** (id,usuario,password,correo).
- **Puestos** ( id, nombredelpuesto).
Donde idés llave forana de Empleados.
Donde id és llave forana de Usuarios.
Donde id és llave forana de Puestos.
