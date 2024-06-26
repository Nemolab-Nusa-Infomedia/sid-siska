<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Siska</title>

    <!-- style Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">

    <!-- RemixIcon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>

    {{-- alpine js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
  <body>
    <div class="wrapper">
        @include('components.sidebar')
        <!-- navbar -->
         <div class="main">
            @include('components.navbar')
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;); border-bottom: 3px solid #CEF2FF; width: 100%;" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Kependudukan</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Penduduk</li>
                            </ol>
                          </nav>

                        <div class="row">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </main>
            @include('components.footer')
         </div>
    </div>


    {{-- CDN Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- script js -->
     <script src="{{ asset('assets/admin/js/script.js') }}"></script>
  </body>
</html>
