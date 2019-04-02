@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center">Parky Rabbit </div>
                <hr class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2> Employe </h2>

                        <button type="button" class="btn btn-dark"><a href="{{route('create')}}">Add Employe</a></button>
                        <button type="button" class="btn btn-light"><a href="{{route('index')}}"> View Employe List</a></button>
                        <h2> Daily Cost Description</h2> </hr>

                        <button type="button" class="btn btn-dark"><a href="{{route('entry')}}">Add Daily Cost</a></button>
                        <button type="button" class="btn btn-light"><a href="{{route('show')}}"> View Employe List</a></button>






                </div>
            </div>
        </div>
    </div>
</div>
@endsection
