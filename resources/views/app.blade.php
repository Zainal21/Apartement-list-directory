<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Apartement Directory Listing</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    @livewireStyles
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <strong>Aprt Directory</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>

            <div class="container-fluid">
                <livewire:tenant-list />
            </div>
        </div>
    </div>
    <footer>
        <div class="row text-center text-muted">
            <div class="col-md-12">
                <p>&copy;<strong>Laravel Sails (Sails, Docker, PostgreSQL, Livewire) Experiment Project </strong>Created
                    by Muhamad Zainal Arifin</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    @livewireScripts
</body>

</html>
