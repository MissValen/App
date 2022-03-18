{{--Para poder heredar la plantilla, neceito usar @extends--}}
@extends('Layouts.app')

@section('titulo', 'Crear Registro')

@section('contenido')

    <h3>Crear Nueco Registro</h3>
    <form action="/cursos" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombrecurso">Nombre del curso</label>
            <input name="nombre" id="nombrecurso" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="descripcioncurso">Descripcion del Curso</label>
            <input name="descripcion" id="descripcioncurso" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="imagen">Cargar imagen</label>
            <br>
            <input name="imagen" id="imagen" type="file">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>

    </form>

@endsection

{{--

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <title>Vista de Registros</title>

    </head>

    <body>
        --}
        {{--Bootstrap requiere un div container para mostrar los elemntos centrados y ordenados--}}
        {{--

        <div class="container">
            <br>
            <h3>Crear Nueco Registro</h3>
            <form action="/cursos" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombrecurso">Nombre del curso</label>
                    <input name="nombre" id="nombrecurso" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="descripcioncurso">Descripcion del Curso</label>
                    <input name="descripcion" id="descripcioncurso" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>

            </form>
        </div>
    </body>

</html>

--}}
