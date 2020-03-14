@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h1>Lista de Investigadores</h1>

        <div class="panel panel-default">
            @foreach($projects as $project)
                @if($id == $project->id)
                    @foreach($groups as $group)
                        @if($group->id == $project->group_id)
                            
                            
                            @php
                                $idGroup = $group->id
                            @endphp
                            @break(true)
                        @endif
                    @endforeach
                @endif
            @endforeach

            @foreach($groups_researchers as $group_researcher)
                @foreach($researchers as $researcher)
                    @if($idGroup == $group_researcher->group_id && $group_researcher->researcher_id == $researcher->id)
                            @foreach($users as $user)
                                @if($user->id == $researcher->id)
                                <div class="panel-heading">
                                <p><strong>Nombre: </strong>{{$user->name}}</p>
                                </div>
                                @break(true)
                                @endif
                            @endforeach
                            <div class="panel-bodu">
                                <p><strong>País Origen: </strong>{{$researcher->pais}}</p>
                            </div>
                        @break(true)
                    @endif
                @endforeach
            @endforeach


        </div>

    </div>
    {{$researchers->render()}}
</div>


@endsection