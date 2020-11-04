@extends('app')

@section('content')

<section id="home">
    <div class="bg-rect">
        <svg width="841" height="768" viewBox="0 0 841 768" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="-348" y="18.3615" width="880.308" height="1173.39" transform="rotate(-17.2714 -348 18.3615)" fill="#F6AE2D"/>
            </svg>
            
                      
    </div>
    <div class="main d-flex flex-column justify-content-center">
        <h1>A BOWL TO DIE FOR</h1>
        <h4>Our food will fill you with the love <br> that you never had.</h4>
    </div>

    <img class="img-fluid img-pos" src="{{asset('img/landing/bowl.png')}}" alt="" srcset="">

    <div class="sub">
        <h2>Open Everyday At</h2>
        <h3>08.00 AM - 10.00 PM</h3>
    </div>
</section>

<section id="menu">

    <div class="row mx-2 justify-content-center">

        {{-- @if (count($product>0)) --}}
        
        @foreach ($product as $eachproduct)
        <div class="card col-md-3 col-m-6 col-sm-4 d-flex flex-column justify-content-between align-items-center" style="margin:5px; padding: 15px">
            <div class="thumbnail">
                <img class="img-fluid" style="border-radius: 5px; max-height: 30vh" src="{{ $eachproduct->image }}" alt="" srcset="">
            </div>
            <div class="product-details my-2">
                <h4 class="my-4">{{ $eachproduct->name }}</h4>
                <p>{{ $eachproduct->description }}</p>
                <p class="my-4"><strong>Price: </strong> ${{ $eachproduct->price}}</p>
                <p class="btn-holder"><a href="{{url('add-to-cart/'.$eachproduct->id)}}" class="btn btn-dark btn-block text-center" role="button">Add to cart</a> </p>
            </div>
        </div>
        
        @endforeach
    
        {{-- @else
            <div class="col-8">
                <h4>No Product Yet...</h4>
            </div>
        @endif --}}
    
        </div> 

</section>
   

@endsection