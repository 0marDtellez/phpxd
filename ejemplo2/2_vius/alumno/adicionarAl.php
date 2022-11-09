<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA</title>
</head>
<body>
    <h1>crear alumno</h1>
    <form action="/alumno.php" method="post">
        nombre:   <br> <input type="text" name="nom" id="nom"><br>
        apellido: <br> <input type="text" name="ape" id="ape"><br>
        telefono: <br> <input type="text" name="tel" id="tel"><br>
        programa: <br> <input type="text" name="pro" id="pro"><br>
        <input type="submit" name="actu" id="actu">
        <input type="reset" name="borr" id="borr"><br>
        <button><a href="/ejemplo2/4_php/tablains.php/">regresar</a></button>
    </form>
</body>
</html>