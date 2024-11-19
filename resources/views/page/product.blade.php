@extends('template.layouts')

@section('title', 'Display Products - Éternelle Beauté')

@section('content')
    <div class="product-section">
        <h2>Our Products</h2>
        <div class="product-grid">
            @foreach ($products as $product)
                <div class="product-card" onclick="location.href='{{ route('showProduct', $product->id) }}'">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy" />
                    <p>{{ $product->name }}</p>
                    <p class="stock">{{ $product->stock }} in stock</p>
                    <p class="price">Rp {{ number_format($product->selling_price, 2) }}</p>
                </div>
            @endforeach
        </div>
        <div class="pagination">
            @for ($i = 1; $i <= ceil($totalProducts / $perPage); $i++)
            <span>
                <a href="{{ url()->current() }}?page={{ $i }}" class="{{ $currentPage == $i ? 'active' : '' }}">
                    {{ $i }}
                </a>
            </span>
            @endfor
        </div>
    </div>
@endsection