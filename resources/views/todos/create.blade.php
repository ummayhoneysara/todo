@extends('layouts.starter')

@section('title','Create A Todo')
@section('main-content')
        <div class="col-md-12">
            <h1 class="text-center my-5">Create A Todo</h1> 
            <div class="card card-default">
                <div class="card-header">Todo of the day</div>
                <div class="card-body">
                    <form action="/store" method="POST">
                        <div class="form-group">
                            <label for="title"></label>
                            <input name="name" type="text" placeholder="Enter a name" class="form-control">
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
                            <textarea name="description" class="form-control" id="" cols="30" rows="10"> </textarea>
                        </div>
                        <div class="form-group text-center">
                        <button class="btn btn-success btn-sm" type="submit" >Create a Todo</button>
                        </div>
                    @csrf
                    </form>                    
                </div>
            </div>
        </div>
@endsection   