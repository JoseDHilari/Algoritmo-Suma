<!DOCTYPE html>
<html lang="es">
<!--El codigo php es corto, agrege css para mejorar la apariencia-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de Dos Números</title>
    <style>
        body {
            background-color: #8ecae6;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1 {
            color:#ffb703;
            background-color: #023047;
            width: fit-content;
            padding:15px;
            border-radius: 25px;
        }
        form {
            border: 1px dashed black;
            width: fit-content;
            padding:5px;
            background-color: #219ebc;
            padding: 15px;
            border-radius: 25px;
            margin-left: 20px;
        }
        form label {
            font-weight: 800;
            color:#023047;
            text-shadow: 3px 2px 1px #ffb703 ;
        }
        form input {
            font-weight: 900;
            align-items: center;
        }
        #boton {
            margin-left: 110px;
            padding: 5px;
            border-radius: 10px;
            background-color: #ffb703;
            color: #023047;
            font-size: 19px;
        }
        h2 {
            margin-left: 100px;
            border:1px dashed black;
            width: fit-content;
            padding:5px 20px 5px 20px;
            border-radius: 25px;
            background-color: #219ebc;
            color: #023047;
            text-shadow: 3px 2px 1px #ffb703 ;
        }
    </style>
</head>
<body>
    <h1>Suma de Dos Números</h1>
    <form method="post" action="">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <input type="submit" name="submit" value="Sumar" id="boton">
    </form>

    <?php
    //Para compilar y ejecutar uso XAMPP.
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $resultado = $num1 + $num2;

        echo "<h2>Resultado: $resultado</h2>";
    }
    ?>
</body>
</html>