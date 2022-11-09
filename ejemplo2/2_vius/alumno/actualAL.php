<!DOCTYPE html>
<html lang="en">
<head>
    <title>actualizar alumno</title>
</head>
<body>
    <div style="width:80%;margin:0px 0px 100px">
        <h1>actualizar alumno..:)</h1>
        <?php
        require_once("")
        $id=$_REQUEST["id"];
        $alumno=new Alumno();
        $datos=$alumno-> consultarAlumnoXId($id);
        while ($data=$datos->fetch(PDO::FETCH_ASSOC)){
    print'<form action="C:\xampp\htdocs\ejemplo2\3_control\controlador.php" metodo="post">
            <table id="example" class="display" style="width:50px;">
                <tr>
                    <td>
                        <label for="">nombre:</label>
                    </td>
                    <td>
                        <input type="hidden" value="'.$data["id"].'" name="newNameAlumno" id="newNameAlumno">
                        <input type="text" value="'.$data["nombre"].'" name="newNameAlumno" id="newNameAlumno">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">apellido:</label>
                    </td>
                    <td>
                        <input type="text" value="'.$data["apellido"].'" name="newApellidoAlumno" id="newApellidoAlumno">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">correo:</label>
                    </td>
                    <td>
                        <input type="text" value="'.$data["correo"].'"name="newCorreoAlumno" id="newCorreoAlumno">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">telefono:</label>
                    </td>
                    <td>
                        <input type="text" value="'.$data["telefono"].'" name="newTelAlumno" id="newTelAlumno">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">programa:</label>
                    </td>
                    <td>
                        <input type="text" value="'.$data["programa"].'" name="newProgramaAlumno" id="newProgramaAlumno">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="act" id="act" href="/ejemplo2/3_control/controlador.php">
                    </td>
                    <td>
                        <input type="reset" name="bor" id="bor" href="/ejemplo2/1_public/index1.html"><br>
                    </td>
                </tr>
            </table>
        </form>'
        }
        ?>
    </div>
</body>
</html>