<!DOCTYPE html>
<html lang="en">
<head>
    <title>addAlumno</title>
</head>
<body>
    <div>
        <h1>adicionar alumno..</h1>
        <form action="C:\xampp\htdocs\ejemplo2\3_control\controlador.php" metodo="post">
            <table id="example" class="display" style="width:50px;">
                <tr>
                    <td>
                        <label for="">nombre:</label>
                    </td>
                    <td>
                        <input type="text" name="newNameAlumno" id="newNameAlumno">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">apellido:</label>
                    </td>
                    <td>
                        <input type="text" name="newApellidoAlumno" id="newApellidoAlumno">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">correo:</label>
                    </td>
                    <td>
                        <input type="text" name="newCorreoAlumno" id="newCorreoAlumno">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">telefono:</label>
                    </td>
                    <td>
                        <input type="text" name="newTelAlumno" id="newTelAlumno">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">programa:</label>
                    </td>
                    <td>
                        <input type="text" name="newProgramaAlumno" id="newProgramaAlumno">
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
        </form>
    </div>
</body>
</html>