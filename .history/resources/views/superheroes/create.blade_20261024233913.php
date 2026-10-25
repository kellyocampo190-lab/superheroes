@extends('layout')

@section('title', 'Register Superhero')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Register a New Superhero</h1>
            <p class="text-muted">Complete the following information.</p>

            <form action="{{ route('superheroes.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="real_name">Real Name</label>
                    <input
                        type="text"
                        name="real_name"
                        id="real_name"
                        class="form-control"
                        value="{{ old('real_name') }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="hero_name">Superhero Name</label>
                    <input
                        type="text"
                        name="hero_name"
                        id="hero_name"
                        class="form-control"
                        value="{{ old('hero_name') }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="photo_url">Photo URL</label>
                    <input
                        type="url"
                        name="photo_url"
                        id="photo_url"
                        class="form-control"
                        value="{{ old('photo_url') }}"
                    >
                </div>

                <div class="form-group">
                    <label for="additional_information">
                        Additional Information
                    </label>

                    <textarea
                        name="additional_information"
                        id="additional_information"
                        class="form-control"
                        rows="5"
                    >{{ old('additional_information') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Save Superhero
                </button>

                <a
                    href="{{ route('superheroes.index') }}"
                    class="btn btn-secondary"
                >
                    Cancel
                </a>
            </form>
        </div>
    </div>
@endsection
