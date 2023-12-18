@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Article List</h3>
                <br>
                <a href="{{ route('article.create') }}" class="btn btn-outline-dark">Create</a>
                <br><br>
                <table class=" table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Information</th>
                            <th>Control</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}
                                    <br>
                                    <p class="small text-black-50">
                                        {{ Str::limit($user->email, 30, '...') }}
                                    </p>
                                </td>

                                <td></td>

                                <td>
                                    <p class="small mb-0">
                                        <i class="bi bi-clock"></i>
                                        {{ $user->updated_at->format('h:i a') }}

                                    </p>
                                    <p class="small mb-0">
                                        <i class="bi bi-calendar"></i>
                                        {{ $user->updated_at->format('d M Y') }}

                                    </p>
                                </td>
                                {{-- <td>{{ $user->created_at->diffforhumans() }}</td> --}}
                                <td>
                                    <p class="small mb-0">
                                        <i class="bi bi-clock"></i>
                                        {{ $user->created_at->format('h:i a') }}

                                    </p>
                                    <p class="small mb-0">
                                        <i class="bi bi-calendar"></i>
                                        {{ $user->created_at->format('d M Y') }}

                                    </p>
                                </td>
                            </tr>



                        @empty
                            <tr>
                                <td colspan="5" class=" text-center">
                                    <p>
                                        There is no record
                                    </p>

                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="">
                    {{ $users->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
