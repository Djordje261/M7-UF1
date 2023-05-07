# Usuarios empresa(PHP & MySQL)
## ÍNDEX CONTENIDO
**IDE**: Visual Studio Code
**Lenguajes**: HTML, PHP

**Base de Datos**: MySQL

**Resumen**: Hemos desarrollado una pagina web donde podremos gestionar los trabajadores de una empresa

**Creadores**: Daniel Requena Lavado y Djordje  Minakovic
**DIAGRAMA ENTIDAD RELACIÓN**
![Diagrama de clases](diagrama_E-R.png)

**MODELO RELACIONAL**
- **Campeón** ( id_campeon, id_usuario,nivel,ataque,armadura,vida, nombre).
Donde ,id_usuario,és llave forana de Campeón.
- **Usuario** (id_usuario, nombre_cuenta,contrasenya).
- **Posee** ( id_posee, id_habilidad, id_campeón).
Donde id_habilidad és llave forana de Habilidades.
Donde id_campeón és llave forana de Campeón.
- **Habilidades** ( id_habilidad,nombre,descripción,id_tipo_habilidad).
Donde id_tipo_habilidad és llave forana de Habilidad.
- **Tipo_habilidad** (id_tipoDeHabilidad, tipo).
