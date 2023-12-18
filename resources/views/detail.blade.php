@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-lg-8">

            <div class="card">
                <div class="card-body">
                    <a href="" class="text-decoration-none text-dark">
                        <h3>{{ $article->title }}</h3>
                    </a>
                    <div class="mb-4">
                        <span class="badge bg-dark">{{ $article->category->title ?? 'Unknown' }}</span>
                        <span class="badge bg-dark">{{ $article->created_at->format('d M Y') }}</span>
                        <span class="badge bg-dark">{{ $article->user->name ?? 'Unknown' }}</span>
                    </div>
                    <p>{{ $article->description }}</p>


                </div>

            </div>

            @include('layouts.comment')


        </div>
    </div>
@endsection
