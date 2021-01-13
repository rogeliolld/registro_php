<?php 
include("db.php");

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];
    $correo = $_POST['correo'];
    $lenguaje = $_POST['lenguaje'];

    

    //Validar programador 
    $query = $conn->query("SELECT * FROM programador WHERE cedula = $cedula");

    if($query->num_rows > 0){
        $data['status'] = 'err';
        $data['result'] = 'Registros Duplicado';
    }else{
        /* $userData = $query->fetch_assoc();
        $data['status'] = 'ok';
        $data['result'] = $userData;*/
        $query = "INSERT INTO programador (nombre,apellidos,cedula,correo,lenguaje) VALUES ('$nombre', '$apellidos', '$cedula', '$correo', '$lenguaje')";

        $result = mysqli_query($conn, $query);
        if(!$result){
            
            $data['status'] = 'err';
            $data['result'] = "Algo salio mal en la base de datos";
        }else{
            $countProgramador = $conn->query("SELECT * FROM programador");
            $cont = $countProgramador->num_rows;

            $data['status'] = 'ok';
            $data['result'] = "Registro satifactorio, Cantidad registrada : ".$cont;
        }
        
    }

    echo json_encode($data);


?>