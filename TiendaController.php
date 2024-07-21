<?php
require_once __DIR__ . "/../Models/Tienda.php";
class TiendaController {

    /**
     * Se utiliza para cargar la vista de crear una cerveza
     */
    public function creartiendView()
    {   
        require_once __DIR__ . "/../Views/paginalogin.php";
    }

    /**
     * @param array $datosFormulario
     */
    public function crearTienda($datosFormulario)
    {
       
        // ------ Validaciones  ------
        // - Existencia
        // - Claves
        // - Tipo de datos        
        // - Validacion del negocio
        // 

        //Validaciones de existencia
        $conteoDatos = count($datosFormulario);
        
        if($conteoDatos < 1) {
            echo "ERROR: Faltan los datos";
            return;
        }   
        



        //Validaciones de clave
        
        if(!isset($datosFormulario["nombre"])) {
            echo "ERROR: Falta ingresar el nombre";
            return;
        }       

        if(!isset($datosFormulario["apellido"])) {
            echo "ERROR: Falta ingresar la apellido";
            return;
        }
       
        if(!isset($datosFormulario["email"])){            
            echo "ERROR: Falta por ingresar el email";
            return;
        }

        if(!isset($datosFormulario["opciones"])){            
            echo "ERROR: Falta por ingresarla opcion";
            return;
        }



       

        if(empty($datosFormulario["nombre"])) {
            echo "ERROR: Falta ingresar el nombre o es nulo";
            return;
        }       


        
        //llegaron los datos        
        $nombre =  $datosFormulario["nombre"];
        $apellido = $datosFormulario["apellido"];
        $email = $datosFormulario["email"];
        $opciones = $datosFormulario["opciones"];




    
        /*
        if(!is_numeric($precioCerveza)){
            echo "Error: El precio no es un numero";
            return;
        }
            */



        //Validaciones del negocio
        $opciones =
            
         [
            "Robot1",
            "Robot2",
            "Robot3",
            "Robot4"
            
        ];
    
        if(!in_array($opciones, $marcasValidas)){
            echo "La opcion seleccionada ".$opciones. " no valida, verifique";
            
            return;
            
            
        }

        echo "Existoso se guardara la informacion!!";

        ////
        //ALMACENAR DB
        //ALMACENAR EN ARCHIVOS





       

    }
}