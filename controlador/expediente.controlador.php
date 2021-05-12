<?php

    require '../modelo/expediente.modelo.php';

    if($_POST){
        $expediente = new Expediente();

        switch($_POST["accion"]){
            case "CONSULTAR":
                echo json_encode($expediente->ConsultarTodo());
            break;
            case "CONSULTAR_ID":
                echo json_encode($expediente->ConsultarPorId($_POST["idExpediente"]));
            break;
            case "GUARDAR":
                $id_num_exp = $_POST["id_num_exp"];
                $num_fol_exp = $_POST["num_fol_exp"];
                $fecha = $_POST["fecha"];
                $hora_p_circula = $_POST["hora_p_circula"];
                $p_circula = $_POST["p_circula"];
                $tipo=$_POST["tipo"];
                $dp=$_POST["dp"];
                $p1_recibe=$_POST["p1_recibe"];
                $p1_c_recibe=$_POST["p1_c_recibe"];
                $hora_p1_recibe=$_POST["hora_p1_recibe"];
                $p2_recibe=$_POST["p2_recibe"];
                $p2_c_recibe=$_POST["p2_c_recibe"];
                $hora_p2_recibe=$_POST["hora_p2_recibe"];
                $p3_recibe=$_POST["p3_recibe"];
                $p3_c_recibe=$_POST["p3_c_recibe"];
                $hora_p3_recibe=$_POST["hora_p3_recibe"];

                if($id_num_exp == ""){
                    echo json_encode("Debe ingresar numero del expediente");
                    return;
                }

                if($num_fol_exp == ""){
                    echo json_encode("Debe ingresar el nombre del expediente");
                    return;
                }

                if($fecha == ""){
                    echo json_encode("Debe ingresar la fecha que ingresa el expediente");
                    return;
                }

                if($hora_p_circula == ""){
                    echo json_encode("Debe ingresar la hora de recepcion");
                    return;
                }

                if($p_circula == ""){
                    echo json_encode("Debe ingresar la ponencia que circula");
                    return;
                }
                if($tipo == ""){
                    echo json_encode("Debe ingresar si es acuerdo o sentencia");
                    return;
                }
                if($dp == ""){
                    echo json_encode("Debe ingresar si es normal o dato protegido");
                    return;
                }
                if($p1_recibe == ""){
                    echo json_encode("Debe ingresar CSJRO");
                    return;
                }
                if($p1_c_recibe == ""){
                    echo json_encode("Debe ingresar el nombre de quien recibe en CSJRO");
                    return;
                }
                if($hora_p1_recibe == ""){
                    echo json_encode("Debe ingresar hora en que reciben en CSJRO");
                    return;
                }
                if($p2_recibe == ""){
                    echo json_encode("Debe ingresar el nombre de quien recibe en GGBG");
                    return;
                }
                if($p2_c_recibe == ""){
                    echo json_encode("Debe ingresar el nombre de quien recibe en GGBG");
                    return;
                }
                if($hora_p2_recibe == ""){
                    echo json_encode("Debe ingresar hora en que reciben en GGBG");
                    return;
                }
                if($p3_recibe == ""){
                    echo json_encode("Debe ingresar AKBA");
                    return;
                }
                if($p3_c_recibe == ""){
                    echo json_encode("Debe ingresar el nombre de quien recibe en AKBA");
                    return;
                }
                if($hora_p3_recibe == ""){
                    echo json_encode("Debe ingresar hora en que reciben en AKBA");
                    return;
                }

                $respuesta = $expediente->Guardar($id_num_exp, $num_fol_exp, $fecha, $hora_p_circula, $p_circula, $tipo, $dp, $p1_recibe, $p1_c_recibe, $hora_p1_recibe, $p2_recibe, $p2_c_recibe, $hora_p2_recibe, $p3_recibe, $p3_c_recibe, $hora_p3_recibe);
                echo json_encode($respuesta);
            break;
            case "MODIFICAR":
                $id_num_exp = $_POST["id_num_exp"];
                $num_fol_exp = $_POST["num_fol_exp"];
                $fecha = $_POST["fecha"];
                $hora_p_circula = $_POST["hora_p_circula"];
                $p_circula = $_POST["p_circula"];
                $tipo=$_POST["tipo"];
                $dp=$_POST["dp"];
                $p1_recibe=$_POST["p1_recibe"];
                $p1_c_recibe=$_POST["p1_c_recibe"];
                $hora_p1_recibe=$_POST["hora_p1_recibe"];
                $p2_recibe=$_POST["p2_recibe"];
                $p2_c_recibe=$_POST["p2_c_recibe"];
                $hora_p2_recibe=$_POST["hora_p2_recibe"];
                $p3_recibe=$_POST["p3_recibe"];
                $p3_c_recibe=$_POST["p3_c_recibe"];
                $hora_p3_recibe=$_POST["hora_p3_recibe"];
                $idExpediente=$_POST["idExpediente"];

                if($id_num_exp == ""){
                    echo json_encode("Debe ingresar numero del expediente");
                    return;
                }

                if($num_fol_exp == ""){
                    echo json_encode("Debe ingresar el nombre del expediente");
                    return;
                }

                if($fecha == ""){
                    echo json_encode("Debe ingresar la fecha que ingresa el expediente");
                    return;
                }

                if($hora_p_circula == ""){
                    echo json_encode("Debe ingresar la hora de recepcion");
                    return;
                }

                if($p_circula == ""){
                    echo json_encode("Debe ingresar la ponencia que circula");
                    return;
                }
                if($tipo == ""){
                    echo json_encode("Debe ingresar si es acuerdo o sentencia");
                    return;
                }
                if($dp == ""){
                    echo json_encode("Debe ingresar si es normal o dato protegido");
                    return;
                }
                if($p1_recibe == ""){
                    echo json_encode("Debe ingresar CSJRO");
                    return;
                }
                if($p1_c_recibe == ""){
                    echo json_encode("Debe ingresar el nombre de quien recibe en CSJRO");
                    return;
                }
                if($hora_p1_recibe == ""){
                    echo json_encode("Debe ingresar hora en que reciben en CSJRO");
                    return;
                }
                if($p2_recibe == ""){
                    echo json_encode("Debe ingresar el nombre de quien recibe en GGBG");
                    return;
                }
                if($p2_c_recibe == ""){
                    echo json_encode("Debe ingresar el nombre de quien recibe en GGBG");
                    return;
                }
                if($hora_p2_recibe == ""){
                    echo json_encode("Debe ingresar hora en que reciben en GGBG");
                    return;
                }
                if($p3_recibe == ""){
                    echo json_encode("Debe ingresar AKBA");
                    return;
                }
                if($p3_c_recibe == ""){
                    echo json_encode("Debe ingresar el nombre de quien recibe en AKBA");
                    return;
                }
                if($hora_p3_recibe == ""){
                    echo json_encode("Debe ingresar hora en que reciben en AKBA");
                    return;
                }

                $respuesta = $expediente->Modificar($idExpediente, $id_num_exp, $num_fol_exp, $fecha, $hora_p_circula, $p_circula, $tipo, $dp, $p1_recibe, $p1_c_recibe, $hora_p1_recibe, $p2_recibe, $p2_c_recibe, $hora_p2_recibe, $p3_recibe, $p3_c_recibe, $hora_p3_recibe);
                echo json_encode($respuesta);
            break;
            case "ELIMINAR":
                $idExpediente = $_POST["idExpediente"];
                $respuesta = $expediente->Eliminar($idExpediente);
                echo json_encode($respuesta);
            break;
        }
    }

?>