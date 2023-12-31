@extends('layouts.app')
@section('content')
    <form action="{{ route('article.update', $article->id) }}" method="post">
        @csrf
        @method('put')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Edit Article</h4>
                    <hr>
                    <div class="mb-3">
                        <label class=" form-label" for="">Article Title</label>
                        <input type="text" class=" form-control @error('title') is-invalid @enderror"
                            value="{{ old('title', $article->title) }}" name="title">
                        @error('title')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class=" form-label" for="">Select Category</label>
                        <select class="form-select mb-5 @error('category') is-invalid @enderror" name="category">
                            @foreach (App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category', $article->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->title }}
                                </option>
                            @endforeach
                    </div>

                    <div class="mb-3">
                        <label class=" form-label" for="">Description</label>
                        <textarea name="description" class=" form-control @error('description') is-invalid @enderror" rows="7">{{ old('description', $article->description) }}</textarea>
                        @error('description')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button class=" btn btn-primary">Update Article</button>
                </div>
            </div>

        </div>
    </form>
@endsection
