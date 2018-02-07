@extends('adminlte::page')

@section('title', 'Characters')

@section('content_header')
    <h1>{{ $character->name }}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-3">

            <!-- Profile -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle"
                         src="{{ asset("img/" . $character->image) }}"
                         alt="Character picture">

                    <h3 class="profile-username text-center">{{ $character->name }}</h3>

                    <p class="text-muted text-center">
                        {{ $character->race . ' ' . $character->class . ' ' . $character->level }}
                    </p>

                    <!-- Attributes -->
                    <!-- TODO add attributes area -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- Information Box -->
            <!-- TODO add infobox -->
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#combat" data-toggle="tab">Combat</a></li>
                    <li><a href="#skills" data-toggle="tab">Skills</a></li>
                    <li><a href="#feats" data-toggle="tab">Feats</a></li>
                    <!--<li><a href="#powers" data-toggle="tab">Powers</a></li>
                    <li><a href="#equipment" data-toggle="tab">Equipment</a></li>-->
                </ul>
                <div class="tab-content">
                    @include('character.partials.combat_tab')
                    @include('character.partials.skills_tab')
                    @include('character.partials.feats_tab')
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@stop

@section('js')
    <!--<script type="text/javascript">
        $(document).ready(function () {
            $('#characters').DataTable();
        });
    </script>-->
@stop