@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Category List</h3>
                <br>
                <a href="{{ route('category.create') }}" class="btn btn-outline-dark">Create</a>
                <br><br>
                <table class=" table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Owner</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}

                                </td>

                                <td>{{ $category->user->name }}</td>


                                <td>
                                    <div class="btn-group">


                                        @can('update', $category)
                                            <a href="{{ route('category.edit', $category->id) }}"
                                                class="btn btn-sm btn-outline-dark">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                        @endcan


                                        @can('delete', $category)
                                            <button form="categoryDeleteForm {{ $category->id }}"
                                                class=" btn btn-sm btn-outline-dark">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                        @endcan


                                    </div>
                                </td>
                                <td>
                                    <p class="small mb-0">
                                        <i class="bi bi-clock"></i>
                                        {{ $category->updated_at->format('h:i a') }}

                                    </p>
                                    <p class="small mb-0">
                                        <i class="bi bi-calendar"></i>
                                        {{ $category->updated_at->format('d M Y') }}

                                    </p>
                                </td>
                                {{-- <td>{{ $category->created_at->diffforhumans() }}</td> --}}
                                <td>
                                    <p class="small mb-0">
                                        <i class="bi bi-clock"></i>
                                        {{ $category->created_at->format('h:i a') }}

                                    </p>
                                    <p class="small mb-0">
                                        <i class="bi bi-calendar"></i>
                                        {{ $category->created_at->format('d M Y') }}

                                    </p>
                                </td>
                            </tr>

                            <form id="categoryDeleteForm {{ $category->id }}" class=" d-inline-block"
                                action="{{ route('category.destroy', $category->id) }}" method="post">
                                @method('delete')
                                @csrf

                            </form>

                        @empty
                            <tr>
                                <td colspan="5" class=" text-center">
                                    <p>
                                        There is no record
                                    </p>
                                    <a class=" btn btn-sm btn-primary" href="{{ route('category.create') }}">Create
                                        Category</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>



            </div>
        </div>
    </div>
@endsection
