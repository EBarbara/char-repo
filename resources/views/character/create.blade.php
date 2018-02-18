@extends('adminlte::page')

@section('title', 'Characters')

@section('content_header')
    <h1>Create New Character</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Characters</a></li>
        <li class="active">Create New</li>
    </ol>
@stop

@section('content')
    {!! Form::model($character, ['action' => 'CharacterController@store', 'class' => 'form-horizontal']) !!}

    <div class="row">
        <!-- Left Column -->
        <div class="col-md-6">
            <!-- Basic Info -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Basic Info</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="name" type="text" value="" id="name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="race" class="col-sm-2 control-label">Race</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="race" type="text" value="" id="race">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="class" class="col-sm-2 control-label">Class</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="class" type="text" value="" id="class">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="level" class="col-sm-2 control-label">Level</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="level" type="number" min="1" max="30" value="" id="level">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-6">
            <!-- Attributes -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Attributes</h3>
                </div>
                <div class="box-body">
                <div class="form-group">
                    <label for="str" class="col-sm-2 control-label">Strength</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="str" type="number" min="3" max="99" value="10" id="str">
                    </div>
                </div>

                <div class="form-group">
                    <label for="con" class="col-sm-2 control-label">Constitution</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="con" type="number" min="3" max="99" value="10" id="con">
                    </div>
                </div>

                <div class="form-group">
                    <label for="dex" class="col-sm-2 control-label">Dexterity</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="dex" type="number" min="3" max="99" value="10" id="dex">
                    </div>
                </div>

                <div class="form-group">
                    <label for="int" class="col-sm-2 control-label">Intelligence</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="int" type="number" min="3" max="99" value="10" id="int">
                    </div>
                </div>

                <div class="form-group">
                    <label for="wis" class="col-sm-2 control-label">Wisdom</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="wis" type="number" min="3" max="99" value="10" id="wis">
                    </div>
                </div>

                <div class="form-group">
                    <label for="cha" class="col-sm-2 control-label">Charisma</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="cha" type="number" min="3" max="99" value="10" id="cha">
                    </div>
                </div>
            </div>
            </div>
        </div>

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