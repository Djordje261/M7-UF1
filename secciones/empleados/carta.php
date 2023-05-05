<?php

include("../../bd.php");

if(isset( $_GET['txtID'])) {
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";


    $sentencia=$conexion->prepare("SELECT *,(SELECT nombredelpuesto 
    FROM tbl_puestos 
    WHERE tbl_puestos.id=tbl_empleados.idpuesto limit 1) as puesto FROM tbl_empleados WHERE id=:id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);





    $primernombre=$registro["primernombre"];
    $segundonombre=$registro["segundonombre"];
    $primerapellido=$registro["primerapellido"];
    $segundoapellido=$registro["segundoapellido"];
   
   $nombreCompleto=$primernombre." ".$segundonombre." ".$primerapellido." ". $segundoapellido;
   
    $foto=$registro["foto"];
    $cv=$registro["cv"];
    $idpuesto=$registro["idpuesto"];
    $puesto=$registro["puesto"];
    $fechadeingreso=$registro["fechadeingreso"]; 
}
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=""width="device-width, initial-scale=1.0">



	<title>Carta de Recomendación</title>
</head>
<body>
	<h1>   Carta de Recomendación </h1>
</br></br>
<p>Estimado Jose Ángel,</p>

<p>Me complace escribir esta carta de recomendación para <strong><?php echo $nombreCompleto;?></strong>, actualmente tarbajando de <strong><?php echo $puesto;?></strong> Conozco a <?php echo $nombreCompleto;?> desde hace muchos años, y he tenido el placer de trabajar con él en el proyecto XIIA.</p>

<p>Como Jefe de Departamento de XIIA, he tenido la oportunidad de observar las habilidades y el desempeño de <?php echo $nombreCompleto;?> de cerca. En mi opinión, él es un profesional muy competente y responsable, con una gran habilidad para ser proactivo y analítico. Él es capaz de resolver problemas, tomar decisiones y liderar proyectos con gran eficacia y eficiencia.</p>

<p>Además, <?php echo $nombreCompleto;?> es una persona muy creativa, innovadora y comunicativa, lo que le permite trabajar bien en equipo y tener una excelente relación con sus colegas. Él siempre ha sido muy enérgico y trabajador en su labor, y ha demostrado ser un colaborador muy confiable y orientado a resultados, con un fuerte compromiso con la calidad y la excelencia.</p>

<p>En resumen, recomiendo a <?php echo $nombreCompleto;?> sin reservas para cualquier posición que esté buscando. Él sería un activo valioso para cualquier empresa y estoy seguro/a de que hará una contribución significativa en cualquier trabajo que tenga.</p>

<p>No dude en ponerse en contacto conmigo si necesita más información sobre <?php echo $nombreCompleto;?> o su trabajo en XIIA.</p>

<p>Sinceramente,</p>

	<p><strong>Daniel Requena</strong></p>
	<p><strong>Programador Jr.</strong></p>
	<p><strong>XIIA</strong></p>
</body>
</html>

<?php
$HTML=ob_get_clean();
require_once("../../libs/autoload.inc.php");
use Dompfd\Dompdf;
$dompdf= new Dompdf();
$opciones=$dompdf->getOptions();

$opciones->set(array("isRemoteEnabled"=>true));

$dompdf->setOptions($opciones);

$dompdf->loadHTML($HTML);

$dompdf->setPaper('letter');
$dompdf->render();
$dompdf->stream("archivo.pdf",array("Attachment"=>false));




?>