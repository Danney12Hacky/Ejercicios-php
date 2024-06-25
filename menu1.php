<?php

$saldo = [];

while (true){

    function menu_principal(){
        echo "MENU PRINCIPAL"."\n";
        echo "1. Consignar Dinero"."\n";
        echo "2. Consultar Saldo"."\n";
        echo"3. Retirar Dinero"."\n";
        $opcion = intval(readline("Seleccione una opción: "));
        $opcion = intval($opcion);
    }
   
    
    
    if ($opcion == 1){
        
        function  consignar_dinero($id, $dinero){
            $id = intval(readline("Por favor ingrese su contraseña: "));
            $dinero = intval(readline("¿Cuanto dinero desea consignar ?"));
            $cosignar([$id, $dinero]);
            $saldo.array_push($consignar);

        }
    }
    

    
}


    menu_principal();  





         











