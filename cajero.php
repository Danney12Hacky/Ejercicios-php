<?php

$sueldo = 2000000;

while(true){
    echo "\n"."---MENU PRINCIPAL---"."\n";
    echo "1. Consultar sueldo"."\n";
    echo "2. Consignar dinero"."\n";
    echo "3. Retirar dinero"."\n";
    echo "4. Salir"."\n";
    
    $opcion = (readline("Seleccione una opción: "));
    if ($opcion==1){
        function consultar_sueldo(){
            global $sueldo;
            $nombre= readline("Ingrese su nombre: ");
            $contraseña= intval(readline("Ingrese su contraseña: "));
            echo $nombre ." usted tiene ".$sueldo." en su cuenta". "\n";
            echo "...Gracias por hacer uso de nuestros servicios...";
        }
        consultar_sueldo();
       
    }
    elseif($opcion==2){
        function consignar_dinero(){
            global $sueldo;
            $contraseña = intval(readline("Ingrese su contraseña: "));
            $consignar = intval(readline("¿Cuanto dinero desea consignar? "));
            $sueldo += $consignar;//sumar el dinero consigado a sueldo
            echo "¡¡Consignación exitosa!!". "\n";
            echo "...Gracias por hacer uso de nuestros servicios...";
        }
        consignar_dinero();
        
    }
    elseif ($opcion ==3){
        function retirar_dinero(){
            global $sueldo;
            $contraseña = intval(readline("Ingrese su contraseña: "));
            $retirar = intval(readline("¿Cuanto dinero desea retirar?" ));
            if ($retirar <= $sueldo) { // para verificar que haya suficiente dinero en la cuenta
                $sueldo -= $retirar; // se resta la cantidad de dinero que se desea retirar al saldo
                echo "¡Retiro fue exitoso!"."\n";
                echo "Le quedan $".$sueldo. " En su cuenta."."\n";
            } else {
                echo "No tiene suficiente saldo para realizar el retiro."."\n";
            }
        }       echo "...Gracias por hacer uso de nuestros servicios...";
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
    
       


      
    



        

