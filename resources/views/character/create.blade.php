@extends('adminlte::page')

@section('title', 'Characters')

@section('content_header')
    <h1>Create New Character</h1>
@stop

@section('content')
    {!! Form::model($character, ['action' => 'CharacterController@store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('race', 'Race') !!}
        {!! Form::text('race', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('class', 'Class') !!}
        {!! Form::text('class', '', ['class' => 'form-control']) !!}
    </div>

    <button class="btn btn-success" type="submit">Save</button>
    {!! Form::close() !!}
@stop

@section('js')
    <!--<script type="text/javascript">
        $(document).ready(function () {
            $('#characters').DataTable();
        });
    </script>-->
@stop