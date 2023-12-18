@extends('layouts.app')
@section('content')
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Create New Category</h4>
                    <hr>
                    <div class="mb-3">
                        <label class=" form-label" for="">Category Title</label>
                        <input type="text" class=" form-control @error('title') is-invalid @enderror" name="title">
                        @error('title')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>



                    <button class=" btn btn-primary">Save Category</button>
                </div>
            </div>

        </div>
    </form>
@endsection
