<?php
       
while(true){
    echo "\n"."---MENU PRINCIPAL---"."\n";
    echo "1. Consultar sueldo"."\n";
    echo "2. Consignar dinero"."\n";
    echo "3. Retirar dinero"."\n";
    echo "4. Salir"."\n";
    
    $opcion = (readline("Seleccione una opción: "));
    if ($opcion==1){
        function consultar_sueldo(){
            $sueldo=2000000;
            $nombre= readline("Ingrese su nombre: ");
            $contraseña= intval(readline("Ingrese su contraseña: "));
            echo $nombre ." usted tiene ".$sueldo." en su cuenta";
        }
        consultar_sueldo();
    }
    elseif($opcion==2){
        function consignar_dinero(){
            $sueldo=2000000;
            $contraseña = intval(readline("Ingrese su contraseña: "));
            $consignar = intval(readline("¿Cuanto dinero desea consignar? "));
            $acomulado = $sueldo + $consignar;
            echo "Consignación fue exitosa";
        }
        consignar_dinero();
    }
    elseif ($opcion ==3){
        function retirar_dinero(){
            $acomulado=2400000;
            $contraseña = intval(readline("Ingrese su contraseña: "));
            $retirar = intval(readline("¿Cuanto dinero desea retirar?" ));
            $acomulado2 = $acomulado - $retirar;
            echo "¡Retiro fue exitoso!"."\n";
            echo "Le quedan ".$acomulado2. " En su cuenta.";
        }   
        retirar_dinero();
    }
    elseif($opcion ==4){
        echo "Saliendo del programa...";
        break;
    }
    else{
        echo "¡Opción invalida! Por favor intentelo nuevamente.";
    }

}
    
       


      
    



        

