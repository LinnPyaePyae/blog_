@extends('layouts.app')
@section('content')
    <form action="{{ route('article.store') }}" method="post">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Create New Article</h4>
                    <hr>
                    <div class="mb-3">
                        <label class=" form-label" for="">Article Title</label>
                        <input type="text" class=" form-control @error('title') is-invalid @enderror"
                            value="{{ old('title') }}" name="title">
                        @error('title')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class=" form-label" for="">Select Category</label>
                        <select class="form-select mb-5 @error('category') is-invalid @enderror" name="category">
                            @foreach (App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category') == $category->id ? 'selected' : '' }}>{{ $category->title }}
                                </option>
                            @endforeach
                    </div>

                    <div class="mb-3">
                        <label class=" form-label" for="">Description</label>
                        <textarea name="description" class=" form-control @error('description') is-invalid @enderror" rows="7">{{ old('description') }}</textarea>
                        @error('description')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button class=" btn btn-primary">Save Article</button>
                </div>
            </div>

        </div>
    </form>
@endsection
