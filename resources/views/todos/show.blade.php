@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$todo->title}}</div>
                <div class="card-body">
                    <h5>Created At : {{$todo->created_at}}</h5>
                    <a class="btn btn-link" href="{{route('todos.edit', ['id'=>$todo->id])}}">edit</a>
                    <a class="btn btn-link " href="{{route('todos.confirm', ['id'=>$todo->id])}}">delete</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
