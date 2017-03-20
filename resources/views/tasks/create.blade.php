@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Crear nueva Tareas</h3>
                </div>
                <div class="panel-body">
                    <from action="{{route('tasks.create')}}" method="POST" class="from-horizontal">
                        {{ csrf_field() }}

                        <div class="from-group">
                            <label>Tareas</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="from-group">
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>

                    </from>
                </div>
            </div>
        </div>
    </div>
@endsection