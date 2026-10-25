@extends('layout')

@section('title', 'Superheroes')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1>Superheroes</h1>
            <p class="text-muted mb-0">
                Manage the superheroes registered in the system.
            </p>
        </div>

        <a href="{{ route('superheroes.create') }}" class="btn btn-primary">
            Register Superhero
        </a>
    </div>

    <div class="row">
        @forelse($superheroes as $superhero)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($superhero->photo_url)
                        <img
                            src="{{ $superhero->photo_url }}"
                            class="card-img-top hero-photo"
                            alt="{{ $superhero->hero_name }}"
                        >
                    @endif

                    <div class="card-body">
                        <h4>{{ $superhero->hero_name }}</h4>
                        <p class="text-muted">
                            {{ $superhero->real_name }}
                        </p>

                        <a
                            href="{{ route('superheroes.show', $superhero) }}"
                            class="btn btn-info btn-sm"
                        >
                            View
                        </a>

                        <a
                            href="{{ route('superheroes.edit', $superhero) }}"
                            class="btn btn-warning btn-sm"
                        >
                            Edit
                        </a>

                        <form
                            action="{{ route('superheroes.destroy', $superhero) }}"
                            method="POST"
                            class="d-inline"
                            onsubmit="return confirm('Delete this superhero?');"
                        >
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-secondary">
                    No superheroes have been registered yet.
                </div>
            </div>
        @endforelse
    </div>
@endsection
