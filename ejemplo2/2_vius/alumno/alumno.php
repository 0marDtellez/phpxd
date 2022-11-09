<?php
class Alumno{
    public $nombre;
    public $apellidos;
    public $correo;
    public $telefono;
    public $programa;

public function borrar($idalumno)
{
    require_once("/ejemplo2/3_control/dao/conectorEs.php");
    $conn=connect();
    $sql="delete from alumno where id = ? and nombre = ?";
    $consulta = $conn -> prepare ($sql);
    $consulta-> execute(array($idalumno));
    $conn=null;
    print("el alumno $idAlumno a sido borrado");
}

public function actualizar($idalumno){
print("el alumno $idalumno a sido actualisado");
}
public function añadir($idalumno){
    print("el alumno $idalumno a sido añadido"); 
}
public function adicionar($idalumno){
    print("el alumno $idalumno a sido adicionado"); 
}
};

?>
