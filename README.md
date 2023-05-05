

|*M6 Desenvolupament web en entorn client*||
| :- | :- |
|*UF1 Sintaxi del llenguatge. Objectes predefinits del llenguatge*|*Pràctica 1*|


**Exercici 1**: L'objectiu és familiaritzar-se amb l’editor Sublime i les eines del desenvolupador (devtools) dels navegador Chrome i/o Firefox com a entorn de desenvolupament i depuració, i trobar un *workflow* que permet augmentar la productivitat en l'àmbit d'edició HTML, CSS i Javascript.

Un exemple senzill: **demo.html**:

|<p><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"></p><p><**html**></p><p>`  `<**head**></p><p>`    `<**meta** name="generator" content=</p><p>`    `"HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org"></p><p>`    `<**title**></**title**></p><p>`  `</**head**></p><p>`  `<**body**></p><p>`    `<**h1**></p><p>`      `My First Web Page</p><p>`    `</**h1**></p><p>`    `<**p** id="demo"></p><p>`      `My First Paragraph</p><p>`    `</**p**></p><p>`    `<**script** type="text/javascript"></p><p>`		`document.getElementById("demo").innerHTML="My First JavaScript 1";</p><p>`		`document.getElementById("demo").innerHTML="My First JavaScript 2";</p><p>`		`document.getElementById("demo").innerHTML="My First JavaScript 3";</p><p>`    `</**script**></p><p>`  `</**body**></p><p></**html**></p>|
| :- |

1. Posa tres punts d'inspecció en les tres línies Javascript, i has de veure com s'executa el codi pas a pas i com canvia el contingut de l'etiqueta *demo.*

1. Afegeix aquest codi amb errors de sintaxi:


|document.getElementByI("demo").innerHTML="My First JavaScript 4";|
| :- |

1. Contesta: 

On has pogut veure que hi ha un error?  

Quin tipus d’error s’ha produït?

**Exercici 2**: En el següent exemple hi ha un error de sintaxi, quin és? *Fes una captura de pantalla de l’error.* 

|<p><body></p><p>`	`<script type="text/javascript"></p><p>	</p><p>`	`var str="IMG\_0234.JPG\*F16\*100.0mm\*1/320 s\*Canon\*Canon EOS 550D";</p><p>`	`var arrayFoto = str.split("\*");</p><p>`	`document.write("Nom de l'arxiu: "+arrayFoto[0]};</p><p>	</p><p>`	`</script></p><p></body></p>|
| :- |

**Exercici 3**: Escriu una pàgina web utilitzant el llenguatge JavaScript per tal que aparegui una finestra mostrant el missatge "Hola Món". (alert)

**Exercici 4**: Modificar el script anterior per tal que: Tot el codi JavaScript es trobi en un arxiu extern anomenat codi.js i l’script segueixi funcionant de la mateixa manera. 

Després del primer missatge, s'ha de mostrar un altre missatge que digui "Sóc el primer script" Afegir alguns comentaris que expliquin el funcionament del codi Afegir a la pàgina XHTML un missatge d'avís per als navegadors que no tinguin activat el suport de Javascript

**Exercici 5**: Escriu una pàgina web amb JavaScript  tal que:

1. L’usuari introdueixi el seu nom i cognoms, en aquest ordre (Prompt)
1. Després ha de mostrar un quadre de diàleg amb el següent missatge: “És vostè Cognoms, nom? (confirm)
1. Si es prem acceptar, es mostra el missatge: “Has acceptat”, sinó “No has acceptat”. 





|*Departament Informàtica*|*Pàgina  de* |
| :- | -: |


