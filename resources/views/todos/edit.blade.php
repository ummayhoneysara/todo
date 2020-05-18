@extends('layouts.starter')

@section('title','Edit A Todo')
@section('main-content')
        <div class="col-md-12">
            <h1 class="text-center my-5">Edit A Todo </h1> 
            <div class="card card-default">
                <div class="card-header">Edit</div>
                <div class="card-body">
                    <form action="/todos/{{ $todo->id }}/update" method="POST">
                        <div class="form-group">
                            <label for="title"></label>
                            <input name="name" type="text" placeholder="Enter a name" class="form-control"
                            value="{{ $todo->name }}">
                        </div>

                        @if($errors->any())
                        <div class="alert alert-design">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                <li class="list-group-item">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="form-group">
                            <textarea name="description" class="form-control" id="" cols="30" rows="10"> 
                            {{ $todo->description }}
                            </textarea>
                        </div>
                        <div class="form-group text-center">
                        <button class="btn btn-success btn-sm" type="submit" >Edit this Todo</button>
                        
                        <a href="/todos/{{ $todo->id }}/delete">
                            <button type="button" class="btn btn-danger btn-sm">delete</button>
                        </a>
                        </div>
                    @csrf
                    </form>                    
                </div>
            </div>
        </div>
@endsection   