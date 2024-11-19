<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TreatmentController extends Controller
{
    /*** Fungsi untuk membaca list treatment untuk page Treatment ***/
    public function index(Request $request)
    {
        $treatments = Treatment::where('show_status', 1)
        ->orderBy('name')
        ->get();

        $perPage = 8;
        $page = $request->get('page', 1);
        $offset = ($page - 1) * $perPage;
        $treatmentsOnPage = $treatments->slice($offset, $perPage);

        // Kirim data ke view
        return view('page.treatment', [
            'treatments' => $treatmentsOnPage,
            'totalTreatments' => $treatments->count(),
            'currentPage' => $page,
            'perPage' => $perPage,
        ]);
    }
}
