<?php 

class DaoInventario extends DaoBase {

    public function __construct() {
        parent::__construct();
        $this->objeto = new Inventario();
    }


    public function mostraruniformes()
    {
        $_query = "select * from inventarioUni where idEliminado=1;";

        $resultado = $this->con->ejecutar($_query);

       
        $_json ='';
        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["id"].'\" class=\"ui btnEditarE icon blue small button\" onclick=\"editar(this)\"><i class=\"edit icon\"></i>Editar</button>';
            $btnEliminar = '<button id=\"'.$fila["id"].'\" class=\"ui btnEliminar icon red small button\" ><i class=\"trash icon\"></i>Eliminar</button>';
            
            $acciones = ', "Acciones": "'.$btnEliminar.'"';   
               
            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }


    public function mostrarCalcetas()
    {
        $_query = "select * from inventarioCal where idEliminado=1;";

        $resultado = $this->con->ejecutar($_query);

       
        $_json ='';
        while($fila = $resultado->fetch_assoc()) {

            $object = json_encode($fila);

            $btnEditar = '<button id=\"'.$fila["id"].'\" class=\"ui btnEditarE icon blue small button\" onclick=\"editar(this)\"><i class=\"edit icon\"></i>Editar</button>';
            $btnEliminar = '<button id=\"'.$fila["id"].'\" class=\"ui btnEliminar icon red small button\" ><i class=\"trash icon\"></i>Eliminar</button>';
            
            $acciones = ', "Acciones": "'.$btnEliminar.'"';   
               
            $object = substr_replace($object, $acciones, strlen($object) -1, 0);

            $_json .= $object.',';
        }

        $_json = substr($_json,0, strlen($_json) - 1);

        return '{"data": ['.$_json .']}';
    }

    public function eliminarC() {
        $_query = "update inventarioCal set idEliminado=2 where id = ".$this->objeto->getId();
        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function eliminarU() {
        $_query = "update inventarioUni set idEliminado=2 where id = ".$this->objeto->getId();
        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function registrarC() {
        $_query = "insert into inventarioCal values(null,'".$this->objeto->getTalla()."', '".$this->objeto->getExistencia()."',1)";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function registrarU() {
        $_query = "insert into inventarioUni values(null,'".$this->objeto->getTalla()."', '".$this->objeto->getExistencia()."',1)";

        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function nuevaVentaU() {
        $resta=$this->objeto->getExistencia();

        $_query = "update inventarioUni set existencia = existencia - $resta  where id = ".$this->objeto->getId();
        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function nuevaVentaC() {
        $resta=$this->objeto->getExistencia();
        
        $_query = "update inventarioCal set existencia = existencia - $resta  where id = ".$this->objeto->getId();
        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }


    public function nuevaExisC() {
        $suma=$this->objeto->getExistencia();
        
        $_query = "update inventarioCal set existencia = existencia + $suma  where id = ".$this->objeto->getId();
        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

    public function nuevaExisU() {
        $suma=$this->objeto->getExistencia();
        
        $_query = "update inventarioUni set existencia = existencia + $suma  where id = ".$this->objeto->getId();
        $resultado = $this->con->ejecutar($_query);

        if($resultado) {
            return 1;
        } else {
            return 0;
        }
    }

}

?>