<?php
    class EmpresaAlumno extends MongoHandler{
        private $Identificador, $Nombre, $Descripcion;

        function __construct($identificador = null, $nombre = null, $desc){
            $this->Identificador = $identificador;
            $this->$Nombre = $nombre;
            $this->Descripcion = $desc;
            $this->conectar();
            $this->setCollections("EmpresaAlumno");
        }

        public function putEmpresaAlumno(){ return $this -> Guardar(); }
        private function Guardar(){
            try {
                $existe = $this->getOne(array('Identificador' => $this->Identificador));
                if(empty($existe)){
                    $this->insert(
                        array(
                            "Identificador" => $this->Identificador,
                            "Nombre" => $this->Nombre,
                            "Descripcion" => $this->Descripcion
                        )
                    );
                    $this->col->ensureIndex(array("Identificador" => 1), array("unique" => TRUE));
                    $this->col->ensureIndex(array("Nombre" => 1), array("unique" => TRUE));
                    return array(
                        "Mensaje" => "Empresa Registrada",
                        "Detalle" => "",
                        "Tiempo" => 2000
                    );
                }
            } catch (Exception $e) {
                throw new RuntimeException("Error al Registrar Empresa Alumnos: $e");
            }
        }

        public function getEmpresasAlumnos()
    }
?>