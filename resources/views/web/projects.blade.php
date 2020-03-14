@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h1>Lista de proyectos</h1>
        @foreach($projects as $project)
        <div class="panel panel-default">
            <div class="panel-heading">
                <p><strong>{{$project->nombre}}</strong></p>
            </div>

            <div class="panel-heading">
                <p><strong>Estado: </strong>{{$project->estado}}</p>
                <p><strong>Fecha de Inicio: </strong>{{$project->fechaInicio}}</p>
                <p><strong>Fecha de Termino: </strong>{{$project->fechaTermino}} <a href="{{ route('researchersP', $project->id)}}" class="pull-right"> Lista de Investigadres Participantes</a></p>
                
            </div>
        </div>
        @endforeach
        {{$projects->render()}}
    </div>
</div>


@endsection