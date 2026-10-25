<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Superhero Registry</title>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    >

    <style>
        body {
            background-color: #f4f6f9;
        }

        .navbar {
            background-color: #20232a;
        }

        .hero-photo {
            width: 100%;
            height: 230px;
            object-fit: cover;
        }

        .detail-photo {
            width: 100%;
            max-height: 420px;
            object-fit: contain;
            background-color: #eeeeee;
        }

        .card {
            border: none;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.12);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('superheroes.index') }}">
                Superhero Registry
            </a>
        </div>
    </nav>

    <main class="container pb-5">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Please correct the following errors:</strong>

                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
