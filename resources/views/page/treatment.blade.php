@extends('template.layouts')

@section('title', 'Display Treatments - Éternelle Beauté')

@section('content')
    <div class="treatment-section">
        <h2>Our Treatment</h2>
        <div class="treatment-grid">
            @foreach ($treatments as $treatment)
            <div class="treatment-wrapper" data-id="{{ $treatment->id }}">
                <div class="treatment-card">
                    <img src="{{ asset('storage/' . $treatment->image) }}" alt="{{ $treatment->name }}" loading="lazy" />
                    <p class="treatment-name">{{ $treatment->name }}</p>
                    <p class="treatment-price">Rp {{ number_format($treatment->selling_price, 2) }}</p>
                </div>
                <div class="treatment-description">
                    <p>{{ $treatment->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination">
            @for ($i = 1; $i <= ceil($totalTreatments / $perPage); $i++)
            <span>
                <a href="{{ url()->current() }}?page={{ $i }}" class="{{ $currentPage == $i ? 'active' : '' }}">
                    {{ $i }}
                </a>
            </span>
            @endfor
        </div>
    </div>

    <script src="{{ asset('js/display.js') }}" defer></script>
@endsection
