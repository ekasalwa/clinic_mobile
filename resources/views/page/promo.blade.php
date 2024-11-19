@extends('template.layouts')

@section('title', 'Exclusive Promo - Éternelle Beauté')

@section('content')
    <div class="promo-section">
        <div class="title-container">
            <h1>Exclusive Promo</h1>
            <div class="line-3"></div>
            <div class="line-2"></div>
        </div>
        <div class="card-container">
            <div class="promo-card">
                <div class="card-inner2">
                    <div class="front">
                        <h2>Facial Treatment</h2>
                        <span class="discount2">10% OFF</span>
                        <p class="expiry">exp. Nov 30, 2024</p>
                    </div>
                    <div class="back">
                        <p>Special price for all facial treatments. Experience deep cleansing and rejuvenating.</p>
                    </div>
                </div>
            </div>
            <div class="promo-card">
                <div class="card-inner">
                    <div class="front">
                        <h2>Body Spa</h2>
                        <span class="discount">30% OFF</span>
                        <p class="expiry">exp. Nov 30, 2024</p>
                    </div>
                    <div class="back">
                        <p>Relax and unwind with our premium body spa services, available now at a discounted price.</p>
                    </div>
                </div>
            </div>
            <div class="promo-card">
                <div class="card-inner2">
                    <div class="front">
                        <h2>Hair Care Package</h2>
                        <span class="discount2">20% OFF</span>
                        <p class="expiry">exp. Nov 30, 2024</p>
                    </div>
                    <div class="back">
                        <p>Take advantage of our special haircare package for healthy and beautiful hair you desire.</p>
                    </div>
                </div>
            </div>
            <div class="promo-card">
                <div class="card-inner">
                    <div class="front">
                        <h2>Anti-Aging Treatment</h2>
                        <span class="discount">25% OFF</span>
                        <p class="expiry">exp. Nov 30, 2024</p>
                    </div>
                    <div class="back">
                        <p>Rejuvenate your skin with our exclusive anti-aging treatments. Look youthful and fresh.</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="promo-description">Get up to 50% off on all treatments and products. Enhance your beauty with our exclusive offers!</p>
        <div class="button-container">
            <button class="promo-button" onclick="location.href='{{ url('/reservations') }}'">Claim The Discount</button>
            <button class="promo-button" onclick="location.href='{{ url('/treatments') }}'">Check Another Treatment</button>
        </div>
    </div>
@endsection
