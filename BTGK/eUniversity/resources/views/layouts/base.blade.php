<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('page_active')
    </title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/4042/4042422.png" type="image/x-icon">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/font/fontawesome/css/all.min.css')}}" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><i class="fa-solid fa-house"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/majors">Major</a>
                        </li>
                    </ul>
                </div>
            </div>
         
                    
        </nav>
        
    </header>


    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content -->
    </footer>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    @yield('scripts')
</body>

</html>