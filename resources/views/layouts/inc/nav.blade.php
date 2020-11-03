<?php $total = 0 ?>
@foreach ((array) session('layouts.cart') as $id => $details)
    <?php $total += $details['price'] * $details['quantity'] ?>
@endforeach

<nav class="navbar navbar-expand-sm navbar-dark bg-dark px-4">
    <a class="navbar-brand px-4" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mr-5 mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cart <span class="badge badge-pill badge-danger">{{ count((array) session('layouts.cart')) }}</span></a>
                <div class="dropdown-menu mr-5" aria-labelledby="dropdownId">
                    <div class="row total">
                        <div class="col-12 section-text">
                            <p>Total : ${{ $total }}</p>
                        </div>
                    </div>

                    @if (session('layouts.cart'))
                        @foreach (session('layouts.cart') as $id => $details)
                        <div class="row detail">
                            <div class="col-4 section-image">
                            <img class='img-fluid' src="{{$details['image']}}">
                            </div>
                            <div class="col-4 section-item-name">
                                <p>{{$details['name']}} </p>
                                <span><small>${{$details['price']}}</small></span>
                            <span><small> Quantity : {{$details['quantity']}}</small></span>
                            </div>
                        </div> 
                        @endforeach
                    @endif

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                </div>
            </li>
        </ul>
    </div>
</nav>