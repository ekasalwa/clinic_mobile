@extends('template.layouts')

@section('title', 'Display Treatments - Éternelle Beauté')

@section('content')
    <div class="treatment-section">
        <h2>Our Treatment</h2>
        <div class="treatment-grid">
            @foreach ($treatments as $treatment)
                <div class="treatment-card">
                    <img src="{{ asset('storage/' . $treatment->image) }}" alt="{{ $treatment->name }}" loading="lazy" />
                    <p>{{ $treatment->name }}</p>
                    <p>Rp {{ number_format($treatment->selling_price, 2) }}</p>
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
@endsection
