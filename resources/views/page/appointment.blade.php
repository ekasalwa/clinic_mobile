@extends('template.layouts')

@section('title', 'Appointment Online - Éternelle Beauté')

@section('content')
    <div class="form-container">
        <span class="reservation-title">RESERVATION FORM</span>
        <div class="line-1"></div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            </div>
        @endif

        @if(session('error'))
            <div class="alert2 alert-danger">
                {{ session('error') }}
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            </div>
        @endif

        <form action="{{ route('reservations.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" placeholder="Your Full Name..." value="{{ old('name') }}" required />
            </div>
            
            <div class="input-group">
                <label for="age">Age</label>
                <input type="number" name="age" placeholder="How Old Are You?" value="{{ old('age') }}" required />
            </div>

            <div class="input-group">
                <label>Gender</label>
                <div class="gender-options">
                    <label><input type="radio" name="gender" value="0" {{ old('gender') == '0' ? 'checked' : '' }} /> Woman</label>
                    <label><input type="radio" name="gender" value="1" {{ old('gender') == '1' ? 'checked' : '' }} /> Man</label>
                    <label><input type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }} /> Other</label>
                </div>
            </div>
        
            <div class="input-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number" placeholder="Your Phone Number..." value="{{ old('phone_number') }}" required />
            </div>

            <div class="input-group">
                <label>Location</label>
                <div class="location-options">
                    <label><input type="radio" name="location" value="0" {{ old('location') == '0' ? 'checked' : '' }} /> Jogja</label>
                    <label><input type="radio" name="location" value="1" {{ old('location') == '1' ? 'checked' : '' }} /> Jakarta</label>
                    <label><input type="radio" name="location" value="2" {{ old('location') == '2' ? 'checked' : '' }} /> Bandung</label>
                    <label><input type="radio" name="location" value="3" {{ old('location') == '3' ? 'checked' : '' }} /> Sidoarjo</label>
                    <label><input type="radio" name="location" value="4" {{ old('location') == '4' ? 'checked' : '' }} /> Surakarta</label>
                    <label><input type="radio" name="location" value="5" {{ old('location') == '5' ? 'checked' : '' }} /> Surabaya</label>
                </div>
            </div>

            <div class="input-group">
                <label for="doctor">Choose Your Service</label>
                <div class="doctor-options">
                    <label><input type="radio" name="doctor" value="0" {{ old('gender') == '0' ? 'checked' : '' }} /> Beautician</label>
                    <label><input type="radio" name="doctor" value="1" {{ old('gender') == '1' ? 'checked' : '' }} /> Aesthetic Doctor</label>
                </div>
            </div>

            <div class="input-group">
                <label for="treatment_id">Choose Treatment</label>
                <input class="input-field" type="text" id="stateInput" placeholder="Select treatment:" readonly />
                <input type="hidden" name="treatment_id" id="treatmentId">
            </div>

            <div class="input-group">
                <label for="date">Reservation Date</label>
                <input type="date" name="date" placeholder="Select a date..." value="{{ old('birthday') }}" required />
            </div>

            <div class="button-container">
                <button type="submit" class="gold-button">Reserve</button>
            </div>
        </form>
    </div>

    <!-- Treatment Pop Up -->
    <div id="treatmentModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Select Treatment</h4>
                <button id="closeModal" class="modal-close">&times;</button>
            </div>
            <div class="treatment-list">
                @foreach($treatments as $treatment)
                    <div class="treatment-item" data-id="{{ $treatment->id }}" data-name="{{ $treatment->name }}">
                        <img src="{{ asset('storage/' . $treatment->image) }}" alt="{{ $treatment->name }}" />
                        <p>{{ $treatment->name }}</p>
                        <p>Rp {{ number_format($treatment->selling_price, 2) }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="{{ asset('js/treatment.js') }}" defer></script>
@endsection