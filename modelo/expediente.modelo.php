<?php

    require 'conexion.php';

    class Expediente{

        public function ConsultarTodo(){
            $conexion = new Conexion();
            $stmt = $conexion->prepare("SELECT * FROM expedientes");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function ConsultarPorId($idExpediente){
            $conexion = new Conexion();
            $stmt = $conexion->prepare("SELECT * FROM expedientes where idExpediente = :idExpediente");
            $stmt->bindValue(":idExpediente", $idExpediente, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        public function Guardar($id_num_exp, $num_fol_exp, $fecha, $hora_p_circula, $p_circula,$tipo,$dp,$p1_recibe,$p1_c_recibe,$hora_p1_recibe,$p2_recibe,$p2_c_recibe,$hora_p2_recibe,$p3_recibe,$p3_c_recibe,$hora_p3_recibe){

            $conexion = new Conexion();
            $stmt = $conexion->prepare("INSERT INTO `expedientes` 
            (`id_num_exp`, 
            `num_fol_exp`,
            `fecha`,
            `hora_p_circula`,
            `p_circula`,
            `tipo`,
            `dp`,
            `p1_recibe`,
            `p1_c_recibe`,
            `hora_p1_recibe`,
            `p2_recibe`,
            `p2_c_recibe`,
            `hora_p2_recibe`,
            `p3_recibe`,
            `p3_c_recibe`,
            `hora_p3_recibe`) 
            VALUES(:id_num_exp,
            :num_fol_exp,
            :fecha,
            :hora_p_circula,
            :p_circula,
            :tipo,
            :dp,
            :p1_recibe,
            :p1_c_recibe,
            :hora_p1_recibe,
            :p2_recibe,
            :p2_c_recibe,
            :hora_p2_recibe,
            :p3_recibe,
            :p3_c_recibe,
            :hora_p3_recibe);");
            $stmt->bindValue(":id_num_exp", $id_num_exp, PDO::PARAM_INT);
            $stmt->bindValue(":num_fol_exp", $num_fol_exp, PDO::PARAM_STR);
            $stmt->bindValue(":fecha", $fecha, PDO::PARAM_STR);
            $stmt->bindValue(":hora_p_circula", $hora_p_circula, PDO::PARAM_STR);
            $stmt->bindValue(":p_circula", $p_circula, PDO::PARAM_STR);
            $stmt->bindValue(":tipo", $tipo, PDO::PARAM_STR);
            $stmt->bindValue(":dp", $dp, PDO::PARAM_STR);
            $stmt->bindValue(":p1_recibe", $p1_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":p1_c_recibe", $p1_c_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":hora_p1_recibe", $hora_p1_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":p2_recibe", $p2_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":p2_c_recibe", $p2_c_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":hora_p2_recibe", $hora_p2_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":p3_recibe", $p3_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":p3_c_recibe", $p3_c_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":hora_p3_recibe", $hora_p3_recibe, PDO::PARAM_STR);
            if($stmt->execute()){
                return "OK";
            }else{
                return "Error: se ha generado un error al guardar la información";
            }

        }

        public function Modificar($idExpediente,$id_num_exp, $num_fol_exp, $fecha, $hora_p_circula, $p_circula,$tipo,$dp,$p1_recibe,$p1_c_recibe,$hora_p1_recibe,$p2_recibe,$p2_c_recibe,$hora_p2_recibe,$p3_recibe,$p3_c_recibe,$hora_p3_recibe){

            $conexion = new Conexion();
            $stmt = $conexion->prepare("UPDATE `expedientes`
                                        SET `id_num_exp`=:id_num_exp,
                                        `num_fol_exp`=:num_fol_exp,
                                        `fecha`=:fecha,
                                        `hora_p_circula`=:hora_p_circula,
                                        `p_circula`=:p_circula,
                                        `tipo`=:tipo,
                                        `dp`=:dp,
                                        `p1_recibe`=:p1_recibe,
                                        `p1_c_recibe`=:p1_c_recibe,
                                        `hora_p1_recibe`=:hora_p1_recibe,
                                        `p2_recibe`=:p2_recibe,
                                        `p2_c_recibe`=:p2_c_recibe,
                                        `hora_p2_recibe`=:hora_p2_recibe,
                                        `p3_recibe`=:p3_recibe,
                                        `p3_c_recibe`=:p3_c_recibe,
                                        `hora_p3_recibe`=:hora_p3_recibe
                                        WHERE `idExpediente` = :idExpediente;");
            $stmt->bindValue(":id_num_exp", $id_num_exp, PDO::PARAM_INT);
            $stmt->bindValue(":num_fol_exp", $num_fol_exp, PDO::PARAM_STR);
            $stmt->bindValue(":fecha", $fecha, PDO::PARAM_STR);
            $stmt->bindValue(":hora_p_circula", $hora_p_circula, PDO::PARAM_STR);
            $stmt->bindValue(":p_circula", $p_circula, PDO::PARAM_STR);
            $stmt->bindValue(":tipo", $tipo, PDO::PARAM_STR);
            $stmt->bindValue(":dp", $dp, PDO::PARAM_STR);
            $stmt->bindValue(":p1_recibe", $p1_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":p1_c_recibe", $p1_c_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":hora_p1_recibe", $hora_p1_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":p2_recibe", $p2_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":p2_c_recibe", $p2_c_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":hora_p2_recibe", $hora_p2_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":p3_recibe", $p3_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":p3_c_recibe", $p3_c_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":hora_p3_recibe", $hora_p3_recibe, PDO::PARAM_STR);
            $stmt->bindValue(":idExpediente", $idExpediente, PDO::PARAM_INT);
            if($stmt->execute()){
                return "OK";
            }else{
                return "Error: se ha generado un error al modificar la información";
            }

        }

        public function Eliminar($idExpediente){

            $conexion = new Conexion();
            $stmt = $conexion->prepare("DELETE FROM expedientes WHERE idExpediente = :idExpediente");
            $stmt->bindValue(":idExpediente", $idExpediente, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "Error: se ha generado un error al eliminar la información";
            }

        }

    }

?>