@extends('adminlte::page')

@section('title', 'Characters')

@section('content_header')
    <h1>Characters</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border datatable-header">

            <div class="header-title">
                <h1>Saved Characters</h1>
            </div>

            <div class="text-center add-element">
                <a href="{{ route('character.create') }}">
                    <i class="material-icons icon-add">&#xE145;</i>
                    <p>New Character</p>
                </a>
            </div>
        </div>

        <div class="box-body">
            <table id="characters" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Race</th>
                    <th>Class</th>
                    <th>Level</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($characters as $character)
                    <tr>
                        <td>
                            <a href="character/{{ $character->id }}">
                                {{ $character->name }}
                            </a>
                        </td>
                        <td>{{ $character->race  }}</td>
                        <td>{{ $character->class }}</td>
                        <td>{{ $character->level }}</td>
                        <td>
                            <div class="side">
                                <a href="character/{{ $character->id }}/edit">
                                    <i class="material-icons md-black md-24" data-toggle="tooltip" data-placement="bottom" title="edit">edit</i>
                                </a>

                                {!! Form::open(['method' => 'DELETE', 'route' => ['character.destroy', $character->id]]) !!}
                                <a href="">
                                    <i class="material-icons md-black md-24" data-toggle="tooltip" data-placement="bottom" title="delete">delete</i>
                                </a>
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Race</th>
                    <th>Class</th>
                    <th>Level</th>
                    <th>Actions</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@stop

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#characters').DataTable();
        });
    </script>
@stop

@section('css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .side {display: inline-block; margin: 0 10px;}
    </style>
@stop