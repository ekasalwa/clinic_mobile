@extends('template.layouts')

@section('title', 'Éternelle Beauté')

@section('content')
    <!----- BANNER ----->
    <div class="hero-section">
        <h1>Étern<span class="highlight">e</span>lle B<span class="highlight">e</span>auté</h1>
        <p>Great experience with the best treatment</p>
        <div class="buttons">
            <button class="btn-choco" onclick="location.href='{{ url('/treatments') }}'">Treatment</button>
            <button class="btn-white" onclick="location.href='{{ url('/about-us') }}#location'">Location</button>
            <button class="btn-choco" onclick="location.href='{{ url('/products') }}'">Product</button>
        </div>
    </div>

    <!----- TEXT ----->
    <div class="intro-text">
        Presenting <span class="highlight2">Eternal Beauty</span> with a Touch <br>
        of Professionalism, Aesthetics and Elegance
    </div>

    <!----- TREATMENT SIDE ----->
    <div class="treatment-cards">
        <div class="card">
            <img src="../assets/images/download_1.jpeg" alt="Deep Cleansing Facial" loading="lazy">
            <div class="card-content">
                <p>Deep Cleansing</p><br>
            </div>
        </div>
        <div class="card">
            <img src="../assets/images/download_171.jpeg" alt="Laser Treatment" loading="lazy">
            <div class="card-content">
                <p>Laser Treatment</p><br>
            </div>
        </div>
        <div class="card">
            <img src="../assets/images/download_241.jpeg" alt="Detox Treatment" loading="lazy">
            <div class="card-content">
                <p>Detox Treatment</p><br>
            </div>
        </div>
        <div class="card">
            <img src="../assets/images/facial.jpg" alt="Hydration Facial" loading="lazy">
            <div class="card-content">
                <p>Hydration Facial</p><br>
            </div>
        </div>
    </div>

    <hr class="divider">

    <!----- CERTIFICATIONS / TESTING ----->
    <div class="certifications">
        <div class="certification">
            <img src="../assets/images/halal.png" alt="HALAL MUI" class="certification-logo" loading="lazy">
            HALAL MUI CERTIFIED
        </div>
        <div class="certification">
            <img src="../assets/images/bpom.png" alt="BPOM RI" class="certification-logo" loading="lazy">
            BPOM RI CERTIFIED
        </div>
        <div class="certification">
            <img src="../assets/images/hewan.png" alt="Cruelty Free" class="certification-logo" loading="lazy">
            CRUELTY FREE
        </div>
        <div class="certification">
            <img src="../assets/images/bahan.png" alt="Minimal Ingredients" class="certification-logo" loading="lazy">
            MINIMAL INGREDIENTS
        </div>
        <div class="certification">
            <img src="../assets/images/bestseller (2).png" alt="Bst Seller Product" class="certification-logo"
                loading="lazy">
            BEST PRODUCT
        </div>
        <div class="certification">
            <img src="../assets/images/cht.png" alt="Work On All Skin" class="certification-logo" loading="lazy">
            WORK ON ALL SKIN
        </div>
    </div>

    <hr class="divider">

    <!----- PRODUCT SIDE ----->
    <div class="product-section">
        <p>PRODUCT RECOMMENDATIONS</p><br>
        <h2>BEST CHOICE FOR YOU</h2>
        <div class="products">
            <div class="product">
                <div class="product-bg">
                    <img src="../assets/images/download_removebg_preview_1.png" alt="The Bath Box Barrier Fit"
                        loading="lazy">
                </div>
            </div>
            <div class="product">
                <div class="product-bg">
                    <img src="../assets/images/whats_app_image_20240719_at_160921_b_692860_aremovebg_preview_1.png"
                        alt="Purbasari Lulur Mandi" loading="lazy">
                </div>
            </div>
            <div class="product">
                <div class="product-bg">
                    <img src="../assets/images/whats_app_image_20240719_at_161039_dd_307_dcc_removebg_preview_1.png"
                        alt="Daviena Skincare Hand Body Dosting" loading="lazy">
                </div>
            </div>
        </div>
        <div class="action-buttons">
            <button class="btn-details" onclick="location.href='{{ url('/products') }}'">More Details</button>
            <button class="btn-buy" onclick="location.href='{{ url('/reservations') }}'">Buy Now</button>
        </div>
    </div>

    <!----- DOCTOR SIDE ----->
    <div class="doctor">
        <div class="doctor-card">
            <div class="doctor-image">
                <img src="../assets/images/fu_1-removebg (1).png" alt="Dr. Reza Graha" loading="lazy">
            </div>
            <div class="doctor-info">
                <h2>Dr. Reza Graha, Sp.KK</h2>
                <p>(Skin and Venereology Specialist)</p>
            </div>
        </div>

        <div class="doctor-card">
            <div class="doctor-image">
                <img src="../assets/images/fu_11-removebg.png" alt="Dr. Maya Kusuma" loading="lazy">
            </div>
            <div class="doctor-info">
                <h2>Dr. Alina Pratiwi, M.B.B.Ch.</h2>
                <p>(Aesthetic Doctor)</p>
            </div>
        </div>
    </div>

    <!----- NEWS SIDE ----->
    <div class="news-container">
        <h2>Update and Latest News</h2>
        <div class="line"></div>
        <div class="news">
            <div class="news-item">
                <h3>New Service Just Launch</h3>
                <p>We will introduces a new facial treatments with the latest and newest technology.</p>
                <button onclick="location.href='{{ url('/blank') }}'">Learn More</button>
            </div>
            <div class="news-item">
                <h3>Expansion of Clinic Branches</h3>
                <p>Today, we officially opens the 6th branch in the Bandung. Check the discount Now!</p>
                <button onclick="location.href='{{ url('/blank') }}'">Learn More</button>
            </div>
        </div>
    </div>

    <!----- TESTI SIDE ----->
    <div class="testi-container">
        <h2>What Our Clients Say</h2>
        <div class="line2"></div>
        <div class="testimonials">
            <div class="testimonial-slider">
                <div class="testimonial">
                    <h3>Emily Johnson</h3>
                    <p class="service">Brightening Facial</p>
                    <p class="rating">★★★★★</p>
                    <p class="text">"The Brightening Facial made a huge difference in my skin!
                        My complexion looks so much more radiant and even-toned..."</p>
                </div>
                <div class="testimonial">
                    <h3>Sarah Williams</h3>
                    <p class="service">Dark Circle Treatment</p>
                    <p class="rating">★★★★★</p>
                    <p class="text">"I've struggled with dark circles for years, but after trying the Dark Circle
                        Treatment, they've
                        significantly reduced..."</p>
                </div>
                <div class="testimonial">
                    <h3>Olivia Carter</h3>
                    <p class="service">Deep Cleansing Facial</p>
                    <p class="rating">★★★★★</p>
                    <p class="text">"The Deep Cleansing Facial was exactly what my skin needed! It removed all the
                        impurities and left my skin feeling
                        smooth...."</p>
                </div>
                <div class="testimonial">
                    <h3>John Michael Doe</h3>
                    <p class="service">Anti-Dandruff Treatment</p>
                    <p class="rating">★★★★★</p>
                    <p class="text">"I used to deal with constant dandruff, but the Anti-Dandruff Treatment changed
                        that! My scalp feels so much healthier,...."</p>
                </div>
                <div class="testimonial">
                    <h3>Emily Johnson</h3>
                    <p class="service">Brightening Facial</p>
                    <p class="rating">★★★★★</p>
                    <p class="text">"The Brightening Facial made a huge difference in my skin!
                        My complexion looks so much more radiant and even-toned..."</p>
                </div>
                <div class="testimonial">
                    <h3>Sarah Williams</h3>
                    <p class="service">Dark Circle Treatment</p>
                    <p class="rating">★★★★★</p>
                    <p class="text">"I've struggled with dark circles for years, but after trying the Dark Circle
                        Treatment, they've
                        significantly reduced..."</p>
                </div>
                <div class="testimonial">
                    <h3>Olivia Carter</h3>
                    <p class="service">Deep Cleansing Facial</p>
                    <p class="rating">★★★★★</p>
                    <p class="text">"The Deep Cleansing Facial was exactly what my skin needed! It removed all the
                        impurities and left my skin feeling
                        smooth...."</p>
                </div>
                <div class="testimonial">
                    <h3>John Michael Doe</h3>
                    <p class="service">Anti-Dandruff Treatment</p>
                    <p class="rating">★★★★★</p>
                    <p class="text">"I used to deal with constant dandruff, but the Anti-Dandruff Treatment changed
                        that! My scalp feels so much healthier,...."</p>
                </div>
            </div>
        </div>
    </div>
@endsection