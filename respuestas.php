<?php
include("con_db.php");

if(isset($_POST['enviar'])){
    if($_POST['elasticidad']=="elasalta"){
        //echo "elasticidad alta" . "<br>";
        $elasticidad=1;
    }elseif($_POST['elasticidad']=="elasmedia"){
        //echo "elasticidad media" . "<br>";
        $elasticidad=2;
    }else{
        echo "elasticidad baja" . "<br>";
        $elasticidad=3;
    }
        if($_POST['porosidad']=="poroalta"){
            //echo "porosidad alta" . "<br>";
            $porosidad=1;
        }elseif($_POST['porosidad']=="poromedia"){
            //echo "porosidad media" . "<br>";
            $porosidad=2;
        }else{
            //echo "porosidad baja" . "<br>";
            $porosidad=3;
        }
    
        if($_POST['grosor']=="grosalta"){
            //echo "grosor alta" . "<br>";
            $grosor=1;
        }elseif($_POST['grosor']=="grosmedia"){
            //echo "grosor media" . "<br>";
            $grosor=2;
        }else{
            //echo "grosor baja" . "<br>";
            $grosor=3;
        }
    
        $nombre=trim($_POST['nombre']);
        $email=trim($_POST['email']);
        $fecha=date("y/m/d");
    
        echo "Elasticidad= ". $elasticidad ."<br>";
        echo "Porosidad= ". $porosidad ."<br>";
        echo "Grosor= ". $grosor ."<br>";
        
        $consulta="INSERT INTO registros(nombre, email, elasticidad, grosor, porosidad, fecha) VALUES ('$nombre','$email','$elasticidad','$porosidad','$grosor', '$fecha')";
        $resultado=mysqli_query($conex,$consulta);
    
        if($resultado){
            ?>
            <h3 class="bg-success">** Tus respuestas han sido procesadas correctamente **</h3>
            <?php
        }else{
            ?>
            <h3 class="bg-danger">Ha ocurrido un error, intente nuevamente</h3>
            <?php
        }
}else{
    //echo "no entro";
}

?>