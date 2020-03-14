@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h1>Lista de Investigadores</h1>
        @foreach($researchers as $researcher)
            
                <div class="panel panel-default">
                    <div class="panel-heading">
                    
                    @foreach($users as $user)
                        @if($user->id == $researcher->id)
                            
                            <p><strong>Nombre: </strong>{{$user->name}}</p>
                            <p><strong>País Origen: </strong>{{$researcher->pais}}</p>
                        @endif
                    @endforeach
                    </div>

                    <div class="panel-heading">
                        @foreach($groups_researchers as $group_researcher)
                            @if($researcher->id == $group_researcher->researcher_id)
                                @foreach($groups as $group)
                                    @if($group->id == $group_researcher->group_id)
                                        <p><strong>Unidad: </strong>{{$group->nombreUnidad}}</p>
                                        <p><strong>Pais Unidad: </strong>{{$group->paisUnidad}}</p>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        
                    </div>
                </div>
        @endforeach
        {{$researchers->render()}}
    </div>
</div>


@endsection