@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create A to do</div>
                <div class="card-body">
                    <div>
                        <h3>What Would you like to do?</h3>
                        <form action="/todos/create" method="POST"> @csrf
                            <input type="text" name="title" id="todo">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="submit" value="+ Add" class="btn btn-small btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
