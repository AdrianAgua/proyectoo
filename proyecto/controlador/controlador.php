<?php
class Controlador
{
static public function pagina()
{
    include('vistas/plantilla.php');
}
static public function enlacesPagina()
{
    if(isset($_GET['accion'])){
        $enlaces =$_GET['accion'];
    }
    else
    {
        $enlaces="principal";
    }
    $respuesta= Paginas::enlacesPaginasModelo($enlaces);
    //para mostrar los las paginas incluimos las respuestas
    include $respuesta;
}
        static public function alta_per()
        {        
        if(isset($_POST['nombre'])){

            $datosControlador = array("0"=>$_POST['nombre'],"1"=>$_POST['correo'],"2"=>$_POST['usuario'],"3"=>$_POST['clave']);
            $tabla = "empleado";
    
            $respuesta = Datos::alta_perM($datosControlador, $tabla);
    
            if($respuesta == 'ok')
            {
                ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Datos guardados',
                        text: 'Datos guardados correctamente',
                        confirmButtonText: 'OK',
                        allowOutsideClick: false
                    });
                </script>
                <?php
            }else
            {
                ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!'
                    })
                </script>
                <?php
            }
        }

        }

} 