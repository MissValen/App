@extends('Layouts.app')

@section('titulo', 'Listado de Cursos')

@section('contenido')

    <center><h3>Listado de cursos disponibles</h3></center>
    <br>

    <div class="row"> {{--ya tenemos la fila--}}

    {{--Foreach es un ciclo o bucle especial para trabajar con arrays--}}
    {{--recorderis: existen ciclos como while, for, do while, foreach--}}
    @foreach ($cursito as $alias)
        {{--para llamar informacion de php basta con interpolar las variables usando la doble llave--}}


            <div class="col-sm"> {{--abrimos columnas--}}
                <div class="card text-center" style="width: 18rem; margin-top:30px">
                    <img style="height:200px; width:250px; margin:20px" src="{{ Storage::url($alias->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$alias->nombre}}</h5>
                    <p class="card-text">{{$alias->descripcion}}</p>
                    <a href="#" class="btn btn-primary">Ver mas</a>
                    <a href="/cursos/{{$alias->id}}" class="btn btn-secondary">Ver más</a>
                    </div>
                </div>
            </div>

    @endforeach

    </div>{{--cierre div de row--}}

@endsection
