@extends('layouts.starter')
@section('title','Todos page')

@section('main-content')
        <div class="col-md-12">
            <h1 class="text-center my-5">Todos page</h1> 
            <div class="card card-default">
                <div class="card-header">Todos</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($todos as $todo)
                            <li class="list-group-item"> {{ $todo->name }} 

                            @if(!$todo->completed)
                            <a href="/todos/{{ $todo->id }}/complete">
                                <button type="button" class="btn btn-warning btn-sm float-right mr-2">complete</button>
                            </a>
                            @endif
                            <a href="/todos/{{ $todo->id }}/delete">
                                <button type="button" class="btn btn-danger btn-sm float-right mr-2">delete</button>
                            </a>
                            <a href="/todos/{{ $todo->id }}/edit">
                                <button type="button" class="btn btn-success btn-sm float-right mr-2">edit</button>
                            </a>
                            <a href="/todos/{{ $todo->id }}">
                                <button type="button" class="btn btn-info btn-sm float-right mr-2">view</button>
                            </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

@endsection   