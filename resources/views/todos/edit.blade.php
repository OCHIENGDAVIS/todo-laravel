@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit: {{$todo->title}}</div>
                <div class="card-body">
                        <form action="{{route('todos.update', ['id'=>$todo->id])}}" method="POST"> @csrf
                            <input type="text" name="title" id="todo" value="{{$todo->title}}">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="submit" value="edit" class="btn btn-sm btn-primary" >
                            @method('PUT')
                        </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
