<?php
require_once "Controladores/plantillaC.php";
require_once "Controladores/slideC.php";
require_once "Controladores/nosotrosC.php";
require_once "Controladores/serviciosC.php";
require_once "Controladores/galeriaC.php";
require_once "Controladores/tractoresC.php";
require_once "Controladores/mensajesC.php";
require_once "Controladores/suscriptoresC.php";
require_once "Controladores/inicioC.php";
require_once "Controladores/herramientasC.php";
require_once "Controladores/agroquimicosC.php";
require_once "Controladores/herramientasC.php";


require_once "Modelos/slideM.php";
require_once "Modelos/nosotrosM.php";
require_once "Modelos/serviciosM.php";
require_once "Modelos/galeriaM.php";
require_once "Modelos/tractoresM.php";
require_once "Modelos/mensajesM.php";
require_once "Modelos/suscriptoresM.php";
require_once "Modelos/inicioM.php";
require_once "Modelos/herramientasM.php";
require_once "Modelos/agroquimicosM.php";
require_once "Modelos/herramientasM.php";


$plantilla = new PlantillaC();
$plantilla -> LlamarPlantilla();