<div class="nav-popup collapse">
    <div class="nav-items">
        <a href="{{ url('/Eternelle-Beauty') }}">Home</a>
        <p>Access main features</p>
            
        <a href="#">Treatment</a>
        <p>Discover our best beauty treatments</p>
            
        <a href="#">Product</a>
        <p>Explore personalized beauty products</p>
            
        <a href="#">Promo</a>
        <p>Enjoy exclusive offers</p>
            
        <a href="#">About Us</a>
        <p>Learn more about us</p>
            
        <div class="btn-container">
            <button class="btn-appointment" onclick="location.href='{{ url('/appointment') }}'">APPOINTMENT</button>
            <button class="btn-register" onclick="location.href='{{ url('/membership') }}'">REGISTER</button>
        </div>
    </div>
    <div class="nav-footer">
        <p>ÉTERN<span class="highlight2">E</span>LLE B<span class="highlight2">E</span>AUTÉ</p>
    </div>
</div>