<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <a class="btn btn-primary" href="/alumnos">Ver listado de alumnos</a>
    <br>
    <br>
    <h2>Ver alumno</h2>
    <br>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nombre:</th>
                <th scope="col">Apellido:</th>
                <th scope="col">Edad:</th>
                <th scope="col">Direccion:</th>
            </tr>
        </thead>
        <tbody>
            <td>{{ $alumno->nombre}}</td>
            <td>{{ $alumno->apellido}}</td>
            <td>{{ $alumno->edad}}</td>
            <td>{{ $alumno->direccion}}</td>
        </tbody>
    </table>
</body>

</html>