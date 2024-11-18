@extends('template.layouts')

@section('content')
    <div class="form-container">
        <span class="reservation-title">RESERVATION FORM</span>
        <div class="line-1"></div>

        <form method="POST">
            <div class="input-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Your Full Name..." required />
            </div>

            <div class="input-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" placeholder="Your Phone Number..." required />
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
                <label for="age">Age</label>
                <input type="number" id="age" name="age" placeholder="How Old Are You?" required />
            </div>

            <div class="input-group">
                <label for="treatment">Choose Treatment</label>
                <input type="text" id="treatment" name="treatment" placeholder="Select Treatment" required />
            </div>

            <div class="input-group">
                <label>Location</label>
                <div class="location-options">
                    <label><input type="radio" name="location" value="0" /> Jogja</label>
                    <label><input type="radio" name="location" value="1" /> Jakarta</label>
                    <label><input type="radio" name="location" value="2" /> Bandung</label>
                    <label><input type="radio" name="location" value="3" /> Sidoarjo</label>
                    <label><input type="radio" name="location" value="4" /> Surakarta</label>
                    <label><input type="radio" name="location" value="5" /> Surabaya</label>
                </div>
            </div>

            <div class="input-group">
                <label for="service">Choose Your Service</label>
                <input type="text" id="service" name="service" placeholder="Select Services" required />
            </div>

            <div class="input-group">
                <label for="date">Reservation Date</label>
                <input type="date" id="date" name="date" required />
            </div>

            <div class="button-container">
                <button type="submit" class="gold-button">Reserve</button>
            </div>
        </form>
    </div>
@endsection