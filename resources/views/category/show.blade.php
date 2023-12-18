@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h3>Article Detail</h3>
                <br>
                <a href="{{ route('article.create') }}" class="btn btn-outline-dark">Create Article</a>

                <a href="{{ route('article.index') }}" class="btn btn-outline-dark">Article List</a>
                <br><br>

            </div>
        </div>
    </div>
@endsection
