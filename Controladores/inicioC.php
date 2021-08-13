<?php

class InicioC{

    public function VerGenerales1C(){

        $tablaBD = "generales";

        $respuesta = InicioM::VerGenerales1M($tablaBD);

        echo '<link rel="icon" href="admin/'.$respuesta["favicon"].'">
        <title>'.$respuesta["titular"].'</title>';
    }

    public function VerGenerales2C(){

        $tablaBD = "generales";

        $respuesta = InicioM::VerGenerales2M($tablaBD);

        echo '<a class="navbar-brand text-uppercase" href="index.html">
        <img src="admin/'.$respuesta["logotipo"].'"></a>';
    }    
}