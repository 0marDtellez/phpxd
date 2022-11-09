<?php  
include_once("/ejemplo2/2_vius/alumno/alumno.php");
if(isset($_REQUEST["alumno"])){
if(($_REQUEST['id']! =null)&&($_REQUEST["value"]=="borra")){
    print("borrado");
    $id=$_REQUEST['id'];
    $alumno=new Alumno();
    $alumno->borrarAlumno($id);
}elseif(isset($_REQUEST["ADA"])){
    header("");
}elseif(isset($_POST["btnNewAlumno"])&&($_REQUEST["btnNewAlumno"]! =null)){
    $name=$_REQUEST['newNameAlumno'];
    $ape =$_REQUEST['newApellidoAlumno'];
    $correo=$_REQUEST['newCorreoAlumno'];
    $tele=$_REQUEST['newTelAlumno'];
    $programa=$_REQUEST['newProgramaAlumno'];
    $alumno=new Alumno();
    $alumno-> addAlumno($name,$ape,$correo,$tele,$programa);
}elseif(($_REQUEST['id']! =null)&&($_REQUEST["value"]=="actualizar")){
    header("C:\xampp\htdocs\ejemplo2\2_vius\alumno\actualAL.php?id=".$_REQUEST["id"]);
}elseif(isset($_POST["btnActAlumno"])&&($_REQUEST["btnActAlumno"]! = null)){
    $name=$_REQUEST['newNameAlumno'];
    $ape =$_REQUEST['newApellidoAlumno'];
    $correo=$_REQUEST['newCorreoAlumno'];
    $tele=$_REQUEST['newTelAlumno'];
    $programa=$_REQUEST['newProgramaAlumno'];
    $alumno=new Alumno();
    $alumno-> addAlumno($name,$ape,$correo,$tele,$programa,$id);
}
// }elseif(isset($_REQUEST["Bor"])){
//     $id=$_REQUEST['id'];
//     $alumno=new Alumno();
//     $alumno= borrar("Tiger Nixon");
// }elseif(isset($_REQUEST["Act"])){
//     $alumno =new Alumno();
//     $alumno => actualizar("Tiger Nixon");
// }elseif(isset($_REQUEST["New"])){
//     $nonombre= $_REQUEST["New"];
//     $alumno  = new Alumno();
//     $alumno => alumno($nonombre);
//}


?>