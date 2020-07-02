@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <hr>
                    <div>
                        @if (session('error'))
                            <div class="alert alert-danger">{{session('error')}}</div>
                        @endif
                         @if (session('message'))
                            <div class="alert alert-success">{{session('message')}}</div>
                        @endif
                        <form action="/upload" enctype="multipart/form-data" method="POST"> @csrf
                            <input type="file" name="image" id="image">
                            <input type="submit" value="upload" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
