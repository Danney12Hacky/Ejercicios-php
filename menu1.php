<?php

$saldo = [];

while (true){

    function menu_principal(){
        echo "MENU PRINCIPAL"."\n";
        echo "1. Consignar Dinero"."\n";
        echo "2. Consultar Saldo"."\n";
        echo "3. Retirar Dinero"."\n";
        echo "4. Salir"."\n";
        $opcion = intval(readline("Seleccione una opción: "));
        return $opcion;
    }
   
    
    
    if ($opcion == 1){
        
        function  consignar_dinero($contraseña, $dinero){
            $contraseña = intval(readline("Por favor ingrese su contraseña: "));
            $dinero = intval(readline("¿Cuanto dinero desea consignar ?"));
            $cosignar([$contraseña, $dinero]);
            $saldo.array_push($consignar);

        }
    }
    elseif($opcion == 2){
        function consultar_saldo($id){
            $id = intval(readline("Por favor ingrese su contraseña"));

        }

    }

    elseif($opcion == 3){
        function retirar_dinero()

    }
    elseif($opcion == 4){
        echo "Saliendo del programa...";
        break;
    }

    else{
        echo "¡Opción invalida! Por favor intentelo nuevamente";
    }


    

    
}


   






         











