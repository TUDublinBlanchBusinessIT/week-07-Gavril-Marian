<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{{ config('app.name') }}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
              integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-default navbar-static-top">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('members.index') }}">Member List</a></li>
                <li><a href="{{ route('members.create') }}">New Member</a></li>
                <li><a href="{{ route('bookings.index') }}">Booking List</a></li>
            </ul>
        </nav>

        <!-- Main content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        @yield('content')
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>

        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        @stack('js_scripts')
    </body>
</html>