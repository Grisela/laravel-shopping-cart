@extends('app')

@section('content')

    <?php $total = 0 ?>

    @if (session('layouts.cart'))

    <div class="row justify-content-center mt-4">
        <div class="col-8">
            <div class="card p-4">

        @foreach (session('layouts.cart') as $id => $details)

        <?php $total += $details['price'] * $details['quantity'] ?>
           
        <div class="card bg-light mt-2">
            <div class="row no-gutters">
                <div class="col-2">
                    <img class="img-fluid" src="{{ $details['image'] }}" class="img-fluid" alt="">
                </div>
                <div class="col-8">
                    <div class="card-block p-2">
                        <h4 class="card-title">{{ $details['name'] }}</h4>
                        <p class="card-text">Description</p>
                        <a href="#" class="btn btn-primary">Pay Now</a>
                    </div>
                </div>
                <div class="col-2 d-flex align-items-center flex-column details">
                    <p class="card-text align-self-center">{{ $details['quantity'] }}</p>
                    <p class="card-text align-self-center">${{ $details['price'] }}</p>
                </div>
            </div>
        </div>

        @endforeach

        <div class="align-self-end pt-2">
            <p><strong> Total : {{ $total }}</strong></p>
        </div>
    </div>
    
</div>
</div>
    @endif

@endsection