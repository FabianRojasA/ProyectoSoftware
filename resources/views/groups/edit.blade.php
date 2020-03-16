@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-sm-8">

        <h2>
            Editar grupo
            <td><a href="{{route('groups.index')}}" class="btn btn-default float-right">Listado</a>
        </h2>
        @include('groups.fragment.error')
        {!! Form::model($group, ['route'=> ['groups.update', $group->id], 'method' => 'PUT'])!!}
        @include('groups.fragment.form')
        {!! Form::close() !!}
    </div>

    <div class="col-sm-4">
        @include('groups.fragment.aside')
    </div>

</div>


@endsection