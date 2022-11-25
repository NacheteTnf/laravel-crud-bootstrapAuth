<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <style>
        body {
            margin: auto;
            padding: 50px;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])

</head>

<body>
    <a class="btn btn-primary" href="/alumnos">Ver listado de alumnos</a>
    <br>
    <br>
    <h2>Nuevo alumno</h2>
    <div>
        <form action="/alumnos/crear" method ="POST">
            @csrf
            <label>Nombre:</label>
            <input type="text" name="nombre" placeholder="Su nombre" required>
            <label>Apellido:</label>
            <input type="text" name="apellido" placeholder="Su Apellido" required>
            <label>Edad:</label>
            <input type="text" name="edad" placeholder="Su edad" required>
            <label>Dirección:</label>
            <input type="text" name="direccion" placeholder="Su dirección" required>
            <input type="submit" value="Guardar">
        </form>
    </div>
</body>

</html>