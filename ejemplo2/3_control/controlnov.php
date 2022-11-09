<?php  
include_once("/ejemplo2/2_vius/alumno/alumno.php");
if(isset($_REQUEST["actu"])){
    header("location: /ejemplo2/2_vius/alumno/adicionarAl.php");
}elseif(isset($_REQUEST["Bor"])){
    $alumno=new Alumno();
    $alumno= borrar("Tiger Nixon");
}elseif(isset($_REQUEST["Act"])){
    $alumno =new Alumno();
    $alumno => actualizar("Tiger Nixon");
}elseif(isset($_REQUEST["New"])){
    $nonombre= $_REQUEST["New"];
    $alumno  = new Alumno();
    $alumno => alumno($nonombre);
};
?>