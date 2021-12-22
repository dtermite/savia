<?php

include("con_db.php");

if ($conex){
    echo "conexion exitosa";
}else{
    echo "No conecto";
}
echo "<br>";




if($_REQUEST['elasticidad']=="elasalta"){
    //echo "elasticidad alta" . "<br>";
    $elasticidad=1;
}elseif($_REQUEST['elasticidad']=="elasmedia"){
    //echo "elasticidad media" . "<br>";
    $elasticidad=2;
}else{
    echo "elasticidad baja" . "<br>";
    $elasticidad=3;
}
    if($_REQUEST['porosidad']=="poroalta"){
        //echo "porosidad alta" . "<br>";
        $porosidad=1;
    }elseif($_REQUEST['porosidad']=="poromedia"){
        //echo "porosidad media" . "<br>";
        $porosidad=2;
    }else{
        //echo "porosidad baja" . "<br>";
        $porosidad=3;
    }

    if($_REQUEST['grosor']=="grosalta"){
        //echo "grosor alta" . "<br>";
        $grosor=1;
    }elseif($_REQUEST['grosor']=="grosmedia"){
        //echo "grosor media" . "<br>";
        $grosor=2;
    }else{
        //echo "grosor baja" . "<br>";
        $grosor=3;
    }

    $nombre=trim($_REQUEST['nombre']);
    $email=trim($_REQUEST['email']);
    $fecha=date("y/m/d");

    echo "Elasticidad= ". $elasticidad ."<br>";
    echo "Porosidad= ". $porosidad ."<br>";
    echo "Grosor= ". $grosor ."<br>";
    
    $consulta="INSERT INTO registros(nombre, email, elasticidad, grosor, porosidad, fecha) VALUES ('$nombre','$email','$elasticidad','$porosidad','$grosor', '$fecha')";
    $resultado=mysqli_query($conex,$consulta);

    if($resultado){
        ?>
        <h3>Tus respuestas han sido procesadas correctamente</h3>
        <?php
    }else{
        ?>
        <h3>Ha ocurrido un error, intente nuevamente</h3>
        <?php
    }
?>