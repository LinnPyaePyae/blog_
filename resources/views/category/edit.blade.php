@extends('layouts.app')
@section('content')
    <form action="{{ route('category.update', $category->id) }}" method="post">
        @csrf
        @method('put')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Edit Category</h4>
                    <hr>
                    <div class="mb-3">
                        <label class=" form-label" for="">Category Title</label>
                        <input type="text" class=" form-control @error('title') is-invalid @enderror"
                            value="{{ old('title', $category->title) }}" name="title">
                        @error('title')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button class=" btn btn-primary">Update Category</button>
                </div>
            </div>

        </div>
    </form>
@endsection
