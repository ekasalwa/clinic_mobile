<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eternelle Beauté</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
@include('homepage.partials.header')

    <div class="hero-section">
        <h1>ÉTERNELLE BEAUTÉ</h1>
        <p>Great experience with the best treatment</p>
        <div class="buttons">
            <button class="btn">Our Treatment</button>
            <button class="btn white">Our Location</button>
            <button class="btn">Our Product</button>
        </div>
    </div>

    <div class="intro-text">
        Menghadirkan <span class="highlight">Kecantikan Abadi</span> dengan Sentuhan <br>
        Profesionalisme dan Elegansi
    </div>

    <div class="treatment-cards">
        <div class="card">
            <img src="{{ asset('assets/images/download_1.jpeg') }}" alt="Deep Cleansing Facial">
            <p>Deep Cleansing Facial</p>
        </div>
        <div class="card">
            <img src="{{ asset('assets/images/download_171.jpeg') }}" alt="Laser Treatment">
            <p>Laser Treatment</p>
        </div>
        <div class="card">
            <img src="{{ asset('assets/images/download_241.jpeg') }}">
            <p>Detox Treatment</p>
        </div>
        <div class="card">
            <img src="{{ asset('assets/images/facial.jpg') }}" alt="Hydration Facial">
            <p>Hydration Facial</p>
        </div>
    </div>

    <div class="certifications">
        <div class="certification">BPOM RI CERTIFIED</div>
        <div class="certification">HALAL MUI CERTIFIED</div>
        <div class="certification">CRUELTY FREE</div>
        <div class="certification">MINIMAL INGREDIENTS</div>
    </div>

    <div class="product-section">
        <h2>Rekomendasi Produk</h2>
        <p>Pilihan Terbaik Untukmu</p>
        <div class="products">
            <div class="product"><img src="{{ asset('assets/images/download_removebg_preview_1.png') }}" alt="The Bath Box Barrier Fit" class="product"></div>
            <div class="product"><img src="{{ asset('assets/images/whats_app_image_20240719_at_1610008_f_3_b_47_d_7_removebg_preview_1.png') }}" alt="Whitelab Hydrating Sleeping Mask" class="product"></div>
            <div class="product"><img src="{{ asset('assets/images/whats_app_image_20240719_at_161039_dd_307_dcc_removebg_preview_1.png') }}" alt="Daviena Skincare Hand Body Dosting" class="product"></div>
            <div class="product"><img src="{{ asset('assets/images/whats_app_image_20240719_at_160921_b_692860_aremovebg_preview_1.png') }}" alt="Purbasari Lulur Mandi" class="product"></div>
        </div>
        <div class="action-buttons">
            <button class="btn">More Details</button>
            <button class="btn">Buy Now</button>
        </div>
    </div>
</body>
</html>
