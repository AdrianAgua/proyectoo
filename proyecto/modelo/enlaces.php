<?php

class Paginas
{
    static public function enlacesPaginasModelo($enlaces)
    { 
        
        {
           
            $peticion=Conexion::conectar()->prepare("SELECT * FROM enlace WHERE referencia = '$enlaces'");
            $peticion->execute();
                $data = $peticion->fetch(PDO::FETCH_ASSOC);
                $enlace = $data['ruta'];
                return $enlace; echo $enlace;
       
    }
}
}

