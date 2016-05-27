<?php

include("/../modelo/clases/Usuario.php");
include("/../modelo/clases/BaseDades.php");
include("/../modelo/clases/Sessio.php");


$nuevaSesion = new Sessio();
$nuevoUsuario = new Usuario();
$connexio = new BaseDades("localhost","root", "", "proyectodaw");

if ($_POST["acceder"])
{
    if ($nuevoUsuario->compruebaUsuario("usuario", $connexio, $_POST["emailUser"], $_POST["passUser"]))
    {
        $nuevoUsuario -> setUsuario($_POST["emailUser"]);
        $nuevoUsuario -> setContrasena($_POST["passUser"]);
        
        $nuevaSesion->afegirContingutSessio("usuario", $_POST["emailUser"]);
        header("location:../vista/usuarioLogueado.php");
    }
}
else if($_POST["enviar"])
{
   if ($_POST["pass"] && $_POST["emailR"]) 
   { //Si s'han introduit totes les dades...
            if ($_POST["pass"] == $_POST["pass2"]) 
            { //Si la contrasenya coincideix amb la repetició de contrasenya...
                //Canviem l'usuari i contrasenya
                $nombreRegistro = $_POST["nombreR"];
                $apellidoRegistro = $_POST["apellidoR"];
                $emailRegistro = $_POST["emailR"];
                $pasRegistro = $_POST["pass"];
                $fechaRegistro = $_POST["fechaNacimiento"];
                

                // Inserim els nous registres a la base de dades
                $connexio->consultar("INSERT INTO usuario VALUES ('$emailRegistro', '$pasRegistro', '$nombreRegistro', '$apellidoRegistro','$fechaRegistro')");

                //Assignem el nom i la contrasenya al usuari instanciat
                $nuevoUsuario->setUsuario($_POST["emailR"]);
                $nuevoUsuario->setContrasena($_POST["pass"]);
                //Afegim usuari a la sessió

                $nuevaSesion->afegirContingutSessio("usuario", $_POST["emailR"]);
                header("location:../vista/usuarioLogueado.php");
            }
            else 
            { //Si no coincideixen...
                $missatge = "Les contrasenyes no coincideixen.";
                //Afegim missatge a la sessió
                $nuevaSesion->afegirContingutSessio("missatge", $missatge);
                header("location:../vista/inici.php");
            }
        } 
        else 
        {//No s'ha introduit alguna de les dades pel registre...
            $missatge = "Falta alguna dada pel registre.";
            //Afegim missatge a la sessió
            $nuevaSesion->afegirContingutSessio("missatge", $missatge);
            header("location:../vista/inici.php");
        }
}
else
{
    
    header("location:./vista/inici.php");
}
?>