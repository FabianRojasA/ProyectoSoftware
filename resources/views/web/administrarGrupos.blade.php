@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        @include('groups.fragment.info')
        <h1>
            Listado de grupos actuales
            <a href="{{ route('groups.create') }}" class="btn btn-primary pull-right">Nuevo Grupo</a>
        </h1>
        @foreach($groups as $group)
        <div class="panel panel-default">
            <div class="panel-heading">
                <p><strong>{{$group->nombre}}</strong></p>

            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="panel-body">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5>Lista de unidades asociadas</h5>
                                </div>
                                @foreach($groupsUnits as $groupunit)
                                @if($groupunit->group_id == $group->id)
                                @foreach($units as $unit)
                                @if($unit->id == $groupunit->unit_id)

                                <div class="panel-body">
                                    <ul>
                                        <li>Nombre Unidad: {{$unit->nombre}}</li>
                                        <li>País: {{$unit->pais}}</li>
                                    </ul>
                                </div>
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        @if($group->logo)
                        <img src="{{$group->logo}}" class="img-responsive">
                        @endif
                    </div>
                </div>
                <a href="{{route('groups.edit', $group->id)}}"> Editar Grupo</a>
            </div>

        </div>
        @endforeach
        {{$groups->render()}}
    </div>
</div>


@endsection