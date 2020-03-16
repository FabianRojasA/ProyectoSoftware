@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">

                <h2>
                    Nuevo grupo
                    <td><a href="{{route('administrarGrupos')}}" class="btn btn-default float-right">volver</a>
                </h2>

            </div>
            <div class="panel-body">
                @include('groups.fragment.error')

                {!! Form::open( ['route'=> 'groups.store'])!!}
                @include('groups.fragment.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


@endsection