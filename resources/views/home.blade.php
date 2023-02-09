@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CHECKOUT') }}</div>

                <div class="card-body d-flex justify-content-center align-items-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://movies.universalpictures.com/media/02-pib-dm-mobile-banner-1080x745-km-f01-061422-62a9f2d372f3a-1.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Puss in Boots Ticket ($200)</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt ut quam et sagittis. Donec nec justo fringilla, dignissim libero eget, blandit sem. Cras vulputate tincidunt tortor quis elementum.</p>

                          <form action={{route('payment')}} method="post">
                            @csrf

                            <input type="hidden" name="amount" value="200" />
                            <button type="submit" class="btn btn-primary" style="width: 100%">Pay with PayPal</button>
                          </form>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
