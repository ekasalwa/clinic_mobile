@extends('template.layouts')

@section('title', $product->name . ' - Éternelle Beauté')

@section('content')
    <div class="product-container">
        <div class="product-header">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="200">
        </div>
        <div class="product-body">
            <h1>{{ $product->name }}</h1>
            <div class="price-verification">
                <span class="price">Price: <br> Rp {{ number_format($product->selling_price, 2) }}</span>
                <span class="verification">Verified: 
                    @if ($product->halal_status == 1)
                    Halal
                    @else
                    Not Halal
                    @endif <br>
                    - BPOM 
                    @if ($product->bpom_status == 1)
                    Approved
                    @else
                    Still Pending
                @endif</span>
            </div>
            <p class="description">{{ $product->description }}</p>
            <button class="back-button" onclick="location.href='{{ url()->previous() }}'">Back</button>
        </div>
    </div>
@endsection