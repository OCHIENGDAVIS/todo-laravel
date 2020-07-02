@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Delete: {{$todo->title}}</div>
        <div class="card-body">
            <h3>Are you sure you want to delete the Item?</h3>
                <form action="{{route('todos.delete', ['id'=>$todo->id])}}" method="POST"> @csrf
                    <input type="submit" value="delete" class="btn btn-sm btn-danger" >
                    <a href="{{route('todos.index')}}" class="btn btn-sm btn-secondary">Cancel</a>
                    @method('DELETE')
                </form>

        </div>
    </div>

@endsection
