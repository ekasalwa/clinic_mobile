<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TreatmentController extends Controller
{
    /*** Fungsi untuk membaca list treatment untuk page Treatment ***/
    public function treatmentPage(Request $request)
    {
        $treatments = Treatment::where('show_status', 1)
        ->orderBy('name')
        ->get();

        $perPage = 9; // Tentukan berapa banyak produk per halaman
        $page = $request->get('page', 1); // Dapatkan halaman saat ini, default ke 1
        $offset = ($page - 1) * $perPage; // Hitung offset
        $treatmentsOnPage = $treatments->slice($offset, $perPage); // Ambil produk untuk halaman ini

        // Kirim data ke view
        return view('homepage.display-treatment', [
            'treatments' => $treatmentsOnPage,
            'totalTreatments' => $treatments->count(),
            'currentPage' => $page,
            'perPage' => $perPage,
        ]);
    }
}
