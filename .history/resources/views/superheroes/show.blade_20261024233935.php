@extends('layout')

@section('title', $superhero->hero_name)

@section('content')
    <div class="card">
        <div class="row no-gutters">
            <div class="col-md-5">
                @if($superhero->photo_url)
                    <img
                        src="{{ $superhero->photo_url }}"
                        class="detail-photo"
                        alt="{{ $superhero->hero_name }}"
                    >
                @else
                    <div class="p-5 text-center text-muted">
                        No photograph available
                    </div>
                @endif
            </div>

            <div class="col-md-7">
                <div class="card-body">
                    <h1>{{ $superhero->hero_name }}</h1>

                    <h5 class="text-muted">
                        Real name: {{ $superhero->real_name }}
                    </h5>

                    <hr>

                    <h5>Additional Information</h5>

                    <p>
                        {{ $superhero->additional_information
                            ?: 'No additional information was provided.' }}
                    </p>

                    <a
                        href="{{ route('superheroes.edit', $superhero) }}"
                        class="btn btn-warning"
                    >
                        Edit
                    </a>

                    <a
                        href="{{ route('superheroes.index') }}"
                        class="btn btn-secondary"
                    >
                        Return
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
