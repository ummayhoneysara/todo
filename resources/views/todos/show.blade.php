@extends('layouts.starter')

@section('title','Todos Single Page')
@section('main-content')
        <div class="col-md-12">
            <h1 class="text-center my-5">Todos Single Page</h1> 
            <div class="card card-default">
                <div class="card-header">Todo of the day</div>
                <div class="card-body">
                    <ul class="list-group">
                    <li class="list-group-item">Title: {{ $todoId->name }}</li>
                    <li class="list-group-item">Description: {{ $todoId->description }}</li>
                    <li class="list-group-item">status: {{ $todoId->completed }}</li>
                    </ul>
                </div>
            </div>
                        
            <a href="/todos/{{ $todoId->id }}/edit" class="btn btn-success btn-sm" >EDIT</a>
            <a href="/todos/{{ $todoId->id }}/delete" class="btn btn-danger btn-sm" >DELETE</a>
        </div>
@endsection   