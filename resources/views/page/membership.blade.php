@extends('template.layouts')

@section('content')
    <div class="form-container">
        <span class="membership-online">MEMBERSHIP REGISTRATION</span>
        <div class="line-1"></div>

        <form action="http://study-case-klinik.test/api/store-membership" method="POST" id="membershipForm">
            <div class="input-group">
                <label for="name">Name</label>
                <input class="box" type="text" name="name" id="name" placeholder="Your Full Name..." required />
            </div>

            <div class="input-group">
                <label>Gender</label>
                <div class="gender-options">
                    <label><input type="radio" name="gender" value="female" /> Female</label>
                    <label><input type="radio" name="gender" value="male" /> Male</label>
                    <label><input type="radio" name="gender" value="other" /> Other</label>
                </div>
            </div>

            <div class="input-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" placeholder="Your Phone Number..." required />
            </div>

            <div class="input-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" placeholder="Your Address..." required />
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Your Email Here..." required />
            </div>

            <div class="input-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" required />
            </div>

            <div class="button-container">
                <button type="submit" class="gold-button">Register</button>
            </div>
        </form>
    </div>
@endsection