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
            <div class="card-header bg-danger text-white text-center">
              <h3 class="card-title">Payment Declined</h3>
            </div>
            <div class="card-body">
              <p>
                Sorry, your payment was declined. Please check your payment
                information and try again.
              </p>
              <a href="/" class="btn btn-primary" >Go to Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</body>