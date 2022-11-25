<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <br>
    <h2 class="align-items: center;">Listado de Alumnos</h2>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Edad</th>
                <th scope="col">Direccion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($alumnos as $alumno)
        <tr>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->apellido }}</td>
            <td>{{ $alumno->edad }}</td>
            <td>{{ $alumno->direccion }}</td>
            <td>
                <a class="btn btn-info" href="/alumnos/ver/{{$alumno->id}}">Ver</a>
                <a class="btn btn-warning" href="/alumnos/editar/{{$alumno->id}}">Editar</a>
                <a class="btn btn-danger" href="/alumnos/eliminar/{{$alumno->id}}" onclick="return eliminarAlumno('Eliminar Alumno')"> Eliminar</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <a class="btn btn-primary" href="/alumnos/crear">Nuevo alumno</a>

</body>
<script>
    function eliminarAlumno(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>

</html>