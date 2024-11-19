<div class="nav-popup collapse">
    <div class="nav-items">
        <a href="{{ url('/') }}">Home</a>
        <p>Access main features</p>
            
        <a href="{{ url('/treatments') }}">Treatment</a>
        <p>Discover our best beauty treatments</p>
            
        <a href="{{ url('products') }}">Product</a>
        <p>Explore personalized beauty products</p>
            
        <a href="{{ ('/promo') }}">Promo</a>
        <p>Enjoy exclusive offers</p>
            
        <a href="#">About Us</a>
        <p>Learn more about us</p>
            
        <div class="btn-container">
            <button class="btn-appointment" onclick="location.href='{{ url('/reservations') }}'">APPOINTMENT</button>
            <button class="btn-register" onclick="location.href='{{ url('/memberships') }}'">REGISTER</button>
        </div>
    </div>
    <div class="nav-footer">
        <p>ÉTERN<span class="highlight2">E</span>LLE B<span class="highlight2">E</span>AUTÉ</p>
    </div>
</div>