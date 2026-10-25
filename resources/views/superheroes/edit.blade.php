@extends('layout')

@section('title', 'Edit Superhero')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Edit Superhero</h1>
            <p class="text-muted">
                Update the superhero's information.
            </p>

            <form
                action="{{ route('superheroes.update', $superhero) }}"
                method="POST"
            >
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="real_name">Real Name</label>
                    <input
                        type="text"
                        name="real_name"
                        id="real_name"
                        class="form-control"
                        value="{{ old('real_name', $superhero->real_name) }}"
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
                        value="{{ old('hero_name', $superhero->hero_name) }}"
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
                        value="{{ old('photo_url', $superhero->photo_url) }}"
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
                    >{{ old('additional_information', $superhero->additional_information) }}</textarea>
                </div>

                <button type="submit" class="btn btn-warning">
                    Update Superhero
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
