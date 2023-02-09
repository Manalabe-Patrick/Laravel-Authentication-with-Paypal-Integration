<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body><div class="container">
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-6">
          <div class="card">
            <div class="card-header bg-primary text-white text-center">
              <h3 class="card-title">Payment Successful!</h3>
            </div>
            <div class="card-body">
              <p>
                Payment is Successfull. Your Transaction Id is :  {{ $id }}
              </p>
              <a href="/" class="btn btn-primary" >Buy Another Ticket</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</body>