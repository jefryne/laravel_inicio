@extends('layouts.landing')


@section('title', 'adso')

@section('content')


        <h1 class="my-5">Lista de usuarios</h1>
        @component('layouts.partials.table')
            @section('body_table')
                <?php
                    for ($i=0; $i < 10; $i++) { 
                ?>
                    @component('_components.rowtable')
                        @slot('name_user')
                            Carlos henao
                        @endslot
                    @endcomponent
                <?php
                    }
                ?>
               
            @endsection
        @endcomponent
        <button class="btn btn-dark ">Agregar</button>

@endsection
