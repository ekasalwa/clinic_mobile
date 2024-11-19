@extends('template.layouts')

@section('title', 'Membership Registration - Éternelle Beauté')

@section('content')
    <div class="form-container">
        <span class="membership-online">MEMBERSHIP REGISTRATION</span>
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

        <form action="{{ route('memberships.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <label for="name">Name</label>
                <input class="box" type="text" name="name" placeholder="Your Full Name..." value="{{ old('name') }}" required />
            </div>

            <div class="input-group">
                <label for="gender">Gender</label>
                <div class="gender-options" name="gender">
                    <label><input type="radio" name="gender" value="0" {{ old('gender') == '0' ? 'checked' : '' }} /> Female</label>
                    <label><input type="radio" name="gender" value="1" {{ old('gender') == '1' ? 'checked' : '' }} /> Male</label>
                    <label><input type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }} /> Other</label>
                </div>
            </div>

            <div class="input-group">
                <label for="no_phone">Phone</label>
                <input type="text" name="no_phone" placeholder="Your Phone Number..." value="{{ old('no_phone') }}" required />
            </div>

            <div class="input-group">
                <label for="address">Address</label>
                <input type="text" name="address" placeholder="Your Address..." value="{{ old('address') }}" required />
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Your Email Here..." value="{{ old('email') }}" required />
            </div>

            <div class="input-group">
                <label for="birthday">Date of Birth</label>
                <input type="date" name="birthday" placeholder="Select a date..." value="{{ old('birthday') }}" required />
                @error('birthday')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="button-container">
                <button type="submit" class="gold-button">Register</button>
            </div>
        </form>
    </div>
@endsection