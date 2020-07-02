@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
                @endif

                <div class="card-body">
                    @foreach ($todos as $todo)
                        <div class="">
                            <a href="{{route('todos.show', ['id'=>$todo->id])}}">{{$todo->title}}</a>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
