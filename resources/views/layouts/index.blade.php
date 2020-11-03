@extends('app')

@section('content')

   <div class="row mx-5 justify-content-center">

    {{-- @if (count($product>0)) --}}
    
    @foreach ($product as $eachproduct)
    <div class="col-3" style="border: 1px solid red">
        <div class="thumbnail">
            <img class="img-fluid" src="{{ $eachproduct->image }}" alt="" srcset="">
        </div>
        <div class="product-details">
            <h4>{{ $eachproduct->name }}</h4>
            <p>{{ $eachproduct->description }}</p>
            <p><strong>Price: </strong> ${{ $eachproduct->price}}</p>
            <p class="btn-holder"><a href="{{url('add-to-cart/'.$eachproduct->id)}}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
        </div>
    </div>
    @endforeach

    {{-- @else
        <div class="col-8">
            <h4>No Product Yet...</h4>
        </div>
    @endif --}}

    

    </div> 

@endsection