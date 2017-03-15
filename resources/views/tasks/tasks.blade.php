@extends('layouts.app')

@section('content')

    <table class="table table-hover">

        <thead>
        <th>Completado</th>
        <th>nombre</th>
        </thead>

        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>COMPLE</td>
                <td>{{$task->name}}</td>
            </tr>
        @endforeach


        </tbody>

    </table>

@endsection